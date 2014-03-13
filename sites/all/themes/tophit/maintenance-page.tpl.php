<?php

/**
 * @file
 * Override of the default maintenance page.
 *
 * This is an override of the default maintenance page. Used for Garland and
 * Minnelli, this file should not be moved or modified since the installation
 * and update pages depend on this file.
 *
 * This mirrors closely page.tpl.php for Garland in order to share the same
 * styles.
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
    <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <link rel="stylesheet" type="text/css" href="<?php print drupal_get_path('theme', 'tophit') . '/fonts/ptsans-font.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php print drupal_get_path('theme', 'tophit') . '/fonts/opensans-font.css' ?>" />
    <?php print $styles ?>
    <?php print $scripts ?>
    </head>
    
    <body class="<?php print $classes; ?>" <?php print $attributes;?>>
  
        <!-- #header -->
        <div id="header">
            <div class="container">
            <!-- #header-inside -->
            <div id="header-inside" class="clearfix">

                <div class="sixteen columns">
    
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
                    
                    </div><!-- EOF: #header-left -->
                
                </div>
              
            </div><!-- EOF: #header-inside -->

            </div><!-- EOF: container -->
        </div>
        <!-- EOF: #header -->
        
        <!-- #wrapper -->
        <div id="wrapper">
        
            <!-- #page -->
            <div id="page">
                <div class="container">
                
                    <div class="sixteen columns">
						<?php print $messages; ?>
                        <?php if ($title): ?><h1 class="title"><?php print $title; ?></h1> <?php endif; ?>
                        <?php print $content; ?>
                    </div>

                </div>
            </div><!-- EOF: #page -->
          
            <!-- #footer -->
            <div id="footer">
                <div class="container">
                  
                </div>
            </div><!-- EOF: #footer -->
        
        </div><!-- EOF: #wrapper -->
        
        <!-- #subfooter -->
        <div id="subfooter">
        
            <div class="container">
                <div class="sixteen columns">

                </div>
            </div>
        
        </div>
        <!-- EOF: #subfooter -->

  </body>
</html>