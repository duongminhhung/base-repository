<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class BaseCustomRepository extends BaseRepository {

    public function model()
    {

    }

    /**
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function where(array $where = []){
        $this->applyCriteria();
        $this->applyScope();

        if ($where) {
            $this->applyConditions($where);
        }
        return $this;
    }

    /**
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function updateWhere(array $where, array $attributes){
        $this->applyCriteria();
        $this->applyScope();

        if ($where) {
            $this->applyConditions($where);
        }
        return $this->model->update($attributes);
    }

}
