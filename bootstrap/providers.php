<?php

use Illuminate\Support\Facades\Facade;

return [
    App\Providers\AppServiceProvider::class,
    // custom theme menu provider
    App\Providers\MenuServiceProvider::class,

    Yajra\DataTables\DataTablesServiceProvider::class,
];
