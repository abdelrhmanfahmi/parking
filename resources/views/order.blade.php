<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smart Parking System</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            .stepper-wrapper {
                margin-top: auto;
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
            }
            .stepper-item {
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                flex: 1;

                @media (max-width: 768px) {
                    font-size: 12px;
                }
            }

            .stepper-item::before {
                position: absolute;
                content: "";
                border-bottom: 2px solid #EAECEE;
                width: 100%;
                top: 20px;
                left: -50%;
                z-index: 2;
            }

            .stepper-item::after {
                position: absolute;
                content: "";
                border-bottom: 2px solid #EAECEE;
                width: 100%;
                top: 20px;
                left: 50%;
                z-index: 2;
            }

            .stepper-item .step-counter {
                position: relative;
                z-index: 5;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 50px;
                height: 50px;
                color:#C0C8D1;
                border-radius: 50%;
                border:2px solid #EAECEE;
                background: #fff;
                margin-bottom: 6px;
                font-size:24px;
            }

            .stepper-item .step-name{
                color: #C0C8D1;
            }

            .stepper-item.active .step-name{
                color:#004280;
            }

            .stepper-item.active .step-counter{
                color:#004280;
                border: 2px solid #004280;
            }

            .stepper-item.completed .step-counter {
                /* background-color: #EAECEE; */
            }

            .stepper-item.completed::after {
                position: absolute;
                content: "";
                border-bottom: 2px solid #004280;
                width: 100%;
                top: 20px;
                left: 50%;
                z-index: 3;
            }

            .stepper-item:first-child::before {
                content: none;
            }
            .stepper-item:last-child::after {
                content: none;
            }
            .btnCss{
                background-color:#F9BE57;
                color:#004280;
                width:150px;
                height:50px;
            }
            .btnCss:hover{
                background-color: #004280;
                color:#F9BE57;
            }
            .btnCssPlus{
                background-color:#F9BE57;
                color:#004280;
                width:50px;
                height:50px;
            }
            .btnCssPlus:hover{
                background-color: #004280;
                color:#F9BE57;
            }
            .btnCssMinus{
                background-color:#F9BE57;
                color:#004280;
                width:50px;
                height:50px;
            }
            .btnCssMinus:hover{
                background-color: #004280;
                color:#F9BE57;
            }
            .btnCssAcc{
                background-color: #F0F2F8;
                color:#004280;
                width:250px;
                height:60px;
            }
            .btnCssAcc:hover{
                color:#F9BE57;
                background-color: #004280;
            }
            .btnCssLogin{
                color:#004280;
                background-color: #F9BE57;
                width:120px;
                height:60px;
            }
            .btnCssLogin:hover{
                color:#F9BE57;
                background-color: #004280;
            }
            .btnCssLogin2{
                color:#004280;
                background-color: #F9BE57;
                width:250px;
                height:60px;
            }
            .btnCssLogin2:hover{
                color:#F9BE57;
                font-weight: bold;
                background-color: #004280;
            }
            .btnDiscount{
                color:#004280;
                background-color: #F9BE57;
                height:50px;
            }
            .btnDiscount:hover{
                color:#F9BE57;
                background-color: #004280;
            }
            .spanCss{
                color:#004280;
                font-weight:bold;
            }
            .cardImgs{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .Prices{
                color:#004280;
                font-weight: bold;
            }
            .inWidthMobile{
                justify-content: end;
            }
            .inWidthMobile2{
                justify-content: start;
            }
            .inWidthMobile3{
                justify-content: end;
            }
            .TotalCount{
                color:#004280;
                font-weight: bold;
                font-size:24px;
            }
            .inputValue{
                height:48px;
                width:50px;
            }
            .styledCheckbox{
                position: relative;
                top:12px;
            }
            #mapIFrame{
                width:400px;
                height:260px;
            }
            @media only screen and (width:1024px){
                .rowInIpad{
                    display: block;
                }
            }
            @media screen and (min-width:768px) and (max-width:1000px) {
                .TotalCount{
                    font-size:16px;
                }
                .inWidthMobile{
                    justify-content: start;
                }
                .inputValue{
                    width:38px;
                }
                .rowInIpad{
                    display:block;
                }
                #mapIFrame{
                    width:320px;
                }
            }
            @media (max-width:500px){
                .Prices{
                    font-size:29px;
                }
                .inWidthMobile{
                    justify-content: center;
                }
                .inWidthMobile2{
                    justify-content: center;
                }
                .inWidthMobile3{
                    justify-content: center;
                }
                #mapIFrame{
                    width:340px;
                }
            }
            
            @media only screen and (width:375px){
                #mapIFrame{
                    width:300px;
                }
            }
            @media only screen and (width:360px){
                #mapIFrame{
                    width:300px;
                }
            }
            @media only screen and (width:320px){
                #mapIFrame{
                    width:250px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container-fluid pt-5">
            <div class="row mb-5">
                <div class="col-md-12 pt-5">
                    <h3 class="text-center" style="color:#333;font-size:30px;">Smart Parking System</h3>
                </div>
            </div>

            <div class="row mb-3 pt-5">
                <div class="col-md-12">
                    <div class="stepper-wrapper">
                        <div class="stepper-item completed active">
                            <div class="step-counter">1</div>
                            <div class="step-name">Select Dates</div>
                        </div>
                        <div class="stepper-item completed active">
                            <div class="step-counter">2</div>
                            <div class="step-name">Parking Space</div>
                        </div>
                        <div class="stepper-item completed active">
                            <div class="step-counter">3</div>
                            <div class="step-name">Customer Details</div>
                        </div>
                        <div class="stepper-item completed active">
                            <div class="step-counter">4</div>
                            <div class="step-name">Booking Summary</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-3 pt-5">
                <div class="col-md-6 mb-5">
                    <div class="card" style="-webkit-box-shadow: 0px 55px 30px -40px rgb(0 0 0 / 20%);
                    -moz-box-shadow: 0px 55px 30px -40px rgb(0 0 0 / 20%);
                    box-shadow: 0px 55px 30px -40px rgb(0 0 0 / 20%);">
                        <div class="card-body">
                            <h4 class="mb-3" style="color:#004280;font-weight:bold;">Customer Details</h4>
                            <div class="row mb-3">
                                <div class="col">
                                    <label style="color:#004280;">First Name</label>
                                    <p style="color:#333">Abdelrhman</p>
                                </div>
                                <div class="col">
                                    <label style="color:#004280;">Last Name</label>
                                    <p style="color:#333">Fahmy</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label style="color:#004280;">E-mail Address</label>
                                    <p style="color:#333">abdo.fahmy9696@gmail.com</p>
                                </div>
                                <div class="col">
                                    <label style="color:#004280;">Mobile Number</label>
                                    <p style="color:#333">01123635566</p>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <label style="color: #004280;">Comments</label>
                                    <p style="color:#333;">Thanks</p>
                                </div>
                            </div>

                            <h4 class="mb-3" style="color:#004280;font-weight:bold;">Payment Method</h4>
                            <div class="row mb-3">
                                <div class="col">
                                    <label style="color:#004280;">Selected Payment Method</label>
                                    <p style="color:#333">Cash on delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-5" style="-webkit-box-shadow: 0px 55px 30px -40px rgb(0 0 0 / 20%);
                    -moz-box-shadow: 0px 55px 30px -40px rgb(0 0 0 / 20%);
                    box-shadow: 0px 55px 30px -40px rgb(0 0 0 / 20%);">
                        <div class="card-body">
                            <h4 class="mb-5" style="color:#004280;font-weight:bold;">Alexandria</h4>
                                    
                            <p style="color:#333;">1234</p>
                            <p style="color:#333;">الإسكندرية</p>
                            <p class="mb-5" style="color:#333;">Egypt</p>

                            <div class="row rowInIpad mb-5">
                                <div class="col-md-6 mb-3">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3411.8380803478667!2d29.948866784337877!3d31.22521508146823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c4ebdc465347%3A0xfa56018750778b92!2z2K7ZhNmK2YQg2KfZhNiu2YrYp9i32Iwg2YLYs9mFINiz2YrYr9mJINis2KfYqNix2Iwg2KfZhNil2LPZg9mG2K_YsdmK2Kk!5e0!3m2!1sar!2seg!4v1642323910303!5m2!1sar!2seg" id="mapIFrame" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <div class="col-md-6">
                                    <div style="background-color:#004280;padding:15px;" class="mb-3">
                                        <p style="color:#fff;text-align:center;">Entry Date</p>
                                        <p style="color:#fff;text-align:center;">17-01-2022 , 6.00</p>
                                    </div>
                                    {{-- <div class="vl"></div> --}}
                                    <br>
                                    <div style="padding:15px;border:2px solid #F9BE57;" class="mb-3">
                                        <p style="color:#004280;text-align:center;">Exit Date</p>
                                        <p style="color:#004280;text-align:center;">17-01-2022 , 7.00</p>
                                    </div>
                                </div>
                            </div>

                            <h4 class="mb-3" style="color:#004280;font-weight:bold;">Order Summary</h4>

                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <textarea name="code_discount" id="code_discount" class="form-control" placeholder="Do You Have A Discount Code ?" style="resize:none;" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <button type="submit" id="submitDiscountCode" class="btn btnDiscount form-control">Apply Code</button>
                                    </div>
                                </div>
                            </form>

                            <div class="mb-3 d-flex bd-highlight">
                                <p class="p-2 flex-grow-1 bd-highlight" style="color:#333;">space (1 Hour)</p>
                                <p class="p-2 bd-highlight" style="color:#333;">EGP5.00</p>
                            </div>

                            <hr>

                            <div class="d-flex bd-highlight">
                                <p class="p-2 flex-grow-1 bd-highlight" style="color:#004280;font-weight:bold;">Total</p>
                                <h5 class="p-2 bd-highlight" style="color:#004280;font-weight:bold;">EGP5.00</h5>
                            </div>
                            
                        </div>
                      </div>
                </div>
            </div>

            <div class="row pt-5" style="margin-bottom:5rem;">
                <div class="col-md-6 mb-3 inWidthMobile2 d-flex">
                    <button type="submit" id="submitFormCustomer" class="btn btnCssAcc form-control">
                        <i class="fa fa-chevron-left"></i>&nbsp;&nbsp;<span style="spanCss">Customer Details</span>
                    </button>
                </div>
                <div class="col-md-6 inWidthMobile3 d-flex">
                    <button type="submit" id="submitForm" class="btn btnCssLogin2 form-control">
                        <span style="spanCss">Book Now</span>&nbsp;&nbsp;<i class="fa fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            
        </div>
       
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

        <script type="application/javascript">
            $('#submitForm').on('click' , function(e){
                e.preventDefault();
                window.location.href="/book";
            });
            $('#submitFormCustomer').on('click' , function(e){
                e.preventDefault();
                window.location.href="/customer";
            });
            $('#submitAccount').on('click' , function(e){
                e.preventDefault();
                $('#customerDetailsShow').show();
            });
            $('#submitLogin').on('click' , function(e){
                e.preventDefault();
            });
            $('#submitDiscountCode').on('click' , function(e){
                e.preventDefault();
            });
        </script>
   
    </body>
</html>
