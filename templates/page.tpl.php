	<?php /**
   * @file
   * Zen theme's implementation to display a single Drupal page.
   *
   * Available variables:
   *
   * General utility variables:
   * - $base_path: The base URL path of the Drupal installation. At the very
   *   least, this will always default to /.
   * - $directory: The directory the template is located in, e.g. modules/system
   *   or themes/bartik.
   * - $is_front: TRUE if the current page is the front page.
   * - $logged_in: TRUE if the user is registered and signed in.
   * - $is_admin: TRUE if the user has permission to access administration pages.
   *
   * Site identity:
   * - $front_page: The URL of the front page. Use this instead of $base_path,
   *   when linking to the front page. This includes the language domain or
   *   prefix.
   * - $logo: The path to the logo image, as defined in theme configuration.
   * - $site_name: The name of the site, empty when display has been disabled
   *   in theme settings.
   * - $site_slogan: The slogan of the site, empty when display has been disabled
   *   in theme settings.
   *
   * Navigation:
   * - $main_menu (array): An array containing the Main menu links for the
   *   site, if they have been configured.
   * - $secondary_menu (array): An array containing the Secondary menu links for
   *   the site, if they have been configured.
   * - $secondary_menu_heading: The title of the menu used by the secondary links.
   * - $breadcrumb: The breadcrumb trail for the current page.
   *
   * Page content (in order of occurrence in the default page.tpl.php):
   * - $title_prefix (array): An array containing additional output populated by
   *   modules, intended to be displayed in front of the main title tag that
   *   appears in the template.
   * - $title: The page title, for use in the actual HTML content.
   * - $title_suffix (array): An array containing additional output populated by
   *   modules, intended to be displayed after the main title tag that appears in
   *   the template.
   * - $messages: HTML for status and error messages. Should be displayed
   *   prominently.
   * - $tabs (array): Tabs linking to any sub-pages beneath the current page
   *   (e.g., the view and edit tabs when displaying a node).
   * - $action_links (array): Actions local to the page, such as 'Add menu' on the
   *   menu administration interface.
   * - $feed_icons: A string of all feed icons for the current page.
   * - $node: The node object, if there is an automatically-loaded node
   *   associated with the page, and the node ID is the second argument
   *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
   *   comment/reply/12345).
   *
   * Regions:
   * - $page['header']: Items for the header region.
   * - $page['welcome']: Welcome text, showing logged in status. (The Application pages utilize this region for the Blue Bar, which has the Welcome Message built in)
   * - $page['content']: The main content of the current page.
   * - $page['sidebar_left']: Items for the first sidebar.
   * - $page['sidebar_right']: Items for the second sidebar.
   * - $page['footer']: Items for the footer region.
   *
   * @see template_preprocess()
   * @see template_preprocess_page()
   * @see zen_preprocess_page()
   * @see template_process()
   */

  /*
   * Code Blocks
   * Used in the template, but stored in vars, so that it can be pulled into a logic layer
   */
   // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie9.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 9', '!IE' => FALSE), 'preprocess' => FALSE));
  $secondary_menu_heading = '';
  $secondary_menu = '';
  global $user;
  include_once $directory . '/views/leftnav.php';

  switch(drupal_get_path_alias()) {
    case 'preapp/identity':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break;

    case 'preapp/education':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break;

    case 'preapp/internship':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break;

    case 'preapp/residency':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break;

    case 'preapp/affiliations':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break;

    case 'preapp/certifications':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break;
			
		case 'preapp/exams':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break;	

    case 'preapp/licensure':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break;

    case 'preapp/disciplinary':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break;

    case 'preapp/references':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break;

    case 'preapp/release':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break;

    case 'preapp/upload':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break;

    case 'preapp/submit':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      //$page['sidebar_left'] = file_get_contents($directory.'/views/leftnav.html');
      $page['sidebar_left'] = getleftnav();
      break; 

    case 'preapp/mydocuments':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/bluetabbar.html');
      break;	


    case 'register':
      $top_nav = file_get_contents($directory . '/views/topnav.html');
      $page['welcome'] = file_get_contents($directory . '/views/welcome_empty.html');
      break;
			
		case 'home':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/welcome_empty.html');
      break;
		
		case 'preapp/submitted':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/welcome_empty.html');
      break;
				
		
		case 'whyapply':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/welcome_empty.html');
      break;
		
		case 'registeremail':
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/welcome_empty.html');
      break;	
			
		case 'user/login':
      $top_nav = file_get_contents($directory . '/views/topnav.html');
      $page['welcome'] = file_get_contents($directory . '/views/welcome_empty.html');
      break;
		
		case 'user':
      $top_nav = file_get_contents($directory . '/views/topnav.html');
      $page['welcome'] = file_get_contents($directory . '/views/welcome_empty.html');
      break;
		
		case 'confirm':
      $top_nav = file_get_contents($directory . '/views/topnav.html');
      $page['welcome'] = file_get_contents($directory . '/views/welcome_empty.html');
      break;			

    default:
      $top_nav = file_get_contents($directory . '/views/topnav_logged_in.html');
      $page['welcome'] = file_get_contents($directory . '/views/welcome_empty1.html');
			
      break;
  }
?>

<div id="page">


  <header id="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <hgroup id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </hgroup><!-- /#name-and-slogan -->
    <?php endif; ?>

    <?php if ($top_nav): ?>
      <nav id="top_nav" role="navigation">
      <?php print $top_nav; ?>
      </nav>
    <?php endif; ?>

    <?php print render($page['header']); ?>

  </header>
  
  
  <div id="main" class="<?php echo(!empty($page['sidebar_left']) && !empty($page['sidebar_right']) ? 'three_column' : (empty($page['sidebar_left']) && empty($page['sidebar_right']) ? 'one_column' : 'two_column')); ?>">

    <?php print render(str_replace('nameplaceholder', $user -> name, $page['welcome'])); ?>
    
    <?php if (!empty($page['sidebar_left'])): ?>
      <div id="sidebar_left" class="column">
        <?php print render($page['sidebar_left']); ?>
      </div>
    <?php endif; ?>
      
    <div id="content" class="column" role="main">
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div><!-- /#content -->
      
    <?php if (!empty($page['sidebar_right'])): ?>
      <div id="sidebar_right" class="column">
        <?php print render($page['sidebar_right']); ?>
      </div>
    <?php endif; ?>
      
  </div><!-- /#main -->

  
  <?php print render($page['footer']); ?>


</div><!-- /#page -->
