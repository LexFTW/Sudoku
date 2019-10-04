<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sudoku en PHP</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <div class="content">
            <table>
                <?php

                    $cells = array();

                    for ($i = 0; $i < 81 ; $i++) {
                        $cells[$i] = 0;
                    }

                    for ($i = 0; $i < 20; $i++) {
                        $random_pos = rand(0, 80);
                        if($cells[$random_pos] == 0){
                            $cells[$random_pos] = rand(1,9);
                        }else{
                            $i--;
                        }
                    }

                    $pos = 0;
                    for ($i = 0; $i < 9; $i++) {

                        if($i == 2 || $i == 5){
                          echo '<tr class="borderBottom">';
                        }else{
                          echo '<tr>';
                        }

                        for ($j = 0; $j < 9; $j++) {
                            if($j == 2 || $j == 5){
                                if($cells[$pos] == 0){
                                  echo '<td class="borderRight" contenteditable="true"></td>';
                                }else{
                                  echo '<td class="borderRight" contenteditable="true">'. $cells[$pos] .'</td>';
                                }
                            }else{
                                if($cells[$pos] == 0){
                                  echo '<td contenteditable="true"></td>';
                                }else{
                                  echo '<td contenteditable="true">'. $cells[$pos] .'</td>';
                                }
                            }

                            $pos++;
                        }

                        echo '</tr>';

                    }

                ?>
            </table>
        </div>
    </body>
</html>
