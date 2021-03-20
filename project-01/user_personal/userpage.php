<?php
    require('header.php');
    
?>


<main>
    <?php   
        if (isset($_GET["message"])) {
            if ($_GET["message"] == "uploadsuccess") {
                echo "<p class='errorMessage' >Your post successfully created</p>";
            }
        }
    ?>
    <div class="container">
        <a href="create_post.php?message=create">
        <div class="option create">
            <img class="main_img" src="../../img/logo_create.png" alt="">
            <div class="text text_1">Create Post</div>
        </div>
        </a>
        <a href="my_post.php">
        <div class="option mypost">
        <img class="main_img" src="../../img/logo_my_post.png" alt="">
            <div class="text text_2">My Post</div>
        </div>
        </a>
        <a href="all_post.php">
        <div class="option allpost">
        <img class="main_img" src="../../img/logo_all_post.png" alt="">
            <div class="text text_3">All Post</div>
        </div>
        </a>
    </div>
    
</main>



<?php
    require('footer.php');
?>