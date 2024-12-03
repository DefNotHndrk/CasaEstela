<?php
require "db.php"; // Include the database connection file

// Query to fetch customer information
$sql = "SELECT * FROM reservation";
$stmt = $connection->query($sql);
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Booking List</li>
        </ol>
    </div><!--/.row-->

    <br>

    <div class="row">
        <div class="col-lg-12">
            <div id="success"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Booking List
                    
                </div>
                <div class="panel-body">
                   
                    <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%"
                           id="rooms">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Room name</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Price</th>
                            <th>Payment Method</th>
                            <th>Payment Option</th>
                            <th>Total price</th>
                            <th>Remaining Balance</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Time Arrival</th>
                            <th>Actions</th>
                            
                        </tr>
                        </thead>
                        <?php
                   foreach ($stmt as $data) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($data["reservation_id"]) . "</td>";
                    echo "<td>" . htmlspecialchars($data["room_name"]) . "</td>";
                    echo "<td>" . htmlspecialchars($data["firstname"]) . "</td>";
                    echo "<td>" . htmlspecialchars($data["lastname"]) . "</td>";
                    echo "<td>" . htmlspecialchars($data["price"]) . "</td>";
                    echo "<td>" . htmlspecialchars($data["payment_method"]) . "</td>";
                    echo "<td>" . htmlspecialchars($data["payment_option"]) . "</td>";
                    echo "<td>" . htmlspecialchars($data["total_price"]) . "</td>";
                    echo "<td>" . htmlspecialchars($data["remaining_balance"]) . "</td>";
                    echo "<td>" . htmlspecialchars($data["checkin"]) . "</td>";
                    echo "<td>" . htmlspecialchars($data["checkout"]) . "</td>";
                    echo "<td>" . htmlspecialchars($data["time_arrival"]) . "</td>";
                  
                    echo "</tr>";
                }
                
                    ?>
                      

</div>    <!--/.main-->



