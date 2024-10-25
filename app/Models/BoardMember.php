<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardMember extends Model
{
    use HasFactory;

    // Specify the table name if it differs from the plural form of the model name
    protected $table = 'board_members';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'position',
        // Add any other fields that you have in your board_members table
    ];

    // Optional: Define relationships if applicable
    // For example, if a BoardMember can have many meetings
    // public function meetings()
    // {
    //     return $this->hasMany(Meeting::class);
    // }
}
