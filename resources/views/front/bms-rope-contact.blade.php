@extends('front.layout.front-layout')
@section('pageTitle', 'Marusan Group')
@section('meta')
@endsection
@section('pageSubTitle', ' Career')
@push('styles')
    <style>
    </style>
@endpush
@section('content')
    <section class="all_part" style="margin-top:30px;padding:60px 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                    <h2>BMS Company Limited</h2>
                </div>
                <div class="col-md-6 contact-map wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29531.72960415638!2d91.75564961423336!3d22.298201692774477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acdef3a5cb62c3%3A0x2f60726899aa92de!2sBMS%20Co.%20Ltd.!5e0!3m2!1sen!2sbd!4v1703872619634!5m2!1sen!2sbd"
                        width="550" height="600" frameborder="0" style="border:2px solid black;"
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
