<?php
    require 'conn.php';
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Users</title>
</head>

<nav>
    <ul class = "menubar">
        <a class = "menu" href="mainmenu.php" class="menu-item">Movies</a>
        <a class = "menu" href="usermenu.php" class="menu-item">Users</a>
        <a class = "menu" href="actormenu.php" class="menu-item">Actors</a>
        <a class = "menu" href="movies_actors.php" class="menu-item">Movies&Actors</a>
        <a class = "menu" href="userrent.php" class="menu-item">User Rents</a>
    </ul>
</nav>
<body>
    <div class="container">
        <h1>Users</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">ที่อยู่</th>
                    <th scope="col-4">เบอร์โทร</th>
                    <th scope="col-4">แก้ไขข้อมูล</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["userid"]."</td>"."<td>".$row["uname"]." ".$row["ulastname"]."</td>"."<td>".$row["uaddress"]."</td>"."<td>".$row["utelephone"]."</td>"."<td>"."<a class='btn btn-dark' href='editusebio.php?userid=".$row["userid"]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertusebio.php'>Insert Users</a>
    </div>
</body>

</html>