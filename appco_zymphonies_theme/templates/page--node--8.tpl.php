<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to main-menu administration pages.
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
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>


<div class="user-menu-wrapper">
  <div class="full-wrap">
    <?php print render($page['user_menu']) ?>
  </div>
</div>

<div class="menu-wrap">
  <div class="full-wrap clearfix">
    <nav id="main-menu" role="navigation">
      <a class="nav-toggle" href="#">Navigation</a>
      <div class="menu-navigation-container">
        <?php $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
          print drupal_render($main_menu_tree);
        ?>
      </div>
      <div class="clear"></div>
    </nav>
  </div>
</div>



<div class="page-wrap">

  <header class="siteheader">  
      <?php if ($logo): ?>
        <div id="logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>"/>
          </a>
        </div>
      <?php endif; ?>
  </header>

  <div class="front-blocks">
    <?php if ($is_front): ?>
      <div class="frontblockwrap">
        <?php print render($page['aboutus']); ?>
      </div>

      <div class="frontblockwrap whowewrap">
        <?php print render($page['whoweare']); ?>
        <?php print render($page['whatwedo']); ?> 
      </div>
    <?php endif; ?>
  </div>


  <div class="content-wrap">

      <div class="content-sidebar-wrap">

        <!-- First Sidebar -->

        <?php if ($page['sidebar_first']): ?>
            <aside id="sidebar-first" role="complementary">
              <?php print render($page['sidebar_first']); ?>
            </aside>
        <?php endif; ?>

        <!-- End First Sidebar -->

        <div id="content">

          <section id="post-content" role="main">

            <?php if (!empty($tabs['#primary'])): ?>
              <div class="tabs-wrapper"><?php print render($tabs); ?></div>
            <?php endif; ?>

            <?php print render($page['help']); ?>

            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
		
<?php
	$toplamfiyat = $_POST['price'];
	$img = $_POST['image'];
?>	
<img src="http://turkeyflora.ru/sites/default/files/<?php echo $img; ?>" style="float: left; width: 120px; height: auto;" />
<h2>Price: <?php echo $toplamfiyat; ?> TL</h2>		
<form action="http://turkeyflora.ru/payment.html" method="POST">
	<label>Recepient Information</label>
	<input type="text" placeholder="Enter Receipent Name" name="rec_name" />
	<input type="text" placeholder="Enter Receipent Phone" name="rec_phone" />
	<label>Choose City:</label>
<?php
	$db_host = 'localhost'; 
	$db_username = 'rarmaga_new';
	$dbUser = 'rarmaga_new';
	$db_password = 'karaduga2013';
	$db_name = 'rarmaga_new';
	$db_table_to_show = 'cities';
	//connection to the database

 	// соединяемся с сервером базы данных
    $connect_to_db = mysql_connect($db_host, $db_username, $db_password)
    or die("Could not connect: " . mysql_error());

    // подключаемся к базе данных
    mysql_select_db($db_name, $connect_to_db)
    or die("Could not select DB: " . mysql_error());

	// выбираем все значения из таблицы "student"
    $qr_result = mysql_query("select * from " . $db_table_to_show)
    or die(mysql_error());

	echo "<select class='form-norm' name='city'>";
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<option name="city" value="' . $data['city_en'] . '">' . $data['city_en'] . '</option>';
  }
	echo "</select";
?>	
	<input type="text" placeholder="Enter Receipent Adress or Hotel Name" name="rec_adress" />
	<label>Order Information</label>
	<textarea placeholder="Card Message" class="form-norm" name="cardmessage"></textarea>
	<label>Sender Information</label>
	<input type="text" placeholder="Enter Sender Name" name="sen_name" />
	<input type="text" placeholder="Enter Sender Phone" name="sen_phone" />
	<input type="text" placeholder="Enter Sender Email" name="sen_email" />
<input type="hidden" name="price" value="<?php echo $toplamfiyat; ?>" />
<input type="hidden" name="image" value="<?php echo $img; ?>" />
<input type="submit" style="width: 100%;" class="webform-submit button-primary form-submit" value="Pay Online via credit card" />
</form>	
		
			
			
			
			
            <?php print render($page['content']); ?>

          </section>

        </div> 
    
      </div>

      <!-- Second Sidebar -->

      <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>

      <!-- End Second Sidebar -->

  </div>

  <!-- Footer -->

  <div id="footer">

    <div class="contactwrap"> 

      <div class="leftwrap">
        <?php print render($page['contactform']); ?>
      </div>

      <div class="rightwrap">

        <?php print render($page['contactaddress']); ?>

      </div>

    </div>

    <div class="social-media-wrap">
      <?php if (theme_get_setting('social_links', 'appco_zymphonies_theme')): ?>
        <span class="social-icons">
         <ul>
          <li><a class="rss" href="<?php print $front_page; ?>rss.xml"><i class="fa fa-rss"></i></a></li>
          <li><a class="fb" href="<?php echo theme_get_setting('facebook_profile_url', 'appco_zymphonies_theme'); ?>" target="_blank" rel="me"><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="<?php echo theme_get_setting('twitter_profile_url', 'appco_zymphonies_theme'); ?>" target="_blank" rel="me"><i class="fa fa-twitter"></i></a></li>
          <li><a class="gplus" href="<?php echo theme_get_setting('gplus_profile_url', 'appco_zymphonies_theme'); ?>" target="_blank" rel="me"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="linkedin" href="<?php echo theme_get_setting('linkedin_profile_url', 'appco_zymphonies_theme'); ?>" target="_blank" rel="me"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="pinterest" href="<?php echo theme_get_setting('pinterest_profile_url', 'appco_zymphonies_theme'); ?>" target="_blank" rel="me"><i class="fa fa-pinterest"></i></a></li>
          <li><a class="youtube" href="<?php echo theme_get_setting('youtube_profile_url', 'appco_zymphonies_theme'); ?>" target="_blank" rel="me"><i class="fa fa-youtube"></i></a></li>
         </ul>
        </span>
      <?php endif; ?>
    </div>
    
    <div id="copyright">

        <div class="copyright">
          <?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, <?php print $site_name; ?>
        </div> 

        <div class="credits">
          2014 - <?php print t('Designed by'); ?> Zymphonies.<br />
          2015 - <?php print t('Dveloped by'); ?> Drupal Developer Ivan Nosov.<br />
          2015 - Turkey Flora. <?php print t('Your Florist In Turkey'); ?>
        </div>

    </div>

  </div>

  <!-- End Footer -->

</div>
