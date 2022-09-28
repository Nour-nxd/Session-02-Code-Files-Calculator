<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>

    <body>

        <form method="post">
            <h2><br><b>Choose a number to display its multiplication table</b></h2>
            <input type="text" name="num1" class="form-control" placeholder="Enter a number"><br><br>
            <input type="submit" name="MultiTable"><br><br>
            <input name="reset" type="image" src="images/reset_button.png" class="reset_button" onclick="document.theForm.reset();return false;" height="50" width="50"/>
            </form>
            <?php
                $num1=$_POST['num1'];
                echo"This is the multiplication table of ", $num1,"<br>";
                // crearing a loop to to go through the multiplication table
                if(isset($_POST['MultiTable'])){
                    for ($i = 1; $i < 11; $i++){
                        $result= $i*$num1;
                        echo $i, " x ", $num1, "= ", $result,"<br>";
                    }
                }
        
            ?>
    </body>

</html>