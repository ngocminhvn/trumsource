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

if(isset($_POST['delete'])){
    $delete = $db->delete("card_user"," `buyer` = '".$user['id']."' ");
    if($delete){
        die('<script>alert("Xóa thành công!");window.location.replace("/tools/create-profile");</script>');
    }else{
        die('<script>alert("'.$db->error().'");window.location.replace("/tools/create-profile");</script>');
    }
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
                    Tạo hồ sơ
                </h1>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Home</a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    Tạo hồ sơ
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
                <div class="text-center mb-2">
                    <form method="POST">
                        <button type="button" class="btn btn-primary push" data-bs-toggle="modal" data-bs-target="#modal-block-popout">Tạo Mới</button>
                        <button class="btn btn-success push" type="submit" name="delete">Xóa Hồ Sơ</button>
                    </form>
                </div>
            </div>
            <div class="row">
              <?php
                $data = $db->query("SELECT * FROM `card_user` ORDER BY id desc limit 0, 10");
                  if($data){
                    foreach($data as $row){ 
              ?>    
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="/profile/<?=$row['code'];?>" target="_blank">
                            <div class="card-body">
                                <center>
                                    <img class="rounded-circle" src="<?=$row['avatar'];?>" height="40" width="40" />
                                    <p></p>
                                    <h6 class="text-muted"><?=$row['name'];?> <i class="fa fa-check-circle" style="color: rgb(24, 119, 242);"></i></h6>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
              <?php
                    }
                  }else {
                    die('error');
                  }
              ?>
            </div>
            <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
                <div class="modal-dialog modal-dialog-popout" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Modal Title</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content fs-sm">
                                <form id="tools_card" action="/ajax/tools_card.php" method="POST">
                                    <div class="mb-4">
                                        <label class="form-label" for="name">Họ Tên</label>
                                        <div class="form-control-wrap">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Nguyễn Văn A" />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="avatar">Link Avatar</label>
                                        <div class="form-control-wrap">
                                            <input type="text" id="avatar" name="avatar" class="form-control" placeholder="https://i.imgur.com/dOUNkAK.png" />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="facebook">ID FB</label>
                                        <div class="form-control-wrap">
                                            <input type="text" id="facebook" name="facebook" class="form-control" placeholder="100041184143723" />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="phone">Phone</label>
                                        <div class="form-control-wrap">
                                            <input type="number" id="phone" name="phone" class="form-control" placeholder="0334955115" />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="job">Nghề Nghiệp</label>
                                        <div class="form-control-wrap">
                                            <input type="text" id="job" name="job" class="form-control" placeholder="Coder, Học sinh, .." />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="location">Tỉnh Thành</label>
                                        <div class="form-control-wrap">
                                            <input type="text" id="location" name="location" class="form-control" placeholder="Viet Nam" />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="stk">Số Tài Khoản</label>
                                        <div class="form-control-wrap">
                                            <textarea type="text" id="stk" name="stk" class="form-control" placeholder="MB:123456|MOMO:123456"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" class="btn btn-sm btn-block btn-primary">TẠO</button>
                                    </div>
                                </form>
                            </div>
                            <div class="block-content block-content-full text-end bg-body">
                                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Perfect</button>
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
