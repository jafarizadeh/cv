<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= $PANEL_ROUTE_MAIN_ADR; ?>profile">
        <div class="sidebar-brand-icon">
        <img src = "<?=$HOST_PANEL_UPLOAD_ADR;?>profile.jpg"  width ="40" height="40" style="border-radius: 20px;">
        </div>
        <div class="sidebar-brand-text mx-3" style="text-transform: none;">Mehdi<sup style="font-size: 10px; font-weight : 100;"> ADMIN </sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item <?= checkModuleInSidebar('main'); ?>">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Dashboard -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Public setting -->
    <li class="nav-item <?= checkModuleInSidebar('setting'); ?>">
        <a class="nav-link" href="<?= $PANEL_ROUTE_MAIN_ADR; ?>setting">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Public setting</span></a>
    </li>
    <!-- Public setting -->

    <!-- Experiences -->
    <li class="nav-item <?= checkModuleInSidebar('add_exp'); ?> <?= checkModuleInSidebar('exps'); ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseExp" aria-expanded="true" aria-controls="collapseExp">
            <i class="fas fa-fw fa-edit"></i>
            <span>Experiences</span>
        </a>
        <div id="collapseExp" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= $PANEL_ROUTE_MAIN_ADR; ?>add_exp">Add new</a>
                <a class="collapse-item" href="<?= $PANEL_ROUTE_MAIN_ADR; ?>exps">Show all</a>
            </div>
        </div>
    </li>
    <!-- Experiences -->

    <!-- Education -->
    <li class="nav-item <?= checkModuleInSidebar('add_edu'); ?> <?= checkModuleInSidebar('edus'); ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEdu" aria-expanded="true" aria-controls="collapseEdu">
            <i class="fas fa-fw fa-edit"></i>
            <span>Education</span>
        </a>
        <div id="collapseEdu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= $PANEL_ROUTE_MAIN_ADR; ?>add_edu">Add new</a>
                <a class="collapse-item" href="<?= $PANEL_ROUTE_MAIN_ADR; ?>edus">Show all</a>
            </div>
        </div>
    </li>
    <!-- Education -->
  
    <!-- Tools skills -->
    <li class="nav-item <?= checkModuleInSidebar('add_tools_skills'); ?> <?= checkModuleInSidebar('tools_skills'); ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSkill1" aria-expanded="true" aria-controls="collapseSkill">
            <i class="fas fa-fw fa-edit"></i>
            <span>Tools Skills</span>
        </a>
        <div id="collapseSkill1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= $PANEL_ROUTE_MAIN_ADR; ?>add_tools_skills">Add new</a>
                <a class="collapse-item" href="<?= $PANEL_ROUTE_MAIN_ADR; ?>tools_skills">Show all</a>
            </div>
        </div>
    </li>
    <!-- Tools skills -->

    <!-- Skills -->
    <li class="nav-item <?= checkModuleInSidebar('add_skill'); ?> <?= checkModuleInSidebar('skills'); ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSkill2" aria-expanded="true" aria-controls="collapseSkill">
            <i class="fas fa-fw fa-edit"></i>
            <span>Skills</span>
        </a>
        <div id="collapseSkill2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= $PANEL_ROUTE_MAIN_ADR; ?>add_skill">Add new</a>
                <a class="collapse-item" href="<?= $PANEL_ROUTE_MAIN_ADR; ?>skills">Show all</a>
            </div>
        </div>
    </li>
    <!-- Skills -->

    <!-- Awards -->
    <li class="nav-item <?= checkModuleInSidebar('awards'); ?> <?= checkModuleInSidebar('add_award'); ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAwards" aria-expanded="true" aria-controls="collapseAwards">
            <i class="fas fa-fw fa-edit"></i>
            <span>Awards & Certification</span>
        </a>
        <div id="collapseAwards" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= $PANEL_ROUTE_MAIN_ADR; ?>add_award">Add new</a>
                <a class="collapse-item" href="<?= $PANEL_ROUTE_MAIN_ADR; ?>awards">Show all</a>
            </div>
        </div>
    </li>
    <!-- Awards -->
    
    <!-- Components -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li>
    <!-- Components -->

    <!-- Utilities -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li>
    <!-- Utilities -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Pages -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>
    <!-- Pages -->

    <!-- Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>
    <!-- Charts -->

    <!-- Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>
    <!-- Tables -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>

</ul>