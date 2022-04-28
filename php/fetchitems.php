<?php


class getData
{
    public $servername;
    public $password;
    public $dbname;
    public $username;
    public $conn;
    public $tablename;
    public $tablename2;
    public $tablename3;
    public $tablename4;

    public function __construct(  
      
          $servername = "sql305.epizy.com",
          $password = "2fCEEZLsvGMfjg",
          $dbname = "epiz_26505636_loginsys",
          $username = "epiz_26505636",
          
        $tablename = "fruits",
        $tablename2 = "vegetables",
        $tablename3 = "cereals",
        $tablename4 = "herbs",
        $tablename5 = "dairy"
    ) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this-> tablename = $tablename;
        $this-> tablename2 = $tablename2;
        $this-> tablename3 = $tablename3;
        $this-> tablename4 = $tablename4;
        $this-> tablename5 = $tablename5;

        $this->conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$this->conn) {
            die("connection failed " . mysqli_connect_error());
        }
    }
    public function fetchfruits()
    {
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            die("error returned nothing");
        }
      
    }
    public function fetchcereals()
    {
        $sql = "SELECT * FROM $this->tablename3";

        $result = mysqli_query($this->conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            die("error returned nothing");
        }
      
    }
    
    public function fetchdairy()
    {
        $sql = "SELECT * FROM $this->tablename5";

        $result = mysqli_query($this->conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            die("error returned nothing");
        }
      
    }
    public function fetchherbs()
    {
        $sql = "SELECT * FROM $this->tablename4";

        $result = mysqli_query($this->conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            die("error returned nothing");
        }
      
    }
    public function fetchvegetables()
    {
        $sql2 = "SELECT * FROM $this->tablename2";

        $result = mysqli_query($this->conn, $sql2);
        
        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            die("error returned nothing");
        }
      
    }
    
}



