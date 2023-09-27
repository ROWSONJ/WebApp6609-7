<?php
    require 'conn.php';
    $sql = "SELECT * FROM movies";
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
    <title>Movies</title>
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
        <h1>Movies</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">ชื่อ</th>
                    <th scope="col-4">ระยะเวลาหนัง</th>
                    <th scope="col-4">ราคา</th>
                    <th scope="col-4">รายละเอียด</th>
                    <th scope="col-4">แก้ไขข้อมูล</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["movieid"]."</td>"."<td>".$row["mname"]."</td>"."<td>".$row["time"]."</td>"."<td>".$row["price"]."</td>"."<td>".$row["details"]."</td>"."<td>"."<a class='btn btn-dark' href='editmovbio.php?movieid=".$row["movieid"]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertmovbio.php'>Insert Movie</a>
    </div>
</body>

</html>