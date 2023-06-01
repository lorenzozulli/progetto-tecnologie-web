<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class ModifiedCompanyController extends Controller
{
    // Modifica un'azienda già esistente
    public function updatePromo($company) {
        //dd($company);

        $azienda = Company::where('id', $company)->first();
        //dd($azienda);
        return view('profiles.management.modifica-azienda', ['id'=>$company]);
    }

    // Salva un'azienda modificata
    public function store(Request $request, $id){

        //dd($id);
        $request->validate([ 
            'nome' => ['required', 'string'],
            'descrizione' => ['required', 'string', 'max:255'],
            'ragioneSociale' => ['required', 'string'],
            'tipologia' => ['required', 'string'],
            'logo' => ['nullable', 'string'],   
        ]);

        
        
        $company = Company::where('id', $id)->first();
        //dd($company);
       // dd($request);

       if ($request->logo) {
            $logo = $request->logo;
        } else {
            $logo = 'images/loghi-aziende/non_disponibile.png';
        }
        $company->logo = $logo;
        //dd($logo);
        //dd($company->logo);
        //dd($request->logo);
        // Modifica delle informazioni dell'azienda
        if ($request->input('nome') != null) {
            $company->nome = $request->input('nome');
        }
        if ($request->input('descrizione') != null) {
            $company->descrizione = $request->input('descrizione');
        }
        if ($request->input('ragioneSociale') != null) {
            $company->ragioneSociale = $request->input('ragioneSociale');
        }
        if ($request->input('tipologia') != null) {
            $company->tipologia = $request->input('tipologia');
        }
        if ($request->input('logo')) {
            $company->logo = $logo;
        }   

        $company->save();

        return redirect('admin')->with('success', 'Informazioni modificate con successo!');
    }

     
    // Elimina un'Offerta esistente
    public function deletePromo()
    {
        
    }

}
