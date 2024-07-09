<?php
//===== Withdraw & Deposit menu regestration in the admin dashboard.\



// Registration function
function handle_custom_user_registration() {
	// Debugging: Check if nonce is set
    if (!isset($_POST['custom_user_registration_nonce'])) {
        error_log('Nonce not set.');
    }

    // Debugging: Check if nonce verification fails
    if (!wp_verify_nonce($_POST['custom_user_registration_nonce'], 'custom_user_registration')) {
        error_log('Nonce verification failed.');
    }
	
    // Verify nonce
    if (!isset($_POST['custom_user_registration_nonce']) || !wp_verify_nonce($_POST['custom_user_registration_nonce'], 'custom_user_registration')) {
        wp_redirect(home_url('/register/?register=failed&reason=invalid_nonce'));
        exit;
    }

    // Validate required fields
    if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password_confirmation'])) {
        wp_redirect(home_url('/register/?register=failed&reason=missing'));
        exit;
    }

    $username = sanitize_user($_POST['username']);
    $email = sanitize_email($_POST['email']);
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];

    // Check if the passwords match
    if ($password !== $password_confirmation) {
        wp_redirect(home_url('/register/?register=failed&reason=password_mismatch'));
        exit;
    }

    // Check if the username already exists
    if (username_exists($username)) {
        wp_redirect(home_url('/register/?register=failed&reason=username'));
        exit;
    }

    // Check if the email already exists
    if (email_exists($email)) {
        wp_redirect(home_url('/register/?register=failed&reason=email'));
        exit;
    }

    // Create the new user
    $user_id = wp_create_user($username, $password, $email);
    
    if (is_wp_error($user_id)) {
        wp_redirect(home_url('/register/?register=failed&reason=unknown'));
        exit;
    }

    // Update user meta
    update_user_meta($user_id, 'first_name', sanitize_text_field($_POST['first_name']));
    update_user_meta($user_id, 'last_name', sanitize_text_field($_POST['last_name']));
    update_user_meta($user_id, 'phone', sanitize_text_field($_POST['phone']));
    update_user_meta($user_id, 'country', sanitize_text_field($_POST['country']));
    update_user_meta($user_id, 'sponsor', sanitize_text_field($_POST['sponsor']));

    // Optionally, you can log the user in automatically after registration
    wp_set_current_user($user_id);
    wp_set_auth_cookie($user_id);
    
    wp_redirect(home_url('/register/?register=success'));
    exit;
}
add_action('admin_post_nopriv_custom_user_registration', 'handle_custom_user_registration');
add_action('admin_post_custom_user_registration', 'handle_custom_user_registration');

