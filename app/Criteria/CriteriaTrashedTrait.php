<?php
/**
 * Created by PhpStorm.
 * User: leonardozaneladias
 * Date: 14/08/2018
 * Time: 21:52
 */

namespace CodePub\Criteria;


trait CriteriaTrashedTrait
{

    public function onlyTrashed(){
        $this->pushCriteria(FindOnlyTrashedCriteria::class);
        return $this;
    }

    public function withTrashed(){
        $this->pushCriteria(FindWithTrashedCriteria::class);
        return $this;
    }

}