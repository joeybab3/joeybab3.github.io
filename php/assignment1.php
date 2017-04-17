<?php
$numb = $_GET["number"];
?>
<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>
        <form action="assignment1.php">
          Number: <input type="text" name="number" value="0"><input type="submit" value="Count">
        </form>
    <?php
        function run($num)
        {
            for($i=0; $i<$num; $i++)
            {
                echo $i;
                echo "<br/>";
            }
        }
        if(isset($numb))
        {
           run($numb); 
        }
        else {
            run(100); //run the "run" function 100x
        }
    ?>    
    </body>
</html>