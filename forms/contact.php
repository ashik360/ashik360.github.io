<?php
  //get data from form
    $name = $_POST ['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $number = $_POST['mobile'];
    
    $to = "ashik4745@gmail.com";
    $subject = "Mail From codeconia" ;
    
    $txt = "Name = ". $name . "\r\n Email = " . $email . "\r\n subject = ". $subject . "\r\n messege = ". $message . "\r\n mobile = " . $number;

    $headers = "From: noreply@yoursite.com" . "\r\n" . "CC: " ;
    if($email != NULL){
      mail($to, $subject, $txt, $headers) ;
    }
    
    // redirect
    header("Location:thankyou.html");
?>