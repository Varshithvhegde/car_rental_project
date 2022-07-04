<?php

require_once('connection.php');
$carid=$_GET['id'];
$book_id=$_GET['bookid'];
$sql2="SELECT *from booking where BOOK_Id=$book_id";
$result2=mysqli_query($con,$sql2);
$res2 = mysqli_fetch_assoc($result2);
$sql="SELECT *from cars where CAR_ID=$carid";
$result=mysqli_query($con,$sql);
$res = mysqli_fetch_assoc($result);

if($res['AVAILABLE']=='Y')
{
    echo '<script>alert("ALREADY CAR IS RETURNED")</script>';
    echo '<script> window.location.href = "adminbook.php";</script>';
}
else{
    
    $sql4="UPDATE cars set AVAILABLE='Y' where CAR_ID=$res[CAR_ID]";
    $query2=mysqli_query($con,$sql4);
    $sql5="UPDATE booking set BOOK_STATUS='RETURNED' where BOOK_ID=$res2[BOOK_ID]";
    $query=mysqli_query($con,$sql5);
    echo '<script>alert("CAR RETURNED SUCCESSFULLY")</script>';
    echo '<script> window.location.href = "adminbook.php";</script>';
}  



?>