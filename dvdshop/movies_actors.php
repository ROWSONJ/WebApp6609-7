<?php
    require 'conn.php';
    $sql = "SELECT * FROM movies";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }

    function getMovieActor($conn,$movie_id){
        $sql = "SELECT * 
        FROM actors AS actor 
        JOIN movieactor AS movie_act ON actor.actorid = movie_act.actorid 
        WHERE movie_act.movieid = ".$movie_id;
        $result = $conn->query($sql);

        return $result;
    }

    function loopActor($conn,$movie_id){
        $result = getMovieActor($conn,$movie_id);
        $output = null;
        if ($result->num_rows > 0) {
            $actors = array();
            while($row = $result->fetch_assoc()) {
                $actors[] = $row["aname"] . " " . $row["alastname"]; // Add actor names to the array
            }     
            $output = implode(" , ", $actors);
        }else {
            $output = "No actors found";
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
                    <th scope="col-4">ชื่อนักแสดง</th>
                    <th scope="col-4">ชื่อหนัง</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $output = null;                 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            
                            $output .= '<tr class="movie-details">';
                            $output .= '<td>' . $row["mname"] . '</td>';
                            $output .= '<td>'.loopActor($conn, $row["movieid"]).'<td>';
                            $output .= '</tr>'; 
                            
                        }
                    }else {
                        echo "<tr>"."0 results"."</tr>";
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