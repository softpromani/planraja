<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>Accordion</span>
                    </a>
                </li>
                <li>
                    <a href="components-badges.html">
                        <i class="bi bi-circle"></i><span>Badges</span>
                    </a>
                </li>
                <li>
                    <a href="components-breadcrumbs.html">
                        <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                    </a>
                </li>
                <li>
                    <a href="components-buttons.html">
                        <i class="bi bi-circle"></i><span>Buttons</span>
                    </a>
                </li>
                <li>
                    <a href="components-cards.html">
                        <i class="bi bi-circle"></i><span>Cards</span>
                    </a>
                </li>
                <li>
                    <a href="components-carousel.html">
                        <i class="bi bi-circle"></i><span>Carousel</span>
                    </a>
                </li>
                <li>
                    <a href="components-list-group.html">
                        <i class="bi bi-circle"></i><span>List group</span>
                    </a>
                </li>
                <li>
                    <a href="components-modal.html">
                        <i class="bi bi-circle"></i><span>Modal</span>
                    </a>
                </li>
                <li>
                    <a href="components-tabs.html">
                        <i class="bi bi-circle"></i><span>Tabs</span>
                    </a>
                </li>
                <li>
                    <a href="components-pagination.html">
                        <i class="bi bi-circle"></i><span>Pagination</span>
                    </a>
                </li>
                <li>
                    <a href="components-progress.html">
                        <i class="bi bi-circle"></i><span>Progress</span>
                    </a>
                </li>
                <li>
                    <a href="components-spinners.html">
                        <i class="bi bi-circle"></i><span>Spinners</span>
                    </a>
                </li>
                <li>
                    <a href="components-tooltips.html">
                        <i class="bi bi-circle"></i><span>Tooltips</span>
                    </a>
                </li>
            </ul>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#hotels-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Hotel Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="hotels-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('view-hotels') }}" class="active">
                        <i class="bi bi-circle"></i><span>All Hotels</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('add-hotels') }}">
                        <i class="bi bi-circle"></i><span>Add Hotels</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#hotels-gallery" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Contact/Enquiry</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="hotels-gallery" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('get-enquiry') }}" class="active">
                        <i class="bi bi-circle"></i><span>Enquiry Data</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('get-contact') }}">
                        <i class="bi bi-circle"></i><span>Contact Data</span>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#amenities-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Amenities Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="amenities-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('view-amenities') }}" class="active">
                        <i class="bi bi-circle"></i><span>All Amenities</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('add-amenities') }}">
                        <i class="bi bi-circle"></i><span>Add Amenities</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('add-category') }}">
                        <i class="bi bi-circle"></i><span>Add Amenities Category</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#package-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Package Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="package-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('view-all-packages') }}">
                        <i class="bi bi-circle"></i><span>All Packages</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('add-tour-category') }}">
                        <i class="bi bi-circle"></i><span>Add Package Category</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

</aside><!-- End Sidebar-->
