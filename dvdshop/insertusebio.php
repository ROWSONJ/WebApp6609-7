<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Users</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="insertbiosuccess.php?page=users">
        <h1>Insert Users</h1>
        <p>   
            <label for="userid">id</label>
            <input type="text" name="userid" id="userid" >   
        </p>
        <p>

            <label for="uname">ชื่อ</label>
            <input type="text" name="uname" id="uname">

        </p>

        <p>

            <label for="ulastname">นามสกุล</label>

            <input type="text" name="ulastname" id="ulastname">

        </p>

        <p>

            <label for="uaddress">ที่อยู่</label>

            <input type="text" name="uaddress" id="uaddress">

        </p>

        <p>

            <label for="utelephone">เบอร์โทร</label>

            <input type="text" name="utelephone" id="utelephone">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='usermenu.php'>Home</a>
    </form>
</body>

</html>