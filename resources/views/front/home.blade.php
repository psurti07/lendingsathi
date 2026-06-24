@extends('layouts.front')
@push('css')
<link rel="stylesheet" href="{{ asset('front/calc/commoncalculator.css') }}">
<link rel="stylesheet" href="{{ asset('front/calc/emicalculator.css') }}">
<link rel="stylesheet" href="{{ asset('front/calc/calcstyle.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
@endpush
@push('style-css')

@endpush
@section('content')
<!-- main section starts -->
<section id="hero-7" class="hero-section bg--scroll hero-top-image">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-12 m-auto">
                <div class="hero-7-txt">
                    <div class="text-start">
                        <h1 class="s-40 w-700">Take One Step Closer to Your Financial Dreams</h1>
                        <p class="mb-20">Get premier financial consultation and services from industry experts to move
                            forward towards your goals with confidence.</p>
                        <a href="{{ route('self.apply.main') }}"
                            class="btn r-12 btn--theme hover--tra-black last-link">Self Apply</a>
                        <a href="{{ route('loan.agent.main') }}"
                            class="btn r-12 btn--theme hover--tra-black last-link">Hire an Agent</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-12 m-auto mt-md-5">
                <div class="hero-7-img ps-0 text-center">
                    <img src="{{ asset('front/images/hero-img.png') }}" alt="lendingsathi" class="img-fluid p-0">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main section ends -->

<section class="py-80 ct-02 content-section division" id="company">
    <div class="container">
        <div class="row d-flex align-items-center mb-0">
            <div class="col-md-8 col-12 m-auto">
                <div class="txt-block right-column text-white">
                    <p class="text-white"><span class="section-id s-16">About <span
                                class="color--green-500">Us!</span></span></p>
                    <h2 class="s-28 w-700 text-white">Lending Sathi: A Trusted Partner in Your Financial Journey</h2>
                    <p>At Lending Sathi, we believe the right financial partner can make all the difference. As your
                        ideal financial partner, we are committed to helping you find solutions that truly match your
                        needs, without confusion or unnecessary complexity. </p>
                    <p>We collaborate with multiple industry-leading NBFCs, allowing us to provide you with a wide range
                        of financial solutions.</p>
                    <p>Our focus is on keeping things clear and straightforward, so you always know what to expect at
                        every stage. With transparent communication and consistent support, we aim to make your
                        experience smooth and dependable from start to finish. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="divider">

<!-- why lendingsathi section starts -->
<section id="features-6" class="py-80 features-section division">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-40">
                    <h2 class="s-28 mb-5">Get the Best<span class="color--green-500"> Loan Offers Easily</span></h2>
                    <p class="description mt-0 s-16 color--grey">Complete your application in five simple steps.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-lg-8 col-12 m-auto">
                <div class="hero-7-img ps-0 text-center">
                    <img src="{{ asset('front/images/process-step.jpg') }}" alt="lendingsathi" class="img-fluid p-0">
                </div>
            </div>
        </div>

    </div>
