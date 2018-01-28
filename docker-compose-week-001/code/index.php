<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
 	<link rel="stylesheet" href="css/style.css">
 	<style>
@import url('https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto');
</style>
    <title>Favorite Flicks</title>
  </head>
  <body>
    <?php

     // Movie Lists //
      $movie1 = array(
        'title'=> 'Wayne\'s World',
        'imdbURL' => 'http://www.imdb.com/title/tt0105793',
        'year' => '1992',
        'rTS' => '86%',
        'genre' => 'Comedy',
        'poster' => 'img/ww.jpg',
      );

      $movie2 = array(
        'title'=> 'The Craft',
        'imdbURL' => 'http://www.imdb.com/title/tt0115963/',
        'year' => '1996',
        'rTS' => '50%',
        'genre' => 'Horror',
        'poster' => 'img/craft.jpg',
      );

      $movie3 = array(
        'title'=> 'Reservoir Dogs',
        'imdbURL' => 'http://www.imdb.com/title/tt0105236/',
        'year' => '1992',
        'rTS' => '90%',
        'genre' => 'Action',
        'poster' => 'img/rdogs.jpg',
      );

      $movie4 = array(
        'title'=> 'Total Recall',
        'imdbURL' => 'http://www.imdb.com/title/tt0100802/',
        'year' => '1990',
        'rTS' => '82%',
        'genre' => 'Action/Sci-Fi',
        'poster' => 'img/totalrecall.jpg',
      );

      $movie5 = array(
        'title'=> 'The Addam\'s Family',
        'imdbURL' => 'http://www.imdb.com/title/tt0101272',
        'year' => '1991',
        'rTS' => '60%',
        'genre' => 'Comedy',
        'poster' => 'img/addams.jpg',
      );

      //Master Array//
      $movie_list = array();
      array_push($movie_list, $movie1, $movie2, $movie3, $movie4, $movie5);

      //Loops//
      function create_movie_lists() {
        foreach ($movie_list as $current_movie) {
          make_one_movie_list($current_movie);
        }
      }

      function make_one_movie_list($movie_to_list) {
        echo "<ul>";
        echo "<li><h3>$movie_to_list[title]</h3></li>";
          echo "<ul>";
          echo "<li><img src=" . $movie_to_list[poster] . "></li>";
          echo "<li>$movie_to_list[year]</li>";
          echo "<li>$movie_to_list[genre]</li>";
          echo "<li>Rotten Tomatoes Score : " . $movie_to_list[rTS] . "</li>";
          echo "<li><a href= " . $movie_to_list[imdbURL] . ">IMDB</a></li>"; 
          echo "</ul>";
        echo "</ul>";
      }

	?>

      <!--Display-->
      <header>
        <h1>Favorite Flicks</h1>
        <h2>My Top Five Films on the Rewatch Rotation</h2>
      </header>

      <?php echo make_one_movie_list($movie1);
            echo make_one_movie_list($movie2);
            echo make_one_movie_list($movie3);
            echo make_one_movie_list($movie4);
            echo make_one_movie_list($movie5); 
        ?>

  </body>
</html>
