<?php include('include/head.php'); ?>
<?php
if (isset($_GET['d'])) {
    $create = $db->query("DELETE FROM `user` WHERE `id` = '".$_GET['d']."' ");
    if ($create) {
      echo '<script type="text/javascript">swal("Thành Công","Xóa thành công","success");setTimeout(function(){ history.back(); },500);</script>'; 
    } else {
      echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");setTimeout(function(){ history.back(); },1000);</script>'; 
    }
}
?>
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
            <h1>Quản Lý Người Dùng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản Lý Người Dùng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách user</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Số Dư</th>
                    <th>Chức vụ</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
        <?PHP foreach($db->query("SELECT * FROM `user` ORDER BY id desc LIMIT 0,10") as $row){ ?>
                  <tr>
                    <td><?=$row['username'];?></td>
                    <td>
                        <div class="edit_user"><?=$row['money'];?></div>
                        <input class="useredit form-control" id="<?=$row['id'];?>" value="<?=$row['money'];?>" style="display:none;">
                    </td>
                    <td><?=$row['role'];?></td>
                    <td><a href="<?=$_SEVER['REQUEST_URI'];?>?d=<?=$row['id'];?>"><button class="btn btn-danger">XÓA</button></a></td>
                  </tr>
        <?PHP } ?>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('include/foot.php'); ?>
