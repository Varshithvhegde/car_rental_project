<?php

// require_once('connection.php');
// if(isset($_POST['regs']))
// {
//     $fname=mysqli_real_escape_string($con,$_POST['fname']);
//     $lname=mysqli_real_escape_string($con,$_POST['lname']);
//     $email=mysqli_real_escape_string($con,$_POST['email']);
//     $lic=mysqli_real_escape_string($con,$_POST['lic']);
//     $ph=mysqli_real_escape_string($con,$_POST['ph']);
//     $id=mysqli_real_escape_string($con,$_POST['id']);
//     $pass=mysqli_real_escape_string($con,$_POST['pass']);

//     if(empty($fname)|| empty($lname)|| empty($email)|| empty($lic)|| empty($ph)|| empty($id)|| empty($pass))
//     {
//         echo 'Please Fill in the place';
//     }
  
       
//         $sql="insert into users (FNAME,LNAME,EMAIL,LIC_NUM,PHONE_NUMBER,USER_ID,PASSWORD) values('$fname','$lname','$email','$lic',$ph,'$id','$pass')";
//         $result = mysqli_query($con,$sql);

//         if($result){
//             echo 'YourRecordidsaves';
//         }
//         else{
//             echo 'pleasecheckconnecion';
//         }
// }
session_start();
$value = $_SESSION['rdate'];
echo $value;



?>