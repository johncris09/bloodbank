

					<nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
								<?php
									$role_type = $_SESSION['role_type']; 
								?>


								<?php 
									if($role_type == 0){
								?>

								
								<li class=" ">
									<a href="<?php echo base_url(); ?>dashboard">
										<span class="pcoded-micon"><i class="feather icon-home"></i><b>A</b></span>
										<span class="pcoded-mtext">Dashboard</span>
									</a>
								</li>
								
								<li class=" ">
									<a href="<?php echo base_url(); ?>admin">
										<span class="pcoded-micon"><i class="feather icon-user"></i><b>A</b></span>
										<span class="pcoded-mtext">Admin</span>
									</a>
								</li>
								<!-- <li class=" ">
									<a href="<?php echo base_url(); ?>vaccination">
										<span class="pcoded-micon"><i class="feather icon-star-on"></i><b>A</b></span>
										<span class="pcoded-mtext">Vaccination</span>
									</a>
								</li> -->
								<!-- <ul class="pcoded-item pcoded-left-item">
									<li class="pcoded-hasmenu ">
										<a href="javascript:void(0)">
											<span class="pcoded-micon"><i class="feather icon-list"></i></span>
											<span class="pcoded-mtext">Vaccination</span>
										</a>
										<ul class="pcoded-submenu">
											<li class="">
												<a href="javascript:void(0)">
													<span class="pcoded-mtext">Registration</span>
												</a>
											</li>
											<li class="">
												<a href="javascript:void(0)">
													<span class="pcoded-mtext">Counseling</span>
												</a>
											</li>  

										</ul>
									</li> 
								</ul> -->

								
								<li class=" ">
									<a href="<?php echo base_url(); ?>vaccinated">
										<span class="pcoded-micon"><i class="feather icon-star-on"></i><b>A</b></span>
										<span class="pcoded-mtext">Vaccinated</span>
									</a>
								</li>
								<li class=" ">
									<a href="<?php echo base_url(); ?>deferred">
										<span class="pcoded-micon"><i class="feather icon-command"></i><b>A</b></span>
										<span class="pcoded-mtext">Deferred</span>
									</a>
								</li>
								<li class=" ">
									<a href="<?php echo base_url(); ?>bookonline">
										<span class="pcoded-micon"><i class="feather icon-users"></i><b>A</b></span>
										<span class="pcoded-mtext">Book Online</span>
									</a>
								</li>
								<li class=" ">
									<a href="<?php echo base_url(); ?>approved">
										<span class="pcoded-micon"><i class="feather icon-users"></i><b>A</b></span>
										<span class="pcoded-mtext">Approved</span>
									</a>
								</li> 
								<li class=" ">
									<a href="<?php echo base_url(); ?>barangay">
										<span class="pcoded-micon"><i class="feather icon-file-text"></i><b>A</b></span>
										<span class="pcoded-mtext">Barangay</span>
									</a>
								</li>
								<li class=" ">
									<a href="<?php echo base_url(); ?>vaccination_site">
										<span class="pcoded-micon"><i class="feather icon-map-pin"></i><b>A</b></span>
										<span class="pcoded-mtext">Vaccination Site</span>
									</a>
								</li>
								<li class=" ">
									<a href="<?php echo base_url(); ?>schedule">
										<span class="pcoded-micon"><i class="feather icon-calendar"></i><b>A</b></span>
										<span class="pcoded-mtext">Schedule</span>
									</a>
								</li>
								<li class=" ">
									<a href="<?php echo base_url(); ?>vaccine">
										<span class="pcoded-micon"><i class="feather icon-box"></i><b>A</b></span>
										<span class="pcoded-mtext">Vaccine</span>
									</a>
								</li>
								<li class=" ">
									<a href="<?php echo base_url(); ?>screener">
										<span class="pcoded-micon"><i class="feather icon-navigation-2"></i><b>A</b></span>
										<span class="pcoded-mtext">Screener</span>
									</a>
								</li>
								<li class=" ">
									<a href="<?php echo base_url(); ?>vaccinator">
										<span class="pcoded-micon"><i class="feather icon-shield"></i><b>A</b></span>
										<span class="pcoded-mtext">Vaccinator</span>
									</a>
								</li>
								<li class=" ">
									<a href="<?php echo base_url(); ?>backup">
										<span class="pcoded-micon"><i class="feather icon-folder"></i><b>A</b></span>
										<span class="pcoded-mtext">Database Backup</span>
									</a>
								</li>

								<?php
									}else if($role_type == 1){
								?>
								<li class=" ">
									<a href="<?php echo base_url(); ?>dashboard">
										<span class="pcoded-micon"><i class="feather icon-list"></i><b>A</b></span>
										<span class="pcoded-mtext">Registration</span>
									</a>
								</li>

								<?php
									}
								?>
                        </div>
                    </nav>
