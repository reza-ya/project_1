<?php
    require('header.php');
?>


    
<main>
    <div class="container">
        <div class="sign-in">
            <h2 class="text-sign-in">Sign up</h2>
            <form action="function/register_submit.php" method="POST">
                <label for="username">UserName:</label>
                <input type="text" name="username" placeholder="username" maxlength="30">
                <label for="email">Email:</label>
                <input type="text" name="email" placeholder="email" maxlength="30">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="password" maxlength="30">
                <label for="password">repeat-Password:</label>
                <input type="password" name="repeat-password" placeholder="repeat-password" maxlength="30">
                <button type="submit" name="submit">register</button>
            </form>
            
        </div>
    </div>
</main>



<?php
    require('header.php');
?>