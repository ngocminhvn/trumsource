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
                 Lịch sử code
                </h1>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Home</a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    Lịch sử code
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr role="row" class="bg-primary text-white">
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Tên sản phẩm</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Thời gian</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                  $data = $db->query("SELECT * FROM `code_historys` WHERE `buyer` = '".$user['id']."' ORDER BY id desc limit 0, 10");
                    if($data){
                      foreach($data as $row){
                        $rowCode = $db->get_row("SELECT * FROM `code_products` WHERE `id` = '".$row['code']."'");
                ?>    
                    <tr>
                        <th class="text-center" scope="row"><?=__($row['id']);?></th>
                        <td class="fw-semibold">
                            <a><?=__($rowCode['name']);?></a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge bg-info"><?=__(datetime($row['time']));?></span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a class="btn btn-success me-1 mb-3" href="<?=__($rowCode['download']);?>">
                                    <i class="fa fa-fw fa-download"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php
                      }
                    }else{
                      echo table_empty();
                    }
                ?>
                </tbody>
            </table>
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
