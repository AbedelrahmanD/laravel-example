<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Pixabay extends Model
{
    use HasFactory;
    public static $apiUrl="https://pixabay.com/api/?key=18178390-4af99ad03ae9e0e7b2f2ada16&safesearch=true&image_type=photo&pretty=true&per_page=10&q=";

    public static function get($search=""){
        $response=Http::get(self::$apiUrl.$search);
        return $response->json()["hits"];
    }
}
