<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{

    protected $table = "contactus";
    protected $primaryKey = "id";
    // protected $returnType = "";
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = ["name","email","subject","message"];
}