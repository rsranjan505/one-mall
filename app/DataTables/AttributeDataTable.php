<?php

namespace App\DataTables;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AttributeDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('name', function($row){
                return ucfirst($row->name);
            })
            ->addColumn('status', function($row){
                $active = $row->is_active == 1 ? "checked" : "";
                $status = '<div class="form-check form-switch mb-2">
                            <input class="form-check-input" onchange="statusConfirmation(\''.route('attributes.change.status', $row).'\')" type="checkbox" id="status_check-'.$row->id.'" '.$active.'>
                            <label class="form-check-label" for="'.$row->id.'"></label>
                        </div>';

                return $status;

            })
            ->editColumn('type', function($row){
                return ucfirst($row->type);
            })
            ->editColumn('attribute_type', function($row){
                return ucfirst($row->attribute_type);
            })

            ->addColumn('action', function($row){

                return '<a href="javascript:void(0);" onclick="editModel('.$row->id.',\''.route('attributes.update',['attribute' => $row]).'\',\'attribute\')"><box-icon name="edit-alt" type="solid" color="#053ba9" class="icon-hover"></box-icon></a> | <a href="javascript:void(0);" onclick="deleteConfirmation('.$row->id.',\''.route('attributes.destroy',['attribute' => $row]).'\')"><box-icon name="trash" type="solid" color="#ff0505"  class="icon-hover"></box-icon></a>';

            })
            ->rawColumns(['action','status'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Attribute $model): QueryBuilder
    {
        return $model->newQuery()->latest();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('attribute-table')
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
            Column::make('type'),
            Column::make('attribute_type'),
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
        return 'Attribute_' . date('YmdHis');
    }
}
