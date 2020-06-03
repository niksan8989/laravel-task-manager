<?php

namespace App\Queries;

use Illuminate\Database\Eloquent\Model;

abstract class Query
{
    /**
     * @var Model|null
     */
    protected $model;

    abstract public function getModelClass(): string;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    public function findById($id): ?Model
    {
        return $this->model->find($id);
    }

    public function getById($id): ?Model
    {
        return $this->model->findOrFail($id);
    }

    public function findBy($field, $value)
    {
        return $this->model->where($field, $value)->first();
    }
}
