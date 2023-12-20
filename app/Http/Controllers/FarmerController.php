<?php

namespace App\Http\Controllers;

use App\Services\FarmerService;

use Illuminate\Http\Request;

class FarmerController extends Controller
{
    protected $farmerService;

    public function __construct(FarmerService $farmerService)
    {
        $this->farmerService = $farmerService;
    }

    public function index()
    {
        $farmers = $this->farmerService->get();

        return view('features.farmers.list', ['farmers' => $farmers]);
    }

    public function create()
    {
        return view('features.farmers.form');
    }

    public function edit($id)
    {
        try {
            $farmer = $this->farmerService->find($id);
            return view('features.farmers.form', ['farmer' => $farmer]);
        } catch (\Throwable $th) {
           abort(404);
        }

    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'corporate_reason' => 'required',
                'fantasy_name' => 'required',
                'cpf_cnpj' => 'required|cpf_ou_cnpj',
                'city' => 'required',
                'state' => 'required',
                'cell_phone' => 'nullable|celular_com_ddd'
            ]);

            $this->farmerService->store($request->all());

            return redirect()->route('farmers.list')->with('msg', "Você cadastrou um agricultor com sucesso!");

        } catch (\Throwable $th) {
            //dd($th);
            return redirect()
                ->back()
                ->with('msg', "Erro na validação, verifique os dados novamente.")
                ->with('error', true)
                ->withInput($request->input())
                ->withErrors($th->validator);
        }

    }

    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'corporate_reason' => 'required',
                'fantasy_name' => 'required',
                'cpf_cnpj' => 'required|cpf_ou_cnpj',
                'city' => 'required',
                'state' => 'required',
                'cell_phone' => 'nullable|celular_com_ddd'
            ]);

            $this->farmerService->update($id, $request->all());

            return redirect()->route('farmers.list')->with('msg', "Você editou um agricultor com sucesso.");

        } catch (\Throwable $th) {
            return redirect()
                ->back()
                ->with('msg', "Erro na validação, verifique os dados novamente.")
                ->with('error', true)
                ->withInput($request->input())
                ->withErrors($th->validator);
        }
    }

    public function delete($id)
    {
        $this->farmerService->delete($id);

        return redirect()->route('farmers.list')->with('msg', "Você deletou um agricultor com sucesso.");
    }
}
