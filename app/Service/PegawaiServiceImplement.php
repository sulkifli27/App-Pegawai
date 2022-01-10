<?php

namespace App\Service;

use App\Repository\Repository;

class PegawaiServiceImplement implements PegawaiInterfaceService
{
    protected $pegawaiRepository;

    public function __construct(Repository $pegawaiRepository)
    {
        $this->pegawaiRepository = $pegawaiRepository;
    }

    public function add($data)
    {
        $data = $this->pegawaiRepository->store($data);
        return $data;
    }

    public function get()
    {
        $data = $this->pegawaiRepository->getAll();
        return $data;
    }
}
