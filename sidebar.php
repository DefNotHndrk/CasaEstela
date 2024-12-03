
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="img/Casa.jfif" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            
            <div class="profile-usertitle-status"><span class=""></span>Admin</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
    <?php 
        if (isset($_GET['dashboard'])){ ?>
            <li class="active">
                <a href="index.php?dashboard"><em class="fa fa-dashboard">&nbsp;</em>
                    Dashboard
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?dashboard"><em class="fa fa-dashboard">&nbsp;</em>
                    Dashboard
                </a>
            </li>
            
        <?php }
         if (isset($_GET[''])){ ?>
            <li class="active">
                <a href=""><em class="fa fa-user">&nbsp;</em>
                    User Info
                </a>
            </li>
        <?php } 
        else{?>
            <li>
                <a href=""><em class="fa fa-user">&nbsp;</em>
                    User Info
                </a>
            </li>
            
            <?php }
            
        if (isset($_GET['reservation'])){ ?>
        
            <li class="active">
                
            <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
            
                    Bookings & Reservation   
                    
                    
                    <a href="#sub-menu" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu">Room <span class="caret"></span></a>
        
        
                    <div class="collapse list-group-level1" id="sub-menu">
                      <a href="#" class="list-group-item" data-parent="#sub-menu">Manage Room </a>
                      
                      <a href="#" class="list-group-item" data-parent="#sub-menu">Room Booking</a>
                    

                      
        
        <?php } else{?>
            <li>
            <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Bookings & Reservation
                </a>
            </li>
            
        
            <?php }
             if (isset($_GET[''])){ ?>
                <li class="active">
                    <a href=""><em class="fa fa-cart-plus">&nbsp;</em>
                        Orders
                    </a>
                </li>
            <?php } 
            else{?>
                <li>
                    <a href=""><em class="fa fa-cart-plus">&nbsp;</em>
                        Orders
                    </a>
                </li>
            
                <?php }
                 if (isset($_GET[''])){ ?>
                    <li class="active">
                        <a href=""><em class="fa fa-line-chart">&nbsp;</em>
                            Sales Report
                        </a>
                    </li>
                <?php } 
                else{?>
                    <li>
                        <a href=""><em class="fa fa-line-chart">&nbsp;</em>
                            Sales Report
                        </a>
                    </li>
                
                    <?php }
                    if (isset($_GET[''])){ ?>
                        <li class="active">
                            <a href=""><em class="fa fa-credit-card">&nbsp;</em>
                                Payment
                            </a>
                        </li>
                    <?php } 
                    else{?>
                        <li>
                            <a href=""><em class="fa fa-credit-card">&nbsp;</em>
                                Payment
                            </a>
                        </li>
                    
                       
        <?php }
        if (isset($_GET['room_mang'])){ ?>
            <li class="active">
                <a href="index.php?room_mang"><em class="fa fa-bed">&nbsp;</em>
                    Manage Rooms
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="index.php?room_mang"><em class="fa fa-bed">&nbsp;</em>
                    Manage Rooms
                </a>
            </li>
            

        <?php }
        if (isset($_GET['staff_mang'])){ ?>
            <li class="active">
                <a href="index.php?staff_mang"><em class="fa fa-users">&nbsp;</em>
                    Staff Section
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?staff_mang"><em class="fa fa-users">&nbsp;</em>
                    Staff Section
                </a>
            </li>
            
        <?php }
         if (isset($_GET['BookingList'])){ ?>
            <li class="active">
                <a href="index.php?BookingList"><em class="fa fa-calendar">&nbsp;</em>
                    Booking List
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?BookingList"><em class="fa fa-calendar">&nbsp;</em>
                    Booking List
                </a>
            </li>
            
        <?php }
        
        
        if (isset($_GET['complain'])){ ?>
            <li class="active">
                <a href="index.php?complain"><em class="fa fa-comments">&nbsp;</em>
                    Feedback
                </a>
            </li>
        <?php 
    } else{?>
            <li>
                <a href="index.php?complain"><em class="fa fa-comments">&nbsp;</em>
                    Feedback
                </a>
            </li>
       
<?php }?>

        <?php
        if (isset($_GET['statistics'])){ ?>
            <li class="active">
                <a href="index.php?statistics"><em class="fa fa-pie-chart">&nbsp;</em>
                    Reports
                </a>
            </li>
        <?php } else{?>
        <li>
            <a href="index.php?statistics"><em class="fa fa-pie-chart">&nbsp;</em>
                Reports
            </a>
        </li>
<?php }?>

<?php
        if (isset($_GET['statistics'])){ ?>
            <li class="">
                <a href="index.php?statistics"><em class="fa fa-cog">&nbsp;</em>
                    Settings
                </a>
            </li>
        <?php } else{?>
        <li>
            <a href="index.php?statistics"><em class="fa fa-cog">&nbsp;</em>
                Settings
            </a>
        </li>
<?php }?>




        
    </ul>
</div>