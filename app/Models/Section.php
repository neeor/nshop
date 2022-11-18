<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * Name of table
    */
    protected $table = 'sections';


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
     * Returns the subsections belonging to this section. 
     *
     * @return array<App/Subsection>
     */
    public function subsections()
    {
        return $this->hasMany('App\Subsection', 'section_id', 'id');
    }



}
