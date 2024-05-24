<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

abstract class BaseMasterRepository extends BaseRepository implements BaseRepositoryInterFace {

    /**
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function where(array $where = []): static
    {
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
    public function updateWhere(array $where, array $attributes): bool
    {
        $this->applyCriteria();
        $this->applyScope();

        if ($where) {
            $this->applyConditions($where);
        }
        return $this->model->update($attributes);
    }

}
