<?php

$from= "email@test.com";
$email = $_POST['email'];
$label1 = $_POST['label1'];
$comments = $_POST['comments'];

mail ($email, $label1, $comments, "From:".$from);

print "Your message has been sent: </br>$email<br/>$label1</br>$comments</p>";




?>