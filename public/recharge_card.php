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
                 Nạp card
                </h1>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Home</a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    Nạp card
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">NẠP CARD</div>
                        <form id="recharge-card" action="/ajax/recharge.php" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <select class="form-control mb-3" id="type" name="type">
                                        <option value="">-- Chọn loại thẻ --</option>
                                        <option value="VIETTEL">Viettel</option>
                                        <option value="MOBIFONE">Mobifone</option>
                                        <option value="VINAPHONE">Vinaphone</option>
                                        <option value="GATE">Gate</option>
                                        <option value="ZING">Zing</option>
                                    </select>
                                    <div class="form-group">
                                        <select class="form-control mb-3" id="amount" name="amount">
                                            <option value="">-- Chọn mệnh giá --</option>
                                            <option value="10000">10.000</option>
                                            <option value="20000">20.000</option>
                                            <option value="30000">30.000</option>
                                            <option value="50000">50.000</option>
                                            <option value="100000">100.000</option>
                                            <option value="200000">200.000</option>
                                            <option value="300000">300.000</option>
                                            <option value="500000">500.000</option>
                                            <option value="1000000">1.000.000</option>
                                        </select>
                                        <div class="form-group">
                                            <input type="number" id="seri" name="seri" class="form-control mb-3" placeholder="Nhập seri" />
                                            <div class="form-group">
                                                <input type="number" id="code" name="code" class="form-control mb-3" placeholder="Nhập mã thẻ" />
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-info btn-block">Xác nhận</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            Lịch sử nạp tiền
                        </div>
                        <div class="card-body">
                            <div class="table-rep-plugin">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Loại</th>
                                                <th>Mệnh giá</th>
                                                <th>Code</th>
                                                <th>Status</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                            $userrname = $user['username'];
                                            $data = $db->query("SELECT * FROM `auto_banks` WHERE `user` = '".$user['username']."' ORDER BY id desc limit 0, 10");
                                            if($data){
                                              foreach($data as $roww){ 
                                          ?>      
                                            <tr>
                                                <td><?=__($roww['id']);?></td>
                                                <td><?=__($roww['type']);?></td>
                                                <td><?=__($roww['amount']);?></td>
                                                <td><?=__($roww['code']);?></td>
                                                <td><?=status_card($roww['status']);?></td>
                                                <td><?=datetime($roww['time']);?></td>
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
