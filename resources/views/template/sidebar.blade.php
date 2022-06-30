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

                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-briefcase"></i>
                        <span class="nav-text">Projects</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ url('/all-projects') }}">All Project</a></li>
                        <li><a href="{{ url('/initiatives') }}">Project Initiatives</a></li>
                        @if(Auth::user()->role==1)
                            <li><a href="{{ url('/assignment') }}">Project Assignment</a></li>
                            <li><a href="{{ url('/planning') }}">Project Planning</a></li>
                        @endif
                        <li><a href="{{ url('/project-execution') }}">Project Execution</a></li>
                    </ul>
                </li>

                @if(Auth::user()->role==1)
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-users"></i>
                            <span class="nav-text">Users Manage</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">All User</a></li>
                            <li><a href="#">Log Activity</a></li>
                            {{-- <li><a href="#">Performance User</a></li> --}}
                        </ul>
                    </li>
                @endif

                <li><a href="{{ url('/project-timeline') }}" class="" aria-expanded="false">
                    <i class="fas fa-calendar"></i>
                    <span class="nav-text">Timeline</span>
                </a>
                </li>

                <li><a href="{{ url('/information') }}" class="" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    <span class="nav-text">Information</span>
                </a>
                </li>

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
