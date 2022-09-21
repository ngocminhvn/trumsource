<?php include('include/head.php'); ?>
<script>
$(function(){
    $("#insert_code").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var formAction = form.attr("action");
        var formData = form.serialize();
        $.post(formAction, formData,
          function (data) {
              if(data.status === false){
                sweet(data.message, "error");
              }else{
                sweet(data.message, "success");
              }
        }, "json");
    });
});
</script>
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
                <form id="insert_code" action="ajax/insert_code.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="name">Tên code</label>
                                    <input type="text" class="form-control" placeholder="Tên code" id="name" name="name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="demo">Demo</label>
                                    <input type="text" class="form-control" placeholder="Link demo" id="demo" name="demo" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="amount">Giá</label>
                                    <input type="number" class="form-control" placeholder="Nhập giá" id="amount" name="amount" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="download">Download</label>
                                    <input type="text" class="form-control" placeholder="Link tải" id="download" name="download" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="thumbnail">Thumbnail</label>
                                    <input type="text" class="form-control" placeholder="Link tải" id="thumbnail" name="thumbnail" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Lưu</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
            <!-- /.card -->

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
