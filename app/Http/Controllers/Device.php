<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devices;
use DB;

class Device extends Controller
{
    public function Workstation()
    {
        $workstation=DB::select('SELECT * FROM device WHERE Type = ?', ['Workstation']);
        return view('Device.workstation',['workstation'=>$workstation]); 
    }

    public function WorkstationDetails()
    {
        return view('Device.workstationdetails');
    }

    public function Server()
    {
        $server=DB::select('SELECT * FROM device WHERE Type= ?',['Server']);
        return view('Device.server',['server'=>$server]);
    }

    public function ServerDetails()
    {
        return view('Device.serverdetails');
    }

    public function Network()
    {
        $network=DB::select('SELECT * FROM device WHERE Type = ?', ['Network']);
        return view('Device.network',['network'=>$network]);
    }

    public function NetworkDetails()
    {
        return view ('Device.networkdetails');
    }

    public function Printing()
    {
        $printing=DB::select('SELECT * FROM device WHERE Type=?',['Printing']);
       return view('Device.printing',['printing'=>$printing]);
    }

    public function PrintingDetails()
    {
        return view('Device.printingdetails');
    }

    public function NewDevice()
    {
        return view('Device.adddevice');
    }

}
