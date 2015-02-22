<?php

function handleError($errno, $errstr, $errfile, $errline)
{
  //Set message/log info
  $subject = "$[Open de Bloc] Erreur: MAJOR PROBLEM at " . APP_NAME . ': ' . date("F j, Y, g:i a");
  $body = "Code: $errno\r\n"
    . "Message: $errstr\r\n"
    . "File: $errfile\r\n"
    . "Line: $errline\r\n";

  /*
    An email will be sent to the site administrator.
    Its subject line will have the date and time it occurred while
    the body will contain the state of all of the global variables. This information
    is obtained through the function trigger_dump.
  */
  mail("romain.goffe@gmail.com", $subject, $body);

  // The same subject line and body of the email will get written to the error log.
  error_log("$subject\r\n $body");

  /*
    We don't want users to know the true nature of the problem so
    we just redirect them to a generic error page that has been created.
    The generic page should have a simple message, such as "System down
    for maintenance." The key idea is not to let any potentially malicious
    user learn about the actual problem that had occurred.
  */
  header ("Location: error.html");
  exit; 
}

?>
