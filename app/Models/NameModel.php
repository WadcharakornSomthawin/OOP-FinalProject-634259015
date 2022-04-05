<?php namespace App\Models;
use CodeIgniter\Model;

class NameModel extends Model{
    protected $table = 'names';

    protected $primaryKey = 'id';

    protected $allowedFields = ['fname','lname','email','timeIn','timeOut'];
}