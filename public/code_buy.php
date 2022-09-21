<?php 
require('../layout/head.php');

if(isset($_GET['code'])){
    $id = injection($_GET['code']);
}
$row = $db->get_row("SELECT * FROM `code_products` WHERE `id` = '".$id."'");
if(!$row){
  die('Không xác định code.');
}
?>
  <body>
    <!-- Page Container -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Sidebar -->
      <?php require('../layout/sidebar.php'); ?>
      <!-- END Sidebar -->

      <!-- Header -->
      <?php require('../layout/header.php'); ?>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                 <?=__($row['name']);?>
                </h1>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Home</a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    <?=__($row['name']);?>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <div class="row items-push js-gallery img-fluid-100 js-gallery-enabled">
              <div class="col-xl-8">
              <div class="card shadow">
                      <div class="card-body">
                          <h5 class="h5 text-left fw-bold"><i class="far fa-exclamation-circle"></i> CHÚ Ý</h5>
                          <ul>
                              <li>Hãy đừng tiếc tiền mà lấy code trên mạng hoặc bên thứ 3 về dùng.</li>
                              <li>Code trên mạng sẽ gắn keylog, mã độc, ... Khi dùng sẽ bị mất tiền hoặc đánh cắp thông tin quan trọng của bạn.</li>
                              <li>Hãy mua code an toàn, đảm bảo tại đây!</li>
                              <li>Trong trường hợp dùng code share chúng tôi sẽ không hỗ trợ bất cứ gì về code này.</li>
                          </ul>
                      </div>
                  </div>
                  <div class="card mt-3 shadow">
                      <div class="card-body p-3">
                          <h4 class="h5 text-muted text-center mt-3 mb-3"><?=__($row['name']);?></h4>
                          <div>
                              <ul>
                                  <div class="text-center">
                                    <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="<?=$row['thumbnail'];?>">
                                        <img class="img-fluid w-100 mb-3 border-bottom" src="<?=$row['thumbnail'];?>" alt="demo" />
                                        <br>
                                        <?php
                                          if(!empty($row['demo'])){
                                            $data = $row['demo'];
                                            $delimiters = array("|",",");
                                            $data = str_replace($delimiters, $delimiters[0], $data);
                                            $arrkey= explode($delimiters[0], $data);
                                            foreach ($arrkey as $key)
                                            {
                                               echo '<img class="img-fluid w-100 mb-3 border-bottom" src="'.$row['thumbnail'].'" alt="demo" />';
                                            }
                                          }  
                                        ?>

                                    </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 mt-2">
                  <div>
                      <div class="card shadow">
                          <div class="card-body">
                              <h4 class="h5 fw-bold text-left"><i class="fal fa-shopping-cart" style="color: blueviolet;"></i> Mua code</h4>
                              <center>
                                  <span class="fw-bold"><i class="fal fa-money-bill-alt"></i> Giá tiền: <span class="fw-bold h4">Miễn phí</span></span>
                              </center>
                              <br>
                              <p><i class="fal fa-shield-check" style="color: yellowgreen;"></i> Tên code: <?=__($row['name']);?></p>
                              <p><i class="fal fa-shield-check" style="color: yellowgreen;"></i> Ngày phát hành: <?=datetime($row['time']);?></p>
                              <p><i class="fal fa-shield-check" style="color: yellowgreen;"></i> Được nén bằng ZIP</p>
                                <form id="buy" action="/ajax/source.php" class="text-center" method="POST">
                                  <input type="hidden" name="id" id="id" value="<?=$row['id'];?>" readonly>
                                  <button type="submit" class="btn btn-outline-info"><i class="fal fa-shopping-cart"></i>
                                  <?php
                                    if($row['amount'] == 0){
                                      echo('MIỄN PHÍ');
                                    }else{
                                      echo(number_format($row['amount']).'đ');
                                    }
                                  ?>
                                  </button>
                                <form>
                          </div>
                      </div>
                      <div class="card mt-2 shadow">
                          <div class="card-body">
                              <h4 class="h5 fw-bold" style="text-align: left;"><i class="fa-solid fa-question text-danger"></i> Hỗ trợ</h4>
                              <p><i class="fal fa-shield-check" style="color: yellowgreen;"></i> Không biết setup code nhận hỗ trợ qua Zalo hoặc Facebook nếu cần (có kèm phí)</p>
                              <p><i class="fal fa-shield-check" style="color: yellowgreen;"></i> <a href="#">Liên hệ</a> nếu không biết cài code!</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <?php require('../layout/footer.php'); ?>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->
  </body>
</html>
