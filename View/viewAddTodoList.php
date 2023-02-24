<?php

require "../Helper/input.php";
require "../BusinesLogic/addTodoList.php";
// require "../Model/todoList.php";


function viewAddTodoList() {
    echo "MENAMBAH TodoList";

    $x = input("Todo (x untuk keluar): ");

    if( $x == "x" ){
        // cancel
    } else {
        addTodoList($x);
    }
}