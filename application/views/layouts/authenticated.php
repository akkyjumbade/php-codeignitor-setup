<?php
?>
<!DOCTYPE html>
<html lang="en" itemscope >
<head>
	<title><?= isset($title) ? $title: '' ?></title>
   <style>
      [v-cloak] {
         opacity: 0;
         transition: all 1s ease;
      }
      #root {
         transition: all 1s ease;
      }
   </style>
   <?php include __DIR__.'/_head.php' ?>
   <!-- LINK TAGS [ends here] -->
   <link rel="stylesheet" href="/assets/styles/app.css">
</head>
<body class="bg-light">
	<div id="root" v-cloak>
      <?= $this->load->view($view) ?>
   </div>
   <script src="/assets/scripts/app.js"></script>
   <script type="module" src="/assets/scripts/custom.js"></script>
</body>
</html>
