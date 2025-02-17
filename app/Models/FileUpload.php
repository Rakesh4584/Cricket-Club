<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{

    protected $fillable = ['file_name', 'file_path', 'is_active' ,'document_type'];
    use HasFactory;
}
