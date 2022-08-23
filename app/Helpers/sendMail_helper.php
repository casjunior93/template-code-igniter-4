<?php

function sendMail($template = "templates/email/email-template", $data = [])
{
  $email = \Config\Services::email();

  $email->setTo("casjunior93@gmail.com");

  $email->setSubject("Test Mail with Template");

  // Using a custom template
  $template = view($template, $data);

  $email->setMessage($template);

  // Send email
  if ($email->send()) {
    return true;
  } else {
    $data = $email->printDebugger(['headers']);
  }
}
