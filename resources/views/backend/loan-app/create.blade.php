<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Static Template </title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css"
        integrity="sha512-6KY5s6UI5J7SVYuZB4S/CZMyPylqyyNZco376NM2Z8Sb8OxEdp02e1jkKk/wZxIEmjQ6DRCEBhni+gpr9c4tvA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <style>
        input:focus {
            outline: none;
        }
    </style>
</head>
<body>
<div class="container w-50">
    <h1 class="text-center mx-3"> Loan Application </h1>

    <div class="bg-dark text-light rounded py-1">
        <h2 class="mx-2 mt-1"> Personal Details </h2>
    </div>

    <div class="row">

        <div class="col-6" >
            <div class="form-group mt-2" >
                <label > Name Khmer </label > <br />
                <input type = "text" name = "per_name_kh" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Date of Birth </label > <br />
                <input type = "date" name = "per_dob" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Identity No </label > <br />
                <input type = "text" name = "per_identity_no" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Marital Status </label > <br />
                <input type = "text" name = "per_marital_status" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Department</label > <br />
                <input type = "text" name = "per_department" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Mobile Phone </label > <br />
                <input type = "text" name = "per_mobile_phone" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Monthly Income </label > <br />
                <input type = "text" name = "per_monthly_income" class="form-control" />
            </div >
        </div >



        <div class="col-6" >
            <div class="form-group mt-2" >
                <label > Name English </label > <br />
                <input type = "text" name = "per_name_en" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Age</label > <br />
                <input type = "text" name = "per_age" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Expiry Date </label > <br />
                <input type = "date" name = "per_exprire" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Child</label > <br />
                <input type = "text" name = "per_child" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Position</label > <br />
                <input type = "text" name = "per_position" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Home Phone </label > <br />
                <input type = "text" name = "per_home_phone" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Total Income </label > <br />
                <input type = "text" name = "per_total_income" class="form-control" />
            </div >
        </div >
    </div >

    <div class="row" >
        <div class="form-group mt-2" >
            <label > Address</label > <br />
            <textarea
                name = "per_address"
                class="form-control"
                cols = "30"
                rows = "3"
                    ></textarea >
        </div >

        <div class="form-group mt-2" >
            <label > Mortgage</label > <br />
            <textarea
                name = "per_martgage"
                class="form-control"
                cols = "30"
                rows = "3"
                    ></textarea >
        </div >
    </div >

    <div class="bg-dark text-light rounded py-1 my-3" >
        <h2 class="mx-2 mt-1" > Guarantor Details </h2 >
    </div >

    <div class="row" >
        <div class="col-6" >
            <div class="form-group" >
                <label > Name Khmer </label > <br />
                <input type = "text" name = "gua_name_kh" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Date of Birth </label > <br />
                <input type = "date" name = "gua_dob" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Identity No </label > <br />
                <input type = "text" name = "gua_identity_no" class="form-control" />
            </div >


            <div class="form-group mt-2" >
                <label > Department</label > <br />
                <input type = "text" name = "gua_department" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Mobile Phone </label > <br />
                <input type = "text" name = "gua_mobile_phone" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Monthly Income </label > <br />
                <input type = "text" name = "gua_monthly_income" class="form-control" />
            </div >
        </div >

        <div class="col-6" >
            <div class="form-group" >
                <label > Name English </label > <br />
                <input type = "text" name = "gua_name_en" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Marital Status </label > <br />
                <input type = "text" name = "gua_marital_status" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Expiry Date </label > <br />
                <input type = "date" name = "gua_exprire" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Position</label > <br />
                <input type = "text" name = "gua_position" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Home Phone </label > <br />
                <input type = "text" name = "gua_home_phone" class="form-control" />
            </div >

            <div class="form-group mt-2" >
                <label > Total Income </label > <br />
                <input type = "text" name = "gua_total_income" class="form-control" />
            </div >
        </div >
    </div >

    <div class="row" >
        <div class="form-group mt-2" >
            <label > Address</label > <br />
            <textarea
                name = "gua_address"
                class="form-control"
                cols = "30"
                rows = "3"
                    ></textarea >
        </div >
    </div >

    <div class="bg-dark text-light rounded py-1 my-3" >
        <h2 class="mx-2 mt-1" > Loan Details </h2 >
    </div >

    <div class="row" >
        <div class="col-sm-4 form-group" >
            <label > Amount</label >
            <input type = "number" name = "ld_amount" class="form-control" />
        </div >

        <div class="col-sm-4 form-group" >
            <label > Interest</label >
            <input type = "number" name = "ld_interest" class="form-control" />
        </div >

        <div class="col-sm-4 form-group" >
            <label > Term</label >
            <input type = "number" name = "ld_amount" class="form-control" />
        </div >
    </div >

    <div class="row" >
        <div class="form-group mt-2" >
            <label > Purpose</label > <br />
            <textarea
                name = "ld_purpose"
                class="form-control"
                cols = "30"
                rows = "3"
                    ></textarea >
        </div >
    </div >

        <div class="bg-dark text-light rounded py-1 my-3">
            <h2 class="mx-2 mt-1"> Bank Use</h2>
        </div>

        <div class="row">
            <div class="form-group">
                <label> Application Code </label>
                <input type="text" name="bu_app_code" class="form-control" maxlength="20"/>

            </div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-6 form-group">
                <label> Staff Name </label>
                <input type="text" name="bu_staff_name" class="form-control" maxlength="100"/>

            </div>

            <div class="col-sm-6 form-group">
                <label> Receive Date </label>
                <input type="date" name="bu_receive_date" class="form-control"/>

            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <button type="button" class="btn btn-outline-danger mx-1 px-5"> Cancel</button>
            <button type="submit" class="btn btn-outline-primary mx-1 px-5"> Save</button>
        </div>

        <br/>

    </div>
</body>
</html>
