<?php

namespace App\Http\Controllers\Dashboard;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Booking;
use App\Models\Order;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => Order::class,
            'start' => 'date_from',
            'end' => 'date_to',
            'field'      => 'additional_information',
            'prefix'     => '',
            'suffix'     => '',
            'route'      => 'dashboard.order.edit',
        ],
    ];

    public function index(Request $request)
    {
        $bookings = [];
       // $rooms = Room::all()->pluck('room_number', 'id');
       // $customers = Customer::all()->pluck('full_name', 'id');

        foreach ($this->sources as $source) {
            $models = $source['model']::/*when($request->input('room_id'), function ($query) use ($request) {
                    $query->where('room_id', $request->input('room_id'));
                })
                ->*/when($request->input('client_id'), function ($query) use ($request) {
                    $query->where('client_id', $request->input('client_id'));
                })
                ->get();
            foreach ($models as $model) {
                $crudFieldValue = $model->getOriginal($source['start']);
                $crudFieldValueTo = $model->getOriginal($source['end']);

                if (!$crudFieldValue && $crudFieldValueTo) {
                    continue;
                }
        if($crudFieldValue === $crudFieldValueTo) {
            $bookings[] = [
                'title'          => 'All Day Event',
                'start'          => $crudFieldValue,
                'backgroundColor'=> '#f56954', //red
                'borderColor'    => '#f56954', //red
                'allDay'         => true
                ];
        }else{
            $bookings[] = [
                'title'          => 'Long Event',
                'start'          => $crudFieldValue,
                'end'            => $crudFieldValueTo,
                'backgroundColor'=> '#f39c12', //yellow
                'borderColor'    => '#f39c12' //yellow
                ];
            }
            }
        }

        return view('dashboard.calendar', compact('bookings'));

    }

}
