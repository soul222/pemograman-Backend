<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $students = students::all();

            if (!$students->isEmpty()) {
                $response = [
                    'message' => 'Menampilkan Data Semua Student',
                    'data' => $students,
                ];
                return response()->json($response, 200);
            } else {
                throw new \Exception('Data tidak ada');
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];
            return response()->json($response, 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $student = students::create($request->all());

            $response = [
                'message' => 'Data Berhasil Dibuat',
                'data' => $student,
            ];

            return response()->json($response, 201);
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];
            return response()->json($response, 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $student = students::find($id);

            if ($student) {
                $response = [
                    'message' => 'Get detail student',
                    'data' => $student,
                ];

                return response()->json($response, 200);
            } else {
                throw new \Exception('Data not found');
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];
            return response()->json($response, 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $student = students::find($id);

            if ($student) {
                $response = [
                    'message' => 'Student is updated',
                    'data' => $student->update($request->all()),
                ];

                return response()->json($response, 200);
            } else {
                throw new \Exception('Data not found');
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];
            return response()->json($response, 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $student = students::find($id);

            if ($student) {
                $response = [
                    'message' => 'Student is delete',
                    'data' => $student->delete(),
                ];

                return response()->json($response, 200);
            } else {
                throw new \Exception('Data not found');
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];
            return response()->json($response, 404);
        }
    }
}
