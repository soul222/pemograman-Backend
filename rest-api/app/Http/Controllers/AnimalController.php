<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = [
        ["name" => "panda"],
        ["name" => "nyamuk"],
        ["name" => "ayam"]
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        foreach ($this->animals as $animal) {
            echo "Nama Hewan : $animal[name]" . PHP_EOL;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        array_push($this->animals, $request);
        $this->index();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->animals[$id] = $request;
        $this->index();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        unset($this->animals[$id]);
        $this->index();
    }
}
