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
<a href='index3.php'>ко 3 варианту</a> <br>
  <div>

  <?php  
    $start = microtime(true);
    $outStr = '';

    for ($i = 2; $i < 1001; $i++) {
      for($j = 2; $j <= ($i)/2; $j++) {
        if(($i % $j) === 0) continue(2);
      }
      $outStr = $outStr.$i.' ';
    }

    echo "после оптимизации условий - ".(microtime(true) - $start).' <br>';
    // 0.0016400814056396
    echo $outStr;
    
  ?>
  </div>
  
  
</body>
</html>