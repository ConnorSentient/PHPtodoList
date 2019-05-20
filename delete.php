<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>ToDo List</title>
</head>
<body>
<div>
    <a href="index.php"><i class="fas fa-chevron-left header"></i></a>
</div>
</body>
<?php
require_once "db_connect.php";

if(isset($_GET['id'])) {
    db();
    global $link;
    $id = $_GET['id'];
    $query = "DELETE FROM todo WHERE id='$id'";
    echo "Entry Deleted";
    mysqli_query($link, $query);

} else {
    echo "Error: Failed to Delete Entry";
}
?>
</html>