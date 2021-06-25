<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportFile extends Model
{
    use SoftDeletes;
    protected $fillable =['FileName', 'FilePath', 'DateSubmit', 'Active', 'Report_id', 'Type'];
    public function report()
    {
        return $this->belongsTo(Report::class, 'Report_id');
    }
}
