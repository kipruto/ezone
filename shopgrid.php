<?php
require_once './components/header.php';

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


?>


<!-- header end -->
<div class="breadcrumb-area pt-205 pb-210" style="background-image: url(./images/cart-banner.jpg)">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2> All Our Products are here</h2>
            <ul>
                <li><a href="index.php">home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-page-wrapper ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-sidebar">
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Search Products</h3>
                        <div class="sidebar-search">
                            <form action="./searchhandler.php" method="POST">
                                <input name='search' placeholder="Search Products..." type="text">
                                <button name='searchbtn' type='submit'><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title">Filter by Price</h3>
                        <div class="price_filter">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="label-input">
                                    <label>price(ksh) : </label>
                                    <input type="text" id='amount' name="price" placeholder="Add Your Price" />
                                </div>
                                <button type="button">Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-45">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-categories">
                            <ul>
                                <li><a data-tab-target='#cereals' aria-selected="false">Cereals <span>4</span></a></li>
                                <li><a data-tab-target='#fruits' aria-selected="false">Fruits <span>9</span></a></li>
                                <li><a data-tab-target='#vegetables' aria-selected="false"> Vegetables <span>5</span> </a></li>
                                <li><a data-tab-target='#dairy' aria-selected="false">Dairy Products <span>3</span></a></li>
                                <li><a data-tab-target='#herbs' aria-selected="false">Herbs & Spice <span>4</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-overflow mb-45">


                    </div>
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title">size</h3>
                        <div class="product-size">
                            <ul>
                                <li><a href="#">50kg</a></li>
                                <li><a href="#">100kg</a></li>
                                <li><a href="#">1tonne</a></li>
                                <li><a href="#">More></a></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Popular products</h3>
                        <div class="sidebar-top-rated-all">
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/1.png" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Maize</a></h4>
                                        <div class="top-rated-rating">

                                        </div>
                                        <span>Ksh 140.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/2.png" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Beans</a></h4>
                                        <div class="top-rated-rating">

                                        </div>
                                        <span>Ksh 180.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/3.png" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Sweet Potatoes</a></h4>
                                        <div class="top-rated-rating">

                                        </div>
                                        <span>Ksh 80.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/4.png" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Onions</a></h4>
                                        <div class="top-rated-rating">

                                        </div>
                                        <span>Ksh 117</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">

<!-- header end -->
<div class="shop-product-wrapper">
                    <div class="shop-bar-area" id='shopbararea'>
                        <div class="shop-bar pb-60">
                            <div class="shop-found-selector">
                                <div class="shop-found">
                                    <p>Showing <span>
                                            <?php
$result =  $nexxtpage->fetchnextfruits($page, $resultpp, $startingitem);


                                            echo $result[1]

                                            ?>

                                        </span> Out of <span> <?php

$result =  $nexxtpage->fetchnextfruits($page, $resultpp, $startingitem);

                                                                                    echo $result[2]; ?>

                                        </span></p>
                                </div>
                                <div class="shop-selector">
                                    <label>Sort By : </label>
                                    <select name="select">
                                        <option value="">Default</option>
                                        <option value="">A to Z</option>
                                        <option value=""> Z to A</option>
                                        <option value="">In stock</option>
                                    </select>
                                </div>
                            </div>
                            <div class="shop-filter-tab">
                                <div class="shop-tab nav" role=tablist>
                                    <a class="active" href="#grid-sidebar7" data-toggle="tab" role="tab" aria-selected="false">
                                        <i class="ti-layout-grid4-alt"></i>
                                    </a>
                                    <a href="#grid-sidebar8" data-toggle="tab" role="tab" aria-selected="true">
                                        <i class="ti-menu"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="active shop-product-content tab-content" data-shop-content id='fruits'>
                            <div id="grid-sidebar7" class="tab-pane fade active show">
                                <div class="row">

                                    <?php
$result =  $nexxtpage->fetchnextfruits($page, $resultpp, $startingitem);

                                    while ($row = mysqli_fetch_assoc($result[0])) {
                                        alloffers($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount']);
                                    }
                                    ?>
                                </div>
                            </div>
                            <div id="grid-sidebar8" class="tab-pane fade">
                                <div class="row  xshopwrapper">
                                    <?php
$result =  $nexxtpage->fetchnextfruits($page, $resultpp, $startingitem);
                                    while ($row = mysqli_fetch_assoc($result[0])) {
                                        allofffersingle($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount']);
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="shop-product-content tab-content" data-shop-content id='vegetables'>
                            <div id="grid-sidebar9" class="tab-pane fade active show">
                                <div class="row xshopwrapper">

                                    <?php

$totalveg =  $nexxtpage->fetchnextveg($page, $resultpp, $startingitem);
while ($row = mysqli_fetch_assoc($totalveg[0])) {
    alloffers($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount']);
}
                                    ?>
                                </div>
                            </div>
                            <div id="grid-sidebar10" class="tab-pane fade">
                                <div class="row">
                                    <?php

$totalveg =  $nexxtpage->fetchnextveg($page, $resultpp, $startingitem);
while ($row = mysqli_fetch_assoc($totalveg[0])) {
    allofffersingle($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount']);
}
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="shop-product-content tab-content" data-shop-content id='cereals'>
                            <div id="grid-sidebar11" class="tab-pane fade active show">
                                <div class="row">


                                </div>
                            </div>
                            <div id="grid-sidebar12" class="tab-pane fade">
                                <div class="row">


                                </div>
                            </div>
                        </div>
                        <div class="shop-product-content tab-content" data-shop-content id='herbs'>
                            <div id="grid-sidebar13" class="tab-pane fade active show">
                                <div class="row">

                                </div>
                            </div>
                            <div id="grid-sidebar14" class="tab-pane fade">
                                <div class="row">


                                </div>
                            </div>
                        </div>
                        <div class="shop-product-content tab-content" data-shop-content id='dairy'>
                            <div id="grid-sidebar15" class="tab-pane fade active show">
                                <div class="row">

                                </div>
                            </div>
                            <div id="grid-sidebar16" class="tab-pane fade">
                                <div class="row">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-style mt-10 text-center">
                    <ul>

                        <li>

                            <a href="#"><i class="ti-angle-left"></i></a></li>
                        <?php

$result =  $nexxtpage->fetchnextfruits($page, $resultpp, $startingitem);


                        for ($page = 1; $page <= $result[3]; $page++) {
                            echo "<li><a class='pagebutton' data-page= '$page'>$page </a></li>";
                        }
                        ?>



                        <li class="active"><a href="#"><i class="ti-angle-right"></i></a></li>
                    </ul>
                </div>





        </div>
    </div>
</div>
<?php


require_once './components/footer.php'



?>
