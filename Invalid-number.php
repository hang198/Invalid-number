<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <input type="number" name="number1">
    <input type="number" name="number2">
    <select name="operator">
        <option>Add</option>
        <option>Sub</option>
        <option>Mul</option>
        <option>Div</option>
    </select>
    <input type="submit"></input>
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $operator = $_GET['operator'];

        switch ($operator) {
            case 'Add':
                echo $number1 + $number2;
                break;
            case 'Sub':
                echo $number1 - $number2;
                break;
            case 'Mul':
                echo $number1 * $number2;
                break;
            case 'Div':
                try{
                    $result = $number1/$number2;
                    echo $result;
                    throw new Exception($result);
                } catch (Exception $e){
                    $e -> getMessage();
                    echo "Error";
                }
        }
    }
?>


</body>
</html>
