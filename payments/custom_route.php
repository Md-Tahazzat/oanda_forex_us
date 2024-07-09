<?php
//===== Login and Register functionality ========

function check_username_exists($username) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'user_transaction';

    // Prepare the query
    $query = $wpdb->prepare(
        "SELECT COUNT(*) FROM $table_name WHERE user_name = %s",
        $username
    );

    // Execute the query and get the result
    $count = $wpdb->get_var($query);

    return ($count > 0);
}

function check_email_exists($email) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'user_transaction';

    // Prepare the query
    $query = $wpdb->prepare(
        "SELECT COUNT(*) FROM $table_name WHERE email = %s",
        $email
    );

    // Execute the query and get the result
    $count = $wpdb->get_var($query);

    return ($count > 0);
}

function validation_routes(){
    register_rest_route( 'authentication/v1', '/register', array(
        'methods'  => 'POST',
        'callback' => 'oandaforex_us_register_user',
    ) );
    register_rest_route( 'authentication/v1', '/login', array(
        'methods'  => 'POST',
        'callback' => 'oandaforex_us_login_user',
    ) );
};

// create user transactio table 
function create_user_transaction_table() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'user_transaction';

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        first_name VARCHAR(150) NOT NULL,
        last_name VARCHAR(150) NOT NULL,
        email VARCHAR(255) NOT NULL,
        user_name VARCHAR(150) NOT NULL,
        sponsor VARCHAR(255) DEFAULT NULL,
        country VARCHAR(200) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        total_sponsor INT DEFAULT 0,
        roi_income  DECIMAL(10, 2) DEFAULT 0,
        generation_income  DECIMAL(10, 2) DEFAULT 0,
        rank_income  DECIMAL(10, 2) DEFAULT 0,
        total_deposit  DECIMAL(10, 2) DEFAULT 0,
        total_withdraw  DECIMAL(10, 2) DEFAULT 0,
        all_transaction  DECIMAL(10, 2) DEFAULT 0,
        sponsor_income  DECIMAL(10, 2) DEFAULT 0,
        welcome_bonus  DECIMAL(10, 2) DEFAULT 0,
        rewards  DECIMAL(10, 2) DEFAULT 0,
        rank  INT DEFAULT 0,
        wallet VARCHAR(255) DEFAULT NULL,
        balance DECIMAL(10, 2) DEFAULT 0,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
       
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// Hook the function to run when the plugin is activated or theme setup
// add_action('after_setup_theme', 'create_user_transaction_table');


function oandaforex_us_register_new_user_account($user_id,$first_name,$last_name,$email,$user_name,$sponsor,$country,$phone){
   $created_table = create_user_transaction_table();

    global $wpdb;
    $table_name = $wpdb->prefix . 'user_transaction';

   // create new account
   $inserted =  $wpdb->insert(
    $table_name,
    array(
        'user_id'    => $user_id,
        'first_name' => $first_name,
        'last_name'  => $last_name,
        'email'      => $email,
        'user_name'  => $user_name,
        'sponsor'    => $sponsor,
        'country'    => $country,
        'phone'      => $phone,
    ),
    array(
        '%d', // user_id
        '%s', // first_name
        '%s', // last_name
        '%s', // email
        '%s', // user_name
        '%s', // sponsor
        '%s', // country
        '%s', // phone
    )
);

// Check for errors
if ($inserted ==false) {
    return $wpdb->last_error;
    exit;
};
return 'inserted data and created account';
exit;
}

//     global $wpdb;
//     $charset_collate = $wpdb->get_charset_collate();
//     $table_name = $wpdb->prefix . 'user_transaction';

//     $sql = "DROP TABLE IF EXISTS $table_name;";
// $wpdb->query($sql);
// exit;
function oandaforex_us_register_user($request){

    $request_data = $request->get_json_params();
    
  // Assuming $request_data is an array containing your input data

$first_name = sanitize_text_field($request_data['firstName']);
$last_name = sanitize_text_field($request_data['lastName']);
$email = sanitize_email(strtolower($request_data['email'])); 
$user_name = sanitize_text_field($request_data['userName']);
$sponsor = sanitize_text_field($request_data['sponsor']);
$country = sanitize_text_field($request_data['country']);
$phone = sanitize_text_field($request_data['phone']);
$password = sanitize_text_field($request_data['password']);


  $exist = email_exists($email);
  if($exist){
    return rest_ensure_response(array(
        'status'=>"fail",
        "message"=>"Email already exists. Please use a different email address."
    ));
    exit;
};

$username_exist = username_exists($user_name);
if($username_exist){
  return rest_ensure_response(array(
      'status'=>"fail",
      "message"=>"Username already exists. Please choose a different one."
  ));
  exit;
};

    // Prepare user data
    $userdata = array(
        'user_login' => $user_name,
        'user_pass' => $password,
        'user_email' => $email,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'role' => 'subscriber',
    );

   // Insert the user
   $user_id = wp_insert_user($userdata);

    // Check for errors
    if (is_wp_error($user_id)) {
        return rest_ensure_response(array(
            'status'=>"fail",
            "message"=>$user_id 
        ));
    };

    // create user transaction account
    $transaction_acount_message = oandaforex_us_register_new_user_account($user_id,$first_name,$last_name,$email,$user_name,$sponsor,$country,$phone);


    return rest_ensure_response(array(
        'status'=>"success",
        "message"=>"User register successfull",
        'user_id'=> $user_id,
        "transaction_account_message" => $transaction_acount_message
    ));
    exit;
};


function oandaforex_us_login_user($request){

    $request_data = $request->get_json_params();
    $password =  $request_data['password'];
    $email =  $request_data['email'];
    $remember =  $request_data['remember'];

    // return rest_ensure_response(array(
    //     'email' => $email,
    //     'password' => $password,
    //     'remember' => $remember,
    // ));
    // exit;

    $creds = array();
    $creds['user_login'] = sanitize_user($email);
    $creds['user_password'] = sanitize_text_field($password);
    $creds['remember'] = sanitize_text_field($remember);

    $user = wp_signon($creds, false);
    if (is_wp_error($user)) {
        return rest_ensure_response(array(
            'status'=>"fail",
            "message"=>"Invalid email address or password. Please try again."
        ));
        exit;
    } else {
        return rest_ensure_response(array(
            'status'=>"success",
            "message"=>"successfully login"
        ));
        exit;
    }
};

// initialize the res API.
add_action( 'rest_api_init', 'validation_routes' );