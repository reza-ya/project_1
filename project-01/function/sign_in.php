<?php session_start();

if (isset($_POST['sign_in'])) {
    require('dbconnect.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("location:../index.php?error=emptyfields");
        exit();
    }

    else {
        $sql = "SELECT * FROM rezayari_users WHERE user_name=? OR user_email=?;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username,$username]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {

            $pwdcheck = password_verify($password, $result['user_password']);
                if ($pwdcheck == false ){
                    header("location:../index.php?error=wrongpassword");
                    exit();
                }

                else if ($pwdcheck == true) {
                    $_SESSION['user_id'] = $result['user_id'];
                    $_SESSION['user_name'] = $result['user_name'];
                    header("location:../user_personal/userpage.php?login=success");
                    exit();

                }

        }

        else {
            header("location:../index.php?error=nosuchuser");
            exit();
        }
    }











}

else {
    header("location:../index.php?error=nobuttom");
    exit();
}