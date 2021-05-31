
 <html>
 <body bgcolor="lightgrey">
   <h1 align="center">Insert Passenger Details</h1>
   <form action="addpass.php" method="post" enctype="multipart/form-data">
     <table border="1px solid lightgreen" width="50%" align="center" cellpadding="4px">
       <tr>
         <td>Name</td>
         <td ><input type="text" name="name" placeholder="Enter name" required></td>
       </tr>
       <tr>
         <td>PNR Number</td>
         <td ><input type="text" name="pnr" placeholder="Enter your 5 digit PNR" required></td>
       </tr>
       <tr>
       <tr>
         <td>Age</td>
         <td><input  type="number" name="age" placeholder="Enter Age" required></td>
       </tr>
       <tr>
      
       <tr>
         <td>Gender</td>
         <td><input  type="text" name="gender" placeholder="Enter student gender" required></td>
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
  $pnr=$_POST['pnr'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
 
  $qry="INSERT INTO `passenger` (`name`,`pnr`, `age`, `gender`)
   VALUES ('$nam','$pnr','$age','$gender')";
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
