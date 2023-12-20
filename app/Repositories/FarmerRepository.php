<?php

namespace App\Repositories;

use App\Models\Farmer;
use App\Repositories\BaseRepository;

class FarmerRepository extends BaseRepository
{

    public function __construct(Farmer $farmer)
    {
        parent::__construct($farmer);
    }
}
