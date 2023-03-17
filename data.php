<?php
    $text = $_POST['text'];
    $privacy = $_POST['privacy'];
    $fine =[''];
 ?>

 <h1>ORIGINAL:  <?php echo $text?> <?php echo strlen($text)?></h1>
 <h1>CENSURA: <?php echo $fine = str_replace($privacy,'***',$text)?></h1>
