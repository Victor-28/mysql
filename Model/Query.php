<?php


class Query
{

    private $userArray = [];
    private $connection;
    //sql statement to get every row from database
    private $userSelect = 'SELECT * FROM student';


    //here i made new connection to database
    public function createConnection()
    {
        $this->connection = new Connection();
        return $this->connection->openConnection();
    }


    //turning database into array
    public function createUserArray()
    {
        foreach ($this->createConnection()->query($this->userSelect) as $user) {
            array_push($this->userArray, $user);
        }

    }

    public function getUserArray()
    {
        return $this->userArray;
    }
}
