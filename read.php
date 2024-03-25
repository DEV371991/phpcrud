<?php
include('dbconection.php');
?>
<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
               
<tbody>
<?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from records where ID =$vid");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
 
?>
 <tr>
    <th>First Name</th>
    <td><?php  echo $row['name'];?></td><br>
</tr>
<tr>
    <th>Last Name</th>
    <td><?php  echo $row['lastname'];?></td>
  </tr>
 
  <tr>
    <th>Age</th>
    <td><?php  echo $row['age'];?></td>
</tr>
<tr>
    <th>Creation Date</th>
    <td><?php  echo $row['created_at'];?></td>
    <td><?php  echo $row['updated_at'];?></td>
  </tr>
<?php 
$cnt=$cnt+1;
}?>
                 
</tbody>
</table>