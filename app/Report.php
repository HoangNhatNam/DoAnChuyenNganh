<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;
    protected $fillable =['ReportTitle', 'Summarize', 'DateSubmit', 'Active', 'User_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'User_id');
    }
}
