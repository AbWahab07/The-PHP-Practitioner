<?php

    /**
     *
     */
    class QueryBuilder
    {
        protected $pdo;
        public function __construct($pdo)
        {
            # code...
            $this->pdo = $pdo;
        }

        public function all($table)
        {
            # code...
            $query = $this->pdo->prepare("select * from {$table}");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
    }


?>
