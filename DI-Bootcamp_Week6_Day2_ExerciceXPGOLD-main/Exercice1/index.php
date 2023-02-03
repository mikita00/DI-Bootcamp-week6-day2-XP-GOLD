<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ExerciceXPGOLD</title>
  </head>
  <body>
      <h2 style="color:red; font-weight:bold; text-decoration:underline;"> ExerciceXPGOLD</h2>

      <h3>Factorial</h3>

      <br><br>
      <span>
     <?php
    /*
    Write a program to calculate factorial of a number using for loop in php.
   */

 // Initializing factorial to 1 because the smallest factorial is 1
  $factorial  = 1;

  // Bloc of if statement for the input from the form
  if (isset($_POST['number'])){   // for number setting

      $number = $_POST['number'];  // assigning the form's input's value to a variable

      if (!empty($number)){ // Field not empty

          if ($number < 0 ){
              echo "Please enter a positive number";
          }elseif ($number > 1){
/**************************************************************/
              for ($i = 0; $i < $number; $i++){
                  $factorial *= $number - $i;
              }
/*********************************************************** */
              echo "Factorial of ".$number." is: ".$factorial;

          }else{
              $factorial = $factorial;
              echo "Factorial of ".$number." is: ".$factorial;
          }

      }elseif ($number == 0){ // Field empty with 0 as a value

        $factorial = $factorial;
        echo "Factorial of ".$number." is: ".$factorial;

      }
      else{ 
          echo "Enter a number";
      }
  }
     ?>


     </span>
    
    <form action="index.php" method="post">
    <input type="number" name="number" >
    <br> <br>
    <input type="submit" value="Submit">
    </form>

     </table>
     
  </body>
</html>