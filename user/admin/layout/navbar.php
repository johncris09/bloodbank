

			<nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="<?php echo base_url(); ?>dashboard">
                            <img style="width: 190px;" class="img-fluid" src="<?php echo base_url(); ?>assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container">
                        <ul class="nav-left"> 
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right"> 
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?>assets/images/avatar.png" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span><?php echo $_SESSION['username']; ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut"> 
                                        <li>
                                            <a href="<?php echo base_url(); ?>profile/edit/<?php echo $_SESSION['admin_id'] ?>">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>  
                                        <li>
                                            <a href="<?php echo base_url(); ?>profile/change_password/<?php  echo $_SESSION['admin_id']  ?>"> <i class="feather icon-lock"></i> Change Password </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>dashboard/signout"> <i class="feather icon-log-out"></i> Logout </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
