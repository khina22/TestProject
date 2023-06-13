<?php

namespace App\Models\registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;
    protected $table = 't_role_master';
    public $timestamps=false;

        // copy below field from user model
        // connection with database. below fields are the fields added in the database and fields to accept the user input
    protected $fillable = [
        'name',
        'status',
        'updated_by',
        'updated_at',
        'created_at',
        'created_by',
    ];

}
