<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<a href='index2.php'>Ко второму варианту </a>
  <div>
  <?php  
    // создаем временную метку начала программы
    $start = microtime(true);
    // устанавливаем промежуток поиска простых чисел
    $firNumb = 0;
    $secNumb = 1000;
    // строка для аккумулирования результата - пока пустая
    $outStr = '';

    // если минимальное число меньше 1, то нужно включить "1" в результаты,
    // и перескочить 1 в цикле.
    if ($firNumb <= 1) {
      $outStr = $outStr.'1 ';
      $firNumb = 2;
    }
    // вложенные циклы для поиска простых чисел
    for ($i = $firNumb; $i < $secNumb; $i++) {
      // переменная отображает, является ли $i простым числом.
      // если во втором цикле она не поменяется, значит текущее значение $i 
      // является простым числом.
      $isThis = true;
      for($j = 2; $j < ($i)/2; $j++) {
        if(($i % $j) === 0) {
          $isThis = false;
          break;
        }
      }
      // суммирование результата с условием, что это простое число
      if ($isThis) {
        $outStr = $outStr.$i.' ';
      }
    }

    echo "C break и половинным проходом во втором цикле - ".(microtime(true) - $start).' <br>';
    // 0.0015959739685059
    echo $outStr;



    echo '<br><br>';
    $start = microtime(true);
    $firNumb = 0;
    $secNumb = 1000;
    $outStr = '';
    if ($firNumb <= 1) {
      $outStr = $outStr.'1 ';
      $firNumb = 2;
    }
    for ($i = $firNumb; $i < $secNumb; $i++) {
      $isThis = true;
      for($j = 2; $j < ($i)/2; $j++) {
        if(($i % $j) === 0) {
          $isThis = false;
        }
      }
      if ($isThis) {
        $outStr = $outStr.$i.' ';
      }
    }
    
    echo "Без break но с половинным проходом во втором цикле - ".(microtime(true) - $start).' <br>';
    // 0.009443998336792
    echo '<br><br>';

    $start = microtime(true);
    $firNumb = 0;
    $secNumb = 1000;
    $outStr = '';
    if ($firNumb <= 1) {
      $outStr = $outStr.'1 ';
      $firNumb = 2;
    }
    for ($i = $firNumb; $i < $secNumb; $i++) {
      $isThis = true;
      for($j = 2; $j < $i; $j++) {
        if(($i % $j) === 0) {
          $isThis = false;
        }
      }
      if ($isThis) {
        $outStr = $outStr.$i.' ';
      }
    }
    
    echo "Без break и с целым проходом во втором цикле - ".(microtime(true) - $start).' <br>';
    // 0.012977123260498
  ?>
  </div>
  
  
</body>
</html>