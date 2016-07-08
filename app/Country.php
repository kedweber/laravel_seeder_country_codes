<?php
/**
 * CountryCodes  - WeberStudio.net
 *
 * @author      KedWeber <black001goat@gmail.com>
 * @link        http://kedweber.github.io/
 * @copyright   Copyright (c) 2016, KedWeber
 * @license     Creative Commons
 *
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * @package App
 */
class Country extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'code3', 'codeNumeric', 'postCode', 'active', 'label_nl', 'label_en', 'label_es', 'label_fr', 'domain'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}