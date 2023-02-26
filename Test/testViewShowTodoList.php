<?php

require __DIR__ . "/../View/viewShowTodoList.php";
require __DIR__ . "/../BusinesLogic/addTodoList.php";

addTodoList("Zan");
addTodoList("Eva");
addTodoList("Eunha");
addTodoList("Momo");
addTodoList("Budi");

viewShowTodolist();