<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {

            if ($order === true) {
                sort($array);
                echo '昇順にソートします。<br>';
            } else {
                rsort($array);
                echo '降順にソートします。<br>';
            }

            foreach ($array as $num) {
                echo $num . '<br>';
            }
        }

        $nums = [15, 4, 18, 23, 10];

        sort_2way($nums, true);
        echo "<br>";

        sort_2way($nums, false);
        echo "<br>";
        ?>
    </p>
</body>

</html>