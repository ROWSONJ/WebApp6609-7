<?php
require 'conn.php';

$page = isset($_GET['page']) ? $_GET['page'] : null;
if($page == "movies"){
        $sql_update="INSERT INTO movies(movieid,mname,price,time,details) VALUES ('$_POST[movieid]','$_POST[mname]','$_POST[price]' ,'$_POST[time]' ,'$_POST[details]')";
    }elseif($page == "actors"){
        $sql_update="INSERT INTO actors(actorid,aname,alastname,aaddress,atelephone) VALUES ('$_POST[actorid]','$_POST[aname]','$_POST[alastname]' ,'$_POST[aaddress]' ,'$_POST[atelephone]')";
    }elseif($page == "users"){
        $sql_update="INSERT INTO user(userid,uname,ulastname,uaddress,utelephone) VALUES ('$_POST[userid]','$_POST[uname]','$_POST[ulastname]' ,'$_POST[uaddress]' ,'$_POST[utelephone]')";
    }else{
    echo "Error: Cannot find update page";
    header("refresh: 5; url=http://localhost/WebApp/dvdshop/mainmenu.php");
}

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
if($page == "movies"){
       
    header("refresh: 1; url=http://localhost/WebApp/dvdshop/mainmenu.php");
}elseif($page == "actors"){   
    header("refresh: 1; url=http://localhost/WebApp/dvdshop/actormenu.php");
}elseif($page == "users"){
    header("refresh: 1; url=http://localhost/WebApp/dvdshop/usermenu.php");
}
}

?>