<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method = "post" novalidate>
    <div>
        postcode: <input name="postcode" pattern ="abc">
        <title>Please put the required </title>
    </div>
    <div>
        email:<input name ="email" type="email" required>
    </div>
    <div>
        url<input name ="url" type ="url" required>
    </div>
    <div>
        epoch:<input name = "epoch" type = "number" min ="1" max = "2" required>
    </div>
    <button>Submit </submit>
</body>
</html>