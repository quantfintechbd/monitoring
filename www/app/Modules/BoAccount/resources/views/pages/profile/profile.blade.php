<!DOCTYPE html>
<html lang="en" style="scroll-behavior:smooth;-webkit-text-size-adjust:100%">
<head>
    <title>{{ env("APP_NAME") ?? "Online BO" }} {{ !empty($pageName) ? " | {$pageName}" : null }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- App favicon --> 
    <link rel="icon" href="{{ publicAsset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ publicAsset('assets/images/uftcl_icon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>  
        *,::after,::before{box-sizing:border-box}
        *{margin:0;padding:0} 
         @media print {
            @page {
                size: auto; /* Set the size as auto */
                margin: 0; /* Reset the margin */
            }
            .btn-area {
                display: none !important;
            }
        }   
    </style>
</head>
<body style="background:#F8F9FD;width:auto;height:100%;margin:0">
    <!--Invoice Wrap Start here -->
    <div>
        <div style="max-width:880px;margin:0 auto;padding:30px 15px">

            @if (!request()->has('pdf'))
            <div class="btn-area" style="margin:0 auto 20px">
                <a href="{{ route('bo-account.user') }}" style="outline:none;text-decoration:none;color:#fff;cursor:pointer;border:1px solid #ccc;border-radius:4px;padding:8px 16px;cursor:pointer;transition:background-color 0.3s,color 0.3s,border-color .3s;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen,Ubuntu,Cantarell,'Open Sans','Helvetica Neue',sans-serif;background:#1000ef;"><< BACK</a>
                <a href="javascript:void(0)" onclick="printThis(this)" style="outline:none;text-decoration:none;color:#fff;cursor:pointer;border:1px solid #ccc;border-radius:4px;padding:8px 16px;cursor:pointer;transition:background-color 0.3s,color 0.3s,border-color .3s;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen,Ubuntu,Cantarell,'Open Sans','Helvetica Neue',sans-serif;background:#00adef">PRINT</a>
                <a href="{{ route('bo-account.user.profile', request()->id) }}?pdf=true" style="outline:none;text-decoration:none;color:#fff;cursor:pointer;border:1px solid #ccc;border-radius:4px;padding:8px 16px;cursor:pointer;transition:background-color 0.3s,color 0.3s,border-color .3s;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen,Ubuntu,Cantarell,'Open Sans','Helvetica Neue',sans-serif;background:#008b8b;">PDF</a>
                @session("success")
                <div style="background-color:#28a745;color:#fff;padding:15px;border-radius:5px;box-shadow:0 2px 4px rgba(0,0,0,0.1);font-size:16px;width:fit-content;margin:20px auto;width:100%">
                    <span style="display:inline-block;width:20px;height:20px;background-color:#fff;color:#28a745;border-radius:50%;text-align:center;line-height:20px;margin-right:10px">✔</span>
                    <p style="display:inline-block;margin:0">{{ session("success") }}</p>
                </div>
                @endsession
            </div>
            @endif

            <div style="background:#fff;position:relative;height:100%;width:100%">
                <header style="border-radius:20px 20px 0 0;padding:50px 50px 30px">
                    <div style="margin-bottom:10px;text-align:center">
                        <a href="{{ route('dashboard.home') }}"><img style="height:60px;width:auto" src="{{ publicAsset('assets/images/uftcl-logo.png') }}" alt="logo"></a>
                    </div>
                    <div style="margin-bottom:15px;text-align:center">
                        <h2 style="margin-bottom:5px;margin:0;padding:0">United Financial Trading Company Limited (UFTCL)</h2>
                        <h5 style="margin:0;padding:0">Dhaka STOCK EXCHANGE LTD. - REG NO : </h5>
                        <span style="font-size:13px">Finlay House, Agrabad, Chittagong, Bangladesh.</span>
                    </div>
                    <div style="background:#00adef;width:400px;margin:0 auto;padding:6px;border-radius:4px;color:#000;font-style:italic;margin-bottom:5px;text-align:center">
                        <h2 style="margin:0;padding:0">ACCOUNT OPENING FORM</h2>
                    </div>
                    <div style="text-align:center">
                        <span>Please complete all details in Capital Letter and Tick ( √) the appropriate box. <br>
                        </span>
                        <span>All Communication shall be sent only to the First Account Holder's/Authorized Person’s
                            contact Address: </span>
                    </div>
                </header>


                <!--Invoice content start here -->
                <section style="position:relative;width:100%;height:100%" id="agency_service">
                    <div style="max-width:850px;margin:0 auto">
                        <!--invoice owner name content -->
                        <div style="padding:10px 0 20px;overflow-x:auto;width:773px;margin:0 auto">
                            <div style="width: 100%; text-align: center;">
                                <div style="width: 25%; float: left; text-align: left;">
                                    <b>CLIENT CODE:</b>
                                </div>
                                <div style="width: 50%; float: left; text-align: center;">
                                    <b>CATEGORY OF ACCOUNT:</b><br>
                                    <b>TYPE OF ACCOUNT:</b><br>
                                </div>
                                <div style="width: 25%; float: left;">
                                    <b>TYPE OF CLIENT:</b>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </div>
                        
                        {{-- Account Holders --}}
                        @if(!empty($profile->boAccount))
                        <div style="padding:10px 0 20px;overflow-x:auto;width:773px;margin:0 auto">  
                            @foreach ($profile->boAccount as $account) 

                            @php 
                                $title = !empty($account->parent_id) ? \App\Modules\BoAccount\Enums\BoDocumentTypeEnum::Second_Acc_Holder : \App\Modules\BoAccount\Enums\BoDocumentTypeEnum::First_Acc_Holder;
                            @endphp

                            <table style="width:100%;table-layout:auto;border-collapse:collapse;width:100%;white-space:nowrap;background-color:#fff" style="border-collapse:collapse;width:100%;white-space:nowrap;background-color:#fff">
                                {{-- <thead style="background:#1e1e1e0f"> --}}
                                    <tr>
                                        <th style="background:#e9e9ef;text-align:left;padding: 0.5rem 1rem;color: #12151C;text-align: left;" colspan="4">{{ $title ?? null }}</th>
                                    </tr>
                                {{-- </thead>  --}}
                                {{-- <tbody> --}}
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="3"><b>Name:</b> {{ $account->courtesy_title ?? null }} {{ $account->firstname ?? null }} {{ $account->lastname ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:right" colspan="1">
                                            @if ($profile->boDocuments()->where('title',$title)->exists())
                                                <img src="{{ publicAsset($profile->boDocuments()->where('title',$title)->first()->path ?? null) }}" alt="account holder" width="100">
                                            @else
                                                <img src="{{ publicAsset('assets/images/Not-found-image.svg') }}" alt="account holder" width="100">
                                            @endif
                                        </td>
                                    </tr>
                                    @if (empty($account->parent_id))
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="2"><b> Client Code:</b>  </td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="2"><b>BO Types:</b> {{ $account->type_of_client ?? null }}</td>
                                    </tr>
                                    @endif
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Occupation:</b> {{ $account->occupation ?? null}}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="{{ empty($account->parent_id) ? 2 : 3 }}"> <b>Date of Birth:</b> {{ $account->date_of_birth ?? null}}</td>
                                        
                                        @if (empty($account->parent_id))
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"> <b>Gender:</b> {{ $account->gender ?? null }}</td>
                                        @endif
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Father's Name:</b> {{ $account->father_name ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="3"> <b>Mother's Name:</b> {{ $account->mother_name ?? null }}</td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="4"> <b> Contact Address: </b>{{ $account->address ?? null }}</td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Country:</b> {{ $account->country ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>State/Division:</b> {{ $account->division ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>City:</b> {{ $account->city ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Post Code:</b>{{ $account->post_code ?? null }}</td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Mobile:</b> {{ $account->mobile ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Tel:</b>{{ $account->telephone ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Fax:</b>{{ $account->fax ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>E-Mail:</b> {{ $account->email ?? null }}</td>
                                    </tr>

                                    @if (empty($account->parent_id))
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Nationality:</b> {{ $account->nationality ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>NID:</b> {{ $account->nid ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>TIN:</b> {{ $account->tin ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Residential Status:</b> {{ $account->residency ?? null }}</td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="2"><b>Desired Branch:</b> {{ $account->branch ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="2"><b>Stock Exchange:</b>{{ $account->stock_exchange ?? null }}</td>
                                    </tr>
                                    @endif

                                    @if ($account->is_director == \App\Modules\Main\Enums\ActiveInactiveEnum::Active)
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="4"> <b> Stock Exchange/Listed Company/Brokerage Firm: </b> {{ $account->director_company ?? null }}</td>
                                    </tr>
                                    @endif
                                {{-- </tbody>  --}}
                            </table>
                            @endforeach 
                        </div>
                        @endif

                        {{-- Bank Detials --}}
                        @if(!empty($profile->boBankInfo))
                        <div style="padding:10px 0 20px;overflow-x:auto;width:773px;margin:0 auto">
                            <table style="width:100%;table-layout:auto;border-collapse:collapse;width:100%;white-space:nowrap;background-color:#fff" >
                                {{-- <thead style="background:#1e1e1e0f"> --}}
                                    <tr>
                                        <th style="background:#e9e9ef;text-align:left;padding: 0.5rem 1rem;color: #12151C;text-align: left;" colspan="4">Bank Details</th>
                                    </tr>
                                {{-- </thead> --}}
                                {{-- <tbody> --}}
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="2"><b> Name of Bank:</b> {{ $profile->boBankInfo->bank->name ?? null }} </td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="2"><b>Branch:</b> {{ $profile->boBankInfo->branch->branch_name ?? null }}</td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="2"><b> Routing:</b> {{ $profile->boBankInfo->branch->routing_number ?? null }} </td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="2"><b>Account Number:</b> {{ $profile->boBankInfo->account_number ?? null }}</td>
                                    </tr>
                                {{-- </tbody> --}}
                            </table>
                        </div>
                        @endif


                        {{-- Authorize Information --}}
                        @if(!empty($profile->boAuthorizeInfo))
                        <div style="padding:10px 0 20px;overflow-x:auto;width:773px;margin:0 auto">
                            <table style="width:100%;table-layout:auto;border-collapse:collapse;width:100%;white-space:nowrap;background-color:#fff" >
                                {{-- <thead style="background:#1e1e1e0f"> --}}
                                    <tr>
                                        <th style="background:#e9e9ef;text-align:left;padding: 0.5rem 1rem;color: #12151C;text-align: left;" colspan="4">Authorize Information</th>
                                    </tr>
                                {{-- </thead> --}}
                                {{-- <tbody> --}}
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="3"><b>Name:</b> {{ $profile->boAuthorizeInfo->courtesy_title ?? null }} {{ $profile->boAuthorizeInfo->firstname ?? null }} {{ $profile->boAuthorizeInfo->lastname ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:right">
                                            @if ($profile->boDocuments()->where('title', \App\Modules\BoAccount\Enums\BoDocumentTypeEnum::Authorize_User)->exists())
                                                <img src="{{ publicAsset($profile->boDocuments()->where('title',\App\Modules\BoAccount\Enums\BoDocumentTypeEnum::Authorize_User)->first()->path ?? null) }}" alt="authorize user's photo" width="100">
                                            @else
                                                <img src="{{ publicAsset('assets/images/Not-found-image.svg') }}" alt="authorize user's photo" width="100">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px"><b>Occupation:</b> {{ $profile->boAuthorizeInfo->occupation ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="3"><b>Date of Birth:</b> {{ $profile->boAuthorizeInfo->date_of_birth ?? null }}</td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;" colspan="2"><b>Father's Name:</b> {{ $profile->boAuthorizeInfo->father_name ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="2"><b>Mother's Name:</b> {{ $profile->boAuthorizeInfo->mother_name ?? null }}</td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="4"><b>Contact Address:</b> {{ $profile->boAuthorizeInfo->address ?? null }}</td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Country:</b> {{ $profile->boAuthorizeInfo->country ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>State/Division:</b> {{ $profile->boAuthorizeInfo->division ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>City:</b> {{ $profile->boAuthorizeInfo->city ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Post Code:</b> {{ $profile->boAuthorizeInfo->post_code ?? null }}</td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Mobile:</b> {{ $profile->boAuthorizeInfo->mobile ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Tel:</b> {{ $profile->boAuthorizeInfo->telephone ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Fax:</b> {{ $profile->boAuthorizeInfo->fax ?? 'N/A' ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>E-Mail:</b> {{ $profile->boAuthorizeInfo->email ?? null }}</td>
                                    </tr>
                                {{-- </tbody> --}}
                            </table> 
                        </div>
                        @endif



                        {{-- Nominee Information --}}
                        @if(!empty($profile->boNomineeInfo))
                        <div style="padding:10px 0 20px;overflow-x:auto;width:773px;margin:0 auto">
                            @foreach($profile->boNomineeInfo as $nominee)
                            <table style="width:100%;table-layout:auto;border-collapse:collapse;width:100%;white-space:nowrap;background-color:#fff" >
                                {{-- <thead style="background:#1e1e1e0f"> --}}
                                    <tr>
                                        <th style="background:#e9e9ef;text-align:left;padding: 0.5rem 1rem;color: #12151C;text-align: left;" colspan="4">{{ $nominee->type }} of Account Holder</th>
                                    </tr>
                                {{-- </thead> --}}
                                {{-- <tbody> --}}
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="3"><b>Full Name:</b> {{ $nominee->courtesy_title ?? null }} {{ $nominee->firstname ?? null }} {{ $nominee->lastname ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:right" colspan="1">
                                            @if ($profile->boDocuments()->where('title', $nominee->type)->exists())
                                                <img src="{{ publicAsset($profile->boDocuments()->where('title', $nominee->type)->first()->path ?? null) ?? null }}" alt="authorize user's photo" width="100">
                                            @else
                                                <img src="{{ publicAsset('assets/images/Not-found-image.svg') ?? null }}" alt="authorize user's photo" width="100">
                                            @endif
                                        </td>
                                    </tr> 
                                    <tr style="border:1px solid #e9e9ef"> 
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Residential Status:</b> {{ $nominee->residency ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"> <b>Date of Birth:</b> {{ $nominee->date_of_birth ?? null }}</td>
                                        @if(!empty($nominee->maturity_date_of_minor))
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="2"><b>Maturity Date of Minor :</b> {{ $nominee->maturity_date_of_minor ?? null }}</td>
                                        @else 
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="2"></td>
                                        @endif
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        @if (!empty($nominee->maturity_date_of_minor))
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Relationship with<br/>Nominee:</b> {{ $nominee->relationship ?? null }}</td>
                                        @else
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Relationship with<br/>A/C Holder:</b> {{ $nominee->relationship ?? null }}</td>
                                        @endif
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="3"> <b>Beneficiary Percentage:</b> {{ $nominee->percentage ?? null }}</td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px" colspan="4"> <b>Contact Address:</b> <p style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:200px">{{ $nominee->address ?? null }}</p></td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Country:</b> {{ $nominee->country ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>State/Division:</b> {{ $nominee->division ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>City:</b> {{ $nominee->city ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Post Code:</b> {{ $nominee->post_code ?? null }}</td>
                                    </tr>
                                    <tr style="border:1px solid #e9e9ef">
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Mobile:</b> {{ $nominee->mobile ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Tel:</b> {{ $nominee->telephone ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>Fax:</b> {{ $nominee->fax ?? null }}</td>
                                        <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"><b>E-Mail:</b> {{ $nominee->email ?? null }}</td>
                                    </tr>
                                {{-- </tbody> --}}
                            </table>
                            @endforeach 
                        </div>
                        @endif

                        <!--Documents -->
                        @if(!empty($profile->boDocuments))
                        <div style="padding:10px 0 20px;overflow-x:auto;width:773px;margin:0 auto">
                            <table style="width:100%;table-layout:auto;border-collapse:collapse;width:100%;white-space:nowrap;background-color:#fff" >
                                {{-- <thead style="background:#1e1e1e0f"> --}}
                                    <tr>
                                        <th style="background:#e9e9ef;text-align:left;padding: 0.5rem 1rem;color: #12151C;text-align: left;" colspan="4">Documents</th>
                                    </tr>
                                {{-- </thead> --}}
                                {{-- <tbody>  --}}
                                        <tr style="border:1px solid #e9e9ef">
                                        @php
                                            $docCount = 0; // Counter to track the number of documents rendered
                                        @endphp
                                        @foreach($profile->boDocuments as $doc)
                                            @if($docCount % 3 == 0)
                                                @if($docCount != 0)
                                                    </tr> <!-- Close the previous row if it's not the first one -->
                                                @endif
                                                <tr style="border:1px solid #e9e9ef"> <!-- Start a new row -->
                                            @endif
                                            <td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;">
                                                <img src="{{ publicAsset($doc->path ?? 'assets/images/Not-found-image.svg') }}" alt="{{ $doc->title ?? null }}" width="150"><br>
                                                <h4 style="margin: 0; padding: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 200px; word-break: break-all;">
                                                    {{ $doc->title ?? null }}
                                                </h4>
                                                <span>Type: {{ $doc->extension ?? null}}, Size: {{ $doc->size }}</span>
                                            </td>
                                            @php
                                                $docCount++; // Increment the document count after rendering each document
                                            @endphp
                                        @endforeach
                                        @php
                                            if($docCount % 3 != 0) {
                                                echo str_repeat('<td style="white-space:nowrap;width:1px;font-size:14px;line-height:22px;padding:20px 0;padding:8px 10px;text-align:left;"></td>', 3 - ($docCount % 3)); // Add empty cells to complete the row
                                            }
                                        @endphp
                                        </tr> <!-- Close the last row -->
                                {{-- </tbody> --}}
                            </table>
                        </div>
                        @endif

                    </div> 
                </section>  
            </div>
        </div>
    </div>

    <script>
        function printThis() {
            // Hide the specific div
            var divToHide = document.querySelector(".btn-area");
            if (divToHide) {
                divToHide.style.display = "none";
            }
 
            window.print();

            // Show the div after printing
            if (divToHide) {
                divToHide.style.display = "block";
            }
            
        }
    </script>

</body>
</html>
