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
 

$sql = " SELECT * FROM Faculty WHERE Name='Ms. M. Nikita' ";
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
    width: 100%; 
  }
  } 




.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}

.b{
    text-align:center;
}
.br{
    padding-bottom:20%;
}

#footer .container-fluid {
  width: 100%;
  margin: 0px;
  padding: 0px;
}

h4{
    padding-left:20px;
}




  </style>


  <title>CSIT DEPARTMENT</title>
    <link rel="icon" href="./Images/cvr-logo.jpg" type="image/x-icon">
  <meta content="" name="description">
  <meta content="" name="keywords">
<center>
  <h1 style="font-size:40px"> CVR COLLEGE OF ENGINEERING</h1>
  <h2 style="font-size:30px">DEPARTMENT OF CSIT</h2>
</center






</head>
<body>



<br>
<br>
<br>

<?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
?>

<center>
<?php echo '<img src="data:image/jpg;base64,'.base64_encode($rows['Image']).'" style="width:200px;height:250px;">';;?>
</center>
<h1 style="text-align:center"><?php echo $rows['Name'];?></h1>
<h4>Designation: <?php echo $rows['Designation'];?></h4>
<h4>Date of Joining: <?php echo $rows['DOJ'];?></h4>
<h4>Experience: <?php echo $rows['Experience'];?></h4>
<h4>Qualification: <?php echo $rows['Qualification'];?></h4>
<h4>Google Scholar: <?php echo $rows['Scholar'];?></h4>

<button class="collapsible">Contact Details</button>
<div class="content">
  <h5>Email: <?php echo $rows['Mail'];?> </h5>
  
</div>

<button class="collapsible">Areas of Interest</button>
<div class="content">
<h5><?php echo $rows['AreasOfInterest'];?></h5>
</div>
<button class="collapsible">Publications</button>
<div class="content">
    <?php echo $rows['Publications'];?>
</div>


<?php
                }
?>



<br>
<br>
<br>
<br>

    <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
<center> <a href="http://cvrcsit.ezyro.com/faculty.php"><< Go Back </a></center>
<footer id="footer">
  <div class="container-fluid" style="background-color: black; height:50px">


      <div class="credit" style="text-align:center; color:white">    Copyright ©2023:<span>CSIT Department</span>.All Rights Reserved </div>

    
  </div>
  </footer>

</body>
</html>