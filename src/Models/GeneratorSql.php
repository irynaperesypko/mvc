<?php

namespace Ira\Models;

class GeneratorSql
{

    private string $operation = 'SELECT';
    private string $table = 'abouts';
    private $whereString;
    private $limit;
    private $values;

    public function __construct($operation,
                                $table,
                                $values = [],
                                $where = false,
                                $whereField = null,
                                $whereParam = null,
                                $limit = null
    )
    {
        $this->operation = $operation;
        $this->table = $table;
        $this->values = $values;
        if ($where && $whereField && $whereParam) {
            $this->whereString = 'WHERE ' . $whereField . '=' . $whereParam;
        }
        $this->limit = $limit;
    }

    public function getSql()
    {
        switch ($this->operation) {
            case 'INSERT':
                return $this->insert();
            default:
                return $this->select();
        }
    }

    private function insert()
    {
        if (count($this->values) > 0) {
            $str = '';
            foreach ($this->values as $value) {
                $str .= '\'' . $value . '\',';
            }
            return 'INSERT INTO ' . $this->table . ' VALUES (' . substr($str, 0, -1) . ')';
        }
    }

    private function select(): string
    {
        $sql = 'SELECT * FROM ' . $this->table;
        if ($this->whereString) {
            $sql = $sql . ' ' . $this->whereString;
        }
        if ($this->limit) {
            $sql = $sql . ' LIMIT=' . $this->limit;
        }
        return $sql;
    }
}

$obj = new GeneratorSql('SELECT', 'hillel', ['one', 'two'], null, null, null, true, 'id', 5,3);
print  $obj->getSql();