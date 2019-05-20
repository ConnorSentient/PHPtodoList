<?php require_once("db_connect.php"); ?>

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
    <div class="wrapper">
        <div class="title">
            <h1 class="titleText">toDoList</h1>
        </div>
        <hr>
        <div class="list">
            <?php
                db();
                global $link;
                $query = "SELECT * FROM todo";
                $result = mysqli_query($link, $query);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $title = $row['todoTitle'];
                        $date = $row['date'];
            ?>
            <!-- THIS WILL BE DUPLICATED IN THE PHP -->
            <div class="listItem">
                <a href="detail.php?id=<?php echo $id?>"><h2 class="itemTitle"><?php echo $title?><hr></h2></a>
                <p class="itemDate"><?php echo $date?></p>
                <a class="delItemLink" href="delete.php?id=<?php echo $id?>"><i class="fas fa-times delItem"></i></a>
            </div>
            <!-- END OF RECCURSIVE CODE -->
            <?php
                    }
                }
            ?>
            <a href="create.php"><button class="newItem">New Item</button></a>
        </div>
    </div>
</body>
</html>