@extends("backend.layout.master")

@section("title", "Edit")

@push("styles")
    <style>
        #bu-branch {
            outline: none;
        }

        #bu-branch:focus {
            outline: none;
        }

    </style>
@endpush

@section("contents")
    <section class="card card-cascade narrower">
        <form action="{{route("loan.update", $personal->id)}}" method="POST">
            @csrf
            <div class="view view-cascade gradient-card-header blue-gradient mb-3">
                <h2>Loan Application Form</h2>
            </div>
            {{-- Personal Details --}}
            <div class="card-header pt-4">
                <h4>Personal Details</h4>
            </div>
            <div class="card-body">
                {{-- row 1 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_name_kh" id="per-name-kh" class="form-control form-control-lg"
                                   value="{{$personal->name_kh}}" style="font-size: 20px;" required>
                            <label for="per-name-kh" class="">Name Khmer</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_name_en" id="per-name-en" class="form-control form-control-lg"
                                   value="{{$personal->name_en}}" required>
                            <label for="per-name-en" class="">Name English</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="date" name="per_dob" id="per-dob" class="form-control form-control-lg"
                                   value="{{$personal->dob}}" required>
                            <label for="per-dob" class="">Date of Birth</label>
                        </div>
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_gender" id="per-iden-no" class="form-control form-control-lg"
                                   value="{{$personal->gender == "female" ? "Female" : "Male"}}" list="per-gender-list"
                                   required>
                            <label for="per-iden-no" class="">Gender</label>
                            <datalist id="per-gender-list">
                                <option value="Female"></option>
                                <option value="Male"></option>
                            </datalist>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_iden_no" id="per-iden-no" class="form-control form-control-lg"
                                   value="{{$personal->identity_no}}" required>
                            <label for="per-iden-no" class="">Identity No</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="date" name="per_expiry_date" id="per-expiry-date"
                                   class="form-control form-control-lg" value="{{$personal->expiry_date}}" required>
                            <label for="per-expiry-date" class="">Expiry Date</label>
                        </div>
                    </div>
                </div>

                {{-- row 3 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_department" id="per-dep" class="form-control form-control-lg"
                                   value="{{$personal->department}}" style="font-size: 20px;" required>
                            <label for="per-dep" class="">Department</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_position" id="per-pos" class="form-control form-control-lg"
                                   value="{{$personal->position}}" required>
                            <label for="per-pos" class="">Position</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_marital_status" id="per-marital-status"
                                   class="form-control form-control-lg"
                                   value="{{$personal->marital_status == "single" ? "Signle" : "Married"}}"
                                   list="per-marital-status-list" required>
                            <label for="per-marital-status" class="">Marital Status</label>
                            <datalist id="per-marital-status-list">
                                <option value="Single"></option>
                                <option value="Married"></option>
                            </datalist>
                        </div>
                    </div>
                </div>

                {{-- row 4 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_mobile_phone" id="per-mobile-phone"
                                   class="form-control form-control-lg" value="{{$personal->mobile_phone}}"
                                   style="font-size: 20px;" req>
                            <label for="per-mobile-phone" class="">Mobile Phone</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_home_phone" id="per-home-phone"
                                   class="form-control form-control-lg" value="{{$personal->home_phone}}" required>
                            <label for="per-home-phone" class="">Home Phone</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_email" id="per-email" class="form-control form-control-lg"
                                   value="{{$personal->email}}" required>
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
                                   style="font-size: 20px;" required>
                            <label for="fper-monthly-income" class="">Monthly Income</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="per_total_income" id="per-total-income"
                                   class="form-control form-control-lg" value="{{$personal->total_income}}"
                                   style="font-size: 20px;" required>
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
                                      rows="3" required>{{$personal->address}}</textarea>
                            <label for="per-address">Address</label>
                        </div>

                    </div>

                    <div class="col-md-6 mb-4">
                        <!-- Basic textarea -->
                        <div class="md-form md-outline">
                            <textarea type="text" name="per_mortgage" id="per-mortgage" class="md-textarea form-control"
                                      rows="3" required>{{$personal->mortgage}}</textarea>
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
                                   value="{{$guarantor->name_kh}}" style="font-size: 20px;" required>
                            <label for="gu-name-kh" class="">Name Khmer</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_name_en" id="gu-name-en" class="form-control form-control-lg"
                                   value="{{$guarantor->name_en}}" required>
                            <label for="gu-name-en" class="">Name English</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="date" name="gu_dob" id="gu-dob" class="form-control form-control-lg"
                                   value="{{$guarantor->dob}}" required>
                            <label for="gu-dob" class="">Date of Birth</label>
                        </div>
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="row">

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_gender" id="gu-gender" class="form-control form-control-lg"
                                   value="{{$guarantor->gender == "female" ? "Female" : "Male"}}" list="gu-gender-list"
                                   required>
                            <label for="gu-gender" class="">Gender</label>
                            <datalist id="gu-gender-list">
                                <option value="Female"></option>
                                <option value="Male"></option>
                            </datalist>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_iden_no" id="gu-iden_no" class="form-control form-control-lg"
                                   value="{{$guarantor->identity_no}}" required>
                            <label for="gu-iden_no" class="">Identity No</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="date" name="gu_expiry_date" id="gu-expiry-date"
                                   class="form-control form-control-lg" value="{{$guarantor->expiry_date}}" required>
                            <label for="gu-expiry-date" class="">Expiry Date</label>
                        </div>
                    </div>
                </div>

                {{-- row 3 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_department" id="gu-dep" class="form-control form-control-lg"
                                   value="{{$guarantor->department}}" style="font-size: 20px;" required>
                            <label for="gu-dep" class="">Department</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_position" id="gu-pos" class="form-control form-control-lg"
                                   value="{{$guarantor->position}}" required>
                            <label for="gu-pos" class="">Position</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_marital_status" id="gu-marital-status"
                                   class="form-control form-control-lg"
                                   value="{{$guarantor->marital_status == "single" ? "Single" : "Married"}}"
                                   list="gu-martial-status-list" required>
                            <label for="gu-marital-status" class="">Marital Status</label>
                            <datalist id="gu-martial-status-list">
                                <option value="Single"></option>
                                <option value="Married"></option>
                            </datalist>
                        </div>
                    </div>
                </div>

                {{-- row 4 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_mobile_phone" id="gu-mobile-phone"
                                   class="form-control form-control-lg" value="{{$guarantor->mobile_phone}}"
                                   style="font-size: 20px;" required>
                            <label for="gu-mobile-phone" class="">Mobile Phone</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_home_phone" id="gu-home-phone"
                                   class="form-control form-control-lg" value="{{$guarantor->home_phone}}" required>
                            <label for="gu-home-phone" class="">Home Phone</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_email" id="gu-email" class="form-control form-control-lg"
                                   value="{{$guarantor->email}}" required>
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
                                   style="font-size: 20px;" required>
                            <label for="gu-monthly-income" class="">Monthly Income</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_total_income" id="gu-total-income"
                                   class="form-control form-control-lg" value="{{$guarantor->total_income}}"
                                   style="font-size: 20px;" required>
                            <label for="gu-total-income" class="">Total Income</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <!-- Basic textarea -->
                        <div class="md-form md-outline">
                            <textarea type="text" name="gu_address" id="gu-address" class="md-textarea form-control"
                                      rows="3" required>{{$guarantor->address}}</textarea>
                            <label for="gu-address">Address</label>
                        </div>

                    </div>

                    <div class="col-md-6 mb-4">
                        <!-- Basic textarea -->
                        <div class="md-form md-outline">
                            <textarea type="text" name="gu_mortgage" id="gu-mortgage" class="md-textarea form-control"
                                      rows="3" required>{{$guarantor->mortgage}}</textarea>
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
                                   value="{{$ld->amount}}" style="font-size: 20px;" required>
                            <label for="ld-amount" class="">Amount ($)</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="ld_interest" id="ld-interest" class="form-control form-control-lg"
                                   value="{{$ld->interest}}" required>
                            <label for="ld-interest" class="">Interest (%)</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="ld_term" id="ld-term" class="form-control form-control-lg"
                                   value="{{$ld->term}}" required>
                            <label for="ld-term" class="">Term (Month)</label>
                        </div>
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form md-outline">
                            <textarea type="text" name="ld_purpose" id="ld-purpose" class="md-textarea form-control"
                                      rows="3" required>{{$ld->purpose}}</textarea>
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
                            <input type="text" name="bu_branch" id="bu-branch"
                                   class="form-control form-control-lg autocomplete" list="branch-list"
                                   autocomplete="off"
                                   @foreach($branches as $branch) @if($branch->slug == $bu->branch) value="{{$branch->branch_name}}"
                                   @endif @endforeach required>
                            <label for="bu-branch">Branch</label>
                            <datalist id="branch-list">
                                @foreach ($branches as $branch)
                                    <option value="{{$branch->branch_name}}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="bu_app_code" id="bu-app-code" class="form-control form-control-lg"
                                   value="{{$bu->application_code}}" readonly>
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
                                   value="{{$bu->staff_name}}" required>
                            <label for="bu-staff-name" class="">Staff Name</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="date" name="bu_receive_date" id="bu-receive-date"
                                   class="form-control form-control-lg" value="{{$bu->receive_date}}" required>
                            <label for="bu-receive-date" class="">Receive Date</label>
                        </div>
                    </div>
                </div>

                {{-- Button --}}
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route("loan.index") }}" type="button" class="btn btn-danger w-100">Cancel</a>
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success w-100">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection

@push("scripts")
    <script

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

        var options = [
            {data: 'female', value: 'Female'},
            {data: 'male', value: 'Male'},
        ];

        $(function () {
            $('.autocomplete').autocomplete({
                lookup: options,
                onSelect: function (suggestion) {
                    $('#selected_option').html(suggestion.value);
                },
            });


        });

    </script>


@endpush
