<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smart Parking System</title>

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
            }
            .btnCss:hover{
                background-color: #004280;
                color:#F9BE57;
            }
            .spanCss{
                color:#004280;
                font-weight:bold;
            }
            @media screen and (min-width:768px) and (max-width:1000px) {
                .rowInIpad{
                    display: block;
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

            <div class="row mb-3 pt-3">
                <div class="col-md-12">
                    <div class="stepper-wrapper">
                        <div class="stepper-item completed active">
                            <div class="step-counter">1</div>
                            <div class="step-name">Select Dates</div>
                        </div>
                        <div class="stepper-item">
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

            <div class="row pt-5">
                <div class="col-md-12">
                    <div class="card" style="-webkit-box-shadow: 0px 55px 30px -40px rgb(0 0 0 / 20%);
                    -moz-box-shadow: 0px 55px 30px -40px rgb(0 0 0 / 20%);
                    box-shadow: 0px 55px 30px -40px rgb(0 0 0 / 20%);padding:10px;">
                        <div class="card-body">
                            <form id="onSubmitForm">
                                <div class="row rowInIpad">
                                    <div class="col mb-3">
                                        <label style="color:#004280;">Entry Date And Time</label>
                                        <input type="datetime-local" class="form-control date1" placeholder="Enter Start Date">
                                    </div>
                                    <div class="col mb-3">
                                        <label style="color:#004280;">Exit Date And Time</label>
                                        <input type="datetime-local" class="form-control date2" placeholder="Enter Start Date">
                                    </div>
                                    <div class="col mb-3">
                                        <label style="color:#004280;">Select Car Park</label>
                                        <select name="area" id="area" class="form-control">
                                            <option selected disabled>-- Car Park --</option>
                                            <option value="Alexandria">Alexandria</option>
                                            <option value="Cairo">Cairo</option>
                                            <option value="Giza">Giza</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btnCss form-control" style="height:70px;">
                                            <span style="spanCss">Get My Quote</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3411.8380803478667!2d29.948866784337877!3d31.22521508146823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c4ebdc465347%3A0xfa56018750778b92!2z2K7ZhNmK2YQg2KfZhNiu2YrYp9i32Iwg2YLYs9mFINiz2YrYr9mJINis2KfYqNix2Iwg2KfZhNil2LPZg9mG2K_YsdmK2Kk!5e0!3m2!1sar!2seg!4v1642323910303!5m2!1sar!2seg" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
        
        </div>
       
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

        <script type="application/javascript">
            $('#onSubmitForm').on('submit' , function(e){
                e.preventDefault();
                window.location.href="/parking";
            });
        </script>
   
    </body>
</html>
