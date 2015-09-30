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
	$toplamfiyat2 	= $_POST['toplamfiyat2'];
	$order_number 	= $_POST['order_number'];
?>
<?php
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    		$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
    		$ip = $_SERVER['REMOTE_ADDR'];
		}   
        
        $strMode = "PROD";
        $strVersion = "v0.01";
        $strTerminalID = "1******2";
        $strTerminalID_ = "01******2"; 
        $strProvUserID = "PROVAUT";
        $strProvisionPassword = "******"; 
        $strUserID = "H******";
        $strMerchantID = "0*****3"; 
        $strIPAddress = $ip;  
        $strEmailAddress = "eticaret@garanti.com.tr";
        $strOrderID = $order_number;
        $strInstallmentCnt = ""; 
        $strNumber = $_POST['cardnumber'];
        $strExpireDate = $_POST['cardexpiredatemonth'].$_POST['cardexpiredateyear'];
        $strCVV2 = $_POST['cardcvv2'];
        $toplamfiyat2 = $_POST['toplamfiyat2'];
        $strAmount = $toplamfiyat2*100;
        $strType = "sales";
        $strCurrencyCode = "949";
        $strCardholderPresentCode = "0";
        $strMotoInd = "N";
        $strHostAddress = "https://sanalposprov.garanti.com.tr/VPServlet";
        $SecurityData = strtoupper(sha1($strProvisionPassword.$strTerminalID_));
        $HashData = strtoupper(sha1($strOrderID.$strTerminalID.$strNumber.$strAmount.$SecurityData));
        $xml= "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
        <GVPSRequest>
        <Mode>$strMode</Mode><Version>$strVersion</Version>
        <Terminal><ProvUserID>$strProvUserID</ProvUserID><HashData>$HashData</HashData><UserID>$strUserID</UserID><ID>$strTerminalID</ID><MerchantID>$strMerchantID</MerchantID></Terminal>
        <Customer><IPAddress>$strIPAddress</IPAddress><EmailAddress>$strEmailAddress</EmailAddress></Customer>
        <Card><Number>$strNumber</Number><ExpireDate>$strExpireDate</ExpireDate><CVV2>$strCVV2</CVV2></Card>
        <Order><OrderID>$strOrderID</OrderID><GroupID></GroupID><AddressList><Address><Type>S</Type><Name></Name><LastName></LastName><Company></Company><Text></Text><District></District><City></City><PostalCode></PostalCode><Country></Country><PhoneNumber></PhoneNumber></Address></AddressList></Order><Transaction><Type>$strType</Type><InstallmentCnt>$strInstallmentCnt</InstallmentCnt><Amount>$strAmount</Amount><CurrencyCode>$strCurrencyCode</CurrencyCode><CardholderPresentCode>$strCardholderPresentCode</CardholderPresentCode><MotoInd>$strMotoInd</MotoInd><Description></Description><OriginalRetrefNum></OriginalRetrefNum></Transaction>
        </GVPSRequest>";
        If ($_POST['IsFormSubmitted'] == ""){
        	}
        else {
	        $ch=curl_init();
	        curl_setopt($ch, CURLOPT_URL, $strHostAddress);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	        curl_setopt($ch, CURLOPT_POST, 1) ;
	        curl_setopt($ch, CURLOPT_POSTFIELDS, "data=".$xml);
	        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	        $results = curl_exec($ch);
	        curl_close($ch);
	        $xml_parser = xml_parser_create();
	        xml_parse_into_struct($xml_parser,$results,$vals,$index);
	        xml_parser_free($xml_parser);
	        //Sadece ReasonCode deðerini alýyoruz.
	        $strReasonCodeValue = $vals[$index['REASONCODE'][0]]['value'];
	        if($strReasonCodeValue == "00")
	        { 
	            echo "<div class='mistake'><div class='container'>Thank You! Money has been sent!</div></div>";
	           	 	$to      = 'ivan@inosov.ru';
					$subject = 'ORDER number $today was payed';
					$message = "Check your Bank please!";
					$headers = 'From: webmaster@inosov.ru' . "\r\n" .
					    'Reply-To: webmaster@inosov.ru' . "\r\n" .
					    'X-Mailer: PHP/' . phpversion();

					mail($to, $subject, $message, $headers);
	        } else {
	            echo "<div class='mistake'><div class='container'>Eror! Please, contact with info@***.ru</div></div>"; 
	        }
		}
?>
	
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
