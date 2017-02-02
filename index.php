<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ping Pong</title>
  </head>
  <body>
    <?php
    $player1 = 0;
    $player2 = 0;
    $round = 0;

    while(abs($player1 - $player2)< 2 || ($player1 < 11 && $player2 <11)){
      $round++;
      echo "<h2>Round $round</h2>\n";
      if(rand(0,1)){
        $player1++;
      }
      else {
        $player2++;
      }
      echo "Player 1 = $player1<br />\n";
      echo "Player 2 = $player2<br />\n";

    }
    if($player1 == 11)
    {
      echo "Player 1 wins";
    }
    else {
      echo "Player 2 wins";
    }
     ?>
  </body>
</html>
