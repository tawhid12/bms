@extends('front.layout.front-layout')
@section('pageTitle', 'Marusan Group')
@section('meta')
@endsection
@section('pageSubTitle', ' Career')
@push('styles')
    <style>
         .vission li{
            margin-bottom: 10px;            
            margin-right: 10px;
        }
    </style>
@endpush
@section('content')

    {{-- <section class="head-bread">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="">About Us</a></li>
                        </ol>
                    </nav>
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="all_part mt-5 py-5">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                    <h2>Our Mission</h2>
                    <ul class="mission">
                        <li>
                            Deliver High-Quality Products: Our mission is to consistently deliver high-quality ropes,
                            twines, and hessian cloth products that meet or exceed industry standards and
                            customer expectations.
                        </li>
                        <li>
                            Customer-Centric Focus: We are committed to a customer-centric approach, tailoring
                            our solutions to meet the diverse needs of our clients across various industries.

                        </li>
                        <li>
                            Sustainability and Responsibility: We aim to manufacture our products responsibly,
                            embracing sustainable practices to minimize environmental impact throughout our
                            operations
                        </li>
                        <li>
                            Innovation and Excellence: Innovation is at the core of our mission. We strive for
                            excellence in our manufacturing processes and materials, continuously seeking
                            opportunities to improve and adapt to changing industry demands.
                        </li>
                        <li>
                            Reliability and Trust: Building trust with our customers is a fundamental part of our
                            mission. We ensure the reliability of our products, providing consistent quality and
                            performance
                        </li>
                        <li>
                            Community and Employee Well-being: We're dedicated to supporting the well-being of
                            our employees and the communities in which we operate, creating a positive and lasting
                            impact.

                        </li>
                        <li>
                            Ethical Conduct: Uphold the highest ethical standards in all our business activities,
                            fostering trust and integrity among all stakeholders.
                        </li>
                    </ul>

                </div>





            </div>
        </div>
    </section>
    <section class="all_part mt-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                    <h2>Our Vission</h2>
                    <ul class="vission">
                        <li>
                            <strong>Market Expansion : </strong> Expand our presence in both domestic and international
                            markets,
                            becoming a recognized and trusted brand worldwide.
                        </li>
                        <li>
                            <strong>Excellence in Quality : </strong> Dedicate ourselves to achieving unparalleled quality
                            and
                            durability in our products, ensuring they are renowned for their reliability.
                        </li>
                        <li>
                            <strong>Safety Commitment : </strong> Maintain a strong commitment to safety throughout our
                            operations, guaranteeing that our products meet the highest safety standards.
                        </li>
                        <li>
                            <strong>Research and Development : </strong> Invest in research and development to stay at the
                            forefront of industry innovation, constantly improving our product lines and
                            manufacturing processes.
                        </li>
                        <li>
                            <strong>Ethical Practices : </strong> Uphold the highest ethical standards in all business
                            activities, fostering
                            trust among customers, employees, and stakeholders.
                        </li>
                        <li>
                            <strong>Industry Collaboration: </strong> Collaborate with industry partners and organizations
                            to drive
                            positive change, address industry challenges, and promote sustainable practices.
                        </li>
                        <li>
                            <strong>Long-term Sustainability: </strong> Focus on long-term sustainability, aiming to
                            contribute
                            positively to the environment and society for generations to come.
                        </li>
                        <li>
                            <strong>Customer Delight : </strong> Strive to go beyond customer satisfaction and aim for
                            customer
                            delight by consistently exceeding expectations in product quality and service.
                        </li>
                        <li>
                            <strong>Empowerment and Inclusion : </strong> Strive to go beyond customer satisfaction and aim
                            for customer
                            delight by consistently exceeding expectations in product quality and service.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script></script>
@endpush
