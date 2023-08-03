 <!-- Main Sidebar Container -->
 <aside class="main-sidebar elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link text-center" style="background-color : grey">
            <img class="w-100" src="<?= base_url('assets/img/logo_cni.png') ?>" alt="">
        </a>

        <!-- Sidebar -->
        <div class="sidebar bg-dark">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 d-flex">
                <div class="info d-block">
                    <h3>MENU</h3>
                </div>
            </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link text-white">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                            <?php if(session()->get('role')== 1) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white">
                            <i class="nav-icon fas fa-pen-to-square"></i>
                            <p>
                                Form
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/fpb" class="nav-link">
                                <i class="nav-icon fas fa-toolbox"></i>
                                <p>FPB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fpp" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-shop"></i>
                                <p>FPP</p>
                                </a>
                            </li>
                            </ul>
                        </li>
                        <?php } ?>
                        <?php if(session()->get('role')== 2) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white">
                            <i class="nav-icon fas fa-pen-to-square"></i>
                            <p>
                                Form 
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/fpb" class="nav-link">
                                <i class="nav-icon fas fa-toolbox"></i>
                                <p>FPB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fpp" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-shop"></i>
                                <p>FPP</p>
                                </a>
                            </li>
                            </ul>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a href="/alat" class="nav-link text-white">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    Inventory
                                </p>
                            </a>
                        </li>
                    
                        <li class="nav-item">
                            <a href="/history" class="nav-link text-white">
                                <i class="nav-icon fas fa-clock-rotate-left"></i>
                                <p>
                                    History
                                </p>
                            </a>
                        </li>
            
                        <li class="nav-item">
                            <a href="/logout" class="nav-link text-white">
                                <i class="nav-icon fas fa-sign-out"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /.sidebar -->
    </aside>
