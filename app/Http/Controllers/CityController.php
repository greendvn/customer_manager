<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Http\Services\CityService;
use App\Http\Services\CityServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CityController extends Controller
{
    protected $cityService;

    public function __construct(CityServiceInterface $cityService)
    {
        $this->cityService = $cityService;
    }

    public function index()
    {
        $cities = $this->cityService->getAll();
        return view('modules.city.index', compact('cities'));
    }

    public function create()
    {
        return view('modules.city.create');
    }

    public function store(CityRequest $request)
    {
        $this->cityService->create($request);
        Session::flash('succes', 'Thêm mới thành công');
        return redirect()->route('cities.index');
    }

    public function edit($id)
    {
        $city = $this->cityService->findById($id);
        return view('modules.city.edit',compact('city'));
    }

    public function update(CityRequest $request, $id)
    {
        $this->cityService->update($request,$id);
        Session::flash('succes', 'edit thành công');
        return redirect()->route('cities.index');
    }

    public function delete($id){
        $this->cityService->destroy($id);
        Session::flash('succes', 'delete thành công');
        return redirect()->route('cities.index');
    }

    public function search(Request $request){
        $cities = $this->cityService->search($request);
        return view('modules.city.index', compact('cities'));
    }
}
