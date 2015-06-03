<div<?php print $attributes; ?>>
  <header class="l-header" role="banner">
    <div class="l-first-header">
        <div class="l-navigation">
        <?php print render($page['navigation']); ?>
        </div>
        <div class="l-social">
        <?php print render($page['social']); ?>
        </div>
    </div>
    <div class="l-second-header">
        <div class="l-header-branding">
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
    <div class="l-third-header">
      <div class="l-nav_cont">
      <?php print render($page['nav_cont']); ?>
      </div>
    </div>
  </header>

  <?php if (!empty($page['highlighted'])): ?>
    <div class="l-highlighted-wrapper">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <div class="l-main l-constrained-content">
    <a id="main-content"></a>
    <?php print render($tabs); ?>
    <?php print $breadcrumb; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div class="l-content" role="main">
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
    <div class="l-sidebar">
    <?php print render($page['sidebar']); ?>
    </div>
    <div class="l-bottom">
      <div class="l-bottom_first">
      <?php print render($page['bottom_first']); ?>
      </div>
      <div class="l-bottom_second">
      <?php print render($page['bottom_second']); ?>
      </div>
      <div class="l-bottom_third">
      <?php print render($page['bottom_third']); ?>
      </div>
    </div>
  </div>

  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>
