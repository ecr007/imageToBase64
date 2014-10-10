<?php
  $img = base64_encode(file_get_contents('https://s3-eu-west-1.amazonaws.com/ikeasiwebimages/imagenes_articulosweb/002530400107485_PE257168_S3.JPG'));
  
  $src = 'data: '.mime_content_type($img).';base64,'.$img;
  
  echo '<img src="'.$src.'">';
?>
