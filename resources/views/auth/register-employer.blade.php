@extends('layouts.auth')

@section('content')
    <!-- ======================= Login Detail ======================== -->
    <div class="container-fluid">
        <div class="col-12 text-center mt-3 mb-5 p-2">
            <a class="nav-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="logo"/>
            </a>
        </div>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <!--=====================================
            Company's representative
         ===================================== -->
            <div class="mx-3 mt-5 border rounded-top">

                <div class="row py-4">
                    <div class="col-md-4">
                        <div class="container text-danger">
                            <h2 class="text-danger">Company Representative</h2>
                            <div class="text-gray-500">This is information pertaining to you as a representative of the
                                company.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="container">
                            <div class="row align-items-start justify-content-center">

                                <div class=" col-md-12 mfliud">

                                    <div class="border p-3 rounded">
                                        <input type="hidden" name="employer" value="employer">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>First Name *</label>
                                                <input type="text" name="first_name" value="{{ old('first_name') }}"
                                                       class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                                       placeholder="First Name">
                                                <span role="alert" class="invalid-feedback">
                                                        <strong>{{$errors->first('first_name')}}</strong>
                                                </span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Last Name</label>
                                                <input type="text" name="last_name" value="{{ old('last_name') }}"
                                                       class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                                       placeholder="Last Name">
                                                <span role="alert" class="invalid-feedback">
                                                        <strong>{{$errors->first('last_name')}}</strong>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Work Email *</label>
                                                <input type="text" name="email" value="{{ old('email') }}"
                                                       class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                       placeholder="Work Email*">
                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('email')}}</strong>
                                            </span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Position in Company/Family</label>
                                                <select name="position" id=""
                                                        class="form-control {{ $errors->has('position') ? ' is-invalid' : '' }}">
                                                    <option value="">Select your position the company</option>
                                                    @foreach($positions as $position)
                                                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                                                    @endforeach


                                                </select>
                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('position')}}</strong>
                                            </span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Password *</label>
                                                <input type="password" name="password" value="{{ old('password') }}"
                                                       class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                       placeholder="Password*">
                                                <span role="alert" class="invalid-feedback">
                                                        <strong>{{$errors->first('password')}}</strong>
                                                </span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Confirm Password *</label>
                                                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" placeholder="Confirm Password*">
                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('password_confirmation')}}</strong>
                                                 </span>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Country Code</label>
                                                <select name="country_code"
                                                        class="form-control {{ $errors->has('country_code') ? ' is-invalid' : '' }}"
                                                        id="">
                                                    <option value="+234" selected>Nigeria(+234)</option>
                                                </select>
                                                <span role="alert" class="invalid-feedback">
                                                        <strong>{{$errors->first('country_code')}}</strong>
                                                </span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Phone *</label>
                                                <input type="tel" name="phone" value="{{ old('phone') }}"
                                                       class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                       placeholder="E.g.  07039292227">
                                                <span role="alert" class="invalid-feedback">
                                                        <strong>{{$errors->first('phone')}}</strong>
                                                </span>
                                            </div>


                                        </div>

                                        <div class="form-group">
                                            <h5 class="extra">Already have an account?<a href="{{ route('login') }}"
                                                                                         class="text-danger font-weight-bold">
                                                    Login</a></h5>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--=====================================
            Company's Information
           ===================================== -->
            <div class="mx-3 mt-5 border rounded-top">
                <div class="row py-4">
                    <div class="col-md-4">
                        <div class="container text-danger">
                            <h2 class="text-danger">Company Information</h2>
                            <div class="text-gray-500">This information pertains to your company.</div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="container">
                            <div class="row align-items-start justify-content-center">

                                <div class=" col-md-12 mfliud">

                                    <div class="border p-3 rounded">

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Company's/Family Name *</label>
                                                <input type="text" name="company_name" value="{{ old('company_name') }}"
                                                       class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}"
                                                       placeholder="Company's/Family Name">
                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('company_name')}}</strong>
                                            </span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Industry</label>
                                                <select name="industry" id=""
                                                        class="form-control {{ $errors->has('industry') ? ' is-invalid' : '' }}">
                                                    <option value="">Choose your company industry</option>
                                                    @foreach($industries as $industry)
                                                        <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                                                    @endforeach
                                                </select>

                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('industry')}}</strong>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Number of Employee</label>
                                                <select name="capacity" id=""
                                                        class="form-control {{ $errors->has('capacity') ? ' is-invalid' : '' }}">
                                                    <option value="">Select number of employee</option>
                                                    @foreach($capacities as $capacity)
                                                        <option value="{{ $capacity->id }}">{{ $capacity->capacity}}</option>
                                                    @endforeach
                                                </select>
                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('capacity')}}</strong>
                                            </span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Website (Optional)</label>
                                                <input type="text" name="website" value="{{ old('website') }}"
                                                       class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}"
                                                       placeholder="Website">
                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('website')}}</strong>
                                            </span>
                                            </div>
                                        </div>
                                        <hr class="px-0 mx-0">

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label>Address *</label>
                                                <textarea name="address" id="" cols="30" rows="10"
                                                          class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}">{{ old('address') }}</textarea>
                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('address')}}</strong>
                                                </span>
                                            </div>


                                        </div>
                                        <div class="row">


                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>State </label>
                                                <select name="state" id=""
                                                        class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}">
                                                    <option value="">Select a state</option>
                                                    @foreach($states as $state)
                                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('state')}}</strong>
                                            </span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Where did you hear about us</label>
                                                <select name="referrals" id="" class="form-control {{ $errors->has('referrals') ? ' is-invalid' : '' }}">
                                                    <option value="website">Website</option>
                                                    <option value="Online Search">Online Search</option>
                                                    <option value="Online Adverts">Online Adverts</option>
                                                    <option value="Online Articles">Online Articles</option>
                                                    <option value="Social Media (Linkedin,Twitter etc)">Social Media (Linkedin,Twitter etc)</option>
                                                    <option value="Email Marketing">Email Marketing</option>
                                                    <option value="Billboards">Billboards</option>
                                                    <option value="Radio">Radio</option>
                                                    <option value="TV">TV</option>
                                                    <option value="Newspaper">Newspaper</option>
                                                    <option value="Magazines">Magazines</option>
                                                    <option value="Direct Mail">Direct Mail</option>
                                                    <option value="Referral">Referral</option>
                                                    <option value="Event">Event</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('referrals')}}</strong>
                                            </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p>By registering your details, you agree with our <span
                                                        class="font-weight-bold text-danger">Terms & Conditions, and
                                            Privacy and Cookie Policy.</span></p>
                                        </div>

                                        {{--                                    <div class="form-group">--}}
                                        {{--                                        <div class="d-flex align-items-center justify-content-between">--}}
                                        {{--                                            <div class="flex-1">--}}
                                        {{--                                                <input id="ddd" class="checkbox-custom" name="ddd" type="checkbox">--}}
                                        {{--                                                <label for="ddd" class="checkbox-custom-label">Sign me up for the--}}
                                        {{--                                                    Newsletter!</label>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        <div class="form-group">
                                            <button type="submit"
                                                    class="btn btn-md full-width theme-bg text-light fs-md ft-medium">
                                                Create
                                                An Account
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>

    <!-- ======================= Login End ======================== -->

@endsection
