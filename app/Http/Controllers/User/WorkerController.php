<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;
use App\Models\Worker;


class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workers = Worker::where('situation', '<>', '3')->paginate(4);

        return view('user.workers.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.workers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:2'],
            'affiliation' => ['required', 'string', 'max:50'],
            'phone_num' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],

        ]);

        $worker = new Worker();
        $worker->name = $request->name;
        $worker->affiliation = $request->affiliation;
        $worker->phone_num = $request->phone_num;
        $worker->email = $request->email;
        $worker->save();
        return redirect()->route('user.worker.index')->with(['message' => '作業者登録を実施しました', 'status' => 'info']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $worker = Worker::find($id);

        return view('user.workers.show', compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {

        $worker = Worker::findOrFail($id);

        return view('user.workers.edit', compact('worker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:2'],
            'affiliation' => ['required', 'string', 'max:50'],
            'phone_num' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],

        ]);
        $worker = Worker::findOrFail($id);
        $worker->name = $request->name;
        $worker->affiliation = $request->affiliation;
        $worker->phone_num = $request->phone_num;
        $worker->email = $request->email;
        // dd($request->situation);
        $worker->situation = $request->situation;
        $worker->save();
        return redirect()->route('user.worker.show', compact('worker'))->with(['message' => '作業者変更を実施しました', 'status' => 'info']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Worker::findOrFail($id)->delete(); //ソフトデリート
        return redirect()->route('user.worker.index')->with(['message' => '作業者削除を実施しました', 'status' => 'alert']);;
    }
}
