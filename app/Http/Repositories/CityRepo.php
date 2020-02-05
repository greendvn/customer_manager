<?php


namespace App\Http\Repositories;


use App\City;

class CityRepo implements CityRepoInterface
{
    protected $city;

    public function __construct(City $city)
    {
        $this->city = $city;
    }

    public function getAll()
    {
        return $this->city->all();
    }

    public function create($data)
    {
        $data->save();
    }

    public function findById($id)
    {
        return $this->city->findOrFail($id);
    }

    public function update($data, $id)
    {
        $data->save();
    }

    public function destroy($data)
    {
        $data->delete();
    }

    public function search($key)
    {
        return $this->city->where('name','LIKE','%'.$key.'%')->get();
    }
}
