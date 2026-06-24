@extends('layouts.front')
@push('css')
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('style-css')
@endpush
@section('content')
<section class="page-hero-section">
    <div class="page-hero-section-overlay bg--green-100 bg--scroll">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="left-column">
                        <span class="section-id"></span>
                        <h2 class="s-28 mb-5">Frequently Asked Questions</h2>
                        <p class="s-16 color--grey mt-0">
                            Find quick answers to common questions about loans, applications, eligibility, and our financial services.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faqs-3" class="py-80 faqs-section">
    <div class="container">
        <div class="faqs-3-questions">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12">
                    <div class="accordion-wrapper">
                        <ul class="accordion">
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">1. What can a personal loan be used for?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>
                                                A personal loan can be used to cover almost any personal financial need, such as medical bills, education, home improvements, and debt consolidation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">2. What are the eligibility criteria to apply for a personal loan?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>The eligibility criteria for a personal loan are the following:</p>
                                            <p><strong>For Salaried Professionals:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Minimum Age: 21 Years</p>
                                                <p>&bull; Minimum Salary: Rs.15,000 Per Month (Should reflect in the bank statement) </p>
                                                <p>&bull; Minimum Job Duration: 1 Year</p>
                                            </div>
                                            <p><strong>For Self-Employed Individuals:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Minimum Age: 21 Years</p>
                                                <p>&bull; Income Tax Return Of Minimum 1 Year</p>
                                                <p>&bull; Minimum Business Duration: 1 Year</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">3. What documents are required to apply for a personal loan? </h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>The following are the general documents required to apply for a personal loan.</p>
                                            <p><strong>For Salaried:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Aadhaar Card</p>
                                                <p>&bull; PAN Card</p>
                                                <p>&bull; Residence Proof: Rent agreement or Utility bills</p>
                                                <p>&bull; Bank Statement </p>
                                                <p>&bull; Income Proof: Salary Slips or Form 16 </p>
                                            </div>
                                            <p><strong>For Self-Employed:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Aadhaar Card</p>
                                                <p>&bull; PAN Card</p>
                                                <p>&bull; Residence Proof: Rent agreement or Utility bills</p>
                                                <p>&bull; Bank Statement </p>
                                                <p>&bull; Balance Sheet </p>
                                                <p>&bull; Income Computation</p>
                                                <p>&bull; Service Tax Registration, License, Registration Certificate</p>
                                                <p>&bull; Income Tax Returns </p>
                                            </div>
                                            <p>Based on your profile and the guidelines, the lender may request additional documents. </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">4. Is credit score a factor in personal loan approval?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>
                                                Yes, your credit score is an important factor in the loan application process; it is one of the most important factors that lenders use to determine your creditworthiness.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">5. What steps can I take to increase my chances of getting a personal loan?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>To improve your chances, maintain a good credit score, have consistent income, and provide accurate documentation during the application process.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">6. In addition to credit scores, what other factors do lenders consider when approving personal loans?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>In addition to the credit score, lenders consider the applicant's age, income, and employment stability. </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="divider">
@endsection
@push('script-src')
@endpush
@push('scripts')
@endpush