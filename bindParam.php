<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test SQL injection</title>
</head>
<body>
    <h1>Test SQL injection</h1>
    <form action="select_bindParam.php" method = "GET">
        <input type="text" placeholder = "โปรดใส่ชื่อ" name="P_Name">
        <input type="submit">
    </form>
    
</body>
</html>