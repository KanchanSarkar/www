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
    <fieldset>
        <legend>Car_lo</legend>
    <div>
        <label for="title">Title</label>:
        <input autofocus type = "text" name = "My Favourite" id="title" placeholder="Title goes here">
    </div>
    <div>
        
        <textarea  name ="comment" rows = "4" cols = "40" id = "comment" placeholder="Comment"> </textarea>
    </div>
    </fieldset>

    <fieldset>
    <legend> Available Options are Car and Bike </legend>
    <div>
        <input type = "checkbox" name = "price" value = "10000" id ="visible">
        <label for="visible" >Price</label>
    
    </div>
    </fieldset>

    <fieldset>
    <legend> Price Of the Item </legend>
    <div>
         
      <input type = "radio" name = choice[] value = "I Like Car" checked> CAR <br>
      <input type = "radio" name = choice[] value = "I Like Bike" > BIKE <br>
      
    </div>
    </fieldset> 
    <fieldset>
        <div>
        <select name = "lang" id ="lang" disabled>
            <option value ="en" > English</option>
            <option value ="fr"  > France  </option>
            <option value = "gr" > Garman </option>
        </div>
        </select>

    </fieldset>   

      <button> Select Option </button>
    </form>
    
</body>
</html>