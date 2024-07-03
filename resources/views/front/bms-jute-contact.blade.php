@extends('front.layout.front-layout')
@section('pageTitle', 'Marusan Group')
@section('meta')
@endsection
@section('pageSubTitle', ' Contact')
@push('styles')
    <style>
    </style>
@endpush
@section('content')
    <section class="all_part" style="margin-top:30px;padding:60px 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                    <h2>BKY Jute Mills Limited</h2>
                </div>
                <div class="col-md-6 contact-map wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.012637569475!2d91.63686257435577!3d22.653317430008908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375333b31cde1909%3A0x5bbe68fb5dcd36fd!2sBKY%20JUTE%20MILLS%20LTD.!5e0!3m2!1sen!2sbd!4v1719993207435!5m2!1sen!2sbd" width="550" height="600" frameborder="0" style="border:2px solid black;"
                        allowfullscreen=""></iframe>

                </div>

                <!--start form code-->
                <div class="col-md-6 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeRr1C1VVyorkqTaZjAkB5VQDKiyzH7eFR3iMwhMrs6MWlSqw/viewform?embedded=true" width="550" height="600" frameborder="2px" marginheight="0" marginwidth="0">Loading…</iframe>

                    <!--form name="contactform" method="POST" action="send_form_email.php">
                        <div><h2>Feel Free to ask any question/ query</h2>
                        <p>We will get back to you as early as possible</p><br></div>
                        <input type="text" class="input-box" name="cname"  placeholder="Name">
                        <input type="email" class="input-box" name="email" placeholder="Email" required>
                        <input type="text" class="input-box" name="subject"  placeholder="Subject">
                        <textarea name="mass" id="text" class="massage" cols="30" rows="10" required></textarea>
                        <button type="submit" name="submit" class="form_btn">submit</button>
                        
                    </form-->
                </div>
                <!--end form code-->

            </div>



        </div>
    </section>

@endsection
@push('scripts')
    <script></script>
@endpush
