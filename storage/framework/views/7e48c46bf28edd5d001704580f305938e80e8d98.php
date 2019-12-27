<body class="cat__config--horizontal cat__menu-left--colorful cat__config--superclean">

<nav class="cat__menu-left">
    <div class="cat__menu-left__lock cat__menu-left__action--menu-toggle">
        <div class="cat__menu-left__pin-button">
            <div><!-- --></div>
        </div>
    </div>
    <div class="cat__menu-left__logo">
        <a href="<?php echo e(url('dashboard')); ?>">
            <img src="<?php echo asset('/upload/logo/asg_logo.png'); ?>" />
        </a>
    </div>
    <div class="cat__menu-left__inner">
        <ul class="cat__menu-left__list cat__menu-left__list--root">
            <!--<li class="cat__menu-left__item">
                <a href="<?php echo e(url('users')); ?>" class="cat__menu-right__action--menu-toggle">
                    <span class="cat__menu-left__icon icmn-users cat__core__spin-delayed--pseudo-selector"></span>
                    Users
                </a>
            </li>-->
            <li class="cat__menu-left__item cat__menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="cat__menu-left__icon icmn-sphere"></span>
                    Danh mục
                </a>
                <ul class="cat__menu-left__list">
                    <li class="cat__menu-left__item">
                        <a href="<?php echo e(url('pages')); ?>">
                            <span class="cat__menu-left__icon icmn-file-text2"></span>
                            Pages
                        </a>
                    </li>
                </ul>
            </li>
            <li class="cat__menu-left__item cat__menu-left__submenu">
                <a href="javascript: void(0);"> 
                    <span class="cat__menu-left__icon icmn-file-text2"></span>
                    Công văn đến
                </a>
                <ul class="cat__menu-left__list">
                    <li class="cat__menu-left__item">
                        <a href="<?php echo e(url('congvanden')); ?>">
                            <span class="cat__menu-left__icon icmn-file-text2"></span>
                            Danh sách
                        </a>
                    </li>
                    <li class="cat__menu-left__item">
                        <a href="<?php echo e(url('congvanden/create')); ?>">
                            <span class="cat__menu-left__icon fa fa-plus"></span>
                            Thêm mới
                        </a>
                    </li>
                </ul>

               
            </li> 
            <li class="cat__menu-left__item cat__menu-left__submenu">
                <a href="javascript: void(0);">
                <span class="cat__menu-left__icon icmn-file-text2"></span>
                    Công văn đi
                </a>
            </li>
            <li class="cat__menu-left__item cat__menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="cat__menu-left__icon icmn-file-text2"></span>
                    Quyết định đi
                </a>
            </li>
            <li class="cat__menu-left__item cat__menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="cat__menu-left__icon icmn-file-text2"></span>
                    Công văn nội bộ
                </a>
            </li>
			<li class="cat__menu-left__item cat__menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="cat__menu-left__icon icmn-file-text2"></span>
                    Hệ thống
                </a>
                <ul class="cat__menu-left__list">
                    <li class="cat__menu-left__item">
                        <a href="#">
                            <span class="cat__menu-left__icon icmn-file-text2"></span>
                            Menu 1
                        </a>
                    </li>
                    <li class="cat__menu-left__item">
                        <a href="#">
                            <span class="cat__menu-left__icon icmn-bubble"></span>
                            Menu 2
                        </a>
                    </li>
                    <li class="cat__menu-left__item cat__menu-left__submenu">
                        <a href="javascript: void(0);">
                            <span class="cat__menu-left__icon icmn-calendar"></span>
                            Menu 3
                        </a>
                        <ul class="cat__menu-left__list">
                            <li class="cat__menu-left__item">
                                <a href="#">
                                    <span class="cat__menu-left__icon icmn-paste"></span>
                                    Sub Menu 1
                                </a>
                            </li>
                            <li class="cat__menu-left__item">
                                <a href="#">
                                    <span class="cat__menu-left__icon icmn-clipboard"></span>
                                     Sub Menu 2
                                </a>
                            </li>
                            <li class="cat__menu-left__item">
                                <a href="#">
                                    <span class="cat__menu-left__icon icmn-table2"></span>
                                     Sub Menu 3
                                </a>
                            </li>
                        </ul>
                    </li>
				</ul>
            </li>
        </ul>

        <!-- left aligned items -->
        <div style="padding-left: 35%; padding-top: 10px; " class="nav navbar-top-links navbar-right">
            <div class="cat__top-bar__logo">
                <a href="dashboards-alpha.html">
                    <img src="<?php echo asset('/dist/modules/dummy-assets/common/img/logo-inverse.png'); ?>" />
                </a>
            </div>
        
            <div class="cat__top-bar__item">
                <div class="dropdown cat__top-bar__avatar-dropdown">
                    <?php
                        if(isset(Auth::user()->user_id) && isset(Auth::user()->profile_image) && !empty(Auth::user()->profile_image))
                        {
                            $profileimage=Auth::user();
                    ?>   
                        <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class="cat__top-bar__avatar" href="javascript:void(0);">
                                <img src="<?php echo asset("/upload/profileimage/$profileimage->profile_image") ?>" />
                            </span>
                        </a>    
                    <?php }else{ ?>
                            <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="cat__top-bar__avatar" href="javascript:void(0);">
                                        <img src="<?php echo asset('/upload/profileimage/user_profile.jpg'); ?>" />
                                    </span>
                                </a>
                    <?php } ?>
                
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">
                        <a class="dropdown-item" href="<?php echo e(URL ('profile')); ?>"><i class="dropdown-icon icmn-user"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(URL ('changepassword')); ?>"><i class="dropdown-icon icmn-circle-right"></i> Change Password</a>
                        <!--<a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i> Support Ticket</a>-->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(url('/main/logout')); ?>"><i class="dropdown-icon icmn-exit"></i> Logout</a>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</nav>