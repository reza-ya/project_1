<script>
  var modalImg = document.getElementById('img01');
  var captionText = document.getElementById('caption');
  var modal = document.getElementById('myModal');

  var span = document.getElementsByClassName('close')[0];
    span.onclick = function() { 
      modal.style.display = 'none';
    }
</script>


<?php
  foreach ($idlist as $idlist) {
    echo "<script>
    var img = document.getElementById('myImg".$idlist."');
    img.onclick = function(){
      modal.style.display = 'block';
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
    </script>";
  }
?>


