<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Flight;
use Mockery\Expectation;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

use function Laravel\Prompts\error;

class ControllerApi extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new Flight();
    }
    public function createTaskBoard(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'icon' => 'required|integer|between:1,6',
                'status' => 'required|string|regex:/^s[1-6]$/',
            ]);

            $this->model->create($request->all());
            return response()->json([
                'status' => 'success',
                'message' => 'Thành công'
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage(),
            ]);
        }
    }
    public function GetData()
    {
        try {
            $data = $this->model->GetData();
            return response()->json([
                'status' => 'success',
                'message' => $data,
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage(),
            ]);
        }
    }
    public function getID(Request $request)
    {
        try {
            $validated = $request->validate([
                'id' => 'required',
            ]);
            $id = $request->id;
            $data = $this->model->getID($id);
            return response()->json([
                'status' => 'success',
                'message' => $data,
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage(),
            ]);
        }
    }
    public function Update(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required',
                'name' => 'required',
                'description' => 'required',
                'icon' => 'required|integer|between:1,3',
                'status' => 'required|string|regex:/^s[1-3]$/'
            ]);

            $this->model->Updatetask($request->id,  $request->name, $request->description, $request->icon, $request->status);

            return response()->json([
                'status' => 'success',
                'message' => 'Cập nhật thành công',
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage(),
            ]);
        }
    }
    public function Delete(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required',
            ]);
            $id = $request->id;
            $data = $this->model->DeleteTask($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Xóa thành công'
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage()
            ]);
        }
    }
}
