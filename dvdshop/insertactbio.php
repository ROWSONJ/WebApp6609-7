<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Actors</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="insertbiosuccess.php?page=actors">
        <h1>Insert Actors</h1>
        <p>   
            <label for="actorid">id</label>
            <input type="text" name="actorid" id="actorid" >   
        </p>
        <p>

            <label for="aname">ชื่อ</label>
            <input type="text" name="aname" id="aname">

        </p>

        <p>

            <label for="alastname">นามสกุล</label>

            <input type="text" name="alastname" id="alastname">

        </p>

        <p>

            <label for="aaddress">ที่อยู่</label>

            <input type="text" name="aaddress" id="aaddress">

        </p>

        <p>

            <label for="atelephone">เบอร์โทร</label>

            <input type="text" name="atelephone" id="atelephone">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='actormenu.php'>Home</a>
    </form>
</body>

</html>