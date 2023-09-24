<?php

namespace App\Http\Controllers;

use App\Models\WorkOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WoController extends Controller
{
    public function index()
    {
        $studentList = "tes";
        $workOrders = WorkOrder::with('kategoriOA', 'segmen')->get();
        return view('wo.index', compact('workOrders'));
    }
    public function create()
    {
        $pageTitle = "tes";
        $kategorys = DB::select('select * from kategorys');
        $segmens = DB::select('select * from segmens');
        return view('wo.create', compact('pageTitle', 'kategorys', 'segmens'));
    }
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan oleh formulir
        $request->validate([
            'no_wo' => 'required',
            'alamat' => 'required',
            'kategori_oa' => 'required',
            'nama_pic' => 'required',
            'telp_pic' => 'required',
            'layanan_mbps' => 'required',
            'segmen' => 'required',
            'sid' => 'required',
            'snont' => 'required',
            'lan' => 'required',
            'ip' => 'required',
            'gw' => 'required',
            'sm' => 'required',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data Work Order ke dalam database
        // Simpan data Work Order ke dalam database
        WorkOrder::create([
            'no_wo' => $request->input('no_wo'),
            'alamat' => $request->input('alamat'),
            'kategori_oa' => $request->input('kategori_oa'),
            'nama_pic' => $request->input('nama_pic'),
            'telp_pic' => $request->input('telp_pic'),
            'layanan_mbps' => $request->input('layanan_mbps'),
            'segmen' => $request->input('segmen'),
            'sid' => $request->input('sid'),
            'snont' => $request->input('snont'),
            'lan' => $request->input('lan'),
            'ip' => $request->input('ip'),
            'gw' => $request->input('gw'),
            'sm' => $request->input('sm'),
            // tambahkan kolom lainnya sesuai kebutuhan
        ]);

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect()->route('wo.index');
    }
    public function edit($id)
{
    $workorder = WorkOrder::find($id);
    $kategorys = DB::select('select * from kategorys');
    $segmens = DB::select('select * from segmens');

    return view('wo.edit', compact('workorder','kategorys','segmens'));
}
public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan oleh formulir
        $request->validate([
            'no_wo' => 'required',
            'alamat' => 'required',
            'kategori_oa' => 'required',
            'nama_pic' => 'required',
            'telp_pic' => 'required',
            'layanan_mbps' => 'required',
            'segmen' => 'required',
            'sid' => 'required',
            'snont' => 'required',
            'lan' => 'required',
            'ip' => 'required',
            'gw' => 'required',
            'sm' => 'required',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Dapatkan data Work Order berdasarkan ID
        $workorder = WorkOrder::find($id);

        // Update data Work Order
        $workorder->update([
            'no_wo' => $request->input('no_wo'),
            'alamat' => $request->input('alamat'),
            'kategori_oa' => $request->input('kategori_oa'),
            'nama_pic' => $request->input('nama_pic'),
            'telp_pic' => $request->input('telp_pic'),
            'layanan_mbps' => $request->input('layanan_mbps'),
            'segmen' => $request->input('segmen'),
            'sid' => $request->input('sid'),
            'snont' => $request->input('snont'),
            'lan' => $request->input('lan'),
            'ip' => $request->input('ip'),
            'gw' => $request->input('gw'),
            'sm' => $request->input('sm'),
            // tambahkan kolom lainnya sesuai kebutuhan
        ]);

        // Redirect ke halaman tampilan Work Order setelah update
        return redirect()->route('wo.index')->with('success', 'Work Order berhasil diperbarui.');
    }
    public function destroy($id)
    {
        // Temukan data Work Order berdasarkan ID
        $workOrder = WorkOrder::find($id);

        if (!$workOrder) {
            return redirect()->route('wo.index')->with('error', 'Work Order tidak ditemukan.');
        }

        // Hapus data Work Order
        $workOrder->delete();

        // Redirect ke halaman daftar Work Order dengan pesan sukses
        return redirect()->route('wo.index')->with('success', 'Work Order berhasil dihapus.');
    }
}
