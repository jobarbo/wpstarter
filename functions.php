<?php

// Utilities

//include('inc/utilities.php');

// CONFIG

include('inc/configure.php');

// JAVASCRIPT & CSS

include('inc/js-css.php');

// ACF

include('inc/acf.php');

// HOOKS ADMIN

// Custom login styles
require_once('inc/login-css.php');

// ACF options in admin
require_once('inc/acf/acf-option-page.php');

// CUSTOM POST TYPES
// require_once('inc/custom-post-types.php');

// Tiny MCE Styles
require_once('inc/tiny-mce.php');

// Support theme Title
add_theme_support('title-tag');
