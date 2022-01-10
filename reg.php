<?php

$name = $_POST["name"];
$email = $_POST["email"];
$town = $_POST["town"];
$comment = $_POST["comment"];

$text = '
    <h3>User = "'.$name.'"<br></h3>
    Email = "'.$email.'"<br>
    Town = "'.$town.'"<br><br>
    <i>Comment = "'.$comment.'"</i>
';

$subj = "Registration";
$mail = "MrNobodyXampp@Gmail.com";
mail ($mail, $subj, $text, "Content-type: text/html; charset=utf-8 \r\n");

echo ("Registration complete");