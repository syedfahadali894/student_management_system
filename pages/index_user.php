
<?php
include ("../connection.php");
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../node_modules/jquery-bar-rating/dist/themes/css-stars.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <!-- ---------font Aewsomr ico---------- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/all.css">
  <!-- --------------CDN js----------------- -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>

<style>
   .table th img,
    .table td img {
      width: 50px;
    height:50px;
    border-radius: 0%;
     }

</style>
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field ml-4 d-none d-md-block">
          <form class="d-flex align-items-stretch h-100" action="#">
            <div class="input-group">
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search">
              <div class="input-group-btn">
                <button type="button" class="btn bg-transparent dropdown-toggle px-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="mdi mdi-earth"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Today</a>
                  <a class="dropdown-item" href="#">This week</a>
                  <a class="dropdown-item" href="#">This month</a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Month and older</a>
                </div>
              </div>
              <div class="input-group-addon bg-transparent border-0 search-button">
                <button type="submit" class="btn btn-sm bg-transparent px-0">
                  <i class="mdi mdi-magnify"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-outline"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <h6 class="p-3 mb-0">Messages</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                  <p class="text-gray mb-0">
                    1 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                  <p class="text-gray mb-0">
                    15 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                  <p class="text-gray mb-0">
                    18 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">4 new messages</h6>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-calendar"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                  <p class="text-gray ellipsis mb-0">
                    Just a reminder that you have an event today
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                  <p class="text-gray ellipsis mb-0">
                    Update dashboard
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-link-variant"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                  <p class="text-gray ellipsis mb-0">
                    New admin wow!
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">See all notifications</h6>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-profile" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img src="../images/faces/face1.jpg" alt="image">
              <span class="d-none d-lg-inline">Daniel Russiel</span>
            </a>
            <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-cached mr-2 text-success"></i>
                Activity Log
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Signout
              </a>
            </div>
          </li>
          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-power"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item " >
              <a class="nav-link"  href="index.php">
                <span class="menu-title" >Dashboard</span>
                <span class="menu-sub-title">( Student Details )</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item active" >
              <a class="nav-link"  href="index.php">
                <span class="menu-title" >Dashboard</span>
                <span class="menu-sub-title">( User Details )</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user.php">
                <span class="menu-title">Add User</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="student.php">
                <span class="menu-title">Add Student</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <span class="menu-title">Log Out</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-warning text-white">
                <div class="card-body">
                  <h4 class="font-weight-normal mb-3">Current Status</h4>
                  <h2 class="font-weight-normal mb-5">
            <?php
            $sql1 = "SELECT count(*) as total FROM `login` ";
            $query1 = mysqli_query($con, $sql1);
            $result1 = mysqli_fetch_assoc($query1);
            if ($result1['total']) {
                echo $result1['total'] . " ". "User"; // Display the count of students
            } else {
                echo "0"; // If no students found
            }
            ?>
        </h2>
                  <p class="card-text">Incresed by 60%</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info text-white">
                <div class="card-body">
                  <h4 class="font-weight-normal mb-3">Active</h4>
                  <h2 class="font-weight-normal mb-5">
                  <?php
            $sql1 = "SELECT count(*) as total FROM `login` WHERE status = 'Active'";
            $query1 = mysqli_query($con, $sql1);
            $result1 = mysqli_fetch_assoc($query1);
            if ($result1['total']) {
                echo $result1['total'] . " ". "User"; // Display the count of students
            } else {
                echo "0"; // If no students found
            }
            ?>
                  </h2>
                  <p class="card-text">Decreased by 10%</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success text-white">
                <div class="card-body">
                  <h4 class="font-weight-normal mb-3">Leave</h4>
                  <h2 class="font-weight-normal mb-5">

                  <?php
            $sql1 = "SELECT count(*) as total FROM `login` WHERE status = 'Deactive'";
            $query1 = mysqli_query($con, $sql1);
            $result1 = mysqli_fetch_assoc($query1);
            if ($result1['total']) {
                echo $result1['total'] . " ". "User"; // Display the count of students
            } else {
                echo "0"; // If no students found
            }
            ?>

                  </h2>
                  <p class="card-text">Increased by 5%</p>
                </div>
              </div>
            </div>
          </div>
 
 
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <!-- <h4 class="card-title">Students</h4> -->
                

			<div class="table-title">
           
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>User</b></h2>
					</div>
					<div class="col-sm-3">
						<a href="student.php" class="btn btn-success"><i class="fa fa-address-card"></i> <span>Add New User</span></a>
						<!-- <a href="" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						 -->
					</div>
          <div class="col-sm-3">
						<a href="#" class="btn btn-success" onclick="downloadExcel()"><i class="fa fa-address-card"></i> <span>Export</span></a>
						<!-- <a href="" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						 -->
					</div>
				</div>
			</div>
            <h5>         <?php
            $sql1 = "SELECT count(*) as total FROM `login` WHERE category = 'admin';";
            $query1 = mysqli_query($con, $sql1);
            $result1 = mysqli_fetch_assoc($query1);
            if ($result1['total']) {
                echo $result1['total'] . " ". "Admin"; // Display the count of students
            } else {
                echo "0"; // If no students found
            }
            ?></h5>
			<?php
			// include("connection.php");
    $sql = "SELECT * FROM `login`";

    $query = mysqli_query($con, $sql);
$result = mysqli_num_rows($query);
// if ($result) {
//   echo "Fetching successful";
// } else {
//     echo "No records found";
// }
?>
			<table class="table table-striped table-hover" id="myTable">
				<thead>
					<tr>
          <!-- <th class="text-center">Image</th> -->
          <th class="text-center">User Id</th>  
							  
						<th class="text-center">User Name</th>
						 <th class="text-center">Category</th>
						<th class="text-center">Status</th>
						<!--<th class="text-center">Batch Code</th>
						<th class="text-center">status</th> -->
						
			 <th class="text-center">Action</th>
						<!-- <th class="text-center">View</th> -->
						<!-- <th class="text-center">Download</th>  -->
							</tr> 
            
				</thead>
				<tbody>
					
										
					<?php
                        
						if ($result > 0) {
						  while ($row = mysqli_fetch_assoc($query)) {
							?>
												<tr>
                        <!-- <td class="text-center">
    <img class="st_img" src="../images/<?php echo $row['image'];?>" alt="Image">
</td> -->
							<td class="text-center"><?php echo $row['id'];?></td>                      
							<td class="text-center"><?php echo $row['name'];?></td>
							 <td class="text-center"><?php echo $row['category'];?></td>
							<td class="text-center"><?php echo $row['status'];?></td>
							



          
					<td class="text-center"><a href="edit_user.php?id=<?php echo $row['id'];?>" ><i class="fa fa-edit text-decoration-none text-danger"></i></a>
						<a href="dlt_user.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash text-decoration-none text-success"></i></a></td>
						
												</tr>
										   
												<?php
						  }
						}
						
						
						
						
						
						?> 
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item "><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>

                  </div>
                </div>
             






          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="../https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script src="../js/all.js"></script>
  <script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</body>

</html>
