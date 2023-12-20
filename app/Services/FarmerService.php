<?php

namespace App\Services;

use App\Repositories\FarmerRepository;
use Exception;

class FarmerService
{
   protected $farmerRepository;

   public function __construct(FarmerRepository $farmerRepository)
    {
        $this->farmerRepository = $farmerRepository;
    }

    public function get() {
        $farmers = $this->farmerRepository->get();
        return $farmers;
    }

    public function find($id) {
        $farmer = $this->farmerRepository->find($id);

        if(!$farmer) {
            throw new Exception("Nenhum registro encontrado.",);
        }

        return $farmer;
    }

    public function store($inputs) {

        return $this->farmerRepository->create($inputs);
    }

    public function update($id, $inputs) {

        return $this->farmerRepository->update($id, $inputs);
    }

    public function delete($id) {

        return $this->farmerRepository->delete($id);
    }

}
