<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $url = [
            array(
                'name' => 'Youtube',
                'url' => 'https://youtube.com'
            ),
            array(
                'name' => 'Google',
                'url' => 'https://google.com'
            )
        ];
        return view('home', [
            'url' => json_encode($url)
        ]);
    }

    public function returndata()
    {
        $url = [
            array(
                'name' => 'Youtube',
                'url' => 'https://youtube.com'
            ),
            array(
                'name' => 'Google',
                'url' => 'https://google.com'
            )
        ];
        return $url;
    }
    public function getchartdata()
    {
        return  [

            'labels'=> ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            'datasets'=> array([
                'label'=> 'My First dataset',
                'backgroundColor'=> 'rgb(255, 99, 132)',
                'borderColor'=> 'rgb(255, 99, 132)',
               'data'=> [mt_rand(0,50), mt_rand(0,50), mt_rand(0,50), mt_rand(0,50), mt_rand(0,50), mt_rand(0,50), mt_rand(0,50)]

            ])
        ];

    }
}
