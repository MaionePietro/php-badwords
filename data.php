<?php
    $text = $_POST['text'];
    $privacy = $_POST['privacy'];
    $fine = str_replace($privacy,'***',$text);
 ?>
 <h1>ORIGINAL:  <?php echo $text.' '.strlen($text);?></h1>
 <h1>CENSURA: <?php echo $fine;?></h1>
