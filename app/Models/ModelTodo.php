<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTodo extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey ='id';
    protected $allowedFields =['kegiatan'];
}