<?php

/*
namespace App\Http\Controllers;

use Kreait\Firebase\Contract\Firestore;
class FirebaseController extends Controller
{
    public function index(Firestore $firestore)
    {
        $database = $firestore->database();
        $document = $database->collection('gedungh')->document('monitoring');
    
        $snapshot = $document->snapshot();
        
        if ($snapshot->exists()) {
            $data = $snapshot->data();
            return view('gedungH.gedungh', ['data' => $data]);
        } else {
            return view('gedungH.gedungh', ['error' => 'Document does not exist!']);
        }
    }
}


namespace App\Http\Controllers;

use Kreait\Firebase\Contract\Firestore;
class FirebaseController extends Controller
{
    public function index(Firestore $firestore)
    {
        $database = $firestore->database();
        $document = $database->collection('gedungh')->document('monitoring');
    
        $snapshot = $document->snapshot();
        dd($snapshot);
        if ($snapshot->exists()) {
            echo $snapshot->id() . ': ' . json_encode($snapshot->data());
        } else {
            echo 'Document does not exist!';
        }
    }
    
}*/

