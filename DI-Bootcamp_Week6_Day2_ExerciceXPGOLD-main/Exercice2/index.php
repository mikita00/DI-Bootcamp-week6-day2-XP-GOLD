<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ExerciceXPGOLD</title>
  </head>
  <body>
      <h2 style="color:red; font-weight:bold; text-decoration:underline;"> ExerciceXPGOLD 2</h2>

      <h3>Drawing Pattern</h3>
      <?php
      /*
      Write a Program to create given pattern with * using for loop
      You can use for or while loop
      You can use multiple (nested) loop to draw above pattern
       */
      $start = ""; // Initializing the start string to empty

      for ($i = 1; $i <= 5 ; $i++){
          for ($j = 1; ($i-$j) > 0; $j++){
              $start = $start."*";
              echo $start."<br>";
          }
         
      }

      ?>
      
    
    
     
  </body>
</html>