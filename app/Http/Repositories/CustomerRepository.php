<?php


namespace App\Http\Repositories;


use App\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function getAll()
    {
        return $this->customer->paginate(5);
    }


    public function create($data)
    {
        $data->save();
    }

    public function findById($id)
    {
        return $this->customer->findOrFail($id);
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
        return $this->customer->where('name', 'LIKE', '%' . $key . '%')->orWhere('dob', 'LIKE', '%' . $key . '%')->orWhere('email', 'LIKE', '%' . $key . '%')->paginate(5);
    }
}
