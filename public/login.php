<?php 
require('../layout/head.php');
if(isset($_COOKIE['token'])){
	header('location: /home');
	exit;
}
?>
  <body>
    <!-- Page Container -->
    <div id="page-container">
        <main id="main-container">
            <div class="hero-static d-flex align-items-center">
                <div class="content">
                    <div class="row justify-content-center push">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <div class="block block-rounded mb-0">
                                <div class="block-header block-header-default bg-primary-light"></div>
                                <div class="block-content">
                                    <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5">
                                        <h1 class="h3 mb-1 text-center">Đăng Nhập Thành Viên</h1>
                                        <form id="login-form" action="/ajax/login.php" method="POST">
                                            <div class="py-3">
                                                <div class="mb-4">
                                                    <input type="text" class="form-control form-control-alt form-control-lg" id="username" name="username" placeholder="Username" />
                                                </div>
                                                <div class="mb-4">
                                                    <input type="password" class="form-control form-control-alt form-control-lg" id="password" name="password" placeholder="Password" />
                                                </div>
                                                <div class="mb-4">
                                                    <div class="d-md-flex align-items-md-center justify-content-md-between">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="cookie" name="cookie" />
                                                            <label class="form-check-label" for="cookie">Tôi đồng ý các điều khoản.</label>
                                                        </div>
                                                        <div class="py-2">
                                                            <a class="fs-sm fw-medium" href="/">Reset</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-block btn-alt-primary"><i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> ĐĂNG NHẬP</button>
                                                </div>
                                            </div>
                                            <p class="text-center pt-3">
                                                <span>Bạn chưa có tài khoản?</span>
                                                <a href="/register">
                                                    <span>đăng kí</span>
                                                </a>.
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fs-sm text-muted text-center text-uppercase"><strong><?=$_SERVER['SERVER_NAME'];?></strong> &copy; <span data-toggle="year-copy"></span></div>
                </div>
            </div>
        </main>
    </div>
    <!-- END Page Container -->
    <script src="/assets/js/oneui.app.min.js"></script>

    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Swal -->
    <script src="/assets/js/plugins/sweetalert2/sweetalert2.all.min.js"></script>

  </body>
</html>
