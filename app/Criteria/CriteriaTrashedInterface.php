<?php
/**
 * Created by PhpStorm.
 * User: leonardozaneladias
 * Date: 14/08/2018
 * Time: 21:54
 */

namespace CodePub\Criteria;


interface CriteriaTrashedInterface
{

    public function onlyTrashed();
    public function withTrashed();

}