<?php 

require_once __DIR__ . "/../BusinesLogic/removeTodoList.php";
// require_once __DIR__ . "/../Helper/input.php";

function viewRemoveTodoList() {
    echo "REMOVE TOTOLIST" . PHP_EOL;

    $pilihan = input("Nomor (x untuk membatalkan)");

    if ($pilihan == "x") {
        echo "Batal menghapus";
    } else {
        $sukses = removeTodoList($pilihan);

        if($sukses) {
            echo "Suksek menghapus todo nomor $pilihan";
        } else {
            echo "Gagal menghapus todo nomor $pilihan";
        }
    }

}