</section>
<!-- why lendingsathi section ends -->
<!-- why lendingsathi section starts -->
<section id="features-6" class="py-80 features-section division bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-40">
                    <h2 class="s-28 mb-5 text-white">Why Choose <span class="color--green-500">Lending Sathi</span>
                    </h2>
                    <p class="s-16  mt-0 text-white">Because your dreams deserve expert guidance.</p>
                </div>
            </div>
        </div>
        <div class="fbox-wrapper text-center r-20">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-12 col-12">
                    <div class="integrations-1-wrapper">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 rows-2 g-4">
                            <div class="col">
                                <div
                                    class="in_tool it-3 r-12 fbox-7  flex-column text-center justify-content-center border-0 bg--green-100 h-100 fbox--hover mb-0">
                                    <div class="in_tool-logo-wrap">
                                        <div class="in_tool-logo ico-60">
                                            <div class="fbox-ico ico-50">
                                                <div class="shape-ico color--theme">
                                                    <img class="img-fluid"
                                                        src="{{ asset('front/images/Access-to-Multiple.png') }}"
                                                        alt="content-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="in_tool-txt text-center">
                                        <h6 class="s-20 w-700 lh-base mt-0">Access to Multiple NBFCs</h6>
                                        <p>Take advantage of our enriching collaboration with some of the industry's
                                            leading NBFCs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div
                                    class="in_tool it-3 r-12 fbox-7  flex-column text-center justify-content-center border-0 bg--green-100 h-100 fbox--hover mb-0">
                                    <div class="in_tool-logo-wrap">
                                        <div class="in_tool-logo ico-60">
                                            <div class="fbox-ico ico-50">
                                                <div class="shape-ico color--theme">
                                                    <img class="img-fluid"
                                                        src="{{ asset('front/images/100%-Online-Process-new.png') }}"
                                                        alt="content-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="in_tool-txt text-center">
                                        <h6 class="s-20 w-700 lh-base mt-0">100% Online Process</h6>
                                        <p>Sit back and experience premium financial consultation and services – all
                                            just a tap away.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div
                                    class="in_tool it-3 r-12 fbox-7  flex-column text-center justify-content-center border-0 bg--green-100 h-100 fbox--hover mb-0">
                                    <div class="in_tool-logo-wrap">
                                        <div class="in_tool-logo ico-60">
                                            <div class="fbox-ico ico-50">
                                                <div class="shape-ico color--theme">
                                                    <img class="img-fluid"
                                                        src="{{ asset('front/images/Expert-Financial-Consultation-new.png') }}"
                                                        alt="content-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="in_tool-txt text-center">
                                        <h6 class="s-20 w-700 lh-base mt-0">Expert Financial Consultation </h6>
                                        <p>Get expert guidance to help you make better decisions and move forward with
                                            clarity.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div
                                    class="in_tool it-3 r-12 fbox-7  flex-column text-center justify-content-center border-0 bg--green-100 h-100 fbox--hover mb-0">
                                    <div class="in_tool-logo-wrap">
                                        <div class="in_tool-logo ico-60">
                                            <div class="fbox-ico ico-50">
                                                <div class="shape-ico color--theme">
                                                    <img class="img-fluid"
                                                        src="{{ asset('front/images/Your-Way,-Your-Choice-new.png') }}"
                                                        alt="content-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="in_tool-txt text-center">
                                        <h6 class="s-20 w-700 lh-base mt-0">Your Way, Your Choice</h6>
                                        <p>Decide your own way – apply directly or take support from an expert,
                                            whichever suits you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why lendingsathi section ends -->


<!-- Products Intro section starts -->
<section id="products" class="py-80 features-section division">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-12">
                <div class="section-title mb-40">
                    <h2 class="s-28 mb-5">Empower Your <span class="color--green-500">Financial Aspects Smartly</span>
                    </h2>
                    <p class="s-16 color--grey mt-0">Choose the plan that best meets your needs.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 text-center mb-lg-0 mb-10">
                <div class="team-member position-relative">
                    <div class="team-member-photo  text-center mb-5">
                        <div class="hover-overlay">
                            <img src="{{ asset('front/images/Quick-Self-Apply.png') }}" alt="feature-image"
                                class="img-fluid w-100">
                            <div class="item-overlay"></div>
                        </div>
                    </div>
                    <div class="txt-block left-column border border-gray border-2">
                        <h3 class="s-22 w-700 mb-0">Quick Self-Apply</h3>
                        <p class="mb-3 text-start">
                            Get quick access to a seamless online process, simple login links, and customized offers
                            from our trusted NBFC partners.
                        </p>
                        <a href="{{ route('self.apply.main') }}" class="btn r-12 btn--theme hover--tra-black mt-0">
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center feature-card-right">
                <div class="team-member position-relative">
                    <div class="team-member-photo  text-center mb-5">
                        <div class="hover-overlay">
                            <img src="{{ asset('front/images/Hire-Loan-Agent.png') }}" alt="feature-image"
                                class="img-fluid w-100">
                            <div class="item-overlay"></div>
                        </div>
                    </div>
                    <div class="txt-block left-column border border-gray border-2">
                        <h3 class="s-22 w-700 mb-0">Hire Loan Agent</h3>
                        <p class="mb-3 text-start">
                            Allow our seasoned professionals to handle the process for you, so you can proceed with ease
                            and without complications.
                        </p>
                        <a href="{{ route('loan.agent.main') }}" class="btn r-12 btn--theme hover--tra-black mt-0">
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Products Intro section ends -->


