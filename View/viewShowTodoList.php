<?php

require "../Model/todoList.php";
require "../BusinesLogic/showTodoList.php";
// require "../BusinesLogic/addTodoList.php";
// require "../BusinesLogic/removeTodoList.php";
require "../Helper/input.php";
// require "../View/viewAddTodoList.php";
// require "../View/viewRemoveTodoList.php";

function viewShowTodolist() {
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah todo" . PHP_EOL;
        echo "2. Hapus todo" . PHP_EOL;
        echo "x. Keluar todo" . PHP_EOL;
        echo "" . PHP_EOL;

        $pilihan = input("Pilih: ");

        if ($pilihan == "1") {
            viewAddTodoList();
        } elseif ($pilihan == "2") {
            viewRemoveTodoList();
        } elseif ($pilihan == "x") {
            // Keluar;
            break;
        } else {
            echo "Data tidak di temukan";
        }
    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}