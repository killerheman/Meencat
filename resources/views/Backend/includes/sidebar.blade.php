<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-80 img-radius" src="{{asset('Backend/assets/images/meencat-logo.jpeg')}}" alt="User-Profile-Image">
                        <div class="user-details">
                            <span id="more-details">MeenCat ADMIN<i class="fa fa-caret-down"></i></span>
                        </div>
                    </div>

                    <div class="main-menu-content">
                        <ul>
                            <li class="more-details">
                                <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                <a href="#!"><i class="ti-settings"></i>Settings</a>
                                <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-15 p-b-0">
                    <form class="form-material">
                        <div class="form-group form-primary">
                            <span class="form-bar"></span>
                        </div>
                    </form>
                </div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="active">
                        <a href="{{route('backend.dashboard')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    </li></ul>
                    <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="{{route('backend.student')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-user" ></i></span>
                            <span class="pcoded-mtext">Registerd Students</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="{{route('backend.placedstudent')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                            <span class="pcoded-mtext">Placed Students</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="{{route('backend.gallery')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-image"></i></span>
                            <span class="pcoded-mtext">Gallery</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="{{route('backend.contacts')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-id-card"></i></span>
                            <span class="pcoded-mtext">Contacts</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="{{route('backend.course')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                            <span class="pcoded-mtext">Course</span>
                        </a>
                    </li>
                </ul>
                </ul>

        </nav>
