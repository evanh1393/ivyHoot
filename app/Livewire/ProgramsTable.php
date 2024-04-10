<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Program;

class ProgramsTable extends DataTableComponent
{
    protected $model = Program::class;

    protected $fillable = [
        'name',
        'updated_at',
        'created_at',
        'contacts'
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('_id');
    }

    public function columns(): array
    {  
        return [
            Column::make('Name', "name")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
