<div class="side-menu" id="admin-side-menu">
    <aside class="menu m-t-30 m-l-10">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a href="{{route('manage.dashboard')}}" class="">Dashboard</a></li>
        </ul>

        <p class="menu-label">
            Content
        </p>
        <ul class="menu-list">
            <li><a href="#" class="">Blog Posts</a></li>
            {{-- <li>
              <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
              <ul class="submenu">
                <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
                <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
              </ul>
            </li> --}}
        </ul>

        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li><a href="{{route('users.index')}}" class="">Manage Users</a></li>
            <li>
                <a class="has-submenu ">Roles &amp; Permissions</a>
                <ul class="submenu">
                    <li><a href="{{route('roles.index')}}" class="">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}" class="">Permissions</a></li>
                </ul>
            </li>
            <li>
                <a class="has-submenu">Example Accordion</a>
                <ul class="submenu">
                    <li><a href="{{route('roles.index')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                </ul>
            </li>
            <li>
                <a class="has-submenu">Another Example</a>
                <ul class="submenu">
                    <li><a href="{{route('roles.index')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>





{{--<div class="side-menu">--}}
    {{--<aside class="menu m-t-30 m-l-10">--}}
        {{--<p class="menu-label">--}}
            {{--General--}}
        {{--</p>--}}
        {{--<ul class="menu-list">--}}
            {{--<li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>--}}
        {{--</ul>--}}

        {{--<p class="menu-label">--}}
            {{--Administration--}}
        {{--</p>--}}
        {{--<ul class="menu-list">--}}
            {{--<li><a href="{{route('users.index')}}">Manage Users</a></li>--}}
            {{--<li>--}}
                {{--<a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>--}}
                {{--<ul>--}}
                    {{--<a href="{{route('roles.index')}}">Roles </a>--}}
                    {{--<a href="{{route('permissions.index')}}">Permission</a>--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</aside>--}}
{{--</div>--}}