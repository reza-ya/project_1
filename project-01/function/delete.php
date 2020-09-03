<?php

if(isset($_GET['message'])) {
    if ($_GET['message'] == 'delete') {
        require('dbconnect.php');
        $path = 'uploads/'.$_GET['image'];
        unlink($path);
        $sql = "DELETE FROM rezayari_users_post WHERE post_id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_GET['id']]);
        header("location:../user_personal/my_post.php?message=deletesuccess");
    }
}else {
    echo 'fuck';
}


