<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;  

class SignatureController extends Controller
{
    public function index()
    {
        $qrCodeImage = QrCode::size(200)->generate('data-untuk-qr-code');

        return view('dashboard', compact('qrCodeImage'));
    }
}
