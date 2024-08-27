<!-- ========== Left Sidebar Start ========== -->
<style>
    /* Target the slimscroll-menu div to make it scrollable */
    .slimscroll-menu {
        max-height: 400px;
        /* Adjust to your desired maximum height */
        overflow-y: auto;
        /* Enable vertical scrollbar */
    }

    /* Style the scrollbar (optional) */
    .slimscroll-menu::-webkit-scrollbar {
        width: 5px;
        /* Adjust width as needed */
    }

    .slimscroll-menu::-webkit-scrollbar-track {
        background: #f1f1f1;
        /* Track color */
    }

    .slimscroll-menu::-webkit-scrollbar-thumb {
        background: #888;
        /* Thumb color */

    }

    .bg-light-blue {
        background-color: #e3f2fd;
        /* Light blue background */
    }
</style>


<div class="left-side-menu bg-light-blue">
    <div class="user-profile text-center mt-2 mb-2">
        <div class="p-3 text-center  rounded mb-2">
            <img src="{{ URL::asset('assets/images/man.png') }}" class="avatar-md rounded-circle mb-2" alt="user image" />
        </div>

        <div class="media-body">
           
        </div>
        <div class="dropdown align-self-center bg-light-blue">
            <a class="dropdown-toggle mr-0 text-gold" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span data-feather="chevron-down" class="text-gold"></span>
            </a>
            <div class="dropdown-menu bg-light-blue">
                <a href="{{ route('settings.profile') }}" class="dropdown-item notify-item text-gold">
                    <i data-feather="settings" class="icon-dual icon-xs mr-2 text-gold"></i>
                    <span class="text-gold">Settings</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item notify-item text-gold"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2 text-gold"></i>
                    <span class="text-gold">Logout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title" style="font-size: 11px;"><b>Navigation</b></li>


                <li>
                    <a href="javascript: void(0);" style="display: block; padding: 10px 15px; font-weight: bold;">
                        <i data-feather="users"></i>
                        <span> User Management </span>
                        <span data-feather="chevron-down"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('users.index') }}"><i data-feather="list"></i> View Users</a>
                        </li>
                        <li>
                            <a href="{{ route('users.create') }}"><i data-feather="user-plus"></i> Add User</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" style="display: block; padding: 10px 15px; font-weight: bold;">
                        <i data-feather="settings"></i>
                        <span> System Settings </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i data-feather="log-out"></i>
                        <span> Logout </span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>