<style><?php include "css/sidebarcss.css";?></style>
<script src="sidebar.js"></script>
<script src="https://kit.fontawesome.com/cdfa1f424e.js" crossorigin="anonymous"></script>
<!-- Load an icon library -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- The sidebar -->
<div class="sidebar">
  <a href="homepage.php"><i class="fas fa-virus"></i> COVID-19 TMS</a>
  <hr style="width: 85%;">
  <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
  <hr style="width: 85%;">
  <div class="sh_text">COVID TESTING</div>
  <button class="dropdown-btn"><i class="fas fa-cog"></i>Testing
    <i class="fa fa-caret-down" style="float:right;"></i>
  </button>
    <div class="dropdown-container">
      <a href="new-user-test.php">New User</a>
      <a href="login.php">Already Registered Admin</a>
      <a href="test-details.php"><i class="fa fa-fw fa-clipboard-list"></i>Test Details</a>
    </div>
  <a href="statewise-tests.php"><i class="fas fa-globe-asia"></i>Statewise Tests</a>
  <a href="report.php"><i class="fas fa-file-medical-alt"></i> Test Report</a>
  <a href="admin.php"><i class="fa fa-fw fa-user"></i>Admin</a>

</div>

<script>
<?php include "sidebar.js";?>
</script>
