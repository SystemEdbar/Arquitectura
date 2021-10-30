<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Cajas extends Model
{
    use LogsActivity;

    protected $table = 'cajas';
    protected $fillable = ['caja_color','caja_cantidad'];
    protected $guarded = 'id_caja';
    protected $primaryKey = 'id_caja';
    protected static $logName = 'cajas';
    protected static $logOnlyDirty = true;
    protected static $logFillable = true;
}
