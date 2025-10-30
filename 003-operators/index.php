<?php
echo "Введите имя:";
$name = trim(fgets(STDIN));
echo "Введите фамилию:";
$lastname = trim(fgets(STDIN));
echo "Введите отчество:";
$fathername = trim(fgets(STDIN));

$name = mb_ucfirst(mb_strtolower($name));
$lastname = mb_ucfirst(mb_strtolower($lastname));
$fathername = mb_ucfirst(mb_strtolower($fathername));

$fullname = $lastname . ' ' . $name . ' ' . $fathername;
$initials = mb_substr($name, 0, 1) . '.' . mb_substr($fathername, 0, 1) . '.';
$lastnameAndInitials = $lastname . ' ' . $initials;
$fio = mb_substr($lastname, 0, 1) . mb_substr($name, 0, 1) . mb_substr($fathername, 0, 1);

echo "Полное ФИО: $fullname\n";
echo "Инициалы: $lastnameAndInitials\n";
echo "ФИО: $fio\n";