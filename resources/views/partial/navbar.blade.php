
    <style>
            /* Top Navbar Styles */
            .navbar-custom {
            background-color: #3f2330;
            height: 80px;
            position: relative;
            overflow: visible;
            border: none !important;
        }

        .emergency-badge {
            font-size: 1.1rem;
            padding: 8px 20px;
            white-space: nowrap;
            color: white;
        }

        .red-square {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #dc3545;
            color: white !important;
            width: 40px;
            height: 40px;
            border-radius: 4px;
            margin-left: 8px;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .logo-container {
            position: absolute;
            left: 20px;
            top: 100%;
            transform: translateY(-50%);
            z-index: 1000;
        }

        .logo-img {
            height: 100px;
            transition: transform 0.3s;
        }

        .logo-img:hover {
            transform: scale(1.05);
        }

        /* Bottom Navbar Styles */
        .bottom-navbar {
            background-color: #F5F5DC;
        }

        .bottom-navbar .nav-link {
            color: #000 !important;
            padding: 0.5rem 1rem;
        }

        .bottom-navbar .dropdown-menu {
            background-color: #4f5d73;
            border: none;
        }

        .bottom-navbar .dropdown-item {
            color: white !important;
        }

        .bottom-navbar .dropdown-item:hover {
            background-color: #232b3f;
        }

        /* Hover Effects for Desktop */
        @media (min-width: 992px) {
            .bottom-navbar .nav-item:hover .nav-link {
                background-color: #232b3f;
                color: white !important;
            }

            .bottom-navbar .nav-item.dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
            }

            .bottom-navbar .navbar-nav {
                width: 100%;
                justify-content: center;
            }
        }

        /* Mobile Styles */
        @media (max-width: 991.98px) {
            .logo-container {
                left: 50%;
                transform: translateX(-50%) translateY(-50%);
            }

            .navbar-toggler {
                border-color: rgba(0,0,0,0.1);
            }

            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 0.55)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }

            .bottom-navbar .navbar-nav {
                padding: 10px 0;
            }

            .bottom-navbar .dropdown-menu {
                margin-left: 1rem;
                width: calc(100% - 2rem);
            }
        }


    </style>

<section>
     <!-- Top Navbar -->
     <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <div class="d-flex justify-content-between w-100 align-items-center">
                <div class="logo-container">
                    <a class="navbar-brand p-0" href="{{route('home')}}">
                        <img src="{{asset('assets/police.png')}}" alt="Gilgit Baltistan Police" class="logo-img">
                    </a>
                </div>
                <div class="d-flex align-items-center ms-auto">
                    <span class="badge emergency-badge">
                        For Emergency Call: 
                        <span class="red-square">15</span>
                    </span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Bottom Navigation Bar -->
    <nav class="navbar navbar-expand-lg bottom-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav w-100 justify-content-between">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('history')}}">History</a></li>
                            <li><a class="dropdown-item" href="{{route('inspector_police')}}">Inspector General of Police</a></li>
                            <li><a class="dropdown-item" href="{{route('organization')}}">Organization</a></li>
                            <li><a class="dropdown-item" href="{{route('martyrs')}}">Martyrs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Public Relations</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('press_release')}}">Press Release</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">IT Initiatives</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('projects')}}">Projects</a></li>
                            <li><a class="dropdown-item" href="{{route('collaborate')}}">Collaborate</a></li>
                            <li><a class="dropdown-item" href="{{route('goal')}}">Goals</a></li>
                            <li><a class="dropdown-item" href="{{route('tourist-safety')}}">Tourist Safety</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Public Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('education')}}">Education and Training</a></li>
                            <li><a class="dropdown-item" href="{{route('public-safety')}}">Public Safety</a></li>
                            <li><a class="dropdown-item" href="{{route('employment-services')}}">Employment Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Gallery</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="gallery.html">Image Gallery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Notices</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('tender')}}">Tenders</a></li>
                            <li><a class="dropdown-item" href="{{route('job')}}">Job Notices</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Contact Us</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item btn btn-primary text-white " href="{{route('complain')}}">Lodge Your Complaints</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('helpline')}}">Helplines</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>

    <!-- Bootstrap JavaScript -->


    <!-- Custom JavaScript for hover functionality -->
    <script>
        // Maintain hover functionality on desktop
        function handleHover() {
            if (window.innerWidth >= 992) {
                document.querySelectorAll('.nav-item.dropdown').forEach(item => {
                    item.addEventListener('mouseenter', () => {
                        item.querySelector('.dropdown-menu').classList.add('show');
                    });
                    item.addEventListener('mouseleave', () => {
                        item.querySelector('.dropdown-menu').classList.remove('show');
                    });
                });
            }
        }

        // Initialize on load
        handleHover();
        // Update on window resize
        window.addEventListener('resize', handleHover);
    </script>

