<?php

require __DIR__ . "/Model/todoList.php";
require __DIR__ . "/BusinesLogic/addTodoList.php";
require __DIR__ . "/BusinesLogic/removeTodoList.php";
require __DIR__ . "/BusinesLogic/showTodoList.php";
require __DIR__ . "/View/viewAddTodoList.php";
require __DIR__ . "/View/viewRemoveTodoList.php";
require __DIR__ . "/View/viewShowTodoList.php";
require __DIR__ . "/Helper/input.php";

echo "Aplikasi todolist" . PHP_EOL;

viewAddTodoList();