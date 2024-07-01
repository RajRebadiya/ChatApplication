<?php

namespace App\Http\Controllers;

use App\Services\FirebaseService;
use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    protected $firebase;

    public function __construct(FirebaseService $firebase)
    {
        $this->firebase = $firebase;
    }

    public function index()
    {
        $database = $this->firebase->getDatabase();
        // Interact with the Firebase database
        $reference = $database->getReference('path/to/your/data');
        $snapshot = $reference->getSnapshot();
        $value = $snapshot->getValue();

        return response()->json($value);
    }

    public function store(Request $request)
    {
        $database = $this->firebase->getDatabase();
        $reference = $database->getReference('path/to/your/data');
        $reference->set($request->all());

        return response()->json(['status' => 'success']);
    }
}
