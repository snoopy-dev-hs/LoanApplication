@extends("backend.layout.master")

@section("title", "Show")

@push("styles")
    <style>
        #bu-branch {
            outline: none;
            /*border-radius: unset;*/
            /*border-bottom: 1px solid #222222;*/
        }

        #bu-branch:focus {
            outline: none;
        }

    </style>
@endpush

@section("contents")
    <section class="card card-cascade narrower">
        <form action="{{route("loan.review.update", $personal->id)}}" method="post">
            @csrf

            <div class="view view-cascade gradient-card-header blue-gradient mb-3">
                <h2>Loan Application Form</h2>
            </div>
            {{-- Personal Details --}}
            <div class="card-header">
                <h4>Personal Details</h4>
            </div>
            <div class="card-body">
                {{-- row 1 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_name_kh" id="per-name-kh" class="form-control form-control-lg"
                                   value="{{$personal->name_kh}}" style="font-size: 20px;" disabled>
                            <label for="per-name-kh" class="">Name Khmer</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_name_en" id="per-name-en" class="form-control form-control-lg"
                                   value="{{$personal->name_en}}" disabled>
                            <label for="per-name-en" class="">Name English</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="date" name="per_dob" id="per-dob" class="form-control form-control-lg"
                                   value="{{$personal->dob}}" disabled>
                            <label for="per-dob" class="">Date of Birth</label>
                        </div>
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_gender" id="per-iden-no" class="form-control form-control-lg"
                                   value="{{$personal->gender == "female" ? "Female" : "Male"}}" disabled>
                            <label for="per-iden-no" class="">Gender</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_iden_no" id="per-iden-no" class="form-control form-control-lg"
                                   value="{{$personal->identity_no}}" disabled>
                            <label for="per-iden-no" class="">Identity No</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="date" name="per_expiry_date" id="per-expiry-date"
                                   class="form-control form-control-lg" value="{{$personal->expiry_date}}" disabled>
                            <label for="per-expiry-date" class="">Expiry Date</label>
                        </div>
                    </div>
                </div>

                {{-- row 3 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_department" id="per-dep" class="form-control form-control-lg"
                                   value="{{$personal->department}}" style="font-size: 20px;" disabled>
                            <label for="per-dep" class="">Department</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_position" id="per-pos" class="form-control form-control-lg"
                                   value="{{$personal->position}}" disabled>
                            <label for="per-pos" class="">Position</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_marital_status" id="per-marital-status"
                                   class="form-control form-control-lg"
                                   value="{{$personal->marital_status == "single" ? "Signle" : "Married"}}" disabled>
                            <label for="per-marital-status" class="">Marital Status</label>
                        </div>
                    </div>
                </div>

                {{-- row 4 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_mobile_phone" id="per-mobile-phone"
                                   class="form-control form-control-lg" value="{{$personal->mobile_phone}}"
                                   style="font-size: 20px;" disabled>
                            <label for="per-mobile-phone" class="">Mobile Phone</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_home_phone" id="per-home-phone"
                                   class="form-control form-control-lg" value="{{$personal->home_phone}}" disabled>
                            <label for="per-home-phone" class="">Home Phone</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_email" id="per-email" class="form-control form-control-lg"
                                   value="{{$personal->email}}" disabled>
                            <label for="per-email" class="">Email Address</label>
                        </div>
                    </div>
                </div>

                {{-- row 5 --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="per_monthly_income" id="per-monthly-income"
                                   class="form-control form-control-lg" value="{{$personal->monthly_income}}"
                                   style="font-size: 20px;" disabled>
                            <label for="fper-monthly-income" class="">Monthly Income</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="per_total_income" id="per-total-income"
                                   class="form-control form-control-lg" value="{{$personal->total_income}}"
                                   style="font-size: 20px;" disabled>
                            <label for="per-total-income" class="">Total Income</label>
                        </div>
                    </div>
                </div>

                {{-- row 6 --}}
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <!-- Basic textarea -->
                        <div class="md-form md-outline">
                            <textarea type="text" name="per_address" id="per-address" class="md-textarea form-control"
                                      rows="3" disabled>{{$personal->address}}</textarea>
                            <label for="per-address">Address</label>
                        </div>

                    </div>

                    <div class="col-md-6 mb-4">
                        <!-- Basic textarea -->
                        <div class="md-form md-outline">
                            <textarea type="text" name="per_mortgage" id="per-mortgage" class="md-textarea form-control"
                                      rows="3" disabled>{{$personal->mortgage}}</textarea>
                            <label for="per-mortgage">Mortgage</label>
                        </div>

                    </div>
                </div>

            </div>

            {{-- Guarantor Details --}}
            <div class="card-header">
                <h4 class="mt-2">Guarantor Details</h4>
            </div>
            <div class="card-body">
                {{-- row 1 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_name_kh" id="gu-name-kh" class="form-control form-control-lg"
                                   value="{{$guarantor->name_kh}}" style="font-size: 20px;" disabled>
                            <label for="gu-name-kh" class="">Name Khmer</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_name_en" id="gu-name-en" class="form-control form-control-lg"
                                   value="{{$guarantor->name_en}}" disabled>
                            <label for="gu-name-en" class="">Name English</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="date" name="gu_dob" id="gu-dob" class="form-control form-control-lg"
                                   value="{{$guarantor->dob}}" disabled>
                            <label for="gu-dob" class="">Date of Birth</label>
                        </div>
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="row">

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_gender" id="gu-gender" class="form-control form-control-lg"
                                   value="{{$guarantor->gender == "female" ? "Female" : "Male"}}" disabled>
                            <label for="gu-gender" class="">Gender</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_iden_no" id="gu-iden_no" class="form-control form-control-lg"
                                   value="{{$guarantor->identity_no}}" disabled>
                            <label for="gu-iden_no" class="">Identity No</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="date" name="gu_expiry_date" id="gu-expiry-date"
                                   class="form-control form-control-lg" value="{{$guarantor->expiry_date}}" disabled>
                            <label for="gu-expiry-date" class="">Expiry Date</label>
                        </div>
                    </div>
                </div>

                {{-- row 3 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_department" id="gu-dep" class="form-control form-control-lg"
                                   value="{{$guarantor->department}}" style="font-size: 20px;" disabled>
                            <label for="gu-dep" class="">Department</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_position" id="gu-pos" class="form-control form-control-lg"
                                   value="{{$guarantor->position}}" disabled>
                            <label for="gu-pos" class="">Position</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_marital_status" id="gu-marital-status"
                                   class="form-control form-control-lg"
                                   value="{{$guarantor->marital_status == "single" ? "Single" : "Married"}}" disabled>
                            <label for="gu-marital-status" class="">Marital Status</label>
                        </div>
                    </div>
                </div>

                {{-- row 4 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_mobile_phone" id="gu-mobile-phone"
                                   class="form-control form-control-lg" value="{{$guarantor->mobile_phone}}"
                                   style="font-size: 20px;" disabled>
                            <label for="gu-mobile-phone" class="">Mobile Phone</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_home_phone" id="gu-home-phone"
                                   class="form-control form-control-lg" value="{{$guarantor->home_phone}}" disabled>
                            <label for="gu-home-phone" class="">Home Phone</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_email" id="gu-email" class="form-control form-control-lg"
                                   value="{{$guarantor->email}}" disabled>
                            <label for="gu-email" class="">Email Address</label>
                        </div>
                    </div>
                </div>

                {{-- row 5 --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_monthly_income" id="gu-monthly-income"
                                   class="form-control form-control-lg" value="{{$guarantor->monthly_income}}"
                                   style="font-size: 20px;" disabled>
                            <label for="gu-monthly-income" class="">Monthly Income</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_total_income" id="gu-total-income"
                                   class="form-control form-control-lg" value="{{$guarantor->total_income}}"
                                   style="font-size: 20px;" disabled>
                            <label for="gu-total-income" class="">Total Income</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <!-- Basic textarea -->
                        <div class="md-form md-outline">
                            <textarea type="text" name="gu_address" id="gu-address" class="md-textarea form-control"
                                      rows="3" disabled>{{$guarantor->address}}</textarea>
                            <label for="gu-address">Address</label>
                        </div>

                    </div>

                    <div class="col-md-6 mb-4">
                        <!-- Basic textarea -->
                        <div class="md-form md-outline">
                            <textarea type="text" name="gu_mortgage" id="gu-mortgage" class="md-textarea form-control"
                                      rows="3" disabled>{{$guarantor->mortgage}}</textarea>
                            <label for="gu-mortgage">Mortgage</label>
                        </div>

                    </div>
                </div>

            </div>

            {{-- Loan Details --}}
            <div class="card-header">
                <h4 class="mt-2">Loan Details</h4>
            </div>
            <div class="card-body">
                {{-- row 1 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="ld_amount" id="ld-amount" class="form-control form-control-lg"
                                   value="{{$ld->amount}}" style="font-size: 20px;" disabled>
                            <label for="ld-amount" class="">Amount ($)</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="ld_interest" id="ld-interest" class="form-control form-control-lg"
                                   value="{{$ld->interest}}" disabled>
                            <label for="ld-interest" class="">Interest (%)</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="ld_term" id="ld-term" class="form-control form-control-lg"
                                   value="{{$ld->term}}" disabled>
                            <label for="ld-term" class="">Term (Month)</label>
                        </div>
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form md-outline">
                            <textarea type="text" name="ld_purpose" id="ld-purpose" class="md-textarea form-control"
                                      rows="3" disabled>{{$ld->purpose}}</textarea>
                            <label for="ld-purpose">Purpose</label>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Bank Use --}}
            <div class="card-header">
                <h4 class="mt-2">Bank Use</h4>
            </div>
            <div class="card-body">
                {{-- row 1 --}}
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="bu_branch" id="bu-branch" class="form-control form-control-lg"
                                   list="branch-list" autocomplete="off"
                                   @foreach($branches as $branch) @if($branch->slug == $bu->branch) value="{{$branch->branch_name}}"
                                   @endif @endforeach disabled>
                            <label for="bu-branch">Branch</label>
                            <datalist id="branch-list">

                            </datalist>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="bu_app_code" id="bu-app-code" class="form-control form-control-lg"
                                   value="{{$bu->application_code}}" disabled>
                            <label for="bu-app-code" class="">Application Code</label>
                        </div>
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="bu_staff_name" id="bu-staff-name"
                                   class="form-control form-control-lg" style="font-size: 20px;"
                                   value="{{$bu->staff_name}}" disabled>
                            <label for="bu-staff-name" class="">Staff Name</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="date" name="bu_receive_date" id="bu-receive-date"
                                   class="form-control form-control-lg" value="{{$bu->receive_date}}" disabled>
                            <label for="bu-receive-date" class="">Receive Date</label>
                        </div>
                    </div>
                </div>

            </div>

            @if($personal->status == 1 && Request::segment(2) == "admin")
                <div class="card-header">
                    <h4 class="mt-2">Approval Loan</h4>
                </div>
                <div class="row mt-2 mb-3">
                    <div class="col-md-6 d-flex justify-content-center">
                        <button type="submit" name="submit" class="btn btn-danger w-75" value="reject">Reject</button>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <button type="submit" name="submit" class="btn btn-success w-75" value="approve">Approve</button>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route("loan.index") }}" type="button" class="btn btn-danger w-100">Cancel</a>
                        </div>
                    </div>
                </div>
            @endif

        </form>
    </section>

@endsection

@push("scripts")

    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });

        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').materialSelect();
        });

        /// For Date Picker
        // $("#per-dob").datepicker();


    </script>


@endpush
