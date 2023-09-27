<?php
if(!isset($_GET['userid'])){
    header("refresh: 0; url=http://localhost/WebApp/dvdshop/usermenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM user WHERE userid='$_GET[userid]'";
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
    <title>Edit Users</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editsuccess.php?page=users">
        <h1>Edit Users</h1>
        <p>
            <label for="uname">ชื่อ</label>
            <input type="text" name="userid" id="userid" value="<?=$row['userid'];?>" hidden>
            <input type="text" name="uname" id="uname" value="<?=$row['uname'];?>" />

        </p>

        <p>
            
            <label for="ulastname">นามสกุล</label>

            <input type="text" name="ulastname" id="ulastname" value="<?=$row['ulastname'];?>" />

        </p>

        <p>

            <label for="uaddress">ที่อยู่</label>

            <input type="text" name="uaddress" id="uaddress" value="<?=$row['uaddress'];?>" />
        </p>

        <p>

            <label for="utelephone">เบอร์โทร</label>

            <input type="text" name="utelephone" id="utelephone" value="<?=$row['utelephone'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        
        <a class="btn btn-success" href='usermenu.php'>Home</a>
    </form>
</body>

</html>