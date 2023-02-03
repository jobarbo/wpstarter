<?php

/*
*
*
            *** Submit Post From Front End ***
    >> Works with custom post types and custom fields <<
*
*
** Basics for saving a new custom post type with custom fields via a front end form
*
** This example is based on scenario where we want to allow users to submit their own stories
** through a form on the front end of the website. We will create and submit a custom post with
** custom fields to store the user's stories and data without requiring a log in. The front end
** form will have 3 fields: user's name, user's email address, and the user's story. When the user
** hits the submit button on the form, we will collect and save the data to a new post in WordPress.
*
*
*/

?>


<form id="new_user_story_post" name="new_user_story_post" method="post" action="" enctype="multipart/form-data" class='quoteRequestCustomerInfo'>

  <!-- User Name -->
  <fieldset>
    <input placeholder="Name" type="text" id="retraite_name" tabindex="5" name="retraite_name" />
    <span class="errorMessage">Please enter your first and last name</span>
  </fieldset>

  <!-- User Emal Address -->
  <fieldset>
    <input placeholder="Email Address " type="text" id="retraite_location" name="retraite_location" />
    <span class="errorMessage">Please enter your email address</span>
  </fieldset>

  <!-- User Story -->
  <fieldset>
    <input placeholder="Add your story here" type="text" id="retraite_info" name="retraite_info" />
  </fieldset>

  <!-- Submit Button -->
  <fieldset>
    <!-- Submit Button -->
    <input type="submit" value="Submit Your Story" tabindex="40" id="submit" name="submit" />

    <!-- Hidden Form Validation -->
    <input type="hidden" name="action" value="new_user_story_post" />
    <?php wp_nonce_field( 'new_user_story_post' ); ?>
  </fieldset>

</form><!-- END Custom Post Type Form -->



<?php
  /*////////////////////////////////////////////////////////////////////
      //   Create a new Custom Post Type   \\\
  ////////////////////////////////////////////////////////////////////*/
  //If there is any data posted, create/submit a new post to WordPress
  var_dump($_POST);
  if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_user_story_post") {

    // Do some minor form validation when capturing info from form inputs and set the values as variables
    if (isset ($_POST['retraite_name'])) {
      $name =  htmlspecialchars(strip_tags($_POST['retraite_name']));
    }
    if (isset ($_POST['retraite_location'])) {
      $location = htmlspecialchars(strip_tags($_POST['retraite_location']));
    }
    if (isset ($_POST['retraite_info'])) {
      $info = htmlspecialchars(strip_tags($_POST['retraite_info']));
    }

    // Add the basic post information to $new_custom_post ARRAY to use to create the post
    // This is where you will set the values for the standard wordpress post elements, see WordPress Codex for more.
    $new_custom_post = array(
      'post_title'    => $name,
      'post_status'	=>	'draft',
      'post_type'	=>	'retraite',
    );

    //Save the POST
    $customFields = wp_insert_post($new_custom_post);

    //Add the form input data to the post's custom fields
    add_post_meta($customFields, 'name', $name, true);
    add_post_meta($customFields, 'location', $location, true);
    add_post_meta($customFields, 'information', $info, true);

    /* Add a message to the page that the custom post type was submitted */
    echo '<p>Thanks for submitting your story.</p>';

  } // END THE IF STATEMENT THAT STARTED THE WHOLE FORM PROCESSING