<?php if (theme_get_setting('scrolltop_display')): ?>
<div id="toTop"><?php print t('Back to Top'); ?></div>
<?php endif; ?>

<!-- #header -->
<div id="header">
    <div class="container">
    <!-- #header-inside -->
    <div id="header-inside" class="clearfix">
    
    	<?php if ($page['header_top']) :?>
        <div class="sixteen columns">
            <div id="header-top" class="clearfix mt-column-fix">
			<?php print render($page['header_top']); ?>
            </div>
        </div>
        <?php endif; ?>
    
		<?php if ($page['header_right']) { ?>
        <div class="ten columns">
        <?php } else { ?>
        <div class="sixteen columns">
        <?php } ?>
    
            <!-- #header-left -->
            <div id="header-left" class="mt-column-fix">
            
            <?php if ($logo):?>
            <div id="logo">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
            </div>
            <?php endif; ?>
            
            <?php if ($site_name || $site_slogan):?>
				<?php if ($site_name):?>
                <div id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
                </div>
                <?php endif; ?>
                
                <?php if ($site_slogan):?>
                <div id="slogan">
                <?php print $site_slogan; ?>
                </div>
                <?php endif; ?>
            <?php endif; ?>
            
            <?php if ($page['header']) :?>
            <?php print render($page['header']); ?>
            <?php endif; ?>
            </div><!-- EOF: #header-left -->
        
        </div>
      
      	<!-- #header-right -->
        <?php if ($page['header_right']) :?>
        <div class="six columns">
            <div id="header-right" class="mt-column-fix">
            <?php print render($page['header_right']); ?>
            </div>
        </div>
        <?php endif; ?>
        <!-- EOF: #header-right -->
      
    </div><!-- EOF: #header-inside -->
    
    <div class="sixteen columns">
        <div id="main-navigation" class="clearfix mt-column-fix">
            <?php if ($page['navigation']) :?>
            <?php print drupal_render($page['navigation']); ?>
            <?php else : ?>
            <div id="main-menu">
            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('links', 'main-menu', 'menu'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), )); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    
    </div><!-- EOF: container -->
</div>
<!-- EOF: #header -->

<!-- #wrapper -->
<div id="wrapper">

    <!-- #banner -->
    <?php if ($page['banner']):?>
    <div id="banner" class="clearfix">
    <div class="container">
      <div class="sixteen columns">
        <div  class="mt-column-fix">
          <?php print render($page['banner']); ?>
        </div>
      </div>
    </div>
    </div>
    <?php endif; ?>
    <!-- EOF: #banner -->
  
    <!-- #page -->
    <div id="page">
        <div class="container">
        
            <!-- #highlighted -->
            <?php if ($page['highlighted']):?>
            <div class="sixteen columns">
            <div id="highlighted" class="clearfix mt-column-fix">
            <?php print render($page['highlighted']); ?>
            </div>
            </div>
            <?php endif; ?>
            <!-- EOF: #highlighted -->
            
            <!-- #messages -->
            <?php if ($messages):?>
            <div class="sixteen columns">
            <div id="messages-console" class="clearfix mt-column-fix">
            <?php print $messages; ?>
            </div>
            </div>
            <?php endif; ?>
            <!-- EOF: #messages -->
            
            <!-- #promoted -->
            <?php if ($page['promoted']):?>
            <div id="promoted" class="clearfix">
            <?php print render($page['promoted']); ?>
            </div>
            <?php endif; ?>
            <!-- EOF: #promoted -->
            
            <?php if (theme_get_setting('frontpage_emulate') || !drupal_is_front_page()):?>
            
            <?php if ($page['sidebar_first']) { ?>
            <div class="two-thirds column">
            <?php } else { ?>
            <div class="sixteen columns">
            <?php } ?>

                <!-- #main -->
                <div id="main" class="mt-column-fix">
                
                <!-- #custom-front-area -->
                <?php if ($page['custom_front_area']):?>
                <?php print render($page['custom_front_area']); ?>
                <?php endif; ?>
                <!-- EOF: #custom-front-area -->
                
                <?php if ($breadcrumb && theme_get_setting('breadcrumb_display')):?>
                <div id="breadcrumb">
                <?php print $breadcrumb; ?>
                </div>
                <?php endif; ?>
                
                <?php if ($tabs):?>
                <div class="tabs">
                <?php print render($tabs); ?>
                </div>
                <?php endif; ?>
                
                <?php print render($page['help']); ?>
                
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($title):?>
                <h1 class="title"><?php print $title; ?></h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                
                <?php if ($action_links):?>
                <ul class="action-links">
                <?php print render($action_links); ?>
                </ul>
                <?php endif; ?>
                
                <?php if (theme_get_setting('frontpage_content_print') || !drupal_is_front_page()):?>
                <?php print render($page['content']); ?>
                <?php endif; ?>
                
                <?php print $feed_icons; ?>
                </div><!-- EOF: #main -->
            </div>
            
            <!-- #sidebar -->
            <?php if ($page['sidebar_first']):?>
            <div class="one-third column">
                <div id="sidebar" class="mt-column-fix">
                <?php print render($page['sidebar_first']); ?>
                </div>
            </div>
            <?php endif; ?>
            <!-- EOF: #sidebar -->
            
            <?php endif; ?>
        
        </div>
    </div><!-- EOF: #page -->
  
    <!-- #footer -->
    <div id="footer">
        <div class="container">
            <!-- #footer-inner -->
            <div id="footer-inner">
            
                <div class="one-third column">
                    <!-- #footer-first -->
                    <?php if ($page['footer_first']):?>
                    <div id="footer-first" class="footer-area mt-column-fix">
                    <?php print render($page['footer_first']); ?>
                    </div>
                    <?php endif; ?>
                    <!-- EOF: #footer-first -->
                </div>
                
                <div class="one-third column">
                    <!-- #footer-second -->
                    <?php if ($page['footer_second']):?>
                    <div id="footer-second" class="footer-area mt-column-fix">
                    <?php print render($page['footer_second']); ?>
                    </div>
                    <?php endif; ?>
                    <!-- EOF: #footer-second -->
                </div>
                
                <div class="one-third column">
                    <!-- #footer-third -->
                    <?php if ($page['footer_third']):?>
                    <div id="footer-third" class="footer-area mt-column-fix">
                    <?php print render($page['footer_third']); ?>
                    </div>
                    <?php endif; ?>
                    <!-- EOF: #footer-third -->
                </div>
                
            </div><!-- EOF: #footer-inner -->
        </div>
    </div><!-- EOF: #footer -->

</div><!-- EOF: #wrapper -->

<!-- #subfooter -->
<?php if ($page['footer']):?>
<div id="subfooter">

    <div class="container">
        <div class="sixteen columns">
          <!-- #subfooter-left -->
          <div id="subfooter-inside" class="mt-column-fix">
            <?php print render($page['footer']); ?>
          </div>
        </div>
        <!-- EOF: #subfooter-message -->
    </div>

</div>
<?php endif; ?>
<!-- EOF: #subfooter -->