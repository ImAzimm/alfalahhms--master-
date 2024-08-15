<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins/table/datatable/datatables.css')}}">
        @vite(['resources/scss/light/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/light/plugins/table/datatable/custom_dt_custom.scss'])
        @vite(['resources/scss/dark/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/dark/plugins/table/datatable/custom_dt_custom.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Patient</a></li>
                <li class="breadcrumb-item active" aria-current="page">Treatment Lists</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    
    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <div class="row p-4 g-3">
                        <h5 class="strong-title">Patient Information</h5>
                        
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

                    <!-- Table for index -->
                    <div class="row px-4 g-3">
                        <h5 class="strong-title">Dialysis Treatment History</h5>
                    </div>
                    <table id="style-1" class="table style-1 dt-table-hover non-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column dt-no-sorting"> Record no. </th>
                                <th>Date</th>
                                <th>Dialysis Duration</th>
                                <th>Pre-Weight</th>
                                <th>Post-Weight</th>
                                <th class="">EPO</th>
                                <th class="dt-no-sorting">Recorded By</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <td class="user-name">14/8/2024</td>
                                <td class="">
                                    4 hours
                                </td>
                                <td>36.1</td>
                                <td>36.0</td>
                                <td>2000</td>
                                <td class="">Dr Husin</td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <td class="user-name">14/8/2024</td>
                                <td class="">
                                    4 hours
                                </td>
                                <td>36.1</td>
                                <td>36.0</td>
                                <td>2000</td>
                                <td class="">Dr Husin</td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <td class="user-name">14/8/2024</td>
                                <td class="">
                                    4 hours
                                </td>
                                <td>36.1</td>
                                <td>36.0</td>
                                <td>2000</td>
                                <td class="">Dr Husin</td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <td class="user-name">14/8/2024</td>
                                <td class="">
                                    4 hours
                                </td>
                                <td>36.1</td>
                                <td>36.0</td>
                                <td>2000</td>
                                <td class="">Dr Husin</td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <td class="user-name">14/8/2024</td>
                                <td class="">
                                    4 hours
                                </td>
                                <td>36.1</td>
                                <td>36.0</td>
                                <td>2000</td>
                                <td class="">Dr Husin</td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <td class="user-name">14/8/2024</td>
                                <td class="">
                                    4 hours
                                </td>
                                <td>36.1</td>
                                <td>36.0</td>
                                <td>2000</td>
                                <td class="">Dr Husin</td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <td class="user-name">14/8/2024</td>
                                <td class="">
                                    4 hours
                                </td>
                                <td>36.1</td>
                                <td>36.0</td>
                                <td>2000</td>
                                <td class="">Dr Husin</td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <td class="user-name">14/8/2024</td>
                                <td class="">
                                    4 hours
                                </td>
                                <td>36.1</td>
                                <td>36.0</td>
                                <td>2000</td>
                                <td class="">Dr Husin</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script type="module" src="{{asset('plugins/global/vendors.min.js')}}"></script>
        @vite(['resources/assets/js/custom.js'])
        <script type="module" src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
        
        <script type="module">
            // var e;
            const c1 = $('#style-1').DataTable({
                headerCallback:function(e, a, t, n, s) {
                    e.getElementsByTagName("th")[0].innerHTML=`
                    <div class="form-check form-check-primary d-block">
                        <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                    </div>`
                },
                columnDefs:[{
                    targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                        return `
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>`
                    }
                }],
                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                   "sLengthMenu": "Results :  _MENU_",
                },
                "lengthMenu": [5, 10, 20, 50],
                "pageLength": 10
            });
    
            multiCheck(c1);
    
            const c2 = $('#style-2').DataTable({
                headerCallback:function(e, a, t, n, s) {
                    e.getElementsByTagName("th")[0].innerHTML=`
                    <div class="form-check form-check-primary d-block new-control">
                        <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                    </div>`
                },
                columnDefs:[ {
                    targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                        return `
                        <div class="form-check form-check-primary d-block new-control">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>`
                    }
                }],
                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                   "sLengthMenu": "Results :  _MENU_",
                },
                "lengthMenu": [5, 10, 20, 50],
                "pageLength": 10 
            });
    
            multiCheck(c2);
    
            const c3 = $('#style-3').DataTable({
                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                   "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [5, 10, 20, 50],
                "pageLength": 10
            });
    
            multiCheck(c3);
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>