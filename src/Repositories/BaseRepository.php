<?php
/**
 * Created by PhpStorm.
 * User: mustafa
 * Date: 27/04/17
 * Time: 06:57 م
 */

namespace GuardiansLabs\Repository\Repositories;

use GuardiansLabs\Repository\Contracts\RepositoryContract;
use GuardiansLabs\Repository\Exceptions\RepositoryException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\User;

class BaseRepository implements RepositoryContract
{

    protected $model ;
    /**
     * @param Model $model
     * @return object
     */
    public function setModel(Model $model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return Collection
     */
    public function findAll()
    {
        return $this->model->get();
    }

    /**
     * @param array $data
     * @return Collection
     * @throws RepositoryException
     */
    public function createNew(array $data)
    {
        if (!$data) {
            throw new RepositoryException("No Given Data To Insert");
        }
        $this->model->fill($data);
        return $this->model->save();
    }

    /**
     * @param $itemId
     * @return Collection
     * @throws RepositoryException
     */
    public function findItemById($itemId)
    {
        $item = $this->model->find($itemId);
        if (!$item) {
            throw new RepositoryException("Item Not Found");
        }
        return $item;
    }

    /**
     * @param $itemId
     * @param array $data
     * @throws RepositoryException
     * @return mixed
     */
    public function update($itemId, array $data)
    {
        $item = $this->model->find($itemId);
        if (!$data) {
            throw new RepositoryException("No Given Data To Update");
        }
        if (!$item) {
            throw new RepositoryException("No Item Found To Update");
        }
        $item->fill($data);
        return $item->save();
    }

    /**
     * @param $itemId
     * @return mixed
     */
    public function delete($itemId)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param $where
     * @param array $attributes
     * @return Collection
     */
    public function findWhere($where, $attributes = ['*'])
    {
        // TODO: Implement findWhere() method.
    }
}