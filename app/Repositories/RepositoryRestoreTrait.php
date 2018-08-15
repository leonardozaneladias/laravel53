<?php
/**
 * Created by PhpStorm.
 * User: leonardozaneladias
 * Date: 14/08/2018
 * Time: 23:56
 */

namespace CodePub\Repositories;


trait RepositoryRestoreTrait
{
    public function restore($id)
    {
        $this->applyScope();

        $temporarySkipPresenter = $this->skipPresenter;
        $this->skipPresenter(true);

        $model = $this->find($id);

        $this->skipPresenter($temporarySkipPresenter);
        $this->resetModel();

        $model->restore();
    }
}