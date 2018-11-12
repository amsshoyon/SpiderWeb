<header class="navbar navbar-inverse navbar-fixed-top">
    <div class="top-nav">
          
        <ul  class="nav navbar-nav pull-right">
               
            <li class="top-nav-list"><a href="../" target="_blank">Visit Page</a></li>

            <!--li class="top-nav-list dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <i class="notif glyphicon glyphicon-envelope"><span class="msg_num">5</span></i>
                    
                </a>

                <ul class="dropdown-menu dropdown-menu-right list-group" role="menu" style="width:500px;margin-top: 10px;">
                    <li class="dropdown-header center list-group-item active">Recent Messages</li>
                    <li class="divider"></li> 
                

                  
                    <li class="divider"></li> 
                    <li class="pull-right"><a href="inbox.php">View All</a></li>
                </ul>
            </li>

            <li class="top-nav-list dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
                <ul class="dropdown-menu  dropdown-menu-right" role="menu">
                    <li class="dropdown-header center">name</li>
                    <li class="divider"></li> 
                    <li class=""><a href="/Dashboard/Profile">Profile</a></li>
                    <li class=""><a href="/Dashboard/Security">Security</a></li>
                    <li class="divider"></li> 
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </li-->

        </ul>
    </div>

</header>

   <div class="page-wrapper chiller-theme toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div id="toggle-sidebar">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="sidebar-brand">
                    <a href="#">pro sidebar</a>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        @php
                            $user_image = auth()->user()->image;
                        @endphp
                        @if($user_image == '')
                            <img class="img-responsive img-rounded" src="/images/about/me.jpg" alt="User picture">
                        @else
                            <img class="img-responsive img-rounded" src="/storage/images/user/{{$user_image}}" alt="{{ auth()->user()->username }}">
                        @endif
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong>{{ auth()->user()->username  }}</strong>
                        </span>
                        @php
                            $user_type = auth()->user()->user_type;
                            if ($user_type == '1') {
                                $Administrator = 'Administrator';
                            }
                            elseif ($user_type == '2') {
                                $Administrator = 'Admin';
                            }
                            else{
                                $Administrator = 'User';
                            }
                        @endphp
                        <span class="user-role">{{ $Administrator }}</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li>
                            <a href="/Dashboard">
                                <i class="fa fa-calendar"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                                <span>Page Components</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="/Dashboard/Slider">Slider Images</a></li>
                                    <li><a href="/Dashboard/About">About</a></li>
                                    <li><a href="/Dashboard/Mission">Mission</a></li>
                                    <li><a href="/Dashboard/Vission">Vission</a></li>
                                    <li><a href="/Dashboard/OfferedServices">Offered Services</a></li>
                                    <li><a href="/Dashboard/FeaturedServices">Featured Services</a></li>
                                    <li><a href="/Dashboard/Features">Features</a></li>
                                    <li><a href="/Dashboard/Works">Works</a></li>
                                    <li><a href="/Dashboard/Thought">Thought</a></li>
                                    <li><a href="/Dashboard/Clients">Clients</a></li>
                                    <li><a href="/Dashboard/Team">Team</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../">Visit Page</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-chart-line"></i>
                                <span>Settings</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="/Dashboard/Admin">Add Admin</a></li>
                                    <li><a href="/Dashboard/EditProfile">Edit Profile</a></li>
                                    <li><a href="/Dashboard/EditEmail">Change Email</a></li>
                                    <li><a href="/Dashboard/EditPassword">Change Password</a></li>
                                </ul>
                            </div>
                        </li>
                       
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Examples</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">             <!-- Notifications  -->
                    <i class="fa fa-bell"></i> 
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">              <!-- Messages  -->
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <!--a href="#">               <!-- Setting  -->
                    <!--i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a-->
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
<!--nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="/images/logo/spiderweb_logo.png" style="width: 170px; margin-top: -15px;"></a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/Dashboard">Dashboard<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li ><a href="/Profile">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                <li ><a href="/Messages">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
                
                <li class="dropdown active open">
                    <a href="#" class="dropdown-toggle open" data-toggle="dropdown">Page Elements <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                    <ul class="dropdown-menu forAnimate " role="menu">
                        <li><a href="/Dashboard/Slider">Slider Images</a></li>
                        <li><a href="/Dashboard/About">About</a></li>
                        <li><a href="/Dashboard/Mission">Mission</a></li>
                        <li><a href="/Dashboard/Vission">Vission</a></li>
                        <li><a href="/Dashboard/Services">Services</a></li>
                        <li><a href="/Dashboard/Features">Features</a></li>
                        <li><a href="/Dashboard/Works">Works</a></li>
                        <li><a href="/Dashboard/Thought">Thought</a></li>
                        <li><a href="/Dashboard/Clients">Clients</a></li>
                        <li><a href="/Dashboard/team">Team</a></li>
                        <li class="divider"></li>
                        <li><a href="../">Visit Page</a></li>
                        
                        
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="/Dashboard/EditProfile">Edit Profile</a></li>
                        <li><a href="/Dashboard/EditSecurity">Edit Security</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav-->

<script type="text/javascript">
jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function () {
        $(".sidebar-submenu").slideUp(200);
        if ($(this).parent().hasClass("active")) {
            $(".sidebar-dropdown").removeClass("active");
            $(this).parent().removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this).next(".sidebar-submenu").slideDown(200);
            $(this).parent().addClass("active");
        }

    });

    $("#toggle-sidebar").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });
   
   
});
</script>