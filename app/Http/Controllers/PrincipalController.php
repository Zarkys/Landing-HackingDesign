<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use DB;
class PrincipalController extends Controller
{
    public function getparticipants()
    {
        $result = DB::table('participants')
            ->select('*')          
            ->get();
        return \Response::json($result, 200);
    }

    public function SaveParticipants(Request $request)
    {
        $names = $request['names'];
        $email = $request['email'];
        $city = $request['city'];
        $ocupation = $request['ocupation'];
        $howknow = $request['howknow'];
        $overnight = $request['overnight'];
        $havepc = $request['havepc'];
        $levelstudies = $request['levelstudies'];
        $technologies = $request['technologies'];
        $projectinmind = $request['projectinmind'];
        $questions = $request['questions'];
      
        try {
       

            $elem = new Participant;
            $elem->names = $names;
            $elem->email = $email;
            $elem->city = $city;
            $elem->ocupation = $ocupation;
            $elem->howknow = $howknow;
            $elem->overnight = $overnight;
            $elem->havepc = $havepc;
            $elem->levelstudies = $levelstudies;
            $elem->technologies = $technologies;
            $elem->projectinmind = $projectinmind;
            $elem->questions = $questions;          
            $elem->save();
            return \Response::json('Guardado correctamente: ', 200);

        } //CATCH COMPROBACION
        catch (QueryException $e) {
            //CATCH ERROR CODE
            $errorCode = $e->errorInfo[1];
            //IF THE ERROR IS DUPLICATE ENTRY
            if ($errorCode == 1062) {
                return \Response::json("Ya existe un elemento igual", 409);
            } else {
                return \Response::json("ERROR AL OBTENER LOS DATOS", 500);
            }
        }
    }
}
