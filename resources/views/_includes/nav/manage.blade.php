<div class="side-menu" id="admin-side-menu">
    <aside class="menu m-t-30 m-l-10">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a href="{{route('manage.dashboard')}}" class="{{ Nav::isRoute('manage.dashboard') }}">Dashboard</a></li>
        </ul>


        <p class="menu-label">
            Content Post
        </p>
        <ul class="menu-list">
            <li><a href="{{route('posts.index')}}" class="{{ Nav::isResource('posts', 2) }}">Blog Posts</a></li>
            {{--<li>--}}
                {{--<a class="has-submenu {{ Nav::hasSegment(['roles', 'permissions'], 2) }}">Roles &amp; Permissions</a>--}}
                {{--<ul class="submenu">--}}
                    {{--<li><a href="{{route('roles.index')}}" >Roles</a></li>--}}
                    {{--<li><a href="{{route('permissions.index')}}" class="">Permissions</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}


        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li><a href="{{route('users.index')}}" class="{{ Nav::isResource('users') }}">Manage Users</a></li>
            <li>
                <a class="has-submenu {{ Nav::hasSegment(['roles', 'permissions'], 2) }}">Roles &amp; Permissions</a>
                <ul class="submenu">
                    <li><a href="{{route('roles.index')}}" >Roles</a></li>
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