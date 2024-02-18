@extends('admin.template')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <form method="GET" action="" enctype="multipart/form-data">
        <div class="row g-4">
            <div class="col-4">
                <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ $stopBooking->date ?? ""}}" required>
    
                </div>
            </div>

            <div class="col-4">
                <div class="mb-3">
                        <label for="time_start" class="form-label">Start time:</label>
                        <input type="time" class="form-control" id="time_start" name="time_start" value="{{ $stopBooking->time_start ?? ""}}" required>
    
                </div>
            </div>
    
            <div class="col-4">
                <div class="mb-3">
                        <label for="time_end" class="form-label">End time:</label>
                        <input type="time" class="form-control" id="time_end" name="time_end" value="{{ $stopBooking->time_end ?? ""}}" required>
                </div>
            </div>
    
            <div class="col-4">
                <div class="mt-4 text-start">
                    <button type="submit" class="btn btn-md btn-primary mt-1">Add</button>
                </div>
            </div>
    
            </div>
    
        </form>
    </div>
</div>




@endsection

@push('customejs')

{{-- <script>
    var ctx1 = $("#total-enroll").get(0).getContext("2d");
    var myChart1 = new Chart(ctx1, {
        type: "line",
        data: {
            labels: {!! json_encode($totals->pluck('year')->toArray()) !!},
            datasets: [{
                    label: "Amount",
                    data: {!! json_encode($totals->pluck('total_amount')->toArray()) !!},
                    backgroundColor: "rgba(200, 19, 245, .7)",
                    fill: true,
                    tension: 0.1,
                    pointRadius:5,
                    pointHoverRadius:6,
                },

            ]
            },
        options: {
            responsive: true
        }
    });
</script> --}}

@endpush
