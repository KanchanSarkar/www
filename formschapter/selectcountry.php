<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
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
    <form method = "post">
    <select name = "country i want to live">
    <optgroup label ="2nd Choice">    
    <option value = "germany"> Germany</option>
    <option value = "India"  > India</option>
    </optgroup>
    <optgroup label = "1st Choice">
    <option value = "uk"> UK</option>
    <option value = "iceland" selected>Iceland</option>
    <option value = "poland">Poland</option>
    <option value = "usa"> USA</option>
    </optgroup>
    </select>
    <button>Submit</button>
    </form>
    
    
</body>
</html>