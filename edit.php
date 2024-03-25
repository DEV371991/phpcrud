<?php
include('dbconection.php');
?>
<form  method="POST">
 <?php
$eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from records where ID='$eid'");
print_r($eid);
while ($row=mysqli_fetch_array($ret)) {
?>
<h2>Update </h2>
<p class="hint-text">Update your info.</p>
<div class="form-group">
    <div class="row">
        <label>first name</label>
            <div class="col"><input type="text" class="form-control" name="name" value="<?php  echo $row['name'];?>" required="true"></div>
            
    </div>        	
</div><br>
 
<div class="form-group">
    <label>last name</label>
   <div class="col"><input type="text" class="form-control" name="lastname" value="<?php  echo $row['lastname'];?>" required="true"></div>
</div> <br>	
<div class="form-group">
    <label>Age</label>
    <div><input type="text" class="form-control" name="age" value="<?php  echo $row['age'];?>" required="true"></div>
</div> <br>       
<?php 
}
?>
<div class="form-group">
    <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
</div>
    </form>



<?php
//include('dbconection.php');
if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];
	//Getting Post Values
    $fname=$_POST['name'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    
 
    //Query for data updation
     $query=mysqli_query($con, "update  records set name='$fname',lastname='$lname', age='$age'");
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>