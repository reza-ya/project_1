<?php
if (isset($_POST['edit_image'])) {
    $_POST['hidden'];
    $image = $_FILES['image'];
    $text = $_POST['text'];
    echo $text;

    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_tmpname = $_FILES['image']['tmp_name'];
    $file_error = $_FILES['image']['error'];
    $file_size = $_FILES['image']['size'];
    echo $file_name;
    echo $file_type;
    print_r($image);

}
else {
    echo "fuck";
}