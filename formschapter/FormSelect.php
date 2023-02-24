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
    <select name ="marque []" multiple>
    <option value="devopsCourse"> DevOps </option>
    <option value="JavaCourse"> Java  </option>
    <option value="AnsibleCourse"> Ansible</option>
    </select>
    <button>Send</button>
</form>
</body>
</html>

