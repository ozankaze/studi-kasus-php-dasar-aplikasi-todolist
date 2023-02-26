<?php

require __DIR__ . "/../Model/todoList.php";
require __DIR__ . "/../Helper/input.php";
require __DIR__ . "/../BusinesLogic/addTodoList.php";


function viewAddTodoList() {
    echo "MENAMBAH TODOLIST" . PHP_EOL;

    $todo = input("Todo (x untuk keluar) : ");

    if( $todo == "x" ){
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}