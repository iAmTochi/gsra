<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\CompanyCapacity;
use App\Models\Industry;
use App\Models\Recruiter;
use App\Models\RecruiterPosition;
use App\Models\State;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }


    public function registerEmployer()
    {

        $data = [
            'industries'    => Industry::all(),
            'capacities'    => CompanyCapacity::all(),
            'positions'     => RecruiterPosition::all(),
            'states'        => State::all()
        ];
        return view('auth.register-employer', $data);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        if($request->has('employer'))
        {

            $employerData = [
                'position'  => ['required', 'string', 'max:255'],
                'phone'     => ['required', 'string', 'regex:/[0-9]{9}/', 'unique:recruiters','max:11'],
                'company_name' => ['required', 'string', 'max:255'],
                'industry'  => ['required',],
                'capacity'  => ['required',],
                'address'   => ['required',],
                'state'     => ['required',],
                'website'   => ['required',],
            ];

            $data = array_merge($this->userValidationData(), $employerData);

            $request->validate($data);

            $user = $this->userCreationData($request, $request->employer);

            Recruiter::create([
                'user_id'       => $user->id,
                'last_name'     => $request->last_name,
                'first_name'    => $request->first_name,
                'recruiter_position_id' => $request->position ,
                'company_name'          => $request->company_name,
                'industry_id'           => $request->industry,
                'company_capacity_id'   => $request->capacity,
                'notification_email'    => $user->email,
                'phone'         => $request->phone,
                'address'       => $request->address,
                'state_id'       => $request->state,
                'country_id'    => 1,
            ]);

        }


        if($request->has('applicant'))
        {
            $request->validate($this->userValidationData());

            $user = $this->userCreationData($request, $request->applicant);

            Applicant::create([
                'user_id'       => $user->id,
                'last_name'     => $request->last_name,
                'first_name'    => $request->first_name,
            ]);


        }


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    private function userValidationData(){

      return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];

    }

    private function userCreationData($request, $role){

        return User::create([
            'email'     => $request->email,
            'role'      => $role,
            'is_banned' => false,
            'password'  => Hash::make($request->password),
        ]);


    }

}
