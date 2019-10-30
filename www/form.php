<?php
$name = $email = $phone = $comment = "";
$nameErr = $emailErr = $phoneErr = $CommentErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Enter a Name";
    }
    else {
        $name = $_POST["name"];
    }

    if (empty($_POST["email"]))  {
        $emailErr = "Enter an email";
    }
    else {
        $email = $_POST["email"];
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "enter phone";
    }
    else {
        $phone = $_POST["phone"];
    }

    if (empty($_POST["comment"])) {
        $commentErr = "You must select 1 or more";
    }
    else {
        $comment = $_POST["comment"];
    }
}
?>
