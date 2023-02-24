<?php

require "../View/viewAddTodoList.php";
require "../BusinesLogic/showTodoList.php";

addTodoList("Zan");
addTodoList("Eunha");
addTodoList("Eva");

viewAddTodoList();

showTodoList();