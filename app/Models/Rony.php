<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rony extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = 'rony';
//    protected $fillable = ['title', 'content', 'author', 'contact_id'];
    protected $guarded = [];



}
