<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP + WP: Week 2</title>
  </head>
  <body>
   <?php 

   		$snacks = array("Potato Chips", "Deep Fried", "Crunchy", "1817", "16.49");
   		function eatChips($arrayToList){
   			echo "<ul>";
   			foreach ($arrayToList as $value) {
   				echo "<li>$value</li>";
   			}
   			echo "</ul>";
   		}

   		eatChips($snacks);
    ?>
  </body>
</html>
