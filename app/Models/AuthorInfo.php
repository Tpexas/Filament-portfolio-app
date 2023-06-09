<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorInfo extends Model
{
    protected $fillable = ['logo', 'title', 'intro_title', 'intro', 'github', 'linkedin', 'email', 'about_body', 'author_image'];
    use HasFactory;
}
