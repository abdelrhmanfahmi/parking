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
            .btnCssDates{
                background-color: #F0F2F8;
                color:#004280;
                width:250px;
                height:60px;
            }
            .btnCssDates:hover{
                color:#F9BE57;
                background-color: #004280;
            }
            .btnCssCustomer{
                color:#004280;
                background-color: #F9BE57;
                width:250px;
                height:60px;
            }
            .btnCssCustomer:hover{
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
            }
            .cardTop{
                position: sticky;
                top:0;
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
                        <div class="stepper-item">
                            <div class="step-counter">3</div>
                            <div class="step-name">Customer Details</div>
                        </div>
                        <div class="stepper-item">
                            <div class="step-counter">4</div>
                            <div class="step-name">Booking Summary</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-3 pt-5">
                <div class="col-md-3 mb-5">
                    <div class="card cardTop" style="-webkit-box-shadow: 0px 55px 30px -40px rgb(0 0 0 / 20%);
                    -moz-box-shadow: 0px 55px 30px -40px rgb(0 0 0 / 20%);
                    box-shadow: 0px 55px 30px -40px rgb(0 0 0 / 20%);">
                        <div class="card-body">
                            <p style="color:#004280;">Booking Dates</p>
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
                            <div>
                                <p style="color:#004280;font-weight:bold;" class="pt-4">Booking Period</p>
                                <br>
                                <p style="color:#556677;">1 Hours</p>
                            </div>
                            <br>
                            <div class="mb-5">
                                <p style="color:#004280;font-weight: bold;">Order Summary</p>
                            </div>
                            <hr>
                            <div class="d-flex bd-highlight">
                                <p style="color:#004280;font-weight: bold;" class="p-2 flex-grow-1 bd-highlight">Total</p>
                                <p class="p-2 bd-highlight TotalCount">EGP0.00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <h4 style="color:#004280;font-weight:bold;">Parking Space</h4>
                    <p class="mb-5">4 Results Found</p>
                    
                    <div class="card mb-3" style="background-color:#F0F2F8;">
                        <div class="row no-gutters">
                          <div class="col-md-2">
                            <img src="{{ asset('assets/images/cycle.jpg') }}" class="card-img cardImgs" alt="">
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12 d-flex bd-highlight">
                                        <div class="p-2 flex-grow-1 bd-highlight">
                                            <h4 style="color:#004280;font-weight:bold;">Two-Wheeled</h4>
                                            <p style="color:#333;">Alexandria <a href="/" style="color:#004280;">More details</a></p>
                                        </div>
                                        <div class="p-2 bd-highlight">
                                            <h1 class="Prices" style="color:#004280;font-weight:bold;">EGP5.00</h1>
                                        </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-4 d-flex bd-highlight">
                                        <div class="p-2 flex bd-highlight d-flex align-items-center">
                                            <i class="fa fa-home" style="color:#004280;"></i>
                                        </div>
                                            <div class="p-2 flex-fill bd-highlight">
                                                <span style="color:#004280;font-size:12px;">PARKING SPACE</span>
                                                <br>
                                                <span style="color:#556677;font-size:16px;">1.2x2.8 m</span>
                                            </div>
                                    </div>
                                    <div class="col-md-4 d-flex bd-highlight">
                                        <div class="p-2 flex bd-highlight d-flex align-items-center">
                                            <i class="fa fa-home" style="color:#004280;"></i>
                                        </div>
                                            <div class="p-2 flex-fill bd-highlight">
                                                <span style="color:#004280;font-size:12px;">SPACE AVAILABLE</span>
                                                <br>
                                                <span style="color:#556677;font-size:16px;">15 of 15 available</span>
                                            </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center justify-content-end">
                                        <button type="submit" id="submitForm" class="btn btnCss form-control">
                                            <span style="spanCss">select</span>
                                        </button>
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                    <br>

                    <div class="card mb-3" style="background-color:#F0F2F8;">
                        <div class="row no-gutters">
                          <div class="col-md-2">
                            <img src="{{ asset('assets/images/car.jpeg') }}" class="card-img cardImgs" alt="">
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12 d-flex bd-highlight">
                                        <div class="p-2 flex-grow-1 bd-highlight">
                                            <h4 style="color:#004280;font-weight:bold;">Regular Car</h4>
                                            <p style="color:#333;">Alexandria <a href="/" style="color:#004280;">More details</a></p>
                                        </div>
                                        <div class="p-2 bd-highlight">
                                            <h1 class="Prices" style="color:#004280;font-weight:bold;">EGP5.00</h1>
                                        </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-4 d-flex bd-highlight">
                                        <div class="p-2 flex bd-highlight d-flex align-items-center">
                                            <i class="fa fa-home" style="color:#004280;"></i>
                                        </div>
                                            <div class="p-2 flex-fill bd-highlight">
                                                <span style="color:#004280;font-size:12px;">PARKING SPACE</span>
                                                <br>
                                                <span style="color:#556677;font-size:16px;">1.2x2.8 m</span>
                                            </div>
                                    </div>
                                    <div class="col-md-4 d-flex bd-highlight">
                                        <div class="p-2 flex bd-highlight d-flex align-items-center">
                                            <i class="fa fa-home" style="color:#004280;"></i>
                                        </div>
                                            <div class="p-2 flex-fill bd-highlight">
                                                <span style="color:#004280;font-size:12px;">SPACE AVAILABLE</span>
                                                <br>
                                                <span style="color:#556677;font-size:16px;">15 of 15 available</span>
                                            </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center justify-content-end">
                                        <button type="submit" id="submitForm" class="btn btnCss form-control">
                                            <span style="spanCss">select</span>
                                        </button>
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    <br>

                    <div class="card mb-3" style="background-color:#F0F2F8;">
                        <div class="row no-gutters">
                          <div class="col-md-2">
                            <img src="{{ asset('assets/images/van.jpeg') }}" class="card-img cardImgs" alt="">
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12 d-flex bd-highlight">
                                        <div class="p-2 flex-grow-1 bd-highlight">
                                            <h4 style="color:#004280;font-weight:bold;">Van</h4>
                                            <p style="color:#333;">Alexandria <a href="/" style="color:#004280;">More details</a></p>
                                        </div>
                                        <div class="p-2 bd-highlight">
                                            <h1 class="Prices" style="color:#004280;font-weight:bold;">EGP5.00</h1>
                                        </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-4 d-flex bd-highlight">
                                        <div class="p-2 flex bd-highlight d-flex align-items-center">
                                            <i class="fa fa-home" style="color:#004280;"></i>
                                        </div>
                                            <div class="p-2 flex-fill bd-highlight">
                                                <span style="color:#004280;font-size:12px;">PARKING SPACE</span>
                                                <br>
                                                <span style="color:#556677;font-size:16px;">1.2x2.8 m</span>
                                            </div>
                                    </div>
                                    <div class="col-md-4 d-flex bd-highlight">
                                        <div class="p-2 flex bd-highlight d-flex align-items-center">
                                            <i class="fa fa-home" style="color:#004280;"></i>
                                        </div>
                                            <div class="p-2 flex-fill bd-highlight">
                                                <span style="color:#004280;font-size:12px;">SPACE AVAILABLE</span>
                                                <br>
                                                <span style="color:#556677;font-size:16px;">15 of 15 available</span>
                                            </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center justify-content-end">
                                        <button type="submit" id="submitForm" class="btn btnCss form-control">
                                            <span style="spanCss">select</span>
                                        </button>
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    <br>

                    <div class="card mb-3" style="background-color:#F0F2F8;">
                        <div class="row no-gutters">
                          <div class="col-md-2">
                            <img src="{{ asset('assets/images/bus.jpeg') }}" class="card-img cardImgs" alt="">
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12 d-flex bd-highlight">
                                        <div class="p-2 flex-grow-1 bd-highlight">
                                            <h4 style="color:#004280;font-weight:bold;">Bus</h4>
                                            <p style="color:#333;">Alexandria <a href="/" style="color:#004280;">More details</a></p>
                                        </div>
                                        <div class="p-2 bd-highlight">
                                            <h1 class="Prices" style="color:#004280;font-weight:bold;">EGP5.00</h1>
                                        </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-4 d-flex bd-highlight">
                                        <div class="p-2 flex bd-highlight d-flex align-items-center">
                                            <i class="fa fa-home" style="color:#004280;"></i>
                                        </div>
                                            <div class="p-2 flex-fill bd-highlight">
                                                <span style="color:#004280;font-size:12px;">PARKING SPACE</span>
                                                <br>
                                                <span style="color:#556677;font-size:16px;">1.2x2.8 m</span>
                                            </div>
                                    </div>
                                    <div class="col-md-4 d-flex bd-highlight">
                                        <div class="p-2 flex bd-highlight d-flex align-items-center">
                                            <i class="fa fa-home" style="color:#004280;"></i>
                                        </div>
                                            <div class="p-2 flex-fill bd-highlight">
                                                <span style="color:#004280;font-size:12px;">SPACE AVAILABLE</span>
                                                <br>
                                                <span style="color:#556677;font-size:16px;">15 of 15 available</span>
                                            </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center justify-content-end">
                                        <button type="submit" id="submitForm" class="btn btnCss form-control">
                                            <span style="spanCss">select</span>
                                        </button>
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                    <br>

                    <h4 style="color:#004280;font-weight:bold;">Add-on options</h4>
                    <div class="card" style="background-color:#F0F2F8; padding:10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="d-flex bd-highlight">
                                        <p class="p-2 flex-grow-1 bd-highlight" style="color:#004280;">City Center Transfer</p>
                                        <p class="p-2 bd-highlight" style="color:#004280;">+EGP7.50 per quantity</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="color:#333;">Take advantage of the shuttle service from the car park to the city center. The price depends on the number of people.</p>
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 d-flex justify-content-center">
                                    <button type="submit" disabled id="submitForm" class="btn btnCssMinus form-control">
                                        <span style="spanCss">-</span>
                                    </button>
                                    <input type="text" name="value" disabled id="value" class="form-control inputValue">
                                    <button type="submit" disabled id="submitForm" class="btn btnCssPlus form-control">
                                        <span style="spanCss">+</span>
                                    </button>
                                </div>
                                <div class="col-md-2 inWidthMobile d-flex">
                                    <button type="submit" id="submitForm" class="btn btnCss form-control">
                                        <span style="spanCss">select</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="card" style="background-color:#F0F2F8; padding:10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="d-flex bd-highlight">
                                        <p class="p-2 flex-grow-1 bd-highlight" style="color:#004280;">Protection Cover</p>
                                        <p class="p-2 bd-highlight" style="color:#004280;">+EGP20.00 per quantity</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="color:#333;">Hailproof tarpaulin for entire stay.</p>
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 d-flex justify-content-center">
                                    <button type="submit" disabled id="submitForm" class="btn btnCssMinus form-control">
                                        <span style="spanCss">-</span>
                                    </button>
                                    <input type="text" name="value" disabled id="value" class="form-control inputValue">
                                    <button type="submit" disabled id="submitForm" class="btn btnCssPlus form-control">
                                        <span style="spanCss">+</span>
                                    </button>
                                </div>
                                <div class="col-md-2 inWidthMobile d-flex">
                                    <button type="submit" id="submitForm" class="btn btnCss form-control">
                                        <span style="spanCss">select</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="card" style="background-color:#F0F2F8; padding:10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="d-flex bd-highlight">
                                        <p class="p-2 flex-grow-1 bd-highlight" style="color:#004280;">Exterior Car Wash</p>
                                        <p class="p-2 bd-highlight" style="color:#004280;">+EGP29.50 per entire period</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p style="color:#333;">Want to return home from your trip to a gorgeous, clean car? Get your car cleaned whilst you park. The service includes exterior wash and dry by hand, tyres glossed and protective wax.</p>
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 d-flex justify-content-center">
                                    <button type="submit" disabled id="submitForm" class="btn btnCssMinus form-control">
                                        <span style="spanCss">-</span>
                                    </button>
                                    <input type="text" name="value" disabled id="value" class="form-control inputValue">
                                    <button type="submit" disabled id="submitForm" class="btn btnCssPlus form-control">
                                        <span style="spanCss">+</span>
                                    </button>
                                </div>
                                <div class="col-md-2 inWidthMobile d-flex">
                                    <button type="submit" id="submitForm" class="btn btnCss form-control">
                                        <span style="spanCss">select</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row" style="margin-bottom:5rem;">
                <div class="col-md-6 mb-3 inWidthMobile2 d-flex">
                    <button type="submit" id="submitFormDates" class="btn btnCssDates form-control">
                        <i class="fa fa-chevron-left"></i>&nbsp;&nbsp;<span style="spanCss">Select Dates</span>
                    </button>
                </div>
                <div class="col-md-6 inWidthMobile3 d-flex">
                    <button type="submit" id="submitFormCustomer" class="btn btnCssCustomer form-control">
                        <span style="spanCss">Customer Details</span>&nbsp;&nbsp;<i class="fa fa-chevron-right"></i>
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
            });
            $('#submitFormDates').on('click' , function(e){
                e.preventDefault();
                window.location.href="/";
            });
            $('#submitFormCustomer').on('click' , function(e){
                e.preventDefault();
                window.location.href="/customer";
            });

            if ($(".btnCssMinus").attr('disabled')) {
                $('.btnCssMinus').css('background-color' , '#F9BE57');
                $('.btnCssMinus').css('color' , '#004280');
            } else {
                
            }

            if ($(".btnCssPlus").attr('disabled')) {
                $('.btnCssPlus').css('background-color' , '#F9BE57');
                $('.btnCssPlus').css('color' , '#004280');
            } else {
                
            }
        </script>
   
    </body>
</html>
