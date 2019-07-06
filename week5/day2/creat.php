<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 
 * 
 * 
 */include_once 'dblogin.php';
 if(isset($_POST['fullname'])and isset($_POST['age'])and isset($_POST['phone'])and isset($_POST['email'])){
     $fullname=$_POST['fullname'];
  $age=$_POST['age'];
   $phone=$_POST['phone'];
    $email=$_POST['email'];
    $db=new dblogin();
   $result=$db->signup($fullname,$age,$phone,$email);
   if($result=='1'){
       echo 'successfuly inserted';
   }  else {
       echo 'error';
   }
         
         
//    echo $fullname;
//    echo $age;
//    echo $phone;
//    echo $email;
// }
//    
 }