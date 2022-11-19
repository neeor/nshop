<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsection extends Model
{
    use HasFactory;

    /**
     * Name of table
    */
    protected $table = 'subsections';


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
     * Returns the section to which this subsection belongs. 
     *
     * @return array<App/Section>
     */

    public function section()
    {
        return $this->belongsTo('App\Section', 'section_id', 'id');
    }

    /**
     * Returns the articles belonging to this subsection. 
     *
     * @return array<App/Article>
     */
    public function articles()
    {
        return $this->hasMany('App\Article', 'subsection_id', 'id');
    }

    /**
     * Returns the divisions belonging to this subsection. 
     *
     * @return array<App/Division>
     */
    public function divisions()
    {
        return $this->hasMany('App\Division', 'division_id', 'id');
    }
}
