<?php
echo "Введите Имя:";
$name = trim(fgets(STDIN));
echo "Введите Фамилию:";
$lastname = trim(fgets(STDIN));
echo "Введите Отчество:";
$fathername = trim(fgets(STDIN));

$name = mb_ucfirst(mb_strtolower($name));
$lastname = mb_ucfirst(mb_strtolower($lastname));
$fathername = mb_ucfirst(mb_strtolower($fathername));

$fullname = $lastname . ' ' . $name . ' ' . $fathername;
$initials = $name[0] . '.' .$fathername[0] . '.';
$lastnameAndInitials = $lastname . ' ' . $initials;
$fio = $lastname[0] . $name[0] . $fathername[0];

echo "Полное ФИО: $fullname\n";
echo "Инициалы: $lastnameAndInitials\n";
echo "ФИО: $fio\n";