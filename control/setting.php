<?php include('include/head.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
<?php include('include/nav.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cài đặt</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cài đặt</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="updateform" action="/control/ajax/setting.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Theme website</label>
                    <select class="form-control" name="themeSetting">
                        <?php 
                            if(!empty($setting['theme'])){
                                echo '<option value="'.$setting['theme'].'">'.$setting['theme'].'</option>';
                            }else{
                                echo '<option value="">Chọn theme</option>';
                            }
                        ?>
                        <option value="">Nguyên bản</option>
                        <option value="amethyst">Amethyst</option>
                        <option value="city">City</option>
                        <option value="flat">Flat</option>
                        <option value="modern">Modern</option>
                        <option value="modern">Smooth</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Api Key MOMO</label>
                    <input class="form-control" name="momoSetting" value="<?=$setting['dlsr_momo'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Cookie thẻ siêu rẻ</label>
                    <textarea class="form-control" name="cookieSetting" rows="3"><?=$setting['thesieure'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Modal thông báo</label>
                    <textarea class="form-control" name="modalSetting" rows="3"><?=$setting['modal'];?></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('include/foot.php'); ?>
