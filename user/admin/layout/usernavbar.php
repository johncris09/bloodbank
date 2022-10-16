

			<nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="<?php echo base_url(); ?>userdashboard">
                            <img style="width: 190px;" class="img-fluid" src="<?php echo base_url(); ?>assets/images/user.png" alt="Theme-Logo" />
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
							<li>
								
								<?php 
									$user_profile = array(
										'user_id' => $_SESSION['user_id'],
									);
									$profile = $this->user_model->get_user_profile($user_profile);
									echo $profile['approved'] == 1 ? '<span class="text-primary"><i class="feather icon-check-circle  "></i> Approved</span>' : '<span class="text-danger"><i class="feather icon-x-circle "></i> Waiting for Approval</span>' ;  
								?>
								
							</li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?>assets/images/avatar.png" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span class="text-capitalize">
											<?php 
												$user_profile = array(
													'user_id' => $_SESSION['user_id'],
												);
												$profile = $this->user_model->get_user_profile($user_profile);
												echo $profile['firstname'] . ' ' . $profile['middlename'] . ' ' . $profile['lastname'] . ' ' . $profile['suffix']    ;
											?>
										</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut"> 
                                        <!-- <li>
                                            <a href="<?php echo base_url(); ?>profile/edit/<?php echo $_SESSION['lastname'] ?>">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>  
                                        <li>
                                            <a href="<?php echo base_url(); ?>profile/change_password/<?php  echo $_SESSION['lastname']  ?>"> <i class="feather icon-lock"></i> Change Password </a>
                                        </li> -->
                                        <li>
                                            <a href="<?php echo base_url(); ?>userdashboard/signout"> <i class="feather icon-log-out"></i> Logout </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
