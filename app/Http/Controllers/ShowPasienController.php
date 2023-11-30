<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Models\Obat;
use App\Models\Patient;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ShowPasienController extends Controller
{
    
    public function show()
{
    $client = new Client();
    $url = "http://127.0.0.1:8000/api/patient";
    $response = $client->request('GET', $url);
    $content = $response->getBody()->getContents();
    $contentArray = json_decode($content, true);
    $data = $contentArray['data'];

    // Manually create a LengthAwarePaginator instance
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $perPage = 10; // You can set the number of items per page here
    $path = LengthAwarePaginator::resolveCurrentPath();

    $dataCollection = collect($data);

    $currentPageItems = $dataCollection
        ->slice(($currentPage - 1) * $perPage, $perPage)
        ->all();

    $data = new LengthAwarePaginator(
        $currentPageItems,
        count($dataCollection),
        $perPage,
        $currentPage,
        ['path' => $path]
    );

    return view('dokter.show_pasien', ['data' => $data]);
}

    // public function show2(Request $request) {
    //     $filter = $request->input('filter');
    
    //     if ($filter == 'habis') {
    //         $data = Obat::where('jumlah', 0)->whereNull('deleted_at')->paginate(5);
    //     } elseif ($filter == 'tersedia') {
    //         $data = Obat::where('jumlah', '>', 0)->whereNull('deleted_at')->paginate(5);
    //     } else {
    //         $data = Obat::whereNull('deleted_at')->paginate(5);
    //     }
    
    //     return view('dokter.show_obat', ['data' => $data, 'filter' => $filter]);
    // }

    public function show2(Request $request)
{
    $filter = $request->input('filter');

    $client = new Client();
    $url = "http://127.0.0.1:8000/api/obat";

    if ($filter == 'habis') {
        $url .= "?filter=habis";
    } elseif ($filter == 'tersedia') {
        $url .= "?filter=tersedia";
    }

    $response = $client->request('GET', $url);
    $content = $response->getBody()->getContents();
    $contentArray = json_decode($content, true);
    $data = $contentArray['data'];

    // Manually create a LengthAwarePaginator instance
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $perPage = 10; // You can set the number of items per page here
    $path = LengthAwarePaginator::resolveCurrentPath();

    $dataCollection = collect($data);

    $currentPageItems = $dataCollection
        ->slice(($currentPage - 1) * $perPage, $perPage)
        ->all();

    $data = new LengthAwarePaginator(
        $currentPageItems,
        count($dataCollection),
        $perPage,
        $currentPage,
        ['path' => $path]
    );

    return view('dokter.show_obat', ['data' => $data, 'filter' => $filter]);
}

    
    // public function gone($id){
    //     $data = Patient::findOrFail($id);
    
    //     $data->delete();
    
    //     return redirect()->back()->with('success', 'Data Pasien berhasil dihapus.');
    // }

    

    // public function edit(Patient $patient){
    //     return view('dokter.edit_pasien', ['patient' => $patient])->with ('success', 'Data Pasien berhasil diedit');
        
    // }

    // public function update (Request $request , Patient $patient){
    //     // $patient->id = $request->id;
    //     $patient->name = $request->name;
    //     $patient->tanggal_lahir = $request->tanggal_lahir;
    //     $patient->gender = $request->gender;
    //     $patient->phone_number= $request->phone_number;
    //     $patient->address = $request->address;
    //     $patient->update();
        
    //     return redirect()->route('patients.show.dokter');

    // }

    // // public function show3(){
    // //     $medical = DB::select('CALL view_create_medical');
        
    // //     $data = Patient::all(); // mengambil semua data

    // //     return view('dokter.show_pasien', ['data' => $data, 'medical' => $medical]);
    // // }


}
