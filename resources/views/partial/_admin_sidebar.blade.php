<div class="collapse" id="MobNav">
    <div class="dashboard-nav">
        <div class="dashboard-inner">
            <ul data-submenu-title="Main Navigation">
                @if(auth()->user()->isAdmin()|| auth()->user()->isEmployer())
                <li class="active"><a href="{{ route('login') }}"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
                @endif
                <li class="accordion">
                    @if(auth()->user()->isEmployer())

                        <a  data-toggle="collapse" data-target="#manage-job" aria-expanded="true" aria-controls="manage-job"><i class="lni lni-briefcase mr-2"></i>Manage Jobs</a>
                        <ul id="manage-job" class="collapse">
                            <li><a href="{{ route('jobs.index') }}"><i class="lni lni-files mr-2"></i>View All Jobs<span class="count-tag bg-warning">4</span></a></li>
                            <li><a href="{{ route('jobs.create') }}"><i class="lni lni-add-files mr-2"></i>Post New Job </a></li>
                        </ul>

                    @elseif(auth()->user()->isAdmin())

                        <a href="" data-toggle="collapse" data-target="#manage-job" aria-expanded="true" aria-controls="manage-job"><i class="lni lni-briefcase mr-2"></i>Manage Jobs</a>
                        <ul id="manage-job" class="collapse">
                            <li><a href="{{ route('manage-jobs.index') }}"><i class="lni lni-files mr-2"></i>View All Jobs<span class="count-tag bg-warning">4</span></a></li>

                        </ul>

                    @else
                </li>


                @if(isset(auth()->user()->applicant->resume) )
                    <li class="">
                        <a href="{{ route('applicant.add.edit') }}"><i class="lni lni-add-files mr-2"></i>Update Resume</a>
                    </li>
                    <li><a href="{{ route('applicant.messages') }}"><i class="lni lni-envelope mr-2"></i>Messages </a></li>
                @else

                    <li class="">
                        <a href="{{ route('applicant.add.resume') }}"><i class="lni lni-add-files mr-2"></i>Create Resume</a>
                    </li>


                @endif
                    <li>
                        <a href="{{ route('applicant.jobs') }}"><i class="lni lni-files mr-2"></i>Applied Jobs<span class="count-tag bg-warning">4</span></a>
                    </li>
                    @endif

                @if(auth()->user()->isEmployer())
                        <li><a href="{{ route('employer.messages') }}"><i class="lni lni-envelope mr-2"></i>Messages </a></li>
{{--                    <li class="accordion">--}}
{{--                        <a  data-toggle="collapse" data-target="#manage-applicant" aria-expanded="true" aria-controls="manage-applicant"><i class="lni lni-briefcase mr-2"></i>Manage Applicants</a>--}}
{{--                        <ul id="manage-applicant" class="collapse">--}}
{{--                            <li><a href="dashboard-shortlisted-resume.html"><i class="lni lni-files mr-2"></i>View All Applicants<span class="count-tag bg-warning">4</span></a></li>--}}
{{--                        </ul>--}}

{{--                    </li>--}}
{{--                    <li class="active"><a href="{{ route('applicants') }}"><i class="lni lni-briefcase mr-2"></i>Manage Applicants</a></li>--}}
                @endif

                @if(auth()->user()->isAdmin())
                <li class="accordion">
                    <a href="" data-toggle="collapse" data-target="#manage-user" aria-expanded="true" aria-controls="manage-user"><i class="lni lni-add-files mr-2"></i>Manage Users</a>
                    <ul id="manage-user" class="collapse">
                        <li><a href="{{ route('users.index') }}"><i class="lni lni-bookmark mr-2"></i>View Users<span class="count-tag bg-warning">4</span></a></li>
                        <li><a href="#"><i class="lni lni-mastercard mr-2"></i>Add New Admin</a></li>

                    </ul>

                </li>
                        <li><a href="{{ route('admin.messages') }}"><i class="lni lni-envelope mr-2"></i>Messages </a></li>

                @endif

            </ul>
            @if(auth()->user()->isAdmin())
            <ul data-submenu-title="Site Settings">
                <li class="accordion">
                    <a href="" data-toggle="collapse" data-target="#homepage" aria-expanded="true" aria-controls="homepage"><i class="lni lni-add-files mr-2"></i>Home Settings</a>
                    <ul id="homepage" class="collapse">
                        <li><a href=""><i class="lni lni-bookmark mr-2"></i>Home Page</a></li>
                        <li><a href="{{ route('testimonies.index') }}"><i class="lni lni-mastercard mr-2"></i>Testimonies</a></li>
                        <li><a href=""><i class="lni lni-user mr-2"></i>About Page</a></li>
                        <li><a href=""><i class="lni lni-lock-alt mr-2"></i>Contact Page</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="lni lni-user mr-2"></i>Seo Meta Data </a></li>

            </ul>
            @endif
            <ul data-submenu-title="My Accounts">
                <li><a href="{{ route('profile') }}"><i class="lni lni-user mr-2"></i>My Profile </a></li>
                <li><a href="{{ route('change.password') }}"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>

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
