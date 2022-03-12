<?php
$str = " 5*(4-2() \n";
print_r($str);
$arr = str_split($str);
$flag = false;
$x = 0; // счетчик открывающих скобок
$y = 0; // счетчик закрывающих скобок
//цикл перебора элементов массива
foreach ($arr as $value)
{
   //print_r ($value. "\n");
   if ($value == '(' )
   {
        $x++;
        if ( !$flag && $x != $y )       // если нашли "(" то - true
        {
          $flag = true;
        }
        elseif($flag && $x != $y )
        {
            $flag = true;
        }
        else
        {
            $flag = false;
            break;
        }
   }
   elseif ($value == ')')               // если символ - закрывающая скобка
   {
        $y++;
        if (!$flag)
        {
            $flag = false;
            break;
        }
    }
}
if ($flag && $x == $y)                  // условие при котором скобки равны
{
    $flag = true;
    print_r ("всё ок\n");
}
else
{                                               
    $flag = false;
    print_r ("ошибка");                 // условие при котором выдает ошибку
}

if ($x == 0 && $y == 0)                 // условие при котором скобоки отсутствуют
    {
        print_r ("Скобок нет\n");
    }
?>
