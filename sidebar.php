        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Release Assistant</div>
            </a>


            <hr class="sidebar-divider my-0">

			<?php
//				if ( $_SERVER[PHP_SELF] == '/link_for_this_page.php' ) {
//					echo "            <li class=\"nav-item active\">" . PHP_EOL;
//				}
//				else {
					echo "            <li class=\"nav-item\">" . PHP_EOL;
//				}
			?>
                <a class="nav-link"> <!--href="link_for_this_page.php"-->
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="text-decoration:line-through">Dashboard (WIP)</span>
				</a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Release
            </div>
			
			<?php
				if ( $_SERVER[PHP_SELF] == '/release_summary.php' ) {
					echo "            <li class=\"nav-item active\">" . PHP_EOL;
				}
				else {
					echo "            <li class=\"nav-item\">" . PHP_EOL;
				}
			?>
                <a class="nav-link" href="release_summary.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Releases</span>
				</a>
            </li>

			<?php
				if ( $_SERVER[PHP_SELF] == '/change_summary.php' ) {
					echo "            <li class=\"nav-item active\">" . PHP_EOL;
				}
				else {
					echo "            <li class=\"nav-item\">" . PHP_EOL;
				}
			?>
                <a class="nav-link" href="change_summary.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Changes</span>
				</a>
            </li>


            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Development
            </div>

			<?php
//				if ( $_SERVER[PHP_SELF] == '/link_for_this_page.php' ) {
//					echo "            <li class=\"nav-item active\">" . PHP_EOL;
//				}
//				else {
					echo "            <li class=\"nav-item\">" . PHP_EOL;
//				}
			?>
                <a class="nav-link"> <!--href="link_for_this_page.php"-->
                    <i class="fas fa-fw fa-table"></i>
                    <span style="text-decoration:line-through">Developments (WIP)</span>
				</a>
            </li>

			<?php
//				if ( $_SERVER[PHP_SELF] == '/link_for_this_page.php' ) {
//					echo "            <li class=\"nav-item active\">" . PHP_EOL;
//				}
//				else {
					echo "            <li class=\"nav-item\">" . PHP_EOL;
//				}
			?>
                <a class="nav-link"> <!--href="link_for_this_page.php"-->
                    <i class="fas fa-fw fa-table"></i>
                    <span style="text-decoration:line-through">Tasks (WIP)</span>
				</a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->