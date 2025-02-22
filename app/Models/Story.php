<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Story extends Model
{
    use HasFactory;

    const STATUS_DEFAULT = 0;
    const STATUS_WAITING = 1;
    const STATUS_PROCESS = 2;
    const STATUS_SUCCESS = 3;

    public $status = 
    [
        self::STATUS_DEFAULT => [
            'name' => "Default",
            'class' => 'secondary',
        ],
        self::STATUS_WAITING => [
            'name' => "Waiting",
            'class' => 'warning',
        ],
        self::STATUS_PROCESS => [
            'name' => "Process",
            'class' => 'primary',
        ],
        self::STATUS_SUCCESS => [
            'name' => "Success",
            'class' => 'success',
        ],
    ];


    public function getStatus()
    {
        return Arr::get($this->status, $this->c_status, []);
    }

    protected $table = 'stories';
    protected $guarded = [''];

}
