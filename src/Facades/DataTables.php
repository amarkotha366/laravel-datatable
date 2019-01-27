<?php

namespace Hasib\DataTables\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin \Hasib\DataTables\DataTables
 * @method static \Hasib\DataTables\EloquentDatatable eloquent($builder)
 * @method static \Hasib\DataTables\QueryDataTable query($builder)
 * @method static \Hasib\DataTables\CollectionDataTable collection($collection)
 *
 * @see \Hasib\DataTables\DataTables
 */
class DataTables extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'datatables';
    }
}
