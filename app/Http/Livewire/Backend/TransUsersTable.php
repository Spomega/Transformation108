<?php


namespace App\Http\Livewire\Backend;


use App\Domains\Auth\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TransUsersTable extends TableComponent
{

    /**
     * @return Builder
     */
    public function query(): Builder
    {
      $query = User::with('roles');

     return $query->onlyNonSuperUsers();

    }

    /**
     * @return array
     */
    public function columns(): array
    {

        return [

            Column::make(__('Name'), 'name')
                ->searchable()
                ->sortable(),
        ];
    }
}
