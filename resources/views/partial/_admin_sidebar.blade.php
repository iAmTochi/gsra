<div class="collapse" id="MobNav">
    <div class="dashboard-nav">
        <div class="dashboard-inner">
            <ul data-submenu-title="Main Navigation">
                <li class="active"><a href="employer-dashboard.html"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
                <li><a href="dashboard-post-job.html"><i class="lni lni-files mr-2"></i>Post New Job</a></li>
                <li><a href="dashboard-manage-jobs.html"><i class="lni lni-add-files mr-2"></i>Manage Jobs</a></li>
                <li><a href="dashboard-manage-applications.html"><i class="lni lni-briefcase mr-2"></i>Manage Applicants</a></li>
                <li><a href="dashboard-shortlisted-resume.html"><i class="lni lni-bookmark mr-2"></i>BookmarkResumes<span class="count-tag bg-warning">4</span></a></li>
                <li><a href="dashboard-packages.html"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
                <li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li>
                <li class="accordion">
                <a href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="lni lni-add-files mr-2"></i>Manage Jobs</a>
                    <ul id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <li><a href="dashboard-shortlisted-resume.html"><i class="lni lni-bookmark mr-2"></i>BookmarkResumes<span class="count-tag bg-warning">4</span></a></li>
                        <li><a href="dashboard-packages.html"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
                        <li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li>
                    </ul>

                </li>
                <li class="accordion">
                    <a href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="lni lni-add-files mr-2"></i>Manage Users</a>
                    <ul id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <li><a href="dashboard-shortlisted-resume.html"><i class="lni lni-bookmark mr-2"></i>BookmarkResumes<span class="count-tag bg-warning">4</span></a></li>
                        <li><a href="dashboard-packages.html"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
                        <li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li>
                    </ul>

                </li>


            </ul>
            <ul data-submenu-title="My Accounts">
                <li><a href="dashboard-my-profile.html"><i class="lni lni-user mr-2"></i>My Profile </a></li>
                <li><a href="dashboard-change-password.html"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
                <li><a href="javascript:void(0);"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        <i class="lni lni-power-switch mr-1"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
