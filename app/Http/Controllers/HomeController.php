<?php
namespace App\Http\Controllers;
use App\Courier\WrapY;
use App\Courier\WrapZ;
use App\Courier\WrapX;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function index()
    {

      $wrap=new WrapX();

      $wrap->createShipment();

      echo '<br/><hr/>';
      $wrap->trackShipment();


    }

    //
}
