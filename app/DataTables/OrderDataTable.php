<?php

namespace App\DataTables;

use App\Models\Order;
use App\Services\OrderService;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class OrderDataTable extends DataTable
{

    /** @var  OrderService $orderservice */
    private OrderService $orderservice;

    public function __construct(OrderService $orderservice)
    {
        $this->orderservice = $orderservice;
    }
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('status', function($row){
            $badge_class = '';
            if($row->status == 'delivered'){
                $badge_class = "badge rounded-pill badge-light-success";
            }else if($row->status == 'cancelled'){
                $badge_class = "badge rounded-pill badge-light-danger";
            }else if($row->status == 'pending'){
                $badge_class = "badge rounded-pill badge-light-warning";
            }else if($row->status == 'accepted'){
                $badge_class = "badge rounded-pill badge-light-info";
            }

            $status = '<select class="form-select form-select-sm status '.$badge_class.'" data-id="'.$row->id.'" onchange="changeOrderStatus(this)">
                <option  value="delivered" '.($row->status == 'delivered' ? 'selected' : '').'>Delivered</option>
                <option value="accepted" '.($row->status == 'accepted' ? 'selected' : '').'>Accepted</option>
                <option value="cancelled" '.($row->status == 'cancelled' ? 'selected' : '').'>Cancelled</option>
                <option value="pending" '.($row->status == 'pending' ? 'selected' : '').'>Pending</option>
            </select>';

            return $status;

        })
        ->addColumn('name', function($row){
            return ucfirst($row->first_name) . " " . $row->last_name;
        })
        ->editColumn('created_at', function($row){
            return $row->created_at->diffForHumans();
        })
        ->editColumn('total_amount', function($row){
            return  "&#8377; " . number_format($row->total_amount, 2);
        })
        ->editColumn('payable_amount', function($row){
            return  "&#8377; " . number_format($row->payable_amount, 2);
        })
        ->editColumn('payment_mode', function($row){
            return str_replace('_', ' ', ucfirst($row->payment_mode));
        })
        ->editColumn('payment_status', function($row){
            return ucfirst($row->payment_status != null ? $row->payment_status : 'Upaid');
        })
        ->addColumn('action', function($row){

            $action = '<div class="d-inline-flex">
                        <a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle>
                            </svg>
                        </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:void(0);" class="dropdown-item" id="view-items">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-small-4 me-50"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                            View Items
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item" id="address">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive font-small-4 me-50"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line>
                            </svg>
                            Address
                        </a>

                    </div>
                 </div>';

                return  $action;
        })
        ->rawColumns(['action','total_amount','payable_amount','status'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Order $model): QueryBuilder
    {
        $orders = $this->orderservice->getAllOrders();
        // return $model->newQuery()->Order::with('order_items','user')->latest()->get();
        return $orders;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('order-table')
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
            Column::make('order_number'),
            Column::make('name'),
            // Column::make('email'),
            Column::make('phone'),
            Column::make('postcode'),
            Column::make('total_amount'),
            // Column::make('coupon_discount'),
            Column::make('payable_amount'),
            Column::make('created_at'),
            Column::make('payment_mode'),
            Column::make('payment_status'),
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
        return 'Order_' . date('YmdHis');
    }
}
