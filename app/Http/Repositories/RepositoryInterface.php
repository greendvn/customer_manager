<?php


namespace App\Http\Repositories;


interface RepositoryInterface
{
    public function getAll();
    public function create($data);
    public function findById($id);
    public function update($data,$id);
    public function destroy($id);
    public function search($key);

}
