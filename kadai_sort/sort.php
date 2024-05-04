<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>
    <?php
function sort_2way($order, $array) {


      if ($order) {
        echo '昇順にソートします。' . '<br>';
        sort($array);
        foreach ($array as $num) {
          echo $num . '<br>';
        }
      } else {
        echo '降順にソートします。' . '<br>';
        rsort($array);
        foreach ($array as $num) {
          echo $num . '<br>';
        }
      }
    }

    $nums = [15, 4, 18, 23, 10];

    sort_2way(TRUE,$nums);
    sort_2way(FALSE,$nums);
    ?>
  </p>

</body>

</html>