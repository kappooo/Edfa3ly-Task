<?php
namespace App\Courier;

class WrapX implements Courier{


    protected $interface;


    public function __construct()
    {

        $this->interface=new InterfaceX();

    }



    public function createShipment()
    {

        $this->interface->createShipmentAndGetWaybill();
    }



    public function trackShipment()
    {

        $this->interface->getShipmentTrackingDetails();

    }


}