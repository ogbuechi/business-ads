<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('admin.home') }}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                </li>

{{--                <li>--}}
{{--                    <a href="calendar.html" class="waves-effect active"><i class="mdi mdi-calendar"></i><span> Calendar </span></a>--}}
{{--                </li>--}}

                @if (Auth::check() && Auth::user()->hasRole(['admin','super']))

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect {{ active(['users.user.*']) }} {{ active(['users.user.*'], 'subdrop') }}"><i class="fa fa-users"></i><span> Users </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('users.user.index') }}" class="{{ active(['users.user.index']) }}"> All Users</a></li>
{{--                        <li><a href=""> Publishers</a></li>--}}
{{--                        <li><a href=""> Buyers</a></li>--}}
                        <li><a href="{{ route('users.user.create') }}"  class="{{ active(['users.user.create']) }}"> Add User</a></li>
                    </ul>
                </li>

                    <li>
                        <a href="{{ route('admin.media') }}" class="waves-effect {{ active('admin.media') }}"><i class="mdi mdi-file"></i><span> Media </span></a>
                    </li>
@endif



                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect {{ active(['profiles.profile.*']) }} {{ active(['profiles.profile.*'], 'subdrop') }}"><i class="fa fa-user"></i><span> Profile </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('profiles.profile.myprofile') }}" class="{{ active(['profiles.profile.myprofile']) }}">View Profile</a></li>
                        <li><a href="{{ route('profiles.profile.edit_my_profile') }}"  class="{{ active(['profiles.profile.edit_my_profile']) }}"> Edit Profile</a></li>
                    </ul>
                </li>



                <li>
                    <a href="{{ route('chat.index') }}" class="waves-effect {{ active('chat.index') }}"><i class="mdi mdi-chat"></i><span> Chat </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect {{ active(['partnerships.partnership.*','invests.invest.*','sales.sale.*']) }} {{ active(['partnerships.partnership.*','invests.invest.*','sales.sale.*'], 'subdrop') }}"><i class="mdi mdi-pencil-box"></i><span> Business Ads </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('partnerships.partnership.index') }}"  class="{{ active(['partnerships.partnership.*']) }}"> Business Partnership</a></li>

                        <li><a href="{{ route('invests.invest.index') }}" class="{{ active(['invests.invest.*']) }}">Business Invest</a></li>
                        <li><a href="{{ route('sales.sale.index') }}"  class="{{ active(['sales.sale.*']) }}"> Business Sale</a></li>
                    </ul>
                </li>

                @if (Auth::check() && Auth::user()->hasRole(['admin','super']))
                <li class="menu-title">Settings</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect {{ active(['roles.role.*']) }} {{ active(['roles.role.*'],'subdrop') }}"><i class="mdi mdi-nature-people"></i><span> Roles </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('roles.role.index') }}" class="{{ active(['roles.role.index']) }}">All Roles</a></li>
                        <li><a href="{{ route('roles.role.create') }}"  class="{{ active(['roles.role.create']) }}"> Add Role</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect {{ active(['sliders.slider.*']) }} {{ active(['sliders.slider.*'],'subdrop') }}"><i class="mdi mdi-file"></i><span> Sliders </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('sliders.slider.index') }}" class="{{ active(['sliders.slider.index']) }}">All Sliders</a></li>
                        <li><a href="{{ route('sliders.slider.create') }}"  class="{{ active(['sliders.slider.create']) }}"> Add Slider</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('settings.setting.index') }}" class="waves-effect {{ active('settings.setting.*') }}"><i class="mdi mdi-cogs"></i><span> Site Config </span></a>
                </li>
                <li><a href="{{ route('categories.category.index') }}" class="waves-effect {{ active('categories.category.*') }}"><i class="mdi mdi-calendar-text"></i><span> Categories </span></a></li>


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect {{ active(['company_cats.company_cat.*','company_sub_cats.company_sub_cat.*']) }} {{ active(['company_cats.company_cat.*','company_sub_cats.company_sub_cat.*'],'subdrop') }}"><i class="mdi mdi-file"></i><span> Company Cat(s) </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">

                        <li><a href="{{ route('company_cats.company_cat.index') }}" class="waves-effect {{ active('company_cats.company_cat.*') }}"><span>Categories </span></a></li>
                        <li><a href="{{ route('company_sub_cats.company_sub_cat.index') }}" class="waves-effect {{ active('company_sub_cats.company_sub_cat.*') }}"><span>Sub Categories </span></a></li>
                    </ul>
                </li>

                    @endif


            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

        <div class="help-box">
            <h5 class="text-muted m-t-0">For Help ?</h5>
            <p class=""><span class="text-custom">Email:</span> <br/> support@gloseed.com</p>
            <p class="m-b-0"><span class="text-custom">Call:</span> <br/> (+123) 123 456 789</p>
        </div>

    </div>
    <!-- Sidebar -left -->

</div>