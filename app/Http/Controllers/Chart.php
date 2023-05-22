<?php

namespace App\Http\Controllers;
use map;
Use DB;

use Illuminate\Http\Request;

class Chart extends Controller
{
    public function AllChart()
    {
       $Device=$this->DeviceChart();
       $Data=$this->SoftwareChart();

       return view('dashboard',compact('Device','Data'));
    }

    public function DeviceChart()
    {
        $device = DB::table('device')
        ->select('type', DB::raw('count(*) as total'))
        ->groupBy('type')
        ->pluck('total', 'type')->all();

        $DeviceChart = new Chart;
        $DeviceChart->labels = (array_keys($device));
        $DeviceChart->dataset = (array_values($device));
        
        return $DeviceChart;
    }

    public function SoftwareChart()
    {
        $device = DB::table('device')
        ->select('type', DB::raw('count(*) as total'))
        ->groupBy('type')->get();

        $data = [];
        foreach ($device as $device) 
        {
            $data[] = [$device->type, $device->total];
        }

        return $data;
    }
}
