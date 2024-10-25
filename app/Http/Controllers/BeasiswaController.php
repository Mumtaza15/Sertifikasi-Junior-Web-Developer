<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;

class BeasiswaController extends Controller
{
    public function showForm() {
        return view('pendaftaran');
    }
    
    public function submitForm(Request $request) {

        // Validasi inputan
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pendaftaran',
            'handphone' => 'required|digits_between:10,13',
            'semester' => 'required|integer',
            'ipk' => 'required|numeric',
            'document' => 'required|file|mimes:pdf,jpg,zip|max:2048',
        ], [
            'email.unique' => 'Email ini sudah digunakan, silakan gunakan email lain.',
            'document.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
            'document.mimes' => 'File harus berupa format pdf, jpg, atau zip.',
        ]);

        // Simpan berkas ke dalam storage/public/documents
        if ($request->hasFile('document')) {
            $berkas_syarat = $request->file('document')->store('documents', 'public');
        }

        // Simpan data ke dalam database
        Beasiswa::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'handphone' => $request->handphone,
            'semester' => $request->semester,
            'ipk' => $request->ipk,
            'pilihan_beasiswa' => $request->pilihan_beasiswa,
            'berkas_syarat' => $berkas_syarat,
            'status_ajuan' => 'belum di verifikasi',
        ]);
    
        // Notifikasi sukses
        session()->flash('success', 'Your scholarship registration has been successfully submitted.');

        return redirect()->route('hasil');
    }
    
    public function hasil() {
        $beasiswa = Beasiswa::paginate(10);
        return view('hasil', compact('beasiswa'));
    }
    
}
