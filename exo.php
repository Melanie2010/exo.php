<?php

$ligne_un = array(
        'ligne_un'=> '1','Python','Web &amp; application'); 
$ligne_deux = array(
        'ligne_deux' => '2','C++','Application'); 
$ligne_trois = array(
        'ligne_trois' => '3','Node js','Web &amp; application'); 
$ligne_quatre = array(
        'ligne_quatre' => '4','Php','Web &amp; application');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="classement des langages web">
    <title>Spécial arrow</title>
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="image/HTML_Logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/arrow.css">
</head>
<body>

    <header>
        <h1>Spécial arrow <i aria-hidden="true" class="arrow-left"></i></h1>
    </header>
   
    <main>
        <div class="section" role="table" aria-label="table-info">
            <table>
                <caption>Le top 10 des langages</caption>
       
                 <thead>
                     <tr>
                       <th role="columnheader">Classement</th>
                       <th>Langage</th>
                       <th>Type</th>
                     </tr>
                 </thead>

                 <tbody>  
                      <tr>
                         <?php foreach($ligne_un as $cle => $value):
                         {
                         ?>

                             <td><?php echo  $value;?></td>

                         <?php  
                         }
                         endforeach;
                         ?>
                      </tr>

                      <tr>
                         <?php foreach($ligne_deux as $cle => $value_deux):
                         {
                         ?>

                           <td><?php echo  $value_deux;?></td>

                         <?php  
                         }
                         endforeach;
                         ?>
                      </tr>

                      <tr>
                         <?php foreach($ligne_trois as $cle => $value_trois):
                         {
                         ?>

                           <td><?php echo  $value_trois;?></td>

                         <?php  
                         }
                         endforeach;
                         ?>
                      </tr>

                      <tr>
                         <?php foreach($ligne_quatre as $cle => $value_quatre):
                         {
                         ?>

                             <td><?php echo  $value_quatre;?></td>

                         <?php  
                         }
                         endforeach;
                         ?>
                      </tr>
                 </tbody>

       
                  <tfoot>
                    <tr>
                       <th>Classement</th>
                       <th>Langage</th>
                      <th>Type</th>
                    </tr>
                  </tfoot>

            </table>
        </div>

        <footer>
            <p>&copy; - Giusmili  <?php print date('Y') ?></p>
        </footer>

    </main>
</body>
</html>