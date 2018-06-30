<?php
namespace App\Courier;
class WrapY implements Courier{


    protected $interface;


    public function __construct()
    {

        $this->interface=new InterfaceY();

    }



    public function createShipment()
    {



        $this->interface->createShipmentInfo();

        $this->interface->createShipmentInstructions();

        $this->interface->getShipmentWaybill();
    }



    public function trackShipment()
    {

        $this->interface->getShipmentTrackingDetails();

    }


}