<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="/Admin/Dashboard.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                        User
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                              <hr class="dropdown-divider" >
                            <a class="nav-link" href="/Admin/Users/UserDashboard.php">Users</a>
                            <hr class="dropdown-divider" >
                            <a class="nav-link" href="/Admin/Roles/role.php">Roles</a>
                              <hr class="dropdown-divider" >
                            <a class="nav-link" href="/Admin/Adminpermission/Permissions.php">Permissions</a>
                              <hr class="dropdown-divider" >
                        </nav>
                    </div>
                    <a class="nav-link" href="/Admin/Orders/Orders.php">
                        <div class="sb-nav-link-icon"><i class="fa fa-list-alt"></i></div>
                        Orders
                    </a>
                    <a class="nav-link" href="/Admin/Stock/stock.php">
                        <div class="sb-nav-link-icon"><i class="fa fa-list-alt"></i></div>
                        Stock
                    </a>
                    <a class="nav-link" href="/Admin/Products/ProductMenu.php">
                        <div class="sb-nav-link-icon"><i class="fa fa-list-alt"></i></div>
                        Products
                    </a>
                    <a class="nav-link" href="/Admin/ingrediants/ingrediants.php">
                        <div class="sb-nav-link-icon"><i class="fa fa-list-alt"></i></div>
                        Ingreadiants
                    </a>
                    <a class="nav-link" href="/Admin/Payments/PaymentDashboard.php">
                        <div class="sb-nav-link-icon"><i class="fa fa-list-alt"></i></div>
                        Payments
                    </a>
                    <a class="nav-link" href="/Admin/Sales/SalesDashboard.php">
                        <div class="sb-nav-link-icon"><i class="fa fa-list-alt"></i></div>
                        Sales
                    </a>
                    <a class="nav-link" href="/Admin/Expenses/ExpensesDashboard.php">
                        <div class="sb-nav-link-icon"><i class="fa fa-list-alt"></i></div>
                        Expenses
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Admin
            </div>
        </nav>
    </div>
<div id="layoutSidenav_content">
