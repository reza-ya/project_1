<?php
    require('header.php');
?>

<?php
    if (isset($_GET['message'])) {


        if ($_GET['message'] == 'edit') {
            echo "<main>
            <div class='main_create'>
                <form id='create_post' action='../function/edit.php' method='POST' enctype='multipart/form-data'>
                    
                    <img id='imgupload' src='../function/uploads/".$_GET['name']."' alt=''>
                    <input type='file' name='image' id='fileupload' value='".$_GET['name']."'>
                    <input type='hidden' name='hidden' value='".$_GET['id']."'>
                    <textarea name='text' id='text_area' cols='30' rows='5' value='".$_GET['text']."' placeholder='about your image'></textarea>
                    <button type='submit' name='edit_image' >Edit this shit</button>
                </form>
            </div>
        </main>";
        }
    

    elseif ($_GET['message'] == 'create') {
        echo "<main>
        <div class='main_create'>
            <form id='create_post' action='../function/create_submit.php' method='POST' enctype='multipart/form-data'>
                
                <img id='imgupload' src='' alt=''>
                <input type='file' name='image' id='fileupload'>
                <input type='hidden' value=''>
                <textarea name='text' id='' cols='30' rows='5' placeholder='about your image'></textarea>
                <button type='submit' name='submit_image' >upload this shit</button>
            </form>
        </div>
    </main>";
    }

}




?>

<script>
    const imgtag = document.getElementById("imgupload");
    const inpu = document.getElementById("fileupload");

    inpu.addEventListener("change",function() {
        const file = this.files[0];

        if(file) {
            const reader = new FileReader();

            reader.addEventListener("load",function() {
                imgtag.setAttribute("src",this.result);
            });

            reader.readAsDataURL(file);
        }
    });
</script>

<?php
require('footer.php');
?>



