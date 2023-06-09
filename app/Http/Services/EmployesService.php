<?php
namespace App\Http\Services;

use App\Models\Employes;
use Illuminate\Support\Facades\DB;

class EmployesService{
    public function storeEmploye($request){
        $employes = Employes::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'age' => $request['age'],
            'address' => $request['address'] ?? '',
        ]);
        return $employes;
    }

    public function getAllEmployes(){
        $employes = Employes::all();

        return $employes;
    }
}
?>