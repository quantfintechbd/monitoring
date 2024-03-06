<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = "insert  into `banks`(`id`,`name`,`swift_code`,`npsb_code`,`logo`,`is_unverified_account_registration_allowed`,`is_account_register_allowed`,`is_account_opening_allowed`,`is_eft_push_allowed`,`is_eft_pull_allowed`,`is_benificiary_required`,`status`,`credentials`,`api_token`,`password`,`created_at`,`updated_at`) values
        (1,'AB Bank Limited','ABBLBDDH','0020','ABBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (2,'Agrani Bank Limited','AGBKBDDH','0010','AGBKBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (3,'Al - Arafah Islami Bank Limited','ALARBDDH','0015','ALARBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (4,'Bangladesh Commerce Bank Limited','BCBLBDDH','0030','BCBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (5,'Bangladesh Development Bank Limited','BDDBBDDH','0047','BDDBBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (6,'Bangladesh Krishi Bank','BKBABDDH','0035','BKBABDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (7,'BASIC Bank Limited','BKSIBDDH','0055','BKSIBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (8,'Bank Alfalah Limited','ALFHBDDH','0065','ALFHBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (9,'Bank Asia Limited','BALBBDDH','0070','BALBBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (10,'BRAC Bank Limited','BRAKBDDH','0060','BRAKBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (11,'Citibank N . A','CITIBDDX','0075','CITIBDDX.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (12,'Commercial Bank of Ceylon Limited','CCEYBDDH','0080','CCEYBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (13,'Dhaka Bank Limited','DHBLBDDH','0085','DHBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (14,'Dutch - Bangla Bank Limited','DBBLBDDH','0090','DBBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (15,'EBL - Eastern Bank Limited','EBLDBDDH','0095','EBLDBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (16,'EXIM - Export Import Bank of Bangladesh Limited','EXBKBDDH','0100','EXBKBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (17,'FSIBL - First Security Islami Bank Limited','FSEBBDDH','0105','FSEBBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (18,'Habib Bank Limited','HABBBDDH','0110','HABBBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (19,'ICB Islamic Bank Limited','BBSHBDDH','0230','BBSHBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (20,'IFIC - International Finance Invest and Commerce Bank Limited','IFICBDDH','0120','IFICBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (21,'Islami Bank Bangladesh Limited','IBBLBDDH','0125','IBBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (22,'Jamuna Bank Limited','JAMUBDDH','0130','JAMUBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (23,'Janata Bank Limited','JANBBDDH','0135','JANBBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (24,'Meghna Bank Limited','MGBLBDDH','0275','MGBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (25,'Mercantile Bank Limited','MBLBBDDH','0140','MBLBBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (26,'Midland Bank Limited','MDBLBDDH','0285','MDBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (27,'Modhumoti Bank Limited','MODHBDDH','0295','MODHBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (28,'Mutual Trust Bank Limited','MTBLBDDH','0145','MTBLBDDH.png',0,0,1,1,0,0,1,'{\"base_url\":\"https://mfsdev.mutualtrustbank.com:8080/retailfin/api\",\"username\":\"SSLWIRELESS\",\"password\":\"WXPO#90CDANV\",\"grant_type\":\"password\",\"bearer_token\":\"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1bmlxdWVfbmFtZSI6IlNTTFdJUkVMRVNTIiwibmJmIjoxNjY4NDkzMzgyLCJleHAiOjE2Njg0OTYzODIsImlhdCI6MTY2ODQ5MzM4Mn0.PCdCXHT4afx6gS452ye5idz-x9h7vwSriHYdX4WVZ1Q\",\"ft_credentials\":{\"base_url\":\"https://mfsdev.mutualtrustbank.com:8080/open_bank\",\"username\":\"SSL001\",\"password\":\"SslL!ve@Mtb#2o22\",\"grant_type\":\"client_credentials\",\"bearer_token\":\"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1bmlxdWVfbmFtZSI6IlNTTDAwMSIsIm5iZiI6MTY3MTEwNDc5OSwiZXhwIjoxNjcxMTA1MDk5LCJpYXQiOjE2NzExMDQ3OTl9.qrybskcAc_KuBeddRuBz7gSS8XTqWXeEGmHjQiPqHOY\"}}','3791ec7b242b811185be34ee3af0a87e8eeab96404ae39133ff01d3d49e670ea','',NULL,'2022-12-15 17:46:39'),
        (29,'National Bank Limited','NBLBBDDH','0150','NBLBBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (30,'National Bank of Pakistan','NBPABDDH','0155','NBPABDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (31,'NCC - National Credit & Commerce Bank Limited','NCCLBDDH','0160','NCCLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (32,'NRB Bank Limited','NRBDBDDH','0290','NRBDBDDH.png',1,1,1,1,1,1,1,'{\"base_url\":\"https://mobuat.nrbbankbd.com:6971\",\"oauth_token\":{\"grant_type\":\"client_credentials\",\"client_id\":\"5\",\"client_secret\":\"wN6bX9WK0N9Jr6syNRhRg6XXQmad1FGPZEHMWGdy\",\"scope\":\"*\"},\"bearer_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1IiwianRpIjoiOGQ2ZGZmMTMwMjZlZmZmNWExZGE4ZGI0ZjNhMGFjNDczMzk3YjExNjg5YTliODAwOWVmMGQyNTBlMGY3ZmY3Zjc1MDhkZDk0NGVlZjRhZTIiLCJpYXQiOjE2NjQyNzg4NzcsIm5iZiI6MTY2NDI3ODg3NywiZXhwIjoxNjk1ODE0ODc3LCJzdWIiOiIiLCJzY29wZXMiOlsiKiJdfQ.c7vYfw1HEEFU0EkvYXYULL40jsRhbzm-TcAQOwhwbH7sUxs9LDkU-3suLu4xgp55kD99_pKc_xo-p9CuTExTMZNzD827SPiXxawuLgL_zaBGghiFzR6_EkpfBVV4SsfnIAb91Afpxt_gBqTAOBET0doP3RAEmeHMxWdBZfE_lLqRe5gxKGnF6lASBEcnPIkO8IbbEM4_dNKTJ6qV4G0u9o-IGjfLNYQN7hkVjNalgC7aw_8odsMD_F5cngAlCbCqvL8G4XRMjhFIuayGvk0FrbfCJx7J7x4m3sdWkH_mEh0k5X9JqACZbF0QBgrO7XCfTd5e8L_f34v3mOkMXnnAgEESubF66aplu1AM3t2RtvHHlWOonXDz8tbNIVPl3pp65PSBWlLM4FRJt4MkGJUkioOgCVb0I3-4hgwHI6xtTNw3Q1Sg_kE7X3x9CN2iwTE6GqEdGY0QNmbED9YhcWFvvrAoMgp0d6od1MDJjVieEk7V4lwvvUChsyzyMo_3q-ZJBn9i53zwSzcpO37lIA5Owqdw_Gnm-cFhaGS8MC3eONUioiJdTR3oXwBuQM1G7KD3rJQY9FnLR6V6sAi_205WMElAnw-L9aNlkcDfsSQgQkP4efAIsIsO70pOK_KRKCMLp2WxYCUqpQzRuCZMuX8Zdjl7gD8XV_gkY6Sz6YKlTeg\"}',NULL,NULL,NULL,'2022-09-27 17:40:34'),
        (33,'NRB Commercial Bank Limited','NRBBBDDH','0260','NRBBBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (34,'Global Islami Bank Limited','NGBLBDDH','0300','NGBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (35,'One Bank Limited','ONEBBDDH','0165','ONEBBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (36,'Padma Bank Limited','FRMSBDDH','0280','FRMSBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (37,'Prime Bank Limited','PRBLBDDH','0170','PRBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,'2021-08-26 11:39:48'),
        (38,'Pubali Bank Limited','PUBABDDH','0175','PUBABDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (39,'Rupali Bank Limited','RUPBBDDH','0185','RUPBBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (40,'Rajshahi Krishi Unnayan Bank','RKUBBDDH','0180','RKUBBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (41,'Shahjalal Islami Bank Limited','SJBLBDDH','0190','SJBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (42,'Social Islami Bank Limited','SOIVBDDH','0195','SOIVBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (43,'Sonali Bank Limited','BSONBDDH','0200','BSONBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (44,'SBAC - South Bangla Agriculture & Commerce Bank Limited','SBACBDDH','0270','SBACBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,'2021-10-05 15:06:51'),
        (45,'Southeast Bank Limited','SEBDBDDH','0205','SEBDBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (46,'Standard Bank Limited','SDBLBDDH','0210','SDBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (47,'SCB - Standard Chartered Bank','SCBLBDDX','0215','SCBLBDDX.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (48,'State Bank of India','SBINBDDH','0220','SBINBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (49,'Shimanto Bank Limited','SHMTBDDD','0305','SHMTBDDD.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (50,'The City Bank Limited','CIBLBDDH','0225','CIBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (51,'HSBC - The Hongkong and Shanghai Banking Corporation Limited','HSBCBDDH','0115','HSBCBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (52,'The Premier Bank Limited','PRMRBDDH','0235','PRMRBDDH.png',0,0,0,0,0,0,1,'{\"base_url\":\"http://192.168.1.156:86/api\",\"stakeHolder_id\":\"Admin\",\"user_id\":\"admin\",\"password\":\"1\",\"ofac_credentials\":{\"base_url\":\"http://192.168.1.130:8080/nOFAC-server/api\",\"userId\":\"nazdaq\",\"userName\":\"a3ljQXBp\",\"apiKey\":\"QVNERkdI1\"}}',NULL,NULL,NULL,NULL),
        (53,'Trust Bank Limited','TTBLBDDH','0240','TTBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (54,'Union Bank Limited','UBLDBDDH','0265','UBLDBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (55,'UCBL - United Commercial Bank Limited','UCBLBDDH','0245','UCBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (56,'Uttara Bank Limited','UTBLBDDH','0250','UTBLBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (57,'Woori Bank Bangladesh','HVBKBDDH','0255','HVBKBDDH.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (58,'BANGLADESH SAMABAYA BANK LTD','YYYY','YYYY','no_image.png',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL),
        (59,'COMMUNITY BANK BANGLADESH LTD','COYMBDDD','XXXX','COYMBDDD.png',0,0,0,0,0,0,1,NULL,NULL,NULL,NULL,NULL),
        (64,'BENGAL COMMERCIAL BANK LIMITED','BCOLBDDH','BCOL','no_image.png',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL);";

        DB::insert($query);
    }
}
