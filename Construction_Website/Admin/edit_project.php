<?php
  session_start();
  include('partials/check.php');
  include('partials/conn.php');
  if(isset($_GET['editId'])){
    $updateId=$_GET['editId'];
    $projectRes=mysqli_query($conn,"Select * from projects where id=$updateId");
    $projectData=mysqli_fetch_assoc($projectRes);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang Quản Lý Website Xây Dựng | Edit Project</title>
  <?php include('partials/head.php');?>
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navigation And Preloader -->
<?php include('partials/navbar.php');?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

         
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cập nhật dự án</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Loại dự án</label>
                    <select name="category" class="form-control">
                     
                      <?php
                        $categ=mysqli_query($conn, "Select * from projects_category");
                        if(mysqli_num_rows($categ)){
                          while($categ_data=mysqli_fetch_assoc($categ)){
                            ?>
                            <option value="<?php echo $categ_data['category_name'];?>" <?php echo $projectData['category']== $categ_data['category_name']?"selectedId":"";?>><?php echo $categ_data['category_name'];?></option>
                            <?php
                          }
                        }else{
                          ?>
                            <p>No category Found!</p>
                          <?php
                        }
                      ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Tên dự án</label>
                    <input type="text" class="form-control" id="" placeholder="Project Name" name="project_name" value="<?php echo $projectData['project_name'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Hình ảnh (<?php echo $projectData['image'] ?>)</label>
                    <input type="file" class="form-control" id="" name="image[]" style="border:none;" multiple >
                  </div>
                  <div class="form-group">
                  <label for="">Mô tả</label>
                  <textarea name="details" class="form-control"  placeholder="Description" required><?php echo $projectData['details'] ?></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger" name="update_project">Cập nhật dự án</button>
                </div>
              </form>
              <?php
                if(isset($_POST['update_project'])){
                  $category=$_POST['category'];
                  $project_name=$_POST['project_name'];
                  $details=$_POST['details'];
                    $check=$_FILES['image']['name'][0];
                    if($check!=''){
                        $countImg=count($_FILES['image']['name']);
                        for($i=0;$i<$countImg;$i++){
                          $fileboat=$_FILES['image']['name'][$i];
                          move_uploaded_file($_FILES['image']['tmp_name'][$i],'../projectImg/'.$fileboat);
                          $urlboat=$fileboat;
                          $boat_arr[]=$urlboat;
                        }
                        $boat_img=implode(",",$boat_arr);
                        $ins_pro=mysqli_query($conn,"UPDATE `projects` SET `project_name`= '$project_name',`category`='$category',`image`='$boat_img',`details`='$details' WHERE id=$updateId;");
                    }else{
                        $ins_pro=mysqli_query($conn,"UPDATE `projects` SET `project_name`= '$project_name',`category`='$category',`details`='$details' WHERE id=$updateId;");
                    }


                
                  if($ins_pro){
                    echo "<script>alert('Update Successfully.......');</script>";
                    echo "<script>location.href='project_list.php';</script>";
                }else{
                    echo "<script>alert('Something Wrong.......');</script>";
                }
                }
              
              ?>
            </div>
            <!-- /.card -->

           
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php include('partials/footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

</body>
</html>
