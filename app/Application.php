<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
        /**
     * Table name.
     */
    protected $table = 'applications';

    /**
     * PrimaryKey.
     */
    public $primaryKey = 'id';

    /**
     * Timestamps.
     */
    public $timestamps = true;

    protected $fillable = [
        'my_interest', 'my_skills', 'my_availability', 'id_mission', 'id_user'
    ];

}
