<?php 
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/global_style.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard_style.css">
    
</head>

<body>
    <!-- Navigation start -->
 <nav class="side-nav">
    <ul>
        <li>
            <a href="#" class="logo">
                <img src="media/logo.jpg" alt="logo">
                <span class="nav-item">XYZ</span>
            </a>
        </li>
        <li><a href="#" class="active" id="nav-list">
        <i class="fas fa-home"></i>
        <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="records.php" id="nav-list">
        <i class="fas fa-table"></i>
        <span class="nav-item">Records</span>
        </a></li>
        <li><a href="reports.php" id="nav-list">
        <i class="fas fa-tasks"></i>
        <span class="nav-item">Reports</span>
        </a></li>
        <li><a href="#" id="nav-list">
        <i class="fas fa-user"></i>
        <span class="nav-item">Users</span>
        </a></li>
        <li><a href="activities.php" id="nav-list">
        <i class="fas fa-solid fa-clock-rotate-left"></i>
        <span class="nav-item">Activities</span>
        </a></li>
        <li><a href="function/logout.php" class="logout" id="nav-list">
        <i class="fas fa-sign-out-alt"></i>
        <span class="nav-item">Logout</span>
        </a></li>
    </ul>
 </nav> 
   <!-- Navigation end -->  
    <div class="main-content">
        <!-- Header -->
        <header>
            <div class="header-title">
                <h2>
                    <label for="">
                    <span class="las la-bars">
                    </span>
                    Dashboard
                </h2>
            </div>
            <div class="user-wrapper">
                <img src="media/male.png" width="30px" height="30px" alt="user">
                <div>
                    <h5><span class="nav-item"><?php echo $_SESSION['user_name']; ?></span></h5>
                </div>
            </div>
            
        </header>
        <!-- Cards -->
        <div class="cardBox">
            <div class="card">
            <div class="numbers">2,123</div>
            <div class="cardName">Total Registered</div>
            <div class="iconBox"><i class="fa-solid fa-database"></i></div>
            </div>
            <div class="card">
            <div class="numbers">14</div>
            <div class="cardName">Barangays</div>
            <div class="iconBox"><i class="fa-solid fa-house-laptop"></i></div>
            </div>
            <div class="card">
            <div class="numbers">1,204</div>
            <div class="cardName">With Pension</div>
            <div class="iconBox"><i class="fa-solid fa-people-group"></i></div>
            </div>
            <div class="card">
            <div class="numbers">1,102</div>
            <div class="cardName">Without Pension</div>
            <div class="iconBox"><i class="fa-solid fa-user-group"></i></div>
            </div>
        </div>
        <!-- Data analytics -->
        <div class="details">
            <div class="datalist">
                <div class="cardHeader">
                    <h3>Analytics</h3>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
<?php 

}else{
     header("Location: index.php");
     exit();
}
 ?>