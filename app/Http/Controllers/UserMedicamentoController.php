<?php

namespace App\Http\Controllers;

use App\Models\UserMedicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class UserMedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(UserMedicamento::all());
        $dados = DB::table('user_medicamentos')
                    ->join('users','user_medicamentos.id_usuario','=','users.id')
                    ->select('user_medicamentos.*','users.name as nome_usuario')
                    ->paginate(10);
                    // ->get();
        return view('admin.usersMedicamentos.index', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserMedicamento $userMedicamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserMedicamento $userMedicamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserMedicamento $userMedicamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserMedicamento $userMedicamento)
    {
        //
    }
}
