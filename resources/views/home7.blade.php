<html>
    <head>
    <meta charset="utf-8">
    </head>

    <body>
    
    <?php
    echo "1から{$score2}の合計値は";
    $start = 1;
    $end  = $score2;
    $total = 0;
    for($i=$start;$i<=$end;$i++){
       $total += $i;
    }
    
    ?>
    <br>
    <?php
    echo $total;
    ?>
        <br><a href="sample5">戻る</a>

    </body>