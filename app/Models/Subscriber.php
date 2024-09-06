<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subscribers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Upload Path
     */
    const UPLOADPATH = 'images/';

    /**
     * fields that will handle upload document
     */
    const UPLOADFIELDS = [];

    ##--------------------------------- RELATIONSHIPS


    ##--------------------------------- ATTRIBUTES


    ##--------------------------------- CUSTOM FUNCTIONS
}