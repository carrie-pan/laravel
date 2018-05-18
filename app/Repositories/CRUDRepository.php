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

        public function find($id)
        {
            return CRUD::find($id);
        }

        public function index()
        {
            return CRUD::get();
        }

        public function update($id, $data)
        {
            $post =  CRUD::find($id);
            if (!$post) {
                return false;
            }
            return $post->update($data);
        }
    }