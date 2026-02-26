<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Millet Festival</title>

 <?php
  include("inc/style.php")
 ?>

  <!-- Preloader -->
 <?php
  include("inc/preloader.php")
 ?>



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../assets/images/hvc.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Millet Festival</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <?php
        include("inc/navbar.php")
      ?>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Total Tokens</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Total Tokens</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     
    <!-- /.content-header -->

    <!-- Main content -->
      <section class="content">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Total Tokens</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">View More<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Visitor Name</th>
                      <th>Category</th>
                      <th>Token Buyed</th>
                      <th>Token Used</th>
                      <th>Token Remainning</th>
                      <th>Amount Spended</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>1</td>
                      <td>Kevin Padaya</td>
                      <td>Guest</td>
                      <td>50</td>
                      <td>30</td>
                      <td>20</td>
                      <td>250 rs</td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>2</td>
                      <td>Ronak Goda</td>
                      <td>Faculty</td>
                      <td>20</td>
                      <td>10</td>
                      <td>10</td>
                      <td>100 rs</td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>3</td>
                      <td>Ashwin Rathod</td>
                      <td>Faculty</td>
                      <td>60</td>
                      <td>40</td>
                      <td>20</td>
                      <td>300 rs</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
        
    </section>


  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

 <?php
  include("inc/script.php")
 ?>

</body>
</html>
