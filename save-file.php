<?php

if (!isset($_COOKIE["nim"])) header("Location: login.php");
require "connection.php";

if (isset($_POST["file-save-submit"])) {
    $filename = $_POST["file-name"];
    $filecontent = $_POST["file-content"];

    file_put_contents($filename, $filecontent);
    header("Location: editor.php");
}

?>