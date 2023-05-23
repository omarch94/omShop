<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
  
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Mail from omSHOP.com',
            'body' => 'Your order is placed successfully'
        ];
         
        Mail::to('omarcherti@gmail.com')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
}
?>