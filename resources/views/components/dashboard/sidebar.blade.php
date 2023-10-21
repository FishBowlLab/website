{{--Based on https://dev.to/codeply/bootstrap-5-sidebar-examples-38pb --}}

<div class='col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark'>
    <div class='d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100'>
        <a href='/' class='d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none'>
            <span class='fs-5 d-none d-sm-inline'>Menu</span>
        </a>
        <ul class='nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start' id='side-menu'>
            <!--Regular, non-collapsable menu item-->
            <li class='nav-item'>
                <a href='#' class='nav-link align-middle px-0'>
                    <i class='fs-4 fa-solid fa-house'></i><span class='ms-1 d-none d-sm-inline'>Home</span>
                </a>
            </li>
            <!--Collapsable menu item-->
            <li>
                <a href="#submenu1" data-bs-toggle='collapse' class='nav-link px-0 align-middle'>
                    <i class='fs-4 fa-solid fa-gauge'></i><span class='ms-1 d-none d-sm-inline'>Dashboard</span>
                </a>
                <ul class='collapse show nav flex-column ms-1' id='submenu1' data-bs-parent="#side-menu">
                    <li class='w-100'>
                        <a href='#' class='nav-link px-0'>
                            <span class='d-none d-sm-inline'>Item</span>1
                        </a>
                    </li>
                    <li class='w-100'>
                        <a href='#' class='nav-link px-0'>
                            <span class='d-none d-sm-inline'>Item</span>2
                        </a>
                    </li>
                </ul>
            </li>
            <!--Copied Item that doesn't default collapse-->
            <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-4 fa-solid fa-border-all"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#side-menu">
                    <li class="w-100">
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!--Bottom Section-->
        <div class='dropdown pb-4'>
            <a href='#' class='d-flex align-items-center text-white text-decoration-none dropdown-toggle' id='dropdownUser' data-bs-toggle='dropdown' aria-expand='false'>
                <img src="{{asset('storage/small-logo.png')}}" alt="profile-img" width='30' height='30' class='rounded-circle'>
                <span class='d-none d-sm-inline mx-1'>User Name</span>
            </a>
            <ul class='dropdown-menu dropdown-menu-dark text-small shadow' aria-labelledby='drowndownUser'>
                <li><a class='dropdown-item' href="#">New Project...</a></li>
                <li><a class='dropdown-item' href="#">Settings</a></li>
                <li><a class='dropdown-item' href="#">Profile</a></li>
                <li><hr class='dropdown-divider'></li>
                <li><a class='dropdown-item' href='#'>Sign Out</a></li>
            </ul>
        </div>
    </div>
</div>