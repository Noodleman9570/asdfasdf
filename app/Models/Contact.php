<?php

namespace App\Model;

use mysqli;


class Contact
{
    protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    protected $db_name = DB_NAME;

    protected $connection;

    protected $query;

    public function __construct(){
        $this->connection();
    }

    public function conection(){
        $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pas, $this->db_name);

        if (condition) {
            # code...
        }
    }
}