<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    /**
     * Name of table
    */
    protected $table = 'divisions';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',   
    ];

    /**
     * Returns the subsection to which this division belongs. 
     *
     * @return array<App/Subsection>
     */

    public function subsection()
    {
        return $this->belongsTo('App\Subsection', 'subsection_id', 'id');
    }
}
