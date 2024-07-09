<?php
//===== Withdraw & Deposit menu regestration in the admin dashboard.
function register_transaction_post_type() {
    $labels = array(
        'name'               => 'Transactions',
        'singular_name'      => 'Transaction',
        'menu_name'          => 'Transactions',
        'name_admin_bar'     => 'Transaction',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Transaction',
        'new_item'           => 'New Transaction',
        'edit_item'          => 'Edit Transaction',
        'view_item'          => 'View Transaction',
        'all_items'          => 'All Transactions',
        'search_items'       => 'Search Transactions',
        'parent_item_colon'  => 'Parent Transactions:',
        'not_found'          => 'No transactions found.',
        'not_found_in_trash' => 'No transactions found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'transaction' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => "dashicons-money-alt",
        'supports'           => array( 'title', 'editor', 'author' ),
        'show_in_rest'       => true
    );

    register_post_type( 'transaction', $args );
}
add_action( 'init', 'register_transaction_post_type' );


// Add submenus
function add_transaction_submenus() {
    add_submenu_page(
        'edit.php?post_type=transaction',
        'Deposit Requests',
        'Deposit Requests',
        'manage_options',
        'deposit-requests',
        'display_deposit_requests'
    );

    add_submenu_page(
        'edit.php?post_type=transaction',
        'Withdraw Requests',
        'Withdraw Requests',
        'manage_options',
        'withdraw-requests',
        'display_withdraw_requests'
    );
}
add_action( 'admin_menu', 'add_transaction_submenus' );


