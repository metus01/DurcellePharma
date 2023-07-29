<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        /**Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();*/

        //on génère le token pour l'activation du compte des utilisateurs
        $email = $input['email'];
        $sexe = $input['sexe'];
        $number = $input['number'];
        $address = $input['address'];
        $age = $input['ages'];

        $activation_code = "";
        $length_code = 5;

        for($i = 0; $i < $length_code; $i++)
        {
            $activation_code .= mt_rand(0,9);
        }

        $activation_token = md5(uniqid()) . $email . sha1($email);

        $name = $input['firstname'] . ' ' . $input['lastname'];

       /* $emailSend = new EmailService;
        $subject = "Activate your Account";

        $emailSend->sendEmail($subject, $email, $name, true, $activation_code, $activation_token);*/


        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($input['password']),
            'sexe' => $sexe,
            'phone_number' => $number,
            'address' => $address,
            'age' => $age,
        ]);
    }
}
