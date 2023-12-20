<?php

namespace App\Repositories;

class BaseRepository {

    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function get()
    {
        return $this->model->all();
    }

    public function create($input)
    {
        return $this->model->create($input);
    }

    public function update($id, $input)
    {
        return $this->find($id)->update($input);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function delete($id)
    {
        return $this->find($id)->delete();
    }

}
