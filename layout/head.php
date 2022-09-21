<?php require($_SERVER['DOCUMENT_ROOT'].'/core/app.php'); ?>
<!doctype html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>
      <?php 
        echo(strtoupper($_SERVER['SERVER_NAME']));
      ?>
    </title>
    
    <!-- Seo -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "https://<?=$_SERVER['SERVER_NAME'];?>/",
      "name": "<?=strtoupper($_SERVER['SERVER_NAME']);?>",
      "description": "<?=strtoupper($_SERVER['SERVER_NAME']);?> - Chuyên thiết kế website MMO, chuẩn SEO, chuyên nghiệp",
      "potentialAction": {
        "@type": "SearchAction"
        }
    }
    </script>
    <meta name="description" content="<?=strtoupper($_SERVER['SERVER_NAME']);?> - Chuyên thiết kế website MMO, chuẩn SEO, chuyên nghiệp">
    <meta name="author" content="ahihingocminh">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="<?//=$user['token'];?>">
    <meta property="og:title" content="<?=strtoupper($_SERVER['SERVER_NAME']);?> - Chuyên thiết kế website MMO, chuẩn SEO, chuyên nghiệp">
    <meta property="og:site_name" content="<?=strtoupper($_SERVER['SERVER_NAME']);?>">
    <meta property="og:description" content="<?=strtoupper($_SERVER['SERVER_NAME']);?> - Chuyên thiết kế website MMO, chuẩn SEO, chuyên nghiệp">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://<?=$_SERVER['SERVER_NAME'];?>/">
    <meta property="og:image" content="https://i.imgur.com/9cO8fij.jpg">
    <meta property="og:image:alt" content="<?=strtoupper($_SERVER['SERVER_NAME']);?>">
    <meta property="og:image:width" content="1386" />
    <meta property="og:image:height" content="762" />
    <meta property="og:image:type" content="image/png" />
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="//kit-pro.fontawesome.com" />
    <link rel="dns-prefetch" href="//i.imgur.com" />
    <!-- END Seo -->
    
    <!-- Icons -->
    <link rel="shortcut icon" href="https://i.imgur.com/0pzHel0.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://i.imgur.com/0pzHel0.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://i.imgur.com/0pzHel0.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <link rel="stylesheet" id="css-main" href="/public/assets/css/oneui.min.css">
    <link rel="stylesheet" href="/public/assets/css/style.css?<?=time()?>">
    <link href="https://kit-pro.fontawesome.com/releases/v6.1.1/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/assets/js/plugins/magnific-popup/magnific-popup.css">
    <?php 
    if($setting['theme'] == 'amethyst'){
      echo('<link rel="stylesheet" id="css-theme" href="/public/assets/css/themes/amethyst.min.css">');
    }elseif($setting['theme'] == 'city'){
      echo('<link rel="stylesheet" id="css-theme" href="/public/assets/css/themes/city.min.css">');
    }elseif($setting['theme'] == 'flat'){
      echo('<link rel="stylesheet" id="css-theme" href="/public/assets/css/themes/flat.min.css">');
    }elseif($setting['theme'] == 'modern'){
      echo('<link rel="stylesheet" id="css-theme" href="/public/assets/css/themes/modern.min.css">');
    }elseif($setting['theme'] == 'smooth'){
      echo('<link rel="stylesheet" id="css-theme" href="/public/assets/css/themes/smooth.min.css">');
    }
    ?>
    <!-- END Stylesheets -->

    <!-- Script -->
    <script src="/public/assets/js/oneui.app.min.js"></script>
    <script src="/public/assets/js/jquery.js"></script>
    <script src="/public/assets/js/function.js?<?=time()?>"></script>
    <!-- END Script -->

    <!-- Plugins -->
    <script src="/public/assets/js/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="/public/assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <!-- END Plugins -->
    
    <!-- AJAX -->
    <script src="/ajax/ajax.js?<?=time()?>"></script>
    <!-- END AJAX -->

  </head>
