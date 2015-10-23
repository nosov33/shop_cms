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

		
<form action="https://turkeyflora.ru/payment.html" method="POST" class="new_payment">
<img src="https://turkeyflora.ru/sites/default/files/styles/teaser/public/<?php echo $img; ?>" style="width: 120px; margin: 0 auto; height: auto;" />
<h2>Price: <?php echo $toplamfiyat; ?> TL</h2>
	<label>Recepient Information</label>
	<input type="text" placeholder="Enter Receipent Name / Surname" name="rec_name" />
	<input type="text" placeholder="Enter Receipent Phone" name="rec_phone" />
	<label>Write the City:</label>
	<input type="text" placeholder="Write city name" name="city" />
	<input type="text" placeholder="Enter Receipent Adress or Hotel Name" name="rec_adress" />
	<label>Order Information</label>
	<label>Day / Month:</label><select name="month">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
	</select>
	<select name="month">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
	</select>
	<label>Delivery Time:</label>
		<select name="time">
		<option value="09-12">09-12</option>
		<option value="12-15">12-15</option>
		<option value="15-18">15-18</option>
		<option value="18-21">18-21</option>

	</select>
	<textarea placeholder="Card Message" class="form-norm" name="cardmessage"></textarea>
	<label>Sender Information</label>
	<input type="text" placeholder="Enter Sender Name / Surname" name="sen_name" />
	<input type="text" placeholder="Enter Sender Phone" name="sen_phone" />
	<input type="text" placeholder="Enter Sender Email" name="sen_email" />
<input type="hidden" name="price" value="<?php echo $toplamfiyat; ?>" />
<input type="hidden" name="image" value="<?php echo $img; ?>" />
<input type="submit" style="width: 100%;" class="webform-submit button-primary form-submit" value="Pay Online via credit card" />
<br class="clear" />
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
