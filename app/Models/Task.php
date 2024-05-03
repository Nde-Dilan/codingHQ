<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Mokhosh\FilamentKanban\Concerns\IsKanbanStatus;


class Task extends Model implements Sortable
{
    use HasFactory, SortableTrait;

    protected $fillable = [
        'status',
    ];
    public $sortable = [
        'order_column_name' => 'due date',
        'sort_when_creating' => true,
    ];



}

enum TaskStatus: string
{
    use IsKanbanStatus;
    /**
     *  pending, in progress, completed
     */

    case Pending = 'Pending';
    case Progress = 'In Progress';
    case Completed = 'Completed';
}
