<?php

if(isset($_POST['submit'])){
include('dbcon.php');
$number=$_POST['train_no'];
$qry="SELECT * FROM `train` WHERE `train_no`='$number'";
$run=mysqli_query($con,$qry);
?>
<table border="1" backgroundcolor="black" color="white" align="center" width="70%" margin-top="20px">
  <tr>
    <td>sl/no.</td>
    <td>Train Name</td>
    <td>Train Number</td>
    <td>Start From</td>
    <td>End at</td>
    <td>Days</td>
    

  </tr>
  <tr>
<?php
if(mysqli_num_rows($run)<1){
  ?>
  <td colspan="6">No Result found</td></tr>
    <?php
}
else{
  $count=0;
  while($data=mysqli_fetch_assoc($run)){
    $count++;
    ?>
    <tr>
      <td><?php echo "$count" ;?></td>
      <td><?php echo $data['train_name'];?></td>
      
      <td><?php echo $data['train_no'];?></td>
      <td><?php echo $data['t_from'];?></td>
      <td><?php echo $data['t_to'];?></td>
      <td><?php echo $data['day'];?></td>

     <?php

  }
}

}

 ?>
