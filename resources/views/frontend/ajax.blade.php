
@forelse ($timeSlots as $key => $slot )

<div class="col-lg-4  col-md-6  wow fadeInUp" data-wow-delay="0.1s">

    <div class="team-item" >

        <div class="text-light text-center ">
            <h5 class="text-uppercase text-light" style="margin-top: 10px; color:white ">{{ $date }}, ({{ $slot }})</h5>
            {{--  <form  id="{{ $key+1 }}" action="{{ route('home.bookSlot') }}" method="POST" enctype="multipart/form-data">  --}}
            @if(in_array($slot, $bookSlot->toArray()))

                    <h4 style="margin-top: 30px; color:white ">The time slot is booked.</h4>


            @else
                <form  id="{{ $key+1 }}">
                <div class="row" style="margin-left: 10px">

                    {{-- <div class="col-11 m-1">
                        <div class="">
                            <input type="text" class="form-control " name ="name" id="name" placeholder="Name" >
                        </div>
                    </div> --}}


                    <div class="control-group">
                        <div class="controls">
                            <input type="text" class="form-control " name ="name" id="name" placeholder="Företagsnamn" >
                        <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" class="form-control bg-transparent" name ="mobile" id="mobile" placeholder="Reg Nummer" >
                        <p class="help-block"></p>
                        </div>
                    </div>



                    {{-- <div class="col-11 m-1">
                        <div class="">
                            <input type="number" class="form-control bg-transparent" name ="mobile" id="mobile" placeholder="Mobile" >
                        </div>
                    </div> --}}


                    <input type="hidden" value="{{ $slot }}" name ="time_slot" >
                    <input type="hidden" value="{{ $date }}" name ="date" >

                    <div class="col-11 m-1">
                        <button class="btn btn-danger btn-md"  onclick="submitForm({{ $key+1 }})">Boka</button>
                    </div>
                </div>

            </form>
            @endif




        </div>
    </div>
</div>

@empty
<h5 class="text-uppercase">No Slot Available</h5>
@endforelse



