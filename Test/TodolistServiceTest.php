<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Service\TodolistServiceImp;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void
{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[] = new Todolist("Belajar PHP");
    $todolistRepository->todolist[] = new Todolist("Belajar PHP Todolist");
    $todolistRepository->todolist[] = new Todolist("Belajar PHP Database");

    $todolistService = new TodolistServiceImp($todolistRepository);
    $todolistService->showTodolist();
    
}

function testAddTodolist(): void
{

    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImp($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar Database");
    $todolistService->addTodolist("Belajar MySQL");

    $todolistService->showTodolist();
    
}

// testShowTodolist();
testAddTodolist();