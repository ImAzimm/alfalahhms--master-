<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/components/timeline.scss'])
        <link rel="stylesheet" href="{{asset('plugins/flatpickr/flatpickr.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/noUiSlider/nouislider.min.css')}}">
        @vite(['resources/scss/light/plugins/flatpickr/custom-flatpickr.scss'])
        @vite(['resources/scss/dark/plugins/flatpickr/custom-flatpickr.scss'])
        @vite(['resources/scss/light/plugins/editors/quill/quill.snow.scss'])
        @vite(['resources/scss/dark/plugins/editors/quill/quill.snow.scss'])
        <!--  END CUSTOM STYLE FILE  -->
        
        <style>
            .toggle-code-snippet { margin-bottom: 0px; }
            body.dark .toggle-code-snippet { margin-bottom: 0px; }
        </style>
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <x-slot:scrollspyConfig>
        data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100"
    </x-slot>
    
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Layouts</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    

    <div class="row">

        <div id="flLoginForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>View Patient Treatment</h4>
                        </div>                                                           
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="inputState" class="form-label"><h4 class="strong-title">Select Patient</h4></label>
                            <select id="inputState" class="form-select">
                                <option selected disabled>Choose Patient...</option>
                                <option>Wan</option>
                                <option>Anip</option>
                                <option>Mirul</option>
                            </select>
                        </div>   
                    </div>

                    <hr>

                    <div class="row g-3">
                        <h4 class="strong-title">Patient Information</h4>
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control darker-text" id="fullName" disabled value="Abu Samah Bin Md Saleh">
                        </div>
                        <div class="col-md-4">
                            <label for="nric" class="form-label">NRIC</label>
                            <input type="text" class="form-control" id="nric" disabled value="540204-04-1523">
                        </div>
                        <div class="col-md-2">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" class="form-control" id="age" disabled value="70">
                        </div>
                        <div class="col-md-3">
                            <label for="weight" class="form-label">Weight</label>
                            <input type="text" class="form-control" id="weight" disabled value="70 kg">
                        </div>
                        <div class="col-md-3">
                            <label for="height" class="form-label">Height</label>
                            <input type="text" class="form-control" id="height" disabled value="160 cm">
                        </div>
                    </div>

                    <hr>

                    <div class="row g-3">
                        <h4 class="strong-title">Treatment Form</h4>
                        {{-- DateTime --}}
                        <div class="col-md-6">
                            <label for="date" class="form-label">Date</label>
                            <input value="{{Date::now()}}" class="form-control" type="text" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="machineName" class="form-label">Machine Name</label>
                            <input type="text" id="machineName" class="form-control" name="machineName" disabled value="FX">
                        </div>
                        <div class="col-md-6">
                            <label for="dialysisDuration" class="form-label">Dialysis Duration (hours)</label>
                            <input type="text" class="form-control" id="dialysisDuration" name="dialysisDuration" disabled value="4 hours">
                        </div>
                        <div class="col-md-6">
                            <label for="ufTarget" class="form-label">UF Target</label>
                            <input type="text" class="form-control" id="ufTarget" name="ufTarget" disabled value="3.0">
                        </div>
                        <div class="col-md-6">
                            <label for="preTemperature" class="form-label">Pre-Temperature (°C)</label>
                            <input type="number" class="form-control" id="preTemperature" name="preTemperature" min="35" max="42" disabled value="36.4">
                        </div>
                        <div class="col-md-6">
                            <label for="bloodFlow" class="form-label">Blood Flow (ml/min)</label>
                            <input type="number" class="form-control" id="bloodFlow" name="bloodFlow" min="200" disabled value="250">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="">Weight (kg)</label>
                                <div class="col-md-6">
                                    <label for="preWeight" class="form-label" style="font-size: 0.8rem">Pre</label>
                                    <input type="number" class="form-control" id="preWeight" name="preWeight" disabled value="84.8">
                                </div>
                                <div class="col-md-6">
                                    <label for="postWeight" class="form-label" style="font-size: 0.8rem">Post</label>
                                    <input type="number" class="form-control" id="postWeight" name="postWeight" disabled value="82.6">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="">Dialyser Details</label>
                                <div class="col-md-6">
                                    <label for="dialyserType" class="form-label" style="font-size: 0.8rem">Type</label>
                                    <input type="text" class="form-control" id="dialyserType" name="dialyserType" disabled value="150">
                                </div>
                                <div class="col-md-6">
                                    <label for="dialyserUsage" class="form-label" style="font-size: 0.8rem">Usage</label>
                                    <input type="text" class="form-control" id="dialyserUsage" name="dialyserUsage" disabled value="S/Use">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="">Pre-Dialysis</label>
                                <div class="col-md-6">
                                    <label for="preBP" class="form-label" style="font-size: 0.8rem">BP</label>
                                    <input type="text" class="form-control" id="preBP" name="preBP" disabled value="173/75">
                                </div>
                                <div class="col-md-6">
                                    <label for="prePulse" class="form-label" style="font-size: 0.8rem">Pulse</label>
                                    <input type="text" class="form-control" id="prePulse" name="prePulse" disabled value="60">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="">Post-Dialyser</label>
                                <div class="col-md-6">
                                    <label for="postBP" class="form-label" style="font-size: 0.8rem">BP</label>
                                    <input type="text" class="form-control" id="postBP" name="postBP" disabled value="183/87">
                                </div>
                                <div class="col-md-6">
                                    <label for="postPulse" class="form-label" style="font-size: 0.8rem">Pulse</label>
                                    <input type="text" class="form-control" id="postPulse" name="postPulse" disabled value="80">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="needleSize" class="form-label">Access/Needle Size</label>
                            <input type="text" class="form-control" id="needleSize" name="needleSize" disabled value="LEFT RCF/15G">
                        </div>
                        <div class="col-md-6">
                            <label for="heparinBolus" class="form-label">Heparin Bolus/Hourly</label>
                            <input type="text" class="form-control" id="heparinBolus" name="heparinBolus" disabled value="3000IU/1000IU">
                        </div>
                        <div class="col-md-6">
                            <label for="KTV" class="form-label">KT/V</label>
                            <input type="text" class="form-control" id="KTV" name="KTV" disabled value="-">
                        </div>
                        <div class="col-md-6">
                            <label for="EPO" class="form-label">EPO (ERYSAA)</label>
                            <input type="text" class="form-control" id="EPO" name="EPO" disabled value="2000">
                        </div>
                        <div class="col-md-12">
                            <label for="Remarks" class="form-label">Remarks</label>
                            @php
                                $loremText = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui arcu, pellentesque id mattis sed, mattis semper erat. Etiam commodo arcu a mollis consequat. Curabitur pretium auctor tortor, bibendum placerat elit feugiat et. Ut ac turpis nec dui ullamcorper ornare. Vestibulum finibus quis magna at accumsan. Praesent a purus vitae tortor fringilla tempus vel non purus. Suspendisse eleifend nibh porta dolor ullamcorper laoreet. Ut sit amet ipsum vitae lectus pharetra tincidunt. In ipsum quam, iaculis at erat ut, fermentum efficitur ipsum. Nunc odio diam, fringilla in auctor et, scelerisque at lorem. Sed convallis tempor dolor eu dictum. Cras ornare ornare imperdiet. Pellentesque sagittis lacus non libero fringilla faucibus. Aenean ullamcorper enim et metus vestibulum, eu aliquam nunc placerat. Praesent fringilla dolor sit amet leo pulvinar semper.";
                            @endphp
                            <textarea name="remarks" id="remarks" class="form-control autoResizeHeight" disabled>{{$loremText}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script type="module" src="{{asset('plugins/flatpickr/flatpickr.js')}}"></script>
        <script type="module" src="{{asset('plugins/flatpickr/custom-flatpickr.js')}}"></script>
        <script type="module" src="{{asset('plugins/editors/quill/quill.js')}}"></script>
        <script type="module" src="{{asset('plugins/editors/quill/custom-quill.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>