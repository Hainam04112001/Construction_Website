<?php
  session_start();
  include('partials/check.php');
  include('partials/conn.php');
  if(isset($_GET['deleteId'])){
    $delId=$_GET['deleteId'];
    $del_project=mysqli_query($conn,"DELETE FROM `contact` WHERE id=$delId");
    if($del_project){
      echo "<script>alert('Remove Successfully.......');</script>";
      echo "<script>location.href='contact.php';</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HaiNam Construction | Contact Lists</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="../logo.jpg" type="image/x-icon">
  <!-- changes Css -->
  <link rel="stylesheet" href="changes.css?<?php echo time();?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
    <?php include('partials/navbar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper my-2 py-2">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách liên hệ tư vấn </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Tin nhắn</th>
                    <th>Ngày</th>
                    <th>Hành động</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  <?php 
                    $contact_res = mysqli_query($conn,"SELECT * FROM `contact`");
                    if(mysqli_num_rows($contact_res)){
                          while($contact_data = mysqli_fetch_assoc($contact_res)){

                            ?>
                              <tr>
                                <td><?php echo $contact_data['id'];?></td>
                                <td><?php echo $contact_data['name'];?></td>
                                <td><?php echo $contact_data['phone'];?></td>
                                <td><?php echo $contact_data['email'];?></td>
                                <td><?php echo $contact_data['message'];?></td>
                                <td><?php echo $contact_data['date'];?></td>

                                
                                <td style="width:15%;">
                                  <a href="contact.php?deleteId=<?php echo $contact_data['id'];?>" onclick="return confirm('Bạn có chắc chắn xóa ?');" class="btn btn-danger" title="Delete"><i class="fa fa-trash" aria-hidden="true" style="color:#ffffff; margin:2px;"></i></a>
                                 
                                </td>
                              </tr>
                            <?php
                          }
                    }else{
                      ?>
                      <h2>Data Not Found!</h2>
                      <?php
                    }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Tin nhắn</th>
                    <th>Ngày</th>
                    <th>Hành động</th>
                  </tr>
                  </tfoot>
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
