<?php
require_once './components/header.php';

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = (int)$_GET['page'];
}


$searchkeyword = $_POST['search'];

          
$conn = mysqli_connect('sql305.epizy.com', 'epiz_26505636', '2fCEEZLsvGMfjg', 'epiz_26505636_loginsys');
$search = mysqli_escape_string($conn, $searchkeyword);
$resultpp = 5;
$startingitem = ($page - 1) * $resultpp;
$sql = "SELECT * FROM fruits WHERE productname LIKE '%$search%' OR productcategory LIKE '%$search%' LIMIT " . $startingitem . ',' . $resultpp; 
$queryresult = mysqli_query($conn, $sql );
?>


<!-- header end -->
<div class="shop-page-wrapper ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-sidebar">
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Search Products</h3>
                        <div class="sidebar-search">
                            <form action="./searchhandler.php" method="POST">
                                <input  name='search' placeholder="Search Products..." type="text">
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
                                    <label>price : </label>
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                                <button type="button">Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-45">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-categories">
                           
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-overflow mb-45">


                    </div>
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title"></h3>
                        <div class="product-size">
                           
                        </div>
                    </div>
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title"></h3>
                     
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-product-wrapper">
                    <div class="shop-bar-area">
                        <div class="shop-bar pb-60">
                            <div class="shop-found-selector">
                                <div class="shop-found">
                                    <p>Showing <span>
                                            <?php
                                            $number_of_items = mysqli_num_rows($queryresult);
                                            $numberofpages = ceil($number_of_items / $resultpp);
                                            $ishowing = $page * $resultpp;
                                            echo $number_of_items ?> Result(s)</span> Out of <span> <?php


                                                                                    echo $number_of_items; ?>

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
                        <div class="shop-product-content tab-content">
                            <div id="grid-sidebar7" class="tab-pane fade active show">
                                <div class="row">

                                <?php

                                    $totalresult = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($queryresult)) {
                                        allofffersingle($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount']);
                                    }
                                    
                                    ?>
                                </div>
                            </div>
                            <div id="grid-sidebar8" class="tab-pane fade">
                                <div class="row">
                                    <?php
                                    $totalresult = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($queryresult)) {
                                        allofffersingle($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount']);
                                    }
                                  
                                    ?>

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

                        for ($page = 1; $page <= $numberofpages; $page++) {
                            echo '<li><a href="shopgrid.php?page=' . $page . '">' . $page . '</a></li>';
                        }
                        ?>

                        <li class="active"><a href="#"><i class="ti-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php


require_once './components/footer.php';



?>