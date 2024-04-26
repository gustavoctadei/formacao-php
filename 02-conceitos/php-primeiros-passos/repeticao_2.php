<?php

// for ($contador = 1; $contador <= 15; $contador = $contador + 1) {
//     echo "#$contador" . PHP_EOL;
// }

// for ($contador = 1; $contador <= 15; $contador += 1) {
//     echo "#$contador" . PHP_EOL;
// }

// for ($contador = 1; $contador <= 15; $contador++) {
//     echo "#$contador" . PHP_EOL;
// }

// for ($contador = 1; $contador <= 15; $contador++) {
//     if ($contador == 13) {

//     } else {
//         echo "#$contador" . PHP_EOL;
//     }
// }

// for ($contador = 1; $contador <= 15; $contador++) {
//     if ($contador != 13) {
//         echo "#$contador" . PHP_EOL;
//     }
// }

for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        // continue;
        break;
    }
    
    echo "#$contador" . PHP_EOL;
}