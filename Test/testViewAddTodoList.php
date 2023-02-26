<?php

require "/var/www/html/todolist/View/viewAddTodoList.php";
require "/var/www/html/todolist/BusinesLogic/showTodoList.php";

addTodoList("Zan");
addTodoList("Eunha");
addTodoList("Eva");

viewAddTodoList();

showTodoList();