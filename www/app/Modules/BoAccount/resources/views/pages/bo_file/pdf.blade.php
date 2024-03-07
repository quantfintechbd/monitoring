<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ env("APP_NAME") ?? "BO FILE" }} {{ !empty($pageName) ? " | {$pageName}" : null }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- App favicon --> 
    <link rel="icon" href="{{ publicAsset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ publicAsset('assets/images/uftcl_icon.png') }}">
    <link rel="stylesheet" href="{{ publicAsset('assets/css/bo-file.css') }}">
</head>
<body>

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section"
                style="background-image: url('{{ publicAsset("assets/images/bo_file/front_cover.jpg") }}');    
			background-repeat: no-repeat;
            background-size: 100% 100%;
			background-position: right;">
                <!--Header Start Here -->

                <header>
                    <div class="text-right mr50 mt90">
                        <img src="{{ publicAsset('assets/images/uftcl-logo.png') }}" alt="ogo" width="100">
                        <h2 class="font-bold">UNITED FINANCIAL TRADING COMPANY LIMITED</h2>
                        <h3><b>TREC Holder:</b> Dhaka Stock Exchange Limited<br>
                            Chittagong Stock Exchange Limited</h3>
                        DSE Registration # Reg-3.1/DSE-227/2005/101, CSE Registration # Reg-3.2/CSE-43/2001/112<br>
                        TREC Holder # DSE : 227 & CSE : 043<br>
                        Full Service Depository Participant of CDBL, DP No. 31100<br>
                        Head Office: PFI Tower (2nd Floor), 56-57 Dilkusha C/A, Dhaka-1000.<br>
                        <span>
                            Phone: 02 47119237<br>
                            Hot Line : <b>01841 333028</b>
                        </span>
                    </div>
                </header>


                <div style="margin-top:80px;"></div>
                <div class="text-center ">
                    <h2 class="font-bold">CLIENT INFORMATION FILE</h2>
                </div>
                <div class="mt100 border p10" style="width: 500px; margin: 100px auto; border-radius: 4px;">
                    <table class="table-no-border  ">
                        <tr>
                            <td class="p10 "><b>Client Name:</b> <span class="border-bottom-dotted">John Deo</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="p10 ">
                                <div class="display-flex ">
                                    <b>Customer Account No. :</b>
                                </div>
                            </td>
                            <td class="rect-box-list pl10 text-center">
                                <li></li>
                                <li></li>
                                <li class="border-right"></li>
                                <li class="ml15"></li>
                                <li></li>
                                <li class="border-right"></li>
                                <li class="ml15"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </td>
                        </tr>
                        <tr>
                            <td class="p10 ">
                                <div class="display-flex ">
                                    <b>BO ID NO.</b>
                                </div>
                            </td>
                            <td class="rect-box-list pl10 text-center font-bold">
                                <li>1</li>
                                <li>2</li>
                                <li>0</li>
                                <li>3</li>
                                <li>1</li>
                                <li>1</li>
                                <li>0</li>
                                <li class="border-right">0</li>
                                <li class="ml15"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </td>
                        </tr>

                    </table>
                    <!-- end table  -->
                    <table class="table-no-border ">
                        <tr>
                            <td class="p10 ">
                                <div class="display-flex ">
                                    <b>Account Type :</b>
                                </div>
                            </td>
                            <td class="rect-box-list pl10 text-center font-bold">
                                <li class="border-right"></li>
                                <li style="no-border" style="border:none;margin-left:20px">Individual</li>

                                <li class="border-right ml25"></li>
                                <li style="no-border " style="border:none;margin-left:20px">Joint</li>

                                <li class="border-right ml25"></li>
                                <li class="no-border " style="border:none;margin-left:20px">Corporate</li>
                            </td>
                        </tr>
                    </table>
                    <!-- end table  -->
                </div>

                <div style="margin-top:150px;"></div>

                <div style="width: 450px; margin:0px auto;">
                    <div class="text-center mb10" style="width:100%">
                        <h3 class="font-bold">www.uftcl.com</h3>
                    </div>
                    <div class="text-center p5" style="border-radius: 4px; border:2px solid rgb(212, 63, 58); background-color: rgb(212, 63, 58, .2); ">
                        <h5 class="font-bold" style="color: rgb(212, 63, 58);">“শেয়ার বাজারে বিনিয়োগ ঝুঁকিপূর্ণ। জেনে ও বুঝে বিনিয়োগ করুন”</h5>
                    </div>

                </div>

            </div>
        </div>
        <!--Invoice Wrap End here -->

        <!--	 end 1 page-->

        <!--Invoice Wrap Start here -->
        <div class="invoice_wrap">
            <div class="invoice-container">
                <div class="invoice-content-wrap" id="download_section">
                    <!--Header Start Here -->

                    <header>
                        <div class="text-center">
                            <h3 class="bg-black color-white display-inline-block p5 font-bold pl10 pr10 mb5">OFFICE USE
                                ONLY</h3>
                            <h4>TWS/TRDR NO.</h4>
                        </div>
                    </header>


                    <div class="">
                        <h4>A.</h4>
                    </div>

                    <table class="table-border">

                        <tr class="bg-black-6 ">
                            <th class="width15 p8 ">Sl. No.</th>
                            <th class="width40 p8">Particulars</th>
                            <th class="width15 p8">OK</th>
                            <th class="width15 p8">Due</th>
                            <th class="width20 p8">Remarks</th>

                        </tr>
                        <tr>
                            <td class="width10 p5 text-center">1</td>
                            <td class="width40 p5">Applicant Photo (3 Copies)</td>
                            <td class="width15 p5"></td>
                            <td class="width15 p5"></td>
                            <td class="width20 p5"></td>
                        </tr>
                        <tr>
                            <td class="width10 p5 text-center">2</td>
                            <td class="width40 p5">Nominee Photo (2 Copies)</td>
                            <td class="width15 p5"></td>
                            <td class="width15 p5"></td>
                            <td class="width20 p5"></td>
                        </tr>
                        <tr>
                            <td class="width10 p5 text-center">3</td>
                            <td class="width40 p5">Authorize Person Photo (2 Copies)</td>
                            <td class="width15 p5"></td>
                            <td class="width15 p5"></td>
                            <td class="width20 p5"></td>
                        </tr>
                        <tr>
                            <td class="width10 p5 text-center">4</td>
                            <td class="width40 p5">Power of Attorney Photo (2 Copies)</td>
                            <td class="width15 p5"></td>
                            <td class="width15 p5"></td>
                            <td class="width20 p5"></td>
                        </tr>
                        <tr>
                            <td class="width10 p5 text-center">5</td>
                            <td class="width40 p5">Bank Statement / Certificate ( Orginal) / Cheque Copy</td>
                            <td class="width15 p5"></td>
                            <td class="width15 p5"></td>
                            <td class="width20 p5"></td>
                        </tr>
                        <tr>
                            <td class="width10 p5 text-center">6</td>
                            <td class="width40 p5">National ID/ Passport / Birth Certificate / Driving License
                                (Photocopy)</td>
                            <td class="width15 p5"></td>
                            <td class="width15 p5"></td>
                            <td class="width20 p5"></td>
                        </tr>
                        <tr>
                            <td class="width10 p5 text-center">7</td>
                            <td class="width40 p5" colspan="4">
                                <div class="display-flex ">
                                    Client's Phone Number: Mobile
                                    <ul class="rect-box-list pl10">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="width10 p5 text-center">8</td>
                            <td class="width40 p5" colspan="4">
                                <div class="display-flex ">
                                    Land Phone
                                    <ul class="rect-box-list pl10">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <!-- end table  -->


                    <div class="display-flex mt15 mb15">

                        <h4>B.</h4>
                        <ul class="rect-box-list pl10">
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <ul class="rect-box-list pl10">
                            <li></li>
                        </ul>
                        <ul class="rect-box-list pl10">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>

                    <table class="table-border">

                        <tr class="bg-black-6 ">
                            <th class="width20 p8">Branch Name</th>
                            <th class="width25 p8">In Change Name</th>
                            <th class="width25 p8">Short Name/ Code</th>
                            <th class="width30 p8">Signature</th>

                        </tr>
                        <tr>
                            <td class="width20 p15 text-center"></td>
                            <td class="width25 p15"></td>
                            <td class="width25 p15"></td>
                            <td class="width30 p15"></td>
                        </tr>


                    </table>
                    <!-- end table  -->

                    <div class=" mt15 ">

                        <h4>C.</h4>
                    </div>

                    <table class="table-border">

                        <tr class="bg-black-6 ">
                            <th class="width15 p8 text-left">Particulars</th>
                            <th class="width30 p8"> Name</th>
                            <th class="width25 p8">Short Name/ Code</th>
                            <th class="width30 p8">Signature</th>

                        </tr>
                        <tr>
                            <td class="width10 p8 text-left">Dealer</td>
                            <td class="width40 p8"></td>
                            <td class="width15 p8"></td>
                            <td class="width15 p8"></td>
                        </tr>
                        <tr>
                            <td class="width10 p8 text-left">Associate</td>
                            <td class="width40 p8"></td>
                            <td class="width15 p8"></td>
                            <td class="width15 p8"></td>
                        </tr>
                        <tr>
                            <td class="width10 p8 text-left">Sub Dealer</td>
                            <td class="width40 p8"></td>
                            <td class="width15 p8"></td>
                            <td class="width15 p8"></td>
                        </tr>
                        <tr>
                            <td class="width10 p8 text-left">TWS</td>
                            <td class="width40 p8"></td>
                            <td class="width15 p8"></td>
                            <td class="width15 p8"></td>
                        </tr>
                        <tr>
                            <td class="width10 p8 text-left">Traders</td>
                            <td class="width40 p8"></td>
                            <td class="width15 p8"></td>
                            <td class="width15 p8"></td>
                        </tr>


                    </table>
                    <!-- end table  -->


                    <div class=" mt25 mb10">

                        <div class="doc-content-wrap">
                            <div class="content-wrap-left">D.</div>
                            <div class="content-wrap-middle">
                                <h4><b>DP USE ONLY</b></h4>
                            </div>
                            <div class="content-wrap-right"></div>
                        </div>
                    </div>

                    <table class="table-border">

                        <tr class="bg-black-6 ">
                            <th class="width15 p8 text-left">Particulars</th>
                            <th class="width30 p8"> Name</th>
                            <th class="width25 p8">Short Name/ Code</th>
                            <th class="width30 p8">Signature with Seal</th>

                        </tr>
                        <tr>
                            <td class="width10 p8 text-left">Physically Verified By</td>
                            <td class="width40 p8"></td>
                            <td class="width15 p8"></td>
                            <td class="width15 p8"></td>
                        </tr>
                        <tr>
                            <td class="width10 p8 text-left">CDBL Entry By</td>
                            <td class="width40 p8"></td>
                            <td class="width15 p8"></td>
                            <td class="width15 p8"></td>
                        </tr>
                        <tr>
                            <td class="width10 p8 text-left">Back office Entry By</td>
                            <td class="width40 p8"></td>
                            <td class="width15 p8"></td>
                            <td class="width15 p8"></td>
                        </tr>
                        <tr>
                            <td class="width10 p8 text-left">Address Verify By</td>
                            <td class="width40 p8"></td>
                            <td class="width15 p8"></td>
                            <td class="width15 p8"></td>
                        </tr>
                        <tr>
                            <td class="width10 p8 text-left">Scan Taken By</td>
                            <td class="width40 p8"></td>
                            <td class="width15 p8"></td>
                            <td class="width15 p8"></td>
                        </tr>


                    </table>
                    <!-- end table  -->

                </div>
            </div>
        </div>
        <!--Invoice Wrap End here -->


        <!--end 2 page -->


        <!--Invoice Wrap Start here -->
        <div class="invoice_wrap">
            <div class="invoice-container">
                <div class="invoice-content-wrap" id="download_section">
                    <!--Header Start Here -->

                    <header>
                        <div class="doc-content-wrap">

                            <div class="content-wrap-middle">
                                <div class="text-center">
                                    <h3 class=" display-inline-block  font-bold">
                                        UNITED FINANCIAL TRADING COMPANY LIMITED </h3><br>
                                    <span class="font-size13">TREC Holder: Dhaka Stock Exchange Limited, Chittagong
                                        Stock Exchange Limited <br>
                                        DSE Registration # Reg-3.1/DSE-227/2005/101, CSE Registration #
                                        Reg-3.2/CSE-43/2001/112 <br>
                                        TREC Holder No-DSE: 227 & CSE : 043<br>
                                        Full Service Depository Participant of CDBL, DP No. 31100 <br>
                                        Head Office : PFI Tower (2nd Floor), 56-57 Dilkusha C/A, Dhaka-1000.</span>
                                    <h4 class="mt10"><b>CUSTOMER ACCOUNT OPENING FORM </b></h4>
                                    <h5>(For Individual Customer/Applicant: <b>Single Account)</b></h5>
                                </div>
                            </div>
                            <div class="content-wrap-right border p25 text-center box-center">
                                Photograph of<br> Customer with<br> attestation of<br>
                                the Introducer
                            </div>
                        </div>

                    </header>

                    <table class=" table-no-dborder mt20">

                        <tr>
                            <td class=" pt10 pb5">
                                <div class="display-flex ">
                                    Customer Account No.
                                    <ul class="rect-box-list pl10 text-center">
                                        <li></li>
                                        <li></li>
                                        <li class="border-right"></li>

                                        <li class="ml15 border-right"></li>

                                        <li class="ml15"></li>
                                        <li class="border-right"></li>

                                        <li class=" ml15"></li>

                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                            <td class="pt10 pb5 pr15">
                                <div class="display-flex float-right">
                                    Date:
                                    <ul class="rect-box-list pl10 text-center">
                                        <li class="ml15"></li>
                                        <li class="border-right"></li>

                                        <li class="ml15"></li>
                                        <li class="border-right"></li>

                                        <li class="ml15"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center font-bold pt20 pb10" colspan="2">[To be filled by the Applicant]
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5">
                                <div class="display-flex ">
                                    BO Account No.
                                    <ul class="rect-box-list pl10 text-center">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li class="border-right"></li>

                                        <li class="ml15"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                            <td class=" pt10 pb5">
                                <div class="display-flex float-right">
                                    Account Type: Cash
                                    <ul class="rect-box-list pl10  pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Margin
                                    <ul class="rect-box-list pl10 pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class=" pt15 pb5">
                                <div class="display-flex">
                                    Citizenship status (Please tick mark): Resident Bangladeshi <br>
                                    <ul class="rect-box-list pl10  pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Non-Resident Bangladeshi
                                    <ul class="rect-box-list pl10 pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Foreigner
                                    <ul class="rect-box-list pl10 pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                <b>Other(Please
                                    Specify):</b>.......................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                Name of the
                                Applicant/Customer:....................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                Profession:..........................................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                Father's
                                Name:...................................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                Mother's
                                Name:.................................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                Spouse's
                                Name:.................................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                Present/Contact
                                Address:................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                ............................................................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                Permanent
                                Address:.........................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                ............................................................................................................................................................................................
                            </td>
                        </tr>

                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                <div class="display-flex ">
                                    Date of Birth
                                    <ul class="rect-box-list pl10 text-center">
                                        <li></li>
                                        <li class="border-right"></li>

                                        <li class="ml15"></li>
                                        <li class="border-right"></li>

                                        <li class="ml15"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                <div class="display-flex ">
                                    Sex: Male
                                    <ul class="rect-box-list pl10  pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Female
                                    <ul class="rect-box-list pl10 pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Nationality:.......................................................................................................................
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                <div class="display-flex ">
                                    National ID/Passport/Birth Certificate/Driving License Number:
                                    <ul class="rect-box-list pl10 text-center">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class=" pt10 pb5">
                                <div class="display-flex ">
                                    Phone No.
                                    <ul class="rect-box-list pl10 text-center">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                            <td class=" pt10 pb5">
                                <div class="display-flex ">
                                    Mobile No.
                                    <ul class="rect-box-list pl10 text-center">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>

                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                E-mail
                                Address:...............................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                Whether the applicant is Officer or Sponsor/Director of any
                                Broker/Dealer/Exchange/Depository/Clearing<br> & Settlement Company/Listed Company?:
                                <div class="display-flex mt10">
                                    Yes
                                    <ul class="rect-box-list pl10  pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                    No
                                    <ul class="rect-box-list pl10 pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt10 pb5" colspan="2">
                                If yes, Please mention the name & address of the
                                Broker/Dealer/Exchange/Depository/Clearing &<br>
                                Settlement Company/Listed Company with designation of the said officer or sponsor or
                                director :
                            </td>
                        </tr>


                    </table>



                </div>
            </div>
        </div>
        <!--Invoice Wrap End here -->

        <!--end 3 page -->

        <div class="mb100"></div>

        <!--Invoice Wrap Start here -->
        <div class="invoice_wrap">
            <div class="invoice-container">
                <div class="invoice-content-wrap" id="download_section">
                    <!--Header Start Here -->


                    <b class="font-bold mt10">Nominee Details:</b>
                    <table class="table-border mt10 mb20">

                        <tr class="bg-black-6 ">
                            <th class="width15 p8">Particulars</th>
                            <th class="width35 p8">Nominee-1</th>
                            <th class="width35 p8">Nominee-2</th>

                        </tr>
                        <tr>
                            <td class="width15 p5">Name</td>
                            <td class="width35 p5">
                            </td>
                            <td class="width35 p5"></td>
                            <td class="width15 p5" rowspan="4">
                                <div class="text-center">

                                    Photograph(s)<br>
                                    of Nominee-1<br>
                                    with attestation <br>of the Customer
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="width15 p5">Father's Name :</td>
                            <td class="width35 p5">
                            </td>
                            <td class="width35 p5"></td>
                        </tr>

                        <tr>
                            <td class="width15 p5">Mother's Name :</td>
                            <td class="width35 p5">
                            </td>
                            <td class="width35 p5"></td>
                        </tr>

                        <tr>
                            <td class="width15 p5">Permanent Address :</td>
                            <td class="width35 p5 p30">
                            </td>
                            <td class="width35 p5"></td>
                        </tr>

                        <tr>
                            <td class="width15 p5">Mobile Number</td>
                            <td class="width35 p5">
                                <div class="display-flex ">
                                    <ul class="rect-box-list ">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                            <td class="width35 p5">

                                <div class="display-flex ">
                                    <ul class="rect-box-list ">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <td class="width15 p5">Email Address :</td>
                            <td class="width35 p5">
                            </td>
                            <td class="width35 p5"></td>
                            <td class="width15 p5" rowspan="4">
                                <div class="text-center">

                                    Photograph(s)<br>
                                    of Nominee-2<br>
                                    with attestation <br>of the Customer
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="width15 p5">NID/Birth Certificate/<br>Passport Number</td>
                            <td class="width35 p5">
                                <div class="display-flex ">
                                    <ul class="rect-box-list ">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                            <td class="width35 p5">

                                <div class="display-flex ">
                                    <ul class="rect-box-list ">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <td class="width15 p5">Relation with applicant</td>
                            <td class="width35 p5">
                            </td>
                            <td class="width35 p5"></td>
                        </tr>
                        <tr>
                            <td class="width15 p5">Percentage (%) of <br>Nomination</td>
                            <td class="width35 p5 text-center">%</td>
                            <td class="width35 p5 text-center">%</td>
                        </tr>

                    </table>
                    <!-- end table  -->



                    <b class="font-bold mt10">Authorized Person Details (if any):</b>
                    <table class="table-border mt10">

                        <tr>
                            <td class="width15 p5">Name</td>
                            <td class="width70 p5"></td>
                            <td class="width15 p5" rowspan="6">
                                <div class="text-center">
                                    Photograph<br> authorized<br> Person<br> attestation of<br> the Customer
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="width15 p5">Present/ <br>Contact Address</td>
                            <td class="width70 p5 p30"></td>
                        </tr>
                        <tr>
                            <td class="width15 p5">NID/Birth Certificate/<br>Passport Number</td>
                            <td class="width70 p5">
                                <div class="display-flex ">
                                    <ul class="rect-box-list ">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="width15 p5">Phone Number</td>
                            <td class="width70 p5">
                                <div class="display-flex ">
                                    <ul class="rect-box-list ">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="width15 p5">Mobile Number</td>
                            <td class="width70 p5">
                                <div class="display-flex ">
                                    <ul class="rect-box-list ">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="width15 p5">Email Address :</td>
                            <td class="width70 p5">
                            </td>
                        </tr>

                    </table>
                    <!-- end table  -->


                    <div class="mt20 mb20">
                        Source of Fund
                        details:..................................................................................................................................................
                    </div>

                    <b class="font-bold">Bank Account details:</b>
                    <table class="table-border mt10 mb10">

                        <tr>
                            <td class="width15 p5">Account Number</td>
                            <td class="width70 p5">
                                <div class="display-flex ">
                                    <ul class="rect-box-list ">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="width15 p5">Bank Name</td>
                            <td class="width70 p5"></td>
                        </tr>

                        <tr>
                            <td class="width15 p5">Branch Name</td>
                            <td class="width70 p5">
                            </td>
                        </tr>
                        <tr>
                            <td class="width15 p5">Routing No.</td>
                            <td class="width70 p5">
                                <div class="display-flex ">
                                    <ul class="rect-box-list ">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                    </table>
                    <!-- end table  -->



                </div>
            </div>
        </div>
        <!--Invoice Wrap End here -->

        <!--end 4 page -->

        <div style="margin-bottom: 200px"></div>

        <!--Invoice Wrap Start here -->
        <div class="invoice_wrap">
            <div class="invoice-container">
                <div class="invoice-content-wrap" id="download_section">
                    <!--Header Start Here -->


                    <b class="font-bold mt10">Introducer Details:</b>
                    <table class="table-border mt10 mb10">

                        <tr>
                            <td class="width15 p5">Name</td>
                            <td class="width60 p5"></td>
                            <td class="width25 p5 vertical-align-bottom " rowspan="6">
                                <div class="text-center">
                                    ........................<br>
                                    Signature of the <br>Introducer with date
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="width15 p5">Account Number</td>
                            <td class="width60 p5">
                                <div class="display-flex ">
                                    <ul class="rect-box-list ">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <ul class="rect-box-list ml15">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="width15 p5">Mobile Number</td>
                            <td class="width60 p5">
                                <div class="display-flex ">
                                    <ul class="rect-box-list ">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="width15 p5">Address</td>
                            <td class="width60  p40">
                </div>
                </td>
                </tr>


                </table>
                <!-- end table  -->

                <table class="table-no-border mt10">

                    <tr>
                        <td class="pt20 p5">
                            Have any other Customer Account (Single/Joint) with any Stock Broker(s)?
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="display-flex mt10">
                                Yes
                                <ul class="rect-box-list pl10  pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                No
                                <ul class="rect-box-list pl10 pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                If yes give details:
                            </div>
                        </td>
                    </tr>
                </table>




                <table class="table-border mt20">

                    <tr>
                        <th class="width20 p5">Clients Code No.</th>
                        <th class="width50	 p5">BO Account No.</th>
                        <th class="width30 p5">Number of Broker</th>
                    </tr>

                    <tr>
                        <td class="width20 p5"> </td>
                        <td class="width50 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <ul class="rect-box-list ml15">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <th class="width30 p5"></th>
                    </tr>
                    <tr>
                        <td class="width20 p5"> </td>
                        <td class="width50 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <ul class="rect-box-list ml15">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <th class="width30 p5"></th>
                    </tr>
                    <tr>
                        <td class="width20 p5"> </td>
                        <td class="width50 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <ul class="rect-box-list ml15">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <th class="width30 p5"></th>
                    </tr>
                    <tr>
                        <td class="width20 p5"> </td>
                        <td class="width50 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <ul class="rect-box-list ml15">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <th class="width30 p5"></th>
                    </tr>
                    <tr>
                        <td class="width20 p5"> </td>
                        <td class="width50 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <ul class="rect-box-list ml15">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <th class="width30 p5"></th>
                    </tr>
                </table>
                <!-- end table  -->

                <div class="doc-content-wrap mt70 ">
                    <div class="content-wrap-left text-center">
                        .......................................<br>
                        Signature of the Account <br> Holder with date <br>
                    </div>
                    <div class="content-wrap-right text-center">
                        .......................................<br>
                        Signature of the <br> Authorized person (if any) <br>with date
                    </div>
                </div>

                <div class="doc-content-wrap mt70 mb40">
                    <div class="content-wrap-left text-center">
                        ..............................<br>
                        Processed by
                    </div>
                    <div class="content-wrap-left text-center">
                        ..............................<br>
                        Checked by
                    </div>
                    <div class="content-wrap-right text-center">
                        ..............................<br>
                        Approved by
                    </div>
                </div>



                <table class="table-no-border ">

                    <tr>
                        <td class="pb10  p5">Name:..................................................</td>
                        <td class="	pb10  p5">Name:..................................................</td>
                        <td class=" pb10 p5">Name:..................................................</td>
                    </tr>
                    <td class="pb10  p5">Designation:........................................</td>
                    <td class="pb10 	 p5">Designation:........................................</td>
                    <td class="pb10  p5">Designation:........................................</td>
                    </tr>
                    </tr>
                    <td class="pb10  p5">Signature:............................................</td>
                    <td class="pb10 	 p5">Signature:............................................</td>
                    <td class="pb10  p5">Signature:............................................</td>
                    </tr>
                    </tr>
                    <td class="pt20 p5">
                        <div class="display-flex ">
                            Date
                            <ul class="rect-box-list pl10 text-center">
                                <li></li>
                                <li class="border-right"></li>

                                <li class="ml15"></li>
                                <li class="border-right"></li>

                                <li class="ml15"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    <td class="pt20 p5">
                        <div class="display-flex ">
                            Date
                            <ul class="rect-box-list pl10 text-center">
                                <li></li>
                                <li class="border-right"></li>

                                <li class="ml15"></li>
                                <li class="border-right"></li>

                                <li class="ml15"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    <td class="pt20 p5">
                        <div class="display-flex ">
                            Date
                            <ul class="rect-box-list pl10 text-center">
                                <li></li>
                                <li class="border-right"></li>

                                <li class="ml15"></li>
                                <li class="border-right"></li>

                                <li class="ml15"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    </tr>


                </table>
                <!-- end table  -->


            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 5 page -->

    <div class="mb100"></div>

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->

                <header>
                    <div class="doc-content-wrap">

                        <div class="content-wrap-middle">
                            <div class="text-center">
                                <h3 class=" display-inline-block  font-bold">
                                    UNITED FINANCIAL TRADING COMPANY LIMITED </h3><br>
                                <span class="font-size12">TREC Holder: Dhaka Stock Exchange Limited, Chittagong Stock
                                    Exchange Limited <br></span>
                                <span class="font-size13">DSE Registration # Reg-3.1/DSE-227/2005/101,<br> CSE
                                    Registration # Reg-3.2/CSE-43/2001/112 <br>
                                    TREC Holder No-DSE: 227 & CSE : 043<br>
                                    Full Service Depository Participant of CDBL, DP No. 31100 <br>
                                    Head Office : PFI Tower (2nd Floor), 56-57 Dilkusha C/A, Dhaka-1000.</span>
                                <h4 class="mt10"><b>CUSTOMER ACCOUNT OPENING FORM </b></h4>
                                <h5>(For Individual Customer/Applicant: <b>Joint Account)</b></h5>
                            </div>
                        </div>
                        <div class="content-wrap-right" style="display: contents;">
                            <div class=" border p5 text-center box-center mr5	">
                                Photograph of <br>Customer 1 with<br> attestation of<br>
                                the Introducer
                            </div>
                            <div class=" border p5 text-center box-center">
                                Photograph of <br>Customer 2 with<br> attestation of<br>
                                the Introducer
                            </div>
                        </div>
                    </div>

                </header>

                <table class=" table-no-dborder mt10">

                    <tr>
                        <td class=" pt5 pb5">
                            <div class="display-flex ">
                                Customer Account No.
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15 border-right"></li>

                                    <li class="ml15"></li>
                                    <li class="border-right"></li>

                                    <li class=" ml15"></li>

                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="pt5 pb5 pr15">
                            <div class="display-flex float-right">
                                Date:
                                <ul class="rect-box-list pl10 text-center">
                                    <li class="ml15"></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-bold pt5 pb10" colspan="2">[To be filled by the Applocant(s)]
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5">
                            <div class="display-flex ">
                                BO Account No.
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class=" pt5 pb5">
                            <div class="display-flex float-right">
                                Account Type: Cash
                                <ul class="rect-box-list pl10  pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                Margin
                                <ul class="rect-box-list pl10 pr10 height16 text-center">
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class=" pt5 pb5">
                            <div class="display-flex">
                                Citizenship status (Please tick mark): Resident Bangladeshi <br>
                                <ul class="rect-box-list pl10  pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                Non-Resident Bangladeshi
                                <ul class="rect-box-list pl10 pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                Foreigner
                                <ul class="rect-box-list pl10 pr10 height16 text-center">
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            <b>Other(Please
                                Specify):</b>.......................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Name of the First
                            Applicant:....................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Profession:..........................................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Father's
                            Name:...................................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Mother's
                            Name:.................................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Spouse's
                            Name:.................................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Present/Contact
                            Address:................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            ............................................................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Permanent
                            Address:.........................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            ............................................................................................................................................................................................
                        </td>
                    </tr>

                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            <div class="display-flex ">
                                Date of Birth
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            <div class="display-flex ">
                                Sex: Male
                                <ul class="rect-box-list pl10  pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                Female
                                <ul class="rect-box-list pl10 pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                Nationality:.......................................................................................................................
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            <div class="display-flex ">
                                National ID/Passport/Birth Certificate/Driving License Number:
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class=" pt5 pb5">
                            <div class="display-flex ">
                                Phone No.
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class=" pt5 pb5">
                            <div class="display-flex ">
                                Mobile No.
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>

                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            E-mail
                            Address:...............................................................................................................................................................
                        </td>
                    </tr>


                </table>

                <!-- end table  -->


                <table class=" table-no-dborder ">


                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            <b>Name of the Second
                                Applicant:</b>......................................................................................................................................
                        </td>
                    </tr>

                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Profession:..........................................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Father's
                            Name:...................................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Mother's
                            Name:.................................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Spouse's
                            Name:.................................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Present/Contact
                            Address:................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            ............................................................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Permanent
                            Address:.........................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            ............................................................................................................................................................................................
                        </td>
                    </tr>

                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            <div class="display-flex ">
                                Date of Birth
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            <div class="display-flex ">
                                Sex: Male
                                <ul class="rect-box-list pl10  pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                Female
                                <ul class="rect-box-list pl10 pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                Nationality:.......................................................................................................................
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            <div class="display-flex ">
                                National ID/Passport/Birth Certificate/Driving License Number:
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>




                </table>

                <!-- end table  -->



            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->


    <!--end 6 page -->

    <div class="mb100"></div>

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">

                <table class="table-no-border mt10 mb10">

                    <tbody>

                        <tr>
                            <td>
                                Whether the applicant is Officer or Sponsor / Director of any Broker/Dealer / Exchange /
                                Depository/ Clearing <br>
                                & Settlement Company / Listed Company?
                                <div class="display-flex mt10">
                                    Yes
                                    <ul class="rect-box-list pl10  pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                    No
                                    <ul class="rect-box-list pl10 pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt20 p5">
                                If yes, please mention the name & address of the Broker / Dealer / Exchange /
                                Depository/Clearing & <br>Settlement
                                Company / Listed Company with designation of the said officer <br>
                                or sponsor or director
                                :.............................................................................................................................
                            </td>
                        </tr>
                    </tbody>
                </table>

                <b class="font-bold mt10">Nominee Details:</b>
                <table class="table-border mt10 mb20">

                    <tr class="bg-black-6 ">
                        <th class="width15 p8">Particulars</th>
                        <th class="width35 p8">Nominee-1</th>
                        <th class="width35 p8">Nominee-2</th>

                    </tr>
                    <tr>
                        <td class="width15 p5">Name</td>
                        <td class="width35 p5">
                        </td>
                        <td class="width35 p5"></td>
                        <td class="width15 p5" rowspan="5">
                            <div class="text-center">

                                Photograph(s)<br>
                                of Nominee-1<br>
                                with attestation <br>of the<br> Customer(s)
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Profession</td>
                        <td class="width35 p5">
                        </td>
                        <td class="width35 p5"></td>
                    </tr>
                    <tr>
                        <td class="width15 p5">Father's Name </td>
                        <td class="width35 p5">
                        </td>
                        <td class="width35 p5"></td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Mother's Name </td>
                        <td class="width35 p5">
                        </td>
                        <td class="width35 p5"></td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Permanent<br> Address </td>
                        <td class="width35 p30">
                        </td>
                        <td class="width35 p5"></td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Mobile Number</td>
                        <td class="width35 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width35 p5">

                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width15 p5" rowspan="5">
                            <div class="text-center">

                                Photograph(s)<br>
                                of Nominee-2<br>
                                with attestation <br>of the <br>Customer(s)
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td class="width15 p5">Email Address </td>
                        <td class="width35 p5">
                        </td>
                        <td class="width35 p5"></td>

                    </tr>

                    <tr>
                        <td class="width15 p5">NID/Birth<br> Certificate/<br>Passport<br> Number</td>
                        <td class="width35 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list  liwidth-25">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width35 p5">

                            <div class="display-flex ">
                                <ul class="rect-box-list liwidth-25 ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>

                                </ul>
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td class="width15 p5">Relation with <br>the Customer(s)</td>
                        <td class="width35 p5">
                        </td>
                        <td class="width35 p5"></td>
                    </tr>
                    <tr>
                        <td class="width15 p5">Percentage (%)<br> of Nomination</td>
                        <td class="width35 p5 text-center">%</td>
                        <td class="width35 p5 text-center">%</td>
                    </tr>

                </table>
                <!-- end table  -->



                <b class="font-bold mt10">Authorized Person Details (if any):</b>
                <table class="table-border mt10">

                    <tr>
                        <td class="width15 p5">Name</td>
                        <td class="width70 p5"></td>
                        <td class="width15 p5" rowspan="6">
                            <div class="text-center">
                                Photograph<br> authorized<br> Person<br> attestation of<br> the Customer(s)
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Present/ <br>Contact Address</td>
                        <td class="width70 p30"></td>
                    </tr>
                    <tr>
                        <td class="width15 p5">NID/Birth Certificate/<br>Passport Number</td>
                        <td class="width70 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="width15 p5">Phone Number</td>
                        <td class="width70 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="width15 p5">Mobile Number</td>
                        <td class="width70 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Email Address :</td>
                        <td class="width70 p5">
                        </td>
                    </tr>

                </table>
                <!-- end table  -->


                <div class="mt20 mb10">
                    Source of Fund
                    details:..................................................................................................................................................
                </div>




            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 7 page -->

    <div class="mb100"></div>

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->
                <b class="font-bold">Bank Account details:</b>
                <table class="table-border mt10 mb10">

                    <tr>
                        <td class="width15 p5">Account Number</td>
                        <td class="width70 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Bank Name</td>
                        <td class="width70 p5"></td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Branch Name</td>
                        <td class="width70 p5">
                        </td>
                    </tr>
                    <tr>
                        <td class="width15 p5">Routing No.</td>
                        <td class="width70 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                </table>
                <!-- end table  -->


                <b class="font-bold mt10">Introducer Details:</b>
                <table class="table-border mt10 mb10">

                    <tr>
                        <td class="width15 p5">Name</td>
                        <td class="width60 p5"></td>
                        <td class="width25 p5 vertical-align-bottom border-top-hidden border-bottom-hidden border-right-hidden"
                            rowspan="6">
                            <div class="text-center ">
                                ........................<br>
                                Signature of the <br>Introducer with date
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Account Number</td>
                        <td class="width60 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <ul class="rect-box-list ml15">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="width15 p5">Mobile Number</td>
                        <td class="width60 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="width15 p5">Address</td>
                        <td class="width60  p40">
            </div>
            </td>
            </tr>


            </table>
            <!-- end table  -->

            <table class="table-no-border mt10">

                <tr>
                    <td class="pt10 p5">
                        Account operating instruction:(1) Singly operated, (2) Jointly operated, (3) others (specify)
                        Have any other<br>
                        Customer Account (Single/joint) with any Stock Broker(s)?
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="display-flex mt10">
                            Yes
                            <ul class="rect-box-list pl10  pr10 height16 text-center">
                                <li></li>
                            </ul>
                            No
                            <ul class="rect-box-list pl10 pr10 height16 text-center">
                                <li></li>
                            </ul>
                            If yes, give details:
                        </div>
                    </td>
                </tr>
            </table>




            <table class="table-border mt20">

                <tr>
                    <th class="width20 p5">Clients Code No.</th>
                    <th class="width50	 p5">BO Account No.</th>
                    <th class="width30 p5">Number of Broker</th>
                </tr>

                <tr>
                    <td class="width20 p5"> </td>
                    <td class="width50 p5">
                        <div class="display-flex ">
                            <ul class="rect-box-list ">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class="rect-box-list ml15">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    <th class="width30 p5"></th>
                </tr>
                <tr>
                    <td class="width20 p5"> </td>
                    <td class="width50 p5">
                        <div class="display-flex ">
                            <ul class="rect-box-list ">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class="rect-box-list ml15">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    <th class="width30 p5"></th>
                </tr>
                <tr>
                    <td class="width20 p5"> </td>
                    <td class="width50 p5">
                        <div class="display-flex ">
                            <ul class="rect-box-list ">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class="rect-box-list ml15">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    <th class="width30 p5"></th>
                </tr>
                <tr>
                    <td class="width20 p5"> </td>
                    <td class="width50 p5">
                        <div class="display-flex ">
                            <ul class="rect-box-list ">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class="rect-box-list ml15">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    <th class="width30 p5"></th>
                </tr>
                <tr>
                    <td class="width20 p5"> </td>
                    <td class="width50 p5">
                        <div class="display-flex ">
                            <ul class="rect-box-list ">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class="rect-box-list ml15">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    <th class="width30 p5"></th>
                </tr>
            </table>
            <!-- end table  -->

            <div class="doc-content-wrap mt70 ">
                <div class="content-wrap-left text-center">
                    .......................................<br>
                    Signature of the Account <br> Holder with date <br>
                </div>
                <div class="content-wrap-right text-center">
                    .......................................<br>
                    Signature of the <br> Authorized person (if any) <br>with date
                </div>
            </div>

            <div class="doc-content-wrap mt70 mb20">
                <div class="content-wrap-left text-center">
                    ..............................<br>
                    Processed by:
                </div>
                <div class="content-wrap-left text-center">
                    ..............................<br>
                    Checked by:
                </div>
                <div class="content-wrap-right text-center">
                    ..............................<br>
                    Approved by:
                </div>
            </div>



            <table class="table-no-border ">

                <tr>
                    <td class="pb10 p5">Name:..................................................</td>
                    <td class="pb10	 p5">Name:..................................................</td>
                    <td class="pb10 p5">Name:..................................................</td>
                </tr>
                <td class="pb10 p5">Designation:........................................</td>
                <td class="pb10	 p5">Designation:........................................</td>
                <td class="pb10 p5">Designation:........................................</td>
                </tr>
                </tr>
                <td class="pb10 p5">Signature:............................................</td>
                <td class="pb10	 p5">Signature:............................................</td>
                <td class="pb10 p5">Signature:............................................</td>
                </tr>
                </tr>
                <td class="pt20 p5">
                    <div class="display-flex ">
                        Date
                        <ul class="rect-box-list pl10 text-center">
                            <li></li>
                            <li class="border-right"></li>

                            <li class="ml15"></li>
                            <li class="border-right"></li>

                            <li class="ml15"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </td>
                <td class="pt20 p5">
                    <div class="display-flex ">
                        Date
                        <ul class="rect-box-list pl10 text-center">
                            <li></li>
                            <li class="border-right"></li>

                            <li class="ml15"></li>
                            <li class="border-right"></li>

                            <li class="ml15"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </td>
                <td class="pt20 p5">
                    <div class="display-flex ">
                        Date
                        <ul class="rect-box-list pl10 text-center">
                            <li></li>
                            <li class="border-right"></li>

                            <li class="ml15"></li>
                            <li class="border-right"></li>

                            <li class="ml15"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </td>
                </tr>


            </table>
            <!-- end table  -->


        </div>
    </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 8 page -->

    <div class="mb100"></div>

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->

                <header>
                    <div class="doc-content-wrap">

                        <div class="content-wrap-middle">
                            <div class="text-center">
                                <h3 class=" display-inline-block  font-bold">
                                    UNITED FINANCIAL TRADING COMPANY LIMITED </h3><br>
                                <span class="font-size13">TREC Holder: Dhaka Stock Exchange Limited, Chittagong Stock
                                    Exchange Limited <br>
                                    DSE Registration # Reg-3.1/DSE-227/2005/101, CSE Registration #
                                    Reg-3.2/CSE-43/2001/112 <br>
                                    TREC Holder No-DSE: 227 & CSE : 043<br>
                                    Full Service Depository Participant of CDBL, DP No. 31100 <br>
                                    Head Office : PFI Tower (2nd Floor), 56-57 Dilkusha C/A, Dhaka-1000.</span>
                                <h4 class="mt10"><b>CUSTOMER ACCOUNT OPENING FORM </b></h4>
                                <h5 class="font-bold">(For Company or Institutional Account)</b></h5>
                            </div>
                        </div>
                        <div class="content-wrap-right border p25 text-center box-center">
                            Photograph of<br> MD/CEO with<br> attestation of<br>
                            the Introducer
                        </div>
                    </div>

                </header>

                <table class=" table-no-dborder mt5">

                    <tr>
                        <td class="mt5 pb5">
                            <div class="display-flex ">
                                Customer Account No.
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15 border-right"></li>

                                    <li class="ml15"></li>
                                    <li class="border-right"></li>

                                    <li class=" ml15"></li>

                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="pt5 pb5 pr15">
                            <div class="display-flex float-right">
                                Date:
                                <ul class="rect-box-list pl10 text-center">
                                    <li class="ml15"></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-bold pt5 pb5" colspan="2">[To be filled by the Applocant]</td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5">
                            <div class="display-flex ">
                                B.O Account No.
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class=" pt5 pb5">
                            <div class="display-flex float-right">
                                Account Type: Cash
                                <ul class="rect-box-list pl10  pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                Margin
                                <ul class="rect-box-list pl10 pr10 height16 text-center">
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class=" pt5 pb5">
                            <div class="display-flex">
                                Citizenship status (Please tick mark): Resident Bangladeshi <br>
                                <ul class="rect-box-list pl10  pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                Non-Resident Bangladeshi
                                <ul class="rect-box-list pl10 pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                Foreigner
                                <ul class="rect-box-list pl10 pr10 height16 text-center">
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Other(Please
                            Specify):.......................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class=" pt5 pb5">

                            Type of the Company / Institution:
                            <div class="display-flex mt5	">
                                (1) Private Ltd.
                                <ul class="rect-box-list pl10   pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                (2) Public Ltd.
                                <ul class="rect-box-list pl10 pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                (3) NGO
                                <ul class="rect-box-list pl10 pr10 height16 text-center">
                                    <li></li>
                                </ul>
                                (4) Others (Please Specify)
                                <ul class="rect-box-list pl10 pr10 height16 text-center">
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            <b>Name of the Company / Institution:</b>
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Corporate
                            Address:..........................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            ............................................................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            Registered
                            Address:.........................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            ............................................................................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5">
                            Incorporation Certificate
                            No.:.................................................................

                        </td>
                        <td class="pb5">
                            <div class="display-flex ">
                                Date:
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" pt5 pb5">
                            Business Commencement Certificate No. (if any):...............................

                        </td>
                        <td class="  pb5">
                            <div class="display-flex ">
                                Date:
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="  pb5">
                            <div class="display-flex ">
                                Trade License No.
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                        </td>
                        <td class="  pb5">
                            <div class="display-flex ">
                                Date:
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="  pb5" colspan="2">
                            <div class="display-flex ">
                                TIN No.
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td class="  pb5">
                            <div class="display-flex ">
                                BIN No. (if any):
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                        </td>
                    </tr>

                    <tr>
                        <td class="  pb5" colspan="2">
                            <div class="display-flex ">
                                VAT Registration Certificate No.
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                        </td>
                    </tr>


                    <tr>
                        <td class="  pb5">
                            <div class="display-flex ">
                                Phone No.
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="  pb5">
                            <div class="display-flex ">
                                Mobile No.
                                <ul class="rect-box-list pl10 text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>

                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class=" pt5 pb5" colspan="2">
                            E-mail
                            Address:...............................................................................................................................................................
                        </td>
                    </tr>



                </table>

                <!-- end table  -->


                <table class=" table-no-dborder ">


                    <tbody>
                        <tr>
                            <td class="pt5 pb5" colspan="2">
                                <b>Details of Managing Director /CEO:</b>
                            </td>
                        </tr>

                        <tr>
                            <td class="pt5 pb5" colspan="2">
                                Name of the Managing
                                Director/CEO::............................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class="pt5 pb5" colspan="2">
                                Father's
                                Name:...................................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class="pt5 pb5" colspan="2">
                                Mother's
                                Name:.................................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class="pt5 pb5" colspan="2">
                                Spouse's
                                Name:.................................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt5 pb5" colspan="2">
                                Present/Contact
                                Address:................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt5 pb5" colspan="2">
                                ............................................................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt5 pb5" colspan="2">
                                Permanent
                                Address:.........................................................................................................................................................
                            </td>
                        </tr>
                        <tr>
                            <td class=" pt5 pb5" colspan="2">
                                ............................................................................................................................................................................................
                            </td>
                        </tr>

                        <tr>
                            <td class=" pb5" colspan="2">
                                <div class="display-flex ">
                                    Date of Birth
                                    <ul class="rect-box-list pl10 text-center">
                                        <li></li>
                                        <li class="border-right"></li>

                                        <li class="ml15"></li>
                                        <li class="border-right"></li>

                                        <li class="ml15"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class=" pb5" colspan="2">
                                <div class="display-flex ">
                                    Sex: Male
                                    <ul class="rect-box-list pl10  pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Female
                                    <ul class="rect-box-list pl10 pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Nationality:.......................................................................................................................
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class=" pb5" colspan="2">
                                <div class="display-flex ">
                                    National ID/Passport/Birth Certificate/Driving License Number:
                                    <ul class="rect-box-list pl10 text-center">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=" pb5">
                                <div class="display-flex ">
                                    Phone No.
                                    <ul class="rect-box-list pl10 text-center">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                            <td class=" pb5">
                                <div class="display-flex ">
                                    Mobile No.
                                    <ul class="rect-box-list pl10 text-center">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>

                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class=" pt5 pb5" colspan="2">
                                E-mail
                                Address:...............................................................................................................................................................
                            </td>
                        </tr>




                    </tbody>
                </table>



            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 9 page -->

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->
                <table class="table-no-border mt10 mb20">

                    <tbody>

                        <tr>
                            <td>
                                Whether the applicant is Officer or Sponsor / Director of any Broker/Dealer / Exchange /
                                Depository/ Clearing <br>
                                & Settlement Company / Listed Company?
                                <div class="display-flex mt10">
                                    Yes
                                    <ul class="rect-box-list pl10  pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                    No
                                    <ul class="rect-box-list pl10 pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt20 p5">
                                If yes, please mention the name & address of the Broker / Dealer / Exchange /
                                Depository/Clearing & <br><br>Settlement
                                Company / Listed Company with designation of the said officer <br><br>
                                or sponsor or director
                                :.............................................................................................................................
                            </td>
                        </tr>
                    </tbody>
                </table>

                <b class="font-bold mt10">Signature of the Account(if any):</b>
                <table class="table-border mt10 mb20">

                    <tr class="bg-black-6 ">
                        <th class="width15 p8">Particulars</th>
                        <th class="width35 p8">Nominee-1</th>
                        <th class="width35 p8">Nominee-2(if any)</th>

                    </tr>
                    <tr>
                        <td class="width15 p5">Name of the<br> authorized <br>signatory</td>
                        <td class="width35 p5">
                        </td>
                        <td class="width35 p5"></td>
                        <td class="width15 p5" rowspan="3">
                            <div class="text-center">

                                Photograph of<br> authorized<br> Person(s)/ <br>signatory 1<br> with attestation <br>of
                                the MD/CEO

                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td class="width15 p5">Designation</td>
                        <td class="width35 p5">
                        </td>
                        <td class="width35 p5"></td>

                    </tr>

                    <tr>
                        <td class="width15 p5">Present/<br>Contact <br>Address</td>
                        <td class="width35 p40">
                        </td>
                        <td class="width35 p5"></td>
                    </tr>

                    <tr>
                        <td class="width15 p5">NID/Birth <br>Certificate/<br>Passport<br> Number</td>
                        <td class="width35 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>

                                </ul>
                            </div>
                        </td>
                        <td class="width35 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>

                                </ul>
                            </div>
                        </td>
                        <td class="width15 p5" rowspan="4">
                            <div class="text-center">
                                Photograph of<br> authorized<br> Person(s)/ <br>signatory 2<br> with attestation <br>of
                                the MD/CEO
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Phone<br>Number</td>
                        <td class="width35 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>

                                </ul>
                            </div>
                        </td>
                        <td class="width35 p5">

                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>

                                </ul>
                            </div>
                        </td>


                    </tr>

                    <tr>
                        <td class="width15 p5">Mobile No</td>
                        <td class="width35 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width35 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td class="width15 p5">Email</td>
                        <td class="width35 p5">
                        </td>
                        <td class="width35 p5"></td>

                    </tr>



                </table>
                <!-- end table  -->






                <div class="mt20 mb40">
                    Source of Fund
                    details:..................................................................................................................................................
                </div>

                <b class="font-bold">Bank Account Details:</b>
                <table class="table-border mt10 mb10">

                    <tr>
                        <td class="width15 p5">Account Number</td>
                        <td class="width70 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Bank Name</td>
                        <td class="width70 p5"></td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Branch Name</td>
                        <td class="width70 p5">
                        </td>
                    </tr>
                    <tr>
                        <td class="width15 p5">Routing No.</td>
                        <td class="width70 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                </table>
                <!-- end table  -->



            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 10 page -->

    <div style="margin-bottom: 200px"></div>

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->


                <b class="font-bold mt10">Introducer Details:</b>
                <table class="table-border mt10 mb10">

                    <tr>
                        <td class="width15 p5">Name</td>
                        <td class="width60 p5"></td>
                        <td class="width25 p5 vertical-align-bottom border-top-hidden border-bottom-hidden border-right-hidden"
                            rowspan="6">
                            <div class="text-center">
                                ........................<br>
                                Signature of the <br>Introducer with date
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="width15 p5">Account Number</td>
                        <td class="width60 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <ul class="rect-box-list ml15">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="width15 p5">Mobile Number</td>
                        <td class="width60 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="width15 p5">Address</td>
                        <td class="width60  p30">
            </div>
            </td>
            </tr>


            </table>
            <!-- end table  -->

            <table class="table-no-border ">

                <tr>
                    <td class="pt10 p5">
                        Account operating instruction:

                        <div class="display-flex mt5">
                            (1) Singly operated
                            <ul class="rect-box-list pl10  pr10 height16 text-center">
                                <li></li>
                            </ul>
                            (2) Jointly operated
                            <ul class="rect-box-list pl10 pr10 height16 text-center">
                                <li></li>
                            </ul>
                            (3) others (specify)
                            <ul class="rect-box-list pl10 pr10 height16 text-center">
                                <li></li>
                            </ul>

                        </div>

                    </td>
                </tr>
                <tr>
                    <td class="pt10 p5">
                        Have any other Customer Account with any Stock Broker(s)?

                        <div class="display-flex mt5">
                            Yes
                            <ul class="rect-box-list pl10  pr10 height16 text-center">
                                <li></li>
                            </ul>
                            No
                            <ul class="rect-box-list pl10 pr10 height16 text-center">
                                <li></li>
                            </ul>

                        </div>

                    </td>
                </tr>
                <tr>
                    <td class="pt10 p5">
                        If yes, give
                        details........................................................................................



                    </td>
                </tr>
            </table>




            <table class="table-border mt20">

                <tr>
                    <th class="width20 p5">Clients Code No.</th>
                    <th class="width50	 p5">BO Account No.</th>
                    <th class="width30 p5">Number of Broker</th>
                </tr>

                <tr>
                    <td class="width20 p5"> </td>
                    <td class="width50 p5">
                        <div class="display-flex ">
                            <ul class="rect-box-list ">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class="rect-box-list ml15">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    <th class="width30 p5"></th>
                </tr>
                <tr>
                    <td class="width20 p5"> </td>
                    <td class="width50 p5">
                        <div class="display-flex ">
                            <ul class="rect-box-list ">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class="rect-box-list ml15">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    <th class="width30 p5"></th>
                </tr>
                <tr>
                    <td class="width20 p5"> </td>
                    <td class="width50 p5">
                        <div class="display-flex ">
                            <ul class="rect-box-list ">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class="rect-box-list ml15">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    <th class="width30 p5"></th>
                </tr>
                <tr>
                    <td class="width20 p5"> </td>
                    <td class="width50 p5">
                        <div class="display-flex ">
                            <ul class="rect-box-list ">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class="rect-box-list ml15">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    <th class="width30 p5"></th>
                </tr>
                <tr>
                    <td class="width20 p5"> </td>
                    <td class="width50 p5">
                        <div class="display-flex ">
                            <ul class="rect-box-list ">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul class="rect-box-list ml15">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </td>
                    <th class="width30 p5"></th>
                </tr>
            </table>
            <!-- end table  -->

            <div class="doc-content-wrap mt70 ">
                <div class="content-wrap-left text-center">
                    .......................................<br>
                    Signature of MD/CEO <br> with date <br>
                </div>
                <div class="content-wrap-right text-center">
                    .......................................<br>
                    Signature of the <br> Authorized <br>person/signatory-1<br> (if any) with date
                </div>
                <div class="content-wrap-right text-center">
                    .......................................<br>
                    Signature of the <br> Authorized <br>person/signatory-2<br> (if any) with date
                </div>
            </div>

            <div class="doc-content-wrap mt70 mb40">
                <div class="content-wrap-left text-center">
                    ..............................<br>
                    Processed by
                </div>
                <div class="content-wrap-left text-center">
                    ..............................<br>
                    Checked by
                </div>
                <div class="content-wrap-right text-center">
                    ..............................<br>
                    Approved by
                </div>
            </div>



            <table class="table-no-border ">

                <tr>
                    <td class=" p5">Name:..................................................</td>
                    <td class="	 p5">Name:..................................................</td>
                    <td class=" p5">Name:..................................................</td>
                </tr>
                <td class=" p5">Designation:........................................</td>
                <td class="	 p5">Designation:........................................</td>
                <td class=" p5">Designation:........................................</td>
                </tr>
                </tr>
                <td class=" p5">Signature:............................................</td>
                <td class="	 p5">Signature:............................................</td>
                <td class=" p5">Signature:............................................</td>
                </tr>
                </tr>
                <td class="p5">
                    <div class="display-flex ">
                        Date
                        <ul class="rect-box-list pl10 text-center">
                            <li></li>
                            <li class="border-right"></li>

                            <li class="ml15"></li>
                            <li class="border-right"></li>

                            <li class="ml15"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </td>
                <td class=" p5">
                    <div class="display-flex ">
                        Date
                        <ul class="rect-box-list pl10 text-center">
                            <li></li>
                            <li class="border-right"></li>

                            <li class="ml15"></li>
                            <li class="border-right"></li>

                            <li class="ml15"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </td>
                <td class=" p5">
                    <div class="display-flex ">
                        Date
                        <ul class="rect-box-list pl10 text-center">
                            <li></li>
                            <li class="border-right"></li>

                            <li class="ml15"></li>
                            <li class="border-right"></li>

                            <li class="ml15"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </td>
                <tr>
                    <td colspan="3">
                        <br>
                        <b>Note: In case of other type of applicant </b>[if the applicant is a director/sponsor of a
                        listed company or the <br>applicant
                        is a politically exposed person (PEP) or an Influential person (IP) or a Member of Senior</br>
                        Management of an
                        International Organization] please use/fill-up individual/joint application form if the
                        applicant<br> is individual/joint
                        person(s), but if the type of applicant(s) is a legal body corporate or institution, please
                        use/fill <br>
                        up the company's or institutional application form.
                        </span>
                    </td>
                </tr>
                </tr>


            </table>
            <!-- end table  -->


        </div>
    </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 11 page -->

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->

                <header>
                    <div class="text-center mb20">
                        <h3 class="bg-black color-white display-inline-block p5 font-bold pl10 pr10 mb5">BO Account
                            Opening Form</h3><br>
                        <span>Bye law 7.3.3 (b)</span>

                    </div>
                    <span class="">
                        Please complete all deatails in CAPITAL letter. Please fill all names correctly. All
                        communications shall be sent to the First Named Account Holder's correspondence address.
                    </span>

                </header>



                <div class="doc-content-wrap pt15 ">
                    <div class="content-wrap-left">
                        <div class="display-flex">
                            Application
                            No:.................................................................................

                        </div>
                    </div>

                    <div class="content-wrap-right">
                        <div class="display-flex text-right float-right">
                            Date: (DD/MM/YYYY)

                            <ul class="rect-box-list pl10 text-center">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>





                <div class="mt10">
                    <span>Please Tick whichever is applicable</span>
                </div>

                <table class="table-no-border border mt3">



                    <tbody class="p10 pb0">

                        <tr>
                            <td class="p10 pt5 pb5">
                                <div class="display-flex">
                                    <span class="font-bold pr7 font-size13">BO Category:</span> Regular
                                    <ul class="rect-box-list pl5  pr7 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Omnibus
                                    <ul class="rect-box-list pl5 pr7 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Clearing
                                    <ul class="rect-box-list pl5 height16 text-center">
                                        <li></li>
                                    </ul>
                                </div>

                            </td>

                            <td class="p10 pt5 pb5">
                                <div class="display-flex">
                                    <span class="font-bold pr7 font-size13">BO Type:</span> Individual
                                    <ul class="rect-box-list pl5   pr7 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Company
                                    <ul class="rect-box-list pl5 pr7 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Joint Holder
                                    <ul class="rect-box-list pl5  height16 text-center">
                                        <li></li>
                                    </ul>
                                </div>

                            </td>
                        </tr>


                    </tbody>
                </table>



                <table class=" table-no-border mt10 border">


                    <tr>
                        <td class=" p10 pt5 pb5 " colspan="3">
                            <div class="">
                                <span>Name of CDBL participant (up to 99 Character): </span>
                                <b>UNITED FINANCIAL TRADING COMPANY LIMITED</b>
                            </div>
                    </tr>



                    <tr>

                        <td class=" p10 pt0 pb5">
                            <div class="">

                                <span class="font-size12"> CDBL Participant ID</span>

                                <div class="  ">

                                    <ul class="rect-box-list  text-center pt5">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>

                                </div>
                            </div>
                        </td>

                        <td class=" p10 pt5">
                            <div class="">
                                <span class="font-size12">BO ID</span>

                                <ul class="rect-box-list text-center  pt5">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                </ul>
                            </div>
                        </td>
                        <td class=" p10 pt5">
                            <div class="float-right">
                                <span class="font-size12 float-right">
                                    Date of Account opend (DD/MM/YYYY)
                                </span>

                                <ul class="rect-box-list pt5 text-center float-right">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>

                    </tr>
                </table>


                <table class=" table-no-border ">

                    <tr>
                        <td class="p10 pt10 pb10">
                            <b>I/We request you to open a Depository Account in my / our name as per the following
                                details :</b>
                        </td>
                    </tr>
                </table>


                <div class=" clearfix">

                    <table class="table-no-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="2">
                                    <b>1. First Applicant</b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Name in full of Account Holder (up to 99 Character).
                                </td>
                            </tr>

                            <tr>
                                <td class=" p10 pt0 pb5">
                                    <div class="">
                                        <span class="font-size12">Short Name of Account Holder (Insert full name
                                            starting with Title i.e. Mr./Mrs./Ms./Dr.<br>
                                            abbreviate only if over 30 Character)</span>
                                        <br>
                                        <div class=" display-flex ">

                                            <ul class="rect-box-list  text-center pt5">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>

                                        </div>
                                    </div>
                                </td>
                                <td class=" p10 pt5 pb5 ">
                                    <div class="text-right float-right">
                                        <span class="font-size12">Title i.e. Mr./Mrs./Ms./Dr.</span><br>

                                        <ul class="rect-box-list pl10 pt5 float-right text-center ">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    (In case of Company/Firm/Statutory Body) Name of Contact
                                    Person.....................................................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    <div class="display-flex">
                                        (In case of Individual Male
                                        <ul class="rect-box-list pl10  pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Female
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Occupation (30 Characters)
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Father's /Husband's
                                    Name:...........................................................................................................................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Mother
                                    Name:.................................................................................................................................................................
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>

                <!-- end  1.first application  -->

                <div class=" clearfix mt10">

                    <table class="table-no-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="2">
                                    <b>2. Contact Details</b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p10 pt15 pb5" colspan="2">
                                    Address..........................................................................................................................................................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    City........................Post
                                    Code..................State/Division........................Country.......................Telephone...............
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb20" colspan="2">
                                    Mobile.....................................Fax..............................Email............................................NID........................................
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

                <!-- end 2. Contact details  -->

                <div class=" clearfix mt10">

                    <table class="table-no-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="2">
                                    <b>3. Passport Details </b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p20" colspan="2">
                                    Passport No.........................Issue Place.......................Issue
                                    Date...........................Expiry Date..........................
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>


                <!-- end 3. passport details  -->

                <div class=" clearfix mt10">

                    <table class="table-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="4">
                                    <b>4. Bank Details </b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">

                            <tr>
                                <td class="pl5 p3 width20">Routing No.</td>
                                <td class="pl5 p3 width30"></td>
                                <td class="pl5 p3 width30">Bank Indentifier Code (BIC)</td>
                                <td class="pl5 p3 width20"></td>
                            </tr>
                            <tr>
                                <td class="pl5 p3 width20">Bank Name</td>
                                <td class="pl5 p3 width30"></td>
                                <td class="pl5 p3 width30">Branch Name</td>
                                <td class="pl5 p3 width20"></td>
                            </tr>
                            <tr>
                                <td class="pl5 p3 width20">Bank A/C No.</td>
                                <td class="pl5 p3 width30"></td>
                                <td class="pl5 p3 width30">District Name</td>
                                <td class="pl5 p3 width20"></td>
                            </tr>
                            <tr>
                                <td class="pl5 p3 width20">SWIFT Code</td>
                                <td class="pl5 p3 width30"></td>
                                <td class="pl5 p3 width30">International bank A/C No. (IBN)</td>
                                <td class="pl5 p3 width20"></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

                <!-- end 4. Bank Details  -->
            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 12 page -->

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->

                <div class=" clearfix mt10">

                    <table class="table-no-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="2">
                                    <b>5. Electronics Dividend Credit </b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    <div class="display-flex">
                                        Yes
                                        <ul class="rect-box-list pl10  pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        No
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">
                                            <li></li> ,
                                        </ul>
                                        Tex Exemption if any.
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">
                                            Yes
                                            <li class="ml10"></li>
                                        </ul>
                                        No
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">

                                            <li></li>
                                        </ul>
                                        TIN / Tax ID.............................................................
                                    </div>

                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

                <!-- end 5. Electronics Dividend Credit  -->




                <div class="clearfix mt10">
                    <table class="table-no-border border mt5">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="2">
                                    <b>6. Others Information</b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p10 pt0 pb0">
                                    <div class="display-flex">
                                        Residency: Resident
                                        <ul class="rect-box-list pl10  pr10 height16  text-center">
                                            <li></li>
                                        </ul>
                                        Non Resident
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Nationality.......................................
                                    </div>

                                </td>
                                <td class=" p10 pt5 pb0 ">
                                    <div class="text-right ">
                                        <span class="font-size12">Date of Birth: (DD/MM/YYYY)</span><br>

                                        <ul class="rect-box-list pl10 pt5 float-right text-center ">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="p10 pt0 pb5" colspan="2">
                                    Statement Cycle Code Daily
                                    <div class="display-flex mt5">

                                        <ul class="rect-box-list  pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Weekly
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Fortnightly
                                        <ul class="rect-box-list  pr10 height16 text-center">
                                            <li class="ml10"></li>
                                        </ul>
                                        Monthly
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">

                                            <li></li>
                                        </ul>

                                        Other (Please Specify)....................................................
                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Internal Ref No (To be filled in by CDBL Participant ) <b>UFTCL #</b>
                                </td>
                            </tr>

                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    In Case of Company:
                                </td>
                            </tr>

                            <tr>
                                <td class=" p10 pt0 pb5">
                                    <div class="">
                                        <span>Registration
                                            No.................................................................................</span>
                                        <br>

                                    </div>
                                </td>
                                <td class=" p10 pt5 pb5 ">
                                    <div class="text-right float-right">
                                        <span class="font-size12">Date of Birth: (DD/MM/YYYY)</span><br>

                                        <ul class="rect-box-list pl10 pt5 float-right text-center ">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>



                        </tbody>

                    </table>
                </div>

                <!-- end 6. Others Information -->


                <div class="clearfix mt10">
                    <table class="table-no-border border mt5">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="2">
                                    <b>7. Joint Applicant (Second Account Holder) :</b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Name in full (up to 99
                                    Characters)......................................................NID..........................................................
                                </td>
                            </tr>

                            <tr>
                                <td class=" p10 pt0 pb5">
                                    <div class="">
                                        <span class="font-size12">Short Name of Nominee (Insert full name starting
                                            with Title i.e. Mr./Mrs./Ms./Dr.<br> abbreviate only if over 30
                                            Character)</span>
                                        <br>
                                        <div class=" display-flex ">

                                            <ul class="rect-box-list  text-center pt5">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>

                                        </div>
                                    </div>
                                </td>
                                <td class=" p10 pt5 pb5 ">
                                    <div class="text-right float-right">
                                        <span class="font-size12">Title i.e. Mr./Mrs./Ms./Dr.</span><br>

                                        <ul class="rect-box-list pl10 pt5 float-right text-center ">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>



                        </tbody>

                    </table>
                </div>

                <!-- end 7. Joint Applicant (Second Account Holder) -->






                <div class=" clearfix mt10">

                    <table class="table-no-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="2">
                                    <b>8. Account Link Request : </b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    <div class="display-flex">
                                        Would you like to create a link to your existing Depository? Yes
                                        <ul class="rect-box-list pl10  pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        No
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">
                                            <li></li>
                                        </ul>

                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    <div class="display-flex">
                                        If yes then please provide the Depository BO Account Code (8 Digits)
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>

                                    </div>

                                </td>
                            </tr>


                        </tbody>
                    </table>
                    <!-- end table  -->
                </div>

                <!-- end 8. Account Link Request  -->


                <div class=" clearfix mt10">

                    <table class="table-no-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="2">
                                    <b>9. Nominees/Heirs : </b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">

                                    If account holder (s) wish to nominate person (s) who will be entitled to receive
                                    securities outstanding in the <br>account
                                    in the event of its death of the sole account holder/all the joint account holders,
                                    a separate <br> nomination form-23 must
                                    be filled up and signed by all account holders and the nominees giving names<br> of
                                    nominees, relationship with first
                                    account holder, percentage distribution and contact details. <br>If any nominee
                                    minor, guardians name,
                                    address, relationship with nominee has also be provided.
                                </td>
                            </tr>


                        </tbody>
                    </table>
                    <!-- end table  -->
                </div>

                <!-- end 9. Nominees/Heirs  -->


                <div class=" clearfix mt10">

                    <table class="table-no-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="2">
                                    <b>10. Power of Attorney (POA): </b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">

                                    If account holder (s) wish to give a Power of Attorney (POA) to someone to operate
                                    the account, a separate <br> form-20
                                    must be filled up and signed by all account holders giving the name, contact details
                                    etc of
                                    the POA <br>holder and a POA document lodged with the form.
                                </td>
                            </tr>


                        </tbody>
                    </table>
                    <!-- end table  -->
                </div>

                <!-- end 10. Power of Attorney (POA)  -->

                <div class=" clearfix mt10">

                    <table class="table-no-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="3">
                                    <b>11. To be filed in by the Stock Broker/Stock Exchange in case the application is
                                        for opening a Clearing Account :</b>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="pl10 p20 ">
                                    Exchange Name:

                                </td>

                                <td class="pl5 p3 ">

                                    <div class="display-flex">
                                        DSE
                                        <ul class="rect-box-list pl10  pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Trading ID: 10

                                    </div>
                                </td>

                                <td class="pl5 p3 ">

                                    <div class="display-flex">
                                        CSE
                                        <ul class="rect-box-list pl10  pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Trading ID:11

                                    </div>
                                </td>

                            </tr>
                        </tbody>


                    </table>
                    <!-- end table  -->
                </div>
                <!-- end 11. To be filed in by the Stock Broker/Stock Exchange in case the application is for opening a Clearing Account  -->


            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 13 page -->

    <div style="margin-bottom: 100px"></div>

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->



                <div class=" clearfix mt5">

                    <div class="border">

                        <div class="bg-black-6 ">
                            <div class=" p8 no-border text-left">
                                <b>12. Photograph</b>
                            </div>
                        </div>


                        <div class="doc-content-wrap mt10 pl5 pr5 pb5">
                            <div class="content-wrap-middle text-center">
                                <div class="border pt20 pb20 pl15 pr15">
                                    Please paste recent<br> passport size Photograph<br> of 1st Applicant or <br>
                                    Authorized Signatory in<br>
                                    case of Limited Co. only
                                </div>
                                <span>1st Applicant or Authorized <br>Signatory in case of Ltd. Co.</span>
                            </div>
                            <div class="content-wrap-middle text-center">
                                <div class="border  pt20 pb20 pl15 pr15">
                                    Please paste recent <br>passport size Photograph <br>of 2nd Applicant or<br>
                                    Authorized Signatory in <br>
                                    case of Limited Co. only
                                </div>
                                <span>2nd Applicant or Authorized<br> Signatory in case of Ltd. Co.</span>
                            </div>
                            <div class="content-wrap-right text-center">
                                <div class="border  pt20 pb20 pl15 pr15">
                                    Please paste recent <br>passport size Photograph <br>of Authorized Signatory <br>in
                                    case of Limited Co.<br> only
                                </div>
                                <span>Authorized Signatory in<br> case of Ltd. Co.</span>
                            </div>
                        </div>



                    </div>
                    <!-- end table  -->
                </div>

                <!-- end 12. Photograph  -->


                <div class=" clearfix mt5">

                    <table class="table-no-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="2">
                                    <b>13. Standing instructions : </b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    <div class="display-flex">
                                        <span>we authorize you to receive facsimile (fax) transfer instruction for
                                            delivery.</span> Yes
                                        <ul class="rect-box-list pl10  pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        No
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">
                                            <li></li>
                                        </ul>

                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- end table  -->
                </div>

                <!-- end 13. Standing instructions :  -->

                <div class=" clearfix mt5">

                    <table class="table-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left border-no-bottom" colspan="4"
                                    style="border-bottom: 1px solid rgb(0 0 0 / 0) !important;">
                                    <b>14. Declaration </b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p10 pt5 pb5" colspan="4">

                                    The rules and regulations of the Depository and CDBL Participant pertaining to an
                                    account
                                    which are in<br> force now have been read by
                                    me/us and I/we have understood the same and I/we agree to abide byand<br> to be
                                    bound by the rules as are in force from time to
                                    time for such accounts.I/we also declared that the <br>particulars given by me/us
                                    are true to the best of my/our knowledge as
                                    on the date of making such <br> application. I/we further agree that any
                                    false/misleading information given by me/us or
                                    suppression<br> of any material fact will render my/our account liable for
                                    termination and further action.
                                </td>
                            </tr>


                        </tbody>

                        <!-- end table  -->
                        <tbody>
                            <tr class="bg-black-6 ">
                                <th class="p5   font-size13">Applicant</th>
                                <th class="p5 font-size13">Name of applicant/Authorized Signature in case of Ltd. Co.
                                </th>
                                <th class="p5 text-center font-size13">Signature with date</th>

                            </tr>
                            <tr>
                                <td class="pl5 p10">First Applicant</td>
                                <td class="pl5 p10"></td>
                                <td class="pl5 p10 text-center"> ✓</td>
                            </tr>
                            <tr>
                                <td class="pl5 p10">Second Applicant</td>
                                <td class="pl5 p10"></td>
                                <td class="pl5 p10 text-center"> ✓</td>
                            </tr>
                            <tr>
                                <td class="pl5 p10">Third Applicant <br> (Ltd. Co only)</td>
                                <td class="pl5 p10"></td>
                                <td class="pl5 p10 text-center"> ✓</td>
                            </tr>

                        </tbody>

                    </table>


                </div>

                <!-- end 14. Declaration  -->


                <div class=" clearfix mt5">

                    <table class="table-no-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left " colspan="3">
                                    <b>15. Special Instruction on operation of Join Account</b>
                                </th>
                            </tr>
                        </thead>



                        <!-- end table  -->
                        <tbody>
                            <tr class="">
                                <td class="pl5 p3 pt20 pb10">

                                    <div class="display-flex">

                                        <ul class="rect-box-list pl5  pr5 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Either or Survivor

                                    </div>
                                </td>
                                <td class="pl5 p3 pt20 pb10">

                                    <div class="display-flex">

                                        <ul class="rect-box-list pl5  pr5 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Any one can operate

                                    </div>
                                </td>

                                <td class="pl5 p3 pt20 pb10">

                                    <div class="display-flex">

                                        <ul class="rect-box-list pl5  pr5 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Any two will operate jointly

                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td class="pl5 p3 pb20" colspan="2">

                                    <div class="display-flex">

                                        <ul class="rect-box-list pl5  pr5 height16 text-center">
                                            <li></li>
                                        </ul>
                                        will be operated by.....................With any one of the others.

                                    </div>
                                </td>
                                <td class="pl5 p3 pb20">

                                    <div class="display-flex">

                                        <ul class="rect-box-list pl5  pr5 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Operated by POA

                                    </div>
                                </td>


                            </tr>

                        </tbody>

                    </table>


                </div>

                <!-- end 15. Special Instruction on operation of Join Account  -->

                <div class=" clearfix mt5">

                    <table class="table-no-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left " colspan="3">
                                    <b>16. Introduction</b>
                                </th>
                            </tr>
                        </thead>



                        <!-- end table  -->
                        <tbody>
                            <tr>
                                <td class="pl5 p10 p3 ">
                                    Introduction by an existing account holder
                                    of.......................................................................................................
                                </td>

                            </tr>
                            <tr>
                                <td class="pl5 p10	 p3 ">
                                    I confirm the identity, occupation and address of the applicants (s) <span>.
                                        ..............................................................</span>
                                </td>

                            </tr>
                            <tr>
                                <td class="pl15 p3 ">
                                    <div class="doc-content-wrap mt40">
                                        <div class="content-wrap-left text-center">
                                            .......................................<br>
                                            Signature of Introducer
                                        </div>
                                        <div class="content-wrap-right text-center">
                                            <div class=" display-flex ">
                                                Account ID

                                                <ul class="rect-box-list pl10 text-center">

                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                        </tbody>

                    </table>


                </div>

                <!-- end 16. Introduction  -->

            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 14 page -->

    <div style="margin-bottom: 100px"></div>

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->

                <header>
                    <div class="text-center">
                        <h3 class="bg-black color-white display-inline-block p5 font-bold pl10 pr10 mb15">BO Account
                            Nomination Form</h3><br>

                    </div>
                    <span class="mt5 pb5">Please complete all deatails in CAPITAL letter. Please fill all names
                        correctly. All communications shall be sent to the correspondence address of only First Named
                        Account Holder as specified in BO Account Opening Form 02.
                    </span>

                </header>



                <div class="doc-content-wrap pt10 pb5 ">
                    <div class="content-wrap-left">
                        <div class="display-flex">
                            Application No.

                            <ul class="rect-box-list pl10 text-center">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>

                        </div>
                    </div>

                    <div class="content-wrap-right">
                        <div class="display-flex text-right float-right">
                            Date: (DD/MM/YYYY)

                            <ul class="rect-box-list pl10 text-center">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>






                <table class=" table-no-border mt5 border">

                    <tr>
                        <td class=" p10 pt5 pb5">
                            <div class="">
                                Name of CDBL participant (up to Character)<br>
                                <h5><b>UNITED FINANCIAL TRADING COMPANY LIMITED</b></h5>
                            </div>
                        </td>

                        <td class=" p10 pt5 pb5">
                            <div class="text-right float-right">
                                CDBL participant ID

                                <ul class="rect-box-list pl10 pt5 text-center float-right">
                                    <li>3</li>
                                    <li>1</li>
                                    <li>1</li>
                                    <li>0</li>
                                    <li>0</li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>

                        <td class=" p10 pt0 pb5">
                            <div class=" display-flex ">
                                Account Holder's BO ID

                                <ul class="rect-box-list pl10 text-center">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>0</li>
                                    <li>3</li>
                                    <li>1</li>
                                    <li>1</li>
                                    <li>0</li>
                                    <li class="border-right">0</li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                </ul>

                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td class=" p10 pt0 pb5">
                            <div class="">

                                <span class="font-size12">Name of Account Holder (Insert full name starting with title
                                    i.e. Mr./Mrs./Dr. <br> abbreviate only if over 30 characers)</span>
                                <br>
                                <div class=" display-flex ">

                                    <ul class="rect-box-list  text-center pt5">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>

                                </div>
                            </div>
                        </td>

                        <td class=" p10 pt5">
                            <div class="text-right float-right">
                                <span class="font-size12">Title i.e. Mr./Mrs./Ms./Dr.</span>

                                <ul class="rect-box-list pl10 pt5 float-right text-center">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>

                <table class=" table-no-border ">

                    <tr>
                        <td class="p10 pt5 pb5">I/We nominate the following person (S) who in/are entitled to receive
                            securities outstanding in my/our <br> account in the event of the death of the sole
                            holder/all the joint holders</td>
                    </tr>
                </table>

                <div class=" clearfix">

                    <table class="table-no-border border">
                        <thead>
                            <tr class="bg-black-6 ">
                                <th class=" p8 no-border text-left" colspan="2">
                                    <b>1. Nominee</b>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    <b>Nominee 1</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Name in
                                    full.................................................................................................................................................................
                                </td>
                            </tr>

                            <tr>
                                <td class=" p10 pt0 pb5">
                                    <div class="">
                                        <span class="font-size12">Short Name of Nominee (Insert full name starting
                                            with Title i.e. Mr./Mrs./Ms./Dr.<br> abbreviate only if over 30
                                            Character)</span>
                                        <br>
                                        <div class=" display-flex ">

                                            <ul class="rect-box-list  text-center pt5">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>

                                        </div>
                                    </div>
                                </td>
                                <td class=" p10 pt5 pb5 ">
                                    <div class="text-right float-right">
                                        <span class="font-size12">Title i.e. Mr./Mrs./Ms./Dr.</span><br>

                                        <ul class="rect-box-list pl10 pt5 float-right text-center ">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Relationship with A/C
                                    Holder.................................................................
                                    Percentage%..............................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Addess...........................................................................................................................................................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    City.....................Post
                                    Code..............State/Division....................Country........................Telephone.........................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Mobile
                                    Phone.................................................Fax.........................................Email.......................................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Passport No...............................Issue Place.........................Issue
                                    Date........................Expiry Date.........................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    <div class="display-flex">
                                        Residency: Resident
                                        <ul class="rect-box-list pl10  pr10 width16 text-center">
                                            <li></li>
                                        </ul>
                                        Non Resident
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Nationality.........................................................................................
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class=" p10 pt0 pb0">
                                    <div class="display-flex">
                                        NID

                                        <ul class="rect-box-list pl10 text-center">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>

                                    </div>
                                </td>

                                <td class="  p10 pt0">
                                    <div class="  float-right">
                                        <span class="font-size12">Date of Birth: (DD/MM/YYYY)</span> <br>

                                        <ul class="rect-box-list pl10 float-right  pt5  text-center">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>




                        <tbody class="p0">
                            <tr>
                                <td class="p10 pt0 pb5" colspan="2">
                                    <b>Guardian's Details (If Nominee is a Minor)</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Name in
                                    full............................................................................................................................................................
                                </td>
                            </tr>

                            <tr>
                                <td class=" p10 pt0 pb5" colspan="2">
                                    <div class="">
                                        <span class="font-size12">Short Name of Nominee (Insert full name starting
                                            with Title i.e. Mr./Mrs./Ms./Dr. abbreviate only if over 30
                                            Character)</span>
                                        <br>
                                        <div class=" display-flex ">

                                            <ul class="rect-box-list  text-center pt5">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Relationship with A/C
                                    Holder.................................................................
                                    Percentage%..............................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Addess...........................................................................................................................................................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    City.....................Post
                                    Code..............State/Division....................Country........................Telephone.........................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Mobile
                                    Phone.................................................Fax.........................................Email.......................................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Passport No...............................Issue Place.........................Issue
                                    Date........................Expiry Date.........................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    <div class="display-flex">
                                        Residency: Resident
                                        <ul class="rect-box-list pl10  pr10 width16 text-center">
                                            <li></li>
                                        </ul>
                                        Non Resident
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Nationality.........................................................................................
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class=" p10 pt0 pb0">
                                    <div class="display-flex">
                                        NID

                                        <ul class="rect-box-list pl10 text-center">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>

                                    </div>
                                </td>

                                <td class="  p10 pt0">
                                    <div class=" float-right">
                                        <span class="font-size12">Date of Birth: (DD/MM/YYYY) </span><br>

                                        <ul class="rect-box-list pl10 float-right text-center   pt5">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>



                    <!-- end table  -->
                </div>



            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 15 page -->

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->


                <div class=" clearfix">

                    <table class="table-no-border border">


                        <tbody class="p10 pb0">
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    <b>Nominee 2</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Name in
                                    full...................................................................................................................................................................
                                </td>
                            </tr>

                            <tr>
                                <td class=" p10 pt0 pb5">
                                    <div class="">
                                        <span class="font-size12">Short Name of Nominee (Insert full name starting
                                            with Title i.e. Mr./Mrs./Ms./Dr.<br> abbreviate only if over 30
                                            Character)</span>
                                        <br>
                                        <div class=" display-flex ">

                                            <ul class="rect-box-list  text-center pt5">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>

                                        </div>
                                    </div>
                                </td>
                                <td class=" p10 pt5 pb5 ">
                                    <div class="text-right float-right">
                                        <span class="font-size12">Title i.e. Mr./Mrs./Ms./Dr.</span><br>

                                        <ul class="rect-box-list pl10 pt5 float-right text-center ">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Relationship with A/C
                                    Holder.................................................................
                                    Percentage%..............................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Addess...........................................................................................................................................................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    City.....................Post
                                    Code..............State/Division....................Country........................Telephone.........................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Mobile
                                    Phone.................................................Fax.........................................Email.......................................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Passport No...............................Issue Place.........................Issue
                                    Date........................Expiry Date.........................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    <div class="display-flex">
                                        Residency: Resident
                                        <ul class="rect-box-list pl10  pr10 width16 text-center">
                                            <li></li>
                                        </ul>
                                        Non Resident
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Nationality.........................................................................................
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class=" p10 pt0 pb0">
                                    <div class="display-flex">
                                        NID

                                        <ul class="rect-box-list pl10 text-center">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>

                                    </div>
                                </td>

                                <td class="  p10 pt0">
                                    <div class="  float-right">
                                        <span class="font-size12">Date of Birth: (DD/MM/YYYY)</span> <br>

                                        <ul class="rect-box-list pl10 float-right  pt5  text-center">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>




                        <tbody class="p0">
                            <tr>
                                <td class="p10 pt0 pb5" colspan="2">
                                    <b>Guardian's Details (If Nominee is a Minor)</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Name in
                                    full...................................................................................................................................................................
                                </td>
                            </tr>

                            <tr>
                                <td class=" p10 pt0 pb5" colspan="2">
                                    <div class="">
                                        <span class="font-size12">Short Name of Nominee (Insert full name starting
                                            with Title i.e. Mr./Mrs./Ms./Dr. abbreviate only if over 30
                                            Character)</span>
                                        <br>
                                        <div class=" display-flex ">

                                            <ul class="rect-box-list  text-center pt5">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Relationship with A/C
                                    Holder.................................................................
                                    Percentage%..............................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Addess...........................................................................................................................................................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    City.....................Post
                                    Code..............State/Division....................Country........................Telephone.........................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Mobile
                                    Phone.................................................Fax.........................................Email.......................................................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    Passport No...............................Issue Place.........................Issue
                                    Date........................Expiry Date.........................
                                </td>
                            </tr>
                            <tr>
                                <td class="p10 pt5 pb5" colspan="2">
                                    <div class="display-flex">
                                        Residency: Resident
                                        <ul class="rect-box-list pl10  pr10 width16 text-center">
                                            <li></li>
                                        </ul>
                                        Non Resident
                                        <ul class="rect-box-list pl10 pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Nationality.........................................................................................
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class=" p10 pt0 pb0">
                                    <div class="display-flex">
                                        NID

                                        <ul class="rect-box-list pl10 text-center">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>

                                    </div>
                                </td>

                                <td class="  p10 pt0">
                                    <div class=" float-right">
                                        <span class="font-size12">Date of Birth: (DD/MM/YYYY) </span><br>

                                        <ul class="rect-box-list pl10 float-right text-center   pt5">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <table class="mt5">
                        <tr>
                            <td class="bg-black-6  p5 ">
                                <b>2. Photograph on Nominee / Heirs</b>
                            </td>
                        </tr>

                    </table>


                    <div class="doc-content-wrap mt10">
                        <div class="content-wrap-left text-center">
                            <div class="border  pt20 pb20 pl15 pr15">
                                Recent<br> passport Size<br> Photograph
                            </div>
                            <span>Nominee/ Heir-1</span>
                        </div>
                        <div class="content-wrap-middle text-center">
                            <div class="border pt20 pb20 pl15 pr15">
                                Recent<br> passport Size<br> Photograph
                            </div>
                            <span>Nominee/ Heir-2</span>
                        </div>
                        <div class="content-wrap-middle text-center">
                            <div class="border  pt20 pb20 pl15 pr15">
                                Recent<br> passport Size<br> Photograph
                            </div>
                            <span>Guardian-1</span>
                        </div>
                        <div class="content-wrap-right text-center">
                            <div class="border  pt20 pb20 pl15 pr15">
                                Recent<br> passport Size<br> Photograph
                            </div>
                            <span>Guardian-2</span>
                        </div>
                    </div>


                    <table class="table-border mt5">

                        <tr class="bg-black-6 ">
                            <th class="width20 p5"></th>
                            <th class="width25 p5">Name</th>
                            <th class="width25 p5">Signature</th>

                        </tr>
                        <tr>
                            <td class="p5">Nominee/Heir -1</td>
                            <td class="p5"></td>
                            <td class="p5">&#10003;</td>
                        </tr>
                        <tr>
                            <td class="p5">Guardian -1</td>
                            <td class="p5"></td>
                            <td class="p5"></td>
                        </tr>
                        <tr>
                            <td class="p5">Nominee/Heir -2</td>
                            <td class="p5"></td>
                            <td class="p5"></td>
                        </tr>
                        <tr>
                            <td class="p5">Guardian -2</td>
                            <td class="p5"></td>
                            <td class="p5"></td>
                        </tr>
                        <tr>
                            <td class="p5">First Account Holder</td>
                            <td class="p5"></td>
                            <td class="p5"></td>
                        </tr>
                        <tr>
                            <td class="p5">Second Account Holder</td>
                            <td class="p5"></td>
                            <td class="p5">&#10003;</td>
                        </tr>


                    </table>
                    <!-- end table  -->


                    <!-- end table  -->
                </div>

            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 16 page -->


    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->

                <header>
                    <div class="text-center">
                        <h3 class="display-inline-block p5 font-bold  pr10">
                            Central Depository Bangladesh Limited (CDBL)<br>
                            Depository Account (BO Account) opened with CDBL participant<br>
                            Terms & conditions - Bye Laws 7.3.3 (c)
                        </h3>
                    </div>
                </header>



                <div class="mt20">
                    <b>UNITED FINANCIAL TRADING COMPANY LIMITED</b><br>
                    TREC Holder Dhaka & Chittagong Stock Exchange Ltd.<br>
                    TREC No.- DSE:227 & CSE: 043<br>
                    Full Service Depository participant of CDBL. DP No. 31100
                </div>
                <div class="pt20">
                    Dear Sir,<br>
                    Please open a Depository account (BO Account) in my/our name (s) on the terms and conditions set out
                    <br> bellow. In consideration of
                    <b>UNITED FINANCIAL TRADING COMPANY LIMITED </b>(the "CDBL Participant" opening the account
                    providing depository account
                    facilities to me/us, I/we have signed the BO Account Opening Form as a token acceptance of the terms
                    and conditions set out below.
                </div>

                <table class="table-no-border mt20">

                    <tr class="">
                        <td class=" vertical-align-top pb3 pr10">1.</td>
                        <td class="pb3 ">
                            <p>I/we agree to be bound by The Depositories Act 1999. Depositories Regulations 2000 The
                                Depository<br> (User)
                                Regulations 2003 and abide by the Bye Laws and operation Instructions issued From time
                                to </p> time by CDBL.
                        </td>
                    </tr>
                    <tr class="">
                        <td class=" vertical-align-top pb3 pr10">2.</td>
                        <td class="pb3">
                            <p> CDBL shall allocate a unique identification number to me/us (Account Holder BO ID) for
                                the CDBL <br> Participant
                                to maintain a separate Account for me/us unless I/we instructs the CDBL Participant to
                                <br>keep the securities in an
                                Omnibus Account of the CDBL Participant. The CDBL Participant shall <br> however ensure
                                that my/our securities
                                shall not be mixed with the CDBL Participant's own securities.</p>
                        </td>
                    </tr>
                    <tr class="">
                        <td class=" vertical-align-top pb3 pr10">3.</td>
                        <td class="pb3">
                            <p> I/we agree to pay such fees, charges and deposits to the CDBL Participant, as may be
                                mutually agreed <br>upon for
                                the purpose of opening and maintaining my/our account, for carrying out the instructions
                                <br>and for rendering such
                                other services as are incidental or consequential to my/our holding securities<br> in
                                and transacting
                                through the said depository account with the CDBL Participant.</p>
                        </td>
                    </tr>
                    <tr class="">
                        <td class=" vertical-align-top pb3 pr10">4.</td>
                        <td class="pb3">
                            <p> I/we shall be responsible for.</p>
                            <ul class="mt5">
                                <li class="list-style-alpha pb3 font-size13"> The veracity of all statements and
                                    particulars set out in the account opening form, supporting or <br>accompanying
                                    documents.</li>

                                <li class="list-style-alpha pb3 font-size13"> The authenticity and genuinenss of all
                                    certificates and/or documents submitted to the CDBL.
                                    <br>Participant along with or in support of the account opening form or subsequently
                                    for <br> dematerialization.
                                </li>
                                <li class="list-style-alpha pb3 font-size13"> Title to the Securities submitted to the
                                    CDBL Participant from time to time dematerialization.</li>
                                <li class="list-style-alpha pb3 font-size13"> Ensuring at all times that the
                                    securities to the credit of my/our account are sufficient to meet the
                                    <br>instructions issued to the CDBL Participant for effecting any
                                    transaction/transfer.</li>
                                <li class="list-style-alpha pb3 font-size13"> Informing the CDBL Participant at the
                                    earliest of any changes in my/our account particulars such<br> as address, bank
                                    details, status, authorizations, mandates, nomination, signature etc.</li>
                                <li class="list-style-alpha  font-size13"> Furnishing accurate identification details
                                    whilst subscribing to any issue of securities.</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="width5 vertical-align-top pb3 pr10">5.</td>
                        <td class="pb3">
                            <p> I/we shall notify the CDBL Participant of change in the particulars set out in the
                                application <br> form submitted
                                s to the CDBL Participant at the time of opening the account or furnished to the
                                CDBL<br> Participant from
                                time to time at the earliest. The CDBL Participant shall not be liable or
                                responsible<br> for any loss that
                                may be caused to me/us by reason of my/our failure to intimate such change to the
                                CDBL<br> Participant at the earliest.</p>
                        </td>
                    </tr>
                    <tr class="">
                        <td class=" vertical-align-top pb3 pr10">6.</td>
                        <td class="pb3">
                            <p>Where I/we have executed at BO Account Nomination form:</p>

                            <ul class="mt5">
                                <li class="list-style-alpha pb3"> In the event of my/our death, the nominee shall
                                    receive/draw the securities held in my/our account.</li>
                                <li class="list-style-alpha pb3"> In the event, the nominee so authorized remains a
                                    minor at the time of my/our death the legal <br>guardian is authorized to
                                    receive/draw the securities held in my/our account.</li>
                                <li class="list-style-alpha "> The nominee so authorized, shall be entitled to all
                                    my/our account to the exclusion of all other <br>
                                    persons i.e. my/our heirs, executors and administrators and all other persons
                                    claiming through or <br>
                                    under me/us and delivery of securities to the nominee in pursuance of this authority
                                    shall be binding <br>on all other persons.</li>
                            </ul>
                        </td>

                    </tr>
                </table>




            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->


    <!--end 17 page -->
    <div style="margin-bottom: 200px"></div>
    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <table class="table-no-border">
                    <tr class="">
                        <td class="width5 vertical-align-top pr10">7.</td>
                        <td class="pb3">
                            <p>
                                I/we may at any time call upon the CDBL Participant to close my/our account with the
                                CDBL Participant <br>
                                provided no instructions remain pending or unexecuted and no fees or charges remain
                                payable by me/us<br>
                                to the CDBL Participant. In such event I/we may close my/our account by executing the
                                Accounting <br>
                                Closing From if no balances are standing to my/our credit in the account. In case any
                                balances <br>
                                of securities exist in the account the account may be closed by me/us in one of the
                                following ways:
                            </p>

                            <ul class="mt5">

                                <li class="list-style-alpha pb3 font-size13"> By dematerialization of all existing
                                    balance in my/our account.</li>
                                <li class="list-style-alpha pb3 font-size13"> By transfer of all existing balances in
                                    my/our account to one or more of my/our other account(s)<br>
                                    held with any other CDBL Participant(s).</li>
                                <li class="list-style-alpha font-size13"> By rematerialization of a part of the
                                    existing balances in my/our account by transferring the rest to<br> one or more of
                                    my/our other account(s) with any other CDBL Participant(s).</li>

                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class=" vertical-align-top pr10">8.</td>
                        <td class="pb3">
                            <p>
                                CDBL Participant convenants that it shall.
                            </p>

                            <ul class="mt5">
                                <li class="list-style-alpha pb3 font-size13"> Act only on the instructions or mandate
                                    of the account Holder or that of such person(s) as may <br>have been duly authorized
                                    by the Account Holder in that behalf.</li>
                                <li class="list-style-alpha pb3 font-size13"> Not effect any debit or credit to and
                                    from the account of the Account Holder without appropriate<br> instructions from the
                                    Account Holder.</li>
                                <li class="list-style-alpha pb3 font-size13"> Maintain adequate audit trail of the
                                    execution of the instructions of the Account Holder.</li>
                                <li class="list-style-alpha pb3 font-size13"> Not honour or act upon any instructions
                                    for effecting any debit to the account of the Account Holder in <br>respect
                                    of any securities unless.</li>
                                <ul class="">
                                    <li class="list-style-roman  pb3 font-size13">Such instructions are issued by the
                                        Account Holder under his signature of that of his/its constituted <br>attorney
                                        duly authorized in that behalf.</li>
                                    <li class="list-style-roman pb3 font-size13">The CDBL Participant is satisfied
                                        that the signature of the Account Holder under which instructions
                                        are <br>issued matches with the specimen of the Account Holder or his/its
                                        constituted attorney available
                                        <br> on the records of the CDBL Participants.
                                    </li>
                                    <li class="list-style-roman pb3 font-size13">The balance of clear securities
                                        available in the account holder's are sufficient to honour the account
                                        <br>Holder's instructions.</li>
                                </ul>
                                <li class="list-style-alpha pb3 font-size13">Furnish to the account holder a statement
                                    of account at the end of every month if there has been even<br>
                                    a single entry or transaction during that month, and in any event once at the end of
                                    each financial year.<br>
                                    The CDBL Participant shall furnish such statements at such shorter periods as may be
                                    required by the <br>Account
                                    Holder.on payment of such charges by the Account Holder as may be specified by the
                                    <br> CDBL Participant.
                                    The Account Holder shall scrutinize every statement of account received from the<br>
                                    CDBL Participant for the
                                    accuracy and veracity thereof and shall promptly bring to the notice of the<br> CDBL
                                    Participant any mistakes
                                    inaccuracies or discrepancies in such statements.</li>
                                <li class="list-style-alpha  font-size13">Promptly attend to all grievances/complaints
                                    of the Account Holder and shall resolve all such<br> grievances/
                                    complaints as it relate to matters exclusively within the domain of the CDBL
                                    Participant<br> within one month
                                    of the same being brought to the notice of the CDBL Participant and shall forth
                                    with<br> forward to and follow up
                                    with CDBL all other grievances/complaints of the Account Holder<br> on the same
                                    being brough to the notice of
                                    the CDBL Participant and shall endeavour to resolve <br> same at the earliest.</li>

                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class=" vertical-align-top pr10">9.</td>
                        <td class="pb3">
                            <p>
                                The CDBL Participant shall be entitled to terminate the account relationship in the
                                event of the <br> Account Holder.
                            </p>

                            <ul class="mt5">
                                <li class="list-style-alpha pb3 font-size13"> Failing to pay the fees or charges as
                                    may be mutually agreed upon within a period of one month <br>from the date
                                    of demand made in that behalf.</li>
                                <li class="list-style-alpha pb3 font-size13"> Submitting for dematerialaization any
                                    certificates or other documents of title which forged fabricated,<br>
                                    counter feit or stolen or have been obtained by forgery or the transfer whereof is
                                    restrained or<br> prohibited by any direction, order or decree of any
                                    court or the Securities and Exchange Commission.</li>
                                <li class="list-style-alpha pb3 font-size13"> Commits or Participates in any fraud or
                                    other act of moral turpitude in his/its dealing with the CDBL<br> Participant. </li>
                                <li class="list-style-alpha font-size13"> Otherwise misconduct's himself in any
                                    manner.</li>
                            </ul>
                        </td>

                    </tr>
                    <tr class="">
                        <td class=" vertical-align-top pr10">10.</td>
                        <td class="">
                            <p>
                                Declaration and signature I/we hereby acknowledge that I/we have read and understood the
                                aforesaid <br>
                                terms and conditions for operating Depository Account (BO Account) with CDBL Participant
                                and agree<br> to comply with them.
                            </p>
                    </tr>


                </table>

                <table class="table-border mt15">

                    <tr class="bg-black-6 ">
                        <th class="p5 width20  font-size13">Applicant</th>
                        <th class="p5 font-size13">Name of applicant/Authorized Signature in case of Ltd. Co.</th>
                        <th class="p5 width20 text-center font-size13">Signature</th>

                    </tr>
                    <tr>
                        <td class="pl5 p3 width20">First Applicant</td>
                        <td class="pl5 p3"></td>
                        <td class="pl5 p3 width20 text-center"> &#10003;</td>
                    </tr>
                    <tr>
                        <td class="pl5 p3 width20">Second Applicant</td>
                        <td class="pl5 p3"></td>
                        <td class="pl5 p3 width20 text-center"> &#10003;</td>
                    </tr>
                    <tr>
                        <td class="pl5 p3 width20">Third Applicant</td>
                        <td class="pl5 p3"></td>
                        <td class="pl5 p3 width20 text-center"> &#10003;</td>
                    </tr>

                </table>
                <!-- end table  -->

            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->


    <!--end 18 page -->
    <div style="margin-bottom: 150px"></div>

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->

                <header>
                    <div class="text-center">
                        <h3 class="bg-black color-white display-inline-block p5 font-bold pl10 pr10 mb5">KYC Profile
                            Form</h3>
                        <h4>(under FORM-II)</h4>
                        <span>(Filled by the Stock Broker)</span>
                    </div>
                </header>

                <table class=" table-no-dborder mt15">

                    <tr>
                        <td class="pl0 p10">Name ot the Account Holder
                            (s):.........................................................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td class=" pl0 p10">
                            <div class="display-flex ">
                                B.O Account Number
                                <ul class="rect-box-list pl10 text-center">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>0</li>
                                    <li>3</li>
                                    <li>1</li>
                                    <li>1</li>
                                    <li>0</li>
                                    <li class="border-right">0</li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pl0 p10">Customer Account
                            Number:.................................................................................................................................................
                        </td>
                    </tr>

                    <tr>
                        <td class="pl0 p10">Occupation (with Joint Account Holder's if
                            any):...............................................................................................................
                        </td>
                    </tr>

                    <tr>
                        <td class="pl0 p10">Name of MD/ CEO (in case of Company or Institution or
                            firm):........................................................................................
                        </td>
                    </tr>

                    <tr>
                        <td class="pl0 p10">Nature of Business (in case of Company or Institution or
                            Firm):......................................................................................
                        </td>
                    </tr>

                    <tr>
                        <td class="pl0 p10">
                            Describe in detailed as to whether the account holder (the individual / institution /
                            company) is a director / <br>
                            sponsor of a listed company or he /it is a politically exposed person (PEP) / Influential
                            Person / Member<br> of Senior Management ofan International Organization.
                        </td>
                    </tr>

                    <tr>
                        <td class="pl0 p10">Source of
                            Fund:.....................................................................................................................................................................
                        </td>
                    </tr>

                    <tr>
                        <td class="pl0 p10">Approximate amount of Daily/Monthly/Annual
                            Transactions:...........................................................................................
                        </td>
                    </tr>

                    <tr>
                        <td class="pl0 p10">Describe in details, how source of fund was
                            Verified:......................................................................................................
                        </td>
                    </tr>




                </table>


                <div class="mt20">
                    Details if Information/Documents of the Account Holder(S):
                </div>

                <table class="table-border mt15">

                    <tr class="bg-black-6 ">
                        <th class="width5 p8 " rowspan="2">Sl.</th>
                        <th class="width10 p8" rowspan="2">Nature of Documents</th>
                        <th class="width65 p8" rowspan="2">Number</th>
                        <th class="width5 p8">Photocopy</th>
                        <th class="width5 p8">Obtained</th>
                        <th class="width10 p8" rowspan="2">Applicable for</th>

                    </tr>
                    <tr class="bg-black-6 ">
                        <th class="width5 p8">Yes</th>
                        <th class="width5 p8">No</th>

                    </tr>

                    <tr>
                        <td class="width5 p5 text-center">01</td>
                        <td class="width10 p5">National ID</td>
                        <td class="width65 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5 ">Individual (if any)</td>
                    </tr>

                    <tr>
                        <td class="width5 p5 text-center">02</td>
                        <td class="width10 p5">Passport</td>
                        <td class="width65 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Individual (if any) <br>or NRB or NR <br>or Foreigner</td>
                    </tr>

                    <tr>
                        <td class="width5 p5 text-center">03</td>
                        <td class="width10 p5">Visa/ <br>Residential <br> Permit and<br> Work Permit</td>
                        <td class="width65 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">NRB or NR<br> or Foreigner</td>
                    </tr>

                    <tr>
                        <td class="width5 p5 text-center">04</td>
                        <td class="width10 p5">Birth <br> Certificate</td>
                        <td class="width65 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Individual (if any)</td>
                    </tr>

                    <tr>
                        <td class="width5 p5 text-center">05</td>
                        <td class="width10 p5">Driving <br>License</td>
                        <td class="width65 p5">
                            <div class="display-flex ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Individual (if any)</td>
                    </tr>




                </table>
                <!-- end table  -->


            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 19 page -->

    <div style="margin-bottom: 150px"></div>
    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->


                <table class="table-border ">

                    <tr class="bg-black-6 ">
                        <th class="width5 p8 " rowspan="2">Sl.</th>
                        <th class="width10 p8" rowspan="2">Nature of Documents</th>
                        <th class="width65 p8" rowspan="2">Number</th>
                        <th class="width5 p8">Photocopy</th>
                        <th class="width5 p8">Obtained</th>
                        <th class="width10 p8" rowspan="2">Applicable for</th>

                    </tr>
                    <tr class="bg-black-6 ">
                        <th class="width5 p8">Yes</th>
                        <th class="width5 p8">No</th>

                    </tr>

                    <tr>
                        <td class="width5 p5 text-center">06</td>
                        <td class="width10 p5">Bank Account <br> with <br> supporting <br> Document</td>
                        <td class="width65 p5">
                            <div class="display-flex text-center">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5 ">Individual or NRB<br> or NR or Foreigner</td>
                    </tr>

                    <tr>
                        <td class="width5 p5 text-center">07</td>
                        <td class="width10 p5">NID/Birth <br>Certificate/<br> Password</td>
                        <td class="width65 p5">
                            <div class="display-flex text-center">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Nominee</td>
                    </tr>

                    <tr>
                        <td class="width5 p5 text-center">08</td>
                        <td class="width10 p5">NID/Birth <br>Certificate/<br> Password</td>
                        <td class="width65 p5">
                            <div class="display-flex text-center">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Authorize Person</td>
                    </tr>

                    <tr>
                        <td class="width5 p5 text-center">09</td>
                        <td class="width10 p5">Registration <br> Certificate</td>
                        <td class="width65 p5">
                            <div class="display-flex text-center">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Firm/Company/ <br> Institution</td>
                    </tr>

                    <tr>
                        <td class="width5 p5 text-center">10</td>
                        <td class="width10 p5">Date of <br>Incorporation</td>
                        <td class="width65 p5">
                            <div class="display-flex text-center">
                                <ul class="rect-box-list text-center">
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li class="border-right"></li>

                                    <li class="ml15"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Firm/Company/ <br> Institution</td>
                    </tr>

                    <tr>
                        <td class="width5 p5 text-center">11</td>
                        <td class="width10 p5">Memorandum <br>of Associate </td>
                        <td class="width65 p5">
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Company/ <br> Institution</td>
                    </tr>
                    <tr>
                        <td class="width5 p5 text-center">12</td>
                        <td class="width10 p5"> Article of <br> Associaton </td>
                        <td class="width65 p5">
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Company/ <br> Institution</td>
                    </tr>

                    <tr>
                        <td class="width5 p5 text-center">13</td>
                        <td class="width10 p5">Trade License</td>
                        <td class="width65 p5">
                            <div class="display-flex text-center ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Firm/Company/ <br> Institution</td>
                    </tr>
                    <tr>
                        <td class="width5 p5 text-center">14</td>
                        <td class="width10 p5">TIN</td>
                        <td class="width65 p5">
                            <div class="display-flex text-center ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Firm/Company/ <br> Institution</td>
                    </tr>
                    <tr>
                        <td class="width5 p5 text-center">15</td>
                        <td class="width10 p5">VAT <br>Registration</td>
                        <td class="width65 p5">
                            <div class="display-flex text-center ">
                                <ul class="rect-box-list ">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Firm/Company/ <br> Institution</td>
                    </tr>
                    <tr>
                        <td class="width5 p5 text-center">16</td>
                        <td class="width10 p5"> Particular of <br> directors </td>
                        <td class="width65 p5">
                        </td>
                        <td class="width5 p5"></td>
                        <td class="width5 p5"></td>
                        <td class="width10 p5">Company/ <br> Institution</td>
                    </tr>

                </table>
                <!-- end table  -->
                <table class="mt15">
                    <tr>
                        <td class=""><b>Comments (if
                                any):</b>......................................................................................................................................................
                        </td>
                    </tr>

                </table>

                <div class="doc-content-wrap mt40">
                    <div class="content-wrap-left text-center">
                        .......................................<br>
                        Signature of Account <br> Opening Officer with date & <br> seal
                    </div>
                    <div class="content-wrap-right text-center">
                        .......................................<br>
                        Signature of Authorize <br> Officer/MD/CEO/ with date <br>& Seal
                    </div>
                </div>

                <table class="mt15">
                    <tr>
                        <td class="">When was the information related to the Account last reviewed and updated?
                            If any,</td>
                    </tr>
                    <tr>
                        <td class="pt5">details with
                            comments:...................................................................................................................................
                        </td>
                    </tr>

                </table>

                <table class="mt15">
                    <tr>
                        <td class="">
                            ...............................................................................</td>
                    </tr>
                    <tr>
                        <td class="pt5">Signature of the Officer performing review</td>
                    </tr>
                    <tr>
                        <td class="pt5">and update, with date & Seal</td>
                    </tr>

                </table>


            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 20 page -->

    <div style="margin-bottom: 150px"></div>

    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->

                <header>
                    <div class="text-center">
                        <h3 class="display-inline-block p5 font-bold  pr10">
                            UNITED FINANCIAL TRADING COMPANY LIMITED
                        </h3><br>
                        <span>Signature Card</span>
                    </div>
                </header>


                <table class="table-no-border">


                    <tbody class="p10 pb0">
                        <tr>
                            <td class="p10 pt5 pb5">
                                Name in
                                full.................................................................................................................................................................
                            </td>
                        </tr>
                        <tr>

                            <td class=" p10 pt0 pb5">
                                <div class=" display-flex ">
                                    Customer Account No.

                                    <ul class="rect-box-list pl10 text-center">
                                        <li></li>
                                        <li></li>
                                        <li class="border-right"></li>

                                        <li class=" ml15 border-right"></li>

                                        <li class="ml15"></li>

                                        <li class="border-right"></li>

                                        <li class="ml15"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>

                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td class=" p10 pt0 pb5">
                                <div class=" display-flex ">
                                    BO ID No.

                                    <ul class="rect-box-list pl10 text-center">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li class="border-right"></li>

                                        <li class="ml15"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>

                                    </ul>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>



                <table class="table-no-border border mt10">
                    <thead>
                        <tr class="bg-black-6 ">
                            <th class=" p8 no-border text-left" colspan="3">
                                <b> First Account Holder</b>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class=" pl10 pt0 ">
                                Name..........................................................................................
                                <div class="text-center">
                                    <div class=" display-flex  mt10">
                                        Date:

                                        <ul class="rect-box-list pl10 text-center">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul><br>


                                    </div>
                                    <span class="letter-spacing8 ml-5">DDMMYYYY</span>
                                </div>
                            </td>

                            <td class=" pl10 pt0 pb15 vertical-align-bottom ">
                                <div class="text-center">
                                    ............................<br>
                                    Signature
                                </div>
                            </td>
                            <td class=" border-left p30 ">
                                <div class="text-center">
                                    Stamp Size<br> Photo
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- end 1. first Account Holder  -->

                <table class="table-no-border border mt10">
                    <thead>
                        <tr class="bg-black-6 ">
                            <th class=" p8 no-border text-left" colspan="3">
                                <b>Joint Account Holder</b>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class=" pl10 pt0 ">
                                Name..........................................................................................
                                <div class="text-center">
                                    <div class=" display-flex  mt10">
                                        Date:

                                        <ul class="rect-box-list pl10 text-center">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul><br>


                                    </div>
                                    <span class="letter-spacing8 ml-5">DDMMYYYY</span>
                                </div>
                            </td>

                            <td class=" pl10 pt0 pb15 vertical-align-bottom ">
                                <div class="text-center">
                                    ............................<br>
                                    Signature
                                </div>
                            </td>
                            <td class=" border-left p30 ">
                                <div class="text-center">
                                    Stamp Size<br> Photo
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- end 2. joint Account Holder  -->

                <table class="table-no-border border mt10">
                    <thead>
                        <tr class="bg-black-6 ">
                            <th class=" p8 no-border text-left" colspan="3">
                                <b>Nominee</b>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class=" pl10 pt0 ">
                                Name..........................................................................................
                                <div class="text-center">
                                    <div class=" display-flex  mt10">
                                        Date:

                                        <ul class="rect-box-list pl10 text-center">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul><br>


                                    </div>
                                    <span class="letter-spacing8 ml-5">DDMMYYYY</span>
                                </div>
                            </td>

                            <td class=" pl10 pt0 pb15 vertical-align-bottom ">
                                <div class="text-center">
                                    ............................<br>
                                    Signature
                                </div>
                            </td>
                            <td class=" border-left p30 ">
                                <div class="text-center">
                                    Stamp Size<br> Photo
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- end 3. Nominee  -->


                <table class="table-no-border border mt10">
                    <thead>
                        <tr class="bg-black-6 ">
                            <th class=" p8 no-border text-left" colspan="3">
                                <b>Authorized Person</b>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class=" pl10 pt0 ">
                                Name..........................................................................................
                                <div class="text-center">
                                    <div class=" display-flex  mt10">
                                        Date:

                                        <ul class="rect-box-list pl10 text-center">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul><br>


                                    </div>
                                    <span class="letter-spacing8 ml-5">DDMMYYYY</span>
                                </div>
                            </td>

                            <td class=" pl10 pt0 pb15 vertical-align-bottom ">
                                <div class="text-center">
                                    ............................<br>
                                    Signature
                                </div>
                            </td>
                            <td class=" border-left p30 ">
                                <div class="text-center">
                                    Stamp Size<br> Photo
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- end 4. Authorized Person  -->

                <table class="table-no-border border mt10">
                    <thead>
                        <tr class="bg-black-6 ">
                            <th class=" p8 no-border text-left" colspan="3">
                                <b>Power of Attorney</b>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class=" pl10 pt0 ">
                                Name..........................................................................................
                                <div class="text-center">
                                    <div class=" display-flex  mt10">
                                        Date:
                                        <div>
                                            <ul class="rect-box-list pl10 text-center">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                            <span class="letter-spacing8 ml10">DDMMYYYY</span>
                                        </div>

                                    </div>
                                </div>
                            </td>

                            <td class=" pl10 pt0 pb15 vertical-align-bottom " rowspan="2">
                                <div class="text-center">
                                    ............................<br>
                                    Signature
                                </div>
                            </td>
                            <td class=" border-left p30 " rowspan="2">
                                <div class="text-center">
                                    Stamp Size<br> Photo
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class=" pl10 pt5 ">

                                <div class="">
                                    <div class="display-flex float-left pb10">
                                        <ul class="rect-box-list pl5  pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Cheque Collect
                                    </div>
                                    <div class="display-flex float-left pb10">
                                        <ul class="rect-box-list pl15 pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Cheque Deposit
                                    </div>
                                    <div class="display-flex float-left pb10">
                                        <ul class="rect-box-list pl15  pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Share Collect
                                    </div>
                                    <div class="display-flex float-left pb10">
                                        <ul class="rect-box-list pl5  pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Share Deposit
                                    </div>
                                    <div class="display-flex float-left pb10">
                                        <ul class="rect-box-list pl15  pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Portfolio Statement Collect
                                    </div>
                                    <div class="display-flex float-left pb10">
                                        <ul class="rect-box-list pl5  pr10 height16 text-center">
                                            <li></li>
                                        </ul>
                                        Buy / Sell Order Slip Deposit
                                    </div>


                            </td>

                        </tr>
                    </tbody>
                </table>
                <!-- end 5. Power of Attorney -->

                <table class="table-no-border border mt10">
                    <thead>
                        <tr class="bg-black-6 ">
                            <th class=" p8 no-border text-left" colspan="3">
                                <div class="display-flex float-left ">
                                    <ul class="rect-box-list pl5  pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Dealer
                                </div>
                                <div class="display-flex float-left ">
                                    <ul class="rect-box-list pl10  pr10 height16 text-center">
                                        <li></li>
                                    </ul>
                                    Sub Dealer
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class=" pl10 pt0 ">
                                Name..........................................................................................
                            </td>
                            <td class=" pl10 pt0 pb15 vertical-align-bottom " rowspan="2">
                                <div class="text-center">
                                    ............................<br>
                                    Signature
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class=" pl10 pt10 display-flex">
                                Short Name........................................................

                                <div class="text-center">
                                    <div class=" display-flex ml15 mt-5 mt10">
                                        Date:
                                        <div>
                                            <ul class="rect-box-list pl10 text-center">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                            <span class="letter-spacing8 ml10">DDMMYYYY</span>
                                        </div>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- end 6.Dealer / Sub dealer -->

                <table class="table-no-border  mt10">


                    <tbody>


                        <tr>

                            <td>
                                <div class=" display-flex ml15 mt10">
                                    Master Code, if any
                                    <div>
                                        <ul class="rect-box-list pl10 text-center">
                                            <li class="border-right width-70">Yes</li>

                                            <li class="ml15 border-right width-70">No</li>

                                            <li class="ml15 width25"></li>
                                            <li class="width25"></li>
                                            <li class="width25"></li>
                                            <li class="width25"></li>
                                            <li class="width25"></li>
                                        </ul>
                                    </div>

                                </div>
                            </td>
                            <td class=" pl10 pt0 ">
                                Name............................................................................
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- end 7.master code -->

            </div>
        </div>
    </div>
    <!--Invoice Wrap End here -->

    <!--end 21 page -->


    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section"
                style="background-image: url('{{ publicAsset("assets/images/bo_file/back_cover.jpg") }}');    
			background-repeat: no-repeat;
			background-size: cover;
			background-position: right;">
                <!--Header Start Here -->
                <!-- <div style="margin-top:20px;"></div> -->
                <header>
                    <div class="text-center  ">
                        <h2 class="font-bold">OUR BRANCHES</h2>
                    </div>
                </header>





                <div class=" ">

                    <table class="table-no-border">

                        <tbody>
                            <tr>
                                <td colspan="3" class="pt3 pb0 width100 "> <b class="font-bold">Our Office</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 ">Head Office</td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>1</li>
                                                <li>0</li>
                                                <li>1</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size12  ">PFI Tower (2nd Floor), 56-57, Dilkusha
                                    C/A, Dhaka-1000. Phone: 01321128885</td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 ">Register Office</td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>0</li>
                                                <li>1</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size12">Room #203 (1st floor), 9/E, Motijheel
                                    C/A, Dhaka - 1000 Phone : 01321128883</td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width100" colspan="3">
                                    <b class="font-bold mt10 ">Extension of Main Office:</b>
                                </td>
                            </tr>

                            <tr>
                                <td class="pt3 pb0 width20 font-size3 ">Peoples Insurance Building </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>0</li>
                                                <li>3</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size12">Peoples Insurance Building (12th Floor),
                                    36 Dilkusha, C/A, <br>Dhaka- 1000, Phone : 01321128893</td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size1">Hadi Mansion </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>0</li>
                                                <li>4</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size12">Hadi Mansion (3rd Floor), 2 Dilkusha C/A,
                                    Motijheel, Dhaka -1000, Phone: 01321128894</td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size1">Printer's Building </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>0</li>
                                                <li>5</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size12">Printer's Building (5th Floor), Room #2,
                                    5 Rajuk Avenue, Motijheel C/A,<br> Dhaka-1000, Phone: 01321128895</td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size1">DSE -Annex Building </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>0</li>
                                                <li>6</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size12">DSE -Annex Building, Ground Floor, 9/E,
                                    Motijheel C/A, <br>Dhaka-1000, Phone : 01321128896</td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size1">Nikunja-2 </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>0</li>
                                                <li>7</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size11">
                                    Room #242, (Level-12), DSE-Tower, Plot # 46, Road # 21, Nikunja-02, Dhaka-1229,
                                    <br>Bangladesh, Phone: 01321128897
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size13">Shareef Mansion </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>0</li>
                                                <li>8</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size11">
                                    Shareef Mansion (4th Floor, West Side, Room # 02), 56-57, Motijheel C/A,
                                    <br>Dhaka-1000, Phone: 01321128898
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size13">Eastern Arzoo Bhaban </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>0</li>
                                                <li>9</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size11">
                                    Eastern Arzoo Bhaban (7th floor), Room # 702, 61 Bijoy Nagar, Dhaka -1000,
                                    01321128900
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size13">Mirpur -1</td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>1</li>
                                                <li>2</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size11">
                                    Room # 17-18 (3rd Floor), Fair Plaza, Plot-C/3, Block-D, Road-1, Mirpur-1,
                                    Dhaka-1216,<br> Bangladesh, Phone: 01321128903
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size13">Mirpur -6</td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>1</li>
                                                <li>3</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size11">
                                    House-63 (Ground Floor), Avenue-5, Section-6, Block-A, Mirpur, Dhaka-1216,<br>
                                    Bangladesh, Phone: 01321128904
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size13">Bashundhara</td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>1</li>
                                                <li>4</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size11">
                                    Jabbar Mollah Tower, Holding # 532, Bashundhara, Apollo Hospital Gate,
                                    <br>Dhaka-1229, Phone: 01321128905
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size13">Wari</td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>1</li>
                                                <li>6</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size11">
                                    21/6 (1st Floor), East Side, Ware Street, Wari, Dhaka-1203, Bangladesh, Phone: 01321
                                    128928
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size13">Mohammadpur</td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>1</li>
                                                <li>7</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size11">
                                    House # 1, (Ground floor,South-East side), Road # 09, Block # A, Noboudoy R/A,
                                    Adabor,<br> Mohammadpur, Dhaka-1207, Phone: 01321 128929
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size13">Lily Pond Center </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>1</li>
                                                <li>8</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size11">
                                    Suite # F-14, G-14, Level-14 (South West Side), Lily Pond Center, 3, R. K. Mission
                                    Road,<br> Dhaka-1203, Phone: 01324439407
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width25 font-size13"> Modern Mansion </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>2</li>
                                                <li>1</li>
                                                <li>9</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width70 font-size11">
                                    Room - 03, Modern Mansion (5th Floor, North side), 53, Motijheel C/A,<br> Dhaka-
                                    1000, Phone: 01321128893
                                </td>
                            </tr>



                            <tr>
                                <td class="pt3 pb0 width100" colspan="3">
                                    <b class="font-bold mt10 ">Branch Office:</b>
                                </td>
                            </tr>

                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Mirpur Branch </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>3</li>
                                                <li>0</li>
                                                <li>1</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">Central Plaza (Level-7), Suite # 7002,
                                    231, Begum Rokeya Sarani, Senpara Parbata,<br> Mirpur-10, Dhaka-1216, Phone:
                                    01321128886 </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Banani</td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>3</li>
                                                <li>0</li>
                                                <li>2</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">Room-3, (Ground Floor, Left Side),
                                    House-10, Road-6, Block-C, Banani,<br> Dhaka-1213, Phone: 01321128887</td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Chattagram Branch</td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>3</li>
                                                <li>0</li>
                                                <li>3</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">Room # 9-D (9th Floor, North West Side),
                                    Akhtaruzzaman Center, 21/22, <br>Agrabad C/A, Chattagram-4100, Phone: 01321128889
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Sylhet Branch</td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>3</li>
                                                <li>0</li>
                                                <li>4</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">Room No 611-612, R. N. Tower (5th Floor),
                                    Chowhatta, Sylhet, Phone: 01321128890 </td>
                            </tr>


                            <tr>
                                <td class="pt3 pb0 width100" colspan="3">
                                    <b class="font-bold mt10 ">Digital Office:</b>
                                </td>
                            </tr>

                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Khulna </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>4</li>
                                                <li>0</li>
                                                <li>1</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">Mollick Shopping Complex (6th Floor,
                                    South Side), 99 Lower Jessore Road, <br>Khulna-9100, Phone: 01321128907 </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Cumilla </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>4</li>
                                                <li>0</li>
                                                <li>2</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">Room #21 (8th floor, Left Side), Nahar
                                    Plaza, 67/58, Nazrul Avenue, 2nd Kandirpar,<br> Cumilla- 3500, Phone: 01703862501
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Chandpur </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>4</li>
                                                <li>0</li>
                                                <li>3</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">Shahid Muktizudda Sarak, Hokars Market
                                    (East Side), Chandpur Sadar,<br> Bangladesh, Phone: 0131128910 </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Gazipur </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>4</li>
                                                <li>0</li>
                                                <li>4</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">
                                    Room-505, Prokowshali Bhaban (4th Floor), G-113/3, Razbari Road, Joydevpur,
                                    <br>Gazipur- 1700, Phone: 01321 128930
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Ashuganj </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>4</li>
                                                <li>0</li>
                                                <li>5</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0  pl10 width75 font-size11">
                                    SS Shoping Mall, (2nd Floor, East Side), Kachari Road, Ashugonj Bazar,
                                    Ashugonj-3402,<br> Brahmanbaria. Phone: 01321128931
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Chattogram </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>4</li>
                                                <li>0</li>
                                                <li>6</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">
                                    Equity Kohinoor (2nd Floor, North Side), Room No # 201, 144, Hazari Lane,
                                    Anderkilla,<br> Chattogram, Phone: 01324439406
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Tangail </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>4</li>
                                                <li>0</li>
                                                <li>7</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">
                                    Holding No# 317, (2nd floor, South-West Corner), Block- A, Boro Kalibari Road,<br>
                                    Tangail-1900, Phone: 01324439408
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Sirajganj </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>4</li>
                                                <li>0</li>
                                                <li>8</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">
                                    Zaman Complex (2nd Floor, West Portion), S. S. Road, Holding No. 981-982,
                                    Sirajganj-6700
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Rangpur </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>4</li>
                                                <li>0</li>
                                                <li>9</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">
                                    Manchitra Market (1st Floor), Muktijuddha Commercial Complex, Station Road, Rangpur
                                    Sadar,<br> Rangpur-5400, Phone: 01911869400
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Chowmuhani </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>4</li>
                                                <li>1</li>
                                                <li>0</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">
                                    Room #2 (2nd Floor, East Side), Hazi Golam Rahman Miar Building, Holding # 856, Feni
                                    Road,<br> Chowmuhani-3821, Noakhali, Phone: 01321128908
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Moulvibazar </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>4</li>
                                                <li>1</li>
                                                <li>1</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">
                                    Khan Tower, Holding # 173, (1st Floor, South Side), Shamsher Nagar Road,
                                    Chowmuhuna,<br> Moulvibazar, Phone:01321128909
                                </td>
                            </tr>
                            <tr>
                                <td class="pt3 pb0 width20 font-size13">Sreemongal </td>
                                <td class="pt3 pb0 width5"><b>
                                        <div class="display-flex ">
                                            <ul class="rect-box-list pl10 text-center">
                                                <li>4</li>
                                                <li>1</li>
                                                <li>2</li>
                                            </ul>
                                </td>
                                <td class="pt3 pb0 pl10 width75 font-size11">
                                    Room #01 (1st Floor, East Side), Holdings # 347, Sikder Bhaban, Hobigonj Road,<br>
                                    Sreemongal, Moulvibazar-3210
                                </td>
                            </tr>

                    </table>
                    <!-- end table  -->


                </div>

                <!-- <div style="margin-top:185px;"></div> -->


            </div>
        </div>
        <!--Invoice Wrap End here -->

        <!--end 22 page -->




</body>

</html>
