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
                    Whois tên miền
                </h1>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Home</a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    Whois tên miền
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
                <form id="whois-form" action="/ajax/whois.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-control-label">Tên miền muốn WHOIS </label>
                            <div class="input-group mb-3">
                                <input name="domain" type="text" placeholder="Tên miền muốn WHOIS" class="form-control" required />
                                <button type="submit" class="btn btn-dark">WHOIS</button>
                            </div>
                        </div>
                        <div id="result"></div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    
        
      <script src="/ajax/whois.js"></script>
      <!-- Footer -->
      <?php require('../layout/footer.php'); ?>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->
  </body>
</html>
