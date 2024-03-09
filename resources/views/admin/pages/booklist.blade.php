@extends('admin.template')

@section('content')
<div class="container-fluid pt-4 px-4">
    <form method="GET" action="" enctype="multipart/form-data">
        <input type="hidden">
        <div class="row g-4">
            {{--  <div class="col-4">
                <div class="form-floating mb-3">
                    <select class="form-select" id="partnerSelect" name="partner" aria-label="Floating label select example">
                        <option selected disabled>All</option>
                        @forelse ($partnerLists as $ptlist)
                            <option value="{{$ptlist->id}}" {{ request()->query('partner') == $ptlist->id ? 'selected' : '' }}>{{$ptlist?->institution_name ?? $ptlist?->institution_name_bn}}</option>
                        @empty

                        @endforelse
                    </select>
                    <label for="partnerSelect">Select Partner</label>
                </div>
            </div>
            <div class="col-4">
                <div class="form-floating mb-3" id="course_batch">
                    <select class="form-select" id="batch_course"aria-label="Floating label select example">
                        <option selected disabled>All</option>
                        @forelse ($courseBatches as $courseBatch)
                        <option value="{{$courseBatch->id}}" {{ request()->query('course_batch') == $courseBatch->id ? 'selected' : '' }}>{{$courseBatch?->title ?? $courseBatch?->bn_title}}</option>
                        @empty

                        @endforelse
                    </select>
                    <label for="batch_course">Select Course</label>
                </div>
            </div>
            <div class="col-4">
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" name="status" aria-label="Floating label select example">
                        <option selected disabled>All</option>
                        <option value="1" {{ request()->query('status') == 1 ? 'selected' : '' }}>Success</option>
                        <option value="2" {{ request()->query('status') == 2 ? 'selected' : '' }}>Fail</option>
                    </select>
                    <label for="floatingSelect">Select Status</label>
                </div>
            </div>  --}}

            <div class="col-4">
                <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date:</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" value="{{ request()->query('start_date') ?? date('Y-m-01')}}">

                </div>
            </div>

            <div class="col-4">
                <div class="mb-3">
                        <label for="end_date" class="form-label">End Date:</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" value="{{request()->query('end_date') ?? date('Y-m-d')}}">
                </div>
            </div>

            <div class="col-4">
                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-md btn-primary mt-1">SEARCH <i class="fas fa-search"></i> </button>
                </div>
            </div>

        </div>

    </form>

    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Företagsnamn</th>
                                <th>Reg Nummer</th>
                                <th>Status</th>
                                <th>Time-Slot</th>
                                <th>Booking Date</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($datas as $key => $data )
                                <tr>
                                    <th scope="row">{{ $datas->firstItem() + $key }}</th>
                                    <td>{{$data?->name}}</td>
                                    <td>
                                        {{$data?->mobile ?? ''}}<br>
                                    </td>
                                    <td>
                                        @if ($data->status == 1)
                                        <span class="badge bg-primary">Approved</span>
                                        @else
                                        <span class="badge bg-warning"> </span>
                                        @endif

                                    </td>
                                    <td>{{$data?->time_slot}}</td>
                                    <td>{{$data?->booking_date}}</td>
                                    <td>{{$data?->created_at}}</td>
                                    <td>
                                        <a class="text-danger m-1"  href="{{ route('deleteBooking',$data->id) }}" onclick="event.preventDefault(); document.getElementById('del{{$data->id}}').submit();" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                        <form method="POST" id="del{{$data->id}}" action="{{ route('deleteBooking', $data->id) }}" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                    </td>
                                </tr>
                            @empty

                            @endforelse


                        </tbody>

                    </table>

                </div>
                <div class="row text-end mt-3">
                    {{-- {{ $datas->links() }} --}}
                    {{ $datas->appends(app('request')->except('page'))->links() }}
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Sale & Revenue End -->


<!-- Sales Chart Start -->

@endsection

@push('customejs')
<script>

</script>
@endpush

