<aside id="sidebar_left" class="nano nano-primary affix">
    <div class="sidebar-left-content nano-content">
        <header class="sidebar-header">

            <div class="sidebar-widget author-widget hidden">
                <div class="media">
                    <a class="media-left" href="#">
                        <img src="assets/img/avatars/3.jpg" class="img-responsive">
                    </a>
                    <div class="media-body">
                        <div class="media-links">
                            <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).html">Logout</a>
                        </div>
                        <div class="media-author">Michael Richards</div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget - Search (hidden) -->
            <div class="sidebar-widget search-widget hidden">
                <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
                    <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
                </div>
            </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Left Menu -->
        <ul class="nav sidebar-menu">
            <li class="sidebar-label pt15">Exclusive Tools</li>
            <li>
                <a class="accordion-toggle" href="#">
                    <span class="fa fa-columns"></span>
                    <span class="sidebar-title">Student Panel</span><span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li>
                        <a  href="{{route('student.index')}}"><span class="fa fa-check"></span>Information</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="accordion-toggle" href="#">
                    <span class="fa fa-globe"></span>
                    <span class="sidebar-title">Teacher Panel</span><span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li>
                        <a  href="{{route('teacher.index')}}"><span class="fa fa-check"></span>Information</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="accordion-toggle" href="#">
                    <span class="fa fa-folder"></span>
                    <span class="sidebar-title">Course Panel</span><span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li>
                        <a  href="{{route('student.index')}}"><span class="fa fa-check"></span>Information</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- End: Sidebar Menu -->

        <!-- Start: Sidebar Collapse Button -->
        <div class="sidebar-toggle-mini">
            <a href="#">
                <span class="fa fa-sign-out"></span>
            </a>
        </div>
    </div>
</aside>