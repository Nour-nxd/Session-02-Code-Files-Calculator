
<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Multiplication</title>
    </head>

    <body>


        <h2>Simple Calculator</h2>

        <form method="post">
        <h4><b>Enter 1st Value</b></h4>
        <input type="text" name="num1" class="form-control" placeholder="1st Number"><br><br>
        <h4><b>Enter 2nd Value</b></h4>
        <input type="text" name="num2" class="form-control" placeholder= "2nd Number"><br><br>
        <h4><b>Choose the operation</b></h4>
        <h5>Choice(1 = * , 2 = -, 3 = /, 4 = +)</h5>
        <input type="text" name="choice" class="form-control" placeholder="Choice(1 , 2, 3, 4)"><br /><br />
        <input type="submit" name="submit"><br><br>
        <input name="reset" type="image" src="images/reset_button.png" class="reset_button" onclick="document.theForm.reset();return false;" height="50" width="50"/>
        </form>
        <h4>Result: </h4>
        <?php
            // if(isset($_POST['Addition'])){

            //     $sum=0;

            //     $num1 = $_POST['num1'];
            //     $num2 = $_POST['num2'];
            //     $sum = $num1+$num2;

            //     echo $sum;
            // }
        ?>
         <?php
             if(isset($_POST['submit'])){
                $sum=0; 
                $one=$_POST['num1'];
                $two=$_POST['num2'];
    
                $choice=$_POST['choice'];
    
                  //echo $one;
                  switch($choice) {
                    case 1: $sum=$one*$two;
                    echo $sum;   
                    break;
    
                    case 2: $sum=$one-$two; 
                    echo $sum;;
                    break;
    
                    case 3: $sum=$one/$two;  
                    echo $sum;;
                    break;
    
                    case 4: $sum=$one+$two;
                    echo $sum;;
                    break;
    
                    default: echo 'Invalid input<br>';
                }
                }
        ?>

    </body>

</html>
