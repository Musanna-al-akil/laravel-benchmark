<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BenchmarkController extends Controller
{
    public function benchmarkQuery20(){
        
    }

    public function benchmarkQuery1(){
        
    }
    public function benchmarkPostData(){
        $post = new Benchmark;

        $post->name = 'random name';
        $post->first_name = 'random';
        $post->last_name = 'name';
        $post->age = 40;
        //create a json format data
        $myObj=["ping"=>'hello','big-bang', 'fdaf','dfasf', 'not for you'];

        $post->json_data= json_encode($myObj);
        $post->save();
        return Inertia::render('Benchmark/Post1');
    }
}
