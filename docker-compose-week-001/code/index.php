<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
 	<link rel="stylesheet" href="css/style.css">
 	<style>
@import url('https://fonts.googleapis.com/css?family=Just+Another+Hand|Raleway');
</style>
    <title>Fave Five Films</title>
  </head>
  <body>
    <?php

      // Heading // 
    	echo "<h1>Fave Five Films</h1>";

    	echo "<h2>Some movies warrant a rewatch at least once a year."

     // Movie Lists //
      $movie1 = array(
        'title'=> 'Wayne\'s World',
        'imdbURL' => 'http://www.imdb.com/title/tt0105793',
        'year' => '1992',
        'rTS' => '86%',
        'genre' => 'Comedy',
        'poster' => 'img/ww.jpg',
      );

      $movie1 = array(
        'title'=> 'The Craft',
        'imdbURL' => 'http://www.imdb.com/title/tt0115963/',
        'year' => '1996',
        'rTS' => '50%',
        'genre' => 'Horror',
        'poster' => 'img/craft.jpg',
      );

      $movie1 = array(
        'title'=> 'Reservoir Dogs',
        'imdbURL' => 'http://www.imdb.com/title/tt0105236/',
        'year' => '1992',
        'rTS' => '90%',
        'genre' => 'Action',
        'poster' => 'img/rdogs.jpg',
      );

      $movie1 = array(
        'title'=> 'Total Recall',
        'imdbURL' => 'http://www.imdb.com/title/tt0100802/',
        'year' => '1990',
        'rTS' => '82%',
        'genre' => 'Action/Sci-Fi',
        'poster' => 'img/totalrecall.jpg',
      );

      $movie1 = array(
        'title'=> 'The Addam\'ms Family',
        'imdbURL' => 'http://www.imdb.com/title/tt0101272',
        'year' => '1991',
        'rTS' => '60%',
        'genre' => 'Comedy',
        'poster' => 'img/addams.jpg',
      );

      //Master Array//
      $movie_list = array();
      array_push($movie_list, $movie1, $movie2, $movie3, $movie4, $movie5);

      //Output//



      function eatChips($arrayToList){
        echo "<ul>";
        foreach ($arrayToList as $value) {
          echo "<li>$value</li>";
        }
        echo "</ul>";
      } 

	?>
 	<?php include "inc/nav.php" ?>

    <img src="img/featherhat.jpg" alt="Cher Horowitz">
  </body>
</html>
