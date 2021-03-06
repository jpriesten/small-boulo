<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'userId';

    protected $fillable = [
        'firstName', 'lastName', 'userType', 'email', 'password', 'country', 'city', 'tel', 'gender', 'birthday'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function publish(Post $post){

        $this->posts()->save($post);
        
        // Post::create([

    	// 	'userSkill' => request('userSkill'),
        //     'jobLocation' => request('jobLocation'),
		// 	'toDo' => request('toDo'),
		// 	'deadline' => request('deadline'),
		// 	'experience' => request('experience'),
		// 	'start' => request('start'),
		// 	'priceRange' => request('priceRange'),
		// 	'noOfWorkers' => request('noOfWorkers'),
		// 	'userId' => auth()->user()->userId

    	// ]);
    }
}
