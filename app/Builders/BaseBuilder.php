<?php

namespace App\Builders;

use Illuminate\Database\Eloquent\Builder;

class BaseBuilder extends Builder
{
    protected $filters = [];

    public function setFilters($filters)
    {
        $this->filters = $filters;
    }

    public function search()
    {
        return $this->whereLike($this->filters, request()->search);
    }

    public function active()
    {
        return $this->whereStatus(1);
    }
}