// Display Deposit request
function display_deposit_requests() {
    global $wpdb;
    $requests_table = $wpdb->prefix . 'transaction_requests';

    $deposit_requests = $wpdb->get_results("SELECT * FROM $requests_table WHERE request_type = 'deposit' AND status = 'pending' ORDER BY request_date DESC");

    echo '<div class="wrap">';
    echo '<h1>Deposit Requests</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th style="width:30px;">ID</th><th>User Email</th><th style="width:100px;">User ID</th><th>Amount</th><th style="width:70px">Status</th><th>Action</th><th>Time</th></tr></thead>';
    echo '<tbody>';
    foreach ($deposit_requests as $request) {
        echo '<tr>';
        echo '<td style="width:30px;">' . $request->id . '</td>';
        echo '<td>' . $request->email . '</td>';
        echo '<td style="width:100px;">' . $request->user_id . '</td>';
        echo '<td>' . $request->amount . '</td>';
        echo '<td style="width:70px">' . $request->status . '</td>';
        echo '<td><a href="' . admin_url('admin-post.php?action=approve_request&id=' . $request->id) . '">Approve</a> | <a href="' . admin_url('admin-post.php?action=reject_request&id=' . $request->id) . '">Reject</a></td>';
        echo '<td style="width:50px;">' . $request->request_date . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
    echo '</div>';
}


// Display Withdraw request
function display_withdraw_requests() {
    global $wpdb;
    $requests_table = $wpdb->prefix . 'transaction_requests';

    $withdraw_requests = $wpdb->get_results("SELECT * FROM $requests_table WHERE request_type = 'withdraw' AND status = 'pending' ORDER BY request_date DESC");

    echo '<div class="wrap">';
    echo '<h1>Withdraw Requests</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>ID</th><th>User ID</th><th>Amount</th><th>Status</th><th>Action</th></tr></thead>';
    echo '<tbody>';
    foreach ($withdraw_requests as $request) {
        echo '<tr>';
        echo '<td>' . $request->id . '</td>';
        echo '<td>' . $request->user_id . '</td>';
        echo '<td>' . $request->amount . '</td>';
        echo '<td>' . $request->status . '</td>';
        echo '<td><a href="' . admin_url('admin-post.php?action=approve_request&id=' . $request->id) . '">Approve</a> | <a href="' . admin_url('admin-post.php?action=reject_request&id=' . $request->id) . '">Reject</a></td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
    echo '</div>';
}

// Hanlde approve and rejection request
function approve_request() {
    global $wpdb;
    $requests_table = $wpdb->prefix . 'transaction_requests';
    $transactions_table = $wpdb->prefix . 'user_transactions';

    $request_id = intval($_GET['id']);
    $request = $wpdb->get_row($wpdb->prepare("SELECT * FROM $requests_table WHERE id = %d", $request_id));

    if ($request && $request->status == 'pending') {
        // Update request status
        $wpdb->update($requests_table, array('status' => 'approved'), array('id' => $request_id));

        // Get user current balance
        $current_balance = get_user_current_balance($request->user_id);
        
        if ($request->request_type == 'deposit') {
            $new_balance = $current_balance + $request->amount;
        } elseif ($request->request_type == 'withdraw') {
            $new_balance = $current_balance - $request->amount;
        }

        // Add transaction
        $wpdb->insert(
            $transactions_table,
            array(
                'user_id' => $request->user_id,
                'transaction_type' => $request->request_type,
                'amount' => $request->amount,
                'balance' => $new_balance
            )
        );
    }

    wp_redirect(admin_url('edit.php?post_type=transaction&page=' . ($request->request_type == 'deposit' ? 'deposit-requests' : 'withdraw-requests')));
    exit;
}

function reject_request() {
    global $wpdb;
    $requests_table = $wpdb->prefix . 'transaction_requests';

    $request_id = intval($_GET['id']);
    $wpdb->update($requests_table, array('status' => 'rejected'), array('id' => $request_id));

    $request = $wpdb->get_row($wpdb->prepare("SELECT * FROM $requests_table WHERE id = %d", $request_id));

    wp_redirect(admin_url('edit.php?post_type=transaction&page=' . ($request->request_type == 'deposit' ? 'deposit-requests' : 'withdraw-requests')));
    exit;
}

add_action('admin_post_approve_request', 'approve_request');
add_action('admin_post_reject_request', 'reject_request');


// Helper function
function get_user_current_balance($user_id) {
    global $wpdb;
    $transactions_table = $wpdb->prefix . 'user_transactions';

    $result = $wpdb->get_var($wpdb->prepare(
        "SELECT balance FROM $transactions_table WHERE user_id = %d ORDER BY transaction_date DESC LIMIT 1",
        $user_id
    ));

    return $result !== null ? $result : 0.00;
}

// ============== Ensure deposit table exist to create request.
function ensure_deposit_table_exist() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    // Table for storing deposit requests
    $requests_table = $wpdb->prefix . 'deposit_requests';

 // SQL query to drop the table if it exists
// $sql = "DROP TABLE IF EXISTS $requests_table";
// $wpdb->query($sql);
// exit;

// ===== id, user_id, email, amount, status, wallet, created_at ======  
    $requests_sql = "CREATE TABLE IF NOT EXISTS $requests_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        user_id mediumint(9) NOT NULL,
        email varchar(50) NOT NULL,
        amount decimal(10, 2) NOT NULL,
        status varchar(20) NOT NULL DEFAULT 'pending',
        wallet varchar(70) NOT NULL,
        request_date datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($requests_sql);
}



// ======== Hanlde deposit request ======
function handle_deposit_request() {
    // Redirect if user not loggedin
    if (!is_user_logged_in()) {
        wp_redirect(home_url('/login'));
        exit;
    };

    if (!isset($_POST['pay_amount']) || !is_numeric($_POST['pay_amount'])) {
        wp_redirect(home_url('/status?error=Invalid deposit amount'));
        exit;
    };

    ensure_deposit_table_exist();

    $deposit_amount = sanitize_text_field($_POST['pay_amount']);
    $wallet_number = sanitize_text_field($_POST['wallet']);

    $current_user = wp_get_current_user();
    $user_id = $current_user->ID;
    $user_email = $current_user->user_email;

    // insert deposit data 
    // wp_redirect(home_url("/status?wallet=$wallet_number/$deposit_amount/$user_id/$user_email"));
    // exit;
    
    global $wpdb;
     $requests_table = $wpdb->prefix . 'deposit_requests';
     $insert_result = $wpdb->insert(
        $requests_table,
        array(
            'user_id'       => $user_id,
            'email'         =>$user_email,
            'amount'        => $deposit_amount,
            'status'        => 'pending',
            'wallet'        => $wallet_number
        ),
       array(
        "%d",
        "%s",
        "%f",
        "%s",
        "%s"
       )
    );

    if ($insert_result === false) {
        $error_message = $wpdb->last_error;
        wp_redirect(home_url('/deposit?error=' . urlencode($error_message)));
    } else {
        wp_redirect(home_url('/deposit?success=Deposit payment request submited it will approved manually by admin. Thank you.'));
    };
    exit;
}

add_action('admin_post_nopriv_handle_deposit_request', 'handle_deposit_request');
add_action('admin_post_handle_deposit_request', 'handle_deposit_request');


// Ensure withdraw table exist to create request.
function ensure_withdraw_table_exist() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    // Table for storing withdraw requests
    $requests_table = $wpdb->prefix . 'withdraw_requests';

    $requests_sql = "CREATE TABLE IF NOT EXISTS $requests_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        user_id mediumint(9) NOT NULL,
        email varchar(255) NOT NULL,
        amount decimal(10, 2) NOT NULL,
        status varchar(20) NOT NULL DEFAULT 'pending',
        wallet varchar(255) NOT NULL,
        request_date datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($requests_sql);
}



