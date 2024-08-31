<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container-fluid ms-3 d-flex justify-content-between align-items-center">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="50" height="50">
            <div class="ml-2">
                <div>TECH IN</div>
                <div>DYNAMIC</div>
            </div>
        </a>

        <!-- Toggler button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav flex-row">
            <a class="nav-item nav-link" href="#">Menu</a>
            <a class="nav-item nav-link" href="#start-build">Gallery</a>
            <a class="nav-item nav-link" href="#project">Project</a>
            <a class="nav-item nav-link" href="#price">Price</a>
            <a class="nav-item nav-link" href="#tools">Tools</a>
        </div>
        <div class="navbar-icons d-flex align-items-center">
            <form class="form-inline mr-3">
                <button class="btn btn-outline-primary search-button me-3" type="submit">
                    <img src="{{ asset('images/search.png') }}" alt="Search" class="search-icon">
                </button>
            </form>
            <a href="#" class="btn btn-outline-primary mr-2 signup-button me-3">Sign Up</a>
            <a href="#" class="btn btn-outline-primary signup-button me-3">Sign In</a>
        </div>
    </div>
</nav>
