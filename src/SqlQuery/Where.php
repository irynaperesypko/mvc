<?php

namespace Ira\SqlQuery;

class Where
{
    private $sql;

    /**
     * @param mixed $sql
     */
    public function setSql(array $params): void
    {
        $str = 'WHERE ';
        if (is_array($params) && count($params) > 0) {
            if ($params[0] == 'like') {
                $str = $this->getLike($params[1]);
            } else {
                foreach ($params as $param => $value) {
                    $str .= $param . '=' . $value . ' AND ';
                }
                $str = substr($str, 0, -4);
            }

        }
        $this->sql = $str;
    }

    private function getLike($arr)
    {
        $key = array_key_first($arr);
        return 'WHERE ' . $key . ' LIKE %' . $arr[$key]."%";
    }

    public function getSql()
    {
        return $this->sql;
    }
}

$obj = new Where();
$obj->setSql(['like', ['title' => 'test']]);
print $obj->getSql();