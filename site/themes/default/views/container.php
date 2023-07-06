<?php
/**
 * Main container for the theme
 *
 * This template acts as a global container of the frontend which
 * combines all the necessary parts of the site and outputs it .
 */
defined('SPARKIN') or die('xD');
?>
<!DOCTYPE html>
<html class="<?php echo e_attr($t['html_class']); ?>" dir="<?php echo e_attr($t['locale_direction']); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
  <meta name="theme-color" content="#070404">
  <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="//fonts.googleapis.com" crossorigin>
  <link rel="preconnect" href="//cse.google.com" crossorigin>
  <link rel="preconnect" href="//www.google.com" crossorigin>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//cse.google.com">
  <link rel="dns-prefetch" href="//www.google.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets2/css/normalize.css">
  <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets2/css/style.css">
  <link rel="stylesheet" href="assets2/css/responsive.css">
  <script src="assets2/js/modernizr-3.12.0.min.js"></script>
  <?php
    /**
     * Dynamic header assets
     */
    sp_head();

    // Partial header scripts
    insert('shared/head_scripts.php');
    ?>
  </head>

  <body style="background: #fff;">
    <?php
    /**
     * SVG Sprites
     */
    insert('shared/sprites.svg');
    ?>

    <!-- Ajax Loader -->
    <div id="ajax-loader" role="bar" style="width:0;display:none" aria-hidden="true"><div class="peg"></div></div>
    <div id="ajax-loader-infinite" role="bar" style="display:none" aria-hidden="true">
      <div class="progress">
        <div class="progress-bar progress-bar-indeterminate" role="progressbar"></div>
      </div>
    </div>


    <header id="header">
      <?php
    /**
     * Site header
     */
    if (!$t['hide_header']) {
      echo $t['site_header'];
    }
    ?>
  </header>

  <main id="content" class="main-content">
    <?php
    /**
     * Site content
     */
    echo $t['site_content'];
    ?>


  </main>

  <footer id="footer">
    <?php
    /**
     * Site footer
     */
    if (!$t['hide_footer']) {
      echo $t['site_footer'];
    }
    ?>
  </footer>
  <?php
    /**
     * Dynamic footer assets
     */
    sp_footer();
    ?>


    <!-- <script src="assets2/js/Jquery-3.7.0.js"></script> -->
    <script src="assets2/js/bootstrap.min.js"></script>
    <script src="assets2/js/main.js"></script>
  </body>
  </html>
