<div class="header-admin">
    <nav>
        <ul id="menu-admin">
            <li>
                    <i class="fas fa-edit"></i>
                    <a href="{{ url('dashboard') }}">DashBoard</a>
            </li>
            <li>
                <a href="{{route('cat.index')}}">Catégorie</a>
            </li>
            <li>
                <a href="{{route('email.index')}}">E-mails</a>
            </li>
            <li>
                <a class="deco" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </nav>
</div>
