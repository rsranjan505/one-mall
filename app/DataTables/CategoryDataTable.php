<?php

namespace App\DataTables;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CategoryDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {


        return (new EloquentDataTable($query))
        ->addIndexColumn()
        ->addColumn('status', function($row){

                $active = $row->is_active == 1 ? "checked" : "";
                return '<input type="checkbox" id="checkbox-'.$row->id.'" '.$active.'  name="my-checkbox" data-bootstrap-switch>';

        })
        ->addColumn('images', function($row){
            return '<img src="'.$row->image ?? $row->image->url.'" alt="Images" class="rounded-circle" width="40">';
        })
        ->addColumn('action', function($row){

            return '<a href="javascript:void(0);" onclick="editModel('.$row->id.',\''.route('categories.update',['category' => $row]).'\')"><box-icon name="edit-alt" type="solid" color="#053ba9" class="icon-hover"></box-icon></a> | <a href="javascript:void(0);" onclick="deleteConfirmation('.$row->id.',\''.route('categories.destroy',['category' => $row]).'\')"><box-icon name="trash" type="solid" color="#ff0505"  class="icon-hover"></box-icon></a>';

        })
        ->rawColumns(['action','status','images'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Category $model): QueryBuilder
    {
        return $model->newQuery()->with('image')->latest();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('category-table')
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
            Column::make('slug'),
            Column::make('images'),
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
        return 'Category_' . date('YmdHis');
    }
}
