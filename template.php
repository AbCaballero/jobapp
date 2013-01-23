<?php

  /**
   * Author: Ali Soleymanpour
   * Company: Aner Group
   * Client: Vista Staffing Solutions
   * Date: January 3rd, 2012
   * Notes: Tell Drupal that we want to
	 * use the user-login and user-register
	 * page in our theme
   */

      

/**
* This snippet loads a custom page-login.tpl.php layout file when
* users click through to the login, request password or register pages
*/

/*function _phptemplate_variables($hook, $variables = array()) {
  switch ($hook) {
    case 'page':
      global $user;
      if (arg(0) == 'user'){
        if (!$user->uid) { //check to see if the user is logged in. If not display the special login page layout
          $variables['template_file'] = 'page-login';
        }
        elseif (arg(1) == 'login' || arg(1) == 'register' || arg(1) == 'password' ) {
          $variables['template_file'] = 'page-login';
        }
      }
      break;
			
          global $user;
          if (arg(0) == 'user'){
          if (!$user->uid) { //check to see if the user is logged in. If not display the special login page layout
          $variables['template_file'] = 'page-login';
          }
          elseif (arg(1) == 'login' || arg(1) == 'register' || arg(1) == 'password' ) {
          $variables['template_file'] = 'page-login';
           }
         }

    }

  return $variables;
}
/*---------------------------------*/



function JobApp_theme() {
  $items = array();

  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'JobApp') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
       'JobApp_preprocess_user_login'
    ),
  );
	
	$items['user_pass'] = array(
   'render element' => 'form',
   'path' => drupal_get_path('theme', 'JobApp') . '/templates',
   'template' => 'user-pass',
   'preprocess functions' => array(
      'JobApp_preprocess_user_pass'
    ),
  );
	
	$items['user-steps'] = array(
   'render element' => 'form',
   'path' => drupal_get_path('theme', 'JobApp') . '/templates',
   'template' => 'user-steps',
   'preprocess functions' => array(
      'JobApp_preprocess_user_steps'
    ),
  );
  
  return $items;
}

function JobApp_preprocess_user_login(&$vars) {
  $vars['intro_text'] = t('');
}

function JobApp_preprocess_user_pass(&$vars) {
  $vars['intro_text'] = t('');
}
function JobApp_preprocess_user_steps(&$vars) {
  $vars['intro_text'] = t('');
}
?>
