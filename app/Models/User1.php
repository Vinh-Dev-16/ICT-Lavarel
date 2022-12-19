<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Post;

class User1 extends Model
{
    use HasFactory;
    protected $table = 'users1';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','address','sdt','id_post'];

    public function post (){
        return $this->hasMany(Post::class, 'id_user', 'id');
    }
}
