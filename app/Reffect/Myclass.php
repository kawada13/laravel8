<?php 
namespace Reffect;

class Myclass
{

    public $slack;

    public function __construct(Slack $slack){

        $this->slack = $slack;

    }

    public function run(){

        $this->slack->send();

    }
   
}