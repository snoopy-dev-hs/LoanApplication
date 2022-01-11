@extends("backend.layout.master")

@section("title", "Create")

@push("styles")

@endpush

@section("contents")
    <form action="{{ route("loan.store") }}" method="POST">
        @csrf
        <section class="section card">
            {{-- Personal Details --}}
            <div class="card-header">
                <h1 class="text-center">Loan Application Form</h1>
                <h4>Personal Details</h4>
            </div>
            <div class="card-body">
                {{-- row 1 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_name_kh" id="per-name-kh" class="form-control form-control-lg" style="font-size: 20px;" required>
                            <label for="per-name-kh" class="">Name Khmer</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_name_en" id="per-name-en" class="form-control form-control-lg" required>
                            <label for="per-name-en" class="">Name English</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_dob" id="per-dob" class="form-control form-control-lg" required>
                            <label for="per-dob" class="">Date of Birth</label>
                        </div>
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="row">
                    <div class="col-md-4 mb-4 mt-4">
                        <select name="per_gender" class="mdb-select ">
                            <option value="" selected disabled>Select Gender</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_iden_no" id="per-iden-no" class="form-control form-control-lg" required>
                            <label for="per-iden-no" class="">Identity No</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_expiry_date" id="per-expiry-date" class="form-control form-control-lg" required>
                            <label for="per-expiry-date" class="">Expiry Date</label>
                        </div>
                    </div>
                </div>

                {{-- row 3 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_department" id="per-dep" class="form-control form-control-lg" style="font-size: 20px;" required>
                            <label for="per-dep" class="">Department</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_position" id="per-pos" class="form-control form-control-lg" required>
                            <label for="per-pos" class="">Position</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 mt-4">
                        <!-- Name -->
                        <select name="per_marital_status" class="mdb-select ">
                            <option value="" selected disabled>Select Marital Status</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                {{-- row 4 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_mobile_phone" id="per-mobile-phone" class="form-control form-control-lg" style="font-size: 20px;" req>
                            <label for="per-mobile-phone" class="">Mobile Phone</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_home_phone" id="per-home-phone" class="form-control form-control-lg" required>
                            <label for="per-home-phone" class="">Home Phone</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="per_email" id="per-email" class="form-control form-control-lg" required>
                            <label for="per-email" class="">Email Address</label>
                        </div>
                    </div>
                </div>

                {{-- row 5 --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="per_monthly_income" id="per-monthly-income" class="form-control form-control-lg" style="font-size: 20px;" required>
                            <label for="fper-monthly-income" class="">Monthly Income</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="per_total_income" id="per-total-income" class="form-control form-control-lg" style="font-size: 20px;" required>
                            <label for="per-total-income" class="">Total Income</label>
                        </div>
                    </div>
                </div>

                {{-- row 6 --}}
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <!-- Basic textarea -->
                        <div class="md-form md-outline">
                            <textarea type="text" id="form101" class="md-textarea form-control" rows="3"></textarea>
                            <label for="form101">Address</label>
                        </div>

                    </div>

                    <div class="col-md-6 mb-4">
                        <!-- Basic textarea -->
                        <div class="md-form md-outline">
                            <textarea type="text" id="form101" class="md-textarea form-control" rows="3"></textarea>
                            <label for="form101">Mortgage</label>
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
                            <input type="text" name="gu_name_kh" id="gu-name-kh" class="form-control form-control-lg" style="font-size: 20px;" required>
                            <label for="gu-name-kh" class="">Name Khmer</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_name_en" id="gu-name-en" class="form-control form-control-lg" required>
                            <label for="gu-name-en" class="">Name English</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_dob" id="gu-dob" class="form-control form-control-lg" required>
                            <label for="gu-dob" class="">Date of Birth</label>
                        </div>
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="row">
                    <div class="col-md-4 mb-4 mt-4">
                        <select name="gu_gender" class="mdb-select ">
                            <option value="" selected disabled>Select Gender</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_iden_no" id="gu-iden_no" class="form-control form-control-lg" required>
                            <label for="gu-iden_no" class="">Identity No</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_expiry_date" id="gu-expiry-date" class="form-control form-control-lg" required>
                            <label for="gu-expiry-date" class="">Expiry Date</label>
                        </div>
                    </div>
                </div>

                {{-- row 3 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_department" id="gu-dep" class="form-control form-control-lg" style="font-size: 20px;" required>
                            <label for="gu-dep" class="">Department</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_position" id="gu-pos" class="form-control form-control-lg" required>
                            <label for="gu-pos" class="">Position</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 mt-4">
                        <!-- Name -->
                        <select name="gu_marital_status" class="mdb-select">
                            <option value="" selected disabled>Select Marital Status</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                {{-- row 4 --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_mobile_phone" id="gu-mobile-phone" class="form-control form-control-lg" style="font-size: 20px;" required>
                            <label for="gu-mobile-phone" class="">Mobile Phone</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_home_phone" id="gu-home-phone" class="form-control form-control-lg" required>
                            <label for="gu-home-phone" class="">Home Phone</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_email" id="gu-email" class="form-control form-control-lg" required>
                            <label for="gu-email" class="">Email Address</label>
                        </div>
                    </div>
                </div>

                {{-- row 5 --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_monthly_income" id="gu-monthly-income" class="form-control form-control-lg" style="font-size: 20px;" required>
                            <label for="gu-monthly-income" class="">Monthly Income</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" name="gu_total_income" id="gu-total-income" class="form-control form-control-lg" style="font-size: 20px;" required>
                            <label for="gu-total-income" class="">Total Income</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <!-- Basic textarea -->
                        <div class="md-form md-outline">
                            <textarea type="text" name="gu_address" id="gu-address" class="md-textarea form-control" rows="3" required></textarea>
                            <label for="gu-address">Address</label>
                        </div>

                    </div>

                    <div class="col-md-6 mb-4">
                        <!-- Basic textarea -->
                        <div class="md-form md-outline">
                            <textarea type="text" name="gu_mortgage" id="gu-mortgage" class="md-textarea form-control" rows="3" required></textarea>
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
                            <input type="text" id="f2" class="form-control form-control-lg" style="font-size: 20px;">
                            <label for="f2" class="">Amount</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form md-outline">
                            <input type="text" id="f2" class="form-control form-control-lg">
                            <label for="f2" class="">Interest</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="md-form md-outline">
                            <input type="text" id="f2" class="form-control form-control-lg">
                            <label for="f2" class="">Term</label>
                        </div>
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form md-outline">
                            <textarea type="text" id="form101" class="md-textarea form-control" rows="3"></textarea>
                            <label for="form101">Purpose</label>
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
                    <div class="col-md-12">
                        <div class="md-form md-outline">
                            <input type="text" id="f2" class="form-control form-control-lg">
                            <label for="f2" class="">Application Code</label>
                        </div>
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" id="f2" class="form-control form-control-lg" style="font-size: 20px;">
                            <label for="f2" class="">Staff Name</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="md-form md-outline">
                            <input type="text" id="f2" class="form-control form-control-lg">
                            <label for="f2" class="">Receive Date</label>
                        </div>
                    </div>
                </div>

                {{-- Button --}}
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route("loan.index") }}" type="button" class="btn btn-danger w-100">Cancel</a>
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success w-100">Submit</button>
                    </div>
                </div>
            </div>


        </section>
    </form>
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
    </script>
@endpush