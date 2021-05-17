<?php
echo "Операции сравнения: ", '<br>';
$x = 1;
$y = 2;
echo "$x == $y ", var_dump($x == $y) , '<br>';  // Сравнение по значению (1 равен 2)
echo "$x === $y ", var_dump($x === $y), '<br>'; // Сравнение по значению и типу(оба значения должны быть не только равнозначны, но и одного и того же типа)
echo "$x > $y ", var_dump($x > $y), '<br>';	// 1 больше, чем 2?
echo "$x < $y ", var_dump($x < $y), '<br>';	// 1 меньше, чем 2?
echo "$x <> $y ", var_dump($x <> $y), '<br>';  // Не равно
echo "$x != $y ", var_dump($x != $y), '<br>';   // 1 не равно 2?
echo "$x !== $y ", var_dump($x !== $y), '<br>'; // 1 не равен 2 без приведения типов
echo "$x <= $y ", var_dump($x <= $y), '<br>';  // 1 меньше или равно 2
echo "$x >= $y ", var_dump($x >= $y), '<br>';  // 1 больше или равно 2
?>