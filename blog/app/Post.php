<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

/**
 * @method static create(array $post_form_data)
 */
class Post extends Model
{
	protected $table = "posts";
    protected $guarded = ['id'];
    protected $fillable = ['title', 'body', 'profile_id'];
    protected $primaryKey = 'id';


    public function profile()
    {

        return $this->belongsTo('App\User');

    }

}
