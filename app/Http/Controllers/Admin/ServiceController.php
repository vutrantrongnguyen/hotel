<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->name = $request->input('name');
        $service->price = $request->input('price');
        $service->save();
        return redirect('admin/service');
    }
    public function delete($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('admin/service');
    }
    public function save(Request $request)
    {
        $service = new Service();
        $service->name = $request->input('name');
        $service->price = $request->input('price');
        $service->save();
        return redirect('admin/service');
    }
}
