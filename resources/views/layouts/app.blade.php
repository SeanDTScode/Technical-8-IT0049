<nav>
    <a href="{{ route('home') }}">Home</a> |
    <a href="{{ route('about') }}">About</a>

    @auth
        |
        <a href="{{ route('customers.index') }}">Customers</a> |
        <a href="{{ route('users.index') }}">Users</a> |

        <form
            method="POST"
            action="{{ route('logout') }}"
            style="display: inline"
        >
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        |
        <a href="{{ route('login') }}">Login</a> |
        <a href="{{ route('register') }}">Register</a>
    @endauth
</nav>