<?php

require_once './php/component.php';

if (!isset($_POST['page'])) {
    $page = 1;
} else {
    $page = $_POST['page'];
}

$resultpp = 9;
$startingitem = ($page - 1) * $resultpp;


class NextPage
{
    public $servername;
    public $password;
    public $dbname;
    public $username;
    public $conn;
    public $tablename;


    public function __construct(
        $servername = "sql305.epizy.com",
        $password = "2fCEEZLsvGMfjg",
        $dbname = "epiz_26505636_loginsys",
        $username = "epiz_26505636",
        $tablename = "fruits"

    ) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this-> tablename = $tablename;

        $this->conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$this->conn) {
            die("connection failed " . mysqli_connect_error());
        }
    }
    public function fetchnextfruits($page, $resultpp, $startingitem){

$sql = "SELECT * FROM fruits LIMIT " . $startingitem . ',' . $resultpp;
$numrow = "SELECT * FROM fruits ";
$numrows = mysqli_query($this->conn, $numrow);


$totalfruits = mysqli_query($this->conn, $sql);
$ishowing = $page * $resultpp;
$number_of_items = mysqli_num_rows($numrows);
$numberofpages = ceil($number_of_items / $resultpp);
$result = array($totalfruits, $ishowing, $number_of_items, $numberofpages);
return $result;


    }

    public function fetchnextveg($page, $resultpp, $startingitem){

$sql = "SELECT * FROM vegetables LIMIT " . $startingitem . ',' . $resultpp;
$numrow = "SELECT * FROM vegetables ";
$numrows = mysqli_query($this->conn, $numrow);


$totalveg = mysqli_query($this->conn, $sql);
$ishowing = $page * $resultpp;
$number_of_items = mysqli_num_rows($numrows);
$numberofpages = ceil($number_of_items / $resultpp);
$result = array($totalveg, $ishowing, $number_of_items, $numberofpages);
return $result;






            }

}
$nexxtpage  = new NextPage();



$result =  $nexxtpage->fetchnextfruits($page, $resultpp, $startingitem);

                                    while ($row = mysqli_fetch_assoc($result[0])) {
                                        alloffers($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount']);
                                    }






$totalveg =  $nexxtpage->fetchnextveg($page, $resultpp, $startingitem);

                                    while ($row = mysqli_fetch_assoc($totalveg[0])) {
                                        alloffers($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount']);
                                    }
                                    ?>







