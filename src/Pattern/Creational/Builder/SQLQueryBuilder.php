<?php
declare(strict_types=1);

namespace App\Pattern\Creational\Builder;


interface SQLQueryBuilder
{
    public function select(string $table, array $fields): SQLQueryBuilder;

    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder;

    public function limit(int $start, int $offset): SQLQueryBuilder;

    public function order(string $field, string $sorting): SQLQueryBuilder;

    public function getSQL(): string;
}