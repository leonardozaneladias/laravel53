<?php
/**
 * Created by PhpStorm.
 * User: leonardozaneladias
 * Date: 14/08/2018
 * Time: 19:32
 */

namespace CodePub\Repositories;


trait BaseRepositoryTrait
{

    public function lists($column, $key = null)
    {
        $this->applyCriteria();

        return $this->model->pluck($column, $key);
    }

}