<?php

namespace Repository
{

    use Entity\Todolist;

    interface TodolistReposiroty
    {

        function save(Todolist $todolist): void;
    
        function remove(int $number): bool;
    
        function findAll(): array;
    
    }

    class TodolistRepositoryImpl implements TodolistReposiroty
    {

        public array $todolist = array();

        function save(Todolist $todolist): void
        {
            
        }

        function remove(int $number): bool
        {
            
        }

        function findAll(): array
        {
            return $this->todolist;
        }

    }
    
}

// untuk mengolah data