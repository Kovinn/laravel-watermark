<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    // Menampilkan halaman form untuk generate QR code
    public function index()
    {
        return view('generate-qr');  // Ganti dengan nama view yang kamu gunakan
    }

    // Mengenerate QR Code dari URL yang dimasukkan
    public function generate(Request $request)
    {
        // Validasi input URL
        $request->validate([
            'url' => 'required|url',
        ]);

        // Generate QR Code dari URL
        $qrCodeImage = QrCode::format('png')->size(200)->generate($request->input('url'));

        // Kembalikan hasil QR Code ke view
        return view('generate-qr', compact('qrCodeImage'));  // Ganti dengan nama view yang kamu gunakan
    }
}
