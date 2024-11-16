{{-- This file is used to store sidebar item --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('menu.dashboard') }}</a></li>

{{-- ADMIN --}}
@if (backpack_user()->canAny([
    'access_users',
    'access_roles',
    'access_permissions'
]))
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="nav-icon las la-cog"></i> {{ trans('menu.admin') }}
        </a>
        <ul class="nav-dropdown-items">
            @if (backpack_user()->can('access_users'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ backpack_url('user') }}">
                        <i class="nav-icon la la-user"></i><span>{{ trans('menu.users') }}</span>
                    </a>
                </li>
            @endif
    
            @if (backpack_user()->can('access_roles'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ backpack_url('role') }}">
                        <i class="nav-icon la la-id-badge"></i><span> {{ trans('menu.roles') }}</span>
                    </a>
                </li>
            @endif
    
            @if (backpack_user()->can('access_permissions'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ backpack_url('permission') }}">
                        <i class="nav-icon la la-key"></i> <span> {{ trans('menu.permissions') }}</span>
                    </a>
                </li>
            @endif
        </ul>
    </li>
@endif

<div class="sidebar-social">
    <a href="#" class="icon"><i class="lab la-youtube"></i></a>
    <a href="#" class="icon"><i class="lab la-instagram"></i></a>
    <a href="#" class="icon"><i class="lab la-facebook-square"></i></a>
</div>