<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){

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

    username: <input name="username" >
         <div>
    PassWord: <input name = "Password" type = "password" >
         </div>
    Email :   <input name = "emailAdress" type = "email">
         <div>
    Number:   <input name = "number" type = "number">
         </div>
    Comment:<textarea>  </textarea>
         <div>
    Date:     <input name = "date" type = "date">
         </div>   
    hidden : <input name ="invisiable" type= "hidden" value="12345">
      <div>
    Submit:<button>send</button>
    </div>
</form>
</body>
</html>