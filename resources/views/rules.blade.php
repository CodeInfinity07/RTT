@extends('layouts.master')
@section('content')
    <!-- ===========Banner Section start Here========== -->
    <section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
        <div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">our Rules</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Rules</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ===========Banner Section Ends Here========== -->


	<!-- ===========Partner Section Start Here========== -->
	<div class="partner-section padding-top padding-bottom">
		<div class="container">
			<div class="section-wrapper">
             <div class="alert alert-info mt-4">
                        <strong>NOTE: RULES PAR CLICK KARKE RULES KI DETAILS PRHLEN.</strong>
                    </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-12">
                        <div class="partner-list" id="accordionExample">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                    <span class="accor-title">Rule #1</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Avatar DPs ki club mai entry allowed nahi. Jo bhi member avatar dp lgake aega woh bina warning ke ban krdiya jaega.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                    <span class="accor-title">Rule #2</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Club level requirement 14 ya usse upr hai. Agr kisi bhi club ka level 14 se kam hai toh uski entry remove krdi jaegi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                    <span class="accor-title">Rule #3</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>ID level 7 se upar hona chahiye. Kisi bhi player ki id ka level 7 se kam hua toh woh player game mai allow nahi kiya jaega. Uss player ko foren replace krna hoga.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                    <span class="accor-title">Rule #4</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Main chat pr abuse ya taunt bilkul brdasht nhi kiye jaenge. Aisa member jo taunt ya abuse krega usse 2 warnings ke baad ban krdiya jaega.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="partner-list" id="accordionExample-2">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true"
                                                aria-controls="collapseFive">
                                                <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                    <span class="accor-title">Rule #5</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseFive" class="accordion-collapse collapse"
                                            aria-labelledby="headingFive" data-bs-parent="#accordionExample-2">
                                            <div class="accordion-body">
                                                <p>Kisi bhi team ka match se pehle 5 min wait kiya jaega bas. Uske baad opponent team ko win dedi jaegi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true"
                                                aria-controls="collapseSix">
                                                <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                    <span class="accor-title">Rule #6</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseSix" class="accordion-collapse collapse"
                                            aria-labelledby="headingFive" data-bs-parent="#accordionExample-2">
                                            <div class="accordion-body">
                                                <p>Har team ka 1 admin atleast mojud hona chahiye.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true"
                                                aria-controls="collapseSeven">
                                                <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                    <span class="accor-title">Rule #7</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseSeven" class="accordion-collapse collapse"
                                            aria-labelledby="headingFive" data-bs-parent="#accordionExample-2">
                                            <div class="accordion-body">
                                                <p>Agar net connectivity ki wajah se game Disconnect hoke leave hjati hai toh samne wale ko win dedi jaegi. Issliye game join krne se pehle net connectivity ko confirm krlen.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true"
                                                aria-controls="collapseEight">
                                                <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                    <span class="accor-title">Rule #8</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseEight" class="accordion-collapse collapse"
                                            aria-labelledby="headingFive" data-bs-parent="#accordionExample-2">
                                            <div class="accordion-body">
                                                <p>Har team ko maximum 2 mics diye jaenge. Samne wali team ka admin apni team main se kisi ko bhi 2 mics dilwa skta hai.</p>
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
	</div>
	<!-- ===========Partner Section Ends Here========== -->



@endsection
