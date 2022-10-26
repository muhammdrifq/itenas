<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #F69000;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars" style="color: #FFFFFF;"></i></a>
                </li>
                
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt" style="color: #FFFFFF;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" 
                        href="/logout" role="button" 
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <p style="color: #FFFFFF;" class="btn-hover">Logout</p> 
                        
                    </a>
                    <form action="/logout" id="logout-form" method="post">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>