<!-- Our Partners section start  -->
<section id="integrations-2" class="py-80 integrations-section bg--green-100">
    <div class="container">
        <div class="r-12 text-center">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <h2 class="s-28 mb-5">Our <span class="color--green-500">NBFC Partners</span>
                        </h2>
                        <p class="s-16 color--grey mt-0">Working with the best to bring you the best. </p>
                    </div>
                </div>
            </div>
            @php
            $lists = nbfcsList();
            @endphp

            <div class="bank-crousel">
                <div class="row">
                    <div class="col text-center">
                        <div class="owl-carousel brands-carousel-6 emi-carousel">
                            {!! $lists['carousel'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Partners section end  -->


<!-- eligibility calculator starts -->
<section id="features-21" class="py-80 features-section division">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-10">
                <div class="section-title mb-40">
                    <h2 class="s-28 mb-5">Calculate Your <span class="color--green-500">EMI Instantly</span></h2>
                    <p class="s-16 color--grey mt-0">Plan your finances with more confidence.</p>
                </div>
            </div>
        </div>
        <div class="p-30 bg--white-100 shadow border-grey-1 r-20">
            <div class="row">
                <div class="col-md-7 order-first order-md-2">
                    <div id="emicalculatorinnerformwrapper">
                        <form id="emicalculatorform" class="comment-form">
                            <div class="form-horizontal" id="emicalculatorinnerform">
                                <div class="row">
                                    <!-- Loan Amount slider section starts -->
                                    <div class="col-md-12">
                                        <div class="row form-group lamount flex-display align-items-center">
                                            <label class="col-6 control-label s-18 w-500" for="loanamount">Loan
                                                amount</label>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text color--purple-500">₹</span>
                                                        </div>
                                                        <input class="form-control custm-box w-400" id="loanamount"
                                                            name="loanamount" value="10,00,000" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="loanamountslider"></div>
                                        <div id="loanamountsteps" class="steps">
                                            <span class="tick" style="left: 0%;">| <br>
                                                <span class="marker">50K</span>
                                            </span>
                                            <span class="tick d-none d-sm-block" style="left: 12.5%;">| <br>
                                                <span class="marker">10L</span>
                                            </span>
                                            <span class=tick style="left: 25%;">| <br>
                                                <span class=marker>20L</span>
                                            </span>
                                            <span class="tick d-none d-sm-block" style="left: 37.5%;">| <br>
                                                <span class="marker">30L</span>
                                            </span>
                                            <span class="tick" style="left: 50%;">| <br>
                                                <span class="marker">40L</span>
                                            </span>
                                            <span class="tick d-none d-sm-block" style="left: 62.5%;">| <br>
                                                <span class="marker">50L</span>
                                            </span>
                                            <span class="tick" style="left: 75%;">| <br>
                                                <span class="marker">60L</span>
                                            </span>
                                            <span class="tick d-none d-sm-block" style="left: 87.5%;">| <br>
                                                <span class="marker">70L</span>
                                            </span>
                                            <span class="tick" style="left: 100%;">| <br>
                                                <span class="marker">80L</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Loan Amount slider section ends -->
                                    <!-- Interest Rate slider section starts -->
                                    <div class="col-md-12 mt-100">
                                        <div class="row form-group lint flex-display align-items-center">
                                            <label class="col-6 s-18 w-500 control-label" for="loaninterest">Interest
                                                rate</label>
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                    <input class="form-control custm-box w-400" id="loaninterest"
                                                        name="loaninterest" value="10.5" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="loaninterestslider"></div>
                                        <div id="loanintereststeps" class="steps">
                                            <span class="tick" style="left: 0%;">| <br>
                                                <span class="marker">5</span>
                                            </span>
                                            <span class="tick" style="left: 16.67%;">| <br>
                                                <span class="marker">7.5</span>
                                            </span>
                                            <span class="tick" style="left: 33.34%;">| <br>
                                                <span class="marker">10</span>
                                            </span>
                                            <span class="tick" style="left: 50%;">| <br>
                                                <span class="marker">12.5</span>
                                            </span>
                                            <span class="tick" style="left: 66.67%;">| <br>
                                                <span class="marker">15</span>
                                            </span>
                                            <span class="tick" style="left: 83.34%;">| <br>
                                                <span class="marker">17.5</span>
                                            </span>
                                            <span class="tick" style="left: 100%;">| <br>
                                                <span class="marker">20</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Interest Rate slider section ends -->
                                    <!-- Loan Tenure slider section starts -->
                                    <div class="col-md-12 mt-100">
                                        <div class="row form-group lterm flex-display align-items-center">
                                            <label class="col-6 s-18 w-500 control-label" for="loanterm">Select EMI
                                                option</label>
                                            <div class="col-6">
                                                <div class="loantermwrapper">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend d-none">
                                                            <label class="s-14 input-group-text">
                                                                <input type="radio" class="mr-5" name="loantenure"
                                                                    id="loanyears" value="loanyears" tabindex="4"
                                                                    autocomplete="off"><span class="s-14">Yr</span>
                                                            </label>
                                                        </div>
                                                        <input class="form-control custm-box-2 w-400" id="loanterm"
                                                            name="loanterm" value="20" type="text">
                                                        <div class="input-group-prepend">
                                                            <label class="s-14 input-group-text months-input">
                                                                <input type="radio" class="mr-5 d-none"
                                                                    name="loantenure" id="loanmonths" value="loanmonths"
                                                                    tabindex="5" autocomplete="off" checked="checked">
                                                                <span class="s-14">Months</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="loantermslider"></div>
                                        <div id="loantermsteps" class="steps">
                                            <span class="tick" style="left: 0%;">| <br>
                                                <span class="marker">0</span>
                                            </span>
                                            <span class="tick" style="left: 16.67%;">| <br>
                                                <span class="marker">5</span>
                                            </span>
                                            <span class="tick" style="left: 33.33%;">| <br>
                                                <span class="marker">10</span>
                                            </span>
                                            <span class="tick" style="left: 50%;">| <br>
                                                <span class="marker">15</span>
                                            </span>
                                            <span class="tick" style="left: 66.67%;">| <br>
                                                <span class="marker">20</span>
                                            </span>
                                            <span class="tick" style="left: 83.33%;">| <br>
                                                <span class="marker">25</span>
                                            </span>
                                            <span class="tick" style="left: 100%;">| <br>
                                                <span class="marker">30</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Loan Tenure slider section ends -->
                                </div>
                            </div>
                            <input id="loanproduct" name="loanproduct" value type="hidden">
                            <input id="loanstartdate" name="loanstartdate" value type="hidden">
                            <input id="loanyearformat" name="loanyearformat" value type="hidden">
                            <input id="loandata" name="loandata" value type="hidden">
                            <input id="calcversion" name="calcversion" value=4.0 type="hidden">
                        </form>
                        <div class="row gutter-left gutter-right d-none">
                            <div id="emipaymentsummary" class="col-sm-5 col-md-6 no-gutter-left no-gutter-right">
                                <div id="emiamount">
                                    <h4>Loan EMI</h4>
                                    <p>₹ <span>24,959</span>
                                    </p>
                                </div>
                                <div id="emitotalinterest">
                                    <h4>Total Interest Payable</h4>
                                    <p>₹ <span>34,90,279</span>
                                    </p>
                                </div>
                                <div id="emitotalamount" class="column-last">
                                    <h4>Total Payment <br>(Principal + Interest) </h4>
                                    <p>₹ <span>59,90,279</span>
                                    </p>
                                </div>
                            </div>
                            <div id="emipiechart"
                                class="d-none no-gutter-left no-gutter-right col-sm-7 col-md-6 highcharts-container">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- display none graph and list of emi's start --}}
                <div id="emipaymentdetails" class="d-none">
                    <form class="gutter-left gutter-right form-horizontal">
                        <div class="row form-group" id="emipaymentscheduleheader">
                            <label class="col-md-4 col-lg-5 control-label" for="startmonthyear">Schedule showing EMI
                                payments starting from</label>
                            <div class="col-md-4 col-lg-3">
                                <div class="input-group">
                                    <input class="form-control" id="startmonthyear" name="startmonthyear" value
                                        type="text">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 form-group lyearformat">
                                <select class="form-control" tabindex="15" name="yearformat" id="yearformat">
                                    <option value="calendaryear" selected="selected">Calendar Year wise</option>
                                    <option value="financialyear">Financial Year wise</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div id="emibarchart" class="hidden-ts highcharts-container"></div>
                    <div id="emipaymenttable"></div>
                </div>
                {{-- display none graph and list of emi's end --}}
                <div class="col-md-5 order-last order-md-2 emi-details">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="p-4 text-center border-bottom">
                                <h6 class="card-title mb-3">Your monthly instalment:</h6>
                                <h2 class="mb-0 text-center s-40 color--purple-500" id="emiamount">₹<span>888</span>
                                </h2>
                            </div>
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted s-15">Total interest</span>
                                    <span id="emitotalinterest">₹<span>656</span></span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted s-15">Principal amount</span>
                                    <span id="principalamount">₹<span>10,000</span></span>
                                </div>
                                <hr style="border:1px dashed grey">
                                <div class="d-flex justify-content-between mb-4">
                                    <span class="s-16">Total amount</span>
                                    <span id="emitotalamount">₹<span>10,000</span></span>
                                </div>
                                <a href="{{ route('loan.agent.main') }}"
                                    class="btn btn--green-400 hover--tra-black w-100">Apply for loan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- eligibility calculator ends -->

<!-- Quick and swift steps section starts -->
<section id="features-2" class="pt-0 pb-80 features-section division">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-40">
                    <h2 class="s-28 mb-5">How it <span class="color--green-500">works!</span></h2>
                    <p class="s-16 color--grey mt-0">6 simple steps to get started.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                <div class="statistic-5-wrapper mb-md-0 mb-4">
                    <div class="row g-3">
                        <div class="col-md-6 col-12">
                            <div class="col sec-1 bg--green-100 p-md-5 p-4 r-12">
                                <div id="sb-5-1" class="text-start sb-5-1 mb-0">
                                    <div class="statistic-block">
                                        <div class="statistic-digit">
                                            <h2 class="s-30 w-700 mb-10 ">
                                                <span class="count-element">5500</span>+
                                            </h2>
                                        </div>
                                        <div class="statistic-txt">
                                            <h5 class="s-16 w-500 ">Happy Customer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="col sec-1 bg--green-100 p-md-5 p-4 r-12">
                                <div id="sb-5-1" class="text-start sb-5-1 mb-0">
                                    <div class="statistic-block">
                                        <div class="statistic-digit">
                                            <h2 class="s-30 w-700 mb-10 ">
                                                <span class="count-element">4</span>Cr+
                                            </h2>
                                        </div>
                                        <div class="statistic-txt">
                                            <h5 class="s-16 w-500 ">Disbursal</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="col sec-1 bg--green-100 p-md-5 p-4 r-12">
                                <div id="sb-5-1" class="text-start sb-5-1 mb-0">
                                    <div class="statistic-block">
                                        <div class="statistic-digit">
                                            <h2 class="s-30 w-700 mb-10 ">
                                                <span class="count-element">8</span>+
                                            </h2>
                                        </div>
                                        <div class="statistic-txt">
                                            <h5 class="s-16 w-500 ">NBFC Partners</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="col sec-1 bg--green-100 p-md-5 p-4 r-12">
                                <div id="sb-5-1" class="text-start sb-5-1 mb-0">
                                    <div class="statistic-block">
                                        <div class="statistic-digit">
                                            <h2 class="s-30 w-700 mb-10 ">
                                                <span class="count-element">100</span>+
                                            </h2>
                                        </div>
                                        <div class="statistic-txt">
                                            <h5 class="s-16 w-500 ">Digital Process</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="fbox-wrapper text-center bg-dark p-4 r-12 text-white">
                    <div class="row g-3 row-cols-1 row-cols-md-1 row-cols-lg-1">
                        <div class="col d-flex">
                            <div class="fbox--hover fb-1 r-12 w-100 h-100 d-flex">
                                <div class="fbox-ico ico-30 mb-0">
                                    <div class="shape-ico text-white">
                                        <span class="flaticon-mobile-search"></span>
                                    </div>
                                </div>
                                <div class="fbox-txt text-start ms-3">
                                    <p class="mt-0">Begin the process by entering your mobile number, bank-registered
                                        name,
                                        and
                                        other necessary information. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col d-flex">
                            <div class="fbox--hover fb-1 r-12 w-100 h-100 d-flex">
                                <div class="fbox-ico ico-30 mb-0">
                                    <div class="shape-ico text-white">
                                        <span class="flaticon-computer"></span>
                                    </div>
                                </div>
                                <div class="fbox-txt text-start ms-3">
                                    <p class="mt-0">Our system will determine your eligibility and display pre-approved
                                        offers.
                                        This is not the final offer.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col d-flex">
                            <div class="fbox--hover fb-1 r-12 w-100 h-100 d-flex">
                                <div class="fbox-ico ico-30 mb-0">
                                    <div class="shape-ico text-white">
                                        <span class="flaticon-credit-card"></span>
                                    </div>
                                </div>
                                <div class="fbox-txt text-start ms-3">
                                    <p class="mt-0">To gain access to the pre-approved loan offers displayed, choose the
                                        plan
                                        that best suits your needs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col d-flex">
                            <div class="fbox--hover fb-1 r-12 w-100 h-100 d-flex">
                                <div class="fbox-ico ico-30 mb-0">
                                    <div class="shape-ico text-white">
                                        <span class="flaticon-time"></span>
                                    </div>
                                </div>
                                <div class="fbox-txt text-start ms-3">
                                    <p class="mt-0">Within 24 to 48 hours, our team will contact you for verification
                                        and
                                        guide
                                        you with the required documents.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col d-flex">
                            <div class="fbox--hover fb-1 r-12 w-100 d-flex">
                                <div class="fbox-ico ico-30 mb-0">
                                    <div class="shape-ico text-white">
                                        <span class="flaticon-check-1"></span>
                                    </div>
                                </div>
                                <div class="fbox-txt text-start ms-3">
                                    <p class="mt-0">The NBFC will evaluate your profile and documents in accordance with
                                        their
                                        procedures and guidelines.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col d-flex">
                            <div class="fbox--hover fb-1 r-12 w-100 d-flex">
                                <div class="fbox-ico ico-30 mb-0">
                                    <div class="shape-ico text-white">
                                        <span class="flaticon-profits"></span>
                                    </div>
                                </div>
                                <div class="fbox-txt text-start ms-3">
                                    <p class="mt-0">The NBFC will make the final decision regarding approval, sanction,
                                        and
                                        disbursement based on their policies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Quick and swift steps section end -->


<!-- Testimonioals section starts -->
<section id="reviews-1" class="py-80 reviews-section bg--green-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-7-img ps-0 text-center mb-md-0 mb-4 mt-0">
                    <img src="{{ asset('front/images/Customers-Say.png') }}" alt="lendingsathi" class="img-fluid p-0">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title mb-40 text-start">
                    <h2 class="s-28 mb-5">What Our <span class="color--green-500">Customers Say</span></h2>
                    <p class="s-16 color--grey mt-0">Hear it firsthand from the experiences. </p>
                </div>
                <!-- Testimonials carousel start  -->
                @include('partials.front.testimonials')
                <!-- Testimonials carousel end  -->
            </div>
        </div>
    </div>
</section>
<!-- Testimonioals section ends -->

<!-- Contact Start -->
<section id="contact" class="py-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 py-md-0 py-4 order-md-1 order-1">
                <div class="h-100">
                    <div class="card shadow border h-100">
                        <div class="card-body">
                            <p class="w-400 mb-20">
                                Fill out the form below and you'll hear from us soon.
                            </p>
                            <form method="post" action="{{ route('front.contact.us.store') }}"
                                class="contact-form career-form" enctype="multipart/form-data">
                                <div class="row gx-2 gy-2">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-floating">
                                            <input id="form_name" name="fullname" type="text"
                                                class="form-control name mb-0" placeholder="">
                                            <label for="firstname">Full Name *</label>
                                        </div>
                                        @component('components.ajax-error',['field'=>'fullname'])@endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-floating">
                                            <input id="form_mobile" type="text" name="mobile"
                                                class="numeric-input mb-0 form-control mobile" placeholder=""
                                                minlength="10" maxlength="10" inputmode="numeric">
                                            <label for="form_mobile">Mobile *</label>
                                        </div>
                                        @component('components.ajax-error',['field'=>'mobile'])@endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-floating">
                                            <input id="form_email" type="email" name="email"
                                                class="mb-0 form-control email" placeholder="">
                                            <label for="form_email">Email *</label>
                                        </div>
                                        @component('components.ajax-error',['field'=>'email'])@endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-floating">
                                            <input id="form_subject" type="text" name="subject"
                                                class="mb-0 form-control subject" placeholder="">
                                            <label for="form_subject">Subject *</label>
                                        </div>
                                        @component('components.ajax-error',['field'=>'subject'])@endcomponent
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group form-floating">
                                            <textarea id="form_message" name="desc" class="mb-0 form-control message"
                                                placeholder="" style="height: 150px"></textarea>
                                            <label for="form_message">Message *</label>
                                        </div>
                                        @component('components.ajax-error',['field'=>'desc'])@endcomponent
                                    </div>
                                    <div class="col-12 text-start">
                                        <button type="submit" class="s-14 btn btn--green-400 hover--tra-black submit"
                                            id="submit-btn">Submit Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 md-mb-50 order-md-2 order-2">
                <div class="card shadow border h-100 p-4">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="section-title mb-40 text-start border-bottom pb-3">
                                    <h2 class="s-28 mb-5">Let's <span class="color--green-500">Connect!</span></h2>
                                    <p class="description mt-0 s-16 color--grey">Drop us a message, and our team will
                                        get in
                                        touch with
                                        you shortly!</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="address-item mb-3">
                                    <div class="address-text d-flex">
                                        <div class="card-small-icon border rounded-circle bg--green-100">
                                            <div class="fbox-ico ico-25 mb-0">
                                                <div class="shape-ico text-dark">
                                                    <span class="flaticon-map text-dark"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0 s-16"> Address </h6>
                                            <p class="address-txt">{{ env('COMPANY_ADDRESS') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="address-item mb-3">
                                    <div class="address-text d-flex">
                                        <div class="card-small-icon border rounded-circle bg--green-100">
                                            <div class="fbox-ico ico-25 mb-0">
                                                <div class="shape-ico text-dark">
                                                    <span class="flaticon-mobile-search text-dark"></span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0 s-16"> Customer Support </h6>
                                            <p class="address-txt"><a
                                                    href="tel:{{ str_ireplace(" ","",env('COMPANY_MOBILE')) }}">{{ env('COMPANY_MOBILE') }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="address-item mb-3">
                                    <div class="address-text d-flex">
                                        <div class="card-small-icon border rounded-circle bg--green-100">
                                            <div class="fbox-ico ico-25 mb-0">
                                                <div class="shape-ico text-dark">
                                                    <span class="flaticon-email text-dark"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0 s-16"> Mail Us </h6>
                                            <p class="address-txt"><a
                                                    href="mailto:{{ str_ireplace(" ","",env('COMPANY_SUPPORT_MAIL')) }}">{{ env('COMPANY_SUPPORT_MAIL') }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="address-item">
                                    <div class="address-text d-flex">
                                        <div class="card-small-icon border rounded-circle bg--green-100">
                                            <div class="fbox-ico ico-25 mb-0">
                                                <div class="shape-ico text-dark">
                                                    <span class="flaticon-24-hours text-dark"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0 s-16"> Working Hours </h6>
                                            <p class="address-txt">
                                                Monday to Saturday: 10:00 AM - 5:00 PM<br>
                                                Sunday: Closed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact End -->

{{-- Wlecome message modal show here --}}
@if($msg->status == 1)
<div class="modal fade myModal" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row p-3">
                    <p>{!! $msg->content ?? 'N/A' !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@push('script-src')
<script type="text/javascript" src="{{ asset('front/calc/calccore.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/calc/mouse.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/calc/slider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/calc/commoncalculator.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/calc/emicalculator.js') }}"></script>
@endpush

@push('scripts')
<script src="{{ asset('front/js/home.js') }}" type="text/javascript"></script>
@if($msg->status == 1)
<script>
$(document).ready(function() {
    setTimeout(function() {
        $(".myModal:not(.auto-off)").modal("show");
    }, 3600);
})
</script>
@endif

<script>
const routes = {
    'selfapply': "{{ route('self.apply.send.otp') }}",
    'loan-agent': "{{ route('loan.agent.send.otp') }}"
};

document.addEventListener('DOMContentLoaded', () => {
    const faqs = document.querySelectorAll('#faq-container li');
    const loadMoreButton = document.getElementById('load-more-faq');
    const viewLessButton = document.getElementById('view-less-faq');
    let visibleCount = 5; // Number of FAQs initially shown
    const batchSize = 5; // Number of FAQs to show on each click

    // Initial setup: Show the first 7 FAQs
    faqs.forEach((faq, index) => {
        if (index >= visibleCount) {
            faq.style.display = 'none';
        }
    });

    // Event listener for Load More button
    loadMoreButton.addEventListener('click', () => {
        const hiddenFaqs = Array.from(faqs).filter(faq => faq.style.display === 'none');
        for (let i = 0; i < batchSize && i < hiddenFaqs.length; i++) {
            hiddenFaqs[i].style.display = 'list-item';
        }

        // Show the "View Less" button once more items are displayed
        if (hiddenFaqs.length > 0) {
            viewLessButton.style.display = 'inline-block';
        }

        // Hide the "Load More" button if no more FAQs to show
        if (hiddenFaqs.length <= batchSize) {
            loadMoreButton.style.display = 'none';
        }
    });

    // Event listener for View Less button
    viewLessButton.addEventListener('click', () => {
        faqs.forEach((faq, index) => {
            if (index >= visibleCount) {
                faq.style.display = 'none';
            }
        });

        // Reset button visibility
        loadMoreButton.style.display = 'inline-block';
        viewLessButton.style.display = 'none';
    });
});

$(document).ready(function() {
    $(".contact-form").submit(function(e) {
        let status = document.activeElement.innerHTML;
        e.preventDefault();
        if (status) {
            $('.ajax-error').html('');
            let data = new FormData(this);
            $.ajax({
                url: $(this).attr("action"),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("#submit-btn").html(
                        '<span class="spinner-border spinner-border-sm"></span> Submit Request '
                    )
                    $("#submit-btn").attr('disabled', true);
                },
                success: function(result) {
                    $(this).attr("disabled", false);
                    if (result.type === 'SUCCESS') {
                        toastr.success(result.message);
                        setTimeout(function() {
                            location.reload();
                        }, 3000);
                    } else {
                        toastr.error(result.message);
                        $('#submit-btn').html('Submit Request');
                        $('#submit-btn').attr('disabled', false);
                    }
                },
                error: function(error) {
                    $(this).attr("disabled", false);
                    let errors = error.responseJSON.errors,
                        errorsHtml = '';
                    $.each(errors, function(key, value) {
                        errorsHtml = '<strong>' + value[0] + '</strong>';
                        $('.' + key).html(errorsHtml);
                    });
                    $('#submit-btn').html('Submit Request');
                    $('#submit-btn').attr('disabled', false);
                }
            });
        }
    });
});
</script>
@endpush