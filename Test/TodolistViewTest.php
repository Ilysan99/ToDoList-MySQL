<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/todolistRepository.php';
require_once __DIR__ . '/../Service/todolistService.php';
require_once __DIR__ . '/../View/TodolistView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist(): void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistView->showTodoList();
}

function testViewAddTodolist(): void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistService->showTodoList();
    $todolistView->addTodolist();
    $todolistService->showTodolist();
    $todolistView->addTodolist();
    $todolistService->showTodolist();

}

function testViewRemoveTodoList(): void {
    
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistService->showTodoList();
    $todolistView->removeTodoList();
    $todolistService->showTodoList();
    $todolistView->removeTodoList();
    $todolistService->showTodoList();
}

testViewRemoveTodoList();
