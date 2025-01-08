<?php

namespace App\Controllers;

use App\Models\Task;

class TaskController {
    private $taskModel;

    public function __construct() {
        $this->taskModel = new Task();
    }

    public function index() {
        $tasks = $this->taskModel->getAllTasks();
        require __DIR__ . '/../../templates/tasks/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            if (!empty($title)) {
                $this->taskModel->createTask($title);
                header('Location: /');
                exit;
            }
        }
        require __DIR__ . '/../../templates/tasks/create.php';
    }

    public function toggle($id) {
        $this->taskModel->toggleTask($id);
        header('Location: /');
        exit;
    }

    public function delete($id) {
        $this->taskModel->deleteTask($id);
        header('Location: /');
        exit;
    }
}