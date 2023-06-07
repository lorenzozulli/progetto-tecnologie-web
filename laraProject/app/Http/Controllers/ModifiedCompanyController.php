<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModifiedCompanyController extends Controller
{
    // Modifica un'azienda già esistente
    public function updatePromo($company) {
        //dd($company);

        $azienda = Company::where('id', $company)->first();
        //dd($azienda);
        return view('profiles.management.modifica-azienda', ['id'=>$azienda]);
    }

    // Salva un'azienda modificata
    public function store(Request $request, $id){
        $datiCompany = DB::table('companies')->where('id', $id)->first();

        $request->validate([ 
            'nome' => ['nullable', 'string', 'unique:companies'],
            'descrizione' => ['nullable', 'string', 'max:255'],
            'ragioneSociale' => ['nullable', 'string', 'unique:companies'],
            'tipologia' => ['nullable', 'string'],
            'logo' => ['nullable', 'string'],   
        ]);
        
        
        $company = Company::where('id', $id)->first();

       if ($request->logo) {
            $logo = $request->logo;
        } else {
            $logo = 'images/loghi-aziende/non_disponibile.png';
        }
        $company->logo = $logo;

        // Modifica delle informazioni dell'azienda
        if ($request->input('nome') != null) {
            $company->nome = $request->input('nome');
        } else {
            $company->nome = $datiCompany->nome;
        }

        if ($request->input('descrizione') != null) {
            $company->descrizione = $request->input('descrizione');
        } else {
            $company->descrizione = $datiCompany->descrizione;
        }

        if ($request->input('ragioneSociale') != null) {
            $company->ragioneSociale = $request->input('ragioneSociale');
        } else {
            $company->ragioneSociale = $datiCompany->ragioneSociale;
        }

        if ($request->input('tipologia') != null) {
            $company->tipologia = $request->input('tipologia');
        } else {
            $company->tipologia = $datiCompany->tipologia;
        }

        if ($request->input('logo')) {
            $company->logo = $logo;
        } else {
            $company->logo = $datiCompany->logo;
        }

        $company->save();

        return redirect('tabella-aziende')->with('success', 'Informazioni modificate con successo!');
    }
}
