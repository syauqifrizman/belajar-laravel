<nav class="bg-body-tertiary d-flex align-items-center py-4">
    <div class="px-4">
        <a class="navbar-brand" href="/">Navbar</a>
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

        <div>
            <button class="btn-primary">
                <a href="{{ route('loginPage') }}">Login</a>
            </button>
        </div>
    </div>
</nav>
