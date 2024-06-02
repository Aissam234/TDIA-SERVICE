<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function mail(){
        return view("profs.blank");
    }

    public function composeEmail(Request $request){

    }
}
