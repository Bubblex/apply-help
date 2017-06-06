<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Help
 */
class Help extends Model
{
    use SoftDeletes;

    protected $table = 'helps';
    protected $dates = ['deleted_at'];

    public $timestamps = true;

    protected $fillable = [
        'name',
        'user_id',
        'gender',
        'id_number',
        'telephone',
        'needed',
        'needed_num',
        'summary',
        'image',
        'province',
        'street',
        'address',
        'status'
    ];

    protected $guarded = [];

    public function donates() {
        return $this->belongsToMany('App\Models\User', 'donates', 'help_id', 'user_id')->withPivot('status', 'message');
    }
}