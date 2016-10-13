<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\User;

class ApiController extends Controller
{
    public function getTest()
    {
	    $response = [
	    	'CyberClik' => [
	    		'author'	=> 'Cyber Click Team',
	    		'status' 	=> [
	    			'code'		=> 200,
	    			'deskripsi'	=> 'ok'
	    		]
	    	]
	    ];	

	    return response()->json($response, 200);
    }

    public function postTest(Request $request)
    {
	    $response = [
	    	'CyberClik' => [
	    		'query'		=> [],
	    		'status' 	=> [
	    			'code'		=> 200,
	    			'deskripsi'	=> 'ok'
	    		]
	    	]
	    ];

	    return response()->json($response, 200);
    }
}
