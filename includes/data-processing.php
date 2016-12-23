<?php

/* ===========================================
    This file saves the data entered during registration and from the user profile
   =============================================*/


//Save the data of custom fields in wp-signup.php
add_action( 'user_register', 'arf_handle_signup', 10, 2 );
function arf_handle_signup( $user_id, $data = null )
{
    
    //define values and set variables for each field

    $arf_firstname = $_POST['arf_firstname'];
    $arf_lastname = $_POST['arf_lastname'];
    $arf_company = $_POST['arf_company'];
    $arf_address1 = $_POST['arf_address1'];
    $arf_address2 = $_POST['arf_address2'];
    $arf_city = $_POST['arf_city'];
    $arf_postcode = $_POST['arf_postcode'];
    //$arf_country = $_POST['arf_country'];
    $arf_statecounty = $_POST['arf_statecounty'];
    $arf_telephone = $_POST['arf_telephone'];
    $arf_email = $_POST['arf_email'];
    

    //generate user meta for each field that has been filled out

    if ( isset( $arf_firstname ) )
    {
        add_user_meta( $user_id, 'arf_firstname', $arf_firstname );
    }
    if ( isset( $arf_lastname ) )
    {
        add_user_meta( $user_id, 'arf_lastname', $arf_lastname );
    } 
	if ( isset( $arf_company ) )
    {
        add_user_meta( $user_id, 'arf_company', $arf_company );
    }

    if ( isset( $arf_address1 ) )
    {
        add_user_meta( $user_id, 'arf_address1', $arf_address1 );
    }
    if ( isset( $arf_address2 ) )
    {
        add_user_meta( $user_id, 'arf_address2', $arf_address2 );
    } 
	if ( isset( $arf_city ) )
    {
        add_user_meta( $user_id, 'arf_city', $arf_city );
    }

    if ( isset( $arf_postcode ) )
    {
        add_user_meta( $user_id, 'arf_postcode', $arf_postcode );
    }
   /* if ( isset( $arf_country ) )
    {
        add_user_meta( $user_id, 'arf_country', $arf_country );
    } */
	if ( isset( $arf_statecounty ) )
    {
        add_user_meta( $user_id, 'arf_statecounty', $arf_statecounty );
    }

    if ( isset( $arf_telephone ) )
    {
        add_user_meta( $user_id, 'arf_telephone', $arf_telephone );
    }

    if ( isset( $arf_email ) )
    {
        add_user_meta( $user_id, 'arf_email', $arf_email );
    }

   
}


//Save the data from the custom fields on profile page
add_action( 'personal_options_update', 'arf_save_profile_fields' );
add_action( 'edit_user_profile_update', 'arf_save_profile_fields' );

function arf_save_profile_fields( $user_id )
{
    update_usermeta( $user_id, 'arf_firstname', $_POST['arf_firstname'] );
    update_usermeta( $user_id, 'arf_lastname', $_POST['arf_lastname'] );
    update_usermeta( $user_id, 'arf_company', $_POST['arf_company'] );
    update_usermeta( $user_id, 'arf_address1', $_POST['arf_address1'] );
    update_usermeta( $user_id, 'arf_address2', $_POST['arf_address2'] );
    update_usermeta( $user_id, 'arf_city', $_POST['arf_city'] );
    update_usermeta( $user_id, 'arf_postcode', $_POST['arf_postcode'] );
    update_usermeta( $user_id, 'arf_country', $_POST['arf_country'] );
    update_usermeta( $user_id, 'arf_statecounty', $_POST['arf_statecounty'] );
    update_usermeta( $user_id, 'arf_telephone', $_POST['arf_telephone'] );
    update_usermeta( $user_id, 'arf_email', $_POST['arf_email'] );
}

