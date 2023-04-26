<?php

namespace Service
{

    use Repository\TodolistReposiroty;

    interface TodolistService
    {

        function showTodolist(): void;

        function addTodolist(string $todo): void;

        function removeTodolist(int $number): void;

    }

    class TodolistServiceImp implements TodolistService
    {

        private TodolistReposiroty $todolistRepository;

        public function __construct(TodolistReposiroty $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;
        
            $todolist = $this->todolistRepository->findAll();

            foreach( $todolist as $number => $value ) {
                echo "$number. $value" . PHP_EOL;
            }
        }

        function addTodolist(string $todo): void
        {
            
        }

        function removeTodolist(int $number): void
        {
            
        }

    }

}