<?php 

require "../Model/todoList.php";
require "../BusinesLogic/showTodoList.php";

$todoList[1] = "Belajar PHP Dasar";
$todoList[2] = "Belajar PHP OOP";
$todoList[3] = "Belajar PHP DATABASE";

showTodoList();