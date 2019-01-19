@extends('estartup.layout')


@section('content')

<section id="" class="padd-section text-center wow fadeInUp">
        
        <div class="container">
          <div class="section-title text-center">
            <h2>የአባልነት ፎርም</h2>
            <p class="separator">እባክዎትን ትክክለኛ መረጃ በመስጠት ይተባበሩን</p>
          </div>
        </div>
        <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                <form action="{{route('enquiry.submit')}}" method="POST">
                        @csrf
                        <input type="hidden" name="from" value="join-us">
                    ሙሉ ስም <input type="text" name="name" class="form-control" placeholder="እዚህ ይጻፉ">
                        ስልክ <input name="phone" class="form-control" type="number" value="09"> 
                    email <input name="email" class="form-control" type="email" > 
                    ክልል <select name="region" class="form-control"> 
                        <option>ትግራይ</option><option>አፋር</option><option>አማራ</option><option>ቤኒሻንጉል ጉሙዝ</option><option>ኦሮሚያ</option><option>ሶማሌ</option><option>ሃረሪ</option><option>ደቡብ</option><option>ጋምቤላ</option><option>አዲስ አበባ</option><option>ድሬደዋ </option>
                        </select>
                    ከተማ <input name="city" class="form-control" type="text" >
                    ዜግነት <input name="citizenship" class="form-control" type="text" value="ኢትዮጲያዊ" >
                    ስራ <input name="work" class="form-control" type="text" >
                    የመታወቂያ ቁጥር <input name="id_number" class="form-control" type="text" >
                    የትምህርት ሁኔታ <select name="education" class="form-control"> 
                            <option>1ኛ ደረጃ</option><option>2ኛ ደረጃ</option><option>መሰናዶ</option><option>ኮሌጅ</option><option>ዩኒቨርሲቲ</option>
                        </select><br>
                    <button class="form-control btn btn-primary" type="submit">ይመዝገቡ</button>
                    </form>
            </div>
        </div>
        {{-- 
           ኮሌጅ  --}}
</section>    

@endsection