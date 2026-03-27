<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Native\Mobile\Facades\Device;

class testController extends Controller
{
    public function deviceInfo(){
        
        $result = Device::getInfo();
        return view('resultView',['result'=>$result]);
    }
    public function getBatteryInfo(){
        $result = Device::getBatteryInfo();
         return view('resultView',['result'=>$result]);
    }
    public function toggleFlashlight(){
        $result = Device::toggleFlashlight();
         return view('resultView',['result'=>$result]);
    }
    
    public function vibrate(){
        $result = Device::vibrate();
        return view('resultView',['result'=>$result]);
    }
}
