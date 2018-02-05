<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
 	<link rel="stylesheet" href="css/style.css">
 	<style>
@import url('https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto');
</style>
    <title>Wow, News</title>
  </head>
  <body>
    <?php

      //Section//

    $section = $_GET ['section'];

    if ($section == 'music') {
      include 'inc/section/music/section-template.php';}

    ?>
  </body>
</html>
