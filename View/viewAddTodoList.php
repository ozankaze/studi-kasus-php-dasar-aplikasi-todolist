<?php

require "../Model/todoList.php";
require "../Helper/input.php";
require "../BusinesLogic/addTodoList.php";


function viewAddTodoList() {
    echo "MENAMBAH TODOLIST" . PHP_EOL;

    $todo = input("Todo (x untuk keluar) : ");

    if( $todo == "x" ){
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}