<?php
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