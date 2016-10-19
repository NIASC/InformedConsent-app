<?
//Continue the session
session_start();

//Make sure that the input come from a posted form. Otherwise quit immediately
if ($_SERVER["REQUEST_METHOD"] <> "POST") 
 die("You can only reach this page by posting from the html form");

//Check if the securidy code and the session value are not blank 
//and if the input text matches the stored text
if ( ($_REQUEST["txtCaptcha"] == $_SESSION["security_code"]) && 
    (!empty($_REQUEST["txtCaptcha"]) && !empty($_SESSION["security_code"])) ) {
  echo "<h1>Test successful!</h1>";
} else {
  echo "<h1>Test failed! Try again!</h1>";
}
?>