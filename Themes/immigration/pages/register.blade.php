@extends('immigration.layout')


@section('content')

<section class="section-gap">
</section>
<section class="booking-area section-gap relative" id="consultancy">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-md-6 booking-left">
                    <h1 class="text-white">
                        የ አለን ኢትዮጲያ  <br>	
                        አባል ይሁኑ
                    </h1>
                    <h4 class="text-white">
                        
                    </h4>
                    <p>
                            ፎርሙን በመሙላት ይመዝገቡ የሚለውን ይጫኑ። በ አቅራቢያዎ የሚገኝ የአለን ኢትዮጲያ ቅርንጫፍ እርስዎ ዘንድ በመደወል ምዝገባዎ እንዲጠናቀቅ ይረዳዎታል።
                    </p>
                    {{-- <a class="primary-btn" href="#">View Detials</a> --}}
                </div>
                <div class="col-lg-4 col-md-6 booking-right">
                        <h4 class="mb-20">የአባልነት መመዝገቢያ ፎርም!</h4>
                        <form action="{{route('enquiry.submit')}}" method="POST">
                            @csrf
                            <input type="hidden" name="from" value="join-us">
                            <input class="form-control" type="text" name="name" placeholder="ሙሉ ስም" required>
                            <input class="form-control" type="text" name="phone" placeholder="ስልክ" required>
                            <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                            <div class="default-select" id="default-select"">
                                <select name="region">
                                    <option value="" disabled selected hidden>ክልል</option>
                                    <option>ትግራይ</option><option>አፋር</option><option>አማራ</option><option>ቤኒሻንጉል ጉሙዝ</option><option>ኦሮሚያ</option><option>ሶማሌ</option><option>ሃረሪ</option><option>ደቡብ</option><option>ጋምቤላ</option><option>አዲስ አበባ</option><option>ድሬደዋ </option>
                                </select>
                            </div>
                            <div class="default-select" id="default-select"">
                                <select name="education">
                                    <option value="" disabled selected hidden>የትምህርት ሁኔታ</option>
                                    <option>1ኛ ደረጃ</option><option>2ኛ ደረጃ</option><option>መሰናዶ</option><option>ኮሌጅ</option><option>ዩኒቨርሲቲ</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default btn-lg btn-block text-center">ይመዝገቡ</button>
                        </form>
                </div>
            </div>
        </div>	
    </section>
@endsection