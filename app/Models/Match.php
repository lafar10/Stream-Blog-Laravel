<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = "matches"; 

    protected $fillable = ['id','club_hote','club_guest','club_hote_pic','club_guest_pic','club_hote_but','club_guest_but','heure','etat','title','mic','cup','channel','url','created_at','updated_at'];
}
