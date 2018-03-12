<?php
  function IsInjected($str)
  {
    $injections = array('(\n+)',
                        '(\r+)',
                        '(\t+)',
                        '(%0A+)',
                        '(%0D+)',
                        '(%08+)',
                        '(%09+)'
                       );

    $inject = join('|', $injections);
    $inject = "/$inject/i";

    if(preg_match($inject, $str))
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  if(IsInjected($email))
  {
    exit;
  }

  $name = $_POST['name'];
  $company = $_POST['company'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $email_from = 'visitor@8bitbento@gmail.com';
  $email_subject = "$name Inquiry";
  $email_body = "$message\n$name\n$phone\n$email\n$company";

  $to = "jonathanyiv@8bitbento.com, benjaminpetersen@8bitbento.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $email \r\n";

  mail($to, $email_subject, $email_body, $headers);
?>
