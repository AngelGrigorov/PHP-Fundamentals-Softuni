
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>

</head>
<body>
<?php
function evenOnes($num){
    $numbers = "";
    for($i = 1;$i <=$num;$i++){
        if($i % 2 == 0 && $i > 0){
            $numbers .= $i . " ";
        }
    }
    return $numbers;
}
if (isset($_GET['num'])) {
    $num = evenOnes($_GET['num']);
    echo $num;
} else { ?>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
<?php } ?>
</body>
</html>





