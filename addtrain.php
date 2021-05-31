
 <html>
 <body bgcolor="lightgrey">
   <h1 align="center">Insert Train Details</h1>
   <form action="addtrain.php" method="post" enctype="multipart/form-data">
     <table border="1px solid lightgreen" width="50%" align="center" cellpadding="4px">
       <tr>
         <td>Train Name</td>
         <td ><input type="text" name="name" placeholder="Enter train name" required></td>
       </tr>
       <tr>
         <td>Train Number</td>
         <td><input  type="number" name="number" placeholder="Enter train number" required></td>
       </tr>
       <tr>
       <tr>
         <td>Train Starts From</td>
         <td><input  type="text" name="start" placeholder="Start station of the train" required></td>
       </tr>
       <tr>
         <td>End Station</td>
         <td><input  type="text" name="end" placeholder="End station of the train" required></td>
       </tr>
       <tr>
         <td>Train running day</td>
         <td><input  type="text" name="day" placeholder="days on which train runs" required></td>
       </tr>
       <tr><td colspan="2" align="center"><input name="submit" type="submit" value="Submit"></td></tr>
     </table>
   </form>
 </body>
 </html>
 <?php
if(isset($_POST['submit'])){
   include('dbcon.php');
  $nam=$_POST['name'];
  $no=$_POST['number'];
  $start=$_POST['start'];
  $end=$_POST['end'];
  $day=$_POST['day'];
 
  $qry="INSERT INTO `train` (`train_name`, `train_no`, `t_from`,`t_to`,`day`)
   VALUES ('$nam','$no','$start','$end','$day')";
  $run=mysqli_query($con,$qry);
  if($run===true){
    ?>
    <script>
    alert("Record Inserted sussfully");
    </script>
    <?php
  }
else{
  echo "$con->error()";
}
}
  ?>
