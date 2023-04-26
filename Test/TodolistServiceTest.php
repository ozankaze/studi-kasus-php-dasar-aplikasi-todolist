<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Service\TodolistServiceImp;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void
{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[] = "Belajar PHP";
    $todolistRepository->todolist[] = "Belajar PHP Todolist";
    $todolistRepository->todolist[] = "Belajar PHP Database";

    $todolistService = new TodolistServiceImp($todolistRepository);
    $todolistService->showTodolist();
    
}

testShowTodolist();