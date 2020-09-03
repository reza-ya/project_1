<?php
require('header.php');
require('../function/dbconnect.php');

$sql = "SELECT * FROM rezayari_users_post;";
// WHERE user_name=?"
$stmt = $pdo->prepare($sql);
$stmt->execute();

?>

<body>
    <main>
        <div class="picture">
    <?php
    $idlist = array();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    array_push($idlist,$row['post_id']);

      echo "<img id='myImg".$row['post_id']."' class='myImg' src='../function/uploads/".$row['user_image']."' alt='".$row['user_text']."' width='400' height='200'>";
    
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
    require('javascript.php');
    require('footer.php');
?>