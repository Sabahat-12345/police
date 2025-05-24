
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Top Navbar Styling */
        .navbar-custom {
            background-color: #1e4d2b;
            padding: 15px 0;
            height: 100px;
            width: 100vw;
            position: relative;
            z-index: 1;
            overflow: visible;
            border: none !important;
        }

        .logo-container {
            position: absolute;
            left: 20px;
            top: 100%;
            transform: translateY(-50%);
            z-index: 1000;
        }

        .logo-img {
            height: 110px;
            width: auto;
            transition: transform 0.3s;
        }

        .logo-img:hover {
            transform: scale(1.05);
        }

        .emergency-badge {
            background-color: #f8f9fa;
            color: #333;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .red-square {
            background-color: #dc3545;
            color: white;
            padding: 3px 8px;
            margin-left: 6px;
            border-radius: 3px;
            font-size: 14px;
        }

        /* Main Navigation */
        .main-navbar {
            background-color: transparent;
            padding: 0;
            position: relative;
            z-index: 1;
        }

        .main-navbar .navbar-nav {
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        .main-navbar .nav-link {
            color: #333 !important;
            font-weight: 500;
            padding: 15px 25px !important;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .main-navbar .nav-link:hover {
            color: #00a152 !important;
            background-color: transparent !important;
        }

        .main-navbar .dropdown-toggle::after {
            margin-left: 8px;
        }

        /* Dropdown Menus */
        .dropdown-menu {
            background-color: white;
            border: none;
            border-radius: 8px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            margin-top: 0;
            transition: all 0.3s ease;
        }

        /* Ensure dropdown is hidden by default on desktop for hover effect */
        @media (min-width: 992px) {
            .dropdown-menu {
                opacity: 0;
                visibility: hidden;
                transform: translateY(-10px);
                display: block; /* Keep display block for hover effect */
            }

            .dropdown:hover .dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }
        }

        .dropdown-item {
            color: black !important;
            padding: 10px 20px;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        .dropdown-item:hover {
            color: #00a152 !important;
            background-color: transparent !important;
        }

        /* Mobile Styles */
        @media (max-width: 991.98px) {
            .main-navbar .nav-link {
                padding: 12px 15px !important;
                font-size: 16px;
            }

            .logo-container {
                left: 50%;
                transform: translateX(-50%) translateY(-50%);
            }

            .logo-img {
                height: 80px;
            }

            .emergency-badge {
                font-size: 14px;
                padding: 6px 10px;
            }

            .red-square {
                font-size: 12px;
                padding: 2px 6px;
            }

            .navbar-custom {
                height: 80px;
                padding: 10px 0;
            }

            /* Ensure dropdown menus are hidden by default on mobile */
            .dropdown-menu {
                display: none; /* Bootstrap default for click-based toggle */
            }

            .dropdown.show .dropdown-menu {
                display: block; /* Show when toggled on mobile */
            }
        }
    </style>

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

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('history')}}">History</a></li>
                            <li><a class="dropdown-item" href="{{route('inspector_police')}}">Inspector General Of Police</a></li>
                            <li><a class="dropdown-item" href="{{route('organization')}}">Organization</a></li>
                            <li><a class="dropdown-item" href="{{route('martyrs')}}">Martyrs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Public Relations</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('press_release')}}">Press Release</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">IT Initiatives</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('projects')}}">Projects</a></li>
                            <li><a class="dropdown-item" href="{{route('collaborate')}}">Collaborate</a></li>
                            <li><a class="dropdown-item" href="{{route('goal')}}">Goals</a></li>
                            <li><a class="dropdown-item" href="{{route('tourist-safety')}}">Tourist Safety</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Public Service</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('education')}}">Education And Training</a></li>
                            <li><a class="dropdown-item" href="{{route('public-safety')}}">Public Safety</a></li>
                            <li><a class="dropdown-item" href="{{route('employment-services')}}">Employment Service</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Gallery</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('fronted-gallery')}}">Image Gallery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Notices</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('tender')}}">Tenders</a></li>
                            <li><a class="dropdown-item" href="{{route('job')}}">Job Notices</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Contact Us</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('complain')}}">Lodge Your Complaints</a></li>
                            <li><a class="dropdown-item" href="{{route('helpline')}}">Helplines</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   
    <script>
        // Dropdown hover effects for desktop only
        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.dropdown');

            function enableHover() {
                if (window.innerWidth >= 992) {
                    dropdowns.forEach(dropdown => {
                        // Remove Bootstrap's default click toggle for desktop
                        const toggle = dropdown.querySelector('.dropdown-toggle');
                        toggle.setAttribute('data-bs-toggle', '');

                        dropdown.addEventListener('mouseenter', function() {
                            const dropdownMenu = this.querySelector('.dropdown-menu');
                            if (dropdownMenu) {
                                dropdownMenu.style.display = 'block';
                                setTimeout(() => {
                                    dropdownMenu.style.opacity = '1';
                                    dropdownMenu.style.visibility = 'visible';
                                    dropdownMenu.style.transform = 'translateY(0)';
                                }, 10);
                            }
                        });

                        dropdown.addEventListener('mouseleave', function() {
                            const dropdownMenu = this.querySelector('.dropdown-menu');
                            if (dropdownMenu) {
                                dropdownMenu.style.opacity = '0';
                                dropdownMenu.style.visibility = 'hidden';
                                dropdownMenu.style.transform = 'translateY(-10px)';
                                setTimeout(() => {
                                    dropdownMenu.style.display = 'none';
                                }, 300);
                            }
                        });
                    });
                } else {
                    // Re-enable Bootstrap's click toggle for mobile
                    dropdowns.forEach(dropdown => {
                        const toggle = dropdown.querySelector('.dropdown-toggle');
                        toggle.setAttribute('data-bs-toggle', 'dropdown');
                    });
                }
            }

            // Run on load
            enableHover();

            // Re-run on resize
            window.addEventListener('resize', enableHover);
        });
        
    </script>
