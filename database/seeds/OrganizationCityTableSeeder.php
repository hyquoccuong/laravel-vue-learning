<?php

use Illuminate\Database\Seeder;

class OrganizationCityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organization_city')->delete();
        
        \DB::table('organization_city')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Hà Nội',
                'type' => 'Thành phố Trung ương',
                'code' => '01',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tp. Hồ Chí Minh',
                'type' => 'Thành phố Trung ương',
                'code' => '02',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Hải Phòng',
                'type' => 'Thành phố Trung ương',
                'code' => '03',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Đà Nẵng',
                'type' => 'Thành phố Trung ương',
                'code' => '04',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Hà Giang',
                'type' => 'Tỉnh',
                'code' => '05',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Cao Bằng',
                'type' => 'Tỉnh',
                'code' => '06',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Lai Châu',
                'type' => 'Tỉnh',
                'code' => '07',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Lào Cai',
                'type' => 'Tỉnh',
                'code' => '08',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Tuyên Quang',
                'type' => 'Tỉnh',
                'code' => '09',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Lạng Sơn',
                'type' => 'Tỉnh',
                'code' => '10',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Bắc Kạn',
                'type' => 'Tỉnh',
                'code' => '11',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Thái Nguyên',
                'type' => 'Tỉnh',
                'code' => '12',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Yên Bái',
                'type' => 'Tỉnh',
                'code' => '13',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Sơn La',
                'type' => 'Tỉnh',
                'code' => '14',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Phú Thọ',
                'type' => 'Tỉnh',
                'code' => '15',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Vĩnh Phúc',
                'type' => 'Tỉnh',
                'code' => '16',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Quảng Ninh',
                'type' => 'Tỉnh',
                'code' => '17',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Bắc Giang',
                'type' => 'Tỉnh',
                'code' => '18',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Bắc Ninh',
                'type' => 'Tỉnh',
                'code' => '19',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'Hải Dương',
                'type' => 'Tỉnh',
                'code' => '21',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'Hưng Yên',
                'type' => 'Tỉnh',
                'code' => '22',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'Hoà Bình',
                'type' => 'Tỉnh',
                'code' => '23',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'Hà Nam',
                'type' => 'Tỉnh',
                'code' => '24',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'Nam Định',
                'type' => 'Tỉnh',
                'code' => '25',
            ),
            24 => 
            array (
                'id' => 26,
                'name' => 'Thái Bình',
                'type' => 'Tỉnh',
                'code' => '26',
            ),
            25 => 
            array (
                'id' => 27,
                'name' => 'Ninh Bình',
                'type' => 'Tỉnh',
                'code' => '27',
            ),
            26 => 
            array (
                'id' => 28,
                'name' => 'Thanh Hoá',
                'type' => 'Tỉnh',
                'code' => '28',
            ),
            27 => 
            array (
                'id' => 29,
                'name' => 'Nghệ An',
                'type' => 'Tỉnh',
                'code' => '29',
            ),
            28 => 
            array (
                'id' => 30,
                'name' => 'Hà Tĩnh',
                'type' => 'Tỉnh',
                'code' => '30',
            ),
            29 => 
            array (
                'id' => 31,
                'name' => 'Quảng Bình',
                'type' => 'Tỉnh',
                'code' => '31',
            ),
            30 => 
            array (
                'id' => 32,
                'name' => 'Quảng Trị',
                'type' => 'Tỉnh',
                'code' => '32',
            ),
            31 => 
            array (
                'id' => 33,
                'name' => 'Thừa Thiên -Huế',
                'type' => 'Tỉnh',
                'code' => '33',
            ),
            32 => 
            array (
                'id' => 34,
                'name' => 'Quảng Nam',
                'type' => 'Tỉnh',
                'code' => '34',
            ),
            33 => 
            array (
                'id' => 35,
                'name' => 'Quảng Ngãi',
                'type' => 'Tỉnh',
                'code' => '35',
            ),
            34 => 
            array (
                'id' => 36,
                'name' => 'Kon Tum',
                'type' => 'Tỉnh',
                'code' => '36',
            ),
            35 => 
            array (
                'id' => 37,
                'name' => 'Bình Định',
                'type' => 'Tỉnh',
                'code' => '37',
            ),
            36 => 
            array (
                'id' => 38,
                'name' => 'Gia Lai',
                'type' => 'Tỉnh',
                'code' => '38',
            ),
            37 => 
            array (
                'id' => 39,
                'name' => 'Phú Yên',
                'type' => 'Tỉnh',
                'code' => '39',
            ),
            38 => 
            array (
                'id' => 40,
                'name' => 'Đắk Lắk',
                'type' => 'Tỉnh',
                'code' => '40',
            ),
            39 => 
            array (
                'id' => 41,
                'name' => 'Khánh Hoà',
                'type' => 'Tỉnh',
                'code' => '41',
            ),
            40 => 
            array (
                'id' => 42,
                'name' => 'Lâm Đồng',
                'type' => 'Tỉnh',
                'code' => '42',
            ),
            41 => 
            array (
                'id' => 43,
                'name' => 'Bình Phước',
                'type' => 'Tỉnh',
                'code' => '43',
            ),
            42 => 
            array (
                'id' => 44,
                'name' => 'Bình Dương',
                'type' => 'Tỉnh',
                'code' => '44',
            ),
            43 => 
            array (
                'id' => 45,
                'name' => 'Ninh Thuận',
                'type' => 'Tỉnh',
                'code' => '45',
            ),
            44 => 
            array (
                'id' => 46,
                'name' => 'Tây Ninh',
                'type' => 'Tỉnh',
                'code' => '46',
            ),
            45 => 
            array (
                'id' => 47,
                'name' => 'Bình Thuận',
                'type' => 'Tỉnh',
                'code' => '47',
            ),
            46 => 
            array (
                'id' => 48,
                'name' => 'Đồng Nai',
                'type' => 'Tỉnh',
                'code' => '48',
            ),
            47 => 
            array (
                'id' => 49,
                'name' => 'Long An',
                'type' => 'Tỉnh',
                'code' => '49',
            ),
            48 => 
            array (
                'id' => 50,
                'name' => 'Đồng Tháp',
                'type' => 'Tỉnh',
                'code' => '50',
            ),
            49 => 
            array (
                'id' => 51,
                'name' => 'An Giang',
                'type' => 'Tỉnh',
                'code' => '51',
            ),
            50 => 
            array (
                'id' => 52,
                'name' => 'Bà Rịa-Vũng Tàu',
                'type' => 'Tỉnh',
                'code' => '52',
            ),
            51 => 
            array (
                'id' => 53,
                'name' => 'Tiền Giang',
                'type' => 'Tỉnh',
                'code' => '53',
            ),
            52 => 
            array (
                'id' => 54,
                'name' => 'Kiên Giang',
                'type' => 'Tỉnh',
                'code' => '54',
            ),
            53 => 
            array (
                'id' => 55,
                'name' => 'Cần Thơ',
                'type' => 'Thành phố Trung ương',
                'code' => '55',
            ),
            54 => 
            array (
                'id' => 56,
                'name' => 'Bến Tre',
                'type' => 'Tỉnh',
                'code' => '56',
            ),
            55 => 
            array (
                'id' => 57,
                'name' => 'Vĩnh Long',
                'type' => 'Tỉnh',
                'code' => '57',
            ),
            56 => 
            array (
                'id' => 58,
                'name' => 'Trà Vinh',
                'type' => 'Tỉnh',
                'code' => '58',
            ),
            57 => 
            array (
                'id' => 59,
                'name' => 'Sóc Trăng',
                'type' => 'Tỉnh',
                'code' => '59',
            ),
            58 => 
            array (
                'id' => 60,
                'name' => 'Bạc Liêu',
                'type' => 'Tỉnh',
                'code' => '60',
            ),
            59 => 
            array (
                'id' => 61,
                'name' => 'Cà Mau',
                'type' => 'Tỉnh',
                'code' => '61',
            ),
            60 => 
            array (
                'id' => 62,
                'name' => 'Điện Biên',
                'type' => 'Tỉnh',
                'code' => '62',
            ),
            61 => 
            array (
                'id' => 63,
                'name' => 'Đăk Nông',
                'type' => 'Tỉnh',
                'code' => '63',
            ),
            62 => 
            array (
                'id' => 64,
                'name' => 'Hậu Giang',
                'type' => 'Tỉnh',
                'code' => '64',
            ),
        ));
        
        
    }
}