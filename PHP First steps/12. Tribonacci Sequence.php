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
    } else if ($n == 3) {
        echo "1 1 2";
    } else {
        $firstNum = 1;
        $secondNum = 1;
        $thirdNum = 2;
        $currentNum = 0;
        echo "1 1 2 ";

        for ($i = 0; $i < $n - 3; $i++) {
            $currentNum = $firstNum + $secondNum + $thirdNum;
            $firstNum = $secondNum;
            $secondNum = $thirdNum;
            $thirdNum = $currentNum;
            echo $currentNum . ' ';
        }
    }
}
?>
</body>
</html>