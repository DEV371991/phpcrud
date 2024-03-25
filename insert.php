include('dbconnection.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
   
}

$query=mysqli_query($con,"insert into records(name,lastname,age,created_at,update_at)value('$name','$lastname','$age')");
if($query){
    echo"<script>alert('you have successful inserted the data');</script>";

}
else
{
echo "<script>alert('somthing went wrong. please try again');</script>";
}