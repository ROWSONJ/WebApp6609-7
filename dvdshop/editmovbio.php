<?php
if(!isset($_GET['movieid'])){
    header("refresh: 0; url=http://localhost/WebApp/dvdshop/mainmenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM movies WHERE movieid='$_GET[movieid]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movies</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editsuccess.php?page=movies">
        <h1>Edit Movies</h1>
        <p>
            <label for="mname">ชื่อ</label>
            <input type="text" name="movieid" id="movieid" value="<?=$row['movieid'];?>" hidden>
            <input type="text" name="mname" id="mname" value="<?=$row['mname'];?>" />

        </p>

        <p>
            
            <label for="price">ราคา</label>

            <input type="text" name="price" id="price" value="<?=$row['price'];?>" />

        </p>

        <p>

            <label for="time">ระยะเวลาหนัง</label>

            <input type="text" name="time" id="time" value="<?=$row['time'];?>" />
        </p>

        <p>

            <label for="details">รายละเอียด</label>

            <input type="text" name="details" id="details" value="<?=$row['details'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>