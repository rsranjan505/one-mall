<?php

namespace App\DataTables;

use App\Models\Customer;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CustomerDataTable extends DataTable
{
    protected UserService $userservice;
    public function __construct(UserService $userservice)
    {
        $this->userservice = $userservice;
    }
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->editColumn('name', function($row){
            return ucfirst($row->getFullName());
        })
        ->addColumn('status', function($row){
            $active = $row->is_active == 1 ? "checked" : "";
            $status = '<div class="form-check form-switch mb-2">
                        <input class="form-check-input" onchange="statusConfirmation(\''.route('users.change.status', $row).'\')" type="checkbox" id="status_check-'.$row->id.'" '.$active.'>
                        <label class="form-check-label" for="'.$row->id.'"></label>
                    </div>';

            return $status;

        })
        ->editColumn('created_at', function($row){

            return $row->created_at->format('d-m-Y');
        })
        ->addColumn('action', function($row){

            return '<a href="javascript:void(0);" onclick="editModel('.$row->id.',\''.route('users.update',['user' => $row]).'\',\'user\')"><box-icon name="edit-alt" type="solid" color="#053ba9" class="icon-hover"></box-icon></a> | <a href="javascript:void(0);" onclick="deleteConfirmation('.$row->id.',\''.route('users.destroy',['user' => $row]).'\')"><box-icon name="trash" type="solid" color="#ff0505"  class="icon-hover"></box-icon></a>';

        })
        ->rawColumns(['action','status','images'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        $customers = $this->userservice->getAllCustomers();
        return $customers;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('customer-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('email'),
            Column::make('mobile'),
            Column::make('last_login'),
            Column::make('created_at'),
            Column::make('status'),

            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),

        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Customer_' . date('YmdHis');
    }
}
