<?php

function died($error)
{
    echo "We are very sorry, but there were error(s) found with the form submitted!<br>";
    echo "Error(s): <br>";
    echo $error."<br><br>";
    die();
}

if (!isset($_POST['text']) || !isset($_POST['captcha']))
{
    died("We are very sorry, but there were error(s) found with the form submitted!");
}

$text = $_POST['text']; //required
$captcha = $_POST['captcha']; //required
$correctsum = $_POST['correctsum']; //required
$error_message = "";
$string_exp = "/^[A-Za-z .'-]+$/";
if (!preg_match($string_exp, $text))
{
    $error_message .= 'The Name you entered does not appear to be valid.<br>';
}
else if (!isset($_POST['captcha']))
{
    $error_message = 'Please enter the captcha!<br>';
}
else if ($_POST['captcha'] != $_POST['correctsum'])
{
    $error_message = 'The sum is not correct!<br>Please add again.<br>';
}
else
{
    header('location: insert.php');
}
if (strlen($error_message) > 0)
{
    died($error_message);
}

?>