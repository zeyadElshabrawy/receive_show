<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <table class="table table-dark">
        <tr>
            <th>name</th>
            <th>phone</th>
            <th>password</th>
            <th>address</th>
        </tr>
        <tr>
            <th><?=$_POST['name']?></th>
            <th><?=$_POST['phone']?></th>
            <th><?=$_POST['password']?></th>
            <th><?=$_POST['address']?></th>
            </tr>
    </table>
</body>
</html>