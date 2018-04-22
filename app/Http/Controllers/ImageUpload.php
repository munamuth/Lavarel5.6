<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class ImageUpload extends Controller
{
    public static function Save($image)
    {
    	return Storage::putFile('photos', new \Illuminate\Http\File($image));    	
    }
}
