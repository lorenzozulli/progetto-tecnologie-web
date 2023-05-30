<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewProductRequest;

use App\Models\Offer;

use App\Models\User;


use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;



class StaffController extends Controller
{
    //protected $role = User::where

    public function index()
    {
        return view('profiles.staff');
    }


    /* public function showData(){
    
        $user = Auth::user();
        if ($user->livello === 2){
            $staffData = User::all();
            return view('staff-data', ['user'=>$staffData]);
        }
    }

    //la variabile $request viene passata come parametro al metodo e rappresenta la richiesta fatta al server
   public function updateData(Request $request)
    {
      
        $user  = Auth::user();

        if ($user->livello === 2){
        // except rimuove il campo "username" dalla richiesta di aggiornamento e prende tutto il resto 
        $data = $request->except('username');

        $user->update($data);

        return redirect()->back()->with('staff', 'Dati staff aggiornati con successo.');}
    }*/
     
    //aggiunta promozione
    public function addPromo()
    {
        return view('profiles.management.aggiunta-offerta');
    
    }

    //aggiunta promozione
    public function storePromo(Request $request)
    {   
        $request->validate([
            'nome' => ['required', 'string'],
            'oggetto' => ['required', 'string'],
          //  'id_azienda' => ['required', 'int'],
            'modalitaFruizione' => ['required', 'string'],
            'luogoFruizione' => ['required', 'string'],
            'dataOraScadenza' => ['required', 'string'],
           
        ]);
    

        Offer::create([
            'nome' => $request->nome,
            'oggetto' => $request->oggetto,
            'id_azienda' => $request->id_azienda,
            'modalitaFruizione' => $request->modalitaFruizione,
            'luogoFruizione' => $request->luogoFruizione,
            'dataOraScadenza' => $request->dataOraScadenza,
        ]);
    
    
    
        return redirect('/')->with('success', 'Nuova offerta memorizzata con successo!');
    }

    public function store(Request $request, $id){
    
        $request->validate([ // Secondo Errore
            'nome' => ['required', 'string'],
            'oggetto' => ['required', 'string'],
            'modalitaFruizione' => ['required', 'string'],
            'luogoFruizione' => ['required', 'string'],
            'id_azienda' => ['required', 'integer'],
           


        ]);


        //$offer = Offer::where('id_azienda', $request->id_azienda)->first();

        //$offer = new Offer;

        //$offer->fill($request->validated());
        $offer = Offer::findOrFail($id);
        $offer->fill($request->validated());
        $offer->save();

        return redirect('staff')->with('success', 'Informazioni inviate con successo!');
       // dd($request);
    
       /*$offer = Offer::create(); 
        // Modifica delle informazioni dell'offerta
        if ($request->input('nome') != null) {
            $offer->nome = $request->input('nome');
        }
        if ($request->input('oggetto') != null) {
            $offer->oggetto = $request->input('oggetto');
        }
        if ($request->input('modalitaFruizione') != null) {
            $offer->modalitaFruizione = $request->input('modalitaFruizione');
        }
        if ($request->input('luogoFruizione') != null) {
            $offer->luogoFruizione = $request->input('luogoFruizione');
        }
        if ($request->input('id_azienda') != null) {
            $offer->id_azienda = $request->input('id_azienda');
        }*/        
    }

     
     

    public function deletePromo($id)
    {
        //dd($request);
        $offer = Offer::findOrFail($id);
        //dd($offer);
        $offer->delete();
       
        return redirect()->route('lista-offerte');
    }
    
    public function showOffer()
    { 

    }

}




