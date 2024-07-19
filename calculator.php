<?php
session_start();

if (isset($_POST['num'])) {
    $num = $_POST['input'] . $_POST['num'];
} else {
    $num = "";
}

if (isset($_POST['op'])) {
    $_SESSION['num'] = $_POST['input'];
    $_SESSION['op'] = $_POST['op'];
    $num = "";
}

if (isset($_POST['equal'])) {
    $num = $_POST['input'];
    switch ($_SESSION['op']) {
        case "+":
            $result = $_SESSION['num'] + $num;
            break;
        case "-":
            $result = $_SESSION['num'] - $num;
            break;
        case "*":
            $result = $_SESSION['num'] * $num;
            break;
        case "/":
            $result = $_SESSION['num'] / $num;
            break;
        case "%":
            $result = ($_SESSION['num'] / 100) * $num;
            break;
    }
    $num = $result;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .num {
            width: 80px;
            height: 80px;
            outline: none;
            background-color: black;
            border: none;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 24px;
            margin: 5px;
        }

        .zero {
            width: 170px;
            border-radius: 40px;
        }

        .container {
            max-width: 400px;
        }

        .display {
            height: 100px;
            font-size: 36px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0 20px;
            background-color: black;
            color: white;
            border-radius: 20px;
            width: 350px;
            border: none;
            outline: none;
        }
    </style>
</head>

<body>
    <div class="container mt-5 text-white bg-dark p-4 rounded">
        <form action="" method="post">
            <input class="display mb-3" name="input" id="display" value="<?php echo $num ?>" />
            <div class="row">
                <button type="submit" value="ac"  name="op" class="num col-3 bg-secondary">AC</button>
                <button type="submit" value="+/-" name="op" class="num col-3 bg-secondary">+/-</button>
                <button type="submit" value="%"   name="op" class="num col-3 bg-secondary">%</button>
                <button type="submit" value="/"   name="op" class="num col-3 bg-warning fs-2 text-white">÷</button>
            </div>
            <div class="row">
                <button type="submit" class="num col-3" value="7" name="num">7</button>
                <button type="submit" class="num col-3" value="8" name="num">8</button>
                <button type="submit" class="num col-3" value="9" name="num">9</button>
                <button type="submit" value="*" name="op" class="num col-3 bg-warning fs-2 text-white">×</button>
            </div>
            <div class="row">
                <button type="submit" class="num col-3" value="4" name="num">4</button>
                <button type="submit" class="num col-3" value="5" name="num">5</button>
                <button type="submit" class="num col-3" value="6" name="num">6</button>
                <button type="submit" value="-" name="op" class="num col-3 bg-warning fs-2 text-white">-</button>
            </div>
            <div class="row">
                <button type="submit" class="num col-3" value="1" name="num">1</button>
                <button type="submit" class="num col-3" value="2" name="num">2</button>
                <button type="submit" class="num col-3" value="3" name="num">3</button>
                <button type="submit" value="+" name="op" class="num col-3 bg-warning fs-2 text-white">+</button>
            </div>
            <div class="row">
                <button type="submit" value="0" class="num col-6 zero" name="num">0</button>
                <button type="submit" value="." class="num col-3" name="num">.</button>
                <button type="submit" value="=" name="equal" class="num col-3 bg-warning fs-2 text-white">=</button>
            </div>
        </form>
    </div>
</body>

</html>
