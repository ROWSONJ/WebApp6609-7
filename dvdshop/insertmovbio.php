<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Movies</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="insertbiosuccess.php?page=movies">
        <h1>Insert Movies</h1>
        <p>   
            <label for="mname">id</label>
            <input type="text" name="movieid" id="movieid" >   
        </p>
        <p>

            <label for="mname">ชื่อ</label>
            <input type="text" name="mname" id="mname">

        </p>

        <p>

            <label for="time">ระยะเวลา</label>

            <input type="text" name="time" id="time">

        </p>

        <p>

            <label for="price">ราคา</label>

            <input type="text" name="price" id="price">

        </p>

        <p>

            <label for="details">รายละเอียด</label>

            <input type="text" name="details" id="details">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>