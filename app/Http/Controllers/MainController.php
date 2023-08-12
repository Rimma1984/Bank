<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public function index() {
      $services=Service::all();
      return view('main', [
         "services"=>$services
      ]);
   }

   public function form(Request $request) {
      $valid = $request->validate([
         "iin"=> "required|digits:12",
         "email"=>"required|email",
         "category"=>"required|exists:services,id",
         "date"=>"required|date_format:Y-m-d",
         "time"=>"required|date_format:H:i",
      ]);

      return view('alert', [
         'date'=>$request->date,
         'time'=>$request->time,
      ]);
   }
}
