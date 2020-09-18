<!--
Name: Arr Belrey Domingo
Date: September 14, 2020 (Fall2020 Term)
Instructor: Philip Redmond
Course: DMIT 2025 PHP/MySQL
Description: This is a Calculator form in PHP file. User need to input Num 1, operation(+,-,*,/), and Num 2. Result will show below the form. Value of the inputs will retain in the browser (prepopping the form) 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

    <?php
        if(isset($_POST['mysubmit'])){ // code when user first come to the form, form must be blank
            $num1 = $_POST['num1'];
            $operator = $_POST['operator'];
            $num2 = $_POST['num2'];

            //echo the variables to test
            //echo "$num1 $operator $num2";

            //Let's do a switch conditional statement based on the type of operation
            switch ($operator) {
                case "add": //this is the "value" attribute of "option" tag. Can also be the text string of "option" tag, enclose it with quatation marks
                    $result = $num1 + $num2;
                    break;
                case "subtract": //this is the "value" attribute of "option" tag. Can also be the text string of "option" tag, enclose it with quatation marks
                    $result = $num1 - $num2;
                    break;
                case "multiply": //this is the "value" attribute of "option" tag. Can also be the text string of "option" tag, enclose it with quatation marks
                    $result = $num1 * $num2;
                    break;
                case "divide": //this is the "value" attribute of "option" tag. Can also be the text string of "option" tag, enclose it with quatation marks
                    $result = $num1 / $num2;
                    break;
                //default:
                    //echo "Number should not be blank";
            }
            //echo "$result";
        } // END OF code when user first come to the form, form must be blank
    ?>

    <h1>Calculator</h1>

    <form name="calcform" method="post" action="calculator.php">
        Num 1: <input type="number" name="num1" value="<?php echo $num1?>"> <!--"value" attrib is use to prepopping the form-->
        <select name="operator">

        <?php
        // quick and dirty way to retain the value of operator "input" (prepopping the form of the name="operator")
        if($operator){
            echo "\n\t<option>$operator</option>"; 
        }
        ?>

            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        Num 2: <input type="number" name="num2" value="<?php echo $num2?>"> <!--"value" attrib is use to prepopping the form-->
        <input type="submit" name="mysubmit">
    </form>

    <?php
    if($result) {
        echo "<b> = " . $result . "</b>";
    }
    
    ?>
    
</body>
</html>