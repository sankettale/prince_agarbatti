<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    use HasFactory;
    protected $table= "banners";
    protected $fillable = ['name', 'gallery'];
    public function deleteFile()
    {
        Storage::delete($this->gallery);
    }
}
