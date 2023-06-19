<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.php" class="brand-link">
        <img src="<?= site_url ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?= website_title ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= site_url ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $data->username ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= site_url ?>" class="nav-link active">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Customers
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/home-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add new Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/auto-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customer List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Accounting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/auto-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Transactions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/home-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Deposit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/auto-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoices</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/auto-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/auto-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Quote</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/auto-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Quotes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/auto-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Paid Invoices</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/auto-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Unpaid Invoices</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Accounting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/auto-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Transactions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/home-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Deposit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/auto-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Paid Invoices</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/auto-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Unpaid Invoices</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Request a Quote
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/home-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home Insurance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/auto-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Auto Insurance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>forms/business-insurance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Business Insurance</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Form (Submitted)
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url ?>list/list.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home Insurance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>list/list.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Auto Insurance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url ?>list/list.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Business Insurance</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url ?>list/list.php" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Invoice(s)</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url ?>list/list.php" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Conversation</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url ?>list/list.php" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Octo Team</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url ?>list/list.php" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>