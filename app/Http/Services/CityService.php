<?php


namespace App\Http\Services;


use App\City;
use App\Http\Repositories\CityRepo;

class CityService implements CityServiceInterface
{
    protected $cityRepo;

    public function __construct(CityRepo $cityRepo)
    {
        $this->cityRepo = $cityRepo;
    }

    public function getAll()
    {
        return $this->cityRepo->getAll();
    }

    public function create($request)
    {
        $city = new City();
        $city->name = $request->name;
        $this->cityRepo->create($city);
    }

    public function findById($id)
    {
        return $this->cityRepo->findById($id);
    }

    public function update($request, $id)
    {
        $city = $this->cityRepo->findById($id);
        $city->name = $request->name;
        $this->cityRepo->update($city,$id);
    }

    public function destroy($id)
    {
        $city = $this->cityRepo->findById($id);
        $this->cityRepo->destroy($city);
    }

    public function search($request)
    {
        $key = $request->key;
        return $this->cityRepo->search($key);
    }
}
