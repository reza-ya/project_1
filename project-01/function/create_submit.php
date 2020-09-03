<?php session_start();
    
    if (!isset($_SESSION['user_id'])) {
        header("location:../index.php");
    }

    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];


if (isset($_POST['submit_image'])) {
    require('dbconnect.php');
    $sql = " SELECT COUNT(user_name) FROM rezayari_users_post WHERE user_name=?;";
    // $sql = "SELECT * FROM rezayari_users_post WHERE user_name=?;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_name]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row["COUNT(user_name)"] > 10) {

    header("location:../user_personal/create_post.php?message=enough");
    exit();
    }





    $file = $_FILES['image'];
    $text = $_POST['text'];
        
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_tmpname = $_FILES['image']['tmp_name'];
    $file_error = $_FILES['image']['error'];
    $file_size = $_FILES['image']['size'];


    $fileext = explode('.',$file_name);
    $fileactualext = strtolower(end($fileext));
    $allowed = array ('jpg','jpeg','png','jfif');

if (in_array($fileactualext,$allowed)) {

    if ($file_error === 0) {
        
        if ($file_size < 5000000) {

            $file_name_new = uniqid('', true).".".$fileactualext;
            $file_destination = 'uploads/'.$file_name_new;
            move_uploaded_file($file_tmpname,$file_destination);

            $sql = "INSERT INTO rezayari_users_post (user_name,user_text,user_image) VALUES (:username,:usertext,:userimage)" ;
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['username' => $user_name ,'usertext' => $text,'userimage' => $file_name_new ]);
            header("location:../user_personal/userpage.php?message=uploadsuccess");
            exit();


        }else {
            echo 'your file is too big';
        }

    }else {
        echo 'There are an error uploading your file';
    }


}else {
    echo "you cannot upload files of this type";
}










}

else {
    header("location:../userpage.php?error=somthingwrong");
    exit();
}


