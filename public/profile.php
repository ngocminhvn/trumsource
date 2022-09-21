<?php
require('../core/app.php');

if(isset($_GET['code'])){
    $code = injection($_GET['code']);
}
$row = $db->get_row("SELECT * FROM `card_user` WHERE `code` = '".$code."'");
if(!$row){
  die('Không xác định code.');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta http-equiv="content-language" content="vi" />
        <meta name="robots" content="index, follow'" />
        <title><?=$row['name'];?> - Trang Cá Nhân</title>
        <meta name="description" content="Trang cá nhân miễn phí của TrumSource.COM." />
        <meta name="keywords" content="profile, free, TrumSource, trum source, source code" />
        <meta property="og:title" content="Thông Tin Cá Nhân <?=$row['name'];?>" />
        <meta property="og:type" content="Website" />
        <meta property="og:url" content="https://trumsource.com" />
        <meta property="og:image" content="<?=$row['avatar'];?>" />
        <meta property="og:description" content="Trang cá nhân miễn phí của TrumSource.COM." />
        <meta property="og:site_name" content="Trang cá nhân miễn phí của TrumSource.COM." />
        <meta property="article:tag" content="shopmailco.com, hktool.io, traodoisub.com, termux.com, facebook.com, tuongtaccheo.com, rpwliker.com" />
        <link rel="icon" href="<?=$row['avatar'];?>" />
        <link rel="apple-touch-icon" href="<?=$row['avatar'];?>" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/public/assets/default/plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="/public/assets/default/plugins/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="/public/assets/default/plugins/select2/css/select2.min.css" />
        <link rel="stylesheet" href="/public/assets/default/plugins/fancybox/fancybox.min.css" />
        <link rel="stylesheet" href="/public/assets/default/fonts/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="/public/assets/default/css/base.css" />
        <link rel="stylesheet" href="/public/assets/default/css/style.css" />
        <script type="text/javascript" src="/public/assets/default/plugins/jquery.min.js"></script>
        <script type="text/javascript" src="/public/assets/default/plugins/bootstrap/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/public/assets/default/plugins/swiper/swiper-bundle.min.js"></script>
        <script type="text/javascript" src="/public/assets/default/plugins/select2/js/select2.min.js"></script>
        <script type="text/javascript" src="/public/assets/default/plugins/fancybox/fancybox.min.js"></script>
        <script type="text/javascript" src="/public/assets/default/plugins/swal/sweetalert2.all.min.js"></script>
        <script type="text/javascript" src="/public/assets/default/plugins/cookie/cookie.min.js"></script>
        <script type="text/javascript" src="/public/assets/default/js/app.js"></script>
    </head>
    <body>
        <div id="main" class="main">
            <div class="section-gap section-profile">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-10">
                            <div class="profile-inner">
                                <div class="profile-avatar">
                                    <img src="<?=$row['avatar'];?>" alt="" />
                                </div>
                                <div class="profile-title"><?=$row['name'];?><i class="fa fa-check-circle" style="color: rgb(24, 119, 242);font-size: 22.2px;"></i></div>
                                <div class="profile-buttons">
                                    <div class="btn-checkmess">
                                        <a href="https://m.me/<?=$row['facebook'];?>" class="btn-theme btn-theme_primary" target="_blank">
                                            <i class="fab fa-facebook-messenger"></i>
                                            Check Mess
                                            <span></span>
                                        </a>
                                        <a href="https://m.me/<?=$row['facebook'];?>" class="description-hidden">
                                            <span>Ấn vào <b>"Check Mess"</b> nhắn tin cho GDV để liên hệ hoặc trao đổi</span>
                                            <button>
                                                Ok
                                            </button>
                                        </a>
                                        <div class="description-overlay"></div>
                                    </div>
                                    <a href="tel:<?=$row['phone'];?>" class="btn-theme btn-theme_primary">
                                        <i class="fas fa-phone-alt"></i>
                                        Check Phone
                                        <span></span>
                                    </a>
                                </div>
                                <div class="profile-boxs">
                                    <div class="row row-col-15">
                                        <div class="col-md-6">
                                            <div class="profile-box">
                                                <div class="profile-box_content">
                                                    <div class="profile-box_content__title">
                                                        Thông tin liên hệ
                                                    </div>
                                                    <div class="profile-box_content__list">
                                                        <p>
                                                            <span><i class="fab fa-facebook-f"></i></span>
                                                            Check Facebook:
                                                            <a href="https://fb.com/<?=$row['facebook'];?>" target="_blank"><?=$row['facebook'];?></a>
                                                        </p>
                                                        <p>
                                                            <span><img src="/public/assets/default/images/zalo.webp" alt="" /></span>
                                                            Check Zalo:
                                                            <a href="https://zalo.me/<?=$row['phone'];?>/" target="_blank"><?=$row['phone'];?></a>
                                                        </p>
                                                    </div>
                                                    <div class="profile-box_content__image">
                                                        <img src="/public/assets/default/images/info.webp" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profile-box">
                                                <div class="profile-box_content">
                                                    <div class="profile-box_content__title">Thông Tin Khác</div>
                                                    <div class="profile-box_content__desc">
                                                        <p>
                                                            <span><i class="fas fa-user-graduate"></i></span>
                                                            Nghề Nghiệp: <span style="color: #0000ee;"><?=$row['job'];?></span>
                                                        </p>
                                                        <p>
                                                            <span><i class="fas fa-house-user"></i></span>
                                                            Sống Tại: <span style="color: #0000ee;"><?=$row['location'];?></span>
                                                        </p>
                                                    </div>
                                                    <div class="profile-box_content__image">
                                                        <img src="/public/assets/default/images/shield.webp" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-boxs">
                                    <div class="profile-box profile-box_nopr">
                                        <div class="profile-box_content">
                                            <div class="profile-box_content__title">
                                                Thông Tin Ngân Hàng Của <?=$row['name'];?>:
                                            </div>
                                            <ul>
                                                <?php
                                                    $atm = $row['stk'];
                                                    $delimiters = array("|");
                                                    $atm = str_replace($delimiters, $delimiters[0], $atm);
                                                    $arrKeyword= explode($delimiters[0], $atm);
                                                    foreach ($arrKeyword as $key)
                                                    {
                                                       echo '<li>'.$key.'</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center">
            <br />
            <a href="//www.dmca.com/Protection/Status.aspx" title="DMCA.com Protection Status" class="dmca-badge mb-3">
                <img src ="https://i.imgur.com/cdlu2fD.png"  alt="DMCA.com Protection Status" />
            </a>
            <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
            <div class="container-fluid">
                <span class="mr-1">
                    © Bản Quyền Thuộc <a href="#" style="text-transform: uppercase;">TrumSource.COM</a>
                </span>
            </div>
            <br />
        </footer>
    </body>
</html>
