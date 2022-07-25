<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEMENAG | about</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Ini Halaman about</h1>
<table>
    <tr>
        <td>Nama :</td>
        <td>{{$name}}</td>
    </tr>
    <tr>
        <td>gmail :</td>
        <td>{{$gmail}}</td>
    </tr>
    <tr>
        <td></td>
        <td><img src="img/{{$img}}" alt="{{$name}}" style="width:300px;"></td>
    </tr>
</table>
    <script src="js/script.js"></script>
</body>
</html>