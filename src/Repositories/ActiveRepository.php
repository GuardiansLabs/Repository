<?php

namespace GuardiansLabs\Repository\Repositories;

use GuardiansLabs\Repository\Exceptions\RepositoryException;
use Illuminate\Support\Collection;

class ActiveRepository extends BaseRepository
{
    /**
     * @param array $where
     * @param array $columns
     * @internal param array $attributes
     * @return Collection
     */
    public function findWhere(array $where, $columns = ['*'])
    {
        return $this->model->where($where[0], $where[1], $where[2])->get($columns);
    }

    /**
     * @param $column
     * @param $values
     * @throws RepositoryException
     * @return Collection
     */
    public function findWhereIn($column, $values)
    {
        if (!$column) {
            throw new RepositoryException("Column Not Given");
        }
        return $this->model->whereIn($column, $values)->get();
    }
}
