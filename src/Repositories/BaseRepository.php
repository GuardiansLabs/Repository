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

class BaseRepository implements RepositoryContract
{

    protected $model;
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
        if (empty($data)) {
            throw new RepositoryException("No Given Data To Insert");
        }
        $this->model->fill($data);
        return $this->model->save();
    }

    /**
     * @param $itemId
     * @throws RepositoryException
     * @return Collection
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
        if (empty($data)) {
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
     * @throws RepositoryException
     */
    public function delete($itemId)
    {
        $item = $this->model->find($itemId);
        if (!$item) {
            throw new RepositoryException("No Item Found To delete");
        }
        return $item->delete();
    }
}
