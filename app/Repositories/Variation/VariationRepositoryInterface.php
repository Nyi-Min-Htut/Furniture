<?php 

namespace App\Repositories\Variation;

interface VariationRepositoryInterface
{
    public function getData();

    public function createOrUpdateData();

    public function deleteData();
}