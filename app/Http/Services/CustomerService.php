<?php


namespace App\Http\Services;


use App\Customer;
use App\Http\Repositories\CustomerRepositoryInterface;

class CustomerService implements CustomerServiceInterface
{
    protected $customerRepo;

    public function __construct(CustomerRepositoryInterface $customerRepo)
    {
        $this->customerRepo = $customerRepo;
    }

    public function getAll()
    {
        return $this->customerRepo->getAll();
    }

    public function create($request)
    {
        $customer= new Customer();
        $customer->name = $request->name;
        $customer->city_id = $request->city;
        $customer->dob = $request->dob;
        $customer->email = $request->email;
        $this->customerRepo->create($customer);
    }

    public function findById($id)
    {
        return $this->customerRepo->findById($id);
    }

    public function update($request, $id)
    {
        $customer = $this->customerRepo->findById($id);
        $customer->name = $request->name;
        $customer->city_id = $request->city;
        $customer->dob = $request->dob;
        $customer->email = $request->email;
        $this->customerRepo->update($customer,$id);
    }

    public function destroy($id)
    {
        $customer = $this->customerRepo->findById($id);
        $this->customerRepo->destroy($customer);
    }

    public function search($request)
    {
        $key = $request->key;
        return $this->customerRepo->search($key);
    }
}
