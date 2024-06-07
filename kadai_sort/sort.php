<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order){
          $array = [15, 4, 18, 23, 10 ];

          if($order){
            echo "昇順にソートします。<br>";
            asort($array);
            foreach($array as $array){
              echo $array . '<br>';
            }
          } else{
            echo "降順にソートします。<br>";
            arsort($array);
            foreach($array as $array){
              echo $array . '<br>';
            }

          }

        }

        $array = [15, 4, 18, 23, 10 ];
        sort_2way($array, true);
        $array = [15, 4, 18, 23, 10 ];
        sort_2way($array, false);
        ?>
    </p>
</body>

</html>