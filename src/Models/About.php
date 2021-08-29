<?php

namespace Ira\Models;

class About
{
    private $arr = [
        'one' => 'number1',
        'two' => 'number2',
        'three' => 'number3',
        'four' => 'number4',
        'five' => 'number5',
        'six' => 'number6',
    ];

    public function getAllArray(): array
    {
        return $this->arr;
    }

    public function getItemFromArray($key): array
    {
        return [$this->arr[$key]];
    }
}