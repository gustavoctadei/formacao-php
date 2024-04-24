<?php

$idade = 18;
$nome = 'Gustavo';

echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

// if ($idade == 18 || $idade > 18) {
//     echo "Você tem $idade anos." . PHP_EOL;
//     echo "Pode entrar";
// }

// if ($idade >= 18) {
//     echo "Você tem $idade anos." . PHP_EOL;
//     echo "Pode entrar";
// }

// if ($idade >= 18 && $nome == 'Gustavo') {
//     echo "Você tem $idade anos." . PHP_EOL; 
//     echo "Pode entrar, $nome";
// }

// echo "Você só tem $idade anos. Você não pode entrar";

// $idade = 16;

// echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

// if ($idade >= 18) {
//     echo "Você tem $idade anos." . PHP_EOL;
//     echo "Pode entrar";
// }

// if ($idade < 18) {
//     echo "Você só tem $idade anos. Você não pode entrar";
// }

$idade = 21;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";