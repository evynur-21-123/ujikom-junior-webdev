<?php

namespace App\Http\Controllers;

//import model product

use App\Models\Employee;
use App\Models\Product;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\Request;

//import Http Request
use Illuminate\Http\RedirectResponse;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

class employeeController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all employee
        $employees = Employee::latest()->paginate(10);

        //render view with employee
        return view('dashboard.pegawai', compact('employees'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('employes.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        Employee::create($request->all());
        //redirect to index
        return redirect()->route('employees.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get product by ID
        $employee = employee::findOrFail($id);

        //render view with product
        return view('employes.show', compact('employee'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get product by ID
        $employee = Employee::findOrFail($id);

        //render view with product
        return view('Employes.edit', compact('employee'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $employee = Employee::findOrFail($id);

        $employee->update($request->all());

        // //redirect to index
        return redirect()->route('employees.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy ($id) {
        $employee = Employee::findOrFail($id);

        $employee->delete();

        // //redirect to index
        return redirect()->route('employees.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
