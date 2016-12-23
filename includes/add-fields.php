<?php

/* ===========================================
    This file adds all additional fields for registration and user profile
   =============================================*/


//Add custom fields to wp-signup.php during registration
add_action( 'signup_extra_fields', 'arf_signup_fields' );
function arf_signup_fields() {
?>  

	<h3>Invoice information</h3>
	<label>First name: </label>
	<input class="arf-signup arf-firstname" type="text" name="arf_firstname" id="arf_firstname" value="" />
	<label>Last name: </label>
	<input class="arf-signup arf-lastname" type="text" name="arf_lastname" id="arf_lastname" value="" /><br>
	<label>Company: </label>
	<input class="arf-signup arf-company" type="text" name="arf_company" id="arf_company" value="" /><br>
	<label>Address 1: </label>
	<input class="arf-signup arf-address1" type="text" name="arf_address1" id="arf_address1" value="" />
	<label>Address 2: </label>
	<input class="arf-signup arf-address2" type="text" name="arf_address2" id="arf_address2" value="" /><br>
	<label>City: </label>
	<input class="arf-signup arf-city" type="text" name="arf_city" id="arf_city" value="" />
	<label>Postcode: </label>
	<input class="arf-signup arf-postcode" type="text" name="arf_postcode" id="arf_postcode" value="" />
	<!--<label>Country</label> Since Taxamo is in play not needed at the moment.
	<input class="arf-signup arf-country" type="text" name="arf_country" id="arf_country" value="" />-->
	<label>State/County: </label>
	<input class="arf-signup arf-statecounty" type="text" name="arf_statecounty" id="odesk" value="" /><br>
	<label>Telephone: </label>
	<input class="arf-signup arf-telephone" type="text" name="arf_telephone" id="arf_telephone" value="" />
	<label>E-Mail: </label>
	<input class="arf-signup arf-email" type="text" name="arf_email" id="arf_email" value="" />
	
    

    <hr />

<?php

}

//Add custom fields to profile page
add_action( 'show_user_profile', 'arf_user_fields' );
function arf_user_fields( $user )
{
    $arf_firstname = get_user_meta( $user->ID, 'arf_firstname', true );
    $arf_lastname = get_user_meta( $user->ID, 'arf_lastname', true );
    $arf_company = get_user_meta( $user->ID, 'arf_company', true );
    $arf_address1 = get_user_meta( $user->ID, 'arf_address1', true );
    $arf_address2 = get_user_meta( $user->ID, 'arf_address2', true );
    $arf_city = get_user_meta( $user->ID, 'arf_city', true );
    $arf_postcode = get_user_meta( $user->ID, 'arf_postcode', true );
    //$arf_country = get_user_meta( $user->ID, 'arf_country', true );
    $arf_statecounty = get_user_meta( $user->ID, 'arf_statecounty', true );
  	$arf_telephone = get_user_meta( $user->ID, 'arf_telephone', true );
    $arf_email = get_user_meta( $user->ID, 'arf_email', true );
      
?>
    

    <div class="wrap">
    <hr />
    <h3><?php _e('wcho5t invoice information - need settings and filter hooks!'); ?></h3>
    <p><?php _e ('This information is used by wcho5t invoices only. Scroll down for the WooCommerce profile fields.'); ?><p>
    <p><?php _e (''); ?></p>
    <table class="form-table">
		<tr>
            <th><label>First Name</label>
            </th>
            <td>
					<input type="text" name="arf_firstname" id="arf_firstname" value="<?php echo $arf_firstname; ?>" class="regular-text" /><br />
					<span class="description"><?php _e(""); ?></span>
            </td>
        </tr>
        <tr>
            <th><label>Last Name</label>
            </th>
            <td>
					<input type="text" name="arf_lastname" id="arf_lastname" value="<?php echo $arf_lastname; ?>" class="regular-text" /><br />
					<span class="description"><?php _e(""); ?></span>
            </td>
        </tr>
    	<tr>
            <th><label>Company</label>
            </th>
            <td>
					<input type="text" name="arf_company" id="arf_company" value="<?php echo $arf_company; ?>" class="regular-text" /><br />
					<span class="description"><?php _e(""); ?></span>
            </td>
        </tr>
    	<tr>
            <th><label>Address 1</label>
            </th>
            <td>
					<input type="text" name="arf_address1" id="arf_address1" value="<?php echo $arf_address1; ?>" class="regular-text" /><br />
					<span class="description"><?php _e(""); ?></span>
            </td>
        </tr>
    	<tr>
            <th><label>Address 2</label>
            </th>
            <td>
					<input type="text" name="arf_address2" id="arf_address2" value="<?php echo $arf_address2; ?>" class="regular-text" /><br />
					<span class="description"><?php _e(""); ?></span>
            </td>
        </tr>
    	<tr>
            <th><label>City</label>
            </th>
            <td>
					<input type="text" name="arf_city" id="arf_city" value="<?php echo $arf_city; ?>" class="regular-text" /><br />
					<span class="description"><?php _e(""); ?></span>
            </td>
        </tr>
    	<tr>
            <th><label>Postcode</label>
            </th>
            <td>
					<input type="text" name="arf_postcode" id="arf_postcode" value="<?php echo $arf_postcode; ?>" class="regular-text" /><br />
					<span class="description"><?php _e(""); ?></span>
            </td>
        </tr>
    	<!--<tr>
            <td>
					<input type="text" name="arf_country" id="arf_country" value="<//?php  echo $arf_country; ?>" class="regular-text" /><br />
					<span class="description"><//?php _e(""); ?></span>
            </td>
        </tr> --> 
    	<tr>
            <th><label>State/County</label>
            </th>
            <td>
					<input type="text" name="arf_statecounty" id="arf_statecounty" value="<?php echo $arf_statecounty; ?>" class="regular-text" /><br />
					<span class="description"><?php _e(""); ?></span>
            </td>
        </tr>
    	<tr>
            <th><label>Telephone</label>
            </th>
            <td>
					<input type="text" name="arf_telephone" id="arf_telephone" value="<?php echo $arf_telephone; ?>" class="regular-text" /><br />
					<span class="description"><?php _e(""); ?></span>
            </td>
        </tr>
        <tr>
            <th><label>E-Mail</label>
            </th>
            <td>
					<input type="text" name="arf_email" id="arf_email" value="<?php echo $arf_email; ?>" class="regular-text" /><br />
					<span class="description"><?php _e(""); ?></span>
            </td>
        </tr>
    </table>

</div>

<hr />
<?php

}

