<?php 
namespace App\Reffect;

use App\Test\Slack;


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