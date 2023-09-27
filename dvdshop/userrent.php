<?php
    require 'conn.php';
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }

    function getRentedMovies($conn, $user_id){
        $sql = "SELECT m.mname 
        FROM movies AS m
        JOIN userrent AS ur ON m.movieid = ur.movieid 
        WHERE ur.userid = ".$user_id;
        $result = $conn->query($sql);

        return $result;
    }

    function loopRentedMovies($conn, $user_id){
        $result = getRentedMovies($conn, $user_id);
        $output = null;
        if ($result->num_rows > 0) {
            $movies = array();
            while($row = $result->fetch_assoc()) {
                $movies[] = $row["mname"];
            }
            $output = implode(" , ", $movies);
        }else {
            $output = "No rented movies";
        }
        return $output;
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
    <title>Users Rents</title>
</head>

<nav>
    <ul class="menubar">
        <a class="menu" href="mainmenu.php" class="menu-item">Movies</a>
        <a class="menu" href="usermenu.php" class="menu-item">Users</a>
        <a class="menu" href="actormenu.php" class="menu-item">Actors</a>
        <a class="menu" href="movies_actors.php" class="menu-item">Movies&Actors</a>
        <a class="menu" href="userrent.php" class="menu-item">User Rents</a>
    </ul>
</nav>

<body>
    <div class="container">
        <h1>Users Rents</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col-4">ชื่อ USER</th>
                    <th scope="col-4">ชื่อหนัง</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $output = null;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $output .= '<tr class="movie-details">';
                            $output .= '<td>' . $row["uname"] . '</td>';
                            $output .= '<td>'.loopRentedMovies($conn, $row["userid"]).'</td>';
                            $output .= '</tr>';
                        }
                    } else {
                        echo "<tr><td colspan='3'>0 results</td></tr>";
                    }
                    echo $output;
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='#'> Work In Process </a>
    </div>
</body>

</html>
