<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use App\Models\Corp;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use RealRashid\SweetAlert\Facades\Alert;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            // 'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'g-recaptcha-response' => 'required|captcha'
        ])->validate();

        // memberi pesan sukses
        Alert::success('Selamat', 'Register Berhasil');




        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'utype' => $input['utype'],
            ]), function (User $user) {
                $this->createTeam($user);

                if($user->utype === "CPY"){
                    $this->createCorp($user);
                    Alert::success('Selamat', 'Register Berhasil');

                }
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }

    protected function createCorp(User $user)
    {
        $user->ownedTeams()->save(Corp::forceCreate([
            'user_id' => $user->id,
            'nama_corp' => explode(' ', $user->name, 2)[0],
        ]));
    }

}