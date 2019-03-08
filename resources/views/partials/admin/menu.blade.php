<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ active('admin.home') }}">
                {{--<li class=" {{ active(['patient', 'users/*', 'posts.*', 'pages.contact']) }} pcoded-trigger">--}}
                    <a href="{{ route('admin.home') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>

                </li>

                <li class=" pcoded-hasmenu {{ active(['users.user.*'], 'pcoded-trigger') }} {{ active(['users.user.*']) }}">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                        <span class="pcoded-mtext">Manage Users</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" {{ active(['users.user.create']) }}">
                            <a href="{{ route('users.user.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add User</span>
                            </a>
                        </li>
                        <li class="{{ active(['users.user.index']) }}">
                            <a href="{{ route('users.user.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">View All Users</span>
                            </a>
                        </li>
                    </ul>
                </li>




                <li class="{{ active('admin.media') }}">
                    {{--<li class=" {{ active(['patient', 'users/*', 'posts.*', 'pages.contact']) }} pcoded-trigger">--}}
                    <a href="{{ route('admin.media') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                        <span class="pcoded-mtext">Media</span>
                    </a>

                </li>


                <li class=" pcoded-hasmenu {{ active(['profiles.profile.*'], 'pcoded-trigger') }} {{ active(['profiles.profile.*']) }}">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-user-x"></i></span>
                        <span class="pcoded-mtext">Profile</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" {{ active(['profiles.profile.myprofile']) }}">
                            <a href="{{ route('profiles.profile.myprofile') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">View Profile</span>
                            </a>
                        </li>
                        <li class="{{ active(['profiles.profile.edit_my_profile']) }}">
                            <a href="{{ route('profiles.profile.edit_my_profile') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Edit Profile</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>


        </div>
    </div>
</nav>