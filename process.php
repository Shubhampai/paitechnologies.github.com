<?php

$to = "paishubham737@gmail.com"; /* <----add your e-mail*/
$Subject = "Freelancing Work From My Website";/*what subject you want to receive your email;*/

//Don't touch this please //
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];


// this is the headers//
$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email"; 

//the mail Function
mail($to, $Subject, $comment, $headers);
//this message will show up when you hit Submit button//
echo "Email has been sent! Thank you $name";
?>


