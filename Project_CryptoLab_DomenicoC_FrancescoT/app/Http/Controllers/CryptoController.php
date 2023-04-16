<?php

namespace App\Http\Controllers;

use App\Models\Crypto;
use Illuminate\Http\Request;
use App\Http\Requests\CryptoRequest;


class CryptoController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
  public function index(){
    $cryptocurrencies = Crypto::all();
    return view('crypto.index' , compact('cryptocurrencies'));
  }

  public function create(){
    return view('crypto.create');
  }

  public function store(CryptoRequest $request){
    // $crypto = new Crypto();
    // $crypto->name = $request->name;
    // $crypto->description = $request->description;
    // $crypto->save();

    $crypto = Crypto::create([
      'name'=> $request->name,
      'description'=> $request->description,
       'img'=> $request->file('img')->store('public/media')
    ]);
    return redirect(route('home'))->with('SuccessMessage' , "Hai inserito con successo la Crypto!");
  }
}
