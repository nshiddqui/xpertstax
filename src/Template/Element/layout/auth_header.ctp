

<!-- Top Bar Start -->
<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <a href="
        <?=
        $this->Url->build(['controller' => 'Home',
            'action' => 'index', 'prefix' => false])
        ?>" class="logo">
            <span>
                <?= $this->Html->image('logo.png', ['alt' => 'Logo', 'height' => '77']) ?>
            </span>
            <i>
                <?= $this->Html->image('logo.png', ['alt' => 'Logo', 'height' => '28']) ?>
            </i>
        </a>
    </div>
    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                       <?= $this->Html->image('profile/profile.jpg', ['class' => 'rounded-circle', 'alt' => 'user']) ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>Welcome ! <?= $authUser['user_detail']['first_name'] ?></small> </h5>
                    </div>
                    <!-- item-->
                    <?= $this->Html->link('<i class="mdi mdi-power"></i> <span>Logout</span>', ['controller' => 'User', 'action' => 'logout'], ['class' => 'dropdown-item notify-item', 'escape' => false]) ?>
                </div>
            </li>
        </ul>
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="dripicons-menu"></i>
                </button>
            </li>
        </ul>
    </nav>
</div>
<!-- Top Bar End -->
<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Navigation</li>
                <li>
                    <?= $this->Html->link('<i class="fa fa-shopping-cart"></i> <span>Sales</span><span class="menu-arrow"></span>', 'javascript:void(0)', ['escape' => false]) ?>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><?= $this->Html->link('Customers', ['controller' => 'Sales', 'action' => 'index','customers']) ?></li>
                        <li><?= $this->Html->link('Estimates', ['controller' => 'Sales', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link('Sales Orders', ['controller' => 'Sales', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link('Delivery Challans', ['controller' => 'Sales', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link('Invoices', ['controller' => 'Sales', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link('Payments Received', ['controller' => 'Sales', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link('Recurring Invoices', ['controller' => 'Sales', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link('Credit Notes', ['controller' => 'Sales', 'action' => 'index']) ?></li>
                    </ul>
                </li>
                <?php if ($authUser['role'] == 0) { ?>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-users"></i> <span>Users</span><span class="menu-arrow"></span>', 'javascript:void(0)', ['escape' => false]) ?>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><?= $this->Html->link('List Users', ['controller' => 'Users', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link('Add Users', ['controller' => 'Users', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-envelope"></i> <span>Files</span><span class="menu-arrow"></span>', ['javascript:void(0)'], ['escape' => false]) ?>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><?= $this->Html->link('List Documents', ['controller' => 'Documents', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link('Add Documents', ['controller' => 'Documents', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-book"></i> <span>Blogger</span><span class="menu-arrow"></span>', 'javascript:void(0)', ['escape' => false]) ?>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><?= $this->Html->link('List Blogs', ['controller' => 'Blogs', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link('Add Blogs', ['controller' => 'Blogs', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                <?php } ?>
                <li>
                    <?= $this->Html->link('<i class="mdi mdi-power"></i> <span>Logout</span>', ['controller' => 'User', 'action' => 'logout'], ['escape' => false]) ?>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

