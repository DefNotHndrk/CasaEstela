
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="img/Casa.jfif" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            
            <div class="profile-usertitle-status"><span class=""></span>Cashier</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
    <?php 
        if (isset($_GET['dashboard'])){ ?>
            <li class="active">
                <a href=""><em class="fa fa-calculator">&nbsp;</em>
                    POS
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href=""><em class="fa fa-calculator">&nbsp;</em>
                    POS
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
            
        if (isset($_GET['reservation'])){ ?>
        
            <li class="active">
                
            <a href="index.php?POS"><em class="fa fa-usd">&nbsp;</em>
                    Sales
        <?php } else{?>
            <li>
            <a href="index.php?POS"><em class="fa fa-usd">&nbsp;</em>
                    Sales
                </a>
            </li>
           
<?php }?>
<?php
        if (isset($_GET['statistics'])){ ?>
            <li class="active">
                <a href=""><em class="fa fa-cog">&nbsp;</em>
                    Settings
                </a>
            </li>
        <?php } else{?>
        <li>
            <a href=""><em class="fa fa-cog">&nbsp;</em>
                Settings
            </a>
        </li>
<?php }?>
    </ul>
</div>
<!--index.php?statistics (inside href)