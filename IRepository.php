<?php

namespace App;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface IRepository
{
    public function getRecordsBy(string $what, string $value, string $operator = '='): Collection|Builder;
}
