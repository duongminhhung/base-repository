<?php
namespace App\Repositories;

/**
 * Interface RepositoryInterface
 * @package Prettus\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 */
interface BaseRepositoryInterFace
{

    public function where(array $where = []);
    public function updateWhere(array $where, array $attributes);
}
