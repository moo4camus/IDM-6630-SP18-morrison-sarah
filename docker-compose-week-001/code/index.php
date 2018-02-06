<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
 	<link rel="stylesheet" href="css/style.css">
 	<style>
@import url('https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto');
</style>
    <title>Wow, That's News</title>
  </head>
  <body>
   
  <?php
    echo "<h1>Wow, That's News</h1>";
    
    include "inc/nav.php";
      
      $section = $_GET ['section'];
      $article = $_GET ['article'];

      if (isset($_GET['article']) && isset($_GET['section'])) {
        include 'inc/article/' . $article . '/article-template.php';}


        else if (isset($_GET['article'])) {
        include 'inc/article/' . $article . '/article-template.php';}
          

        else if (isset($_GET['section'])) {
        include 'inc/section/' . $section . '/section-template.php';}
  

        else {
          include 'inc/home.php';
        }
        
  ?>
  </body>
</html>
