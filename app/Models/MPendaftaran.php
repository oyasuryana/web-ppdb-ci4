<?php

namespace App\Models;

use CodeIgniter\Model;

class MPendaftaran extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_pendaftaran';
    protected $primaryKey       = 'nisn';
    protected $useAutoIncrement = false;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['nisn','nama_lengkap','tempat_lahir','tanggal_lahir','jenis_kelamin','email','no_wa','alamat','asal_sekolah','id_jurusan'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'dibuat';
    protected $updatedField  = 'diupdate';
    protected $deletedField  = 'dihapus';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
