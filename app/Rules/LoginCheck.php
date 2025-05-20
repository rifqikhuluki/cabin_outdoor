<?php

namespace App\Rules;

use App\Models\admins;
use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Hash;


class LoginCheck implements ValidationRule
{

    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $email = $this->request->input('email');
        $passwordInput = $this->request->input('password');
        $loginStatus = FALSE;

        $emailAdminCheck = admins::Where('email', $email)->count();
        if($emailAdminCheck > 0){
            $adminPassworDatabase = admins::where('email', $email)->value('password');
            if(Hash::check($passwordInput, $adminPassworDatabase)){
                $loginStatus = TRUE;
            }
        }

        if ($loginStatus) {
            $adminData = admins::where('email', $email)->first();
            Session::put('loginStatus', true);
            Session::put('adminData', $adminData);
        }else{
            $fail('email atau password ada yang salah');
        }
    }
}