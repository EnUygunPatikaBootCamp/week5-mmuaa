<?php
namespace App\Service;

class Service2
{
    private $service1;

    public function __construct(Service1 $service1)
    {
        $this->service1 = $service1;
    }

    public function service2function(): string
    {
        //servis 1 den mesajı getirdiğimiz yer
        $service1get = $this->service1->service1function();

        //servis 2 deki mesaj
        $service2 = 'EnUygun PHP Bootcamp Servis Uygulaması : '.$service1get;

        return $service2;
    }
}