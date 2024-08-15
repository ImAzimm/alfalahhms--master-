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
        <link rel="stylesheet" href="{{asset('plugins/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/filepond/FilePondPluginImagePreview.min.css')}}">
        @vite(['resources/scss/light/plugins/filepond/custom-filepond.scss'])
        @vite(['resources/scss/dark/plugins/filepond/custom-filepond.scss'])
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
                <li class="breadcrumb-item"><a href="#">Treatment</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form</li>
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
                            <h4>Lab Test Result</h4>
                        </div>                                                           
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="patient" class="form-label"><h4 class="strong-title">Select Patient</h4></label>
                            <select id="patient" class="form-select">
                                <option selected disabled>Choose Patient...</option>
                                <option>Wan</option>
                                <option>Anip</option>
                                <option>Mirul</option>
                            </select>
                        </div>   
                    </div>

                    <hr>

                    <!-- Demographic patient -->
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

                    <section class="row g-3">
                        <h4 class="strong-title">Lab Test Result</h4>
                        <div class="col-md-12">
                            <label for="doctor" class="form-label">Uploaded By</label>
                            <input id="doctor" class="form-control" type="text" value="Dr Husin" disabled>
                        </div>   
                        <div class="col-md-12">
                            <label for="recorder" class="form-label">Vendor</label>
                            <input id="recorder" class="form-control" type="text" value="Vendor A" disabled>
                        </div>   
                        <div class="col-md-12">
                            <label for="date" class="form-label">Date</label>
                            <input id="dateTimeFlatpickr" value="" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date.." required>
                        </div>
                        <div class="col-md-12">
                            <label for="date" class="form-label">Lab Test File Report</label>
                            <embed src="{{ asset('dummy-files/sample pdf.pdf') }}" type="application/pdf" width="100%" height="600px">
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </div>
    
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script type="module" src="{{asset('plugins/flatpickr/flatpickr.js')}}"></script>
        <script type="module" src="{{asset('plugins/flatpickr/custom-flatpickr.js')}}"></script>
        <script src="{{asset('plugins/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginFileValidateType.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImageExifOrientation.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImagePreview.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImageCrop.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImageResize.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImageTransform.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/filepondPluginFileValidateSize.min.js')}}"></script>
        <script src="{{asset('js/multifilepond.js')}}"></script>
        <script>
            multifiles.addFiles("{{Vite::asset('resources/images/list-blog-style-2.jpeg')}}");
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>