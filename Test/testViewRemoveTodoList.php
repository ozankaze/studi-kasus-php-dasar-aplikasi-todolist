<?php

require_once __DIR__ . "/../View/viewRemoveTodoList.php";
require_once __DIR__ . "/../Model/todoList.php";
require_once __DIR__ . "/../BusinesLogic/addTodoList.php";
require_once __DIR__ . "/../BusinesLogic/showTodoList.php";

addTodoList("Zan");
addTodoList("Eva");
addTodoList("Budi");
addTodoList("Eunha");

showTodoList();

viewRemoveTodoList();

showTodoList();

