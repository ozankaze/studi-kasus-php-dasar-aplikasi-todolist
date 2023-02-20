<?php

require "../Model/todoList.php";
require "../BusinesLogic/addTodoList.php";
require "../BusinesLogic/removeTodoList.php";
require "../BusinesLogic/showTodoList.php";

addTodoList("Eva");
addTodoList("Eunha");
addTodoList("Zan");
addTodoList("Budi");
addTodoList("Diko");
addTodoList("Momo");


showTodoList();

removeTodoList(2);

showTodoList();

removeTodoList(5);

showTodoList();

$cek = removeTodoList(7);

var_dump($cek);

showTodoList();