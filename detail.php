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
    <?php
        require_once "db_connect.php";
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            db();
            global $link;
            $query = "SELECT todoTitle, todoDesc, date FROM todo WHERE id = '$id'";
            $result = mysqli_query($link, $query);
            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result);
                if($row){
                    $title = $row['todoTitle'];
                    $desc = $row['todoDesc'];
                    $date = $row['date'];
                    echo "
                    <div class='title detail'>
                        <h2 class='titleText'>$title<hr></h2>
                        <p>$desc</p>
                        <small>$date</small>
                    </div>
                    ";
                }
            } else {
                echo "<div class='error'><h1>Error: No Entry Found</h1></div>";
            }
        }
    ?>
</body>
</html>