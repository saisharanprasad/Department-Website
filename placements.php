<?php
 

$user = 'ezyro_33683901';
$password = 'vbjfz6p';
 

$database = 'ezyro_33683901_csit';
 

$servername='sql105.ezyro.com';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 

if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 

$sql = " SELECT * FROM Placements ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
  } 


html,body
{

    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}





  </style>


  <title>CSIT DEPARTMENT</title>
    <link rel="icon" href="./Images/cvr-logo.jpg" type="image/x-icon">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="styles.css" rel="stylesheet">


</head>
<body>
    
<header style="margin-bottom:70px">
  <nav class="navbar fixed-top navbar-expand-lg bg-secondary navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="./logo.png" alt="Avatar Logo" style="width:250px;height:50px;" > 
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <ul class="navbar-nav ms-auto order-0">
           <li class="nav-item active"> <a class="nav-link" href="index.php">Home </a> </li>
            <li class="nav-item active"> <a class="nav-link" href="./About.html">About us </a> </li>
           <li class="nav-item"><a class="nav-link" href="faculty.php"> Faculty </a></li>
           <li class="nav-item"><a class="nav-link" href="infrastructure.html"> Infrastructure </a></li>
           <li class="nav-item"><a class="nav-link" href="placements.php"> Placements </a></li>
           <li class="nav-item dropdown">
              <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Student Corner  </a>
               <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="Timetable.html"> Timetable</a></li>
                 <li><a class="dropdown-item" href="Resources.html"> E-Resources </a></li>
                 <li><a class="dropdown-item" href="student-club.html"> Student Clubs </a></li>
               </ul>
           </li>
           <li class="nav-item"><a class="nav-link" href="contact.html"> Contact us </a></li>
       </ul>
      
       </div>
    </div>
  </nav>
  </header>
 
 <div class="container">
  <h2 style="text-align:center">Placements</h2>   
  <h3 style="text-align:center">Year(2022-23)</h3>   
  <p style="text-align:justify">The students of Computer Science and Information Technology branch are trained with additional programs apart from the regular classes in the course of getting placed at reputed companies. 
The Computer Science and Information Technology’s students have been obtaining internships and employments in the top leading MNCs of IT industry. 
Below are some companies the first batch of CSIT have got placed in through oncampus recruitment drives. </p>                                                                                
  <div class="table-responsive"> 
  <center>         
  <table class="table table-bordered" style="max-width:40%">
    <thead>
      <tr style="border:1px solid black">
        <th style="border:1px solid black">S No</th>
        <th style="border:1px solid black">Company</th>
        <th style="border:1px solid black">No. of Students Placed</th>
        <th style="border:1px solid black">Package</th>
      </tr>
    </thead>
    <tbody>
      <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr style="border:1px solid black">
                <td style="border:1px solid black"><?php echo $rows['S No'];?></td>
                <td style="border:1px solid black"><?php echo $rows['Company'];?></td>
                <td style="border:1px solid black;text-align:center"><?php echo $rows['Number of Students Placed'];?></td>
                <td style="border:1px solid black"><?php echo $rows['Package'];?></td>
            </tr>
            <?php
                }
            ?>
    </tbody>
  </table>
  </center>
  </div>
</div>
   
<footer id="footer">
  <div class="container-fluid" style="background-color: black; height:50px">


      <div class="credit" style="text-align:center; color:white">    Copyright ©2023:<span>CSIT Department</span>.All Rights Reserved </div>

    
  </div>
  </footer>

</body>
 
</html>

