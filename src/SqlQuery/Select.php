<?php

namespace Ira\SqlQuery;

class Select
{
    private string $table;
    private $whereString;
    private $limit;
    private bool $distinct;

    public function __construct($table)
    {
        $this->table = $table;
    }


    public function getQuery(): string
    {
        $sql = 'SELECT * FROM ' . $this->table;
        if ($this->distinct) {
            $sql = 'SELECT DISTINCT * FROM ' . $this->table;
        }
        if ($this->whereString) {
            $sql = $sql . ' ' . $this->whereString;
        }
        if ($this->limit) {
            $sql = $sql . ' LIMIT=' . $this->limit;
        }
        return $sql;
    }

    /**
     * @param Where $where
     */
    public function setWhereString(Where $where): void
    {
        $this->whereString = $where->getSql();
    }

    /**
     * @param mixed $limit
     */
    public function setLimit($limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @param mixed $distinct
     */
    public function setDistinct($distinct = false): void
    {
        $this->distinct = $distinct;
    }
}

$sql = new Select('test');
$sql->setLimit(5);
$where=new Where();
$sql->setWhereString($where);
$sql->setDistinct(true);
print $sql->getQuery();