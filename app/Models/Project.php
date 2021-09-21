<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'ip', 'host_name', 'user_name', 'password', 'ssh_code', 'bandwidth', 'cost',
      ];
}
