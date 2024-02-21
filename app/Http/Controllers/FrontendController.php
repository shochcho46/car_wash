<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\StopBook;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function loadFrontEnd()
    {

        $blocktimeSlots = array();
        $startTime = config("app.start_time");
        $endTime = config("app.end_time");
        $interval = config("app.interval_time");
        $date = date('Y-m-d');
        $timeSlots = $this->generateTimeSlots($startTime, $endTime, $interval, $date);
        $bookSlot = Book::whereDate('created_at', $date)->pluck('time_slot');

        // $stopBooking = StopBook::first();

        // $carbonBlockDate = Carbon::createFromFormat('Y-m-d', $stopBooking->date)->startOfDay();
        // $currentDate = Carbon::now()->startOfDay();

        // if ($carbonBlockDate->equalTo($currentDate))
        // {

        //     $block_startTime = Carbon::createFromFormat('H:i', $stopBooking->time_start);
        //     $convertstartTime = $block_startTime->format('h:i A');
        //     $block_endTime = Carbon::createFromFormat('H:i', $stopBooking->time_end);
        //     $convertendTime = $block_endTime->format('h:i A');
        //     $blocktimeSlots = $this->generateTimeSlots($convertstartTime, $convertendTime, $interval);
        // }

        // dd($blocktimeSlots,$timeSlots);

        return view('frontend.carwash', compact('timeSlots', 'date', 'bookSlot'));
    }

    public function generateTimeSlots($startTime, $endTime, $interval, $date)
    {
        $timeSlots = [];
        $actualtimeSlots = [];

        $currentTime = strtotime($startTime);

        $stopBooking = StopBook::first();

        $carbonBlockDate = Carbon::createFromFormat('Y-m-d', $stopBooking->date)->startOfDay();
        // $currentDate = Carbon::now()->startOfDay();
        $currentDate = Carbon::createFromFormat('Y-m-d', $date)->startOfDay();

        while ($currentTime <= strtotime($endTime)) {
            $formattedTime = date('h:i A', $currentTime);
            $timeSlots[] = $formattedTime;
            $currentTime = strtotime('+' . $interval . ' minutes', $currentTime);
        }

        if ($carbonBlockDate->equalTo($currentDate)) {
            $block_startTime = Carbon::createFromFormat('H:i', $stopBooking->time_start);
            $block_endTime = Carbon::createFromFormat('H:i', $stopBooking->time_end);
            $startTimestamp = strtotime($block_startTime);
            $endTimestamp = strtotime($block_endTime);

            foreach ($timeSlots as $values) {
                $checkSlotTimestamp = strtotime($values);

                if ($checkSlotTimestamp >= $startTimestamp && $checkSlotTimestamp <= $endTimestamp) {

                } else {

                    $actualtimeSlots[] = $values;
                }

            }

        } else {
            $actualtimeSlots = $timeSlots;
        }

        // return $timeSlots;
        return $actualtimeSlots;
    }

    public function timeSlot(Request $request)
    {
        $startTime = config("app.start_time");
        $endTime = config("app.end_time");
        $interval = config("app.interval_time");

        $timeSlots = $this->generateTimeSlots($startTime, $endTime, $interval, $request->date);

        // Output the generated time slots

        $bookSlot = Book::whereDate('created_at', $request->date)->pluck('time_slot');
        $htmlContent = view('frontend.ajax', ['timeSlots' => $timeSlots, 'date' => $request->date, 'bookSlot' => $bookSlot])->render();

        return response()->json(['content' => $htmlContent]);

    }

    public function bookSlot(Request $request)
    {
        $requestTime = Carbon::createFromFormat('H:i A', $request->time_slot);
        $currentTime = Carbon::now();
        if ($currentTime->greaterThan($requestTime)) {
            return response()->json([
                'status' => "fail",
                'message' => "Boknings tiden över",

            ], 400);
        }

        $theSloat = 1;
        $validator = Validator::make($request->all(), [
            'name' => 'bail|required',
            'mobile' => 'bail|required',
            'date' => 'bail|required',
            'time_slot' => 'bail|required',
        ]);

        if ($validator->fails()) {
            $errorMessage = "";
            foreach ($validator->errors()->toArray() as $key => $value) {

                foreach ($value as $key => $errorvalue) {
                    $errorMessage = $errorvalue;
                    break;
                }

                break;
            }

            return response()->json([
                'status' => "fail",
                'message' => $errorMessage,

            ], 400);
        }
        $data = array(
            "name" => $request->name,
            "mobile" => $request->mobile,
            "date" => $request->date,
            "time_slot" => $request->time_slot,
            "package_id" => 1,
            "contributor_id" => 1,
            "customer_id" => 1,
            "price" => 1,
            "booking_date" => date('Y-m-d'),
            "status" => 1,
        );

        $totalSlot = Book::where('time_slot', $request->time_slot)->whereDate('created_at', $request->date)->count();

        if ($theSloat > $totalSlot) {

            Book::create($data);

        } else {
            return response()->json([
                'status' => "fail",
                'message' => "This slot is already book",

            ], 400);
        }

        $bookSlot = Book::whereDate('created_at', $request->date)->pluck('time_slot');

        $startTime = config("app.start_time");
        $endTime = config("app.end_time");
        $interval = config("app.interval_time");

        $timeSlots = $this->generateTimeSlots($startTime, $endTime, $interval, $request->date);

        $htmlContent = view('frontend.ajax', ['timeSlots' => $timeSlots, 'date' => $request->date, 'bookSlot' => $bookSlot])->render();

        return response()->json(['content' => $htmlContent]);
    }
}
