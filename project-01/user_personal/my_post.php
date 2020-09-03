<?php
require('header.php');
require('../function/dbconnect.php');

$sql = "SELECT * FROM rezayari_users_post WHERE user_name=?;";
// WHERE user_name=?"
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_name]);

?>

<body>
    <main>
    <div class="picture">
    <?php
    $idlist = array();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    array_push($idlist,$row['post_id']);
      echo "<div class='cr_img'>";
      echo "<img id='myImg".$row['post_id']."' class='myImg' src='../function/uploads/".$row['user_image']."' alt='".$row['user_text']."' width='300' height='200'>";
      echo "<a href='../function/delete.php?message=delete&id=".$row['post_id']."&image=".$row['user_image']."' class='button_1 delete'>delete</a>";
      echo "</div>";
     }

?>
            </div>
    <div id='myModal' class='modal'>
          <span class='close'>&times;</span>
          <img class='modal-content' id='img01'>
          <div id='caption' class='caption'></div>
          </div>
    </main>
    
</body>

<?php
// while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

//     echo "<img src='../function/uploads/".$row['user_image']."'>";
//     // ".$row['user_image']."
// }

?>
    



<?php
    require('javascript.php');
    require('footer.php');
?>