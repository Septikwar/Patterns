<?php
declare(strict_types=1);


namespace App\Pattern\Creational\Builder;


class PostgresQueryBuilder extends MysqlQueryBuilder
{
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT {$start} OFFSET {$offset}";

        return $this;
    }
}