// ========== Hanlde withdraw request 
function handle_withdraw_request() {
    // Redirect if user not logged in
    if (!is_user_logged_in()) {
        wp_redirect(home_url('/login'));
        exit;
    }

    if (!isset($_POST['withdraw-amount']) || !is_numeric($_POST['withdraw-amount'])) {
        wp_redirect(home_url('/withdraw?error=Invalid withdraw amount'));
        exit;
    }

    if (!isset($_POST['wallet'])) {
        wp_redirect(home_url('/withdraw?error=Invalid wallet info'));
        exit;
    }

    ensure_withdraw_table_exist();

    $withdraw_amount = sanitize_text_field($_POST['withdraw-amount']);
    $wallet = sanitize_text_field($_POST['wallet']);

    $current_user = wp_get_current_user();
    $user_id = $current_user->ID;
    $user_email = $current_user->user_email;

    // insert withdraw data
    global $wpdb;
    $requests_table = $wpdb->prefix . 'withdraw_requests';
    $insert_result = $wpdb->insert(
        $requests_table,
        array(
            'user_id'       => $user_id,
            'email'         => $user_email,
            'amount'        => $withdraw_amount,
            'status'        => 'pending',
            'wallet'        => $wallet
        ),
        array(
            '%d', // user_id
            '%s', // email
            '%f', // amount
            '%s', // status
            '%s'  // wallet
        )
    );

    if ($insert_result === false) {
        $error_message = $wpdb->last_error;
        error_log("Database insert error: $error_message");
        wp_redirect(home_url('/withdraw?error=' . urlencode($error_message)));
    } else {
        wp_redirect(home_url('/withdraw?success=Withdraw request submitted. It will be approved manually by admin. Thank you.'));
    }
    exit;
}


add_action('admin_post_nopriv_handle_withdraw_request', 'handle_withdraw_request');
add_action('admin_post_handle_withdraw_request', 'handle_withdraw_request');

function create_demo_requests() {
    global $wpdb;

    ensure_tables_exist(); // Ensure the table exists

    $requests_table = $wpdb->prefix . 'transaction_requests';

    // Get user IDs for the demo users
    $demo_user_1 = get_user_by('login', 'demo_user_1');
    $demo_user_2 = get_user_by('login', 'demo_user_2');

    if ($demo_user_1 && $demo_user_2) {
        // Create demo deposit request for demo_user_1
        $wpdb->insert(
            $requests_table,
            array(
                'user_id' => 3,
                'request_type' => 'deposit',
                'amount' => 100.00,
                'status' => 'pending'
            )
        );

        // Create demo withdraw request for demo_user_2
        $wpdb->insert(
            $requests_table,
            array(
                'user_id' => "2",
                'request_type' => 'withdraw',
                'amount' => 50.00,
                'status' => 'pending'
            )
        );
    }
}

