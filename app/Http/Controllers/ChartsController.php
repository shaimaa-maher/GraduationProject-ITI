<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChartsController extends Controller
{
  public function index()
  {
    $data = DB::table('users')
      ->select(
        DB::raw('gender as gender'),
        DB::raw('count(*) as number')
      )
      ->groupBy('gender')
      ->get();
    $genderArray[] = ['Gender', 'Number'];
    foreach ($data as $key => $value) {
      $genderArray[++$key] = [$value->gender, $value->number];
    }

    ////////////
    //country
    ///////////////
    $countryData = DB::table('users')
      ->select(
        DB::raw('country as country'),
        DB::raw('count(*) as number')
      )
      ->groupBy('country')
      ->get();
    $countryArray[] = ['country', 'Number'];
    foreach ($countryData as $key => $value) {
      $countryArray[++$key] = [$value->country, $value->number];
    }

    return view('admin.charts')->with('gender', json_encode($genderArray))
      ->with('country', json_encode($countryArray));
  }
}
