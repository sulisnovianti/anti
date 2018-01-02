<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\BorrowLog;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
    	$barang = Barang::all();
        return view('welcome',compact('barang'));
    }

    public function pinjam($id)
    {
    	try {
            $barang = Barang::findOrFail($id);
            $barang->amount = $barang->amount - 1;
            $barang->save();
            BorrowLog::create([
                'users_id' => Auth::user()->id,
                'barangs_id' => $id
                ]);
            $barang->amount = $barang->amount - 1;
        } catch (ModelNotFoundException $e) {
        }

        $barang = Barang::all();

        return redirect('/');
    }

    public function kembali($id)
    {
    	try {
            $gg = BorrowLog::find($id);
            $barangs = Barang::find($gg->barangs_id);
	        $barangs->amount = $barangs->amount + 1;
	        $barangs->save();
            $gg->is_returned = 1;
            $gg->save();

        } catch (ModelNotFoundException $e) {
        }
        
        $barang = Barang::all();

        return redirect('/statistik');
    }
}
