<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //Handling http request from lumen
use App\Models\User; //My Model
use App\Traits\ApiResponser; //Standard API response
use DB; // can be use if not using eloquent, you can use DB component in lumen

use Illuminate\Http\Response;

Class UserController extends Controller {
    use ApiResponser;

    protected $primaryKey = 'userId';
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function getUsers()
    {
        // Eloquent Style
        // $users = User::all();

        // sql string as parameter
        $users = DB::connection('mysql')
        ->select("Select * from tbluser");

        return $this -> successReponse($users);
    }

    public function index(){

    }
    
    public function add(Request $request){

    }

    public function update(Request $request, $id){

    }

    public function delete($id){

    }

    public function show($id){

        }
    }