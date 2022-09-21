<?php 
require('../layout/head.php');
if(!isset($_COOKIE['token'])){
  header('location: /login');
  die();
}else if(!$user){
  header('location: /login');
  unset($_COOKIE['token']);
  setcookie('token', null, -1, '/');
  die();
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
                 Danh sách code
                </h1>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Home</a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    Danh sách code
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <div class="row items-push mb-4">
              <!-- Search Form -->
              <form action="/code-search" method="POST">
                  <div class="mb-4">
                      <div class="input-group">
                          <input type="text" class="form-control" id="s" name="s" placeholder="Search all orders.." />
                          <span class="btn btn-success input-group-text border-0">
                              <i class="fa fa-search"></i>
                          </span>
                      </div>
                  </div>
              </form>
              <!-- END Search Form -->
              <?php
                $data = $db->query("SELECT * FROM `code_products` ORDER BY id desc limit 0, 10");
                  if($data){
                    foreach($data as $row){ 
              ?>    
              <div class="col-md-4 mb-3 animated fadeIn">
                  <div class="card code-products">
                      <div class="options-container fx-item-zoom-in mb-2">
                          <img src="<?=$row['thumbnail'];?>" class="img-fluid options-item" height="167px" />
                      </div>
                      <div class="card-inner">
                          <h5 class="card-title"><?=__($row['name']);?></h5>
                          <!--<p class="card-text">v1</p>-->
                          <a href="/view-source/<?=__($row['id']);?>" class="btn btn-block btn-primary btn-round text-center">
                              <span>
                                  <?php
                                    if($row['amount'] == 0){
                                      echo('Miễn phí');
                                    }else{
                                      echo(number_format($row['amount']).'đ');
                                    }
                                  ?>
                              </span>
                          </a>
                      </div>
                  </div>
              </div>
              <?php
                    }
                  }else {
                    echo table_empty();
                  }
              ?>
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