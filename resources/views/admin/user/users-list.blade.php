@extends('layouts.admin')

@section('content')

<div class="dashboard-content">
    <div class="dashboard-tlbar d-block mb-5">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <h1 class="ft-medium">Manage Resumes</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="theme-cl">Manage Resumes</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="dashboard-widg-bar d-block">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="mb-4 tbl-lg rounded overflow-hidden">
                    <div class="table-responsive bg-white">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Location</th>
                                <th scope="col">Email Verification</th>
                                <th scope="col">Status</th>
                                <th scope="col">Posted Date</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">{{ ++$count }}</h4></div></td>
                                <td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">{{ $user->fullName() }}</h4></div></td>
                                <td><span class="ft-medium">{{ ucfirst($user->role) }}</span> </td>
                                <td>{{ $user->location()}}</td>
                                <td class="{{ isset($user->email_verified_at)?'text-success':'text-danger' }} font-weight-bold">{{ isset($user->email_verified_at)?'Verified':'Unverified' }}</td>
                                <td class="{{ $user->is_banned == 0 ?'text-success':'text-danger' }} font-weight-bold">{{ $user->is_banned == 0 ? "Active" : "Banned"}}</td>
                                <td>12 Nov 2021</td>
                                <td>
                                    <div class="dash-action">
                                        <a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
{{--                                        <a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>--}}
{{--                                        <a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>--}}
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- footer -->
    @include('partial._admin_foot')

</div>

@endsection
