<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function statuses()
    {
        return $this->belongsToMany(Status::class, 'user_status');
    }

    public function programming_languages()
    {
        return $this->belongsToMany(ProgrammingLanguage::class, 'user_language', 'language_id', 'user_id');
    }

    public function frameworks()
    {
        return $this->belongsToMany(Framework::class, 'user_framework');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function firstOrCreateUser(object $twitter_user) : User
    {
        return $this->firstOrCreate([
            'email' => $twitter_user->email
            ],
            [
            'user_name' => $twitter_user->name,
            'email'     => $twitter_user->email,
        ]);
    }

    public function acquisitionUserListPage()
    {
        return $this->with(['statuses', 'programming_languages', 'frameworks'])->orderBy('id', 'DESC')->paginate(15);
    }

    public function acquisitionUserInformation($id)
    {
        return $this->with(['statuses', 'programming_languages', 'frameworks'])->where('users.id', $id)->orderBy('id', 'DESC')->first();
    }


    // public function RegisterUserInformation($request)
    // {
    //     DB::transaction(function () {
    //         $user = $this->create([
    //             'best_programming_language_id' => $request->input('best_programming_language_id'),
    //             'best_framework_id'            => $request->input('best_framework_id'),
    //             'user_name'                    => $request->input('user_name'),
    //             'email'                        => $request->input('email'),
    //             'password'                     => Hash::make($request->input('password')),
    //             'age'                          => $request->input('age'),
    //             'prefecture'                   => $request->input('prefecture'),
    //             'gender'                       => $request->input('gender'),
    //             // 'status'                       => $request->input('status'),
    //             // 'programming_languages'        => $request->input('programming_languages'),
    //             // 'frameworks'                   => $request->input('frameworks')
    //         ]);

    //         $user->status()->sync($request->input('status'));
    //     });
    // }
}

