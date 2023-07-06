<div class="container-fluid">

  <div class="header_area header_search_bg">
    <!-- only for mobile -->
    <div class="only_for_mobile d-block d-sm-none">
      <div class="mobile_menu">
        <div class="site_logo"><a href="<?php echo e_attr(url_for('site.home')); ?>"><img src="assets2/img/bing-mini.svg" alt=""></a></div>
        <div class="header_option_mobile">
          <ul class="header_menus">
            <li><a href="#" class="settings"><img src="assets2/img/settings.svg" alt=""></a></li>
            <li><a href="#" class="popup_active"><img src="assets2/img/menu.svg" alt=""></a></li>
            <li><a href="#" class="sign-in">sign in</a></li>
          </ul>
        </div>
      </div>
      <div class="mobile_search_box main_search_box">


        <form method="GET" action="<?php echo e_attr(url_for('site.search')); ?>" id="searchForm" data-ajax-form="true" data-before-callback="preventEmptySubmit" class="site_main_search">
            
            <div class="search_box">
            
          <input type="hidden" name="engine" value="<?php echo e_attr($t['current_engine_id'] ? $t['current_engine_id'] : $t['default_engine']); ?>" id="engine">

          <input type="search" name="q"  data-autocomplete="true" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="<?php echo e_attr($t['search_query']); ?>" data-search-input="true" class="search_prompt w-100">

          <button type="submit" class="has-spinner search-btn right-0" style="background:#fff; border:0;"><span class="btn-text"><?php echo svg_icon('search', 'svg-md'); ?></span>
           <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></button>
           
           </div>

         </form>


       </div>
       <!-- our ai list -->
       <div class="user_profile our_services">
        <h6>Our Ai List</h6>
        <li><a href="chat.html"><img src="assets2/img/bing-mini.svg" alt="">Bing Ai</a></li>
        <li><a href="chat.html"><img src="assets2/img/bing-mini.svg" alt="">Bing Ai</a></li>
        <li><a href="chat.html"><img src="assets2/img/bing-mini.svg" alt="">Bing Ai</a></li>
        <li><a href="chat.html"><img src="assets2/img/bing-mini.svg" alt="">Bing Ai</a></li>
      </div>
      <!-- setting options -->
      <div class="setting_for_site">
        <li><a href="preference.html">Safe Search</a></li>
        <li> <a href="preference.html">Search History</a></li>
        <li> <a href="preference.html">Collection</a></li>
        <li> <a href="preference.html">Privacy</a></li>
        <li><a href="preference.html">Feedback</a></li>
      </div>
      <!-- sign in options -->
      <div class="sign_in_options">
        <h4>Please Sign in</h4>
        <form action="">
          <label for="email">Enter your Email</label>
          <input type="email" id="email" name="email">
          <label for="password">Enter your password</label>
          <input type="password" name="password" id="password">
          <button type="submit">Login</button>
          <p>No Account Here? please <a href="registration.html">Sign up</a></p>
        </form>
      </div>
    </div>
    <!-- mobile version -->
    <div class="container-fluid">
      <div class="header_menu header_search d-none d-sm-flex">
        <div class="header_search_box">
          <a href="<?php echo e_attr(url_for('site.home')); ?>"><img src="assets2/img/bing-mini.svg" alt=""></a>

          <form method="GET" action="<?php echo e_attr(url_for('site.search')); ?>" id="searchForm" data-ajax-form="true" data-before-callback="preventEmptySubmit" class="search_page_search">
            <input type="hidden" name="engine" value="<?php echo e_attr($t['current_engine_id'] ? $t['current_engine_id'] : $t['default_engine']); ?>" id="engine">

            <input type="search" name="q"  data-autocomplete="true" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="<?php echo e_attr($t['search_query']); ?>" data-search-input="true">

            <button type="submit" class="has-spinner search-btn right-0"><span class="btn-text"><?php echo svg_icon('search', 'svg-md'); ?></span>
             <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></button>

           </form>
         </div>
         <div class="header_options">
          <ul class="header_menus">
            <li><a href="#" class="settings"><img src="assets2/img/settings.svg" alt=""></a></li>
            <li><a href="#" class="popup_active"><img src="assets2/img/menu.svg" alt=""></a></li>
            <li><a href="#" class="sign-in">sign in</a></li>
          </ul>
        </div>
      </div>


    </div>
    <!-- mobile popup -->
    <!-- our ai list -->
    <div class="user_profile our_services">
      <h6>Our Ai List</h6>
      <li><a href="chat.html"><img src="assets2/img/bing-mini.svg" alt="">Bing Ai</a></li>
      <li><a href="chat.html"><img src="assets2/img/bing-mini.svg" alt="">Bing Ai</a></li>
      <li><a href="chat.html"><img src="assets2/img/bing-mini.svg" alt="">Bing Ai</a></li>
      <li><a href="chat.html"><img src="assets2/img/bing-mini.svg" alt="">Bing Ai</a></li>
    </div>
    <!-- setting options -->
    <div class="setting_for_site">
      <li><a href="preference.html">Safe Search</a></li>
      <li> <a href="preference.html">Search History</a></li>
      <li> <a href="preference.html">Collection</a></li>
      <li> <a href="preference.html">Privacy</a></li>
      <li><a href="preference.html">Feedback</a></li>
    </div>
    <!-- sign in options -->
    <div class="sign_in_options">
      <h4>Please Sign in</h4>
      <form action="">
        <label for="email">Enter your Email</label>
        <input type="email" id="email" name="email">
        <label for="password">Enter your password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Login</button>
        <p>No Account Here? please <a href="#">Sign up</a></p>
      </form>
    </div>
  </div>



  <?php if (has_items($t['engines'])) : ?>
    <div class="search-tabs">
      <div class="container search-container nav-scrollable px-sm-3 px-0">
        <ul class="nav nav-tabs <?php echo darkmode_value('', 'nav-inverse'); ?>" role="tablist">
          <?php foreach ($t['engines'] as $tab) : ?>
            <li class="nav-item">
              <a class="sp-link nav-link <?php echo $t->get("{$tab['engine_id']}_active"); ?>"
                href="<?php echo e_attr(url_for('site.search')); ?>?q=<?php echo e_attr($t['search_query']); ?>&engine=<?php echo e_attr($tab['engine_id']); ?>">
                <?php echo e(__($tab['engine_name'], _T)); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($t['header_heading']) : ?>
    <div class="search-titlebar">
      <div class="container search-container">
        <h3 class="searchbar-title"><?php echo e($t['header_heading']); ?></h3>
      </div>
    </div>
  <?php endif; ?>
</div>