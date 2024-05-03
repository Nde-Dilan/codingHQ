<?php

namespace App\Filament\Pages;

use App\Models\Task;
use App\Models\TaskStatus;
use Mokhosh\FilamentKanban\Pages\KanbanBoard;

class TasksKanbanBoard extends KanbanBoard
{

    protected static string $recordTitleAttribute = 'name';
    protected static string $model = Task::class;
    protected static string $statusEnum = TaskStatus::class;
}
