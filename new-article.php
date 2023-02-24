
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'includes/database.php';

    $sql = "INSERT INTO article (title, content, published_at)
            VALUES ('" . $_POST['title'] . "','"
                       . $_POST['content'] . "','"
                       . $_POST['published_at'] . "')";

    $results = mysqli_query($conn, $sql);

    if ($results === false) {

        echo mysqli_error($conn);

    } else {

        $id = mysqli_insert_id($conn);
        echo "Inserted record with ID: $id";

    }

}
?>
<?php require 'includes/header.php'; ?>
<h1> New Article </h1>

<form method = "post">
        <div>
            <label for="title"> Title </label>
            <input name = "title" id = "title" placeholder="article title">
        </div>
        <div>
            <label for ="conctent" > Content </label>
            <textarea name ="content" id = "content" col ="4" row ="40" > </textarea>

        </div>
        <div>
            <label for ="published_at" > Published Date </label>
            <input name = "published_at" id ="publised_at" type = "date" >
        </div>
        <button>add</button>
</form>
<?php require "includes/footer.php" ; ?>