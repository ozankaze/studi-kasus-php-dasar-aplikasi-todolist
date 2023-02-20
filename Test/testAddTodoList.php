<?php

require "../Model/todoList.php";
require "../BusinesLogic/addTodoList.php";

addTodoList("Zan");
addTodoList("Eunha");
addTodoList("Eva");

var_dump($todoList);