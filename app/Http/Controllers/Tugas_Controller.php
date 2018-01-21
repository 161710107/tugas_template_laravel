<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tugas_Controller extends Controller
{
     public function test1()
 {
 	return view ('welcomemi');
 } 
  public function test2()
 {
 	return view ('galeri');
 } 
  public function test3()
 {
 	return view ('Berita');
 } 
  public function test4()
 {
 	return view ('Data Table');
 } 
  public function test5()
 {
 	return view ('Hub');
 }   
}

