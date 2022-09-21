<?php include('include/head.php'); ?>
<?php
if (isset($_GET['d'])) {
    $create = mysqli_query($ketnoi,"DELETE FROM `post` WHERE `id` = '".$_GET['d']."' ");
    if ($create) {
      echo '<script type="text/javascript">swal("Thành Công","Xóa thành công","success");setTimeout(function(){ history.back(); },500);</script>'; 
    } else {
      echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");setTimeout(function(){ history.back(); },1000);</script>'; 
    }
}
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include('include/nav.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="note">Nội dung</label>
                                    <textarea class="form-control" id="note" placeholder="Nội dung"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="button" id="submit-post" class="btn btn-block btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
            <!-- /.card -->
            
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Danh sách bài</h3>
                </div>
            
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px;">#</th>
                                <th>Note</th>
                                <th>Time</th>
                                <th style="width: 40px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
<?PHP $i=1; $M = mysqli_query($ketnoi,"SELECT * FROM `post` ORDER BY id desc LIMIT 0,10");while($row = mysqli_fetch_assoc($M)) { ?>
                            <tr>
                                <td><?=$i++;?></td>
                                <td><?=$row['text'];?></td>
                                <td>
                                    <?=$row['time'];?>
                                </td>
                                <td>
                                    <a href="<?=$_SEVER['REQUEST_URI'];?>?d=<?=$row['id'];?>">
                                        <button class="btn btn-sm btn-danger">XÓA</button>
                                    </a>
                                </td>
                            </tr>
<?PHP } ?>            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>


          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('include/foot.php'); ?>