/*da qui

<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rule;

class OfferController extends Controller
{
    //
    function getData()
    {
        return Offer::all();
    }
    function getDataDO($id)
    {
        $data = Offer::where('id', $id)->first();
        return view('dettagliOfferta', ['tuple'=>$data]);
    }

    function getDataOff()
    {
        $data = Offer::all();
        return view('gestioneOfferte', ['List'=>$data]);
    }

    public function getDataBRGO(Request $request)
    {
        $data = Offer::all();
        $query = $request->input('query');
        $dataNO = Offer::where('nome', 'LIKE', '%' .$query. '%')->get();
        return view('gestioneOfferte', ['Offerta'=>$data], ['List'=>$dataNO]);
    }

    function deleteR($id)
    {
        // Trova la riga nel database
        $row = Offer::findOrFail($id);

        // Elimina la riga
        $row->delete();

        // Esempio di reindirizzamento alla pagina principale
        return redirect()->route('gestioneOfferte')->with('message', 'Offerta eliminata con successo.');
    }
    function addOff(Request $request){

        //Controlla se i campi sono stati compilati correttamente
        $request->validate([
            'nome' => ['required','string','max:70', 'unique:offerte'],
            'dataOraScadenza' => ['required', 'after:'.Date::now()],
            'immagine' => ['required','file','mimes:jpg,jpeg,png,bin']
        ]);

        $off = new Offer();
        $root = "root";
        if ($request->input('idAzienda')=="NULL")
        {
            $azienda = Factory::first();
        } else
        {
            $nomeA = $request->input('idAzienda');
            $azienda = Factory::where('nome', $nomeA)->first();
        }
        $off['idAzienda'] = $azienda['id'];
        $off['nome'] = $request->input('nome');
        $off['oggetto'] = $request->input('oggetto');
        $off['modalitaFruizione'] = $request->input('modalitaFruizione');
        $off['dataOraScadenza'] = $request->input('dataOraScadenza');
        $off['luogoFruizione'] = $request->input('luogoFruizione');
        $img = $request->file('immagine');
        $immagine = file_get_contents($img);
        $off['immagine'] = $immagine;
        $off->save();

        return redirect()->route('gestioneOfferte');
    }

    function getNomeAziende()
    {
        $data = Factory::orderBy('id', 'asc')->get();
        return view('inserisciOfferte', ['ListaNomi'=>$data]);
    }

    function getDataSingleOff($id){
        $dataAziende = Factory::orderBy('id' , 'asc')->get();
        $data = Offer::where('id', $id)->first();
        return view('aggiornaOfferte', ['dati'=>$data], ['ListaNomi'=>$dataAziende]);
    }

    function updateDataSingleOff(Request $request, $id)
    {
        //Controlla se i campi sono stati compilati correttamente
        $request->validate([
            'nome' => ['required','string','max:70',
                Rule::unique('offerte')->ignore($id)],
            'dataOraScadenza' => ['required', 'after:'.Date::now()]
        ]);

        if (!$request->file('immagine'))
        {
            if ($request->input('idAzienda')=="NULL")
            {
                Offer::where('id', $id)->update(
                    [
                        'nome'=>$request->input('nome'),
                        'oggetto'=>$request->input('oggetto'),
                        'modalitaFruizione'=>$request->input('modalitaFruizione'),
                        'luogoFruizione'=>$request->input('luogoFruizione'),
                        'dataOraScadenza'=>$request->input('dataOraScadenza')
                    ]);
            } else {
                Offer::where('id', $id)->update(
                    [
                        'idAzienda' => $request->input('idAzienda'),
                        'nome'=>$request->input('nome'),
                        'oggetto'=>$request->input('oggetto'),
                        'modalitaFruizione'=>$request->input('modalitaFruizione'),
                        'luogoFruizione'=>$request->input('luogoFruizione'),
                        'dataOraScadenza'=>$request->input('dataOraScadenza')
                    ]);
            }
        } else
        {
            $request->validate([
                'immagine' => ['required','file','mimes:jpg,jpeg,png,bin'],
            ]);

            $img = $request->file('immagine');
            $immagine = file_get_contents($img);
            if ($request->input('idAzienda')=="NULL")
            {
                Offer::where('id', $id)->update(
                    [
                        'nome'=>$request->input('nome'),
                        'oggetto'=>$request->input('oggetto'),
                        'modalitaFruizione'=>$request->input('modalitaFruizione'),
                        'luogoFruizione'=>$request->input('luogoFruizione'),
                        'dataOraScadenza'=>$request->input('dataOraScadenza'),
                        'immagine'=>$immagine
                    ]);
            } else
            {
                Offer::where('id', $id)->update(
                    [
                        'idAzienda'=>$request->input('idAzienda'),
                        'nome'=>$request->input('nome'),
                        'oggetto'=>$request->input('oggetto'),
                        'modalitaFruizione'=>$request->input('modalitaFruizione'),
                        'luogoFruizione'=>$request->input('luogoFruizione'),
                        'dataOraScadenza'=>$request->input('dataOraScadenza'),
                        'immagine'=>$immagine
                    ]);
            }
        }
        return redirect()->route('gestioneOfferte');
    }
}*/