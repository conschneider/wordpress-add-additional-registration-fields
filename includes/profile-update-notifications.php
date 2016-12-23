<?php

// Shout out to: http://revelationconcept.com/wordpress-send-admin-notification-user-updates-profile/ - Cheers!

/* ===========================================
    This files sends update notifications when a user profile gets updated
   =============================================*/
 

// WORDPRESS DEFAULT Profile FIELDS 
// IF WORDPRESS DEFAULT Profile EMAIL CHANGES
function arf_user_profile_update_email( $user_id, $old_user_data ) {
 
  $user = get_userdata( $user_id );
  if($old_user_data->user_email != $user->user_email) {
    $admin_email = "mail@annawerner.de";
    $message = sprintf( __( 'This user has updated their profile default email on wcho5t site.' ) ) . "\r\n\r\n";
    $message .= sprintf( __( 'Display Name: %s' ), $user->display_name ). "\r\n\r\n";
    $message .= sprintf( __( 'Old Email: %s' ), $old_user_data->user_email ). "\r\n\r\n";
    $message .= sprintf( __( 'New Email: %s' ), $user->user_email ). "\r\n\r\n";
    wp_mail( $admin_email, sprintf( __( '[wcho5t Site] User Profile Update' ), get_option('blogname') ), $message );
  }
 
}
 
add_action( 'profile_update', 'arf_user_profile_update_email', 10, 2 );

 

// wcho5t invoice fields in Profile 

//change of fields: arf_firstname, arf_lastname, arf_company

function arf_user_profile_update_namecompany( $user_id, $old_user_data ) {

  $old_user_data = get_transient( 'arf_old_user_data_' . $user_id );
  $user = get_userdata( $user_id );
  
  if($old_user_data->arf_firstname != $user->arf_firstname or $old_user_data->arf_lastname != $user->arf_lastname or $old_user_data->arf_company != $user->arf_company) {
    $admin_email = "mail@annawerner.de";
    $message = sprintf( __( 'This user has updated their profile name / company data on wcho5t site.' ) ) . "\r\n\r\n";
    $message .= sprintf( __( 'Display Name: %s' ), $user->display_name ). "\r\n\r\n";
    $message .= sprintf( __( 'Old First Name: %s' ), $old_user_data->arf_firstname ). "\r\n\r\n";
    $message .= sprintf( __( 'New First Name: %s' ), $user->arf_firstname ). "\r\n\r\n";
    $message .= sprintf( __( 'Old Last Name: %s' ), $old_user_data->arf_lastname ). "\r\n\r\n";
    $message .= sprintf( __( 'New Last Name: %s' ), $user->arf_lastname ). "\r\n\r\n";
    $message .= sprintf( __( 'Old Company: %s' ), $old_user_data->arf_company ). "\r\n\r\n";
    $message .= sprintf( __( 'New Company: %s' ), $user->arf_company ). "\r\n\r\n";
    wp_mail( $admin_email, sprintf( __( '[wcho5t Site] User Profile Update name / company data' ), get_option('blogname') ), $message );
  }
 
}
 
add_action( 'profile_update', 'arf_user_profile_update_namecompany', 10, 2 );

// address fields change: arf_address1, arf_address2, arf_postcode, arf_statecounty
function arf_user_profile_update_address( $user_id, $old_user_data ) {
 
  $old_user_data = get_transient( 'arf_old_user_data_' . $user_id );
  $user = get_userdata( $user_id );
  
  if($old_user_data->arf_address1 != $user->arf_address1 or $old_user_data->arf_address2 != $user->arf_address2 or $old_user_data->arf_city != $user->arf_city or $old_user_data->arf_postcode != $user->arf_postcode or $old_user_data->arf_statecounty != $user->arf_statecounty ) {
    $admin_email = "mail@annawerner.de";
    $message = sprintf( __( 'This user has updated their profile address data on wcho5t site.' ) ) . "\r\n\r\n";
    $message .= sprintf( __( 'Display Name: %s' ), $user->display_name ). "\r\n\r\n";
    $message .= sprintf( __( 'Old Address 1: %s' ), $old_user_data->arf_address1 ). "\r\n\r\n";
    $message .= sprintf( __( 'New Address 1: %s' ), $user->arf_address1 ). "\r\n\r\n";
    $message .= sprintf( __( 'Old Address 2: %s' ), $old_user_data->arf_address2 ). "\r\n\r\n";
    $message .= sprintf( __( 'New Address 2: %s' ), $user->arf_address2 ). "\r\n\r\n";
    $message .= sprintf( __( 'Old City: %s' ), $old_user_data->arf_city ). "\r\n\r\n";
    $message .= sprintf( __( 'New City: %s' ), $user->arf_city ). "\r\n\r\n";
    $message .= sprintf( __( 'Old Postcode: %s' ), $old_user_data->arf_postcode ). "\r\n\r\n";
    $message .= sprintf( __( 'New Postcode: %s' ), $user->arf_postcode ). "\r\n\r\n";
    $message .= sprintf( __( 'Old Postcode: %s' ), $old_user_data->arf_statecounty ). "\r\n\r\n";
    $message .= sprintf( __( 'New Postcode: %s' ), $user->arf_statecounty ). "\r\n\r\n";
    wp_mail( $admin_email, sprintf( __( '[wcho5t Site] User Profile Update address data' ), get_option('blogname') ), $message );
  }
 
}
 
add_action( 'profile_update', 'arf_user_profile_update_address', 10, 2 );

// contact fields change: arf_telephone, arf_email

function arf_user_profile_update_contact( $user_id, $old_user_data ) {
 
  $old_user_data = get_transient( 'arf_old_user_data_' . $user_id );
  $user = get_userdata( $user_id );
  
  if($old_user_data->arf_telephone != $user->arf_telephone or $old_user_data->arf_email != $user->arf_email ) {
    $admin_email = "mail@annawerner.de";
    $message = sprintf( __( 'This user has updated their profile contact data on wcho5t site.' ) ) . "\r\n\r\n";
    $message .= sprintf( __( 'Display Name: %s' ), $user->display_name ). "\r\n\r\n";
    $message .= sprintf( __( 'Old telephone: %s' ), $old_user_data->arf_telephone ). "\r\n\r\n";
    $message .= sprintf( __( 'New telephone: %s' ), $user->arf_telephone ). "\r\n\r\n";
    $message .= sprintf( __( 'Old email: %s' ), $old_user_data->arf_email ). "\r\n\r\n";
    $message .= sprintf( __( 'New email: %s' ), $user->arf_email ). "\r\n\r\n";
    wp_mail( $admin_email, sprintf( __( '[wcho5t Site] User Profile contact data' ), get_option('blogname') ), $message );
  }
 
}
 
add_action( 'profile_update', 'arf_user_profile_update_contact', 10, 2 );


// Save old user data and meta for later comparison for non-standard fields (phone, address etc.)
function arf_old_user_data_transient(){
 
  $user_id = get_current_user_id();
  $user_data = get_userdata( $user_id );
  $user_meta = get_user_meta( $user_id );
 
  foreach( $user_meta as $key=>$val ){
    $user_data->data->$key = current($val);
  }
 
  // 1 hour should be sufficient
  set_transient( 'arf_old_user_data_' . $user_id, $user_data->data, 60 * 60 );
 
}
add_action('show_user_profile', 'arf_old_user_data_transient');
 
// Cleanup when done
function arf_old_user_data_cleanup( $user_id, $old_user_data ){
  delete_transient( 'arf_old_user_data_' . $user_id );
}
add_action( 'profile_update', 'arf_old_user_data_cleanup', 1000, 2 );