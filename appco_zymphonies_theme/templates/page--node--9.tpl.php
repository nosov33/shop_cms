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
	$toplamfiyat 	= $_POST['price'];
	$img 			= $_POST['image'];
	$rec_name 		= $_POST['rec_name'];
	$rec_phone 		= $_POST['rec_phone'];
	$city 			= $_POST['city'];
	$sen_name 		= $_POST['sen_name'];
	$sen_phone 		= $_POST['sen_phone'];
	$sen_email 		= $_POST['sen_email'];
	$new = "http://turkeyflora.ru/sites/default/files/" . $img;
	$today = date("md-hi");
?>	
<?php


$to      = 'ivan@inosov.ru';
$subject = 'Yeni ORDER';
$message = "Name: $rec_name \n
			Phone: $rec_phone \n
			City: $city \n
			Sender Name: $sen_name \n
			Sender Phone: $sen_phone \n
			Sender Email: $sen_email \n
			Price: $toplamfiyat \n
			Buket: $new";
$headers = 'From: webmaster@inosov.ru' . "\r\n" .
    'Reply-To: webmaster@inosov.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 
<img src="http://turkeyflora.ru/sites/default/files/<?php echo $img; ?>" style="float: left; width: 120px; height: auto;" />
<h2>Price: <?php echo $toplamfiyat; ?> TL</h2>		
<h1>Thank you! Check the information: </h1>
<p>Receipent Name: <?php echo $rec_name; ?></p>
<p>Receipent Phone: <?php echo $rec_phone; ?></p>
<p>City: <?php echo $city; ?></p>
<p>Sender Name: <?php echo $sen_name; ?></p>
<p>Sender Phone: <?php echo $sen_phone; ?></p>
<p>Sender Email: <?php echo $sen_email; ?></p>
<h1>Credit Card Information</h1>

<form action='http://turkeyflora.ru/payment-2.html' method='post' class='payment'>
<?php echo t('Card Number'); ?> : <input name='cardnumber' type='text' /><br />
<?php echo t('Expire Date (month)'); ?> <select name='cardexpiredatemonth'><option value='01'>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option></select><br />
<?php echo t('Expire Date (year)'); ?> <select name='cardexpiredateyear'><option value='15'>2015</option><option value='16'>2016</option><option value='17'>2017</option><option value='18'>2018</option><option value='19'>2019</option><option value='21'>2021</option><option value='22'>2022</option><option value='23'>2023</option><option value='24'>2024</option><option value='25'>2025</option><option value='26'>2026</option><option value='27'>2027</option><option value='28'>2028</option><option value='29'>2029</option></select><br />
<?php echo 'CVV2:'; ?> <input name='cardcvv2' type='text' /><br />
<input type='hidden' name='IsFormSubmitted' value='submitted' /><br />
<input name='toplamfiyat2' value=" .<?php echo $toplamfiyat ?>" type='hidden' />
<input name='order_number' value=" .<?php echo $today ?>" type='hidden' />
<input id='submit' type='submit' value='Submit' style="width: 100%;" />
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
