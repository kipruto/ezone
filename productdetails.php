<?php

require_once './components/header.php';

$id = isset($_GET['id']) ? $_GET['id'] : false;



class getProductID
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
    public function fetchproduct($id){
        
        
$sql = "SELECT *  FROM fruits WHERE id =$id UNION SELECT *  FROM cereals WHERE id =$id UNION SELECT *  FROM herbs WHERE id =$id UNION SELECT *  FROM vegetables WHERE id =$id UNION SELECT *  FROM dairy WHERE id =$id";

$result = mysqli_query($this->conn, $sql);

if (mysqli_num_rows($result) > 0) {
    return $result;
} else {
    die("error returned nothing");
}

    }
}

?>

<?php
        $details = new getProductID();
        $result = $details->fetchproduct($id);
        while ($row = mysqli_fetch_assoc($result)) {
                productpage($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount'], $row['productcategory'], $row['pp']);
            }


            ?>
        <!-- product area end -->
        <?php 
        

require_once './components/footer.php'



        ?>