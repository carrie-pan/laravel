<?php
    /**
     * Created by PhpStorm.
     * User: HSIU
     * Date: 2018/5/11
     * Time: 下午 05:36
     */
    
    namespace App\Repositories;
    
    use App\Entities\CRUD;
    
    class CRUDRepository
    {
        public function create($data)
        {
            return CRUD::create($data);
        }
    }