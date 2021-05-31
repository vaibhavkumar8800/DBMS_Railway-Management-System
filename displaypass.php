<?php

if(isset($_POST['submit'])){
include('dbcon.php');
$number=$_POST['pnr'];
$qry="SELECT * FROM `passenger` WHERE `pnr`='$number'";
$run=mysqli_query($con,$qry);
?>
<table border="1" backgroundcolor="black" color="white" align="center" width="70%" margin-top="20px">
  <tr>
    <td>sl/no.</td>
    <td> Name</td>
    <td>PNR Number</td>
    <td>Age</td>
    <td>Gender</td>
  </tr>
  <tr>
<?php
if(mysqli_num_rows($run)<1){
  ?>
  <td colspan="5">No Result found</td></tr>
    <?php
}
else{
  $count=0;
  while($data=mysqli_fetch_assoc($run)){
    $count++;
    ?>
    <tr>
      <td><?php echo "$count" ;?></td>
      <td><?php echo $data['name'];?></td>
      
      <td><?php echo $data['pnr'];?></td>
      <td><?php echo $data['age'];?></td>
      <td><?php echo $data['gender'];?></td>
     <?php

  }
}

}

 ?>
