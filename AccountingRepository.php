<?php

namespace App;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

final readonly class AccountingRepository implements IRepository
{
    use SelectQueryCondition;

    public function __construct(
        protected Accounting $accounting
    )
    {
    }

    /**
     * @param string $what
     * @param string $value
     * @param string $operator
     * @param bool $isOrCondition
     * @return Collection|Builder
     */
    public function getRecordsBy(
        string $what,
        string $value,
        string $operator = '=',
        bool $isOrCondition = false,
    ): Collection|Builder
    {
        return $this->accounting->newQuery()->where($what, $operator, $value, $isOrCondition);
    }
}
