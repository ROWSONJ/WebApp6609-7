<?php
require 'conn.php';

$page = isset($_GET['page']) ? $_GET['page'] : null;

if ($page == "movies") {
    $sql_update = "UPDATE movies SET mname='$_POST[mname]',price='$_POST[price]',time='$_POST[time]',details='$_POST[details]' WHERE movieid='$_POST[movieid]'";
} elseif ($page == "actors") {
    $sql_update = "UPDATE actors SET aname='$_POST[aname]',alastname='$_POST[alastname]',aaddress='$_POST[aaddress]',atelephone='$_POST[atelephone]' WHERE actorid='$_POST[actorid]'";
} elseif ($page == "users") {
    $sql_update = "UPDATE user SET uname='$_POST[uname]',ulastname='$_POST[ulastname]',uaddress='$_POST[uaddress]',utelephone='$_POST[utelephone]' WHERE userid='$_POST[userid]'";
} else {
    echo "Error: Cannot find update page";
    header("refresh: 5; url=http://localhost/WebApp/dvdshop/mainmenu.php");
    exit();
}

if ($conn->query($sql_update)) {
    
    echo "Edit Success";
    if($page == "movies"){
       
        header("refresh: 1; url=http://localhost/WebApp/dvdshop/mainmenu.php");
    }elseif($page == "actors"){   
        header("refresh: 1; url=http://localhost/WebApp/dvdshop/actormenu.php");
    }elseif($page == "users"){
        header("refresh: 1; url=http://localhost/WebApp/dvdshop/usermenu.php");
    }
} else {
    die("Error: " . $conn->error);
}
?>
