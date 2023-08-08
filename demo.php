<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >

  <title>CSIT DEPARTMENT</title>
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
  <?php include 'index.php'?>
  <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.html">
        <img src="./logo.png" alt="Avatar Logo" style="width:350px;height:50px;" > 
      </a>
      <a class="navbar-brand" href="./index.html">
        <h1 style="text-align:justify">DEPARTMENT OF CSIT</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav">
           <li class="nav-item active"> <a class="nav-link" href="./index.html">Home </a> </li>
           <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> About us</a>
             <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="./About.html"> About CSIT</a></li>
               <li><a class="dropdown-item" href="./vision.html"> Vission & Mission</a></li>
             </ul>
         </li>
           <li class="nav-item"><a class="nav-link" href="#"> Faculty </a></li>
           <li class="nav-item"><a class="nav-link" href="#"> Infrastructure </a></li>
           <li class="nav-item dropdown">
              <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Student Corner  </a>
               <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#"> Timetable</a></li>
                 <li><a class="dropdown-item" href="#"> Achievements </a></li>
                 <li><a class="dropdown-item" href="#"> E-Resources </a></li>
                 <li><a class="dropdown-item" href="#"> Student Clubs </a></li>
               </ul>
           </li>
           <li class="nav-item"><a class="nav-link" href="#"> Contact us </a></li>
       </ul>
      

    </div>
  </nav>
  <h1 style="text-align: center;">Time Table</h1>
  <center>
  <a href = "1.pdf" download = "file"> 
    <b >Download</b>
    </center>
  </body>
</html>









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