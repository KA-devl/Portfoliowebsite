<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "anes1999@live.ca";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    
    //send email
    mail($admin_email, $subject, $message . ' - ' . $phone, "From:" . $email);
    
    header('Location: thankyou.html');
  }