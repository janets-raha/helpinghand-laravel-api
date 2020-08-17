<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
        /**
     * Table name.
     */
    protected $table = 'missions';

    /**
     * PrimaryKey.
     */
    public $primaryKey = 'id';

    /**
     * Timestamps.
     */
    public $timestamps = true;

    protected $fillable = [
        'title', 'description', 'skills', 'availability', 'date_time', 'postalcode', 'city', 'id_ngo'
    ];

}
