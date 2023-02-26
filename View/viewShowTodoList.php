<?php

require __DIR__ . "/../Model/todoList.php";
require __DIR__ . "/../BusinesLogic/showTodoList.php";
require __DIR__ . "/../View/viewAddTodoList.php";
require __DIR__ . "/../View/viewRemoveTodoList.php";
require __DIR__ . "/../Helper/input.php";

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