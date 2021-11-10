<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string' ,'max:10','min:10' , 'unique:users'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ],[
            "name.required"=>"Họ tên không được bỏ trống",
            "phone.required"=>"Số điện thoại không được bỏ trống",
            "phone.max"=>"Số điện thoại không vượt quá 10 ký tự",
            "phone.min"=>"Số điện thoại không ít hơn 10 ký tự",

            "phone.unique"=>"Số điện thoại đã tồn tại",

            // "email.required"=>"Email không được bỏ trống",
            // "email.unique"=>"Email đã tồn tại",

            "password.required"=>"Mật khẩu không được bỏ trống",
            "password.min"=> "Mật khẩu không ít hơn 8 ký tự",
            "password.confirmed"=> "Mật khẩu không khớp",
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'phone' => $input['phone'],
            // 'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
