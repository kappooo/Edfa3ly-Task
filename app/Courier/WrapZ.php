<?php
namespace App\Courier;

class WrapZ implements Courier{


    protected $interface;


    public function __construct()
    {

        $this->interface=New InterfaceZ();

    }



    public function createShipment()
    {



        $this->interface->createShipmentAndGetWaybill();

        $this->interface->registerNumberToGetTrackingDetails();

    }



    public function trackShipment()
    {


        $this->interface->getTrackingDetails();


    }


}