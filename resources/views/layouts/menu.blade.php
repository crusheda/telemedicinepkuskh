<li class="nav-item {{ Request::is('conversations*') ? 'active' : '' }}">
    <a class="nav-link {{ Request::is('conversations*') ? 'active' : '' }}" href="{{ url('conversations')  }}">
        <i class="nav-icon icon-speech mr-4"></i> Percakapan
    </a>
</li>
@if(Auth::user()->hasRole('Admin'))
    <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">
            <i class="fa fa-users nav-icon mr-4"></i>
            <span>Akun Pengguna</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is('roles*') ? 'active' : '' }}" href="{{ route('roles.index') }}">
            <i class="fa fa-user nav-icon mr-4"></i>
            <span>Roles</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('reported-users*') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is('reported-users*') ? 'active' : '' }}"
           href="{{ route('reported-users.index') }}">
            <i class="fa fa-flag nav-icon mr-4"></i>
            <span>Akun Dilaporkan</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('settings*') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is('settings*') ? 'active' : '' }}" href="{{ route('settings.index') }}">
            <i class="fa fa-gear nav-icon mr-4"></i>
            <span>Pengaturan</span>
        </a>
    </li>
@endif
