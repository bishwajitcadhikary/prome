<?php

namespace App\DataTables;

use App\Models\Carousel;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CarouselDataTable extends DataTable
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
            ->rawColumns(['image', 'action'])
            ->addColumn('image', function ($model) {
                return '<img src="' . asset('storage/uploads/images/' . $model->image) . '" class="img-fluid img-thumbnail">';
            })
            ->addColumn('action', function ($model){
                return '
                <div class="btn-group" role="group">
                  <a href="'.route('admin.carousels.edit', $model->id).'" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                  <button type="button" class="btn btn-danger" data-destroy="'.route('admin.carousels.destroy', $model->id).'"><i class="fas fa-trash"></i></button>
                </div>
                ';
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Carousel $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Carousel $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('carousel-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->responsive()
            ->autoWidth(false)
            ->dom('<"row justify-content-between"<"col-md-6 mb-3"l><"col-md-6 mb-3"f>>tr<"row justify-content-between"<"col-md-6 mb-3"i><"col-md-6 mb-3"p>>')
            ->orderBy(1)
            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('image')->title(trans('general.image')),
            Column::make('title')->title(trans('general.title')),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')
                ->title(trans('general.action')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Carousel_' . date('YmdHis');
    }
}
