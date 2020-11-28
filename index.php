<form action="index.php" method="POST">
     Num1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="number" name="num1"><br>
     Operator : <input name="operator"><br>
     Num2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="number" name="num2"><br>
     <input type="submit">
</form>
<?php
    $num1 = $_REQUEST["num1"];
    $num2 = $_REQUEST["num2"];
    $operator = $_REQUEST["operator"];
    if($operator == "+")
    {
        $result = $num1 + $num2;
    }
    elseif($operator == "-")
    {
        $result = $num1 - $num2;
    }
    elseif($operator == "*")
    {
        $result = $num1 * $num2;
    }
    elseif($operator == "/")
    {
        $result = $num1 / $num2;
    }
    else
    {
        $result = "Invalid Operator";
    }
    echo "Result is = ".$result;
?>