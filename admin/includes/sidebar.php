<!--start Side bar -->
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.php">
            <span class="align-middle">AdminPanel</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item <?= ($page == "slideshow.php") ? "active" : "" ?> ">
                <a class="sidebar-link" href="index.php?p=slideshow">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">SlideShow</span>
                </a>
            </li>
            <li class="sidebar-item <?= ($page == "page.php") ? "active" : "" ?> ">
                <a class="sidebar-link" href="index.php?p=page">
                    <i class="align-middle" data-feather="file"></i> <span class="align-middle">Page</span>
                </a>
            </li>
        </ul>

    </div>
</nav>

<!--End of Side bar -->