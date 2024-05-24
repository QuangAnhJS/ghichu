<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Flight extends Model
{
    use HasFactory;
    protected $table = 'ghichu';
    protected $fillable = ['name', 'description', 'icon', 'status'];
    public function create($data)
    {
        $this->fill($data);
        $this->save();
    }
    public function GetData()
    {
        return self::all();
    }
    public function getID($id)
    {
        return self::where('id', $id)->first();
    }
    public function DeleteTask($id)
    {
        return self::where('id', $id)->delete();
    }
    public function Updatetask($id, $name, $description, $icon, $status)
    {
        return self::where('id', $id)->update(['name' => $name, 'description' => $description, 'icon' => $icon, 'status' => $status]);
    }
}
