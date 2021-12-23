<?php
    $numbers = [];
    for($i = 0; $i < 6; $i++){ // рандомные числа
        $numbers[$i] = rand(0,100);
    }

    echo print_r($numbers), "<br>";
    $min = min($numbers);

    echo "Минимальное число - $min <br>";

    $x1 = 0; 
    $x2 = 0;

    for($i = 0; $i < count($numbers); $i++){ // первое положительное число
        if($numbers[$i] > 0) {$x1 = $numbers[$i]; break;}
    }

    echo "Первое положительное число - ", $x1, "<br>";

    for($i = 0; $i < count($numbers); $i++){ //последний положительный элемент
        if($numbers[count($numbers) - $i] > 0) {$x2 = $numbers[count($numbers) - $i]; break;}
    }

    echo "Последний положительный элемент - ", $x2, "<br>";

    $sum = 0;

    for($i = $x1; $i < $x2; $i++){ // подсчёт суммы
        $sum += $numbers[$i];
    }

    echo "Сумма между первым и последним положительным числом - $sum <br>";

    $temp;

    for($i = 0; $i < count($numbers); $i++){ // Нахожу 0 и меняю местами с первыми
        if($numbers[$i] == 0) continue;
        for($z = 0; $z < count($numbers); $z++){
            if($numbers[$z] == 0) {
                $temp = $numbers[$i];
                $numbers[$i] = 0;
                $numbers[$z] = $temp;
            }
            else continue;
        }
    }

    echo "Вывод нулей в начале (если есть):  + ", print_r($numbers);
?>