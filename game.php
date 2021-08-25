<?php

$choices = [
    1 => 'rock',
    2 => 'paper',
    3 => 'scissors'
];

foreach ($choices as $key => $value) {
    echo "{$key} || {$value}" . PHP_EOL;
}
$input = (int) readline ('Choose: ');
$playerChoice = $choices[$input];

$computer = $choices[rand(1, 3)];

if ($playerChoice === $computer) {
    echo "TIE! Computer also chose {$computer}" . PHP_EOL;
} else if ($playerChoice === 'rock' && $computer === 'paper') {
    echo "Computer chose {$computer}, you LOST!" . PHP_EOL;
} else if ($playerChoice === 'paper' && $computer === 'rock') {
    echo "Computer chose {$computer}, you WON!" . PHP_EOL;
} else if ($playerChoice === 'rock' && $computer === 'scissors') {
    echo "Computer chose {$computer}, you WON!" . PHP_EOL;
} else if ($playerChoice === 'scissors' && $computer === 'rock') {
    echo "Computer chose {$computer}, you LOST!" . PHP_EOL;
} else if ($playerChoice === 'paper' && $computer === 'scissors') {
    echo "Computer chose {$computer}, you LOST!" . PHP_EOL;
} else if ($playerChoice === 'scissors' && $computer === 'paper') {
    echo "Computer chose {$computer}, you WON!" . PHP_EOL;
}
