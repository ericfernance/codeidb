<?php

namespace Codeidb;

class Db{
    protected $db;

    public function __construct(array $config = [])
    {
        $DB = (require_once("./lib/DB.php"));
        $this->db = $DB($config);
    }
}
