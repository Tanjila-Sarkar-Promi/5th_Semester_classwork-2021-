<?php
include 'database_connection.php';
$id=$_POST['id'];
$delete_query="DELETE FROM students_tb WHERE id='$id'";
$result= mysqli_query($connection,$delete_query);
if($result)
{
    echo 'Data has been deleted successfully';
} else{
    echo 'Failed';
}
header('Location:registration.php');
?>
