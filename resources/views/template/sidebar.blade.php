<!--**********************************
    Sidebar start
***********************************-->
    <div class="dlabnav">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">
                <li><a href="{{ url('/') }}" class="" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                </li>

                {{-- <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="index.html">Dashboard Light</a></li>
                        <li><a href="index-2.html">Dashboard Dark</a></li>
                        <li><a href="project-page.html">Project</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="kanban.html">Kanban</a></li>
                        <li><a href="calendar-page.html">Calendar</a></li>
                        <li><a href="message.html">Messages</a></li>
                    </ul>
                </li> --}}

                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-briefcase"></i>
                        <span class="nav-text">Projects</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ url('/all-projects') }}">All Project</a></li>
                        <li><a href="{{ url('/initiatives') }}">Project Initiatives</a></li>
                        <li><a href="{{ url('/assignment') }}">Project Assignment</a></li>
                        <li><a href="{{ url('/project-planning') }}">Project Planning</a></li>
                        <li><a href="{{ url('/project-execution') }}">Project Execution</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        <span class="nav-text">Users Manage</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">All User</a></li>
                        <li><a href="#">User Profile</a></li>
                        <li><a href="#">Performance User</a></li>
                    </ul>
                </li>

                <li><a href="{{ url('/timeline') }}" class="" aria-expanded="false">
                    <i class="fas fa-calendar"></i>
                    <span class="nav-text">Timeline</span>
                </a>
                </li>

                <li><a href="{{ url('/information') }}" class="" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    <span class="nav-text">Information</span>
                </a>
                </li>

                {{-- <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                        <span class="nav-text">Apps</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">Profile</a></li>
                        <li><a href="post-details.html">Post Details</a></li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                            <ul aria-expanded="false">
                                <li><a href="email-compose.html">Compose</a></li>
                                <li><a href="email-inbox.html">Inbox</a></li>
                                <li><a href="email-read.html">Read</a></li>
                            </ul>
                        </li>
                        <li><a href="app-calender.html">Calendar</a></li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                            <ul aria-expanded="false">
                                <li><a href="ecom-product-grid.html">Product Grid</a></li>
                                <li><a href="ecom-product-list.html">Product List</a></li>
                                <li><a href="ecom-product-detail.html">Product Details</a></li>
                                <li><a href="ecom-product-order.html">Order</a></li>
                                <li><a href="ecom-checkout.html">Checkout</a></li>
                                <li><a href="ecom-invoice.html">Invoice</a></li>
                                <li><a href="ecom-customers.html">Customers</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-chart-line"></i>
                        <span class="nav-text">Charts</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="chart-flot.html">Flot</a></li>
                        <li><a href="chart-morris.html">Morris</a></li>
                        <li><a href="chart-chartjs.html">Chartjs</a></li>
                        <li><a href="chart-chartist.html">Chartist</a></li>
                        <li><a href="chart-sparkline.html">Sparkline</a></li>
                        <li><a href="chart-peity.html">Peity</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fab fa-bootstrap"></i>
                        <span class="nav-text">Bootstrap</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="ui-accordion.html">Accordion</a></li>
                        <li><a href="ui-alert.html">Alert</a></li>
                        <li><a href="ui-badge.html">Badge</a></li>
                        <li><a href="ui-button.html">Button</a></li>
                        <li><a href="ui-modal.html">Modal</a></li>
                        <li><a href="ui-button-group.html">Button Group</a></li>
                        <li><a href="ui-list-group.html">List Group</a></li>
                        <li><a href="ui-card.html">Cards</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-dropdown.html">Dropdown</a></li>
                        <li><a href="ui-popover.html">Popover</a></li>
                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                        <li><a href="ui-tab.html">Tab</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-pagination.html">Pagination</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>

                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-heart"></i>
                        <span class="nav-text">Plugins</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="uc-select2.html">Select 2</a></li>
                        <li><a href="uc-nestable.html">Nestedable</a></li>
                        <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                        <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                        <li><a href="uc-toastr.html">Toastr</a></li>
                        <li><a href="map-jqvmap.html">Jqv Map</a></li>
                        <li><a href="uc-lightgallery.html">Light Gallery</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-file-alt"></i>
                        <span class="nav-text">Forms</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="form-element.html">Form Elements</a></li>
                        <li><a href="form-wizard.html">Wizard</a></li>
                        <li><a href="form-ckeditor.html">CkEditor</a></li>
                        <li><a href="form-pickers.html">Pickers</a></li>
                        <li><a href="form-validation.html">Form Validate</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-table"></i>
                        <span class="nav-text">Table</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                        <li><a href="table-datatable-basic.html">Datatable</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-clone"></i>
                        <span class="nav-text">Pages</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="page-login.html">Login</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                            <ul aria-expanded="false">
                                <li><a href="page-error-400.html">Error 400</a></li>
                                <li><a href="page-error-403.html">Error 403</a></li>
                                <li><a href="page-error-404.html">Error 404</a></li>
                                <li><a href="page-error-500.html">Error 500</a></li>
                                <li><a href="page-error-503.html">Error 503</a></li>
                            </ul>
                        </li>
                        <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        <li><a href="empty-page.html">Empty Page</a></li>
                    </ul>
                </li> --}}
            </ul>

            <div class="copyright">
                <p><strong>Alimo Creative & Tech</strong>
                    © <script>
                        document.write(new Date().getFullYear())
                    </script> All Rights Reserved</p>
                <p class="fs-12">Author by : Ahmad Zulkifli</p>
            </div>
        </div>
    </div>

<!--**********************************
    Sidebar end
***********************************-->