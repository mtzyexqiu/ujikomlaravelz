<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;


class TiketController extends Controller
{
    public function index()
    {
        $tikets = Tiket::with(['category', 'handledBy'])->get();
        return view('admin.tiket.home', compact('tikets'));
    }

    public function create()
    {
        return view('admin.tiket.create');
    }

    public function save(Request $request)
    {
        $validation = $request->validate([
            'group_name' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'details' => 'required',
            'handled_by' => 'required',
            'sender' => 'required',
        ]);
        $data = Tiket::create($validation);
        if ($data) {
            session()->flash('success', 'Report created successfully');
            return redirect()->route('admin/tikets');
        } else {
            session()->flash('error', 'Report creation failed');
            return redirect(route('admin/tikets/create'));
        }
    }

    public function edit($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('admin.tiket.update', compact('tiket'));
    }

    public function update(Request $request, $id)
    {
        $tikets = Tiket::findOrFail($id);
        $group_name = $request->group_name;
        $category_id = $request->category_id;
        $status = $request->status;
        $details = $request->details;
        $handled_by = $request->handled_by;
        $sender = $request->sender;


        $tikets->group_name = $group_name;
        $tikets->category_id = $category_id;
        $tikets->status = $status;
        $tikets->details = $details;
        $tikets->handled_by = $handled_by;
        $tikets->sender = $sender;

        $data = $tikets->save();
        if ($data) {
            session()->flash('success', 'Report updated successfully');
            return redirect(route('admin/tikets'));
        } else {
            session()->flash('error', 'Report update failed');
            return redirect(route('admin/tiket/update'));
        }
    }


    public function delete($id)
    {
        $tikets = Tiket::findOrFail($id)->delete();
        if ($tikets) {
            session()->flash('success', 'Report deleted successfully');
            return redirect(route('admin/tikets'));
        } else {
            session()->flash('error', 'Report deletion failed');
            return redirect(route('admin/tikets'));
        }
    }

    public function userDashboard()
    {
        $tikets = Tiket::all();  // Ambil data tiket dari database
        return view('dashboard', compact('tikets'));
    }

    public function search(Request $request)
{
    $query = Tiket::query();

    // Filter berdasarkan group_name
    if ($request->filled('group_name')) {
        $query->where('group_name', $request->group_name);
    }

    // Filter berdasarkan category_id
    if ($request->filled('category_id')) {
        $query->where('category_id', $request->category_id);
    }

    $tikets = $query->get();

    return view('dashboard', compact('tikets'));
}

}
