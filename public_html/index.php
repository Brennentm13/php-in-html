<!DOCTYPE>
<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
   
    <body>
        
        <?php include "navbar.php" ?>
        <?php $name = "Brennen Moffett";
        $creation = "I like how coding gives me the ability to create whatever I want";
        $hard = "It is a bit tricky to learn, so far, but once you get the handle of it makes sense";
        $computer = "I love how it gives me the ability to work on the computer because I hate pen and paper";
         ?>
         
         <h1><?php echo "My name is $name" ?></h1>
         <ol>Things I like about coding</ol>
         <li><?php echo "$creation" ?></li>
         <li><?php echo "$hard" ?></li>
         <li><?php echo "$computer" ?></li>
    </body>
</html>