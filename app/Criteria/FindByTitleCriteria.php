<?php
/**
 * Created by PhpStorm.
 * User: leonardozaneladias
 * Date: 13/08/2018
 * Time: 12:39
 */

namespace CodePub\Criteria;


use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class FindByTitleCriteria implements CriteriaInterface
{
    private $title;

    /**
     * FindByTitle constructor.
     */
    public function __construct($title)
    {
        $this->title = $title;
    }


    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model->where("title", "LIKE", "%{$this->title}%");
    }
}