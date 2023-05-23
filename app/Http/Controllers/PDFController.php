<?php
  
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $orders = Order::get();
  
        $data = [
            'title' => 'Welcome to OMSHOP.com',
            'date' => date('m/d/Y'),
            'orders' => $orders
        ]; 
            
        $pdf = PDF::loadView('admin.myPDF', $data);
     
        return $pdf->download('OmSHOPORDERS.pdf');
    }
}

?>