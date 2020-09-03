<?php
    require('header.php');
?>


    
<main>
    <div class="container">
        <div class="sign-in">
            <h2 class="text-sign-in">Sign in</h2>
            <form action="function/sign_in.php" method="POST">
                <label for="username">UserName:</label>
                <input type="text" name="username" placeholder="username" maxlength="30">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="password" maxlength="30">
                <label for="remeber" id="remember">remember me:</label>
                <input type="checkbox" name="remember" id="checkbox">
                <a href="register.php">register</a>
                <button type="submit" name="sign_in" >Sign in</button>
            </form>
            
        </div>
    </div>
</main>



<?php
    require('header.php');
?>