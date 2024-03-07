<?php

namespace App\Modules\BoAccount\Enums;

use App\Modules\Main\Enums\BaseEnum;

class BoDocumentTypeEnum extends BaseEnum
{
    const First_Acc_Holder = "First Applicant (1st Holder)";  
    const First_Acc_Nid_Passport_Driving_Front = "First Applicant (1st Holder) NID/Password/Driving Front Side"; 
    const First_Acc_Nid_Passport_Driving_Back = "First Applicant (1st Holder) NID/Password/Driving Back Side"; 
    const Second_Acc_Holder = "Joint Applicent (2nd Holder)";  
    const Second_Acc_Nid_Passport_Driving_Front = "Joint Applicent (2nd Holder) NID/Password/Driving Frond Side";  
    const Second_Acc_Nid_Passport_Driving_Back = "Joint Applicent (2nd Holder) NID/Password/Driving Back Side";  
    const Authorize_User = "Authorize User";  

    // keep the value same of the NomineeTypeEnum
    const Nominee_1_Of_Acc_Holder = "Nominee 1";  
    const Guardian_Of_Nominee_1 = "Guardian of Nominee 1"; 
    const Nominee_2_Of_Acc_Holder = "Nominee 2";  
    const Guardian_Of_Nominee_2 = "Guardian of Nominee 2"; 
}
