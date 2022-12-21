<?php

namespace App;

trait SelectQueryCondition
{
    private const CONDITIONS_OR_AND = [
        0 => 'AND',
        1 => 'OR'
    ];

    public static function takeQueryCondition(bool $isOrCondition): string
    {
        return self::CONDITIONS_OR_AND[$isOrCondition];
    }
}
