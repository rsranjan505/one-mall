<?php

namespace App\DataTables;

use App\Models\Coupan;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CoupanDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('status', function($row){
                $active = $row->is_active == 1 ? "checked" : "";
                $status = '<div class="form-check form-switch mb-2">
                            <input class="form-check-input" onchange="statusConfirmation(\''.route('coupans.change.status', $row).'\')" type="checkbox" id="status_check-'.$row->id.'" '.$active.'>
                            <label class="form-check-label" for="'.$row->id.'"></label>
                        </div>';

                return $status;

            })
            ->addColumn('action', function($row){

                return '<a href="javascript:void(0);" onclick="editModel('.$row->id.',\''.route('coupans.update',['coupan' => $row]).'\',\'coupan\')"><box-icon name="edit-alt" type="solid" color="#053ba9" class="icon-hover"></box-icon></a> | <a href="javascript:void(0);" onclick="deleteConfirmation('.$row->id.',\''.route('coupans.destroy',['coupan' => $row]).'\')"><box-icon name="trash" type="solid" color="#ff0505"  class="icon-hover"></box-icon></a>';

            })
            ->rawColumns(['action','status'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Coupan $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('coupan-table')
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
            Column::make('code'),
            Column::make('type'),
            Column::make('value'),
            Column::make('min_purchase_amount'),
            Column::make('used'),
            Column::make('from_date'),
            Column::make('to_date'),
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
        return 'Coupan_' . date('YmdHis');
    }
}
