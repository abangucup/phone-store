<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmEmail;

class EmailController extends Controller
{
    public function sendEmail() {
        $details = [
            'title' => 'Ini Judul Email',
            'body' => 'Ini Isi Email',
        ];

        Mail::to("salman_s1sisfo2018@mahasiswa.ung.ac.id")->send(new ConfirmEmail($details));

        return 'send ok';
    }
}
