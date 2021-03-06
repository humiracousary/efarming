<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin')}}"
                        aria-expanded="false">
                        <i class="fas fa-house-user" aria-hidden="true"></i>
                        <span class="hide-menu">Home</span>
                    </a>
                </li>
               <!-- <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                        aria-expanded="false">
                        <i class="far fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">user</span>
                    </a>
                </li>-->
                
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('category.list')}}"
                        aria-expanded="false">
                        <i class="fas fa-i-cursor" aria-hidden="true"></i>
                        <span class="hide-menu">Category</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('product.list')}}"
                        aria-expanded="false">
                        <i class="fas fa-seedling" aria-hidden="true"></i>
                        <span class="hide-menu">Product</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('order')}}"
                        aria-expanded="false">
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span class="hide-menu">Order</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('event.list')}}"
                        aria-expanded="false">
                        <i class="far fa-calendar-alt" aria-hidden="true"></i>
                        <span class="hide-menu">Event</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('tutorial.list')}}"
                        aria-expanded="false">
                        <i class="fa fa-columns" aria-hidden="true"></i>
                        <span class="hide-menu">Tutorial</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('contact.list')}}"
                        aria-expanded="false">
                        <i class="fas fa-id-card" aria-hidden="true"></i>
                        <span class="hide-menu">Contact</span>
                    </a>
                </li>
               
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.logout')}}"
                        aria-expanded="false">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span class="hide-menu">Logout</span>
                    </a>
                </li>
               
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>