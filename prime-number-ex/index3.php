<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<a href='index.php'>к 1 варианту</a> <br>
<a href='index2.php'>ко 2 варианту</a> <br>
  <div>

  <?php  
    $start = microtime(true);
    $outArr = Array(0 => 2);
    // любое целое число больше 1 является либо простым, либо может быть выражено как произведение
    // простых чисел. Создадим массив из простых чисел. Каждое проверяемое число будем делить по очереди
    // на все элементы этого массива. Если деления без остатка не будет, значит число простое
    for ($i = 3; $i < 1001; $i++) {
      $count = count($outArr);
      for($j = 0; $j < $count; $j++) {
        if(($i % $outArr[$j]) === 0) {
          continue(2);
        }
      }
      $outArr[] = $i;
    }

    echo "только формирование массива с простыми числами - ".(microtime(true) - $start).' <br>';
    // 0.00052905082702637
    $count = count($outArr);
    for ($k = 0; $k < $count; $k++ ) {
      echo $outArr[$k].' ';
    }

    echo '<br>'."формирование с выводом - ".(microtime(true) - $start).' <br>';
    // 0.00054693222045898
    
  ?>
  </div>
  
  
</body>
</html>