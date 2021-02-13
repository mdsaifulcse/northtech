<?php

namespace App\DataTables;

use App\Model\DemoClass;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;

class DemoClassRegisterDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'democlassregister.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Model\DemoClass $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(DemoClass $model)
    {
        $allData=DemoClass::leftJoin('courses','demo_classes.course_id','courses.id')
            ->select('courses.name as course_name','demo_classes.*');
        return $this->applyScopes($allData);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->parameters([
                'dom'          => 'Bfrtip',
                'buttons'      => ['export', 'print', 'reset', 'reload'],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'Name',
            'Email',
            'Phone',
            'Program',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'DemoClassRegister_' . date('YmdHis');
    }
}
