<?php

require_once "../View/viewRemoveTodoList.php";
require_once "../Model/todoList.php";
require_once "../BusinesLogic/addTodoList.php";
require_once "../BusinesLogic/showTodoList.php";

addTodoList("Zan");
addTodoList("Eva");
addTodoList("Budi");
addTodoList("Eunha");

showTodoList();

viewRemoveTodoList();

showTodoList();

