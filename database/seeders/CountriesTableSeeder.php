<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'code' => 'AD',
                'name' => 'أندورا',
            ),
            1 => 
            array (
                'code' => 'AE',
                'name' => 'الامارات العربية المتحدة',
            ),
            2 => 
            array (
                'code' => 'AF',
                'name' => 'أفغانستان',
            ),
            3 => 
            array (
                'code' => 'AG',
                'name' => 'أنتيجوا وبربودا',
            ),
            4 => 
            array (
                'code' => 'AI',
                'name' => 'أنجويلا',
            ),
            5 => 
            array (
                'code' => 'AL',
                'name' => 'ألبانيا',
            ),
            6 => 
            array (
                'code' => 'AM',
                'name' => 'أرمينيا',
            ),
            7 => 
            array (
                'code' => 'AN',
                'name' => 'جزر الأنتيل الهولندية',
            ),
            8 => 
            array (
                'code' => 'AO',
                'name' => 'أنجولا',
            ),
            9 => 
            array (
                'code' => 'AQ',
                'name' => 'القطب الجنوبي',
            ),
            10 => 
            array (
                'code' => 'AR',
                'name' => 'الأرجنتين',
            ),
            11 => 
            array (
                'code' => 'AS',
                'name' => 'ساموا الأمريكية',
            ),
            12 => 
            array (
                'code' => 'AT',
                'name' => 'النمسا',
            ),
            13 => 
            array (
                'code' => 'AU',
                'name' => 'أستراليا',
            ),
            14 => 
            array (
                'code' => 'AW',
                'name' => 'آروبا',
            ),
            15 => 
            array (
                'code' => 'AX',
                'name' => 'جزر أولان',
            ),
            16 => 
            array (
                'code' => 'AZ',
                'name' => 'أذربيجان',
            ),
            17 => 
            array (
                'code' => 'BA',
                'name' => 'البوسنة والهرسك',
            ),
            18 => 
            array (
                'code' => 'BB',
                'name' => 'بربادوس',
            ),
            19 => 
            array (
                'code' => 'BD',
                'name' => 'بنجلاديش',
            ),
            20 => 
            array (
                'code' => 'BE',
                'name' => 'بلجيكا',
            ),
            21 => 
            array (
                'code' => 'BF',
                'name' => 'بوركينا فاسو',
            ),
            22 => 
            array (
                'code' => 'BG',
                'name' => 'بلغاريا',
            ),
            23 => 
            array (
                'code' => 'BH',
                'name' => 'البحرين',
            ),
            24 => 
            array (
                'code' => 'BI',
                'name' => 'بوروندي',
            ),
            25 => 
            array (
                'code' => 'BJ',
                'name' => 'بنين',
            ),
            26 => 
            array (
                'code' => 'BM',
                'name' => 'برمودا',
            ),
            27 => 
            array (
                'code' => 'BN',
                'name' => 'بروناي',
            ),
            28 => 
            array (
                'code' => 'BO',
                'name' => 'بوليفيا',
            ),
            29 => 
            array (
                'code' => 'BR',
                'name' => 'البرازيل',
            ),
            30 => 
            array (
                'code' => 'BS',
                'name' => 'الباهاما',
            ),
            31 => 
            array (
                'code' => 'BT',
                'name' => 'بوتان',
            ),
            32 => 
            array (
                'code' => 'BV',
                'name' => 'جزيرة بوفيه',
            ),
            33 => 
            array (
                'code' => 'BW',
                'name' => 'بتسوانا',
            ),
            34 => 
            array (
                'code' => 'BY',
                'name' => 'روسيا البيضاء',
            ),
            35 => 
            array (
                'code' => 'BZ',
                'name' => 'بليز',
            ),
            36 => 
            array (
                'code' => 'CA',
                'name' => 'كندا',
            ),
            37 => 
            array (
                'code' => 'CC',
                'name' => 'جزر كوكوس',
            ),
            38 => 
            array (
                'code' => 'CD',
                'name' => 'جمهورية الكونغو الديمقراطية',
            ),
            39 => 
            array (
                'code' => 'CF',
                'name' => 'جمهورية افريقيا الوسطى',
            ),
            40 => 
            array (
                'code' => 'CG',
                'name' => 'الكونغو - برازافيل',
            ),
            41 => 
            array (
                'code' => 'CH',
                'name' => 'سويسرا',
            ),
            42 => 
            array (
                'code' => 'CI',
                'name' => 'ساحل العاج',
            ),
            43 => 
            array (
                'code' => 'CK',
                'name' => 'جزر كوك',
            ),
            44 => 
            array (
                'code' => 'CL',
                'name' => 'شيلي',
            ),
            45 => 
            array (
                'code' => 'CM',
                'name' => 'الكاميرون',
            ),
            46 => 
            array (
                'code' => 'CN',
                'name' => 'الصين',
            ),
            47 => 
            array (
                'code' => 'co',
                'name' => 'اندونيسيا',
            ),
            48 => 
            array (
                'code' => 'CR',
                'name' => 'كوستاريكا',
            ),
            49 => 
            array (
                'code' => 'CS',
                'name' => 'صربيا والجبل الأسود',
            ),
            50 => 
            array (
                'code' => 'CU',
                'name' => 'كوبا',
            ),
            51 => 
            array (
                'code' => 'CV',
                'name' => 'الرأس الأخضر',
            ),
            52 => 
            array (
                'code' => 'CX',
                'name' => 'جزيرة الكريسماس',
            ),
            53 => 
            array (
                'code' => 'CY',
                'name' => 'قبرص',
            ),
            54 => 
            array (
                'code' => 'CZ',
                'name' => 'جمهورية التشيك',
            ),
            55 => 
            array (
                'code' => 'DE',
                'name' => 'ألمانيا',
            ),
            56 => 
            array (
                'code' => 'DJ',
                'name' => 'جيبوتي',
            ),
            57 => 
            array (
                'code' => 'DK',
                'name' => 'الدانمرك',
            ),
            58 => 
            array (
                'code' => 'DM',
                'name' => 'دومينيكا',
            ),
            59 => 
            array (
                'code' => 'DO',
                'name' => 'جمهورية الدومينيك',
            ),
            60 => 
            array (
                'code' => 'DZ',
                'name' => 'الجزائر',
            ),
            61 => 
            array (
                'code' => 'EC',
                'name' => 'الاكوادور',
            ),
            62 => 
            array (
                'code' => 'EE',
                'name' => 'استونيا',
            ),
            63 => 
            array (
                'code' => 'EG',
                'name' => 'مصر',
            ),
            64 => 
            array (
                'code' => 'EH',
                'name' => 'الصحراء الغربية',
            ),
            65 => 
            array (
                'code' => 'ER',
                'name' => 'اريتريا',
            ),
            66 => 
            array (
                'code' => 'ES',
                'name' => 'أسبانيا',
            ),
            67 => 
            array (
                'code' => 'ET',
                'name' => 'اثيوبيا',
            ),
            68 => 
            array (
                'code' => 'FI',
                'name' => 'فنلندا',
            ),
            69 => 
            array (
                'code' => 'FJ',
                'name' => 'فيجي',
            ),
            70 => 
            array (
                'code' => 'FK',
                'name' => 'جزر فوكلاند',
            ),
            71 => 
            array (
                'code' => 'FM',
                'name' => 'ميكرونيزيا',
            ),
            72 => 
            array (
                'code' => 'FO',
                'name' => 'جزر فارو',
            ),
            73 => 
            array (
                'code' => 'FR',
                'name' => 'فرنسا',
            ),
            74 => 
            array (
                'code' => 'GA',
                'name' => 'الجابون',
            ),
            75 => 
            array (
                'code' => 'GB',
                'name' => 'المملكة المتحدة',
            ),
            76 => 
            array (
                'code' => 'GD',
                'name' => 'جرينادا',
            ),
            77 => 
            array (
                'code' => 'GE',
                'name' => 'جورجيا',
            ),
            78 => 
            array (
                'code' => 'GF',
                'name' => 'غويانا',
            ),
            79 => 
            array (
                'code' => 'GH',
                'name' => 'غانا',
            ),
            80 => 
            array (
                'code' => 'GI',
                'name' => 'جبل طارق',
            ),
            81 => 
            array (
                'code' => 'GL',
                'name' => 'جرينلاند',
            ),
            82 => 
            array (
                'code' => 'GM',
                'name' => 'غامبيا',
            ),
            83 => 
            array (
                'code' => 'GN',
                'name' => 'غينيا',
            ),
            84 => 
            array (
                'code' => 'GP',
                'name' => 'جوادلوب',
            ),
            85 => 
            array (
                'code' => 'GQ',
                'name' => 'غينيا الاستوائية',
            ),
            86 => 
            array (
                'code' => 'GR',
                'name' => 'اليونان',
            ),
            87 => 
            array (
                'code' => 'GS',
                'name' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
            ),
            88 => 
            array (
                'code' => 'GT',
                'name' => 'جواتيمالا',
            ),
            89 => 
            array (
                'code' => 'GU',
                'name' => 'جوام',
            ),
            90 => 
            array (
                'code' => 'GW',
                'name' => 'غينيا بيساو',
            ),
            91 => 
            array (
                'code' => 'GY',
                'name' => 'غيانا',
            ),
            92 => 
            array (
                'code' => 'HK',
                'name' => 'هونج كونج الصينية',
            ),
            93 => 
            array (
                'code' => 'HM',
                'name' => 'جزيرة هيرد وماكدونالد',
            ),
            94 => 
            array (
                'code' => 'HN',
                'name' => 'هندوراس',
            ),
            95 => 
            array (
                'code' => 'HR',
                'name' => 'كرواتيا',
            ),
            96 => 
            array (
                'code' => 'HT',
                'name' => 'هايتي',
            ),
            97 => 
            array (
                'code' => 'HU',
                'name' => 'المجر',
            ),
            98 => 
            array (
                'code' => 'IE',
                'name' => 'أيرلندا',
            ),
            99 => 
            array (
                'code' => 'IL',
                'name' => 'اسرائيل',
            ),
            100 => 
            array (
                'code' => 'IM',
                'name' => 'جزيرة مان',
            ),
            101 => 
            array (
                'code' => 'IN',
                'name' => 'الهند',
            ),
            102 => 
            array (
                'code' => 'IO',
                'name' => 'المحيط الهندي البريطاني',
            ),
            103 => 
            array (
                'code' => 'IQ',
                'name' => 'العراق',
            ),
            104 => 
            array (
                'code' => 'IR',
                'name' => 'ايران',
            ),
            105 => 
            array (
                'code' => 'IS',
                'name' => 'أيسلندا',
            ),
            106 => 
            array (
                'code' => 'IT',
                'name' => 'ايطاليا',
            ),
            107 => 
            array (
                'code' => 'JE',
                'name' => 'جيرسي',
            ),
            108 => 
            array (
                'code' => 'JM',
                'name' => 'جامايكا',
            ),
            109 => 
            array (
                'code' => 'JO',
                'name' => 'الأردن',
            ),
            110 => 
            array (
                'code' => 'JP',
                'name' => 'اليابان',
            ),
            111 => 
            array (
                'code' => 'KE',
                'name' => 'كينيا',
            ),
            112 => 
            array (
                'code' => 'KG',
                'name' => 'قرغيزستان',
            ),
            113 => 
            array (
                'code' => 'KH',
                'name' => 'كمبوديا',
            ),
            114 => 
            array (
                'code' => 'KI',
                'name' => 'كيريباتي',
            ),
            115 => 
            array (
                'code' => 'KM',
                'name' => 'جزر القمر',
            ),
            116 => 
            array (
                'code' => 'KN',
                'name' => 'سانت كيتس ونيفيس',
            ),
            117 => 
            array (
                'code' => 'KP',
                'name' => 'كوريا الشمالية',
            ),
            118 => 
            array (
                'code' => 'KR',
                'name' => 'كوريا الجنوبية',
            ),
            119 => 
            array (
                'code' => 'KW',
                'name' => 'الكويت',
            ),
            120 => 
            array (
                'code' => 'KY',
                'name' => 'جزر الكايمن',
            ),
            121 => 
            array (
                'code' => 'KZ',
                'name' => 'كازاخستان',
            ),
            122 => 
            array (
                'code' => 'LA',
                'name' => 'لاوس',
            ),
            123 => 
            array (
                'code' => 'LB',
                'name' => 'لبنان',
            ),
            124 => 
            array (
                'code' => 'LC',
                'name' => 'سانت لوسيا',
            ),
            125 => 
            array (
                'code' => 'LI',
                'name' => 'ليختنشتاين',
            ),
            126 => 
            array (
                'code' => 'LK',
                'name' => 'سريلانكا',
            ),
            127 => 
            array (
                'code' => 'LR',
                'name' => 'ليبيريا',
            ),
            128 => 
            array (
                'code' => 'LS',
                'name' => 'ليسوتو',
            ),
            129 => 
            array (
                'code' => 'LT',
                'name' => 'ليتوانيا',
            ),
            130 => 
            array (
                'code' => 'LU',
                'name' => 'لوكسمبورج',
            ),
            131 => 
            array (
                'code' => 'LV',
                'name' => 'لاتفيا',
            ),
            132 => 
            array (
                'code' => 'LY',
                'name' => 'ليبيا',
            ),
            133 => 
            array (
                'code' => 'MA',
                'name' => 'المغرب',
            ),
            134 => 
            array (
                'code' => 'MC',
                'name' => 'موناكو',
            ),
            135 => 
            array (
                'code' => 'MD',
                'name' => 'مولدافيا',
            ),
            136 => 
            array (
                'code' => 'ME',
                'name' => 'الجبل الأسود',
            ),
            137 => 
            array (
                'code' => 'MF',
                'name' => 'سانت مارتين',
            ),
            138 => 
            array (
                'code' => 'MG',
                'name' => 'مدغشقر',
            ),
            139 => 
            array (
                'code' => 'MH',
                'name' => 'جزر المارشال',
            ),
            140 => 
            array (
                'code' => 'MK',
                'name' => 'مقدونيا',
            ),
            141 => 
            array (
                'code' => 'ML',
                'name' => 'مالي',
            ),
            142 => 
            array (
                'code' => 'MM',
                'name' => 'ميانمار',
            ),
            143 => 
            array (
                'code' => 'MN',
                'name' => 'منغوليا',
            ),
            144 => 
            array (
                'code' => 'MO',
                'name' => 'ماكاو الصينية',
            ),
            145 => 
            array (
                'code' => 'MP',
                'name' => 'جزر ماريانا الشمالية',
            ),
            146 => 
            array (
                'code' => 'MQ',
                'name' => 'مارتينيك',
            ),
            147 => 
            array (
                'code' => 'MR',
                'name' => 'موريتانيا',
            ),
            148 => 
            array (
                'code' => 'MS',
                'name' => 'مونتسرات',
            ),
            149 => 
            array (
                'code' => 'MT',
                'name' => 'مالطا',
            ),
            150 => 
            array (
                'code' => 'MU',
                'name' => 'موريشيوس',
            ),
            151 => 
            array (
                'code' => 'MV',
                'name' => 'جزر الملديف',
            ),
            152 => 
            array (
                'code' => 'MW',
                'name' => 'ملاوي',
            ),
            153 => 
            array (
                'code' => 'MX',
                'name' => 'المكسيك',
            ),
            154 => 
            array (
                'code' => 'MY',
                'name' => 'ماليزيا',
            ),
            155 => 
            array (
                'code' => 'MZ',
                'name' => 'موزمبيق',
            ),
            156 => 
            array (
                'code' => 'NA',
                'name' => 'ناميبيا',
            ),
            157 => 
            array (
                'code' => 'NC',
                'name' => 'كاليدونيا الجديدة',
            ),
            158 => 
            array (
                'code' => 'NE',
                'name' => 'النيجر',
            ),
            159 => 
            array (
                'code' => 'NF',
                'name' => 'جزيرة نورفوك',
            ),
            160 => 
            array (
                'code' => 'NG',
                'name' => 'نيجيريا',
            ),
            161 => 
            array (
                'code' => 'NI',
                'name' => 'نيكاراجوا',
            ),
            162 => 
            array (
                'code' => 'NL',
                'name' => 'هولندا',
            ),
            163 => 
            array (
                'code' => 'NO',
                'name' => 'النرويج',
            ),
            164 => 
            array (
                'code' => 'NP',
                'name' => 'نيبال',
            ),
            165 => 
            array (
                'code' => 'NR',
                'name' => 'نورو',
            ),
            166 => 
            array (
                'code' => 'NU',
                'name' => 'نيوي',
            ),
            167 => 
            array (
                'code' => 'NZ',
                'name' => 'نيوزيلاندا',
            ),
            168 => 
            array (
                'code' => 'OM',
                'name' => 'عمان',
            ),
            169 => 
            array (
                'code' => 'PA',
                'name' => 'بنما',
            ),
            170 => 
            array (
                'code' => 'PE',
                'name' => 'بيرو',
            ),
            171 => 
            array (
                'code' => 'PF',
                'name' => 'بولينيزيا الفرنسية',
            ),
            172 => 
            array (
                'code' => 'PG',
                'name' => 'بابوا غينيا الجديدة',
            ),
            173 => 
            array (
                'code' => 'PH',
                'name' => 'الفيلبين',
            ),
            174 => 
            array (
                'code' => 'PK',
                'name' => 'باكستان',
            ),
            175 => 
            array (
                'code' => 'PL',
                'name' => 'بولندا',
            ),
            176 => 
            array (
                'code' => 'PM',
                'name' => 'سانت بيير وميكولون',
            ),
            177 => 
            array (
                'code' => 'PN',
                'name' => 'بتكايرن',
            ),
            178 => 
            array (
                'code' => 'PR',
                'name' => 'بورتوريكو',
            ),
            179 => 
            array (
                'code' => 'PS',
                'name' => 'فلسطين',
            ),
            180 => 
            array (
                'code' => 'PT',
                'name' => 'البرتغال',
            ),
            181 => 
            array (
                'code' => 'PW',
                'name' => 'بالاو',
            ),
            182 => 
            array (
                'code' => 'PY',
                'name' => 'باراجواي',
            ),
            183 => 
            array (
                'code' => 'QA',
                'name' => 'قطر',
            ),
            184 => 
            array (
                'code' => 'RE',
                'name' => 'روينيون',
            ),
            185 => 
            array (
                'code' => 'RO',
                'name' => 'رومانيا',
            ),
            186 => 
            array (
                'code' => 'RS',
                'name' => 'صربيا',
            ),
            187 => 
            array (
                'code' => 'RU',
                'name' => 'روسيا',
            ),
            188 => 
            array (
                'code' => 'RW',
                'name' => 'رواندا',
            ),
            189 => 
            array (
                'code' => 'SA',
                'name' => 'المملكة العربية السعودية',
            ),
            190 => 
            array (
                'code' => 'SB',
                'name' => 'جزر سليمان',
            ),
            191 => 
            array (
                'code' => 'SC',
                'name' => 'سيشل',
            ),
            192 => 
            array (
                'code' => 'SD',
                'name' => 'السودان',
            ),
            193 => 
            array (
                'code' => 'SE',
                'name' => 'السويد',
            ),
            194 => 
            array (
                'code' => 'SG',
                'name' => 'سنغافورة',
            ),
            195 => 
            array (
                'code' => 'SH',
                'name' => 'سانت هيلنا',
            ),
            196 => 
            array (
                'code' => 'SI',
                'name' => 'سلوفينيا',
            ),
            197 => 
            array (
                'code' => 'SJ',
                'name' => 'سفالبارد وجان مايان',
            ),
            198 => 
            array (
                'code' => 'SK',
                'name' => 'سلوفاكيا',
            ),
            199 => 
            array (
                'code' => 'SL',
                'name' => 'سيراليون',
            ),
            200 => 
            array (
                'code' => 'SM',
                'name' => 'سان مارينو',
            ),
            201 => 
            array (
                'code' => 'SN',
                'name' => 'السنغال',
            ),
            202 => 
            array (
                'code' => 'SO',
                'name' => 'الصومال',
            ),
            203 => 
            array (
                'code' => 'SR',
                'name' => 'سورينام',
            ),
            204 => 
            array (
                'code' => 'ST',
                'name' => 'ساو تومي وبرينسيبي',
            ),
            205 => 
            array (
                'code' => 'SV',
                'name' => 'السلفادور',
            ),
            206 => 
            array (
                'code' => 'SY',
                'name' => 'سوريا',
            ),
            207 => 
            array (
                'code' => 'SZ',
                'name' => 'سوازيلاند',
            ),
            208 => 
            array (
                'code' => 'TC',
                'name' => 'جزر الترك وجايكوس',
            ),
            209 => 
            array (
                'code' => 'TD',
                'name' => 'تشاد',
            ),
            210 => 
            array (
                'code' => 'TF',
                'name' => 'المقاطعات الجنوبية الفرنسية',
            ),
            211 => 
            array (
                'code' => 'TG',
                'name' => 'توجو',
            ),
            212 => 
            array (
                'code' => 'TH',
                'name' => 'تايلند',
            ),
            213 => 
            array (
                'code' => 'TJ',
                'name' => 'طاجكستان',
            ),
            214 => 
            array (
                'code' => 'TK',
                'name' => 'توكيلو',
            ),
            215 => 
            array (
                'code' => 'TL',
                'name' => 'تيمور الشرقية',
            ),
            216 => 
            array (
                'code' => 'TM',
                'name' => 'تركمانستان',
            ),
            217 => 
            array (
                'code' => 'TN',
                'name' => 'تونس',
            ),
            218 => 
            array (
                'code' => 'TO',
                'name' => 'تونجا',
            ),
            219 => 
            array (
                'code' => 'TR',
                'name' => 'تركيا',
            ),
            220 => 
            array (
                'code' => 'TT',
                'name' => 'ترينيداد وتوباغو',
            ),
            221 => 
            array (
                'code' => 'TV',
                'name' => 'توفالو',
            ),
            222 => 
            array (
                'code' => 'TW',
                'name' => 'تايوان',
            ),
            223 => 
            array (
                'code' => 'TZ',
                'name' => 'تانزانيا',
            ),
            224 => 
            array (
                'code' => 'UA',
                'name' => 'أوكرانيا',
            ),
            225 => 
            array (
                'code' => 'UG',
                'name' => 'أوغندا',
            ),
            226 => 
            array (
                'code' => 'UM',
                'name' => 'جزر الولايات المتحدة البعيدة الصغيرة',
            ),
            227 => 
            array (
                'code' => 'US',
                'name' => 'الولايات المتحدة الأمريكية',
            ),
            228 => 
            array (
                'code' => 'UY',
                'name' => 'أورجواي',
            ),
            229 => 
            array (
                'code' => 'UZ',
                'name' => 'أوزبكستان',
            ),
            230 => 
            array (
                'code' => 'VA',
                'name' => 'الفاتيكان',
            ),
            231 => 
            array (
                'code' => 'VC',
                'name' => 'سانت فنسنت وغرنادين',
            ),
            232 => 
            array (
                'code' => 'VE',
                'name' => 'فنزويلا',
            ),
            233 => 
            array (
                'code' => 'VG',
                'name' => 'جزر فرجين البريطانية',
            ),
            234 => 
            array (
                'code' => 'VI',
                'name' => 'جزر فرجين الأمريكية',
            ),
            235 => 
            array (
                'code' => 'VN',
                'name' => 'فيتنام',
            ),
            236 => 
            array (
                'code' => 'VU',
                'name' => 'فانواتو',
            ),
            237 => 
            array (
                'code' => 'WF',
                'name' => 'جزر والس وفوتونا',
            ),
            238 => 
            array (
                'code' => 'WS',
                'name' => 'ساموا',
            ),
            239 => 
            array (
                'code' => 'YE',
                'name' => 'اليمن',
            ),
            240 => 
            array (
                'code' => 'YT',
                'name' => 'مايوت',
            ),
            241 => 
            array (
                'code' => 'ZA',
                'name' => 'جمهورية جنوب افريقيا',
            ),
            242 => 
            array (
                'code' => 'ZM',
                'name' => 'زامبيا',
            ),
            243 => 
            array (
                'code' => 'ZW',
                'name' => 'زيمبابوي',
            ),
            244 => 
            array (
                'code' => 'ZZ',
                'name' => 'منطقة غير معرفة',
            ),
        ));
        
        
    }
}