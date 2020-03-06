<?php

use Illuminate\Database\Seeder;

class OrganizationDistrictTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organization_district')->delete();
        
        \DB::table('organization_district')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '01',
                'name' => 'Quận Ba Đình',
                'type' => 'Quận',
                'city_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '02',
                'name' => 'Quận Hoàn Kiếm',
                'type' => 'Quận',
                'city_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '03',
                'name' => 'Quận Hai Bà Trưng',
                'type' => 'Quận',
                'city_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '04',
                'name' => 'Quận Đống Đa',
                'type' => 'Quận',
                'city_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => '05',
                'name' => 'Quận Tây Hồ',
                'type' => 'Quận',
                'city_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => '06',
                'name' => 'Quận Cầu Giấy',
                'type' => 'Quận',
                'city_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => '07',
                'name' => 'Quận Thanh Xuân',
                'type' => 'Quận',
                'city_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => '08',
                'name' => 'Quận Hoàng Mai',
                'type' => 'Quận',
                'city_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => '09',
                'name' => 'Quận Long Biên',
                'type' => 'Quận',
                'city_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => '11',
                'name' => 'Huyện Thanh Trì',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => '12',
                'name' => 'Huyện Gia Lâm',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => '13',
                'name' => 'Huyện Đông Anh',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => '14',
                'name' => 'Huyện Sóc Sơn',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => '15',
                'name' => 'Quận Hà Đông',
                'type' => 'Quận',
                'city_id' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => '16',
                'name' => 'Thị xã Sơn Tây',
                'type' => 'Thị xã',
                'city_id' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => '17',
                'name' => 'Huyện Ba Vì',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => '18',
                'name' => 'Huyện Phúc Thọ',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => '19',
                'name' => 'Huyện Thạch Thất',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => '20',
                'name' => 'Huyện Quốc Oai',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'code' => '21',
                'name' => 'Huyện Chương Mỹ',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'code' => '22',
                'name' => 'Huyện Đan Phượng',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'code' => '23',
                'name' => 'Huyện Hoài Đức',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'code' => '24',
                'name' => 'Huyện Thanh Oai',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'code' => '25',
                'name' => 'Huyện Mỹ Đức',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'code' => '26',
                'name' => 'Huyện ứng Hoà',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'code' => '27',
                'name' => 'Huyện Thường Tín',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'code' => '28',
                'name' => 'Huyện Phú Xuyên',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'code' => '29',
                'name' => 'Huyện Mê Linh',
                'type' => 'Huyện',
                'city_id' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'code' => '30',
                'name' => 'Quận Nam Từ Liêm',
                'type' => 'Quận',
                'city_id' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'code' => '01',
                'name' => 'Quận 1',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'code' => '02',
                'name' => 'Quận 2',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            31 => 
            array (
                'id' => 32,
                'code' => '03',
                'name' => 'Quận 3',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            32 => 
            array (
                'id' => 33,
                'code' => '04',
                'name' => 'Quận 4',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            33 => 
            array (
                'id' => 34,
                'code' => '05',
                'name' => 'Quận 5',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            34 => 
            array (
                'id' => 35,
                'code' => '06',
                'name' => 'Quận 6',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            35 => 
            array (
                'id' => 36,
                'code' => '07',
                'name' => 'Quận 7',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            36 => 
            array (
                'id' => 37,
                'code' => '08',
                'name' => 'Quận 8',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            37 => 
            array (
                'id' => 38,
                'code' => '09',
                'name' => 'Quận 9',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            38 => 
            array (
                'id' => 39,
                'code' => '10',
                'name' => 'Quận 10',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            39 => 
            array (
                'id' => 40,
                'code' => '11',
                'name' => 'Quận 11',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            40 => 
            array (
                'id' => 41,
                'code' => '12',
                'name' => 'Quận 12',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            41 => 
            array (
                'id' => 42,
                'code' => '13',
                'name' => 'Quận Gò Vấp',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            42 => 
            array (
                'id' => 43,
                'code' => '14',
                'name' => 'Quận Tân Bình',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            43 => 
            array (
                'id' => 44,
                'code' => '15',
                'name' => 'Quận Tân Phú',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            44 => 
            array (
                'id' => 45,
                'code' => '16',
                'name' => 'Quận Bình Thạnh',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            45 => 
            array (
                'id' => 46,
                'code' => '17',
                'name' => 'Quận Phú Nhuận',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            46 => 
            array (
                'id' => 47,
                'code' => '18',
                'name' => 'Quận Thủ Đức',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            47 => 
            array (
                'id' => 48,
                'code' => '19',
                'name' => 'Quận Bình Tân',
                'type' => 'Quận',
                'city_id' => 2,
            ),
            48 => 
            array (
                'id' => 49,
                'code' => '20',
                'name' => 'Huyện Bình Chánh',
                'type' => 'Huyện',
                'city_id' => 2,
            ),
            49 => 
            array (
                'id' => 50,
                'code' => '21',
                'name' => 'Huyện Củ Chi',
                'type' => 'Huyện',
                'city_id' => 2,
            ),
            50 => 
            array (
                'id' => 51,
                'code' => '22',
                'name' => 'Huyện Hóc Môn',
                'type' => 'Huyện',
                'city_id' => 2,
            ),
            51 => 
            array (
                'id' => 52,
                'code' => '23',
                'name' => 'Huyện Nhà Bè',
                'type' => 'Huyện',
                'city_id' => 2,
            ),
            52 => 
            array (
                'id' => 53,
                'code' => '24',
                'name' => 'Huyện Cần Giờ',
                'type' => 'Huyện',
                'city_id' => 2,
            ),
            53 => 
            array (
                'id' => 54,
                'code' => '01',
                'name' => 'Quận Hồng Bàng',
                'type' => 'Quận',
                'city_id' => 3,
            ),
            54 => 
            array (
                'id' => 55,
                'code' => '02',
                'name' => 'Quận Lê Chân',
                'type' => 'Quận',
                'city_id' => 3,
            ),
            55 => 
            array (
                'id' => 56,
                'code' => '03',
                'name' => 'Quận Ngô Quyền',
                'type' => 'Quận',
                'city_id' => 3,
            ),
            56 => 
            array (
                'id' => 57,
                'code' => '04',
                'name' => 'Quận Kiến An',
                'type' => 'Quận',
                'city_id' => 3,
            ),
            57 => 
            array (
                'id' => 58,
                'code' => '05',
                'name' => 'Quận Hải An',
                'type' => 'Quận',
                'city_id' => 3,
            ),
            58 => 
            array (
                'id' => 59,
                'code' => '06',
                'name' => 'Quận Đồ Sơn',
                'type' => 'Quận',
                'city_id' => 3,
            ),
            59 => 
            array (
                'id' => 60,
                'code' => '07',
                'name' => 'Huyện An Lão',
                'type' => 'Huyện',
                'city_id' => 3,
            ),
            60 => 
            array (
                'id' => 61,
                'code' => '08',
                'name' => 'Huyện Kiến Thụy',
                'type' => 'Huyện',
                'city_id' => 3,
            ),
            61 => 
            array (
                'id' => 62,
                'code' => '09',
                'name' => 'Huyện Thủy Nguyên',
                'type' => 'Huyện',
                'city_id' => 3,
            ),
            62 => 
            array (
                'id' => 63,
                'code' => '10',
                'name' => 'Huyện An Dương',
                'type' => 'Huyện',
                'city_id' => 3,
            ),
            63 => 
            array (
                'id' => 64,
                'code' => '11',
                'name' => 'Huyện Tiên Lãng',
                'type' => 'Huyện',
                'city_id' => 3,
            ),
            64 => 
            array (
                'id' => 65,
                'code' => '12',
                'name' => 'Huyện Vĩnh Bảo',
                'type' => 'Huyện',
                'city_id' => 3,
            ),
            65 => 
            array (
                'id' => 66,
                'code' => '13',
                'name' => 'Huyện Cát Hải',
                'type' => 'Huyện',
                'city_id' => 3,
            ),
            66 => 
            array (
                'id' => 67,
                'code' => '15',
                'name' => 'Quận Dương Kinh',
                'type' => 'Quận',
                'city_id' => 3,
            ),
            67 => 
            array (
                'id' => 68,
                'code' => '01',
                'name' => 'Quận Hải Châu',
                'type' => 'Quận',
                'city_id' => 4,
            ),
            68 => 
            array (
                'id' => 69,
                'code' => '02',
                'name' => 'Quận Thanh Khê',
                'type' => 'Quận',
                'city_id' => 4,
            ),
            69 => 
            array (
                'id' => 70,
                'code' => '03',
                'name' => 'Quận Sơn Trà',
                'type' => 'Quận',
                'city_id' => 4,
            ),
            70 => 
            array (
                'id' => 71,
                'code' => '04',
                'name' => 'Quận Ngũ Hành Sơn',
                'type' => 'Quận',
                'city_id' => 4,
            ),
            71 => 
            array (
                'id' => 72,
                'code' => '05',
                'name' => 'Quận Liên Chiểu',
                'type' => 'Quận',
                'city_id' => 4,
            ),
            72 => 
            array (
                'id' => 73,
                'code' => '06',
                'name' => 'Huyện Hoà Vang',
                'type' => 'Huyện',
                'city_id' => 4,
            ),
            73 => 
            array (
                'id' => 74,
                'code' => '07',
                'name' => 'Quận Cẩm Lệ',
                'type' => 'Quận',
                'city_id' => 4,
            ),
            74 => 
            array (
                'id' => 75,
                'code' => '01',
                'name' => 'Thành phố Hà Giang',
                'type' => 'Thành phố',
                'city_id' => 5,
            ),
            75 => 
            array (
                'id' => 76,
                'code' => '02',
                'name' => 'Huyện Đồng Văn',
                'type' => 'Huyện',
                'city_id' => 5,
            ),
            76 => 
            array (
                'id' => 77,
                'code' => '03',
                'name' => 'Huyện Mèo Vạc',
                'type' => 'Huyện',
                'city_id' => 5,
            ),
            77 => 
            array (
                'id' => 78,
                'code' => '04',
                'name' => 'Huyện Yên Minh',
                'type' => 'Huyện',
                'city_id' => 5,
            ),
            78 => 
            array (
                'id' => 79,
                'code' => '05',
                'name' => 'Huyện Quản Bạ',
                'type' => 'Huyện',
                'city_id' => 5,
            ),
            79 => 
            array (
                'id' => 80,
                'code' => '06',
                'name' => 'Huyện Vị Xuyên',
                'type' => 'Huyện',
                'city_id' => 5,
            ),
            80 => 
            array (
                'id' => 81,
                'code' => '07',
                'name' => 'Huyện Bắc Mê',
                'type' => 'Huyện',
                'city_id' => 5,
            ),
            81 => 
            array (
                'id' => 82,
                'code' => '08',
                'name' => 'Huyện Hoàng Su Phì',
                'type' => 'Huyện',
                'city_id' => 5,
            ),
            82 => 
            array (
                'id' => 83,
                'code' => '09',
                'name' => 'Huyện Xín Mần',
                'type' => 'Huyện',
                'city_id' => 5,
            ),
            83 => 
            array (
                'id' => 84,
                'code' => '10',
                'name' => 'Huyện Bắc Quang',
                'type' => 'Huyện',
                'city_id' => 5,
            ),
            84 => 
            array (
                'id' => 85,
                'code' => '11',
                'name' => 'Huyện Quang Bình',
                'type' => 'Huyện',
                'city_id' => 5,
            ),
            85 => 
            array (
                'id' => 86,
                'code' => '01',
                'name' => 'Thành phố Cao Bằng',
                'type' => 'Thành phố',
                'city_id' => 6,
            ),
            86 => 
            array (
                'id' => 87,
                'code' => '02',
                'name' => 'Huyện Bảo Lạc',
                'type' => 'Huyện',
                'city_id' => 6,
            ),
            87 => 
            array (
                'id' => 88,
                'code' => '03',
                'name' => 'Huyện Thông Nông',
                'type' => 'Huyện',
                'city_id' => 6,
            ),
            88 => 
            array (
                'id' => 89,
                'code' => '04',
                'name' => 'Huyện Hà Quảng',
                'type' => 'Huyện',
                'city_id' => 6,
            ),
            89 => 
            array (
                'id' => 90,
                'code' => '05',
                'name' => 'Huyện Trà Lĩnh',
                'type' => 'Huyện',
                'city_id' => 6,
            ),
            90 => 
            array (
                'id' => 91,
                'code' => '06',
                'name' => 'Huyện Trùng Khánh',
                'type' => 'Huyện',
                'city_id' => 6,
            ),
            91 => 
            array (
                'id' => 92,
                'code' => '07',
                'name' => 'Huyện Nguyên Bình',
                'type' => 'Huyện',
                'city_id' => 6,
            ),
            92 => 
            array (
                'id' => 93,
                'code' => '08',
                'name' => 'Huyện Hoà An',
                'type' => 'Huyện',
                'city_id' => 6,
            ),
            93 => 
            array (
                'id' => 94,
                'code' => '09',
                'name' => 'Huyện Quảng Uyên',
                'type' => 'Huyện',
                'city_id' => 6,
            ),
            94 => 
            array (
                'id' => 95,
                'code' => '10',
                'name' => 'Huyện Thạch An',
                'type' => 'Huyện',
                'city_id' => 6,
            ),
            95 => 
            array (
                'id' => 96,
                'code' => '11',
                'name' => 'Huyện Hạ Lang',
                'type' => 'Huyện',
                'city_id' => 6,
            ),
            96 => 
            array (
                'id' => 97,
                'code' => '12',
                'name' => 'Huyện Bảo Lâm',
                'type' => 'Huyện',
                'city_id' => 6,
            ),
            97 => 
            array (
                'id' => 98,
                'code' => '13',
                'name' => 'Huyện Phục Hoà',
                'type' => 'Huyện',
                'city_id' => 6,
            ),
            98 => 
            array (
                'id' => 99,
                'code' => '01',
                'name' => 'Thành Phố Lai Châu',
                'type' => 'Huyện',
                'city_id' => 7,
            ),
            99 => 
            array (
                'id' => 100,
                'code' => '02',
                'name' => 'Huyện Tam Đường',
                'type' => 'Huyện',
                'city_id' => 7,
            ),
            100 => 
            array (
                'id' => 101,
                'code' => '03',
                'name' => 'Huyện Phong Thổ',
                'type' => 'Huyện',
                'city_id' => 7,
            ),
            101 => 
            array (
                'id' => 102,
                'code' => '04',
                'name' => 'Huyện Sìn Hồ',
                'type' => 'Huyện',
                'city_id' => 7,
            ),
            102 => 
            array (
                'id' => 103,
                'code' => '05',
                'name' => 'Huyện Mường Tè',
                'type' => 'Huyện',
                'city_id' => 7,
            ),
            103 => 
            array (
                'id' => 104,
                'code' => '06',
                'name' => 'Huyện Than Uyên',
                'type' => 'Huyện',
                'city_id' => 7,
            ),
            104 => 
            array (
                'id' => 105,
                'code' => '07',
                'name' => 'Huyện Tân Uyên',
                'type' => 'Huyện',
                'city_id' => 7,
            ),
            105 => 
            array (
                'id' => 106,
                'code' => '08',
                'name' => 'Huyện Nậm Nhùm',
                'type' => 'Huyện',
                'city_id' => 7,
            ),
            106 => 
            array (
                'id' => 107,
                'code' => '01',
                'name' => 'Huyện  Bảo Thắng',
                'type' => 'Huyện',
                'city_id' => 8,
            ),
            107 => 
            array (
                'id' => 108,
                'code' => '02',
                'name' => 'Huyện Bảo Yên',
                'type' => 'Huyện',
                'city_id' => 8,
            ),
            108 => 
            array (
                'id' => 109,
                'code' => '03',
                'name' => 'Huyện Bát Xát',
                'type' => 'Huyện',
                'city_id' => 8,
            ),
            109 => 
            array (
                'id' => 110,
                'code' => '04',
                'name' => 'Huyện Bắc Hà',
                'type' => 'Huyện',
                'city_id' => 8,
            ),
            110 => 
            array (
                'id' => 111,
                'code' => '05',
                'name' => 'Thành phố Lào Cai',
                'type' => 'Thành phố',
                'city_id' => 8,
            ),
            111 => 
            array (
                'id' => 112,
                'code' => '06',
                'name' => 'Huyện Mường Khương',
                'type' => 'Huyện',
                'city_id' => 8,
            ),
            112 => 
            array (
                'id' => 113,
                'code' => '07',
                'name' => 'Huyện  Sa Pa',
                'type' => 'Huyện',
                'city_id' => 8,
            ),
            113 => 
            array (
                'id' => 114,
                'code' => '08',
                'name' => 'Huyện Si Ma Cai',
                'type' => 'Huyện',
                'city_id' => 8,
            ),
            114 => 
            array (
                'id' => 115,
                'code' => '09',
                'name' => 'Huyện  Văn Bàn',
                'type' => 'Huyện',
                'city_id' => 8,
            ),
            115 => 
            array (
                'id' => 116,
                'code' => '01',
                'name' => 'Th. phố Tuyên Quang',
                'type' => 'Huyện',
                'city_id' => 9,
            ),
            116 => 
            array (
                'id' => 117,
                'code' => '02',
                'name' => 'Huyện Lâm Bình',
                'type' => 'Huyện',
                'city_id' => 9,
            ),
            117 => 
            array (
                'id' => 118,
                'code' => '03',
                'name' => 'Huyện Na Hang',
                'type' => 'Huyện',
                'city_id' => 9,
            ),
            118 => 
            array (
                'id' => 119,
                'code' => '04',
                'name' => 'Huyện Chiêm Hoá',
                'type' => 'Huyện',
                'city_id' => 9,
            ),
            119 => 
            array (
                'id' => 120,
                'code' => '05',
                'name' => 'Huyện Hàm Yên',
                'type' => 'Huyện',
                'city_id' => 9,
            ),
            120 => 
            array (
                'id' => 121,
                'code' => '06',
                'name' => 'Huyện Yên Sơn',
                'type' => 'Huyện',
                'city_id' => 9,
            ),
            121 => 
            array (
                'id' => 122,
                'code' => '07',
                'name' => 'Huyện Sơn Dương',
                'type' => 'Huyện',
                'city_id' => 9,
            ),
            122 => 
            array (
                'id' => 123,
                'code' => '01',
                'name' => 'Thành phố Lạng Sơn',
                'type' => 'Thành phố',
                'city_id' => 10,
            ),
            123 => 
            array (
                'id' => 124,
                'code' => '02',
                'name' => 'Huyện Tràng Định',
                'type' => 'Huyện',
                'city_id' => 10,
            ),
            124 => 
            array (
                'id' => 125,
                'code' => '03',
                'name' => 'Huyện Bình Gia',
                'type' => 'Huyện',
                'city_id' => 10,
            ),
            125 => 
            array (
                'id' => 126,
                'code' => '04',
                'name' => 'Huyện Văn Lãng',
                'type' => 'Huyện',
                'city_id' => 10,
            ),
            126 => 
            array (
                'id' => 127,
                'code' => '05',
                'name' => 'Huyện Bắc Sơn',
                'type' => 'Huyện',
                'city_id' => 10,
            ),
            127 => 
            array (
                'id' => 128,
                'code' => '06',
                'name' => 'Huyện Văn Quan',
                'type' => 'Huyện',
                'city_id' => 10,
            ),
            128 => 
            array (
                'id' => 129,
                'code' => '07',
                'name' => 'Huyện Cao Lộc',
                'type' => 'Huyện',
                'city_id' => 10,
            ),
            129 => 
            array (
                'id' => 130,
                'code' => '08',
                'name' => 'Huyện Lộc Bình',
                'type' => 'Huyện',
                'city_id' => 10,
            ),
            130 => 
            array (
                'id' => 131,
                'code' => '09',
                'name' => 'Huyện Chi Lăng',
                'type' => 'Huyện',
                'city_id' => 10,
            ),
            131 => 
            array (
                'id' => 132,
                'code' => '10',
                'name' => 'Huyện Đình Lập',
                'type' => 'Huyện',
                'city_id' => 10,
            ),
            132 => 
            array (
                'id' => 133,
                'code' => '11',
                'name' => 'Huyện Hữu Lũng',
                'type' => 'Huyện',
                'city_id' => 10,
            ),
            133 => 
            array (
                'id' => 134,
                'code' => '01',
                'name' => 'Thành phố Bắc Kạn',
                'type' => 'Thành phố',
                'city_id' => 11,
            ),
            134 => 
            array (
                'id' => 135,
                'code' => '02',
                'name' => 'Huyện Chợ Đồn',
                'type' => 'Huyện',
                'city_id' => 11,
            ),
            135 => 
            array (
                'id' => 136,
                'code' => '03',
                'name' => 'Huyện Bạch Thông',
                'type' => 'Huyện',
                'city_id' => 11,
            ),
            136 => 
            array (
                'id' => 137,
                'code' => '04',
                'name' => 'Huyện Na Rì',
                'type' => 'Huyện',
                'city_id' => 11,
            ),
            137 => 
            array (
                'id' => 138,
                'code' => '05',
                'name' => 'Huyện Ngân Sơn',
                'type' => 'Huyện',
                'city_id' => 11,
            ),
            138 => 
            array (
                'id' => 139,
                'code' => '06',
                'name' => 'Huyện Ba Bể',
                'type' => 'Huyện',
                'city_id' => 11,
            ),
            139 => 
            array (
                'id' => 140,
                'code' => '07',
                'name' => 'Huyện Chợ Mới',
                'type' => 'Huyện',
                'city_id' => 11,
            ),
            140 => 
            array (
                'id' => 141,
                'code' => '08',
                'name' => 'Huyện Pác Nặm',
                'type' => 'Huyện',
                'city_id' => 11,
            ),
            141 => 
            array (
                'id' => 142,
                'code' => '01',
                'name' => 'Thành phố Thái Nguyên',
                'type' => 'Thành phố',
                'city_id' => 12,
            ),
            142 => 
            array (
                'id' => 143,
                'code' => '02',
                'name' => 'Thị xã Sông Công',
                'type' => 'Thị xã',
                'city_id' => 12,
            ),
            143 => 
            array (
                'id' => 144,
                'code' => '03',
                'name' => 'Huyện Định Hoá',
                'type' => 'Huyện',
                'city_id' => 12,
            ),
            144 => 
            array (
                'id' => 145,
                'code' => '04',
                'name' => 'Huyện Phú Lương',
                'type' => 'Huyện',
                'city_id' => 12,
            ),
            145 => 
            array (
                'id' => 146,
                'code' => '05',
                'name' => 'Huyện Võ Nhai',
                'type' => 'Huyện',
                'city_id' => 12,
            ),
            146 => 
            array (
                'id' => 147,
                'code' => '06',
                'name' => 'Huyện Đại Từ',
                'type' => 'Huyện',
                'city_id' => 12,
            ),
            147 => 
            array (
                'id' => 148,
                'code' => '07',
                'name' => 'Huyện Đồng Hỷ',
                'type' => 'Huyện',
                'city_id' => 12,
            ),
            148 => 
            array (
                'id' => 149,
                'code' => '08',
                'name' => 'Huyện Phú Bình',
                'type' => 'Huyện',
                'city_id' => 12,
            ),
            149 => 
            array (
                'id' => 150,
                'code' => '09',
                'name' => 'Huyện Phổ Yên',
                'type' => 'Huyện',
                'city_id' => 12,
            ),
            150 => 
            array (
                'id' => 151,
                'code' => '01',
                'name' => 'Thành phố Yên Bái',
                'type' => 'Thành phố',
                'city_id' => 13,
            ),
            151 => 
            array (
                'id' => 152,
                'code' => '02',
                'name' => 'Thị xã Nghĩa Lộ',
                'type' => 'Thị xã',
                'city_id' => 13,
            ),
            152 => 
            array (
                'id' => 153,
                'code' => '03',
                'name' => 'Huyện Văn Yên',
                'type' => 'Huyện',
                'city_id' => 13,
            ),
            153 => 
            array (
                'id' => 154,
                'code' => '04',
                'name' => 'Huyện Yên Bình',
                'type' => 'Huyện',
                'city_id' => 13,
            ),
            154 => 
            array (
                'id' => 155,
                'code' => '05',
                'name' => 'Huyện Mù Cang Chải',
                'type' => 'Huyện',
                'city_id' => 13,
            ),
            155 => 
            array (
                'id' => 156,
                'code' => '06',
                'name' => 'Huyện Văn Chấn',
                'type' => 'Huyện',
                'city_id' => 13,
            ),
            156 => 
            array (
                'id' => 157,
                'code' => '07',
                'name' => 'Huyện Trấn Yên',
                'type' => 'Huyện',
                'city_id' => 13,
            ),
            157 => 
            array (
                'id' => 158,
                'code' => '08',
                'name' => 'Huyện Trạm Tấu',
                'type' => 'Huyện',
                'city_id' => 13,
            ),
            158 => 
            array (
                'id' => 159,
                'code' => '09',
                'name' => 'Huyện Lục Yên',
                'type' => 'Huyện',
                'city_id' => 13,
            ),
            159 => 
            array (
                'id' => 160,
                'code' => '01',
                'name' => 'Thành phố Sơn La',
                'type' => 'Thành phố',
                'city_id' => 14,
            ),
            160 => 
            array (
                'id' => 161,
                'code' => '02',
                'name' => 'Huyện Quỳnh Nhai',
                'type' => 'Huyện',
                'city_id' => 14,
            ),
            161 => 
            array (
                'id' => 162,
                'code' => '03',
                'name' => 'Huyện Mường La',
                'type' => 'Huyện',
                'city_id' => 14,
            ),
            162 => 
            array (
                'id' => 163,
                'code' => '04',
                'name' => 'Huyện Thuận Châu',
                'type' => 'Huyện',
                'city_id' => 14,
            ),
            163 => 
            array (
                'id' => 164,
                'code' => '05',
                'name' => 'Huyện Bắc Yên',
                'type' => 'Huyện',
                'city_id' => 14,
            ),
            164 => 
            array (
                'id' => 165,
                'code' => '06',
                'name' => 'Huyện Phù Yên',
                'type' => 'Huyện',
                'city_id' => 14,
            ),
            165 => 
            array (
                'id' => 166,
                'code' => '07',
                'name' => 'Huyện Mai Sơn',
                'type' => 'Huyện',
                'city_id' => 14,
            ),
            166 => 
            array (
                'id' => 167,
                'code' => '08',
                'name' => 'Huyện Yên Châu',
                'type' => 'Huyện',
                'city_id' => 14,
            ),
            167 => 
            array (
                'id' => 168,
                'code' => '09',
                'name' => 'Huyện Sông Mã',
                'type' => 'Huyện',
                'city_id' => 14,
            ),
            168 => 
            array (
                'id' => 169,
                'code' => '10',
                'name' => 'Huyện Mộc Châu',
                'type' => 'Huyện',
                'city_id' => 14,
            ),
            169 => 
            array (
                'id' => 170,
                'code' => '11',
                'name' => 'huyện Sốp Cộp',
                'type' => 'Huyện',
                'city_id' => 14,
            ),
            170 => 
            array (
                'id' => 171,
                'code' => '12',
                'name' => 'Huyện Vân Hồ',
                'type' => 'Huyện',
                'city_id' => 14,
            ),
            171 => 
            array (
                'id' => 172,
                'code' => '01',
                'name' => 'Thành phố Việt Trì',
                'type' => 'Thành phố',
                'city_id' => 15,
            ),
            172 => 
            array (
                'id' => 173,
                'code' => '02',
                'name' => 'Thị xã Phú Thọ',
                'type' => 'Thị xã',
                'city_id' => 15,
            ),
            173 => 
            array (
                'id' => 174,
                'code' => '03',
                'name' => 'Huyện Đoan Hùng',
                'type' => 'Huyện',
                'city_id' => 15,
            ),
            174 => 
            array (
                'id' => 175,
                'code' => '04',
                'name' => 'Huyện Thanh Ba',
                'type' => 'Huyện',
                'city_id' => 15,
            ),
            175 => 
            array (
                'id' => 176,
                'code' => '05',
                'name' => 'Huyện Hạ Hoà',
                'type' => 'Huyện',
                'city_id' => 15,
            ),
            176 => 
            array (
                'id' => 177,
                'code' => '06',
                'name' => 'Huyện Cẩm Khê',
                'type' => 'Huyện',
                'city_id' => 15,
            ),
            177 => 
            array (
                'id' => 178,
                'code' => '07',
                'name' => 'Huyện Yên Lập',
                'type' => 'Huyện',
                'city_id' => 15,
            ),
            178 => 
            array (
                'id' => 179,
                'code' => '08',
                'name' => 'Huyện Thanh Sơn',
                'type' => 'Huyện',
                'city_id' => 15,
            ),
            179 => 
            array (
                'id' => 180,
                'code' => '09',
                'name' => 'Huyện Phù Ninh',
                'type' => 'Huyện',
                'city_id' => 15,
            ),
            180 => 
            array (
                'id' => 181,
                'code' => '10',
                'name' => 'Huyện Lâm Thao',
                'type' => 'Huyện',
                'city_id' => 15,
            ),
            181 => 
            array (
                'id' => 182,
                'code' => '11',
                'name' => 'Huyện Tam Nông',
                'type' => 'Huyện',
                'city_id' => 15,
            ),
            182 => 
            array (
                'id' => 183,
                'code' => '12',
                'name' => 'Huyện Thanh Thủy',
                'type' => 'Huyện',
                'city_id' => 15,
            ),
            183 => 
            array (
                'id' => 184,
                'code' => '13',
                'name' => 'Huyện Tân Sơn',
                'type' => 'Huyện',
                'city_id' => 15,
            ),
            184 => 
            array (
                'id' => 185,
                'code' => '01',
                'name' => 'Thành phố Vĩnh Yên',
                'type' => 'Thành phố',
                'city_id' => 16,
            ),
            185 => 
            array (
                'id' => 186,
                'code' => '02',
                'name' => 'Huyện Tam Dương',
                'type' => 'Huyện',
                'city_id' => 16,
            ),
            186 => 
            array (
                'id' => 187,
                'code' => '03',
                'name' => 'Huyện Lập Thạch',
                'type' => 'Huyện',
                'city_id' => 16,
            ),
            187 => 
            array (
                'id' => 188,
                'code' => '04',
                'name' => 'Huyện Vĩnh Tường',
                'type' => 'Huyện',
                'city_id' => 16,
            ),
            188 => 
            array (
                'id' => 189,
                'code' => '05',
                'name' => 'Huyện Yên Lạc',
                'type' => 'Huyện',
                'city_id' => 16,
            ),
            189 => 
            array (
                'id' => 190,
                'code' => '06',
                'name' => 'Huyện Bình Xuyên',
                'type' => 'Huyện',
                'city_id' => 16,
            ),
            190 => 
            array (
                'id' => 191,
                'code' => '07',
                'name' => 'Huyện Sông Lô',
                'type' => 'Huyện',
                'city_id' => 16,
            ),
            191 => 
            array (
                'id' => 192,
                'code' => '08',
                'name' => 'Thị xã Phúc Yên',
                'type' => 'Thị xã',
                'city_id' => 16,
            ),
            192 => 
            array (
                'id' => 193,
                'code' => '09',
                'name' => 'Huyện Tam Đảo',
                'type' => 'Huyện',
                'city_id' => 16,
            ),
            193 => 
            array (
                'id' => 194,
                'code' => '01',
                'name' => 'Thành phố Hạ Long',
                'type' => 'Thành phố',
                'city_id' => 17,
            ),
            194 => 
            array (
                'id' => 195,
                'code' => '02',
                'name' => 'Thành phố Cẩm Phả',
                'type' => 'Thành phố',
                'city_id' => 17,
            ),
            195 => 
            array (
                'id' => 196,
                'code' => '03',
                'name' => 'Thành phố Uông Bí',
                'type' => 'Thành phố',
                'city_id' => 17,
            ),
            196 => 
            array (
                'id' => 197,
                'code' => '04',
                'name' => 'Thành phố Móng Cái',
                'type' => 'Thành phố',
                'city_id' => 17,
            ),
            197 => 
            array (
                'id' => 198,
                'code' => '05',
                'name' => 'Huyện Bình Liêu',
                'type' => 'Huyện',
                'city_id' => 17,
            ),
            198 => 
            array (
                'id' => 199,
                'code' => '06',
                'name' => 'Huyện Đầm Hà',
                'type' => 'Huyện',
                'city_id' => 17,
            ),
            199 => 
            array (
                'id' => 200,
                'code' => '07',
                'name' => 'Huyện Hải Hà',
                'type' => 'Huyện',
                'city_id' => 17,
            ),
            200 => 
            array (
                'id' => 201,
                'code' => '08',
                'name' => 'Huyện Tiên Yên',
                'type' => 'Huyện',
                'city_id' => 17,
            ),
            201 => 
            array (
                'id' => 202,
                'code' => '09',
                'name' => 'Huyện Ba Chẽ',
                'type' => 'Huyện',
                'city_id' => 17,
            ),
            202 => 
            array (
                'id' => 203,
                'code' => '10',
                'name' => 'Huyện Đông Triều',
                'type' => 'Huyện',
                'city_id' => 17,
            ),
            203 => 
            array (
                'id' => 204,
                'code' => '11',
                'name' => 'Thị xã Quảng Yên',
                'type' => 'Thị xã',
                'city_id' => 17,
            ),
            204 => 
            array (
                'id' => 205,
                'code' => '12',
                'name' => 'Huyện Hoành Bồ',
                'type' => 'Huyện',
                'city_id' => 17,
            ),
            205 => 
            array (
                'id' => 206,
                'code' => '13',
                'name' => 'Huyện Vân Đồn',
                'type' => 'Huyện',
                'city_id' => 17,
            ),
            206 => 
            array (
                'id' => 207,
                'code' => '14',
                'name' => 'Huyện Cô Tô',
                'type' => 'Huyện',
                'city_id' => 17,
            ),
            207 => 
            array (
                'id' => 208,
                'code' => '01',
                'name' => 'Thành phố Bắc Giang',
                'type' => 'Thành phố',
                'city_id' => 18,
            ),
            208 => 
            array (
                'id' => 209,
                'code' => '02',
                'name' => 'Huyện Yên Thế',
                'type' => 'Huyện',
                'city_id' => 18,
            ),
            209 => 
            array (
                'id' => 210,
                'code' => '03',
                'name' => 'Huyện Lục Ngạn',
                'type' => 'Huyện',
                'city_id' => 18,
            ),
            210 => 
            array (
                'id' => 211,
                'code' => '04',
                'name' => 'Huyện Sơn Động',
                'type' => 'Huyện',
                'city_id' => 18,
            ),
            211 => 
            array (
                'id' => 212,
                'code' => '05',
                'name' => 'Huyện Lục Nam',
                'type' => 'Huyện',
                'city_id' => 18,
            ),
            212 => 
            array (
                'id' => 213,
                'code' => '06',
                'name' => 'Huyện Tân Yên',
                'type' => 'Huyện',
                'city_id' => 18,
            ),
            213 => 
            array (
                'id' => 214,
                'code' => '07',
                'name' => 'Huyện Hiệp Hoà',
                'type' => 'Huyện',
                'city_id' => 18,
            ),
            214 => 
            array (
                'id' => 215,
                'code' => '08',
                'name' => 'Huyện Lạng Giang',
                'type' => 'Huyện',
                'city_id' => 18,
            ),
            215 => 
            array (
                'id' => 216,
                'code' => '09',
                'name' => 'Huyện Việt Yên',
                'type' => 'Huyện',
                'city_id' => 18,
            ),
            216 => 
            array (
                'id' => 217,
                'code' => '10',
                'name' => 'Huyện Yên Dũng',
                'type' => 'Huyện',
                'city_id' => 18,
            ),
            217 => 
            array (
                'id' => 218,
                'code' => '01',
                'name' => 'Thành phố Bắc Ninh',
                'type' => 'Thành phố',
                'city_id' => 19,
            ),
            218 => 
            array (
                'id' => 219,
                'code' => '02',
                'name' => 'Huyện Yên Phong',
                'type' => 'Huyện',
                'city_id' => 19,
            ),
            219 => 
            array (
                'id' => 220,
                'code' => '03',
                'name' => 'Huyện Quế Võ',
                'type' => 'Huyện',
                'city_id' => 19,
            ),
            220 => 
            array (
                'id' => 221,
                'code' => '04',
                'name' => 'Huyện Tiên Du',
                'type' => 'Huyện',
                'city_id' => 19,
            ),
            221 => 
            array (
                'id' => 222,
                'code' => '05',
                'name' => 'Thị xã Từ  Sơn',
                'type' => 'Thị xã',
                'city_id' => 19,
            ),
            222 => 
            array (
                'id' => 223,
                'code' => '06',
                'name' => 'Huyện Thuận Thành',
                'type' => 'Huyện',
                'city_id' => 19,
            ),
            223 => 
            array (
                'id' => 224,
                'code' => '07',
                'name' => 'Huyện Gia Bình',
                'type' => 'Huyện',
                'city_id' => 19,
            ),
            224 => 
            array (
                'id' => 225,
                'code' => '08',
                'name' => 'Huyện Lương Tài',
                'type' => 'Huyện',
                'city_id' => 19,
            ),
            225 => 
            array (
                'id' => 226,
                'code' => '01',
                'name' => 'Thành phố Hải Dương',
                'type' => 'Thành phố',
                'city_id' => 21,
            ),
            226 => 
            array (
                'id' => 227,
                'code' => '02',
                'name' => 'Thị xã Chí Linh',
                'type' => 'Thị xã',
                'city_id' => 21,
            ),
            227 => 
            array (
                'id' => 228,
                'code' => '03',
                'name' => 'Huyện Nam Sách',
                'type' => 'Huyện',
                'city_id' => 21,
            ),
            228 => 
            array (
                'id' => 229,
                'code' => '04',
                'name' => 'Huyện Kinh Môn',
                'type' => 'Huyện',
                'city_id' => 21,
            ),
            229 => 
            array (
                'id' => 230,
                'code' => '05',
                'name' => 'Huyện Gia Lộc',
                'type' => 'Huyện',
                'city_id' => 21,
            ),
            230 => 
            array (
                'id' => 231,
                'code' => '06',
                'name' => 'Huyện Tứ Kỳ',
                'type' => 'Huyện',
                'city_id' => 21,
            ),
            231 => 
            array (
                'id' => 232,
                'code' => '07',
                'name' => 'Huyện Thanh Miện',
                'type' => 'Huyện',
                'city_id' => 21,
            ),
            232 => 
            array (
                'id' => 233,
                'code' => '08',
                'name' => 'Huyện Ninh Giang',
                'type' => 'Huyện',
                'city_id' => 21,
            ),
            233 => 
            array (
                'id' => 234,
                'code' => '09',
                'name' => 'Huyện Cẩm Giàng',
                'type' => 'Huyện',
                'city_id' => 21,
            ),
            234 => 
            array (
                'id' => 235,
                'code' => '10',
                'name' => 'Huyện Thanh Hà',
                'type' => 'Huyện',
                'city_id' => 21,
            ),
            235 => 
            array (
                'id' => 236,
                'code' => '11',
                'name' => 'Huyện Kim Thành',
                'type' => 'Huyện',
                'city_id' => 21,
            ),
            236 => 
            array (
                'id' => 237,
                'code' => '12',
                'name' => 'Huyện Bình Giang',
                'type' => 'Huyện',
                'city_id' => 21,
            ),
            237 => 
            array (
                'id' => 238,
                'code' => '01',
                'name' => 'Thành phố Hưng Yên',
                'type' => 'Thành phố',
                'city_id' => 22,
            ),
            238 => 
            array (
                'id' => 239,
                'code' => '02',
                'name' => 'Huyện Kim Động',
                'type' => 'Huyện',
                'city_id' => 22,
            ),
            239 => 
            array (
                'id' => 240,
                'code' => '03',
                'name' => 'Huyện Ân Thi',
                'type' => 'Huyện',
                'city_id' => 22,
            ),
            240 => 
            array (
                'id' => 241,
                'code' => '04',
                'name' => 'Huyện Khoái Châu',
                'type' => 'Huyện',
                'city_id' => 22,
            ),
            241 => 
            array (
                'id' => 242,
                'code' => '05',
                'name' => 'Huyện Yên Mỹ',
                'type' => 'Huyện',
                'city_id' => 22,
            ),
            242 => 
            array (
                'id' => 243,
                'code' => '06',
                'name' => 'Huyện Tiên Lữ',
                'type' => 'Huyện',
                'city_id' => 22,
            ),
            243 => 
            array (
                'id' => 244,
                'code' => '07',
                'name' => 'Huyện Phù Cừ',
                'type' => 'Huyện',
                'city_id' => 22,
            ),
            244 => 
            array (
                'id' => 245,
                'code' => '08',
                'name' => 'Huyện Mỹ Hào',
                'type' => 'Huyện',
                'city_id' => 22,
            ),
            245 => 
            array (
                'id' => 246,
                'code' => '09',
                'name' => 'Huyện Văn Lâm',
                'type' => 'Huyện',
                'city_id' => 22,
            ),
            246 => 
            array (
                'id' => 247,
                'code' => '10',
                'name' => 'Huyện Văn Giang',
                'type' => 'Huyện',
                'city_id' => 22,
            ),
            247 => 
            array (
                'id' => 248,
                'code' => '01',
                'name' => 'Thành phố Hoà Bình',
                'type' => 'Thành phố',
                'city_id' => 23,
            ),
            248 => 
            array (
                'id' => 249,
                'code' => '02',
                'name' => 'Huyện Đà Bắc',
                'type' => 'Huyện',
                'city_id' => 23,
            ),
            249 => 
            array (
                'id' => 250,
                'code' => '03',
                'name' => 'Huyện Mai Châu',
                'type' => 'Huyện',
                'city_id' => 23,
            ),
            250 => 
            array (
                'id' => 251,
                'code' => '04',
                'name' => 'Huyện Tân Lạc',
                'type' => 'Huyện',
                'city_id' => 23,
            ),
            251 => 
            array (
                'id' => 252,
                'code' => '05',
                'name' => 'Huyện Lạc Sơn',
                'type' => 'Huyện',
                'city_id' => 23,
            ),
            252 => 
            array (
                'id' => 253,
                'code' => '06',
                'name' => 'Huyện Kỳ Sơn',
                'type' => 'Huyện',
                'city_id' => 23,
            ),
            253 => 
            array (
                'id' => 254,
                'code' => '07',
                'name' => 'Huyện Lương Sơn',
                'type' => 'Huyện',
                'city_id' => 23,
            ),
            254 => 
            array (
                'id' => 255,
                'code' => '08',
                'name' => 'Huyện Kim Bôi',
                'type' => 'Huyện',
                'city_id' => 23,
            ),
            255 => 
            array (
                'id' => 256,
                'code' => '09',
                'name' => 'Huyện Lạc Thuỷ',
                'type' => 'Huyện',
                'city_id' => 23,
            ),
            256 => 
            array (
                'id' => 257,
                'code' => '10',
                'name' => 'Huyện Yên Thuỷ',
                'type' => 'Huyện',
                'city_id' => 23,
            ),
            257 => 
            array (
                'id' => 258,
                'code' => '11',
                'name' => 'Huyện Cao Phong',
                'type' => 'Huyện',
                'city_id' => 23,
            ),
            258 => 
            array (
                'id' => 259,
                'code' => '01',
                'name' => 'Thành phố Phủ Lý',
                'type' => 'Thành phố',
                'city_id' => 24,
            ),
            259 => 
            array (
                'id' => 260,
                'code' => '02',
                'name' => 'Huyện Duy Tiên',
                'type' => 'Huyện',
                'city_id' => 24,
            ),
            260 => 
            array (
                'id' => 261,
                'code' => '03',
                'name' => 'Huyện Kim Bảng',
                'type' => 'Huyện',
                'city_id' => 24,
            ),
            261 => 
            array (
                'id' => 262,
                'code' => '04',
                'name' => 'Huyện Lý Nhân',
                'type' => 'Huyện',
                'city_id' => 24,
            ),
            262 => 
            array (
                'id' => 263,
                'code' => '05',
                'name' => 'Huyện Thanh Liêm',
                'type' => 'Huyện',
                'city_id' => 24,
            ),
            263 => 
            array (
                'id' => 264,
                'code' => '06',
                'name' => 'Huyện Bình Lục',
                'type' => 'Huyện',
                'city_id' => 24,
            ),
            264 => 
            array (
                'id' => 265,
                'code' => '01',
                'name' => 'Thành phố Nam Định',
                'type' => 'Thành phố',
                'city_id' => 25,
            ),
            265 => 
            array (
                'id' => 266,
                'code' => '02',
                'name' => 'Huyện Mỹ Lộc',
                'type' => 'Huyện',
                'city_id' => 25,
            ),
            266 => 
            array (
                'id' => 267,
                'code' => '03',
                'name' => 'Huyện Xuân Trường',
                'type' => 'Huyện',
                'city_id' => 25,
            ),
            267 => 
            array (
                'id' => 268,
                'code' => '04',
                'name' => 'Huyện Giao Thủy',
                'type' => 'Huyện',
                'city_id' => 25,
            ),
            268 => 
            array (
                'id' => 269,
                'code' => '05',
                'name' => 'Huyện ý Yên',
                'type' => 'Huyện',
                'city_id' => 25,
            ),
            269 => 
            array (
                'id' => 270,
                'code' => '06',
                'name' => 'Huyện Vụ Bản',
                'type' => 'Huyện',
                'city_id' => 25,
            ),
            270 => 
            array (
                'id' => 271,
                'code' => '07',
                'name' => 'Huyện Nam Trực',
                'type' => 'Huyện',
                'city_id' => 25,
            ),
            271 => 
            array (
                'id' => 272,
                'code' => '08',
                'name' => 'Huyện Trực Ninh',
                'type' => 'Huyện',
                'city_id' => 25,
            ),
            272 => 
            array (
                'id' => 273,
                'code' => '09',
                'name' => 'Huyện Nghĩa Hưng',
                'type' => 'Huyện',
                'city_id' => 25,
            ),
            273 => 
            array (
                'id' => 274,
                'code' => '10',
                'name' => 'Huyện Hải Hậu',
                'type' => 'Huyện',
                'city_id' => 25,
            ),
            274 => 
            array (
                'id' => 275,
                'code' => '01',
                'name' => 'Thành phố Thái Bình',
                'type' => 'Thành phố',
                'city_id' => 26,
            ),
            275 => 
            array (
                'id' => 276,
                'code' => '02',
                'name' => 'Huyện Quỳnh Phụ',
                'type' => 'Huyện',
                'city_id' => 26,
            ),
            276 => 
            array (
                'id' => 277,
                'code' => '03',
                'name' => 'Huyện Hưng Hà',
                'type' => 'Huyện',
                'city_id' => 26,
            ),
            277 => 
            array (
                'id' => 278,
                'code' => '04',
                'name' => 'Huyện Đông Hưng',
                'type' => 'Huyện',
                'city_id' => 26,
            ),
            278 => 
            array (
                'id' => 279,
                'code' => '05',
                'name' => 'Huyện Vũ Thư',
                'type' => 'Huyện',
                'city_id' => 26,
            ),
            279 => 
            array (
                'id' => 280,
                'code' => '06',
                'name' => 'Huyện Kiến Xương',
                'type' => 'Huyện',
                'city_id' => 26,
            ),
            280 => 
            array (
                'id' => 281,
                'code' => '07',
                'name' => 'Huyện Tiền Hải',
                'type' => 'Huyện',
                'city_id' => 26,
            ),
            281 => 
            array (
                'id' => 282,
                'code' => '08',
                'name' => 'Huyện Thái Thuỵ',
                'type' => 'Huyện',
                'city_id' => 26,
            ),
            282 => 
            array (
                'id' => 283,
                'code' => '01',
                'name' => 'Thành phố Ninh Bình',
                'type' => 'Thành phố',
                'city_id' => 27,
            ),
            283 => 
            array (
                'id' => 284,
                'code' => '02',
                'name' => 'Thị xã Tam Điệp',
                'type' => 'Thị xã',
                'city_id' => 27,
            ),
            284 => 
            array (
                'id' => 285,
                'code' => '03',
                'name' => 'Huyện Nho Quan',
                'type' => 'Huyện',
                'city_id' => 27,
            ),
            285 => 
            array (
                'id' => 286,
                'code' => '04',
                'name' => 'Huyện Gia Viễn',
                'type' => 'Huyện',
                'city_id' => 27,
            ),
            286 => 
            array (
                'id' => 287,
                'code' => '05',
                'name' => 'Huyện Hoa Lư',
                'type' => 'Huyện',
                'city_id' => 27,
            ),
            287 => 
            array (
                'id' => 288,
                'code' => '06',
                'name' => 'Huyện Yên Mô',
                'type' => 'Huyện',
                'city_id' => 27,
            ),
            288 => 
            array (
                'id' => 289,
                'code' => '07',
                'name' => 'Huyện Kim Sơn',
                'type' => 'Huyện',
                'city_id' => 27,
            ),
            289 => 
            array (
                'id' => 290,
                'code' => '08',
                'name' => 'Huyện Yên Khánh',
                'type' => 'Huyện',
                'city_id' => 27,
            ),
            290 => 
            array (
                'id' => 291,
                'code' => '01',
                'name' => 'Thành phố Thanh Hoá',
                'type' => 'Thành phố',
                'city_id' => 28,
            ),
            291 => 
            array (
                'id' => 292,
                'code' => '02',
                'name' => 'Thị xã Bỉm Sơn',
                'type' => 'Thị xã',
                'city_id' => 28,
            ),
            292 => 
            array (
                'id' => 293,
                'code' => '03',
                'name' => 'Thị xã Sầm Sơn',
                'type' => 'Thị xã',
                'city_id' => 28,
            ),
            293 => 
            array (
                'id' => 294,
                'code' => '04',
                'name' => 'Huyện Quan Hoá',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            294 => 
            array (
                'id' => 295,
                'code' => '05',
                'name' => 'Huyện Quan Sơn',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            295 => 
            array (
                'id' => 296,
                'code' => '06',
                'name' => 'Huyện Mường Lát',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            296 => 
            array (
                'id' => 297,
                'code' => '07',
                'name' => 'Huyện Bá Thước',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            297 => 
            array (
                'id' => 298,
                'code' => '08',
                'name' => 'Huyện Thường Xuân',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            298 => 
            array (
                'id' => 299,
                'code' => '09',
                'name' => 'Huyện Như Xuân',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            299 => 
            array (
                'id' => 300,
                'code' => '10',
                'name' => 'Huyện Như Thanh',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            300 => 
            array (
                'id' => 301,
                'code' => '11',
                'name' => 'Huyện Lang Chánh',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            301 => 
            array (
                'id' => 302,
                'code' => '12',
                'name' => 'Huyện Ngọc Lặc',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            302 => 
            array (
                'id' => 303,
                'code' => '13',
                'name' => 'Huyện Thạch Thành',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            303 => 
            array (
                'id' => 304,
                'code' => '14',
                'name' => 'Huyện Cẩm Thủy',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            304 => 
            array (
                'id' => 305,
                'code' => '15',
                'name' => 'Huyện Thọ Xuân',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            305 => 
            array (
                'id' => 306,
                'code' => '16',
                'name' => 'Huyện Vĩnh Lộc',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            306 => 
            array (
                'id' => 307,
                'code' => '17',
                'name' => 'Huyện Thiệu Hoá',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            307 => 
            array (
                'id' => 308,
                'code' => '18',
                'name' => 'Huyện Triệu Sơn',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            308 => 
            array (
                'id' => 309,
                'code' => '19',
                'name' => 'Huyện Nông Cống',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            309 => 
            array (
                'id' => 310,
                'code' => '20',
                'name' => 'Huyện Đông Sơn',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            310 => 
            array (
                'id' => 311,
                'code' => '21',
                'name' => 'Huyện Hà Trung',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            311 => 
            array (
                'id' => 312,
                'code' => '22',
                'name' => 'Huyện Hoằng Hoá',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            312 => 
            array (
                'id' => 313,
                'code' => '23',
                'name' => 'Huyện Nga Sơn',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            313 => 
            array (
                'id' => 314,
                'code' => '24',
                'name' => 'Huyện Hậu Lộc',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            314 => 
            array (
                'id' => 315,
                'code' => '25',
                'name' => 'Huyện Quảng Xương',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            315 => 
            array (
                'id' => 316,
                'code' => '26',
                'name' => 'Huyện Tĩnh Gia',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            316 => 
            array (
                'id' => 317,
                'code' => '27',
                'name' => 'Huyện Yên Định',
                'type' => 'Huyện',
                'city_id' => 28,
            ),
            317 => 
            array (
                'id' => 318,
                'code' => '01',
                'name' => 'Thành phố Vinh',
                'type' => 'Thành phố',
                'city_id' => 29,
            ),
            318 => 
            array (
                'id' => 319,
                'code' => '02',
                'name' => 'Thị xã Cửa Lò',
                'type' => 'Thị xã',
                'city_id' => 29,
            ),
            319 => 
            array (
                'id' => 320,
                'code' => '03',
                'name' => 'Huyện Quỳ Châu',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            320 => 
            array (
                'id' => 321,
                'code' => '04',
                'name' => 'Huyện Quỳ Hợp',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            321 => 
            array (
                'id' => 322,
                'code' => '05',
                'name' => 'Huyện Nghĩa Đàn',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            322 => 
            array (
                'id' => 323,
                'code' => '06',
                'name' => 'Huyện Quỳnh Lưu',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            323 => 
            array (
                'id' => 324,
                'code' => '07',
                'name' => 'Huyện Kỳ Sơn',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            324 => 
            array (
                'id' => 325,
                'code' => '08',
                'name' => 'Huyện Tương Dương',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            325 => 
            array (
                'id' => 326,
                'code' => '09',
                'name' => 'Huyện Con Cuông',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            326 => 
            array (
                'id' => 327,
                'code' => '10',
                'name' => 'Huyện Tân Kỳ',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            327 => 
            array (
                'id' => 328,
                'code' => '11',
                'name' => 'Huyện Yên Thành',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            328 => 
            array (
                'id' => 329,
                'code' => '12',
                'name' => 'Huyện Diễn Châu',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            329 => 
            array (
                'id' => 330,
                'code' => '13',
                'name' => 'Huyện Anh Sơn',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            330 => 
            array (
                'id' => 331,
                'code' => '14',
                'name' => 'Huyện Đô Lương',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            331 => 
            array (
                'id' => 332,
                'code' => '15',
                'name' => 'Huyện Thanh Chương',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            332 => 
            array (
                'id' => 333,
                'code' => '16',
                'name' => 'Huyện Nghi Lộc',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            333 => 
            array (
                'id' => 334,
                'code' => '17',
                'name' => 'Huyện Nam Đàn',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            334 => 
            array (
                'id' => 335,
                'code' => '18',
                'name' => 'Huyện Hưng Nguyên',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            335 => 
            array (
                'id' => 336,
                'code' => '19',
                'name' => 'Huyện Quế Phong',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            336 => 
            array (
                'id' => 337,
                'code' => '20',
                'name' => 'Thị Xã Thái Hòa',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            337 => 
            array (
                'id' => 338,
                'code' => '21',
                'name' => 'Thị Xã Hoàng Mai',
                'type' => 'Huyện',
                'city_id' => 29,
            ),
            338 => 
            array (
                'id' => 339,
                'code' => '01',
                'name' => 'Thành phố Hà Tĩnh',
                'type' => 'Thành phố',
                'city_id' => 30,
            ),
            339 => 
            array (
                'id' => 340,
                'code' => '02',
                'name' => 'Thị xã Hồng Lĩnh',
                'type' => 'Thị xã',
                'city_id' => 30,
            ),
            340 => 
            array (
                'id' => 341,
                'code' => '03',
                'name' => 'Huyện Hương Sơn',
                'type' => 'Huyện',
                'city_id' => 30,
            ),
            341 => 
            array (
                'id' => 342,
                'code' => '04',
                'name' => 'Huyện Đức Thọ',
                'type' => 'Huyện',
                'city_id' => 30,
            ),
            342 => 
            array (
                'id' => 343,
                'code' => '05',
                'name' => 'Huyện Nghi Xuân',
                'type' => 'Huyện',
                'city_id' => 30,
            ),
            343 => 
            array (
                'id' => 344,
                'code' => '06',
                'name' => 'Huyện Can Lộc',
                'type' => 'Huyện',
                'city_id' => 30,
            ),
            344 => 
            array (
                'id' => 345,
                'code' => '07',
                'name' => 'Huyện Hương Khê',
                'type' => 'Huyện',
                'city_id' => 30,
            ),
            345 => 
            array (
                'id' => 346,
                'code' => '08',
                'name' => 'Huyện Thạch Hà',
                'type' => 'Huyện',
                'city_id' => 30,
            ),
            346 => 
            array (
                'id' => 347,
                'code' => '09',
                'name' => 'Huyện Cẩm Xuyên',
                'type' => 'Huyện',
                'city_id' => 30,
            ),
            347 => 
            array (
                'id' => 348,
                'code' => '10',
                'name' => 'Huyện Kỳ Anh',
                'type' => 'Huyện',
                'city_id' => 30,
            ),
            348 => 
            array (
                'id' => 349,
                'code' => '11',
                'name' => 'Huyện Vũ Quang',
                'type' => 'Huyện',
                'city_id' => 30,
            ),
            349 => 
            array (
                'id' => 350,
                'code' => '12',
                'name' => 'Huyện Lộc Hà',
                'type' => 'Huyện',
                'city_id' => 30,
            ),
            350 => 
            array (
                'id' => 351,
                'code' => '01',
                'name' => 'Thành phố Đồng Hới',
                'type' => 'Thành phố',
                'city_id' => 31,
            ),
            351 => 
            array (
                'id' => 352,
                'code' => '02',
                'name' => 'Huyện Tuyên Hoá',
                'type' => 'Huyện',
                'city_id' => 31,
            ),
            352 => 
            array (
                'id' => 353,
                'code' => '03',
                'name' => 'Huyện Minh Hoá',
                'type' => 'Huyện',
                'city_id' => 31,
            ),
            353 => 
            array (
                'id' => 354,
                'code' => '04',
                'name' => 'Huyện Quảng Trạch',
                'type' => 'Huyện',
                'city_id' => 31,
            ),
            354 => 
            array (
                'id' => 355,
                'code' => '05',
                'name' => 'Huyện Bố Trạch',
                'type' => 'Huyện',
                'city_id' => 31,
            ),
            355 => 
            array (
                'id' => 356,
                'code' => '06',
                'name' => 'Huyện Quảng Ninh',
                'type' => 'Huyện',
                'city_id' => 31,
            ),
            356 => 
            array (
                'id' => 357,
                'code' => '07',
                'name' => 'Huyện Lệ Thuỷ',
                'type' => 'Huyện',
                'city_id' => 31,
            ),
            357 => 
            array (
                'id' => 358,
                'code' => '08',
                'name' => 'Thị xã Ba Đồn',
                'type' => 'Thị xã',
                'city_id' => 31,
            ),
            358 => 
            array (
                'id' => 359,
                'code' => '01',
                'name' => 'Thành phố Đông Hà',
                'type' => 'Thành phố',
                'city_id' => 32,
            ),
            359 => 
            array (
                'id' => 360,
                'code' => '02',
                'name' => 'Thị xã Quảng Trị',
                'type' => 'Thị xã',
                'city_id' => 32,
            ),
            360 => 
            array (
                'id' => 361,
                'code' => '03',
                'name' => 'Huyện Vĩnh Linh',
                'type' => 'Huyện',
                'city_id' => 32,
            ),
            361 => 
            array (
                'id' => 362,
                'code' => '04',
                'name' => 'Huyện Gio Linh',
                'type' => 'Huyện',
                'city_id' => 32,
            ),
            362 => 
            array (
                'id' => 363,
                'code' => '05',
                'name' => 'Huyện Cam Lộ',
                'type' => 'Huyện',
                'city_id' => 32,
            ),
            363 => 
            array (
                'id' => 364,
                'code' => '06',
                'name' => 'Huyện Triệu Phong',
                'type' => 'Huyện',
                'city_id' => 32,
            ),
            364 => 
            array (
                'id' => 365,
                'code' => '07',
                'name' => 'Huyện Hải Lăng',
                'type' => 'Huyện',
                'city_id' => 32,
            ),
            365 => 
            array (
                'id' => 366,
                'code' => '08',
                'name' => 'Huyện Hướng Hóa',
                'type' => 'Huyện',
                'city_id' => 32,
            ),
            366 => 
            array (
                'id' => 367,
                'code' => '09',
                'name' => 'Huyện Đăkrông',
                'type' => 'Huyện',
                'city_id' => 32,
            ),
            367 => 
            array (
                'id' => 368,
                'code' => '10',
                'name' => 'Huyện đảo Cồn Cỏ',
                'type' => 'Huyện',
                'city_id' => 32,
            ),
            368 => 
            array (
                'id' => 369,
                'code' => '01',
                'name' => 'Thành phố Huế',
                'type' => 'Thành phố',
                'city_id' => 33,
            ),
            369 => 
            array (
                'id' => 370,
                'code' => '02',
                'name' => 'Huyện Phong Điền',
                'type' => 'Huyện',
                'city_id' => 33,
            ),
            370 => 
            array (
                'id' => 371,
                'code' => '03',
                'name' => 'Huyện Quảng Điền',
                'type' => 'Huyện',
                'city_id' => 33,
            ),
            371 => 
            array (
                'id' => 372,
                'code' => '04',
                'name' => 'Thị xã Hương Trà',
                'type' => 'Thị xã',
                'city_id' => 33,
            ),
            372 => 
            array (
                'id' => 373,
                'code' => '05',
                'name' => 'Huyện Phú Vang',
                'type' => 'Huyện',
                'city_id' => 33,
            ),
            373 => 
            array (
                'id' => 374,
                'code' => '06',
                'name' => 'Thị xã Hương Thủy',
                'type' => 'Thị xã',
                'city_id' => 33,
            ),
            374 => 
            array (
                'id' => 375,
                'code' => '07',
                'name' => 'Huyện Phú Lộc',
                'type' => 'Huyện',
                'city_id' => 33,
            ),
            375 => 
            array (
                'id' => 376,
                'code' => '08',
                'name' => 'Huyện Nam Đông',
                'type' => 'Huyện',
                'city_id' => 33,
            ),
            376 => 
            array (
                'id' => 377,
                'code' => '09',
                'name' => 'Huyện A Lưới',
                'type' => 'Huyện',
                'city_id' => 33,
            ),
            377 => 
            array (
                'id' => 378,
                'code' => '01',
                'name' => 'Thành phố Tam Kỳ',
                'type' => 'Thành phố',
                'city_id' => 34,
            ),
            378 => 
            array (
                'id' => 379,
                'code' => '02',
                'name' => 'Thành phố Hội An',
                'type' => 'Thành phố',
                'city_id' => 34,
            ),
            379 => 
            array (
                'id' => 380,
                'code' => '03',
                'name' => 'Huyện Duy Xuyên',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            380 => 
            array (
                'id' => 381,
                'code' => '04',
                'name' => 'Huyện Điện Bàn',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            381 => 
            array (
                'id' => 382,
                'code' => '05',
                'name' => 'Huyện Đại Lộc',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            382 => 
            array (
                'id' => 383,
                'code' => '06',
                'name' => 'Huyện Quế Sơn',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            383 => 
            array (
                'id' => 384,
                'code' => '07',
                'name' => 'Huyện Hiệp Đức',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            384 => 
            array (
                'id' => 385,
                'code' => '08',
                'name' => 'Huyện Thăng Bình',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            385 => 
            array (
                'id' => 386,
                'code' => '09',
                'name' => 'Huyện Núi Thành',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            386 => 
            array (
                'id' => 387,
                'code' => '10',
                'name' => 'Huyện Tiên Phước',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            387 => 
            array (
                'id' => 388,
                'code' => '11',
                'name' => 'Huyện Bắc Trà My',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            388 => 
            array (
                'id' => 389,
                'code' => '12',
                'name' => 'Huyện Đông Giang',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            389 => 
            array (
                'id' => 390,
                'code' => '13',
                'name' => 'Huyện Nam Giang',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            390 => 
            array (
                'id' => 391,
                'code' => '14',
                'name' => 'Huyện Phước Sơn',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            391 => 
            array (
                'id' => 392,
                'code' => '15',
                'name' => 'Huyện Nam Trà My',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            392 => 
            array (
                'id' => 393,
                'code' => '16',
                'name' => 'Huyện Tây Giang',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            393 => 
            array (
                'id' => 394,
                'code' => '17',
                'name' => 'Huyện Phú Ninh',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            394 => 
            array (
                'id' => 395,
                'code' => '18',
                'name' => 'Huyện Nông Sơn',
                'type' => 'Huyện',
                'city_id' => 34,
            ),
            395 => 
            array (
                'id' => 396,
                'code' => '01',
                'name' => 'Huyện Bình Sơn',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            396 => 
            array (
                'id' => 397,
                'code' => '02',
                'name' => 'Huyện Sơn Tịnh',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            397 => 
            array (
                'id' => 398,
                'code' => '03',
                'name' => 'Thành phố Quảng Ngãi',
                'type' => 'Thành phố',
                'city_id' => 35,
            ),
            398 => 
            array (
                'id' => 399,
                'code' => '04',
                'name' => 'Huyện Tư Nghĩa',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            399 => 
            array (
                'id' => 400,
                'code' => '05',
                'name' => 'Huyện Nghĩa Hành',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            400 => 
            array (
                'id' => 401,
                'code' => '06',
                'name' => 'Huyện Mộ Đức',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            401 => 
            array (
                'id' => 402,
                'code' => '07',
                'name' => 'Huyện Đức phổ',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            402 => 
            array (
                'id' => 403,
                'code' => '08',
                'name' => 'Huyện Ba Tơ',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            403 => 
            array (
                'id' => 404,
                'code' => '09',
                'name' => 'Huyện Minh Long',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            404 => 
            array (
                'id' => 405,
                'code' => '10',
                'name' => 'Huyện Sơn Hà',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            405 => 
            array (
                'id' => 406,
                'code' => '11',
                'name' => 'Huyện Sơn Tây',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            406 => 
            array (
                'id' => 407,
                'code' => '12',
                'name' => 'Huyện Trà Bồng',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            407 => 
            array (
                'id' => 408,
                'code' => '13',
                'name' => 'Huyện Tây Trà',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            408 => 
            array (
                'id' => 409,
                'code' => '14',
                'name' => 'Huyện Lý Sơn',
                'type' => 'Huyện',
                'city_id' => 35,
            ),
            409 => 
            array (
                'id' => 410,
                'code' => '01',
                'name' => 'Thành phố Kon Tum',
                'type' => 'Thành phố',
                'city_id' => 36,
            ),
            410 => 
            array (
                'id' => 411,
                'code' => '02',
                'name' => 'Huyện Đăk Glei',
                'type' => 'Huyện',
                'city_id' => 36,
            ),
            411 => 
            array (
                'id' => 412,
                'code' => '03',
                'name' => 'Huyện Ngọc Hồi',
                'type' => 'Huyện',
                'city_id' => 36,
            ),
            412 => 
            array (
                'id' => 413,
                'code' => '04',
                'name' => 'Huyện Đăk Tô',
                'type' => 'Huyện',
                'city_id' => 36,
            ),
            413 => 
            array (
                'id' => 414,
                'code' => '05',
                'name' => 'Huyện Sa Thầy',
                'type' => 'Huyện',
                'city_id' => 36,
            ),
            414 => 
            array (
                'id' => 415,
                'code' => '06',
                'name' => 'Huyện Kon Plông',
                'type' => 'Huyện',
                'city_id' => 36,
            ),
            415 => 
            array (
                'id' => 416,
                'code' => '07',
                'name' => 'Huyện Đăk Hà',
                'type' => 'Huyện',
                'city_id' => 36,
            ),
            416 => 
            array (
                'id' => 417,
                'code' => '08',
                'name' => 'Huyện Kon Rẫy',
                'type' => 'Huyện',
                'city_id' => 36,
            ),
            417 => 
            array (
                'id' => 418,
                'code' => '09',
                'name' => 'Huyện Tu Mơ Rông',
                'type' => 'Huyện',
                'city_id' => 36,
            ),
            418 => 
            array (
                'id' => 419,
                'code' => '01',
                'name' => 'Thành phố Quy Nhơn',
                'type' => 'Thành phố',
                'city_id' => 37,
            ),
            419 => 
            array (
                'id' => 420,
                'code' => '02',
                'name' => 'Huyện An Lão',
                'type' => 'Huyện',
                'city_id' => 37,
            ),
            420 => 
            array (
                'id' => 421,
                'code' => '03',
                'name' => 'Huyện Hoài Ân',
                'type' => 'Huyện',
                'city_id' => 37,
            ),
            421 => 
            array (
                'id' => 422,
                'code' => '04',
                'name' => 'Huyện Hoài Nhơn',
                'type' => 'Huyện',
                'city_id' => 37,
            ),
            422 => 
            array (
                'id' => 423,
                'code' => '05',
                'name' => 'Huyện Phù Mỹ',
                'type' => 'Huyện',
                'city_id' => 37,
            ),
            423 => 
            array (
                'id' => 424,
                'code' => '06',
                'name' => 'Huyện Phù Cát',
                'type' => 'Huyện',
                'city_id' => 37,
            ),
            424 => 
            array (
                'id' => 425,
                'code' => '07',
                'name' => 'Huyện Vĩnh Thạnh',
                'type' => 'Huyện',
                'city_id' => 37,
            ),
            425 => 
            array (
                'id' => 426,
                'code' => '08',
                'name' => 'Huyện Tây Sơn',
                'type' => 'Huyện',
                'city_id' => 37,
            ),
            426 => 
            array (
                'id' => 427,
                'code' => '09',
                'name' => 'Huyện Vân Canh',
                'type' => 'Huyện',
                'city_id' => 37,
            ),
            427 => 
            array (
                'id' => 428,
                'code' => '10',
                'name' => 'Thị xã An Nhơn',
                'type' => 'Thị xã',
                'city_id' => 37,
            ),
            428 => 
            array (
                'id' => 429,
                'code' => '11',
                'name' => 'Huyện Tuy Phước',
                'type' => 'Huyện',
                'city_id' => 37,
            ),
            429 => 
            array (
                'id' => 430,
                'code' => '01',
                'name' => 'Thành phố Pleiku',
                'type' => 'Thành phố',
                'city_id' => 38,
            ),
            430 => 
            array (
                'id' => 431,
                'code' => '02',
                'name' => 'Huyện Chư Păh',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            431 => 
            array (
                'id' => 432,
                'code' => '03',
                'name' => 'Huyện Mang Yang',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            432 => 
            array (
                'id' => 433,
                'code' => '04',
                'name' => 'Huyện KBang',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            433 => 
            array (
                'id' => 434,
                'code' => '05',
                'name' => 'Thị xã An Khê',
                'type' => 'Thị xã',
                'city_id' => 38,
            ),
            434 => 
            array (
                'id' => 435,
                'code' => '06',
                'name' => 'Huyện Kông Chro',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            435 => 
            array (
                'id' => 436,
                'code' => '07',
                'name' => 'Huyện Đức Cơ',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            436 => 
            array (
                'id' => 437,
                'code' => '08',
                'name' => 'Huyện Chư Prông',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            437 => 
            array (
                'id' => 438,
                'code' => '09',
                'name' => 'Huyện Chư Sê',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            438 => 
            array (
                'id' => 439,
                'code' => '10',
                'name' => 'Thị xã Ayun Pa',
                'type' => 'Thị xã',
                'city_id' => 38,
            ),
            439 => 
            array (
                'id' => 440,
                'code' => '11',
                'name' => 'Huyện Krông Pa',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            440 => 
            array (
                'id' => 441,
                'code' => '12',
                'name' => 'Huyện Ia Grai',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            441 => 
            array (
                'id' => 442,
                'code' => '13',
                'name' => 'Huyện Đak Đoa',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            442 => 
            array (
                'id' => 443,
                'code' => '14',
                'name' => 'Huyện Ia Pa',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            443 => 
            array (
                'id' => 444,
                'code' => '15',
                'name' => 'Huyện Đak Pơ',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            444 => 
            array (
                'id' => 445,
                'code' => '16',
                'name' => 'Huyện Phú Thiện',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            445 => 
            array (
                'id' => 446,
                'code' => '17',
                'name' => 'Huyện Chư Pưh',
                'type' => 'Huyện',
                'city_id' => 38,
            ),
            446 => 
            array (
                'id' => 447,
                'code' => '01',
                'name' => 'Thành phố Tuy Hòa',
                'type' => 'Thành phố',
                'city_id' => 39,
            ),
            447 => 
            array (
                'id' => 448,
                'code' => '02',
                'name' => 'Huyện Đồng Xuân',
                'type' => 'Huyện',
                'city_id' => 39,
            ),
            448 => 
            array (
                'id' => 449,
                'code' => '03',
                'name' => 'Thị Xã Sông Cầu',
                'type' => 'Huyện',
                'city_id' => 39,
            ),
            449 => 
            array (
                'id' => 450,
                'code' => '04',
                'name' => 'Huyện Tuy An',
                'type' => 'Huyện',
                'city_id' => 39,
            ),
            450 => 
            array (
                'id' => 451,
                'code' => '05',
                'name' => 'Huyện Sơn Hòa',
                'type' => 'Huyện',
                'city_id' => 39,
            ),
            451 => 
            array (
                'id' => 452,
                'code' => '06',
                'name' => 'Huyện Sông Hinh',
                'type' => 'Huyện',
                'city_id' => 39,
            ),
            452 => 
            array (
                'id' => 453,
                'code' => '07',
                'name' => 'Huyện Đông Hòa',
                'type' => 'Huyện',
                'city_id' => 39,
            ),
            453 => 
            array (
                'id' => 454,
                'code' => '08',
                'name' => 'Huyện Phú Hòa',
                'type' => 'Huyện',
                'city_id' => 39,
            ),
            454 => 
            array (
                'id' => 455,
                'code' => '09',
                'name' => 'Huyện Tây Hòa',
                'type' => 'Huyện',
                'city_id' => 39,
            ),
            455 => 
            array (
                'id' => 456,
                'code' => '01',
                'name' => 'Thành phố Buôn Ma Thuột',
                'type' => 'Thành phố',
                'city_id' => 40,
            ),
            456 => 
            array (
                'id' => 457,
                'code' => '02',
                'name' => 'Huyện Ea H Leo',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            457 => 
            array (
                'id' => 458,
                'code' => '03',
                'name' => 'Huyện Krông Buk',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            458 => 
            array (
                'id' => 459,
                'code' => '04',
                'name' => 'Huyện Krông Năng',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            459 => 
            array (
                'id' => 460,
                'code' => '05',
                'name' => 'Huyện Ea Súp',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            460 => 
            array (
                'id' => 461,
                'code' => '06',
                'name' => 'Huyện Cư Mgar',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            461 => 
            array (
                'id' => 462,
                'code' => '07',
                'name' => 'Huyện Krông Pắc',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            462 => 
            array (
                'id' => 463,
                'code' => '08',
                'name' => 'Huyện Ea Kar',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            463 => 
            array (
                'id' => 464,
                'code' => '09',
                'name' => 'Huyện M\'Đrăk',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            464 => 
            array (
                'id' => 465,
                'code' => '10',
                'name' => 'Huyện Krông Ana',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            465 => 
            array (
                'id' => 466,
                'code' => '11',
                'name' => 'Huyện Krông Bông',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            466 => 
            array (
                'id' => 467,
                'code' => '12',
                'name' => 'Huyện Lăk',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            467 => 
            array (
                'id' => 468,
                'code' => '13',
                'name' => 'Huyện Buôn Đôn',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            468 => 
            array (
                'id' => 469,
                'code' => '14',
                'name' => 'Huyện Cư Kuin',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            469 => 
            array (
                'id' => 470,
                'code' => '15',
                'name' => 'Thị Xã Buôn Hồ',
                'type' => 'Huyện',
                'city_id' => 40,
            ),
            470 => 
            array (
                'id' => 471,
                'code' => '01',
                'name' => 'Thành phố Nha Trang',
                'type' => 'Thành phố',
                'city_id' => 41,
            ),
            471 => 
            array (
                'id' => 472,
                'code' => '02',
                'name' => 'Huyện Vạn Ninh',
                'type' => 'Huyện',
                'city_id' => 41,
            ),
            472 => 
            array (
                'id' => 473,
                'code' => '03',
                'name' => 'Thị xã Ninh Hoà',
                'type' => 'Thị xã',
                'city_id' => 41,
            ),
            473 => 
            array (
                'id' => 474,
                'code' => '04',
                'name' => 'Huyện Diên Khánh',
                'type' => 'Huyện',
                'city_id' => 41,
            ),
            474 => 
            array (
                'id' => 475,
                'code' => '05',
                'name' => 'Huyện Khánh Vĩnh',
                'type' => 'Huyện',
                'city_id' => 41,
            ),
            475 => 
            array (
                'id' => 476,
                'code' => '06',
                'name' => 'Thành phố Cam Ranh',
                'type' => 'Thành phố',
                'city_id' => 41,
            ),
            476 => 
            array (
                'id' => 477,
                'code' => '07',
                'name' => 'Huyện Khánh Sơn',
                'type' => 'Huyện',
                'city_id' => 41,
            ),
            477 => 
            array (
                'id' => 478,
                'code' => '09',
                'name' => 'Huyện Cam Lâm',
                'type' => 'Huyện',
                'city_id' => 41,
            ),
            478 => 
            array (
                'id' => 479,
                'code' => '01',
                'name' => 'Thành phố Đà Lạt',
                'type' => 'Thành phố',
                'city_id' => 42,
            ),
            479 => 
            array (
                'id' => 480,
                'code' => '02',
                'name' => 'Thành phố Bảo Lộc',
                'type' => 'Thành phố',
                'city_id' => 42,
            ),
            480 => 
            array (
                'id' => 481,
                'code' => '03',
                'name' => 'Huyện Đức Trọng',
                'type' => 'Huyện',
                'city_id' => 42,
            ),
            481 => 
            array (
                'id' => 482,
                'code' => '04',
                'name' => 'Huyện Di Linh',
                'type' => 'Huyện',
                'city_id' => 42,
            ),
            482 => 
            array (
                'id' => 483,
                'code' => '05',
                'name' => 'Huyện Đơn Dương',
                'type' => 'Huyện',
                'city_id' => 42,
            ),
            483 => 
            array (
                'id' => 484,
                'code' => '06',
                'name' => 'Huyện Lạc Dương',
                'type' => 'Huyện',
                'city_id' => 42,
            ),
            484 => 
            array (
                'id' => 485,
                'code' => '07',
                'name' => 'Huyện Đạ Huoai',
                'type' => 'Huyện',
                'city_id' => 42,
            ),
            485 => 
            array (
                'id' => 486,
                'code' => '08',
                'name' => 'Huyện Đạ Tẻh',
                'type' => 'Huyện',
                'city_id' => 42,
            ),
            486 => 
            array (
                'id' => 487,
                'code' => '09',
                'name' => 'Huyện Cát Tiên',
                'type' => 'Huyện',
                'city_id' => 42,
            ),
            487 => 
            array (
                'id' => 488,
                'code' => '10',
                'name' => 'Huyện Lâm Hà',
                'type' => 'Huyện',
                'city_id' => 42,
            ),
            488 => 
            array (
                'id' => 489,
                'code' => '11',
                'name' => 'Huyện Bảo Lâm',
                'type' => 'Huyện',
                'city_id' => 42,
            ),
            489 => 
            array (
                'id' => 490,
                'code' => '12',
                'name' => 'Huyện Đam Rông',
                'type' => 'Huyện',
                'city_id' => 42,
            ),
            490 => 
            array (
                'id' => 491,
                'code' => '00',
                'name' => 'Sở Giáo dục và Đào tạo',
                'type' => 'Huyện',
                'city_id' => 43,
            ),
            491 => 
            array (
                'id' => 492,
                'code' => '01',
                'name' => 'Thị xã Đồng Xoài',
                'type' => 'Thị xã',
                'city_id' => 43,
            ),
            492 => 
            array (
                'id' => 493,
                'code' => '02',
                'name' => 'Huyện Đồng Phú',
                'type' => 'Huyện',
                'city_id' => 43,
            ),
            493 => 
            array (
                'id' => 494,
                'code' => '03',
                'name' => 'Huyện Chơn Thành',
                'type' => 'Huyện',
                'city_id' => 43,
            ),
            494 => 
            array (
                'id' => 495,
                'code' => '04',
                'name' => 'Thị xã Bình Long',
                'type' => 'Thị xã',
                'city_id' => 43,
            ),
            495 => 
            array (
                'id' => 496,
                'code' => '05',
                'name' => 'Huyện Lộc Ninh',
                'type' => 'Huyện',
                'city_id' => 43,
            ),
            496 => 
            array (
                'id' => 497,
                'code' => '06',
                'name' => 'Huyện Bù Đốp',
                'type' => 'Huyện',
                'city_id' => 43,
            ),
            497 => 
            array (
                'id' => 498,
                'code' => '07',
                'name' => 'Thị xã Phước Long',
                'type' => 'Thị xã',
                'city_id' => 43,
            ),
            498 => 
            array (
                'id' => 499,
                'code' => '08',
                'name' => 'Huyện Bù Đăng',
                'type' => 'Huyện',
                'city_id' => 43,
            ),
            499 => 
            array (
                'id' => 500,
                'code' => '09',
                'name' => 'Huyện Hớn Quản',
                'type' => 'Huyện',
                'city_id' => 43,
            ),
        ));
        \DB::table('organization_district')->insert(array (
            0 => 
            array (
                'id' => 501,
                'code' => '10',
                'name' => 'Huyện Bù Gia Mập',
                'type' => 'Huyện',
                'city_id' => 43,
            ),
            1 => 
            array (
                'id' => 502,
                'code' => '01',
                'name' => 'Th. phố Thủ Dầu Một',
                'type' => 'Huyện',
                'city_id' => 44,
            ),
            2 => 
            array (
                'id' => 503,
                'code' => '02',
                'name' => 'Thị xã Bến Cát',
                'type' => 'Thị xã',
                'city_id' => 44,
            ),
            3 => 
            array (
                'id' => 504,
                'code' => '03',
                'name' => 'Thị xã Tân Uyên',
                'type' => 'Thị xã',
                'city_id' => 44,
            ),
            4 => 
            array (
                'id' => 505,
                'code' => '04',
                'name' => 'Thị xã Thuận An',
                'type' => 'Thị xã',
                'city_id' => 44,
            ),
            5 => 
            array (
                'id' => 506,
                'code' => '05',
                'name' => 'Thị xã Dĩ An',
                'type' => 'Thị xã',
                'city_id' => 44,
            ),
            6 => 
            array (
                'id' => 507,
                'code' => '06',
                'name' => 'Huyện Phú Giáo',
                'type' => 'Huyện',
                'city_id' => 44,
            ),
            7 => 
            array (
                'id' => 508,
                'code' => '07',
                'name' => 'Huyện Dầu Tiếng',
                'type' => 'Huyện',
                'city_id' => 44,
            ),
            8 => 
            array (
                'id' => 509,
                'code' => '08',
                'name' => 'Huyện Bắc Tân Uyên',
                'type' => 'Huyện',
                'city_id' => 44,
            ),
            9 => 
            array (
                'id' => 510,
                'code' => '09',
                'name' => 'Huện Bàu Bàng',
                'type' => 'Huyện',
                'city_id' => 44,
            ),
            10 => 
            array (
                'id' => 511,
                'code' => '01',
                'name' => 'Th. phố Phan Rang -Tháp Chàm',
                'type' => 'Huyện',
                'city_id' => 45,
            ),
            11 => 
            array (
                'id' => 512,
                'code' => '02',
                'name' => 'Huyện Ninh Sơn',
                'type' => 'Huyện',
                'city_id' => 45,
            ),
            12 => 
            array (
                'id' => 513,
                'code' => '03',
                'name' => 'Huyện Ninh Hải',
                'type' => 'Huyện',
                'city_id' => 45,
            ),
            13 => 
            array (
                'id' => 514,
                'code' => '04',
                'name' => 'Huyện Ninh Phước',
                'type' => 'Huyện',
                'city_id' => 45,
            ),
            14 => 
            array (
                'id' => 515,
                'code' => '05',
                'name' => 'Huyện Bác ái',
                'type' => 'Huyện',
                'city_id' => 45,
            ),
            15 => 
            array (
                'id' => 516,
                'code' => '06',
                'name' => 'Huyện Thuận Bắc',
                'type' => 'Huyện',
                'city_id' => 45,
            ),
            16 => 
            array (
                'id' => 517,
                'code' => '07',
                'name' => 'Huyện Thuận Nam',
                'type' => 'Huyện',
                'city_id' => 45,
            ),
            17 => 
            array (
                'id' => 518,
                'code' => '01',
                'name' => 'Thành phố Tây Ninh',
                'type' => 'Thành phố',
                'city_id' => 46,
            ),
            18 => 
            array (
                'id' => 519,
                'code' => '02',
                'name' => 'Huyện Tân Biên',
                'type' => 'Huyện',
                'city_id' => 46,
            ),
            19 => 
            array (
                'id' => 520,
                'code' => '03',
                'name' => 'Huyện Tân Châu',
                'type' => 'Huyện',
                'city_id' => 46,
            ),
            20 => 
            array (
                'id' => 521,
                'code' => '04',
                'name' => 'Huyện Dương Minh Châu',
                'type' => 'Huyện',
                'city_id' => 46,
            ),
            21 => 
            array (
                'id' => 522,
                'code' => '05',
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'city_id' => 46,
            ),
            22 => 
            array (
                'id' => 523,
                'code' => '06',
                'name' => 'Huyện Hòa Thành',
                'type' => 'Huyện',
                'city_id' => 46,
            ),
            23 => 
            array (
                'id' => 524,
                'code' => '07',
                'name' => 'Huyện Bến Cầu',
                'type' => 'Huyện',
                'city_id' => 46,
            ),
            24 => 
            array (
                'id' => 525,
                'code' => '08',
                'name' => 'Huyện Gò Dầu',
                'type' => 'Huyện',
                'city_id' => 46,
            ),
            25 => 
            array (
                'id' => 526,
                'code' => '09',
                'name' => 'Huyện Trảng Bàng',
                'type' => 'Huyện',
                'city_id' => 46,
            ),
            26 => 
            array (
                'id' => 527,
                'code' => '01',
                'name' => 'Thành phố Phan Thiết',
                'type' => 'Thành phố',
                'city_id' => 47,
            ),
            27 => 
            array (
                'id' => 528,
                'code' => '02',
                'name' => 'Huyện Tuy Phong',
                'type' => 'Huyện',
                'city_id' => 47,
            ),
            28 => 
            array (
                'id' => 529,
                'code' => '03',
                'name' => 'Huyện Bắc Bình',
                'type' => 'Huyện',
                'city_id' => 47,
            ),
            29 => 
            array (
                'id' => 530,
                'code' => '04',
                'name' => 'Huyện Hàm Thuận Bắc',
                'type' => 'Huyện',
                'city_id' => 47,
            ),
            30 => 
            array (
                'id' => 531,
                'code' => '05',
                'name' => 'Huyện Hàm Thuận Nam',
                'type' => 'Huyện',
                'city_id' => 47,
            ),
            31 => 
            array (
                'id' => 532,
                'code' => '06',
                'name' => 'Huyện Hàm Tân',
                'type' => 'Huyện',
                'city_id' => 47,
            ),
            32 => 
            array (
                'id' => 533,
                'code' => '07',
                'name' => 'Huyện Đức Linh',
                'type' => 'Huyện',
                'city_id' => 47,
            ),
            33 => 
            array (
                'id' => 534,
                'code' => '08',
                'name' => 'Huyện Tánh Linh',
                'type' => 'Huyện',
                'city_id' => 47,
            ),
            34 => 
            array (
                'id' => 535,
                'code' => '09',
                'name' => 'Huyện đảo Phú Quý',
                'type' => 'Huyện',
                'city_id' => 47,
            ),
            35 => 
            array (
                'id' => 536,
                'code' => '10',
                'name' => 'Thị xã La Gi',
                'type' => 'Thị xã',
                'city_id' => 47,
            ),
            36 => 
            array (
                'id' => 537,
                'code' => '01',
                'name' => 'Thành phố Biên Hoà',
                'type' => 'Thành phố',
                'city_id' => 48,
            ),
            37 => 
            array (
                'id' => 538,
                'code' => '02',
                'name' => 'Huyện Vĩnh Cửu',
                'type' => 'Huyện',
                'city_id' => 48,
            ),
            38 => 
            array (
                'id' => 539,
                'code' => '03',
                'name' => 'Huyện Tân Phú',
                'type' => 'Huyện',
                'city_id' => 48,
            ),
            39 => 
            array (
                'id' => 540,
                'code' => '04',
                'name' => 'Huyện Định Quán',
                'type' => 'Huyện',
                'city_id' => 48,
            ),
            40 => 
            array (
                'id' => 541,
                'code' => '05',
                'name' => 'Huyện Thống Nhất',
                'type' => 'Huyện',
                'city_id' => 48,
            ),
            41 => 
            array (
                'id' => 542,
                'code' => '06',
                'name' => 'Thị xã Long Khánh',
                'type' => 'Thị xã',
                'city_id' => 48,
            ),
            42 => 
            array (
                'id' => 543,
                'code' => '07',
                'name' => 'Huyện Xuân Lộc',
                'type' => 'Huyện',
                'city_id' => 48,
            ),
            43 => 
            array (
                'id' => 544,
                'code' => '08',
                'name' => 'Huyện Long Thành',
                'type' => 'Huyện',
                'city_id' => 48,
            ),
            44 => 
            array (
                'id' => 545,
                'code' => '09',
                'name' => 'Huyện Nhơn Trạch',
                'type' => 'Huyện',
                'city_id' => 48,
            ),
            45 => 
            array (
                'id' => 546,
                'code' => '10',
                'name' => 'Huyện Trảng Bom',
                'type' => 'Huyện',
                'city_id' => 48,
            ),
            46 => 
            array (
                'id' => 547,
                'code' => '11',
                'name' => 'Huyện Cẩm Mỹ',
                'type' => 'Huyện',
                'city_id' => 48,
            ),
            47 => 
            array (
                'id' => 548,
                'code' => '01',
                'name' => 'Thành phố Tân An',
                'type' => 'Thành phố',
                'city_id' => 49,
            ),
            48 => 
            array (
                'id' => 549,
                'code' => '02',
                'name' => 'Huyện Vĩnh Hưng',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            49 => 
            array (
                'id' => 550,
                'code' => '03',
                'name' => 'Huyện Mộc Hoá',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            50 => 
            array (
                'id' => 551,
                'code' => '04',
                'name' => 'Huyện Tân Thạnh',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            51 => 
            array (
                'id' => 552,
                'code' => '05',
                'name' => 'Huyện Thạnh Hoá',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            52 => 
            array (
                'id' => 553,
                'code' => '06',
                'name' => 'Huyện Đức Huệ',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            53 => 
            array (
                'id' => 554,
                'code' => '07',
                'name' => 'Huyện Đức Hoà',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            54 => 
            array (
                'id' => 555,
                'code' => '08',
                'name' => 'Huyện Bến Lức',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            55 => 
            array (
                'id' => 556,
                'code' => '09',
                'name' => 'Huyện Thủ Thừa',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            56 => 
            array (
                'id' => 557,
                'code' => '10',
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            57 => 
            array (
                'id' => 558,
                'code' => '11',
                'name' => 'Huyện Tân Trụ',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            58 => 
            array (
                'id' => 559,
                'code' => '12',
                'name' => 'Huyện Cần Đước',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            59 => 
            array (
                'id' => 560,
                'code' => '13',
                'name' => 'Huyện Cần Giuộc',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            60 => 
            array (
                'id' => 561,
                'code' => '14',
                'name' => 'Huyện Tân Hưng',
                'type' => 'Huyện',
                'city_id' => 49,
            ),
            61 => 
            array (
                'id' => 562,
                'code' => '15',
                'name' => 'Thị xã Kiến Tường',
                'type' => 'Thị xã',
                'city_id' => 49,
            ),
            62 => 
            array (
                'id' => 563,
                'code' => '01',
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'city_id' => 50,
            ),
            63 => 
            array (
                'id' => 564,
                'code' => '02',
                'name' => 'Huyện Lai Vung',
                'type' => 'Huyện',
                'city_id' => 50,
            ),
            64 => 
            array (
                'id' => 565,
                'code' => '03',
                'name' => 'Huyện Lấp Vò',
                'type' => 'Huyện',
                'city_id' => 50,
            ),
            65 => 
            array (
                'id' => 566,
                'code' => '04',
                'name' => 'Thành phố Sa Đéc',
                'type' => 'Thành phố',
                'city_id' => 50,
            ),
            66 => 
            array (
                'id' => 567,
                'code' => '05',
                'name' => 'Thành phố Cao Lãnh',
                'type' => 'Thành phố',
                'city_id' => 50,
            ),
            67 => 
            array (
                'id' => 568,
                'code' => '06',
                'name' => 'Huyện Cao Lãnh',
                'type' => 'Huyện',
                'city_id' => 50,
            ),
            68 => 
            array (
                'id' => 569,
                'code' => '07',
                'name' => 'Huyện Tháp Mười',
                'type' => 'Huyện',
                'city_id' => 50,
            ),
            69 => 
            array (
                'id' => 570,
                'code' => '08',
                'name' => 'Huyện Tam Nông',
                'type' => 'Huyện',
                'city_id' => 50,
            ),
            70 => 
            array (
                'id' => 571,
                'code' => '09',
                'name' => 'Huyện Thanh Bình',
                'type' => 'Huyện',
                'city_id' => 50,
            ),
            71 => 
            array (
                'id' => 572,
                'code' => '10',
                'name' => 'Thị Xã Hồng Ngự',
                'type' => 'Huyện',
                'city_id' => 50,
            ),
            72 => 
            array (
                'id' => 573,
                'code' => '11',
                'name' => 'Huyện Hồng Ngự',
                'type' => 'Huyện',
                'city_id' => 50,
            ),
            73 => 
            array (
                'id' => 574,
                'code' => '12',
                'name' => 'Huyện Tân Hồng',
                'type' => 'Huyện',
                'city_id' => 50,
            ),
            74 => 
            array (
                'id' => 575,
                'code' => '01',
                'name' => 'Thành phố Long Xuyên',
                'type' => 'Thành phố',
                'city_id' => 51,
            ),
            75 => 
            array (
                'id' => 576,
                'code' => '02',
                'name' => 'Thành phố Châu Đốc',
                'type' => 'Thành phố',
                'city_id' => 51,
            ),
            76 => 
            array (
                'id' => 577,
                'code' => '03',
                'name' => 'Huyện An Phú',
                'type' => 'Huyện',
                'city_id' => 51,
            ),
            77 => 
            array (
                'id' => 578,
                'code' => '04',
                'name' => 'Thị xã Tân Châu',
                'type' => 'Thị xã',
                'city_id' => 51,
            ),
            78 => 
            array (
                'id' => 579,
                'code' => '05',
                'name' => 'Huyện Phú Tân',
                'type' => 'Huyện',
                'city_id' => 51,
            ),
            79 => 
            array (
                'id' => 580,
                'code' => '06',
                'name' => 'Huyện Tịnh Biên',
                'type' => 'Huyện',
                'city_id' => 51,
            ),
            80 => 
            array (
                'id' => 581,
                'code' => '07',
                'name' => 'Huyện Tri Tôn',
                'type' => 'Huyện',
                'city_id' => 51,
            ),
            81 => 
            array (
                'id' => 582,
                'code' => '08',
                'name' => 'Huyện Châu Phú',
                'type' => 'Huyện',
                'city_id' => 51,
            ),
            82 => 
            array (
                'id' => 583,
                'code' => '09',
                'name' => 'Huyện Chợ Mới',
                'type' => 'Huyện',
                'city_id' => 51,
            ),
            83 => 
            array (
                'id' => 584,
                'code' => '10',
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'city_id' => 51,
            ),
            84 => 
            array (
                'id' => 585,
                'code' => '11',
                'name' => 'Huyện Thoại Sơn',
                'type' => 'Huyện',
                'city_id' => 51,
            ),
            85 => 
            array (
                'id' => 586,
                'code' => '01',
                'name' => 'Thành phố Vũng Tàu',
                'type' => 'Thành phố',
                'city_id' => 52,
            ),
            86 => 
            array (
                'id' => 587,
                'code' => '02',
                'name' => 'Thành phố Bà Rịa',
                'type' => 'Thành phố',
                'city_id' => 52,
            ),
            87 => 
            array (
                'id' => 588,
                'code' => '03',
                'name' => 'Huyện Xuyên Mộc',
                'type' => 'Huyện',
                'city_id' => 52,
            ),
            88 => 
            array (
                'id' => 589,
                'code' => '04',
                'name' => 'Huyện Long Điền',
                'type' => 'Huyện',
                'city_id' => 52,
            ),
            89 => 
            array (
                'id' => 590,
                'code' => '05',
                'name' => 'Huyện Côn Đảo',
                'type' => 'Huyện',
                'city_id' => 52,
            ),
            90 => 
            array (
                'id' => 591,
                'code' => '06',
                'name' => 'Huyện Tân Thành',
                'type' => 'Huyện',
                'city_id' => 52,
            ),
            91 => 
            array (
                'id' => 592,
                'code' => '07',
                'name' => 'Huyện Châu Đức',
                'type' => 'Huyện',
                'city_id' => 52,
            ),
            92 => 
            array (
                'id' => 593,
                'code' => '08',
                'name' => 'Huyện Đất Đỏ',
                'type' => 'Huyện',
                'city_id' => 52,
            ),
            93 => 
            array (
                'id' => 594,
                'code' => '01',
                'name' => 'Thành phố Mỹ Tho',
                'type' => 'Thành phố',
                'city_id' => 53,
            ),
            94 => 
            array (
                'id' => 595,
                'code' => '02',
                'name' => 'Thị xã Gò Công',
                'type' => 'Thị xã',
                'city_id' => 53,
            ),
            95 => 
            array (
                'id' => 596,
                'code' => '03',
                'name' => 'Huyện Cái bè',
                'type' => 'Huyện',
                'city_id' => 53,
            ),
            96 => 
            array (
                'id' => 597,
                'code' => '04',
                'name' => 'Huyện Cai lậy',
                'type' => 'Huyện',
                'city_id' => 53,
            ),
            97 => 
            array (
                'id' => 598,
                'code' => '05',
                'name' => 'Huyện Châu thành',
                'type' => 'Huyện',
                'city_id' => 53,
            ),
            98 => 
            array (
                'id' => 599,
                'code' => '06',
                'name' => 'Huyện Chợ Gạo',
                'type' => 'Huyện',
                'city_id' => 53,
            ),
            99 => 
            array (
                'id' => 600,
                'code' => '07',
                'name' => 'Huyện Gò Công Tây',
                'type' => 'Huyện',
                'city_id' => 53,
            ),
            100 => 
            array (
                'id' => 601,
                'code' => '08',
                'name' => 'Huyện Gò Công Đông',
                'type' => 'Huyện',
                'city_id' => 53,
            ),
            101 => 
            array (
                'id' => 602,
                'code' => '09',
                'name' => 'Huyện Tân Phước',
                'type' => 'Huyện',
                'city_id' => 53,
            ),
            102 => 
            array (
                'id' => 603,
                'code' => '10',
                'name' => 'Huyện Tân Phú Đông',
                'type' => 'Huyện',
                'city_id' => 53,
            ),
            103 => 
            array (
                'id' => 604,
                'code' => '11',
                'name' => 'Thị xã Cai Lậy',
                'type' => 'Thị xã',
                'city_id' => 53,
            ),
            104 => 
            array (
                'id' => 605,
                'code' => '01',
                'name' => 'Thành phố Rạch Giá',
                'type' => 'Thành phố',
                'city_id' => 54,
            ),
            105 => 
            array (
                'id' => 606,
                'code' => '02',
                'name' => 'Thị xã Hà Tiên',
                'type' => 'Thị xã',
                'city_id' => 54,
            ),
            106 => 
            array (
                'id' => 607,
                'code' => '03',
                'name' => 'Huyện Kiên Lương',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            107 => 
            array (
                'id' => 608,
                'code' => '04',
                'name' => 'Huyện Hòn Đất',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            108 => 
            array (
                'id' => 609,
                'code' => '05',
                'name' => 'Huyện Tân Hiệp',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            109 => 
            array (
                'id' => 610,
                'code' => '06',
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            110 => 
            array (
                'id' => 611,
                'code' => '07',
                'name' => 'Huyện Giồng Riềng',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            111 => 
            array (
                'id' => 612,
                'code' => '08',
                'name' => 'Huyện Gò Quao',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            112 => 
            array (
                'id' => 613,
                'code' => '09',
                'name' => 'Huyện An Biên',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            113 => 
            array (
                'id' => 614,
                'code' => '10',
                'name' => 'Huyện An Minh',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            114 => 
            array (
                'id' => 615,
                'code' => '11',
                'name' => 'Huyện Vĩnh Thuận',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            115 => 
            array (
                'id' => 616,
                'code' => '12',
                'name' => 'Huyện Phú Quốc',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            116 => 
            array (
                'id' => 617,
                'code' => '13',
                'name' => 'Huyện Kiên Hải',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            117 => 
            array (
                'id' => 618,
                'code' => '14',
                'name' => 'Huyện U Minh Thượng',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            118 => 
            array (
                'id' => 619,
                'code' => '15',
                'name' => 'Huyện Giang Thành',
                'type' => 'Huyện',
                'city_id' => 54,
            ),
            119 => 
            array (
                'id' => 620,
                'code' => '01',
                'name' => 'Quận Ninh Kiều',
                'type' => 'Quận',
                'city_id' => 55,
            ),
            120 => 
            array (
                'id' => 621,
                'code' => '02',
                'name' => 'Quận Bình Thuỷ',
                'type' => 'Quận',
                'city_id' => 55,
            ),
            121 => 
            array (
                'id' => 622,
                'code' => '03',
                'name' => 'Quận Cái Răng',
                'type' => 'Quận',
                'city_id' => 55,
            ),
            122 => 
            array (
                'id' => 623,
                'code' => '04',
                'name' => 'Quận Ô Môn',
                'type' => 'Quận',
                'city_id' => 55,
            ),
            123 => 
            array (
                'id' => 624,
                'code' => '05',
                'name' => 'Huyện Phong Điền',
                'type' => 'Huyện',
                'city_id' => 55,
            ),
            124 => 
            array (
                'id' => 625,
                'code' => '06',
                'name' => 'Huyện Cờ Đỏ',
                'type' => 'Huyện',
                'city_id' => 55,
            ),
            125 => 
            array (
                'id' => 626,
                'code' => '07',
                'name' => 'Huyện Vĩnh Thạnh',
                'type' => 'Huyện',
                'city_id' => 55,
            ),
            126 => 
            array (
                'id' => 627,
                'code' => '08',
                'name' => 'Quận Thốt Nốt',
                'type' => 'Quận',
                'city_id' => 55,
            ),
            127 => 
            array (
                'id' => 628,
                'code' => '09',
                'name' => 'Huyện Thới Lai',
                'type' => 'Huyện',
                'city_id' => 55,
            ),
            128 => 
            array (
                'id' => 629,
                'code' => '01',
                'name' => 'Thành phố Bến Tre',
                'type' => 'Thành phố',
                'city_id' => 56,
            ),
            129 => 
            array (
                'id' => 630,
                'code' => '02',
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'city_id' => 56,
            ),
            130 => 
            array (
                'id' => 631,
                'code' => '03',
                'name' => 'Huyện Chợ Lách',
                'type' => 'Huyện',
                'city_id' => 56,
            ),
            131 => 
            array (
                'id' => 632,
                'code' => '04',
                'name' => 'Huyện Mỏ Cày Bắc',
                'type' => 'Huyện',
                'city_id' => 56,
            ),
            132 => 
            array (
                'id' => 633,
                'code' => '05',
                'name' => 'Huyện Giồng Trôm',
                'type' => 'Huyện',
                'city_id' => 56,
            ),
            133 => 
            array (
                'id' => 634,
                'code' => '06',
                'name' => 'Huyện Bình Đại',
                'type' => 'Huyện',
                'city_id' => 56,
            ),
            134 => 
            array (
                'id' => 635,
                'code' => '07',
                'name' => 'Huyện Ba Tri',
                'type' => 'Huyện',
                'city_id' => 56,
            ),
            135 => 
            array (
                'id' => 636,
                'code' => '08',
                'name' => 'Huyện Thạnh Phú',
                'type' => 'Huyện',
                'city_id' => 56,
            ),
            136 => 
            array (
                'id' => 637,
                'code' => '09',
                'name' => 'Huyện Mỏ Cày Nam',
                'type' => 'Huyện',
                'city_id' => 56,
            ),
            137 => 
            array (
                'id' => 638,
                'code' => '00',
                'name' => 'Sở Giáo dục và Đào tạo',
                'type' => 'Huyện',
                'city_id' => 57,
            ),
            138 => 
            array (
                'id' => 639,
                'code' => '01',
                'name' => 'Thành phố Vĩnh Long',
                'type' => 'Thành phố',
                'city_id' => 57,
            ),
            139 => 
            array (
                'id' => 640,
                'code' => '02',
                'name' => 'Huyện Long Hồ',
                'type' => 'Huyện',
                'city_id' => 57,
            ),
            140 => 
            array (
                'id' => 641,
                'code' => '03',
                'name' => 'Huyện Mang Thít',
                'type' => 'Huyện',
                'city_id' => 57,
            ),
            141 => 
            array (
                'id' => 642,
                'code' => '04',
                'name' => 'Thị xã Bình Minh',
                'type' => 'Thị xã',
                'city_id' => 57,
            ),
            142 => 
            array (
                'id' => 643,
                'code' => '05',
                'name' => 'Huyện Tam Bình',
                'type' => 'Huyện',
                'city_id' => 57,
            ),
            143 => 
            array (
                'id' => 644,
                'code' => '06',
                'name' => 'Huyện Trà Ôn',
                'type' => 'Huyện',
                'city_id' => 57,
            ),
            144 => 
            array (
                'id' => 645,
                'code' => '07',
                'name' => 'Huyện Vũng Liêm',
                'type' => 'Huyện',
                'city_id' => 57,
            ),
            145 => 
            array (
                'id' => 646,
                'code' => '08',
                'name' => 'Huyện Bình Tân',
                'type' => 'Huyện',
                'city_id' => 57,
            ),
            146 => 
            array (
                'id' => 647,
                'code' => '01',
                'name' => 'Thành phố Trà Vinh',
                'type' => 'Thành phố',
                'city_id' => 58,
            ),
            147 => 
            array (
                'id' => 648,
                'code' => '02',
                'name' => 'Huyện Càng Long',
                'type' => 'Huyện',
                'city_id' => 58,
            ),
            148 => 
            array (
                'id' => 649,
                'code' => '03',
                'name' => 'Huyện Cầu Kè',
                'type' => 'Huyện',
                'city_id' => 58,
            ),
            149 => 
            array (
                'id' => 650,
                'code' => '04',
                'name' => 'Huyện Tiểu Cần',
                'type' => 'Huyện',
                'city_id' => 58,
            ),
            150 => 
            array (
                'id' => 651,
                'code' => '05',
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'city_id' => 58,
            ),
            151 => 
            array (
                'id' => 652,
                'code' => '06',
                'name' => 'Huyện Trà Cú',
                'type' => 'Huyện',
                'city_id' => 58,
            ),
            152 => 
            array (
                'id' => 653,
                'code' => '07',
                'name' => 'Huyện Cầu Ngang',
                'type' => 'Huyện',
                'city_id' => 58,
            ),
            153 => 
            array (
                'id' => 654,
                'code' => '08',
                'name' => 'Huyện Duyên Hải',
                'type' => 'Huyện',
                'city_id' => 58,
            ),
            154 => 
            array (
                'id' => 655,
                'code' => '01',
                'name' => 'Thành phố Sóc Trăng',
                'type' => 'Thành phố',
                'city_id' => 59,
            ),
            155 => 
            array (
                'id' => 656,
                'code' => '02',
                'name' => 'Huyện Kế Sách',
                'type' => 'Huyện',
                'city_id' => 59,
            ),
            156 => 
            array (
                'id' => 657,
                'code' => '03',
                'name' => 'Huyện Mỹ Tú',
                'type' => 'Huyện',
                'city_id' => 59,
            ),
            157 => 
            array (
                'id' => 658,
                'code' => '04',
                'name' => 'Huyện Mỹ Xuyên',
                'type' => 'Huyện',
                'city_id' => 59,
            ),
            158 => 
            array (
                'id' => 659,
                'code' => '05',
                'name' => 'Huyện Thạnh Trị',
                'type' => 'Huyện',
                'city_id' => 59,
            ),
            159 => 
            array (
                'id' => 660,
                'code' => '06',
                'name' => 'Huyện Long Phú',
                'type' => 'Huyện',
                'city_id' => 59,
            ),
            160 => 
            array (
                'id' => 661,
                'code' => '07',
                'name' => 'Thị xã Vĩnh Châu',
                'type' => 'Thị xã',
                'city_id' => 59,
            ),
            161 => 
            array (
                'id' => 662,
                'code' => '08',
                'name' => 'Huyện Cù Lao Dung',
                'type' => 'Huyện',
                'city_id' => 59,
            ),
            162 => 
            array (
                'id' => 663,
                'code' => '09',
                'name' => 'Thị xã Ngã Năm',
                'type' => 'Thị xã',
                'city_id' => 59,
            ),
            163 => 
            array (
                'id' => 664,
                'code' => '10',
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'city_id' => 59,
            ),
            164 => 
            array (
                'id' => 665,
                'code' => '11',
                'name' => 'Huyện Trần Đề',
                'type' => 'Huyện',
                'city_id' => 59,
            ),
            165 => 
            array (
                'id' => 666,
                'code' => '01',
                'name' => 'Thành phố Bạc Liêu',
                'type' => 'Thành phố',
                'city_id' => 60,
            ),
            166 => 
            array (
                'id' => 667,
                'code' => '02',
                'name' => 'Huyện Vĩnh Lợi',
                'type' => 'Huyện',
                'city_id' => 60,
            ),
            167 => 
            array (
                'id' => 668,
                'code' => '03',
                'name' => 'Huyện Hồng Dân',
                'type' => 'Huyện',
                'city_id' => 60,
            ),
            168 => 
            array (
                'id' => 669,
                'code' => '04',
                'name' => 'Huyện Giá Rai',
                'type' => 'Huyện',
                'city_id' => 60,
            ),
            169 => 
            array (
                'id' => 670,
                'code' => '05',
                'name' => 'Huyện Phước Long',
                'type' => 'Huyện',
                'city_id' => 60,
            ),
            170 => 
            array (
                'id' => 671,
                'code' => '06',
                'name' => 'Huyện Đông Hải',
                'type' => 'Huyện',
                'city_id' => 60,
            ),
            171 => 
            array (
                'id' => 672,
                'code' => '07',
                'name' => 'Huyện Hoà Bình',
                'type' => 'Huyện',
                'city_id' => 60,
            ),
            172 => 
            array (
                'id' => 673,
                'code' => '01',
                'name' => 'Thành phố Cà Mau',
                'type' => 'Thành phố',
                'city_id' => 61,
            ),
            173 => 
            array (
                'id' => 674,
                'code' => '02',
                'name' => 'Huyện Thới Bình',
                'type' => 'Huyện',
                'city_id' => 61,
            ),
            174 => 
            array (
                'id' => 675,
                'code' => '03',
                'name' => 'Huyện U Minh',
                'type' => 'Huyện',
                'city_id' => 61,
            ),
            175 => 
            array (
                'id' => 676,
                'code' => '04',
                'name' => 'Huyện Trần Văn Thời',
                'type' => 'Huyện',
                'city_id' => 61,
            ),
            176 => 
            array (
                'id' => 677,
                'code' => '05',
                'name' => 'Huyện Cái Nước',
                'type' => 'Huyện',
                'city_id' => 61,
            ),
            177 => 
            array (
                'id' => 678,
                'code' => '06',
                'name' => 'Huyện Đầm Dơi',
                'type' => 'Huyện',
                'city_id' => 61,
            ),
            178 => 
            array (
                'id' => 679,
                'code' => '07',
                'name' => 'Huyện Ngọc Hiển',
                'type' => 'Huyện',
                'city_id' => 61,
            ),
            179 => 
            array (
                'id' => 680,
                'code' => '08',
                'name' => 'Huyện Năm Căn',
                'type' => 'Huyện',
                'city_id' => 61,
            ),
            180 => 
            array (
                'id' => 681,
                'code' => '09',
                'name' => 'Huyện Phú Tân',
                'type' => 'Huyện',
                'city_id' => 61,
            ),
            181 => 
            array (
                'id' => 682,
                'code' => '01',
                'name' => 'Th. phố Điện Biên Phủ',
                'type' => 'Huyện',
                'city_id' => 62,
            ),
            182 => 
            array (
                'id' => 683,
                'code' => '02',
                'name' => 'Thị xã Mường Lay',
                'type' => 'Thị xã',
                'city_id' => 62,
            ),
            183 => 
            array (
                'id' => 684,
                'code' => '03',
                'name' => 'Huyện Điện Biên',
                'type' => 'Huyện',
                'city_id' => 62,
            ),
            184 => 
            array (
                'id' => 685,
                'code' => '04',
                'name' => 'Huyện Tuần Giáo',
                'type' => 'Huyện',
                'city_id' => 62,
            ),
            185 => 
            array (
                'id' => 686,
                'code' => '05',
                'name' => 'Huyện Mường Chà',
                'type' => 'Huyện',
                'city_id' => 62,
            ),
            186 => 
            array (
                'id' => 687,
                'code' => '06',
                'name' => 'Huyện Tủa Chùa',
                'type' => 'Huyện',
                'city_id' => 62,
            ),
            187 => 
            array (
                'id' => 688,
                'code' => '07',
                'name' => 'Huyện Điện Biên Đông',
                'type' => 'Huyện',
                'city_id' => 62,
            ),
            188 => 
            array (
                'id' => 689,
                'code' => '08',
                'name' => 'Huyện Mường Nhé',
                'type' => 'Huyện',
                'city_id' => 62,
            ),
            189 => 
            array (
                'id' => 690,
                'code' => '09',
                'name' => 'Huyện Mường ảng',
                'type' => 'Huyện',
                'city_id' => 62,
            ),
            190 => 
            array (
                'id' => 691,
                'code' => '10',
                'name' => 'Huyện Nậm Pồ',
                'type' => 'Huyện',
                'city_id' => 62,
            ),
            191 => 
            array (
                'id' => 692,
                'code' => '01',
                'name' => 'Thị xã Gia Nghĩa',
                'type' => 'Thị xã',
                'city_id' => 63,
            ),
            192 => 
            array (
                'id' => 693,
                'code' => '02',
                'name' => 'Huyện Đăk RLấp',
                'type' => 'Huyện',
                'city_id' => 63,
            ),
            193 => 
            array (
                'id' => 694,
                'code' => '03',
                'name' => 'Huyện Đăk Mil',
                'type' => 'Huyện',
                'city_id' => 63,
            ),
            194 => 
            array (
                'id' => 695,
                'code' => '04',
                'name' => 'Huyện Cư Jút',
                'type' => 'Huyện',
                'city_id' => 63,
            ),
            195 => 
            array (
                'id' => 696,
                'code' => '05',
                'name' => 'Huyện Đăk Song',
                'type' => 'Huyện',
                'city_id' => 63,
            ),
            196 => 
            array (
                'id' => 697,
                'code' => '06',
                'name' => 'Huyện Krông Nô',
                'type' => 'Huyện',
                'city_id' => 63,
            ),
            197 => 
            array (
                'id' => 698,
                'code' => '07',
                'name' => 'Huyện Đăk GLong',
                'type' => 'Huyện',
                'city_id' => 63,
            ),
            198 => 
            array (
                'id' => 699,
                'code' => '08',
                'name' => 'Huyện Tuy Đức',
                'type' => 'Huyện',
                'city_id' => 63,
            ),
            199 => 
            array (
                'id' => 700,
                'code' => '01',
                'name' => 'Thành phố Vị Thanh',
                'type' => 'Thành phố',
                'city_id' => 64,
            ),
            200 => 
            array (
                'id' => 701,
                'code' => '02',
                'name' => 'Huyện Vị Thuỷ',
                'type' => 'Huyện',
                'city_id' => 64,
            ),
            201 => 
            array (
                'id' => 702,
                'code' => '03',
                'name' => 'Huyện Long Mỹ',
                'type' => 'Huyện',
                'city_id' => 64,
            ),
            202 => 
            array (
                'id' => 703,
                'code' => '04',
                'name' => 'Huyện Phụng Hiệp',
                'type' => 'Huyện',
                'city_id' => 64,
            ),
            203 => 
            array (
                'id' => 704,
                'code' => '05',
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'city_id' => 64,
            ),
            204 => 
            array (
                'id' => 705,
                'code' => '06',
                'name' => 'Huyện Châu Thành A',
                'type' => 'Huyện',
                'city_id' => 64,
            ),
            205 => 
            array (
                'id' => 706,
                'code' => '07',
                'name' => 'Thị xã Ngã Bảy',
                'type' => 'Thị xã',
                'city_id' => 64,
            ),
        ));
        
        
    }
}