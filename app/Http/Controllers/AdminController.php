<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\StopBook;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function dashboard()
    {
        $bookings = Book::count();

        return view('admin.pages.dashboard', compact('bookings'));
    }

    public function booklist(Request $request)
    {

        $startDate = $request->start_date ?? date('Y-m-01');
        $endDate = $request->end_date ?? date('Y-m-d');

        $startDate = Carbon::parse($startDate)->startOfDay();
        $endDate = Carbon::parse($endDate)->endOfDay();

        $datas = Book::orderByDesc('id')->whereBetween('created_at', [$startDate, $endDate])->paginate(50);
        return view('admin.pages.booklist', compact('datas'));
    }

    public function stopBook(Request $request)
    {

        if ($request->has('date') && $request->has('time_start') && $request->has('time_end')) {

            StopBook::truncate();
            $inserData = array(
                "date" => $request->date,
                "time_start" => $request->time_start,
                "time_end" => $request->time_end,
            );

            StopBook::create($inserData);
        }

        $stopBooking = StopBook::first();
        return view('admin.pages.stopbook', compact('stopBooking'));
    }

    public function deleteBooking(Book $book)
    {

        $book->delete();
        return redirect()->route('booklist')->with('fail', __('webstring.delete_message'));

    }

}
