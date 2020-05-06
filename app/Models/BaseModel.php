<?php

namespace App\Models;

use App\Traits\EnableLogs;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class BaseModel extends Model
{
    use SoftDeletes, EnableLogs;

    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 50;

    /**
     * The array fields to filter in search query.
     *
     * @var array
     */
    protected $filters = [];

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @param  \Illuminate\Database\Query\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query)
    {
        $builder = new \App\Builders\BaseBuilder($query);
        $builder->setFilters($this->filters);

        return $builder;
    }
}
