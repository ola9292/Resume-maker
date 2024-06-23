<?php

namespace App\Http\Controllers;
use Spatie\Browsershot\Browsershot;

use Illuminate\Http\Request;

class ResumeDownloadController extends Controller
{
   public function __invoke(){
        Browsershot::html('<h1>Hello world!!</h1>')->save('example.pdf');
   }
}
