<div class="main-wrapper">
    <header class="navbar-custom">
        <div class="navbar-left">
            <button class="sidebar-toggle-btn me-2" id="sidebar-toggle" aria-label="Toggle Navigation">
                <i class="bi bi-list"></i>
            </button>

            <div class="dropdown ms-2">
                <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 "><img
                        src="{{ asset('images/fasal-logo.png') }}" alt="logo"
                        style="width: 65px; height: 65px;" />
                </a>
            </div>
        </div>
        <div class="nav-bar">
            <ul class="navbar-menu">
                <li><a href="{{ route('home') }}">होम</a></li>
                <li><a href="{{ route('rabi-fasal') }}">रबी </a></li>
                <li><a href="{{ route('khareef-fasal') }}">खरीफ </a></li>
                <li><a href="{{ route('jaid-fasal') }}">जायद </a></li>
                <li><a href="{{ route('contact') }}">संपर्क</a></li>
            </ul>
        </div>
        <div class="navbar-actions">
            <a href="{{ route('login') }}">
                <button class="btn-quick-action dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false" id="quick-actions-dropdown">
                <span>लॉगिन</span>
            </button>
            </a>
            <a href="{{ route('register') }}">
                <button class="btn-quick-action dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false" id="quick-actions-dropdown">
                <span>रजिस्टर</span>
            </button>
            </a>
        </div>
    </header>
</div>