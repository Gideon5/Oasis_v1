<?php

namespace App\Http\Controllers;
use App\Models\EventCategory;
use App\Models\Event;
use App\Models\Ticket;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;



class EventController extends Controller
{
    public function index(){
        $events = Event::where('user_id', Auth::user()->id)->get();
        // dd($events);

        return view('dashboard.events.index', compact('events'));
    }

    public function showEventsByCategory($category){
        $events = Event::where('category', $category)->get();

        // dd($events_by_cat);
        return view('event.index', compact('events', 'category'));
    }

    public function create(){
        $categories = EventCategory::pluck('name');
        return view('dashboard.events.create', compact('categories'));
    } 

    public function store(Request $request){
        try {
            // dd($request->all());
            $validatedData = $request->validate([
                'name' => 'required',
                'location' => 'required',
                'description' => 'required',
                'date' => 'required|date',
                'start_time' => 'required|date_format:H:i',
                'end_time' => 'nullable|date_format:H:i',
                'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
                'category' => 'required'
            ]);

            $image = $request->image;

            // dd($image);

            // Handle file upload
            // if ($request->hasFile('image')) {
            //     $imagePath = $request->file('image')->store('images/events', 'public');
            //     $image = $imagePath;
            // } else {
            //     // Handle case where file upload fails
            //     return redirect()->back()->with('error', 'File upload failed');
            // }

            // dd(Auth::user()->id);
                    // Event::create($validatedData);
                    
            $validatedData['user_id'] = Auth::user()->id;
            
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images/events', 'public');
                $validatedData['image'] = $imagePath;
            }

            // dd($validatedData);

            Event::create($validatedData);

            // dd($request);
            return redirect()->route('all_events')->with('success','Event Created Succesfully');


    
    
        } catch (ValidationException $e) {
            // dd($e->errors());
            return redirect()->back()->withErrors($e->errors());

        }

        // dd($request);

        // $input = $request->all();

        // Event::create($input);

        // return redirect()->route('all_events')->with('success', 'Event Created Successfully');
    }

    public function edit($id){
        $event = Event::find($id);

        // dd($event);

        $categories = EventCategory::pluck('name');

        return view('dashboard.events.edit', compact('event', 'categories'));
    }

    public function update(Request $request, $id){

        // dd($id);
        try {

            // dd($request->all());
            $input = $request->validate([
                'name' => 'required',
                'location' => 'required',
                'description' => 'required',
                'date' => 'required|date',
                'start_time' => 'required|date_format:H:i',
                'end_time' => 'nullable|date_format:H:i',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
                'category' => 'required'
            ]);

            $event = Event::find($id);

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images/events', 'public');
                $input['image'] = $imagePath;
            } else {
                unset($input['image']); // Preserve existing image if not updated
            }

            // dd($input);
            $event->update($input);

            return redirect()->route('all_events')->with('success', 'Event Updated Successfully');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        }
        

    }

    public function show($slug){
        $event = Event::where('slug', $slug)->firstOrFail();

        return view('dashboard.events.show', compact(['event']));
    }

    public function destroy($id){
        $event = Event::findOrFail($id);

        if($event->image){
            \Storage::disk('public')->delete($event->image);
        }

        // dd($event);
        $event->delete();

        return redirect()->route('all_events')->with('success', 'Event deleted succesfully');

        
    }

    public function manage($slug){
        $event = Event::where('slug',$slug)->firstOrFail();
        $tickets = Ticket::select()->where('event_id', $event->id)->get();
        // dd($tickets);
        return view('dashboard.events.manage', compact(['event', 'tickets']));
    }

    public function createTicket($id){
        
        $event = Event::findOrFail($id);


        return view('dashboard.events.ticket.create', compact(['event']));
    }

    public function storeTicket(Request $request, $id){
        $event = Event::findOrFail($id);

        $existingTicket = Ticket::where('event_id', $event->id)
                                ->where('type', $request->type)
                                ->first();
        // dd($existingTicket);
    
        if ($existingTicket) {
            return redirect()->route('manage_event', $event->slug)
                             ->with('error', 'Ticket of this type already added for the event');
        }


        try {
            $event = Event::findOrFail($id);

        // dd($request);
        $validatedData = $request->validate([
            'type' => 'required',
            'ticket_quantity' => 'required',
            'price' => 'required',
            'ticket_status' => 'nullable'
        ]);

        $validatedData['event_id'] = $event->id;

        // dd($validatedData);


        // Ticket::create($validatedData);

        return redirect()->route('manage_event', $event->slug)->with('success','Ticket added succesfully');


            } 
            catch (ValidationException $e) {
                dd($e->errors());
                return redirect()->back()->withErrors($e->errors());
    
            }
        
    }

    public function getEventDetails($slug){
        $event = Event::where('slug', $slug)->with('tickets')->firstOrFail();
        // $ticket = Ticket::where('event_id', $event->id);
        // dd($event->tickets()->get());

        return view('event.event_details', compact('event'));
    }

    public function checkout(){
        return view('event.ticket.checkout');
    }




    
}
