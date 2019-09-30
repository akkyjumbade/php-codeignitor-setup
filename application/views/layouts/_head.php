   <base href="<?= config('base_url') ?>" />
   <meta charset="<?= config('charset')?>" />
   <?= meta('Content-type', 'text/html; charset=utf-8', 'equiv') ?>
   <?= meta('viewport', 'width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0') ?>
   <!-- Name of web application (only should be used if the website is used as an app) -->
   <?= meta('application-name', config('app.name')) ?>
   <!-- This content *may* be used as a part of search engine results. -->
   <?php if(isset($meta)) { ?>
   <?php foreach ($meta as $key => $value) {
      echo meta($key, $value);
   } ?>
   <?php } ?>
   <?= meta([ 'http-equiv' => 'Content-Language', 'content' => 'en', ]) ?>
   <!-- Force IE 8/9/10 to use its latest rendering engine -->
   <?= meta([ 'http-equiv' => 'x-ua-compatible', 'content' => 'ie=edge', ]) ?>
   <!-- Disable automatic detection and formatting of possible phone numbers by Skype Toolbar browser extension -->
   <?= meta('skype_toolbar', 'skype_toolbar_parser_compatible') ?>
   <?= meta('HandheldFriendly', 'True') ?>
   <?= meta('MobileOptimized', '320') ?>
   <!-- Windows Tiles -->
   <?= meta('msapplication-config', site_url('browserconfig.xml')) ?>
   <?= meta('msapplication-TileColor', config('app.themeColor')) ?>
   <!-- Control the behavior of search engine crawling and indexing -->
   <?= meta('robots', 'noindex, nofollow') ?>
   <?= meta('googlebot', 'noindex, nofollow') ?>
   <!-- Tells Google not to show the sitelinks search box -->
   <?= meta('google', 'nositelinkssearchbox') ?>
   <!-- Tells Google not to provide a translation for this document -->
   <?= meta('google', 'notranslate') ?>
   <!-- Select rendering engine order -->
   <?= meta('renderer', 'webkit|ie-comp|ie-stand') ?>
   <!-- Locks the screen into the specified orientation -->
   <?= meta('x5-orientation', 'landscape/portrait') ?>
   <!-- Display this document in fullscreen -->
   <?= meta('x5-fullscreen', 'true') ?>
   <!-- Document will be displayed in "application mode" (fullscreen, etc.) -->
   <?= meta('x5-page-mode', 'app') ?>
   <!-- Enable standalone (full-screen) mode -->
   <?= meta('mobile-web-app-capable', 'yes') ?>
   <!-- Status bar appearance (has no effect unless standalone mode is enabled) -->
   <?= meta('apple-mobile-web-app-status-bar-style', config('app.themeColor')) ?>
   <!-- Launch Icon Title -->
   <?= meta('apple-mobile-web-app-title', config('app.name')) ?>
   <?= meta('theme-color', config('app.themeColor')) ?>
   <!-- LINK TAGS [starts here] -->
   <?= link_tag(['href' => 'app.json', 'rel' => 'manifest', ]) ?>
   <?= link_tag([ 'href' => 'assets/images/icons/32x32.png', 'rel' => 'shortcut icon', ]) ?>
   <?= link_tag([ 'href' => 'assets/images/icons/60x60.png', 'rel' => 'icon', ]) ?>
   <?= link_tag([ 'href' => 'assets/images/icons/72x72.png', 'rel' => 'icon', ]) ?>
   <?= link_tag([ 'href' => 'assets/images/icons/96x96.png', 'rel' => 'icon', ]) ?>
   <?= link_tag([ 'href' => 'assets/images/icons/128x128.png', 'rel' => 'icon', ]) ?>
   <?= link_tag([ 'href' => 'assets/images/icons/144x144.png', 'rel' => 'icon', ]) ?>
   <?= link_tag([ 'href' => 'assets/images/icons/152x152.png', 'rel' => 'icon', ]) ?>
   <?= link_tag([ 'href' => 'assets/images/icons/192x192.png', 'rel' => 'icon', ]) ?>
   <?= link_tag([ 'href' => 'assets/images/icons/256x256.png', 'rel' => 'icon', ]) ?>
   <?= link_tag([ 'href' => 'assets/images/icons/512x512.png', 'rel' => 'icon', ]) ?>
   <!-- Apple Touch Icon (reuse 192px icon.png) -->
   <?= link_tag([
      'href' => 'assets/images/icons/1024x1024.png',
      'rel' => 'apple-touch-icon',
   ]) ?>
   <?= link_tag([
      'href' => 'assets/images/icons/32x32.png',
      'rel' => 'mask-icon',
      'color' => config('app.themeColor'),
   ]) ?>
   <!-- Icon in the highest resolution we need it for -->
   <?= link_tag([ 'href' => base_url(), 'rel' => 'canonical', ]) ?>

