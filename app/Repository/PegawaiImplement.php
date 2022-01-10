<?php


namespace App\Repository;

use App\Models\Pegawai;


class PegawaiImplement implements Repository
{
    public function store($data)
    {
        $pegawai = new Pegawai();
        $data = $pegawai->create($data);
        return $data;
    }

    public function getAll()
    {
        $pegawai = Pegawai::paginate(10);
        return $pegawai;
    }
}
