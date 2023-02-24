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
    <p> Which colors you like </p>
    <div>
       <input type = "checkbox" name = "color[]" value ="red"> Red
       <input type = "checkbox" name = "color[]"  value ="green"> Green
       <input type = "checkbox" name = "color[]"  value = "yellow"> Yellow
    </div>
    <button>Select</button>
    </form>
    
</body>
</html>