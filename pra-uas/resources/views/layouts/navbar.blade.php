<nav class="bg-body-tertiary d-flex align-items-center py-4">
    <div class="px-4">
        <a class="navbar-brand" href="/">BlogBlog</a>
    </div>
    <div class="d-flex">
        <div class="mx-2">
            <a href="/">Home</a>
        </div>
        <div class="mx-2">
            <a href="{{ route('listAuthorPage') }}">Authors</a>
        </div>
        <div class="mx-2">
            <a href="{{ route('blogPage') }}">Blog</a>
        </div>
        <div class="mx-2">
            <a href="{{ route('listCategoryPage') }}">Categories</a>
        </div>
    </div>

    <div class="ms-auto">
        @auth
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('getMyPost') }}">My Post</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('createPostPage') }}">Create New Post</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('logoutAccount') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        @else
            <div>
                <button class="btn-primary">
                    <a href="{{ route('loginPage') }}">Login</a>
                </button>
            </div>
        @endauth
    </div>
</nav>
