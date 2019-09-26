<!-- SIDEBAR sidebar -->
<aside class="sidenav">
    <div class="sidenav__brand">
        <i class="fas fa-box-open sidenav__brand-icon"></i>
        <a class="sidenav__brand-link" href="<?php echo base_url() ?>">Tea<span class="text-light">Matik</span></a>
        <i class="fas fa-times sidenav__brand-close"></i>
    </div>
    <div class="sidenav__profile">
        <div class="sidenav__profile-avatar"></div>
        <div class="sidenav__profile-title text-light">Admin</div>
    </div>
    <div class="row row--align-v-center row--align-h-center">
        <ul class="navList">
            <li class="navList__heading">Data Log<i class="fas fa-database"></i></li>
            <li>
                <div class="navList__subheading row row--align-v-center">
                    <span class="navList__subheading-icon"><i class="fas fa-keyboard"></i></span>
                    <span class="navList__subheading-title">Data</span>
                </div>
                <ul class="subList subList--hidden">
                    <a href="<?php echo base_url() ?>Employee/index">
                        <li class="subList__item">Employee</li>
                    </a>
                    <a href="<?php echo base_url() ?>Position/index">
                        <li class="subList__item">Position</li>
                    </a>
                    <a href="<?php echo base_url() ?>Department/index">
                        <li class="subList__item">Department</li>
                    </a>

                </ul>
            </li>
            <li>
                <div class="navList__subheading row row--align-v-center">
                    <span class="navList__subheading-icon"><i class="fas fa-building"></i></span>
                    <span class="navList__subheading-title">Facility</span>
                </div>
                <ul class="subList subList--hidden">
                    <li class="subList__item">Meeting Room</li>
                    <li class="subList__item">Event List</li>
                    <li class="subList__item">Entertainment Center</li>
                </ul>
            </li>
        </ul>
    </div>
</aside>