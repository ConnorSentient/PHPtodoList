<?php
function db() {
    global $link;
    $link = mysqli_connect("localhost", "root", "password", "toDoList") or die("Failed to connect to Database");
    return $link;
}
?>