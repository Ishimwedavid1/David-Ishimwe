<?php
if (isset($_POST['submit'])) {
    $file_name = $_FILES['file']['name'];
    $files = $_FILES['file']['type'];
    $tmp_name = $_FILES['file']['tmp_name'];


    $extantion = ['image/jpeg', 'image/png', 'image/jpg'];
    if (in_array($file_type, $extantion)) {

        if (move_uploaded_file($tmp_name, "uploads/" . $file_name)) {
            echo "uploade success";
        }
    }
} else {
    echo "unsupportade type of  file please upload png,jpeg,";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        file: <input type="file" name="file">
        <button type="submit" name="submit">upload</button>

    </form>
</body>

</html>