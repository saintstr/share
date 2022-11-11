<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/php.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> My name is 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'And I\'m from', ' ', $city; ?>                                      
                    </p> 
           
                    <p> I'm
                    <?php  echo $age;   ?>          
                    years old </p>
                    <p> I've learned to create variables </p>
                    <p> And also studied some simple operations with them </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Writing this code was a really exciting journey for me! <br>
                    I aim to use gained knowledge in my furutre work! <br>
                    Was it also exciting for you to check my code? I don't think so 'cause it's too simple)
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