// Call the function when the plugin is activated
register_activation_hook(__FILE__, 'create_demo_requests');

// Alternatively, you can create an admin action to trigger this manually
function create_demo_requests_action() {
    create_demo_requests();
    wp_redirect(admin_url('edit.php?post_type=transaction&page=deposit-requests'));
    exit;
}
add_action('admin_post_create_demo_requests', 'create_demo_requests_action');

// To trigger the demo request 
function add_demo_requests_menu() {
    add_submenu_page(
        'edit.php?post_type=transaction',
        'Create Demo Requests',
        'Create Demo Requests',
        'manage_options',
        'create-demo-requests',
        'create_demo_requests_action_page'
    );
}
add_action('admin_menu', 'add_demo_requests_menu');

function create_demo_requests_action_page() {
    echo '<div class="wrap">';
    echo '<h1>Create Demo Requests</h1>';
    echo '<p>Click the button below to create demo deposit and withdraw requests.</p>';
    echo '<form method="post" action="' . admin_url('admin-post.php') . '">';
    echo '<input type="hidden" name="action" value="create_demo_requests">';
    echo '<input type="submit" value="Create Demo Requests" class="button button-primary">';
    echo '</form>';
    echo '</div>';
}

// To ensure the custom table exist
function create_wallet_tables() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    // Table for storing transactions
    $transactions_table = $wpdb->prefix . 'user_transactions';
    $transactions_sql = "CREATE TABLE $transactions_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        user_id mediumint(9) NOT NULL,
        transaction_type varchar(20) NOT NULL,
        amount decimal(10, 2) NOT NULL,
        balance decimal(10, 2) NOT NULL,
        transaction_date datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    // Table for storing transaction requests
    $requests_table = $wpdb->prefix . 'transaction_requests';
    $requests_sql = "CREATE TABLE $requests_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        user_id mediumint(9) NOT NULL,
        request_type varchar(20) NOT NULL,
        amount decimal(10, 2) NOT NULL,
        status varchar(20) NOT NULL DEFAULT 'pending',
        request_date datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($transactions_sql);
    dbDelta($requests_sql);
}

register_activation_hook(__FILE__, 'create_wallet_tables');




// ======= CREATE DEMO USER
function create_demo_users() {
    // Check if the users already exist
    if (!username_exists('demo_user_1') && !email_exists('demo_user_1@example.com')) {
        // Create the first demo user
        wp_create_user('demo_user_1', 'password123', 'demo_user_1@example.com');
    }

    if (!username_exists('demo_user_2') && !email_exists('demo_user_2@example.com')) {
        // Create the second demo user
        wp_create_user('demo_user_2', 'password123', 'demo_user_2@example.com');
    }
}

// Call the function when the plugin is activated
register_activation_hook(__FILE__, 'create_demo_users');

// Alternatively, you can create an admin action to trigger this manually
function create_demo_users_action() {
    create_demo_users();
    wp_redirect(admin_url('users.php'));
    exit;
}
add_action('admin_post_create_demo_users', 'create_demo_users_action');



// CREATE ADMIN MENU TO TRIGGER THE CREATE DEMO USER FUNCTION
function add_demo_users_menu() {
    add_users_page(
        'Create Demo Users',
        'Create Demo Users',
        'manage_options',
        'create-demo-users',
        'create_demo_users_action_page'
    );
}
add_action('admin_menu', 'add_demo_users_menu');

function create_demo_users_action_page() {
    echo '<div class="wrap">';
    echo '<h1>Create Demo Users</h1>';
    echo '<p>Click the button below to create demo users for testing.</p>';
    echo '<form method="post" action="' . admin_url('admin-post.php') . '">';
    echo '<input type="hidden" name="action" value="create_demo_users">';
    echo '<input type="submit" value="Create Demo Users" class="button button-primary">';
    echo '</form>';
    echo '</div>';
}

?>