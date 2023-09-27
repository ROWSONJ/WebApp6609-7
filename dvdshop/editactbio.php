<?php
if(!isset($_GET['actorid'])){
    header("refresh: 0; url=http://localhost/WebApp/dvdshop/actormenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM actors WHERE actorid='$_GET[actorid]'";
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
    <title>Edit Actors</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editsuccess.php?page=actors">
        <h1>Edit Actors</h1>
        <p>
            <label for="aname">ชื่อ</label>
            <input type="text" name="actorid" id="actorid" value="<?=$row['actorid'];?>" hidden>
            <input type="text" name="aname" id="uname" value="<?=$row['aname'];?>" />

        </p>

        <p>
            
            <label for="alastname">นามสกุล</label>

            <input type="text" name="alastname" id="alastname" value="<?=$row['alastname'];?>" />

        </p>

        <p>

            <label for="aaddress">ที่อยู่</label>

            <input type="text" name="aaddress" id="aaddress" value="<?=$row['aaddress'];?>" />
        </p>

        <p>

            <label for="atelephone">เบอร์โทร</label>

            <input type="text" name="atelephone" id="atelephone" value="<?=$row['atelephone'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        
        <a class="btn btn-success" href='actormenu.php'>Home</a>
    </form>
</body>

</html>