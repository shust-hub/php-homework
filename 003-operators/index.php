<?php
echo "Введите Имя:";
$name = trim(fgets(STDIN));
echo "Введите Фамилию:";
$lastname = trim(fgets(STDIN));
echo "Введите Отчество:";
$fathername = trim(fgets(STDIN));

$name = ucfirst($name);
$lastname = ucfirst($lastname);
$fathername = ucfirst($fathername);

$fullname = $lastname . ' ' . $name . ' ' . $fathername;
$initials = strtoupper($name[0]) . '.' . strtoupper($fathername[0]) . '.';
$lastnameAndInitials = $lastname . ' ' . $initials;
$fio = strtoupper($lastname[0]) . strtoupper($name[0]) . strtoupper($fathername[0]);

echo "Полное ФИО: $fullname\n";
echo "Инициалы: $lastnameAndInitials\n";
echo "ФИО: $fio\n";