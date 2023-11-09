<?php

namespace App\Http\Controllers;

use App\Enums\repetitionTimeTableService;
use App\Models\CategoryService;
use App\Models\Service;
use App\Models\ServiceReservation;
use App\Models\TimeTable;
use App\Models\User;
use DateTime;
use Dhonions\LaravelCalendar\Calendar;
use Dhonions\LaravelCalendar\ServiceProvider;
use Dhonions\LaravelCalendar\SimpleEvent;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idcategory = 0)
    {

        if ($idcategory == 0)
            $services = Service::all();

        else {
            $services = Service::where('category_service_id', $idcategory)->get();
        }
        return View('front.Services.listService', [
            'services' => $services,
            'categorys' => CategoryService::all(),
        ]);


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listServiceback()
    {
            $services = Service::all();

        return View('back.Services.listService', [
            'services' => $services
        ]);


    }

    public function serviceProviderDashboard($idServiceProvider)
    {
        $calendar = new Calendar();

        $timetablesReservationServices=[];
        $events=$this->excludedtime($idServiceProvider);
        $ProviderServiceIds = Service::where('user_id', $idServiceProvider)->pluck("id");
        foreach ($ProviderServiceIds as $idservice) {

            $timetablesReservationServices[] = ServiceReservation::where("service_id", $idservice)->get();
          //  error_log($idservice);

        }
        if(count($timetablesReservationServices)!=0 ) {
            foreach ($timetablesReservationServices as $timetableReservationService) {
                foreach ($timetableReservationService as $ReservationService) {
                    $events[] = \Calendar::event(
                        '', //event title
                        false, //full day event?
                        $ReservationService->date, //start time (you can also use Carbon instead of DateTime)
                        $this->calculateEndOfService($ReservationService), //end time (you can also use Carbon instead of DateTime)
                        0, //optionally, you can specify an event ID
                        [
                            'backgroundColor' => 'blue',
                             'title'=> 'reserver par'. $ReservationService->user->username

// 'service:' . $ReservationService->service->name

                        ]
                    );
                }
            }
            $calendar->addEvents($events);
        }
        $calendar->setOptions([
            'height' =>'auto' ,
            'navLinks' => 'true',
            'locale' => 'fr',
            'firstDay' => 0,
            'displayEventTime' => true,
            'selectable' => true,
            'initialView' => 'dayGridMonth',
            'headerToolbar' => [
                'left' => 'prev,next today myCustomButton',
                'center' => 'title',
                'right' => 'dayGridMonth,timeGridWeek,timeGridDay'
            ],
            'customButtons' => [
                'myCustomButton' => [
                    'text' => 'custom!',
                    'click' => 'function() {
                alert(\'clicked the custom button!\');
            }'
                ]
            ]
        ]);
        $calendar->setId('1');
        $calendar->setCallbacks([
            'select' => 'function(selectionInfo){}',
            'eventClick' => 'function(event){}'
        ]);


        return View('front.Services.serviceProviderDashboard',
            compact( 'calendar')
        );
    }



    public function singleService($idservice)
    {
        $idServiceProvider = Service::find($idservice);
        $events=$this->excludedtime($idServiceProvider->id);


        $calendar = new Calendar();
        if (count($events)!=0)
        $calendar->addEvents($events);
        $calendar->setOptions([
            'droppable' => 'true',
            'navLinks' => 'true',
            'locale' => 'fr',
            'firstDay' => 0,
            'displayEventTime' => true,
            'selectable' => true,
            'initialView' => 'timeGridWeek',
            'headerToolbar' => [
                'left' => 'prev,next today myCustomButton',
                'center' => 'title',
                'right' => 'timeGridWeek,timeGridDay'
            ],
            'customButtons' => [
                'myCustomButton' => [
                    'text' => 'custom!',
                    'click' => 'function() {
                alert(\'clicked the custom button!\');
            }'
                ]
            ]
        ]);
        $calendar->setId('1');
        $calendar->setCallbacks([
            'select' => 'function(selectionInfo){}',
            'eventClick' => 'function(event){}'
        ]);


        $service = Service::find($idservice);
        return View('front.Services.singleService',
            compact('service', 'calendar')
        );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('front.Services.ajouterService',
           [ 'categorys' => CategoryService::all()]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $request->validate([
                'name' => 'required',
                'price' => 'required|numeric|gt:0', // Check if 'price' is numeric and greater than 0
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required'

            ], [
                'name.required' => "Le nom ne peut pas être vide",
                'description.required' => "Le description ne peut pas être vide",
                'image.required' => "image est obligatoire",
                'price.required' => "Le prix est obligatoire",
                'price.numeric' => "Le prix doit être un nombre",
                'price.gt' => "Le prix doit être supérieur à 0"
            ]);

            $input = $request->all();
                error_log("fsfdsfds");



          $userid = auth()->user()->id;
          $service = new Service;
          $service->user_id = $userid;

                if ($image = $request->file('image')) {
                    $destinationPath = 'images/Service';
                    $postImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $postImage);
                    $service->image = "public/images/Service/".$postImage;
                }

                // Set the other product properties from the request
                $service->name = $request->input('name');
                $service->price = $request->input('price');
                $service->description = $request->input('description');
                $service->duration = $request->input('duration');
                $service->category_service_id =$request->input('category');

                // Save the product to the database
                $service->save();
                return redirect()->route('service.create')->with('success', 'service has been created successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);

                   $service->delete();
                   return redirect()->route('service.list')->with('success', 'Product has been deleted successfully');
    }

    private function excludedtime($ProviderServiceIds)
    {
        $timetablesServices=[] ;
        $events=[];
        $ProviderServiceIds = Service::where('user_id', $ProviderServiceIds)->pluck("id");

        foreach ($ProviderServiceIds as $idservice) {

            $timetablesServices[] = TimeTable::where("service_id", $idservice)->get();

        }
        error_log(count($timetablesServices));
        if( count($timetablesServices)!=0)
        {
        foreach ($timetablesServices as $timetablesService) {
            foreach ($timetablesService as $timetable) {

                $indexday = array_search(repetitionTimeTableService::from($timetable->repetition), repetitionTimeTableService::cases());
                if ($indexday != 8) {
                    if ($indexday == 7) $indexdays = [0,1,2,3,4,5,6];
                    else   $indexdays[] = $indexday;

                    $events[] = \Calendar::event(
                        '', //event title
                        false, //full day event?
                        '', //start time (you can also use Carbon instead of DateTime)
                        '', //end time (you can also use Carbon instead of DateTime)
                        0, //optionally, you can specify an event ID
                        [
                            'groupId' => 'testGroupId',
                            'display' => 'inverse-background',
                            'backgroundColor' => 'red',
                            'daysOfWeek' => $indexdays,
                            'startTime' => $timetable->shiftStart,
                            'endTime' => $timetable->shiftEnd,
                            'startRecur' => $timetable->created_at

                        ]
                    );
                    unset ($indexdays);
                }
            }
        }}
     return $events;

    }
    public function calculateEndOfService($ReservationService)
    {
        $shiftStart=$ReservationService->date;
        $service=Service::find($ReservationService->service_id);
        $string="+".strval($service->duration)." minutes";
        $shiftEnd=$shiftStart;
        $shiftEnd = DateTime::createFromFormat('Y-m-d H:i:s', $shiftEnd);
        $shiftEnd->modify($string);
        $shiftEnd = $shiftEnd->format('Y-m-d H:i:s');
        return $shiftEnd;
    }
}
