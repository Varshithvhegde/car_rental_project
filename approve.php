<?php

require_once('connection.php');
$bookid=$_GET['id'];
$sql="SELECT *from booking where BOOK_Id=$bookid";
$result=mysqli_query($con,$sql);
$res = mysqli_fetch_assoc($result);
$car_id=$res['CAR_ID'];
$sql2="SELECT *from cars where CAR_ID=$car_id";
$carres=mysqli_query($con,$sql2);
$carresult = mysqli_fetch_assoc($carres);
$email=$res['EMAIL'];
$carname=$carresult['CAR_NAME'];
if($carresult['AVAILABLE']=='Y')
{
if($res['BOOK_STATUS']=='APPROVED' || $res['BOOK_STATUS']=='RETURNED')
{
    echo '<script>alert("ALREADY APPROVED")</script>';
    echo '<script> window.location.href = "adminbook.php";</script>';
}
else{
    $query="UPDATE booking set  BOOK_STATUS='APPROVED' where BOOK_ID=$bookid";
    $queryy=mysqli_query($con,$query);
    $sql2="UPDATE cars set AVAILABLE='N' where CAR_ID=$res[CAR_ID]";
    $query2=mysqli_query($con,$sql2);
    
    echo '<script>alert("APPROVED SUCCESSFULLY")</script>';
    // $to_email = $email;
    // $subject = "DONOT-REPLY";
    // $body = "YOUR BOOKING FOR THE CAR $carname IS BEEN APPROVED WITH BOOKING ID : $bookid";
    // $headers = "From: sender email";
    
    // if (mail($to_email, $subject, $body, $headers))
    
    // {
    //     echo "Email successfully sent to $to_email...";
    // }
    
    // else

    // {
    // echo "Email sending failed!";
    // }
    echo '<script> window.location.href = "adminbook.php";</script>';
}  
}
else{
    echo '<script>alert("CAR IS NOT AVAILABLE")</script>';
    echo '<script> window.location.href = "adminbook.php";</script>';
}


?>