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
        $student = students::All();
        if (!empty($student)) {
			$response = [
				'message' => 'Menampilkan Data Semua Student',
				'data' => $student,
			];
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data tidak ada'
			];
			return response()->json($response, 200);
    }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = students::create($request->all());

		$response = [
			'message' => 'Data Berhasil Dibuat',
			'data' => $student,
		];

		return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = students::find($id);

		if ($student) {
			$response = [
				'message' => 'Get detail student',
				'data' => $student
			];

			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = students::find($id);

		if ($student) {
			$response = [
				'message' => 'Student is updated',
				'data' => $student->update($request->all())
			];

			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Error'
			];

			return response()->json($response, 400);
		}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = students::find($id);

		if ($student) {
			$response = [
				'message' => 'Student is delete',
				'data' => $student->delete()
			];

			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
    }
}
