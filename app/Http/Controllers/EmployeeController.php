<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;


class EmployeeController extends Controller
{
    public function index(Request $request)
   {
      $onEmployee = Employee::where('status', 'tetap')->count();
      $onIntern = Employee::where('status', 'magang')->count();
      $onTotal = Employee::all()->count();
      $employees = Employee::orderByRaw("FIELD (status, 'tetap', 'magang' ) ASC")->latest()->get();
      return view('employee.index',  [
         'data' => $employees,
         'onEmployee' => $onEmployee,
         'onIntern' => $onIntern,
         'onTotal' => $onTotal,
      ]);
   }

    public function delete($id)
    {
        $data = Employee::find($id);

        $data->delete();

        return redirect('employee');
    }
    public function create()
    {
        return view('employee.create');
    }

    public function detail()
    {
        return view('employee.detail');
    }

    public function edit($id)
    {
       $data = Employee::find($id);
       return view('employee.edit', [
          'data'=>$data,
       ]);
    }

    public function store(Request $request)
    {
        try {
            Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'job' => $request->job,
            'NPP' => $request->NPP,
            'status' => $request->status,
            'password' => Hash::make($request->password)
            ]);
        } catch (\Exception $e) {
            \Log::error($e);
            return "Something went wrong";
        }
        return redirect('employee');`
    }

}
