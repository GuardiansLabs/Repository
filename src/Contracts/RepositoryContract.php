<?php

namespace GuardiansLabs\Repository\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface RepositoryContract
{
    /**
     * @param Model $model
     * @return object
     */
    public function setModel(Model $model);

    /**
     * @return Model
     */
    public function getModel();

    /**
     * @return Collection
     */
    public function findAll();

    /**
     * @param $itemId
     * @return Collection
     */
    public function findItemById($itemId);

    /**
     * @param array $data
     * @return Collection
     */
    public function createNew(array $data);

    /**
     * @param $itemId
     * @param array $data
     * @return mixed
     */
    public function update($itemId, array $data);

    /**
     * @param $itemId
     * @return mixed
     */
    public function delete($itemId);

    /**
     * @param array $where
     * @param array $columns
     * @return Collection
     * @internal param array $attributes
     */
    public function findWhere(array $where, $columns = ['*']);
}
