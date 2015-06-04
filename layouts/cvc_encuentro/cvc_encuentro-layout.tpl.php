<div<?php print $attributes; ?>>
  <div class="l-header--cvc_encuentro" role="banner">
    <div class="l-first-header--cvce">
        <div class="l-header--cvce">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-branding__logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
          <?php endif; ?>
          <?php if ($site_name): ?>
            <a href="<?php print $front_page; ?>" class="site-branding__name" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <h2 class="site-branding__slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>
          <?php print render($page['branding']); ?>
        </div>
    </div>
    <div class="l-second-header--cvce"> 
        <div class="espacio--cvce">   
        <div class="l-navigation--cvce">
        <?php print render($page['navigation']); ?>
        </div></div>
        <div class="espacio--cvce">
        <div class="l-social--cvce">
        <?php print render($page['social']); ?>
        </div></div>
    </div>
  </div>
  <div class="l-main--cvc_encuentro l-constrained-content">

  <?php if (!empty($page['highlighted'])): ?>
    <div class="l-highlighted-wrapper--cvc_encuentro">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

    <div class="l-nav_cont--cvce">
    <?php print render($page['nav_cont']); ?>
    </div>


    <a id="main-content--cvce"></a>
    <?php print render($tabs); ?>
    <?php print $breadcrumb; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div class="l-content--cvce" role="main">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <div class="l-bottom--cvc_encuentro">
      <div class="l-bottom_first--cvce">
      <?php print render($page['bottom_first']); ?>
      </div>
      <div class="l-bottom_second--cvce">
      <?php print render($page['bottom_second']); ?>
      </div>
      <div class="l-bottom_third--cvce">
      <?php print render($page['bottom_third']); ?>
      </div>
    </div>
    <footer class="l-footer--cvc_encuentro" role="contentinfo">
    <?php print render($page['footer']); ?>
    </footer>
  </div>
</div>
