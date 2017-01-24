<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
?>
<?php 
// Get the Current User Profile ID - useful for admins who want to view customer's profile page
$customer = menu_get_object('user');
//kpr($customer);


// Get the Current Logged in User ID
$account = $GLOBALS['user'];
$username = $account->name;

if (($account->uid == 1 || in_array('administrator', $account->roles) || in_array('Administrators', $account->roles)) && ($account->uid == $customer->uid))  { 

?> 

<section id="page-header">
  <h1>Administrator</h1>
  <p>Dashboard</p>
</section>

<div class="recent-warranty">
<h3>Pending Warranty Requests</h3>
<?php

    $viewWarrantyAdmin = views_get_view('warranty_submissions');
    $viewWarrantyAdmin->set_display('block_2');
    $viewWarrantyAdminDisplay = $viewWarrantyAdmin->preview();
    print $viewWarrantyAdminDisplay;
?>

<!-- ELSE -->
<?php } else { ?>
 <!-- ELSE -->


<section id="page-header">
  <h1>User Account</h1>
  <p>Dashboard</p>
</section>
<div class="profile"<?php print $attributes; ?>>



<section id="acountInformation" class="clearfix">
<h3>Account Information</h3>
<a id="userLogout" class="button-style" href="<?php echo $GLOBALS['base_path']; ?>user/logout">- Logout</a>
<?php
	$account = $GLOBALS['user'];
	$username = $account->name;
	  if (module_exists('commerce_addressbook')) {
	    $billing_profile_id = commerce_addressbook_get_default_profile_id($account->uid, 'billing');
	    if ($billing_profile_id) {
	      $billing_profile = commerce_customer_profile_load($billing_profile_id);
	      $username = $billing_profile->commerce_customer_address[LANGUAGE_NONE][0]['name_line'];
	    }
	  }
	  //print '<p>' . t('Hello, @user', array('@user' => $username)) . '</p>';
?>
<?php
  if (module_exists('commerce_addressbook')) {
    $shipping_profile_id = $billing_profile_id = NULL;
    // Customer Profile
    print '<div class="profile--customer profile-widget"><h4>Customer Profile</h4><div class="addressBookDetails"><p>' . $username .'<br>'. $account->mail . '</p></div>' . l(t('Edit'), 'user/' . $account->uid . '/edit', array('attributes'=>array('class'=>'action-button'))) .'</div>';
    // Shipping Details
    if (commerce_addressbook_profile_page_access($account, 'shipping')) {
      $shipping_profile_id = commerce_addressbook_get_default_profile_id($account->uid, 'shipping');
      if ($shipping_profile_id) {
        $shipping_profile = commerce_customer_profile_load($shipping_profile_id);
        $shipping_profile_render = entity_view('commerce_customer_profile', array($shipping_profile), 'full');
        $shipping_profile_render = reset($shipping_profile_render);
        $shipping_profile_output = drupal_render($shipping_profile_render);
      }
      else {
        $shipping_profile_output = '<p>' . t('No default shipping profile') . '</p>';
      }
      print '<div class="profile--shipping profile-widget"><h4>Shipping Address</h4><div class="addressBookDetails">' . $shipping_profile_output .'</div>'. l(t('Edit'), 'user/' . $account->uid . '/addressbook/shipping', array('attributes'=>array('class'=>'action-button'))). '</div>';
    }
    // Billing Info
    if (commerce_addressbook_profile_page_access($account, 'billing')) {
      $billing_profile_id = commerce_addressbook_get_default_profile_id($account->uid, 'billing');
      if ($billing_profile_id) {
        $billing_profile = commerce_customer_profile_load($billing_profile_id);
        $billing_profile_render = entity_view('commerce_customer_profile', array($billing_profile), 'full');
        $billing_profile_render = reset($billing_profile_render);
        $billing_profile_output = drupal_render($billing_profile_render);
      }
      else {
        $billing_profile_output = '<p>' . t('No default billing profile') . '</p>';
      }
      print '<div class="profile--billing profile-widget last"><h4>Billing Address</h4><div class="addressBookDetails">' . $shipping_profile_output .'</div>'. l(t('Edit'), 'user/' . $account->uid . '/addressbook/billing', array('attributes'=>array('class'=>'action-button'))). '</div>';
    }
  }
  
?>
</section>

</div>

 <?php }?>


<div class="recent-orders">
<h3>Order History</h3>
<?php print views_embed_view('commerce_backoffice_user_orders', 'block_1', $account->uid); ?>
</div>