<?php
    require('header.php');
?>


    
<main>
    <div class="container">
        <div class="sign-in">
            <h2 class="text-sign-in">Sign up</h2>
            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyfields") {
                        echo "<p class='errorMessage' >Please fill all fields</p>";
                    }
                    if ($_GET["error"] == "invalidemail") {
                        echo "<p class='errorMessage' >Invalid email</p>";
                    }
                    if ($_GET["error"] == "passwordcheck") {
                        echo "<p class='errorMessage' >Password repeat error</p>";
                    }
                    if ($_GET["error"] == "useroremailtaken") {
                        echo "<p class='errorMessage' >This username or email is taken</p>";
                    }
                }
            ?>
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