<?php
// Reads the variables sent via POST
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
//This is the first menu screen
if ( $text == "" ) {
$response = "CON Hi welcome, I am your KDoc,  \n";
$response .= "1. Enter 1 to continue";
//k-doctor.herokuapp.com/prqwehttps://k-doctor.herokuapp.com/pruio}QWEPRUIO// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
  $response = "CON This is K_Doc i am here to answer your Health questions for free Choose Prefered Language \n";
  $response .= "1. English \n";
$response .= "3. Pigin \n";
  
  }
  //Menu for a user who selects '1' from the second menu above
  // Will be brought to this third menu screen
  else if ($text == "1*1") {
  $response = "CON How do you identify. choose one? \n";
  $response .= "1. Male \n";
  $response .= "2. Female \n"; 
  $response .= "3. Non-Binary \n";
  $response .= "4. Enter 0 to cancel\n";

  }
  else if ($text == "1*1*1") {
  $response = "CON Got it. How old are you? \n";
  $response .= "1. 10years - 20years \n";
  $response .= "2. 21years - 40years \n";
  $response .= "3. 50+ \n";
  $response .= "4. Enter 0 to cancel";
  }
  else if ($text == "1*1*1*1") {
  $response = "";
  }
  else if ($text == "1*1*1*0") {
  $response = "Your session has been canceled";
  }
  
  //echo response
  header('Content-type: text/plain');
?>