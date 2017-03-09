<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num'])) {
    $n = intval($_GET['num']);
    if ($n == 1) {
        echo "1";
    } else if ($n == 2) {
        echo "1 1";
    } else {
        $firstNum = 1;
        $secondNum = 1;
        $curentNum = 0;

        echo "1 1 ";
        for ($i = 0; $i < $n - 2; $i++) {
            $curentNum = $firstNum + $secondNum;
            $firstNum = $secondNum;
            $secondNum = $curentNum;
            echo $curentNum . ' ';
        }
    }
}
?>
</body>
</html>