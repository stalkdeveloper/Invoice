<div class="side-menu">
    <div class="flex-sidemenu">
        <a class="logo" href="dashboard.html">
            <img src="{{asset('invoice/assets/image/logo.png')}}">
        </a>
        <div class="circle">
            <i class="fas fa-angle-right"></i>
            <i class="fas fa-angle-left"></i>
        </div>
    </div>
    <ul class="sidebar-list">
        <li><a href="dashboard.html" class="side-show-last">
                <img src="{{asset('invoice/assets/image/dashboard.png')}}" class="sidebar-icon"><span class="menu-txt">Dashboard</a>
        </li>
        <li><a class="side-show-last">
                <img src="{{asset('invoice/assets/image/users_icon.png')}}" class="sidebar-icon"><span class="menu-txt">Users</span>
                <img class="arrow-list" src="{{asset('invoice/assets/image/white-arrow-down.png')}}"></a>

            <div class="cstm-dropdown display-none">
                <ul class="drop-list">
                    <li class=""><a class="" href="create-user.html"><span
                                class="common-dot yellow-dot"></span>Create
                            User</a></li>
                    <li class=""><a href="active-users.html"><span class="common-dot green-dot"></span>Active
                            Users</a></li>
                    <li class=""><a href="inactive-users.html"><span class="common-dot red-dot"></span>Inactive
                            Users</a></li>
                    <li class=""><a href="changes-password.html"><span
                                class="common-dot blue-dot"></span>Changes
                            Password</a></li>
                </ul>
            </div>
        </li>
        <li><a class="side-show-last">
                <img src="{{asset('invoice/assets/image/role.png')}}" class="sidebar-icon"><span class="menu-txt">Role</span><img
                    class="arrow-list" src="{{asset('invoice/assets/image/white-arrow-down.png')}}"></a>
            <div class="cstm-dropdown display-none">
                <ul class="drop-list">
                    <li class=""><a href="create-role.html"><span class="common-dot green-dot"></span>Create
                        </a></li>
                    <li class=""><a href="role-list.html"><span class="common-dot red-dot"></span>List</a>
                    </li>
                </ul>
            </div>
        </li>
        <li><a class="side-show-last">
                <img src="{{asset('invoice/assets/image/hr.png')}}" class="sidebar-icon"><span class="menu-txt">HR Desk </span> <img
                    class="arrow-list" src="{{asset('invoice/assets/image/white-arrow-down.png')}}"></a>

            <div class="cstm-dropdown display-none">
                <ul class="drop-list">
                    <li class=""><a href="appraisals.html"><span class="common-dot yellow-dot"></span>Appraisals
                        </a></li>
                    <li class=""><a href="candidate.html"><span
                                class="common-dot see-green-dot"></span>Candidate
                        </a></li>
                    <li class=""><a href="payroll.html"><span class="common-dot brown-dot"></span>Payroll
                        </a></li>
                    <li class=""><a href="expenses.html"><span class="common-dot red-dot"></span>Expenses
                        </a></li>
                    <li class=""><a href="epf.html"><span class="common-dot dark-blue-dot"></span>
                            EPF</a></li>
                    <li class=""><a href="tds.html"><span class="common-dot light-green-dot"></span>
                            TDS</a></li>
                </ul>
            </div>
        </li>
        <li><a class="side-show-last">
                <img src="{{asset('invoice/assets/image/status.png')}}" class="sidebar-icon"><span class="menu-txt">Status</span><img
                    class="arrow-list" src="{{asset('invoice/assets/image/white-arrow-down.png')}}"></a>
            <div class="cstm-dropdown display-none">
                <ul class="drop-list">

                    <li class=""><a href="status-list.html"><span class="common-dot red-dot"></span>List</a>
                    </li>
                </ul>
            </div>
        </li>

        <li><a class="side-show-last">
                <img src="{{asset('invoice/assets/image/leave.png')}}" class="sidebar-icon"><span class="menu-txt">Leave</span><img
                    class="arrow-list" src="{{asset('invoice/assets/image/white-arrow-down.png')}}"></a>
            <div class="cstm-dropdown display-none">
                <ul class="drop-list">
                    <li class=""><a href="leave-list.html"><span class="common-dot green-dot"></span>List
                        </a></li>
                    <li class=""><a href="leave-request.html"><span class="common-dot red-dot"></span>Leave
                            Request</a></li>
                </ul>
            </div>
        </li>
        <li><a href="holiday.html" class="side-show-last">
                <img src="{{asset('invoice/assets/image/holiday.png')}}" class="sidebar-icon"><span class="menu-txt">Holiday
                    Calendar</span> </a>

        </li>
        <li><a class="side-show-last">
                <img src="{{asset('invoice/assets/image/status.png')}}" class="sidebar-icon"><span
                    class="menu-txt">Project</span><img class="arrow-list"
                    src="{{asset('invoice/assets/image/white-arrow-down.png')}}"></a>
            <div class="cstm-dropdown display-none">
                <ul class="drop-list">
                    <li class=""><a href="create-project.html"><span
                                class="common-dot green-dot"></span>Create</a>
                    </li>
                    <li class=""><a href="current-project.html"><span
                                class="common-dot red-dot"></span>Current</a></li>
                    <li class=""><a href="closed-project.html"><span class="common-dot green-dot"></span>Closed
                        </a></li>
                    <li class=""><a href="deadline-project.html"><span class="common-dot red-dot"></span>Project
                            with Deadline
                        </a></li>
                    <li class=""><a href="delayed-project.html"><span
                                class="common-dot green-dot"></span>Delayed
                            Project
                        </a></li>
                </ul>
            </div>
        </li>

        <li><a class="side-show-last">
                <img src="{{asset('invoice/assets/image/menu-announcement.png')}}" class="sidebar-icon"><span
                    class="menu-txt">Announcements</span><img class="arrow-list"
                    src="{{asset('invoice/assets/image/white-arrow-down.png')}}"></a>
            <div class="cstm-dropdown display-none">
                <ul class="drop-list">
                    <li class=""><a href="create-announcements.html"><span
                                class="common-dot green-dot"></span>Create
                        </a></li>
                    <li class=""><a href="announcements.html"><span class="common-dot red-dot"></span>List</a>
                    </li>
                </ul>
            </div>
        </li>
        <li><a href="notes.html" class="side-show-last">
                <img src="{{asset('invoice/assets/image/note.png')}}" class="sidebar-icon"><span class="menu-txt">Note</span></a>

        </li>
        </li>

        <li><a class="side-show-last">
                <img src="{{asset('invoice/assets/image/cms.png')}}" class="sidebar-icon"><span class="menu-txt">CMS</span><img
                    class="arrow-list" src="{{asset('invoice/assets/image/white-arrow-down.png')}}"></a>

            <div class="cstm-dropdown display-none">
                <ul class="drop-list">
                    <li class=""><a href="blog.html"><span class="common-dot yellow-dot"></span>Blog
                        </a></li>
                    <li class=""><a href="career-soon.html"><span class="common-dot see-green-dot"></span>Career
                        </a></li>
                    <li class=""><a href="portfolio.html"><span class="common-dot brown-dot"></span>Portfolio
                        </a></li>
                    <li class=""><a href="Contact.html"><span class="common-dot red-dot"></span>Contact
                        </a></li>
                    <li class=""><a href="candidate-queries.html"><span
                                class="common-dot dark-blue-dot"></span>Candidate Queries</a></li>

                    <li class=""><a href="sales-queries.html"><span
                                class="common-dot dark-blue-dot"></span>Sales
                            Queries</a></li>
                    <li class=""><a href="privacy-policies.html"><span
                                class="common-dot dark-blue-dot"></span>Privacy Policies</a></li>
                    <li class=""><a href="term-of-users.html"><span class="common-dot dark-blue-dot"></span>Term
                            of Users</a></li>
                    <li class=""><a href="handbook.html"><span
                                class="common-dot dark-blue-dot"></span>Handbook</a></li>
                </ul>
            </div>
        </li>
        <li><a class="side-show-last">
                <img src="{{asset('invoice/assets/image/sales.png')}}" class="sidebar-icon"><span class="menu-txt">Sales</span><img
                    class="arrow-list" src="{{asset('invoice/assets/image/white-arrow-down.png')}}"></a>
            <div class="cstm-dropdown display-none">
                <ul class="drop-list">
                    <li class=""><a href="dashboard-soon.html"><span
                                class="common-dot yellow-dot"></span>Dashboard
                        </a></li>
                    <li class=""><a href="sales-prospect.html"><span
                                class="common-dot see-green-dot"></span>Prospect</span>
                        </a></li>
                    <li class=""><a href="sales-lead.html"><span class="common-dot brown-dot"></span>Lead
                        </a></li>
                    <li class=""><a href="sales-hired.html"><span class="common-dot red-dot"></span>Hired
                        </a></li>
                    <li class=""><a href="Sales-clients.html"><span
                                class="common-dot dark-blue-dot"></span>Clients</a></li>
                    <li class=""><a href="invoice-list.html"><span
                                class="common-dot red-dot"></span>Invoices</a>
                    <li class=""><a href="create-invoice.html"><span class="common-dot green-dot"></span>Create
                            Invoice</a></li>
                </ul>
            </div>
        </li>
        <li><a class="side-show-last">
                <img src="{{asset('invoice/assets/image/reports.png')}}" class="sidebar-icon"><span
                    class="menu-txt">Reports</span><img class="arrow-list"
                    src="{{asset('invoice/assets/image/white-arrow-down.png')}}">
            </a>
            <div class="cstm-dropdown display-none">
                <ul class="drop-list">
                    <li class=""><a href="perforance-analytics.html"><span
                                class="common-dot green-dot"></span>Perforance
                            Analytics
                        </a></li>
                    <li class=""><a href="tracker.html"><span class="common-dot red-dot"></span>Tracker</a>
                    </li>
                </ul>
            </div>
        </li>


    </ul>
    <div class="Sign-out">
        <button type="button" class="signout-btn"><img src="{{asset('invoice/assets/image/sign-out.png')}}"
                class="sidebar-icon"><span class="menu-txt">Sign
                out</span></button>
    </div>
</div>