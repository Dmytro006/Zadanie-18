<?php
// 1. 
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

// 2. 
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}

// 3. 
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}
echo $suma;

// 4. 
for ($i = 1; $i <= 10; $i++) {
    echo ($i * 2) . " ";
}

// 5. 
$X = 12; 
$Y = 200; 
$kwota = 0;
for ($i = 1; $i <= $X; $i++) {
    $kwota += $Y;
    $kwota += $kwota * 0.08;
}
echo $kwota;

// 6. 
$n = 100;
$a1 = 5;
$r = 10;
$an = $a1 + ($n - 1) * $r;
$suma_ciagu = (($a1 + $an) * $n) / 2;
echo $suma_ciagu;

// 7. 
$cegly_piramida = 0;
for ($i = 10; $i >= 1; $i--) {
    $cegly_piramida += ($i * $i);
}
echo $cegly_piramida;

// 8 i 9.
$X_cegiel = 20;  
$Y_rzedow = 5;   
$Z_roznica = 2;   
$K_waga = 3.5; 
$lacznie_cegiel = 0;
$aktualny_rzad = $X_cegiel;
for ($i = 1; $i <= $Y_rzedow; $i++) {
    if ($aktualny_rzad < 0) $aktualny_rzad = 0;
    $lacznie_cegiel += $aktualny_rzad;
    $aktualny_rzad -= $Z_roznica;
}
$waga_sciany = $lacznie_cegiel * $K_waga;
echo $lacznie_cegiel . " " . $waga_sciany;

// 10. 
$num1 = 10;
$num2 = 5;
$action = 'add'; 
if ($action == 'add') echo $num1 + $num2;
if ($action == 'sub') echo $num1 - $num2;
if ($action == 'mul') echo $num1 * $num2;
if ($action == 'div') echo ($num2 != 0) ? $num1 / $num2 : 0;

// 11. 
$N_elem = 8;
$X_start = 3;
$Y_diff = 4;
for ($i = 0; $i < $N_elem; $i++) {
    echo ($X_start + $i * $Y_diff) . " ";
}

// 12. 
$pobrane_liczby = [[2, 3], [5, -5]];
foreach ($pobrane_liczby as $pary) {
    $s = $pary[0] + $pary[1];
    echo $s . " ";
    if ($s == 0) break;
}

// 13. 
$n_silnia = 5;
$silnia = 1;
for ($i = 1; $i <= $n_silnia; $i++) {
    $silnia *= $i;
}
echo $silnia;

// 14. 
$start_val = 2;
$count_n = 4;
for ($i = 1; $i <= $count_n; $i++) {
    echo $start_val . " ";
    $start_val = $start_val * $start_val;
}

// 15. 
$suma_los = 0;
for ($i = 0; $i < 10; $i++) {
    $los = rand(50, 100);
    echo $los . " ";
    $suma_los += $los;
}
echo $suma_los . " " . ($suma_los / 10);
