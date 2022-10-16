<div id="left" style = "background-color:red"><br><br>
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" style = "margin-left:0px; margin-top:-2px;" alt="User Picture" src="../assets/default.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading" style = "text-transform:capitalize; font-size:18px;">Med Tech | <?php echo $user_row['user_last']. " " .$user_row['user_first'];?></h5>
                  
                </div>
                <br />
            </div>
            <ul id="menu" class="collapse">                
                <li class="panel active">
                    <a href="home.php" >
                        <i class="icon-table"></i> Daily Transaction                      
                    </a>                   
                </li>

              <!--  <li><a href="daily.php"><i class="icon-calendar"></i> Daily Transaction </a></li> -->



                <li><a href="donors_list.php"><i class="icon-list"></i> Donors List </a></li>
                <li><a href="inventory.php"><i class="icon-wrench"></i> Inventory </a></li>
                <li><a href="logout.php"><i class="icon-power-off"></i> Logout</a></li>
            </ul>

        </div>