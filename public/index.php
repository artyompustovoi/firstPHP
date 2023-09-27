

<?php
/*
$variable = "John";

echo $variable;

$n = 10;

echo PHP_EOL;
echo PHP_EOL;

echo "<br>";

echo $n + 10;
$greetings = 'Hello';
echo"<br>";
echo  $greetings . $variable . $n;
echo "<br>";
echo '$greetings $variable $n';
echo "<br>";
echo "$greetings $variable $n";
echo "<br>";
echo "<pre>";

$array = array(
'key'=>'value',
'key1'=>'value1'
);

print_r($array);

$array = array(
'value',
'value1'
);

print_r($array);

echo "</pre>";

function func(int $n, int $l)
{
	return $n+$l;
}

echo func(3, 5);
foreach ($array as $key => $value){
echo "$key => $value <br>";
}

foreach ($array as $value){
echo "$value <br>";
}

echo "<pre>";
print_r($_GET);
echo "</pre>";
$form = "
<form method='post'>
<input type='text' name='name'>
<input type='submit'>
</form>
";
echo $form;

echo "<pre>";
print_r($_POST);
echo "</pre>";
$form2 = "
<form method='post'>
<input type='text' id='number' name='number' aria-describedby='number'>
<input type='submit'>
</form>
";

echo $form2;

$factorial = 1; 



$text = "Факториал числа равен: "; 
if ($_POST && $_POST['number']){
    $n = $_POST['number'];
for ($i = 1; $i <= $n; $i++) {
        $factorial = $factorial*$i; 
   }
    echo $factorial;
echo "<br>";
for ($i = 1; $i <= $n; $i++) {
        echo "Hello World!";
    }
   // echo $factorial;

}
echo "<br>";

echo $n*10;
*/

//strrev  
$form2 = "
<form method='post'>
<input type='text' id='number' name='number' aria-describedby='number'>
<input type='submit'>
</form>
";

echo $form2;


$text = "Корова, бык, теленок"; 
if ($_POST && $_POST['number']){
    $n = $_POST['number'];
}


///слово наоборот
echo strrev($n);
echo "<br>";
///количество слов
echo str_word_count($n);
echo "<br>";


///длина самого кортокого слова
$str = $n;
$str = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/","",$str);
$mass_str = explode (" ", $str);


foreach($mass_str as $key){
    $new_mass[] = mb_strlen($key,'utf-8');
}
$a=$mass_str[array_search(min($new_mass),$new_mass)];
echo strlen($a);
///быки
$b = 10;
$c = 5;
$t = 0.5;
$g = "";
$k = 0;
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= (100 - $i * $b) / $c; $j++) {
        $k = (100 - $i * $b - $j * $c) / $t;
        if ($i + $j + $k == 100) {
            $g = "$i  $j  $k";
            echo $g;
	    echo "<br>";

        }
    }
}
///фибоначи
$n = 10;
$fib = array();
for ($i = 0; $i < $n; $i++) {
    if ($i <= 1)
        $fib[$i] = $i;
    else
        $fib[$i] = $fib[$i - 2] + $fib[$i - 1];
    echo $fib[$i];
	echo " ";

}
echo "<br>";


///матрица
$n2 = 4;
$mat = array();
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i == 0)
            $mat[$i][$j] = 1;
        else if ($j == 0)
            $mat[$i][$j] = 1;
        else
            $mat[$i][$j] = $mat[$i - 1][$j] + $mat[$i][$j - 1];
        echo $mat[$i][$j];
    }
    echo "<br>";

}

