<?php

use Illuminate\Database\Seeder;

class OrganizationSchoolTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organization_school')->delete();
        
        \DB::table('organization_school')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '060',
                'name' => 'THPT Nguyễn Trãi-Ba Đình',
                'district_id' => 1,
                'city_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '064',
                'name' => 'THPT  Phan Đình Phùng',
                'district_id' => 1,
                'city_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '066',
                'name' => 'THPT Phạm Hồng Thái',
                'district_id' => 1,
                'city_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '087',
                'name' => 'THPT Thực nghiệm',
                'district_id' => 1,
                'city_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => '211',
                'name' => 'THPT Đinh Tiên Hoàng-Ba Đình',
                'district_id' => 1,
                'city_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => '219',
                'name' => 'THCS-THPT Hà Thành',
                'district_id' => 1,
                'city_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => '223',
                'name' => 'THPT Hồ Tùng Mậu',
                'district_id' => 1,
                'city_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => '282',
                'name' => 'THPT Văn Lang',
                'district_id' => 1,
                'city_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => '401',
                'name' => 'GDTX Ba Đình',
                'district_id' => 1,
                'city_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => '610',
                'name' => 'CĐ nghề Hùng Vương',
                'district_id' => 1,
                'city_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => '621',
                'name' => 'CĐ nghề VIGLACERA',
                'district_id' => 1,
                'city_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => '097',
                'name' => 'THPT Trần Phú-Hoàn Kiếm',
                'district_id' => 2,
                'city_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => '110',
                'name' => 'THPT Việt-Đức',
                'district_id' => 2,
                'city_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => '242',
                'name' => 'THPT Mari Cuire',
                'district_id' => 2,
                'city_id' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => '281',
                'name' => 'THPT Văn Hiến',
                'district_id' => 2,
                'city_id' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => '416',
                'name' => 'GDTX Nguyễn Văn Tố',
                'district_id' => 2,
                'city_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => '501',
                'name' => 'Cao đẳng Nghệ thuật Hà Nội',
                'district_id' => 2,
                'city_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => '636',
                'name' => 'TC nghề đồng hồ - điện tử - tin học HN',
                'district_id' => 2,
                'city_id' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => '025',
                'name' => 'THPT Đoàn Kết-Hai Bà Trưng',
                'district_id' => 3,
                'city_id' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'code' => '086',
                'name' => 'THPT Thăng Long',
                'district_id' => 3,
                'city_id' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'code' => '096',
                'name' => 'THPT Trần Nhân Tông',
                'district_id' => 3,
                'city_id' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'code' => '214',
                'name' => 'THPT Đông Kinh',
                'district_id' => 3,
                'city_id' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'code' => '221',
                'name' => 'THPT Hoàng Diệu',
                'district_id' => 3,
                'city_id' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'code' => '227',
                'name' => 'THPT Hồng Hà',
                'district_id' => 3,
                'city_id' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'code' => '241',
                'name' => 'THPT Mai Hắc Đế',
                'district_id' => 3,
                'city_id' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'code' => '292',
                'name' => 'THPT Ngô Gia Tự',
                'district_id' => 3,
                'city_id' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'code' => '410',
                'name' => 'GDTX Hai Bà Trưng',
                'district_id' => 3,
                'city_id' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'code' => '603',
                'name' => 'CĐ nghề Bách Khoa Hà Nội',
                'district_id' => 3,
                'city_id' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'code' => '612',
                'name' => 'CĐ nghề KT công nghệ LOD - Phân hiệu HN',
                'district_id' => 3,
                'city_id' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'code' => '631',
                'name' => 'TC nghề Dân lập Công nghệ Thăng Long',
                'district_id' => 3,
                'city_id' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'code' => '028',
                'name' => 'THPT Đống Đa',
                'district_id' => 4,
                'city_id' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'code' => '032',
                'name' => 'THPT Hoàng Cầu',
                'district_id' => 4,
                'city_id' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'code' => '039',
                'name' => 'THPT Kim Liên',
                'district_id' => 4,
                'city_id' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'code' => '040',
                'name' => 'THPT Lê Quý Đôn-Đống Đa',
                'district_id' => 4,
                'city_id' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'code' => '065',
                'name' => 'THPT Phan Huy Chú-Đống Đa',
                'district_id' => 4,
                'city_id' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'code' => '073',
                'name' => 'THPT Quang Trung-Đống Đa',
                'district_id' => 4,
                'city_id' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'code' => '201',
                'name' => 'THCS&THPT Alfred Nobel',
                'district_id' => 4,
                'city_id' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'code' => '203',
                'name' => 'THPT Bắc Hà-Đống Đa',
                'district_id' => 4,
                'city_id' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'code' => '215',
                'name' => 'THPT Einstein',
                'district_id' => 4,
                'city_id' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'code' => '259',
                'name' => 'THPT Nguyễn Văn Huyên',
                'district_id' => 4,
                'city_id' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'code' => '274',
                'name' => 'THPT Tô Hiến Thành',
                'district_id' => 4,
                'city_id' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'code' => '409',
                'name' => 'GDTX Đống Đa',
                'district_id' => 4,
                'city_id' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'code' => '503',
                'name' => 'Học viện âm nhạc QGVN',
                'district_id' => 4,
                'city_id' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'code' => '601',
                'name' => 'CĐ Kỹ thuật thiết bị y tế',
                'district_id' => 4,
                'city_id' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'code' => '606',
                'name' => 'CĐ nghề Công nghiệp Hà Nội',
                'district_id' => 4,
                'city_id' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'code' => '625',
                'name' => 'TC nghề Công đoàn Việt Nam',
                'district_id' => 4,
                'city_id' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'code' => '647',
                'name' => 'TC nghề may và thời trang Hà Nội',
                'district_id' => 4,
                'city_id' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'code' => '648',
                'name' => 'TC nghề Nấu ăn và Nghiệp vụ khách sạn HN',
                'district_id' => 4,
                'city_id' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'code' => '659',
                'name' => 'TC nghề thông tin và truyền thông HN',
                'district_id' => 4,
                'city_id' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'code' => '667',
                'name' => 'Trường Đại học VHNT Quân đội',
                'district_id' => 4,
                'city_id' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'code' => '668',
                'name' => 'Trường Nghệ thuật Quân đội',
                'district_id' => 4,
                'city_id' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'code' => '008',
                'name' => 'THPT Chu Văn An',
                'district_id' => 5,
                'city_id' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'code' => '081',
                'name' => 'THPT Tây Hồ',
                'district_id' => 5,
                'city_id' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'code' => '213',
                'name' => 'THPT Đông Đô',
                'district_id' => 5,
                'city_id' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'code' => '216',
                'name' => 'THPT Hà Nội  Academy',
                'district_id' => 5,
                'city_id' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'code' => '262',
                'name' => 'THPT Phan Chu Trinh',
                'district_id' => 5,
                'city_id' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'code' => '271',
                'name' => 'Song ngữ QT Horizon',
                'district_id' => 5,
                'city_id' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'code' => '423',
                'name' => 'GDTX Tây Hồ',
                'district_id' => 5,
                'city_id' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'code' => '642',
                'name' => 'TC nghề Kỹ nghệ thực hành HIPT',
                'district_id' => 5,
                'city_id' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'code' => '007',
                'name' => 'THPT Cầu Giấy',
                'district_id' => 6,
                'city_id' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'code' => '009',
                'name' => 'THPT Chuyên Đại học Sư phạm',
                'district_id' => 6,
                'city_id' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'code' => '010',
                'name' => 'THPT Chuyên Hà Nội-Amsterdam',
                'district_id' => 6,
                'city_id' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'code' => '013',
                'name' => 'THPT Chuyên Ngữ ĐH Ngoại ngữ',
                'district_id' => 6,
                'city_id' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'code' => '058',
                'name' => 'THCS&THPT Nguyễn Tất Thành',
                'district_id' => 6,
                'city_id' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'code' => '116',
                'name' => 'THPT Yên Hoà',
                'district_id' => 6,
                'city_id' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'code' => '220',
                'name' => 'THPT Hermann Gmeiner',
                'district_id' => 6,
                'city_id' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'code' => '225',
                'name' => 'THPT Hồng Bàng',
                'district_id' => 6,
                'city_id' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'code' => '237',
                'name' => 'THPT Lương Thế Vinh',
                'district_id' => 6,
                'city_id' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'code' => '239',
                'name' => 'THPT Lý Thái Tổ',
                'district_id' => 6,
                'city_id' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'code' => '249',
                'name' => 'THPT Nguyễn Bỉnh Khiêm-Cầu Giấy',
                'district_id' => 6,
                'city_id' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'code' => '253',
                'name' => 'THPT Nguyễn Siêu',
                'district_id' => 6,
                'city_id' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'code' => '293',
                'name' => 'THPT Phạm Văn Đồng',
                'district_id' => 6,
                'city_id' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'code' => '403',
                'name' => 'GDTX&DN Cầu Giấy',
                'district_id' => 6,
                'city_id' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'code' => '505',
                'name' => 'Trung cấp NT Xiếc và TK Việt Nam',
                'district_id' => 6,
                'city_id' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'code' => '604',
                'name' => 'CĐ nghề cơ điện Hà Nội',
                'district_id' => 6,
                'city_id' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'code' => '617',
                'name' => 'CĐ nghề Phú Châu',
                'district_id' => 6,
                'city_id' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'code' => '619',
                'name' => 'CĐ nghề Trần Hưng Đạo',
                'district_id' => 6,
                'city_id' => 1,
            ),
            77 => 
            array (
                'id' => 78,
                'code' => '011',
                'name' => 'THPT Chuyên KHTN',
                'district_id' => 7,
                'city_id' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'code' => '063',
                'name' => 'THPT Nhân Chính',
                'district_id' => 7,
                'city_id' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'code' => '095',
                'name' => 'THPT Trần Hưng Đạo-Thanh Xuân',
                'district_id' => 7,
                'city_id' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                'code' => '207',
                'name' => 'THPT Đào Duy Từ',
                'district_id' => 7,
                'city_id' => 1,
            ),
            81 => 
            array (
                'id' => 82,
                'code' => '208',
                'name' => 'THPT Đại Việt',
                'district_id' => 7,
                'city_id' => 1,
            ),
            82 => 
            array (
                'id' => 83,
                'code' => '218',
                'name' => 'THPT DL Hà Nội',
                'district_id' => 7,
                'city_id' => 1,
            ),
            83 => 
            array (
                'id' => 84,
                'code' => '224',
                'name' => 'THPT Hồ Xuân Hương',
                'district_id' => 7,
                'city_id' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                'code' => '228',
                'name' => 'THPT Huỳnh Thúc Kháng',
                'district_id' => 7,
                'city_id' => 1,
            ),
            85 => 
            array (
                'id' => 86,
                'code' => '238',
                'name' => 'THPT Lương Văn Can',
                'district_id' => 7,
                'city_id' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'code' => '257',
                'name' => 'THPT Nguyễn Trường Tộ',
                'district_id' => 7,
                'city_id' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                'code' => '261',
                'name' => 'THPT Phan Bội Châu',
                'district_id' => 7,
                'city_id' => 1,
            ),
            88 => 
            array (
                'id' => 89,
                'code' => '288',
                'name' => 'THPT Đông Nam Á',
                'district_id' => 7,
                'city_id' => 1,
            ),
            89 => 
            array (
                'id' => 90,
                'code' => '426',
                'name' => 'GDTX Thanh Xuân',
                'district_id' => 7,
                'city_id' => 1,
            ),
            90 => 
            array (
                'id' => 91,
                'code' => '502',
                'name' => 'BTVH Công ty Xây dựng',
                'district_id' => 7,
                'city_id' => 1,
            ),
            91 => 
            array (
                'id' => 92,
                'code' => '626',
                'name' => 'TC nghề Công nghệ ôtô',
                'district_id' => 7,
                'city_id' => 1,
            ),
            92 => 
            array (
                'id' => 93,
                'code' => '641',
                'name' => 'TC nghề Kinh tế Kỹ thuật vinamotor',
                'district_id' => 7,
                'city_id' => 1,
            ),
            93 => 
            array (
                'id' => 94,
                'code' => '652',
                'name' => 'TC nghề số 10',
                'district_id' => 7,
                'city_id' => 1,
            ),
            94 => 
            array (
                'id' => 95,
                'code' => '033',
                'name' => 'THPT Hoàng Văn Thụ',
                'district_id' => 8,
                'city_id' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'code' => '101',
                'name' => 'THPT Trương Định',
                'district_id' => 8,
                'city_id' => 1,
            ),
            96 => 
            array (
                'id' => 97,
                'code' => '111',
                'name' => 'THPT Việt Nam-Ba Lan',
                'district_id' => 8,
                'city_id' => 1,
            ),
            97 => 
            array (
                'id' => 98,
                'code' => '252',
                'name' => 'THPT Nguyễn Đình Chiểu',
                'district_id' => 8,
                'city_id' => 1,
            ),
            98 => 
            array (
                'id' => 99,
                'code' => '268',
                'name' => 'THPT Phương Nam',
                'district_id' => 8,
                'city_id' => 1,
            ),
            99 => 
            array (
                'id' => 100,
                'code' => '269',
                'name' => 'THCS-THPT Quốc tế Thăng Long',
                'district_id' => 8,
                'city_id' => 1,
            ),
            100 => 
            array (
                'id' => 101,
                'code' => '278',
                'name' => 'THPT DL Trần Quang Khải',
                'district_id' => 8,
                'city_id' => 1,
            ),
            101 => 
            array (
                'id' => 102,
                'code' => '413',
                'name' => 'GDTX Hoàng Mai',
                'district_id' => 8,
                'city_id' => 1,
            ),
            102 => 
            array (
                'id' => 103,
                'code' => '611',
                'name' => 'CĐ nghề kinh doanh và công nghệ Hà Nội',
                'district_id' => 8,
                'city_id' => 1,
            ),
            103 => 
            array (
                'id' => 104,
                'code' => '637',
                'name' => 'TC nghề Du lịch Hà Nội',
                'district_id' => 8,
                'city_id' => 1,
            ),
            104 => 
            array (
                'id' => 105,
                'code' => '639',
                'name' => 'TC nghề Giao thông Vận tải',
                'district_id' => 8,
                'city_id' => 1,
            ),
            105 => 
            array (
                'id' => 106,
                'code' => '646',
                'name' => 'TC nghề Kỹ thuật và Nghiệp vụ XD HN',
                'district_id' => 8,
                'city_id' => 1,
            ),
            106 => 
            array (
                'id' => 107,
                'code' => '653',
                'name' => 'TC nghề số 17',
                'district_id' => 8,
                'city_id' => 1,
            ),
            107 => 
            array (
                'id' => 108,
                'code' => '044',
                'name' => 'THPT Lý Thường Kiệt',
                'district_id' => 9,
                'city_id' => 1,
            ),
            108 => 
            array (
                'id' => 109,
                'code' => '057',
                'name' => 'THPT Nguyễn Gia Thiều',
                'district_id' => 9,
                'city_id' => 1,
            ),
            109 => 
            array (
                'id' => 110,
                'code' => '084',
                'name' => 'THPT Thạch Bàn',
                'district_id' => 9,
                'city_id' => 1,
            ),
            110 => 
            array (
                'id' => 111,
                'code' => '234',
                'name' => 'THPT Lê Văn Thiêm',
                'district_id' => 9,
                'city_id' => 1,
            ),
            111 => 
            array (
                'id' => 112,
                'code' => '273',
                'name' => 'THPT Tây Sơn',
                'district_id' => 9,
                'city_id' => 1,
            ),
            112 => 
            array (
                'id' => 113,
                'code' => '280',
                'name' => 'THPT Vạn Xuân-Long Biên',
                'district_id' => 9,
                'city_id' => 1,
            ),
            113 => 
            array (
                'id' => 114,
                'code' => '284',
                'name' => 'THPT Wellspring-Mùa Xuân',
                'district_id' => 9,
                'city_id' => 1,
            ),
            114 => 
            array (
                'id' => 115,
                'code' => '431',
                'name' => 'GDTX Việt Hưng',
                'district_id' => 9,
                'city_id' => 1,
            ),
            115 => 
            array (
                'id' => 116,
                'code' => '504',
                'name' => 'Trung cấp Quang Trung',
                'district_id' => 9,
                'city_id' => 1,
            ),
            116 => 
            array (
                'id' => 117,
                'code' => '608',
                'name' => 'CĐ nghề đường sắt I',
                'district_id' => 9,
                'city_id' => 1,
            ),
            117 => 
            array (
                'id' => 118,
                'code' => '616',
                'name' => 'CĐ nghề Long Biên',
                'district_id' => 9,
                'city_id' => 1,
            ),
            118 => 
            array (
                'id' => 119,
                'code' => '052',
                'name' => 'THPT Ngọc Hồi',
                'district_id' => 10,
                'city_id' => 1,
            ),
            119 => 
            array (
                'id' => 120,
                'code' => '055',
                'name' => 'THPT Ngô Thì Nhậm',
                'district_id' => 10,
                'city_id' => 1,
            ),
            120 => 
            array (
                'id' => 121,
                'code' => '408',
                'name' => 'GDTX Đông Mỹ',
                'district_id' => 10,
                'city_id' => 1,
            ),
            121 => 
            array (
                'id' => 122,
                'code' => '425',
                'name' => 'GDTX Thanh  Trì',
                'district_id' => 10,
                'city_id' => 1,
            ),
            122 => 
            array (
                'id' => 123,
                'code' => '654',
                'name' => 'TC nghề số 18',
                'district_id' => 10,
                'city_id' => 1,
            ),
            123 => 
            array (
                'id' => 124,
                'code' => '657',
                'name' => 'TC nghề T thục Formach',
                'district_id' => 10,
                'city_id' => 1,
            ),
            124 => 
            array (
                'id' => 125,
                'code' => '005',
                'name' => 'THPT Cao Bá Quát-Gia Lâm',
                'district_id' => 11,
                'city_id' => 1,
            ),
            125 => 
            array (
                'id' => 126,
                'code' => '019',
                'name' => 'THPT Dương Xá',
                'district_id' => 11,
                'city_id' => 1,
            ),
            126 => 
            array (
                'id' => 127,
                'code' => '062',
                'name' => 'THPT Nguyễn Văn Cừ',
                'district_id' => 11,
                'city_id' => 1,
            ),
            127 => 
            array (
                'id' => 128,
                'code' => '118',
                'name' => 'THPT Yên Viên',
                'district_id' => 11,
                'city_id' => 1,
            ),
            128 => 
            array (
                'id' => 129,
                'code' => '205',
                'name' => 'THPT Bắc Đuống',
                'district_id' => 11,
                'city_id' => 1,
            ),
            129 => 
            array (
                'id' => 130,
                'code' => '232',
                'name' => 'THPT Lê Ngọc Hân',
                'district_id' => 11,
                'city_id' => 1,
            ),
            130 => 
            array (
                'id' => 131,
                'code' => '240',
                'name' => 'THPT Lý Thánh Tông',
                'district_id' => 11,
                'city_id' => 1,
            ),
            131 => 
            array (
                'id' => 132,
                'code' => '275',
                'name' => 'THPT Tô Hiệu-Gia Lâm',
                'district_id' => 11,
                'city_id' => 1,
            ),
            132 => 
            array (
                'id' => 133,
                'code' => '406',
                'name' => 'GDTX Đình Xuyên',
                'district_id' => 11,
                'city_id' => 1,
            ),
            133 => 
            array (
                'id' => 134,
                'code' => '417',
                'name' => 'GDTX Phú Thị',
                'district_id' => 11,
                'city_id' => 1,
            ),
            134 => 
            array (
                'id' => 135,
                'code' => '615',
                'name' => 'CĐ nghề Kỹ thuật Mỹ nghệ Việt Nam',
                'district_id' => 11,
                'city_id' => 1,
            ),
            135 => 
            array (
                'id' => 136,
                'code' => '624',
                'name' => 'TC nghề Cơ khí xây dựng',
                'district_id' => 11,
                'city_id' => 1,
            ),
            136 => 
            array (
                'id' => 137,
                'code' => '003',
                'name' => 'THPT Bắc Thăng Long',
                'district_id' => 12,
                'city_id' => 1,
            ),
            137 => 
            array (
                'id' => 138,
                'code' => '017',
                'name' => 'THPT Cổ Loa',
                'district_id' => 12,
                'city_id' => 1,
            ),
            138 => 
            array (
                'id' => 139,
                'code' => '026',
                'name' => 'THPT Đông Anh',
                'district_id' => 12,
                'city_id' => 1,
            ),
            139 => 
            array (
                'id' => 140,
                'code' => '042',
                'name' => 'THPT Liên Hà',
                'district_id' => 12,
                'city_id' => 1,
            ),
            140 => 
            array (
                'id' => 141,
                'code' => '108',
                'name' => 'THPT Vân Nội',
                'district_id' => 12,
                'city_id' => 1,
            ),
            141 => 
            array (
                'id' => 142,
                'code' => '202',
                'name' => 'THPT An Dương Vương',
                'district_id' => 12,
                'city_id' => 1,
            ),
            142 => 
            array (
                'id' => 143,
                'code' => '222',
                'name' => 'THPT Hoàng Long',
                'district_id' => 12,
                'city_id' => 1,
            ),
            143 => 
            array (
                'id' => 144,
                'code' => '231',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 12,
                'city_id' => 1,
            ),
            144 => 
            array (
                'id' => 145,
                'code' => '246',
                'name' => 'THPT Ngô Quyền-Đông Anh',
                'district_id' => 12,
                'city_id' => 1,
            ),
            145 => 
            array (
                'id' => 146,
                'code' => '248',
                'name' => 'THPT Ngô Tất Tố',
                'district_id' => 12,
                'city_id' => 1,
            ),
            146 => 
            array (
                'id' => 147,
                'code' => '264',
                'name' => 'THPT Phạm Ngũ Lão',
                'district_id' => 12,
                'city_id' => 1,
            ),
            147 => 
            array (
                'id' => 148,
                'code' => '407',
                'name' => 'GDTX Đông Anh',
                'district_id' => 12,
                'city_id' => 1,
            ),
            148 => 
            array (
                'id' => 149,
                'code' => '614',
                'name' => 'CĐ nghề Kỹ thuật Công nghệ',
                'district_id' => 12,
                'city_id' => 1,
            ),
            149 => 
            array (
                'id' => 150,
                'code' => '618',
                'name' => 'CĐ nghề Thăng Long',
                'district_id' => 12,
                'city_id' => 1,
            ),
            150 => 
            array (
                'id' => 151,
                'code' => '623',
                'name' => 'TC nghề Cơ khí 1 Hà Nội',
                'district_id' => 12,
                'city_id' => 1,
            ),
            151 => 
            array (
                'id' => 152,
                'code' => '020',
                'name' => 'THPT Đa Phúc',
                'district_id' => 13,
                'city_id' => 1,
            ),
            152 => 
            array (
                'id' => 153,
                'code' => '038',
                'name' => 'THPT Kim Anh',
                'district_id' => 13,
                'city_id' => 1,
            ),
            153 => 
            array (
                'id' => 154,
                'code' => '048',
                'name' => 'THPT Minh Phú',
                'district_id' => 13,
                'city_id' => 1,
            ),
            154 => 
            array (
                'id' => 155,
                'code' => '077',
                'name' => 'THPT Sóc Sơn',
                'district_id' => 13,
                'city_id' => 1,
            ),
            155 => 
            array (
                'id' => 156,
                'code' => '099',
                'name' => 'THPT Trung Giã',
                'district_id' => 13,
                'city_id' => 1,
            ),
            156 => 
            array (
                'id' => 157,
                'code' => '113',
                'name' => 'THPT Xuân Giang',
                'district_id' => 13,
                'city_id' => 1,
            ),
            157 => 
            array (
                'id' => 158,
                'code' => '209',
                'name' => 'THPT DL Đặng Thai Mai',
                'district_id' => 13,
                'city_id' => 1,
            ),
            158 => 
            array (
                'id' => 159,
                'code' => '229',
                'name' => 'THPT Lam Hồng',
                'district_id' => 13,
                'city_id' => 1,
            ),
            159 => 
            array (
                'id' => 160,
                'code' => '230',
                'name' => 'THPT Lạc Long Quân',
                'district_id' => 13,
                'city_id' => 1,
            ),
            160 => 
            array (
                'id' => 161,
                'code' => '243',
                'name' => 'THPT Mạc Đĩnh Chi',
                'district_id' => 13,
                'city_id' => 1,
            ),
            161 => 
            array (
                'id' => 162,
                'code' => '244',
                'name' => 'THPT Minh Trí',
                'district_id' => 13,
                'city_id' => 1,
            ),
            162 => 
            array (
                'id' => 163,
                'code' => '255',
                'name' => 'THPT DL Nguyễn Thượng Hiền',
                'district_id' => 13,
                'city_id' => 1,
            ),
            163 => 
            array (
                'id' => 164,
                'code' => '266',
                'name' => 'THPT DL Phùng Khắc Khoan',
                'district_id' => 13,
                'city_id' => 1,
            ),
            164 => 
            array (
                'id' => 165,
                'code' => '421',
                'name' => 'GDTX Sóc Sơn',
                'district_id' => 13,
                'city_id' => 1,
            ),
            165 => 
            array (
                'id' => 166,
                'code' => '607',
                'name' => 'CĐ nghề điện',
                'district_id' => 13,
                'city_id' => 1,
            ),
            166 => 
            array (
                'id' => 167,
                'code' => '628',
                'name' => 'TC nghề Công trình I',
                'district_id' => 13,
                'city_id' => 1,
            ),
            167 => 
            array (
                'id' => 168,
                'code' => '630',
                'name' => 'TC nghề Dân lập Cờ Đỏ',
                'district_id' => 13,
                'city_id' => 1,
            ),
            168 => 
            array (
                'id' => 169,
                'code' => '012',
                'name' => 'THPT Chuyên Nguyễn Huệ',
                'district_id' => 14,
                'city_id' => 1,
            ),
            169 => 
            array (
                'id' => 170,
                'code' => '041',
                'name' => 'THPT Lê Quý Đôn-Hà Đông',
                'district_id' => 14,
                'city_id' => 1,
            ),
            170 => 
            array (
                'id' => 171,
                'code' => '074',
                'name' => 'THPT Quang Trung-Hà Đông',
                'district_id' => 14,
                'city_id' => 1,
            ),
            171 => 
            array (
                'id' => 172,
                'code' => '094',
                'name' => 'THPT Trần Hưng Đạo-Hà Đông',
                'district_id' => 14,
                'city_id' => 1,
            ),
            172 => 
            array (
                'id' => 173,
                'code' => '217',
                'name' => 'THPT Hà Đông',
                'district_id' => 14,
                'city_id' => 1,
            ),
            173 => 
            array (
                'id' => 174,
                'code' => '265',
                'name' => 'THPT  Phùng Hưng',
                'district_id' => 14,
                'city_id' => 1,
            ),
            174 => 
            array (
                'id' => 175,
                'code' => '270',
                'name' => 'PT Quốc Tế Việt Nam',
                'district_id' => 14,
                'city_id' => 1,
            ),
            175 => 
            array (
                'id' => 176,
                'code' => '285',
                'name' => 'THPT Xa La',
                'district_id' => 14,
                'city_id' => 1,
            ),
            176 => 
            array (
                'id' => 177,
                'code' => '290',
                'name' => 'THPT Lê Lợi',
                'district_id' => 14,
                'city_id' => 1,
            ),
            177 => 
            array (
                'id' => 178,
                'code' => '411',
                'name' => 'GDTX Hà Tây',
                'district_id' => 14,
                'city_id' => 1,
            ),
            178 => 
            array (
                'id' => 179,
                'code' => '635',
                'name' => 'TC nghề Đào tạo nhân lực Vinaconex',
                'district_id' => 14,
                'city_id' => 1,
            ),
            179 => 
            array (
                'id' => 180,
                'code' => '660',
                'name' => 'TC nghề Tổng hợp Hà Nội',
                'district_id' => 14,
                'city_id' => 1,
            ),
            180 => 
            array (
                'id' => 181,
                'code' => '037',
                'name' => 'Hữu Nghị 80',
                'district_id' => 15,
                'city_id' => 1,
            ),
            181 => 
            array (
                'id' => 182,
                'code' => '078',
                'name' => 'THPT Sơn Tây',
                'district_id' => 15,
                'city_id' => 1,
            ),
            182 => 
            array (
                'id' => 183,
                'code' => '102',
                'name' => 'THPT Tùng Thiện',
                'district_id' => 15,
                'city_id' => 1,
            ),
            183 => 
            array (
                'id' => 184,
                'code' => '114',
                'name' => 'THPT Xuân Khanh',
                'district_id' => 15,
                'city_id' => 1,
            ),
            184 => 
            array (
                'id' => 185,
                'code' => '254',
                'name' => 'THPT Nguyễn Tất Thành-Sơn Tây',
                'district_id' => 15,
                'city_id' => 1,
            ),
            185 => 
            array (
                'id' => 186,
                'code' => '296',
                'name' => 'PT Võ Thuật Bảo Long',
                'district_id' => 15,
                'city_id' => 1,
            ),
            186 => 
            array (
                'id' => 187,
                'code' => '422',
                'name' => 'GDTX Sơn Tây',
                'district_id' => 15,
                'city_id' => 1,
            ),
            187 => 
            array (
                'id' => 188,
                'code' => '656',
                'name' => 'TC nghề Sơn Tây',
                'district_id' => 15,
                'city_id' => 1,
            ),
            188 => 
            array (
                'id' => 189,
                'code' => '658',
                'name' => 'TC nghề Thăng Long',
                'district_id' => 15,
                'city_id' => 1,
            ),
            189 => 
            array (
                'id' => 190,
                'code' => '001',
                'name' => 'THPT Ba Vì',
                'district_id' => 16,
                'city_id' => 1,
            ),
            190 => 
            array (
                'id' => 191,
                'code' => '004',
                'name' => 'THPT Bất Bạt',
                'district_id' => 16,
                'city_id' => 1,
            ),
            191 => 
            array (
                'id' => 192,
                'code' => '018',
                'name' => 'PT Dân tộc nội trú',
                'district_id' => 16,
                'city_id' => 1,
            ),
            192 => 
            array (
                'id' => 193,
                'code' => '054',
                'name' => 'THPT Ngô Quyền-Ba Vì',
                'district_id' => 16,
                'city_id' => 1,
            ),
            193 => 
            array (
                'id' => 194,
                'code' => '075',
                'name' => 'THPT Quảng Oai',
                'district_id' => 16,
                'city_id' => 1,
            ),
            194 => 
            array (
                'id' => 195,
                'code' => '236',
                'name' => 'THPT Lương Thế Vinh-Ba Vì',
                'district_id' => 16,
                'city_id' => 1,
            ),
            195 => 
            array (
                'id' => 196,
                'code' => '277',
                'name' => 'THPT Trần Phú-Ba Vì',
                'district_id' => 16,
                'city_id' => 1,
            ),
            196 => 
            array (
                'id' => 197,
                'code' => '402',
                'name' => 'GDTX Ba Vì',
                'district_id' => 16,
                'city_id' => 1,
            ),
            197 => 
            array (
                'id' => 198,
                'code' => '609',
                'name' => 'CĐ nghề Giao thông vận tải Trung ương I',
                'district_id' => 16,
                'city_id' => 1,
            ),
            198 => 
            array (
                'id' => 199,
                'code' => '036',
                'name' => 'Hữu Nghị T78',
                'district_id' => 17,
                'city_id' => 1,
            ),
            199 => 
            array (
                'id' => 200,
                'code' => '053',
                'name' => 'THPT Ngọc Tảo',
                'district_id' => 17,
                'city_id' => 1,
            ),
            200 => 
            array (
                'id' => 201,
                'code' => '071',
                'name' => 'THPT Phúc Thọ',
                'district_id' => 17,
                'city_id' => 1,
            ),
            201 => 
            array (
                'id' => 202,
                'code' => '107',
                'name' => 'THPT Vân Cốc',
                'district_id' => 17,
                'city_id' => 1,
            ),
            202 => 
            array (
                'id' => 203,
                'code' => '226',
                'name' => 'PT Hồng Đức',
                'district_id' => 17,
                'city_id' => 1,
            ),
            203 => 
            array (
                'id' => 204,
                'code' => '419',
                'name' => 'GDTX Phúc Thọ',
                'district_id' => 17,
                'city_id' => 1,
            ),
            204 => 
            array (
                'id' => 205,
                'code' => '002',
                'name' => 'THPT Bắc Lương Sơn',
                'district_id' => 18,
                'city_id' => 1,
            ),
            205 => 
            array (
                'id' => 206,
                'code' => '029',
                'name' => 'THPT Hai Bà Trưng-Thạch Thất',
                'district_id' => 18,
                'city_id' => 1,
            ),
            206 => 
            array (
                'id' => 207,
                'code' => '068',
                'name' => 'THPT Phùng Khắc Khoan-Thạch Thất',
                'district_id' => 18,
                'city_id' => 1,
            ),
            207 => 
            array (
                'id' => 208,
                'code' => '085',
                'name' => 'THPT Thạch Thất',
                'district_id' => 18,
                'city_id' => 1,
            ),
            208 => 
            array (
                'id' => 209,
                'code' => '263',
                'name' => 'THPT Phan Huy Chú-Thạch Thất',
                'district_id' => 18,
                'city_id' => 1,
            ),
            209 => 
            array (
                'id' => 210,
                'code' => '267',
                'name' => 'PT Phú Bình',
                'district_id' => 18,
                'city_id' => 1,
            ),
            210 => 
            array (
                'id' => 211,
                'code' => '289',
                'name' => 'THPT FPT',
                'district_id' => 18,
                'city_id' => 1,
            ),
            211 => 
            array (
                'id' => 212,
                'code' => '427',
                'name' => 'GDTX Thạch Thất',
                'district_id' => 18,
                'city_id' => 1,
            ),
            212 => 
            array (
                'id' => 213,
                'code' => '650',
                'name' => 'TC nghề Phùng Khắc Khoan',
                'district_id' => 18,
                'city_id' => 1,
            ),
            213 => 
            array (
                'id' => 214,
                'code' => '661',
                'name' => 'TC nghề Tư thục ASEAN',
                'district_id' => 18,
                'city_id' => 1,
            ),
            214 => 
            array (
                'id' => 215,
                'code' => '662',
                'name' => 'TC nghề tư thục Âu Việt',
                'district_id' => 18,
                'city_id' => 1,
            ),
            215 => 
            array (
                'id' => 216,
                'code' => '006',
                'name' => 'THPT Cao Bá Quát-Quốc Oai',
                'district_id' => 19,
                'city_id' => 1,
            ),
            216 => 
            array (
                'id' => 217,
                'code' => '047',
                'name' => 'THPT Minh Khai',
                'district_id' => 19,
                'city_id' => 1,
            ),
            217 => 
            array (
                'id' => 218,
                'code' => '076',
                'name' => 'THPT Quốc Oai',
                'district_id' => 19,
                'city_id' => 1,
            ),
            218 => 
            array (
                'id' => 219,
                'code' => '258',
                'name' => 'PT Nguyễn Trực',
                'district_id' => 19,
                'city_id' => 1,
            ),
            219 => 
            array (
                'id' => 220,
                'code' => '291',
                'name' => 'THPT TT  Minh Khai',
                'district_id' => 19,
                'city_id' => 1,
            ),
            220 => 
            array (
                'id' => 221,
                'code' => '420',
                'name' => 'GDTX Quốc Oai',
                'district_id' => 19,
                'city_id' => 1,
            ),
            221 => 
            array (
                'id' => 222,
                'code' => '014',
                'name' => 'THPT Chúc Động',
                'district_id' => 20,
                'city_id' => 1,
            ),
            222 => 
            array (
                'id' => 223,
                'code' => '015',
                'name' => 'THPT Chương Mỹ A',
                'district_id' => 20,
                'city_id' => 1,
            ),
            223 => 
            array (
                'id' => 224,
                'code' => '016',
                'name' => 'THPT Chương Mỹ B',
                'district_id' => 20,
                'city_id' => 1,
            ),
            224 => 
            array (
                'id' => 225,
                'code' => '022',
                'name' => 'ĐH Lâm Nghiệp',
                'district_id' => 20,
                'city_id' => 1,
            ),
            225 => 
            array (
                'id' => 226,
                'code' => '115',
                'name' => 'THPT Xuân Mai',
                'district_id' => 20,
                'city_id' => 1,
            ),
            226 => 
            array (
                'id' => 227,
                'code' => '210',
                'name' => 'THPT Đặng Tiến Đông',
                'district_id' => 20,
                'city_id' => 1,
            ),
            227 => 
            array (
                'id' => 228,
                'code' => '247',
                'name' => 'THPT Ngô Sỹ Liên',
                'district_id' => 20,
                'city_id' => 1,
            ),
            228 => 
            array (
                'id' => 229,
                'code' => '276',
                'name' => 'THPT Trần Đại Nghĩa',
                'district_id' => 20,
                'city_id' => 1,
            ),
            229 => 
            array (
                'id' => 230,
                'code' => '404',
                'name' => 'GDTX Chương Mỹ',
                'district_id' => 20,
                'city_id' => 1,
            ),
            230 => 
            array (
                'id' => 231,
                'code' => '024',
                'name' => 'THPT Đan Phượng',
                'district_id' => 21,
                'city_id' => 1,
            ),
            231 => 
            array (
                'id' => 232,
                'code' => '034',
                'name' => 'THPT Hồng Thái',
                'district_id' => 21,
                'city_id' => 1,
            ),
            232 => 
            array (
                'id' => 233,
                'code' => '080',
                'name' => 'THPT Tân Lập',
                'district_id' => 21,
                'city_id' => 1,
            ),
            233 => 
            array (
                'id' => 234,
                'code' => '405',
                'name' => 'GDTX Đan Phượng',
                'district_id' => 21,
                'city_id' => 1,
            ),
            234 => 
            array (
                'id' => 235,
                'code' => '627',
                'name' => 'TC nghề Công nghệ Tây An',
                'district_id' => 21,
                'city_id' => 1,
            ),
            235 => 
            array (
                'id' => 236,
                'code' => '030',
                'name' => 'THPT Hoài Đức A',
                'district_id' => 22,
                'city_id' => 1,
            ),
            236 => 
            array (
                'id' => 237,
                'code' => '031',
                'name' => 'THPT Hoài Đức B',
                'district_id' => 22,
                'city_id' => 1,
            ),
            237 => 
            array (
                'id' => 238,
                'code' => '106',
                'name' => 'THPT Vạn Xuân-Hoài Đức',
                'district_id' => 22,
                'city_id' => 1,
            ),
            238 => 
            array (
                'id' => 239,
                'code' => '206',
                'name' => 'THPT Bình Minh',
                'district_id' => 22,
                'city_id' => 1,
            ),
            239 => 
            array (
                'id' => 240,
                'code' => '412',
                'name' => 'GDTX Hoài Đức',
                'district_id' => 22,
                'city_id' => 1,
            ),
            240 => 
            array (
                'id' => 241,
                'code' => '602',
                'name' => 'CĐ nghề bách Khoa',
                'district_id' => 22,
                'city_id' => 1,
            ),
            241 => 
            array (
                'id' => 242,
                'code' => '649',
                'name' => 'TC nghề Nhân lực Quốc tế',
                'district_id' => 22,
                'city_id' => 1,
            ),
            242 => 
            array (
                'id' => 243,
                'code' => '664',
                'name' => 'TC nghề Vân Canh',
                'district_id' => 22,
                'city_id' => 1,
            ),
            243 => 
            array (
                'id' => 244,
                'code' => '056',
                'name' => 'THPT Nguyễn Du-Thanh Oai',
                'district_id' => 23,
                'city_id' => 1,
            ),
            244 => 
            array (
                'id' => 245,
                'code' => '082',
                'name' => 'THPT Thanh Oai A',
                'district_id' => 23,
                'city_id' => 1,
            ),
            245 => 
            array (
                'id' => 246,
                'code' => '083',
                'name' => 'THPT Thanh Oai B',
                'district_id' => 23,
                'city_id' => 1,
            ),
            246 => 
            array (
                'id' => 247,
                'code' => '204',
                'name' => 'THPT Bắc Hà-Thanh Oai',
                'district_id' => 23,
                'city_id' => 1,
            ),
            247 => 
            array (
                'id' => 248,
                'code' => '294',
                'name' => 'THPT Thanh Xuân',
                'district_id' => 23,
                'city_id' => 1,
            ),
            248 => 
            array (
                'id' => 249,
                'code' => '424',
                'name' => 'GDTX Thanh Oai',
                'district_id' => 23,
                'city_id' => 1,
            ),
            249 => 
            array (
                'id' => 250,
                'code' => '613',
                'name' => 'CĐ nghề kỹ thuật - công nghệ - kinh tế S',
                'district_id' => 23,
                'city_id' => 1,
            ),
            250 => 
            array (
                'id' => 251,
                'code' => '663',
                'name' => 'TC nghề Tư thục Điện tử - Cơ khí và Xây',
                'district_id' => 23,
                'city_id' => 1,
            ),
            251 => 
            array (
                'id' => 252,
                'code' => '035',
                'name' => 'THPT Hợp Thanh',
                'district_id' => 24,
                'city_id' => 1,
            ),
            252 => 
            array (
                'id' => 253,
                'code' => '049',
                'name' => 'THPT Mỹ Đức A',
                'district_id' => 24,
                'city_id' => 1,
            ),
            253 => 
            array (
                'id' => 254,
                'code' => '050',
                'name' => 'THPT Mỹ Đức B',
                'district_id' => 24,
                'city_id' => 1,
            ),
            254 => 
            array (
                'id' => 255,
                'code' => '051',
                'name' => 'THPT Mỹ Đức C',
                'district_id' => 24,
                'city_id' => 1,
            ),
            255 => 
            array (
                'id' => 256,
                'code' => '287',
                'name' => 'THPT Đinh Tiên Hoàng - Mỹ Đức',
                'district_id' => 24,
                'city_id' => 1,
            ),
            256 => 
            array (
                'id' => 257,
                'code' => '415',
                'name' => 'GDTX Mỹ Đức',
                'district_id' => 24,
                'city_id' => 1,
            ),
            257 => 
            array (
                'id' => 258,
                'code' => '643',
                'name' => 'TC nghề kỹ thuật công nghệ vạn xuân',
                'district_id' => 24,
                'city_id' => 1,
            ),
            258 => 
            array (
                'id' => 259,
                'code' => '021',
                'name' => 'THPT Đại Cường',
                'district_id' => 25,
                'city_id' => 1,
            ),
            259 => 
            array (
                'id' => 260,
                'code' => '043',
                'name' => 'THPT Lưu Hoàng',
                'district_id' => 25,
                'city_id' => 1,
            ),
            260 => 
            array (
                'id' => 261,
                'code' => '093',
                'name' => 'THPT Trần Đăng Ninh',
                'district_id' => 25,
                'city_id' => 1,
            ),
            261 => 
            array (
                'id' => 262,
                'code' => '104',
                'name' => 'THPT Ứng Hoà A',
                'district_id' => 25,
                'city_id' => 1,
            ),
            262 => 
            array (
                'id' => 263,
                'code' => '105',
                'name' => 'THPT Ứng Hoà B',
                'district_id' => 25,
                'city_id' => 1,
            ),
            263 => 
            array (
                'id' => 264,
                'code' => '256',
                'name' => 'THPT Nguyễn Thượng Hiền',
                'district_id' => 25,
                'city_id' => 1,
            ),
            264 => 
            array (
                'id' => 265,
                'code' => '430',
                'name' => 'GDTX Ứng Hoà',
                'district_id' => 25,
                'city_id' => 1,
            ),
            265 => 
            array (
                'id' => 266,
                'code' => '045',
                'name' => 'THPT Lý Tử Tấn',
                'district_id' => 26,
                'city_id' => 1,
            ),
            266 => 
            array (
                'id' => 267,
                'code' => '061',
                'name' => 'THPT Nguyễn Trãi-Thường Tín',
                'district_id' => 26,
                'city_id' => 1,
            ),
            267 => 
            array (
                'id' => 268,
                'code' => '088',
                'name' => 'THPT Thường Tín',
                'district_id' => 26,
                'city_id' => 1,
            ),
            268 => 
            array (
                'id' => 269,
                'code' => '092',
                'name' => 'THPT Tô Hiệu-Thường Tín',
                'district_id' => 26,
                'city_id' => 1,
            ),
            269 => 
            array (
                'id' => 270,
                'code' => '109',
                'name' => 'THPT Vân Tảo',
                'district_id' => 26,
                'city_id' => 1,
            ),
            270 => 
            array (
                'id' => 271,
                'code' => '428',
                'name' => 'GDTX Thường Tín',
                'district_id' => 26,
                'city_id' => 1,
            ),
            271 => 
            array (
                'id' => 272,
                'code' => '644',
                'name' => 'TC nghề Kỹ thuật và Công nghệ',
                'district_id' => 26,
                'city_id' => 1,
            ),
            272 => 
            array (
                'id' => 273,
                'code' => '665',
                'name' => 'TC nghề Việt Tiệp',
                'district_id' => 26,
                'city_id' => 1,
            ),
            273 => 
            array (
                'id' => 274,
                'code' => '027',
                'name' => 'THPT Đồng Quan',
                'district_id' => 27,
                'city_id' => 1,
            ),
            274 => 
            array (
                'id' => 275,
                'code' => '069',
                'name' => 'THPT Phú Xuyên A',
                'district_id' => 27,
                'city_id' => 1,
            ),
            275 => 
            array (
                'id' => 276,
                'code' => '070',
                'name' => 'THPT Phú Xuyên B',
                'district_id' => 27,
                'city_id' => 1,
            ),
            276 => 
            array (
                'id' => 277,
                'code' => '079',
                'name' => 'THPT Tân Dân',
                'district_id' => 27,
                'city_id' => 1,
            ),
            277 => 
            array (
                'id' => 278,
                'code' => '250',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 27,
                'city_id' => 1,
            ),
            278 => 
            array (
                'id' => 279,
                'code' => '418',
                'name' => 'GDTX Phú Xuyên',
                'district_id' => 27,
                'city_id' => 1,
            ),
            279 => 
            array (
                'id' => 280,
                'code' => '622',
                'name' => 'TC nghề Cơ điện và Chế biến thực phẩm Hà',
                'district_id' => 27,
                'city_id' => 1,
            ),
            280 => 
            array (
                'id' => 281,
                'code' => '655',
                'name' => 'TC nghề số I Hà Nội',
                'district_id' => 27,
                'city_id' => 1,
            ),
            281 => 
            array (
                'id' => 282,
                'code' => '046',
                'name' => 'THPT Mê Linh',
                'district_id' => 28,
                'city_id' => 1,
            ),
            282 => 
            array (
                'id' => 283,
                'code' => '072',
                'name' => 'THPT Quang Minh',
                'district_id' => 28,
                'city_id' => 1,
            ),
            283 => 
            array (
                'id' => 284,
                'code' => '090',
                'name' => 'THPT Tiền Phong',
                'district_id' => 28,
                'city_id' => 1,
            ),
            284 => 
            array (
                'id' => 285,
                'code' => '091',
                'name' => 'THPT Tiến Thịnh',
                'district_id' => 28,
                'city_id' => 1,
            ),
            285 => 
            array (
                'id' => 286,
                'code' => '103',
                'name' => 'THPT  Tự Lập',
                'district_id' => 28,
                'city_id' => 1,
            ),
            286 => 
            array (
                'id' => 287,
                'code' => '117',
                'name' => 'THPT Yên Lãng',
                'district_id' => 28,
                'city_id' => 1,
            ),
            287 => 
            array (
                'id' => 288,
                'code' => '251',
                'name' => 'THPT Nguyễn Du-Mê Linh',
                'district_id' => 28,
                'city_id' => 1,
            ),
            288 => 
            array (
                'id' => 289,
                'code' => '414',
                'name' => 'GDTX Mê Linh',
                'district_id' => 28,
                'city_id' => 1,
            ),
            289 => 
            array (
                'id' => 290,
                'code' => '645',
                'name' => 'TC nghề Kỹ thuật và Nghiệp vụ Du lịch Qu',
                'district_id' => 28,
                'city_id' => 1,
            ),
            290 => 
            array (
                'id' => 291,
                'code' => '023',
                'name' => 'THPT Đại Mỗ',
                'district_id' => 29,
                'city_id' => 1,
            ),
            291 => 
            array (
                'id' => 292,
                'code' => '067',
                'name' => 'PT năng khiếu TDTT Hà Nội',
                'district_id' => 29,
                'city_id' => 1,
            ),
            292 => 
            array (
                'id' => 293,
                'code' => '098',
                'name' => 'THCS-THPT Trần Quốc Tuấn',
                'district_id' => 29,
                'city_id' => 1,
            ),
            293 => 
            array (
                'id' => 294,
                'code' => '100',
                'name' => 'THPT Trung Văn',
                'district_id' => 29,
                'city_id' => 1,
            ),
            294 => 
            array (
                'id' => 295,
                'code' => '235',
                'name' => 'THPT M.V.Lômônôxốp',
                'district_id' => 29,
                'city_id' => 1,
            ),
            295 => 
            array (
                'id' => 296,
                'code' => '245',
                'name' => 'THCS-THPT Newton',
                'district_id' => 29,
                'city_id' => 1,
            ),
            296 => 
            array (
                'id' => 297,
                'code' => '260',
                'name' => 'THPT Olympia',
                'district_id' => 29,
                'city_id' => 1,
            ),
            297 => 
            array (
                'id' => 298,
                'code' => '279',
                'name' => 'THPT Trí Đức',
                'district_id' => 29,
                'city_id' => 1,
            ),
            298 => 
            array (
                'id' => 299,
                'code' => '283',
                'name' => 'THPT TT Việt Úc Hà Nội',
                'district_id' => 29,
                'city_id' => 1,
            ),
            299 => 
            array (
                'id' => 300,
                'code' => '286',
                'name' => 'THPT Xuân Thuỷ',
                'district_id' => 29,
                'city_id' => 1,
            ),
            300 => 
            array (
                'id' => 301,
                'code' => '295',
                'name' => 'THPT Trần Thánh Tông',
                'district_id' => 29,
                'city_id' => 1,
            ),
            301 => 
            array (
                'id' => 302,
                'code' => '429',
                'name' => 'GDTX Từ Liêm',
                'district_id' => 29,
                'city_id' => 1,
            ),
            302 => 
            array (
                'id' => 303,
                'code' => '605',
                'name' => 'CĐ nghề công nghệ cao Hà Nội',
                'district_id' => 29,
                'city_id' => 1,
            ),
            303 => 
            array (
                'id' => 304,
                'code' => '629',
                'name' => 'TC nghề Dân lập CN và NV tổng hợp HN',
                'district_id' => 29,
                'city_id' => 1,
            ),
            304 => 
            array (
                'id' => 305,
                'code' => '632',
                'name' => 'TC nghề Dân lập Kỹ nghệ thực hành Tây Mỗ',
                'district_id' => 29,
                'city_id' => 1,
            ),
            305 => 
            array (
                'id' => 306,
                'code' => '633',
                'name' => 'TC nghề Dân lập Kỹ thuật tổng hợp Hà Nội',
                'district_id' => 29,
                'city_id' => 1,
            ),
            306 => 
            array (
                'id' => 307,
                'code' => '651',
                'name' => 'TC nghề Q. tế Đông dương - Phân hiệu HN',
                'district_id' => 29,
                'city_id' => 1,
            ),
            307 => 
            array (
                'id' => 308,
                'code' => '666',
                'name' => 'TC nghề Việt Úc',
                'district_id' => 29,
                'city_id' => 1,
            ),
            308 => 
            array (
                'id' => 309,
                'code' => '001',
                'name' => 'THPT Trưng Vương',
                'district_id' => 30,
                'city_id' => 2,
            ),
            309 => 
            array (
                'id' => 310,
                'code' => '002',
                'name' => 'THPT Bùi Thị Xuân',
                'district_id' => 30,
                'city_id' => 2,
            ),
            310 => 
            array (
                'id' => 311,
                'code' => '003',
                'name' => 'THPT Tenlơman',
                'district_id' => 30,
                'city_id' => 2,
            ),
            311 => 
            array (
                'id' => 312,
                'code' => '004',
                'name' => 'THPT Trần Đại Nghĩa',
                'district_id' => 30,
                'city_id' => 2,
            ),
            312 => 
            array (
                'id' => 313,
                'code' => '005',
                'name' => 'THPT Lương Thế Vinh',
                'district_id' => 30,
                'city_id' => 2,
            ),
            313 => 
            array (
                'id' => 314,
                'code' => '083',
                'name' => 'THCS-THPT Đăng Khoa',
                'district_id' => 30,
                'city_id' => 2,
            ),
            314 => 
            array (
                'id' => 315,
                'code' => '084',
                'name' => 'Năng Khiếu Thể dục thể thao',
                'district_id' => 30,
                'city_id' => 2,
            ),
            315 => 
            array (
                'id' => 316,
                'code' => '087',
                'name' => 'TH,THCS và THPT Quốc tế á Châu',
                'district_id' => 30,
                'city_id' => 2,
            ),
            316 => 
            array (
                'id' => 317,
                'code' => '118',
                'name' => 'TTGDTX Quận 1',
                'district_id' => 30,
                'city_id' => 2,
            ),
            317 => 
            array (
                'id' => 318,
                'code' => '142',
                'name' => 'TTGDTX Lê Quí Đôn',
                'district_id' => 30,
                'city_id' => 2,
            ),
            318 => 
            array (
                'id' => 319,
                'code' => '148',
                'name' => 'BTVH CĐKT Cao Thắng',
                'district_id' => 30,
                'city_id' => 2,
            ),
            319 => 
            array (
                'id' => 320,
                'code' => '151',
                'name' => 'Nhạc Viện TP HCM',
                'district_id' => 30,
                'city_id' => 2,
            ),
            320 => 
            array (
                'id' => 321,
                'code' => '152',
                'name' => 'ĐH Sân Khấu Điện ảnh',
                'district_id' => 30,
                'city_id' => 2,
            ),
            321 => 
            array (
                'id' => 322,
                'code' => '160',
                'name' => 'TC KT Nông Nghiệp',
                'district_id' => 30,
                'city_id' => 2,
            ),
            322 => 
            array (
                'id' => 323,
                'code' => '174',
                'name' => 'Song ngữ Quốc tế Horizon',
                'district_id' => 30,
                'city_id' => 2,
            ),
            323 => 
            array (
                'id' => 324,
                'code' => '175',
                'name' => 'TH, THCS và THPT úc Châu',
                'district_id' => 30,
                'city_id' => 2,
            ),
            324 => 
            array (
                'id' => 325,
                'code' => '178',
                'name' => 'THPT Châu á Thái Bình Dương',
                'district_id' => 30,
                'city_id' => 2,
            ),
            325 => 
            array (
                'id' => 326,
                'code' => '237',
                'name' => 'C Đ nghề TP Hồ Chí Minh',
                'district_id' => 30,
                'city_id' => 2,
            ),
            326 => 
            array (
                'id' => 327,
                'code' => '006',
                'name' => 'THPT Giồng Ông Tố',
                'district_id' => 31,
                'city_id' => 2,
            ),
            327 => 
            array (
                'id' => 328,
                'code' => '007',
                'name' => 'THPT Thủ Thiêm',
                'district_id' => 31,
                'city_id' => 2,
            ),
            328 => 
            array (
                'id' => 329,
                'code' => '119',
                'name' => 'TTGDTX Quận 2',
                'district_id' => 31,
                'city_id' => 2,
            ),
            329 => 
            array (
                'id' => 330,
                'code' => '008',
                'name' => 'THPT Lê Qúy Đôn',
                'district_id' => 32,
                'city_id' => 2,
            ),
            330 => 
            array (
                'id' => 331,
                'code' => '009',
                'name' => 'THPT Nguyễn Thị Minh Khai',
                'district_id' => 32,
                'city_id' => 2,
            ),
            331 => 
            array (
                'id' => 332,
                'code' => '010',
                'name' => 'THPT Marie-Curie',
                'district_id' => 32,
                'city_id' => 2,
            ),
            332 => 
            array (
                'id' => 333,
                'code' => '011',
                'name' => 'TT KTTHHN Lê T H Gấm',
                'district_id' => 32,
                'city_id' => 2,
            ),
            333 => 
            array (
                'id' => 334,
                'code' => '012',
                'name' => 'THPT Nguyễn Thị Diệu',
                'district_id' => 32,
                'city_id' => 2,
            ),
            334 => 
            array (
                'id' => 335,
                'code' => '085',
                'name' => 'THCS-THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 32,
                'city_id' => 2,
            ),
            335 => 
            array (
                'id' => 336,
                'code' => '120',
                'name' => 'TTGDTX Quận 3',
                'district_id' => 32,
                'city_id' => 2,
            ),
            336 => 
            array (
                'id' => 337,
                'code' => '146',
                'name' => 'TT BT Người tàn tật TP',
                'district_id' => 32,
                'city_id' => 2,
            ),
            337 => 
            array (
                'id' => 338,
                'code' => '161',
                'name' => 'TH Múa',
                'district_id' => 32,
                'city_id' => 2,
            ),
            338 => 
            array (
                'id' => 339,
                'code' => '162',
                'name' => 'CĐ Giao thông Vận tải',
                'district_id' => 32,
                'city_id' => 2,
            ),
            339 => 
            array (
                'id' => 340,
                'code' => '238',
                'name' => 'C Đ nghề Việt Mỹ',
                'district_id' => 32,
                'city_id' => 2,
            ),
            340 => 
            array (
                'id' => 341,
                'code' => '241',
                'name' => 'TC nghề Nhân Đạo',
                'district_id' => 32,
                'city_id' => 2,
            ),
            341 => 
            array (
                'id' => 342,
                'code' => '249',
                'name' => 'TC nghề TT Kinh tế kỹ thuật Sài Gòn3',
                'district_id' => 32,
                'city_id' => 2,
            ),
            342 => 
            array (
                'id' => 343,
                'code' => '263',
                'name' => 'Phân hiệu BTVH Lê Thị Hồng Gấm',
                'district_id' => 32,
                'city_id' => 2,
            ),
            343 => 
            array (
                'id' => 344,
                'code' => '013',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 33,
                'city_id' => 2,
            ),
            344 => 
            array (
                'id' => 345,
                'code' => '014',
                'name' => 'THPT Nguyễn Hữu Thọ',
                'district_id' => 33,
                'city_id' => 2,
            ),
            345 => 
            array (
                'id' => 346,
                'code' => '121',
                'name' => 'TTGDTX Quận 4',
                'district_id' => 33,
                'city_id' => 2,
            ),
            346 => 
            array (
                'id' => 347,
                'code' => '015',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 34,
                'city_id' => 2,
            ),
            347 => 
            array (
                'id' => 348,
                'code' => '016',
                'name' => 'THPT Hùng Vương',
                'district_id' => 34,
                'city_id' => 2,
            ),
            348 => 
            array (
                'id' => 349,
                'code' => '017',
                'name' => 'THPT Trần Khai Nguyên',
                'district_id' => 34,
                'city_id' => 2,
            ),
            349 => 
            array (
                'id' => 350,
                'code' => '018',
                'name' => 'Phổ thông Năng khiếu ĐHQG-HCM',
                'district_id' => 34,
                'city_id' => 2,
            ),
            350 => 
            array (
                'id' => 351,
                'code' => '019',
                'name' => 'THPTThực hành/ĐHSP',
                'district_id' => 34,
                'city_id' => 2,
            ),
            351 => 
            array (
                'id' => 352,
                'code' => '020',
                'name' => 'THPT Trần Hữu Trang',
                'district_id' => 34,
                'city_id' => 2,
            ),
            352 => 
            array (
                'id' => 353,
                'code' => '088',
                'name' => 'THCS và THPT An Đông',
                'district_id' => 34,
                'city_id' => 2,
            ),
            353 => 
            array (
                'id' => 354,
                'code' => '089',
                'name' => 'THPT Thăng Long',
                'district_id' => 34,
                'city_id' => 2,
            ),
            354 => 
            array (
                'id' => 355,
                'code' => '090',
                'name' => 'THCS và THPT Khai Trí',
                'district_id' => 34,
                'city_id' => 2,
            ),
            355 => 
            array (
                'id' => 356,
                'code' => '122',
                'name' => 'TTGDTX Quận 5',
                'district_id' => 34,
                'city_id' => 2,
            ),
            356 => 
            array (
                'id' => 357,
                'code' => '143',
                'name' => 'TTGDTX Chu Văn An',
                'district_id' => 34,
                'city_id' => 2,
            ),
            357 => 
            array (
                'id' => 358,
                'code' => '200',
                'name' => 'THCS-THPT Quang Trung Nguyễn Huệ',
                'district_id' => 34,
                'city_id' => 2,
            ),
            358 => 
            array (
                'id' => 359,
                'code' => '206',
                'name' => 'THPT Tân Nam Mỹ',
                'district_id' => 34,
                'city_id' => 2,
            ),
            359 => 
            array (
                'id' => 360,
                'code' => '207',
                'name' => 'THTH Sài Gòn',
                'district_id' => 34,
                'city_id' => 2,
            ),
            360 => 
            array (
                'id' => 361,
                'code' => '235',
                'name' => 'TC Kinh tế Du lịch TP. Hồ Chí Minh',
                'district_id' => 34,
                'city_id' => 2,
            ),
            361 => 
            array (
                'id' => 362,
                'code' => '267',
                'name' => 'THPT Văn Lang',
                'district_id' => 34,
                'city_id' => 2,
            ),
            362 => 
            array (
                'id' => 363,
                'code' => '021',
                'name' => 'THPT Mạc Đĩnh Chi',
                'district_id' => 35,
                'city_id' => 2,
            ),
            363 => 
            array (
                'id' => 364,
                'code' => '022',
                'name' => 'THPT Bình Phú',
                'district_id' => 35,
                'city_id' => 2,
            ),
            364 => 
            array (
                'id' => 365,
                'code' => '091',
                'name' => 'THPT Phan Bội Châu',
                'district_id' => 35,
                'city_id' => 2,
            ),
            365 => 
            array (
                'id' => 366,
                'code' => '100',
                'name' => 'THPT Nguyễn Tất Thành',
                'district_id' => 35,
                'city_id' => 2,
            ),
            366 => 
            array (
                'id' => 367,
                'code' => '123',
                'name' => 'TTGDTX Quận 6',
                'district_id' => 35,
                'city_id' => 2,
            ),
            367 => 
            array (
                'id' => 368,
                'code' => '153',
                'name' => 'CĐ GTVT 3',
                'district_id' => 35,
                'city_id' => 2,
            ),
            368 => 
            array (
                'id' => 369,
                'code' => '163',
                'name' => 'CĐ Kỹ thuật Phú Lâm',
                'district_id' => 35,
                'city_id' => 2,
            ),
            369 => 
            array (
                'id' => 370,
                'code' => '187',
                'name' => 'THPT Quốc Trí',
                'district_id' => 35,
                'city_id' => 2,
            ),
            370 => 
            array (
                'id' => 371,
                'code' => '208',
                'name' => 'THCS & THPT Đào Duy Anh',
                'district_id' => 35,
                'city_id' => 2,
            ),
            371 => 
            array (
                'id' => 372,
                'code' => '209',
                'name' => 'THPT Phú Lâm',
                'district_id' => 35,
                'city_id' => 2,
            ),
            372 => 
            array (
                'id' => 373,
                'code' => '023',
                'name' => 'THPT Lê Thánh Tôn',
                'district_id' => 36,
                'city_id' => 2,
            ),
            373 => 
            array (
                'id' => 374,
                'code' => '024',
                'name' => 'THPT Ngô Quyền',
                'district_id' => 36,
                'city_id' => 2,
            ),
            374 => 
            array (
                'id' => 375,
                'code' => '025',
                'name' => 'THPT Tân Phong',
                'district_id' => 36,
                'city_id' => 2,
            ),
            375 => 
            array (
                'id' => 376,
                'code' => '124',
                'name' => 'TTGDTX Quận 7',
                'district_id' => 36,
                'city_id' => 2,
            ),
            376 => 
            array (
                'id' => 377,
                'code' => '154',
                'name' => 'CĐ BC CN&QTDN',
                'district_id' => 36,
                'city_id' => 2,
            ),
            377 => 
            array (
                'id' => 378,
                'code' => '164',
                'name' => 'TCKTNV Nguyễn Hữu Cảnh',
                'district_id' => 36,
                'city_id' => 2,
            ),
            378 => 
            array (
                'id' => 379,
                'code' => '172',
                'name' => 'THPT Nam Sài gòn',
                'district_id' => 36,
                'city_id' => 2,
            ),
            379 => 
            array (
                'id' => 380,
                'code' => '199',
                'name' => 'THCS và THPT Đinh Thiện Lý',
                'district_id' => 36,
                'city_id' => 2,
            ),
            380 => 
            array (
                'id' => 381,
                'code' => '210',
                'name' => 'THCS-THPT Sao Việt',
                'district_id' => 36,
                'city_id' => 2,
            ),
            381 => 
            array (
                'id' => 382,
                'code' => '211',
                'name' => 'THCS-THPT Đức Trí',
                'district_id' => 36,
                'city_id' => 2,
            ),
            382 => 
            array (
                'id' => 383,
                'code' => '236',
                'name' => 'THPT quốc tế Khai Sáng',
                'district_id' => 36,
                'city_id' => 2,
            ),
            383 => 
            array (
                'id' => 384,
                'code' => '026',
                'name' => 'THPT Lương Văn Can',
                'district_id' => 37,
                'city_id' => 2,
            ),
            384 => 
            array (
                'id' => 385,
                'code' => '027',
                'name' => 'THPT Ngô Gia Tự',
                'district_id' => 37,
                'city_id' => 2,
            ),
            385 => 
            array (
                'id' => 386,
                'code' => '028',
                'name' => 'THPT Tạ Quang Bửu',
                'district_id' => 37,
                'city_id' => 2,
            ),
            386 => 
            array (
                'id' => 387,
                'code' => '029',
                'name' => 'THPT NKTDTT Nguyễn Thị Định',
                'district_id' => 37,
                'city_id' => 2,
            ),
            387 => 
            array (
                'id' => 388,
                'code' => '125',
                'name' => 'TTGDTX Quận 8',
                'district_id' => 37,
                'city_id' => 2,
            ),
            388 => 
            array (
                'id' => 389,
                'code' => '165',
                'name' => 'THCN L.Thực T.Phẩm',
                'district_id' => 37,
                'city_id' => 2,
            ),
            389 => 
            array (
                'id' => 390,
                'code' => '166',
                'name' => 'TCKT&NV Nam Sài Gòn',
                'district_id' => 37,
                'city_id' => 2,
            ),
            390 => 
            array (
                'id' => 391,
                'code' => '176',
                'name' => 'Tiểu học, THCS và THPT Nam Mỹ',
                'district_id' => 37,
                'city_id' => 2,
            ),
            391 => 
            array (
                'id' => 392,
                'code' => '212',
                'name' => 'THPT Nguyễn Văn Linh',
                'district_id' => 37,
                'city_id' => 2,
            ),
            392 => 
            array (
                'id' => 393,
                'code' => '030',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 38,
                'city_id' => 2,
            ),
            393 => 
            array (
                'id' => 394,
                'code' => '031',
                'name' => 'THPT Phước Long',
                'district_id' => 38,
                'city_id' => 2,
            ),
            394 => 
            array (
                'id' => 395,
                'code' => '032',
                'name' => 'THPT Long Trường',
                'district_id' => 38,
                'city_id' => 2,
            ),
            395 => 
            array (
                'id' => 396,
                'code' => '092',
                'name' => 'TH, THCS và THPT Ngô Thời Nhiệm',
                'district_id' => 38,
                'city_id' => 2,
            ),
            396 => 
            array (
                'id' => 397,
                'code' => '126',
                'name' => 'TTGDTX Quận 9',
                'district_id' => 38,
                'city_id' => 2,
            ),
            397 => 
            array (
                'id' => 398,
                'code' => '155',
                'name' => 'CĐ KT KT Công Nghiệp 2',
                'district_id' => 38,
                'city_id' => 2,
            ),
            398 => 
            array (
                'id' => 399,
                'code' => '156',
                'name' => 'CĐ Tài chính Hải  quan',
                'district_id' => 38,
                'city_id' => 2,
            ),
            399 => 
            array (
                'id' => 400,
                'code' => '239',
                'name' => 'C Đ nghề Kỹ thuật Công nghệ',
                'district_id' => 38,
                'city_id' => 2,
            ),
            400 => 
            array (
                'id' => 401,
                'code' => '250',
                'name' => 'TC nghề xây lắp điện',
                'district_id' => 38,
                'city_id' => 2,
            ),
            401 => 
            array (
                'id' => 402,
                'code' => '254',
                'name' => 'TC nghề lê Thị Riêng',
                'district_id' => 38,
                'city_id' => 2,
            ),
            402 => 
            array (
                'id' => 403,
                'code' => '257',
                'name' => 'THPT Hoa Sen',
                'district_id' => 38,
                'city_id' => 2,
            ),
            403 => 
            array (
                'id' => 404,
                'code' => '259',
                'name' => 'THPT Nguyễn Văn Tăng',
                'district_id' => 38,
                'city_id' => 2,
            ),
            404 => 
            array (
                'id' => 405,
                'code' => '033',
                'name' => 'THPT Nguyễn Khuyến',
                'district_id' => 39,
                'city_id' => 2,
            ),
            405 => 
            array (
                'id' => 406,
                'code' => '034',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 39,
                'city_id' => 2,
            ),
            406 => 
            array (
                'id' => 407,
                'code' => '035',
                'name' => 'THPT Nguyễn An Ninh',
                'district_id' => 39,
                'city_id' => 2,
            ),
            407 => 
            array (
                'id' => 408,
                'code' => '036',
                'name' => 'THPT Sương Nguyệt Anh',
                'district_id' => 39,
                'city_id' => 2,
            ),
            408 => 
            array (
                'id' => 409,
                'code' => '037',
                'name' => 'THPT Diên Hồng',
                'district_id' => 39,
                'city_id' => 2,
            ),
            409 => 
            array (
                'id' => 410,
                'code' => '093',
                'name' => 'TC Hồng Hà',
                'district_id' => 39,
                'city_id' => 2,
            ),
            410 => 
            array (
                'id' => 411,
                'code' => '094',
                'name' => 'TH, THCS và THPT Vạn Hạnh',
                'district_id' => 39,
                'city_id' => 2,
            ),
            411 => 
            array (
                'id' => 412,
                'code' => '113',
                'name' => 'THCS và THPT Duy Tân',
                'district_id' => 39,
                'city_id' => 2,
            ),
            412 => 
            array (
                'id' => 413,
                'code' => '127',
                'name' => 'TTGDTX Quận 10',
                'district_id' => 39,
                'city_id' => 2,
            ),
            413 => 
            array (
                'id' => 414,
                'code' => '168',
                'name' => 'CĐ Kinh Tế',
                'district_id' => 39,
                'city_id' => 2,
            ),
            414 => 
            array (
                'id' => 415,
                'code' => '205',
                'name' => 'PT ĐB Nguyễn Đình Chiểu',
                'district_id' => 39,
                'city_id' => 2,
            ),
            415 => 
            array (
                'id' => 416,
                'code' => '224',
                'name' => 'THPT Việt úc',
                'district_id' => 39,
                'city_id' => 2,
            ),
            416 => 
            array (
                'id' => 417,
                'code' => '234',
                'name' => 'TC Vạn Tường',
                'district_id' => 39,
                'city_id' => 2,
            ),
            417 => 
            array (
                'id' => 418,
                'code' => '245',
                'name' => 'TC nghề KTNV Tôn Đức Thắng',
                'district_id' => 39,
                'city_id' => 2,
            ),
            418 => 
            array (
                'id' => 419,
                'code' => '253',
                'name' => 'TC nghề số 7',
                'district_id' => 39,
                'city_id' => 2,
            ),
            419 => 
            array (
                'id' => 420,
                'code' => '038',
                'name' => 'THPT Nguyễn Hiền',
                'district_id' => 40,
                'city_id' => 2,
            ),
            420 => 
            array (
                'id' => 421,
                'code' => '039',
                'name' => 'THPT Nam Kỳ Khởi Nghĩa',
                'district_id' => 40,
                'city_id' => 2,
            ),
            421 => 
            array (
                'id' => 422,
                'code' => '103',
                'name' => 'TH, THCS và THPT Trương Vĩnh Ký',
                'district_id' => 40,
                'city_id' => 2,
            ),
            422 => 
            array (
                'id' => 423,
                'code' => '128',
                'name' => 'TTGDTX Quận 11',
                'district_id' => 40,
                'city_id' => 2,
            ),
            423 => 
            array (
                'id' => 424,
                'code' => '185',
                'name' => 'THPT Trần Nhân Tông',
                'district_id' => 40,
                'city_id' => 2,
            ),
            424 => 
            array (
                'id' => 425,
                'code' => '188',
                'name' => 'THPT Trần Quang Khải',
                'district_id' => 40,
                'city_id' => 2,
            ),
            425 => 
            array (
                'id' => 426,
                'code' => '189',
                'name' => 'THPT Quốc tế APU',
                'district_id' => 40,
                'city_id' => 2,
            ),
            426 => 
            array (
                'id' => 427,
                'code' => '190',
                'name' => 'THPT Trần Quốc Tuấn',
                'district_id' => 40,
                'city_id' => 2,
            ),
            427 => 
            array (
                'id' => 428,
                'code' => '268',
                'name' => 'THPT Việt Mỹ Anh',
                'district_id' => 40,
                'city_id' => 2,
            ),
            428 => 
            array (
                'id' => 429,
                'code' => '283',
                'name' => 'TT Huấn luyện và thi đấu TDTT',
                'district_id' => 40,
                'city_id' => 2,
            ),
            429 => 
            array (
                'id' => 430,
                'code' => '040',
                'name' => 'THPT Võ Trường Toản',
                'district_id' => 41,
                'city_id' => 2,
            ),
            430 => 
            array (
                'id' => 431,
                'code' => '041',
                'name' => 'THPT Thạnh Lộc',
                'district_id' => 41,
                'city_id' => 2,
            ),
            431 => 
            array (
                'id' => 432,
                'code' => '042',
                'name' => 'THPT Trường Chinh',
                'district_id' => 41,
                'city_id' => 2,
            ),
            432 => 
            array (
                'id' => 433,
                'code' => '107',
                'name' => 'THCS và THPT Bắc Sơn',
                'district_id' => 41,
                'city_id' => 2,
            ),
            433 => 
            array (
                'id' => 434,
                'code' => '129',
                'name' => 'TTGDTX Quận 12',
                'district_id' => 41,
                'city_id' => 2,
            ),
            434 => 
            array (
                'id' => 435,
                'code' => '183',
                'name' => 'THCS và THPT Lạc Hồng',
                'district_id' => 41,
                'city_id' => 2,
            ),
            435 => 
            array (
                'id' => 436,
                'code' => '186',
                'name' => 'THCS-THPT Hoa Lư',
                'district_id' => 41,
                'city_id' => 2,
            ),
            436 => 
            array (
                'id' => 437,
                'code' => '231',
                'name' => 'TC Phương Đông',
                'district_id' => 41,
                'city_id' => 2,
            ),
            437 => 
            array (
                'id' => 438,
                'code' => '248',
                'name' => 'TC nghề Ngọc Phước',
                'district_id' => 41,
                'city_id' => 2,
            ),
            438 => 
            array (
                'id' => 439,
                'code' => '277',
                'name' => 'TC Thông tin Truyền thông',
                'district_id' => 41,
                'city_id' => 2,
            ),
            439 => 
            array (
                'id' => 440,
                'code' => '278',
                'name' => 'TC KTKT Quận 12',
                'district_id' => 41,
                'city_id' => 2,
            ),
            440 => 
            array (
                'id' => 441,
                'code' => '282',
                'name' => 'TC ánh Sáng',
                'district_id' => 41,
                'city_id' => 2,
            ),
            441 => 
            array (
                'id' => 442,
                'code' => '288',
                'name' => 'TH-THCS-THPT Mỹ Việt',
                'district_id' => 41,
                'city_id' => 2,
            ),
            442 => 
            array (
                'id' => 443,
                'code' => '043',
                'name' => 'THPT Gò Vấp',
                'district_id' => 42,
                'city_id' => 2,
            ),
            443 => 
            array (
                'id' => 444,
                'code' => '044',
                'name' => 'THPT Nguyễn Trung Trực',
                'district_id' => 42,
                'city_id' => 2,
            ),
            444 => 
            array (
                'id' => 445,
                'code' => '045',
                'name' => 'THPT Nguyễn Công Trứ',
                'district_id' => 42,
                'city_id' => 2,
            ),
            445 => 
            array (
                'id' => 446,
                'code' => '096',
                'name' => 'THCS và THPT Phạm Ngũ Lão',
                'district_id' => 42,
                'city_id' => 2,
            ),
            446 => 
            array (
                'id' => 447,
                'code' => '097',
                'name' => 'THPT Hermann Gmeiner',
                'district_id' => 42,
                'city_id' => 2,
            ),
            447 => 
            array (
                'id' => 448,
                'code' => '111',
                'name' => 'THCS và THPT Phan Huy ích',
                'district_id' => 42,
                'city_id' => 2,
            ),
            448 => 
            array (
                'id' => 449,
                'code' => '114',
                'name' => 'THCS-THPT Hồng Hà',
                'district_id' => 42,
                'city_id' => 2,
            ),
            449 => 
            array (
                'id' => 450,
                'code' => '130',
                'name' => 'TTGDTX Quận Gò Vấp',
                'district_id' => 42,
                'city_id' => 2,
            ),
            450 => 
            array (
                'id' => 451,
                'code' => '157',
                'name' => 'ĐH Công nghiệp',
                'district_id' => 42,
                'city_id' => 2,
            ),
            451 => 
            array (
                'id' => 452,
                'code' => '173',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 42,
                'city_id' => 2,
            ),
            452 => 
            array (
                'id' => 453,
                'code' => '192',
                'name' => 'THPT Việt Âu',
                'district_id' => 42,
                'city_id' => 2,
            ),
            453 => 
            array (
                'id' => 454,
                'code' => '193',
                'name' => 'THPT Đông Dương',
                'district_id' => 42,
                'city_id' => 2,
            ),
            454 => 
            array (
                'id' => 455,
                'code' => '198',
                'name' => 'TH-THCS & THPT Đại Việt',
                'district_id' => 42,
                'city_id' => 2,
            ),
            455 => 
            array (
                'id' => 456,
                'code' => '202',
                'name' => 'THPT Lý Thái Tổ',
                'district_id' => 42,
                'city_id' => 2,
            ),
            456 => 
            array (
                'id' => 457,
                'code' => '216',
                'name' => 'THCS & THPT Âu Lạc',
                'district_id' => 42,
                'city_id' => 2,
            ),
            457 => 
            array (
                'id' => 458,
                'code' => '217',
                'name' => 'THPT Phùng Hưng',
                'district_id' => 42,
                'city_id' => 2,
            ),
            458 => 
            array (
                'id' => 459,
                'code' => '218',
                'name' => 'THPT Đào Duy Từ',
                'district_id' => 42,
                'city_id' => 2,
            ),
            459 => 
            array (
                'id' => 460,
                'code' => '219',
                'name' => 'TTGDTX Trần Hưng Đạo',
                'district_id' => 42,
                'city_id' => 2,
            ),
            460 => 
            array (
                'id' => 461,
                'code' => '244',
                'name' => 'TC nghề Quang Trung',
                'district_id' => 42,
                'city_id' => 2,
            ),
            461 => 
            array (
                'id' => 462,
                'code' => '261',
                'name' => 'TC Âu Việt',
                'district_id' => 42,
                'city_id' => 2,
            ),
            462 => 
            array (
                'id' => 463,
                'code' => '264',
                'name' => 'TC Tổng Hợp Thành phố Hồ Chí Minh',
                'district_id' => 42,
                'city_id' => 2,
            ),
            463 => 
            array (
                'id' => 464,
                'code' => '269',
                'name' => 'THPT Nguyễn Tri Phương',
                'district_id' => 42,
                'city_id' => 2,
            ),
            464 => 
            array (
                'id' => 465,
                'code' => '274',
                'name' => 'TC KTKT Sài Gòn',
                'district_id' => 42,
                'city_id' => 2,
            ),
            465 => 
            array (
                'id' => 466,
                'code' => '046',
                'name' => 'THPT Nguyễn Thượng Hiền',
                'district_id' => 43,
                'city_id' => 2,
            ),
            466 => 
            array (
                'id' => 467,
                'code' => '047',
                'name' => 'THPT Nguyễn Thái Bình',
                'district_id' => 43,
                'city_id' => 2,
            ),
            467 => 
            array (
                'id' => 468,
                'code' => '048',
                'name' => 'THPT Nguyễn Chí Thanh',
                'district_id' => 43,
                'city_id' => 2,
            ),
            468 => 
            array (
                'id' => 469,
                'code' => '049',
                'name' => 'THPT Lý Tự Trọng',
                'district_id' => 43,
                'city_id' => 2,
            ),
            469 => 
            array (
                'id' => 470,
                'code' => '102',
                'name' => 'THCS và THPT Nguyễn Khuyến',
                'district_id' => 43,
                'city_id' => 2,
            ),
            470 => 
            array (
                'id' => 471,
                'code' => '105',
                'name' => 'THCS-THPT Thái Bình',
                'district_id' => 43,
                'city_id' => 2,
            ),
            471 => 
            array (
                'id' => 472,
                'code' => '106',
                'name' => 'THPT Thanh Bình',
                'district_id' => 43,
                'city_id' => 2,
            ),
            472 => 
            array (
                'id' => 473,
                'code' => '108',
                'name' => 'THCS và THPT Việt Thanh',
                'district_id' => 43,
                'city_id' => 2,
            ),
            473 => 
            array (
                'id' => 474,
                'code' => '131',
                'name' => 'TTGDTX Quận Tân Bình',
                'district_id' => 43,
                'city_id' => 2,
            ),
            474 => 
            array (
                'id' => 475,
                'code' => '145',
                'name' => 'TTGDTX TN xung phong',
                'district_id' => 43,
                'city_id' => 2,
            ),
            475 => 
            array (
                'id' => 476,
                'code' => '158',
                'name' => 'ĐH DL Hồng Bàng',
                'district_id' => 43,
                'city_id' => 2,
            ),
            476 => 
            array (
                'id' => 477,
                'code' => '169',
                'name' => 'CĐKT Lý Tự Trọng TP. HCM',
                'district_id' => 43,
                'city_id' => 2,
            ),
            477 => 
            array (
                'id' => 478,
                'code' => '184',
                'name' => 'THCS và THPT Hiền Vương',
                'district_id' => 43,
                'city_id' => 2,
            ),
            478 => 
            array (
                'id' => 479,
                'code' => '191',
                'name' => 'THPT Tân Trào',
                'district_id' => 43,
                'city_id' => 2,
            ),
            479 => 
            array (
                'id' => 480,
                'code' => '221',
                'name' => 'TH, THCS, & THPT Thái Bình Dương',
                'district_id' => 43,
                'city_id' => 2,
            ),
            480 => 
            array (
                'id' => 481,
                'code' => '222',
                'name' => 'THCS & THPT Hoàng Diệu',
                'district_id' => 43,
                'city_id' => 2,
            ),
            481 => 
            array (
                'id' => 482,
                'code' => '223',
                'name' => 'THCS & THPT Bác ái',
                'district_id' => 43,
                'city_id' => 2,
            ),
            482 => 
            array (
                'id' => 483,
                'code' => '276',
                'name' => 'TC TC KT TH Sài Gòn',
                'district_id' => 43,
                'city_id' => 2,
            ),
            483 => 
            array (
                'id' => 484,
                'code' => '284',
                'name' => 'THPT Hai Bà Trưng',
                'district_id' => 43,
                'city_id' => 2,
            ),
            484 => 
            array (
                'id' => 485,
                'code' => '286',
                'name' => 'THPT Thủ Khoa Huân',
                'district_id' => 43,
                'city_id' => 2,
            ),
            485 => 
            array (
                'id' => 486,
                'code' => '050',
                'name' => 'THPT Tân Bình',
                'district_id' => 44,
                'city_id' => 2,
            ),
            486 => 
            array (
                'id' => 487,
                'code' => '051',
                'name' => 'THPT Trần Phú',
                'district_id' => 44,
                'city_id' => 2,
            ),
            487 => 
            array (
                'id' => 488,
                'code' => '086',
                'name' => 'THPT Huỳnh Thúc Kháng',
                'district_id' => 44,
                'city_id' => 2,
            ),
            488 => 
            array (
                'id' => 489,
                'code' => '098',
                'name' => 'THCS và THPT Hồng Đức',
                'district_id' => 44,
                'city_id' => 2,
            ),
            489 => 
            array (
                'id' => 490,
                'code' => '099',
                'name' => 'THCS và THPT Nhân Văn',
                'district_id' => 44,
                'city_id' => 2,
            ),
            490 => 
            array (
                'id' => 491,
                'code' => '101',
                'name' => 'THCS-THPT Trí Đức',
                'district_id' => 44,
                'city_id' => 2,
            ),
            491 => 
            array (
                'id' => 492,
                'code' => '104',
                'name' => 'TH-THCS và THPT Hoà Bình',
                'district_id' => 44,
                'city_id' => 2,
            ),
            492 => 
            array (
                'id' => 493,
                'code' => '132',
                'name' => 'TTGDTX Quận Tân Phú',
                'district_id' => 44,
                'city_id' => 2,
            ),
            493 => 
            array (
                'id' => 494,
                'code' => '147',
                'name' => 'THPT Vĩnh Viễn',
                'district_id' => 44,
                'city_id' => 2,
            ),
            494 => 
            array (
                'id' => 495,
                'code' => '171',
                'name' => 'TH-THCS và THPT Quốc Văn Sài Gòn',
                'district_id' => 44,
                'city_id' => 2,
            ),
            495 => 
            array (
                'id' => 496,
                'code' => '177',
                'name' => 'THPT Đông Du',
                'district_id' => 44,
                'city_id' => 2,
            ),
            496 => 
            array (
                'id' => 497,
                'code' => '180',
                'name' => 'THPT Minh Đức',
                'district_id' => 44,
                'city_id' => 2,
            ),
            497 => 
            array (
                'id' => 498,
                'code' => '181',
                'name' => 'THCS và THPT Tân Phú',
                'district_id' => 44,
                'city_id' => 2,
            ),
            498 => 
            array (
                'id' => 499,
                'code' => '182',
                'name' => 'THPT Tây Thạnh',
                'district_id' => 44,
                'city_id' => 2,
            ),
            499 => 
            array (
                'id' => 500,
                'code' => '195',
                'name' => 'THPT Trần Quốc Toản',
                'district_id' => 44,
                'city_id' => 2,
            ),
        ));
        \DB::table('organization_school')->insert(array (
            0 => 
            array (
                'id' => 501,
                'code' => '197',
                'name' => 'THCS & THPT Khai Minh',
                'district_id' => 44,
                'city_id' => 2,
            ),
            1 => 
            array (
                'id' => 502,
                'code' => '225',
                'name' => 'THCS & THPT Đinh Tiên Hoàng',
                'district_id' => 44,
                'city_id' => 2,
            ),
            2 => 
            array (
                'id' => 503,
                'code' => '226',
                'name' => 'THPT An Dương Vương',
                'district_id' => 44,
                'city_id' => 2,
            ),
            3 => 
            array (
                'id' => 504,
                'code' => '227',
                'name' => 'THPT Nhân Việt',
                'district_id' => 44,
                'city_id' => 2,
            ),
            4 => 
            array (
                'id' => 505,
                'code' => '228',
                'name' => 'THPT Đông á',
                'district_id' => 44,
                'city_id' => 2,
            ),
            5 => 
            array (
                'id' => 506,
                'code' => '229',
                'name' => 'THPT Thành Nhân',
                'district_id' => 44,
                'city_id' => 2,
            ),
            6 => 
            array (
                'id' => 507,
                'code' => '230',
                'name' => 'TCKTKT Tây Nam á',
                'district_id' => 44,
                'city_id' => 2,
            ),
            7 => 
            array (
                'id' => 508,
                'code' => '240',
                'name' => 'C Đ nghề Giao thông vận tải TW3',
                'district_id' => 44,
                'city_id' => 2,
            ),
            8 => 
            array (
                'id' => 509,
                'code' => '255',
                'name' => 'THPT Nam Việt',
                'district_id' => 44,
                'city_id' => 2,
            ),
            9 => 
            array (
                'id' => 510,
                'code' => '265',
                'name' => 'THPT Trần Cao Vân',
                'district_id' => 44,
                'city_id' => 2,
            ),
            10 => 
            array (
                'id' => 511,
                'code' => '279',
                'name' => 'TC Y dược Kỹ thương',
                'district_id' => 44,
                'city_id' => 2,
            ),
            11 => 
            array (
                'id' => 512,
                'code' => '285',
                'name' => 'ĐH Công Nghiệp Thực Phẩm TPHCM',
                'district_id' => 44,
                'city_id' => 2,
            ),
            12 => 
            array (
                'id' => 513,
                'code' => '052',
                'name' => 'THPT Thanh Đa',
                'district_id' => 45,
                'city_id' => 2,
            ),
            13 => 
            array (
                'id' => 514,
                'code' => '053',
                'name' => 'THPT Võ Thị Sáu',
                'district_id' => 45,
                'city_id' => 2,
            ),
            14 => 
            array (
                'id' => 515,
                'code' => '054',
                'name' => 'THPT Phan Đăng Lưu',
                'district_id' => 45,
                'city_id' => 2,
            ),
            15 => 
            array (
                'id' => 516,
                'code' => '055',
                'name' => 'THPT Hoàng HoaThám',
                'district_id' => 45,
                'city_id' => 2,
            ),
            16 => 
            array (
                'id' => 517,
                'code' => '056',
                'name' => 'THPT Gia Định',
                'district_id' => 45,
                'city_id' => 2,
            ),
            17 => 
            array (
                'id' => 518,
                'code' => '109',
                'name' => 'THPT Hưng Đạo',
                'district_id' => 45,
                'city_id' => 2,
            ),
            18 => 
            array (
                'id' => 519,
                'code' => '110',
                'name' => 'THPT Đông Đô',
                'district_id' => 45,
                'city_id' => 2,
            ),
            19 => 
            array (
                'id' => 520,
                'code' => '133',
                'name' => 'TTGDTX Quận Bình Thạnh',
                'district_id' => 45,
                'city_id' => 2,
            ),
            20 => 
            array (
                'id' => 521,
                'code' => '144',
                'name' => 'TTGDTX Gia Định',
                'district_id' => 45,
                'city_id' => 2,
            ),
            21 => 
            array (
                'id' => 522,
                'code' => '149',
                'name' => 'BTVH Tôn Đức Thắng',
                'district_id' => 45,
                'city_id' => 2,
            ),
            22 => 
            array (
                'id' => 523,
                'code' => '159',
                'name' => 'ĐH DL Văn Hiến',
                'district_id' => 45,
                'city_id' => 2,
            ),
            23 => 
            array (
                'id' => 524,
                'code' => '214',
                'name' => 'THPT Lam Sơn',
                'district_id' => 45,
                'city_id' => 2,
            ),
            24 => 
            array (
                'id' => 525,
                'code' => '215',
                'name' => 'BTVH Thanh Đa',
                'district_id' => 45,
                'city_id' => 2,
            ),
            25 => 
            array (
                'id' => 526,
                'code' => '247',
                'name' => 'TC nghề Du lịch và Tiếp thị Quốc tế',
                'district_id' => 45,
                'city_id' => 2,
            ),
            26 => 
            array (
                'id' => 527,
                'code' => '251',
                'name' => 'TC nghề Công nghiệp & Xây dựng FICO',
                'district_id' => 45,
                'city_id' => 2,
            ),
            27 => 
            array (
                'id' => 528,
                'code' => '281',
                'name' => 'THPT Trần Văn Giàu',
                'district_id' => 45,
                'city_id' => 2,
            ),
            28 => 
            array (
                'id' => 529,
                'code' => '057',
                'name' => 'THPT Phú Nhuận',
                'district_id' => 46,
                'city_id' => 2,
            ),
            29 => 
            array (
                'id' => 530,
                'code' => '058',
                'name' => 'THPT Hàn Thuyên',
                'district_id' => 46,
                'city_id' => 2,
            ),
            30 => 
            array (
                'id' => 531,
                'code' => '112',
                'name' => 'Tiểu học,THCS và THPT Quốc tế',
                'district_id' => 46,
                'city_id' => 2,
            ),
            31 => 
            array (
                'id' => 532,
                'code' => '134',
                'name' => 'TTGDTX Quận Phú Nhuận',
                'district_id' => 46,
                'city_id' => 2,
            ),
            32 => 
            array (
                'id' => 533,
                'code' => '150',
                'name' => 'BTVH ĐH Ngọai Thương',
                'district_id' => 46,
                'city_id' => 2,
            ),
            33 => 
            array (
                'id' => 534,
                'code' => '201',
                'name' => 'THPT quốc tế  Việt úc',
                'district_id' => 46,
                'city_id' => 2,
            ),
            34 => 
            array (
                'id' => 535,
                'code' => '220',
                'name' => 'THCS & THPT Việt Mỹ',
                'district_id' => 46,
                'city_id' => 2,
            ),
            35 => 
            array (
                'id' => 536,
                'code' => '246',
                'name' => 'TC nghề Công nghệ Bách khoa',
                'district_id' => 46,
                'city_id' => 2,
            ),
            36 => 
            array (
                'id' => 537,
                'code' => '256',
                'name' => 'THCS-THPT Việt Anh',
                'district_id' => 46,
                'city_id' => 2,
            ),
            37 => 
            array (
                'id' => 538,
                'code' => '275',
                'name' => 'TC Mai Linh',
                'district_id' => 46,
                'city_id' => 2,
            ),
            38 => 
            array (
                'id' => 539,
                'code' => '059',
                'name' => 'THPT Ng Hữu Huân',
                'district_id' => 47,
                'city_id' => 2,
            ),
            39 => 
            array (
                'id' => 540,
                'code' => '060',
                'name' => 'THPT Hiệp Bình',
                'district_id' => 47,
                'city_id' => 2,
            ),
            40 => 
            array (
                'id' => 541,
                'code' => '061',
                'name' => 'THPT Thủ Đức',
                'district_id' => 47,
                'city_id' => 2,
            ),
            41 => 
            array (
                'id' => 542,
                'code' => '062',
                'name' => 'THPT Tam Phú',
                'district_id' => 47,
                'city_id' => 2,
            ),
            42 => 
            array (
                'id' => 543,
                'code' => '115',
                'name' => 'THPT Phương Nam',
                'district_id' => 47,
                'city_id' => 2,
            ),
            43 => 
            array (
                'id' => 544,
                'code' => '135',
                'name' => 'TTGDTX Quận Thủ Đức',
                'district_id' => 47,
                'city_id' => 2,
            ),
            44 => 
            array (
                'id' => 545,
                'code' => '167',
                'name' => 'CĐ Công nghệ Thủ Đức',
                'district_id' => 47,
                'city_id' => 2,
            ),
            45 => 
            array (
                'id' => 546,
                'code' => '243',
                'name' => 'TC nghề Thủ Đức',
                'district_id' => 47,
                'city_id' => 2,
            ),
            46 => 
            array (
                'id' => 547,
                'code' => '252',
                'name' => 'TC nghề Công nghiệp tàu thủy II',
                'district_id' => 47,
                'city_id' => 2,
            ),
            47 => 
            array (
                'id' => 548,
                'code' => '266',
                'name' => 'THPT Bách Việt',
                'district_id' => 47,
                'city_id' => 2,
            ),
            48 => 
            array (
                'id' => 549,
                'code' => '272',
                'name' => 'TC Đại Việt',
                'district_id' => 47,
                'city_id' => 2,
            ),
            49 => 
            array (
                'id' => 550,
                'code' => '273',
                'name' => 'TC Đông Dương',
                'district_id' => 47,
                'city_id' => 2,
            ),
            50 => 
            array (
                'id' => 551,
                'code' => '287',
                'name' => 'THPT Đào Sơn Tây',
                'district_id' => 47,
                'city_id' => 2,
            ),
            51 => 
            array (
                'id' => 552,
                'code' => '063',
                'name' => 'THPT An Lạc',
                'district_id' => 48,
                'city_id' => 2,
            ),
            52 => 
            array (
                'id' => 553,
                'code' => '116',
                'name' => 'THPT Ngôi Sao',
                'district_id' => 48,
                'city_id' => 2,
            ),
            53 => 
            array (
                'id' => 554,
                'code' => '117',
                'name' => 'THPT Phan Châu Trinh',
                'district_id' => 48,
                'city_id' => 2,
            ),
            54 => 
            array (
                'id' => 555,
                'code' => '136',
                'name' => 'TTGDTX Quận Bình Tân',
                'district_id' => 48,
                'city_id' => 2,
            ),
            55 => 
            array (
                'id' => 556,
                'code' => '170',
                'name' => 'TC Quang Trung',
                'district_id' => 48,
                'city_id' => 2,
            ),
            56 => 
            array (
                'id' => 557,
                'code' => '194',
                'name' => 'THPT Vĩnh Lộc',
                'district_id' => 48,
                'city_id' => 2,
            ),
            57 => 
            array (
                'id' => 558,
                'code' => '196',
                'name' => 'THPT Chu Văn An',
                'district_id' => 48,
                'city_id' => 2,
            ),
            58 => 
            array (
                'id' => 559,
                'code' => '258',
                'name' => 'THPT Hàm Nghi',
                'district_id' => 48,
                'city_id' => 2,
            ),
            59 => 
            array (
                'id' => 560,
                'code' => '260',
                'name' => 'THPT Bình Hưng Hòa',
                'district_id' => 48,
                'city_id' => 2,
            ),
            60 => 
            array (
                'id' => 561,
                'code' => '262',
                'name' => 'THPT Nguyễn Hữu Cảnh',
                'district_id' => 48,
                'city_id' => 2,
            ),
            61 => 
            array (
                'id' => 562,
                'code' => '271',
                'name' => 'THPT Bình Tân',
                'district_id' => 48,
                'city_id' => 2,
            ),
            62 => 
            array (
                'id' => 563,
                'code' => '064',
                'name' => 'THPT Đa Phước',
                'district_id' => 49,
                'city_id' => 2,
            ),
            63 => 
            array (
                'id' => 564,
                'code' => '065',
                'name' => 'THPT Lê Minh Xuân',
                'district_id' => 49,
                'city_id' => 2,
            ),
            64 => 
            array (
                'id' => 565,
                'code' => '066',
                'name' => 'THPT Bình Chánh',
                'district_id' => 49,
                'city_id' => 2,
            ),
            65 => 
            array (
                'id' => 566,
                'code' => '137',
                'name' => 'TTGDTX H. Bình Chánh',
                'district_id' => 49,
                'city_id' => 2,
            ),
            66 => 
            array (
                'id' => 567,
                'code' => '179',
                'name' => 'THPT Bắc Mỹ',
                'district_id' => 49,
                'city_id' => 2,
            ),
            67 => 
            array (
                'id' => 568,
                'code' => '213',
                'name' => 'TH-THCS-THPT quốc tế Canada',
                'district_id' => 49,
                'city_id' => 2,
            ),
            68 => 
            array (
                'id' => 569,
                'code' => '289',
                'name' => 'THPT Tân Túc',
                'district_id' => 49,
                'city_id' => 2,
            ),
            69 => 
            array (
                'id' => 570,
                'code' => '290',
                'name' => 'THPT Vĩnh Lộc B',
                'district_id' => 49,
                'city_id' => 2,
            ),
            70 => 
            array (
                'id' => 571,
                'code' => '067',
                'name' => 'THPT Củ Chi',
                'district_id' => 50,
                'city_id' => 2,
            ),
            71 => 
            array (
                'id' => 572,
                'code' => '068',
                'name' => 'THPT Trung Phú',
                'district_id' => 50,
                'city_id' => 2,
            ),
            72 => 
            array (
                'id' => 573,
                'code' => '069',
                'name' => 'THPT Quang Trung',
                'district_id' => 50,
                'city_id' => 2,
            ),
            73 => 
            array (
                'id' => 574,
                'code' => '070',
                'name' => 'THPT Trung Lập',
                'district_id' => 50,
                'city_id' => 2,
            ),
            74 => 
            array (
                'id' => 575,
                'code' => '071',
                'name' => 'THPT An Nhơn Tây',
                'district_id' => 50,
                'city_id' => 2,
            ),
            75 => 
            array (
                'id' => 576,
                'code' => '072',
                'name' => 'THPT Tân Thông Hội',
                'district_id' => 50,
                'city_id' => 2,
            ),
            76 => 
            array (
                'id' => 577,
                'code' => '073',
                'name' => 'THPT Phú Hòa',
                'district_id' => 50,
                'city_id' => 2,
            ),
            77 => 
            array (
                'id' => 578,
                'code' => '074',
                'name' => 'Thiếu Sinh Quân',
                'district_id' => 50,
                'city_id' => 2,
            ),
            78 => 
            array (
                'id' => 579,
                'code' => '138',
                'name' => 'TTGDTX H. Củ Chi',
                'district_id' => 50,
                'city_id' => 2,
            ),
            79 => 
            array (
                'id' => 580,
                'code' => '232',
                'name' => 'TC Bách Khoa Sài Gòn',
                'district_id' => 50,
                'city_id' => 2,
            ),
            80 => 
            array (
                'id' => 581,
                'code' => '233',
                'name' => 'TC Tây sài Gòn',
                'district_id' => 50,
                'city_id' => 2,
            ),
            81 => 
            array (
                'id' => 582,
                'code' => '242',
                'name' => 'TC nghề Củ Chi',
                'district_id' => 50,
                'city_id' => 2,
            ),
            82 => 
            array (
                'id' => 583,
                'code' => '075',
                'name' => 'THPT Lý Thường Kiệt',
                'district_id' => 51,
                'city_id' => 2,
            ),
            83 => 
            array (
                'id' => 584,
                'code' => '076',
                'name' => 'THPT Nguyễn Hữu Cầu',
                'district_id' => 51,
                'city_id' => 2,
            ),
            84 => 
            array (
                'id' => 585,
                'code' => '077',
                'name' => 'THPT Bà Điểm',
                'district_id' => 51,
                'city_id' => 2,
            ),
            85 => 
            array (
                'id' => 586,
                'code' => '078',
                'name' => 'THPT Nguyễn Văn Cừ',
                'district_id' => 51,
                'city_id' => 2,
            ),
            86 => 
            array (
                'id' => 587,
                'code' => '079',
                'name' => 'THPT Nguyễn Hữu Tiến',
                'district_id' => 51,
                'city_id' => 2,
            ),
            87 => 
            array (
                'id' => 588,
                'code' => '139',
                'name' => 'TTGDTX H. Hóc Môn',
                'district_id' => 51,
                'city_id' => 2,
            ),
            88 => 
            array (
                'id' => 589,
                'code' => '270',
                'name' => 'THPT Phạm Văn Sáng',
                'district_id' => 51,
                'city_id' => 2,
            ),
            89 => 
            array (
                'id' => 590,
                'code' => '280',
                'name' => 'TC KTKT H. Hóc Môn',
                'district_id' => 51,
                'city_id' => 2,
            ),
            90 => 
            array (
                'id' => 591,
                'code' => '080',
                'name' => 'THPT Long Thới',
                'district_id' => 52,
                'city_id' => 2,
            ),
            91 => 
            array (
                'id' => 592,
                'code' => '140',
                'name' => 'TTGDTX H. Nhà Bè',
                'district_id' => 52,
                'city_id' => 2,
            ),
            92 => 
            array (
                'id' => 593,
                'code' => '204',
                'name' => 'THPT Phước Kiển',
                'district_id' => 52,
                'city_id' => 2,
            ),
            93 => 
            array (
                'id' => 594,
                'code' => '291',
                'name' => 'THPT Dương Văn Dương',
                'district_id' => 52,
                'city_id' => 2,
            ),
            94 => 
            array (
                'id' => 595,
                'code' => '081',
                'name' => 'THPT Cần Thạnh',
                'district_id' => 53,
                'city_id' => 2,
            ),
            95 => 
            array (
                'id' => 596,
                'code' => '082',
                'name' => 'THPT Bình Khánh',
                'district_id' => 53,
                'city_id' => 2,
            ),
            96 => 
            array (
                'id' => 597,
                'code' => '141',
                'name' => 'TTGDTX H. Cần Giờ',
                'district_id' => 53,
                'city_id' => 2,
            ),
            97 => 
            array (
                'id' => 598,
                'code' => '203',
                'name' => 'THPT An Nghĩa',
                'district_id' => 53,
                'city_id' => 2,
            ),
            98 => 
            array (
                'id' => 599,
                'code' => '001',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 54,
                'city_id' => 3,
            ),
            99 => 
            array (
                'id' => 600,
                'code' => '002',
                'name' => 'THPT Hồng Bàng',
                'district_id' => 54,
                'city_id' => 3,
            ),
            100 => 
            array (
                'id' => 601,
                'code' => '003',
                'name' => 'THPT Lương Thế Vinh',
                'district_id' => 54,
                'city_id' => 3,
            ),
            101 => 
            array (
                'id' => 602,
                'code' => '005',
                'name' => 'TT DN&GDTX Hồng Bàng',
                'district_id' => 54,
                'city_id' => 3,
            ),
            102 => 
            array (
                'id' => 603,
                'code' => '007',
                'name' => 'THPT Ngô Quyền',
                'district_id' => 55,
                'city_id' => 3,
            ),
            103 => 
            array (
                'id' => 604,
                'code' => '008',
                'name' => 'THPT Trần Nguyên Hãn',
                'district_id' => 55,
                'city_id' => 3,
            ),
            104 => 
            array (
                'id' => 605,
                'code' => '009',
                'name' => 'THPT Lê Chân',
                'district_id' => 55,
                'city_id' => 3,
            ),
            105 => 
            array (
                'id' => 606,
                'code' => '010',
                'name' => 'THPT Lý Thái Tổ',
                'district_id' => 55,
                'city_id' => 3,
            ),
            106 => 
            array (
                'id' => 607,
                'code' => '011',
                'name' => 'TT GDTX Hải Phòng',
                'district_id' => 55,
                'city_id' => 3,
            ),
            107 => 
            array (
                'id' => 608,
                'code' => '016',
                'name' => 'PT NCH Nguyễn Tất Thành',
                'district_id' => 55,
                'city_id' => 3,
            ),
            108 => 
            array (
                'id' => 609,
                'code' => '086',
                'name' => 'TT DN&GDTX Lê Chân',
                'district_id' => 55,
                'city_id' => 3,
            ),
            109 => 
            array (
                'id' => 610,
                'code' => '013',
                'name' => 'THPT Chuyên Trần Phú',
                'district_id' => 56,
                'city_id' => 3,
            ),
            110 => 
            array (
                'id' => 611,
                'code' => '014',
                'name' => 'THPT Thái Phiên',
                'district_id' => 56,
                'city_id' => 3,
            ),
            111 => 
            array (
                'id' => 612,
                'code' => '015',
                'name' => 'THPT Hàng Hải',
                'district_id' => 56,
                'city_id' => 3,
            ),
            112 => 
            array (
                'id' => 613,
                'code' => '017',
                'name' => 'THPT Thăng Long',
                'district_id' => 56,
                'city_id' => 3,
            ),
            113 => 
            array (
                'id' => 614,
                'code' => '018',
                'name' => 'THPT Marie Curie',
                'district_id' => 56,
                'city_id' => 3,
            ),
            114 => 
            array (
                'id' => 615,
                'code' => '019',
                'name' => 'THPT Hermann Gmeiner',
                'district_id' => 56,
                'city_id' => 3,
            ),
            115 => 
            array (
                'id' => 616,
                'code' => '020',
                'name' => 'THPT Anhxtanh',
                'district_id' => 56,
                'city_id' => 3,
            ),
            116 => 
            array (
                'id' => 617,
                'code' => '021',
                'name' => 'TT DN&GDTX Ngô Quyền',
                'district_id' => 56,
                'city_id' => 3,
            ),
            117 => 
            array (
                'id' => 618,
                'code' => '081',
                'name' => 'THPT Lương Khánh Thiện',
                'district_id' => 56,
                'city_id' => 3,
            ),
            118 => 
            array (
                'id' => 619,
                'code' => '023',
                'name' => 'THPT Kiến An',
                'district_id' => 57,
                'city_id' => 3,
            ),
            119 => 
            array (
                'id' => 620,
                'code' => '024',
                'name' => 'THPT Phan Đăng Lưu',
                'district_id' => 57,
                'city_id' => 3,
            ),
            120 => 
            array (
                'id' => 621,
                'code' => '026',
                'name' => 'TT DN&GDTX Kiến An',
                'district_id' => 57,
                'city_id' => 3,
            ),
            121 => 
            array (
                'id' => 622,
                'code' => '079',
                'name' => 'THPT Đồng Hòa',
                'district_id' => 57,
                'city_id' => 3,
            ),
            122 => 
            array (
                'id' => 623,
                'code' => '025',
                'name' => 'THPT Hải An',
                'district_id' => 58,
                'city_id' => 3,
            ),
            123 => 
            array (
                'id' => 624,
                'code' => '028',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 58,
                'city_id' => 3,
            ),
            124 => 
            array (
                'id' => 625,
                'code' => '029',
                'name' => 'THPT Phan Chu Trinh',
                'district_id' => 58,
                'city_id' => 3,
            ),
            125 => 
            array (
                'id' => 626,
                'code' => '030',
                'name' => 'TT DN&GDTX Hải An',
                'district_id' => 58,
                'city_id' => 3,
            ),
            126 => 
            array (
                'id' => 627,
                'code' => '032',
                'name' => 'THPT  Đồ Sơn',
                'district_id' => 59,
                'city_id' => 3,
            ),
            127 => 
            array (
                'id' => 628,
                'code' => '033',
                'name' => 'THPT Nội Trú Đồ Sơn',
                'district_id' => 59,
                'city_id' => 3,
            ),
            128 => 
            array (
                'id' => 629,
                'code' => '034',
                'name' => 'TT DN&GDTX Đồ Sơn',
                'district_id' => 59,
                'city_id' => 3,
            ),
            129 => 
            array (
                'id' => 630,
                'code' => '036',
                'name' => 'THPT An Lão',
                'district_id' => 60,
                'city_id' => 3,
            ),
            130 => 
            array (
                'id' => 631,
                'code' => '037',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 60,
                'city_id' => 3,
            ),
            131 => 
            array (
                'id' => 632,
                'code' => '039',
                'name' => 'THPT Trần Tất Văn',
                'district_id' => 60,
                'city_id' => 3,
            ),
            132 => 
            array (
                'id' => 633,
                'code' => '040',
                'name' => 'TT DN&GDTX An Lão',
                'district_id' => 60,
                'city_id' => 3,
            ),
            133 => 
            array (
                'id' => 634,
                'code' => '084',
                'name' => 'THPT Quốc Tuấn',
                'district_id' => 60,
                'city_id' => 3,
            ),
            134 => 
            array (
                'id' => 635,
                'code' => '042',
                'name' => 'THPT Kiến Thụy',
                'district_id' => 61,
                'city_id' => 3,
            ),
            135 => 
            array (
                'id' => 636,
                'code' => '043',
                'name' => 'THPT Nguyễn Đức Cảnh',
                'district_id' => 61,
                'city_id' => 3,
            ),
            136 => 
            array (
                'id' => 637,
                'code' => '045',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 61,
                'city_id' => 3,
            ),
            137 => 
            array (
                'id' => 638,
                'code' => '046',
                'name' => 'TT DN&GDTX Kiến Thụy',
                'district_id' => 61,
                'city_id' => 3,
            ),
            138 => 
            array (
                'id' => 639,
                'code' => '082',
                'name' => 'THPT Thụy Hương',
                'district_id' => 61,
                'city_id' => 3,
            ),
            139 => 
            array (
                'id' => 640,
                'code' => '048',
                'name' => 'THPT Phạm Ngũ Lão',
                'district_id' => 62,
                'city_id' => 3,
            ),
            140 => 
            array (
                'id' => 641,
                'code' => '049',
                'name' => 'THPT Bạch Đằng',
                'district_id' => 62,
                'city_id' => 3,
            ),
            141 => 
            array (
                'id' => 642,
                'code' => '050',
                'name' => 'THPT Quang Trung',
                'district_id' => 62,
                'city_id' => 3,
            ),
            142 => 
            array (
                'id' => 643,
                'code' => '051',
                'name' => 'THPT Lý Thường Kiệt',
                'district_id' => 62,
                'city_id' => 3,
            ),
            143 => 
            array (
                'id' => 644,
                'code' => '052',
                'name' => 'THPT Lê ích Mộc',
                'district_id' => 62,
                'city_id' => 3,
            ),
            144 => 
            array (
                'id' => 645,
                'code' => '053',
                'name' => 'THPT Thủy Sơn',
                'district_id' => 62,
                'city_id' => 3,
            ),
            145 => 
            array (
                'id' => 646,
                'code' => '054',
                'name' => 'THPT 25/10',
                'district_id' => 62,
                'city_id' => 3,
            ),
            146 => 
            array (
                'id' => 647,
                'code' => '055',
                'name' => 'THPT Nam Triệu',
                'district_id' => 62,
                'city_id' => 3,
            ),
            147 => 
            array (
                'id' => 648,
                'code' => '056',
                'name' => 'TT DN&GDTX Thủy Nguyên',
                'district_id' => 62,
                'city_id' => 3,
            ),
            148 => 
            array (
                'id' => 649,
                'code' => '058',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 63,
                'city_id' => 3,
            ),
            149 => 
            array (
                'id' => 650,
                'code' => '059',
                'name' => 'THPT An Dương',
                'district_id' => 63,
                'city_id' => 3,
            ),
            150 => 
            array (
                'id' => 651,
                'code' => '060',
                'name' => 'THPT Tân An',
                'district_id' => 63,
                'city_id' => 3,
            ),
            151 => 
            array (
                'id' => 652,
                'code' => '061',
                'name' => 'THPT An Hải',
                'district_id' => 63,
                'city_id' => 3,
            ),
            152 => 
            array (
                'id' => 653,
                'code' => '062',
                'name' => 'TT DN&GDTX An Dương',
                'district_id' => 63,
                'city_id' => 3,
            ),
            153 => 
            array (
                'id' => 654,
                'code' => '064',
                'name' => 'THPT Tiên Lãng',
                'district_id' => 64,
                'city_id' => 3,
            ),
            154 => 
            array (
                'id' => 655,
                'code' => '065',
                'name' => 'THPT Toàn Thắng',
                'district_id' => 64,
                'city_id' => 3,
            ),
            155 => 
            array (
                'id' => 656,
                'code' => '066',
                'name' => 'THPT Hùng Thắng',
                'district_id' => 64,
                'city_id' => 3,
            ),
            156 => 
            array (
                'id' => 657,
                'code' => '067',
                'name' => 'THPT Nhữ Văn Lan',
                'district_id' => 64,
                'city_id' => 3,
            ),
            157 => 
            array (
                'id' => 658,
                'code' => '068',
                'name' => 'TT DN&GDTX Tiên Lãng',
                'district_id' => 64,
                'city_id' => 3,
            ),
            158 => 
            array (
                'id' => 659,
                'code' => '070',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 65,
                'city_id' => 3,
            ),
            159 => 
            array (
                'id' => 660,
                'code' => '071',
                'name' => 'THPT Tô Hiệu',
                'district_id' => 65,
                'city_id' => 3,
            ),
            160 => 
            array (
                'id' => 661,
                'code' => '072',
                'name' => 'THPT Vĩnh Bảo',
                'district_id' => 65,
                'city_id' => 3,
            ),
            161 => 
            array (
                'id' => 662,
                'code' => '073',
                'name' => 'THPT Cộng Hiền',
                'district_id' => 65,
                'city_id' => 3,
            ),
            162 => 
            array (
                'id' => 663,
                'code' => '074',
                'name' => 'THPT Nguyễn Khuyến',
                'district_id' => 65,
                'city_id' => 3,
            ),
            163 => 
            array (
                'id' => 664,
                'code' => '075',
                'name' => 'TT DN&GDTX Vĩnh Bảo',
                'district_id' => 65,
                'city_id' => 3,
            ),
            164 => 
            array (
                'id' => 665,
                'code' => '077',
                'name' => 'THPT Cát Bà',
                'district_id' => 66,
                'city_id' => 3,
            ),
            165 => 
            array (
                'id' => 666,
                'code' => '078',
                'name' => 'THPT Cát Hải',
                'district_id' => 66,
                'city_id' => 3,
            ),
            166 => 
            array (
                'id' => 667,
                'code' => '083',
                'name' => 'TT DN&GDTX Cát Hải',
                'district_id' => 66,
                'city_id' => 3,
            ),
            167 => 
            array (
                'id' => 668,
                'code' => '044',
                'name' => 'THPT Mạc Đĩnh Chi',
                'district_id' => 67,
                'city_id' => 3,
            ),
            168 => 
            array (
                'id' => 669,
                'code' => '089',
                'name' => 'TT DN&GDTX Q.Dương Kinh',
                'district_id' => 67,
                'city_id' => 3,
            ),
            169 => 
            array (
                'id' => 670,
                'code' => '001',
                'name' => 'THPT Nguyễn Hiền',
                'district_id' => 68,
                'city_id' => 4,
            ),
            170 => 
            array (
                'id' => 671,
                'code' => '002',
                'name' => 'THPT Phan Châu Trinh',
                'district_id' => 68,
                'city_id' => 4,
            ),
            171 => 
            array (
                'id' => 672,
                'code' => '003',
                'name' => 'THPT Trần Phú',
                'district_id' => 68,
                'city_id' => 4,
            ),
            172 => 
            array (
                'id' => 673,
                'code' => '004',
                'name' => 'THPT TT Diên Hồng',
                'district_id' => 68,
                'city_id' => 4,
            ),
            173 => 
            array (
                'id' => 674,
                'code' => '006',
                'name' => 'TTGDTX-HN Hải Châu+BTBK+CĐCN',
                'district_id' => 68,
                'city_id' => 4,
            ),
            174 => 
            array (
                'id' => 675,
                'code' => '030',
                'name' => 'CĐ Đông á',
                'district_id' => 68,
                'city_id' => 4,
            ),
            175 => 
            array (
                'id' => 676,
                'code' => '031',
                'name' => 'CĐ Phương Đông',
                'district_id' => 68,
                'city_id' => 4,
            ),
            176 => 
            array (
                'id' => 677,
                'code' => '032',
                'name' => 'TC CKN Việt Tiến',
                'district_id' => 68,
                'city_id' => 4,
            ),
            177 => 
            array (
                'id' => 678,
                'code' => '033',
                'name' => 'TC KTNV Thăng Long',
                'district_id' => 68,
                'city_id' => 4,
            ),
            178 => 
            array (
                'id' => 679,
                'code' => '039',
                'name' => 'CĐ nghề Nguyễn Văn Trỗi',
                'district_id' => 68,
                'city_id' => 4,
            ),
            179 => 
            array (
                'id' => 680,
                'code' => '040',
                'name' => 'CĐ nghề Du Lịch Đà Nẵng',
                'district_id' => 68,
                'city_id' => 4,
            ),
            180 => 
            array (
                'id' => 681,
                'code' => '044',
                'name' => 'TC nghề Giao thông Công chính ĐN',
                'district_id' => 68,
                'city_id' => 4,
            ),
            181 => 
            array (
                'id' => 682,
                'code' => '046',
                'name' => 'TC cấp nghề Cao Thắng Đà Nẵng',
                'district_id' => 68,
                'city_id' => 4,
            ),
            182 => 
            array (
                'id' => 683,
                'code' => '007',
                'name' => 'THPT Thái Phiên',
                'district_id' => 69,
                'city_id' => 4,
            ),
            183 => 
            array (
                'id' => 684,
                'code' => '008',
                'name' => 'TT GDTX-HN Thanh Khê',
                'district_id' => 69,
                'city_id' => 4,
            ),
            184 => 
            array (
                'id' => 685,
                'code' => '009',
                'name' => 'THPT TT Quang Trung',
                'district_id' => 69,
                'city_id' => 4,
            ),
            185 => 
            array (
                'id' => 686,
                'code' => '028',
                'name' => 'THPT Thanh Khê',
                'district_id' => 69,
                'city_id' => 4,
            ),
            186 => 
            array (
                'id' => 687,
                'code' => '038',
                'name' => 'CĐ nghề Hoàng Diệu',
                'district_id' => 69,
                'city_id' => 4,
            ),
            187 => 
            array (
                'id' => 688,
                'code' => '041',
                'name' => 'TC nghề Giao thông vận tải Đường bộ',
                'district_id' => 69,
                'city_id' => 4,
            ),
            188 => 
            array (
                'id' => 689,
                'code' => '043',
                'name' => 'TC nghề Công nghiệp Tàu thuỷ III',
                'district_id' => 69,
                'city_id' => 4,
            ),
            189 => 
            array (
                'id' => 690,
                'code' => '047',
                'name' => 'TC nghề Công nghiệp tàu thuỷ Đà Nẵng',
                'district_id' => 69,
                'city_id' => 4,
            ),
            190 => 
            array (
                'id' => 691,
                'code' => '048',
                'name' => 'TC cấp nghề Việt  úc',
                'district_id' => 69,
                'city_id' => 4,
            ),
            191 => 
            array (
                'id' => 692,
                'code' => '005',
                'name' => 'THPT Chuyên Lê Quý Đôn',
                'district_id' => 70,
                'city_id' => 4,
            ),
            192 => 
            array (
                'id' => 693,
                'code' => '010',
                'name' => 'THPT Hoàng Hoa Thám',
                'district_id' => 70,
                'city_id' => 4,
            ),
            193 => 
            array (
                'id' => 694,
                'code' => '011',
                'name' => 'THPT Ngô Quyền',
                'district_id' => 70,
                'city_id' => 4,
            ),
            194 => 
            array (
                'id' => 695,
                'code' => '012',
                'name' => 'TT GDTX Thành Phố',
                'district_id' => 70,
                'city_id' => 4,
            ),
            195 => 
            array (
                'id' => 696,
                'code' => '013',
                'name' => 'TT KTTH-HN Sơn Trà',
                'district_id' => 70,
                'city_id' => 4,
            ),
            196 => 
            array (
                'id' => 697,
                'code' => '027',
                'name' => 'THPT Tôn Thất Tùng',
                'district_id' => 70,
                'city_id' => 4,
            ),
            197 => 
            array (
                'id' => 698,
                'code' => '037',
                'name' => 'CĐ nghề Đà Nẵng',
                'district_id' => 70,
                'city_id' => 4,
            ),
            198 => 
            array (
                'id' => 699,
                'code' => '045',
                'name' => 'TC nghề Kỹ thuật Công nghệ Đà Nẵng',
                'district_id' => 70,
                'city_id' => 4,
            ),
            199 => 
            array (
                'id' => 700,
                'code' => '014',
                'name' => 'THPT Ngũ Hành Sơn',
                'district_id' => 71,
                'city_id' => 4,
            ),
            200 => 
            array (
                'id' => 701,
                'code' => '015',
                'name' => 'TT GDTX -HN N.H. Sơn+ BTĐH Kinh tế',
                'district_id' => 71,
                'city_id' => 4,
            ),
            201 => 
            array (
                'id' => 702,
                'code' => '016',
                'name' => 'Dân Lập Hermann Gmeiner',
                'district_id' => 71,
                'city_id' => 4,
            ),
            202 => 
            array (
                'id' => 703,
                'code' => '034',
                'name' => 'TC KT-KT Miền Trung',
                'district_id' => 71,
                'city_id' => 4,
            ),
            203 => 
            array (
                'id' => 704,
                'code' => '042',
                'name' => 'TC nghề số 5',
                'district_id' => 71,
                'city_id' => 4,
            ),
            204 => 
            array (
                'id' => 705,
                'code' => '017',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 72,
                'city_id' => 4,
            ),
            205 => 
            array (
                'id' => 706,
                'code' => '018',
                'name' => 'THPT TT Khai Trí',
                'district_id' => 72,
                'city_id' => 4,
            ),
            206 => 
            array (
                'id' => 707,
                'code' => '019',
                'name' => 'TT GDTX-HN Liên Chiểu',
                'district_id' => 72,
                'city_id' => 4,
            ),
            207 => 
            array (
                'id' => 708,
                'code' => '026',
                'name' => 'THPT Nguyễn Thượng Hiền',
                'district_id' => 72,
                'city_id' => 4,
            ),
            208 => 
            array (
                'id' => 709,
                'code' => '035',
                'name' => 'TC KT-NV Việt á',
                'district_id' => 72,
                'city_id' => 4,
            ),
            209 => 
            array (
                'id' => 710,
                'code' => '021',
                'name' => 'THPT Phan Thành Tài',
                'district_id' => 73,
                'city_id' => 4,
            ),
            210 => 
            array (
                'id' => 711,
                'code' => '022',
                'name' => 'THPT Ông ích Khiêm',
                'district_id' => 73,
                'city_id' => 4,
            ),
            211 => 
            array (
                'id' => 712,
                'code' => '023',
                'name' => 'THPT Phạm Phú Thứ',
                'district_id' => 73,
                'city_id' => 4,
            ),
            212 => 
            array (
                'id' => 713,
                'code' => '025',
                'name' => 'TT GDTX-HN Hòa Vang',
                'district_id' => 73,
                'city_id' => 4,
            ),
            213 => 
            array (
                'id' => 714,
                'code' => '020',
                'name' => 'THPT Hòa Vang',
                'district_id' => 74,
                'city_id' => 4,
            ),
            214 => 
            array (
                'id' => 715,
                'code' => '024',
                'name' => 'TT GDTX-HN Cẩm Lệ',
                'district_id' => 74,
                'city_id' => 4,
            ),
            215 => 
            array (
                'id' => 716,
                'code' => '029',
                'name' => 'THPT Cẩm Lệ',
                'district_id' => 74,
                'city_id' => 4,
            ),
            216 => 
            array (
                'id' => 717,
                'code' => '036',
                'name' => 'TC KT-KT Đức Minh',
                'district_id' => 74,
                'city_id' => 4,
            ),
            217 => 
            array (
                'id' => 718,
                'code' => '012',
                'name' => 'THPT Chuyên',
                'district_id' => 75,
                'city_id' => 5,
            ),
            218 => 
            array (
                'id' => 719,
                'code' => '013',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 75,
                'city_id' => 5,
            ),
            219 => 
            array (
                'id' => 720,
                'code' => '014',
                'name' => 'THPT Ngọc Hà',
                'district_id' => 75,
                'city_id' => 5,
            ),
            220 => 
            array (
                'id' => 721,
                'code' => '015',
                'name' => 'PTDT Nội trú tỉnh',
                'district_id' => 75,
                'city_id' => 5,
            ),
            221 => 
            array (
                'id' => 722,
                'code' => '031',
                'name' => 'GDTX Tỉnh',
                'district_id' => 75,
                'city_id' => 5,
            ),
            222 => 
            array (
                'id' => 723,
                'code' => '050',
                'name' => 'CĐ Nghề Hà Giang',
                'district_id' => 75,
                'city_id' => 5,
            ),
            223 => 
            array (
                'id' => 724,
                'code' => '054',
                'name' => 'CĐSP Hà Giang',
                'district_id' => 75,
                'city_id' => 5,
            ),
            224 => 
            array (
                'id' => 725,
                'code' => '026',
                'name' => 'THPT Đồng Văn',
                'district_id' => 76,
                'city_id' => 5,
            ),
            225 => 
            array (
                'id' => 726,
                'code' => '032',
                'name' => 'GDTX Đồng Văn',
                'district_id' => 76,
                'city_id' => 5,
            ),
            226 => 
            array (
                'id' => 727,
                'code' => '017',
                'name' => 'THPT Mèo Vạc',
                'district_id' => 77,
                'city_id' => 5,
            ),
            227 => 
            array (
                'id' => 728,
                'code' => '033',
                'name' => 'GDTX Mèo Vạc',
                'district_id' => 77,
                'city_id' => 5,
            ),
            228 => 
            array (
                'id' => 729,
                'code' => '018',
                'name' => 'THPT Yên Minh',
                'district_id' => 78,
                'city_id' => 5,
            ),
            229 => 
            array (
                'id' => 730,
                'code' => '034',
                'name' => 'GDTX Yên Minh',
                'district_id' => 78,
                'city_id' => 5,
            ),
            230 => 
            array (
                'id' => 731,
                'code' => '045',
                'name' => 'PT DTNT cấp 2-3 Yên Minh',
                'district_id' => 78,
                'city_id' => 5,
            ),
            231 => 
            array (
                'id' => 732,
                'code' => '051',
                'name' => 'THPT Mậu Duệ',
                'district_id' => 78,
                'city_id' => 5,
            ),
            232 => 
            array (
                'id' => 733,
                'code' => '019',
                'name' => 'THPT Quản Bạ',
                'district_id' => 79,
                'city_id' => 5,
            ),
            233 => 
            array (
                'id' => 734,
                'code' => '035',
                'name' => 'GDTX Quản Bạ',
                'district_id' => 79,
                'city_id' => 5,
            ),
            234 => 
            array (
                'id' => 735,
                'code' => '053',
                'name' => 'THPT  Quyết Tiến',
                'district_id' => 79,
                'city_id' => 5,
            ),
            235 => 
            array (
                'id' => 736,
                'code' => '020',
                'name' => 'THPT Vị Xuyên',
                'district_id' => 80,
                'city_id' => 5,
            ),
            236 => 
            array (
                'id' => 737,
                'code' => '021',
                'name' => 'THPT Việt Lâm',
                'district_id' => 80,
                'city_id' => 5,
            ),
            237 => 
            array (
                'id' => 738,
                'code' => '036',
                'name' => 'GDTX Vị Xuyên',
                'district_id' => 80,
                'city_id' => 5,
            ),
            238 => 
            array (
                'id' => 739,
                'code' => '043',
                'name' => 'PT Cấp 2-3 Phương Tiến',
                'district_id' => 80,
                'city_id' => 5,
            ),
            239 => 
            array (
                'id' => 740,
                'code' => '048',
                'name' => 'THCS và THPT Linh Hồ',
                'district_id' => 80,
                'city_id' => 5,
            ),
            240 => 
            array (
                'id' => 741,
                'code' => '056',
                'name' => 'THCS&THPT Tùng Bá',
                'district_id' => 80,
                'city_id' => 5,
            ),
            241 => 
            array (
                'id' => 742,
                'code' => '022',
                'name' => 'THPT Bắc Mê',
                'district_id' => 81,
                'city_id' => 5,
            ),
            242 => 
            array (
                'id' => 743,
                'code' => '037',
                'name' => 'GDTX Bắc Mê',
                'district_id' => 81,
                'city_id' => 5,
            ),
            243 => 
            array (
                'id' => 744,
                'code' => '047',
                'name' => 'THCS và THPT Minh Ngọc',
                'district_id' => 81,
                'city_id' => 5,
            ),
            244 => 
            array (
                'id' => 745,
                'code' => '023',
                'name' => 'THPT Hoàng Su Phì',
                'district_id' => 82,
                'city_id' => 5,
            ),
            245 => 
            array (
                'id' => 746,
                'code' => '038',
                'name' => 'GDTX Hoàng Su Phì',
                'district_id' => 82,
                'city_id' => 5,
            ),
            246 => 
            array (
                'id' => 747,
                'code' => '041',
                'name' => 'THPT Thông Nguyên',
                'district_id' => 82,
                'city_id' => 5,
            ),
            247 => 
            array (
                'id' => 748,
                'code' => '024',
                'name' => 'THPT Xín Mần',
                'district_id' => 83,
                'city_id' => 5,
            ),
            248 => 
            array (
                'id' => 749,
                'code' => '039',
                'name' => 'GDTX Xín Mần',
                'district_id' => 83,
                'city_id' => 5,
            ),
            249 => 
            array (
                'id' => 750,
                'code' => '049',
                'name' => 'THCS và THPT Nà Chì',
                'district_id' => 83,
                'city_id' => 5,
            ),
            250 => 
            array (
                'id' => 751,
                'code' => '016',
                'name' => 'THPT Đồng Yên',
                'district_id' => 84,
                'city_id' => 5,
            ),
            251 => 
            array (
                'id' => 752,
                'code' => '025',
                'name' => 'THPT Việt Vinh',
                'district_id' => 84,
                'city_id' => 5,
            ),
            252 => 
            array (
                'id' => 753,
                'code' => '028',
                'name' => 'THPT Hùng An',
                'district_id' => 84,
                'city_id' => 5,
            ),
            253 => 
            array (
                'id' => 754,
                'code' => '029',
                'name' => 'THPT Liên Hiệp',
                'district_id' => 84,
                'city_id' => 5,
            ),
            254 => 
            array (
                'id' => 755,
                'code' => '030',
                'name' => 'PT Cấp 2-3 Tân Quang',
                'district_id' => 84,
                'city_id' => 5,
            ),
            255 => 
            array (
                'id' => 756,
                'code' => '040',
                'name' => 'GDTX Bắc Quang',
                'district_id' => 84,
                'city_id' => 5,
            ),
            256 => 
            array (
                'id' => 757,
                'code' => '046',
                'name' => 'PT DTNT cấp 2-3 Bắc Quang',
                'district_id' => 84,
                'city_id' => 5,
            ),
            257 => 
            array (
                'id' => 758,
                'code' => '052',
                'name' => 'THPT  Kim Ngọc',
                'district_id' => 84,
                'city_id' => 5,
            ),
            258 => 
            array (
                'id' => 759,
                'code' => '055',
                'name' => 'Trung cấp Nghề Bắc Quang',
                'district_id' => 84,
                'city_id' => 5,
            ),
            259 => 
            array (
                'id' => 760,
                'code' => '027',
                'name' => 'THPT Xuân Giang',
                'district_id' => 85,
                'city_id' => 5,
            ),
            260 => 
            array (
                'id' => 761,
                'code' => '042',
                'name' => 'GDTX Quang Bình',
                'district_id' => 85,
                'city_id' => 5,
            ),
            261 => 
            array (
                'id' => 762,
                'code' => '044',
                'name' => 'THPT Quang Bình',
                'district_id' => 85,
                'city_id' => 5,
            ),
            262 => 
            array (
                'id' => 763,
                'code' => '000',
                'name' => 'Sở GD&ĐT Cao Bằng',
                'district_id' => 86,
                'city_id' => 6,
            ),
            263 => 
            array (
                'id' => 764,
                'code' => '002',
                'name' => 'THPT DTNT Cao Bằng',
                'district_id' => 86,
                'city_id' => 6,
            ),
            264 => 
            array (
                'id' => 765,
                'code' => '003',
                'name' => 'THPT Thành phố Cao Bằng',
                'district_id' => 86,
                'city_id' => 6,
            ),
            265 => 
            array (
                'id' => 766,
                'code' => '004',
                'name' => 'THPT Chuyên Cao Bằng',
                'district_id' => 86,
                'city_id' => 6,
            ),
            266 => 
            array (
                'id' => 767,
                'code' => '005',
                'name' => 'TT GDTX Thành phố Cao Bằng',
                'district_id' => 86,
                'city_id' => 6,
            ),
            267 => 
            array (
                'id' => 768,
                'code' => '006',
                'name' => 'TT KTTH-HN tỉnh Cao Bằng',
                'district_id' => 86,
                'city_id' => 6,
            ),
            268 => 
            array (
                'id' => 769,
                'code' => '028',
                'name' => 'THPT Cao Bình',
                'district_id' => 86,
                'city_id' => 6,
            ),
            269 => 
            array (
                'id' => 770,
                'code' => '044',
                'name' => 'THPT Bế Văn Đàn',
                'district_id' => 86,
                'city_id' => 6,
            ),
            270 => 
            array (
                'id' => 771,
                'code' => '058',
                'name' => 'TTGDTX Tỉnh',
                'district_id' => 86,
                'city_id' => 6,
            ),
            271 => 
            array (
                'id' => 772,
                'code' => '059',
                'name' => 'TC nghề Cao Bằng',
                'district_id' => 86,
                'city_id' => 6,
            ),
            272 => 
            array (
                'id' => 773,
                'code' => '008',
                'name' => 'THPT Bảo Lạc',
                'district_id' => 87,
                'city_id' => 6,
            ),
            273 => 
            array (
                'id' => 774,
                'code' => '055',
                'name' => 'THPT Bản Ngà',
                'district_id' => 87,
                'city_id' => 6,
            ),
            274 => 
            array (
                'id' => 775,
                'code' => '056',
                'name' => 'TTGDTX Bảo Lạc',
                'district_id' => 87,
                'city_id' => 6,
            ),
            275 => 
            array (
                'id' => 776,
                'code' => '010',
                'name' => 'THPT Thông Nông',
                'district_id' => 88,
                'city_id' => 6,
            ),
            276 => 
            array (
                'id' => 777,
                'code' => '053',
                'name' => 'TTGDTX Thông Nông',
                'district_id' => 88,
                'city_id' => 6,
            ),
            277 => 
            array (
                'id' => 778,
                'code' => '012',
                'name' => 'THPT Hà Quảng',
                'district_id' => 89,
                'city_id' => 6,
            ),
            278 => 
            array (
                'id' => 779,
                'code' => '013',
                'name' => 'THPT Nà Giàng',
                'district_id' => 89,
                'city_id' => 6,
            ),
            279 => 
            array (
                'id' => 780,
                'code' => '047',
                'name' => 'TTGDTX Hà Quảng',
                'district_id' => 89,
                'city_id' => 6,
            ),
            280 => 
            array (
                'id' => 781,
                'code' => '054',
                'name' => 'THPT Lục Khu',
                'district_id' => 89,
                'city_id' => 6,
            ),
            281 => 
            array (
                'id' => 782,
                'code' => '015',
                'name' => 'THPT Trà Lĩnh',
                'district_id' => 90,
                'city_id' => 6,
            ),
            282 => 
            array (
                'id' => 783,
                'code' => '016',
                'name' => 'THPT Quang Trung',
                'district_id' => 90,
                'city_id' => 6,
            ),
            283 => 
            array (
                'id' => 784,
                'code' => '046',
                'name' => 'TTGDTX Trà Lĩnh',
                'district_id' => 90,
                'city_id' => 6,
            ),
            284 => 
            array (
                'id' => 785,
                'code' => '018',
                'name' => 'THPT Trùng Khánh',
                'district_id' => 91,
                'city_id' => 6,
            ),
            285 => 
            array (
                'id' => 786,
                'code' => '019',
                'name' => 'THPT Pò Tấu',
                'district_id' => 91,
                'city_id' => 6,
            ),
            286 => 
            array (
                'id' => 787,
                'code' => '020',
                'name' => 'THPT Thông Huề',
                'district_id' => 91,
                'city_id' => 6,
            ),
            287 => 
            array (
                'id' => 788,
                'code' => '021',
                'name' => 'TTGDTX Trùng Khánh',
                'district_id' => 91,
                'city_id' => 6,
            ),
            288 => 
            array (
                'id' => 789,
                'code' => '023',
                'name' => 'THPT Nguyên Bình',
                'district_id' => 92,
                'city_id' => 6,
            ),
            289 => 
            array (
                'id' => 790,
                'code' => '024',
                'name' => 'THPT Tinh Túc',
                'district_id' => 92,
                'city_id' => 6,
            ),
            290 => 
            array (
                'id' => 791,
                'code' => '025',
                'name' => 'THPT Nà Bao',
                'district_id' => 92,
                'city_id' => 6,
            ),
            291 => 
            array (
                'id' => 792,
                'code' => '052',
                'name' => 'TTGDTX  Nguyên Bình',
                'district_id' => 92,
                'city_id' => 6,
            ),
            292 => 
            array (
                'id' => 793,
                'code' => '027',
                'name' => 'THPT Hoà An',
                'district_id' => 93,
                'city_id' => 6,
            ),
            293 => 
            array (
                'id' => 794,
                'code' => '029',
                'name' => 'TTGDTX Hoà An',
                'district_id' => 93,
                'city_id' => 6,
            ),
            294 => 
            array (
                'id' => 795,
                'code' => '031',
                'name' => 'THPT Quảng Uyên',
                'district_id' => 94,
                'city_id' => 6,
            ),
            295 => 
            array (
                'id' => 796,
                'code' => '032',
                'name' => 'THPT Đống Đa',
                'district_id' => 94,
                'city_id' => 6,
            ),
            296 => 
            array (
                'id' => 797,
                'code' => '033',
                'name' => 'TT GDTX Quảng Uyên',
                'district_id' => 94,
                'city_id' => 6,
            ),
            297 => 
            array (
                'id' => 798,
                'code' => '035',
                'name' => 'THPT Thạch An',
                'district_id' => 95,
                'city_id' => 6,
            ),
            298 => 
            array (
                'id' => 799,
                'code' => '036',
                'name' => 'THPT Canh Tân',
                'district_id' => 95,
                'city_id' => 6,
            ),
            299 => 
            array (
                'id' => 800,
                'code' => '048',
                'name' => 'TTGDTX Thạch An',
                'district_id' => 95,
                'city_id' => 6,
            ),
            300 => 
            array (
                'id' => 801,
                'code' => '038',
                'name' => 'THPT Hạ Lang',
                'district_id' => 96,
                'city_id' => 6,
            ),
            301 => 
            array (
                'id' => 802,
                'code' => '039',
                'name' => 'THPT Bằng Ca',
                'district_id' => 96,
                'city_id' => 6,
            ),
            302 => 
            array (
                'id' => 803,
                'code' => '051',
                'name' => 'TTGDTX Hạ Lang',
                'district_id' => 96,
                'city_id' => 6,
            ),
            303 => 
            array (
                'id' => 804,
                'code' => '041',
                'name' => 'THPT Bảo Lâm',
                'district_id' => 97,
                'city_id' => 6,
            ),
            304 => 
            array (
                'id' => 805,
                'code' => '050',
                'name' => 'TTGDTX Bảo Lâm',
                'district_id' => 97,
                'city_id' => 6,
            ),
            305 => 
            array (
                'id' => 806,
                'code' => '057',
                'name' => 'THPT Lý Bôn',
                'district_id' => 97,
                'city_id' => 6,
            ),
            306 => 
            array (
                'id' => 807,
                'code' => '043',
                'name' => 'THPT Phục Hoà',
                'district_id' => 98,
                'city_id' => 6,
            ),
            307 => 
            array (
                'id' => 808,
                'code' => '045',
                'name' => 'THPT Cách Linh',
                'district_id' => 98,
                'city_id' => 6,
            ),
            308 => 
            array (
                'id' => 809,
                'code' => '049',
                'name' => 'TTGDTX Phục Hoà',
                'district_id' => 98,
                'city_id' => 6,
            ),
            309 => 
            array (
                'id' => 810,
                'code' => '001',
                'name' => 'THPT Chuyên Lê Quý Đôn',
                'district_id' => 99,
                'city_id' => 7,
            ),
            310 => 
            array (
                'id' => 811,
                'code' => '002',
                'name' => 'THPT Thành Phố',
                'district_id' => 99,
                'city_id' => 7,
            ),
            311 => 
            array (
                'id' => 812,
                'code' => '003',
                'name' => 'THPT Quyết Thắng',
                'district_id' => 99,
                'city_id' => 7,
            ),
            312 => 
            array (
                'id' => 813,
                'code' => '022',
                'name' => 'THPT Dân tộc Nội trú Tỉnh',
                'district_id' => 99,
                'city_id' => 7,
            ),
            313 => 
            array (
                'id' => 814,
                'code' => '030',
                'name' => 'Trung tâm GDTX - Hướng nghiệp Tỉnh',
                'district_id' => 99,
                'city_id' => 7,
            ),
            314 => 
            array (
                'id' => 815,
                'code' => '040',
                'name' => 'Trường Trung cấp nghề  Lai Châu',
                'district_id' => 99,
                'city_id' => 7,
            ),
            315 => 
            array (
                'id' => 816,
                'code' => '004',
                'name' => 'THPT Bình Lư',
                'district_id' => 100,
                'city_id' => 7,
            ),
            316 => 
            array (
                'id' => 817,
                'code' => '031',
                'name' => 'Trung tâm GDTX huyện Tam Đường',
                'district_id' => 100,
                'city_id' => 7,
            ),
            317 => 
            array (
                'id' => 818,
                'code' => '005',
                'name' => 'THPT Phong Thổ',
                'district_id' => 101,
                'city_id' => 7,
            ),
            318 => 
            array (
                'id' => 819,
                'code' => '006',
                'name' => 'THPT Mường So',
                'district_id' => 101,
                'city_id' => 7,
            ),
            319 => 
            array (
                'id' => 820,
                'code' => '007',
                'name' => 'THPT Dào San',
                'district_id' => 101,
                'city_id' => 7,
            ),
            320 => 
            array (
                'id' => 821,
                'code' => '032',
                'name' => 'Trung tâm GDTX huyện Phong Thổ',
                'district_id' => 101,
                'city_id' => 7,
            ),
            321 => 
            array (
                'id' => 822,
                'code' => '008',
                'name' => 'THPT Sìn Hồ',
                'district_id' => 102,
                'city_id' => 7,
            ),
            322 => 
            array (
                'id' => 823,
                'code' => '009',
                'name' => 'THPT Nậm Tăm',
                'district_id' => 102,
                'city_id' => 7,
            ),
            323 => 
            array (
                'id' => 824,
                'code' => '024',
                'name' => 'PTDTNT huyện Sìn Hồ',
                'district_id' => 102,
                'city_id' => 7,
            ),
            324 => 
            array (
                'id' => 825,
                'code' => '033',
                'name' => 'Trung tâm GDTX huyện Sìn Hồ',
                'district_id' => 102,
                'city_id' => 7,
            ),
            325 => 
            array (
                'id' => 826,
                'code' => '010',
                'name' => 'THPT Mường Tè',
                'district_id' => 103,
                'city_id' => 7,
            ),
            326 => 
            array (
                'id' => 827,
                'code' => '023',
                'name' => 'THPT Dân tộc Nội trú Ka Lăng',
                'district_id' => 103,
                'city_id' => 7,
            ),
            327 => 
            array (
                'id' => 828,
                'code' => '034',
                'name' => 'Trung tâm GDTX Mường Tè',
                'district_id' => 103,
                'city_id' => 7,
            ),
            328 => 
            array (
                'id' => 829,
                'code' => '011',
                'name' => 'THPT Than Uyên',
                'district_id' => 104,
                'city_id' => 7,
            ),
            329 => 
            array (
                'id' => 830,
                'code' => '012',
                'name' => 'THPT Mường Than',
                'district_id' => 104,
                'city_id' => 7,
            ),
            330 => 
            array (
                'id' => 831,
                'code' => '013',
                'name' => 'THPT Mường Kim',
                'district_id' => 104,
                'city_id' => 7,
            ),
            331 => 
            array (
                'id' => 832,
                'code' => '025',
                'name' => 'PTDTNT huyện Than  Uyên',
                'district_id' => 104,
                'city_id' => 7,
            ),
            332 => 
            array (
                'id' => 833,
                'code' => '035',
                'name' => 'Trung tâm GDTX huyện Than Uyên',
                'district_id' => 104,
                'city_id' => 7,
            ),
            333 => 
            array (
                'id' => 834,
                'code' => '014',
                'name' => 'THPT Tân uyên',
                'district_id' => 105,
                'city_id' => 7,
            ),
            334 => 
            array (
                'id' => 835,
                'code' => '015',
                'name' => 'THPT Trung Đồng',
                'district_id' => 105,
                'city_id' => 7,
            ),
            335 => 
            array (
                'id' => 836,
                'code' => '036',
                'name' => 'Trung tâm GDTX huyện Tân Uyên',
                'district_id' => 105,
                'city_id' => 7,
            ),
            336 => 
            array (
                'id' => 837,
                'code' => '016',
                'name' => 'THPT Nậm Nhùn',
                'district_id' => 106,
                'city_id' => 7,
            ),
            337 => 
            array (
                'id' => 838,
                'code' => '010',
                'name' => 'THPT số 1 Bắc Hà',
                'district_id' => 107,
                'city_id' => 8,
            ),
            338 => 
            array (
                'id' => 839,
                'code' => '011',
                'name' => 'THPT số 2 Bắc Hà',
                'district_id' => 107,
                'city_id' => 8,
            ),
            339 => 
            array (
                'id' => 840,
                'code' => '012',
                'name' => 'PTDT nội trú THCS và THPT H.Bắc Hà',
                'district_id' => 107,
                'city_id' => 8,
            ),
            340 => 
            array (
                'id' => 841,
                'code' => '036',
                'name' => 'TT Dạy nghề và GDTX Bắc Hà',
                'district_id' => 107,
                'city_id' => 8,
            ),
            341 => 
            array (
                'id' => 842,
                'code' => '046',
                'name' => 'TT GDTX Bắc Hà',
                'district_id' => 107,
                'city_id' => 8,
            ),
            342 => 
            array (
                'id' => 843,
                'code' => '023',
                'name' => 'THPT Số 1 Sa Pa',
                'district_id' => 108,
                'city_id' => 8,
            ),
            343 => 
            array (
                'id' => 844,
                'code' => '024',
                'name' => 'THPT số 2 Sa Pa',
                'district_id' => 108,
                'city_id' => 8,
            ),
            344 => 
            array (
                'id' => 845,
                'code' => '025',
                'name' => 'PTDT nội trú THCS và THPT H.Sa Pa',
                'district_id' => 108,
                'city_id' => 8,
            ),
            345 => 
            array (
                'id' => 846,
                'code' => '040',
                'name' => 'TT Dạy nghề và GDTX Sa Pa',
                'district_id' => 108,
                'city_id' => 8,
            ),
            346 => 
            array (
                'id' => 847,
                'code' => '050',
                'name' => 'TT GDTX Sa Pa',
                'district_id' => 108,
                'city_id' => 8,
            ),
            347 => 
            array (
                'id' => 848,
                'code' => '007',
                'name' => 'THPT Số 1 Bát Xát',
                'district_id' => 109,
                'city_id' => 8,
            ),
            348 => 
            array (
                'id' => 849,
                'code' => '008',
                'name' => 'THPT Số 2 Bát Xát',
                'district_id' => 109,
                'city_id' => 8,
            ),
            349 => 
            array (
                'id' => 850,
                'code' => '009',
                'name' => 'THCS và THPT huyện Bát Xát',
                'district_id' => 109,
                'city_id' => 8,
            ),
            350 => 
            array (
                'id' => 851,
                'code' => '035',
                'name' => 'TT Dạy nghề và GDTX Bát Xát',
                'district_id' => 109,
                'city_id' => 8,
            ),
            351 => 
            array (
                'id' => 852,
                'code' => '045',
                'name' => 'TT GDTX Bát Xát',
                'district_id' => 109,
                'city_id' => 8,
            ),
            352 => 
            array (
                'id' => 853,
                'code' => '026',
                'name' => 'THPT Số 1 Si Ma Cai',
                'district_id' => 110,
                'city_id' => 8,
            ),
            353 => 
            array (
                'id' => 854,
                'code' => '027',
                'name' => 'THPT Số 2 Si ma cai',
                'district_id' => 110,
                'city_id' => 8,
            ),
            354 => 
            array (
                'id' => 855,
                'code' => '028',
                'name' => 'PTDT nội trú THCS và THPT H.Si Ma Cai',
                'district_id' => 110,
                'city_id' => 8,
            ),
            355 => 
            array (
                'id' => 856,
                'code' => '041',
                'name' => 'TT Dạy nghề và GDTX Si Ma Cai',
                'district_id' => 110,
                'city_id' => 8,
            ),
            356 => 
            array (
                'id' => 857,
                'code' => '051',
                'name' => 'TT GDTX Si Ma Cai',
                'district_id' => 110,
                'city_id' => 8,
            ),
            357 => 
            array (
                'id' => 858,
                'code' => '001',
                'name' => 'THPT số 1 Bảo Thắng',
                'district_id' => 111,
                'city_id' => 8,
            ),
            358 => 
            array (
                'id' => 859,
                'code' => '002',
                'name' => 'THPT số 2 Bảo Thắng',
                'district_id' => 111,
                'city_id' => 8,
            ),
            359 => 
            array (
                'id' => 860,
                'code' => '003',
                'name' => 'THPT số 3 Bảo Thắng',
                'district_id' => 111,
                'city_id' => 8,
            ),
            360 => 
            array (
                'id' => 861,
                'code' => '033',
                'name' => 'TT Dạy nghề và GDTX Bảo Thắng',
                'district_id' => 111,
                'city_id' => 8,
            ),
            361 => 
            array (
                'id' => 862,
                'code' => '043',
                'name' => 'TT GDTX Bảo Thắng',
                'district_id' => 111,
                'city_id' => 8,
            ),
            362 => 
            array (
                'id' => 863,
                'code' => '029',
                'name' => 'THPT số 1 Văn Bàn',
                'district_id' => 112,
                'city_id' => 8,
            ),
            363 => 
            array (
                'id' => 864,
                'code' => '030',
                'name' => 'THPT số 2 Văn Bàn',
                'district_id' => 112,
                'city_id' => 8,
            ),
            364 => 
            array (
                'id' => 865,
                'code' => '031',
                'name' => 'THPT số 3 Văn Bàn',
                'district_id' => 112,
                'city_id' => 8,
            ),
            365 => 
            array (
                'id' => 866,
                'code' => '032',
                'name' => 'THPT số 4 Văn Bàn',
                'district_id' => 112,
                'city_id' => 8,
            ),
            366 => 
            array (
                'id' => 867,
                'code' => '042',
                'name' => 'TT Dạy nghề và GDTX Văn Bàn',
                'district_id' => 112,
                'city_id' => 8,
            ),
            367 => 
            array (
                'id' => 868,
                'code' => '052',
                'name' => 'TT GDTX Văn Bàn',
                'district_id' => 112,
                'city_id' => 8,
            ),
            368 => 
            array (
                'id' => 869,
                'code' => '013',
                'name' => 'THPT số 1 Tp Lào Cai',
                'district_id' => 113,
                'city_id' => 8,
            ),
            369 => 
            array (
                'id' => 870,
                'code' => '014',
                'name' => 'THPT số 2 Tp Lào Cai',
                'district_id' => 113,
                'city_id' => 8,
            ),
            370 => 
            array (
                'id' => 871,
                'code' => '015',
                'name' => 'THPT số 3 Tp Lào Cai',
                'district_id' => 113,
                'city_id' => 8,
            ),
            371 => 
            array (
                'id' => 872,
                'code' => '016',
                'name' => 'THPT số 4 Tp Lào Cai',
                'district_id' => 113,
                'city_id' => 8,
            ),
            372 => 
            array (
                'id' => 873,
                'code' => '017',
                'name' => 'THPT DTNT tỉnh',
                'district_id' => 113,
                'city_id' => 8,
            ),
            373 => 
            array (
                'id' => 874,
                'code' => '018',
                'name' => 'THPT Chuyên tỉnh Lào Cai',
                'district_id' => 113,
                'city_id' => 8,
            ),
            374 => 
            array (
                'id' => 875,
                'code' => '037',
                'name' => 'TT Dạy nghề và GDTX TP Lào Cai',
                'district_id' => 113,
                'city_id' => 8,
            ),
            375 => 
            array (
                'id' => 876,
                'code' => '038',
                'name' => 'TTKT-TH-HN-DN&GDTX tỉnh',
                'district_id' => 113,
                'city_id' => 8,
            ),
            376 => 
            array (
                'id' => 877,
                'code' => '047',
                'name' => 'TT GDTX số 1 TP Lào Cai',
                'district_id' => 113,
                'city_id' => 8,
            ),
            377 => 
            array (
                'id' => 878,
                'code' => '048',
                'name' => 'TT GDTX số 2 TP Lào Cai',
                'district_id' => 113,
                'city_id' => 8,
            ),
            378 => 
            array (
                'id' => 879,
                'code' => '053',
                'name' => 'CĐ nghề tỉnh Lào Cai',
                'district_id' => 113,
                'city_id' => 8,
            ),
            379 => 
            array (
                'id' => 880,
                'code' => '004',
                'name' => 'THPT số 1 Bảo Yên',
                'district_id' => 114,
                'city_id' => 8,
            ),
            380 => 
            array (
                'id' => 881,
                'code' => '005',
                'name' => 'THPT số 2 Bảo Yên',
                'district_id' => 114,
                'city_id' => 8,
            ),
            381 => 
            array (
                'id' => 882,
                'code' => '006',
                'name' => 'THPT số 3 Bảo Yên',
                'district_id' => 114,
                'city_id' => 8,
            ),
            382 => 
            array (
                'id' => 883,
                'code' => '034',
                'name' => 'TT Dạy nghề và GDTX Bảo Yên',
                'district_id' => 114,
                'city_id' => 8,
            ),
            383 => 
            array (
                'id' => 884,
                'code' => '044',
                'name' => 'TT GDTX Bảo Yên',
                'district_id' => 114,
                'city_id' => 8,
            ),
            384 => 
            array (
                'id' => 885,
                'code' => '019',
                'name' => 'THPT số 1 Mường Khương',
                'district_id' => 115,
                'city_id' => 8,
            ),
            385 => 
            array (
                'id' => 886,
                'code' => '020',
                'name' => 'THPT số 2 Mường Khương',
                'district_id' => 115,
                'city_id' => 8,
            ),
            386 => 
            array (
                'id' => 887,
                'code' => '021',
                'name' => 'THPT số 3 Mường Khương',
                'district_id' => 115,
                'city_id' => 8,
            ),
            387 => 
            array (
                'id' => 888,
                'code' => '022',
                'name' => 'PTDT nội trú THCS và THPT H.Mường Khương',
                'district_id' => 115,
                'city_id' => 8,
            ),
            388 => 
            array (
                'id' => 889,
                'code' => '039',
                'name' => 'TT Dạy nghề và GDTX Mường Khương',
                'district_id' => 115,
                'city_id' => 8,
            ),
            389 => 
            array (
                'id' => 890,
                'code' => '049',
                'name' => 'TT GDTX Mường Khương',
                'district_id' => 115,
                'city_id' => 8,
            ),
            390 => 
            array (
                'id' => 891,
                'code' => '008',
                'name' => 'Trường Phổ thông Dân tộc nội trú THPT tỉnh Tuyên Quang',
                'district_id' => 116,
                'city_id' => 9,
            ),
            391 => 
            array (
                'id' => 892,
                'code' => '009',
                'name' => 'THPT Chuyên tỉnh',
                'district_id' => 116,
                'city_id' => 9,
            ),
            392 => 
            array (
                'id' => 893,
                'code' => '010',
                'name' => 'THPT Tân Trào',
                'district_id' => 116,
                'city_id' => 9,
            ),
            393 => 
            array (
                'id' => 894,
                'code' => '011',
                'name' => 'THPT ỷ La',
                'district_id' => 116,
                'city_id' => 9,
            ),
            394 => 
            array (
                'id' => 895,
                'code' => '012',
                'name' => 'THPT Nguyễn Văn Huyên',
                'district_id' => 116,
                'city_id' => 9,
            ),
            395 => 
            array (
                'id' => 896,
                'code' => '013',
                'name' => 'THPT Sông Lô',
                'district_id' => 116,
                'city_id' => 9,
            ),
            396 => 
            array (
                'id' => 897,
                'code' => '014',
                'name' => 'TT GDTX-Hướng nghiệp tỉnh',
                'district_id' => 116,
                'city_id' => 9,
            ),
            397 => 
            array (
                'id' => 898,
                'code' => '015',
                'name' => 'THPT Thượng Lâm',
                'district_id' => 117,
                'city_id' => 9,
            ),
            398 => 
            array (
                'id' => 899,
                'code' => '037',
                'name' => 'THPT Lâm Bình',
                'district_id' => 117,
                'city_id' => 9,
            ),
            399 => 
            array (
                'id' => 900,
                'code' => '016',
                'name' => 'THPT Na Hang',
                'district_id' => 118,
                'city_id' => 9,
            ),
            400 => 
            array (
                'id' => 901,
                'code' => '017',
                'name' => 'THPT Yên Hoa',
                'district_id' => 118,
                'city_id' => 9,
            ),
            401 => 
            array (
                'id' => 902,
                'code' => '018',
                'name' => 'THPT Chiêm Hóa',
                'district_id' => 119,
                'city_id' => 9,
            ),
            402 => 
            array (
                'id' => 903,
                'code' => '019',
                'name' => 'THPT Kim Bình',
                'district_id' => 119,
                'city_id' => 9,
            ),
            403 => 
            array (
                'id' => 904,
                'code' => '020',
                'name' => 'THPT Minh Quang',
                'district_id' => 119,
                'city_id' => 9,
            ),
            404 => 
            array (
                'id' => 905,
                'code' => '021',
                'name' => 'THPT Hà Lang',
                'district_id' => 119,
                'city_id' => 9,
            ),
            405 => 
            array (
                'id' => 906,
                'code' => '022',
                'name' => 'THPT Đầm Hồng',
                'district_id' => 119,
                'city_id' => 9,
            ),
            406 => 
            array (
                'id' => 907,
                'code' => '023',
                'name' => 'THPT Hòa Phú',
                'district_id' => 119,
                'city_id' => 9,
            ),
            407 => 
            array (
                'id' => 908,
                'code' => '024',
                'name' => 'THPT Hàm Yên',
                'district_id' => 120,
                'city_id' => 9,
            ),
            408 => 
            array (
                'id' => 909,
                'code' => '025',
                'name' => 'THPT Phù Lưu',
                'district_id' => 120,
                'city_id' => 9,
            ),
            409 => 
            array (
                'id' => 910,
                'code' => '026',
                'name' => 'THPT Thái Hòa',
                'district_id' => 120,
                'city_id' => 9,
            ),
            410 => 
            array (
                'id' => 911,
                'code' => '027',
                'name' => 'THPT Xuân Huy',
                'district_id' => 121,
                'city_id' => 9,
            ),
            411 => 
            array (
                'id' => 912,
                'code' => '028',
                'name' => 'THPT Trung Sơn',
                'district_id' => 121,
                'city_id' => 9,
            ),
            412 => 
            array (
                'id' => 913,
                'code' => '029',
                'name' => 'THPT Xuân Vân',
                'district_id' => 121,
                'city_id' => 9,
            ),
            413 => 
            array (
                'id' => 914,
                'code' => '030',
                'name' => 'THPT Tháng 10',
                'district_id' => 121,
                'city_id' => 9,
            ),
            414 => 
            array (
                'id' => 915,
                'code' => '031',
                'name' => 'THPT Sơn Dương',
                'district_id' => 122,
                'city_id' => 9,
            ),
            415 => 
            array (
                'id' => 916,
                'code' => '032',
                'name' => 'THPT Kim Xuyên',
                'district_id' => 122,
                'city_id' => 9,
            ),
            416 => 
            array (
                'id' => 917,
                'code' => '033',
                'name' => 'THPT ATK Tân Trào',
                'district_id' => 122,
                'city_id' => 9,
            ),
            417 => 
            array (
                'id' => 918,
                'code' => '034',
                'name' => 'THPT Đông Thọ',
                'district_id' => 122,
                'city_id' => 9,
            ),
            418 => 
            array (
                'id' => 919,
                'code' => '035',
                'name' => 'THPT Kháng Nhật',
                'district_id' => 122,
                'city_id' => 9,
            ),
            419 => 
            array (
                'id' => 920,
                'code' => '036',
                'name' => 'THPT Sơn Nam',
                'district_id' => 122,
                'city_id' => 9,
            ),
            420 => 
            array (
                'id' => 921,
                'code' => '000',
                'name' => 'Sở GD&ĐT Lạng Sơn',
                'district_id' => 123,
                'city_id' => 10,
            ),
            421 => 
            array (
                'id' => 922,
                'code' => '001',
                'name' => 'THPT Việt Bắc',
                'district_id' => 123,
                'city_id' => 10,
            ),
            422 => 
            array (
                'id' => 923,
                'code' => '002',
                'name' => 'THPT Chuyên Chu Văn An',
                'district_id' => 123,
                'city_id' => 10,
            ),
            423 => 
            array (
                'id' => 924,
                'code' => '003',
                'name' => 'THPT DT Nội trú tỉnh',
                'district_id' => 123,
                'city_id' => 10,
            ),
            424 => 
            array (
                'id' => 925,
                'code' => '004',
                'name' => 'Cao đẳng nghề Lạng Sơn',
                'district_id' => 123,
                'city_id' => 10,
            ),
            425 => 
            array (
                'id' => 926,
                'code' => '005',
                'name' => 'TT GDTX 1 tỉnh',
                'district_id' => 123,
                'city_id' => 10,
            ),
            426 => 
            array (
                'id' => 927,
                'code' => '006',
                'name' => 'THPT Ngô Thì Sỹ',
                'district_id' => 123,
                'city_id' => 10,
            ),
            427 => 
            array (
                'id' => 928,
                'code' => '007',
                'name' => 'THPT Tràng Định',
                'district_id' => 124,
                'city_id' => 10,
            ),
            428 => 
            array (
                'id' => 929,
                'code' => '008',
                'name' => 'TT GDTX Tràng Định',
                'district_id' => 124,
                'city_id' => 10,
            ),
            429 => 
            array (
                'id' => 930,
                'code' => '009',
                'name' => 'THPT Bình Độ',
                'district_id' => 124,
                'city_id' => 10,
            ),
            430 => 
            array (
                'id' => 931,
                'code' => '010',
                'name' => 'THPT Bình Gia',
                'district_id' => 125,
                'city_id' => 10,
            ),
            431 => 
            array (
                'id' => 932,
                'code' => '011',
                'name' => 'TT GDTX Bình Gia',
                'district_id' => 125,
                'city_id' => 10,
            ),
            432 => 
            array (
                'id' => 933,
                'code' => '012',
                'name' => 'THPT Pác Khuông',
                'district_id' => 125,
                'city_id' => 10,
            ),
            433 => 
            array (
                'id' => 934,
                'code' => '013',
                'name' => 'THPT Văn Lãng',
                'district_id' => 126,
                'city_id' => 10,
            ),
            434 => 
            array (
                'id' => 935,
                'code' => '014',
                'name' => 'TT GDTX Văn Lãng',
                'district_id' => 126,
                'city_id' => 10,
            ),
            435 => 
            array (
                'id' => 936,
                'code' => '015',
                'name' => 'THPT Bắc Sơn',
                'district_id' => 127,
                'city_id' => 10,
            ),
            436 => 
            array (
                'id' => 937,
                'code' => '016',
                'name' => 'THPT Vũ Lễ',
                'district_id' => 127,
                'city_id' => 10,
            ),
            437 => 
            array (
                'id' => 938,
                'code' => '017',
                'name' => 'TTGDTX Bắc Sơn',
                'district_id' => 127,
                'city_id' => 10,
            ),
            438 => 
            array (
                'id' => 939,
                'code' => '018',
                'name' => 'THPT Lương Văn Tri',
                'district_id' => 128,
                'city_id' => 10,
            ),
            439 => 
            array (
                'id' => 940,
                'code' => '019',
                'name' => 'THPT Văn Quan',
                'district_id' => 128,
                'city_id' => 10,
            ),
            440 => 
            array (
                'id' => 941,
                'code' => '020',
                'name' => 'TT GDTX Văn Quan',
                'district_id' => 128,
                'city_id' => 10,
            ),
            441 => 
            array (
                'id' => 942,
                'code' => '021',
                'name' => 'THPT Đồng Đăng',
                'district_id' => 129,
                'city_id' => 10,
            ),
            442 => 
            array (
                'id' => 943,
                'code' => '022',
                'name' => 'THPT Cao Lộc',
                'district_id' => 129,
                'city_id' => 10,
            ),
            443 => 
            array (
                'id' => 944,
                'code' => '023',
                'name' => 'TT GDTX Cao Lộc',
                'district_id' => 129,
                'city_id' => 10,
            ),
            444 => 
            array (
                'id' => 945,
                'code' => '024',
                'name' => 'THPT Lộc Bình',
                'district_id' => 130,
                'city_id' => 10,
            ),
            445 => 
            array (
                'id' => 946,
                'code' => '025',
                'name' => 'THPT Na Dương',
                'district_id' => 130,
                'city_id' => 10,
            ),
            446 => 
            array (
                'id' => 947,
                'code' => '026',
                'name' => 'TT GDTX Lộc Bình',
                'district_id' => 130,
                'city_id' => 10,
            ),
            447 => 
            array (
                'id' => 948,
                'code' => '035',
                'name' => 'THPT Tú Đoạn',
                'district_id' => 130,
                'city_id' => 10,
            ),
            448 => 
            array (
                'id' => 949,
                'code' => '027',
                'name' => 'THPT Chi Lăng',
                'district_id' => 131,
                'city_id' => 10,
            ),
            449 => 
            array (
                'id' => 950,
                'code' => '028',
                'name' => 'THPT Hòa Bình',
                'district_id' => 131,
                'city_id' => 10,
            ),
            450 => 
            array (
                'id' => 951,
                'code' => '029',
                'name' => 'TT GDTX Chi Lăng',
                'district_id' => 131,
                'city_id' => 10,
            ),
            451 => 
            array (
                'id' => 952,
                'code' => '036',
                'name' => 'THPT Đồng Bành',
                'district_id' => 131,
                'city_id' => 10,
            ),
            452 => 
            array (
                'id' => 953,
                'code' => '030',
                'name' => 'THPT Đình Lập',
                'district_id' => 132,
                'city_id' => 10,
            ),
            453 => 
            array (
                'id' => 954,
                'code' => '031',
                'name' => 'TT GDTX Đình Lập',
                'district_id' => 132,
                'city_id' => 10,
            ),
            454 => 
            array (
                'id' => 955,
                'code' => '032',
                'name' => 'THPT Hữu Lũng',
                'district_id' => 133,
                'city_id' => 10,
            ),
            455 => 
            array (
                'id' => 956,
                'code' => '033',
                'name' => 'THPT Vân Nham',
                'district_id' => 133,
                'city_id' => 10,
            ),
            456 => 
            array (
                'id' => 957,
                'code' => '034',
                'name' => 'TT GDTX 2 tỉnh',
                'district_id' => 133,
                'city_id' => 10,
            ),
            457 => 
            array (
                'id' => 958,
                'code' => '037',
                'name' => 'CĐ Nghề Công nghệ và Nông Lâm Đông Bắc',
                'district_id' => 133,
                'city_id' => 10,
            ),
            458 => 
            array (
                'id' => 959,
                'code' => '009',
                'name' => 'THPT Bắc Kạn',
                'district_id' => 134,
                'city_id' => 11,
            ),
            459 => 
            array (
                'id' => 960,
                'code' => '014',
                'name' => 'Trường PTDTNT tỉnh',
                'district_id' => 134,
                'city_id' => 11,
            ),
            460 => 
            array (
                'id' => 961,
                'code' => '019',
                'name' => 'THPT Chuyên',
                'district_id' => 134,
                'city_id' => 11,
            ),
            461 => 
            array (
                'id' => 962,
                'code' => '021',
                'name' => 'TT GDTX tỉnh',
                'district_id' => 134,
                'city_id' => 11,
            ),
            462 => 
            array (
                'id' => 963,
                'code' => '022',
                'name' => 'THPT Dân lập Hùng Vương',
                'district_id' => 134,
                'city_id' => 11,
            ),
            463 => 
            array (
                'id' => 964,
                'code' => '025',
                'name' => 'TT Kỹ thuật TH- HN Bắc Kạn',
                'district_id' => 134,
                'city_id' => 11,
            ),
            464 => 
            array (
                'id' => 965,
                'code' => '027',
                'name' => 'TC nghề Bắc Kạn',
                'district_id' => 134,
                'city_id' => 11,
            ),
            465 => 
            array (
                'id' => 966,
                'code' => '010',
                'name' => 'THPT Chợ Đồn',
                'district_id' => 135,
                'city_id' => 11,
            ),
            466 => 
            array (
                'id' => 967,
                'code' => '024',
                'name' => 'THPT Bình Trung',
                'district_id' => 135,
                'city_id' => 11,
            ),
            467 => 
            array (
                'id' => 968,
                'code' => '030',
                'name' => 'TT GDTX-DN H. Chợ Đồn, tỉnh Bắc Kạn',
                'district_id' => 135,
                'city_id' => 11,
            ),
            468 => 
            array (
                'id' => 969,
                'code' => '017',
                'name' => 'THPT Phủ Thông',
                'district_id' => 136,
                'city_id' => 11,
            ),
            469 => 
            array (
                'id' => 970,
                'code' => '033',
                'name' => 'TT GDTX H. Bạch Thông, tỉnh Bắc Kạn',
                'district_id' => 136,
                'city_id' => 11,
            ),
            470 => 
            array (
                'id' => 971,
                'code' => '012',
                'name' => 'THPT Na Rỳ',
                'district_id' => 137,
                'city_id' => 11,
            ),
            471 => 
            array (
                'id' => 972,
                'code' => '031',
                'name' => 'TT GDTX H. Na Rì, tỉnh Bắc Kạn',
                'district_id' => 137,
                'city_id' => 11,
            ),
            472 => 
            array (
                'id' => 973,
                'code' => '013',
                'name' => 'THPT Ngân Sơn',
                'district_id' => 138,
                'city_id' => 11,
            ),
            473 => 
            array (
                'id' => 974,
                'code' => '015',
                'name' => 'THCS & THPT Nà Phặc',
                'district_id' => 138,
                'city_id' => 11,
            ),
            474 => 
            array (
                'id' => 975,
                'code' => '028',
                'name' => 'TT GDTX H. Ngân Sơn, tỉnh Bắc Kạn',
                'district_id' => 138,
                'city_id' => 11,
            ),
            475 => 
            array (
                'id' => 976,
                'code' => '018',
                'name' => 'THPT Ba Bể',
                'district_id' => 139,
                'city_id' => 11,
            ),
            476 => 
            array (
                'id' => 977,
                'code' => '023',
                'name' => 'THPT Quảng Khê',
                'district_id' => 139,
                'city_id' => 11,
            ),
            477 => 
            array (
                'id' => 978,
                'code' => '026',
                'name' => 'TT GDTX H. Ba Bể tỉnh Bắc Kạn',
                'district_id' => 139,
                'city_id' => 11,
            ),
            478 => 
            array (
                'id' => 979,
                'code' => '011',
                'name' => 'THPT Chợ Mới',
                'district_id' => 140,
                'city_id' => 11,
            ),
            479 => 
            array (
                'id' => 980,
                'code' => '020',
                'name' => 'THPT Yên Hân',
                'district_id' => 140,
                'city_id' => 11,
            ),
            480 => 
            array (
                'id' => 981,
                'code' => '032',
                'name' => 'TT GDTX H. Chợ Mới, tỉnh Bắc Kạn',
                'district_id' => 140,
                'city_id' => 11,
            ),
            481 => 
            array (
                'id' => 982,
                'code' => '016',
                'name' => 'THPT Bộc Bố',
                'district_id' => 141,
                'city_id' => 11,
            ),
            482 => 
            array (
                'id' => 983,
                'code' => '029',
                'name' => 'TT GDTX H. Pác Nặm, tỉnh Bắc Kạn',
                'district_id' => 141,
                'city_id' => 11,
            ),
            483 => 
            array (
                'id' => 984,
                'code' => '001',
                'name' => 'TTGDTX TP. Thái Nguyên',
                'district_id' => 142,
                'city_id' => 12,
            ),
            484 => 
            array (
                'id' => 985,
                'code' => '010',
                'name' => 'THPT Chuyên Thái Nguyên',
                'district_id' => 142,
                'city_id' => 12,
            ),
            485 => 
            array (
                'id' => 986,
                'code' => '011',
                'name' => 'THPT Lương Ngọc Quyến',
                'district_id' => 142,
                'city_id' => 12,
            ),
            486 => 
            array (
                'id' => 987,
                'code' => '012',
                'name' => 'THPT Ngô Quyền',
                'district_id' => 142,
                'city_id' => 12,
            ),
            487 => 
            array (
                'id' => 988,
                'code' => '013',
                'name' => 'THPT Gang Thép',
                'district_id' => 142,
                'city_id' => 12,
            ),
            488 => 
            array (
                'id' => 989,
                'code' => '014',
                'name' => 'THPT Chu Văn An',
                'district_id' => 142,
                'city_id' => 12,
            ),
            489 => 
            array (
                'id' => 990,
                'code' => '015',
                'name' => 'THPT Dương Tự Minh',
                'district_id' => 142,
                'city_id' => 12,
            ),
            490 => 
            array (
                'id' => 991,
                'code' => '017',
                'name' => 'PT Dân tộc Nội trú tỉnh TN',
                'district_id' => 142,
                'city_id' => 12,
            ),
            491 => 
            array (
                'id' => 992,
                'code' => '018',
                'name' => 'THPT Thái Nguyên',
                'district_id' => 142,
                'city_id' => 12,
            ),
            492 => 
            array (
                'id' => 993,
                'code' => '019',
                'name' => 'THPT  Lê Quý Đôn',
                'district_id' => 142,
                'city_id' => 12,
            ),
            493 => 
            array (
                'id' => 994,
                'code' => '031',
                'name' => 'Thiếu Sinh Quân QK1',
                'district_id' => 142,
                'city_id' => 12,
            ),
            494 => 
            array (
                'id' => 995,
                'code' => '032',
                'name' => 'THPT Lương Thế Vinh',
                'district_id' => 142,
                'city_id' => 12,
            ),
            495 => 
            array (
                'id' => 996,
                'code' => '033',
                'name' => 'Phổ thôngVùng Cao Việt Bắc',
                'district_id' => 142,
                'city_id' => 12,
            ),
            496 => 
            array (
                'id' => 997,
                'code' => '038',
                'name' => 'CĐ SP Thái Nguyên',
                'district_id' => 142,
                'city_id' => 12,
            ),
            497 => 
            array (
                'id' => 998,
                'code' => '039',
                'name' => 'CĐ Kinh tế Tài chính Thái Nguyên',
                'district_id' => 142,
                'city_id' => 12,
            ),
            498 => 
            array (
                'id' => 999,
                'code' => '040',
                'name' => 'CĐ Cơ khí luyện kim',
                'district_id' => 142,
                'city_id' => 12,
            ),
            499 => 
            array (
                'id' => 1000,
                'code' => '041',
                'name' => 'CĐ Giao thông Vận tải miền núi',
                'district_id' => 142,
                'city_id' => 12,
            ),
        ));
        \DB::table('organization_school')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'code' => '042',
                'name' => 'CĐ Y tế Thái Nguyên',
                'district_id' => 142,
                'city_id' => 12,
            ),
            1 => 
            array (
                'id' => 1002,
                'code' => '043',
                'name' => 'CĐ Văn hoá Nghệ thuật Việt Bắc',
                'district_id' => 142,
                'city_id' => 12,
            ),
            2 => 
            array (
                'id' => 1003,
                'code' => '044',
                'name' => 'CĐ Thương mại  và Du lịch',
                'district_id' => 142,
                'city_id' => 12,
            ),
            3 => 
            array (
                'id' => 1004,
                'code' => '048',
                'name' => 'Trường Văn hoá I - Bộ Công An',
                'district_id' => 142,
                'city_id' => 12,
            ),
            4 => 
            array (
                'id' => 1005,
                'code' => '050',
                'name' => 'TH Bưu chính Viễn thông và CNTT Miền Núi',
                'district_id' => 142,
                'city_id' => 12,
            ),
            5 => 
            array (
                'id' => 1006,
                'code' => '051',
                'name' => 'CĐ Kinh tế kỹ thuật - ĐH TN',
                'district_id' => 142,
                'city_id' => 12,
            ),
            6 => 
            array (
                'id' => 1007,
                'code' => '052',
                'name' => 'CĐ Nghề Cơ điện LK',
                'district_id' => 142,
                'city_id' => 12,
            ),
            7 => 
            array (
                'id' => 1008,
                'code' => '056',
                'name' => 'Trường TC nghề Thái Nguyên',
                'district_id' => 142,
                'city_id' => 12,
            ),
            8 => 
            array (
                'id' => 1009,
                'code' => '059',
                'name' => 'TT GDTX tỉnh',
                'district_id' => 142,
                'city_id' => 12,
            ),
            9 => 
            array (
                'id' => 1010,
                'code' => '060',
                'name' => 'THPT Đào Duy Từ',
                'district_id' => 142,
                'city_id' => 12,
            ),
            10 => 
            array (
                'id' => 1011,
                'code' => '062',
                'name' => 'TC nghề số 1- Bộ Quốc phòng',
                'district_id' => 142,
                'city_id' => 12,
            ),
            11 => 
            array (
                'id' => 1012,
                'code' => '064',
                'name' => 'Trường Trung cấp Y tế Thái Nguyên',
                'district_id' => 142,
                'city_id' => 12,
            ),
            12 => 
            array (
                'id' => 1013,
                'code' => '065',
                'name' => 'Trường Trung cấp Tổng hợp Hà Thái',
                'district_id' => 142,
                'city_id' => 12,
            ),
            13 => 
            array (
                'id' => 1014,
                'code' => '066',
                'name' => 'Trường Trung cấp Y khoa Pasteur',
                'district_id' => 142,
                'city_id' => 12,
            ),
            14 => 
            array (
                'id' => 1015,
                'code' => '002',
                'name' => 'TTGDTX Thị xã Sông Công',
                'district_id' => 143,
                'city_id' => 12,
            ),
            15 => 
            array (
                'id' => 1016,
                'code' => '020',
                'name' => 'THPT Sông Công',
                'district_id' => 143,
                'city_id' => 12,
            ),
            16 => 
            array (
                'id' => 1017,
                'code' => '047',
                'name' => 'CĐ Công nghiệp Việt Đức',
                'district_id' => 143,
                'city_id' => 12,
            ),
            17 => 
            array (
                'id' => 1018,
                'code' => '003',
                'name' => 'TTGDTX H. Định Hoá',
                'district_id' => 144,
                'city_id' => 12,
            ),
            18 => 
            array (
                'id' => 1019,
                'code' => '021',
                'name' => 'THPT Định Hoá',
                'district_id' => 144,
                'city_id' => 12,
            ),
            19 => 
            array (
                'id' => 1020,
                'code' => '022',
                'name' => 'THPT Bình Yên',
                'district_id' => 144,
                'city_id' => 12,
            ),
            20 => 
            array (
                'id' => 1021,
                'code' => '004',
                'name' => 'TTGDTX H. Phú Lương',
                'district_id' => 145,
                'city_id' => 12,
            ),
            21 => 
            array (
                'id' => 1022,
                'code' => '016',
                'name' => 'THPT Khánh Hoà',
                'district_id' => 145,
                'city_id' => 12,
            ),
            22 => 
            array (
                'id' => 1023,
                'code' => '023',
                'name' => 'THPT Phú Lương',
                'district_id' => 145,
                'city_id' => 12,
            ),
            23 => 
            array (
                'id' => 1024,
                'code' => '034',
                'name' => 'THPT Yên Ninh',
                'district_id' => 145,
                'city_id' => 12,
            ),
            24 => 
            array (
                'id' => 1025,
                'code' => '045',
                'name' => 'CĐ Công nghiệp Thái Nguyên',
                'district_id' => 145,
                'city_id' => 12,
            ),
            25 => 
            array (
                'id' => 1026,
                'code' => '049',
                'name' => 'CĐ Nghề Công nghiệp Việt Bắc Vinacomin',
                'district_id' => 145,
                'city_id' => 12,
            ),
            26 => 
            array (
                'id' => 1027,
                'code' => '005',
                'name' => 'TTGDTX H. Võ Nhai',
                'district_id' => 146,
                'city_id' => 12,
            ),
            27 => 
            array (
                'id' => 1028,
                'code' => '024',
                'name' => 'THPT Võ Nhai',
                'district_id' => 146,
                'city_id' => 12,
            ),
            28 => 
            array (
                'id' => 1029,
                'code' => '053',
                'name' => 'THPT Trần Phú ,  Võ Nhai',
                'district_id' => 146,
                'city_id' => 12,
            ),
            29 => 
            array (
                'id' => 1030,
                'code' => '055',
                'name' => 'THPT Hoàng Quốc Việt, Võ Nhai',
                'district_id' => 146,
                'city_id' => 12,
            ),
            30 => 
            array (
                'id' => 1031,
                'code' => '006',
                'name' => 'TTGDTX H. Đại Từ',
                'district_id' => 147,
                'city_id' => 12,
            ),
            31 => 
            array (
                'id' => 1032,
                'code' => '025',
                'name' => 'THPT Đại Từ',
                'district_id' => 147,
                'city_id' => 12,
            ),
            32 => 
            array (
                'id' => 1033,
                'code' => '035',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 147,
                'city_id' => 12,
            ),
            33 => 
            array (
                'id' => 1034,
                'code' => '054',
                'name' => 'THPT Lưu Nhân Chú, Đại Từ',
                'district_id' => 147,
                'city_id' => 12,
            ),
            34 => 
            array (
                'id' => 1035,
                'code' => '007',
                'name' => 'TTGDTX H. Đồng Hỷ',
                'district_id' => 148,
                'city_id' => 12,
            ),
            35 => 
            array (
                'id' => 1036,
                'code' => '026',
                'name' => 'THPT Đồng Hỷ',
                'district_id' => 148,
                'city_id' => 12,
            ),
            36 => 
            array (
                'id' => 1037,
                'code' => '027',
                'name' => 'THPT Trại Cau',
                'district_id' => 148,
                'city_id' => 12,
            ),
            37 => 
            array (
                'id' => 1038,
                'code' => '057',
                'name' => 'THPT Trần Quốc Tuấn, Đồng Hỷ',
                'district_id' => 148,
                'city_id' => 12,
            ),
            38 => 
            array (
                'id' => 1039,
                'code' => '008',
                'name' => 'TTGDTX H. Phú Bình',
                'district_id' => 149,
                'city_id' => 12,
            ),
            39 => 
            array (
                'id' => 1040,
                'code' => '028',
                'name' => 'THPT Phú Bình',
                'district_id' => 149,
                'city_id' => 12,
            ),
            40 => 
            array (
                'id' => 1041,
                'code' => '036',
                'name' => 'THPT Lương Phú',
                'district_id' => 149,
                'city_id' => 12,
            ),
            41 => 
            array (
                'id' => 1042,
                'code' => '058',
                'name' => 'THPT Điềm Thuỵ, Phú Bình',
                'district_id' => 149,
                'city_id' => 12,
            ),
            42 => 
            array (
                'id' => 1043,
                'code' => '009',
                'name' => 'TTGDTX H. Phổ Yên',
                'district_id' => 150,
                'city_id' => 12,
            ),
            43 => 
            array (
                'id' => 1044,
                'code' => '029',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 150,
                'city_id' => 12,
            ),
            44 => 
            array (
                'id' => 1045,
                'code' => '030',
                'name' => 'THPT Bắc Sơn',
                'district_id' => 150,
                'city_id' => 12,
            ),
            45 => 
            array (
                'id' => 1046,
                'code' => '037',
                'name' => 'THPT Phổ Yên',
                'district_id' => 150,
                'city_id' => 12,
            ),
            46 => 
            array (
                'id' => 1047,
                'code' => '046',
                'name' => 'CĐ Công nghệ và Kinh tế Công nghiệp',
                'district_id' => 150,
                'city_id' => 12,
            ),
            47 => 
            array (
                'id' => 1048,
                'code' => '061',
                'name' => 'TC Nghề Nam Thái Nguyên',
                'district_id' => 150,
                'city_id' => 12,
            ),
            48 => 
            array (
                'id' => 1049,
                'code' => '063',
                'name' => 'Trường TC nghề KT 3D',
                'district_id' => 150,
                'city_id' => 12,
            ),
            49 => 
            array (
                'id' => 1050,
                'code' => '001',
                'name' => 'THPT Chuyên Nguyễn Tất Thành',
                'district_id' => 151,
                'city_id' => 13,
            ),
            50 => 
            array (
                'id' => 1051,
                'code' => '002',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 151,
                'city_id' => 13,
            ),
            51 => 
            array (
                'id' => 1052,
                'code' => '003',
                'name' => 'THPT Lý Thường Kiệt',
                'district_id' => 151,
                'city_id' => 13,
            ),
            52 => 
            array (
                'id' => 1053,
                'code' => '004',
                'name' => 'THPT Dân tộc nội trú',
                'district_id' => 151,
                'city_id' => 13,
            ),
            53 => 
            array (
                'id' => 1054,
                'code' => '005',
                'name' => 'THPT Hoàng Quốc Việt',
                'district_id' => 151,
                'city_id' => 13,
            ),
            54 => 
            array (
                'id' => 1055,
                'code' => '006',
                'name' => 'THPT Đồng Tâm',
                'district_id' => 151,
                'city_id' => 13,
            ),
            55 => 
            array (
                'id' => 1056,
                'code' => '007',
                'name' => 'TTGDTX tỉnh',
                'district_id' => 151,
                'city_id' => 13,
            ),
            56 => 
            array (
                'id' => 1057,
                'code' => '008',
                'name' => 'TT DN-GDTX TP Yên Bái',
                'district_id' => 151,
                'city_id' => 13,
            ),
            57 => 
            array (
                'id' => 1058,
                'code' => '009',
                'name' => 'Trung cấp Kinh tế - Kỹ thuật Yên Bái',
                'district_id' => 151,
                'city_id' => 13,
            ),
            58 => 
            array (
                'id' => 1059,
                'code' => '010',
                'name' => 'THPT Nghĩa Lộ',
                'district_id' => 152,
                'city_id' => 13,
            ),
            59 => 
            array (
                'id' => 1060,
                'code' => '011',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 152,
                'city_id' => 13,
            ),
            60 => 
            array (
                'id' => 1061,
                'code' => '012',
                'name' => 'PT DTNT THPT Miền Tây',
                'district_id' => 152,
                'city_id' => 13,
            ),
            61 => 
            array (
                'id' => 1062,
                'code' => '013',
                'name' => 'TT GDTX-HNDN Tx Nghĩa Lộ',
                'district_id' => 152,
                'city_id' => 13,
            ),
            62 => 
            array (
                'id' => 1063,
                'code' => '014',
                'name' => 'THPT Chu Văn An',
                'district_id' => 153,
                'city_id' => 13,
            ),
            63 => 
            array (
                'id' => 1064,
                'code' => '015',
                'name' => 'THPT Nguyễn Lương Bằng',
                'district_id' => 153,
                'city_id' => 13,
            ),
            64 => 
            array (
                'id' => 1065,
                'code' => '016',
                'name' => 'Trường THPT Trần  Phú',
                'district_id' => 153,
                'city_id' => 13,
            ),
            65 => 
            array (
                'id' => 1066,
                'code' => '017',
                'name' => 'TT DN-GDTX Huyện Văn Yên',
                'district_id' => 153,
                'city_id' => 13,
            ),
            66 => 
            array (
                'id' => 1067,
                'code' => '018',
                'name' => 'THPT Cảm Ân',
                'district_id' => 154,
                'city_id' => 13,
            ),
            67 => 
            array (
                'id' => 1068,
                'code' => '019',
                'name' => 'THPT Trần Nhật Duật',
                'district_id' => 154,
                'city_id' => 13,
            ),
            68 => 
            array (
                'id' => 1069,
                'code' => '020',
                'name' => 'THPT Thác Bà',
                'district_id' => 154,
                'city_id' => 13,
            ),
            69 => 
            array (
                'id' => 1070,
                'code' => '021',
                'name' => 'THPT Cảm Nhân',
                'district_id' => 154,
                'city_id' => 13,
            ),
            70 => 
            array (
                'id' => 1071,
                'code' => '022',
                'name' => 'TT DN-GDTX Huyện Yên Bình',
                'district_id' => 154,
                'city_id' => 13,
            ),
            71 => 
            array (
                'id' => 1072,
                'code' => '023',
                'name' => 'THPT Mù Cang Chải',
                'district_id' => 155,
                'city_id' => 13,
            ),
            72 => 
            array (
                'id' => 1073,
                'code' => '024',
                'name' => 'TT DN-GDTX H. Mù Cang Chải',
                'district_id' => 155,
                'city_id' => 13,
            ),
            73 => 
            array (
                'id' => 1074,
                'code' => '025',
                'name' => 'THPT Văn Chấn',
                'district_id' => 156,
                'city_id' => 13,
            ),
            74 => 
            array (
                'id' => 1075,
                'code' => '026',
                'name' => 'THPT Sơn Thịnh',
                'district_id' => 156,
                'city_id' => 13,
            ),
            75 => 
            array (
                'id' => 1076,
                'code' => '027',
                'name' => 'TT DN-GDTX Huyện Văn Chấn',
                'district_id' => 156,
                'city_id' => 13,
            ),
            76 => 
            array (
                'id' => 1077,
                'code' => '028',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 157,
                'city_id' => 13,
            ),
            77 => 
            array (
                'id' => 1078,
                'code' => '029',
                'name' => 'PT Liên cấp 2+3 Trấn Yên II',
                'district_id' => 157,
                'city_id' => 13,
            ),
            78 => 
            array (
                'id' => 1079,
                'code' => '030',
                'name' => 'TT DN-GDTX Huyện Trấn Yên',
                'district_id' => 157,
                'city_id' => 13,
            ),
            79 => 
            array (
                'id' => 1080,
                'code' => '031',
                'name' => 'THPT Trạm Tấu',
                'district_id' => 158,
                'city_id' => 13,
            ),
            80 => 
            array (
                'id' => 1081,
                'code' => '032',
                'name' => 'TT DN-GDTX Huyện Trạm Tấu',
                'district_id' => 158,
                'city_id' => 13,
            ),
            81 => 
            array (
                'id' => 1082,
                'code' => '033',
                'name' => 'THPT Mai Sơn',
                'district_id' => 159,
                'city_id' => 13,
            ),
            82 => 
            array (
                'id' => 1083,
                'code' => '034',
                'name' => 'THPT Hoàng Văn  Thụ',
                'district_id' => 159,
                'city_id' => 13,
            ),
            83 => 
            array (
                'id' => 1084,
                'code' => '035',
                'name' => 'THPT  Hồng Quang',
                'district_id' => 159,
                'city_id' => 13,
            ),
            84 => 
            array (
                'id' => 1085,
                'code' => '036',
                'name' => 'TT GDTX-HNDN Hồ Tùng Mậu',
                'district_id' => 159,
                'city_id' => 13,
            ),
            85 => 
            array (
                'id' => 1086,
                'code' => '001',
                'name' => 'TTGDTX Thành phố Sơn La',
                'district_id' => 160,
                'city_id' => 14,
            ),
            86 => 
            array (
                'id' => 1087,
                'code' => '002',
                'name' => 'Trường THPT Tô Hiệu',
                'district_id' => 160,
                'city_id' => 14,
            ),
            87 => 
            array (
                'id' => 1088,
                'code' => '003',
                'name' => 'Trường THPT Chiềng Sinh',
                'district_id' => 160,
                'city_id' => 14,
            ),
            88 => 
            array (
                'id' => 1089,
                'code' => '004',
                'name' => 'Trường THPT Chuyên',
                'district_id' => 160,
                'city_id' => 14,
            ),
            89 => 
            array (
                'id' => 1090,
                'code' => '005',
                'name' => 'Trường PTDT Nội trú tỉnh',
                'district_id' => 160,
                'city_id' => 14,
            ),
            90 => 
            array (
                'id' => 1091,
                'code' => '006',
                'name' => 'Trường THPT Nguyễn Du',
                'district_id' => 160,
                'city_id' => 14,
            ),
            91 => 
            array (
                'id' => 1092,
                'code' => '043',
                'name' => 'Phòng GD -ĐT Thành phố Sơn La',
                'district_id' => 160,
                'city_id' => 14,
            ),
            92 => 
            array (
                'id' => 1093,
                'code' => '007',
                'name' => 'Trường THPT Quỳnh Nhai',
                'district_id' => 161,
                'city_id' => 14,
            ),
            93 => 
            array (
                'id' => 1094,
                'code' => '008',
                'name' => 'Trường THPT Mường Giôn',
                'district_id' => 161,
                'city_id' => 14,
            ),
            94 => 
            array (
                'id' => 1095,
                'code' => '009',
                'name' => 'Trung tâm GDTX huyện Quỳnh Nhai',
                'district_id' => 161,
                'city_id' => 14,
            ),
            95 => 
            array (
                'id' => 1096,
                'code' => '044',
                'name' => 'Phòng GD -ĐT huyện Quỳnh Nhai',
                'district_id' => 161,
                'city_id' => 14,
            ),
            96 => 
            array (
                'id' => 1097,
                'code' => '010',
                'name' => 'Trường THPT Mường La',
                'district_id' => 162,
                'city_id' => 14,
            ),
            97 => 
            array (
                'id' => 1098,
                'code' => '011',
                'name' => 'Trường THPT Mường Bú',
                'district_id' => 162,
                'city_id' => 14,
            ),
            98 => 
            array (
                'id' => 1099,
                'code' => '012',
                'name' => 'Trung tâm GDTX huyện Mường La',
                'district_id' => 162,
                'city_id' => 14,
            ),
            99 => 
            array (
                'id' => 1100,
                'code' => '045',
                'name' => 'Phòng GD -ĐT huyện Mường La',
                'district_id' => 162,
                'city_id' => 14,
            ),
            100 => 
            array (
                'id' => 1101,
                'code' => '013',
                'name' => 'Trường THPT Thuận Châu',
                'district_id' => 163,
                'city_id' => 14,
            ),
            101 => 
            array (
                'id' => 1102,
                'code' => '014',
                'name' => 'Trường THPT Tông Lệnh',
                'district_id' => 163,
                'city_id' => 14,
            ),
            102 => 
            array (
                'id' => 1103,
                'code' => '015',
                'name' => 'Trung tâm GDTX huyện Thuận Châu',
                'district_id' => 163,
                'city_id' => 14,
            ),
            103 => 
            array (
                'id' => 1104,
                'code' => '016',
                'name' => 'Trường THPT Bình Thuận',
                'district_id' => 163,
                'city_id' => 14,
            ),
            104 => 
            array (
                'id' => 1105,
                'code' => '017',
                'name' => 'Trường THPT Co Mạ',
                'district_id' => 163,
                'city_id' => 14,
            ),
            105 => 
            array (
                'id' => 1106,
                'code' => '046',
                'name' => 'Phòng GD -ĐT huyện Thuận Châu',
                'district_id' => 163,
                'city_id' => 14,
            ),
            106 => 
            array (
                'id' => 1107,
                'code' => '018',
                'name' => 'Trường THPT Bắc Yên',
                'district_id' => 164,
                'city_id' => 14,
            ),
            107 => 
            array (
                'id' => 1108,
                'code' => '019',
                'name' => 'Trung tâm GDTX huyện Bắc Yên',
                'district_id' => 164,
                'city_id' => 14,
            ),
            108 => 
            array (
                'id' => 1109,
                'code' => '047',
                'name' => 'Phòng GD -ĐT huyện Bắc Yên',
                'district_id' => 164,
                'city_id' => 14,
            ),
            109 => 
            array (
                'id' => 1110,
                'code' => '020',
                'name' => 'Trường THPT Phù Yên',
                'district_id' => 165,
                'city_id' => 14,
            ),
            110 => 
            array (
                'id' => 1111,
                'code' => '021',
                'name' => 'Trường THPT Gia Phù',
                'district_id' => 165,
                'city_id' => 14,
            ),
            111 => 
            array (
                'id' => 1112,
                'code' => '022',
                'name' => 'Trung tâm GDTX huyện Phù Yên',
                'district_id' => 165,
                'city_id' => 14,
            ),
            112 => 
            array (
                'id' => 1113,
                'code' => '023',
                'name' => 'Trường THPT Tân Lang',
                'district_id' => 165,
                'city_id' => 14,
            ),
            113 => 
            array (
                'id' => 1114,
                'code' => '048',
                'name' => 'Phòng GD -ĐT huyện Phù Yên',
                'district_id' => 165,
                'city_id' => 14,
            ),
            114 => 
            array (
                'id' => 1115,
                'code' => '024',
                'name' => 'Trường THPT Mai Sơn',
                'district_id' => 166,
                'city_id' => 14,
            ),
            115 => 
            array (
                'id' => 1116,
                'code' => '025',
                'name' => 'Trường THPT Cò Nòi',
                'district_id' => 166,
                'city_id' => 14,
            ),
            116 => 
            array (
                'id' => 1117,
                'code' => '026',
                'name' => 'Trường THPT Chu Văn Thịnh',
                'district_id' => 166,
                'city_id' => 14,
            ),
            117 => 
            array (
                'id' => 1118,
                'code' => '027',
                'name' => 'Trung tâm GDTX huyện Mai Sơn',
                'district_id' => 166,
                'city_id' => 14,
            ),
            118 => 
            array (
                'id' => 1119,
                'code' => '049',
                'name' => 'Phòng GD -ĐT huyện Mai Sơn',
                'district_id' => 166,
                'city_id' => 14,
            ),
            119 => 
            array (
                'id' => 1120,
                'code' => '028',
                'name' => 'Trường THPT Yên Châu',
                'district_id' => 167,
                'city_id' => 14,
            ),
            120 => 
            array (
                'id' => 1121,
                'code' => '029',
                'name' => 'Trường THPT Phiêng Khoài',
                'district_id' => 167,
                'city_id' => 14,
            ),
            121 => 
            array (
                'id' => 1122,
                'code' => '030',
                'name' => 'Trung tâm GDTX huyện Yên Châu',
                'district_id' => 167,
                'city_id' => 14,
            ),
            122 => 
            array (
                'id' => 1123,
                'code' => '050',
                'name' => 'Phòng GD -ĐT huyện Yên Châu',
                'district_id' => 167,
                'city_id' => 14,
            ),
            123 => 
            array (
                'id' => 1124,
                'code' => '031',
                'name' => 'Trường THPT Sông Mã',
                'district_id' => 168,
                'city_id' => 14,
            ),
            124 => 
            array (
                'id' => 1125,
                'code' => '032',
                'name' => 'Trường THPT Chiềng Khương',
                'district_id' => 168,
                'city_id' => 14,
            ),
            125 => 
            array (
                'id' => 1126,
                'code' => '033',
                'name' => 'Trường THPT Mường Lầm',
                'district_id' => 168,
                'city_id' => 14,
            ),
            126 => 
            array (
                'id' => 1127,
                'code' => '034',
                'name' => 'Trung tâm GDTX huyện Sông Mã',
                'district_id' => 168,
                'city_id' => 14,
            ),
            127 => 
            array (
                'id' => 1128,
                'code' => '051',
                'name' => 'Phòng GD -ĐT huyện Sông Mã',
                'district_id' => 168,
                'city_id' => 14,
            ),
            128 => 
            array (
                'id' => 1129,
                'code' => '035',
                'name' => 'Trường THPT Chiềng Sơn',
                'district_id' => 169,
                'city_id' => 14,
            ),
            129 => 
            array (
                'id' => 1130,
                'code' => '036',
                'name' => 'Trường THPT Tân Lập',
                'district_id' => 169,
                'city_id' => 14,
            ),
            130 => 
            array (
                'id' => 1131,
                'code' => '037',
                'name' => 'Trường THPT Mộc Lỵ',
                'district_id' => 169,
                'city_id' => 14,
            ),
            131 => 
            array (
                'id' => 1132,
                'code' => '038',
                'name' => 'Trường THPT Thảo Nguyên',
                'district_id' => 169,
                'city_id' => 14,
            ),
            132 => 
            array (
                'id' => 1133,
                'code' => '039',
                'name' => 'Trung tâm GDTX Mộc Châu',
                'district_id' => 169,
                'city_id' => 14,
            ),
            133 => 
            array (
                'id' => 1134,
                'code' => '052',
                'name' => 'Phòng GD -ĐT huyện Mộc Châu',
                'district_id' => 169,
                'city_id' => 14,
            ),
            134 => 
            array (
                'id' => 1135,
                'code' => '040',
                'name' => 'Trường THPT Sốp Cộp',
                'district_id' => 170,
                'city_id' => 14,
            ),
            135 => 
            array (
                'id' => 1136,
                'code' => '041',
                'name' => 'Trung tâm GDTX huyện Sốp Cộp',
                'district_id' => 170,
                'city_id' => 14,
            ),
            136 => 
            array (
                'id' => 1137,
                'code' => '053',
                'name' => 'Phòng GD -ĐT huyện Sốp Cộp',
                'district_id' => 170,
                'city_id' => 14,
            ),
            137 => 
            array (
                'id' => 1138,
                'code' => '042',
                'name' => 'Trường THPT Mộc Hạ',
                'district_id' => 171,
                'city_id' => 14,
            ),
            138 => 
            array (
                'id' => 1139,
                'code' => '054',
                'name' => 'Phòng GD - ĐT huyện Vân Hồ',
                'district_id' => 171,
                'city_id' => 14,
            ),
            139 => 
            array (
                'id' => 1140,
                'code' => '001',
                'name' => 'Trường THPT Chuyên Hùng Vương',
                'district_id' => 172,
                'city_id' => 15,
            ),
            140 => 
            array (
                'id' => 1141,
                'code' => '002',
                'name' => 'Trường THPT Việt Trì',
                'district_id' => 172,
                'city_id' => 15,
            ),
            141 => 
            array (
                'id' => 1142,
                'code' => '003',
                'name' => 'Trường THPT Công nghiệp Việt Trì',
                'district_id' => 172,
                'city_id' => 15,
            ),
            142 => 
            array (
                'id' => 1143,
                'code' => '004',
                'name' => 'Trường THPT Kĩ thuật Việt Trì',
                'district_id' => 172,
                'city_id' => 15,
            ),
            143 => 
            array (
                'id' => 1144,
                'code' => '005',
                'name' => 'Trường THPT Nguyễn Tất Thành',
                'district_id' => 172,
                'city_id' => 15,
            ),
            144 => 
            array (
                'id' => 1145,
                'code' => '006',
                'name' => 'Trường THPT Vũ Thê Lang',
                'district_id' => 172,
                'city_id' => 15,
            ),
            145 => 
            array (
                'id' => 1146,
                'code' => '007',
                'name' => 'Trường THPT Herman',
                'district_id' => 172,
                'city_id' => 15,
            ),
            146 => 
            array (
                'id' => 1147,
                'code' => '008',
                'name' => 'Trường THPT Trần Phú',
                'district_id' => 172,
                'city_id' => 15,
            ),
            147 => 
            array (
                'id' => 1148,
                'code' => '009',
                'name' => 'Trung tâm GDTX Việt Trì',
                'district_id' => 172,
                'city_id' => 15,
            ),
            148 => 
            array (
                'id' => 1149,
                'code' => '060',
                'name' => 'Trung tâm KTTH-HN tỉnh',
                'district_id' => 172,
                'city_id' => 15,
            ),
            149 => 
            array (
                'id' => 1150,
                'code' => '063',
                'name' => 'Trường Cao đẳng nghề Phú Thọ',
                'district_id' => 172,
                'city_id' => 15,
            ),
            150 => 
            array (
                'id' => 1151,
                'code' => '066',
                'name' => 'Trường Trung cấp nghề Công nghệ và Vận tải Phú Thọ',
                'district_id' => 172,
                'city_id' => 15,
            ),
            151 => 
            array (
                'id' => 1152,
                'code' => '068',
                'name' => 'Trường Trung cấp nghề Herman Gmeiner Việt Trì',
                'district_id' => 172,
                'city_id' => 15,
            ),
            152 => 
            array (
                'id' => 1153,
                'code' => '069',
                'name' => 'Trường Trung cấp nghề Bách khoa Phú Thọ',
                'district_id' => 172,
                'city_id' => 15,
            ),
            153 => 
            array (
                'id' => 1154,
                'code' => '070',
                'name' => 'Trường Trung cấp nghề Công nghệ, Du lịch và dịch vụ Phú Nam',
                'district_id' => 172,
                'city_id' => 15,
            ),
            154 => 
            array (
                'id' => 1155,
                'code' => '071',
                'name' => 'Trường THPT Lê Qúy Đôn',
                'district_id' => 172,
                'city_id' => 15,
            ),
            155 => 
            array (
                'id' => 1156,
                'code' => '073',
                'name' => 'Trường Cao đẳng Công nghiệp thực phẩm',
                'district_id' => 172,
                'city_id' => 15,
            ),
            156 => 
            array (
                'id' => 1157,
                'code' => '075',
                'name' => 'Trường Cao đẳng Dược Phú Thọ',
                'district_id' => 172,
                'city_id' => 15,
            ),
            157 => 
            array (
                'id' => 1158,
                'code' => '076',
                'name' => 'Trường THPT Dân lập Âu cơ',
                'district_id' => 172,
                'city_id' => 15,
            ),
            158 => 
            array (
                'id' => 1159,
                'code' => '077',
                'name' => 'Trường THPT Dân lập Vân Phú',
                'district_id' => 172,
                'city_id' => 15,
            ),
            159 => 
            array (
                'id' => 1160,
                'code' => '087',
                'name' => 'Trường THPT Bán Công Công nghiệp Việt Trì',
                'district_id' => 172,
                'city_id' => 15,
            ),
            160 => 
            array (
                'id' => 1161,
                'code' => '010',
                'name' => 'Trường THPT Hùng Vương',
                'district_id' => 173,
                'city_id' => 15,
            ),
            161 => 
            array (
                'id' => 1162,
                'code' => '011',
                'name' => 'Trường PT Dân tộc nội trú tỉnh Phú Thọ',
                'district_id' => 173,
                'city_id' => 15,
            ),
            162 => 
            array (
                'id' => 1163,
                'code' => '012',
                'name' => 'Trường THPT thị xã Phú Thọ',
                'district_id' => 173,
                'city_id' => 15,
            ),
            163 => 
            array (
                'id' => 1164,
                'code' => '013',
                'name' => 'Trường THPT Trường Thịnh',
                'district_id' => 173,
                'city_id' => 15,
            ),
            164 => 
            array (
                'id' => 1165,
                'code' => '014',
                'name' => 'Trung tâm GDTX thị xã Phú Thọ',
                'district_id' => 173,
                'city_id' => 15,
            ),
            165 => 
            array (
                'id' => 1166,
                'code' => '061',
                'name' => 'Trung tâm KTTH-HN thị xã Phú Thọ',
                'district_id' => 173,
                'city_id' => 15,
            ),
            166 => 
            array (
                'id' => 1167,
                'code' => '065',
                'name' => 'Trường Cao đẳng nghề Công nghệ và Nông lâm Phú Thọ',
                'district_id' => 173,
                'city_id' => 15,
            ),
            167 => 
            array (
                'id' => 1168,
                'code' => '074',
                'name' => 'Trường Cao đẳng Y tế Phú Thọ',
                'district_id' => 173,
                'city_id' => 15,
            ),
            168 => 
            array (
                'id' => 1169,
                'code' => '078',
                'name' => 'Trường THPT Bán Công Hùng Vương',
                'district_id' => 173,
                'city_id' => 15,
            ),
            169 => 
            array (
                'id' => 1170,
                'code' => '015',
                'name' => 'Trường THPT Đoan Hùng',
                'district_id' => 174,
                'city_id' => 15,
            ),
            170 => 
            array (
                'id' => 1171,
                'code' => '016',
                'name' => 'Trường THPT Chân Mộng',
                'district_id' => 174,
                'city_id' => 15,
            ),
            171 => 
            array (
                'id' => 1172,
                'code' => '017',
                'name' => 'Trường THPT Quế Lâm',
                'district_id' => 174,
                'city_id' => 15,
            ),
            172 => 
            array (
                'id' => 1173,
                'code' => '018',
                'name' => 'Trung tâm GDTX–HN Đoan Hùng',
                'district_id' => 174,
                'city_id' => 15,
            ),
            173 => 
            array (
                'id' => 1174,
                'code' => '079',
                'name' => 'Trường THPT Bán Công Đoan Hùng',
                'district_id' => 174,
                'city_id' => 15,
            ),
            174 => 
            array (
                'id' => 1175,
                'code' => '019',
                'name' => 'Trường THPT Thanh Ba',
                'district_id' => 175,
                'city_id' => 15,
            ),
            175 => 
            array (
                'id' => 1176,
                'code' => '020',
                'name' => 'Trường THPT Yển Khê',
                'district_id' => 175,
                'city_id' => 15,
            ),
            176 => 
            array (
                'id' => 1177,
                'code' => '021',
                'name' => 'Trung tâm GDTX Thanh Ba',
                'district_id' => 175,
                'city_id' => 15,
            ),
            177 => 
            array (
                'id' => 1178,
                'code' => '062',
                'name' => 'Trường Cao đẳng nghề cơ điện Phú Thọ',
                'district_id' => 175,
                'city_id' => 15,
            ),
            178 => 
            array (
                'id' => 1179,
                'code' => '080',
                'name' => 'Trường THPT Bán Công Thanh Ba',
                'district_id' => 175,
                'city_id' => 15,
            ),
            179 => 
            array (
                'id' => 1180,
                'code' => '022',
                'name' => 'Trường THPT Hạ Hoà',
                'district_id' => 176,
                'city_id' => 15,
            ),
            180 => 
            array (
                'id' => 1181,
                'code' => '023',
                'name' => 'Trường THPT Vĩnh Chân',
                'district_id' => 176,
                'city_id' => 15,
            ),
            181 => 
            array (
                'id' => 1182,
                'code' => '024',
                'name' => 'Trường THPT Xuân áng',
                'district_id' => 176,
                'city_id' => 15,
            ),
            182 => 
            array (
                'id' => 1183,
                'code' => '025',
                'name' => 'Trường THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 176,
                'city_id' => 15,
            ),
            183 => 
            array (
                'id' => 1184,
                'code' => '026',
                'name' => 'Trung tâm GDTX Hạ Hoà',
                'district_id' => 176,
                'city_id' => 15,
            ),
            184 => 
            array (
                'id' => 1185,
                'code' => '027',
                'name' => 'Trường THPT Cẩm Khê',
                'district_id' => 177,
                'city_id' => 15,
            ),
            185 => 
            array (
                'id' => 1186,
                'code' => '028',
                'name' => 'Trường THPT Hiền Đa',
                'district_id' => 177,
                'city_id' => 15,
            ),
            186 => 
            array (
                'id' => 1187,
                'code' => '029',
                'name' => 'Trường THPT Phương Xá',
                'district_id' => 177,
                'city_id' => 15,
            ),
            187 => 
            array (
                'id' => 1188,
                'code' => '030',
                'name' => 'Trung tâm GDTX – HN Cẩm Khê',
                'district_id' => 177,
                'city_id' => 15,
            ),
            188 => 
            array (
                'id' => 1189,
                'code' => '081',
                'name' => 'Trường THPT Bán Công Cẩm Khê',
                'district_id' => 177,
                'city_id' => 15,
            ),
            189 => 
            array (
                'id' => 1190,
                'code' => '031',
                'name' => 'Trường THPT Yên Lập',
                'district_id' => 178,
                'city_id' => 15,
            ),
            190 => 
            array (
                'id' => 1191,
                'code' => '032',
                'name' => 'Trường THPT Lương Sơn',
                'district_id' => 178,
                'city_id' => 15,
            ),
            191 => 
            array (
                'id' => 1192,
                'code' => '033',
                'name' => 'Trường THPT Minh Hoà',
                'district_id' => 178,
                'city_id' => 15,
            ),
            192 => 
            array (
                'id' => 1193,
                'code' => '034',
                'name' => 'Trung tâm GDTX Yên Lập',
                'district_id' => 178,
                'city_id' => 15,
            ),
            193 => 
            array (
                'id' => 1194,
                'code' => '035',
                'name' => 'Trường THPT Thanh Sơn',
                'district_id' => 179,
                'city_id' => 15,
            ),
            194 => 
            array (
                'id' => 1195,
                'code' => '036',
                'name' => 'Trường THPT Văn Miếu',
                'district_id' => 179,
                'city_id' => 15,
            ),
            195 => 
            array (
                'id' => 1196,
                'code' => '037',
                'name' => 'Trường THPT Hương Cần',
                'district_id' => 179,
                'city_id' => 15,
            ),
            196 => 
            array (
                'id' => 1197,
                'code' => '038',
                'name' => 'Trung tâm GDTX-HN Thanh Sơn',
                'district_id' => 179,
                'city_id' => 15,
            ),
            197 => 
            array (
                'id' => 1198,
                'code' => '067',
                'name' => 'Trường Trung cấp nghề Dân tộc nội trú Phú Thọ',
                'district_id' => 179,
                'city_id' => 15,
            ),
            198 => 
            array (
                'id' => 1199,
                'code' => '082',
                'name' => 'Trường THPT Bán Công Thanh Sơn',
                'district_id' => 179,
                'city_id' => 15,
            ),
            199 => 
            array (
                'id' => 1200,
                'code' => '039',
                'name' => 'Trường THPT Phù Ninh',
                'district_id' => 180,
                'city_id' => 15,
            ),
            200 => 
            array (
                'id' => 1201,
                'code' => '040',
                'name' => 'Trường THPT Tử Đà',
                'district_id' => 180,
                'city_id' => 15,
            ),
            201 => 
            array (
                'id' => 1202,
                'code' => '041',
                'name' => 'Trường THPT Trung Giáp',
                'district_id' => 180,
                'city_id' => 15,
            ),
            202 => 
            array (
                'id' => 1203,
                'code' => '042',
                'name' => 'Trường THPT Nguyễn Huệ',
                'district_id' => 180,
                'city_id' => 15,
            ),
            203 => 
            array (
                'id' => 1204,
                'code' => '043',
                'name' => 'Trung tâm GDTX Phù Ninh',
                'district_id' => 180,
                'city_id' => 15,
            ),
            204 => 
            array (
                'id' => 1205,
                'code' => '064',
                'name' => 'Trường Cao đẳng nghề Giấy và Cơ điện',
                'district_id' => 180,
                'city_id' => 15,
            ),
            205 => 
            array (
                'id' => 1206,
                'code' => '083',
                'name' => 'Trường THPT Bán Công Phù Ninh',
                'district_id' => 180,
                'city_id' => 15,
            ),
            206 => 
            array (
                'id' => 1207,
                'code' => '084',
                'name' => 'Trường THPT Phan Đăng Lưu',
                'district_id' => 180,
                'city_id' => 15,
            ),
            207 => 
            array (
                'id' => 1208,
                'code' => '044',
                'name' => 'Trường THPT Long Châu Sa',
                'district_id' => 181,
                'city_id' => 15,
            ),
            208 => 
            array (
                'id' => 1209,
                'code' => '045',
                'name' => 'Trường THPT Phong Châu',
                'district_id' => 181,
                'city_id' => 15,
            ),
            209 => 
            array (
                'id' => 1210,
                'code' => '046',
                'name' => 'Trường THPT Lâm Thao',
                'district_id' => 181,
                'city_id' => 15,
            ),
            210 => 
            array (
                'id' => 1211,
                'code' => '047',
                'name' => 'Trung tâm GDTX-HN Lâm Thao',
                'district_id' => 181,
                'city_id' => 15,
            ),
            211 => 
            array (
                'id' => 1212,
                'code' => '048',
                'name' => 'Trường Cao đẳng Công nghiệp Hóa chất',
                'district_id' => 181,
                'city_id' => 15,
            ),
            212 => 
            array (
                'id' => 1213,
                'code' => '072',
                'name' => 'Trường ĐH Công nghiệp Việt trì',
                'district_id' => 181,
                'city_id' => 15,
            ),
            213 => 
            array (
                'id' => 1214,
                'code' => '085',
                'name' => 'Trường THPT Bán Công Phong Châu',
                'district_id' => 181,
                'city_id' => 15,
            ),
            214 => 
            array (
                'id' => 1215,
                'code' => '049',
                'name' => 'Trường THPT Tam Nông',
                'district_id' => 182,
                'city_id' => 15,
            ),
            215 => 
            array (
                'id' => 1216,
                'code' => '050',
                'name' => 'Trường THPT Mỹ Văn',
                'district_id' => 182,
                'city_id' => 15,
            ),
            216 => 
            array (
                'id' => 1217,
                'code' => '051',
                'name' => 'Trường THPT Hưng Hoá',
                'district_id' => 182,
                'city_id' => 15,
            ),
            217 => 
            array (
                'id' => 1218,
                'code' => '052',
                'name' => 'Trung tâm GDTX Tam Nông',
                'district_id' => 182,
                'city_id' => 15,
            ),
            218 => 
            array (
                'id' => 1219,
                'code' => '086',
                'name' => 'Trường THPT Bán Công Tam Nông',
                'district_id' => 182,
                'city_id' => 15,
            ),
            219 => 
            array (
                'id' => 1220,
                'code' => '053',
                'name' => 'Trường THPT Thanh Thuỷ',
                'district_id' => 183,
                'city_id' => 15,
            ),
            220 => 
            array (
                'id' => 1221,
                'code' => '054',
                'name' => 'Trường THPT Trung Nghĩa',
                'district_id' => 183,
                'city_id' => 15,
            ),
            221 => 
            array (
                'id' => 1222,
                'code' => '055',
                'name' => 'Trường THPT Tản Đà',
                'district_id' => 183,
                'city_id' => 15,
            ),
            222 => 
            array (
                'id' => 1223,
                'code' => '056',
                'name' => 'Trung tâm GDTX Thanh Thuỷ',
                'district_id' => 183,
                'city_id' => 15,
            ),
            223 => 
            array (
                'id' => 1224,
                'code' => '057',
                'name' => 'Trường THPT Minh Đài',
                'district_id' => 184,
                'city_id' => 15,
            ),
            224 => 
            array (
                'id' => 1225,
                'code' => '058',
                'name' => 'Trường THPT Thạch Kiệt',
                'district_id' => 184,
                'city_id' => 15,
            ),
            225 => 
            array (
                'id' => 1226,
                'code' => '059',
                'name' => 'Trung tâm GDTX – HN Tân Sơn',
                'district_id' => 184,
                'city_id' => 15,
            ),
            226 => 
            array (
                'id' => 1227,
                'code' => '010',
                'name' => 'CĐ nghề Việt Đức',
                'district_id' => 185,
                'city_id' => 16,
            ),
            227 => 
            array (
                'id' => 1228,
                'code' => '011',
                'name' => 'THPT Trần Phú',
                'district_id' => 185,
                'city_id' => 16,
            ),
            228 => 
            array (
                'id' => 1229,
                'code' => '012',
                'name' => 'THPT Chuyên Vĩnh Phúc',
                'district_id' => 185,
                'city_id' => 16,
            ),
            229 => 
            array (
                'id' => 1230,
                'code' => '013',
                'name' => 'THPT Liên Bảo',
                'district_id' => 185,
                'city_id' => 16,
            ),
            230 => 
            array (
                'id' => 1231,
                'code' => '014',
                'name' => 'THPT Vĩnh Yên',
                'district_id' => 185,
                'city_id' => 16,
            ),
            231 => 
            array (
                'id' => 1232,
                'code' => '015',
                'name' => 'THPT DTNT Tỉnh',
                'district_id' => 185,
                'city_id' => 16,
            ),
            232 => 
            array (
                'id' => 1233,
                'code' => '016',
                'name' => 'THPT Nguyễn Thái Học',
                'district_id' => 185,
                'city_id' => 16,
            ),
            233 => 
            array (
                'id' => 1234,
                'code' => '017',
                'name' => 'TTGDTX Tỉnh',
                'district_id' => 185,
                'city_id' => 16,
            ),
            234 => 
            array (
                'id' => 1235,
                'code' => '018',
                'name' => 'CĐ Kinh tế Kỹ thuật Vĩnh Phúc',
                'district_id' => 185,
                'city_id' => 16,
            ),
            235 => 
            array (
                'id' => 1236,
                'code' => '019',
                'name' => 'TC Kỹ thuật Vĩnh Phúc',
                'district_id' => 185,
                'city_id' => 16,
            ),
            236 => 
            array (
                'id' => 1237,
                'code' => '020',
                'name' => 'Trường Quân sự Quân khu 2',
                'district_id' => 185,
                'city_id' => 16,
            ),
            237 => 
            array (
                'id' => 1238,
                'code' => '021',
                'name' => 'THPT Tam Dương',
                'district_id' => 186,
                'city_id' => 16,
            ),
            238 => 
            array (
                'id' => 1239,
                'code' => '022',
                'name' => 'TTGDTX & DN Tam Dương',
                'district_id' => 186,
                'city_id' => 16,
            ),
            239 => 
            array (
                'id' => 1240,
                'code' => '023',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 186,
                'city_id' => 16,
            ),
            240 => 
            array (
                'id' => 1241,
                'code' => '024',
                'name' => 'THPT Tam Dương 2',
                'district_id' => 186,
                'city_id' => 16,
            ),
            241 => 
            array (
                'id' => 1242,
                'code' => '031',
                'name' => 'THPT Ngô Gia Tự',
                'district_id' => 187,
                'city_id' => 16,
            ),
            242 => 
            array (
                'id' => 1243,
                'code' => '032',
                'name' => 'THPT Liễn Sơn',
                'district_id' => 187,
                'city_id' => 16,
            ),
            243 => 
            array (
                'id' => 1244,
                'code' => '034',
                'name' => 'THPT TrầnNguyên Hãn',
                'district_id' => 187,
                'city_id' => 16,
            ),
            244 => 
            array (
                'id' => 1245,
                'code' => '035',
                'name' => 'THPT Triệu Thái',
                'district_id' => 187,
                'city_id' => 16,
            ),
            245 => 
            array (
                'id' => 1246,
                'code' => '036',
                'name' => 'TTGDTX & DN  Lập Thạch',
                'district_id' => 187,
                'city_id' => 16,
            ),
            246 => 
            array (
                'id' => 1247,
                'code' => '037',
                'name' => 'THPT Thái Hoà',
                'district_id' => 187,
                'city_id' => 16,
            ),
            247 => 
            array (
                'id' => 1248,
                'code' => '039',
                'name' => 'THPT Văn Quán',
                'district_id' => 187,
                'city_id' => 16,
            ),
            248 => 
            array (
                'id' => 1249,
                'code' => '041',
                'name' => 'THPT Lê Xoay',
                'district_id' => 188,
                'city_id' => 16,
            ),
            249 => 
            array (
                'id' => 1250,
                'code' => '042',
                'name' => 'THPT Nguyễn Viết Xuân',
                'district_id' => 188,
                'city_id' => 16,
            ),
            250 => 
            array (
                'id' => 1251,
                'code' => '043',
                'name' => 'THPT Đội Cấn',
                'district_id' => 188,
                'city_id' => 16,
            ),
            251 => 
            array (
                'id' => 1252,
                'code' => '044',
                'name' => 'TTGDTX & DN Vĩnh Tường',
                'district_id' => 188,
                'city_id' => 16,
            ),
            252 => 
            array (
                'id' => 1253,
                'code' => '045',
                'name' => 'THPT  Vĩnh Tường',
                'district_id' => 188,
                'city_id' => 16,
            ),
            253 => 
            array (
                'id' => 1254,
                'code' => '046',
                'name' => 'THPT Nguyễn Thị Giang',
                'district_id' => 188,
                'city_id' => 16,
            ),
            254 => 
            array (
                'id' => 1255,
                'code' => '047',
                'name' => 'THPT Hồ Xuân Hương',
                'district_id' => 188,
                'city_id' => 16,
            ),
            255 => 
            array (
                'id' => 1256,
                'code' => '051',
                'name' => 'THPT Yên Lạc',
                'district_id' => 189,
                'city_id' => 16,
            ),
            256 => 
            array (
                'id' => 1257,
                'code' => '052',
                'name' => 'THPT Yên Lạc 2',
                'district_id' => 189,
                'city_id' => 16,
            ),
            257 => 
            array (
                'id' => 1258,
                'code' => '053',
                'name' => 'THPT Phạm Công Bình',
                'district_id' => 189,
                'city_id' => 16,
            ),
            258 => 
            array (
                'id' => 1259,
                'code' => '054',
                'name' => 'TTGDTX  & DN Yên Lạc',
                'district_id' => 189,
                'city_id' => 16,
            ),
            259 => 
            array (
                'id' => 1260,
                'code' => '055',
                'name' => 'THPT Đồng Đậu',
                'district_id' => 189,
                'city_id' => 16,
            ),
            260 => 
            array (
                'id' => 1261,
                'code' => '061',
                'name' => 'THPT Bình Xuyên',
                'district_id' => 190,
                'city_id' => 16,
            ),
            261 => 
            array (
                'id' => 1262,
                'code' => '062',
                'name' => 'THPT Quang Hà',
                'district_id' => 190,
                'city_id' => 16,
            ),
            262 => 
            array (
                'id' => 1263,
                'code' => '063',
                'name' => 'THPT Võ Thị Sáu',
                'district_id' => 190,
                'city_id' => 16,
            ),
            263 => 
            array (
                'id' => 1264,
                'code' => '064',
                'name' => 'TTGDTX & DN Bình Xuyên',
                'district_id' => 190,
                'city_id' => 16,
            ),
            264 => 
            array (
                'id' => 1265,
                'code' => '065',
                'name' => 'CĐ nghề cơ khí nông nghiệp',
                'district_id' => 190,
                'city_id' => 16,
            ),
            265 => 
            array (
                'id' => 1266,
                'code' => '066',
                'name' => 'THPT Nguyễn Duy Thì',
                'district_id' => 190,
                'city_id' => 16,
            ),
            266 => 
            array (
                'id' => 1267,
                'code' => '071',
                'name' => 'THPT Sáng Sơn',
                'district_id' => 191,
                'city_id' => 16,
            ),
            267 => 
            array (
                'id' => 1268,
                'code' => '072',
                'name' => 'THPT Bình Sơn',
                'district_id' => 191,
                'city_id' => 16,
            ),
            268 => 
            array (
                'id' => 1269,
                'code' => '073',
                'name' => 'THPT Sông Lô',
                'district_id' => 191,
                'city_id' => 16,
            ),
            269 => 
            array (
                'id' => 1270,
                'code' => '081',
                'name' => 'THPT Bến Tre',
                'district_id' => 192,
                'city_id' => 16,
            ),
            270 => 
            array (
                'id' => 1271,
                'code' => '082',
                'name' => 'THPT Hai Bà Trưng',
                'district_id' => 192,
                'city_id' => 16,
            ),
            271 => 
            array (
                'id' => 1272,
                'code' => '083',
                'name' => 'THPT Xuân Hòa',
                'district_id' => 192,
                'city_id' => 16,
            ),
            272 => 
            array (
                'id' => 1273,
                'code' => '084',
                'name' => 'TC nghề kỹ thuật xây dựng và nghiệp vụ',
                'district_id' => 192,
                'city_id' => 16,
            ),
            273 => 
            array (
                'id' => 1274,
                'code' => '085',
                'name' => 'THPT Phúc Yên',
                'district_id' => 192,
                'city_id' => 16,
            ),
            274 => 
            array (
                'id' => 1275,
                'code' => '086',
                'name' => 'TTGDTX Thị xã Phúc Yên',
                'district_id' => 192,
                'city_id' => 16,
            ),
            275 => 
            array (
                'id' => 1276,
                'code' => '087',
                'name' => 'CĐ Công nghiệp Phúc Yên',
                'district_id' => 192,
                'city_id' => 16,
            ),
            276 => 
            array (
                'id' => 1277,
                'code' => '089',
                'name' => 'CĐ nghề cơ khí cơ giới xây dựng số 1',
                'district_id' => 192,
                'city_id' => 16,
            ),
            277 => 
            array (
                'id' => 1278,
                'code' => '091',
                'name' => 'THPT Tam Đảo',
                'district_id' => 193,
                'city_id' => 16,
            ),
            278 => 
            array (
                'id' => 1279,
                'code' => '092',
                'name' => 'TTGDTX & DN Tam Đảo',
                'district_id' => 193,
                'city_id' => 16,
            ),
            279 => 
            array (
                'id' => 1280,
                'code' => '093',
                'name' => 'THPT Tam Đảo 2',
                'district_id' => 193,
                'city_id' => 16,
            ),
            280 => 
            array (
                'id' => 1281,
                'code' => '001',
                'name' => 'THPT Chuyên Hạ Long',
                'district_id' => 194,
                'city_id' => 17,
            ),
            281 => 
            array (
                'id' => 1282,
                'code' => '002',
                'name' => 'TTHNGDTX tỉnh',
                'district_id' => 194,
                'city_id' => 17,
            ),
            282 => 
            array (
                'id' => 1283,
                'code' => '003',
                'name' => 'THPT.DTNT tỉnh',
                'district_id' => 194,
                'city_id' => 17,
            ),
            283 => 
            array (
                'id' => 1284,
                'code' => '004',
                'name' => 'THPT Hòn Gai',
                'district_id' => 194,
                'city_id' => 17,
            ),
            284 => 
            array (
                'id' => 1285,
                'code' => '005',
                'name' => 'THPT Ngô Quyền',
                'district_id' => 194,
                'city_id' => 17,
            ),
            285 => 
            array (
                'id' => 1286,
                'code' => '006',
                'name' => 'THPT Vũ Văn Hiếu',
                'district_id' => 194,
                'city_id' => 17,
            ),
            286 => 
            array (
                'id' => 1287,
                'code' => '007',
                'name' => 'THPT Bãi Cháy',
                'district_id' => 194,
                'city_id' => 17,
            ),
            287 => 
            array (
                'id' => 1288,
                'code' => '008',
                'name' => 'THCS-THPT Lê Thánh Tông',
                'district_id' => 194,
                'city_id' => 17,
            ),
            288 => 
            array (
                'id' => 1289,
                'code' => '009',
                'name' => 'THPT  Hạ Long',
                'district_id' => 194,
                'city_id' => 17,
            ),
            289 => 
            array (
                'id' => 1290,
                'code' => '010',
                'name' => 'THPT Nguyễn Bình Khiêm',
                'district_id' => 194,
                'city_id' => 17,
            ),
            290 => 
            array (
                'id' => 1291,
                'code' => '011',
                'name' => 'Tiểu học-THCS-THPT Văn Lang',
                'district_id' => 194,
                'city_id' => 17,
            ),
            291 => 
            array (
                'id' => 1292,
                'code' => '012',
                'name' => 'Tiểu học-THCS-THPT Đoàn Thị Điểm',
                'district_id' => 194,
                'city_id' => 17,
            ),
            292 => 
            array (
                'id' => 1293,
                'code' => '090',
                'name' => 'Cơ sở 2 Đại học Hạ Long',
                'district_id' => 194,
                'city_id' => 17,
            ),
            293 => 
            array (
                'id' => 1294,
                'code' => '091',
                'name' => 'CĐ Y tế Q.Ninh',
                'district_id' => 194,
                'city_id' => 17,
            ),
            294 => 
            array (
                'id' => 1295,
                'code' => '097',
                'name' => 'CĐ nghề Than Khoảng sản Việt Nam',
                'district_id' => 194,
                'city_id' => 17,
            ),
            295 => 
            array (
                'id' => 1296,
                'code' => '101',
                'name' => 'TC nghề giao thông cơ điện',
                'district_id' => 194,
                'city_id' => 17,
            ),
            296 => 
            array (
                'id' => 1297,
                'code' => '102',
                'name' => 'TC nghề Xây dựng và Công nghiệp',
                'district_id' => 194,
                'city_id' => 17,
            ),
            297 => 
            array (
                'id' => 1298,
                'code' => '103',
                'name' => 'TC nghề Công nghệ Hạ Long',
                'district_id' => 194,
                'city_id' => 17,
            ),
            298 => 
            array (
                'id' => 1299,
                'code' => '014',
                'name' => 'THPT Cẩm Phả',
                'district_id' => 195,
                'city_id' => 17,
            ),
            299 => 
            array (
                'id' => 1300,
                'code' => '015',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 195,
                'city_id' => 17,
            ),
            300 => 
            array (
                'id' => 1301,
                'code' => '016',
                'name' => 'THPT Cửa Ông',
                'district_id' => 195,
                'city_id' => 17,
            ),
            301 => 
            array (
                'id' => 1302,
                'code' => '017',
                'name' => 'THPT  Lê Quý Đôn',
                'district_id' => 195,
                'city_id' => 17,
            ),
            302 => 
            array (
                'id' => 1303,
                'code' => '018',
                'name' => 'THPT Mông Dương',
                'district_id' => 195,
                'city_id' => 17,
            ),
            303 => 
            array (
                'id' => 1304,
                'code' => '019',
                'name' => 'THPT  Lương Thế Vinh',
                'district_id' => 195,
                'city_id' => 17,
            ),
            304 => 
            array (
                'id' => 1305,
                'code' => '020',
                'name' => 'THPT Hùng Vương',
                'district_id' => 195,
                'city_id' => 17,
            ),
            305 => 
            array (
                'id' => 1306,
                'code' => '021',
                'name' => 'TTHNGDTX  Cẩm Phả',
                'district_id' => 195,
                'city_id' => 17,
            ),
            306 => 
            array (
                'id' => 1307,
                'code' => '092',
                'name' => 'CĐ C.nghiệp C.Phả',
                'district_id' => 195,
                'city_id' => 17,
            ),
            307 => 
            array (
                'id' => 1308,
                'code' => '093',
                'name' => 'Cty Cơ khí T.tâm Cẩm Phả',
                'district_id' => 195,
                'city_id' => 17,
            ),
            308 => 
            array (
                'id' => 1309,
                'code' => '098',
                'name' => 'P.hiệu ĐT Cẩm Phả, CĐN Than KSVN',
                'district_id' => 195,
                'city_id' => 17,
            ),
            309 => 
            array (
                'id' => 1310,
                'code' => '024',
                'name' => 'THPT Uông Bí',
                'district_id' => 196,
                'city_id' => 17,
            ),
            310 => 
            array (
                'id' => 1311,
                'code' => '025',
                'name' => 'THPT Hoàng Văn Thụ',
                'district_id' => 196,
                'city_id' => 17,
            ),
            311 => 
            array (
                'id' => 1312,
                'code' => '026',
                'name' => 'TTHNGDTX Uông Bí',
                'district_id' => 196,
                'city_id' => 17,
            ),
            312 => 
            array (
                'id' => 1313,
                'code' => '027',
                'name' => 'THPT Hồng Đức',
                'district_id' => 196,
                'city_id' => 17,
            ),
            313 => 
            array (
                'id' => 1314,
                'code' => '028',
                'name' => 'THPT Nguyễn Tất  Thành',
                'district_id' => 196,
                'city_id' => 17,
            ),
            314 => 
            array (
                'id' => 1315,
                'code' => '094',
                'name' => 'TH Kinh Tế Q.Ninh',
                'district_id' => 196,
                'city_id' => 17,
            ),
            315 => 
            array (
                'id' => 1316,
                'code' => '096',
                'name' => 'CĐ Công nghiệp &Xây dựng',
                'district_id' => 196,
                'city_id' => 17,
            ),
            316 => 
            array (
                'id' => 1317,
                'code' => '099',
                'name' => 'P.hiệu ĐT Hữu Nghị, CĐN Than KSVN',
                'district_id' => 196,
                'city_id' => 17,
            ),
            317 => 
            array (
                'id' => 1318,
                'code' => '031',
                'name' => 'THPT Trần Phú',
                'district_id' => 197,
                'city_id' => 17,
            ),
            318 => 
            array (
                'id' => 1319,
                'code' => '032',
                'name' => 'THPT Lý Thường Kiệt',
                'district_id' => 197,
                'city_id' => 17,
            ),
            319 => 
            array (
                'id' => 1320,
                'code' => '033',
                'name' => 'THCS và THPT Chu Văn An',
                'district_id' => 197,
                'city_id' => 17,
            ),
            320 => 
            array (
                'id' => 1321,
                'code' => '034',
                'name' => 'TT HN&GDTX Móng Cái',
                'district_id' => 197,
                'city_id' => 17,
            ),
            321 => 
            array (
                'id' => 1322,
                'code' => '100',
                'name' => 'P.hiệu ĐT Móng Cái, CĐN Than KSVN',
                'district_id' => 197,
                'city_id' => 17,
            ),
            322 => 
            array (
                'id' => 1323,
                'code' => '037',
                'name' => 'THPT Bình Liêu',
                'district_id' => 198,
                'city_id' => 17,
            ),
            323 => 
            array (
                'id' => 1324,
                'code' => '038',
                'name' => 'THCS-THPT Hoành Mô',
                'district_id' => 198,
                'city_id' => 17,
            ),
            324 => 
            array (
                'id' => 1325,
                'code' => '039',
                'name' => 'TT HN&GDTX Bình Liêu',
                'district_id' => 198,
                'city_id' => 17,
            ),
            325 => 
            array (
                'id' => 1326,
                'code' => '040',
                'name' => 'THPT Đầm Hà',
                'district_id' => 199,
                'city_id' => 17,
            ),
            326 => 
            array (
                'id' => 1327,
                'code' => '041',
                'name' => 'THCS-THPT Lê Lợi',
                'district_id' => 199,
                'city_id' => 17,
            ),
            327 => 
            array (
                'id' => 1328,
                'code' => '042',
                'name' => 'TT HN&GDTX Đầm Hà',
                'district_id' => 199,
                'city_id' => 17,
            ),
            328 => 
            array (
                'id' => 1329,
                'code' => '044',
                'name' => 'THPT Quảng Hà',
                'district_id' => 200,
                'city_id' => 17,
            ),
            329 => 
            array (
                'id' => 1330,
                'code' => '045',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 200,
                'city_id' => 17,
            ),
            330 => 
            array (
                'id' => 1331,
                'code' => '046',
                'name' => 'TT HN&GDTX Hải Hà',
                'district_id' => 200,
                'city_id' => 17,
            ),
            331 => 
            array (
                'id' => 1332,
                'code' => '047',
                'name' => 'THCS và THPT Đường Hoa Cương',
                'district_id' => 200,
                'city_id' => 17,
            ),
            332 => 
            array (
                'id' => 1333,
                'code' => '048',
                'name' => 'THPT Tiên Yên',
                'district_id' => 201,
                'city_id' => 17,
            ),
            333 => 
            array (
                'id' => 1334,
                'code' => '049',
                'name' => 'THPT Hải Đông',
                'district_id' => 201,
                'city_id' => 17,
            ),
            334 => 
            array (
                'id' => 1335,
                'code' => '050',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 201,
                'city_id' => 17,
            ),
            335 => 
            array (
                'id' => 1336,
                'code' => '051',
                'name' => 'TT HN&GDTX Tiên Yên',
                'district_id' => 201,
                'city_id' => 17,
            ),
            336 => 
            array (
                'id' => 1337,
                'code' => '052',
                'name' => 'PT DTNT Tiên Yên',
                'district_id' => 201,
                'city_id' => 17,
            ),
            337 => 
            array (
                'id' => 1338,
                'code' => '053',
                'name' => 'THPT Ba Chẽ',
                'district_id' => 202,
                'city_id' => 17,
            ),
            338 => 
            array (
                'id' => 1339,
                'code' => '054',
                'name' => 'TT HN&GDTX Ba Chẽ',
                'district_id' => 202,
                'city_id' => 17,
            ),
            339 => 
            array (
                'id' => 1340,
                'code' => '056',
                'name' => 'THPT Đông Triều',
                'district_id' => 203,
                'city_id' => 17,
            ),
            340 => 
            array (
                'id' => 1341,
                'code' => '057',
                'name' => 'THPT  Hoàng Quốc Việt',
                'district_id' => 203,
                'city_id' => 17,
            ),
            341 => 
            array (
                'id' => 1342,
                'code' => '058',
                'name' => 'THPT Hoàng Hoa Thám',
                'district_id' => 203,
                'city_id' => 17,
            ),
            342 => 
            array (
                'id' => 1343,
                'code' => '059',
                'name' => 'THPT Lê Chân',
                'district_id' => 203,
                'city_id' => 17,
            ),
            343 => 
            array (
                'id' => 1344,
                'code' => '060',
                'name' => 'THCS -THPT Trần Nhân Tông',
                'district_id' => 203,
                'city_id' => 17,
            ),
            344 => 
            array (
                'id' => 1345,
                'code' => '061',
                'name' => 'THCS-THPT Nguyễn Bình',
                'district_id' => 203,
                'city_id' => 17,
            ),
            345 => 
            array (
                'id' => 1346,
                'code' => '062',
                'name' => 'TTHNGDTX Đông Triều',
                'district_id' => 203,
                'city_id' => 17,
            ),
            346 => 
            array (
                'id' => 1347,
                'code' => '063',
                'name' => 'TT.ĐTBD-ĐH Công nghiệp Q. Ninh',
                'district_id' => 203,
                'city_id' => 17,
            ),
            347 => 
            array (
                'id' => 1348,
                'code' => '064',
                'name' => 'Tiểu học-THCS-THPT Trần Hưng Đạo',
                'district_id' => 203,
                'city_id' => 17,
            ),
            348 => 
            array (
                'id' => 1349,
                'code' => '066',
                'name' => 'THPT Bạch Đằng',
                'district_id' => 204,
                'city_id' => 17,
            ),
            349 => 
            array (
                'id' => 1350,
                'code' => '067',
                'name' => 'THPT Minh Hà',
                'district_id' => 204,
                'city_id' => 17,
            ),
            350 => 
            array (
                'id' => 1351,
                'code' => '068',
                'name' => 'THPT Đông Thành',
                'district_id' => 204,
                'city_id' => 17,
            ),
            351 => 
            array (
                'id' => 1352,
                'code' => '069',
                'name' => 'THPT Yên Hưng',
                'district_id' => 204,
                'city_id' => 17,
            ),
            352 => 
            array (
                'id' => 1353,
                'code' => '070',
                'name' => 'THPT Trần Quốc Tuấn',
                'district_id' => 204,
                'city_id' => 17,
            ),
            353 => 
            array (
                'id' => 1354,
                'code' => '071',
                'name' => 'THPT Ngô Gia Tự',
                'district_id' => 204,
                'city_id' => 17,
            ),
            354 => 
            array (
                'id' => 1355,
                'code' => '072',
                'name' => 'TTHN-GDTX  Quảng Yên',
                'district_id' => 204,
                'city_id' => 17,
            ),
            355 => 
            array (
                'id' => 1356,
                'code' => '095',
                'name' => 'CĐ Nông Lâm Đông Bắc',
                'district_id' => 204,
                'city_id' => 17,
            ),
            356 => 
            array (
                'id' => 1357,
                'code' => '075',
                'name' => 'THPT Hoành Bồ',
                'district_id' => 205,
                'city_id' => 17,
            ),
            357 => 
            array (
                'id' => 1358,
                'code' => '076',
                'name' => 'THPT Quảng La',
                'district_id' => 205,
                'city_id' => 17,
            ),
            358 => 
            array (
                'id' => 1359,
                'code' => '077',
                'name' => 'THPT Thống Nhất',
                'district_id' => 205,
                'city_id' => 17,
            ),
            359 => 
            array (
                'id' => 1360,
                'code' => '078',
                'name' => 'TTHN-GDTX Hoành Bồ',
                'district_id' => 205,
                'city_id' => 17,
            ),
            360 => 
            array (
                'id' => 1361,
                'code' => '104',
                'name' => 'P.hiệu ĐT Hoành Bồ, CĐN Than KSVN',
                'district_id' => 205,
                'city_id' => 17,
            ),
            361 => 
            array (
                'id' => 1362,
                'code' => '080',
                'name' => 'THPT Hải Đảo',
                'district_id' => 206,
                'city_id' => 17,
            ),
            362 => 
            array (
                'id' => 1363,
                'code' => '081',
                'name' => 'THPT  Quan Lạn',
                'district_id' => 206,
                'city_id' => 17,
            ),
            363 => 
            array (
                'id' => 1364,
                'code' => '082',
                'name' => 'THPT Trần Khánh Dư',
                'district_id' => 206,
                'city_id' => 17,
            ),
            364 => 
            array (
                'id' => 1365,
                'code' => '083',
                'name' => 'TTHN-GDTX  Vân Đồn',
                'district_id' => 206,
                'city_id' => 17,
            ),
            365 => 
            array (
                'id' => 1366,
                'code' => '085',
                'name' => 'THPT Cô Tô',
                'district_id' => 207,
                'city_id' => 17,
            ),
            366 => 
            array (
                'id' => 1367,
                'code' => '086',
                'name' => 'TTHN-GDTX  Cô Tô',
                'district_id' => 207,
                'city_id' => 17,
            ),
            367 => 
            array (
                'id' => 1368,
                'code' => '011',
                'name' => 'THPT Ngô Sỹ Liên',
                'district_id' => 208,
                'city_id' => 18,
            ),
            368 => 
            array (
                'id' => 1369,
                'code' => '012',
                'name' => 'THPT Chuyên Bắc Giang',
                'district_id' => 208,
                'city_id' => 18,
            ),
            369 => 
            array (
                'id' => 1370,
                'code' => '013',
                'name' => 'THPT Thái Thuận',
                'district_id' => 208,
                'city_id' => 18,
            ),
            370 => 
            array (
                'id' => 1371,
                'code' => '038',
                'name' => 'THPT Dân lập Nguyên Hồng',
                'district_id' => 208,
                'city_id' => 18,
            ),
            371 => 
            array (
                'id' => 1372,
                'code' => '039',
                'name' => 'THPT Dân lập Hồ Tùng Mậu',
                'district_id' => 208,
                'city_id' => 18,
            ),
            372 => 
            array (
                'id' => 1373,
                'code' => '040',
                'name' => 'THPT DTNT tỉnh',
                'district_id' => 208,
                'city_id' => 18,
            ),
            373 => 
            array (
                'id' => 1374,
                'code' => '041',
                'name' => 'TT GDTX tỉnh',
                'district_id' => 208,
                'city_id' => 18,
            ),
            374 => 
            array (
                'id' => 1375,
                'code' => '042',
                'name' => 'TT Ngoại ngữ -Tin học BG',
                'district_id' => 208,
                'city_id' => 18,
            ),
            375 => 
            array (
                'id' => 1376,
                'code' => '043',
                'name' => 'TTGD KTTH  Hướng nghiệp',
                'district_id' => 208,
                'city_id' => 18,
            ),
            376 => 
            array (
                'id' => 1377,
                'code' => '061',
                'name' => 'CĐ Nghề Bắc Giang',
                'district_id' => 208,
                'city_id' => 18,
            ),
            377 => 
            array (
                'id' => 1378,
                'code' => '067',
                'name' => 'CĐ Kỹ thuật Công nghiệp',
                'district_id' => 208,
                'city_id' => 18,
            ),
            378 => 
            array (
                'id' => 1379,
                'code' => '077',
                'name' => 'TC nghề Thủ công mỹ nghệ 19.5',
                'district_id' => 208,
                'city_id' => 18,
            ),
            379 => 
            array (
                'id' => 1380,
                'code' => '079',
                'name' => 'TC nghề GTVT',
                'district_id' => 208,
                'city_id' => 18,
            ),
            380 => 
            array (
                'id' => 1381,
                'code' => '080',
                'name' => 'TC nghề Lái xe số 1',
                'district_id' => 208,
                'city_id' => 18,
            ),
            381 => 
            array (
                'id' => 1382,
                'code' => '082',
                'name' => 'THPT Giáp Hải',
                'district_id' => 208,
                'city_id' => 18,
            ),
            382 => 
            array (
                'id' => 1383,
                'code' => '083',
                'name' => 'Tr. TC Văn hóa-Thể thao và Du lịch',
                'district_id' => 208,
                'city_id' => 18,
            ),
            383 => 
            array (
                'id' => 1384,
                'code' => '084',
                'name' => 'Tr CĐ Công nghệ Việt Hàn Bắc Giang',
                'district_id' => 208,
                'city_id' => 18,
            ),
            384 => 
            array (
                'id' => 1385,
                'code' => '085',
                'name' => 'Tr. Tiểu học, THCS, THPT Thu Hương',
                'district_id' => 208,
                'city_id' => 18,
            ),
            385 => 
            array (
                'id' => 1386,
                'code' => '014',
                'name' => 'THPT Yên Thế',
                'district_id' => 209,
                'city_id' => 18,
            ),
            386 => 
            array (
                'id' => 1387,
                'code' => '015',
                'name' => 'THPT Bố Hạ',
                'district_id' => 209,
                'city_id' => 18,
            ),
            387 => 
            array (
                'id' => 1388,
                'code' => '044',
                'name' => 'THPT Mỏ Trạng',
                'district_id' => 209,
                'city_id' => 18,
            ),
            388 => 
            array (
                'id' => 1389,
                'code' => '045',
                'name' => 'TTGDTX H. Yên Thế',
                'district_id' => 209,
                'city_id' => 18,
            ),
            389 => 
            array (
                'id' => 1390,
                'code' => '075',
                'name' => 'TC nghề MN Yên Thế',
                'district_id' => 209,
                'city_id' => 18,
            ),
            390 => 
            array (
                'id' => 1391,
                'code' => '016',
                'name' => 'THPT Lục Ngạn 1',
                'district_id' => 210,
                'city_id' => 18,
            ),
            391 => 
            array (
                'id' => 1392,
                'code' => '017',
                'name' => 'THPT Lục Ngạn 2',
                'district_id' => 210,
                'city_id' => 18,
            ),
            392 => 
            array (
                'id' => 1393,
                'code' => '018',
                'name' => 'THPT Lục ngạn 3',
                'district_id' => 210,
                'city_id' => 18,
            ),
            393 => 
            array (
                'id' => 1394,
                'code' => '046',
                'name' => 'Trung THPT Lục Ngạn số 4',
                'district_id' => 210,
                'city_id' => 18,
            ),
            394 => 
            array (
                'id' => 1395,
                'code' => '047',
                'name' => 'TTGDTX H. Lục Ngạn',
                'district_id' => 210,
                'city_id' => 18,
            ),
            395 => 
            array (
                'id' => 1396,
                'code' => '068',
                'name' => 'DTNT H. Lục Ngạn',
                'district_id' => 210,
                'city_id' => 18,
            ),
            396 => 
            array (
                'id' => 1397,
                'code' => '070',
                'name' => 'THPT bán công Lục Ngạn',
                'district_id' => 210,
                'city_id' => 18,
            ),
            397 => 
            array (
                'id' => 1398,
                'code' => '048',
                'name' => 'THPT Sơn Động',
                'district_id' => 211,
                'city_id' => 18,
            ),
            398 => 
            array (
                'id' => 1399,
                'code' => '049',
                'name' => 'DTNT H. Sơn Động',
                'district_id' => 211,
                'city_id' => 18,
            ),
            399 => 
            array (
                'id' => 1400,
                'code' => '050',
                'name' => 'THPT Sơn Động 2',
                'district_id' => 211,
                'city_id' => 18,
            ),
            400 => 
            array (
                'id' => 1401,
                'code' => '051',
                'name' => 'TTGDTX H. Sơn Động',
                'district_id' => 211,
                'city_id' => 18,
            ),
            401 => 
            array (
                'id' => 1402,
                'code' => '069',
                'name' => 'THPT Sơn Động 3',
                'district_id' => 211,
                'city_id' => 18,
            ),
            402 => 
            array (
                'id' => 1403,
                'code' => '019',
                'name' => 'THPT Lục Nam',
                'district_id' => 212,
                'city_id' => 18,
            ),
            403 => 
            array (
                'id' => 1404,
                'code' => '020',
                'name' => 'THPT Cẩm Lý',
                'district_id' => 212,
                'city_id' => 18,
            ),
            404 => 
            array (
                'id' => 1405,
                'code' => '021',
                'name' => 'THPT Phương Sơn',
                'district_id' => 212,
                'city_id' => 18,
            ),
            405 => 
            array (
                'id' => 1406,
                'code' => '022',
                'name' => 'THPT Tứ Sơn',
                'district_id' => 212,
                'city_id' => 18,
            ),
            406 => 
            array (
                'id' => 1407,
                'code' => '023',
                'name' => 'THPT Tân Yên 1',
                'district_id' => 212,
                'city_id' => 18,
            ),
            407 => 
            array (
                'id' => 1408,
                'code' => '052',
                'name' => 'THPT Dân lập Đồi Ngô',
                'district_id' => 212,
                'city_id' => 18,
            ),
            408 => 
            array (
                'id' => 1409,
                'code' => '053',
                'name' => 'TTGDTX H. Lục Nam',
                'district_id' => 212,
                'city_id' => 18,
            ),
            409 => 
            array (
                'id' => 1410,
                'code' => '071',
                'name' => 'THPT Tư thục Thanh Hồ',
                'district_id' => 212,
                'city_id' => 18,
            ),
            410 => 
            array (
                'id' => 1411,
                'code' => '024',
                'name' => 'THPT Tân Yên 2',
                'district_id' => 213,
                'city_id' => 18,
            ),
            411 => 
            array (
                'id' => 1412,
                'code' => '025',
                'name' => 'THPT Nhã Nam',
                'district_id' => 213,
                'city_id' => 18,
            ),
            412 => 
            array (
                'id' => 1413,
                'code' => '054',
                'name' => 'THPT Dân lập Tân Yên',
                'district_id' => 213,
                'city_id' => 18,
            ),
            413 => 
            array (
                'id' => 1414,
                'code' => '055',
                'name' => 'TTGDTX H. Tân Yên',
                'district_id' => 213,
                'city_id' => 18,
            ),
            414 => 
            array (
                'id' => 1415,
                'code' => '026',
                'name' => 'THPT Hiệp Hoà 1',
                'district_id' => 214,
                'city_id' => 18,
            ),
            415 => 
            array (
                'id' => 1416,
                'code' => '027',
                'name' => 'THPT Hiệp Hoà 2',
                'district_id' => 214,
                'city_id' => 18,
            ),
            416 => 
            array (
                'id' => 1417,
                'code' => '028',
                'name' => 'THPT Hiệp Hoà 3',
                'district_id' => 214,
                'city_id' => 18,
            ),
            417 => 
            array (
                'id' => 1418,
                'code' => '056',
                'name' => 'THPT Dân lập Hiệp Hoà 1',
                'district_id' => 214,
                'city_id' => 18,
            ),
            418 => 
            array (
                'id' => 1419,
                'code' => '057',
                'name' => 'THPT Dân lập Hiệp Hoà 2',
                'district_id' => 214,
                'city_id' => 18,
            ),
            419 => 
            array (
                'id' => 1420,
                'code' => '058',
                'name' => 'TTGDTX H. Hiệp Hoà',
                'district_id' => 214,
                'city_id' => 18,
            ),
            420 => 
            array (
                'id' => 1421,
                'code' => '074',
                'name' => 'THPT Hiệp Hòa 4',
                'district_id' => 214,
                'city_id' => 18,
            ),
            421 => 
            array (
                'id' => 1422,
                'code' => '081',
                'name' => 'Tr. Tư thục THCS và THPT Hiệp Hòa',
                'district_id' => 214,
                'city_id' => 18,
            ),
            422 => 
            array (
                'id' => 1423,
                'code' => '029',
                'name' => 'THPT Lạng Giang 1',
                'district_id' => 215,
                'city_id' => 18,
            ),
            423 => 
            array (
                'id' => 1424,
                'code' => '030',
                'name' => 'THPT Lạng Giang 2',
                'district_id' => 215,
                'city_id' => 18,
            ),
            424 => 
            array (
                'id' => 1425,
                'code' => '031',
                'name' => 'THPT Lạng Giang 3',
                'district_id' => 215,
                'city_id' => 18,
            ),
            425 => 
            array (
                'id' => 1426,
                'code' => '059',
                'name' => 'THPT Dân lập Thái Đào',
                'district_id' => 215,
                'city_id' => 18,
            ),
            426 => 
            array (
                'id' => 1427,
                'code' => '060',
                'name' => 'THPT Dân Lập Phi Mô',
                'district_id' => 215,
                'city_id' => 18,
            ),
            427 => 
            array (
                'id' => 1428,
                'code' => '062',
                'name' => 'TTGDTX H. Lạng Giang',
                'district_id' => 215,
                'city_id' => 18,
            ),
            428 => 
            array (
                'id' => 1429,
                'code' => '076',
                'name' => 'TC nghề số 12 Bộ Quốc phòng',
                'district_id' => 215,
                'city_id' => 18,
            ),
            429 => 
            array (
                'id' => 1430,
                'code' => '032',
                'name' => 'THPT Việt Yên 1',
                'district_id' => 216,
                'city_id' => 18,
            ),
            430 => 
            array (
                'id' => 1431,
                'code' => '033',
                'name' => 'THPT Việt Yên 2',
                'district_id' => 216,
                'city_id' => 18,
            ),
            431 => 
            array (
                'id' => 1432,
                'code' => '034',
                'name' => 'THPT Lý Thường Kiệt',
                'district_id' => 216,
                'city_id' => 18,
            ),
            432 => 
            array (
                'id' => 1433,
                'code' => '063',
                'name' => 'THPT Tư thục Việt Yên',
                'district_id' => 216,
                'city_id' => 18,
            ),
            433 => 
            array (
                'id' => 1434,
                'code' => '064',
                'name' => 'TTGDTX H. Việt Yên',
                'district_id' => 216,
                'city_id' => 18,
            ),
            434 => 
            array (
                'id' => 1435,
                'code' => '035',
                'name' => 'THPT Yên Dũng 1',
                'district_id' => 217,
                'city_id' => 18,
            ),
            435 => 
            array (
                'id' => 1436,
                'code' => '036',
                'name' => 'THPT Yên Dũng 2',
                'district_id' => 217,
                'city_id' => 18,
            ),
            436 => 
            array (
                'id' => 1437,
                'code' => '037',
                'name' => 'THPT Yên Dũng 3',
                'district_id' => 217,
                'city_id' => 18,
            ),
            437 => 
            array (
                'id' => 1438,
                'code' => '065',
                'name' => 'THPT Dân lập Yên Dũng 1',
                'district_id' => 217,
                'city_id' => 18,
            ),
            438 => 
            array (
                'id' => 1439,
                'code' => '066',
                'name' => 'TTGDTX H. Yên Dũng',
                'district_id' => 217,
                'city_id' => 18,
            ),
            439 => 
            array (
                'id' => 1440,
                'code' => '072',
                'name' => 'THPT Dân lập Quang Trung',
                'district_id' => 217,
                'city_id' => 18,
            ),
            440 => 
            array (
                'id' => 1441,
                'code' => '073',
                'name' => 'THPT Tư thục Thái Sơn',
                'district_id' => 217,
                'city_id' => 18,
            ),
            441 => 
            array (
                'id' => 1442,
                'code' => '000',
                'name' => 'Sở GD&ĐT Bắc Ninh',
                'district_id' => 218,
                'city_id' => 19,
            ),
            442 => 
            array (
                'id' => 1443,
                'code' => '001',
                'name' => 'Phòng GD&ĐT Tp Bắc Ninh',
                'district_id' => 218,
                'city_id' => 19,
            ),
            443 => 
            array (
                'id' => 1444,
                'code' => '009',
                'name' => 'THPT Chuyên Bắc Ninh',
                'district_id' => 218,
                'city_id' => 19,
            ),
            444 => 
            array (
                'id' => 1445,
                'code' => '012',
                'name' => 'THPT Hoàng Quốc Việt',
                'district_id' => 218,
                'city_id' => 19,
            ),
            445 => 
            array (
                'id' => 1446,
                'code' => '013',
                'name' => 'THPT Hàn Thuyên',
                'district_id' => 218,
                'city_id' => 19,
            ),
            446 => 
            array (
                'id' => 1447,
                'code' => '025',
                'name' => 'THPT Lý Thường Kiệt',
                'district_id' => 218,
                'city_id' => 19,
            ),
            447 => 
            array (
                'id' => 1448,
                'code' => '027',
                'name' => 'THPT Lý Nhân Tông',
                'district_id' => 218,
                'city_id' => 19,
            ),
            448 => 
            array (
                'id' => 1449,
                'code' => '028',
                'name' => 'PT có nhiều cấp học Quốc tế Kinh Bắc',
                'district_id' => 218,
                'city_id' => 19,
            ),
            449 => 
            array (
                'id' => 1450,
                'code' => '031',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 218,
                'city_id' => 19,
            ),
            450 => 
            array (
                'id' => 1451,
                'code' => '037',
                'name' => 'TT GDTX tỉnh Bắc Ninh',
                'district_id' => 218,
                'city_id' => 19,
            ),
            451 => 
            array (
                'id' => 1452,
                'code' => '045',
                'name' => 'CĐ Nghề Kinh tế Kỹ thuật Bắc Ninh',
                'district_id' => 218,
                'city_id' => 19,
            ),
            452 => 
            array (
                'id' => 1453,
                'code' => '046',
                'name' => 'CĐ Nghề Cơ điện Xây dựng Bắc Ninh',
                'district_id' => 218,
                'city_id' => 19,
            ),
            453 => 
            array (
                'id' => 1454,
                'code' => '050',
                'name' => 'THPT Hàm Long',
                'district_id' => 218,
                'city_id' => 19,
            ),
            454 => 
            array (
                'id' => 1455,
                'code' => '058',
                'name' => 'TC nghề KT KT Liên đoàn Lao động',
                'district_id' => 218,
                'city_id' => 19,
            ),
            455 => 
            array (
                'id' => 1456,
                'code' => '002',
                'name' => 'Phòng GD&ĐT Yên Phong',
                'district_id' => 219,
                'city_id' => 19,
            ),
            456 => 
            array (
                'id' => 1457,
                'code' => '026',
                'name' => 'THPT Yên Phong 1',
                'district_id' => 219,
                'city_id' => 19,
            ),
            457 => 
            array (
                'id' => 1458,
                'code' => '032',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 219,
                'city_id' => 19,
            ),
            458 => 
            array (
                'id' => 1459,
                'code' => '038',
                'name' => 'TTGDTX Yên Phong',
                'district_id' => 219,
                'city_id' => 19,
            ),
            459 => 
            array (
                'id' => 1460,
                'code' => '049',
                'name' => 'THPT Yên Phong 2',
                'district_id' => 219,
                'city_id' => 19,
            ),
            460 => 
            array (
                'id' => 1461,
                'code' => '003',
                'name' => 'Phòng GD&ĐT Quế Võ',
                'district_id' => 220,
                'city_id' => 19,
            ),
            461 => 
            array (
                'id' => 1462,
                'code' => '018',
                'name' => 'THPT Quế Võ 1',
                'district_id' => 220,
                'city_id' => 19,
            ),
            462 => 
            array (
                'id' => 1463,
                'code' => '019',
                'name' => 'THPT Quế Võ 2',
                'district_id' => 220,
                'city_id' => 19,
            ),
            463 => 
            array (
                'id' => 1464,
                'code' => '020',
                'name' => 'THPT Quế Võ 3',
                'district_id' => 220,
                'city_id' => 19,
            ),
            464 => 
            array (
                'id' => 1465,
                'code' => '033',
                'name' => 'THPT Phố Mới',
                'district_id' => 220,
                'city_id' => 19,
            ),
            465 => 
            array (
                'id' => 1466,
                'code' => '039',
                'name' => 'TT GDTX số 2 tỉnh Bắc Ninh',
                'district_id' => 220,
                'city_id' => 19,
            ),
            466 => 
            array (
                'id' => 1467,
                'code' => '047',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 220,
                'city_id' => 19,
            ),
            467 => 
            array (
                'id' => 1468,
                'code' => '004',
                'name' => 'Phòng GD&ĐT Tiên Du',
                'district_id' => 221,
                'city_id' => 19,
            ),
            468 => 
            array (
                'id' => 1469,
                'code' => '024',
                'name' => 'THPT Tiên Du 1',
                'district_id' => 221,
                'city_id' => 19,
            ),
            469 => 
            array (
                'id' => 1470,
                'code' => '035',
                'name' => 'THPT Trần Nhân Tông',
                'district_id' => 221,
                'city_id' => 19,
            ),
            470 => 
            array (
                'id' => 1471,
                'code' => '040',
                'name' => 'TT GDTX Tiên Du',
                'district_id' => 221,
                'city_id' => 19,
            ),
            471 => 
            array (
                'id' => 1472,
                'code' => '048',
                'name' => 'THPT Nguyễn Đăng Đạo',
                'district_id' => 221,
                'city_id' => 19,
            ),
            472 => 
            array (
                'id' => 1473,
                'code' => '051',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 221,
                'city_id' => 19,
            ),
            473 => 
            array (
                'id' => 1474,
                'code' => '005',
                'name' => 'Phòng GD&ĐT Từ Sơn',
                'district_id' => 222,
                'city_id' => 19,
            ),
            474 => 
            array (
                'id' => 1475,
                'code' => '016',
                'name' => 'THPT Lý Thái Tổ',
                'district_id' => 222,
                'city_id' => 19,
            ),
            475 => 
            array (
                'id' => 1476,
                'code' => '017',
                'name' => 'THPT Ngô Gia Tự',
                'district_id' => 222,
                'city_id' => 19,
            ),
            476 => 
            array (
                'id' => 1477,
                'code' => '036',
                'name' => 'THPT Từ Sơn',
                'district_id' => 222,
                'city_id' => 19,
            ),
            477 => 
            array (
                'id' => 1478,
                'code' => '041',
                'name' => 'TT GDTX Từ Sơn',
                'district_id' => 222,
                'city_id' => 19,
            ),
            478 => 
            array (
                'id' => 1479,
                'code' => '053',
                'name' => 'THPT Nguyễn Văn Cừ',
                'district_id' => 222,
                'city_id' => 19,
            ),
            479 => 
            array (
                'id' => 1480,
                'code' => '055',
                'name' => 'PT năng khiếu TDTT Olympic',
                'district_id' => 222,
                'city_id' => 19,
            ),
            480 => 
            array (
                'id' => 1481,
                'code' => '056',
                'name' => 'CĐ Thủy sản',
                'district_id' => 222,
                'city_id' => 19,
            ),
            481 => 
            array (
                'id' => 1482,
                'code' => '057',
            'name' => 'CĐ Công nghiệp Hưng Yên (cơ sở 2)',
                'district_id' => 222,
                'city_id' => 19,
            ),
            482 => 
            array (
                'id' => 1483,
                'code' => '006',
                'name' => 'Phòng GD&ĐT Thuận Thành',
                'district_id' => 223,
                'city_id' => 19,
            ),
            483 => 
            array (
                'id' => 1484,
                'code' => '021',
                'name' => 'THPT Thuận Thành 1',
                'district_id' => 223,
                'city_id' => 19,
            ),
            484 => 
            array (
                'id' => 1485,
                'code' => '022',
                'name' => 'THPT Thuận Thành 2',
                'district_id' => 223,
                'city_id' => 19,
            ),
            485 => 
            array (
                'id' => 1486,
                'code' => '023',
                'name' => 'THPT Thuận Thành 3',
                'district_id' => 223,
                'city_id' => 19,
            ),
            486 => 
            array (
                'id' => 1487,
                'code' => '034',
                'name' => 'THPT Thiên Đức',
                'district_id' => 223,
                'city_id' => 19,
            ),
            487 => 
            array (
                'id' => 1488,
                'code' => '042',
                'name' => 'TT GDTX Thuận Thành',
                'district_id' => 223,
                'city_id' => 19,
            ),
            488 => 
            array (
                'id' => 1489,
                'code' => '054',
                'name' => 'THPT Kinh Bắc',
                'district_id' => 223,
                'city_id' => 19,
            ),
            489 => 
            array (
                'id' => 1490,
                'code' => '007',
                'name' => 'Phòng GD&ĐT Gia Bình',
                'district_id' => 224,
                'city_id' => 19,
            ),
            490 => 
            array (
                'id' => 1491,
                'code' => '010',
                'name' => 'THPT Gia Bình 1',
                'district_id' => 224,
                'city_id' => 19,
            ),
            491 => 
            array (
                'id' => 1492,
                'code' => '011',
                'name' => 'THPT Lê Văn Thịnh',
                'district_id' => 224,
                'city_id' => 19,
            ),
            492 => 
            array (
                'id' => 1493,
                'code' => '029',
                'name' => 'THPT Gia Bình 3',
                'district_id' => 224,
                'city_id' => 19,
            ),
            493 => 
            array (
                'id' => 1494,
                'code' => '043',
                'name' => 'TT GDTX Gia Bình',
                'district_id' => 224,
                'city_id' => 19,
            ),
            494 => 
            array (
                'id' => 1495,
                'code' => '008',
                'name' => 'Phòng GD&ĐT Lương Tài',
                'district_id' => 225,
                'city_id' => 19,
            ),
            495 => 
            array (
                'id' => 1496,
                'code' => '014',
                'name' => 'THPT Lương Tài 1',
                'district_id' => 225,
                'city_id' => 19,
            ),
            496 => 
            array (
                'id' => 1497,
                'code' => '015',
                'name' => 'THPT Lương Tài  2',
                'district_id' => 225,
                'city_id' => 19,
            ),
            497 => 
            array (
                'id' => 1498,
                'code' => '030',
                'name' => 'THPT Lương Tài 3',
                'district_id' => 225,
                'city_id' => 19,
            ),
            498 => 
            array (
                'id' => 1499,
                'code' => '044',
                'name' => 'TT GDTX Lương Tài',
                'district_id' => 225,
                'city_id' => 19,
            ),
            499 => 
            array (
                'id' => 1500,
                'code' => '052',
                'name' => 'THPT Hải á',
                'district_id' => 225,
                'city_id' => 19,
            ),
        ));
        \DB::table('organization_school')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'code' => '013',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 226,
                'city_id' => 21,
            ),
            1 => 
            array (
                'id' => 1502,
                'code' => '014',
                'name' => 'THPT Hồng Quang',
                'district_id' => 226,
                'city_id' => 21,
            ),
            2 => 
            array (
                'id' => 1503,
                'code' => '015',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 226,
                'city_id' => 21,
            ),
            3 => 
            array (
                'id' => 1504,
                'code' => '016',
                'name' => 'THPT Hoàng Văn Thụ',
                'district_id' => 226,
                'city_id' => 21,
            ),
            4 => 
            array (
                'id' => 1505,
                'code' => '017',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 226,
                'city_id' => 21,
            ),
            5 => 
            array (
                'id' => 1506,
                'code' => '041',
                'name' => 'THPT Thành Đông',
                'district_id' => 226,
                'city_id' => 21,
            ),
            6 => 
            array (
                'id' => 1507,
                'code' => '055',
                'name' => 'TT GDTX TP. Hải Dương',
                'district_id' => 226,
                'city_id' => 21,
            ),
            7 => 
            array (
                'id' => 1508,
                'code' => '076',
                'name' => 'THPT ái  Quốc',
                'district_id' => 226,
                'city_id' => 21,
            ),
            8 => 
            array (
                'id' => 1509,
                'code' => '080',
                'name' => 'THPT Lương Thế Vinh',
                'district_id' => 226,
                'city_id' => 21,
            ),
            9 => 
            array (
                'id' => 1510,
                'code' => '081',
                'name' => 'THPT Marie Curie',
                'district_id' => 226,
                'city_id' => 21,
            ),
            10 => 
            array (
                'id' => 1511,
                'code' => '018',
                'name' => 'THPT Chí Linh',
                'district_id' => 227,
                'city_id' => 21,
            ),
            11 => 
            array (
                'id' => 1512,
                'code' => '019',
                'name' => 'THPT Phả Lại',
                'district_id' => 227,
                'city_id' => 21,
            ),
            12 => 
            array (
                'id' => 1513,
                'code' => '043',
                'name' => 'THPT Trần Phú',
                'district_id' => 227,
                'city_id' => 21,
            ),
            13 => 
            array (
                'id' => 1514,
                'code' => '056',
                'name' => 'TT GDTX - HN - DN Chí Linh',
                'district_id' => 227,
                'city_id' => 21,
            ),
            14 => 
            array (
                'id' => 1515,
                'code' => '074',
                'name' => 'THPT Bến Tắm',
                'district_id' => 227,
                'city_id' => 21,
            ),
            15 => 
            array (
                'id' => 1516,
                'code' => '020',
                'name' => 'THPT Nam Sách',
                'district_id' => 228,
                'city_id' => 21,
            ),
            16 => 
            array (
                'id' => 1517,
                'code' => '021',
                'name' => 'THPT Mạc Đĩnh Chi',
                'district_id' => 228,
                'city_id' => 21,
            ),
            17 => 
            array (
                'id' => 1518,
                'code' => '046',
                'name' => 'THPT Nam Sách II',
                'district_id' => 228,
                'city_id' => 21,
            ),
            18 => 
            array (
                'id' => 1519,
                'code' => '057',
                'name' => 'TT GDTX Nam Sách',
                'district_id' => 228,
                'city_id' => 21,
            ),
            19 => 
            array (
                'id' => 1520,
                'code' => '075',
                'name' => 'THPT Phan Bội Châu',
                'district_id' => 228,
                'city_id' => 21,
            ),
            20 => 
            array (
                'id' => 1521,
                'code' => '027',
                'name' => 'THPT Kinh Môn',
                'district_id' => 229,
                'city_id' => 21,
            ),
            21 => 
            array (
                'id' => 1522,
                'code' => '028',
                'name' => 'THPT Nhị Chiểu',
                'district_id' => 229,
                'city_id' => 21,
            ),
            22 => 
            array (
                'id' => 1523,
                'code' => '029',
                'name' => 'THPT Phúc Thành',
                'district_id' => 229,
                'city_id' => 21,
            ),
            23 => 
            array (
                'id' => 1524,
                'code' => '051',
                'name' => 'THPT Kinh Môn II',
                'district_id' => 229,
                'city_id' => 21,
            ),
            24 => 
            array (
                'id' => 1525,
                'code' => '058',
                'name' => 'TT GDTX Kinh Môn',
                'district_id' => 229,
                'city_id' => 21,
            ),
            25 => 
            array (
                'id' => 1526,
                'code' => '077',
                'name' => 'THPT Trần Quang Khải',
                'district_id' => 229,
                'city_id' => 21,
            ),
            26 => 
            array (
                'id' => 1527,
                'code' => '078',
                'name' => 'THPT Quang Thành',
                'district_id' => 229,
                'city_id' => 21,
            ),
            27 => 
            array (
                'id' => 1528,
                'code' => '032',
                'name' => 'THPT Gia Lộc',
                'district_id' => 230,
                'city_id' => 21,
            ),
            28 => 
            array (
                'id' => 1529,
                'code' => '033',
                'name' => 'THPT Đoàn Thượng',
                'district_id' => 230,
                'city_id' => 21,
            ),
            29 => 
            array (
                'id' => 1530,
                'code' => '047',
                'name' => 'THPT Gia Lộc II',
                'district_id' => 230,
                'city_id' => 21,
            ),
            30 => 
            array (
                'id' => 1531,
                'code' => '059',
                'name' => 'TT GDTX Gia Lộc',
                'district_id' => 230,
                'city_id' => 21,
            ),
            31 => 
            array (
                'id' => 1532,
                'code' => '030',
                'name' => 'THPT Tứ Kỳ',
                'district_id' => 231,
                'city_id' => 21,
            ),
            32 => 
            array (
                'id' => 1533,
                'code' => '031',
                'name' => 'THPT Cầu Xe',
                'district_id' => 231,
                'city_id' => 21,
            ),
            33 => 
            array (
                'id' => 1534,
                'code' => '044',
                'name' => 'THPT Hưng Đạo',
                'district_id' => 231,
                'city_id' => 21,
            ),
            34 => 
            array (
                'id' => 1535,
                'code' => '060',
                'name' => 'TT GDTX Tứ Kỳ',
                'district_id' => 231,
                'city_id' => 21,
            ),
            35 => 
            array (
                'id' => 1536,
                'code' => '072',
                'name' => 'THPT Tứ Kỳ II',
                'district_id' => 231,
                'city_id' => 21,
            ),
            36 => 
            array (
                'id' => 1537,
                'code' => '036',
                'name' => 'THPT Thanh Miện',
                'district_id' => 232,
                'city_id' => 21,
            ),
            37 => 
            array (
                'id' => 1538,
                'code' => '037',
                'name' => 'THPT Thanh Miện II',
                'district_id' => 232,
                'city_id' => 21,
            ),
            38 => 
            array (
                'id' => 1539,
                'code' => '052',
                'name' => 'THPT Thanh Miện III',
                'district_id' => 232,
                'city_id' => 21,
            ),
            39 => 
            array (
                'id' => 1540,
                'code' => '061',
                'name' => 'TT GDTX Thanh Miện',
                'district_id' => 232,
                'city_id' => 21,
            ),
            40 => 
            array (
                'id' => 1541,
                'code' => '085',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 232,
                'city_id' => 21,
            ),
            41 => 
            array (
                'id' => 1542,
                'code' => '034',
                'name' => 'THPT Ninh Giang',
                'district_id' => 233,
                'city_id' => 21,
            ),
            42 => 
            array (
                'id' => 1543,
                'code' => '035',
                'name' => 'THPT Quang Trung',
                'district_id' => 233,
                'city_id' => 21,
            ),
            43 => 
            array (
                'id' => 1544,
                'code' => '045',
                'name' => 'THPT Khúc Thừa Dụ',
                'district_id' => 233,
                'city_id' => 21,
            ),
            44 => 
            array (
                'id' => 1545,
                'code' => '050',
                'name' => 'THPT Ninh Giang II',
                'district_id' => 233,
                'city_id' => 21,
            ),
            45 => 
            array (
                'id' => 1546,
                'code' => '062',
                'name' => 'TT GDTX Ninh Giang',
                'district_id' => 233,
                'city_id' => 21,
            ),
            46 => 
            array (
                'id' => 1547,
                'code' => '079',
                'name' => 'THPT Hồng Đức',
                'district_id' => 233,
                'city_id' => 21,
            ),
            47 => 
            array (
                'id' => 1548,
                'code' => '038',
                'name' => 'THPT Cẩm Giàng',
                'district_id' => 234,
                'city_id' => 21,
            ),
            48 => 
            array (
                'id' => 1549,
                'code' => '042',
                'name' => 'THPT Tuệ Tĩnh',
                'district_id' => 234,
                'city_id' => 21,
            ),
            49 => 
            array (
                'id' => 1550,
                'code' => '053',
                'name' => 'THPT Cẩm Giàng II',
                'district_id' => 234,
                'city_id' => 21,
            ),
            50 => 
            array (
                'id' => 1551,
                'code' => '063',
                'name' => 'TT GDTX Cẩm Giàng',
                'district_id' => 234,
                'city_id' => 21,
            ),
            51 => 
            array (
                'id' => 1552,
                'code' => '022',
                'name' => 'THPT Thanh Hà',
                'district_id' => 235,
                'city_id' => 21,
            ),
            52 => 
            array (
                'id' => 1553,
                'code' => '023',
                'name' => 'THPT Hà Đông',
                'district_id' => 235,
                'city_id' => 21,
            ),
            53 => 
            array (
                'id' => 1554,
                'code' => '024',
                'name' => 'THPT Hà Bắc',
                'district_id' => 235,
                'city_id' => 21,
            ),
            54 => 
            array (
                'id' => 1555,
                'code' => '048',
                'name' => 'THPT Thanh Bình',
                'district_id' => 235,
                'city_id' => 21,
            ),
            55 => 
            array (
                'id' => 1556,
                'code' => '064',
                'name' => 'TT GDTX Thanh Hà',
                'district_id' => 235,
                'city_id' => 21,
            ),
            56 => 
            array (
                'id' => 1557,
                'code' => '025',
                'name' => 'THPT Kim Thành',
                'district_id' => 236,
                'city_id' => 21,
            ),
            57 => 
            array (
                'id' => 1558,
                'code' => '026',
                'name' => 'THPT Đồng Gia',
                'district_id' => 236,
                'city_id' => 21,
            ),
            58 => 
            array (
                'id' => 1559,
                'code' => '049',
                'name' => 'THPT Kim Thành II',
                'district_id' => 236,
                'city_id' => 21,
            ),
            59 => 
            array (
                'id' => 1560,
                'code' => '065',
                'name' => 'TT GDTX Kim Thành',
                'district_id' => 236,
                'city_id' => 21,
            ),
            60 => 
            array (
                'id' => 1561,
                'code' => '073',
                'name' => 'THPT Phú Thái',
                'district_id' => 236,
                'city_id' => 21,
            ),
            61 => 
            array (
                'id' => 1562,
                'code' => '039',
                'name' => 'THPT Bình Giang',
                'district_id' => 237,
                'city_id' => 21,
            ),
            62 => 
            array (
                'id' => 1563,
                'code' => '040',
                'name' => 'THPT Kẻ Sặt',
                'district_id' => 237,
                'city_id' => 21,
            ),
            63 => 
            array (
                'id' => 1564,
                'code' => '054',
                'name' => 'THPT Đường An',
                'district_id' => 237,
                'city_id' => 21,
            ),
            64 => 
            array (
                'id' => 1565,
                'code' => '066',
                'name' => 'TT GDTX Bình Giang',
                'district_id' => 237,
                'city_id' => 21,
            ),
            65 => 
            array (
                'id' => 1566,
                'code' => '082',
                'name' => 'THPT Vũ Ngọc Phan',
                'district_id' => 237,
                'city_id' => 21,
            ),
            66 => 
            array (
                'id' => 1567,
                'code' => '000',
                'name' => 'Sở GD&ĐT Hưng Yên',
                'district_id' => 238,
                'city_id' => 22,
            ),
            67 => 
            array (
                'id' => 1568,
                'code' => '011',
                'name' => 'THPT Chuyên tỉnh Hưng Yên',
                'district_id' => 238,
                'city_id' => 22,
            ),
            68 => 
            array (
                'id' => 1569,
                'code' => '012',
                'name' => 'THPT TP Hưng Yên',
                'district_id' => 238,
                'city_id' => 22,
            ),
            69 => 
            array (
                'id' => 1570,
                'code' => '013',
                'name' => 'TT GDTX TP Hưng Yên',
                'district_id' => 238,
                'city_id' => 22,
            ),
            70 => 
            array (
                'id' => 1571,
                'code' => '014',
                'name' => 'Phòng GD&ĐT TP. Hưng Yên',
                'district_id' => 238,
                'city_id' => 22,
            ),
            71 => 
            array (
                'id' => 1572,
                'code' => '015',
                'name' => 'THPT Tô Hiệu',
                'district_id' => 238,
                'city_id' => 22,
            ),
            72 => 
            array (
                'id' => 1573,
                'code' => '070',
                'name' => 'TC Văn hóa Ng.Thuật và D. Lịch HY',
                'district_id' => 238,
                'city_id' => 22,
            ),
            73 => 
            array (
                'id' => 1574,
                'code' => '072',
                'name' => 'TC Nghề Hưng Yên',
                'district_id' => 238,
                'city_id' => 22,
            ),
            74 => 
            array (
                'id' => 1575,
                'code' => '078',
                'name' => 'THPT Quang Trung',
                'district_id' => 238,
                'city_id' => 22,
            ),
            75 => 
            array (
                'id' => 1576,
                'code' => '084',
                'name' => 'Trường PT Đoàn thị Điểm Ecopark',
                'district_id' => 238,
                'city_id' => 22,
            ),
            76 => 
            array (
                'id' => 1577,
                'code' => '016',
                'name' => 'THPT Kim Động',
                'district_id' => 239,
                'city_id' => 22,
            ),
            77 => 
            array (
                'id' => 1578,
                'code' => '017',
                'name' => 'THPT Đức Hợp',
                'district_id' => 239,
                'city_id' => 22,
            ),
            78 => 
            array (
                'id' => 1579,
                'code' => '018',
                'name' => 'TT GDTX Kim Động',
                'district_id' => 239,
                'city_id' => 22,
            ),
            79 => 
            array (
                'id' => 1580,
                'code' => '019',
                'name' => 'Phòng GD&ĐT H Kim Động',
                'district_id' => 239,
                'city_id' => 22,
            ),
            80 => 
            array (
                'id' => 1581,
                'code' => '073',
                'name' => 'THPT Nghĩa Dân',
                'district_id' => 239,
                'city_id' => 22,
            ),
            81 => 
            array (
                'id' => 1582,
                'code' => '074',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 239,
                'city_id' => 22,
            ),
            82 => 
            array (
                'id' => 1583,
                'code' => '020',
                'name' => 'THPT Ân Thi',
                'district_id' => 240,
                'city_id' => 22,
            ),
            83 => 
            array (
                'id' => 1584,
                'code' => '021',
                'name' => 'THPT Ng Trung Ngạn',
                'district_id' => 240,
                'city_id' => 22,
            ),
            84 => 
            array (
                'id' => 1585,
                'code' => '022',
                'name' => 'TT GDTX Ân Thi',
                'district_id' => 240,
                'city_id' => 22,
            ),
            85 => 
            array (
                'id' => 1586,
                'code' => '023',
                'name' => 'TT KT-TH  Ân Thi',
                'district_id' => 240,
                'city_id' => 22,
            ),
            86 => 
            array (
                'id' => 1587,
                'code' => '024',
                'name' => 'Phòng GD&ĐT H Ân Thi',
                'district_id' => 240,
                'city_id' => 22,
            ),
            87 => 
            array (
                'id' => 1588,
                'code' => '025',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 240,
                'city_id' => 22,
            ),
            88 => 
            array (
                'id' => 1589,
                'code' => '026',
                'name' => 'THPT Phạm Ngũ Lão',
                'district_id' => 240,
                'city_id' => 22,
            ),
            89 => 
            array (
                'id' => 1590,
                'code' => '027',
                'name' => 'THPT Khoái Châu',
                'district_id' => 241,
                'city_id' => 22,
            ),
            90 => 
            array (
                'id' => 1591,
                'code' => '028',
                'name' => 'THPT Nam Khoái Châu',
                'district_id' => 241,
                'city_id' => 22,
            ),
            91 => 
            array (
                'id' => 1592,
                'code' => '029',
                'name' => 'TTGDTX Khoái Châu',
                'district_id' => 241,
                'city_id' => 22,
            ),
            92 => 
            array (
                'id' => 1593,
                'code' => '030',
                'name' => 'TT KT-TH Khoái Châu',
                'district_id' => 241,
                'city_id' => 22,
            ),
            93 => 
            array (
                'id' => 1594,
                'code' => '031',
                'name' => 'Phòng GD&ĐT Khoái Châu',
                'district_id' => 241,
                'city_id' => 22,
            ),
            94 => 
            array (
                'id' => 1595,
                'code' => '032',
                'name' => 'THPT Trần Quang Khải',
                'district_id' => 241,
                'city_id' => 22,
            ),
            95 => 
            array (
                'id' => 1596,
                'code' => '033',
                'name' => 'THPT Phùng Hưng',
                'district_id' => 241,
                'city_id' => 22,
            ),
            96 => 
            array (
                'id' => 1597,
                'code' => '066',
                'name' => 'CĐ Nghề Cơ điện và Thủy lợi',
                'district_id' => 241,
                'city_id' => 22,
            ),
            97 => 
            array (
                'id' => 1598,
                'code' => '079',
                'name' => 'THPT Nguyễn Siêu',
                'district_id' => 241,
                'city_id' => 22,
            ),
            98 => 
            array (
                'id' => 1599,
                'code' => '034',
                'name' => 'THPT Yên Mỹ',
                'district_id' => 242,
                'city_id' => 22,
            ),
            99 => 
            array (
                'id' => 1600,
                'code' => '035',
                'name' => 'THPT Triệu Quang Phục',
                'district_id' => 242,
                'city_id' => 22,
            ),
            100 => 
            array (
                'id' => 1601,
                'code' => '036',
                'name' => 'TT GDTX Phố Nối',
                'district_id' => 242,
                'city_id' => 22,
            ),
            101 => 
            array (
                'id' => 1602,
                'code' => '037',
                'name' => 'Phòng GD&ĐT H. Yên Mỹ',
                'district_id' => 242,
                'city_id' => 22,
            ),
            102 => 
            array (
                'id' => 1603,
                'code' => '038',
                'name' => 'THPT Hồng Bàng',
                'district_id' => 242,
                'city_id' => 22,
            ),
            103 => 
            array (
                'id' => 1604,
                'code' => '064',
                'name' => 'CĐ Công Nghiệp Hưng Yên',
                'district_id' => 242,
                'city_id' => 22,
            ),
            104 => 
            array (
                'id' => 1605,
                'code' => '076',
                'name' => 'THPT Minh Châu',
                'district_id' => 242,
                'city_id' => 22,
            ),
            105 => 
            array (
                'id' => 1606,
                'code' => '039',
                'name' => 'THPT Tiên Lữ',
                'district_id' => 243,
                'city_id' => 22,
            ),
            106 => 
            array (
                'id' => 1607,
                'code' => '040',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 243,
                'city_id' => 22,
            ),
            107 => 
            array (
                'id' => 1608,
                'code' => '041',
                'name' => 'THPT Hoàng Hoa Thám',
                'district_id' => 243,
                'city_id' => 22,
            ),
            108 => 
            array (
                'id' => 1609,
                'code' => '042',
                'name' => 'TT GDTX Tiên Lữ',
                'district_id' => 243,
                'city_id' => 22,
            ),
            109 => 
            array (
                'id' => 1610,
                'code' => '043',
                'name' => 'TT-KT-TH Tiên Lữ',
                'district_id' => 243,
                'city_id' => 22,
            ),
            110 => 
            array (
                'id' => 1611,
                'code' => '044',
                'name' => 'Phòng GD&ĐT H Tiên Lữ',
                'district_id' => 243,
                'city_id' => 22,
            ),
            111 => 
            array (
                'id' => 1612,
                'code' => '080',
                'name' => 'THPT Ngô Quyền',
                'district_id' => 243,
                'city_id' => 22,
            ),
            112 => 
            array (
                'id' => 1613,
                'code' => '045',
                'name' => 'THPT Phù Cừ',
                'district_id' => 244,
                'city_id' => 22,
            ),
            113 => 
            array (
                'id' => 1614,
                'code' => '046',
                'name' => 'THPT Nam Phù Cừ',
                'district_id' => 244,
                'city_id' => 22,
            ),
            114 => 
            array (
                'id' => 1615,
                'code' => '047',
                'name' => 'TT GDTX Phù Cừ',
                'district_id' => 244,
                'city_id' => 22,
            ),
            115 => 
            array (
                'id' => 1616,
                'code' => '048',
                'name' => 'Phòng GD&ĐT H Phù Cừ',
                'district_id' => 244,
                'city_id' => 22,
            ),
            116 => 
            array (
                'id' => 1617,
                'code' => '075',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 244,
                'city_id' => 22,
            ),
            117 => 
            array (
                'id' => 1618,
                'code' => '049',
                'name' => 'THPT Mỹ Hào',
                'district_id' => 245,
                'city_id' => 22,
            ),
            118 => 
            array (
                'id' => 1619,
                'code' => '050',
                'name' => 'THPT Nguyễn Thiện Thuật',
                'district_id' => 245,
                'city_id' => 22,
            ),
            119 => 
            array (
                'id' => 1620,
                'code' => '051',
                'name' => 'TT GDTX Mỹ Hào',
                'district_id' => 245,
                'city_id' => 22,
            ),
            120 => 
            array (
                'id' => 1621,
                'code' => '052',
                'name' => 'Phòng GD Mỹ Hào',
                'district_id' => 245,
                'city_id' => 22,
            ),
            121 => 
            array (
                'id' => 1622,
                'code' => '077',
                'name' => 'THPT Hồng Đức',
                'district_id' => 245,
                'city_id' => 22,
            ),
            122 => 
            array (
                'id' => 1623,
                'code' => '053',
                'name' => 'THPT Văn Lâm',
                'district_id' => 246,
                'city_id' => 22,
            ),
            123 => 
            array (
                'id' => 1624,
                'code' => '054',
                'name' => 'THPT Trưng Vương',
                'district_id' => 246,
                'city_id' => 22,
            ),
            124 => 
            array (
                'id' => 1625,
                'code' => '055',
                'name' => 'TT GDTX Văn Lâm',
                'district_id' => 246,
                'city_id' => 22,
            ),
            125 => 
            array (
                'id' => 1626,
                'code' => '056',
                'name' => 'Phòng GD&ĐT H Văn Lâm',
                'district_id' => 246,
                'city_id' => 22,
            ),
            126 => 
            array (
                'id' => 1627,
                'code' => '081',
                'name' => 'THPT Hùng Vương',
                'district_id' => 246,
                'city_id' => 22,
            ),
            127 => 
            array (
                'id' => 1628,
                'code' => '085',
                'name' => 'THPT Lương Tài',
                'district_id' => 246,
                'city_id' => 22,
            ),
            128 => 
            array (
                'id' => 1629,
                'code' => '057',
                'name' => 'THPT Văn Giang',
                'district_id' => 247,
                'city_id' => 22,
            ),
            129 => 
            array (
                'id' => 1630,
                'code' => '058',
                'name' => 'TT GDTX Văn Giang',
                'district_id' => 247,
                'city_id' => 22,
            ),
            130 => 
            array (
                'id' => 1631,
                'code' => '059',
                'name' => 'Phòng GD&ĐT H Văn Giang',
                'district_id' => 247,
                'city_id' => 22,
            ),
            131 => 
            array (
                'id' => 1632,
                'code' => '060',
                'name' => 'THPT Dương Quảng Hàm',
                'district_id' => 247,
                'city_id' => 22,
            ),
            132 => 
            array (
                'id' => 1633,
                'code' => '082',
                'name' => 'THPT Nguyễn Công Hoan',
                'district_id' => 247,
                'city_id' => 22,
            ),
            133 => 
            array (
                'id' => 1634,
                'code' => '000',
                'name' => 'Sở Giáo dục - Đào tạo Hòa Bình',
                'district_id' => 248,
                'city_id' => 23,
            ),
            134 => 
            array (
                'id' => 1635,
                'code' => '001',
                'name' => 'TT GDTX thành phố HB',
                'district_id' => 248,
                'city_id' => 23,
            ),
            135 => 
            array (
                'id' => 1636,
                'code' => '012',
                'name' => 'THPT chuyên Hoàng Văn Thụ',
                'district_id' => 248,
                'city_id' => 23,
            ),
            136 => 
            array (
                'id' => 1637,
                'code' => '013',
                'name' => 'THPT Lạc Long Quân',
                'district_id' => 248,
                'city_id' => 23,
            ),
            137 => 
            array (
                'id' => 1638,
                'code' => '014',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 248,
                'city_id' => 23,
            ),
            138 => 
            array (
                'id' => 1639,
                'code' => '015',
                'name' => 'THPT Công Nghiệp',
                'district_id' => 248,
                'city_id' => 23,
            ),
            139 => 
            array (
                'id' => 1640,
                'code' => '016',
                'name' => 'Phổ thông Dân tộc nội trú',
                'district_id' => 248,
                'city_id' => 23,
            ),
            140 => 
            array (
                'id' => 1641,
                'code' => '017',
                'name' => 'THPT Ngô Quyền',
                'district_id' => 248,
                'city_id' => 23,
            ),
            141 => 
            array (
                'id' => 1642,
                'code' => '044',
                'name' => 'TT GDTX tỉnh Hoà Bình',
                'district_id' => 248,
                'city_id' => 23,
            ),
            142 => 
            array (
                'id' => 1643,
                'code' => '045',
                'name' => 'Trung học Kinh tế -Kỹ Thuật HB',
                'district_id' => 248,
                'city_id' => 23,
            ),
            143 => 
            array (
                'id' => 1644,
                'code' => '053',
                'name' => 'CĐ nghề Hòa Bình',
                'district_id' => 248,
                'city_id' => 23,
            ),
            144 => 
            array (
                'id' => 1645,
                'code' => '054',
                'name' => 'CĐ nghề Sông Đà',
                'district_id' => 248,
                'city_id' => 23,
            ),
            145 => 
            array (
                'id' => 1646,
                'code' => '002',
                'name' => 'TT GDTX Đà Bắc',
                'district_id' => 249,
                'city_id' => 23,
            ),
            146 => 
            array (
                'id' => 1647,
                'code' => '018',
                'name' => 'THPT Đà Bắc',
                'district_id' => 249,
                'city_id' => 23,
            ),
            147 => 
            array (
                'id' => 1648,
                'code' => '019',
                'name' => 'THPT Mường Chiềng',
                'district_id' => 249,
                'city_id' => 23,
            ),
            148 => 
            array (
                'id' => 1649,
                'code' => '050',
                'name' => 'THPT Yên Hoà',
                'district_id' => 249,
                'city_id' => 23,
            ),
            149 => 
            array (
                'id' => 1650,
                'code' => '003',
                'name' => 'TT GDTX Mai Châu',
                'district_id' => 250,
                'city_id' => 23,
            ),
            150 => 
            array (
                'id' => 1651,
                'code' => '020',
                'name' => 'THPT Mai Châu A',
                'district_id' => 250,
                'city_id' => 23,
            ),
            151 => 
            array (
                'id' => 1652,
                'code' => '021',
                'name' => 'THPT Mai Châu B',
                'district_id' => 250,
                'city_id' => 23,
            ),
            152 => 
            array (
                'id' => 1653,
                'code' => '004',
                'name' => 'TT GDTX&DN Tân Lạc',
                'district_id' => 251,
                'city_id' => 23,
            ),
            153 => 
            array (
                'id' => 1654,
                'code' => '022',
                'name' => 'THPT Tân Lạc',
                'district_id' => 251,
                'city_id' => 23,
            ),
            154 => 
            array (
                'id' => 1655,
                'code' => '023',
                'name' => 'THPT  Mường Bi',
                'district_id' => 251,
                'city_id' => 23,
            ),
            155 => 
            array (
                'id' => 1656,
                'code' => '024',
                'name' => 'THPT Đoàn Kết',
                'district_id' => 251,
                'city_id' => 23,
            ),
            156 => 
            array (
                'id' => 1657,
                'code' => '046',
                'name' => 'THPT Lũng Vân',
                'district_id' => 251,
                'city_id' => 23,
            ),
            157 => 
            array (
                'id' => 1658,
                'code' => '005',
                'name' => 'TT GDTX&DN Lạc Sơn',
                'district_id' => 252,
                'city_id' => 23,
            ),
            158 => 
            array (
                'id' => 1659,
                'code' => '025',
                'name' => 'THPT Lạc Sơn',
                'district_id' => 252,
                'city_id' => 23,
            ),
            159 => 
            array (
                'id' => 1660,
                'code' => '026',
                'name' => 'THPT Cộng Hoà',
                'district_id' => 252,
                'city_id' => 23,
            ),
            160 => 
            array (
                'id' => 1661,
                'code' => '027',
                'name' => 'THPT Đại Đồng',
                'district_id' => 252,
                'city_id' => 23,
            ),
            161 => 
            array (
                'id' => 1662,
                'code' => '048',
                'name' => 'THPT Quyết Thắng',
                'district_id' => 252,
                'city_id' => 23,
            ),
            162 => 
            array (
                'id' => 1663,
                'code' => '006',
                'name' => 'TT GDTX&DN Kỳ Sơn',
                'district_id' => 253,
                'city_id' => 23,
            ),
            163 => 
            array (
                'id' => 1664,
                'code' => '028',
                'name' => 'THPT Kỳ Sơn',
                'district_id' => 253,
                'city_id' => 23,
            ),
            164 => 
            array (
                'id' => 1665,
                'code' => '029',
                'name' => 'THPT Phú Cường',
                'district_id' => 253,
                'city_id' => 23,
            ),
            165 => 
            array (
                'id' => 1666,
                'code' => '007',
                'name' => 'TT GDTX Lương Sơn',
                'district_id' => 254,
                'city_id' => 23,
            ),
            166 => 
            array (
                'id' => 1667,
                'code' => '030',
                'name' => 'THPT Lương Sơn',
                'district_id' => 254,
                'city_id' => 23,
            ),
            167 => 
            array (
                'id' => 1668,
                'code' => '031',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 254,
                'city_id' => 23,
            ),
            168 => 
            array (
                'id' => 1669,
                'code' => '033',
                'name' => 'THPT Nam Lương Sơn',
                'district_id' => 254,
                'city_id' => 23,
            ),
            169 => 
            array (
                'id' => 1670,
                'code' => '036',
                'name' => 'THPT Cù Chính Lan',
                'district_id' => 254,
                'city_id' => 23,
            ),
            170 => 
            array (
                'id' => 1671,
                'code' => '008',
                'name' => 'TT GDTX Kim Bôi',
                'district_id' => 255,
                'city_id' => 23,
            ),
            171 => 
            array (
                'id' => 1672,
                'code' => '034',
                'name' => 'THPT Kim Bôi',
                'district_id' => 255,
                'city_id' => 23,
            ),
            172 => 
            array (
                'id' => 1673,
                'code' => '035',
                'name' => 'THPT 19/5',
                'district_id' => 255,
                'city_id' => 23,
            ),
            173 => 
            array (
                'id' => 1674,
                'code' => '051',
                'name' => 'THPT  Bắc Sơn',
                'district_id' => 255,
                'city_id' => 23,
            ),
            174 => 
            array (
                'id' => 1675,
                'code' => '052',
                'name' => 'THPT  Sào Báy',
                'district_id' => 255,
                'city_id' => 23,
            ),
            175 => 
            array (
                'id' => 1676,
                'code' => '009',
                'name' => 'TT GDTX Lạc Thuỷ',
                'district_id' => 256,
                'city_id' => 23,
            ),
            176 => 
            array (
                'id' => 1677,
                'code' => '037',
                'name' => 'THPT Thanh Hà',
                'district_id' => 256,
                'city_id' => 23,
            ),
            177 => 
            array (
                'id' => 1678,
                'code' => '038',
                'name' => 'THPT Lạc Thuỷ A',
                'district_id' => 256,
                'city_id' => 23,
            ),
            178 => 
            array (
                'id' => 1679,
                'code' => '039',
                'name' => 'THPT Lạc Thuỷ B',
                'district_id' => 256,
                'city_id' => 23,
            ),
            179 => 
            array (
                'id' => 1680,
                'code' => '040',
                'name' => 'THPT Lạc Thuỷ C',
                'district_id' => 256,
                'city_id' => 23,
            ),
            180 => 
            array (
                'id' => 1681,
                'code' => '055',
                'name' => 'CĐ nghề  Cơ điện Tây Bắc',
                'district_id' => 256,
                'city_id' => 23,
            ),
            181 => 
            array (
                'id' => 1682,
                'code' => '010',
                'name' => 'TT GDTX Yên Thuỷ',
                'district_id' => 257,
                'city_id' => 23,
            ),
            182 => 
            array (
                'id' => 1683,
                'code' => '041',
                'name' => 'THPT Yên Thuỷ A',
                'district_id' => 257,
                'city_id' => 23,
            ),
            183 => 
            array (
                'id' => 1684,
                'code' => '042',
                'name' => 'THPT Yên Thuỷ B',
                'district_id' => 257,
                'city_id' => 23,
            ),
            184 => 
            array (
                'id' => 1685,
                'code' => '047',
                'name' => 'THPT Yên Thuỷ C',
                'district_id' => 257,
                'city_id' => 23,
            ),
            185 => 
            array (
                'id' => 1686,
                'code' => '011',
                'name' => 'TT GDTX Cao Phong',
                'district_id' => 258,
                'city_id' => 23,
            ),
            186 => 
            array (
                'id' => 1687,
                'code' => '043',
                'name' => 'THPT Cao Phong',
                'district_id' => 258,
                'city_id' => 23,
            ),
            187 => 
            array (
                'id' => 1688,
                'code' => '049',
                'name' => 'THPT Thạch Yên',
                'district_id' => 258,
                'city_id' => 23,
            ),
            188 => 
            array (
                'id' => 1689,
                'code' => '011',
                'name' => 'THPT Chuyên Biên Hòa',
                'district_id' => 259,
                'city_id' => 24,
            ),
            189 => 
            array (
                'id' => 1690,
                'code' => '012',
                'name' => 'THPT A Phủ Lý',
                'district_id' => 259,
                'city_id' => 24,
            ),
            190 => 
            array (
                'id' => 1691,
                'code' => '013',
                'name' => 'THPT B Phủ Lý',
                'district_id' => 259,
                'city_id' => 24,
            ),
            191 => 
            array (
                'id' => 1692,
                'code' => '014',
                'name' => 'THPT Dân lập Lương Thế Vinh',
                'district_id' => 259,
                'city_id' => 24,
            ),
            192 => 
            array (
                'id' => 1693,
                'code' => '015',
                'name' => 'Trung tâm GDTX Tỉnh Hà Nam',
                'district_id' => 259,
                'city_id' => 24,
            ),
            193 => 
            array (
                'id' => 1694,
                'code' => '016',
                'name' => 'Cao đẳng nghề Hà Nam',
                'district_id' => 259,
                'city_id' => 24,
            ),
            194 => 
            array (
                'id' => 1695,
                'code' => '017',
                'name' => 'THPT C Phủ Lý',
                'district_id' => 259,
                'city_id' => 24,
            ),
            195 => 
            array (
                'id' => 1696,
                'code' => '021',
                'name' => 'THPT A Duy Tiên',
                'district_id' => 260,
                'city_id' => 24,
            ),
            196 => 
            array (
                'id' => 1697,
                'code' => '022',
                'name' => 'THPT B Duy Tiên',
                'district_id' => 260,
                'city_id' => 24,
            ),
            197 => 
            array (
                'id' => 1698,
                'code' => '023',
                'name' => 'THPT C Duy Tiên',
                'district_id' => 260,
                'city_id' => 24,
            ),
            198 => 
            array (
                'id' => 1699,
                'code' => '024',
                'name' => 'THPT  Nguyễn Hữu Tiến',
                'district_id' => 260,
                'city_id' => 24,
            ),
            199 => 
            array (
                'id' => 1700,
                'code' => '025',
                'name' => 'Trung tâm GDTX Duy Tiên',
                'district_id' => 260,
                'city_id' => 24,
            ),
            200 => 
            array (
                'id' => 1701,
                'code' => '031',
                'name' => 'THPT A Kim Bảng',
                'district_id' => 261,
                'city_id' => 24,
            ),
            201 => 
            array (
                'id' => 1702,
                'code' => '032',
                'name' => 'THPT B Kim Bảng',
                'district_id' => 261,
                'city_id' => 24,
            ),
            202 => 
            array (
                'id' => 1703,
                'code' => '033',
                'name' => 'THPT C Kim Bảng',
                'district_id' => 261,
                'city_id' => 24,
            ),
            203 => 
            array (
                'id' => 1704,
                'code' => '034',
                'name' => 'Trung tâm GDTX Kim Bảng',
                'district_id' => 261,
                'city_id' => 24,
            ),
            204 => 
            array (
                'id' => 1705,
                'code' => '035',
                'name' => 'THPT Lý Thường Kiệt',
                'district_id' => 261,
                'city_id' => 24,
            ),
            205 => 
            array (
                'id' => 1706,
                'code' => '041',
                'name' => 'THPT Lý Nhân',
                'district_id' => 262,
                'city_id' => 24,
            ),
            206 => 
            array (
                'id' => 1707,
                'code' => '042',
                'name' => 'THPT Bắc Lý',
                'district_id' => 262,
                'city_id' => 24,
            ),
            207 => 
            array (
                'id' => 1708,
                'code' => '043',
                'name' => 'THPT Nam Lý',
                'district_id' => 262,
                'city_id' => 24,
            ),
            208 => 
            array (
                'id' => 1709,
                'code' => '044',
                'name' => 'THPT Dân lập Trần Hưng Đạo',
                'district_id' => 262,
                'city_id' => 24,
            ),
            209 => 
            array (
                'id' => 1710,
                'code' => '045',
                'name' => 'THPT  Nam Cao',
                'district_id' => 262,
                'city_id' => 24,
            ),
            210 => 
            array (
                'id' => 1711,
                'code' => '046',
                'name' => 'Trung tâm GDTX Lý Nhân',
                'district_id' => 262,
                'city_id' => 24,
            ),
            211 => 
            array (
                'id' => 1712,
                'code' => '051',
                'name' => 'THPT A Thanh Liêm',
                'district_id' => 263,
                'city_id' => 24,
            ),
            212 => 
            array (
                'id' => 1713,
                'code' => '052',
                'name' => 'THPT B Thanh Liêm',
                'district_id' => 263,
                'city_id' => 24,
            ),
            213 => 
            array (
                'id' => 1714,
                'code' => '053',
                'name' => 'THPT Dân lập Thanh Liêm',
                'district_id' => 263,
                'city_id' => 24,
            ),
            214 => 
            array (
                'id' => 1715,
                'code' => '054',
                'name' => 'Trung tâm GDTX Thanh Liêm',
                'district_id' => 263,
                'city_id' => 24,
            ),
            215 => 
            array (
                'id' => 1716,
                'code' => '055',
                'name' => 'THPT C Thanh Liêm',
                'district_id' => 263,
                'city_id' => 24,
            ),
            216 => 
            array (
                'id' => 1717,
                'code' => '056',
                'name' => 'THPT Lê Hoàn',
                'district_id' => 263,
                'city_id' => 24,
            ),
            217 => 
            array (
                'id' => 1718,
                'code' => '061',
                'name' => 'THPT A Bình Lục',
                'district_id' => 264,
                'city_id' => 24,
            ),
            218 => 
            array (
                'id' => 1719,
                'code' => '062',
                'name' => 'THPT B Bình Lục',
                'district_id' => 264,
                'city_id' => 24,
            ),
            219 => 
            array (
                'id' => 1720,
                'code' => '063',
                'name' => 'THPT C Bình Lục',
                'district_id' => 264,
                'city_id' => 24,
            ),
            220 => 
            array (
                'id' => 1721,
                'code' => '064',
                'name' => 'THPT Dân lập Bình Lục',
                'district_id' => 264,
                'city_id' => 24,
            ),
            221 => 
            array (
                'id' => 1722,
                'code' => '065',
                'name' => 'Trung tâm GDTX Bình Lục',
                'district_id' => 264,
                'city_id' => 24,
            ),
            222 => 
            array (
                'id' => 1723,
                'code' => '066',
                'name' => 'THPT Nguyễn Khuyến',
                'district_id' => 264,
                'city_id' => 24,
            ),
            223 => 
            array (
                'id' => 1724,
                'code' => '002',
                'name' => 'THPT chuyên Lê Hồng Phong',
                'district_id' => 265,
                'city_id' => 25,
            ),
            224 => 
            array (
                'id' => 1725,
                'code' => '003',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 265,
                'city_id' => 25,
            ),
            225 => 
            array (
                'id' => 1726,
                'code' => '004',
                'name' => 'THPT Nguyễn Khuyến',
                'district_id' => 265,
                'city_id' => 25,
            ),
            226 => 
            array (
                'id' => 1727,
                'code' => '005',
                'name' => 'THPT Ngô Quyền',
                'district_id' => 265,
                'city_id' => 25,
            ),
            227 => 
            array (
                'id' => 1728,
                'code' => '006',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 265,
                'city_id' => 25,
            ),
            228 => 
            array (
                'id' => 1729,
                'code' => '007',
                'name' => 'THPT Nguyễn Công Trứ',
                'district_id' => 265,
                'city_id' => 25,
            ),
            229 => 
            array (
                'id' => 1730,
                'code' => '008',
                'name' => 'THPT  Trần Quang Khải',
                'district_id' => 265,
                'city_id' => 25,
            ),
            230 => 
            array (
                'id' => 1731,
                'code' => '009',
                'name' => 'THPT  DL Trần Nhật Duật',
                'district_id' => 265,
                'city_id' => 25,
            ),
            231 => 
            array (
                'id' => 1732,
                'code' => '012',
                'name' => 'TTGDTX Trần Phú',
                'district_id' => 265,
                'city_id' => 25,
            ),
            232 => 
            array (
                'id' => 1733,
                'code' => '013',
                'name' => 'TT GDTX Tỉnh Nam Định',
                'district_id' => 265,
                'city_id' => 25,
            ),
            233 => 
            array (
                'id' => 1734,
                'code' => '014',
                'name' => 'TTKTTH-HN NĐ',
                'district_id' => 265,
                'city_id' => 25,
            ),
            234 => 
            array (
                'id' => 1735,
                'code' => '087',
                'name' => 'ĐH Sư phạm Kỹ thuật Nam Định',
                'district_id' => 265,
                'city_id' => 25,
            ),
            235 => 
            array (
                'id' => 1736,
                'code' => '089',
                'name' => 'CĐ Xây dựng Nam Định',
                'district_id' => 265,
                'city_id' => 25,
            ),
            236 => 
            array (
                'id' => 1737,
                'code' => '090',
                'name' => 'CĐ nghề Nam Định',
                'district_id' => 265,
                'city_id' => 25,
            ),
            237 => 
            array (
                'id' => 1738,
                'code' => '091',
                'name' => 'CĐ nghề Kinh tế - Kỹ thuật Vinatex',
                'district_id' => 265,
                'city_id' => 25,
            ),
            238 => 
            array (
                'id' => 1739,
                'code' => '092',
                'name' => 'TC Cơ Điện Nam Định',
                'district_id' => 265,
                'city_id' => 25,
            ),
            239 => 
            array (
                'id' => 1740,
                'code' => '095',
                'name' => 'TC nghề Đại Lâm',
                'district_id' => 265,
                'city_id' => 25,
            ),
            240 => 
            array (
                'id' => 1741,
                'code' => '096',
                'name' => 'TC nghề Giao thông Vận tải',
                'district_id' => 265,
                'city_id' => 25,
            ),
            241 => 
            array (
                'id' => 1742,
                'code' => '097',
                'name' => 'TC nghề Số 8',
                'district_id' => 265,
                'city_id' => 25,
            ),
            242 => 
            array (
                'id' => 1743,
                'code' => '098',
                'name' => 'TC nghề Số 20',
                'district_id' => 265,
                'city_id' => 25,
            ),
            243 => 
            array (
                'id' => 1744,
                'code' => '015',
                'name' => 'THPT Hùng Vương',
                'district_id' => 266,
                'city_id' => 25,
            ),
            244 => 
            array (
                'id' => 1745,
                'code' => '016',
                'name' => 'THPT Mỹ Lộc',
                'district_id' => 266,
                'city_id' => 25,
            ),
            245 => 
            array (
                'id' => 1746,
                'code' => '017',
                'name' => 'THPT Trần Văn Lan',
                'district_id' => 266,
                'city_id' => 25,
            ),
            246 => 
            array (
                'id' => 1747,
                'code' => '018',
                'name' => 'TTGDTX Mỹ Lộc',
                'district_id' => 266,
                'city_id' => 25,
            ),
            247 => 
            array (
                'id' => 1748,
                'code' => '020',
                'name' => 'THPT Xuân Trường A',
                'district_id' => 267,
                'city_id' => 25,
            ),
            248 => 
            array (
                'id' => 1749,
                'code' => '021',
                'name' => 'THPT Xuân Trường B',
                'district_id' => 267,
                'city_id' => 25,
            ),
            249 => 
            array (
                'id' => 1750,
                'code' => '022',
                'name' => 'THPT Xuân Trường C',
                'district_id' => 267,
                'city_id' => 25,
            ),
            250 => 
            array (
                'id' => 1751,
                'code' => '023',
                'name' => 'THPT Cao Phong',
                'district_id' => 267,
                'city_id' => 25,
            ),
            251 => 
            array (
                'id' => 1752,
                'code' => '024',
                'name' => 'THPT Nguyễn Trường Thuý',
                'district_id' => 267,
                'city_id' => 25,
            ),
            252 => 
            array (
                'id' => 1753,
                'code' => '025',
                'name' => 'TTGDTX Xuân Trường',
                'district_id' => 267,
                'city_id' => 25,
            ),
            253 => 
            array (
                'id' => 1754,
                'code' => '027',
                'name' => 'THPT Giao Thủy',
                'district_id' => 268,
                'city_id' => 25,
            ),
            254 => 
            array (
                'id' => 1755,
                'code' => '028',
                'name' => 'THPT Giao Thuỷ B',
                'district_id' => 268,
                'city_id' => 25,
            ),
            255 => 
            array (
                'id' => 1756,
                'code' => '029',
                'name' => 'THPT Giao Thuỷ C',
                'district_id' => 268,
                'city_id' => 25,
            ),
            256 => 
            array (
                'id' => 1757,
                'code' => '030',
                'name' => 'THPT Thiên Trường',
                'district_id' => 268,
                'city_id' => 25,
            ),
            257 => 
            array (
                'id' => 1758,
                'code' => '031',
                'name' => 'THPT Quất Lâm',
                'district_id' => 268,
                'city_id' => 25,
            ),
            258 => 
            array (
                'id' => 1759,
                'code' => '032',
                'name' => 'TTGDTX Giao Thuỷ',
                'district_id' => 268,
                'city_id' => 25,
            ),
            259 => 
            array (
                'id' => 1760,
                'code' => '034',
                'name' => 'THPT Tống Văn Trân',
                'district_id' => 269,
                'city_id' => 25,
            ),
            260 => 
            array (
                'id' => 1761,
                'code' => '035',
                'name' => 'THPT Phạm Văn Nghị',
                'district_id' => 269,
                'city_id' => 25,
            ),
            261 => 
            array (
                'id' => 1762,
                'code' => '036',
                'name' => 'THPT Mỹ Tho',
                'district_id' => 269,
                'city_id' => 25,
            ),
            262 => 
            array (
                'id' => 1763,
                'code' => '037',
                'name' => 'THPT  Ý Yên',
                'district_id' => 269,
                'city_id' => 25,
            ),
            263 => 
            array (
                'id' => 1764,
                'code' => '038',
                'name' => 'THPT Đại An',
                'district_id' => 269,
                'city_id' => 25,
            ),
            264 => 
            array (
                'id' => 1765,
                'code' => '039',
                'name' => 'TTGDTX A H. Ý Yên',
                'district_id' => 269,
                'city_id' => 25,
            ),
            265 => 
            array (
                'id' => 1766,
                'code' => '040',
                'name' => 'THPT Đỗ Huy Liêu',
                'district_id' => 269,
                'city_id' => 25,
            ),
            266 => 
            array (
                'id' => 1767,
                'code' => '041',
                'name' => 'THPT Lý Nhân Tông',
                'district_id' => 269,
                'city_id' => 25,
            ),
            267 => 
            array (
                'id' => 1768,
                'code' => '094',
                'name' => 'TC nghề Thủ công Mỹ nghệ',
                'district_id' => 269,
                'city_id' => 25,
            ),
            268 => 
            array (
                'id' => 1769,
                'code' => '043',
                'name' => 'THPT Hoàng Văn Thụ',
                'district_id' => 270,
                'city_id' => 25,
            ),
            269 => 
            array (
                'id' => 1770,
                'code' => '044',
                'name' => 'THPT Lương Thế Vinh',
                'district_id' => 270,
                'city_id' => 25,
            ),
            270 => 
            array (
                'id' => 1771,
                'code' => '045',
                'name' => 'THPT Nguyễn Bính',
                'district_id' => 270,
                'city_id' => 25,
            ),
            271 => 
            array (
                'id' => 1772,
                'code' => '046',
                'name' => 'THPT Nguyễn Đức Thuận',
                'district_id' => 270,
                'city_id' => 25,
            ),
            272 => 
            array (
                'id' => 1773,
                'code' => '047',
                'name' => 'TTGDTX Liên Minh',
                'district_id' => 270,
                'city_id' => 25,
            ),
            273 => 
            array (
                'id' => 1774,
                'code' => '088',
                'name' => 'CĐ Công nghiệp Nam Định',
                'district_id' => 270,
                'city_id' => 25,
            ),
            274 => 
            array (
                'id' => 1775,
                'code' => '050',
                'name' => 'THPT Nam Trực',
                'district_id' => 271,
                'city_id' => 25,
            ),
            275 => 
            array (
                'id' => 1776,
                'code' => '051',
                'name' => 'THPT Lý Tự Trọng',
                'district_id' => 271,
                'city_id' => 25,
            ),
            276 => 
            array (
                'id' => 1777,
                'code' => '052',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 271,
                'city_id' => 25,
            ),
            277 => 
            array (
                'id' => 1778,
                'code' => '053',
                'name' => 'THPT  Phan Bội Châu',
                'district_id' => 271,
                'city_id' => 25,
            ),
            278 => 
            array (
                'id' => 1779,
                'code' => '054',
                'name' => 'THPT  Quang Trung',
                'district_id' => 271,
                'city_id' => 25,
            ),
            279 => 
            array (
                'id' => 1780,
                'code' => '055',
                'name' => 'THPT Trần Văn Bảo',
                'district_id' => 271,
                'city_id' => 25,
            ),
            280 => 
            array (
                'id' => 1781,
                'code' => '056',
                'name' => 'TTGDTX H. Nam Trực',
                'district_id' => 271,
                'city_id' => 25,
            ),
            281 => 
            array (
                'id' => 1782,
                'code' => '057',
                'name' => 'TTGDTX Vũ Tuấn Chiêu',
                'district_id' => 271,
                'city_id' => 25,
            ),
            282 => 
            array (
                'id' => 1783,
                'code' => '059',
                'name' => 'THPT Trực Ninh',
                'district_id' => 272,
                'city_id' => 25,
            ),
            283 => 
            array (
                'id' => 1784,
                'code' => '060',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 272,
                'city_id' => 25,
            ),
            284 => 
            array (
                'id' => 1785,
                'code' => '061',
                'name' => 'THPT Trực Ninh B',
                'district_id' => 272,
                'city_id' => 25,
            ),
            285 => 
            array (
                'id' => 1786,
                'code' => '062',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 272,
                'city_id' => 25,
            ),
            286 => 
            array (
                'id' => 1787,
                'code' => '063',
                'name' => 'THPT  Đoàn Kết',
                'district_id' => 272,
                'city_id' => 25,
            ),
            287 => 
            array (
                'id' => 1788,
                'code' => '064',
                'name' => 'TTGDTX A Trực Ninh',
                'district_id' => 272,
                'city_id' => 25,
            ),
            288 => 
            array (
                'id' => 1789,
                'code' => '065',
                'name' => 'TTGDTX B Trực Ninh',
                'district_id' => 272,
                'city_id' => 25,
            ),
            289 => 
            array (
                'id' => 1790,
                'code' => '093',
                'name' => 'TC nghề Kinh tế - Kỹ thuật CN',
                'district_id' => 272,
                'city_id' => 25,
            ),
            290 => 
            array (
                'id' => 1791,
                'code' => '067',
                'name' => 'THPT A Nghĩa Hưng',
                'district_id' => 273,
                'city_id' => 25,
            ),
            291 => 
            array (
                'id' => 1792,
                'code' => '068',
                'name' => 'THPT B Nghĩa Hưng',
                'district_id' => 273,
                'city_id' => 25,
            ),
            292 => 
            array (
                'id' => 1793,
                'code' => '069',
                'name' => 'THPT C Nghĩa Hưng',
                'district_id' => 273,
                'city_id' => 25,
            ),
            293 => 
            array (
                'id' => 1794,
                'code' => '070',
                'name' => 'THPT Nghĩa Hưng',
                'district_id' => 273,
                'city_id' => 25,
            ),
            294 => 
            array (
                'id' => 1795,
                'code' => '071',
                'name' => 'THPT Trần Nhân Tông',
                'district_id' => 273,
                'city_id' => 25,
            ),
            295 => 
            array (
                'id' => 1796,
                'code' => '072',
                'name' => 'TTGDTX H. Nghĩa Hưng',
                'district_id' => 273,
                'city_id' => 25,
            ),
            296 => 
            array (
                'id' => 1797,
                'code' => '073',
                'name' => 'TTGDTX Nghĩa Tân',
                'district_id' => 273,
                'city_id' => 25,
            ),
            297 => 
            array (
                'id' => 1798,
                'code' => '085',
                'name' => 'THPT Nghĩa Minh',
                'district_id' => 273,
                'city_id' => 25,
            ),
            298 => 
            array (
                'id' => 1799,
                'code' => '075',
                'name' => 'THPT A Hải Hậu',
                'district_id' => 274,
                'city_id' => 25,
            ),
            299 => 
            array (
                'id' => 1800,
                'code' => '076',
                'name' => 'THPT B Hải Hậu',
                'district_id' => 274,
                'city_id' => 25,
            ),
            300 => 
            array (
                'id' => 1801,
                'code' => '077',
                'name' => 'THPT C Hải Hậu',
                'district_id' => 274,
                'city_id' => 25,
            ),
            301 => 
            array (
                'id' => 1802,
                'code' => '078',
                'name' => 'THPT Tô Hiến Thành',
                'district_id' => 274,
                'city_id' => 25,
            ),
            302 => 
            array (
                'id' => 1803,
                'code' => '079',
                'name' => 'THPT Thịnh Long',
                'district_id' => 274,
                'city_id' => 25,
            ),
            303 => 
            array (
                'id' => 1804,
                'code' => '080',
                'name' => 'THPT Trần Quốc Tuấn',
                'district_id' => 274,
                'city_id' => 25,
            ),
            304 => 
            array (
                'id' => 1805,
                'code' => '081',
                'name' => 'THPT An Phúc',
                'district_id' => 274,
                'city_id' => 25,
            ),
            305 => 
            array (
                'id' => 1806,
                'code' => '082',
                'name' => 'TTGDTX H. Hải Hậu',
                'district_id' => 274,
                'city_id' => 25,
            ),
            306 => 
            array (
                'id' => 1807,
                'code' => '083',
                'name' => 'TTGDTX Hải Cường',
                'district_id' => 274,
                'city_id' => 25,
            ),
            307 => 
            array (
                'id' => 1808,
                'code' => '084',
                'name' => 'THPT Vũ Văn Hiếu',
                'district_id' => 274,
                'city_id' => 25,
            ),
            308 => 
            array (
                'id' => 1809,
                'code' => '002',
                'name' => 'THPT Chuyên',
                'district_id' => 275,
                'city_id' => 26,
            ),
            309 => 
            array (
                'id' => 1810,
                'code' => '003',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 275,
                'city_id' => 26,
            ),
            310 => 
            array (
                'id' => 1811,
                'code' => '004',
                'name' => 'THPT Nguyễn Đức Cảnh',
                'district_id' => 275,
                'city_id' => 26,
            ),
            311 => 
            array (
                'id' => 1812,
                'code' => '005',
                'name' => 'THPT Nguyễn Công Trứ',
                'district_id' => 275,
                'city_id' => 26,
            ),
            312 => 
            array (
                'id' => 1813,
                'code' => '006',
                'name' => 'THPT Nguyễn Thái Bình',
                'district_id' => 275,
                'city_id' => 26,
            ),
            313 => 
            array (
                'id' => 1814,
                'code' => '007',
                'name' => 'TT GDTX và Hướng nghiệp Tp. Thái Bình',
                'district_id' => 275,
                'city_id' => 26,
            ),
            314 => 
            array (
                'id' => 1815,
                'code' => '059',
                'name' => 'TC nghề cho người khuyết tật Thái Bình',
                'district_id' => 275,
                'city_id' => 26,
            ),
            315 => 
            array (
                'id' => 1816,
                'code' => '060',
                'name' => 'Cao đẳng nghề Thái Bình',
                'district_id' => 275,
                'city_id' => 26,
            ),
            316 => 
            array (
                'id' => 1817,
                'code' => '061',
                'name' => 'Cao đẳng nghề số 19 - Bộ Quốc phòng',
                'district_id' => 275,
                'city_id' => 26,
            ),
            317 => 
            array (
                'id' => 1818,
                'code' => '009',
                'name' => 'THPT Quỳnh Côi',
                'district_id' => 276,
                'city_id' => 26,
            ),
            318 => 
            array (
                'id' => 1819,
                'code' => '010',
                'name' => 'THPT Quỳnh Thọ',
                'district_id' => 276,
                'city_id' => 26,
            ),
            319 => 
            array (
                'id' => 1820,
                'code' => '011',
                'name' => 'THPT Phụ Dực',
                'district_id' => 276,
                'city_id' => 26,
            ),
            320 => 
            array (
                'id' => 1821,
                'code' => '012',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 276,
                'city_id' => 26,
            ),
            321 => 
            array (
                'id' => 1822,
                'code' => '013',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 276,
                'city_id' => 26,
            ),
            322 => 
            array (
                'id' => 1823,
                'code' => '014',
                'name' => 'TT GDTX và Hướng nghiệp I Quỳnh Phụ',
                'district_id' => 276,
                'city_id' => 26,
            ),
            323 => 
            array (
                'id' => 1824,
                'code' => '015',
                'name' => 'TT GDTX và Hướng nghiệp II Quỳnh Phụ',
                'district_id' => 276,
                'city_id' => 26,
            ),
            324 => 
            array (
                'id' => 1825,
                'code' => '017',
                'name' => 'THPT Hưng Nhân',
                'district_id' => 277,
                'city_id' => 26,
            ),
            325 => 
            array (
                'id' => 1826,
                'code' => '018',
                'name' => 'THPT Bắc Duyên Hà',
                'district_id' => 277,
                'city_id' => 26,
            ),
            326 => 
            array (
                'id' => 1827,
                'code' => '019',
                'name' => 'THPT Nam Duyên Hà',
                'district_id' => 277,
                'city_id' => 26,
            ),
            327 => 
            array (
                'id' => 1828,
                'code' => '020',
                'name' => 'THPT Đông Hưng Hà',
                'district_id' => 277,
                'city_id' => 26,
            ),
            328 => 
            array (
                'id' => 1829,
                'code' => '021',
                'name' => 'THPT Trần Thị Dung',
                'district_id' => 277,
                'city_id' => 26,
            ),
            329 => 
            array (
                'id' => 1830,
                'code' => '022',
                'name' => 'TT GDTX và Hướng nghiệp Hưng Hà',
                'district_id' => 277,
                'city_id' => 26,
            ),
            330 => 
            array (
                'id' => 1831,
                'code' => '024',
                'name' => 'THPT Tiên Hưng',
                'district_id' => 278,
                'city_id' => 26,
            ),
            331 => 
            array (
                'id' => 1832,
                'code' => '025',
                'name' => 'THPT Bắc Đông Quan',
                'district_id' => 278,
                'city_id' => 26,
            ),
            332 => 
            array (
                'id' => 1833,
                'code' => '026',
                'name' => 'THPT Nam Đông Quan',
                'district_id' => 278,
                'city_id' => 26,
            ),
            333 => 
            array (
                'id' => 1834,
                'code' => '027',
                'name' => 'THPT Mê Linh',
                'district_id' => 278,
                'city_id' => 26,
            ),
            334 => 
            array (
                'id' => 1835,
                'code' => '028',
                'name' => 'THPT Đông Quan',
                'district_id' => 278,
                'city_id' => 26,
            ),
            335 => 
            array (
                'id' => 1836,
                'code' => '029',
                'name' => 'THPT Tư thục Đông Hưng',
                'district_id' => 278,
                'city_id' => 26,
            ),
            336 => 
            array (
                'id' => 1837,
                'code' => '030',
                'name' => 'TT GDTX và Hướng nghiệp Đông Hưng',
                'district_id' => 278,
                'city_id' => 26,
            ),
            337 => 
            array (
                'id' => 1838,
                'code' => '032',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 279,
                'city_id' => 26,
            ),
            338 => 
            array (
                'id' => 1839,
                'code' => '033',
                'name' => 'THPT Vũ Tiên',
                'district_id' => 279,
                'city_id' => 26,
            ),
            339 => 
            array (
                'id' => 1840,
                'code' => '034',
                'name' => 'THPT Lý Bôn',
                'district_id' => 279,
                'city_id' => 26,
            ),
            340 => 
            array (
                'id' => 1841,
                'code' => '035',
                'name' => 'THPT Hùng Vương',
                'district_id' => 279,
                'city_id' => 26,
            ),
            341 => 
            array (
                'id' => 1842,
                'code' => '036',
                'name' => 'THPT Phạm Quang Thẩm',
                'district_id' => 279,
                'city_id' => 26,
            ),
            342 => 
            array (
                'id' => 1843,
                'code' => '037',
                'name' => 'TT GDTX và Hướng nghiệp Vũ Thư',
                'district_id' => 279,
                'city_id' => 26,
            ),
            343 => 
            array (
                'id' => 1844,
                'code' => '039',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 280,
                'city_id' => 26,
            ),
            344 => 
            array (
                'id' => 1845,
                'code' => '040',
                'name' => 'THPT Bắc Kiến Xương',
                'district_id' => 280,
                'city_id' => 26,
            ),
            345 => 
            array (
                'id' => 1846,
                'code' => '041',
                'name' => 'THPT Chu Văn An',
                'district_id' => 280,
                'city_id' => 26,
            ),
            346 => 
            array (
                'id' => 1847,
                'code' => '042',
                'name' => 'THPT Bình Thanh',
                'district_id' => 280,
                'city_id' => 26,
            ),
            347 => 
            array (
                'id' => 1848,
                'code' => '043',
                'name' => 'THPT Hồng Đức',
                'district_id' => 280,
                'city_id' => 26,
            ),
            348 => 
            array (
                'id' => 1849,
                'code' => '044',
                'name' => 'TT GDTX và Hướng nghiệp Kiến Xương',
                'district_id' => 280,
                'city_id' => 26,
            ),
            349 => 
            array (
                'id' => 1850,
                'code' => '046',
                'name' => 'THPT Tây Tiền Hải',
                'district_id' => 281,
                'city_id' => 26,
            ),
            350 => 
            array (
                'id' => 1851,
                'code' => '047',
                'name' => 'THPT Nam Tiền Hải',
                'district_id' => 281,
                'city_id' => 26,
            ),
            351 => 
            array (
                'id' => 1852,
                'code' => '048',
                'name' => 'THPT Đông Tiền Hải',
                'district_id' => 281,
                'city_id' => 26,
            ),
            352 => 
            array (
                'id' => 1853,
                'code' => '049',
                'name' => 'THPT Hoàng Văn Thái',
                'district_id' => 281,
                'city_id' => 26,
            ),
            353 => 
            array (
                'id' => 1854,
                'code' => '050',
                'name' => 'TT GDTX và Hướng nghiệp Tiền Hải',
                'district_id' => 281,
                'city_id' => 26,
            ),
            354 => 
            array (
                'id' => 1855,
                'code' => '052',
                'name' => 'THPT Đông Thụy Anh',
                'district_id' => 282,
                'city_id' => 26,
            ),
            355 => 
            array (
                'id' => 1856,
                'code' => '053',
                'name' => 'THPT Tây Thụy Anh',
                'district_id' => 282,
                'city_id' => 26,
            ),
            356 => 
            array (
                'id' => 1857,
                'code' => '054',
                'name' => 'THPT Thái Ninh',
                'district_id' => 282,
                'city_id' => 26,
            ),
            357 => 
            array (
                'id' => 1858,
                'code' => '055',
                'name' => 'THPT Thái Phúc',
                'district_id' => 282,
                'city_id' => 26,
            ),
            358 => 
            array (
                'id' => 1859,
                'code' => '056',
                'name' => 'THPT Diêm Điền',
                'district_id' => 282,
                'city_id' => 26,
            ),
            359 => 
            array (
                'id' => 1860,
                'code' => '057',
                'name' => 'TT GDTX và Hướng nghiệp I Thái Thụy',
                'district_id' => 282,
                'city_id' => 26,
            ),
            360 => 
            array (
                'id' => 1861,
                'code' => '058',
                'name' => 'TT GDTX và Hướng nghiệp II Thái Thụy',
                'district_id' => 282,
                'city_id' => 26,
            ),
            361 => 
            array (
                'id' => 1862,
                'code' => '011',
                'name' => 'THPT Chuyên Lương Văn Tụy',
                'district_id' => 283,
                'city_id' => 27,
            ),
            362 => 
            array (
                'id' => 1863,
                'code' => '012',
                'name' => 'THPT Đinh Tiên Hoàng',
                'district_id' => 283,
                'city_id' => 27,
            ),
            363 => 
            array (
                'id' => 1864,
                'code' => '013',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 283,
                'city_id' => 27,
            ),
            364 => 
            array (
                'id' => 1865,
                'code' => '014',
                'name' => 'THPT Ninh Bình Bạc Liêu',
                'district_id' => 283,
                'city_id' => 27,
            ),
            365 => 
            array (
                'id' => 1866,
                'code' => '015',
                'name' => 'THPT Nguyễn Công Trứ',
                'district_id' => 283,
                'city_id' => 27,
            ),
            366 => 
            array (
                'id' => 1867,
                'code' => '016',
                'name' => 'TTGDTX Ninh Bình',
                'district_id' => 283,
                'city_id' => 27,
            ),
            367 => 
            array (
                'id' => 1868,
                'code' => '021',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 284,
                'city_id' => 27,
            ),
            368 => 
            array (
                'id' => 1869,
                'code' => '022',
                'name' => 'THPT Ngô Thì Nhậm',
                'district_id' => 284,
                'city_id' => 27,
            ),
            369 => 
            array (
                'id' => 1870,
                'code' => '023',
                'name' => 'TTGDTX Tam Điệp',
                'district_id' => 284,
                'city_id' => 27,
            ),
            370 => 
            array (
                'id' => 1871,
                'code' => '031',
                'name' => 'THPT Nho Quan A',
                'district_id' => 285,
                'city_id' => 27,
            ),
            371 => 
            array (
                'id' => 1872,
                'code' => '032',
                'name' => 'THPT Nho Quan B',
                'district_id' => 285,
                'city_id' => 27,
            ),
            372 => 
            array (
                'id' => 1873,
                'code' => '033',
                'name' => 'THPT DT Nội Trú',
                'district_id' => 285,
                'city_id' => 27,
            ),
            373 => 
            array (
                'id' => 1874,
                'code' => '034',
                'name' => 'TTGDTX Nho Quan',
                'district_id' => 285,
                'city_id' => 27,
            ),
            374 => 
            array (
                'id' => 1875,
                'code' => '035',
                'name' => 'THPT Nho Quan C',
                'district_id' => 285,
                'city_id' => 27,
            ),
            375 => 
            array (
                'id' => 1876,
                'code' => '041',
                'name' => 'THPT Gia Viễn A',
                'district_id' => 286,
                'city_id' => 27,
            ),
            376 => 
            array (
                'id' => 1877,
                'code' => '042',
                'name' => 'THPT Gia Viễn B',
                'district_id' => 286,
                'city_id' => 27,
            ),
            377 => 
            array (
                'id' => 1878,
                'code' => '043',
                'name' => 'THPT Gia Viễn C',
                'district_id' => 286,
                'city_id' => 27,
            ),
            378 => 
            array (
                'id' => 1879,
                'code' => '044',
                'name' => 'TTGDTX Gia Viễn',
                'district_id' => 286,
                'city_id' => 27,
            ),
            379 => 
            array (
                'id' => 1880,
                'code' => '051',
                'name' => 'THPT Hoa Lư A',
                'district_id' => 287,
                'city_id' => 27,
            ),
            380 => 
            array (
                'id' => 1881,
                'code' => '052',
                'name' => 'THPT Trương Hán Siêu',
                'district_id' => 287,
                'city_id' => 27,
            ),
            381 => 
            array (
                'id' => 1882,
                'code' => '053',
                'name' => 'TTGDTX Hoa Lư',
                'district_id' => 287,
                'city_id' => 27,
            ),
            382 => 
            array (
                'id' => 1883,
                'code' => '061',
                'name' => 'THPT Yên Mô A',
                'district_id' => 288,
                'city_id' => 27,
            ),
            383 => 
            array (
                'id' => 1884,
                'code' => '062',
                'name' => 'THPT Yên Mô B',
                'district_id' => 288,
                'city_id' => 27,
            ),
            384 => 
            array (
                'id' => 1885,
                'code' => '063',
                'name' => 'TTGDTX Yên Mô',
                'district_id' => 288,
                'city_id' => 27,
            ),
            385 => 
            array (
                'id' => 1886,
                'code' => '064',
                'name' => 'THPT Tạ Uyên',
                'district_id' => 288,
                'city_id' => 27,
            ),
            386 => 
            array (
                'id' => 1887,
                'code' => '071',
                'name' => 'THPT Kim Sơn A',
                'district_id' => 289,
                'city_id' => 27,
            ),
            387 => 
            array (
                'id' => 1888,
                'code' => '072',
                'name' => 'THPT Kim Sơn B',
                'district_id' => 289,
                'city_id' => 27,
            ),
            388 => 
            array (
                'id' => 1889,
                'code' => '073',
                'name' => 'THPT Bình Minh',
                'district_id' => 289,
                'city_id' => 27,
            ),
            389 => 
            array (
                'id' => 1890,
                'code' => '074',
                'name' => 'TTGDTX Kim Sơn',
                'district_id' => 289,
                'city_id' => 27,
            ),
            390 => 
            array (
                'id' => 1891,
                'code' => '075',
                'name' => 'THPT Kim Sơn C',
                'district_id' => 289,
                'city_id' => 27,
            ),
            391 => 
            array (
                'id' => 1892,
                'code' => '081',
                'name' => 'THPT Yên Khánh A',
                'district_id' => 290,
                'city_id' => 27,
            ),
            392 => 
            array (
                'id' => 1893,
                'code' => '082',
                'name' => 'THPT Yên Khánh B',
                'district_id' => 290,
                'city_id' => 27,
            ),
            393 => 
            array (
                'id' => 1894,
                'code' => '083',
                'name' => 'THPT Vũ Duy Thanh',
                'district_id' => 290,
                'city_id' => 27,
            ),
            394 => 
            array (
                'id' => 1895,
                'code' => '084',
                'name' => 'TTGDTX Yên Khánh',
                'district_id' => 290,
                'city_id' => 27,
            ),
            395 => 
            array (
                'id' => 1896,
                'code' => '085',
                'name' => 'THPT  Yên Khánh C',
                'district_id' => 290,
                'city_id' => 27,
            ),
            396 => 
            array (
                'id' => 1897,
                'code' => '001',
                'name' => 'THPT Đào Duy Từ',
                'district_id' => 291,
                'city_id' => 28,
            ),
            397 => 
            array (
                'id' => 1898,
                'code' => '002',
                'name' => 'THPT Hàm Rồng',
                'district_id' => 291,
                'city_id' => 28,
            ),
            398 => 
            array (
                'id' => 1899,
                'code' => '003',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 291,
                'city_id' => 28,
            ),
            399 => 
            array (
                'id' => 1900,
                'code' => '004',
                'name' => 'THPT Tô Hiến Thành',
                'district_id' => 291,
                'city_id' => 28,
            ),
            400 => 
            array (
                'id' => 1901,
                'code' => '005',
                'name' => 'THPT Trường Thi',
                'district_id' => 291,
                'city_id' => 28,
            ),
            401 => 
            array (
                'id' => 1902,
                'code' => '006',
                'name' => 'THPT Lý Thường Kiệt',
                'district_id' => 291,
                'city_id' => 28,
            ),
            402 => 
            array (
                'id' => 1903,
                'code' => '007',
                'name' => 'THPT Đào Duy Anh',
                'district_id' => 291,
                'city_id' => 28,
            ),
            403 => 
            array (
                'id' => 1904,
                'code' => '008',
                'name' => 'TTGDTX-DN TP Thanh Hoá',
                'district_id' => 291,
                'city_id' => 28,
            ),
            404 => 
            array (
                'id' => 1905,
                'code' => '117',
                'name' => 'THPT Dân Tộc Nội trú  tỉnh TH',
                'district_id' => 291,
                'city_id' => 28,
            ),
            405 => 
            array (
                'id' => 1906,
                'code' => '118',
                'name' => 'THPT Chuyên Lam Sơn',
                'district_id' => 291,
                'city_id' => 28,
            ),
            406 => 
            array (
                'id' => 1907,
                'code' => '119',
                'name' => 'TTGDTX  tỉnh Thanh Hoá',
                'district_id' => 291,
                'city_id' => 28,
            ),
            407 => 
            array (
                'id' => 1908,
                'code' => '125',
                'name' => 'THPT Đông Sơn',
                'district_id' => 291,
                'city_id' => 28,
            ),
            408 => 
            array (
                'id' => 1909,
                'code' => '127',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 291,
                'city_id' => 28,
            ),
            409 => 
            array (
                'id' => 1910,
                'code' => '131',
                'name' => 'Trường CĐ TDTT Thanh Hóa',
                'district_id' => 291,
                'city_id' => 28,
            ),
            410 => 
            array (
                'id' => 1911,
                'code' => '132',
                'name' => 'Trường CĐ Y tế Thanh Hóa',
                'district_id' => 291,
                'city_id' => 28,
            ),
            411 => 
            array (
                'id' => 1912,
                'code' => '133',
                'name' => 'Trường ĐH Văn hoá Thể thao và Du lịch TH',
                'district_id' => 291,
                'city_id' => 28,
            ),
            412 => 
            array (
                'id' => 1913,
                'code' => '134',
                'name' => 'Trường CĐ nghề NN và PTNT Thanh Hóa',
                'district_id' => 291,
                'city_id' => 28,
            ),
            413 => 
            array (
                'id' => 1914,
                'code' => '136',
                'name' => 'Trường CĐ Kinh tế- Kỹ thuật Công thương',
                'district_id' => 291,
                'city_id' => 28,
            ),
            414 => 
            array (
                'id' => 1915,
                'code' => '139',
                'name' => 'CĐ nghề Công nghiệp Thanh Hóa',
                'district_id' => 291,
                'city_id' => 28,
            ),
            415 => 
            array (
                'id' => 1916,
                'code' => '140',
                'name' => 'CĐ nghề Lam Kinh',
                'district_id' => 291,
                'city_id' => 28,
            ),
            416 => 
            array (
                'id' => 1917,
                'code' => '141',
                'name' => 'TC nghề Kỹ nghệ',
                'district_id' => 291,
                'city_id' => 28,
            ),
            417 => 
            array (
                'id' => 1918,
                'code' => '143',
                'name' => 'TC nghề Thương mại Du lịch',
                'district_id' => 291,
                'city_id' => 28,
            ),
            418 => 
            array (
                'id' => 1919,
                'code' => '144',
                'name' => 'TC nghề  Giao thông Vận tải',
                'district_id' => 291,
                'city_id' => 28,
            ),
            419 => 
            array (
                'id' => 1920,
                'code' => '145',
                'name' => 'TC nghề  Xây dựng',
                'district_id' => 291,
                'city_id' => 28,
            ),
            420 => 
            array (
                'id' => 1921,
                'code' => '147',
                'name' => 'TC nghề  Nông nghiệp và Phát triển nông thôn',
                'district_id' => 291,
                'city_id' => 28,
            ),
            421 => 
            array (
                'id' => 1922,
                'code' => '151',
                'name' => 'TC nghề Thanh thiếu niên đặc biệt khó khăn',
                'district_id' => 291,
                'city_id' => 28,
            ),
            422 => 
            array (
                'id' => 1923,
                'code' => '156',
                'name' => 'TC nghề số 1  thành phố Thanh Hoá',
                'district_id' => 291,
                'city_id' => 28,
            ),
            423 => 
            array (
                'id' => 1924,
                'code' => '159',
                'name' => 'CĐ nghề VICET',
                'district_id' => 291,
                'city_id' => 28,
            ),
            424 => 
            array (
                'id' => 1925,
                'code' => '162',
                'name' => 'TC Bách Nghệ',
                'district_id' => 291,
                'city_id' => 28,
            ),
            425 => 
            array (
                'id' => 1926,
                'code' => '163',
                'name' => 'TC Y Dược Hợp Lực',
                'district_id' => 291,
                'city_id' => 28,
            ),
            426 => 
            array (
                'id' => 1927,
                'code' => '165',
                'name' => 'TC Kỹ Thuật Y Dược Thanh Hóa',
                'district_id' => 291,
                'city_id' => 28,
            ),
            427 => 
            array (
                'id' => 1928,
                'code' => '166',
                'name' => 'TC Tuệ Tĩnh',
                'district_id' => 291,
                'city_id' => 28,
            ),
            428 => 
            array (
                'id' => 1929,
                'code' => '009',
                'name' => 'THPT Bỉm Sơn',
                'district_id' => 292,
                'city_id' => 28,
            ),
            429 => 
            array (
                'id' => 1930,
                'code' => '010',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 292,
                'city_id' => 28,
            ),
            430 => 
            array (
                'id' => 1931,
                'code' => '011',
                'name' => 'TTGDTX  TX Bỉm Sơn',
                'district_id' => 292,
                'city_id' => 28,
            ),
            431 => 
            array (
                'id' => 1932,
                'code' => '148',
                'name' => 'TC nghề Bỉm Sơn',
                'district_id' => 292,
                'city_id' => 28,
            ),
            432 => 
            array (
                'id' => 1933,
                'code' => '152',
                'name' => 'TC nghề VINASHIN9',
                'district_id' => 292,
                'city_id' => 28,
            ),
            433 => 
            array (
                'id' => 1934,
                'code' => '160',
                'name' => 'CĐ Tài nguyên Môi trường miền Trung',
                'district_id' => 292,
                'city_id' => 28,
            ),
            434 => 
            array (
                'id' => 1935,
                'code' => '161',
                'name' => 'TC Xây dựng Thanh hoá',
                'district_id' => 292,
                'city_id' => 28,
            ),
            435 => 
            array (
                'id' => 1936,
                'code' => '012',
                'name' => 'THPT Sầm Sơn',
                'district_id' => 293,
                'city_id' => 28,
            ),
            436 => 
            array (
                'id' => 1937,
                'code' => '013',
                'name' => 'THPT Nguyễn Thị Lợi',
                'district_id' => 293,
                'city_id' => 28,
            ),
            437 => 
            array (
                'id' => 1938,
                'code' => '014',
                'name' => 'TTGDTX-DN Sầm Sơn',
                'district_id' => 293,
                'city_id' => 28,
            ),
            438 => 
            array (
                'id' => 1939,
                'code' => '015',
                'name' => 'THPT Quan Hoá',
                'district_id' => 294,
                'city_id' => 28,
            ),
            439 => 
            array (
                'id' => 1940,
                'code' => '016',
                'name' => 'TTGDTX Quan Hoá',
                'district_id' => 294,
                'city_id' => 28,
            ),
            440 => 
            array (
                'id' => 1941,
                'code' => '167',
                'name' => 'THCS và THPT Quan Hóa',
                'district_id' => 294,
                'city_id' => 28,
            ),
            441 => 
            array (
                'id' => 1942,
                'code' => '017',
                'name' => 'THPT Quan Sơn',
                'district_id' => 295,
                'city_id' => 28,
            ),
            442 => 
            array (
                'id' => 1943,
                'code' => '018',
                'name' => 'TTGDTX-DN Quan Sơn',
                'district_id' => 295,
                'city_id' => 28,
            ),
            443 => 
            array (
                'id' => 1944,
                'code' => '138',
                'name' => 'THPT Quan Sơn 2',
                'district_id' => 295,
                'city_id' => 28,
            ),
            444 => 
            array (
                'id' => 1945,
                'code' => '019',
                'name' => 'THPT Mường Lát',
                'district_id' => 296,
                'city_id' => 28,
            ),
            445 => 
            array (
                'id' => 1946,
                'code' => '020',
                'name' => 'TTGDTX Mường Lát',
                'district_id' => 296,
                'city_id' => 28,
            ),
            446 => 
            array (
                'id' => 1947,
                'code' => '021',
                'name' => 'THPT Bá Thước',
                'district_id' => 297,
                'city_id' => 28,
            ),
            447 => 
            array (
                'id' => 1948,
                'code' => '022',
                'name' => 'THPT Hà Văn Mao',
                'district_id' => 297,
                'city_id' => 28,
            ),
            448 => 
            array (
                'id' => 1949,
                'code' => '023',
                'name' => 'TTGDTX-DN Bá Thước',
                'district_id' => 297,
                'city_id' => 28,
            ),
            449 => 
            array (
                'id' => 1950,
                'code' => '122',
                'name' => 'THPT Bá Thước 3',
                'district_id' => 297,
                'city_id' => 28,
            ),
            450 => 
            array (
                'id' => 1951,
                'code' => '024',
                'name' => 'THPT Cầm Bá Thước',
                'district_id' => 298,
                'city_id' => 28,
            ),
            451 => 
            array (
                'id' => 1952,
                'code' => '025',
                'name' => 'THPT Thường Xuân 2',
                'district_id' => 298,
                'city_id' => 28,
            ),
            452 => 
            array (
                'id' => 1953,
                'code' => '026',
                'name' => 'TTGDTX Thường Xuân',
                'district_id' => 298,
                'city_id' => 28,
            ),
            453 => 
            array (
                'id' => 1954,
                'code' => '168',
                'name' => 'THPT Thường Xuân 3',
                'district_id' => 298,
                'city_id' => 28,
            ),
            454 => 
            array (
                'id' => 1955,
                'code' => '027',
                'name' => 'THPT Như Xuân',
                'district_id' => 299,
                'city_id' => 28,
            ),
            455 => 
            array (
                'id' => 1956,
                'code' => '028',
                'name' => 'TTGDTX Như Xuân',
                'district_id' => 299,
                'city_id' => 28,
            ),
            456 => 
            array (
                'id' => 1957,
                'code' => '130',
                'name' => 'THPT Như Xuân 2',
                'district_id' => 299,
                'city_id' => 28,
            ),
            457 => 
            array (
                'id' => 1958,
                'code' => '029',
                'name' => 'THPT Như Thanh',
                'district_id' => 300,
                'city_id' => 28,
            ),
            458 => 
            array (
                'id' => 1959,
                'code' => '030',
                'name' => 'THPT Như Thanh 2',
                'district_id' => 300,
                'city_id' => 28,
            ),
            459 => 
            array (
                'id' => 1960,
                'code' => '031',
                'name' => 'TTGDTX-DN Như Thanh',
                'district_id' => 300,
                'city_id' => 28,
            ),
            460 => 
            array (
                'id' => 1961,
                'code' => '170',
                'name' => 'THCS và THPT Như Thanh',
                'district_id' => 300,
                'city_id' => 28,
            ),
            461 => 
            array (
                'id' => 1962,
                'code' => '032',
                'name' => 'THPT Lang Chánh',
                'district_id' => 301,
                'city_id' => 28,
            ),
            462 => 
            array (
                'id' => 1963,
                'code' => '033',
                'name' => 'TTGDTX-DN Lang Chánh',
                'district_id' => 301,
                'city_id' => 28,
            ),
            463 => 
            array (
                'id' => 1964,
                'code' => '034',
                'name' => 'THPT Ngọc Lặc',
                'district_id' => 302,
                'city_id' => 28,
            ),
            464 => 
            array (
                'id' => 1965,
                'code' => '035',
                'name' => 'THPT Lê Lai',
                'district_id' => 302,
                'city_id' => 28,
            ),
            465 => 
            array (
                'id' => 1966,
                'code' => '036',
                'name' => 'TTGDTX Ngọc Lặc',
                'district_id' => 302,
                'city_id' => 28,
            ),
            466 => 
            array (
                'id' => 1967,
                'code' => '123',
                'name' => 'THPT Bắc Sơn',
                'district_id' => 302,
                'city_id' => 28,
            ),
            467 => 
            array (
                'id' => 1968,
                'code' => '142',
                'name' => 'TC nghề  Miền núi Thanh Hoá',
                'district_id' => 302,
                'city_id' => 28,
            ),
            468 => 
            array (
                'id' => 1969,
                'code' => '037',
                'name' => 'THPT Thạch Thành 1',
                'district_id' => 303,
                'city_id' => 28,
            ),
            469 => 
            array (
                'id' => 1970,
                'code' => '038',
                'name' => 'THPT Thạch Thành 2',
                'district_id' => 303,
                'city_id' => 28,
            ),
            470 => 
            array (
                'id' => 1971,
                'code' => '039',
                'name' => 'THPT Thạch Thành 3',
                'district_id' => 303,
                'city_id' => 28,
            ),
            471 => 
            array (
                'id' => 1972,
                'code' => '040',
                'name' => 'TTGDTX Thạch Thành',
                'district_id' => 303,
                'city_id' => 28,
            ),
            472 => 
            array (
                'id' => 1973,
                'code' => '129',
                'name' => 'THPT Thạch Thành 4',
                'district_id' => 303,
                'city_id' => 28,
            ),
            473 => 
            array (
                'id' => 1974,
                'code' => '041',
                'name' => 'THPT Cẩm Thuỷ 1',
                'district_id' => 304,
                'city_id' => 28,
            ),
            474 => 
            array (
                'id' => 1975,
                'code' => '042',
                'name' => 'THPT Cẩm Thuỷ 2',
                'district_id' => 304,
                'city_id' => 28,
            ),
            475 => 
            array (
                'id' => 1976,
                'code' => '043',
                'name' => 'THPT Cẩm Thuỷ 3',
                'district_id' => 304,
                'city_id' => 28,
            ),
            476 => 
            array (
                'id' => 1977,
                'code' => '044',
                'name' => 'TTGDTX Cẩm Thuỷ',
                'district_id' => 304,
                'city_id' => 28,
            ),
            477 => 
            array (
                'id' => 1978,
                'code' => '045',
                'name' => 'THPT Lê Lợi',
                'district_id' => 305,
                'city_id' => 28,
            ),
            478 => 
            array (
                'id' => 1979,
                'code' => '046',
                'name' => 'THPT Lê Hoàn',
                'district_id' => 305,
                'city_id' => 28,
            ),
            479 => 
            array (
                'id' => 1980,
                'code' => '047',
                'name' => 'THPT Lam Kinh',
                'district_id' => 305,
                'city_id' => 28,
            ),
            480 => 
            array (
                'id' => 1981,
                'code' => '048',
                'name' => 'THPT Thọ Xuân 4',
                'district_id' => 305,
                'city_id' => 28,
            ),
            481 => 
            array (
                'id' => 1982,
                'code' => '049',
                'name' => 'THPT  Lê Văn Linh',
                'district_id' => 305,
                'city_id' => 28,
            ),
            482 => 
            array (
                'id' => 1983,
                'code' => '050',
                'name' => 'THPT Thọ Xuân 5',
                'district_id' => 305,
                'city_id' => 28,
            ),
            483 => 
            array (
                'id' => 1984,
                'code' => '051',
                'name' => 'TTGDTX Thọ Xuân',
                'district_id' => 305,
                'city_id' => 28,
            ),
            484 => 
            array (
                'id' => 1985,
                'code' => '052',
                'name' => 'THPT Vĩnh Lộc',
                'district_id' => 306,
                'city_id' => 28,
            ),
            485 => 
            array (
                'id' => 1986,
                'code' => '053',
                'name' => 'THPT Tống Duy Tân',
                'district_id' => 306,
                'city_id' => 28,
            ),
            486 => 
            array (
                'id' => 1987,
                'code' => '054',
                'name' => 'THPT Trần Khát Chân',
                'district_id' => 306,
                'city_id' => 28,
            ),
            487 => 
            array (
                'id' => 1988,
                'code' => '055',
                'name' => 'TTGDTX Vĩnh Lộc',
                'district_id' => 306,
                'city_id' => 28,
            ),
            488 => 
            array (
                'id' => 1989,
                'code' => '056',
                'name' => 'THPT Thiệu Hoá',
                'district_id' => 307,
                'city_id' => 28,
            ),
            489 => 
            array (
                'id' => 1990,
                'code' => '057',
                'name' => 'THPT Nguyễn Quán Nho',
                'district_id' => 307,
                'city_id' => 28,
            ),
            490 => 
            array (
                'id' => 1991,
                'code' => '058',
                'name' => 'THPT Lê Văn Hưu',
                'district_id' => 307,
                'city_id' => 28,
            ),
            491 => 
            array (
                'id' => 1992,
                'code' => '059',
                'name' => 'THPT  Dương Đình Nghệ',
                'district_id' => 307,
                'city_id' => 28,
            ),
            492 => 
            array (
                'id' => 1993,
                'code' => '060',
                'name' => 'TTGDTX Thiệu Hoá',
                'district_id' => 307,
                'city_id' => 28,
            ),
            493 => 
            array (
                'id' => 1994,
                'code' => '154',
                'name' => 'TC nghề Hưng Đô',
                'district_id' => 307,
                'city_id' => 28,
            ),
            494 => 
            array (
                'id' => 1995,
                'code' => '061',
                'name' => 'THPT Triệu Sơn 1',
                'district_id' => 308,
                'city_id' => 28,
            ),
            495 => 
            array (
                'id' => 1996,
                'code' => '062',
                'name' => 'THPT Triệu Sơn 2',
                'district_id' => 308,
                'city_id' => 28,
            ),
            496 => 
            array (
                'id' => 1997,
                'code' => '063',
                'name' => 'THPT Triệu Sơn 3',
                'district_id' => 308,
                'city_id' => 28,
            ),
            497 => 
            array (
                'id' => 1998,
                'code' => '064',
                'name' => 'THPT Triệu Sơn 4',
                'district_id' => 308,
                'city_id' => 28,
            ),
            498 => 
            array (
                'id' => 1999,
                'code' => '065',
                'name' => 'THPT Triệu Sơn 5',
                'district_id' => 308,
                'city_id' => 28,
            ),
            499 => 
            array (
                'id' => 2000,
                'code' => '066',
                'name' => 'THPT Triệu Sơn 6',
                'district_id' => 308,
                'city_id' => 28,
            ),
        ));
        \DB::table('organization_school')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'code' => '067',
                'name' => 'THPT Triệu Sơn',
                'district_id' => 308,
                'city_id' => 28,
            ),
            1 => 
            array (
                'id' => 2002,
                'code' => '068',
                'name' => 'TTGDTX Triệu Sơn',
                'district_id' => 308,
                'city_id' => 28,
            ),
            2 => 
            array (
                'id' => 2003,
                'code' => '135',
                'name' => 'Trường CĐ Nông Lâm Thanh Hóa',
                'district_id' => 308,
                'city_id' => 28,
            ),
            3 => 
            array (
                'id' => 2004,
                'code' => '069',
                'name' => 'THPT Nông Cống 1',
                'district_id' => 309,
                'city_id' => 28,
            ),
            4 => 
            array (
                'id' => 2005,
                'code' => '070',
                'name' => 'THPT Nông Cống 2',
                'district_id' => 309,
                'city_id' => 28,
            ),
            5 => 
            array (
                'id' => 2006,
                'code' => '071',
                'name' => 'THPT Nông Cống 3',
                'district_id' => 309,
                'city_id' => 28,
            ),
            6 => 
            array (
                'id' => 2007,
                'code' => '072',
                'name' => 'THPT Nông Cống 4',
                'district_id' => 309,
                'city_id' => 28,
            ),
            7 => 
            array (
                'id' => 2008,
                'code' => '073',
                'name' => 'THPT Triệu Thị Trinh',
                'district_id' => 309,
                'city_id' => 28,
            ),
            8 => 
            array (
                'id' => 2009,
                'code' => '074',
                'name' => 'TTGDTX Nông Cống',
                'district_id' => 309,
                'city_id' => 28,
            ),
            9 => 
            array (
                'id' => 2010,
                'code' => '124',
                'name' => 'THPT Nông Cống',
                'district_id' => 309,
                'city_id' => 28,
            ),
            10 => 
            array (
                'id' => 2011,
                'code' => '075',
                'name' => 'THPT Đông Sơn 1',
                'district_id' => 310,
                'city_id' => 28,
            ),
            11 => 
            array (
                'id' => 2012,
                'code' => '076',
                'name' => 'THPT Đông Sơn 2',
                'district_id' => 310,
                'city_id' => 28,
            ),
            12 => 
            array (
                'id' => 2013,
                'code' => '077',
                'name' => 'THPT  Nguyễn Mộng Tuân',
                'district_id' => 310,
                'city_id' => 28,
            ),
            13 => 
            array (
                'id' => 2014,
                'code' => '078',
                'name' => 'TTGDTX Đông Sơn',
                'district_id' => 310,
                'city_id' => 28,
            ),
            14 => 
            array (
                'id' => 2015,
                'code' => '079',
                'name' => 'THPT Hà Trung',
                'district_id' => 311,
                'city_id' => 28,
            ),
            15 => 
            array (
                'id' => 2016,
                'code' => '080',
                'name' => 'THPT Hoàng Lệ Kha',
                'district_id' => 311,
                'city_id' => 28,
            ),
            16 => 
            array (
                'id' => 2017,
                'code' => '081',
                'name' => 'THPT Nguyễn Hoàng',
                'district_id' => 311,
                'city_id' => 28,
            ),
            17 => 
            array (
                'id' => 2018,
                'code' => '082',
                'name' => 'TTGDTX-DN Hà Trung',
                'district_id' => 311,
                'city_id' => 28,
            ),
            18 => 
            array (
                'id' => 2019,
                'code' => '083',
                'name' => 'THPT Lương Đắc Bằng',
                'district_id' => 312,
                'city_id' => 28,
            ),
            19 => 
            array (
                'id' => 2020,
                'code' => '084',
                'name' => 'THPT Hoằng Hoá 2',
                'district_id' => 312,
                'city_id' => 28,
            ),
            20 => 
            array (
                'id' => 2021,
                'code' => '085',
                'name' => 'THPT Hoằng Hoá 3',
                'district_id' => 312,
                'city_id' => 28,
            ),
            21 => 
            array (
                'id' => 2022,
                'code' => '086',
                'name' => 'THPT Hoằng Hoá 4',
                'district_id' => 312,
                'city_id' => 28,
            ),
            22 => 
            array (
                'id' => 2023,
                'code' => '087',
                'name' => 'THPT Lưu Đình Chất',
                'district_id' => 312,
                'city_id' => 28,
            ),
            23 => 
            array (
                'id' => 2024,
                'code' => '088',
                'name' => 'THPT Lê Viết Tạo',
                'district_id' => 312,
                'city_id' => 28,
            ),
            24 => 
            array (
                'id' => 2025,
                'code' => '089',
                'name' => 'TTGDTX-DN Hoằng Hoá',
                'district_id' => 312,
                'city_id' => 28,
            ),
            25 => 
            array (
                'id' => 2026,
                'code' => '137',
                'name' => 'THPT Hoằng Hoá',
                'district_id' => 312,
                'city_id' => 28,
            ),
            26 => 
            array (
                'id' => 2027,
                'code' => '155',
                'name' => 'Trường CĐ nghề An Nhất Vinh',
                'district_id' => 312,
                'city_id' => 28,
            ),
            27 => 
            array (
                'id' => 2028,
                'code' => '090',
                'name' => 'THPT Ba Đình',
                'district_id' => 313,
                'city_id' => 28,
            ),
            28 => 
            array (
                'id' => 2029,
                'code' => '091',
                'name' => 'THPT Mai Anh Tuấn',
                'district_id' => 313,
                'city_id' => 28,
            ),
            29 => 
            array (
                'id' => 2030,
                'code' => '092',
                'name' => 'THPT Trần Phú',
                'district_id' => 313,
                'city_id' => 28,
            ),
            30 => 
            array (
                'id' => 2031,
                'code' => '093',
                'name' => 'TTGDTX Nga Sơn',
                'district_id' => 313,
                'city_id' => 28,
            ),
            31 => 
            array (
                'id' => 2032,
                'code' => '126',
                'name' => 'THPT Nga Sơn',
                'district_id' => 313,
                'city_id' => 28,
            ),
            32 => 
            array (
                'id' => 2033,
                'code' => '150',
                'name' => 'TC nghề Nga Sơn',
                'district_id' => 313,
                'city_id' => 28,
            ),
            33 => 
            array (
                'id' => 2034,
                'code' => '094',
                'name' => 'THPT Hậu Lộc 1',
                'district_id' => 314,
                'city_id' => 28,
            ),
            34 => 
            array (
                'id' => 2035,
                'code' => '095',
                'name' => 'THPT Hậu Lộc 2',
                'district_id' => 314,
                'city_id' => 28,
            ),
            35 => 
            array (
                'id' => 2036,
                'code' => '096',
                'name' => 'THPT Đinh Chương Dương',
                'district_id' => 314,
                'city_id' => 28,
            ),
            36 => 
            array (
                'id' => 2037,
                'code' => '097',
                'name' => 'TTGDTX Hậu Lộc',
                'district_id' => 314,
                'city_id' => 28,
            ),
            37 => 
            array (
                'id' => 2038,
                'code' => '120',
                'name' => 'THPT Hậu Lộc 3',
                'district_id' => 314,
                'city_id' => 28,
            ),
            38 => 
            array (
                'id' => 2039,
                'code' => '121',
                'name' => 'THPT Hậu Lộc 4',
                'district_id' => 314,
                'city_id' => 28,
            ),
            39 => 
            array (
                'id' => 2040,
                'code' => '098',
                'name' => 'THPT Quảng Xương 1',
                'district_id' => 315,
                'city_id' => 28,
            ),
            40 => 
            array (
                'id' => 2041,
                'code' => '099',
                'name' => 'THPT Quảng Xương 2',
                'district_id' => 315,
                'city_id' => 28,
            ),
            41 => 
            array (
                'id' => 2042,
                'code' => '100',
                'name' => 'THPT Quảng Xương 3',
                'district_id' => 315,
                'city_id' => 28,
            ),
            42 => 
            array (
                'id' => 2043,
                'code' => '101',
                'name' => 'THPT Quảng Xương 4',
                'district_id' => 315,
                'city_id' => 28,
            ),
            43 => 
            array (
                'id' => 2044,
                'code' => '102',
                'name' => 'THPT  Nguyễn Xuân Nguyên',
                'district_id' => 315,
                'city_id' => 28,
            ),
            44 => 
            array (
                'id' => 2045,
                'code' => '103',
                'name' => 'THPT Đặng Thai Mai',
                'district_id' => 315,
                'city_id' => 28,
            ),
            45 => 
            array (
                'id' => 2046,
                'code' => '104',
                'name' => 'TTGDTX-DN Quảng Xương',
                'district_id' => 315,
                'city_id' => 28,
            ),
            46 => 
            array (
                'id' => 2047,
                'code' => '146',
                'name' => 'TC nghề  Phát thanh Truyền hình',
                'district_id' => 315,
                'city_id' => 28,
            ),
            47 => 
            array (
                'id' => 2048,
                'code' => '153',
                'name' => 'TC nghề Việt Trung',
                'district_id' => 315,
                'city_id' => 28,
            ),
            48 => 
            array (
                'id' => 2049,
                'code' => '157',
                'name' => 'TC nghề Quảng Xương',
                'district_id' => 315,
                'city_id' => 28,
            ),
            49 => 
            array (
                'id' => 2050,
                'code' => '164',
                'name' => 'TC Y Dược Văn Hiến',
                'district_id' => 315,
                'city_id' => 28,
            ),
            50 => 
            array (
                'id' => 2051,
                'code' => '105',
                'name' => 'THPT Tĩnh Gia 1',
                'district_id' => 316,
                'city_id' => 28,
            ),
            51 => 
            array (
                'id' => 2052,
                'code' => '106',
                'name' => 'THPT Tĩnh Gia 2',
                'district_id' => 316,
                'city_id' => 28,
            ),
            52 => 
            array (
                'id' => 2053,
                'code' => '107',
                'name' => 'THPT Tĩnh Gia 3',
                'district_id' => 316,
                'city_id' => 28,
            ),
            53 => 
            array (
                'id' => 2054,
                'code' => '108',
                'name' => 'THPT Tĩnh Gia 5',
                'district_id' => 316,
                'city_id' => 28,
            ),
            54 => 
            array (
                'id' => 2055,
                'code' => '109',
                'name' => 'TTGDTX Tĩnh Gia',
                'district_id' => 316,
                'city_id' => 28,
            ),
            55 => 
            array (
                'id' => 2056,
                'code' => '128',
                'name' => 'THPT  Tĩnh Gia 4',
                'district_id' => 316,
                'city_id' => 28,
            ),
            56 => 
            array (
                'id' => 2057,
                'code' => '149',
                'name' => 'TC nghề Nghi Sơn',
                'district_id' => 316,
                'city_id' => 28,
            ),
            57 => 
            array (
                'id' => 2058,
                'code' => '158',
                'name' => 'CĐ nghề Công nghệ LICOGI',
                'district_id' => 316,
                'city_id' => 28,
            ),
            58 => 
            array (
                'id' => 2059,
                'code' => '169',
                'name' => 'THCS và THPT Nghi Sơn',
                'district_id' => 316,
                'city_id' => 28,
            ),
            59 => 
            array (
                'id' => 2060,
                'code' => '110',
                'name' => 'THPT Yên Định 1',
                'district_id' => 317,
                'city_id' => 28,
            ),
            60 => 
            array (
                'id' => 2061,
                'code' => '111',
                'name' => 'THPT Yên Định 2',
                'district_id' => 317,
                'city_id' => 28,
            ),
            61 => 
            array (
                'id' => 2062,
                'code' => '112',
                'name' => 'THPT Yên Định 3',
                'district_id' => 317,
                'city_id' => 28,
            ),
            62 => 
            array (
                'id' => 2063,
                'code' => '113',
                'name' => 'THCS và THPT Thống Nhất',
                'district_id' => 317,
                'city_id' => 28,
            ),
            63 => 
            array (
                'id' => 2064,
                'code' => '114',
                'name' => 'THPT Trần Ân Chiêm',
                'district_id' => 317,
                'city_id' => 28,
            ),
            64 => 
            array (
                'id' => 2065,
                'code' => '115',
                'name' => 'THPT Hà Tông Huân',
                'district_id' => 317,
                'city_id' => 28,
            ),
            65 => 
            array (
                'id' => 2066,
                'code' => '116',
                'name' => 'TTGDTX Yên Định',
                'district_id' => 317,
                'city_id' => 28,
            ),
            66 => 
            array (
                'id' => 2067,
                'code' => '002',
                'name' => 'THPT Huỳnh Thúc Kháng',
                'district_id' => 318,
                'city_id' => 29,
            ),
            67 => 
            array (
                'id' => 2068,
                'code' => '003',
                'name' => 'THPT Hà Huy Tập',
                'district_id' => 318,
                'city_id' => 29,
            ),
            68 => 
            array (
                'id' => 2069,
                'code' => '004',
                'name' => 'THPT Lê Viết Thuật',
                'district_id' => 318,
                'city_id' => 29,
            ),
            69 => 
            array (
                'id' => 2070,
                'code' => '005',
                'name' => 'THPT  Nguyễn Trường Tộ - TP Vinh',
                'district_id' => 318,
                'city_id' => 29,
            ),
            70 => 
            array (
                'id' => 2071,
                'code' => '006',
                'name' => 'THPT Chuyên Phan Bội Châu',
                'district_id' => 318,
                'city_id' => 29,
            ),
            71 => 
            array (
                'id' => 2072,
                'code' => '007',
                'name' => 'Chuyên Toán ĐH Vinh',
                'district_id' => 318,
                'city_id' => 29,
            ),
            72 => 
            array (
                'id' => 2073,
                'code' => '008',
                'name' => 'THPT DTNT Tỉnh',
                'district_id' => 318,
                'city_id' => 29,
            ),
            73 => 
            array (
                'id' => 2074,
                'code' => '009',
                'name' => 'THPT  VTC',
                'district_id' => 318,
                'city_id' => 29,
            ),
            74 => 
            array (
                'id' => 2075,
                'code' => '010',
                'name' => 'THPT  Nguyễn Huệ',
                'district_id' => 318,
                'city_id' => 29,
            ),
            75 => 
            array (
                'id' => 2076,
                'code' => '011',
                'name' => 'THPT  Hermann Gmeiner',
                'district_id' => 318,
                'city_id' => 29,
            ),
            76 => 
            array (
                'id' => 2077,
                'code' => '012',
                'name' => 'PT năng khiếu TDTT Nghệ An',
                'district_id' => 318,
                'city_id' => 29,
            ),
            77 => 
            array (
                'id' => 2078,
                'code' => '013',
                'name' => 'THPT DTNT Số 2',
                'district_id' => 318,
                'city_id' => 29,
            ),
            78 => 
            array (
                'id' => 2079,
                'code' => '098',
                'name' => 'THPT  Nguyễn Trãi',
                'district_id' => 318,
                'city_id' => 29,
            ),
            79 => 
            array (
                'id' => 2080,
                'code' => '104',
                'name' => 'TTGDTX Vinh',
                'district_id' => 318,
                'city_id' => 29,
            ),
            80 => 
            array (
                'id' => 2081,
                'code' => '014',
                'name' => 'THPT Cửa lò',
                'district_id' => 319,
                'city_id' => 29,
            ),
            81 => 
            array (
                'id' => 2082,
                'code' => '099',
                'name' => 'THPT Cửa Lò 2',
                'district_id' => 319,
                'city_id' => 29,
            ),
            82 => 
            array (
                'id' => 2083,
                'code' => '105',
                'name' => 'TTGDTX Số 2',
                'district_id' => 319,
                'city_id' => 29,
            ),
            83 => 
            array (
                'id' => 2084,
                'code' => '016',
                'name' => 'THPT Quỳ Châu',
                'district_id' => 320,
                'city_id' => 29,
            ),
            84 => 
            array (
                'id' => 2085,
                'code' => '106',
                'name' => 'TTGDTX Quỳ Châu',
                'district_id' => 320,
                'city_id' => 29,
            ),
            85 => 
            array (
                'id' => 2086,
                'code' => '017',
                'name' => 'THPT  Quỳ Hợp 2',
                'district_id' => 321,
                'city_id' => 29,
            ),
            86 => 
            array (
                'id' => 2087,
                'code' => '018',
                'name' => 'THPT Quỳ Hợp 1',
                'district_id' => 321,
                'city_id' => 29,
            ),
            87 => 
            array (
                'id' => 2088,
                'code' => '101',
                'name' => 'THPT Quỳ Hợp 3',
                'district_id' => 321,
                'city_id' => 29,
            ),
            88 => 
            array (
                'id' => 2089,
                'code' => '107',
                'name' => 'TTGDTX Quỳ Hợp',
                'district_id' => 321,
                'city_id' => 29,
            ),
            89 => 
            array (
                'id' => 2090,
                'code' => '024',
                'name' => 'THPT 1/5',
                'district_id' => 322,
                'city_id' => 29,
            ),
            90 => 
            array (
                'id' => 2091,
                'code' => '026',
                'name' => 'THPT Cờ Đỏ',
                'district_id' => 322,
                'city_id' => 29,
            ),
            91 => 
            array (
                'id' => 2092,
                'code' => '108',
                'name' => 'TTGDTX Nghĩa Đàn',
                'district_id' => 322,
                'city_id' => 29,
            ),
            92 => 
            array (
                'id' => 2093,
                'code' => '144',
                'name' => 'TTGDTX Thái Hòa',
                'district_id' => 322,
                'city_id' => 29,
            ),
            93 => 
            array (
                'id' => 2094,
                'code' => '027',
                'name' => 'THPT Bắc Quỳnh Lưu',
                'district_id' => 323,
                'city_id' => 29,
            ),
            94 => 
            array (
                'id' => 2095,
                'code' => '029',
                'name' => 'THPT Quỳnh Lưu 1',
                'district_id' => 323,
                'city_id' => 29,
            ),
            95 => 
            array (
                'id' => 2096,
                'code' => '030',
                'name' => 'THPT Quỳnh Lưu 2',
                'district_id' => 323,
                'city_id' => 29,
            ),
            96 => 
            array (
                'id' => 2097,
                'code' => '031',
                'name' => 'THPT Quỳnh Lưu 3',
                'district_id' => 323,
                'city_id' => 29,
            ),
            97 => 
            array (
                'id' => 2098,
                'code' => '032',
                'name' => 'THPT Quỳnh Lưu 4',
                'district_id' => 323,
                'city_id' => 29,
            ),
            98 => 
            array (
                'id' => 2099,
                'code' => '033',
                'name' => 'THPT Nguyễn Đức Mậu',
                'district_id' => 323,
                'city_id' => 29,
            ),
            99 => 
            array (
                'id' => 2100,
                'code' => '035',
                'name' => 'THPT Cù Chính Lan',
                'district_id' => 323,
                'city_id' => 29,
            ),
            100 => 
            array (
                'id' => 2101,
                'code' => '102',
                'name' => 'THPT Lý Tự Trọng',
                'district_id' => 323,
                'city_id' => 29,
            ),
            101 => 
            array (
                'id' => 2102,
                'code' => '109',
                'name' => 'TTGDTX Quỳnh Lưu',
                'district_id' => 323,
                'city_id' => 29,
            ),
            102 => 
            array (
                'id' => 2103,
                'code' => '037',
                'name' => 'THPT Kỳ Sơn',
                'district_id' => 324,
                'city_id' => 29,
            ),
            103 => 
            array (
                'id' => 2104,
                'code' => '110',
                'name' => 'TTGDTX Kỳ Sơn',
                'district_id' => 324,
                'city_id' => 29,
            ),
            104 => 
            array (
                'id' => 2105,
                'code' => '039',
                'name' => 'THPT Tương Dương 1',
                'district_id' => 325,
                'city_id' => 29,
            ),
            105 => 
            array (
                'id' => 2106,
                'code' => '040',
                'name' => 'THPT Tương Dương 2',
                'district_id' => 325,
                'city_id' => 29,
            ),
            106 => 
            array (
                'id' => 2107,
                'code' => '111',
                'name' => 'TTGDTX Tương Dương',
                'district_id' => 325,
                'city_id' => 29,
            ),
            107 => 
            array (
                'id' => 2108,
                'code' => '042',
                'name' => 'THPT Con Cuông',
                'district_id' => 326,
                'city_id' => 29,
            ),
            108 => 
            array (
                'id' => 2109,
                'code' => '043',
                'name' => 'THPT Mường Quạ',
                'district_id' => 326,
                'city_id' => 29,
            ),
            109 => 
            array (
                'id' => 2110,
                'code' => '112',
                'name' => 'TTGDTX Con Cuông',
                'district_id' => 326,
                'city_id' => 29,
            ),
            110 => 
            array (
                'id' => 2111,
                'code' => '044',
                'name' => 'THPT Tân Kỳ',
                'district_id' => 327,
                'city_id' => 29,
            ),
            111 => 
            array (
                'id' => 2112,
                'code' => '045',
                'name' => 'THPT Lê Lợi',
                'district_id' => 327,
                'city_id' => 29,
            ),
            112 => 
            array (
                'id' => 2113,
                'code' => '047',
                'name' => 'THPT Tân Kỳ 3',
                'district_id' => 327,
                'city_id' => 29,
            ),
            113 => 
            array (
                'id' => 2114,
                'code' => '113',
                'name' => 'TTGDTX Tân Kỳ',
                'district_id' => 327,
                'city_id' => 29,
            ),
            114 => 
            array (
                'id' => 2115,
                'code' => '048',
                'name' => 'THPT Yên Thành 2',
                'district_id' => 328,
                'city_id' => 29,
            ),
            115 => 
            array (
                'id' => 2116,
                'code' => '049',
                'name' => 'THPT Phan Thúc Trực',
                'district_id' => 328,
                'city_id' => 29,
            ),
            116 => 
            array (
                'id' => 2117,
                'code' => '050',
                'name' => 'THPT Bắc Yên Thành',
                'district_id' => 328,
                'city_id' => 29,
            ),
            117 => 
            array (
                'id' => 2118,
                'code' => '051',
                'name' => 'THPT Lê Doãn Nhã',
                'district_id' => 328,
                'city_id' => 29,
            ),
            118 => 
            array (
                'id' => 2119,
                'code' => '052',
                'name' => 'THPT Yên Thành 3',
                'district_id' => 328,
                'city_id' => 29,
            ),
            119 => 
            array (
                'id' => 2120,
                'code' => '054',
                'name' => 'THPT Phan Đăng Lưu',
                'district_id' => 328,
                'city_id' => 29,
            ),
            120 => 
            array (
                'id' => 2121,
                'code' => '100',
                'name' => 'THPT Trần Đình Phong',
                'district_id' => 328,
                'city_id' => 29,
            ),
            121 => 
            array (
                'id' => 2122,
                'code' => '114',
                'name' => 'TTGDTX Yên Thành',
                'district_id' => 328,
                'city_id' => 29,
            ),
            122 => 
            array (
                'id' => 2123,
                'code' => '127',
                'name' => 'THPT Nam Yên Thành',
                'district_id' => 328,
                'city_id' => 29,
            ),
            123 => 
            array (
                'id' => 2124,
                'code' => '055',
                'name' => 'THPT Diễn Châu 2',
                'district_id' => 329,
                'city_id' => 29,
            ),
            124 => 
            array (
                'id' => 2125,
                'code' => '056',
                'name' => 'THPT Diễn Châu 3',
                'district_id' => 329,
                'city_id' => 29,
            ),
            125 => 
            array (
                'id' => 2126,
                'code' => '057',
                'name' => 'THPT Diễn Châu 4',
                'district_id' => 329,
                'city_id' => 29,
            ),
            126 => 
            array (
                'id' => 2127,
                'code' => '058',
                'name' => 'THPT Nguyễn Văn Tố',
                'district_id' => 329,
                'city_id' => 29,
            ),
            127 => 
            array (
                'id' => 2128,
                'code' => '059',
                'name' => 'THPT Ngô Trí Hoà',
                'district_id' => 329,
                'city_id' => 29,
            ),
            128 => 
            array (
                'id' => 2129,
                'code' => '061',
                'name' => 'THPT Nguyễn Xuân Ôn',
                'district_id' => 329,
                'city_id' => 29,
            ),
            129 => 
            array (
                'id' => 2130,
                'code' => '062',
                'name' => 'THPT Diễn Châu 5',
                'district_id' => 329,
                'city_id' => 29,
            ),
            130 => 
            array (
                'id' => 2131,
                'code' => '103',
                'name' => 'THPT Quang Trung',
                'district_id' => 329,
                'city_id' => 29,
            ),
            131 => 
            array (
                'id' => 2132,
                'code' => '115',
                'name' => 'TTGDTX Diễn Châu',
                'district_id' => 329,
                'city_id' => 29,
            ),
            132 => 
            array (
                'id' => 2133,
                'code' => '129',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 329,
                'city_id' => 29,
            ),
            133 => 
            array (
                'id' => 2134,
                'code' => '063',
                'name' => 'THPT Anh Sơn 3',
                'district_id' => 330,
                'city_id' => 29,
            ),
            134 => 
            array (
                'id' => 2135,
                'code' => '064',
                'name' => 'THPT Anh Sơn 1',
                'district_id' => 330,
                'city_id' => 29,
            ),
            135 => 
            array (
                'id' => 2136,
                'code' => '065',
                'name' => 'THPT Anh Sơn 2',
                'district_id' => 330,
                'city_id' => 29,
            ),
            136 => 
            array (
                'id' => 2137,
                'code' => '116',
                'name' => 'TTGDTX Anh Sơn',
                'district_id' => 330,
                'city_id' => 29,
            ),
            137 => 
            array (
                'id' => 2138,
                'code' => '067',
                'name' => 'THPT Đô Lương 3',
                'district_id' => 331,
                'city_id' => 29,
            ),
            138 => 
            array (
                'id' => 2139,
                'code' => '068',
                'name' => 'THPT Đô Lương 1',
                'district_id' => 331,
                'city_id' => 29,
            ),
            139 => 
            array (
                'id' => 2140,
                'code' => '069',
                'name' => 'THPT Đô Lương 2',
                'district_id' => 331,
                'city_id' => 29,
            ),
            140 => 
            array (
                'id' => 2141,
                'code' => '071',
                'name' => 'THPT Văn Tràng',
                'district_id' => 331,
                'city_id' => 29,
            ),
            141 => 
            array (
                'id' => 2142,
                'code' => '072',
                'name' => 'THPT Duy Tân',
                'district_id' => 331,
                'city_id' => 29,
            ),
            142 => 
            array (
                'id' => 2143,
                'code' => '117',
                'name' => 'TTGDTX Đô Lương',
                'district_id' => 331,
                'city_id' => 29,
            ),
            143 => 
            array (
                'id' => 2144,
                'code' => '128',
                'name' => 'THPT Đô Lương 4',
                'district_id' => 331,
                'city_id' => 29,
            ),
            144 => 
            array (
                'id' => 2145,
                'code' => '073',
                'name' => 'THPT Thanh Chương 3',
                'district_id' => 332,
                'city_id' => 29,
            ),
            145 => 
            array (
                'id' => 2146,
                'code' => '074',
                'name' => 'THPT Nguyễn Sỹ Sách',
                'district_id' => 332,
                'city_id' => 29,
            ),
            146 => 
            array (
                'id' => 2147,
                'code' => '075',
                'name' => 'THPT Đặng Thúc Hứa',
                'district_id' => 332,
                'city_id' => 29,
            ),
            147 => 
            array (
                'id' => 2148,
                'code' => '076',
                'name' => 'THPT Nguyễn Cảnh Chân',
                'district_id' => 332,
                'city_id' => 29,
            ),
            148 => 
            array (
                'id' => 2149,
                'code' => '078',
                'name' => 'THPT Thanh Chương 1',
                'district_id' => 332,
                'city_id' => 29,
            ),
            149 => 
            array (
                'id' => 2150,
                'code' => '079',
                'name' => 'THPT Đặng Thai Mai',
                'district_id' => 332,
                'city_id' => 29,
            ),
            150 => 
            array (
                'id' => 2151,
                'code' => '118',
                'name' => 'TTGDTX Thanh Chương',
                'district_id' => 332,
                'city_id' => 29,
            ),
            151 => 
            array (
                'id' => 2152,
                'code' => '123',
                'name' => 'THPT Cát Ngạn',
                'district_id' => 332,
                'city_id' => 29,
            ),
            152 => 
            array (
                'id' => 2153,
                'code' => '080',
                'name' => 'THPT Nghi Lộc 3',
                'district_id' => 333,
                'city_id' => 29,
            ),
            153 => 
            array (
                'id' => 2154,
                'code' => '081',
                'name' => 'THPT Nguyễn Duy Trinh',
                'district_id' => 333,
                'city_id' => 29,
            ),
            154 => 
            array (
                'id' => 2155,
                'code' => '082',
                'name' => 'THPT Nghi Lộc 2',
                'district_id' => 333,
                'city_id' => 29,
            ),
            155 => 
            array (
                'id' => 2156,
                'code' => '084',
                'name' => 'THPT Nguyễn Thức Tự',
                'district_id' => 333,
                'city_id' => 29,
            ),
            156 => 
            array (
                'id' => 2157,
                'code' => '085',
                'name' => 'THPT Nghi Lộc 4',
                'district_id' => 333,
                'city_id' => 29,
            ),
            157 => 
            array (
                'id' => 2158,
                'code' => '119',
                'name' => 'TTGDTX Nghi Lộc',
                'district_id' => 333,
                'city_id' => 29,
            ),
            158 => 
            array (
                'id' => 2159,
                'code' => '126',
                'name' => 'THPT Nghi Lộc 5',
                'district_id' => 333,
                'city_id' => 29,
            ),
            159 => 
            array (
                'id' => 2160,
                'code' => '087',
                'name' => 'THPT Nam Đàn 1',
                'district_id' => 334,
                'city_id' => 29,
            ),
            160 => 
            array (
                'id' => 2161,
                'code' => '088',
                'name' => 'THPT Nam Đàn 2',
                'district_id' => 334,
                'city_id' => 29,
            ),
            161 => 
            array (
                'id' => 2162,
                'code' => '089',
                'name' => 'THPT Kim Liên',
                'district_id' => 334,
                'city_id' => 29,
            ),
            162 => 
            array (
                'id' => 2163,
                'code' => '090',
                'name' => 'THPT  Sào Nam',
                'district_id' => 334,
                'city_id' => 29,
            ),
            163 => 
            array (
                'id' => 2164,
                'code' => '120',
                'name' => 'TTGDTX Nam Đàn',
                'district_id' => 334,
                'city_id' => 29,
            ),
            164 => 
            array (
                'id' => 2165,
                'code' => '124',
                'name' => 'THPT Mai Hắc Đế',
                'district_id' => 334,
                'city_id' => 29,
            ),
            165 => 
            array (
                'id' => 2166,
                'code' => '092',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 335,
                'city_id' => 29,
            ),
            166 => 
            array (
                'id' => 2167,
                'code' => '093',
                'name' => 'THPT Phạm Hồng Thái',
                'district_id' => 335,
                'city_id' => 29,
            ),
            167 => 
            array (
                'id' => 2168,
                'code' => '094',
                'name' => 'THPT Thái Lão',
                'district_id' => 335,
                'city_id' => 29,
            ),
            168 => 
            array (
                'id' => 2169,
                'code' => '095',
                'name' => 'THPT Đinh Bạt Tụy',
                'district_id' => 335,
                'city_id' => 29,
            ),
            169 => 
            array (
                'id' => 2170,
                'code' => '121',
                'name' => 'TTGDTX Hưng Nguyên',
                'district_id' => 335,
                'city_id' => 29,
            ),
            170 => 
            array (
                'id' => 2171,
                'code' => '125',
                'name' => 'THPT Nguyễn Trường Tộ-Hưng Nguyên',
                'district_id' => 335,
                'city_id' => 29,
            ),
            171 => 
            array (
                'id' => 2172,
                'code' => '097',
                'name' => 'THPT Quế Phong',
                'district_id' => 336,
                'city_id' => 29,
            ),
            172 => 
            array (
                'id' => 2173,
                'code' => '122',
                'name' => 'TTGDTX Quế Phong',
                'district_id' => 336,
                'city_id' => 29,
            ),
            173 => 
            array (
                'id' => 2174,
                'code' => '020',
                'name' => 'THPT  Sông Hiếu',
                'district_id' => 337,
                'city_id' => 29,
            ),
            174 => 
            array (
                'id' => 2175,
                'code' => '021',
                'name' => 'THPT Đông Hiếu',
                'district_id' => 337,
                'city_id' => 29,
            ),
            175 => 
            array (
                'id' => 2176,
                'code' => '023',
                'name' => 'THPT Thái Hoà',
                'district_id' => 337,
                'city_id' => 29,
            ),
            176 => 
            array (
                'id' => 2177,
                'code' => '025',
                'name' => 'THPT Tây Hiếu',
                'district_id' => 337,
                'city_id' => 29,
            ),
            177 => 
            array (
                'id' => 2178,
                'code' => '034',
                'name' => 'THPT Hoàng Mai',
                'district_id' => 338,
                'city_id' => 29,
            ),
            178 => 
            array (
                'id' => 2179,
                'code' => '000',
                'name' => 'Sở GD&ĐT Hà Tĩnh',
                'district_id' => 339,
                'city_id' => 30,
            ),
            179 => 
            array (
                'id' => 2180,
                'code' => '009',
                'name' => 'TT  BDNVSP và GDTX tỉnh Hà Tĩnh',
                'district_id' => 339,
                'city_id' => 30,
            ),
            180 => 
            array (
                'id' => 2181,
                'code' => '010',
                'name' => 'THPT Phan Đình Phùng',
                'district_id' => 339,
                'city_id' => 30,
            ),
            181 => 
            array (
                'id' => 2182,
                'code' => '011',
                'name' => 'THPT ISCHOOL Hà Tĩnh',
                'district_id' => 339,
                'city_id' => 30,
            ),
            182 => 
            array (
                'id' => 2183,
                'code' => '040',
                'name' => 'THPT Chuyên Hà Tĩnh',
                'district_id' => 339,
                'city_id' => 30,
            ),
            183 => 
            array (
                'id' => 2184,
                'code' => '052',
                'name' => 'TT DN- HN và GDTX TP Hà Tĩnh',
                'district_id' => 339,
                'city_id' => 30,
            ),
            184 => 
            array (
                'id' => 2185,
                'code' => '058',
                'name' => 'THPT Thành Sen',
                'district_id' => 339,
                'city_id' => 30,
            ),
            185 => 
            array (
                'id' => 2186,
                'code' => '059',
                'name' => 'Cao đẳng Nghề công nghệ Hà Tĩnh',
                'district_id' => 339,
                'city_id' => 30,
            ),
            186 => 
            array (
                'id' => 2187,
                'code' => '060',
                'name' => 'Trung cấp Nghề  Hà Tĩnh',
                'district_id' => 339,
                'city_id' => 30,
            ),
            187 => 
            array (
                'id' => 2188,
                'code' => '061',
                'name' => 'Cao đẳng nghề Việt Đức Hà Tĩnh',
                'district_id' => 339,
                'city_id' => 30,
            ),
            188 => 
            array (
                'id' => 2189,
                'code' => '035',
                'name' => 'TT DN-HN và GDTX Hồng Lĩnh',
                'district_id' => 340,
                'city_id' => 30,
            ),
            189 => 
            array (
                'id' => 2190,
                'code' => '036',
                'name' => 'THPT Hồng Lĩnh',
                'district_id' => 340,
                'city_id' => 30,
            ),
            190 => 
            array (
                'id' => 2191,
                'code' => '051',
                'name' => 'THPT Hồng Lam',
                'district_id' => 340,
                'city_id' => 30,
            ),
            191 => 
            array (
                'id' => 2192,
                'code' => '057',
                'name' => 'Trung cấp Kỹ nghệ Hà Tĩnh',
                'district_id' => 340,
                'city_id' => 30,
            ),
            192 => 
            array (
                'id' => 2193,
                'code' => '024',
                'name' => 'TT DN-HN và GDTX Hương Sơn',
                'district_id' => 341,
                'city_id' => 30,
            ),
            193 => 
            array (
                'id' => 2194,
                'code' => '025',
                'name' => 'THPTDL Nguyễn Khắc Viện',
                'district_id' => 341,
                'city_id' => 30,
            ),
            194 => 
            array (
                'id' => 2195,
                'code' => '026',
                'name' => 'THPT Hương Sơn',
                'district_id' => 341,
                'city_id' => 30,
            ),
            195 => 
            array (
                'id' => 2196,
                'code' => '027',
                'name' => 'THPT Lê Hữu Trác',
                'district_id' => 341,
                'city_id' => 30,
            ),
            196 => 
            array (
                'id' => 2197,
                'code' => '028',
                'name' => 'THPT Lý Chính Thắng',
                'district_id' => 341,
                'city_id' => 30,
            ),
            197 => 
            array (
                'id' => 2198,
                'code' => '029',
                'name' => 'THPT Cao Thắng',
                'district_id' => 341,
                'city_id' => 30,
            ),
            198 => 
            array (
                'id' => 2199,
                'code' => '030',
                'name' => 'TT DN-HN và GDTX Đức Thọ',
                'district_id' => 342,
                'city_id' => 30,
            ),
            199 => 
            array (
                'id' => 2200,
                'code' => '031',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 342,
                'city_id' => 30,
            ),
            200 => 
            array (
                'id' => 2201,
                'code' => '032',
                'name' => 'THPT Nguyễn Thị Minh Khai',
                'district_id' => 342,
                'city_id' => 30,
            ),
            201 => 
            array (
                'id' => 2202,
                'code' => '033',
                'name' => 'THPT Trần Phú',
                'district_id' => 342,
                'city_id' => 30,
            ),
            202 => 
            array (
                'id' => 2203,
                'code' => '034',
                'name' => 'THPT Đức Thọ',
                'district_id' => 342,
                'city_id' => 30,
            ),
            203 => 
            array (
                'id' => 2204,
                'code' => '037',
                'name' => 'TT DN-HN và GDTX Nghi Xuân',
                'district_id' => 343,
                'city_id' => 30,
            ),
            204 => 
            array (
                'id' => 2205,
                'code' => '038',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 343,
                'city_id' => 30,
            ),
            205 => 
            array (
                'id' => 2206,
                'code' => '039',
                'name' => 'THPT Nguyễn Công Trứ',
                'district_id' => 343,
                'city_id' => 30,
            ),
            206 => 
            array (
                'id' => 2207,
                'code' => '050',
                'name' => 'THPT Nghi Xuân',
                'district_id' => 343,
                'city_id' => 30,
            ),
            207 => 
            array (
                'id' => 2208,
                'code' => '015',
                'name' => 'TT  DN-HN và GDTX Can Lộc',
                'district_id' => 344,
                'city_id' => 30,
            ),
            208 => 
            array (
                'id' => 2209,
                'code' => '016',
                'name' => 'THPT Can Lộc',
                'district_id' => 344,
                'city_id' => 30,
            ),
            209 => 
            array (
                'id' => 2210,
                'code' => '017',
                'name' => 'THPT Đồng Lộc',
                'district_id' => 344,
                'city_id' => 30,
            ),
            210 => 
            array (
                'id' => 2211,
                'code' => '018',
                'name' => 'THPT Nghèn',
                'district_id' => 344,
                'city_id' => 30,
            ),
            211 => 
            array (
                'id' => 2212,
                'code' => '042',
                'name' => 'THPT DL Can Lộc',
                'district_id' => 344,
                'city_id' => 30,
            ),
            212 => 
            array (
                'id' => 2213,
                'code' => '020',
                'name' => 'TT DN-HN và GDTX Hương Khê',
                'district_id' => 345,
                'city_id' => 30,
            ),
            213 => 
            array (
                'id' => 2214,
                'code' => '021',
                'name' => 'THPT Hương Khê',
                'district_id' => 345,
                'city_id' => 30,
            ),
            214 => 
            array (
                'id' => 2215,
                'code' => '022',
                'name' => 'THPT Hàm Nghi',
                'district_id' => 345,
                'city_id' => 30,
            ),
            215 => 
            array (
                'id' => 2216,
                'code' => '023',
                'name' => 'THPT Phúc Trạch',
                'district_id' => 345,
                'city_id' => 30,
            ),
            216 => 
            array (
                'id' => 2217,
                'code' => '055',
                'name' => 'THPT Gia Phố',
                'district_id' => 345,
                'city_id' => 30,
            ),
            217 => 
            array (
                'id' => 2218,
                'code' => '012',
                'name' => 'Trung tâm DN-HN và GDTX Thạch Hà',
                'district_id' => 346,
                'city_id' => 30,
            ),
            218 => 
            array (
                'id' => 2219,
                'code' => '013',
                'name' => 'THPT Lý Tự Trọng',
                'district_id' => 346,
                'city_id' => 30,
            ),
            219 => 
            array (
                'id' => 2220,
                'code' => '014',
                'name' => 'THPT Nguyễn Trung Thiên',
                'district_id' => 346,
                'city_id' => 30,
            ),
            220 => 
            array (
                'id' => 2221,
                'code' => '041',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 346,
                'city_id' => 30,
            ),
            221 => 
            array (
                'id' => 2222,
                'code' => '049',
                'name' => 'THPT Mai Kính',
                'district_id' => 346,
                'city_id' => 30,
            ),
            222 => 
            array (
                'id' => 2223,
                'code' => '005',
                'name' => 'TT DN-HN và GDTX Cẩm Xuyên',
                'district_id' => 347,
                'city_id' => 30,
            ),
            223 => 
            array (
                'id' => 2224,
                'code' => '006',
                'name' => 'THPT Cẩm Xuyên',
                'district_id' => 347,
                'city_id' => 30,
            ),
            224 => 
            array (
                'id' => 2225,
                'code' => '007',
                'name' => 'THPT Cẩm Bình',
                'district_id' => 347,
                'city_id' => 30,
            ),
            225 => 
            array (
                'id' => 2226,
                'code' => '008',
                'name' => 'THPT Hà Huy Tập',
                'district_id' => 347,
                'city_id' => 30,
            ),
            226 => 
            array (
                'id' => 2227,
                'code' => '043',
                'name' => 'THPT Phan Đình Giót',
                'district_id' => 347,
                'city_id' => 30,
            ),
            227 => 
            array (
                'id' => 2228,
                'code' => '053',
                'name' => 'THPT Nguyễn Đình Liễn',
                'district_id' => 347,
                'city_id' => 30,
            ),
            228 => 
            array (
                'id' => 2229,
                'code' => '001',
                'name' => 'TT  DN-HN và GDTX Kỳ Anh',
                'district_id' => 348,
                'city_id' => 30,
            ),
            229 => 
            array (
                'id' => 2230,
                'code' => '002',
                'name' => 'THPT Kỳ Anh',
                'district_id' => 348,
                'city_id' => 30,
            ),
            230 => 
            array (
                'id' => 2231,
                'code' => '003',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 348,
                'city_id' => 30,
            ),
            231 => 
            array (
                'id' => 2232,
                'code' => '004',
                'name' => 'THPT Kỳ Lâm',
                'district_id' => 348,
                'city_id' => 30,
            ),
            232 => 
            array (
                'id' => 2233,
                'code' => '044',
                'name' => 'THPT Nguyễn Thị Bích Châu',
                'district_id' => 348,
                'city_id' => 30,
            ),
            233 => 
            array (
                'id' => 2234,
                'code' => '054',
                'name' => 'THPT Lê Quảng Chí',
                'district_id' => 348,
                'city_id' => 30,
            ),
            234 => 
            array (
                'id' => 2235,
                'code' => '046',
                'name' => 'THPT Vũ Quang',
                'district_id' => 349,
                'city_id' => 30,
            ),
            235 => 
            array (
                'id' => 2236,
                'code' => '047',
                'name' => 'TT DN-HN và GDTX Vũ Quang',
                'district_id' => 349,
                'city_id' => 30,
            ),
            236 => 
            array (
                'id' => 2237,
                'code' => '056',
                'name' => 'THPT Cù Huy Cận',
                'district_id' => 349,
                'city_id' => 30,
            ),
            237 => 
            array (
                'id' => 2238,
                'code' => '019',
                'name' => 'THPT Nguyễn Văn Trỗi',
                'district_id' => 350,
                'city_id' => 30,
            ),
            238 => 
            array (
                'id' => 2239,
                'code' => '045',
                'name' => 'THPT  Mai Thúc Loan',
                'district_id' => 350,
                'city_id' => 30,
            ),
            239 => 
            array (
                'id' => 2240,
                'code' => '048',
                'name' => 'THPT Nguyễn Đổng Chi',
                'district_id' => 350,
                'city_id' => 30,
            ),
            240 => 
            array (
                'id' => 2241,
                'code' => '062',
                'name' => 'TT DN-HN và GDTX Lộc Hà',
                'district_id' => 350,
                'city_id' => 30,
            ),
            241 => 
            array (
                'id' => 2242,
                'code' => '002',
                'name' => 'THPT Đào Duy Từ, Đồng Hới',
                'district_id' => 351,
                'city_id' => 31,
            ),
            242 => 
            array (
                'id' => 2243,
                'code' => '003',
                'name' => 'THPT Đồng Hới',
                'district_id' => 351,
                'city_id' => 31,
            ),
            243 => 
            array (
                'id' => 2244,
                'code' => '004',
                'name' => 'THPT Chuyên Võ Nguyên Giáp',
                'district_id' => 351,
                'city_id' => 31,
            ),
            244 => 
            array (
                'id' => 2245,
                'code' => '005',
                'name' => 'THPT Phan Đình Phùng',
                'district_id' => 351,
                'city_id' => 31,
            ),
            245 => 
            array (
                'id' => 2246,
                'code' => '006',
                'name' => 'Trường phổ thông dân tộc nội trú tỉnh',
                'district_id' => 351,
                'city_id' => 31,
            ),
            246 => 
            array (
                'id' => 2247,
                'code' => '007',
                'name' => 'TT GD-DN Đồng Hới',
                'district_id' => 351,
                'city_id' => 31,
            ),
            247 => 
            array (
                'id' => 2248,
                'code' => '049',
                'name' => 'TC  nghề  Quảng Bình',
                'district_id' => 351,
                'city_id' => 31,
            ),
            248 => 
            array (
                'id' => 2249,
                'code' => '050',
                'name' => 'TC  nghề số  9',
                'district_id' => 351,
                'city_id' => 31,
            ),
            249 => 
            array (
                'id' => 2250,
                'code' => '009',
                'name' => 'THPT Tuyên Hoá',
                'district_id' => 352,
                'city_id' => 31,
            ),
            250 => 
            array (
                'id' => 2251,
                'code' => '010',
                'name' => 'THPT Lê Trực - Tuyên Hoá',
                'district_id' => 352,
                'city_id' => 31,
            ),
            251 => 
            array (
                'id' => 2252,
                'code' => '011',
                'name' => 'THPT Phan Bội Châu -Tuyên Hoá',
                'district_id' => 352,
                'city_id' => 31,
            ),
            252 => 
            array (
                'id' => 2253,
                'code' => '012',
                'name' => 'Trường THCS và THPT Bắc Sơn',
                'district_id' => 352,
                'city_id' => 31,
            ),
            253 => 
            array (
                'id' => 2254,
                'code' => '013',
                'name' => 'TT GD-DN Tuyên Hoá',
                'district_id' => 352,
                'city_id' => 31,
            ),
            254 => 
            array (
                'id' => 2255,
                'code' => '015',
                'name' => 'THPT Minh Hoá',
                'district_id' => 353,
                'city_id' => 31,
            ),
            255 => 
            array (
                'id' => 2256,
                'code' => '016',
                'name' => 'Trường THCS và THPT Hoá Tiến',
                'district_id' => 353,
                'city_id' => 31,
            ),
            256 => 
            array (
                'id' => 2257,
                'code' => '017',
                'name' => 'TT GD-DN Minh Hoá',
                'district_id' => 353,
                'city_id' => 31,
            ),
            257 => 
            array (
                'id' => 2258,
                'code' => '046',
                'name' => 'Trường THCS và THPT Trung Hoá',
                'district_id' => 353,
                'city_id' => 31,
            ),
            258 => 
            array (
                'id' => 2259,
                'code' => '021',
                'name' => 'THPT Quang Trung',
                'district_id' => 354,
                'city_id' => 31,
            ),
            259 => 
            array (
                'id' => 2260,
                'code' => '023',
                'name' => 'TT GD-DN Quảng Trạch',
                'district_id' => 354,
                'city_id' => 31,
            ),
            260 => 
            array (
                'id' => 2261,
                'code' => '025',
                'name' => 'THPT số 1 Bố Trạch',
                'district_id' => 355,
                'city_id' => 31,
            ),
            261 => 
            array (
                'id' => 2262,
                'code' => '026',
                'name' => 'THPT số 2 Bố Trạch',
                'district_id' => 355,
                'city_id' => 31,
            ),
            262 => 
            array (
                'id' => 2263,
                'code' => '027',
                'name' => 'THPT số 3 Bố Trạch',
                'district_id' => 355,
                'city_id' => 31,
            ),
            263 => 
            array (
                'id' => 2264,
                'code' => '028',
                'name' => 'THPT số 5 Bố Trạch',
                'district_id' => 355,
                'city_id' => 31,
            ),
            264 => 
            array (
                'id' => 2265,
                'code' => '029',
                'name' => 'Trường THCS và THPT Việt Trung',
                'district_id' => 355,
                'city_id' => 31,
            ),
            265 => 
            array (
                'id' => 2266,
                'code' => '030',
                'name' => 'THPT số 4 Bố trạch',
                'district_id' => 355,
                'city_id' => 31,
            ),
            266 => 
            array (
                'id' => 2267,
                'code' => '031',
                'name' => 'TT GD-DN Bố Trạch',
                'district_id' => 355,
                'city_id' => 31,
            ),
            267 => 
            array (
                'id' => 2268,
                'code' => '033',
                'name' => 'THPT Quảng Ninh',
                'district_id' => 356,
                'city_id' => 31,
            ),
            268 => 
            array (
                'id' => 2269,
                'code' => '034',
                'name' => 'THPT Ninh Châu - Quảng Ninh',
                'district_id' => 356,
                'city_id' => 31,
            ),
            269 => 
            array (
                'id' => 2270,
                'code' => '035',
                'name' => 'TT GD-DN Quảng Ninh',
                'district_id' => 356,
                'city_id' => 31,
            ),
            270 => 
            array (
                'id' => 2271,
                'code' => '036',
                'name' => 'THPT Nguyễn Hữu Cảnh',
                'district_id' => 356,
                'city_id' => 31,
            ),
            271 => 
            array (
                'id' => 2272,
                'code' => '038',
                'name' => 'THPT Lệ Thuỷ',
                'district_id' => 357,
                'city_id' => 31,
            ),
            272 => 
            array (
                'id' => 2273,
                'code' => '039',
                'name' => 'THPT Hoàng Hoa Thám - Lệ Thuỷ',
                'district_id' => 357,
                'city_id' => 31,
            ),
            273 => 
            array (
                'id' => 2274,
                'code' => '040',
                'name' => 'THPT Trần Hưng Đạo - Lệ Thuỷ',
                'district_id' => 357,
                'city_id' => 31,
            ),
            274 => 
            array (
                'id' => 2275,
                'code' => '041',
                'name' => 'THPT  Nguyễn  Chí Thanh',
                'district_id' => 357,
                'city_id' => 31,
            ),
            275 => 
            array (
                'id' => 2276,
                'code' => '042',
                'name' => 'TT GD-DN Lệ Thuỷ',
                'district_id' => 357,
                'city_id' => 31,
            ),
            276 => 
            array (
                'id' => 2277,
                'code' => '043',
                'name' => 'THPT KT Lệ Thuỷ',
                'district_id' => 357,
                'city_id' => 31,
            ),
            277 => 
            array (
                'id' => 2278,
                'code' => '045',
                'name' => 'Trường THCS và THPT Dương Văn An',
                'district_id' => 357,
                'city_id' => 31,
            ),
            278 => 
            array (
                'id' => 2279,
                'code' => '019',
                'name' => 'THPT Lương Thế Vinh',
                'district_id' => 358,
                'city_id' => 31,
            ),
            279 => 
            array (
                'id' => 2280,
                'code' => '020',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 358,
                'city_id' => 31,
            ),
            280 => 
            array (
                'id' => 2281,
                'code' => '022',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 358,
                'city_id' => 31,
            ),
            281 => 
            array (
                'id' => 2282,
                'code' => '044',
                'name' => 'THPT Lê Lợi',
                'district_id' => 358,
                'city_id' => 31,
            ),
            282 => 
            array (
                'id' => 2283,
                'code' => '051',
                'name' => 'TT GD-DN Ba Đồn',
                'district_id' => 358,
                'city_id' => 31,
            ),
            283 => 
            array (
                'id' => 2284,
                'code' => '000',
                'name' => 'Sở GD&ĐT Quảng Trị',
                'district_id' => 359,
                'city_id' => 32,
            ),
            284 => 
            array (
                'id' => 2285,
                'code' => '024',
                'name' => 'THPT Chuyên Lê Quý Đôn',
                'district_id' => 359,
                'city_id' => 32,
            ),
            285 => 
            array (
                'id' => 2286,
                'code' => '025',
                'name' => 'THPT  Đông Hà',
                'district_id' => 359,
                'city_id' => 32,
            ),
            286 => 
            array (
                'id' => 2287,
                'code' => '026',
                'name' => 'THPT Lê Lợi Đông Hà',
                'district_id' => 359,
                'city_id' => 32,
            ),
            287 => 
            array (
                'id' => 2288,
                'code' => '027',
                'name' => 'THPT Phan Châu Trinh',
                'district_id' => 359,
                'city_id' => 32,
            ),
            288 => 
            array (
                'id' => 2289,
                'code' => '028',
                'name' => 'Trung tâm KTTH-HN tỉnh',
                'district_id' => 359,
                'city_id' => 32,
            ),
            289 => 
            array (
                'id' => 2290,
                'code' => '051',
                'name' => 'Trung tâm GDTX Đông Hà',
                'district_id' => 359,
                'city_id' => 32,
            ),
            290 => 
            array (
                'id' => 2291,
                'code' => '063',
                'name' => 'TC nghề Quảng Trị',
                'district_id' => 359,
                'city_id' => 32,
            ),
            291 => 
            array (
                'id' => 2292,
                'code' => '066',
                'name' => 'TH, THCS và THPT Trưng Vương',
                'district_id' => 359,
                'city_id' => 32,
            ),
            292 => 
            array (
                'id' => 2293,
                'code' => '901',
                'name' => 'Phòng GD&ĐT TP Đông Hà',
                'district_id' => 359,
                'city_id' => 32,
            ),
            293 => 
            array (
                'id' => 2294,
                'code' => '016',
                'name' => 'THPT TX Quảng Trị',
                'district_id' => 360,
                'city_id' => 32,
            ),
            294 => 
            array (
                'id' => 2295,
                'code' => '017',
                'name' => 'Phổ thông DTNT tỉnh',
                'district_id' => 360,
                'city_id' => 32,
            ),
            295 => 
            array (
                'id' => 2296,
                'code' => '018',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 360,
                'city_id' => 32,
            ),
            296 => 
            array (
                'id' => 2297,
                'code' => '053',
                'name' => 'Trung tâm GDTX TX Quảng trị',
                'district_id' => 360,
                'city_id' => 32,
            ),
            297 => 
            array (
                'id' => 2298,
                'code' => '057',
                'name' => 'Trung tâm KTTH-HN TX Quảng trị',
                'district_id' => 360,
                'city_id' => 32,
            ),
            298 => 
            array (
                'id' => 2299,
                'code' => '902',
                'name' => 'Phòng GD&ĐT TX Quảng Trị',
                'district_id' => 360,
                'city_id' => 32,
            ),
            299 => 
            array (
                'id' => 2300,
                'code' => '043',
                'name' => 'THPT Vĩnh Linh',
                'district_id' => 361,
                'city_id' => 32,
            ),
            300 => 
            array (
                'id' => 2301,
                'code' => '044',
                'name' => 'THPT Cửa Tùng',
                'district_id' => 361,
                'city_id' => 32,
            ),
            301 => 
            array (
                'id' => 2302,
                'code' => '045',
                'name' => 'THPT Nguyễn Công Trứ',
                'district_id' => 361,
                'city_id' => 32,
            ),
            302 => 
            array (
                'id' => 2303,
                'code' => '046',
                'name' => 'THPT Bến Quan',
                'district_id' => 361,
                'city_id' => 32,
            ),
            303 => 
            array (
                'id' => 2304,
                'code' => '056',
                'name' => 'Trung tâm GDTX Vĩnh Linh',
                'district_id' => 361,
                'city_id' => 32,
            ),
            304 => 
            array (
                'id' => 2305,
                'code' => '058',
                'name' => 'Trung tâm KTTH-HN Vĩnh Linh',
                'district_id' => 361,
                'city_id' => 32,
            ),
            305 => 
            array (
                'id' => 2306,
                'code' => '903',
                'name' => 'Phòng GD&ĐT Vĩnh Linh',
                'district_id' => 361,
                'city_id' => 32,
            ),
            306 => 
            array (
                'id' => 2307,
                'code' => '039',
                'name' => 'THPT Cồn Tiên',
                'district_id' => 362,
                'city_id' => 32,
            ),
            307 => 
            array (
                'id' => 2308,
                'code' => '040',
                'name' => 'THPT Gio Linh',
                'district_id' => 362,
                'city_id' => 32,
            ),
            308 => 
            array (
                'id' => 2309,
                'code' => '041',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 362,
                'city_id' => 32,
            ),
            309 => 
            array (
                'id' => 2310,
                'code' => '055',
                'name' => 'Trung tâm GDTX Gio Linh',
                'district_id' => 362,
                'city_id' => 32,
            ),
            310 => 
            array (
                'id' => 2311,
                'code' => '904',
                'name' => 'Phòng GD&ĐT Gio Linh',
                'district_id' => 362,
                'city_id' => 32,
            ),
            311 => 
            array (
                'id' => 2312,
                'code' => '030',
                'name' => 'THPT Tân Lâm',
                'district_id' => 363,
                'city_id' => 32,
            ),
            312 => 
            array (
                'id' => 2313,
                'code' => '031',
                'name' => 'THPT Cam Lộ',
                'district_id' => 363,
                'city_id' => 32,
            ),
            313 => 
            array (
                'id' => 2314,
                'code' => '032',
                'name' => 'THPT Lê Thế Hiếu',
                'district_id' => 363,
                'city_id' => 32,
            ),
            314 => 
            array (
                'id' => 2315,
                'code' => '050',
                'name' => 'Trung tâm GDTX Cam Lộ',
                'district_id' => 363,
                'city_id' => 32,
            ),
            315 => 
            array (
                'id' => 2316,
                'code' => '064',
                'name' => 'THPT Chế Lan Viên',
                'district_id' => 363,
                'city_id' => 32,
            ),
            316 => 
            array (
                'id' => 2317,
                'code' => '905',
                'name' => 'Phòng GD&ĐT Cam Lộ',
                'district_id' => 363,
                'city_id' => 32,
            ),
            317 => 
            array (
                'id' => 2318,
                'code' => '020',
                'name' => 'THPT Triệu Phong',
                'district_id' => 364,
                'city_id' => 32,
            ),
            318 => 
            array (
                'id' => 2319,
                'code' => '021',
                'name' => 'THPT Chu Văn An',
                'district_id' => 364,
                'city_id' => 32,
            ),
            319 => 
            array (
                'id' => 2320,
                'code' => '022',
                'name' => 'THPT Vĩnh Định',
                'district_id' => 364,
                'city_id' => 32,
            ),
            320 => 
            array (
                'id' => 2321,
                'code' => '054',
                'name' => 'Trung tâm GDTX Triệu Phong',
                'district_id' => 364,
                'city_id' => 32,
            ),
            321 => 
            array (
                'id' => 2322,
                'code' => '062',
                'name' => 'THPT Nguyễn Hữu Thận',
                'district_id' => 364,
                'city_id' => 32,
            ),
            322 => 
            array (
                'id' => 2323,
                'code' => '906',
                'name' => 'Phòng GD&ĐT Triệu Phong',
                'district_id' => 364,
                'city_id' => 32,
            ),
            323 => 
            array (
                'id' => 2324,
                'code' => '011',
                'name' => 'THPT Bùi Dục Tài',
                'district_id' => 365,
                'city_id' => 32,
            ),
            324 => 
            array (
                'id' => 2325,
                'code' => '012',
                'name' => 'THPT Hải Lăng',
                'district_id' => 365,
                'city_id' => 32,
            ),
            325 => 
            array (
                'id' => 2326,
                'code' => '013',
                'name' => 'THPT Trần Thị Tâm',
                'district_id' => 365,
                'city_id' => 32,
            ),
            326 => 
            array (
                'id' => 2327,
                'code' => '014',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 365,
                'city_id' => 32,
            ),
            327 => 
            array (
                'id' => 2328,
                'code' => '052',
                'name' => 'Trung tâm GDTX Hải Lăng',
                'district_id' => 365,
                'city_id' => 32,
            ),
            328 => 
            array (
                'id' => 2329,
                'code' => '907',
                'name' => 'Phòng GD&ĐT Hải Lăng',
                'district_id' => 365,
                'city_id' => 32,
            ),
            329 => 
            array (
                'id' => 2330,
                'code' => '034',
                'name' => 'THPT Hướng Hoá',
                'district_id' => 366,
                'city_id' => 32,
            ),
            330 => 
            array (
                'id' => 2331,
                'code' => '035',
                'name' => 'THPT Lao Bảo',
                'district_id' => 366,
                'city_id' => 32,
            ),
            331 => 
            array (
                'id' => 2332,
                'code' => '048',
                'name' => 'Trung tâm GDTX Hướng Hoá',
                'district_id' => 366,
                'city_id' => 32,
            ),
            332 => 
            array (
                'id' => 2333,
                'code' => '059',
                'name' => 'THPT Hướng Phùng',
                'district_id' => 366,
                'city_id' => 32,
            ),
            333 => 
            array (
                'id' => 2334,
                'code' => '061',
                'name' => 'THPT A Túc',
                'district_id' => 366,
                'city_id' => 32,
            ),
            334 => 
            array (
                'id' => 2335,
                'code' => '908',
                'name' => 'Phòng GD&ĐT Hướng Hóa',
                'district_id' => 366,
                'city_id' => 32,
            ),
            335 => 
            array (
                'id' => 2336,
                'code' => '037',
                'name' => 'THPT Đakrông',
                'district_id' => 367,
                'city_id' => 32,
            ),
            336 => 
            array (
                'id' => 2337,
                'code' => '049',
                'name' => 'Trung tâm GDTX Đakrông',
                'district_id' => 367,
                'city_id' => 32,
            ),
            337 => 
            array (
                'id' => 2338,
                'code' => '060',
                'name' => 'THPT Số 2 Đakrông',
                'district_id' => 367,
                'city_id' => 32,
            ),
            338 => 
            array (
                'id' => 2339,
                'code' => '909',
                'name' => 'Phòng GD&ĐT Đakrông',
                'district_id' => 367,
                'city_id' => 32,
            ),
            339 => 
            array (
                'id' => 2340,
                'code' => '065',
                'name' => 'Huyện đảo Cồn Cỏ',
                'district_id' => 368,
                'city_id' => 32,
            ),
            340 => 
            array (
                'id' => 2341,
                'code' => '000',
                'name' => 'Sở Giáo dục và Đào tạo Thừa Thiên Huế',
                'district_id' => 369,
                'city_id' => 33,
            ),
            341 => 
            array (
                'id' => 2342,
                'code' => '001',
                'name' => 'THPT  Chuyên Quốc Học',
                'district_id' => 369,
                'city_id' => 33,
            ),
            342 => 
            array (
                'id' => 2343,
                'code' => '002',
                'name' => 'THPT Hai Bà Trưng',
                'district_id' => 369,
                'city_id' => 33,
            ),
            343 => 
            array (
                'id' => 2344,
                'code' => '003',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 369,
                'city_id' => 33,
            ),
            344 => 
            array (
                'id' => 2345,
                'code' => '004',
                'name' => 'THPT Gia Hội',
                'district_id' => 369,
                'city_id' => 33,
            ),
            345 => 
            array (
                'id' => 2346,
                'code' => '005',
                'name' => 'THPT Bùi Thị Xuân',
                'district_id' => 369,
                'city_id' => 33,
            ),
            346 => 
            array (
                'id' => 2347,
                'code' => '007',
                'name' => 'THPT Nguyễn Trường Tộ',
                'district_id' => 369,
                'city_id' => 33,
            ),
            347 => 
            array (
                'id' => 2348,
                'code' => '009',
                'name' => 'TT GDTX TP Huế',
                'district_id' => 369,
                'city_id' => 33,
            ),
            348 => 
            array (
                'id' => 2349,
                'code' => '010',
                'name' => 'Khối chuyên ĐHKH Huế',
                'district_id' => 369,
                'city_id' => 33,
            ),
            349 => 
            array (
                'id' => 2350,
                'code' => '025',
                'name' => 'THPT Dân tộc Nội trú Tỉnh',
                'district_id' => 369,
                'city_id' => 33,
            ),
            350 => 
            array (
                'id' => 2351,
                'code' => '028',
                'name' => 'Phòng GDCN Sở GD-ĐT TT-Huế',
                'district_id' => 369,
                'city_id' => 33,
            ),
            351 => 
            array (
                'id' => 2352,
                'code' => '029',
                'name' => 'THPT  Đặng Trần Côn',
                'district_id' => 369,
                'city_id' => 33,
            ),
            352 => 
            array (
                'id' => 2353,
                'code' => '032',
                'name' => 'TC Phật Học Huế',
                'district_id' => 369,
                'city_id' => 33,
            ),
            353 => 
            array (
                'id' => 2354,
                'code' => '033',
                'name' => 'Học viện Âm nhạc Huế',
                'district_id' => 369,
                'city_id' => 33,
            ),
            354 => 
            array (
                'id' => 2355,
                'code' => '034',
                'name' => 'CĐ Công nghiệp Huế',
                'district_id' => 369,
                'city_id' => 33,
            ),
            355 => 
            array (
                'id' => 2356,
                'code' => '036',
                'name' => 'THPT Chi Lăng',
                'district_id' => 369,
                'city_id' => 33,
            ),
            356 => 
            array (
                'id' => 2357,
                'code' => '038',
                'name' => 'THPT DL Trần Hưng Đạo',
                'district_id' => 369,
                'city_id' => 33,
            ),
            357 => 
            array (
                'id' => 2358,
                'code' => '042',
                'name' => 'THPT Cao Thắng',
                'district_id' => 369,
                'city_id' => 33,
            ),
            358 => 
            array (
                'id' => 2359,
                'code' => '048',
                'name' => 'TH VHNT, Thừa Thiên Huế',
                'district_id' => 369,
                'city_id' => 33,
            ),
            359 => 
            array (
                'id' => 2360,
                'code' => '052',
                'name' => 'CĐ Nghề Du lịch Huế',
                'district_id' => 369,
                'city_id' => 33,
            ),
            360 => 
            array (
                'id' => 2361,
                'code' => '054',
                'name' => 'TC Nghề số 10',
                'district_id' => 369,
                'city_id' => 33,
            ),
            361 => 
            array (
                'id' => 2362,
                'code' => '056',
                'name' => 'CĐ Nghề số 23 Bộ Quốc phòng',
                'district_id' => 369,
                'city_id' => 33,
            ),
            362 => 
            array (
                'id' => 2363,
                'code' => '058',
                'name' => 'TC Nghề Huế',
                'district_id' => 369,
                'city_id' => 33,
            ),
            363 => 
            array (
                'id' => 2364,
                'code' => '011',
                'name' => 'THPT Phong Điền',
                'district_id' => 370,
                'city_id' => 33,
            ),
            364 => 
            array (
                'id' => 2365,
                'code' => '012',
                'name' => 'THPT Tam Giang',
                'district_id' => 370,
                'city_id' => 33,
            ),
            365 => 
            array (
                'id' => 2366,
                'code' => '013',
                'name' => 'THPT Nguyễn Đình Chiểu',
                'district_id' => 370,
                'city_id' => 33,
            ),
            366 => 
            array (
                'id' => 2367,
                'code' => '037',
                'name' => 'THPT Trần Văn Kỷ',
                'district_id' => 370,
                'city_id' => 33,
            ),
            367 => 
            array (
                'id' => 2368,
                'code' => '053',
                'name' => 'CĐ Nghề Nguyễn Tri Phương',
                'district_id' => 370,
                'city_id' => 33,
            ),
            368 => 
            array (
                'id' => 2369,
                'code' => '059',
                'name' => 'TTGDTX Phong Điền',
                'district_id' => 370,
                'city_id' => 33,
            ),
            369 => 
            array (
                'id' => 2370,
                'code' => '008',
                'name' => 'THPT Hoá Châu',
                'district_id' => 371,
                'city_id' => 33,
            ),
            370 => 
            array (
                'id' => 2371,
                'code' => '014',
                'name' => 'THPT Nguyễn Chí Thanh',
                'district_id' => 371,
                'city_id' => 33,
            ),
            371 => 
            array (
                'id' => 2372,
                'code' => '044',
                'name' => 'THPT Tố Hữu',
                'district_id' => 371,
                'city_id' => 33,
            ),
            372 => 
            array (
                'id' => 2373,
                'code' => '049',
                'name' => 'TTGDTX Quảng Điền',
                'district_id' => 371,
                'city_id' => 33,
            ),
            373 => 
            array (
                'id' => 2374,
                'code' => '057',
                'name' => 'TC Nghề Quảng Điền',
                'district_id' => 371,
                'city_id' => 33,
            ),
            374 => 
            array (
                'id' => 2375,
                'code' => '015',
                'name' => 'THPT Đặng Huy Trứ',
                'district_id' => 372,
                'city_id' => 33,
            ),
            375 => 
            array (
                'id' => 2376,
                'code' => '027',
                'name' => 'THPT Hương Vinh',
                'district_id' => 372,
                'city_id' => 33,
            ),
            376 => 
            array (
                'id' => 2377,
                'code' => '030',
                'name' => 'THPT Bình Điền',
                'district_id' => 372,
                'city_id' => 33,
            ),
            377 => 
            array (
                'id' => 2378,
                'code' => '041',
                'name' => 'THPT Hương Trà',
                'district_id' => 372,
                'city_id' => 33,
            ),
            378 => 
            array (
                'id' => 2379,
                'code' => '060',
                'name' => 'TTGDTX Hương Trà',
                'district_id' => 372,
                'city_id' => 33,
            ),
            379 => 
            array (
                'id' => 2380,
                'code' => '006',
                'name' => 'Phổ thông  Huế Star',
                'district_id' => 373,
                'city_id' => 33,
            ),
            380 => 
            array (
                'id' => 2381,
                'code' => '016',
                'name' => 'THPT Phan Đăng Lưu',
                'district_id' => 373,
                'city_id' => 33,
            ),
            381 => 
            array (
                'id' => 2382,
                'code' => '017',
                'name' => 'THPT Nguyễn Sinh Cung',
                'district_id' => 373,
                'city_id' => 33,
            ),
            382 => 
            array (
                'id' => 2383,
                'code' => '031',
                'name' => 'THPT Vinh Xuân',
                'district_id' => 373,
                'city_id' => 33,
            ),
            383 => 
            array (
                'id' => 2384,
                'code' => '035',
                'name' => 'THPT Thuận An',
                'district_id' => 373,
                'city_id' => 33,
            ),
            384 => 
            array (
                'id' => 2385,
                'code' => '047',
                'name' => 'THPT Hà Trung',
                'district_id' => 373,
                'city_id' => 33,
            ),
            385 => 
            array (
                'id' => 2386,
                'code' => '050',
                'name' => 'TTGDTX  Phú Vang',
                'district_id' => 373,
                'city_id' => 33,
            ),
            386 => 
            array (
                'id' => 2387,
                'code' => '018',
                'name' => 'THPT Hương Thủy',
                'district_id' => 374,
                'city_id' => 33,
            ),
            387 => 
            array (
                'id' => 2388,
                'code' => '019',
                'name' => 'THPT Phú Bài',
                'district_id' => 374,
                'city_id' => 33,
            ),
            388 => 
            array (
                'id' => 2389,
                'code' => '046',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 374,
                'city_id' => 33,
            ),
            389 => 
            array (
                'id' => 2390,
                'code' => '051',
                'name' => 'TTGDTX  Hương Thủy',
                'district_id' => 374,
                'city_id' => 33,
            ),
            390 => 
            array (
                'id' => 2391,
                'code' => '055',
                'name' => 'CĐ Nghề TT Huế',
                'district_id' => 374,
                'city_id' => 33,
            ),
            391 => 
            array (
                'id' => 2392,
                'code' => '020',
                'name' => 'THPT An Lương Đông',
                'district_id' => 375,
                'city_id' => 33,
            ),
            392 => 
            array (
                'id' => 2393,
                'code' => '021',
                'name' => 'THPT Vinh Lộc',
                'district_id' => 375,
                'city_id' => 33,
            ),
            393 => 
            array (
                'id' => 2394,
                'code' => '022',
                'name' => 'THPT Phú Lộc',
                'district_id' => 375,
                'city_id' => 33,
            ),
            394 => 
            array (
                'id' => 2395,
                'code' => '026',
                'name' => 'THPT Thừa Lưu',
                'district_id' => 375,
                'city_id' => 33,
            ),
            395 => 
            array (
                'id' => 2396,
                'code' => '045',
                'name' => 'THPT Tư thục Thế Hệ Mới',
                'district_id' => 375,
                'city_id' => 33,
            ),
            396 => 
            array (
                'id' => 2397,
                'code' => '061',
                'name' => 'TTGDTX Phú Lộc',
                'district_id' => 375,
                'city_id' => 33,
            ),
            397 => 
            array (
                'id' => 2398,
                'code' => '023',
                'name' => 'THPT Nam Đông',
                'district_id' => 376,
                'city_id' => 33,
            ),
            398 => 
            array (
                'id' => 2399,
                'code' => '043',
                'name' => 'THPT Hương Giang',
                'district_id' => 376,
                'city_id' => 33,
            ),
            399 => 
            array (
                'id' => 2400,
                'code' => '062',
                'name' => 'TTGDTX Nam Đông',
                'district_id' => 376,
                'city_id' => 33,
            ),
            400 => 
            array (
                'id' => 2401,
                'code' => '024',
                'name' => 'THPT A Lưới',
                'district_id' => 377,
                'city_id' => 33,
            ),
            401 => 
            array (
                'id' => 2402,
                'code' => '039',
                'name' => 'THPT Hương Lâm',
                'district_id' => 377,
                'city_id' => 33,
            ),
            402 => 
            array (
                'id' => 2403,
                'code' => '040',
                'name' => 'THPT Hồng Vân',
                'district_id' => 377,
                'city_id' => 33,
            ),
            403 => 
            array (
                'id' => 2404,
                'code' => '063',
                'name' => 'TTGDTX A Lưới',
                'district_id' => 377,
                'city_id' => 33,
            ),
            404 => 
            array (
                'id' => 2405,
                'code' => '001',
                'name' => 'THPT Duy Tân',
                'district_id' => 378,
                'city_id' => 34,
            ),
            405 => 
            array (
                'id' => 2406,
                'code' => '002',
                'name' => 'THPT  Phan Bội Châu',
                'district_id' => 378,
                'city_id' => 34,
            ),
            406 => 
            array (
                'id' => 2407,
                'code' => '003',
                'name' => 'THPT  Trần Cao Vân',
                'district_id' => 378,
                'city_id' => 34,
            ),
            407 => 
            array (
                'id' => 2408,
                'code' => '004',
                'name' => 'THPT  Lê Quý Đôn',
                'district_id' => 378,
                'city_id' => 34,
            ),
            408 => 
            array (
                'id' => 2409,
                'code' => '005',
                'name' => 'THPT DL  Hà Huy Tập',
                'district_id' => 378,
                'city_id' => 34,
            ),
            409 => 
            array (
                'id' => 2410,
                'code' => '006',
                'name' => 'TT. GDTX tỉnh Quảng Nam',
                'district_id' => 378,
                'city_id' => 34,
            ),
            410 => 
            array (
                'id' => 2411,
                'code' => '007',
                'name' => 'THPT Chuyên Nguyễn Bỉnh Khiêm',
                'district_id' => 378,
                'city_id' => 34,
            ),
            411 => 
            array (
                'id' => 2412,
                'code' => '008',
                'name' => 'TT. GDTX-HN&DN  Hội An',
                'district_id' => 379,
                'city_id' => 34,
            ),
            412 => 
            array (
                'id' => 2413,
                'code' => '009',
                'name' => 'THPT  Trần Quý Cáp',
                'district_id' => 379,
                'city_id' => 34,
            ),
            413 => 
            array (
                'id' => 2414,
                'code' => '010',
                'name' => 'THPT Chuyên Lê Thánh Tông',
                'district_id' => 379,
                'city_id' => 34,
            ),
            414 => 
            array (
                'id' => 2415,
                'code' => '011',
                'name' => 'PTDT Nội trú tỉnh Quảng Nam',
                'district_id' => 379,
                'city_id' => 34,
            ),
            415 => 
            array (
                'id' => 2416,
                'code' => '012',
                'name' => 'THPT NguyễnTrãi',
                'district_id' => 379,
                'city_id' => 34,
            ),
            416 => 
            array (
                'id' => 2417,
                'code' => '065',
                'name' => 'THPT  Trần Hưng Đạo',
                'district_id' => 379,
                'city_id' => 34,
            ),
            417 => 
            array (
                'id' => 2418,
                'code' => '013',
                'name' => 'THPT   Sào Nam',
                'district_id' => 380,
                'city_id' => 34,
            ),
            418 => 
            array (
                'id' => 2419,
                'code' => '014',
                'name' => 'THPT  Lê Hồng Phong',
                'district_id' => 380,
                'city_id' => 34,
            ),
            419 => 
            array (
                'id' => 2420,
                'code' => '015',
                'name' => 'TT. GDTX-HN  Duy Xuyên',
                'district_id' => 380,
                'city_id' => 34,
            ),
            420 => 
            array (
                'id' => 2421,
                'code' => '016',
                'name' => 'THPT  Nguyễn Hiền',
                'district_id' => 380,
                'city_id' => 34,
            ),
            421 => 
            array (
                'id' => 2422,
                'code' => '017',
                'name' => 'THPT  Nguyễn Duy Hiệu',
                'district_id' => 381,
                'city_id' => 34,
            ),
            422 => 
            array (
                'id' => 2423,
                'code' => '018',
                'name' => 'THPT  Hoàng Diệu',
                'district_id' => 381,
                'city_id' => 34,
            ),
            423 => 
            array (
                'id' => 2424,
                'code' => '019',
                'name' => 'THPT  Phạm Phú Thứ',
                'district_id' => 381,
                'city_id' => 34,
            ),
            424 => 
            array (
                'id' => 2425,
                'code' => '020',
                'name' => 'THPT  Lương Thế Vinh',
                'district_id' => 381,
                'city_id' => 34,
            ),
            425 => 
            array (
                'id' => 2426,
                'code' => '021',
                'name' => 'THPT  Nguyễn Khuyến',
                'district_id' => 381,
                'city_id' => 34,
            ),
            426 => 
            array (
                'id' => 2427,
                'code' => '022',
                'name' => 'TT. GDTX-HN  Điện Bàn',
                'district_id' => 381,
                'city_id' => 34,
            ),
            427 => 
            array (
                'id' => 2428,
                'code' => '066',
                'name' => 'Trường PT nhiều cấp học Hoàng Sa',
                'district_id' => 381,
                'city_id' => 34,
            ),
            428 => 
            array (
                'id' => 2429,
                'code' => '067',
                'name' => 'Trường PT nhiều cấp học Quảng Đông',
                'district_id' => 381,
                'city_id' => 34,
            ),
            429 => 
            array (
                'id' => 2430,
                'code' => '023',
                'name' => 'THPT  Huỳnh Ngọc Huệ',
                'district_id' => 382,
                'city_id' => 34,
            ),
            430 => 
            array (
                'id' => 2431,
                'code' => '024',
                'name' => 'THPT  Chu Văn An',
                'district_id' => 382,
                'city_id' => 34,
            ),
            431 => 
            array (
                'id' => 2432,
                'code' => '025',
                'name' => 'THPT  Đỗ Đăng Tuyển',
                'district_id' => 382,
                'city_id' => 34,
            ),
            432 => 
            array (
                'id' => 2433,
                'code' => '026',
                'name' => 'THPT  Lương Thúc Kỳ',
                'district_id' => 382,
                'city_id' => 34,
            ),
            433 => 
            array (
                'id' => 2434,
                'code' => '027',
                'name' => 'TT. GDTX-HN&DN  Đại Lộc',
                'district_id' => 382,
                'city_id' => 34,
            ),
            434 => 
            array (
                'id' => 2435,
                'code' => '029',
                'name' => 'THPT   Quế Sơn',
                'district_id' => 383,
                'city_id' => 34,
            ),
            435 => 
            array (
                'id' => 2436,
                'code' => '030',
                'name' => 'THPT  Nguyễn Văn Cừ',
                'district_id' => 383,
                'city_id' => 34,
            ),
            436 => 
            array (
                'id' => 2437,
                'code' => '032',
                'name' => 'THPT  Trần Đại Nghĩa',
                'district_id' => 383,
                'city_id' => 34,
            ),
            437 => 
            array (
                'id' => 2438,
                'code' => '033',
                'name' => 'TT. GDTX-HN&DN  Quế Sơn',
                'district_id' => 383,
                'city_id' => 34,
            ),
            438 => 
            array (
                'id' => 2439,
                'code' => '034',
                'name' => 'THPT DL Phạm Văn Đồng',
                'district_id' => 383,
                'city_id' => 34,
            ),
            439 => 
            array (
                'id' => 2440,
                'code' => '035',
                'name' => 'THPT   Hiệp Đức',
                'district_id' => 384,
                'city_id' => 34,
            ),
            440 => 
            array (
                'id' => 2441,
                'code' => '036',
                'name' => 'TT. GDTX-HN&DN  Hiệp Đức',
                'district_id' => 384,
                'city_id' => 34,
            ),
            441 => 
            array (
                'id' => 2442,
                'code' => '063',
                'name' => 'THPT  Trần Phú',
                'district_id' => 384,
                'city_id' => 34,
            ),
            442 => 
            array (
                'id' => 2443,
                'code' => '028',
                'name' => 'THPT  Hùng Vương',
                'district_id' => 385,
                'city_id' => 34,
            ),
            443 => 
            array (
                'id' => 2444,
                'code' => '037',
                'name' => 'THPT   Tiểu La',
                'district_id' => 385,
                'city_id' => 34,
            ),
            444 => 
            array (
                'id' => 2445,
                'code' => '038',
                'name' => 'THPT  Nguyễn Thái Bình',
                'district_id' => 385,
                'city_id' => 34,
            ),
            445 => 
            array (
                'id' => 2446,
                'code' => '039',
                'name' => 'THPT Thái Phiên',
                'district_id' => 385,
                'city_id' => 34,
            ),
            446 => 
            array (
                'id' => 2447,
                'code' => '040',
                'name' => 'THPT  Lý Tự Trọng',
                'district_id' => 385,
                'city_id' => 34,
            ),
            447 => 
            array (
                'id' => 2448,
                'code' => '041',
                'name' => 'TT. GDTX-HN&DN  Thăng Bình',
                'district_id' => 385,
                'city_id' => 34,
            ),
            448 => 
            array (
                'id' => 2449,
                'code' => '042',
                'name' => 'THPT   Núi Thành',
                'district_id' => 386,
                'city_id' => 34,
            ),
            449 => 
            array (
                'id' => 2450,
                'code' => '043',
                'name' => 'THPT  Cao Bá Quát',
                'district_id' => 386,
                'city_id' => 34,
            ),
            450 => 
            array (
                'id' => 2451,
                'code' => '044',
                'name' => 'THPT  Nguyễn Huệ',
                'district_id' => 386,
                'city_id' => 34,
            ),
            451 => 
            array (
                'id' => 2452,
                'code' => '045',
                'name' => 'TT. GDTX-HN  Núi Thành',
                'district_id' => 386,
                'city_id' => 34,
            ),
            452 => 
            array (
                'id' => 2453,
                'code' => '046',
                'name' => 'THPT  Huỳnh Thúc Kháng',
                'district_id' => 387,
                'city_id' => 34,
            ),
            453 => 
            array (
                'id' => 2454,
                'code' => '047',
                'name' => 'THPT  Phan Châu Trinh',
                'district_id' => 387,
                'city_id' => 34,
            ),
            454 => 
            array (
                'id' => 2455,
                'code' => '048',
                'name' => 'TT. GDTX-HN&DN  Tiên Phước',
                'district_id' => 387,
                'city_id' => 34,
            ),
            455 => 
            array (
                'id' => 2456,
                'code' => '049',
                'name' => 'THPT Bắc Trà My',
                'district_id' => 388,
                'city_id' => 34,
            ),
            456 => 
            array (
                'id' => 2457,
                'code' => '050',
                'name' => 'TT. GDTX-HN Bắc Trà My',
                'district_id' => 388,
                'city_id' => 34,
            ),
            457 => 
            array (
                'id' => 2458,
                'code' => '062',
                'name' => 'PTDT Nội trú Nước Oa',
                'district_id' => 388,
                'city_id' => 34,
            ),
            458 => 
            array (
                'id' => 2459,
                'code' => '051',
                'name' => 'THPT   Quang Trung',
                'district_id' => 389,
                'city_id' => 34,
            ),
            459 => 
            array (
                'id' => 2460,
                'code' => '064',
                'name' => 'THPT  Âu Cơ',
                'district_id' => 389,
                'city_id' => 34,
            ),
            460 => 
            array (
                'id' => 2461,
                'code' => '052',
                'name' => 'THPT   Nam Giang',
                'district_id' => 390,
                'city_id' => 34,
            ),
            461 => 
            array (
                'id' => 2462,
                'code' => '060',
                'name' => 'TT.GDTX Nam Giang',
                'district_id' => 390,
                'city_id' => 34,
            ),
            462 => 
            array (
                'id' => 2463,
                'code' => '068',
                'name' => 'THPT  Nguyễn Văn Trỗi',
                'district_id' => 390,
                'city_id' => 34,
            ),
            463 => 
            array (
                'id' => 2464,
                'code' => '053',
                'name' => 'THPT   Khâm Đức',
                'district_id' => 391,
                'city_id' => 34,
            ),
            464 => 
            array (
                'id' => 2465,
                'code' => '059',
                'name' => 'TT.GDTX Phước Sơn',
                'district_id' => 391,
                'city_id' => 34,
            ),
            465 => 
            array (
                'id' => 2466,
                'code' => '056',
                'name' => 'THPT Nam Trà My',
                'district_id' => 392,
                'city_id' => 34,
            ),
            466 => 
            array (
                'id' => 2467,
                'code' => '058',
                'name' => 'TT.GDTX-HN Nam Trà My',
                'district_id' => 392,
                'city_id' => 34,
            ),
            467 => 
            array (
                'id' => 2468,
                'code' => '057',
                'name' => 'THPT Tây Giang',
                'district_id' => 393,
                'city_id' => 34,
            ),
            468 => 
            array (
                'id' => 2469,
                'code' => '054',
                'name' => 'THPT  Trần Văn Dư',
                'district_id' => 394,
                'city_id' => 34,
            ),
            469 => 
            array (
                'id' => 2470,
                'code' => '055',
                'name' => 'TT GDTX-HN&DN  Phú Ninh',
                'district_id' => 394,
                'city_id' => 34,
            ),
            470 => 
            array (
                'id' => 2471,
                'code' => '061',
                'name' => 'THPT Nguyễn Dục',
                'district_id' => 394,
                'city_id' => 34,
            ),
            471 => 
            array (
                'id' => 2472,
                'code' => '031',
                'name' => 'THPT   Nông Sơn',
                'district_id' => 395,
                'city_id' => 34,
            ),
            472 => 
            array (
                'id' => 2473,
                'code' => '001',
                'name' => 'Trường THPT Trần Kỳ Phong',
                'district_id' => 396,
                'city_id' => 35,
            ),
            473 => 
            array (
                'id' => 2474,
                'code' => '002',
                'name' => 'Trường THPT  Lê Quý Đôn',
                'district_id' => 396,
                'city_id' => 35,
            ),
            474 => 
            array (
                'id' => 2475,
                'code' => '003',
                'name' => 'Trường THPT Bình Sơn',
                'district_id' => 396,
                'city_id' => 35,
            ),
            475 => 
            array (
                'id' => 2476,
                'code' => '004',
                'name' => 'Trường THPT Vạn Tường',
                'district_id' => 396,
                'city_id' => 35,
            ),
            476 => 
            array (
                'id' => 2477,
                'code' => '005',
                'name' => 'Trung tâm DN-GDTX-HN huyện Bình Sơn',
                'district_id' => 396,
                'city_id' => 35,
            ),
            477 => 
            array (
                'id' => 2478,
                'code' => '060',
                'name' => 'Trường CĐN Kỹ thuật - Công nghệ Dung Quất',
                'district_id' => 396,
                'city_id' => 35,
            ),
            478 => 
            array (
                'id' => 2479,
                'code' => '006',
                'name' => 'Trường THPT Ba Gia',
                'district_id' => 397,
                'city_id' => 35,
            ),
            479 => 
            array (
                'id' => 2480,
                'code' => '007',
                'name' => 'Trường THPT Tư thục Trương Định',
                'district_id' => 397,
                'city_id' => 35,
            ),
            480 => 
            array (
                'id' => 2481,
                'code' => '008',
                'name' => 'Trường THPT Võ Nguyên Giáp',
                'district_id' => 398,
                'city_id' => 35,
            ),
            481 => 
            array (
                'id' => 2482,
                'code' => '009',
                'name' => 'Trường THPT Huỳnh Thúc Kháng',
                'district_id' => 398,
                'city_id' => 35,
            ),
            482 => 
            array (
                'id' => 2483,
                'code' => '010',
                'name' => 'Trường THPT Sơn Mỹ',
                'district_id' => 398,
                'city_id' => 35,
            ),
            483 => 
            array (
                'id' => 2484,
                'code' => '011',
                'name' => 'Trường THPT Trần Quốc Tuấn',
                'district_id' => 398,
                'city_id' => 35,
            ),
            484 => 
            array (
                'id' => 2485,
                'code' => '012',
                'name' => 'Trường THPT Lê Trung Đình',
                'district_id' => 398,
                'city_id' => 35,
            ),
            485 => 
            array (
                'id' => 2486,
                'code' => '013',
                'name' => 'Trường THPT chuyên Lê Khiết',
                'district_id' => 398,
                'city_id' => 35,
            ),
            486 => 
            array (
                'id' => 2487,
                'code' => '014',
                'name' => 'Trường THPT Dân tộc nội trú tỉnh Quảng Ngãi',
                'district_id' => 398,
                'city_id' => 35,
            ),
            487 => 
            array (
                'id' => 2488,
                'code' => '015',
                'name' => 'Trường THPT Tư thục Nguyễn Bỉnh Khiêm',
                'district_id' => 398,
                'city_id' => 35,
            ),
            488 => 
            array (
                'id' => 2489,
                'code' => '016',
                'name' => 'Trường THPT Tư thục Hoàng Văn Thụ',
                'district_id' => 398,
                'city_id' => 35,
            ),
            489 => 
            array (
                'id' => 2490,
                'code' => '017',
                'name' => 'Trung tâm DN-GDTX&HN huyện Sơn Tịnh',
                'district_id' => 398,
                'city_id' => 35,
            ),
            490 => 
            array (
                'id' => 2491,
                'code' => '018',
                'name' => 'Trung tâm DN-GDTX&HN tỉnh Quảng Ngãi',
                'district_id' => 398,
                'city_id' => 35,
            ),
            491 => 
            array (
                'id' => 2492,
                'code' => '061',
                'name' => 'Trường Trung cấp nghề tỉnh Quảng Ngãi',
                'district_id' => 398,
                'city_id' => 35,
            ),
            492 => 
            array (
                'id' => 2493,
                'code' => '062',
                'name' => 'Trường TCN Kinh tế - Công nghệ Dung Quất',
                'district_id' => 398,
                'city_id' => 35,
            ),
            493 => 
            array (
                'id' => 2494,
                'code' => '019',
                'name' => 'Trường THPT Số 1 Tư Nghĩa',
                'district_id' => 399,
                'city_id' => 35,
            ),
            494 => 
            array (
                'id' => 2495,
                'code' => '020',
                'name' => 'Trường THPT Chu Văn An',
                'district_id' => 399,
                'city_id' => 35,
            ),
            495 => 
            array (
                'id' => 2496,
                'code' => '021',
                'name' => 'Trường THPT Số 2 Tư Nghĩa',
                'district_id' => 399,
                'city_id' => 35,
            ),
            496 => 
            array (
                'id' => 2497,
                'code' => '022',
                'name' => 'Trường THPT Thu Xà',
                'district_id' => 399,
                'city_id' => 35,
            ),
            497 => 
            array (
                'id' => 2498,
                'code' => '023',
                'name' => 'Trung tâm DN-GDTX&HN huyện Tư Nghĩa',
                'district_id' => 399,
                'city_id' => 35,
            ),
            498 => 
            array (
                'id' => 2499,
                'code' => '063',
                'name' => 'Trường Cao đẳng nghề Cơ giới',
                'district_id' => 399,
                'city_id' => 35,
            ),
            499 => 
            array (
                'id' => 2500,
                'code' => '024',
                'name' => 'Trường THPT Số 1 Nghĩa Hành',
                'district_id' => 400,
                'city_id' => 35,
            ),
        ));
        \DB::table('organization_school')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'code' => '025',
                'name' => 'Trường THPT Nguyễn Công Phương',
                'district_id' => 400,
                'city_id' => 35,
            ),
            1 => 
            array (
                'id' => 2502,
                'code' => '026',
                'name' => 'Trường THPT Số 2 Nghĩa Hành',
                'district_id' => 400,
                'city_id' => 35,
            ),
            2 => 
            array (
                'id' => 2503,
                'code' => '027',
                'name' => 'Trung tâm DN-GDTX&HN huyện Nghĩa Hành',
                'district_id' => 400,
                'city_id' => 35,
            ),
            3 => 
            array (
                'id' => 2504,
                'code' => '028',
                'name' => 'Trường THPT Số 2 Mộ Đức',
                'district_id' => 401,
                'city_id' => 35,
            ),
            4 => 
            array (
                'id' => 2505,
                'code' => '029',
                'name' => 'Trường THPT Phạm Văn Đồng',
                'district_id' => 401,
                'city_id' => 35,
            ),
            5 => 
            array (
                'id' => 2506,
                'code' => '030',
                'name' => 'Trường THPT Nguyễn Công Trứ',
                'district_id' => 401,
                'city_id' => 35,
            ),
            6 => 
            array (
                'id' => 2507,
                'code' => '031',
                'name' => 'Trường THPT Trần Quang Diệu',
                'district_id' => 401,
                'city_id' => 35,
            ),
            7 => 
            array (
                'id' => 2508,
                'code' => '032',
                'name' => 'Trung tâm DN-GDTX&HN huyện Mộ Đức',
                'district_id' => 401,
                'city_id' => 35,
            ),
            8 => 
            array (
                'id' => 2509,
                'code' => '033',
                'name' => 'Trường THPT Số 1 Đức Phổ',
                'district_id' => 402,
                'city_id' => 35,
            ),
            9 => 
            array (
                'id' => 2510,
                'code' => '034',
                'name' => 'Trường THPT Lương Thế Vinh',
                'district_id' => 402,
                'city_id' => 35,
            ),
            10 => 
            array (
                'id' => 2511,
                'code' => '035',
                'name' => 'Trường THPT Số 2 Đức Phổ',
                'district_id' => 402,
                'city_id' => 35,
            ),
            11 => 
            array (
                'id' => 2512,
                'code' => '036',
                'name' => 'Trung tâm GDTX-HN&DN huyện Đức Phổ',
                'district_id' => 402,
                'city_id' => 35,
            ),
            12 => 
            array (
                'id' => 2513,
                'code' => '064',
                'name' => 'Trường Trung cấp nghề Đức Phổ',
                'district_id' => 402,
                'city_id' => 35,
            ),
            13 => 
            array (
                'id' => 2514,
                'code' => '037',
                'name' => 'Trường THPT Ba Tơ',
                'district_id' => 403,
                'city_id' => 35,
            ),
            14 => 
            array (
                'id' => 2515,
                'code' => '038',
                'name' => 'Trường THPT Phạm Kiệt',
                'district_id' => 403,
                'city_id' => 35,
            ),
            15 => 
            array (
                'id' => 2516,
                'code' => '039',
                'name' => 'Trung tâm GDTX-HN &DN huyện Ba Tơ',
                'district_id' => 403,
                'city_id' => 35,
            ),
            16 => 
            array (
                'id' => 2517,
                'code' => '040',
                'name' => 'Trường THPT Minh Long',
                'district_id' => 404,
                'city_id' => 35,
            ),
            17 => 
            array (
                'id' => 2518,
                'code' => '041',
                'name' => 'Trung tâm GDTX-HN &DN huyện Minh Long',
                'district_id' => 404,
                'city_id' => 35,
            ),
            18 => 
            array (
                'id' => 2519,
                'code' => '042',
                'name' => 'Trường THPT Quang Trung',
                'district_id' => 405,
                'city_id' => 35,
            ),
            19 => 
            array (
                'id' => 2520,
                'code' => '043',
                'name' => 'Trường THPT Sơn Hà',
                'district_id' => 405,
                'city_id' => 35,
            ),
            20 => 
            array (
                'id' => 2521,
                'code' => '044',
                'name' => 'Trường THCS và THPT Phạm Kiệt',
                'district_id' => 405,
                'city_id' => 35,
            ),
            21 => 
            array (
                'id' => 2522,
                'code' => '045',
                'name' => 'Trung tâm GDTX-HN huyện Sơn Hà',
                'district_id' => 405,
                'city_id' => 35,
            ),
            22 => 
            array (
                'id' => 2523,
                'code' => '046',
                'name' => 'Trường THPT Đinh Tiên Hoàng',
                'district_id' => 406,
                'city_id' => 35,
            ),
            23 => 
            array (
                'id' => 2524,
                'code' => '047',
                'name' => 'Trung tâm GDTX-HN &DN huyện Sơn Tây',
                'district_id' => 406,
                'city_id' => 35,
            ),
            24 => 
            array (
                'id' => 2525,
                'code' => '048',
                'name' => 'Trường THPT Trà Bồng',
                'district_id' => 407,
                'city_id' => 35,
            ),
            25 => 
            array (
                'id' => 2526,
                'code' => '049',
                'name' => 'Trung tâm GDTX-HN huyện Trà Bồng',
                'district_id' => 407,
                'city_id' => 35,
            ),
            26 => 
            array (
                'id' => 2527,
                'code' => '050',
                'name' => 'Trường THPT Tây Trà',
                'district_id' => 408,
                'city_id' => 35,
            ),
            27 => 
            array (
                'id' => 2528,
                'code' => '051',
                'name' => 'Trung tâm GDTX-HN&DN huyện Tây Trà',
                'district_id' => 408,
                'city_id' => 35,
            ),
            28 => 
            array (
                'id' => 2529,
                'code' => '052',
                'name' => 'Trường THPT Lý Sơn',
                'district_id' => 409,
                'city_id' => 35,
            ),
            29 => 
            array (
                'id' => 2530,
                'code' => '053',
                'name' => 'Trung tâm DN-GDTX&HN huyện Lý Sơn',
                'district_id' => 409,
                'city_id' => 35,
            ),
            30 => 
            array (
                'id' => 2531,
                'code' => '001',
                'name' => 'THPT Kon Tum',
                'district_id' => 410,
                'city_id' => 36,
            ),
            31 => 
            array (
                'id' => 2532,
                'code' => '002',
                'name' => 'PT DTNT tỉnh',
                'district_id' => 410,
                'city_id' => 36,
            ),
            32 => 
            array (
                'id' => 2533,
                'code' => '003',
                'name' => 'THPT chuyên Nguyễn Tất Thành',
                'district_id' => 410,
                'city_id' => 36,
            ),
            33 => 
            array (
                'id' => 2534,
                'code' => '013',
                'name' => 'Phòng GD&ĐT Tp Kon Tum',
                'district_id' => 410,
                'city_id' => 36,
            ),
            34 => 
            array (
                'id' => 2535,
                'code' => '015',
                'name' => 'CĐ Sư phạm Kon Tum',
                'district_id' => 410,
                'city_id' => 36,
            ),
            35 => 
            array (
                'id' => 2536,
                'code' => '016',
                'name' => 'CĐ Kinh tế - Kỹ thuật Kon Tum',
                'district_id' => 410,
                'city_id' => 36,
            ),
            36 => 
            array (
                'id' => 2537,
                'code' => '018',
                'name' => 'TT GDTX Tỉnh',
                'district_id' => 410,
                'city_id' => 36,
            ),
            37 => 
            array (
                'id' => 2538,
                'code' => '019',
                'name' => 'Trung học Y tế Kon Tum',
                'district_id' => 410,
                'city_id' => 36,
            ),
            38 => 
            array (
                'id' => 2539,
                'code' => '020',
                'name' => 'THPT Duy Tân',
                'district_id' => 410,
                'city_id' => 36,
            ),
            39 => 
            array (
                'id' => 2540,
                'code' => '025',
                'name' => 'THPT Lê Lợi',
                'district_id' => 410,
                'city_id' => 36,
            ),
            40 => 
            array (
                'id' => 2541,
                'code' => '036',
                'name' => 'THPT Ngô Mây',
                'district_id' => 410,
                'city_id' => 36,
            ),
            41 => 
            array (
                'id' => 2542,
                'code' => '038',
                'name' => 'Trường TC Nghề Kon Tum',
                'district_id' => 410,
                'city_id' => 36,
            ),
            42 => 
            array (
                'id' => 2543,
                'code' => '041',
                'name' => 'THPT Trường Chinh',
                'district_id' => 410,
                'city_id' => 36,
            ),
            43 => 
            array (
                'id' => 2544,
                'code' => '046',
                'name' => 'THPT Phan Bội Châu',
                'district_id' => 410,
                'city_id' => 36,
            ),
            44 => 
            array (
                'id' => 2545,
                'code' => '901',
                'name' => 'Phòng GD&ĐT Tp Kon Tum',
                'district_id' => 410,
                'city_id' => 36,
            ),
            45 => 
            array (
                'id' => 2546,
                'code' => '008',
                'name' => 'Phòng GD&ĐT  huyện Đăk Glei',
                'district_id' => 411,
                'city_id' => 36,
            ),
            46 => 
            array (
                'id' => 2547,
                'code' => '022',
                'name' => 'PT DTNT Đăk Glei',
                'district_id' => 411,
                'city_id' => 36,
            ),
            47 => 
            array (
                'id' => 2548,
                'code' => '033',
                'name' => 'THPT Lương Thế Vinh',
                'district_id' => 411,
                'city_id' => 36,
            ),
            48 => 
            array (
                'id' => 2549,
                'code' => '037',
                'name' => 'TT GDTX Đăk Glei',
                'district_id' => 411,
                'city_id' => 36,
            ),
            49 => 
            array (
                'id' => 2550,
                'code' => '902',
                'name' => 'Phòng GD&ĐT  huyện Đăk Glei',
                'district_id' => 411,
                'city_id' => 36,
            ),
            50 => 
            array (
                'id' => 2551,
                'code' => '009',
                'name' => 'Phòng GD&ĐT  huyện Ngọc Hồi',
                'district_id' => 412,
                'city_id' => 36,
            ),
            51 => 
            array (
                'id' => 2552,
                'code' => '021',
                'name' => 'PT DTNT Ngọc Hồi',
                'district_id' => 412,
                'city_id' => 36,
            ),
            52 => 
            array (
                'id' => 2553,
                'code' => '027',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 412,
                'city_id' => 36,
            ),
            53 => 
            array (
                'id' => 2554,
                'code' => '042',
                'name' => 'TT GDTX Ngọc Hồi',
                'district_id' => 412,
                'city_id' => 36,
            ),
            54 => 
            array (
                'id' => 2555,
                'code' => '047',
                'name' => 'THPT Phan Chu Trinh',
                'district_id' => 412,
                'city_id' => 36,
            ),
            55 => 
            array (
                'id' => 2556,
                'code' => '903',
                'name' => 'Phòng GD&ĐT  huyện Ngọc Hồi',
                'district_id' => 412,
                'city_id' => 36,
            ),
            56 => 
            array (
                'id' => 2557,
                'code' => '007',
                'name' => 'PT DTNT Đăk Tô',
                'district_id' => 413,
                'city_id' => 36,
            ),
            57 => 
            array (
                'id' => 2558,
                'code' => '010',
                'name' => 'Phòng GD&ĐT  huyện Đăk Tô',
                'district_id' => 413,
                'city_id' => 36,
            ),
            58 => 
            array (
                'id' => 2559,
                'code' => '026',
                'name' => 'THPT Nguyễn Văn Cừ',
                'district_id' => 413,
                'city_id' => 36,
            ),
            59 => 
            array (
                'id' => 2560,
                'code' => '045',
                'name' => 'TT GDTX Đăk Tô',
                'district_id' => 413,
                'city_id' => 36,
            ),
            60 => 
            array (
                'id' => 2561,
                'code' => '904',
                'name' => 'Phòng GD&ĐT huyện Đăk Tô',
                'district_id' => 413,
                'city_id' => 36,
            ),
            61 => 
            array (
                'id' => 2562,
                'code' => '005',
                'name' => 'PT DTNT Sa Thầy',
                'district_id' => 414,
                'city_id' => 36,
            ),
            62 => 
            array (
                'id' => 2563,
                'code' => '012',
                'name' => 'Phòng GD&ĐT  huyện Sa Thầy',
                'district_id' => 414,
                'city_id' => 36,
            ),
            63 => 
            array (
                'id' => 2564,
                'code' => '034',
                'name' => 'THPT Quang Trung',
                'district_id' => 414,
                'city_id' => 36,
            ),
            64 => 
            array (
                'id' => 2565,
                'code' => '043',
                'name' => 'TT GDTX Sa Thầy',
                'district_id' => 414,
                'city_id' => 36,
            ),
            65 => 
            array (
                'id' => 2566,
                'code' => '905',
                'name' => 'Phòng GD&ĐT huyện Sa Thầy',
                'district_id' => 414,
                'city_id' => 36,
            ),
            66 => 
            array (
                'id' => 2567,
                'code' => '014',
                'name' => 'Phòng GD&ĐT  huyện Kon Plong',
                'district_id' => 415,
                'city_id' => 36,
            ),
            67 => 
            array (
                'id' => 2568,
                'code' => '017',
                'name' => 'PT DTNT Kon Plong',
                'district_id' => 415,
                'city_id' => 36,
            ),
            68 => 
            array (
                'id' => 2569,
                'code' => '906',
                'name' => 'Phòng GD&ĐT huyện Kon Plông',
                'district_id' => 415,
                'city_id' => 36,
            ),
            69 => 
            array (
                'id' => 2570,
                'code' => '006',
                'name' => 'PT DTNT Đăk Hà',
                'district_id' => 416,
                'city_id' => 36,
            ),
            70 => 
            array (
                'id' => 2571,
                'code' => '011',
                'name' => 'Phòng GD&ĐT  huyện Đăk Hà',
                'district_id' => 416,
                'city_id' => 36,
            ),
            71 => 
            array (
                'id' => 2572,
                'code' => '028',
                'name' => 'TT GDTX Đăk Hà',
                'district_id' => 416,
                'city_id' => 36,
            ),
            72 => 
            array (
                'id' => 2573,
                'code' => '030',
                'name' => 'THPT Trần Quốc Tuấn',
                'district_id' => 416,
                'city_id' => 36,
            ),
            73 => 
            array (
                'id' => 2574,
                'code' => '032',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 416,
                'city_id' => 36,
            ),
            74 => 
            array (
                'id' => 2575,
                'code' => '907',
                'name' => 'Phòng GD&ĐT huyện Đăk Hà',
                'district_id' => 416,
                'city_id' => 36,
            ),
            75 => 
            array (
                'id' => 2576,
                'code' => '023',
                'name' => 'Phòng GD&ĐT huyện Kon Rẫy',
                'district_id' => 417,
                'city_id' => 36,
            ),
            76 => 
            array (
                'id' => 2577,
                'code' => '024',
                'name' => 'PT DTNT Kon Rẫy',
                'district_id' => 417,
                'city_id' => 36,
            ),
            77 => 
            array (
                'id' => 2578,
                'code' => '035',
                'name' => 'THPT Chu Văn An',
                'district_id' => 417,
                'city_id' => 36,
            ),
            78 => 
            array (
                'id' => 2579,
                'code' => '044',
                'name' => 'TT GDTX Kon Rẫy',
                'district_id' => 417,
                'city_id' => 36,
            ),
            79 => 
            array (
                'id' => 2580,
                'code' => '908',
                'name' => 'Phòng GD&ĐT huyện Kon Rẫy',
                'district_id' => 417,
                'city_id' => 36,
            ),
            80 => 
            array (
                'id' => 2581,
                'code' => '029',
                'name' => 'Phòng GD&ĐT huyện Tu Mơ Rông',
                'district_id' => 418,
                'city_id' => 36,
            ),
            81 => 
            array (
                'id' => 2582,
                'code' => '031',
                'name' => 'PT DTNT Tu Mơ Rông',
                'district_id' => 418,
                'city_id' => 36,
            ),
            82 => 
            array (
                'id' => 2583,
                'code' => '909',
                'name' => 'Phòng GD&ĐT huyện Tu Mơ Rông',
                'district_id' => 418,
                'city_id' => 36,
            ),
            83 => 
            array (
                'id' => 2584,
                'code' => '000',
                'name' => 'Sở GD & ĐT Bình Định',
                'district_id' => 419,
                'city_id' => 37,
            ),
            84 => 
            array (
                'id' => 2585,
                'code' => '001',
                'name' => 'THPT Quốc học',
                'district_id' => 419,
                'city_id' => 37,
            ),
            85 => 
            array (
                'id' => 2586,
                'code' => '002',
                'name' => 'THPT Trưng Vương',
                'district_id' => 419,
                'city_id' => 37,
            ),
            86 => 
            array (
                'id' => 2587,
                'code' => '003',
                'name' => 'THPT chuyên Lê Quý Đôn',
                'district_id' => 419,
                'city_id' => 37,
            ),
            87 => 
            array (
                'id' => 2588,
                'code' => '004',
                'name' => 'THPT Hùng Vương',
                'district_id' => 419,
                'city_id' => 37,
            ),
            88 => 
            array (
                'id' => 2589,
                'code' => '005',
                'name' => 'THPT DTNT Tỉnh',
                'district_id' => 419,
                'city_id' => 37,
            ),
            89 => 
            array (
                'id' => 2590,
                'code' => '006',
                'name' => 'THPT Trần Cao Vân',
                'district_id' => 419,
                'city_id' => 37,
            ),
            90 => 
            array (
                'id' => 2591,
                'code' => '007',
                'name' => 'THPT Nguyễn Thái Học',
                'district_id' => 419,
                'city_id' => 37,
            ),
            91 => 
            array (
                'id' => 2592,
                'code' => '008',
                'name' => 'THPT Chu Văn An',
                'district_id' => 419,
                'city_id' => 37,
            ),
            92 => 
            array (
                'id' => 2593,
                'code' => '009',
                'name' => 'THPT Quy Nhơn',
                'district_id' => 419,
                'city_id' => 37,
            ),
            93 => 
            array (
                'id' => 2594,
                'code' => '052',
                'name' => 'TT GDTX Tỉnh',
                'district_id' => 419,
                'city_id' => 37,
            ),
            94 => 
            array (
                'id' => 2595,
                'code' => '056',
                'name' => 'CĐ nghề Quy Nhơn',
                'district_id' => 419,
                'city_id' => 37,
            ),
            95 => 
            array (
                'id' => 2596,
                'code' => '057',
                'name' => 'CĐ nghề cơ điện xây dựng và Nông  lâm',
                'district_id' => 419,
                'city_id' => 37,
            ),
            96 => 
            array (
                'id' => 2597,
                'code' => '045',
                'name' => 'THPT An Lão',
                'district_id' => 420,
                'city_id' => 37,
            ),
            97 => 
            array (
                'id' => 2598,
                'code' => '046',
                'name' => 'THPT Số 2 An Lão',
                'district_id' => 420,
                'city_id' => 37,
            ),
            98 => 
            array (
                'id' => 2599,
                'code' => '063',
                'name' => 'TT GDTX-HN An Lão',
                'district_id' => 420,
                'city_id' => 37,
            ),
            99 => 
            array (
                'id' => 2600,
                'code' => '042',
                'name' => 'THPT Hoài Ân',
                'district_id' => 421,
                'city_id' => 37,
            ),
            100 => 
            array (
                'id' => 2601,
                'code' => '043',
                'name' => 'THPT Võ Giữ',
                'district_id' => 421,
                'city_id' => 37,
            ),
            101 => 
            array (
                'id' => 2602,
                'code' => '044',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 421,
                'city_id' => 37,
            ),
            102 => 
            array (
                'id' => 2603,
                'code' => '047',
                'name' => 'THPT Trần Quang Diệu',
                'district_id' => 421,
                'city_id' => 37,
            ),
            103 => 
            array (
                'id' => 2604,
                'code' => '059',
                'name' => 'TT GDTX-HN Hoài Ân',
                'district_id' => 421,
                'city_id' => 37,
            ),
            104 => 
            array (
                'id' => 2605,
                'code' => '036',
                'name' => 'THPT Tăng Bạt Hổ',
                'district_id' => 422,
                'city_id' => 37,
            ),
            105 => 
            array (
                'id' => 2606,
                'code' => '037',
                'name' => 'THPT Nguyễn Trân',
                'district_id' => 422,
                'city_id' => 37,
            ),
            106 => 
            array (
                'id' => 2607,
                'code' => '038',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 422,
                'city_id' => 37,
            ),
            107 => 
            array (
                'id' => 2608,
                'code' => '039',
                'name' => 'THPT Lý Tự Trọng',
                'district_id' => 422,
                'city_id' => 37,
            ),
            108 => 
            array (
                'id' => 2609,
                'code' => '040',
                'name' => 'THPT Phan Bội Châu',
                'district_id' => 422,
                'city_id' => 37,
            ),
            109 => 
            array (
                'id' => 2610,
                'code' => '041',
                'name' => 'THPT Tam Quan',
                'district_id' => 422,
                'city_id' => 37,
            ),
            110 => 
            array (
                'id' => 2611,
                'code' => '058',
                'name' => 'TT GDTX-HN Hoài Nhơn',
                'district_id' => 422,
                'city_id' => 37,
            ),
            111 => 
            array (
                'id' => 2612,
                'code' => '031',
                'name' => 'THPT Số 1 Phù Mỹ',
                'district_id' => 423,
                'city_id' => 37,
            ),
            112 => 
            array (
                'id' => 2613,
                'code' => '032',
                'name' => 'THPT Số 2 Phù Mỹ',
                'district_id' => 423,
                'city_id' => 37,
            ),
            113 => 
            array (
                'id' => 2614,
                'code' => '033',
                'name' => 'THPT An Lương',
                'district_id' => 423,
                'city_id' => 37,
            ),
            114 => 
            array (
                'id' => 2615,
                'code' => '034',
                'name' => 'THPT Nguyễn Trung Trực',
                'district_id' => 423,
                'city_id' => 37,
            ),
            115 => 
            array (
                'id' => 2616,
                'code' => '035',
                'name' => 'THPT Bình Dương',
                'district_id' => 423,
                'city_id' => 37,
            ),
            116 => 
            array (
                'id' => 2617,
                'code' => '051',
                'name' => 'THPT Mỹ Thọ',
                'district_id' => 423,
                'city_id' => 37,
            ),
            117 => 
            array (
                'id' => 2618,
                'code' => '062',
                'name' => 'TT GDTX-HN Phù Mỹ',
                'district_id' => 423,
                'city_id' => 37,
            ),
            118 => 
            array (
                'id' => 2619,
                'code' => '026',
                'name' => 'THPT Số 1 Phù Cát',
                'district_id' => 424,
                'city_id' => 37,
            ),
            119 => 
            array (
                'id' => 2620,
                'code' => '027',
                'name' => 'THPT Số 2 Phù Cát',
                'district_id' => 424,
                'city_id' => 37,
            ),
            120 => 
            array (
                'id' => 2621,
                'code' => '028',
                'name' => 'THPT Số 3 Phù Cát',
                'district_id' => 424,
                'city_id' => 37,
            ),
            121 => 
            array (
                'id' => 2622,
                'code' => '029',
                'name' => 'THPT Ngô Mây',
                'district_id' => 424,
                'city_id' => 37,
            ),
            122 => 
            array (
                'id' => 2623,
                'code' => '030',
                'name' => 'THPT Nguyễn Hữu Quang',
                'district_id' => 424,
                'city_id' => 37,
            ),
            123 => 
            array (
                'id' => 2624,
                'code' => '050',
                'name' => 'THPT Nguyễn Hồng Đạo',
                'district_id' => 424,
                'city_id' => 37,
            ),
            124 => 
            array (
                'id' => 2625,
                'code' => '055',
                'name' => 'TT GDTX-HN Phù Cát',
                'district_id' => 424,
                'city_id' => 37,
            ),
            125 => 
            array (
                'id' => 2626,
                'code' => '025',
                'name' => 'THPT Vĩnh Thạnh',
                'district_id' => 425,
                'city_id' => 37,
            ),
            126 => 
            array (
                'id' => 2627,
                'code' => '048',
                'name' => 'THPT DTNT Vĩnh Thạnh',
                'district_id' => 425,
                'city_id' => 37,
            ),
            127 => 
            array (
                'id' => 2628,
                'code' => '021',
                'name' => 'THPT Quang Trung',
                'district_id' => 426,
                'city_id' => 37,
            ),
            128 => 
            array (
                'id' => 2629,
                'code' => '022',
                'name' => 'THPT Tây Sơn',
                'district_id' => 426,
                'city_id' => 37,
            ),
            129 => 
            array (
                'id' => 2630,
                'code' => '023',
                'name' => 'THPT Võ Lai',
                'district_id' => 426,
                'city_id' => 37,
            ),
            130 => 
            array (
                'id' => 2631,
                'code' => '024',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 426,
                'city_id' => 37,
            ),
            131 => 
            array (
                'id' => 2632,
                'code' => '060',
                'name' => 'TT GDTX-HN Tây Sơn',
                'district_id' => 426,
                'city_id' => 37,
            ),
            132 => 
            array (
                'id' => 2633,
                'code' => '014',
                'name' => 'THPT DTNT Vân Canh',
                'district_id' => 427,
                'city_id' => 37,
            ),
            133 => 
            array (
                'id' => 2634,
                'code' => '049',
                'name' => 'THPT Vân Vanh',
                'district_id' => 427,
                'city_id' => 37,
            ),
            134 => 
            array (
                'id' => 2635,
                'code' => '061',
                'name' => 'TT GDTX-HN Vân Canh',
                'district_id' => 427,
                'city_id' => 37,
            ),
            135 => 
            array (
                'id' => 2636,
                'code' => '015',
                'name' => 'THPT Số 1 An Nhơn',
                'district_id' => 428,
                'city_id' => 37,
            ),
            136 => 
            array (
                'id' => 2637,
                'code' => '016',
                'name' => 'THPT Số 2 An Nhơn',
                'district_id' => 428,
                'city_id' => 37,
            ),
            137 => 
            array (
                'id' => 2638,
                'code' => '017',
                'name' => 'THPT Số 3 An Nhơn',
                'district_id' => 428,
                'city_id' => 37,
            ),
            138 => 
            array (
                'id' => 2639,
                'code' => '018',
                'name' => 'THPT Hòa Bình',
                'district_id' => 428,
                'city_id' => 37,
            ),
            139 => 
            array (
                'id' => 2640,
                'code' => '019',
                'name' => 'THPT Nguyễn Đình Chiểu',
                'district_id' => 428,
                'city_id' => 37,
            ),
            140 => 
            array (
                'id' => 2641,
                'code' => '020',
                'name' => 'THPT Nguyễn Trường Tộ',
                'district_id' => 428,
                'city_id' => 37,
            ),
            141 => 
            array (
                'id' => 2642,
                'code' => '054',
                'name' => 'TT GDTX-HN An Nhơn',
                'district_id' => 428,
                'city_id' => 37,
            ),
            142 => 
            array (
                'id' => 2643,
                'code' => '010',
                'name' => 'THPT Số 1 Tuy phước',
                'district_id' => 429,
                'city_id' => 37,
            ),
            143 => 
            array (
                'id' => 2644,
                'code' => '011',
                'name' => 'THPT Số 2 Tuy phước',
                'district_id' => 429,
                'city_id' => 37,
            ),
            144 => 
            array (
                'id' => 2645,
                'code' => '012',
                'name' => 'THPT Nguyễn Diêu',
                'district_id' => 429,
                'city_id' => 37,
            ),
            145 => 
            array (
                'id' => 2646,
                'code' => '013',
                'name' => 'THPT Xuân Diệu',
                'district_id' => 429,
                'city_id' => 37,
            ),
            146 => 
            array (
                'id' => 2647,
                'code' => '053',
                'name' => 'TT GDTX-HN Tuy Phước',
                'district_id' => 429,
                'city_id' => 37,
            ),
            147 => 
            array (
                'id' => 2648,
                'code' => '001',
                'name' => 'Trường THPT Pleiku',
                'district_id' => 430,
                'city_id' => 38,
            ),
            148 => 
            array (
                'id' => 2649,
                'code' => '002',
                'name' => 'Trường THPT Phan Bội Châu',
                'district_id' => 430,
                'city_id' => 38,
            ),
            149 => 
            array (
                'id' => 2650,
                'code' => '003',
                'name' => 'Trường PT Dân tộc Nội trú tỉnh',
                'district_id' => 430,
                'city_id' => 38,
            ),
            150 => 
            array (
                'id' => 2651,
                'code' => '004',
                'name' => 'Trường THPT Lê Lợi',
                'district_id' => 430,
                'city_id' => 38,
            ),
            151 => 
            array (
                'id' => 2652,
                'code' => '005',
                'name' => 'Trường THPT Chuyên Hùng Vương',
                'district_id' => 430,
                'city_id' => 38,
            ),
            152 => 
            array (
                'id' => 2653,
                'code' => '006',
                'name' => 'Trường THPT Hoàng Hoa Thám',
                'district_id' => 430,
                'city_id' => 38,
            ),
            153 => 
            array (
                'id' => 2654,
                'code' => '023',
                'name' => 'TT GDTX tỉnh',
                'district_id' => 430,
                'city_id' => 38,
            ),
            154 => 
            array (
                'id' => 2655,
                'code' => '025',
                'name' => 'Trường  Cao đẳng nghề Gia Lai',
                'district_id' => 430,
                'city_id' => 38,
            ),
            155 => 
            array (
                'id' => 2656,
                'code' => '026',
                'name' => 'TT Kỹ thuật - Tổng hợp - Hướng nghiệp',
                'district_id' => 430,
                'city_id' => 38,
            ),
            156 => 
            array (
                'id' => 2657,
                'code' => '034',
                'name' => 'Trường THPT Nguyễn Chí Thanh',
                'district_id' => 430,
                'city_id' => 38,
            ),
            157 => 
            array (
                'id' => 2658,
                'code' => '042',
                'name' => 'Trường Quốc tế Châu Á Thái Bình Dương - Gia Lai',
                'district_id' => 430,
                'city_id' => 38,
            ),
            158 => 
            array (
                'id' => 2659,
                'code' => '060',
                'name' => 'Trường TC nghề số 15',
                'district_id' => 430,
                'city_id' => 38,
            ),
            159 => 
            array (
                'id' => 2660,
                'code' => '061',
                'name' => 'Trường TC nghề số 21',
                'district_id' => 430,
                'city_id' => 38,
            ),
            160 => 
            array (
                'id' => 2661,
                'code' => '062',
                'name' => 'Trường CĐ nghề số 05 Chi nhánh Gia Lai',
                'district_id' => 430,
                'city_id' => 38,
            ),
            161 => 
            array (
                'id' => 2662,
                'code' => '069',
                'name' => 'Trường TC Y tế Gia Lai',
                'district_id' => 430,
                'city_id' => 38,
            ),
            162 => 
            array (
                'id' => 2663,
                'code' => '070',
                'name' => 'Trường TC VH-NT Gia Lai',
                'district_id' => 430,
                'city_id' => 38,
            ),
            163 => 
            array (
                'id' => 2664,
                'code' => '071',
                'name' => 'Trường Thiếu sinh quân-Quân khu V',
                'district_id' => 430,
                'city_id' => 38,
            ),
            164 => 
            array (
                'id' => 2665,
                'code' => '072',
                'name' => 'Trường TH, THCS, THPT Nguyễn văn Linh',
                'district_id' => 430,
                'city_id' => 38,
            ),
            165 => 
            array (
                'id' => 2666,
                'code' => '007',
                'name' => 'Trường THPT Mạc Đĩnh Chi',
                'district_id' => 431,
                'city_id' => 38,
            ),
            166 => 
            array (
                'id' => 2667,
                'code' => '008',
                'name' => 'Trường THPT Ia Ly',
                'district_id' => 431,
                'city_id' => 38,
            ),
            167 => 
            array (
                'id' => 2668,
                'code' => '043',
                'name' => 'Trường THPT Phạm Hồng Thái',
                'district_id' => 431,
                'city_id' => 38,
            ),
            168 => 
            array (
                'id' => 2669,
                'code' => '047',
                'name' => 'TT GDTX Chư Păh',
                'district_id' => 431,
                'city_id' => 38,
            ),
            169 => 
            array (
                'id' => 2670,
                'code' => '009',
                'name' => 'Trường THPT Trần Hưng Đạo',
                'district_id' => 432,
                'city_id' => 38,
            ),
            170 => 
            array (
                'id' => 2671,
                'code' => '041',
                'name' => 'Trường THCS&THPT Kpă Klơng',
                'district_id' => 432,
                'city_id' => 38,
            ),
            171 => 
            array (
                'id' => 2672,
                'code' => '067',
                'name' => 'TT DN&GDTX  Mang Yang',
                'district_id' => 432,
                'city_id' => 38,
            ),
            172 => 
            array (
                'id' => 2673,
                'code' => '010',
                'name' => 'Trường THPT Lương Thế Vinh',
                'district_id' => 433,
                'city_id' => 38,
            ),
            173 => 
            array (
                'id' => 2674,
                'code' => '040',
                'name' => 'Trường THPT Anh hùng Núp',
                'district_id' => 433,
                'city_id' => 38,
            ),
            174 => 
            array (
                'id' => 2675,
                'code' => '048',
                'name' => 'TT DN&GDTX  KBang',
                'district_id' => 433,
                'city_id' => 38,
            ),
            175 => 
            array (
                'id' => 2676,
                'code' => '011',
                'name' => 'Trường THPT Quang Trung',
                'district_id' => 434,
                'city_id' => 38,
            ),
            176 => 
            array (
                'id' => 2677,
                'code' => '012',
                'name' => 'Trường THPT Nguyễn Khuyến',
                'district_id' => 434,
                'city_id' => 38,
            ),
            177 => 
            array (
                'id' => 2678,
                'code' => '028',
                'name' => 'TT GDTX An Khê',
                'district_id' => 434,
                'city_id' => 38,
            ),
            178 => 
            array (
                'id' => 2679,
                'code' => '031',
                'name' => 'Trường THPT Nguyễn Trãi',
                'district_id' => 434,
                'city_id' => 38,
            ),
            179 => 
            array (
                'id' => 2680,
                'code' => '058',
                'name' => 'Trường TC nghề An Khê',
                'district_id' => 434,
                'city_id' => 38,
            ),
            180 => 
            array (
                'id' => 2681,
                'code' => '013',
                'name' => 'Trường THPT Hà Huy Tập',
                'district_id' => 435,
                'city_id' => 38,
            ),
            181 => 
            array (
                'id' => 2682,
                'code' => '049',
                'name' => 'TT GDTX  Kông Chro',
                'district_id' => 435,
                'city_id' => 38,
            ),
            182 => 
            array (
                'id' => 2683,
                'code' => '014',
                'name' => 'Trường THPT Lê Hoàn',
                'district_id' => 436,
                'city_id' => 38,
            ),
            183 => 
            array (
                'id' => 2684,
                'code' => '038',
                'name' => 'Trường THPT Nguyễn Trường Tộ',
                'district_id' => 436,
                'city_id' => 38,
            ),
            184 => 
            array (
                'id' => 2685,
                'code' => '050',
                'name' => 'TT GDTX  Đức Cơ',
                'district_id' => 436,
                'city_id' => 38,
            ),
            185 => 
            array (
                'id' => 2686,
                'code' => '063',
                'name' => 'Trường THPT Tôn Đức Thắng',
                'district_id' => 436,
                'city_id' => 38,
            ),
            186 => 
            array (
                'id' => 2687,
                'code' => '015',
                'name' => 'Trường THPT Lê Quý Đôn',
                'district_id' => 437,
                'city_id' => 38,
            ),
            187 => 
            array (
                'id' => 2688,
                'code' => '030',
                'name' => 'Trường THPT Trần Phú',
                'district_id' => 437,
                'city_id' => 38,
            ),
            188 => 
            array (
                'id' => 2689,
                'code' => '051',
                'name' => 'TT DN&GDTX  Chư Prông',
                'district_id' => 437,
                'city_id' => 38,
            ),
            189 => 
            array (
                'id' => 2690,
                'code' => '065',
                'name' => 'Trường THPT Pleime',
                'district_id' => 437,
                'city_id' => 38,
            ),
            190 => 
            array (
                'id' => 2691,
                'code' => '016',
                'name' => 'Trường THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 438,
                'city_id' => 38,
            ),
            191 => 
            array (
                'id' => 2692,
                'code' => '024',
                'name' => 'TT GDTX Chư Sê',
                'district_id' => 438,
                'city_id' => 38,
            ),
            192 => 
            array (
                'id' => 2693,
                'code' => '039',
                'name' => 'Trường THPT Trường Chinh',
                'district_id' => 438,
                'city_id' => 38,
            ),
            193 => 
            array (
                'id' => 2694,
                'code' => '044',
                'name' => 'Trường THPT Nguyễn Văn Cừ',
                'district_id' => 438,
                'city_id' => 38,
            ),
            194 => 
            array (
                'id' => 2695,
                'code' => '017',
                'name' => 'Trường THPT Lê Thánh Tông',
                'district_id' => 439,
                'city_id' => 38,
            ),
            195 => 
            array (
                'id' => 2696,
                'code' => '027',
                'name' => 'TT GDTX Ayun Pa',
                'district_id' => 439,
                'city_id' => 38,
            ),
            196 => 
            array (
                'id' => 2697,
                'code' => '037',
                'name' => 'Trường THPT Lý Thường Kiệt',
                'district_id' => 439,
                'city_id' => 38,
            ),
            197 => 
            array (
                'id' => 2698,
                'code' => '059',
                'name' => 'Trường TC nghề Ayun Pa',
                'district_id' => 439,
                'city_id' => 38,
            ),
            198 => 
            array (
                'id' => 2699,
                'code' => '019',
                'name' => 'Trường THPT Chu Văn An',
                'district_id' => 440,
                'city_id' => 38,
            ),
            199 => 
            array (
                'id' => 2700,
                'code' => '029',
                'name' => 'Trường THPT Nguyễn Du',
                'district_id' => 440,
                'city_id' => 38,
            ),
            200 => 
            array (
                'id' => 2701,
                'code' => '046',
                'name' => 'Trường THPT Đinh Tiên Hoàng',
                'district_id' => 440,
                'city_id' => 38,
            ),
            201 => 
            array (
                'id' => 2702,
                'code' => '052',
                'name' => 'TT GDTX  Krông Pa',
                'district_id' => 440,
                'city_id' => 38,
            ),
            202 => 
            array (
                'id' => 2703,
                'code' => '020',
                'name' => 'Trường THPT Huỳnh Thúc Kháng',
                'district_id' => 441,
                'city_id' => 38,
            ),
            203 => 
            array (
                'id' => 2704,
                'code' => '021',
                'name' => 'Trường THPT Phạm Văn Đồng',
                'district_id' => 441,
                'city_id' => 38,
            ),
            204 => 
            array (
                'id' => 2705,
                'code' => '068',
                'name' => 'TT DN&GDTX  Ia Grai',
                'district_id' => 441,
                'city_id' => 38,
            ),
            205 => 
            array (
                'id' => 2706,
                'code' => '022',
                'name' => 'Trường THPT Nguyễn Huệ',
                'district_id' => 442,
                'city_id' => 38,
            ),
            206 => 
            array (
                'id' => 2707,
                'code' => '035',
                'name' => 'Trường THPT Lê Hồng Phong',
                'district_id' => 442,
                'city_id' => 38,
            ),
            207 => 
            array (
                'id' => 2708,
                'code' => '053',
                'name' => 'TT GDTX  Đak Đoa',
                'district_id' => 442,
                'city_id' => 38,
            ),
            208 => 
            array (
                'id' => 2709,
                'code' => '064',
                'name' => 'Trường THPT Nguyễn Thị Minh Khai',
                'district_id' => 442,
                'city_id' => 38,
            ),
            209 => 
            array (
                'id' => 2710,
                'code' => '033',
                'name' => 'Trường THPT Nguyễn Tất Thành',
                'district_id' => 443,
                'city_id' => 38,
            ),
            210 => 
            array (
                'id' => 2711,
                'code' => '036',
                'name' => 'Trường THPT Phan Chu Trinh',
                'district_id' => 443,
                'city_id' => 38,
            ),
            211 => 
            array (
                'id' => 2712,
                'code' => '056',
                'name' => 'TT GDTX-HN Ia Pa',
                'district_id' => 443,
                'city_id' => 38,
            ),
            212 => 
            array (
                'id' => 2713,
                'code' => '045',
                'name' => 'Trường THPT Y Đôn',
                'district_id' => 444,
                'city_id' => 38,
            ),
            213 => 
            array (
                'id' => 2714,
                'code' => '054',
                'name' => 'TT GDTX  Đak Pơ',
                'district_id' => 444,
                'city_id' => 38,
            ),
            214 => 
            array (
                'id' => 2715,
                'code' => '018',
                'name' => 'Trường THPT Trần Quốc Tuấn',
                'district_id' => 445,
                'city_id' => 38,
            ),
            215 => 
            array (
                'id' => 2716,
                'code' => '055',
                'name' => 'TT GDTX Phú Thiện',
                'district_id' => 445,
                'city_id' => 38,
            ),
            216 => 
            array (
                'id' => 2717,
                'code' => '057',
                'name' => 'Trường THPT Võ Văn Kiệt',
                'district_id' => 445,
                'city_id' => 38,
            ),
            217 => 
            array (
                'id' => 2718,
                'code' => '032',
                'name' => 'Trường THPT Nguyễn Thái Học',
                'district_id' => 446,
                'city_id' => 38,
            ),
            218 => 
            array (
                'id' => 2719,
                'code' => '066',
                'name' => 'TT GDTX-HN Chư Pưh',
                'district_id' => 446,
                'city_id' => 38,
            ),
            219 => 
            array (
                'id' => 2720,
                'code' => '001',
                'name' => 'THPT  Nguyễn Huệ',
                'district_id' => 447,
                'city_id' => 39,
            ),
            220 => 
            array (
                'id' => 2721,
                'code' => '003',
                'name' => 'THPT  Dân tộc nội trú tỉnh',
                'district_id' => 447,
                'city_id' => 39,
            ),
            221 => 
            array (
                'id' => 2722,
                'code' => '004',
                'name' => 'PT tư thục  Duy Tân',
                'district_id' => 447,
                'city_id' => 39,
            ),
            222 => 
            array (
                'id' => 2723,
                'code' => '005',
                'name' => 'THPT Chuyên  Lương Văn Chánh',
                'district_id' => 447,
                'city_id' => 39,
            ),
            223 => 
            array (
                'id' => 2724,
                'code' => '007',
                'name' => 'THPT  Ngô Gia Tự',
                'district_id' => 447,
                'city_id' => 39,
            ),
            224 => 
            array (
                'id' => 2725,
                'code' => '017',
                'name' => 'THPT  Nguyễn Trãi',
                'district_id' => 447,
                'city_id' => 39,
            ),
            225 => 
            array (
                'id' => 2726,
                'code' => '018',
                'name' => 'THPT  Nguyễn Trường Tộ',
                'district_id' => 447,
                'city_id' => 39,
            ),
            226 => 
            array (
                'id' => 2727,
                'code' => '019',
                'name' => 'THPT DL  Nguyễn Bỉnh Khiêm',
                'district_id' => 447,
                'city_id' => 39,
            ),
            227 => 
            array (
                'id' => 2728,
                'code' => '022',
                'name' => 'Trung tâm GDTX tỉnh',
                'district_id' => 447,
                'city_id' => 39,
            ),
            228 => 
            array (
                'id' => 2729,
                'code' => '023',
                'name' => 'Trung  tâm GDTX-HN Tuy Hòa',
                'district_id' => 447,
                'city_id' => 39,
            ),
            229 => 
            array (
                'id' => 2730,
                'code' => '031',
                'name' => 'Trung tâm KTTH-HN tỉnh',
                'district_id' => 447,
                'city_id' => 39,
            ),
            230 => 
            array (
                'id' => 2731,
                'code' => '032',
                'name' => 'Cao đẳng nghề Phú Yên',
                'district_id' => 447,
                'city_id' => 39,
            ),
            231 => 
            array (
                'id' => 2732,
                'code' => '036',
                'name' => 'Đại học Xây dựng Miền Trung',
                'district_id' => 447,
                'city_id' => 39,
            ),
            232 => 
            array (
                'id' => 2733,
                'code' => '043',
                'name' => 'Cao đẳng Công nghiệp Tuy Hòa',
                'district_id' => 447,
                'city_id' => 39,
            ),
            233 => 
            array (
                'id' => 2734,
                'code' => '014',
                'name' => 'THPT  Lê Lợi',
                'district_id' => 448,
                'city_id' => 39,
            ),
            234 => 
            array (
                'id' => 2735,
                'code' => '027',
                'name' => 'THPT Nguyễn Thái Bình',
                'district_id' => 448,
                'city_id' => 39,
            ),
            235 => 
            array (
                'id' => 2736,
                'code' => '028',
                'name' => 'Trung  tâm GDTX-HN Đồng Xuân',
                'district_id' => 448,
                'city_id' => 39,
            ),
            236 => 
            array (
                'id' => 2737,
                'code' => '042',
                'name' => 'THCS và THPT Chu Văn An',
                'district_id' => 448,
                'city_id' => 39,
            ),
            237 => 
            array (
                'id' => 2738,
                'code' => '012',
                'name' => 'THPT  Phan Đình Phùng',
                'district_id' => 449,
                'city_id' => 39,
            ),
            238 => 
            array (
                'id' => 2739,
                'code' => '013',
                'name' => 'PTPT  Phan Chu Trinh',
                'district_id' => 449,
                'city_id' => 39,
            ),
            239 => 
            array (
                'id' => 2740,
                'code' => '035',
                'name' => 'THCS và THPT Nguyễn Khuyến',
                'district_id' => 449,
                'city_id' => 39,
            ),
            240 => 
            array (
                'id' => 2741,
                'code' => '039',
                'name' => 'Trung tâm GDTX-HN Sông Cầu',
                'district_id' => 449,
                'city_id' => 39,
            ),
            241 => 
            array (
                'id' => 2742,
                'code' => '046',
                'name' => 'THCS và THPT Võ Nguyên Giáp',
                'district_id' => 449,
                'city_id' => 39,
            ),
            242 => 
            array (
                'id' => 2743,
                'code' => '010',
                'name' => 'THPT  Lê Thành Phương',
                'district_id' => 450,
                'city_id' => 39,
            ),
            243 => 
            array (
                'id' => 2744,
                'code' => '011',
                'name' => 'THPT  Trần Phú',
                'district_id' => 450,
                'city_id' => 39,
            ),
            244 => 
            array (
                'id' => 2745,
                'code' => '025',
                'name' => 'THCS và THPT  Võ Thị Sáu',
                'district_id' => 450,
                'city_id' => 39,
            ),
            245 => 
            array (
                'id' => 2746,
                'code' => '034',
                'name' => 'Trung  tâm GDTX-HN Tuy An',
                'district_id' => 450,
                'city_id' => 39,
            ),
            246 => 
            array (
                'id' => 2747,
                'code' => '041',
                'name' => 'THCS và THPT Nguyễn Viết Xuân',
                'district_id' => 450,
                'city_id' => 39,
            ),
            247 => 
            array (
                'id' => 2748,
                'code' => '015',
                'name' => 'THPT  Phan Bội Châu',
                'district_id' => 451,
                'city_id' => 39,
            ),
            248 => 
            array (
                'id' => 2749,
                'code' => '026',
                'name' => 'Trung  tâm GDTX-HN Sơn Hòa',
                'district_id' => 451,
                'city_id' => 39,
            ),
            249 => 
            array (
                'id' => 2750,
                'code' => '040',
                'name' => 'THCS và THPT Nguyễn Bá Ngọc',
                'district_id' => 451,
                'city_id' => 39,
            ),
            250 => 
            array (
                'id' => 2751,
                'code' => '016',
                'name' => 'THPT  Nguyễn Du',
                'district_id' => 452,
                'city_id' => 39,
            ),
            251 => 
            array (
                'id' => 2752,
                'code' => '033',
                'name' => 'Trung  tâm GDTX-HN Sông Hinh',
                'district_id' => 452,
                'city_id' => 39,
            ),
            252 => 
            array (
                'id' => 2753,
                'code' => '038',
                'name' => 'THPT Tôn Đức Thắng',
                'district_id' => 452,
                'city_id' => 39,
            ),
            253 => 
            array (
                'id' => 2754,
                'code' => '045',
                'name' => 'THCS và THPT Võ Văn Kiệt',
                'district_id' => 452,
                'city_id' => 39,
            ),
            254 => 
            array (
                'id' => 2755,
                'code' => '006',
                'name' => 'THPT  Lê Trung Kiên',
                'district_id' => 453,
                'city_id' => 39,
            ),
            255 => 
            array (
                'id' => 2756,
                'code' => '020',
                'name' => 'THPT  Nguyễn Công Trứ',
                'district_id' => 453,
                'city_id' => 39,
            ),
            256 => 
            array (
                'id' => 2757,
                'code' => '030',
                'name' => 'THPT DL  Lê Thánh Tôn',
                'district_id' => 453,
                'city_id' => 39,
            ),
            257 => 
            array (
                'id' => 2758,
                'code' => '037',
                'name' => 'THPT Nguyễn Văn Linh',
                'district_id' => 453,
                'city_id' => 39,
            ),
            258 => 
            array (
                'id' => 2759,
                'code' => '002',
                'name' => 'THPT  Trần Quốc Tuấn',
                'district_id' => 454,
                'city_id' => 39,
            ),
            259 => 
            array (
                'id' => 2760,
                'code' => '024',
                'name' => 'THPT Trần Bình Trọng',
                'district_id' => 454,
                'city_id' => 39,
            ),
            260 => 
            array (
                'id' => 2761,
                'code' => '029',
                'name' => 'THPT  Trần Suyền',
                'district_id' => 454,
                'city_id' => 39,
            ),
            261 => 
            array (
                'id' => 2762,
                'code' => '044',
                'name' => 'Trung  tâm GDTX-HN Phú Hòa',
                'district_id' => 454,
                'city_id' => 39,
            ),
            262 => 
            array (
                'id' => 2763,
                'code' => '008',
                'name' => 'THPT  Lê Hồng Phong',
                'district_id' => 455,
                'city_id' => 39,
            ),
            263 => 
            array (
                'id' => 2764,
                'code' => '009',
                'name' => 'THPT Phạm Văn Đồng',
                'district_id' => 455,
                'city_id' => 39,
            ),
            264 => 
            array (
                'id' => 2765,
                'code' => '021',
                'name' => 'THPT  Nguyễn Thị Minh Khai',
                'district_id' => 455,
                'city_id' => 39,
            ),
            265 => 
            array (
                'id' => 2766,
                'code' => '000',
                'name' => 'Sở GDĐT Đắk Lắk',
                'district_id' => 456,
                'city_id' => 40,
            ),
            266 => 
            array (
                'id' => 2767,
                'code' => '002',
                'name' => 'THPT Buôn Ma Thuột',
                'district_id' => 456,
                'city_id' => 40,
            ),
            267 => 
            array (
                'id' => 2768,
                'code' => '003',
                'name' => 'THPT Chu Văn An',
                'district_id' => 456,
                'city_id' => 40,
            ),
            268 => 
            array (
                'id' => 2769,
                'code' => '005',
                'name' => 'THPT Trần Phú',
                'district_id' => 456,
                'city_id' => 40,
            ),
            269 => 
            array (
                'id' => 2770,
                'code' => '006',
                'name' => 'THPT DTNT Nơ Trang Lơng',
                'district_id' => 456,
                'city_id' => 40,
            ),
            270 => 
            array (
                'id' => 2771,
                'code' => '007',
                'name' => 'TT GDTX Tỉnh',
                'district_id' => 456,
                'city_id' => 40,
            ),
            271 => 
            array (
                'id' => 2772,
                'code' => '022',
                'name' => 'THPT Hồng Đức',
                'district_id' => 456,
                'city_id' => 40,
            ),
            272 => 
            array (
                'id' => 2773,
                'code' => '024',
                'name' => 'THPT Chuyên Nguyễn Du',
                'district_id' => 456,
                'city_id' => 40,
            ),
            273 => 
            array (
                'id' => 2774,
                'code' => '025',
                'name' => 'THPT Cao Bá Quát',
                'district_id' => 456,
                'city_id' => 40,
            ),
            274 => 
            array (
                'id' => 2775,
                'code' => '040',
                'name' => 'THPT  Lê Qúy Đôn',
                'district_id' => 456,
                'city_id' => 40,
            ),
            275 => 
            array (
                'id' => 2776,
                'code' => '045',
                'name' => 'TTGDTX Buôn Ma Thuột',
                'district_id' => 456,
                'city_id' => 40,
            ),
            276 => 
            array (
                'id' => 2777,
                'code' => '047',
                'name' => 'TC nghề Đăk Lăk',
                'district_id' => 456,
                'city_id' => 40,
            ),
            277 => 
            array (
                'id' => 2778,
                'code' => '048',
                'name' => 'CĐ Nghề TN Dân Tộc, Đăk Lăk',
                'district_id' => 456,
                'city_id' => 40,
            ),
            278 => 
            array (
                'id' => 2779,
                'code' => '049',
                'name' => 'THPT Phú Xuân',
                'district_id' => 456,
                'city_id' => 40,
            ),
            279 => 
            array (
                'id' => 2780,
                'code' => '055',
                'name' => 'TC Kinh tế Kỹ thuật Đắk lắk',
                'district_id' => 456,
                'city_id' => 40,
            ),
            280 => 
            array (
                'id' => 2781,
                'code' => '056',
                'name' => 'Trường VHNT Đắk Lắk',
                'district_id' => 456,
                'city_id' => 40,
            ),
            281 => 
            array (
                'id' => 2782,
                'code' => '057',
                'name' => 'Trường Văn Hóa 3',
                'district_id' => 456,
                'city_id' => 40,
            ),
            282 => 
            array (
                'id' => 2783,
                'code' => '058',
                'name' => 'THPT DTNT Tây Nguyên',
                'district_id' => 456,
                'city_id' => 40,
            ),
            283 => 
            array (
                'id' => 2784,
                'code' => '059',
                'name' => 'THPT Thực hành Cao Nguyên',
                'district_id' => 456,
                'city_id' => 40,
            ),
            284 => 
            array (
                'id' => 2785,
                'code' => '062',
                'name' => 'THPT Lê Duẩn',
                'district_id' => 456,
                'city_id' => 40,
            ),
            285 => 
            array (
                'id' => 2786,
                'code' => '064',
                'name' => 'Trường năng khiếu Thể dục Thể thao',
                'district_id' => 456,
                'city_id' => 40,
            ),
            286 => 
            array (
                'id' => 2787,
                'code' => '074',
                'name' => 'THPT Đông Du',
                'district_id' => 456,
                'city_id' => 40,
            ),
            287 => 
            array (
                'id' => 2788,
                'code' => '019',
                'name' => 'THPT Ea H\'leo',
                'district_id' => 457,
                'city_id' => 40,
            ),
            288 => 
            array (
                'id' => 2789,
                'code' => '033',
                'name' => 'TT GDTX Ea H\'Leo',
                'district_id' => 457,
                'city_id' => 40,
            ),
            289 => 
            array (
                'id' => 2790,
                'code' => '050',
                'name' => 'THPT Phan Chu Trinh',
                'district_id' => 457,
                'city_id' => 40,
            ),
            290 => 
            array (
                'id' => 2791,
                'code' => '066',
                'name' => 'THPT Trường Chinh',
                'district_id' => 457,
                'city_id' => 40,
            ),
            291 => 
            array (
                'id' => 2792,
                'code' => '061',
                'name' => 'THPT Nguyễn Văn Cừ',
                'district_id' => 458,
                'city_id' => 40,
            ),
            292 => 
            array (
                'id' => 2793,
                'code' => '065',
                'name' => 'THPT Phan Đăng Lưu',
                'district_id' => 458,
                'city_id' => 40,
            ),
            293 => 
            array (
                'id' => 2794,
                'code' => '014',
                'name' => 'THPT Phan Bội Châu',
                'district_id' => 459,
                'city_id' => 40,
            ),
            294 => 
            array (
                'id' => 2795,
                'code' => '034',
                'name' => 'TT GDTX Krông Năng',
                'district_id' => 459,
                'city_id' => 40,
            ),
            295 => 
            array (
                'id' => 2796,
                'code' => '052',
                'name' => 'THPT Lý Tự Trọng',
                'district_id' => 459,
                'city_id' => 40,
            ),
            296 => 
            array (
                'id' => 2797,
                'code' => '060',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 459,
                'city_id' => 40,
            ),
            297 => 
            array (
                'id' => 2798,
                'code' => '075',
                'name' => 'THPT Tôn Đức Thắng',
                'district_id' => 459,
                'city_id' => 40,
            ),
            298 => 
            array (
                'id' => 2799,
                'code' => '021',
                'name' => 'THPT Ea Sup',
                'district_id' => 460,
                'city_id' => 40,
            ),
            299 => 
            array (
                'id' => 2800,
                'code' => '054',
                'name' => 'TT GDTX Ea Súp',
                'district_id' => 460,
                'city_id' => 40,
            ),
            300 => 
            array (
                'id' => 2801,
                'code' => '072',
                'name' => 'THPT Ea Rốk',
                'district_id' => 460,
                'city_id' => 40,
            ),
            301 => 
            array (
                'id' => 2802,
                'code' => '011',
                'name' => 'THPT Cư M\'Gar',
                'district_id' => 461,
                'city_id' => 40,
            ),
            302 => 
            array (
                'id' => 2803,
                'code' => '023',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 461,
                'city_id' => 40,
            ),
            303 => 
            array (
                'id' => 2804,
                'code' => '032',
                'name' => 'TT GDTX Cư M\'Gar',
                'district_id' => 461,
                'city_id' => 40,
            ),
            304 => 
            array (
                'id' => 2805,
                'code' => '038',
                'name' => 'THPT Lê Hữu Trác',
                'district_id' => 461,
                'city_id' => 40,
            ),
            305 => 
            array (
                'id' => 2806,
                'code' => '067',
                'name' => 'THPT Trần Quang Khải',
                'district_id' => 461,
                'city_id' => 40,
            ),
            306 => 
            array (
                'id' => 2807,
                'code' => '004',
                'name' => 'THPT Quang Trung',
                'district_id' => 462,
                'city_id' => 40,
            ),
            307 => 
            array (
                'id' => 2808,
                'code' => '008',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 462,
                'city_id' => 40,
            ),
            308 => 
            array (
                'id' => 2809,
                'code' => '009',
                'name' => 'THPT Lê HồngPhong',
                'district_id' => 462,
                'city_id' => 40,
            ),
            309 => 
            array (
                'id' => 2810,
                'code' => '026',
                'name' => 'THPT Phan Đình Phùng',
                'district_id' => 462,
                'city_id' => 40,
            ),
            310 => 
            array (
                'id' => 2811,
                'code' => '029',
                'name' => 'TT GDTX Krông Pắk',
                'district_id' => 462,
                'city_id' => 40,
            ),
            311 => 
            array (
                'id' => 2812,
                'code' => '036',
                'name' => 'THPT Nguyễn Công Trứ',
                'district_id' => 462,
                'city_id' => 40,
            ),
            312 => 
            array (
                'id' => 2813,
                'code' => '063',
                'name' => 'THPT Nguyễn Thị Minh Khai',
                'district_id' => 462,
                'city_id' => 40,
            ),
            313 => 
            array (
                'id' => 2814,
                'code' => '015',
                'name' => 'THPT Ngô Gia Tự',
                'district_id' => 463,
                'city_id' => 40,
            ),
            314 => 
            array (
                'id' => 2815,
                'code' => '016',
                'name' => 'THPT Trần Quốc Toản',
                'district_id' => 463,
                'city_id' => 40,
            ),
            315 => 
            array (
                'id' => 2816,
                'code' => '039',
                'name' => 'THPT Trần Nhân Tông',
                'district_id' => 463,
                'city_id' => 40,
            ),
            316 => 
            array (
                'id' => 2817,
                'code' => '042',
                'name' => 'TT GDTX Ea Kar',
                'district_id' => 463,
                'city_id' => 40,
            ),
            317 => 
            array (
                'id' => 2818,
                'code' => '068',
                'name' => 'THPT Nguyễn Thái Bình',
                'district_id' => 463,
                'city_id' => 40,
            ),
            318 => 
            array (
                'id' => 2819,
                'code' => '018',
                'name' => 'THPT NguyễnTất Thành',
                'district_id' => 464,
                'city_id' => 40,
            ),
            319 => 
            array (
                'id' => 2820,
                'code' => '041',
                'name' => 'TT GDTX M\'Drăk',
                'district_id' => 464,
                'city_id' => 40,
            ),
            320 => 
            array (
                'id' => 2821,
                'code' => '051',
                'name' => 'THPT Nguyễn Trường Tộ',
                'district_id' => 464,
                'city_id' => 40,
            ),
            321 => 
            array (
                'id' => 2822,
                'code' => '012',
                'name' => 'THPT Krông Ana',
                'district_id' => 465,
                'city_id' => 40,
            ),
            322 => 
            array (
                'id' => 2823,
                'code' => '028',
                'name' => 'TT GDTX Krông Ana',
                'district_id' => 465,
                'city_id' => 40,
            ),
            323 => 
            array (
                'id' => 2824,
                'code' => '046',
                'name' => 'THPT Hùng Vương',
                'district_id' => 465,
                'city_id' => 40,
            ),
            324 => 
            array (
                'id' => 2825,
                'code' => '071',
                'name' => 'THPT Phạm Văn Đồng',
                'district_id' => 465,
                'city_id' => 40,
            ),
            325 => 
            array (
                'id' => 2826,
                'code' => '017',
                'name' => 'THPT Krông Bông',
                'district_id' => 466,
                'city_id' => 40,
            ),
            326 => 
            array (
                'id' => 2827,
                'code' => '044',
                'name' => 'TTGDTX Krông Bông',
                'district_id' => 466,
                'city_id' => 40,
            ),
            327 => 
            array (
                'id' => 2828,
                'code' => '073',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 466,
                'city_id' => 40,
            ),
            328 => 
            array (
                'id' => 2829,
                'code' => '020',
                'name' => 'THPT Lăk',
                'district_id' => 467,
                'city_id' => 40,
            ),
            329 => 
            array (
                'id' => 2830,
                'code' => '031',
                'name' => 'TT GDTX Lăk',
                'district_id' => 467,
                'city_id' => 40,
            ),
            330 => 
            array (
                'id' => 2831,
                'code' => '027',
                'name' => 'THPT Buôn Đôn',
                'district_id' => 468,
                'city_id' => 40,
            ),
            331 => 
            array (
                'id' => 2832,
                'code' => '053',
                'name' => 'TT GDTX Buôn Đôn',
                'district_id' => 468,
                'city_id' => 40,
            ),
            332 => 
            array (
                'id' => 2833,
                'code' => '069',
                'name' => 'THPT Trần Đại Nghĩa',
                'district_id' => 468,
                'city_id' => 40,
            ),
            333 => 
            array (
                'id' => 2834,
                'code' => '013',
                'name' => 'THPT Việt Đức',
                'district_id' => 469,
                'city_id' => 40,
            ),
            334 => 
            array (
                'id' => 2835,
                'code' => '037',
                'name' => 'THPT Y Jut',
                'district_id' => 469,
                'city_id' => 40,
            ),
            335 => 
            array (
                'id' => 2836,
                'code' => '070',
                'name' => 'TTGDTX Cư Kuin',
                'district_id' => 469,
                'city_id' => 40,
            ),
            336 => 
            array (
                'id' => 2837,
                'code' => '010',
                'name' => 'THPT Buôn Hồ',
                'district_id' => 470,
                'city_id' => 40,
            ),
            337 => 
            array (
                'id' => 2838,
                'code' => '030',
                'name' => 'TT GDTX Buôn Hồ',
                'district_id' => 470,
                'city_id' => 40,
            ),
            338 => 
            array (
                'id' => 2839,
                'code' => '035',
                'name' => 'THPT Hai Bà Trưng',
                'district_id' => 470,
                'city_id' => 40,
            ),
            339 => 
            array (
                'id' => 2840,
                'code' => '043',
                'name' => 'THPT   Huỳnh Thúc Kháng',
                'district_id' => 470,
                'city_id' => 40,
            ),
            340 => 
            array (
                'id' => 2841,
                'code' => '001',
                'name' => 'CĐ nghề Nha Trang',
                'district_id' => 471,
                'city_id' => 41,
            ),
            341 => 
            array (
                'id' => 2842,
                'code' => '002',
                'name' => 'TC Kinh tế Khánh Hòa',
                'district_id' => 471,
                'city_id' => 41,
            ),
            342 => 
            array (
                'id' => 2843,
                'code' => '015',
                'name' => 'THPT Lý Tự Trọng',
                'district_id' => 471,
                'city_id' => 41,
            ),
            343 => 
            array (
                'id' => 2844,
                'code' => '016',
                'name' => 'THPT Nguyễn Văn Trỗi',
                'district_id' => 471,
                'city_id' => 41,
            ),
            344 => 
            array (
                'id' => 2845,
                'code' => '017',
                'name' => 'THPT chuyên Lê Quý Đôn',
                'district_id' => 471,
                'city_id' => 41,
            ),
            345 => 
            array (
                'id' => 2846,
                'code' => '018',
                'name' => 'THPT Hà Huy Tập',
                'district_id' => 471,
                'city_id' => 41,
            ),
            346 => 
            array (
                'id' => 2847,
                'code' => '019',
                'name' => 'THPT Hoàng Văn Thụ',
                'district_id' => 471,
                'city_id' => 41,
            ),
            347 => 
            array (
                'id' => 2848,
                'code' => '020',
                'name' => 'THPT BC Nguyễn Trường Tộ',
                'district_id' => 471,
                'city_id' => 41,
            ),
            348 => 
            array (
                'id' => 2849,
                'code' => '021',
                'name' => 'THCS&THPT iSchool Nha Trang',
                'district_id' => 471,
                'city_id' => 41,
            ),
            349 => 
            array (
                'id' => 2850,
                'code' => '022',
                'name' => 'THPT DL Nguyễn Thiện Thuật',
                'district_id' => 471,
                'city_id' => 41,
            ),
            350 => 
            array (
                'id' => 2851,
                'code' => '023',
                'name' => 'THPT DL Lê Thánh Tôn',
                'district_id' => 471,
                'city_id' => 41,
            ),
            351 => 
            array (
                'id' => 2852,
                'code' => '031',
                'name' => 'THPT Hermann Gmeiner',
                'district_id' => 471,
                'city_id' => 41,
            ),
            352 => 
            array (
                'id' => 2853,
                'code' => '032',
                'name' => 'BTTH Nha Trang 2',
                'district_id' => 471,
                'city_id' => 41,
            ),
            353 => 
            array (
                'id' => 2854,
                'code' => '034',
                'name' => 'TT GDTX Nha Trang',
                'district_id' => 471,
                'city_id' => 41,
            ),
            354 => 
            array (
                'id' => 2855,
                'code' => '039',
                'name' => 'PT Dân tộc Nội trú tỉnh KH',
                'district_id' => 471,
                'city_id' => 41,
            ),
            355 => 
            array (
                'id' => 2856,
                'code' => '050',
                'name' => 'CĐ nghề Quốc tế Nam Việt',
                'district_id' => 471,
                'city_id' => 41,
            ),
            356 => 
            array (
                'id' => 2857,
                'code' => '053',
                'name' => 'TC nghề Nha Trang',
                'district_id' => 471,
                'city_id' => 41,
            ),
            357 => 
            array (
                'id' => 2858,
                'code' => '054',
                'name' => 'Trường APC Nha Trang',
                'district_id' => 471,
                'city_id' => 41,
            ),
            358 => 
            array (
                'id' => 2859,
                'code' => '055',
                'name' => 'Trường Quốc Tế Hoàn Cầu Nha Trang',
                'district_id' => 471,
                'city_id' => 41,
            ),
            359 => 
            array (
                'id' => 2860,
                'code' => '057',
                'name' => 'Trường THPT Đại Việt',
                'district_id' => 471,
                'city_id' => 41,
            ),
            360 => 
            array (
                'id' => 2861,
                'code' => '058',
                'name' => 'Trường TC KTKT Trần Đại Nghĩa',
                'district_id' => 471,
                'city_id' => 41,
            ),
            361 => 
            array (
                'id' => 2862,
                'code' => '059',
                'name' => 'Trường dự bị ĐH Dân tộc TW Nha Trang',
                'district_id' => 471,
                'city_id' => 41,
            ),
            362 => 
            array (
                'id' => 2863,
                'code' => '009',
                'name' => 'THPT Huỳnh Thúc Kháng',
                'district_id' => 472,
                'city_id' => 41,
            ),
            363 => 
            array (
                'id' => 2864,
                'code' => '010',
                'name' => 'THPT Tô Văn  Ơn',
                'district_id' => 472,
                'city_id' => 41,
            ),
            364 => 
            array (
                'id' => 2865,
                'code' => '011',
                'name' => 'THPT Nguyễn Thị Minh Khai',
                'district_id' => 472,
                'city_id' => 41,
            ),
            365 => 
            array (
                'id' => 2866,
                'code' => '037',
                'name' => 'TT GDTX Vạn Ninh',
                'district_id' => 472,
                'city_id' => 41,
            ),
            366 => 
            array (
                'id' => 2867,
                'code' => '048',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 472,
                'city_id' => 41,
            ),
            367 => 
            array (
                'id' => 2868,
                'code' => '056',
                'name' => 'Trường TC Nghề Vạn Ninh',
                'district_id' => 472,
                'city_id' => 41,
            ),
            368 => 
            array (
                'id' => 2869,
                'code' => '012',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 473,
                'city_id' => 41,
            ),
            369 => 
            array (
                'id' => 2870,
                'code' => '013',
                'name' => 'THPT Trần Quý Cáp',
                'district_id' => 473,
                'city_id' => 41,
            ),
            370 => 
            array (
                'id' => 2871,
                'code' => '014',
                'name' => 'THPT Trần Cao Vân',
                'district_id' => 473,
                'city_id' => 41,
            ),
            371 => 
            array (
                'id' => 2872,
                'code' => '033',
                'name' => 'TT GDTX Ninh Hoà',
                'district_id' => 473,
                'city_id' => 41,
            ),
            372 => 
            array (
                'id' => 2873,
                'code' => '038',
                'name' => 'THPT Nguyễn Chí Thanh',
                'district_id' => 473,
                'city_id' => 41,
            ),
            373 => 
            array (
                'id' => 2874,
                'code' => '045',
                'name' => 'THPT Tôn Đức Thắng',
                'district_id' => 473,
                'city_id' => 41,
            ),
            374 => 
            array (
                'id' => 2875,
                'code' => '051',
                'name' => 'TC nghề Ninh Hòa',
                'district_id' => 473,
                'city_id' => 41,
            ),
            375 => 
            array (
                'id' => 2876,
                'code' => '024',
                'name' => 'THPT Hoàng Hoa Thám',
                'district_id' => 474,
                'city_id' => 41,
            ),
            376 => 
            array (
                'id' => 2877,
                'code' => '025',
                'name' => 'THPT  BC Lê Lợi',
                'district_id' => 474,
                'city_id' => 41,
            ),
            377 => 
            array (
                'id' => 2878,
                'code' => '026',
                'name' => 'THPT  BC Nguyễn Bỉnh Khiêm',
                'district_id' => 474,
                'city_id' => 41,
            ),
            378 => 
            array (
                'id' => 2879,
                'code' => '035',
                'name' => 'TT GDTX Diên Khánh',
                'district_id' => 474,
                'city_id' => 41,
            ),
            379 => 
            array (
                'id' => 2880,
                'code' => '043',
                'name' => 'THPT Nguyễn Thái Học',
                'district_id' => 474,
                'city_id' => 41,
            ),
            380 => 
            array (
                'id' => 2881,
                'code' => '049',
                'name' => 'THPT Đoàn Thị Điểm',
                'district_id' => 474,
                'city_id' => 41,
            ),
            381 => 
            array (
                'id' => 2882,
                'code' => '040',
                'name' => 'THPT Lạc Long Quân',
                'district_id' => 475,
                'city_id' => 41,
            ),
            382 => 
            array (
                'id' => 2883,
                'code' => '044',
                'name' => 'TT GDTX Khánh Vĩnh',
                'district_id' => 475,
                'city_id' => 41,
            ),
            383 => 
            array (
                'id' => 2884,
                'code' => '028',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 476,
                'city_id' => 41,
            ),
            384 => 
            array (
                'id' => 2885,
                'code' => '030',
                'name' => 'THPT Phan Bội Châu',
                'district_id' => 476,
                'city_id' => 41,
            ),
            385 => 
            array (
                'id' => 2886,
                'code' => '036',
                'name' => 'TT GDTX Cam Ranh',
                'district_id' => 476,
                'city_id' => 41,
            ),
            386 => 
            array (
                'id' => 2887,
                'code' => '041',
                'name' => 'THPT Ngô Gia Tự',
                'district_id' => 476,
                'city_id' => 41,
            ),
            387 => 
            array (
                'id' => 2888,
                'code' => '047',
                'name' => 'Hệ GDTX tại THPT Ngô Gia Tự',
                'district_id' => 476,
                'city_id' => 41,
            ),
            388 => 
            array (
                'id' => 2889,
                'code' => '052',
                'name' => 'TC nghề Cam Ranh',
                'district_id' => 476,
                'city_id' => 41,
            ),
            389 => 
            array (
                'id' => 2890,
                'code' => '060',
                'name' => 'THPT Thăng Long',
                'district_id' => 476,
                'city_id' => 41,
            ),
            390 => 
            array (
                'id' => 2891,
                'code' => '007',
                'name' => 'TTGDTX  Khánh Sơn',
                'district_id' => 477,
                'city_id' => 41,
            ),
            391 => 
            array (
                'id' => 2892,
                'code' => '042',
                'name' => 'Cấp2,3 Khánh Sơn',
                'district_id' => 477,
                'city_id' => 41,
            ),
            392 => 
            array (
                'id' => 2893,
                'code' => '027',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 478,
                'city_id' => 41,
            ),
            393 => 
            array (
                'id' => 2894,
                'code' => '029',
                'name' => 'THPT Trần Bình Trọng',
                'district_id' => 478,
                'city_id' => 41,
            ),
            394 => 
            array (
                'id' => 2895,
                'code' => '046',
                'name' => 'TT GDTX  Cam Lâm',
                'district_id' => 478,
                'city_id' => 41,
            ),
            395 => 
            array (
                'id' => 2896,
                'code' => '002',
                'name' => 'THPT Trần Phú -Đà Lạt',
                'district_id' => 479,
                'city_id' => 42,
            ),
            396 => 
            array (
                'id' => 2897,
                'code' => '003',
                'name' => 'THPT Bùi Thị Xuân',
                'district_id' => 479,
                'city_id' => 42,
            ),
            397 => 
            array (
                'id' => 2898,
                'code' => '004',
                'name' => 'THPT Chi Lăng',
                'district_id' => 479,
                'city_id' => 42,
            ),
            398 => 
            array (
                'id' => 2899,
                'code' => '005',
                'name' => 'THPT Xuân Trường',
                'district_id' => 479,
                'city_id' => 42,
            ),
            399 => 
            array (
                'id' => 2900,
                'code' => '006',
                'name' => 'THPT Đống Đa',
                'district_id' => 479,
                'city_id' => 42,
            ),
            400 => 
            array (
                'id' => 2901,
                'code' => '007',
                'name' => 'THPT DTNT Tỉnh',
                'district_id' => 479,
                'city_id' => 42,
            ),
            401 => 
            array (
                'id' => 2902,
                'code' => '008',
                'name' => 'THPT chuyên Thăng Long -Đà lạt',
                'district_id' => 479,
                'city_id' => 42,
            ),
            402 => 
            array (
                'id' => 2903,
                'code' => '009',
                'name' => 'THCS &THPT Nguyễn Du -Đà Lạt',
                'district_id' => 479,
                'city_id' => 42,
            ),
            403 => 
            array (
                'id' => 2904,
                'code' => '010',
                'name' => 'THPT Phù Đổng',
                'district_id' => 479,
                'city_id' => 42,
            ),
            404 => 
            array (
                'id' => 2905,
                'code' => '011',
                'name' => 'THPT Tây Sơn',
                'district_id' => 479,
                'city_id' => 42,
            ),
            405 => 
            array (
                'id' => 2906,
                'code' => '012',
                'name' => 'Trường Hermann Gmeiner',
                'district_id' => 479,
                'city_id' => 42,
            ),
            406 => 
            array (
                'id' => 2907,
                'code' => '039',
                'name' => 'TT GDTX Đà Lạt',
                'district_id' => 479,
                'city_id' => 42,
            ),
            407 => 
            array (
                'id' => 2908,
                'code' => '070',
                'name' => 'Trường CĐ KT-KT Lâm Đồng',
                'district_id' => 479,
                'city_id' => 42,
            ),
            408 => 
            array (
                'id' => 2909,
                'code' => '071',
                'name' => 'THPT Lộc Phát - Bảo Lộc',
                'district_id' => 479,
                'city_id' => 42,
            ),
            409 => 
            array (
                'id' => 2910,
                'code' => '077',
                'name' => 'THPT Tà Nung-Đà Lạt',
                'district_id' => 479,
                'city_id' => 42,
            ),
            410 => 
            array (
                'id' => 2911,
                'code' => '078',
                'name' => 'THPT Yersin -Đà Lạt',
                'district_id' => 479,
                'city_id' => 42,
            ),
            411 => 
            array (
                'id' => 2912,
                'code' => '088',
                'name' => 'CĐ Y tế Lâm Đồng',
                'district_id' => 479,
                'city_id' => 42,
            ),
            412 => 
            array (
                'id' => 2913,
                'code' => '089',
                'name' => 'TC Du Lịch Dalat',
                'district_id' => 479,
                'city_id' => 42,
            ),
            413 => 
            array (
                'id' => 2914,
                'code' => '091',
                'name' => 'Phân hiệu TC Văn thư lưu trữ TW',
                'district_id' => 479,
                'city_id' => 42,
            ),
            414 => 
            array (
                'id' => 2915,
                'code' => '026',
                'name' => 'THPT Bảo Lộc',
                'district_id' => 480,
                'city_id' => 42,
            ),
            415 => 
            array (
                'id' => 2916,
                'code' => '027',
                'name' => 'THPT Lộc Thanh',
                'district_id' => 480,
                'city_id' => 42,
            ),
            416 => 
            array (
                'id' => 2917,
                'code' => '028',
                'name' => 'Trường Dân lập Lê Lợi -Bảo Lộc',
                'district_id' => 480,
                'city_id' => 42,
            ),
            417 => 
            array (
                'id' => 2918,
                'code' => '040',
                'name' => 'TT GDTX Lâm Đồng',
                'district_id' => 480,
                'city_id' => 42,
            ),
            418 => 
            array (
                'id' => 2919,
                'code' => '045',
                'name' => 'THPT BC Nguyễn Du -Bảo Lộc',
                'district_id' => 480,
                'city_id' => 42,
            ),
            419 => 
            array (
                'id' => 2920,
                'code' => '046',
                'name' => 'THPT Lê Thị Pha -Bảo Lộc',
                'district_id' => 480,
                'city_id' => 42,
            ),
            420 => 
            array (
                'id' => 2921,
                'code' => '047',
                'name' => 'THPT  Nguyễn Tri Phương',
                'district_id' => 480,
                'city_id' => 42,
            ),
            421 => 
            array (
                'id' => 2922,
                'code' => '063',
                'name' => 'THPT Bá Thiên - Bảo Lộc',
                'district_id' => 480,
                'city_id' => 42,
            ),
            422 => 
            array (
                'id' => 2923,
                'code' => '083',
                'name' => 'THPT TT Duy Tân  Bảo Lộc',
                'district_id' => 480,
                'city_id' => 42,
            ),
            423 => 
            array (
                'id' => 2924,
                'code' => '087',
                'name' => 'TC Nghề Bảo Lộc',
                'district_id' => 480,
                'city_id' => 42,
            ),
            424 => 
            array (
                'id' => 2925,
                'code' => '092',
                'name' => 'CĐ Công nghệ & Kinh tế Bảo Lộc',
                'district_id' => 480,
                'city_id' => 42,
            ),
            425 => 
            array (
                'id' => 2926,
                'code' => '093',
                'name' => 'THPT chuyên Bảo Lộc',
                'district_id' => 480,
                'city_id' => 42,
            ),
            426 => 
            array (
                'id' => 2927,
                'code' => '018',
                'name' => 'THPT Đức Trọng',
                'district_id' => 481,
                'city_id' => 42,
            ),
            427 => 
            array (
                'id' => 2928,
                'code' => '019',
                'name' => 'THPT Lương Thế Vinh',
                'district_id' => 481,
                'city_id' => 42,
            ),
            428 => 
            array (
                'id' => 2929,
                'code' => '050',
                'name' => 'THPT Chu Văn An-Đức Trọng',
                'district_id' => 481,
                'city_id' => 42,
            ),
            429 => 
            array (
                'id' => 2930,
                'code' => '051',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 481,
                'city_id' => 42,
            ),
            430 => 
            array (
                'id' => 2931,
                'code' => '052',
                'name' => 'THPT Nguyễn Thái Bình',
                'district_id' => 481,
                'city_id' => 42,
            ),
            431 => 
            array (
                'id' => 2932,
                'code' => '064',
                'name' => 'TT KTTH-HN Đức Trọng',
                'district_id' => 481,
                'city_id' => 42,
            ),
            432 => 
            array (
                'id' => 2933,
                'code' => '072',
                'name' => 'THPT Hoàng Hoa Thám',
                'district_id' => 481,
                'city_id' => 42,
            ),
            433 => 
            array (
                'id' => 2934,
                'code' => '090',
                'name' => 'TC KT-KT Quốc Việt',
                'district_id' => 481,
                'city_id' => 42,
            ),
            434 => 
            array (
                'id' => 2935,
                'code' => '021',
                'name' => 'Trường  THPT Di Linh',
                'district_id' => 482,
                'city_id' => 42,
            ),
            435 => 
            array (
                'id' => 2936,
                'code' => '022',
                'name' => 'THPT Phan Bội Châu',
                'district_id' => 482,
                'city_id' => 42,
            ),
            436 => 
            array (
                'id' => 2937,
                'code' => '041',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 482,
                'city_id' => 42,
            ),
            437 => 
            array (
                'id' => 2938,
                'code' => '056',
                'name' => 'THPT Nguyễn Viết Xuân',
                'district_id' => 482,
                'city_id' => 42,
            ),
            438 => 
            array (
                'id' => 2939,
                'code' => '065',
                'name' => 'TT KTTH-HN Di Linh',
                'district_id' => 482,
                'city_id' => 42,
            ),
            439 => 
            array (
                'id' => 2940,
                'code' => '073',
                'name' => 'THPT Nguyễn Huệ - Di Linh',
                'district_id' => 482,
                'city_id' => 42,
            ),
            440 => 
            array (
                'id' => 2941,
                'code' => '081',
                'name' => 'THPT Trường Chinh',
                'district_id' => 482,
                'city_id' => 42,
            ),
            441 => 
            array (
                'id' => 2942,
                'code' => '014',
                'name' => 'THPT Hùng Vương',
                'district_id' => 483,
                'city_id' => 42,
            ),
            442 => 
            array (
                'id' => 2943,
                'code' => '015',
                'name' => 'THPT Đơn Dương',
                'district_id' => 483,
                'city_id' => 42,
            ),
            443 => 
            array (
                'id' => 2944,
                'code' => '016',
                'name' => 'THCS & THPT Ngô Gia Tự',
                'district_id' => 483,
                'city_id' => 42,
            ),
            444 => 
            array (
                'id' => 2945,
                'code' => '055',
                'name' => 'THPT Próh -Đơn Dương',
                'district_id' => 483,
                'city_id' => 42,
            ),
            445 => 
            array (
                'id' => 2946,
                'code' => '060',
                'name' => 'THPT Lê Lợi -Đơn Dương',
                'district_id' => 483,
                'city_id' => 42,
            ),
            446 => 
            array (
                'id' => 2947,
                'code' => '066',
                'name' => 'TT KTTH-HN Đơn Dương',
                'district_id' => 483,
                'city_id' => 42,
            ),
            447 => 
            array (
                'id' => 2948,
                'code' => '053',
                'name' => 'THPT Lang Biang',
                'district_id' => 484,
                'city_id' => 42,
            ),
            448 => 
            array (
                'id' => 2949,
                'code' => '074',
                'name' => 'THPT Đạ Sar  Lạc Dương',
                'district_id' => 484,
                'city_id' => 42,
            ),
            449 => 
            array (
                'id' => 2950,
                'code' => '085',
                'name' => 'Trung tâm GDTX Lac Dương',
                'district_id' => 484,
                'city_id' => 42,
            ),
            450 => 
            array (
                'id' => 2951,
                'code' => '030',
                'name' => 'THPT Đạ Huoai',
                'district_id' => 485,
                'city_id' => 42,
            ),
            451 => 
            array (
                'id' => 2952,
                'code' => '042',
                'name' => 'THPT Đạmri -Đạ Huoai',
                'district_id' => 485,
                'city_id' => 42,
            ),
            452 => 
            array (
                'id' => 2953,
                'code' => '067',
                'name' => 'TT KTTH-HN Đạ Huoai',
                'district_id' => 485,
                'city_id' => 42,
            ),
            453 => 
            array (
                'id' => 2954,
                'code' => '032',
                'name' => 'THPT Đạ Tẻh',
                'district_id' => 486,
                'city_id' => 42,
            ),
            454 => 
            array (
                'id' => 2955,
                'code' => '062',
                'name' => 'THPT Lê Quý Đôn -Đạ Tẻh',
                'district_id' => 486,
                'city_id' => 42,
            ),
            455 => 
            array (
                'id' => 2956,
                'code' => '068',
                'name' => 'TT KTTH-HN Đạ Tẻh',
                'district_id' => 486,
                'city_id' => 42,
            ),
            456 => 
            array (
                'id' => 2957,
                'code' => '082',
                'name' => 'THPT TT Nguyễn Khuyến -Đạ Tẻh',
                'district_id' => 486,
                'city_id' => 42,
            ),
            457 => 
            array (
                'id' => 2958,
                'code' => '084',
                'name' => 'Trường THCS&THPT DTNT Liên huyện phía Nam',
                'district_id' => 486,
                'city_id' => 42,
            ),
            458 => 
            array (
                'id' => 2959,
                'code' => '034',
                'name' => 'Trường  THPT Cát Tiên',
                'district_id' => 487,
                'city_id' => 42,
            ),
            459 => 
            array (
                'id' => 2960,
                'code' => '044',
                'name' => 'THPT Gia Viễn-Cát Tiên',
                'district_id' => 487,
                'city_id' => 42,
            ),
            460 => 
            array (
                'id' => 2961,
                'code' => '057',
                'name' => 'TTGDTX Cát Tiên',
                'district_id' => 487,
                'city_id' => 42,
            ),
            461 => 
            array (
                'id' => 2962,
                'code' => '059',
                'name' => 'THPT  Quang Trung -Cát Tiên',
                'district_id' => 487,
                'city_id' => 42,
            ),
            462 => 
            array (
                'id' => 2963,
                'code' => '036',
                'name' => 'THPT Lâm Hà',
                'district_id' => 488,
                'city_id' => 42,
            ),
            463 => 
            array (
                'id' => 2964,
                'code' => '037',
                'name' => 'THPT Thăng Long -Lâm Hà',
                'district_id' => 488,
                'city_id' => 42,
            ),
            464 => 
            array (
                'id' => 2965,
                'code' => '043',
                'name' => 'THPT Tân Hà -Lâm Hà',
                'district_id' => 488,
                'city_id' => 42,
            ),
            465 => 
            array (
                'id' => 2966,
                'code' => '061',
                'name' => 'THPT Lê Quý Đôn -Lâm Hà',
                'district_id' => 488,
                'city_id' => 42,
            ),
            466 => 
            array (
                'id' => 2967,
                'code' => '069',
                'name' => 'TT KTTH-HN  Lâm Hà',
                'district_id' => 488,
                'city_id' => 42,
            ),
            467 => 
            array (
                'id' => 2968,
                'code' => '079',
                'name' => 'THPT Huỳnh Thúc Kháng',
                'district_id' => 488,
                'city_id' => 42,
            ),
            468 => 
            array (
                'id' => 2969,
                'code' => '024',
                'name' => 'THPT Bảo Lâm',
                'district_id' => 489,
                'city_id' => 42,
            ),
            469 => 
            array (
                'id' => 2970,
                'code' => '048',
                'name' => 'THPT Lộc Thành -Bảo Lâm',
                'district_id' => 489,
                'city_id' => 42,
            ),
            470 => 
            array (
                'id' => 2971,
                'code' => '049',
                'name' => 'THPT Lộc An -Bảo Lâm',
                'district_id' => 489,
                'city_id' => 42,
            ),
            471 => 
            array (
                'id' => 2972,
                'code' => '058',
                'name' => 'TT GDTX Bảo Lâm',
                'district_id' => 489,
                'city_id' => 42,
            ),
            472 => 
            array (
                'id' => 2973,
                'code' => '080',
                'name' => 'THPT Lộc Bắc  Bảo Lâm',
                'district_id' => 489,
                'city_id' => 42,
            ),
            473 => 
            array (
                'id' => 2974,
                'code' => '054',
                'name' => 'THPT Đạ Tông',
                'district_id' => 490,
                'city_id' => 42,
            ),
            474 => 
            array (
                'id' => 2975,
                'code' => '076',
                'name' => 'THPT Nguyễn Chí Thanh - Đam Rông',
                'district_id' => 490,
                'city_id' => 42,
            ),
            475 => 
            array (
                'id' => 2976,
                'code' => '086',
                'name' => 'Trung tâm GDTX Đam Rông',
                'district_id' => 490,
                'city_id' => 42,
            ),
            476 => 
            array (
                'id' => 2977,
                'code' => '094',
                'name' => 'THPT Phan Đình Phùng',
                'district_id' => 490,
                'city_id' => 42,
            ),
            477 => 
            array (
                'id' => 2978,
                'code' => '000',
                'name' => 'Sở GD-ĐT Bình Phước',
                'district_id' => 491,
                'city_id' => 43,
            ),
            478 => 
            array (
                'id' => 2979,
                'code' => '001',
                'name' => 'THPT Đồng Xoài',
                'district_id' => 492,
                'city_id' => 43,
            ),
            479 => 
            array (
                'id' => 2980,
                'code' => '002',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 492,
                'city_id' => 43,
            ),
            480 => 
            array (
                'id' => 2981,
                'code' => '003',
                'name' => 'THPT Chuyên Quang Trung',
                'district_id' => 492,
                'city_id' => 43,
            ),
            481 => 
            array (
                'id' => 2982,
                'code' => '004',
                'name' => 'DTNT THPT Tỉnh',
                'district_id' => 492,
                'city_id' => 43,
            ),
            482 => 
            array (
                'id' => 2983,
                'code' => '005',
                'name' => 'THPT Hùng Vương',
                'district_id' => 492,
                'city_id' => 43,
            ),
            483 => 
            array (
                'id' => 2984,
                'code' => '006',
                'name' => 'TT GDTX Tỉnh',
                'district_id' => 492,
                'city_id' => 43,
            ),
            484 => 
            array (
                'id' => 2985,
                'code' => '007',
                'name' => 'THPT Đồng Phú',
                'district_id' => 493,
                'city_id' => 43,
            ),
            485 => 
            array (
                'id' => 2986,
                'code' => '008',
                'name' => 'THCS & THPT Đồng Tiến',
                'district_id' => 493,
                'city_id' => 43,
            ),
            486 => 
            array (
                'id' => 2987,
                'code' => '009',
                'name' => 'TT GDTX Đồng Phú',
                'district_id' => 493,
                'city_id' => 43,
            ),
            487 => 
            array (
                'id' => 2988,
                'code' => '010',
                'name' => 'THPT Chơn Thành',
                'district_id' => 494,
                'city_id' => 43,
            ),
            488 => 
            array (
                'id' => 2989,
                'code' => '011',
                'name' => 'THPT Chu Văn An',
                'district_id' => 494,
                'city_id' => 43,
            ),
            489 => 
            array (
                'id' => 2990,
                'code' => '012',
                'name' => 'THCS & THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 494,
                'city_id' => 43,
            ),
            490 => 
            array (
                'id' => 2991,
                'code' => '013',
                'name' => 'TT GDTX Chơn Thành',
                'district_id' => 494,
                'city_id' => 43,
            ),
            491 => 
            array (
                'id' => 2992,
                'code' => '014',
                'name' => 'TC Nghề Tôn Đức Thắng',
                'district_id' => 494,
                'city_id' => 43,
            ),
            492 => 
            array (
                'id' => 2993,
                'code' => '015',
                'name' => 'THPT Bình Long',
                'district_id' => 495,
                'city_id' => 43,
            ),
            493 => 
            array (
                'id' => 2994,
                'code' => '016',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 495,
                'city_id' => 43,
            ),
            494 => 
            array (
                'id' => 2995,
                'code' => '017',
                'name' => 'TT GDTX Bình Long',
                'district_id' => 495,
                'city_id' => 43,
            ),
            495 => 
            array (
                'id' => 2996,
                'code' => '018',
                'name' => 'THPT Lộc Ninh',
                'district_id' => 496,
                'city_id' => 43,
            ),
            496 => 
            array (
                'id' => 2997,
                'code' => '019',
                'name' => 'THPT Lộc Thái',
                'district_id' => 496,
                'city_id' => 43,
            ),
            497 => 
            array (
                'id' => 2998,
                'code' => '020',
                'name' => 'THPT  Lộc Hiệp',
                'district_id' => 496,
                'city_id' => 43,
            ),
            498 => 
            array (
                'id' => 2999,
                'code' => '021',
                'name' => 'TT GDTX - DN Lộc Ninh',
                'district_id' => 496,
                'city_id' => 43,
            ),
            499 => 
            array (
                'id' => 3000,
                'code' => '022',
                'name' => 'THPT Thanh Hòa',
                'district_id' => 497,
                'city_id' => 43,
            ),
        ));
        \DB::table('organization_school')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'code' => '023',
                'name' => 'THCS & THPT Tân Tiến',
                'district_id' => 497,
                'city_id' => 43,
            ),
            1 => 
            array (
                'id' => 3002,
                'code' => '024',
                'name' => 'TT GDTX - DN Bù Đốp',
                'district_id' => 497,
                'city_id' => 43,
            ),
            2 => 
            array (
                'id' => 3003,
                'code' => '025',
                'name' => 'THPT Phước Long',
                'district_id' => 498,
                'city_id' => 43,
            ),
            3 => 
            array (
                'id' => 3004,
                'code' => '026',
                'name' => 'THPT Phước Bình',
                'district_id' => 498,
                'city_id' => 43,
            ),
            4 => 
            array (
                'id' => 3005,
                'code' => '027',
                'name' => 'TT GDTX Phước Long',
                'district_id' => 498,
                'city_id' => 43,
            ),
            5 => 
            array (
                'id' => 3006,
                'code' => '028',
                'name' => 'THPT Bù Đăng',
                'district_id' => 499,
                'city_id' => 43,
            ),
            6 => 
            array (
                'id' => 3007,
                'code' => '029',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 499,
                'city_id' => 43,
            ),
            7 => 
            array (
                'id' => 3008,
                'code' => '030',
                'name' => 'THPT Thống Nhất',
                'district_id' => 499,
                'city_id' => 43,
            ),
            8 => 
            array (
                'id' => 3009,
                'code' => '031',
                'name' => 'THCS & THPT Lương Thế Vinh',
                'district_id' => 499,
                'city_id' => 43,
            ),
            9 => 
            array (
                'id' => 3010,
                'code' => '032',
                'name' => 'THCS & THPT Đăng Hà',
                'district_id' => 499,
                'city_id' => 43,
            ),
            10 => 
            array (
                'id' => 3011,
                'code' => '033',
                'name' => 'TT GDTX Bù Đăng',
                'district_id' => 499,
                'city_id' => 43,
            ),
            11 => 
            array (
                'id' => 3012,
                'code' => '034',
                'name' => 'THPT Nguyễn Hữu Cảnh',
                'district_id' => 500,
                'city_id' => 43,
            ),
            12 => 
            array (
                'id' => 3013,
                'code' => '035',
                'name' => 'THPT Trần Phú',
                'district_id' => 500,
                'city_id' => 43,
            ),
            13 => 
            array (
                'id' => 3014,
                'code' => '036',
                'name' => 'THPT Phú Riềng',
                'district_id' => 501,
                'city_id' => 43,
            ),
            14 => 
            array (
                'id' => 3015,
                'code' => '037',
                'name' => 'THPT Nguyễn Khuyến',
                'district_id' => 501,
                'city_id' => 43,
            ),
            15 => 
            array (
                'id' => 3016,
                'code' => '038',
                'name' => 'THPT Ngô Quyền',
                'district_id' => 501,
                'city_id' => 43,
            ),
            16 => 
            array (
                'id' => 3017,
                'code' => '039',
                'name' => 'THPT Đắc Ơ',
                'district_id' => 501,
                'city_id' => 43,
            ),
            17 => 
            array (
                'id' => 3018,
                'code' => '040',
                'name' => 'THCS & THPT Đa Kia',
                'district_id' => 501,
                'city_id' => 43,
            ),
            18 => 
            array (
                'id' => 3019,
                'code' => '041',
                'name' => 'THCS & THPT Võ Thị Sáu',
                'district_id' => 501,
                'city_id' => 43,
            ),
            19 => 
            array (
                'id' => 3020,
                'code' => '000',
                'name' => 'Sở Giáo dục và Đào tạo',
                'district_id' => 502,
                'city_id' => 44,
            ),
            20 => 
            array (
                'id' => 3021,
                'code' => '001',
                'name' => 'Trung tâm GDTX tỉnh Bình Dương',
                'district_id' => 502,
                'city_id' => 44,
            ),
            21 => 
            array (
                'id' => 3022,
                'code' => '002',
                'name' => 'THPT chuyên Hùng Vương',
                'district_id' => 502,
                'city_id' => 44,
            ),
            22 => 
            array (
                'id' => 3023,
                'code' => '003',
                'name' => 'THPT Võ Minh Đức',
                'district_id' => 502,
                'city_id' => 44,
            ),
            23 => 
            array (
                'id' => 3024,
                'code' => '004',
                'name' => 'THPT An Mỹ',
                'district_id' => 502,
                'city_id' => 44,
            ),
            24 => 
            array (
                'id' => 3025,
                'code' => '005',
                'name' => 'THPT Nguyễn Đình Chiểu',
                'district_id' => 502,
                'city_id' => 44,
            ),
            25 => 
            array (
                'id' => 3026,
                'code' => '006',
                'name' => 'Trường Tư thục Trung Tiểu học PETRUS -KY',
                'district_id' => 502,
                'city_id' => 44,
            ),
            26 => 
            array (
                'id' => 3027,
                'code' => '008',
                'name' => 'THPT Bình Phú',
                'district_id' => 502,
                'city_id' => 44,
            ),
            27 => 
            array (
                'id' => 3028,
                'code' => '035',
                'name' => 'Trường Tư thục Trung tiểu học Ngô Thời Nhiệm',
                'district_id' => 502,
                'city_id' => 44,
            ),
            28 => 
            array (
                'id' => 3029,
                'code' => '040',
                'name' => 'Trường TCN tỉnh Bình Dương',
                'district_id' => 502,
                'city_id' => 44,
            ),
            29 => 
            array (
                'id' => 3030,
                'code' => '043',
                'name' => 'Trường TCN Việt Hàn Bình Dương',
                'district_id' => 502,
                'city_id' => 44,
            ),
            30 => 
            array (
                'id' => 3031,
                'code' => '045',
                'name' => 'Trường THCS-THPT Nguyễn Khuyến',
                'district_id' => 502,
                'city_id' => 44,
            ),
            31 => 
            array (
                'id' => 3032,
                'code' => '046',
                'name' => 'Trường TCN Khu Công nghiệp',
                'district_id' => 502,
                'city_id' => 44,
            ),
            32 => 
            array (
                'id' => 3033,
                'code' => '047',
                'name' => 'TCN Nghiệp vụ Bình Dương',
                'district_id' => 502,
                'city_id' => 44,
            ),
            33 => 
            array (
                'id' => 3034,
                'code' => '048',
                'name' => 'Trường Tư thục Trung tiểu học Việt Anh',
                'district_id' => 502,
                'city_id' => 44,
            ),
            34 => 
            array (
                'id' => 3035,
                'code' => '007',
                'name' => 'TTGDTX- KTHN H. Bến Cát',
                'district_id' => 503,
                'city_id' => 44,
            ),
            35 => 
            array (
                'id' => 3036,
                'code' => '009',
                'name' => 'THPT Bến Cát',
                'district_id' => 503,
                'city_id' => 44,
            ),
            36 => 
            array (
                'id' => 3037,
                'code' => '010',
                'name' => 'THPT Tây Nam',
                'district_id' => 503,
                'city_id' => 44,
            ),
            37 => 
            array (
                'id' => 3038,
                'code' => '012',
                'name' => 'TTGDTX- KTHN H. Tân Uyên',
                'district_id' => 504,
                'city_id' => 44,
            ),
            38 => 
            array (
                'id' => 3039,
                'code' => '013',
                'name' => 'THPT Huỳnh Văn Nghệ',
                'district_id' => 504,
                'city_id' => 44,
            ),
            39 => 
            array (
                'id' => 3040,
                'code' => '014',
                'name' => 'THPT Tân Phước Khánh',
                'district_id' => 504,
                'city_id' => 44,
            ),
            40 => 
            array (
                'id' => 3041,
                'code' => '015',
                'name' => 'THPT Thái Hoà',
                'district_id' => 504,
                'city_id' => 44,
            ),
            41 => 
            array (
                'id' => 3042,
                'code' => '044',
                'name' => 'Trường TCN Tân Uyên',
                'district_id' => 504,
                'city_id' => 44,
            ),
            42 => 
            array (
                'id' => 3043,
                'code' => '019',
                'name' => 'TTGDTX-KTHN TX. Thuận An',
                'district_id' => 505,
                'city_id' => 44,
            ),
            43 => 
            array (
                'id' => 3044,
                'code' => '020',
                'name' => 'THPT Trịnh Hoài Đức',
                'district_id' => 505,
                'city_id' => 44,
            ),
            44 => 
            array (
                'id' => 3045,
                'code' => '021',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 505,
                'city_id' => 44,
            ),
            45 => 
            array (
                'id' => 3046,
                'code' => '022',
                'name' => 'THPT Trần Văn Ơn',
                'district_id' => 505,
                'city_id' => 44,
            ),
            46 => 
            array (
                'id' => 3047,
                'code' => '036',
                'name' => 'Trường CĐN Việt Nam - Singapore',
                'district_id' => 505,
                'city_id' => 44,
            ),
            47 => 
            array (
                'id' => 3048,
                'code' => '041',
                'name' => 'Trường TCN KT và NV Công đoàn',
                'district_id' => 505,
                'city_id' => 44,
            ),
            48 => 
            array (
                'id' => 3049,
                'code' => '049',
                'name' => 'Trường Tư thục Trung tiểu học Đức Trí',
                'district_id' => 505,
                'city_id' => 44,
            ),
            49 => 
            array (
                'id' => 3050,
                'code' => '023',
                'name' => 'TTGDTX- KTHN TX. Dĩ An',
                'district_id' => 506,
                'city_id' => 44,
            ),
            50 => 
            array (
                'id' => 3051,
                'code' => '024',
                'name' => 'THPT Dĩ An',
                'district_id' => 506,
                'city_id' => 44,
            ),
            51 => 
            array (
                'id' => 3052,
                'code' => '025',
                'name' => 'THPT Nguyễn An Ninh',
                'district_id' => 506,
                'city_id' => 44,
            ),
            52 => 
            array (
                'id' => 3053,
                'code' => '026',
                'name' => 'THPT Bình An',
                'district_id' => 506,
                'city_id' => 44,
            ),
            53 => 
            array (
                'id' => 3054,
                'code' => '037',
                'name' => 'Trường CĐN Đồng An',
                'district_id' => 506,
                'city_id' => 44,
            ),
            54 => 
            array (
                'id' => 3055,
                'code' => '038',
                'name' => 'Trường CĐN Công nghệ và NL Nam Bộ',
                'district_id' => 506,
                'city_id' => 44,
            ),
            55 => 
            array (
                'id' => 3056,
                'code' => '039',
                'name' => 'Phân hiệu CĐN  Đường sắt phía Nam',
                'district_id' => 506,
                'city_id' => 44,
            ),
            56 => 
            array (
                'id' => 3057,
                'code' => '042',
                'name' => 'Trường TCN Dĩ An',
                'district_id' => 506,
                'city_id' => 44,
            ),
            57 => 
            array (
                'id' => 3058,
                'code' => '050',
                'name' => 'Trường Tư thục THPT Phan Chu Trinh',
                'district_id' => 506,
                'city_id' => 44,
            ),
            58 => 
            array (
                'id' => 3059,
                'code' => '027',
                'name' => 'TTGDTX- KTHN H. Phú Giáo',
                'district_id' => 507,
                'city_id' => 44,
            ),
            59 => 
            array (
                'id' => 3060,
                'code' => '028',
                'name' => 'THPT Phước Vĩnh',
                'district_id' => 507,
                'city_id' => 44,
            ),
            60 => 
            array (
                'id' => 3061,
                'code' => '029',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 507,
                'city_id' => 44,
            ),
            61 => 
            array (
                'id' => 3062,
                'code' => '030',
                'name' => 'THPT Tây Sơn',
                'district_id' => 507,
                'city_id' => 44,
            ),
            62 => 
            array (
                'id' => 3063,
                'code' => '031',
                'name' => 'TTGDTX- KTHN H. Dầu Tiếng',
                'district_id' => 508,
                'city_id' => 44,
            ),
            63 => 
            array (
                'id' => 3064,
                'code' => '032',
                'name' => 'THPT Dầu Tiếng',
                'district_id' => 508,
                'city_id' => 44,
            ),
            64 => 
            array (
                'id' => 3065,
                'code' => '033',
                'name' => 'THPT Thanh Tuyền',
                'district_id' => 508,
                'city_id' => 44,
            ),
            65 => 
            array (
                'id' => 3066,
                'code' => '034',
                'name' => 'THPT Phan Bội Châu',
                'district_id' => 508,
                'city_id' => 44,
            ),
            66 => 
            array (
                'id' => 3067,
                'code' => '016',
                'name' => 'THPT Tân Bình',
                'district_id' => 509,
                'city_id' => 44,
            ),
            67 => 
            array (
                'id' => 3068,
                'code' => '017',
                'name' => 'THPT Thường Tân',
                'district_id' => 509,
                'city_id' => 44,
            ),
            68 => 
            array (
                'id' => 3069,
                'code' => '018',
                'name' => 'THPT Lê Lợi',
                'district_id' => 509,
                'city_id' => 44,
            ),
            69 => 
            array (
                'id' => 3070,
                'code' => '011',
                'name' => 'THPT Bàu Bàng',
                'district_id' => 510,
                'city_id' => 44,
            ),
            70 => 
            array (
                'id' => 3071,
                'code' => '001',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 511,
                'city_id' => 45,
            ),
            71 => 
            array (
                'id' => 3072,
                'code' => '005',
                'name' => 'TTGDTX Ninh Thuận',
                'district_id' => 511,
                'city_id' => 45,
            ),
            72 => 
            array (
                'id' => 3073,
                'code' => '006',
                'name' => 'THPT Dân tộc nội trú Ninh Thuận',
                'district_id' => 511,
                'city_id' => 45,
            ),
            73 => 
            array (
                'id' => 3074,
                'code' => '007',
                'name' => 'THPT Tháp Chàm',
                'district_id' => 511,
                'city_id' => 45,
            ),
            74 => 
            array (
                'id' => 3075,
                'code' => '008',
                'name' => 'THPT  Ischool',
                'district_id' => 511,
                'city_id' => 45,
            ),
            75 => 
            array (
                'id' => 3076,
                'code' => '009',
                'name' => 'THPT Chu Văn An',
                'district_id' => 511,
                'city_id' => 45,
            ),
            76 => 
            array (
                'id' => 3077,
                'code' => '014',
                'name' => 'TT KTTH-HN Phan Rang',
                'district_id' => 511,
                'city_id' => 45,
            ),
            77 => 
            array (
                'id' => 3078,
                'code' => '017',
                'name' => 'THPT chuyên Lê Quí Đôn',
                'district_id' => 511,
                'city_id' => 45,
            ),
            78 => 
            array (
                'id' => 3079,
                'code' => '021',
                'name' => 'Tr. CĐ nghề Ninh Thuận',
                'district_id' => 511,
                'city_id' => 45,
            ),
            79 => 
            array (
                'id' => 3080,
                'code' => '002',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 512,
                'city_id' => 45,
            ),
            80 => 
            array (
                'id' => 3081,
                'code' => '012',
                'name' => 'TT GDTX-DN-HN Ninh Sơn',
                'district_id' => 512,
                'city_id' => 45,
            ),
            81 => 
            array (
                'id' => 3082,
                'code' => '013',
                'name' => 'THPT Trường Chinh',
                'district_id' => 512,
                'city_id' => 45,
            ),
            82 => 
            array (
                'id' => 3083,
                'code' => '019',
                'name' => 'THPT Lê Duẩn',
                'district_id' => 512,
                'city_id' => 45,
            ),
            83 => 
            array (
                'id' => 3084,
                'code' => '003',
                'name' => 'THPT Ninh Hải',
                'district_id' => 513,
                'city_id' => 45,
            ),
            84 => 
            array (
                'id' => 3085,
                'code' => '016',
                'name' => 'THPT Tôn Đức Thắng',
                'district_id' => 513,
                'city_id' => 45,
            ),
            85 => 
            array (
                'id' => 3086,
                'code' => '023',
                'name' => 'THPT  Phan Chu Trinh',
                'district_id' => 513,
                'city_id' => 45,
            ),
            86 => 
            array (
                'id' => 3087,
                'code' => '004',
                'name' => 'THPT An Phước',
                'district_id' => 514,
                'city_id' => 45,
            ),
            87 => 
            array (
                'id' => 3088,
                'code' => '010',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 514,
                'city_id' => 45,
            ),
            88 => 
            array (
                'id' => 3089,
                'code' => '011',
                'name' => 'TT GDTX-DN-HN Ninh Phước',
                'district_id' => 514,
                'city_id' => 45,
            ),
            89 => 
            array (
                'id' => 3090,
                'code' => '015',
                'name' => 'THPT Phạm Văn Đồng',
                'district_id' => 514,
                'city_id' => 45,
            ),
            90 => 
            array (
                'id' => 3091,
                'code' => '018',
                'name' => 'THPT Bác ái',
                'district_id' => 515,
                'city_id' => 45,
            ),
            91 => 
            array (
                'id' => 3092,
                'code' => '024',
                'name' => 'Phổ thông Dân tộc nội trú Pinăng Tắc',
                'district_id' => 515,
                'city_id' => 45,
            ),
            92 => 
            array (
                'id' => 3093,
                'code' => '022',
                'name' => 'THPT  Phan Bội Châu',
                'district_id' => 516,
                'city_id' => 45,
            ),
            93 => 
            array (
                'id' => 3094,
                'code' => '020',
                'name' => 'THPT Nguyễn Văn Linh',
                'district_id' => 517,
                'city_id' => 45,
            ),
            94 => 
            array (
                'id' => 3095,
                'code' => '001',
                'name' => 'THPT Trần Đại Nghĩa',
                'district_id' => 518,
                'city_id' => 46,
            ),
            95 => 
            array (
                'id' => 3096,
                'code' => '002',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 518,
                'city_id' => 46,
            ),
            96 => 
            array (
                'id' => 3097,
                'code' => '003',
                'name' => 'THPT chuyên Hoàng Lê Kha',
                'district_id' => 518,
                'city_id' => 46,
            ),
            97 => 
            array (
                'id' => 3098,
                'code' => '004',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 518,
                'city_id' => 46,
            ),
            98 => 
            array (
                'id' => 3099,
                'code' => '005',
                'name' => 'THPT Tây Ninh',
                'district_id' => 518,
                'city_id' => 46,
            ),
            99 => 
            array (
                'id' => 3100,
                'code' => '006',
                'name' => 'Trường Phổ thông dân tộc nội trú tỉnhTây Ninh',
                'district_id' => 518,
                'city_id' => 46,
            ),
            100 => 
            array (
                'id' => 3101,
                'code' => '007',
                'name' => 'TTGDTX Thành phố Tây Ninh',
                'district_id' => 518,
                'city_id' => 46,
            ),
            101 => 
            array (
                'id' => 3102,
                'code' => '008',
                'name' => 'TC Tân Bách Khoa',
                'district_id' => 518,
                'city_id' => 46,
            ),
            102 => 
            array (
                'id' => 3103,
                'code' => '009',
                'name' => 'TC Y tế Tây Ninh',
                'district_id' => 518,
                'city_id' => 46,
            ),
            103 => 
            array (
                'id' => 3104,
                'code' => '010',
                'name' => 'Cao đẳng Nghề Tây Ninh',
                'district_id' => 518,
                'city_id' => 46,
            ),
            104 => 
            array (
                'id' => 3105,
                'code' => '011',
                'name' => 'THPT Trần Phú',
                'district_id' => 519,
                'city_id' => 46,
            ),
            105 => 
            array (
                'id' => 3106,
                'code' => '012',
                'name' => 'THPT Nguyễn An Ninh',
                'district_id' => 519,
                'city_id' => 46,
            ),
            106 => 
            array (
                'id' => 3107,
                'code' => '013',
                'name' => 'THPT Lương Thế Vinh',
                'district_id' => 519,
                'city_id' => 46,
            ),
            107 => 
            array (
                'id' => 3108,
                'code' => '014',
                'name' => 'TTGDTX Tân Biên',
                'district_id' => 519,
                'city_id' => 46,
            ),
            108 => 
            array (
                'id' => 3109,
                'code' => '015',
                'name' => 'THPT Tân Châu',
                'district_id' => 520,
                'city_id' => 46,
            ),
            109 => 
            array (
                'id' => 3110,
                'code' => '016',
                'name' => 'THPT Lê Duẩn',
                'district_id' => 520,
                'city_id' => 46,
            ),
            110 => 
            array (
                'id' => 3111,
                'code' => '017',
                'name' => 'THPT Tân Hưng',
                'district_id' => 520,
                'city_id' => 46,
            ),
            111 => 
            array (
                'id' => 3112,
                'code' => '018',
                'name' => 'THPT Tân Đông',
                'district_id' => 520,
                'city_id' => 46,
            ),
            112 => 
            array (
                'id' => 3113,
                'code' => '019',
                'name' => 'TTGDTX Tân Châu',
                'district_id' => 520,
                'city_id' => 46,
            ),
            113 => 
            array (
                'id' => 3114,
                'code' => '020',
                'name' => 'THPT Dương Minh  Châu',
                'district_id' => 521,
                'city_id' => 46,
            ),
            114 => 
            array (
                'id' => 3115,
                'code' => '021',
                'name' => 'THPT Nguyễn Đình Chiểu',
                'district_id' => 521,
                'city_id' => 46,
            ),
            115 => 
            array (
                'id' => 3116,
                'code' => '022',
                'name' => 'THPT Nguyễn Thái Bình',
                'district_id' => 521,
                'city_id' => 46,
            ),
            116 => 
            array (
                'id' => 3117,
                'code' => '023',
                'name' => 'TTGDTX   Dương Minh Châu',
                'district_id' => 521,
                'city_id' => 46,
            ),
            117 => 
            array (
                'id' => 3118,
                'code' => '024',
                'name' => 'THPT Hoàng Văn Thụ',
                'district_id' => 522,
                'city_id' => 46,
            ),
            118 => 
            array (
                'id' => 3119,
                'code' => '025',
                'name' => 'THPT Châu Thành',
                'district_id' => 522,
                'city_id' => 46,
            ),
            119 => 
            array (
                'id' => 3120,
                'code' => '026',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 522,
                'city_id' => 46,
            ),
            120 => 
            array (
                'id' => 3121,
                'code' => '027',
                'name' => 'TTGDTX  Châu Thành',
                'district_id' => 522,
                'city_id' => 46,
            ),
            121 => 
            array (
                'id' => 3122,
                'code' => '028',
                'name' => 'TC Kinh tế - Kỹ thuật Tây Ninh',
                'district_id' => 522,
                'city_id' => 46,
            ),
            122 => 
            array (
                'id' => 3123,
                'code' => '029',
                'name' => 'THPT Lý Thường Kiệt',
                'district_id' => 523,
                'city_id' => 46,
            ),
            123 => 
            array (
                'id' => 3124,
                'code' => '030',
                'name' => 'THPT Nguyễn Chí Thanh',
                'district_id' => 523,
                'city_id' => 46,
            ),
            124 => 
            array (
                'id' => 3125,
                'code' => '031',
                'name' => 'THPT Nguyễn Trung Trực',
                'district_id' => 523,
                'city_id' => 46,
            ),
            125 => 
            array (
                'id' => 3126,
                'code' => '032',
                'name' => 'TTGDTX Hoà Thành',
                'district_id' => 523,
                'city_id' => 46,
            ),
            126 => 
            array (
                'id' => 3127,
                'code' => '033',
                'name' => 'TTGDTX Tỉnh Tây Ninh',
                'district_id' => 523,
                'city_id' => 46,
            ),
            127 => 
            array (
                'id' => 3128,
                'code' => '034',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 524,
                'city_id' => 46,
            ),
            128 => 
            array (
                'id' => 3129,
                'code' => '035',
                'name' => 'THPT  Huỳnh Thúc Kháng',
                'district_id' => 524,
                'city_id' => 46,
            ),
            129 => 
            array (
                'id' => 3130,
                'code' => '036',
                'name' => 'TTGDTX Bến Cầu',
                'district_id' => 524,
                'city_id' => 46,
            ),
            130 => 
            array (
                'id' => 3131,
                'code' => '037',
                'name' => 'THPT Quang Trung',
                'district_id' => 525,
                'city_id' => 46,
            ),
            131 => 
            array (
                'id' => 3132,
                'code' => '038',
                'name' => 'THPT Nguyễn Văn Trỗi',
                'district_id' => 525,
                'city_id' => 46,
            ),
            132 => 
            array (
                'id' => 3133,
                'code' => '039',
                'name' => 'THPT Trần Quốc Đại',
                'district_id' => 525,
                'city_id' => 46,
            ),
            133 => 
            array (
                'id' => 3134,
                'code' => '040',
                'name' => 'THPT Ngô Gia Tự',
                'district_id' => 525,
                'city_id' => 46,
            ),
            134 => 
            array (
                'id' => 3135,
                'code' => '041',
                'name' => 'TTGDTX Gò Dầu',
                'district_id' => 525,
                'city_id' => 46,
            ),
            135 => 
            array (
                'id' => 3136,
                'code' => '042',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 526,
                'city_id' => 46,
            ),
            136 => 
            array (
                'id' => 3137,
                'code' => '043',
                'name' => 'THPT  Trảng Bàng',
                'district_id' => 526,
                'city_id' => 46,
            ),
            137 => 
            array (
                'id' => 3138,
                'code' => '044',
                'name' => 'THPT Lộc Hưng',
                'district_id' => 526,
                'city_id' => 46,
            ),
            138 => 
            array (
                'id' => 3139,
                'code' => '045',
                'name' => 'THPT Bình Thạnh',
                'district_id' => 526,
                'city_id' => 46,
            ),
            139 => 
            array (
                'id' => 3140,
                'code' => '046',
                'name' => 'TTGDTX Trảng Bàng',
                'district_id' => 526,
                'city_id' => 46,
            ),
            140 => 
            array (
                'id' => 3141,
                'code' => '047',
                'name' => 'TC nghề khu vực Nam Tây Ninh',
                'district_id' => 526,
                'city_id' => 46,
            ),
            141 => 
            array (
                'id' => 3142,
                'code' => '001',
                'name' => 'THPT Phan Bội Châu',
                'district_id' => 527,
                'city_id' => 47,
            ),
            142 => 
            array (
                'id' => 3143,
                'code' => '012',
                'name' => 'THPT Phan Chu Trinh',
                'district_id' => 527,
                'city_id' => 47,
            ),
            143 => 
            array (
                'id' => 3144,
                'code' => '013',
                'name' => 'THPT Chuyên Trần Hưng Đạo',
                'district_id' => 527,
                'city_id' => 47,
            ),
            144 => 
            array (
                'id' => 3145,
                'code' => '017',
                'name' => 'THCS và THPT Lê Lợi',
                'district_id' => 527,
                'city_id' => 47,
            ),
            145 => 
            array (
                'id' => 3146,
                'code' => '022',
                'name' => 'TH Bổ túc Phan Bội Châu',
                'district_id' => 527,
                'city_id' => 47,
            ),
            146 => 
            array (
                'id' => 3147,
                'code' => '032',
                'name' => 'THPT Bùi Thị Xuân',
                'district_id' => 527,
                'city_id' => 47,
            ),
            147 => 
            array (
                'id' => 3148,
                'code' => '034',
                'name' => 'Trường TC Nghề Kinh tế - Kỹ thuật CĐ Bình Thuận',
                'district_id' => 527,
                'city_id' => 47,
            ),
            148 => 
            array (
                'id' => 3149,
                'code' => '035',
                'name' => 'CĐ Nghề Bình Thuận',
                'district_id' => 527,
                'city_id' => 47,
            ),
            149 => 
            array (
                'id' => 3150,
                'code' => '036',
                'name' => 'THPT Phan Thiết',
                'district_id' => 527,
                'city_id' => 47,
            ),
            150 => 
            array (
                'id' => 3151,
                'code' => '037',
                'name' => 'TH, THCS và THPT Lê Quý Đôn',
                'district_id' => 527,
                'city_id' => 47,
            ),
            151 => 
            array (
                'id' => 3152,
                'code' => '038',
                'name' => 'TH, THCS, THPT Châu A\' Thái Bình Dương',
                'district_id' => 527,
                'city_id' => 47,
            ),
            152 => 
            array (
                'id' => 3153,
                'code' => '040',
                'name' => 'Trường TC Du lịch Mũi Né',
                'district_id' => 527,
                'city_id' => 47,
            ),
            153 => 
            array (
                'id' => 3154,
                'code' => '041',
                'name' => 'CĐ Cộng đồng Bình Thuận',
                'district_id' => 527,
                'city_id' => 47,
            ),
            154 => 
            array (
                'id' => 3155,
                'code' => '042',
                'name' => 'CĐ Y tế Bình Thuận',
                'district_id' => 527,
                'city_id' => 47,
            ),
            155 => 
            array (
                'id' => 3156,
                'code' => '043',
                'name' => 'Trường Đại học Phan Thiết',
                'district_id' => 527,
                'city_id' => 47,
            ),
            156 => 
            array (
                'id' => 3157,
                'code' => '002',
                'name' => 'THPT Tuy Phong',
                'district_id' => 528,
                'city_id' => 47,
            ),
            157 => 
            array (
                'id' => 3158,
                'code' => '009',
                'name' => 'THPT Hòa Đa',
                'district_id' => 528,
                'city_id' => 47,
            ),
            158 => 
            array (
                'id' => 3159,
                'code' => '020',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 528,
                'city_id' => 47,
            ),
            159 => 
            array (
                'id' => 3160,
                'code' => '021',
                'name' => 'THPT Nguyễn Khuyến',
                'district_id' => 528,
                'city_id' => 47,
            ),
            160 => 
            array (
                'id' => 3161,
                'code' => '003',
                'name' => 'THPT Bắc Bình',
                'district_id' => 529,
                'city_id' => 47,
            ),
            161 => 
            array (
                'id' => 3162,
                'code' => '015',
                'name' => 'THPT Nguyễn Thị Minh Khai',
                'district_id' => 529,
                'city_id' => 47,
            ),
            162 => 
            array (
                'id' => 3163,
                'code' => '027',
                'name' => 'TT GDTX-HN Bắc Bình',
                'district_id' => 529,
                'city_id' => 47,
            ),
            163 => 
            array (
                'id' => 3164,
                'code' => '004',
                'name' => 'THPT Hàm Thuận Bắc',
                'district_id' => 530,
                'city_id' => 47,
            ),
            164 => 
            array (
                'id' => 3165,
                'code' => '010',
                'name' => 'THPT Dân tộc nội trú Tỉnh',
                'district_id' => 530,
                'city_id' => 47,
            ),
            165 => 
            array (
                'id' => 3166,
                'code' => '031',
                'name' => 'THPT Nguyễn Văn Linh',
                'district_id' => 530,
                'city_id' => 47,
            ),
            166 => 
            array (
                'id' => 3167,
                'code' => '005',
                'name' => 'THPT Hàm Thuận Nam',
                'district_id' => 531,
                'city_id' => 47,
            ),
            167 => 
            array (
                'id' => 3168,
                'code' => '030',
                'name' => 'THPT Lương Thế Vinh',
                'district_id' => 531,
                'city_id' => 47,
            ),
            168 => 
            array (
                'id' => 3169,
                'code' => '014',
                'name' => 'THPT Đức Tân',
                'district_id' => 532,
                'city_id' => 47,
            ),
            169 => 
            array (
                'id' => 3170,
                'code' => '033',
                'name' => 'THPT Hàm Tân',
                'district_id' => 532,
                'city_id' => 47,
            ),
            170 => 
            array (
                'id' => 3171,
                'code' => '039',
                'name' => 'THPT Huỳnh Thúc Kháng',
                'district_id' => 532,
                'city_id' => 47,
            ),
            171 => 
            array (
                'id' => 3172,
                'code' => '007',
                'name' => 'THPT Đức Linh',
                'district_id' => 533,
                'city_id' => 47,
            ),
            172 => 
            array (
                'id' => 3173,
                'code' => '016',
                'name' => 'THPT Chu Văn An',
                'district_id' => 533,
                'city_id' => 47,
            ),
            173 => 
            array (
                'id' => 3174,
                'code' => '019',
                'name' => 'THPT Hùng Vương',
                'district_id' => 533,
                'city_id' => 47,
            ),
            174 => 
            array (
                'id' => 3175,
                'code' => '023',
                'name' => 'TT GDTX-HN Đức Linh',
                'district_id' => 533,
                'city_id' => 47,
            ),
            175 => 
            array (
                'id' => 3176,
                'code' => '025',
                'name' => 'THPT Quang Trung',
                'district_id' => 533,
                'city_id' => 47,
            ),
            176 => 
            array (
                'id' => 3177,
                'code' => '008',
                'name' => 'THPT Tánh Linh',
                'district_id' => 534,
                'city_id' => 47,
            ),
            177 => 
            array (
                'id' => 3178,
                'code' => '026',
                'name' => 'THPT Nguyễn Văn Trỗi',
                'district_id' => 534,
                'city_id' => 47,
            ),
            178 => 
            array (
                'id' => 3179,
                'code' => '028',
                'name' => 'TT GDTX-HN Tánh Linh',
                'district_id' => 534,
                'city_id' => 47,
            ),
            179 => 
            array (
                'id' => 3180,
                'code' => '018',
                'name' => 'THPT Ngô Quyền',
                'district_id' => 535,
                'city_id' => 47,
            ),
            180 => 
            array (
                'id' => 3181,
                'code' => '006',
                'name' => 'THPT Lý Thường Kiệt',
                'district_id' => 536,
                'city_id' => 47,
            ),
            181 => 
            array (
                'id' => 3182,
                'code' => '011',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 536,
                'city_id' => 47,
            ),
            182 => 
            array (
                'id' => 3183,
                'code' => '024',
                'name' => 'TT GDTX-HN La Gi',
                'district_id' => 536,
                'city_id' => 47,
            ),
            183 => 
            array (
                'id' => 3184,
                'code' => '029',
                'name' => 'THPT Nguyễn Trường Tộ',
                'district_id' => 536,
                'city_id' => 47,
            ),
            184 => 
            array (
                'id' => 3185,
                'code' => '000',
                'name' => 'Sở GD&ĐT',
                'district_id' => 537,
                'city_id' => 48,
            ),
            185 => 
            array (
                'id' => 3186,
                'code' => '001',
                'name' => 'THPT Chuyên Lương Thế Vinh',
                'district_id' => 537,
                'city_id' => 48,
            ),
            186 => 
            array (
                'id' => 3187,
                'code' => '002',
                'name' => 'Bổ Túc Văn Hóa Tỉnh',
                'district_id' => 537,
                'city_id' => 48,
            ),
            187 => 
            array (
                'id' => 3188,
                'code' => '003',
                'name' => 'THPT Ngô Quyền',
                'district_id' => 537,
                'city_id' => 48,
            ),
            188 => 
            array (
                'id' => 3189,
                'code' => '004',
                'name' => 'THPT Nam Hà',
                'district_id' => 537,
                'city_id' => 48,
            ),
            189 => 
            array (
                'id' => 3190,
                'code' => '005',
                'name' => 'THPT  Tam Hiệp',
                'district_id' => 537,
                'city_id' => 48,
            ),
            190 => 
            array (
                'id' => 3191,
                'code' => '006',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 537,
                'city_id' => 48,
            ),
            191 => 
            array (
                'id' => 3192,
                'code' => '007',
                'name' => 'THPT  Lê Hồng Phong',
                'district_id' => 537,
                'city_id' => 48,
            ),
            192 => 
            array (
                'id' => 3193,
                'code' => '008',
                'name' => 'THPT  Chu Văn An',
                'district_id' => 537,
                'city_id' => 48,
            ),
            193 => 
            array (
                'id' => 3194,
                'code' => '040',
                'name' => 'THPT Tam Phước',
                'district_id' => 537,
                'city_id' => 48,
            ),
            194 => 
            array (
                'id' => 3195,
                'code' => '041',
                'name' => 'THPT Tư thục Nguyễn Khuyến',
                'district_id' => 537,
                'city_id' => 48,
            ),
            195 => 
            array (
                'id' => 3196,
                'code' => '042',
                'name' => 'THPT tư thục Đức Trí',
                'district_id' => 537,
                'city_id' => 48,
            ),
            196 => 
            array (
                'id' => 3197,
                'code' => '043',
                'name' => 'THPT Nguyễn Hữu Cảnh',
                'district_id' => 537,
                'city_id' => 48,
            ),
            197 => 
            array (
                'id' => 3198,
                'code' => '044',
                'name' => 'THPT Tư thục Lê Quý Đôn',
                'district_id' => 537,
                'city_id' => 48,
            ),
            198 => 
            array (
                'id' => 3199,
                'code' => '047',
                'name' => 'THPT DL Bùi Thị Xuân',
                'district_id' => 537,
                'city_id' => 48,
            ),
            199 => 
            array (
                'id' => 3200,
                'code' => '049',
                'name' => 'TT GDTX Biên Hòa',
                'district_id' => 537,
                'city_id' => 48,
            ),
            200 => 
            array (
                'id' => 3201,
                'code' => '053',
                'name' => 'THPT Trấn Biên',
                'district_id' => 537,
                'city_id' => 48,
            ),
            201 => 
            array (
                'id' => 3202,
                'code' => '067',
                'name' => 'THPT Đinh Tiên Hoàng',
                'district_id' => 537,
                'city_id' => 48,
            ),
            202 => 
            array (
                'id' => 3203,
                'code' => '069',
                'name' => 'PT Năng Khiếu Thể Thao',
                'district_id' => 537,
                'city_id' => 48,
            ),
            203 => 
            array (
                'id' => 3204,
                'code' => '070',
                'name' => 'CĐ nghề Đồng Nai',
                'district_id' => 537,
                'city_id' => 48,
            ),
            204 => 
            array (
                'id' => 3205,
                'code' => '071',
                'name' => 'CĐ nghề Miền Đông Nam Bộ',
                'district_id' => 537,
                'city_id' => 48,
            ),
            205 => 
            array (
                'id' => 3206,
                'code' => '074',
                'name' => 'TC nghề GTVT Đồng Nai',
                'district_id' => 537,
                'city_id' => 48,
            ),
            206 => 
            array (
                'id' => 3207,
                'code' => '075',
                'name' => 'TC nghề 26/3',
                'district_id' => 537,
                'city_id' => 48,
            ),
            207 => 
            array (
                'id' => 3208,
                'code' => '076',
                'name' => 'TC nghề Kinh tế - Kỹ thuật số 2',
                'district_id' => 537,
                'city_id' => 48,
            ),
            208 => 
            array (
                'id' => 3209,
                'code' => '077',
                'name' => 'TC nghề Đinh Tiên Hoàng',
                'district_id' => 537,
                'city_id' => 48,
            ),
            209 => 
            array (
                'id' => 3210,
                'code' => '083',
                'name' => 'THCS-THPT và DN Tân Hòa',
                'district_id' => 537,
                'city_id' => 48,
            ),
            210 => 
            array (
                'id' => 3211,
                'code' => '088',
                'name' => 'TH-THCS-THPT Song Ngữ Lạc Hồng',
                'district_id' => 537,
                'city_id' => 48,
            ),
            211 => 
            array (
                'id' => 3212,
                'code' => '089',
                'name' => 'TH-THCS-THPT Nguyễn Văn Trỗi',
                'district_id' => 537,
                'city_id' => 48,
            ),
            212 => 
            array (
                'id' => 3213,
                'code' => '090',
                'name' => 'THCS-THPT Châu á Thái Bình Dương',
                'district_id' => 537,
                'city_id' => 48,
            ),
            213 => 
            array (
                'id' => 3214,
                'code' => '093',
                'name' => 'ĐH Đồng Nai',
                'district_id' => 537,
                'city_id' => 48,
            ),
            214 => 
            array (
                'id' => 3215,
                'code' => '095',
                'name' => 'TC Miền Đông',
                'district_id' => 537,
                'city_id' => 48,
            ),
            215 => 
            array (
                'id' => 3216,
                'code' => '098',
                'name' => 'TT KTTH Hướng nghiệp Đồng Nai',
                'district_id' => 537,
                'city_id' => 48,
            ),
            216 => 
            array (
                'id' => 3217,
                'code' => '099',
                'name' => 'TT GDTX tỉnh Đồng Nai',
                'district_id' => 537,
                'city_id' => 48,
            ),
            217 => 
            array (
                'id' => 3218,
                'code' => '035',
                'name' => 'THPT Vĩnh Cửu',
                'district_id' => 538,
                'city_id' => 48,
            ),
            218 => 
            array (
                'id' => 3219,
                'code' => '036',
                'name' => 'THPT Trị An',
                'district_id' => 538,
                'city_id' => 48,
            ),
            219 => 
            array (
                'id' => 3220,
                'code' => '039',
                'name' => 'TT GDTX Vĩnh Cửu',
                'district_id' => 538,
                'city_id' => 48,
            ),
            220 => 
            array (
                'id' => 3221,
                'code' => '061',
                'name' => 'THCS-THPT Huỳnh Văn nghệ',
                'district_id' => 538,
                'city_id' => 48,
            ),
            221 => 
            array (
                'id' => 3222,
                'code' => '082',
                'name' => 'TC nghề Cơ Điện Đông Nam Bộ',
                'district_id' => 538,
                'city_id' => 48,
            ),
            222 => 
            array (
                'id' => 3223,
                'code' => '085',
                'name' => 'TH-THCS-THPT Hùng Vương',
                'district_id' => 538,
                'city_id' => 48,
            ),
            223 => 
            array (
                'id' => 3224,
                'code' => '032',
                'name' => 'TT GDTX Tân Phú',
                'district_id' => 539,
                'city_id' => 48,
            ),
            224 => 
            array (
                'id' => 3225,
                'code' => '033',
                'name' => 'THPT Đoàn Kết',
                'district_id' => 539,
                'city_id' => 48,
            ),
            225 => 
            array (
                'id' => 3226,
                'code' => '034',
                'name' => 'THPT Thanh Bình',
                'district_id' => 539,
                'city_id' => 48,
            ),
            226 => 
            array (
                'id' => 3227,
                'code' => '038',
                'name' => 'THCS-THPT Ngọc Lâm',
                'district_id' => 539,
                'city_id' => 48,
            ),
            227 => 
            array (
                'id' => 3228,
                'code' => '060',
                'name' => 'THPT Đắc Lua',
                'district_id' => 539,
                'city_id' => 48,
            ),
            228 => 
            array (
                'id' => 3229,
                'code' => '063',
                'name' => 'THPT Tôn Đức Thắng',
                'district_id' => 539,
                'city_id' => 48,
            ),
            229 => 
            array (
                'id' => 3230,
                'code' => '086',
                'name' => 'TH-THCS-THPT Lê Quý Đôn-Tân Phú',
                'district_id' => 539,
                'city_id' => 48,
            ),
            230 => 
            array (
                'id' => 3231,
                'code' => '028',
                'name' => 'TT GDTX Định Quán',
                'district_id' => 540,
                'city_id' => 48,
            ),
            231 => 
            array (
                'id' => 3232,
                'code' => '029',
                'name' => 'THPT Tân Phú',
                'district_id' => 540,
                'city_id' => 48,
            ),
            232 => 
            array (
                'id' => 3233,
                'code' => '030',
                'name' => 'THPT Điểu Cải',
                'district_id' => 540,
                'city_id' => 48,
            ),
            233 => 
            array (
                'id' => 3234,
                'code' => '031',
                'name' => 'THPT Định Quán',
                'district_id' => 540,
                'city_id' => 48,
            ),
            234 => 
            array (
                'id' => 3235,
                'code' => '055',
                'name' => 'THPT Phú Ngọc',
                'district_id' => 540,
                'city_id' => 48,
            ),
            235 => 
            array (
                'id' => 3236,
                'code' => '084',
                'name' => 'THCS-THPT Lạc Long Quân',
                'district_id' => 540,
                'city_id' => 48,
            ),
            236 => 
            array (
                'id' => 3237,
                'code' => '091',
                'name' => 'THCS-THPT Tây Sơn',
                'district_id' => 540,
                'city_id' => 48,
            ),
            237 => 
            array (
                'id' => 3238,
                'code' => '010',
                'name' => 'TTGDTX Thống Nhất',
                'district_id' => 541,
                'city_id' => 48,
            ),
            238 => 
            array (
                'id' => 3239,
                'code' => '012',
                'name' => 'THPT Thống Nhất',
                'district_id' => 541,
                'city_id' => 48,
            ),
            239 => 
            array (
                'id' => 3240,
                'code' => '014',
                'name' => 'THPT Kiệm Tân',
                'district_id' => 541,
                'city_id' => 48,
            ),
            240 => 
            array (
                'id' => 3241,
                'code' => '018',
                'name' => 'THPT Dầu Giây',
                'district_id' => 541,
                'city_id' => 48,
            ),
            241 => 
            array (
                'id' => 3242,
                'code' => '015',
                'name' => 'TT GDTX L. Khánh',
                'district_id' => 542,
                'city_id' => 48,
            ),
            242 => 
            array (
                'id' => 3243,
                'code' => '016',
                'name' => 'THPT Long Khánh',
                'district_id' => 542,
                'city_id' => 48,
            ),
            243 => 
            array (
                'id' => 3244,
                'code' => '017',
                'name' => 'THPT Trần Phú',
                'district_id' => 542,
                'city_id' => 48,
            ),
            244 => 
            array (
                'id' => 3245,
                'code' => '019',
                'name' => 'THPT DL Văn Hiến',
                'district_id' => 542,
                'city_id' => 48,
            ),
            245 => 
            array (
                'id' => 3246,
                'code' => '045',
                'name' => 'THPT DL Nguyễn Huệ',
                'district_id' => 542,
                'city_id' => 48,
            ),
            246 => 
            array (
                'id' => 3247,
                'code' => '058',
                'name' => 'THPT TT Trương Vĩnh Ký',
                'district_id' => 542,
                'city_id' => 48,
            ),
            247 => 
            array (
                'id' => 3248,
                'code' => '092',
                'name' => 'THCS-THPT Việt Hoa Quang Chánh',
                'district_id' => 542,
                'city_id' => 48,
            ),
            248 => 
            array (
                'id' => 3249,
                'code' => '020',
                'name' => 'TTGDTX Xuân Lộc',
                'district_id' => 543,
                'city_id' => 48,
            ),
            249 => 
            array (
                'id' => 3250,
                'code' => '021',
                'name' => 'THPT Xuân Lộc',
                'district_id' => 543,
                'city_id' => 48,
            ),
            250 => 
            array (
                'id' => 3251,
                'code' => '051',
                'name' => 'THPT DL Hồng Bàng',
                'district_id' => 543,
                'city_id' => 48,
            ),
            251 => 
            array (
                'id' => 3252,
                'code' => '059',
                'name' => 'THPT Xuân Hưng',
                'district_id' => 543,
                'city_id' => 48,
            ),
            252 => 
            array (
                'id' => 3253,
                'code' => '068',
                'name' => 'THPT Xuân Thọ',
                'district_id' => 543,
                'city_id' => 48,
            ),
            253 => 
            array (
                'id' => 3254,
                'code' => '022',
                'name' => 'TT GDTX Long Thành',
                'district_id' => 544,
                'city_id' => 48,
            ),
            254 => 
            array (
                'id' => 3255,
                'code' => '023',
                'name' => 'THPT Long Thành',
                'district_id' => 544,
                'city_id' => 48,
            ),
            255 => 
            array (
                'id' => 3256,
                'code' => '024',
                'name' => 'THPT Long Phước',
                'district_id' => 544,
                'city_id' => 48,
            ),
            256 => 
            array (
                'id' => 3257,
                'code' => '025',
                'name' => 'THPT Nguyễn Đình Chiểu',
                'district_id' => 544,
                'city_id' => 48,
            ),
            257 => 
            array (
                'id' => 3258,
                'code' => '054',
                'name' => 'THPT Bình Sơn',
                'district_id' => 544,
                'city_id' => 48,
            ),
            258 => 
            array (
                'id' => 3259,
                'code' => '072',
                'name' => 'CĐ nghề LiLaMa2',
                'district_id' => 544,
                'city_id' => 48,
            ),
            259 => 
            array (
                'id' => 3260,
                'code' => '078',
                'name' => 'CĐ nghề KV Long Thành-Nhơn Trạch',
                'district_id' => 544,
                'city_id' => 48,
            ),
            260 => 
            array (
                'id' => 3261,
                'code' => '079',
                'name' => 'TC nghề Tri Thức',
                'district_id' => 544,
                'city_id' => 48,
            ),
            261 => 
            array (
                'id' => 3262,
                'code' => '026',
                'name' => 'TT GDTX Nhơn Trạch',
                'district_id' => 545,
                'city_id' => 48,
            ),
            262 => 
            array (
                'id' => 3263,
                'code' => '027',
                'name' => 'THPT Nhơn Trạch',
                'district_id' => 545,
                'city_id' => 48,
            ),
            263 => 
            array (
                'id' => 3264,
                'code' => '048',
                'name' => 'THPT Phước Thiền',
                'district_id' => 545,
                'city_id' => 48,
            ),
            264 => 
            array (
                'id' => 3265,
                'code' => '087',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 545,
                'city_id' => 48,
            ),
            265 => 
            array (
                'id' => 3266,
                'code' => '097',
                'name' => 'TC Kinh tế- Kỹ thuật Đồng Nai',
                'district_id' => 545,
                'city_id' => 48,
            ),
            266 => 
            array (
                'id' => 3267,
                'code' => '009',
                'name' => 'THPT Dân Tộc Nội Trú tỉnh',
                'district_id' => 546,
                'city_id' => 48,
            ),
            267 => 
            array (
                'id' => 3268,
                'code' => '011',
                'name' => 'THPT Thống Nhất A',
                'district_id' => 546,
                'city_id' => 48,
            ),
            268 => 
            array (
                'id' => 3269,
                'code' => '013',
                'name' => 'THPT  Ngô Sĩ Liên',
                'district_id' => 546,
                'city_id' => 48,
            ),
            269 => 
            array (
                'id' => 3270,
                'code' => '050',
                'name' => 'THPT DL Văn Lang',
                'district_id' => 546,
                'city_id' => 48,
            ),
            270 => 
            array (
                'id' => 3271,
                'code' => '052',
                'name' => 'THPT DL Trần Quốc Tuấn',
                'district_id' => 546,
                'city_id' => 48,
            ),
            271 => 
            array (
                'id' => 3272,
                'code' => '056',
                'name' => 'TTGDTX Trảng Bom',
                'district_id' => 546,
                'city_id' => 48,
            ),
            272 => 
            array (
                'id' => 3273,
                'code' => '064',
                'name' => 'THPT Trịnh HoàI Đức',
                'district_id' => 546,
                'city_id' => 48,
            ),
            273 => 
            array (
                'id' => 3274,
                'code' => '065',
                'name' => 'THCS  THPT Bàu Hàm',
                'district_id' => 546,
                'city_id' => 48,
            ),
            274 => 
            array (
                'id' => 3275,
                'code' => '066',
                'name' => 'THPT Trần Đại Nghĩa',
                'district_id' => 546,
                'city_id' => 48,
            ),
            275 => 
            array (
                'id' => 3276,
                'code' => '073',
                'name' => 'CĐ nghề Cơ giới - Thủy lợi',
                'district_id' => 546,
                'city_id' => 48,
            ),
            276 => 
            array (
                'id' => 3277,
                'code' => '080',
                'name' => 'TC nghề Tân Mai',
                'district_id' => 546,
                'city_id' => 48,
            ),
            277 => 
            array (
                'id' => 3278,
                'code' => '081',
                'name' => 'TC nghề Hòa Bình',
                'district_id' => 546,
                'city_id' => 48,
            ),
            278 => 
            array (
                'id' => 3279,
                'code' => '094',
            'name' => 'ĐH Lâm Nghiệp (cơ sở 2)',
                'district_id' => 546,
                'city_id' => 48,
            ),
            279 => 
            array (
                'id' => 3280,
                'code' => '096',
                'name' => 'TC Bách khoa Đồng Nai',
                'district_id' => 546,
                'city_id' => 48,
            ),
            280 => 
            array (
                'id' => 3281,
                'code' => '037',
                'name' => 'THPT Xuân Mỹ',
                'district_id' => 547,
                'city_id' => 48,
            ),
            281 => 
            array (
                'id' => 3282,
                'code' => '046',
                'name' => 'THPT Sông Ray',
                'district_id' => 547,
                'city_id' => 48,
            ),
            282 => 
            array (
                'id' => 3283,
                'code' => '057',
                'name' => 'TTGDTX Cẩm Mỹ',
                'district_id' => 547,
                'city_id' => 48,
            ),
            283 => 
            array (
                'id' => 3284,
                'code' => '062',
                'name' => 'THPT Võ Trường Toản',
                'district_id' => 547,
                'city_id' => 48,
            ),
            284 => 
            array (
                'id' => 3285,
                'code' => '001',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 548,
                'city_id' => 49,
            ),
            285 => 
            array (
                'id' => 3286,
                'code' => '002',
                'name' => 'THPT Tân An',
                'district_id' => 548,
                'city_id' => 49,
            ),
            286 => 
            array (
                'id' => 3287,
                'code' => '018',
                'name' => 'THPT Hùng Vương',
                'district_id' => 548,
                'city_id' => 49,
            ),
            287 => 
            array (
                'id' => 3288,
                'code' => '028',
                'name' => 'THPT Huỳnh Ngọc',
                'district_id' => 548,
                'city_id' => 49,
            ),
            288 => 
            array (
                'id' => 3289,
                'code' => '035',
                'name' => 'TT.GDTX Tp. Tân An',
                'district_id' => 548,
                'city_id' => 49,
            ),
            289 => 
            array (
                'id' => 3290,
                'code' => '049',
                'name' => 'TT.KTTH-HN Long An',
                'district_id' => 548,
                'city_id' => 49,
            ),
            290 => 
            array (
                'id' => 3291,
                'code' => '051',
                'name' => 'Trường TDTT Tỉnh Long An',
                'district_id' => 548,
                'city_id' => 49,
            ),
            291 => 
            array (
                'id' => 3292,
                'code' => '052',
                'name' => 'TT.GDTX Long An',
                'district_id' => 548,
                'city_id' => 49,
            ),
            292 => 
            array (
                'id' => 3293,
                'code' => '053',
                'name' => 'THCS & THPT Hà Long',
                'district_id' => 548,
                'city_id' => 49,
            ),
            293 => 
            array (
                'id' => 3294,
                'code' => '060',
                'name' => 'THPT  chuyên  Long An',
                'district_id' => 548,
                'city_id' => 49,
            ),
            294 => 
            array (
                'id' => 3295,
                'code' => '062',
                'name' => 'CĐN Kỹ thuật Công nghệ LADEC',
                'district_id' => 548,
                'city_id' => 49,
            ),
            295 => 
            array (
                'id' => 3296,
                'code' => '063',
                'name' => 'CĐN Long An',
                'district_id' => 548,
                'city_id' => 49,
            ),
            296 => 
            array (
                'id' => 3297,
                'code' => '071',
                'name' => 'TC Việt – Nhật',
                'district_id' => 548,
                'city_id' => 49,
            ),
            297 => 
            array (
                'id' => 3298,
                'code' => '073',
                'name' => 'THCS&THPT Nguyễn Văn Rành',
                'district_id' => 548,
                'city_id' => 49,
            ),
            298 => 
            array (
                'id' => 3299,
                'code' => '017',
                'name' => 'THPT Vĩnh Hưng',
                'district_id' => 549,
                'city_id' => 49,
            ),
            299 => 
            array (
                'id' => 3300,
                'code' => '036',
                'name' => 'TT.GDTX&KTTH-HN Vĩnh Hưng',
                'district_id' => 549,
                'city_id' => 49,
            ),
            300 => 
            array (
                'id' => 3301,
                'code' => '061',
                'name' => 'THCS & THPT Khánh Hưng',
                'district_id' => 549,
                'city_id' => 49,
            ),
            301 => 
            array (
                'id' => 3302,
                'code' => '058',
                'name' => 'THCS & THPT Bình Phong Thạnh',
                'district_id' => 550,
                'city_id' => 49,
            ),
            302 => 
            array (
                'id' => 3303,
                'code' => '015',
                'name' => 'THPT Tân Thạnh',
                'district_id' => 551,
                'city_id' => 49,
            ),
            303 => 
            array (
                'id' => 3304,
                'code' => '030',
                'name' => 'THCS & THPT Hậu Thạnh Đông',
                'district_id' => 551,
                'city_id' => 49,
            ),
            304 => 
            array (
                'id' => 3305,
                'code' => '038',
                'name' => 'TT.GDTX&KTTH-HN Tân Thạnh',
                'district_id' => 551,
                'city_id' => 49,
            ),
            305 => 
            array (
                'id' => 3306,
                'code' => '014',
                'name' => 'THPT Thạnh Hóa',
                'district_id' => 552,
                'city_id' => 49,
            ),
            306 => 
            array (
                'id' => 3307,
                'code' => '039',
                'name' => 'TT.GDTX&KTTH-HN Thạnh Hoá',
                'district_id' => 552,
                'city_id' => 49,
            ),
            307 => 
            array (
                'id' => 3308,
                'code' => '013',
                'name' => 'THPT Đức Huệ',
                'district_id' => 553,
                'city_id' => 49,
            ),
            308 => 
            array (
                'id' => 3309,
                'code' => '040',
                'name' => 'TT.GDTX&KTTH-HN Đức Huệ',
                'district_id' => 553,
                'city_id' => 49,
            ),
            309 => 
            array (
                'id' => 3310,
                'code' => '057',
                'name' => 'THCS & THPT Mỹ Quý',
                'district_id' => 553,
                'city_id' => 49,
            ),
            310 => 
            array (
                'id' => 3311,
                'code' => '068',
                'name' => 'THCS&THPT Mỹ Bình',
                'district_id' => 553,
                'city_id' => 49,
            ),
            311 => 
            array (
                'id' => 3312,
                'code' => '011',
                'name' => 'THPT Đức Hòa',
                'district_id' => 554,
                'city_id' => 49,
            ),
            312 => 
            array (
                'id' => 3313,
                'code' => '012',
                'name' => 'THPT Hậu Nghĩa',
                'district_id' => 554,
                'city_id' => 49,
            ),
            313 => 
            array (
                'id' => 3314,
                'code' => '025',
                'name' => 'THPT  Võ Văn Tần',
                'district_id' => 554,
                'city_id' => 49,
            ),
            314 => 
            array (
                'id' => 3315,
                'code' => '026',
                'name' => 'THPT Nguyễn Công Trứ',
                'district_id' => 554,
                'city_id' => 49,
            ),
            315 => 
            array (
                'id' => 3316,
                'code' => '031',
                'name' => 'THPT An Ninh',
                'district_id' => 554,
                'city_id' => 49,
            ),
            316 => 
            array (
                'id' => 3317,
                'code' => '041',
                'name' => 'TT.GDTX&KTTH-HN Đức Hoà',
                'district_id' => 554,
                'city_id' => 49,
            ),
            317 => 
            array (
                'id' => 3318,
                'code' => '050',
                'name' => 'TT.GDTX&KTTH-HN Võ Văn Tần',
                'district_id' => 554,
                'city_id' => 49,
            ),
            318 => 
            array (
                'id' => 3319,
                'code' => '065',
                'name' => 'TC nghề  Đức Hòa',
                'district_id' => 554,
                'city_id' => 49,
            ),
            319 => 
            array (
                'id' => 3320,
                'code' => '072',
                'name' => 'THPT Năng khiếu Đại học Tân Tạo',
                'district_id' => 554,
                'city_id' => 49,
            ),
            320 => 
            array (
                'id' => 3321,
                'code' => '006',
                'name' => 'THPT Nguyễn Hữu Thọ',
                'district_id' => 555,
                'city_id' => 49,
            ),
            321 => 
            array (
                'id' => 3322,
                'code' => '022',
                'name' => 'THCS&THPT  iSCHOOL Long  An',
                'district_id' => 555,
                'city_id' => 49,
            ),
            322 => 
            array (
                'id' => 3323,
                'code' => '033',
                'name' => 'THPT Gò Đen',
                'district_id' => 555,
                'city_id' => 49,
            ),
            323 => 
            array (
                'id' => 3324,
                'code' => '042',
                'name' => 'TT.GDTX&KTTH-HN Bến Lức',
                'district_id' => 555,
                'city_id' => 49,
            ),
            324 => 
            array (
                'id' => 3325,
                'code' => '059',
                'name' => 'THCS & THPT  Lương Hòa',
                'district_id' => 555,
                'city_id' => 49,
            ),
            325 => 
            array (
                'id' => 3326,
                'code' => '064',
                'name' => 'CĐ nghề  Tây Sài Gòn',
                'district_id' => 555,
                'city_id' => 49,
            ),
            326 => 
            array (
                'id' => 3327,
                'code' => '070',
                'name' => 'TC KT-KT Long An',
                'district_id' => 555,
                'city_id' => 49,
            ),
            327 => 
            array (
                'id' => 3328,
                'code' => '005',
                'name' => 'THPT Thủ Thừa',
                'district_id' => 556,
                'city_id' => 49,
            ),
            328 => 
            array (
                'id' => 3329,
                'code' => '021',
                'name' => 'THPT  Thủ  Khoa Thừa',
                'district_id' => 556,
                'city_id' => 49,
            ),
            329 => 
            array (
                'id' => 3330,
                'code' => '034',
                'name' => 'THCS & THPT Mỹ Lạc',
                'district_id' => 556,
                'city_id' => 49,
            ),
            330 => 
            array (
                'id' => 3331,
                'code' => '043',
                'name' => 'TT.GDTX&KTTH-HN Thủ Thừa',
                'district_id' => 556,
                'city_id' => 49,
            ),
            331 => 
            array (
                'id' => 3332,
                'code' => '069',
                'name' => 'TH,THCS&THPT Bồ Đề Phương Duy',
                'district_id' => 556,
                'city_id' => 49,
            ),
            332 => 
            array (
                'id' => 3333,
                'code' => '003',
                'name' => 'THPT Nguyễn Thông',
                'district_id' => 557,
                'city_id' => 49,
            ),
            333 => 
            array (
                'id' => 3334,
                'code' => '019',
                'name' => 'THPT Châu Thành',
                'district_id' => 557,
                'city_id' => 49,
            ),
            334 => 
            array (
                'id' => 3335,
                'code' => '044',
                'name' => 'TT.GDTX&KTTH-HN Châu Thành',
                'district_id' => 557,
                'city_id' => 49,
            ),
            335 => 
            array (
                'id' => 3336,
                'code' => '054',
                'name' => 'THPT Phan Văn Đạt',
                'district_id' => 557,
                'city_id' => 49,
            ),
            336 => 
            array (
                'id' => 3337,
                'code' => '004',
                'name' => 'THPT Tân Trụ',
                'district_id' => 558,
                'city_id' => 49,
            ),
            337 => 
            array (
                'id' => 3338,
                'code' => '020',
                'name' => 'THPT Nguyễn Trung Trực',
                'district_id' => 558,
                'city_id' => 49,
            ),
            338 => 
            array (
                'id' => 3339,
                'code' => '045',
                'name' => 'TT.GDTX&KTTH-HN Tân Trụ',
                'district_id' => 558,
                'city_id' => 49,
            ),
            339 => 
            array (
                'id' => 3340,
                'code' => '007',
                'name' => 'THPT Cần Đước',
                'district_id' => 559,
                'city_id' => 49,
            ),
            340 => 
            array (
                'id' => 3341,
                'code' => '008',
                'name' => 'THPT Rạch Kiến',
                'district_id' => 559,
                'city_id' => 49,
            ),
            341 => 
            array (
                'id' => 3342,
                'code' => '023',
                'name' => 'THPT Chu Văn An',
                'district_id' => 559,
                'city_id' => 49,
            ),
            342 => 
            array (
                'id' => 3343,
                'code' => '024',
                'name' => 'THPT Long Hòa',
                'district_id' => 559,
                'city_id' => 49,
            ),
            343 => 
            array (
                'id' => 3344,
                'code' => '046',
                'name' => 'TT.GDTX&KTTH-HN Cần Đước',
                'district_id' => 559,
                'city_id' => 49,
            ),
            344 => 
            array (
                'id' => 3345,
                'code' => '055',
                'name' => 'THCS & THPT Long Cang',
                'district_id' => 559,
                'city_id' => 49,
            ),
            345 => 
            array (
                'id' => 3346,
                'code' => '056',
                'name' => 'THCS & THPT Long Hựu Đông',
                'district_id' => 559,
                'city_id' => 49,
            ),
            346 => 
            array (
                'id' => 3347,
                'code' => '009',
                'name' => 'THPT Đông Thạnh',
                'district_id' => 560,
                'city_id' => 49,
            ),
            347 => 
            array (
                'id' => 3348,
                'code' => '010',
                'name' => 'THPT Cần Giuộc',
                'district_id' => 560,
                'city_id' => 49,
            ),
            348 => 
            array (
                'id' => 3349,
                'code' => '027',
                'name' => 'THPT Nguyễn Đình Chiểu',
                'district_id' => 560,
                'city_id' => 49,
            ),
            349 => 
            array (
                'id' => 3350,
                'code' => '029',
                'name' => 'THCS & THPT Long Thượng',
                'district_id' => 560,
                'city_id' => 49,
            ),
            350 => 
            array (
                'id' => 3351,
                'code' => '047',
                'name' => 'TT.GDTX&KTTH-HN Cần Giuộc',
                'district_id' => 560,
                'city_id' => 49,
            ),
            351 => 
            array (
                'id' => 3352,
                'code' => '067',
                'name' => 'TC nghề Cần Giuộc',
                'district_id' => 560,
                'city_id' => 49,
            ),
            352 => 
            array (
                'id' => 3353,
                'code' => '032',
                'name' => 'THPT Tân Hưng',
                'district_id' => 561,
                'city_id' => 49,
            ),
            353 => 
            array (
                'id' => 3354,
                'code' => '048',
                'name' => 'TT.GDTX&KTTH-HN Tân Hưng',
                'district_id' => 561,
                'city_id' => 49,
            ),
            354 => 
            array (
                'id' => 3355,
                'code' => '016',
                'name' => 'THPT Kiến Tường',
                'district_id' => 562,
                'city_id' => 49,
            ),
            355 => 
            array (
                'id' => 3356,
                'code' => '037',
                'name' => 'TT.GDTX&KTTH-HN Kiến Tường',
                'district_id' => 562,
                'city_id' => 49,
            ),
            356 => 
            array (
                'id' => 3357,
                'code' => '066',
                'name' => 'TC nghề  Đồng Tháp Mười',
                'district_id' => 562,
                'city_id' => 49,
            ),
            357 => 
            array (
                'id' => 3358,
                'code' => '001',
                'name' => 'THPT Châu Thành 1',
                'district_id' => 563,
                'city_id' => 50,
            ),
            358 => 
            array (
                'id' => 3359,
                'code' => '002',
                'name' => 'THPT Châu Thành 2',
                'district_id' => 563,
                'city_id' => 50,
            ),
            359 => 
            array (
                'id' => 3360,
                'code' => '003',
                'name' => 'THPT Tân Phú Trung',
                'district_id' => 563,
                'city_id' => 50,
            ),
            360 => 
            array (
                'id' => 3361,
                'code' => '004',
                'name' => 'THPT Nha Mân',
                'district_id' => 563,
                'city_id' => 50,
            ),
            361 => 
            array (
                'id' => 3362,
                'code' => '053',
                'name' => 'TT Dạy nghề - GDTX Châu Thành',
                'district_id' => 563,
                'city_id' => 50,
            ),
            362 => 
            array (
                'id' => 3363,
                'code' => '005',
                'name' => 'THPT Lai Vung 1',
                'district_id' => 564,
                'city_id' => 50,
            ),
            363 => 
            array (
                'id' => 3364,
                'code' => '006',
                'name' => 'THPT Lai Vung 2',
                'district_id' => 564,
                'city_id' => 50,
            ),
            364 => 
            array (
                'id' => 3365,
                'code' => '007',
                'name' => 'THPT Lai Vung 3',
                'district_id' => 564,
                'city_id' => 50,
            ),
            365 => 
            array (
                'id' => 3366,
                'code' => '008',
                'name' => 'THPT Phan Văn Bảy',
                'district_id' => 564,
                'city_id' => 50,
            ),
            366 => 
            array (
                'id' => 3367,
                'code' => '054',
                'name' => 'TT Dạy nghề - GDTX Lai Vung',
                'district_id' => 564,
                'city_id' => 50,
            ),
            367 => 
            array (
                'id' => 3368,
                'code' => '009',
                'name' => 'THPT Lấp Vò 1',
                'district_id' => 565,
                'city_id' => 50,
            ),
            368 => 
            array (
                'id' => 3369,
                'code' => '010',
                'name' => 'THPT Lấp Vò 2',
                'district_id' => 565,
                'city_id' => 50,
            ),
            369 => 
            array (
                'id' => 3370,
                'code' => '011',
                'name' => 'THPT Lấp Vò 3',
                'district_id' => 565,
                'city_id' => 50,
            ),
            370 => 
            array (
                'id' => 3371,
                'code' => '012',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 565,
                'city_id' => 50,
            ),
            371 => 
            array (
                'id' => 3372,
                'code' => '013',
                'name' => 'THCS & THPT Bình Thạnh Trung',
                'district_id' => 565,
                'city_id' => 50,
            ),
            372 => 
            array (
                'id' => 3373,
                'code' => '055',
                'name' => 'TT Dạy nghề - GDTX Lấp Vò',
                'district_id' => 565,
                'city_id' => 50,
            ),
            373 => 
            array (
                'id' => 3374,
                'code' => '014',
                'name' => 'THPT Thành phố Sa Đéc',
                'district_id' => 566,
                'city_id' => 50,
            ),
            374 => 
            array (
                'id' => 3375,
                'code' => '015',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 566,
                'city_id' => 50,
            ),
            375 => 
            array (
                'id' => 3376,
                'code' => '016',
                'name' => 'THPT Chuyên Nguyễn Đình Chiểu',
                'district_id' => 566,
                'city_id' => 50,
            ),
            376 => 
            array (
                'id' => 3377,
                'code' => '048',
                'name' => 'TT GDTX Thành phố Sa Đéc',
                'district_id' => 566,
                'city_id' => 50,
            ),
            377 => 
            array (
                'id' => 3378,
                'code' => '060',
                'name' => 'CĐ nghề Đồng Tháp',
                'district_id' => 566,
                'city_id' => 50,
            ),
            378 => 
            array (
                'id' => 3379,
                'code' => '017',
                'name' => 'THPT Thành phố Cao Lãnh',
                'district_id' => 567,
                'city_id' => 50,
            ),
            379 => 
            array (
                'id' => 3380,
                'code' => '018',
                'name' => 'THPT Trần Quốc Toản',
                'district_id' => 567,
                'city_id' => 50,
            ),
            380 => 
            array (
                'id' => 3381,
                'code' => '019',
                'name' => 'THPT Kỹ Thuật',
                'district_id' => 567,
                'city_id' => 50,
            ),
            381 => 
            array (
                'id' => 3382,
                'code' => '020',
                'name' => 'THPT Đỗ Công Tường',
                'district_id' => 567,
                'city_id' => 50,
            ),
            382 => 
            array (
                'id' => 3383,
                'code' => '021',
                'name' => 'THPT Thiên Hộ Dương',
                'district_id' => 567,
                'city_id' => 50,
            ),
            383 => 
            array (
                'id' => 3384,
                'code' => '022',
                'name' => 'Năng khiếu TDTT',
                'district_id' => 567,
                'city_id' => 50,
            ),
            384 => 
            array (
                'id' => 3385,
                'code' => '023',
                'name' => 'THPT chuyên Nguyễn Quang Diêu',
                'district_id' => 567,
                'city_id' => 50,
            ),
            385 => 
            array (
                'id' => 3386,
                'code' => '049',
                'name' => 'TT GDTX - KTHN tỉnh Đồng Tháp',
                'district_id' => 567,
                'city_id' => 50,
            ),
            386 => 
            array (
                'id' => 3387,
                'code' => '061',
                'name' => 'TC nghề GTVT',
                'district_id' => 567,
                'city_id' => 50,
            ),
            387 => 
            array (
                'id' => 3388,
                'code' => '024',
                'name' => 'THPT Cao Lãnh 1',
                'district_id' => 568,
                'city_id' => 50,
            ),
            388 => 
            array (
                'id' => 3389,
                'code' => '025',
                'name' => 'THPT Cao Lãnh 2',
                'district_id' => 568,
                'city_id' => 50,
            ),
            389 => 
            array (
                'id' => 3390,
                'code' => '026',
                'name' => 'THPT Thống Linh',
                'district_id' => 568,
                'city_id' => 50,
            ),
            390 => 
            array (
                'id' => 3391,
                'code' => '027',
                'name' => 'THPT Kiến Văn',
                'district_id' => 568,
                'city_id' => 50,
            ),
            391 => 
            array (
                'id' => 3392,
                'code' => '028',
                'name' => 'THCS và THPT Nguyễn Văn Khải',
                'district_id' => 568,
                'city_id' => 50,
            ),
            392 => 
            array (
                'id' => 3393,
                'code' => '056',
                'name' => 'TT Dạy nghề - GDTX H.Cao Lãnh',
                'district_id' => 568,
                'city_id' => 50,
            ),
            393 => 
            array (
                'id' => 3394,
                'code' => '029',
                'name' => 'THPT Tháp Mười',
                'district_id' => 569,
                'city_id' => 50,
            ),
            394 => 
            array (
                'id' => 3395,
                'code' => '030',
                'name' => 'THPT Trường Xuân',
                'district_id' => 569,
                'city_id' => 50,
            ),
            395 => 
            array (
                'id' => 3396,
                'code' => '031',
                'name' => 'THPT Mỹ Quý',
                'district_id' => 569,
                'city_id' => 50,
            ),
            396 => 
            array (
                'id' => 3397,
                'code' => '032',
                'name' => 'THPT Đốc Bình Kiều',
                'district_id' => 569,
                'city_id' => 50,
            ),
            397 => 
            array (
                'id' => 3398,
                'code' => '033',
                'name' => 'THPT Phú Điền',
                'district_id' => 569,
                'city_id' => 50,
            ),
            398 => 
            array (
                'id' => 3399,
                'code' => '050',
                'name' => 'Trung cấp nghề - GDTX Tháp Mười',
                'district_id' => 569,
                'city_id' => 50,
            ),
            399 => 
            array (
                'id' => 3400,
                'code' => '062',
                'name' => 'Trường TC Nghề Tháp Mười',
                'district_id' => 569,
                'city_id' => 50,
            ),
            400 => 
            array (
                'id' => 3401,
                'code' => '034',
                'name' => 'THPT Tam Nông',
                'district_id' => 570,
                'city_id' => 50,
            ),
            401 => 
            array (
                'id' => 3402,
                'code' => '035',
                'name' => 'THPT Tràm Chim',
                'district_id' => 570,
                'city_id' => 50,
            ),
            402 => 
            array (
                'id' => 3403,
                'code' => '036',
                'name' => 'THCS và THPT  Hòa Bình',
                'district_id' => 570,
                'city_id' => 50,
            ),
            403 => 
            array (
                'id' => 3404,
                'code' => '057',
                'name' => 'TT Dạy nghề - GDTX Tam Nông',
                'district_id' => 570,
                'city_id' => 50,
            ),
            404 => 
            array (
                'id' => 3405,
                'code' => '037',
                'name' => 'THPT Thanh Bình 1',
                'district_id' => 571,
                'city_id' => 50,
            ),
            405 => 
            array (
                'id' => 3406,
                'code' => '038',
                'name' => 'THPT Thanh Bình 2',
                'district_id' => 571,
                'city_id' => 50,
            ),
            406 => 
            array (
                'id' => 3407,
                'code' => '039',
                'name' => 'THPT Trần Văn Năng',
                'district_id' => 571,
                'city_id' => 50,
            ),
            407 => 
            array (
                'id' => 3408,
                'code' => '051',
                'name' => 'Trung cấp nghề - GDTX Thanh Bình',
                'district_id' => 571,
                'city_id' => 50,
            ),
            408 => 
            array (
                'id' => 3409,
                'code' => '063',
                'name' => 'Trường TC Nghề Thanh Bình',
                'district_id' => 571,
                'city_id' => 50,
            ),
            409 => 
            array (
                'id' => 3410,
                'code' => '040',
                'name' => 'THPT Hồng Ngự 1',
                'district_id' => 572,
                'city_id' => 50,
            ),
            410 => 
            array (
                'id' => 3411,
                'code' => '041',
                'name' => 'THPT Chu Văn An',
                'district_id' => 572,
                'city_id' => 50,
            ),
            411 => 
            array (
                'id' => 3412,
                'code' => '052',
                'name' => 'Trung cấp nghề - GDTX Hồng Ngự',
                'district_id' => 572,
                'city_id' => 50,
            ),
            412 => 
            array (
                'id' => 3413,
                'code' => '064',
                'name' => 'Trường TC Nghề Hồng Ngự',
                'district_id' => 572,
                'city_id' => 50,
            ),
            413 => 
            array (
                'id' => 3414,
                'code' => '042',
                'name' => 'THPT Hồng Ngự 2',
                'district_id' => 573,
                'city_id' => 50,
            ),
            414 => 
            array (
                'id' => 3415,
                'code' => '043',
                'name' => 'THPT Hồng Ngự 3',
                'district_id' => 573,
                'city_id' => 50,
            ),
            415 => 
            array (
                'id' => 3416,
                'code' => '044',
                'name' => 'THPT Long Khánh A',
                'district_id' => 573,
                'city_id' => 50,
            ),
            416 => 
            array (
                'id' => 3417,
                'code' => '058',
                'name' => 'TT Dạy nghề - GDTX  H. Hồng Ngự',
                'district_id' => 573,
                'city_id' => 50,
            ),
            417 => 
            array (
                'id' => 3418,
                'code' => '045',
                'name' => 'THPT Tân Hồng',
                'district_id' => 574,
                'city_id' => 50,
            ),
            418 => 
            array (
                'id' => 3419,
                'code' => '046',
                'name' => 'THPT Giồng Thị Đam',
                'district_id' => 574,
                'city_id' => 50,
            ),
            419 => 
            array (
                'id' => 3420,
                'code' => '047',
                'name' => 'THPT Tân Thành',
                'district_id' => 574,
                'city_id' => 50,
            ),
            420 => 
            array (
                'id' => 3421,
                'code' => '059',
                'name' => 'TT Dạy nghề - GDTX Tân Hồng',
                'district_id' => 574,
                'city_id' => 50,
            ),
            421 => 
            array (
                'id' => 3422,
                'code' => '001',
                'name' => 'THPT Long Xuyên',
                'district_id' => 575,
                'city_id' => 51,
            ),
            422 => 
            array (
                'id' => 3423,
                'code' => '002',
                'name' => 'THPT Thoại Ngọc Hầu',
                'district_id' => 575,
                'city_id' => 51,
            ),
            423 => 
            array (
                'id' => 3424,
                'code' => '003',
                'name' => 'THPT ISCHOOL Long Xuyên',
                'district_id' => 575,
                'city_id' => 51,
            ),
            424 => 
            array (
                'id' => 3425,
                'code' => '004',
                'name' => 'THPT Mỹ Thới',
                'district_id' => 575,
                'city_id' => 51,
            ),
            425 => 
            array (
                'id' => 3426,
                'code' => '005',
                'name' => 'CĐ Nghề An Giang',
                'district_id' => 575,
                'city_id' => 51,
            ),
            426 => 
            array (
                'id' => 3427,
                'code' => '006',
                'name' => 'TT GDTX tỉnh',
                'district_id' => 575,
                'city_id' => 51,
            ),
            427 => 
            array (
                'id' => 3428,
                'code' => '007',
                'name' => 'THPT Chưởng Binh Lễ',
                'district_id' => 575,
                'city_id' => 51,
            ),
            428 => 
            array (
                'id' => 3429,
                'code' => '045',
                'name' => 'TH Y Tế',
                'district_id' => 575,
                'city_id' => 51,
            ),
            429 => 
            array (
                'id' => 3430,
                'code' => '051',
                'name' => 'THPT Bình Khánh',
                'district_id' => 575,
                'city_id' => 51,
            ),
            430 => 
            array (
                'id' => 3431,
                'code' => '068',
                'name' => 'Trường Năng khiếu thể thao',
                'district_id' => 575,
                'city_id' => 51,
            ),
            431 => 
            array (
                'id' => 3432,
                'code' => '069',
                'name' => 'THPT Mỹ Hòa Hưng',
                'district_id' => 575,
                'city_id' => 51,
            ),
            432 => 
            array (
                'id' => 3433,
                'code' => '070',
                'name' => 'TC Nghề KTKT Công Đoàn An Giang',
                'district_id' => 575,
                'city_id' => 51,
            ),
            433 => 
            array (
                'id' => 3434,
                'code' => '074',
                'name' => 'Trường Phổ thông Thực hành Sư phạm',
                'district_id' => 575,
                'city_id' => 51,
            ),
            434 => 
            array (
                'id' => 3435,
                'code' => '075',
                'name' => 'Trường Phổ thông Quốc tế GIS',
                'district_id' => 575,
                'city_id' => 51,
            ),
            435 => 
            array (
                'id' => 3436,
                'code' => '008',
                'name' => 'THPT Thủ Khoa Nghiã',
                'district_id' => 576,
                'city_id' => 51,
            ),
            436 => 
            array (
                'id' => 3437,
                'code' => '009',
                'name' => 'THPT Võ Thị Sáu',
                'district_id' => 576,
                'city_id' => 51,
            ),
            437 => 
            array (
                'id' => 3438,
                'code' => '055',
                'name' => 'TT. GDTX Châu Đốc',
                'district_id' => 576,
                'city_id' => 51,
            ),
            438 => 
            array (
                'id' => 3439,
                'code' => '071',
                'name' => 'TC Nghề Châu Đốc',
                'district_id' => 576,
                'city_id' => 51,
            ),
            439 => 
            array (
                'id' => 3440,
                'code' => '010',
                'name' => 'THPT An Phú',
                'district_id' => 577,
                'city_id' => 51,
            ),
            440 => 
            array (
                'id' => 3441,
                'code' => '011',
                'name' => 'THPT  An Phú 2',
                'district_id' => 577,
                'city_id' => 51,
            ),
            441 => 
            array (
                'id' => 3442,
                'code' => '012',
                'name' => 'THPT Quốc Thái',
                'district_id' => 577,
                'city_id' => 51,
            ),
            442 => 
            array (
                'id' => 3443,
                'code' => '062',
                'name' => 'TTDN-GDTX An Phú',
                'district_id' => 577,
                'city_id' => 51,
            ),
            443 => 
            array (
                'id' => 3444,
                'code' => '066',
                'name' => 'THPT Vĩnh Lộc',
                'district_id' => 577,
                'city_id' => 51,
            ),
            444 => 
            array (
                'id' => 3445,
                'code' => '013',
                'name' => 'THPT Tân Châu',
                'district_id' => 578,
                'city_id' => 51,
            ),
            445 => 
            array (
                'id' => 3446,
                'code' => '014',
                'name' => 'THPT  Đức Trí',
                'district_id' => 578,
                'city_id' => 51,
            ),
            446 => 
            array (
                'id' => 3447,
                'code' => '015',
                'name' => 'THPT Vĩnh Xương',
                'district_id' => 578,
                'city_id' => 51,
            ),
            447 => 
            array (
                'id' => 3448,
                'code' => '050',
                'name' => 'THPT Châu Phong',
                'district_id' => 578,
                'city_id' => 51,
            ),
            448 => 
            array (
                'id' => 3449,
                'code' => '056',
                'name' => 'TT. GDTX Tân Châu',
                'district_id' => 578,
                'city_id' => 51,
            ),
            449 => 
            array (
                'id' => 3450,
                'code' => '067',
                'name' => 'THPT Nguyễn Quang Diêu',
                'district_id' => 578,
                'city_id' => 51,
            ),
            450 => 
            array (
                'id' => 3451,
                'code' => '072',
                'name' => 'TC Nghề Tân Châu',
                'district_id' => 578,
                'city_id' => 51,
            ),
            451 => 
            array (
                'id' => 3452,
                'code' => '016',
                'name' => 'THPT Chu Văn An',
                'district_id' => 579,
                'city_id' => 51,
            ),
            452 => 
            array (
                'id' => 3453,
                'code' => '017',
                'name' => 'Trường phổ thông Phú Tân',
                'district_id' => 579,
                'city_id' => 51,
            ),
            453 => 
            array (
                'id' => 3454,
                'code' => '018',
                'name' => 'THPT Nguyễn Chí Thanh',
                'district_id' => 579,
                'city_id' => 51,
            ),
            454 => 
            array (
                'id' => 3455,
                'code' => '046',
                'name' => 'THPT Hoà Lạc',
                'district_id' => 579,
                'city_id' => 51,
            ),
            455 => 
            array (
                'id' => 3456,
                'code' => '052',
                'name' => 'THPT Bình Thạnh Đông',
                'district_id' => 579,
                'city_id' => 51,
            ),
            456 => 
            array (
                'id' => 3457,
                'code' => '057',
                'name' => 'TTDN-GDTX Phú Tân',
                'district_id' => 579,
                'city_id' => 51,
            ),
            457 => 
            array (
                'id' => 3458,
                'code' => '024',
                'name' => 'THPT Tịnh Biên',
                'district_id' => 580,
                'city_id' => 51,
            ),
            458 => 
            array (
                'id' => 3459,
                'code' => '025',
                'name' => 'THPT Chi Lăng',
                'district_id' => 580,
                'city_id' => 51,
            ),
            459 => 
            array (
                'id' => 3460,
                'code' => '026',
                'name' => 'THPT Xuân Tô',
                'district_id' => 580,
                'city_id' => 51,
            ),
            460 => 
            array (
                'id' => 3461,
                'code' => '064',
                'name' => 'TTDN-GDTX Tịnh Biên',
                'district_id' => 580,
                'city_id' => 51,
            ),
            461 => 
            array (
                'id' => 3462,
                'code' => '027',
                'name' => 'THPT Nguyễn Trung Trực',
                'district_id' => 581,
                'city_id' => 51,
            ),
            462 => 
            array (
                'id' => 3463,
                'code' => '028',
                'name' => 'THPT Dân Tộc Nội Trú',
                'district_id' => 581,
                'city_id' => 51,
            ),
            463 => 
            array (
                'id' => 3464,
                'code' => '029',
                'name' => 'THPT Ba Chúc',
                'district_id' => 581,
                'city_id' => 51,
            ),
            464 => 
            array (
                'id' => 3465,
                'code' => '065',
                'name' => 'TT. GDTX Tri Tôn',
                'district_id' => 581,
                'city_id' => 51,
            ),
            465 => 
            array (
                'id' => 3466,
                'code' => '073',
                'name' => 'TC Nghề Dân tộc Nội Trú An Giang',
                'district_id' => 581,
                'city_id' => 51,
            ),
            466 => 
            array (
                'id' => 3467,
                'code' => '077',
                'name' => 'Trường Phổ thông Cô Tô',
                'district_id' => 581,
                'city_id' => 51,
            ),
            467 => 
            array (
                'id' => 3468,
                'code' => '019',
                'name' => 'THPT Trần Văn Thành',
                'district_id' => 582,
                'city_id' => 51,
            ),
            468 => 
            array (
                'id' => 3469,
                'code' => '020',
                'name' => 'THPT Châu Phú',
                'district_id' => 582,
                'city_id' => 51,
            ),
            469 => 
            array (
                'id' => 3470,
                'code' => '021',
                'name' => 'THPT Thạnh Mỹ Tây',
                'district_id' => 582,
                'city_id' => 51,
            ),
            470 => 
            array (
                'id' => 3471,
                'code' => '022',
                'name' => 'THPT Bình Mỹ',
                'district_id' => 582,
                'city_id' => 51,
            ),
            471 => 
            array (
                'id' => 3472,
                'code' => '023',
                'name' => 'Trường Phổ thông  Bình Long',
                'district_id' => 582,
                'city_id' => 51,
            ),
            472 => 
            array (
                'id' => 3473,
                'code' => '061',
                'name' => 'TTDN-GDTX Châu Phú',
                'district_id' => 582,
                'city_id' => 51,
            ),
            473 => 
            array (
                'id' => 3474,
                'code' => '076',
                'name' => 'Trường TC Kinh tế - Kỹ thuật An Giang',
                'district_id' => 582,
                'city_id' => 51,
            ),
            474 => 
            array (
                'id' => 3475,
                'code' => '030',
                'name' => 'THPT Nguyễn Hữu Cảnh',
                'district_id' => 583,
                'city_id' => 51,
            ),
            475 => 
            array (
                'id' => 3476,
                'code' => '031',
                'name' => 'THPT Châu Văn Liêm',
                'district_id' => 583,
                'city_id' => 51,
            ),
            476 => 
            array (
                'id' => 3477,
                'code' => '032',
                'name' => 'THPT Huỳnh Thị Hưởng',
                'district_id' => 583,
                'city_id' => 51,
            ),
            477 => 
            array (
                'id' => 3478,
                'code' => '033',
                'name' => 'THPT Long Kiến',
                'district_id' => 583,
                'city_id' => 51,
            ),
            478 => 
            array (
                'id' => 3479,
                'code' => '034',
                'name' => 'THPT Mỹ Hiệp',
                'district_id' => 583,
                'city_id' => 51,
            ),
            479 => 
            array (
                'id' => 3480,
                'code' => '047',
                'name' => 'THPT Mỹ Hội Đông',
                'district_id' => 583,
                'city_id' => 51,
            ),
            480 => 
            array (
                'id' => 3481,
                'code' => '049',
                'name' => 'THPT Hòa Bình',
                'district_id' => 583,
                'city_id' => 51,
            ),
            481 => 
            array (
                'id' => 3482,
                'code' => '058',
                'name' => 'TT. GDTX Chợ Mới',
                'district_id' => 583,
                'city_id' => 51,
            ),
            482 => 
            array (
                'id' => 3483,
                'code' => '059',
                'name' => 'TT. GDTX Mỹ Luông',
                'district_id' => 583,
                'city_id' => 51,
            ),
            483 => 
            array (
                'id' => 3484,
                'code' => '037',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 584,
                'city_id' => 51,
            ),
            484 => 
            array (
                'id' => 3485,
                'code' => '039',
                'name' => 'THPT Vĩnh Bình',
                'district_id' => 584,
                'city_id' => 51,
            ),
            485 => 
            array (
                'id' => 3486,
                'code' => '053',
                'name' => 'THPT Cần Đăng',
                'district_id' => 584,
                'city_id' => 51,
            ),
            486 => 
            array (
                'id' => 3487,
                'code' => '063',
                'name' => 'TTDN-GDTX Châu Thành',
                'district_id' => 584,
                'city_id' => 51,
            ),
            487 => 
            array (
                'id' => 3488,
                'code' => '040',
                'name' => 'THPT Nguyễn Văn Thoại',
                'district_id' => 585,
                'city_id' => 51,
            ),
            488 => 
            array (
                'id' => 3489,
                'code' => '041',
                'name' => 'THPT Nguyễn Khuyến',
                'district_id' => 585,
                'city_id' => 51,
            ),
            489 => 
            array (
                'id' => 3490,
                'code' => '044',
                'name' => 'THPT Vọng Thê',
                'district_id' => 585,
                'city_id' => 51,
            ),
            490 => 
            array (
                'id' => 3491,
                'code' => '048',
                'name' => 'THPT Vĩnh Trạch',
                'district_id' => 585,
                'city_id' => 51,
            ),
            491 => 
            array (
                'id' => 3492,
                'code' => '060',
                'name' => 'TTDN-GDTX Thoại Sơn',
                'district_id' => 585,
                'city_id' => 51,
            ),
            492 => 
            array (
                'id' => 3493,
                'code' => '001',
                'name' => 'THPT Vũng Tàu',
                'district_id' => 586,
                'city_id' => 52,
            ),
            493 => 
            array (
                'id' => 3494,
                'code' => '002',
                'name' => 'THPT Trần Nguyên Hãn',
                'district_id' => 586,
                'city_id' => 52,
            ),
            494 => 
            array (
                'id' => 3495,
                'code' => '003',
                'name' => 'THPT Đinh Tiên Hoàng',
                'district_id' => 586,
                'city_id' => 52,
            ),
            495 => 
            array (
                'id' => 3496,
                'code' => '004',
                'name' => 'THPT Chuyên Lê Quý Đôn',
                'district_id' => 586,
                'city_id' => 52,
            ),
            496 => 
            array (
                'id' => 3497,
                'code' => '013',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 586,
                'city_id' => 52,
            ),
            497 => 
            array (
                'id' => 3498,
                'code' => '017',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 586,
                'city_id' => 52,
            ),
            498 => 
            array (
                'id' => 3499,
                'code' => '025',
                'name' => 'BTVH Cấp 2,3 Nguyễn Thái  Học',
                'district_id' => 586,
                'city_id' => 52,
            ),
            499 => 
            array (
                'id' => 3500,
                'code' => '030',
                'name' => 'TTGDTX-HN Vũng Tàu',
                'district_id' => 586,
                'city_id' => 52,
            ),
        ));
        \DB::table('organization_school')->insert(array (
            0 => 
            array (
                'id' => 3501,
                'code' => '040',
                'name' => 'THPT Nguyễn Thị Minh Khai',
                'district_id' => 586,
                'city_id' => 52,
            ),
            1 => 
            array (
                'id' => 3502,
                'code' => '041',
                'name' => 'THCS - THPT Song ngữ',
                'district_id' => 586,
                'city_id' => 52,
            ),
            2 => 
            array (
                'id' => 3503,
                'code' => '042',
                'name' => 'CĐ nghề Dầu khí',
                'district_id' => 586,
                'city_id' => 52,
            ),
            3 => 
            array (
                'id' => 3504,
                'code' => '043',
                'name' => 'CĐ nghề Du lịch Vũng Tàu',
                'district_id' => 586,
                'city_id' => 52,
            ),
            4 => 
            array (
                'id' => 3505,
                'code' => '045',
                'name' => 'TC nghề Giao thông vận tải',
                'district_id' => 586,
                'city_id' => 52,
            ),
            5 => 
            array (
                'id' => 3506,
                'code' => '047',
                'name' => 'TC nghề KTKT Công đoàn Bà Rịa - VT',
                'district_id' => 586,
                'city_id' => 52,
            ),
            6 => 
            array (
                'id' => 3507,
                'code' => '048',
                'name' => 'TC Công nghệ thông tin TM. COMPUTER',
                'district_id' => 586,
                'city_id' => 52,
            ),
            7 => 
            array (
                'id' => 3508,
                'code' => '007',
                'name' => 'THPT Châu Thành',
                'district_id' => 587,
                'city_id' => 52,
            ),
            8 => 
            array (
                'id' => 3509,
                'code' => '009',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 587,
                'city_id' => 52,
            ),
            9 => 
            array (
                'id' => 3510,
                'code' => '026',
                'name' => 'TTGDTX-DN-GTVL Bà Rịa',
                'district_id' => 587,
                'city_id' => 52,
            ),
            10 => 
            array (
                'id' => 3511,
                'code' => '033',
                'name' => 'THPT DL Chu Văn An',
                'district_id' => 587,
                'city_id' => 52,
            ),
            11 => 
            array (
                'id' => 3512,
                'code' => '039',
                'name' => 'THPT Bà Rịa',
                'district_id' => 587,
                'city_id' => 52,
            ),
            12 => 
            array (
                'id' => 3513,
                'code' => '011',
                'name' => 'THPT Xuyên Mộc',
                'district_id' => 588,
                'city_id' => 52,
            ),
            13 => 
            array (
                'id' => 3514,
                'code' => '015',
                'name' => 'THPT Phước Bửu',
                'district_id' => 588,
                'city_id' => 52,
            ),
            14 => 
            array (
                'id' => 3515,
                'code' => '016',
                'name' => 'THPT Hòa Bình',
                'district_id' => 588,
                'city_id' => 52,
            ),
            15 => 
            array (
                'id' => 3516,
                'code' => '021',
                'name' => 'TTGDTX-DN-GTVL Xuyên Mộc',
                'district_id' => 588,
                'city_id' => 52,
            ),
            16 => 
            array (
                'id' => 3517,
                'code' => '035',
                'name' => 'THPT Hoà Hội',
                'district_id' => 588,
                'city_id' => 52,
            ),
            17 => 
            array (
                'id' => 3518,
                'code' => '049',
                'name' => 'THPT Bưng Riềng',
                'district_id' => 588,
                'city_id' => 52,
            ),
            18 => 
            array (
                'id' => 3519,
                'code' => '005',
                'name' => 'THPT Trần Văn Quan',
                'district_id' => 589,
                'city_id' => 52,
            ),
            19 => 
            array (
                'id' => 3520,
                'code' => '018',
                'name' => 'THPT Long Hải - Phước tỉnh',
                'district_id' => 589,
                'city_id' => 52,
            ),
            20 => 
            array (
                'id' => 3521,
                'code' => '027',
                'name' => 'TTGDTX Long Điền',
                'district_id' => 589,
                'city_id' => 52,
            ),
            21 => 
            array (
                'id' => 3522,
                'code' => '036',
                'name' => 'THPT Trần Quang Khải',
                'district_id' => 589,
                'city_id' => 52,
            ),
            22 => 
            array (
                'id' => 3523,
                'code' => '037',
                'name' => 'THPT Dương Bạch Mai',
                'district_id' => 589,
                'city_id' => 52,
            ),
            23 => 
            array (
                'id' => 3524,
                'code' => '044',
                'name' => 'CĐ nghề tỉnh Bà Rịa-Vũng Tàu',
                'district_id' => 589,
                'city_id' => 52,
            ),
            24 => 
            array (
                'id' => 3525,
                'code' => '051',
                'name' => 'THPT Minh Đạm',
                'district_id' => 589,
                'city_id' => 52,
            ),
            25 => 
            array (
                'id' => 3526,
                'code' => '012',
                'name' => 'THCS-THPT Võ Thị Sáu',
                'district_id' => 590,
                'city_id' => 52,
            ),
            26 => 
            array (
                'id' => 3527,
                'code' => '038',
                'name' => 'TTGDTX Côn Đảo',
                'district_id' => 590,
                'city_id' => 52,
            ),
            27 => 
            array (
                'id' => 3528,
                'code' => '014',
                'name' => 'THPT Phú Mỹ',
                'district_id' => 591,
                'city_id' => 52,
            ),
            28 => 
            array (
                'id' => 3529,
                'code' => '022',
                'name' => 'THPT Hắc Dịch',
                'district_id' => 591,
                'city_id' => 52,
            ),
            29 => 
            array (
                'id' => 3530,
                'code' => '023',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 591,
                'city_id' => 52,
            ),
            30 => 
            array (
                'id' => 3531,
                'code' => '028',
                'name' => 'TTGDTX Tân Thành',
                'district_id' => 591,
                'city_id' => 52,
            ),
            31 => 
            array (
                'id' => 3532,
                'code' => '046',
                'name' => 'CĐ nghề quốc tế Hồng Lam',
                'district_id' => 591,
                'city_id' => 52,
            ),
            32 => 
            array (
                'id' => 3533,
                'code' => '008',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 592,
                'city_id' => 52,
            ),
            33 => 
            array (
                'id' => 3534,
                'code' => '010',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 592,
                'city_id' => 52,
            ),
            34 => 
            array (
                'id' => 3535,
                'code' => '019',
                'name' => 'Phổ thông dân tộc nội trú tỉnh',
                'district_id' => 592,
                'city_id' => 52,
            ),
            35 => 
            array (
                'id' => 3536,
                'code' => '020',
                'name' => 'THPT Ngô Quyền',
                'district_id' => 592,
                'city_id' => 52,
            ),
            36 => 
            array (
                'id' => 3537,
                'code' => '024',
                'name' => 'THPT Trần Phú',
                'district_id' => 592,
                'city_id' => 52,
            ),
            37 => 
            array (
                'id' => 3538,
                'code' => '029',
                'name' => 'TTGDTX-DN-GTVL Châu Đức',
                'district_id' => 592,
                'city_id' => 52,
            ),
            38 => 
            array (
                'id' => 3539,
                'code' => '032',
                'name' => 'THPT Nguyễn Văn Cừ',
                'district_id' => 592,
                'city_id' => 52,
            ),
            39 => 
            array (
                'id' => 3540,
                'code' => '006',
                'name' => 'THPT Võ Thị Sáu',
                'district_id' => 593,
                'city_id' => 52,
            ),
            40 => 
            array (
                'id' => 3541,
                'code' => '034',
                'name' => 'TTGDTX-HN Đất Đỏ',
                'district_id' => 593,
                'city_id' => 52,
            ),
            41 => 
            array (
                'id' => 3542,
                'code' => '015',
                'name' => 'THPT Nguyễn Đình Chiểu',
                'district_id' => 594,
                'city_id' => 53,
            ),
            42 => 
            array (
                'id' => 3543,
                'code' => '016',
                'name' => 'THPT Chuyên TG',
                'district_id' => 594,
                'city_id' => 53,
            ),
            43 => 
            array (
                'id' => 3544,
                'code' => '017',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 594,
                'city_id' => 53,
            ),
            44 => 
            array (
                'id' => 3545,
                'code' => '018',
                'name' => 'THPT  Âp Bắc',
                'district_id' => 594,
                'city_id' => 53,
            ),
            45 => 
            array (
                'id' => 3546,
                'code' => '035',
                'name' => 'THPT Phước Thạnh',
                'district_id' => 594,
                'city_id' => 53,
            ),
            46 => 
            array (
                'id' => 3547,
                'code' => '037',
                'name' => 'THPT NK TDTT',
                'district_id' => 594,
                'city_id' => 53,
            ),
            47 => 
            array (
                'id' => 3548,
                'code' => '038',
                'name' => 'TTGDTX Mỹ Tho',
                'district_id' => 594,
                'city_id' => 53,
            ),
            48 => 
            array (
                'id' => 3549,
                'code' => '044',
                'name' => 'Trường Văn  hóa 2 Bộ Công An',
                'district_id' => 594,
                'city_id' => 53,
            ),
            49 => 
            array (
                'id' => 3550,
                'code' => '045',
                'name' => 'Trường CĐ Nghề Tiền Giang',
                'district_id' => 594,
                'city_id' => 53,
            ),
            50 => 
            array (
                'id' => 3551,
                'code' => '046',
                'name' => 'Trường TC Kinh tế-Kỹ Thuật Tiền Giang',
                'district_id' => 594,
                'city_id' => 53,
            ),
            51 => 
            array (
                'id' => 3552,
                'code' => '052',
                'name' => 'Trường CĐ Nông nghiệp Nam Bộ',
                'district_id' => 594,
                'city_id' => 53,
            ),
            52 => 
            array (
                'id' => 3553,
                'code' => '025',
                'name' => 'THPT Trương Định',
                'district_id' => 595,
                'city_id' => 53,
            ),
            53 => 
            array (
                'id' => 3554,
                'code' => '026',
                'name' => 'THPT Gò Công',
                'district_id' => 595,
                'city_id' => 53,
            ),
            54 => 
            array (
                'id' => 3555,
                'code' => '032',
                'name' => 'THPT Bình Đông',
                'district_id' => 595,
                'city_id' => 53,
            ),
            55 => 
            array (
                'id' => 3556,
                'code' => '049',
                'name' => 'Trường TC Nghề Khu vực Gò Công',
                'district_id' => 595,
                'city_id' => 53,
            ),
            56 => 
            array (
                'id' => 3557,
                'code' => '050',
                'name' => 'Trường TC Nghề Khu vực Cai Lậy',
                'district_id' => 595,
                'city_id' => 53,
            ),
            57 => 
            array (
                'id' => 3558,
                'code' => '001',
                'name' => 'THPT Cái Bè',
                'district_id' => 596,
                'city_id' => 53,
            ),
            58 => 
            array (
                'id' => 3559,
                'code' => '002',
                'name' => 'THPT Phạm Thành Trung',
                'district_id' => 596,
                'city_id' => 53,
            ),
            59 => 
            array (
                'id' => 3560,
                'code' => '003',
                'name' => 'THPT Thiên Hộ Dương',
                'district_id' => 596,
                'city_id' => 53,
            ),
            60 => 
            array (
                'id' => 3561,
                'code' => '004',
                'name' => 'THPT Huỳnh Văn Sâm',
                'district_id' => 596,
                'city_id' => 53,
            ),
            61 => 
            array (
                'id' => 3562,
                'code' => '005',
                'name' => 'THPT  Lê Thanh Hiền',
                'district_id' => 596,
                'city_id' => 53,
            ),
            62 => 
            array (
                'id' => 3563,
                'code' => '036',
                'name' => 'THPT Ngô Văn Nhạc',
                'district_id' => 596,
                'city_id' => 53,
            ),
            63 => 
            array (
                'id' => 3564,
                'code' => '047',
                'name' => 'Trường TC Kỹ thuật - Nghiệp vụ Cái Bè',
                'district_id' => 596,
                'city_id' => 53,
            ),
            64 => 
            array (
                'id' => 3565,
                'code' => '007',
                'name' => 'THPT Lưu Tấn Phát',
                'district_id' => 597,
                'city_id' => 53,
            ),
            65 => 
            array (
                'id' => 3566,
                'code' => '031',
                'name' => 'THPT Phan Việt Thống',
                'district_id' => 597,
                'city_id' => 53,
            ),
            66 => 
            array (
                'id' => 3567,
                'code' => '010',
                'name' => 'THPT Tân Hiệp',
                'district_id' => 598,
                'city_id' => 53,
            ),
            67 => 
            array (
                'id' => 3568,
                'code' => '011',
                'name' => 'THPT Vĩnh Kim',
                'district_id' => 598,
                'city_id' => 53,
            ),
            68 => 
            array (
                'id' => 3569,
                'code' => '012',
                'name' => 'THPT Dưỡng Điềm',
                'district_id' => 598,
                'city_id' => 53,
            ),
            69 => 
            array (
                'id' => 3570,
                'code' => '013',
                'name' => 'THPT Nam Kỳ Khởi Nghĩa',
                'district_id' => 598,
                'city_id' => 53,
            ),
            70 => 
            array (
                'id' => 3571,
                'code' => '014',
                'name' => 'THPT Rạch Gầm-Xoài Mút',
                'district_id' => 598,
                'city_id' => 53,
            ),
            71 => 
            array (
                'id' => 3572,
                'code' => '039',
                'name' => 'TTGDTX  HN Châu Thành',
                'district_id' => 598,
                'city_id' => 53,
            ),
            72 => 
            array (
                'id' => 3573,
                'code' => '019',
                'name' => 'THPT Chợ Gạo',
                'district_id' => 599,
                'city_id' => 53,
            ),
            73 => 
            array (
                'id' => 3574,
                'code' => '020',
                'name' => 'THPT Thủ Khoa Huân',
                'district_id' => 599,
                'city_id' => 53,
            ),
            74 => 
            array (
                'id' => 3575,
                'code' => '021',
                'name' => 'THPT  Trần Văn Hoài',
                'district_id' => 599,
                'city_id' => 53,
            ),
            75 => 
            array (
                'id' => 3576,
                'code' => '033',
                'name' => 'THPT Bình Phục Nhứt',
                'district_id' => 599,
                'city_id' => 53,
            ),
            76 => 
            array (
                'id' => 3577,
                'code' => '040',
                'name' => 'TTGDTX  HN Chợ Gạo',
                'district_id' => 599,
                'city_id' => 53,
            ),
            77 => 
            array (
                'id' => 3578,
                'code' => '022',
                'name' => 'THPT Vĩnh Bình',
                'district_id' => 600,
                'city_id' => 53,
            ),
            78 => 
            array (
                'id' => 3579,
                'code' => '023',
                'name' => 'THPT Long Bình',
                'district_id' => 600,
                'city_id' => 53,
            ),
            79 => 
            array (
                'id' => 3580,
                'code' => '024',
                'name' => 'THPT  Nguyễn Văn Thìn',
                'district_id' => 600,
                'city_id' => 53,
            ),
            80 => 
            array (
                'id' => 3581,
                'code' => '041',
                'name' => 'TTGDTX  HN Gò Công Tây',
                'district_id' => 600,
                'city_id' => 53,
            ),
            81 => 
            array (
                'id' => 3582,
                'code' => '027',
                'name' => 'THPT Nguyễn Văn Côn',
                'district_id' => 601,
                'city_id' => 53,
            ),
            82 => 
            array (
                'id' => 3583,
                'code' => '028',
                'name' => 'THPT Gò Công Đông',
                'district_id' => 601,
                'city_id' => 53,
            ),
            83 => 
            array (
                'id' => 3584,
                'code' => '042',
                'name' => 'TTGDTX  HN Gò Công Đông',
                'district_id' => 601,
                'city_id' => 53,
            ),
            84 => 
            array (
                'id' => 3585,
                'code' => '029',
                'name' => 'THPT Tân Phước',
                'district_id' => 602,
                'city_id' => 53,
            ),
            85 => 
            array (
                'id' => 3586,
                'code' => '030',
                'name' => 'THPT Nguyễn Văn Tiếp',
                'district_id' => 602,
                'city_id' => 53,
            ),
            86 => 
            array (
                'id' => 3587,
                'code' => '043',
                'name' => 'TTGDTX  HN Tân Phước',
                'district_id' => 602,
                'city_id' => 53,
            ),
            87 => 
            array (
                'id' => 3588,
                'code' => '034',
                'name' => 'THPT Phú Thạnh',
                'district_id' => 603,
                'city_id' => 53,
            ),
            88 => 
            array (
                'id' => 3589,
                'code' => '006',
                'name' => 'THPT Đốc Binh Kiều',
                'district_id' => 604,
                'city_id' => 53,
            ),
            89 => 
            array (
                'id' => 3590,
                'code' => '008',
                'name' => 'THPT Lê Văn Phẩm',
                'district_id' => 604,
                'city_id' => 53,
            ),
            90 => 
            array (
                'id' => 3591,
                'code' => '009',
                'name' => 'THPT  Tứ Kiệt',
                'district_id' => 604,
                'city_id' => 53,
            ),
            91 => 
            array (
                'id' => 3592,
                'code' => '048',
                'name' => 'Trường TC Kinh tế - Công nghệ Cai Lậy',
                'district_id' => 604,
                'city_id' => 53,
            ),
            92 => 
            array (
                'id' => 3593,
                'code' => '051',
                'name' => 'Trường TC Bách Khoa Gò Công',
                'district_id' => 604,
                'city_id' => 53,
            ),
            93 => 
            array (
                'id' => 3594,
                'code' => '001',
                'name' => 'THPT Nguyễn Trung Trực',
                'district_id' => 605,
                'city_id' => 54,
            ),
            94 => 
            array (
                'id' => 3595,
                'code' => '002',
                'name' => 'THPT chuyên Huỳnh Mẫn Đạt',
                'district_id' => 605,
                'city_id' => 54,
            ),
            95 => 
            array (
                'id' => 3596,
                'code' => '003',
                'name' => 'THPT Nguyễn Hùng Sơn',
                'district_id' => 605,
                'city_id' => 54,
            ),
            96 => 
            array (
                'id' => 3597,
                'code' => '004',
                'name' => 'THPT  iSCHOOL Rạch Giá',
                'district_id' => 605,
                'city_id' => 54,
            ),
            97 => 
            array (
                'id' => 3598,
                'code' => '005',
                'name' => 'Trung cấp Kỹ thuật-Nghiệp vụ Kiên Giang',
                'district_id' => 605,
                'city_id' => 54,
            ),
            98 => 
            array (
                'id' => 3599,
                'code' => '013',
                'name' => 'PT Dân tộc Nội trú Tỉnh',
                'district_id' => 605,
                'city_id' => 54,
            ),
            99 => 
            array (
                'id' => 3600,
                'code' => '022',
                'name' => 'Trung tâm GDTX Tỉnh',
                'district_id' => 605,
                'city_id' => 54,
            ),
            100 => 
            array (
                'id' => 3601,
                'code' => '041',
                'name' => 'THPT Phó Cơ Điều',
                'district_id' => 605,
                'city_id' => 54,
            ),
            101 => 
            array (
                'id' => 3602,
                'code' => '061',
                'name' => 'THPT Ngô Sĩ Liên',
                'district_id' => 605,
                'city_id' => 54,
            ),
            102 => 
            array (
                'id' => 3603,
                'code' => '079',
                'name' => 'Cao đẳng Nghề tỉnh Kiên Giang',
                'district_id' => 605,
                'city_id' => 54,
            ),
            103 => 
            array (
                'id' => 3604,
                'code' => '006',
                'name' => 'THPT Nguyễn Thần Hiến',
                'district_id' => 606,
                'city_id' => 54,
            ),
            104 => 
            array (
                'id' => 3605,
                'code' => '043',
                'name' => 'Trung tâm GDTX TX Hà Tiên',
                'district_id' => 606,
                'city_id' => 54,
            ),
            105 => 
            array (
                'id' => 3606,
                'code' => '007',
                'name' => 'THPT Kiên Lương',
                'district_id' => 607,
                'city_id' => 54,
            ),
            106 => 
            array (
                'id' => 3607,
                'code' => '044',
                'name' => 'Trung tâm GDTX Kiên Lương',
                'district_id' => 607,
                'city_id' => 54,
            ),
            107 => 
            array (
                'id' => 3608,
                'code' => '076',
                'name' => 'THPT Ba Hòn',
                'district_id' => 607,
                'city_id' => 54,
            ),
            108 => 
            array (
                'id' => 3609,
                'code' => '008',
                'name' => 'THPT Hòn Đất',
                'district_id' => 608,
                'city_id' => 54,
            ),
            109 => 
            array (
                'id' => 3610,
                'code' => '038',
                'name' => 'THPT Sóc Sơn',
                'district_id' => 608,
                'city_id' => 54,
            ),
            110 => 
            array (
                'id' => 3611,
                'code' => '045',
                'name' => 'Trung tâm GDTX Hòn Đất',
                'district_id' => 608,
                'city_id' => 54,
            ),
            111 => 
            array (
                'id' => 3612,
                'code' => '055',
                'name' => 'THPT Bình Sơn',
                'district_id' => 608,
                'city_id' => 54,
            ),
            112 => 
            array (
                'id' => 3613,
                'code' => '062',
                'name' => 'THPT Phan Thị Ràng',
                'district_id' => 608,
                'city_id' => 54,
            ),
            113 => 
            array (
                'id' => 3614,
                'code' => '071',
                'name' => 'THPT Nguyễn Hùng Hiệp',
                'district_id' => 608,
                'city_id' => 54,
            ),
            114 => 
            array (
                'id' => 3615,
                'code' => '077',
                'name' => 'THPT Nam Thái Sơn',
                'district_id' => 608,
                'city_id' => 54,
            ),
            115 => 
            array (
                'id' => 3616,
                'code' => '009',
                'name' => 'THPT Tân Hiệp',
                'district_id' => 609,
                'city_id' => 54,
            ),
            116 => 
            array (
                'id' => 3617,
                'code' => '011',
                'name' => 'THPT Thạnh Đông',
                'district_id' => 609,
                'city_id' => 54,
            ),
            117 => 
            array (
                'id' => 3618,
                'code' => '046',
                'name' => 'Trung tâm GDTX Tân Hiệp',
                'district_id' => 609,
                'city_id' => 54,
            ),
            118 => 
            array (
                'id' => 3619,
                'code' => '056',
                'name' => 'THPT Cây Dương',
                'district_id' => 609,
                'city_id' => 54,
            ),
            119 => 
            array (
                'id' => 3620,
                'code' => '075',
                'name' => 'THPT Thạnh Tây',
                'district_id' => 609,
                'city_id' => 54,
            ),
            120 => 
            array (
                'id' => 3621,
                'code' => '012',
                'name' => 'THPT Châu Thành',
                'district_id' => 610,
                'city_id' => 54,
            ),
            121 => 
            array (
                'id' => 3622,
                'code' => '047',
                'name' => 'Trung tâm GDTX Châu Thành',
                'district_id' => 610,
                'city_id' => 54,
            ),
            122 => 
            array (
                'id' => 3623,
                'code' => '067',
                'name' => 'THPT Mong Thọ',
                'district_id' => 610,
                'city_id' => 54,
            ),
            123 => 
            array (
                'id' => 3624,
                'code' => '014',
                'name' => 'THPT Giồng Riềng',
                'district_id' => 611,
                'city_id' => 54,
            ),
            124 => 
            array (
                'id' => 3625,
                'code' => '039',
                'name' => 'THPT Hòa Thuận',
                'district_id' => 611,
                'city_id' => 54,
            ),
            125 => 
            array (
                'id' => 3626,
                'code' => '040',
                'name' => 'THPT Long Thạnh',
                'district_id' => 611,
                'city_id' => 54,
            ),
            126 => 
            array (
                'id' => 3627,
                'code' => '048',
                'name' => 'Trung tâm GDTX Giồng Riềng',
                'district_id' => 611,
                'city_id' => 54,
            ),
            127 => 
            array (
                'id' => 3628,
                'code' => '057',
                'name' => 'THPT Thạnh Lộc',
                'district_id' => 611,
                'city_id' => 54,
            ),
            128 => 
            array (
                'id' => 3629,
                'code' => '063',
                'name' => 'THPT Hoà Hưng',
                'district_id' => 611,
                'city_id' => 54,
            ),
            129 => 
            array (
                'id' => 3630,
                'code' => '069',
                'name' => 'THPT Bàn Tân Định',
                'district_id' => 611,
                'city_id' => 54,
            ),
            130 => 
            array (
                'id' => 3631,
                'code' => '082',
                'name' => 'Trung cấp Nghề DTNT tỉnh Kiên Giang',
                'district_id' => 611,
                'city_id' => 54,
            ),
            131 => 
            array (
                'id' => 3632,
                'code' => '084',
                'name' => 'THCS Thạnh Phước',
                'district_id' => 611,
                'city_id' => 54,
            ),
            132 => 
            array (
                'id' => 3633,
                'code' => '015',
                'name' => 'THPT Gò Quao',
                'district_id' => 612,
                'city_id' => 54,
            ),
            133 => 
            array (
                'id' => 3634,
                'code' => '049',
                'name' => 'Trung tâm GDTX Gò Quao',
                'district_id' => 612,
                'city_id' => 54,
            ),
            134 => 
            array (
                'id' => 3635,
                'code' => '064',
                'name' => 'THPT Định An',
                'district_id' => 612,
                'city_id' => 54,
            ),
            135 => 
            array (
                'id' => 3636,
                'code' => '065',
                'name' => 'THPT Vĩnh Thắng',
                'district_id' => 612,
                'city_id' => 54,
            ),
            136 => 
            array (
                'id' => 3637,
                'code' => '070',
                'name' => 'THPT Vĩnh Hoà Hưng Bắc',
                'district_id' => 612,
                'city_id' => 54,
            ),
            137 => 
            array (
                'id' => 3638,
                'code' => '072',
                'name' => 'THPT Thới Quản',
                'district_id' => 612,
                'city_id' => 54,
            ),
            138 => 
            array (
                'id' => 3639,
                'code' => '016',
                'name' => 'THPT An Biên',
                'district_id' => 613,
                'city_id' => 54,
            ),
            139 => 
            array (
                'id' => 3640,
                'code' => '042',
                'name' => 'THPT Đông Thái',
                'district_id' => 613,
                'city_id' => 54,
            ),
            140 => 
            array (
                'id' => 3641,
                'code' => '050',
                'name' => 'Trung tâm GDTX An Biên',
                'district_id' => 613,
                'city_id' => 54,
            ),
            141 => 
            array (
                'id' => 3642,
                'code' => '068',
                'name' => 'THPT Nam Yên',
                'district_id' => 613,
                'city_id' => 54,
            ),
            142 => 
            array (
                'id' => 3643,
                'code' => '017',
                'name' => 'THPT An Minh',
                'district_id' => 614,
                'city_id' => 54,
            ),
            143 => 
            array (
                'id' => 3644,
                'code' => '051',
                'name' => 'Trung tâm GDTX An Minh',
                'district_id' => 614,
                'city_id' => 54,
            ),
            144 => 
            array (
                'id' => 3645,
                'code' => '059',
                'name' => 'THPT Nguyễn Văn Xiện',
                'district_id' => 614,
                'city_id' => 54,
            ),
            145 => 
            array (
                'id' => 3646,
                'code' => '010',
                'name' => 'THPT Vĩnh Phong',
                'district_id' => 615,
                'city_id' => 54,
            ),
            146 => 
            array (
                'id' => 3647,
                'code' => '018',
                'name' => 'THPT Vĩnh Thuận',
                'district_id' => 615,
                'city_id' => 54,
            ),
            147 => 
            array (
                'id' => 3648,
                'code' => '052',
                'name' => 'Trung tâm GDTX Vĩnh Thuận',
                'district_id' => 615,
                'city_id' => 54,
            ),
            148 => 
            array (
                'id' => 3649,
                'code' => '060',
                'name' => 'THPT Vĩnh Bình Bắc',
                'district_id' => 615,
                'city_id' => 54,
            ),
            149 => 
            array (
                'id' => 3650,
                'code' => '066',
                'name' => 'THPT Vân Khánh',
                'district_id' => 615,
                'city_id' => 54,
            ),
            150 => 
            array (
                'id' => 3651,
                'code' => '081',
                'name' => 'THCS An Sơn',
                'district_id' => 615,
                'city_id' => 54,
            ),
            151 => 
            array (
                'id' => 3652,
                'code' => '019',
                'name' => 'THPT Phú Quốc',
                'district_id' => 616,
                'city_id' => 54,
            ),
            152 => 
            array (
                'id' => 3653,
                'code' => '020',
                'name' => 'THPT An Thới',
                'district_id' => 616,
                'city_id' => 54,
            ),
            153 => 
            array (
                'id' => 3654,
                'code' => '053',
                'name' => 'Trung tâm GDTX Phú Quốc',
                'district_id' => 616,
                'city_id' => 54,
            ),
            154 => 
            array (
                'id' => 3655,
                'code' => '080',
                'name' => 'THPT Dương Đông',
                'district_id' => 616,
                'city_id' => 54,
            ),
            155 => 
            array (
                'id' => 3656,
                'code' => '021',
                'name' => 'THPT Kiên Hải',
                'district_id' => 617,
                'city_id' => 54,
            ),
            156 => 
            array (
                'id' => 3657,
                'code' => '074',
                'name' => 'THPT Lại Sơn',
                'district_id' => 617,
                'city_id' => 54,
            ),
            157 => 
            array (
                'id' => 3658,
                'code' => '058',
                'name' => 'THPT U Minh Thượng',
                'district_id' => 618,
                'city_id' => 54,
            ),
            158 => 
            array (
                'id' => 3659,
                'code' => '073',
                'name' => 'THPT Minh Thuận',
                'district_id' => 618,
                'city_id' => 54,
            ),
            159 => 
            array (
                'id' => 3660,
                'code' => '078',
                'name' => 'THPT Vĩnh Hoà',
                'district_id' => 618,
                'city_id' => 54,
            ),
            160 => 
            array (
                'id' => 3661,
                'code' => '054',
                'name' => 'THPT Thoại Ngọc Hầu',
                'district_id' => 619,
                'city_id' => 54,
            ),
            161 => 
            array (
                'id' => 3662,
                'code' => '083',
                'name' => 'Trung tâm GDTX Giang Thành',
                'district_id' => 619,
                'city_id' => 54,
            ),
            162 => 
            array (
                'id' => 3663,
                'code' => '000',
                'name' => 'Sở GD - ĐT Cần Thơ',
                'district_id' => 620,
                'city_id' => 55,
            ),
            163 => 
            array (
                'id' => 3664,
                'code' => '002',
                'name' => 'THPT Châu Văn Liêm',
                'district_id' => 620,
                'city_id' => 55,
            ),
            164 => 
            array (
                'id' => 3665,
                'code' => '003',
                'name' => 'THPT Nguyễn Việt Hồng',
                'district_id' => 620,
                'city_id' => 55,
            ),
            165 => 
            array (
                'id' => 3666,
                'code' => '004',
                'name' => 'THPT Phan Ngọc Hiển',
                'district_id' => 620,
                'city_id' => 55,
            ),
            166 => 
            array (
                'id' => 3667,
                'code' => '006',
                'name' => 'THPT  Nguyễn Bỉnh Khiêm',
                'district_id' => 620,
                'city_id' => 55,
            ),
            167 => 
            array (
                'id' => 3668,
                'code' => '007',
                'name' => 'THPT Thái Bình Dương',
                'district_id' => 620,
                'city_id' => 55,
            ),
            168 => 
            array (
                'id' => 3669,
                'code' => '008',
                'name' => 'TT GDTX  Ninh Kiều',
                'district_id' => 620,
                'city_id' => 55,
            ),
            169 => 
            array (
                'id' => 3670,
                'code' => '009',
                'name' => 'TT Ngoại ngữ - Tin học TP.Cần Thơ',
                'district_id' => 620,
                'city_id' => 55,
            ),
            170 => 
            array (
                'id' => 3671,
                'code' => '010',
                'name' => 'TTGDTX-KTTH-HN Cần Thơ',
                'district_id' => 620,
                'city_id' => 55,
            ),
            171 => 
            array (
                'id' => 3672,
                'code' => '011',
                'name' => 'Phòng GD&ĐT Q.Ninh Kiều',
                'district_id' => 620,
                'city_id' => 55,
            ),
            172 => 
            array (
                'id' => 3673,
                'code' => '046',
                'name' => 'Trường trung cấp Bách Nghệ CT',
                'district_id' => 620,
                'city_id' => 55,
            ),
            173 => 
            array (
                'id' => 3674,
                'code' => '047',
                'name' => 'Trường TC Kinh tế - Kỹ thuật CT',
                'district_id' => 620,
                'city_id' => 55,
            ),
            174 => 
            array (
                'id' => 3675,
                'code' => '049',
                'name' => 'Trường TC Miền Tây',
                'district_id' => 620,
                'city_id' => 55,
            ),
            175 => 
            array (
                'id' => 3676,
                'code' => '051',
                'name' => 'CĐ Nghề Việt Mỹ, Phân hiệu CT',
                'district_id' => 620,
                'city_id' => 55,
            ),
            176 => 
            array (
                'id' => 3677,
                'code' => '052',
                'name' => 'CĐ Nghề ISPACE, Phân hiệu CT',
                'district_id' => 620,
                'city_id' => 55,
            ),
            177 => 
            array (
                'id' => 3678,
                'code' => '053',
                'name' => 'TC Nghề Cần Thơ',
                'district_id' => 620,
                'city_id' => 55,
            ),
            178 => 
            array (
                'id' => 3679,
                'code' => '060',
                'name' => 'TH, THCS và THPT Quốc Văn',
                'district_id' => 620,
                'city_id' => 55,
            ),
            179 => 
            array (
                'id' => 3680,
                'code' => '061',
                'name' => 'Phổ thông Việt Mỹ',
                'district_id' => 620,
                'city_id' => 55,
            ),
            180 => 
            array (
                'id' => 3681,
                'code' => '062',
                'name' => 'Phổ thông năng khiếu Thể dục Thể thao',
                'district_id' => 620,
                'city_id' => 55,
            ),
            181 => 
            array (
                'id' => 3682,
                'code' => '063',
                'name' => 'THPT Thực hành sư phạm - ĐHCT',
                'district_id' => 620,
                'city_id' => 55,
            ),
            182 => 
            array (
                'id' => 3683,
                'code' => '012',
                'name' => 'THPT Bùi  Hữu Nghĩa',
                'district_id' => 621,
                'city_id' => 55,
            ),
            183 => 
            array (
                'id' => 3684,
                'code' => '013',
                'name' => 'THPT Chuyên Lý Tự Trọng',
                'district_id' => 621,
                'city_id' => 55,
            ),
            184 => 
            array (
                'id' => 3685,
                'code' => '014',
                'name' => 'THPT Bình Thủy',
                'district_id' => 621,
                'city_id' => 55,
            ),
            185 => 
            array (
                'id' => 3686,
                'code' => '016',
                'name' => 'TTGDTX Bình Thủy',
                'district_id' => 621,
                'city_id' => 55,
            ),
            186 => 
            array (
                'id' => 3687,
                'code' => '017',
                'name' => 'Phòng GD&ĐT Q.Bình Thuỷ',
                'district_id' => 621,
                'city_id' => 55,
            ),
            187 => 
            array (
                'id' => 3688,
                'code' => '050',
                'name' => 'CĐ Nghề Cần Thơ',
                'district_id' => 621,
                'city_id' => 55,
            ),
            188 => 
            array (
                'id' => 3689,
                'code' => '054',
                'name' => 'TC Nghề số 9, cơ sở 2 CT',
                'district_id' => 621,
                'city_id' => 55,
            ),
            189 => 
            array (
                'id' => 3690,
                'code' => '015',
                'name' => 'THPT Trần Đại Nghĩa',
                'district_id' => 622,
                'city_id' => 55,
            ),
            190 => 
            array (
                'id' => 3691,
                'code' => '018',
                'name' => 'THPT Nguyễn Việt Dũng',
                'district_id' => 622,
                'city_id' => 55,
            ),
            191 => 
            array (
                'id' => 3692,
                'code' => '019',
                'name' => 'TTGDTX Cái Răng',
                'district_id' => 622,
                'city_id' => 55,
            ),
            192 => 
            array (
                'id' => 3693,
                'code' => '020',
                'name' => 'Phòng GD&ĐT Q.Cái Răng',
                'district_id' => 622,
                'city_id' => 55,
            ),
            193 => 
            array (
                'id' => 3694,
                'code' => '055',
                'name' => 'TC Nghề Đông Dương',
                'district_id' => 622,
                'city_id' => 55,
            ),
            194 => 
            array (
                'id' => 3695,
                'code' => '021',
                'name' => 'THPT Lưu Hữu Phước',
                'district_id' => 623,
                'city_id' => 55,
            ),
            195 => 
            array (
                'id' => 3696,
                'code' => '022',
                'name' => 'THPT Thới Long',
                'district_id' => 623,
                'city_id' => 55,
            ),
            196 => 
            array (
                'id' => 3697,
                'code' => '024',
                'name' => 'Phổ thông Dân Tộc Nội trú',
                'district_id' => 623,
                'city_id' => 55,
            ),
            197 => 
            array (
                'id' => 3698,
                'code' => '025',
                'name' => 'THPT Lương Định Của',
                'district_id' => 623,
                'city_id' => 55,
            ),
            198 => 
            array (
                'id' => 3699,
                'code' => '026',
                'name' => 'TTGDTX Ô Môn',
                'district_id' => 623,
                'city_id' => 55,
            ),
            199 => 
            array (
                'id' => 3700,
                'code' => '027',
                'name' => 'Phòng GD&ĐT Q.Ô Môn',
                'district_id' => 623,
                'city_id' => 55,
            ),
            200 => 
            array (
                'id' => 3701,
                'code' => '028',
                'name' => 'THPT Phan Văn Trị',
                'district_id' => 624,
                'city_id' => 55,
            ),
            201 => 
            array (
                'id' => 3702,
                'code' => '029',
                'name' => 'TTGDTX Phong Điền',
                'district_id' => 624,
                'city_id' => 55,
            ),
            202 => 
            array (
                'id' => 3703,
                'code' => '030',
                'name' => 'Phòng GD&ĐT H.Phong Điền',
                'district_id' => 624,
                'city_id' => 55,
            ),
            203 => 
            array (
                'id' => 3704,
                'code' => '058',
                'name' => 'THPT Giai Xuân',
                'district_id' => 624,
                'city_id' => 55,
            ),
            204 => 
            array (
                'id' => 3705,
                'code' => '023',
                'name' => 'THCS và THPT Trần Ngọc Hoằng',
                'district_id' => 625,
                'city_id' => 55,
            ),
            205 => 
            array (
                'id' => 3706,
                'code' => '032',
                'name' => 'THPT Hà Huy Giáp',
                'district_id' => 625,
                'city_id' => 55,
            ),
            206 => 
            array (
                'id' => 3707,
                'code' => '034',
                'name' => 'Phòng GD&ĐT H.Cờ Đỏ',
                'district_id' => 625,
                'city_id' => 55,
            ),
            207 => 
            array (
                'id' => 3708,
                'code' => '040',
                'name' => 'THPT Trung An',
                'district_id' => 625,
                'city_id' => 55,
            ),
            208 => 
            array (
                'id' => 3709,
                'code' => '057',
                'name' => 'TTGDTX Cờ Đỏ',
                'district_id' => 625,
                'city_id' => 55,
            ),
            209 => 
            array (
                'id' => 3710,
                'code' => '035',
                'name' => 'THPT Thạnh An',
                'district_id' => 626,
                'city_id' => 55,
            ),
            210 => 
            array (
                'id' => 3711,
                'code' => '037',
                'name' => 'TTGDTX Vĩnh Thạnh',
                'district_id' => 626,
                'city_id' => 55,
            ),
            211 => 
            array (
                'id' => 3712,
                'code' => '038',
                'name' => 'Phòng GD&ĐT H.Vĩnh Thạnh',
                'district_id' => 626,
                'city_id' => 55,
            ),
            212 => 
            array (
                'id' => 3713,
                'code' => '045',
                'name' => 'THPT Vĩnh Thạnh',
                'district_id' => 626,
                'city_id' => 55,
            ),
            213 => 
            array (
                'id' => 3714,
                'code' => '039',
                'name' => 'THPT Thốt Nốt',
                'district_id' => 627,
                'city_id' => 55,
            ),
            214 => 
            array (
                'id' => 3715,
                'code' => '041',
                'name' => 'THPT Thuận Hưng',
                'district_id' => 627,
                'city_id' => 55,
            ),
            215 => 
            array (
                'id' => 3716,
                'code' => '042',
                'name' => 'TTGDTX Thốt Nốt',
                'district_id' => 627,
                'city_id' => 55,
            ),
            216 => 
            array (
                'id' => 3717,
                'code' => '043',
                'name' => 'Phòng GD&ĐT Q.Thốt Nốt',
                'district_id' => 627,
                'city_id' => 55,
            ),
            217 => 
            array (
                'id' => 3718,
                'code' => '031',
                'name' => 'THPT Thới Lai',
                'district_id' => 628,
                'city_id' => 55,
            ),
            218 => 
            array (
                'id' => 3719,
                'code' => '033',
                'name' => 'TTGDTX Thới Lai',
                'district_id' => 628,
                'city_id' => 55,
            ),
            219 => 
            array (
                'id' => 3720,
                'code' => '044',
                'name' => 'Phòng GD&ĐT H.Thới Lai',
                'district_id' => 628,
                'city_id' => 55,
            ),
            220 => 
            array (
                'id' => 3721,
                'code' => '056',
                'name' => 'TC Nghề Thới Lai',
                'district_id' => 628,
                'city_id' => 55,
            ),
            221 => 
            array (
                'id' => 3722,
                'code' => '059',
                'name' => 'THCS và THPT Trường Xuân',
                'district_id' => 628,
                'city_id' => 55,
            ),
            222 => 
            array (
                'id' => 3723,
                'code' => '002',
                'name' => 'THPT Nguyễn Đình Chiểu',
                'district_id' => 629,
                'city_id' => 56,
            ),
            223 => 
            array (
                'id' => 3724,
                'code' => '023',
                'name' => 'THPT Bán Công Thị Xã',
                'district_id' => 629,
                'city_id' => 56,
            ),
            224 => 
            array (
                'id' => 3725,
                'code' => '030',
                'name' => 'THPT Chuyên Bến Tre',
                'district_id' => 629,
                'city_id' => 56,
            ),
            225 => 
            array (
                'id' => 3726,
                'code' => '040',
                'name' => 'THPT Võ Trường Toản',
                'district_id' => 629,
                'city_id' => 56,
            ),
            226 => 
            array (
                'id' => 3727,
                'code' => '045',
                'name' => 'Trung tâm GDTX thành phố Bến Tre',
                'district_id' => 629,
                'city_id' => 56,
            ),
            227 => 
            array (
                'id' => 3728,
                'code' => '050',
                'name' => 'Phổ thông Hermann Gmeiner',
                'district_id' => 629,
                'city_id' => 56,
            ),
            228 => 
            array (
                'id' => 3729,
                'code' => '051',
                'name' => 'Trung cấp Y Tế Bến Tre',
                'district_id' => 629,
                'city_id' => 56,
            ),
            229 => 
            array (
                'id' => 3730,
                'code' => '062',
                'name' => 'CĐ Bến Tre',
                'district_id' => 629,
                'city_id' => 56,
            ),
            230 => 
            array (
                'id' => 3731,
                'code' => '066',
                'name' => 'THPT Lạc Long Quân',
                'district_id' => 629,
                'city_id' => 56,
            ),
            231 => 
            array (
                'id' => 3732,
                'code' => '068',
                'name' => 'CĐ nghề Đồng Khởi',
                'district_id' => 629,
                'city_id' => 56,
            ),
            232 => 
            array (
                'id' => 3733,
                'code' => '069',
                'name' => 'TC nghề Bến Tre',
                'district_id' => 629,
                'city_id' => 56,
            ),
            233 => 
            array (
                'id' => 3734,
                'code' => '72',
                'name' => 'Năng khiếu TDTT Bến Tre',
                'district_id' => 629,
                'city_id' => 56,
            ),
            234 => 
            array (
                'id' => 3735,
                'code' => '004',
                'name' => 'THPT Trần Văn Ơn',
                'district_id' => 630,
                'city_id' => 56,
            ),
            235 => 
            array (
                'id' => 3736,
                'code' => '005',
                'name' => 'THPT Diệp Minh Châu',
                'district_id' => 630,
                'city_id' => 56,
            ),
            236 => 
            array (
                'id' => 3737,
                'code' => '026',
                'name' => 'THPT BC Châu Thành A',
                'district_id' => 630,
                'city_id' => 56,
            ),
            237 => 
            array (
                'id' => 3738,
                'code' => '027',
                'name' => 'THPT BC Châu Thành B',
                'district_id' => 630,
                'city_id' => 56,
            ),
            238 => 
            array (
                'id' => 3739,
                'code' => '049',
                'name' => 'THPT Mạc Đĩnh Chi',
                'district_id' => 630,
                'city_id' => 56,
            ),
            239 => 
            array (
                'id' => 3740,
                'code' => '054',
                'name' => 'Trung tâm GDTX Châu Thành',
                'district_id' => 630,
                'city_id' => 56,
            ),
            240 => 
            array (
                'id' => 3741,
                'code' => '067',
                'name' => 'THPT Nguyễn Huệ',
                'district_id' => 630,
                'city_id' => 56,
            ),
            241 => 
            array (
                'id' => 3742,
                'code' => '007',
                'name' => 'THPT  Trần Văn Kiết',
                'district_id' => 631,
                'city_id' => 56,
            ),
            242 => 
            array (
                'id' => 3743,
                'code' => '008',
                'name' => 'THPT Trương Vĩnh Ký',
                'district_id' => 631,
                'city_id' => 56,
            ),
            243 => 
            array (
                'id' => 3744,
                'code' => '029',
                'name' => 'THPT Bán công Chợ Lách',
                'district_id' => 631,
                'city_id' => 56,
            ),
            244 => 
            array (
                'id' => 3745,
                'code' => '034',
                'name' => 'THPT Bán công Vĩnh Thành',
                'district_id' => 631,
                'city_id' => 56,
            ),
            245 => 
            array (
                'id' => 3746,
                'code' => '055',
                'name' => 'Trung tâm GDTX Chợ Lách',
                'district_id' => 631,
                'city_id' => 56,
            ),
            246 => 
            array (
                'id' => 3747,
                'code' => '024',
                'name' => 'THPT Ngô Văn Cấn',
                'district_id' => 632,
                'city_id' => 56,
            ),
            247 => 
            array (
                'id' => 3748,
                'code' => '035',
                'name' => 'THPT Bán công Phước Mỹ Trung',
                'district_id' => 632,
                'city_id' => 56,
            ),
            248 => 
            array (
                'id' => 3749,
                'code' => '048',
                'name' => 'THPT Lê Anh Xuân',
                'district_id' => 632,
                'city_id' => 56,
            ),
            249 => 
            array (
                'id' => 3750,
                'code' => '070',
                'name' => 'Trung tâm GDTX Mỏ Cày Bắc',
                'district_id' => 632,
                'city_id' => 56,
            ),
            250 => 
            array (
                'id' => 3751,
                'code' => '014',
                'name' => 'THPT Phan Văn Trị',
                'district_id' => 633,
                'city_id' => 56,
            ),
            251 => 
            array (
                'id' => 3752,
                'code' => '015',
                'name' => 'THPT Nguyễn Ngọc Thăng',
                'district_id' => 633,
                'city_id' => 56,
            ),
            252 => 
            array (
                'id' => 3753,
                'code' => '028',
                'name' => 'THPT Dân lập Giồng Trôm',
                'district_id' => 633,
                'city_id' => 56,
            ),
            253 => 
            array (
                'id' => 3754,
                'code' => '039',
                'name' => 'THPT Bán công Giồng Trôm',
                'district_id' => 633,
                'city_id' => 56,
            ),
            254 => 
            array (
                'id' => 3755,
                'code' => '057',
                'name' => 'Trung tâm GDTX huyện Giồng Trôm',
                'district_id' => 633,
                'city_id' => 56,
            ),
            255 => 
            array (
                'id' => 3756,
                'code' => '061',
                'name' => 'THPT Nguyễn Thị Định',
                'district_id' => 633,
                'city_id' => 56,
            ),
            256 => 
            array (
                'id' => 3757,
                'code' => '063',
                'name' => 'THPT Nguyễn Trãi',
                'district_id' => 633,
                'city_id' => 56,
            ),
            257 => 
            array (
                'id' => 3758,
                'code' => '017',
                'name' => 'THPT Lê Hoàng Chiếu',
                'district_id' => 634,
                'city_id' => 56,
            ),
            258 => 
            array (
                'id' => 3759,
                'code' => '018',
                'name' => 'THPT Huỳnh Tấn Phát',
                'district_id' => 634,
                'city_id' => 56,
            ),
            259 => 
            array (
                'id' => 3760,
                'code' => '025',
                'name' => 'THPT Lê Qúy Đôn',
                'district_id' => 634,
                'city_id' => 56,
            ),
            260 => 
            array (
                'id' => 3761,
                'code' => '032',
                'name' => 'THPT Bán công Bình Đại',
                'district_id' => 634,
                'city_id' => 56,
            ),
            261 => 
            array (
                'id' => 3762,
                'code' => '037',
                'name' => 'THPT Bán công Lộc Thuận',
                'district_id' => 634,
                'city_id' => 56,
            ),
            262 => 
            array (
                'id' => 3763,
                'code' => '058',
                'name' => 'Trung tâm GDTX Bình  Đại',
                'district_id' => 634,
                'city_id' => 56,
            ),
            263 => 
            array (
                'id' => 3764,
                'code' => '020',
                'name' => 'THPT Phan Thanh Giản',
                'district_id' => 635,
                'city_id' => 56,
            ),
            264 => 
            array (
                'id' => 3765,
                'code' => '036',
                'name' => 'THPT Bán công Ba Tri',
                'district_id' => 635,
                'city_id' => 56,
            ),
            265 => 
            array (
                'id' => 3766,
                'code' => '038',
                'name' => 'THPT Tán Kế',
                'district_id' => 635,
                'city_id' => 56,
            ),
            266 => 
            array (
                'id' => 3767,
                'code' => '047',
                'name' => 'THPT Sương Nguyệt Anh',
                'district_id' => 635,
                'city_id' => 56,
            ),
            267 => 
            array (
                'id' => 3768,
                'code' => '059',
                'name' => 'Trung tâm GDTX Ba Tri',
                'district_id' => 635,
                'city_id' => 56,
            ),
            268 => 
            array (
                'id' => 3769,
                'code' => '064',
                'name' => 'THPT Phan Ngọc Tòng',
                'district_id' => 635,
                'city_id' => 56,
            ),
            269 => 
            array (
                'id' => 3770,
                'code' => '071',
                'name' => 'THPT Phan Liêm',
                'district_id' => 635,
                'city_id' => 56,
            ),
            270 => 
            array (
                'id' => 3771,
                'code' => '022',
                'name' => 'THPT Lê Hoài Đôn',
                'district_id' => 636,
                'city_id' => 56,
            ),
            271 => 
            array (
                'id' => 3772,
                'code' => '033',
                'name' => 'THPT Bán công Thạnh Phú',
                'district_id' => 636,
                'city_id' => 56,
            ),
            272 => 
            array (
                'id' => 3773,
                'code' => '043',
                'name' => 'THPT  Trần Trường Sinh',
                'district_id' => 636,
                'city_id' => 56,
            ),
            273 => 
            array (
                'id' => 3774,
                'code' => '044',
                'name' => 'THPT Đoàn Thị Điểm',
                'district_id' => 636,
                'city_id' => 56,
            ),
            274 => 
            array (
                'id' => 3775,
                'code' => '060',
                'name' => 'Trung tâm GDTX Thạnh Phú',
                'district_id' => 636,
                'city_id' => 56,
            ),
            275 => 
            array (
                'id' => 3776,
                'code' => '010',
                'name' => 'THPT Chê-Ghêvara',
                'district_id' => 637,
                'city_id' => 56,
            ),
            276 => 
            array (
                'id' => 3777,
                'code' => '011',
                'name' => 'THPT Ca Văn Thỉnh',
                'district_id' => 637,
                'city_id' => 56,
            ),
            277 => 
            array (
                'id' => 3778,
                'code' => '012',
                'name' => 'THPT Bán công Mỏ Cày',
                'district_id' => 637,
                'city_id' => 56,
            ),
            278 => 
            array (
                'id' => 3779,
                'code' => '041',
                'name' => 'THPT Bán công An Thới',
                'district_id' => 637,
                'city_id' => 56,
            ),
            279 => 
            array (
                'id' => 3780,
                'code' => '042',
                'name' => 'THPT Quản Trọng Hoàng',
                'district_id' => 637,
                'city_id' => 56,
            ),
            280 => 
            array (
                'id' => 3781,
                'code' => '046',
                'name' => 'THPT Nguyễn Thị Minh Khai',
                'district_id' => 637,
                'city_id' => 56,
            ),
            281 => 
            array (
                'id' => 3782,
                'code' => '056',
                'name' => 'Trung tâm GDTX huyện Mỏ Cày Nam',
                'district_id' => 637,
                'city_id' => 56,
            ),
            282 => 
            array (
                'id' => 3783,
                'code' => '000',
                'name' => 'Sở Giáo dục- Đào tạo',
                'district_id' => 638,
                'city_id' => 57,
            ),
            283 => 
            array (
                'id' => 3784,
                'code' => '001',
                'name' => 'THPT Lưu Văn Liệt',
                'district_id' => 639,
                'city_id' => 57,
            ),
            284 => 
            array (
                'id' => 3785,
                'code' => '002',
                'name' => 'THPT Nguyễn Thông',
                'district_id' => 639,
                'city_id' => 57,
            ),
            285 => 
            array (
                'id' => 3786,
                'code' => '003',
                'name' => 'THPT Vĩnh Long',
                'district_id' => 639,
                'city_id' => 57,
            ),
            286 => 
            array (
                'id' => 3787,
                'code' => '015',
                'name' => 'THPT Chuyên Nguyễn Bỉnh Khiêm',
                'district_id' => 639,
                'city_id' => 57,
            ),
            287 => 
            array (
                'id' => 3788,
                'code' => '016',
                'name' => 'Trường Bổ túc văn hóa tại chức',
                'district_id' => 639,
                'city_id' => 57,
            ),
            288 => 
            array (
                'id' => 3789,
                'code' => '024',
                'name' => 'THCS và THPT Trưng Vương',
                'district_id' => 639,
                'city_id' => 57,
            ),
            289 => 
            array (
                'id' => 3790,
                'code' => '032',
                'name' => 'TTGDTX TP Vĩnh Long',
                'district_id' => 639,
                'city_id' => 57,
            ),
            290 => 
            array (
                'id' => 3791,
                'code' => '042',
                'name' => 'Trường năng khiếu TDTT',
                'district_id' => 639,
                'city_id' => 57,
            ),
            291 => 
            array (
                'id' => 3792,
                'code' => '004',
                'name' => 'THPT Phạm Hùng',
                'district_id' => 640,
                'city_id' => 57,
            ),
            292 => 
            array (
                'id' => 3793,
                'code' => '017',
                'name' => 'THPT BC Long Hồ',
                'district_id' => 640,
                'city_id' => 57,
            ),
            293 => 
            array (
                'id' => 3794,
                'code' => '029',
                'name' => 'THCS và THPT Phú Quới',
                'district_id' => 640,
                'city_id' => 57,
            ),
            294 => 
            array (
                'id' => 3795,
                'code' => '033',
                'name' => 'TTGDTX huyện Long Hồ',
                'district_id' => 640,
                'city_id' => 57,
            ),
            295 => 
            array (
                'id' => 3796,
                'code' => '041',
                'name' => 'THPT Hòa Ninh',
                'district_id' => 640,
                'city_id' => 57,
            ),
            296 => 
            array (
                'id' => 3797,
                'code' => '043',
                'name' => 'Trường TC nghề Vĩnh Long',
                'district_id' => 640,
                'city_id' => 57,
            ),
            297 => 
            array (
                'id' => 3798,
                'code' => '005',
                'name' => 'THPT Mang Thít',
                'district_id' => 641,
                'city_id' => 57,
            ),
            298 => 
            array (
                'id' => 3799,
                'code' => '006',
                'name' => 'THPT Nguyễn Văn Thiệt',
                'district_id' => 641,
                'city_id' => 57,
            ),
            299 => 
            array (
                'id' => 3800,
                'code' => '023',
                'name' => 'THCS và THPT Mỹ Phước',
                'district_id' => 641,
                'city_id' => 57,
            ),
            300 => 
            array (
                'id' => 3801,
                'code' => '034',
                'name' => 'TTGDTX huyện Mang Thít',
                'district_id' => 641,
                'city_id' => 57,
            ),
            301 => 
            array (
                'id' => 3802,
                'code' => '009',
                'name' => 'THPT Bình Minh',
                'district_id' => 642,
                'city_id' => 57,
            ),
            302 => 
            array (
                'id' => 3803,
                'code' => '021',
                'name' => 'THPT Hoàng Thái Hiếu',
                'district_id' => 642,
                'city_id' => 57,
            ),
            303 => 
            array (
                'id' => 3804,
                'code' => '035',
                'name' => 'TTGDTX Thị xã Bình Minh',
                'district_id' => 642,
                'city_id' => 57,
            ),
            304 => 
            array (
                'id' => 3805,
                'code' => '011',
                'name' => 'THPT Trần Đại Nghĩa',
                'district_id' => 643,
                'city_id' => 57,
            ),
            305 => 
            array (
                'id' => 3806,
                'code' => '012',
                'name' => 'THCS và THPT Long Phú',
                'district_id' => 643,
                'city_id' => 57,
            ),
            306 => 
            array (
                'id' => 3807,
                'code' => '018',
                'name' => 'THPT  Tam Bình',
                'district_id' => 643,
                'city_id' => 57,
            ),
            307 => 
            array (
                'id' => 3808,
                'code' => '026',
                'name' => 'THPT Dân Tộc Nội Trú',
                'district_id' => 643,
                'city_id' => 57,
            ),
            308 => 
            array (
                'id' => 3809,
                'code' => '027',
                'name' => 'THCS và THPT Phú Thịnh',
                'district_id' => 643,
                'city_id' => 57,
            ),
            309 => 
            array (
                'id' => 3810,
                'code' => '028',
                'name' => 'THPT Phan Văn Hòa',
                'district_id' => 643,
                'city_id' => 57,
            ),
            310 => 
            array (
                'id' => 3811,
                'code' => '036',
                'name' => 'TTGDTX huyện Tam Bình',
                'district_id' => 643,
                'city_id' => 57,
            ),
            311 => 
            array (
                'id' => 3812,
                'code' => '013',
                'name' => 'THPT Trà Ôn',
                'district_id' => 644,
                'city_id' => 57,
            ),
            312 => 
            array (
                'id' => 3813,
                'code' => '014',
                'name' => 'THPT Hựu Thành',
                'district_id' => 644,
                'city_id' => 57,
            ),
            313 => 
            array (
                'id' => 3814,
                'code' => '019',
                'name' => 'THPT Lê Thanh Mừng',
                'district_id' => 644,
                'city_id' => 57,
            ),
            314 => 
            array (
                'id' => 3815,
                'code' => '020',
                'name' => 'THPT Vĩnh Xuân',
                'district_id' => 644,
                'city_id' => 57,
            ),
            315 => 
            array (
                'id' => 3816,
                'code' => '030',
                'name' => 'THCS và THPT Hoà Bình',
                'district_id' => 644,
                'city_id' => 57,
            ),
            316 => 
            array (
                'id' => 3817,
                'code' => '037',
                'name' => 'TTGDTX huyện Trà Ôn',
                'district_id' => 644,
                'city_id' => 57,
            ),
            317 => 
            array (
                'id' => 3818,
                'code' => '007',
                'name' => 'THPT Võ Văn Kiệt',
                'district_id' => 645,
                'city_id' => 57,
            ),
            318 => 
            array (
                'id' => 3819,
                'code' => '008',
                'name' => 'THPT Hiếu Phụng',
                'district_id' => 645,
                'city_id' => 57,
            ),
            319 => 
            array (
                'id' => 3820,
                'code' => '022',
                'name' => 'THPT Nguyễn Hiếu Tự',
                'district_id' => 645,
                'city_id' => 57,
            ),
            320 => 
            array (
                'id' => 3821,
                'code' => '031',
                'name' => 'THCS và THPT Hiếu Nhơn',
                'district_id' => 645,
                'city_id' => 57,
            ),
            321 => 
            array (
                'id' => 3822,
                'code' => '038',
                'name' => 'TTGDTX huyện Vũng Liêm',
                'district_id' => 645,
                'city_id' => 57,
            ),
            322 => 
            array (
                'id' => 3823,
                'code' => '010',
                'name' => 'THPT Tân Quới',
                'district_id' => 646,
                'city_id' => 57,
            ),
            323 => 
            array (
                'id' => 3824,
                'code' => '025',
                'name' => 'THPT Tân Lược',
                'district_id' => 646,
                'city_id' => 57,
            ),
            324 => 
            array (
                'id' => 3825,
                'code' => '039',
                'name' => 'THCS và THPT Mỹ Thuận',
                'district_id' => 646,
                'city_id' => 57,
            ),
            325 => 
            array (
                'id' => 3826,
                'code' => '040',
                'name' => 'TT.GDTX huyện Bình Tân',
                'district_id' => 646,
                'city_id' => 57,
            ),
            326 => 
            array (
                'id' => 3827,
                'code' => '001',
                'name' => 'THPT Phạm Thái Bường',
                'district_id' => 647,
                'city_id' => 58,
            ),
            327 => 
            array (
                'id' => 3828,
                'code' => '011',
                'name' => 'Trường phổ thông Dân Tộc Nội Trú THPT tỉnh Trà Vinh',
                'district_id' => 647,
                'city_id' => 58,
            ),
            328 => 
            array (
                'id' => 3829,
                'code' => '012',
                'name' => 'THPT Chuyên Nguyễn Thiện Thành',
                'district_id' => 647,
                'city_id' => 58,
            ),
            329 => 
            array (
                'id' => 3830,
                'code' => '016',
                'name' => 'Trung tâm GDTX-HNDN thành phố Trà Vinh',
                'district_id' => 647,
                'city_id' => 58,
            ),
            330 => 
            array (
                'id' => 3831,
                'code' => '017',
                'name' => 'THPT Thành Phố Trà Vinh',
                'district_id' => 647,
                'city_id' => 58,
            ),
            331 => 
            array (
                'id' => 3832,
                'code' => '039',
                'name' => 'Trường trung cấp Nghề Trà Vinh',
                'district_id' => 647,
                'city_id' => 58,
            ),
            332 => 
            array (
                'id' => 3833,
                'code' => '043',
                'name' => 'Trường Thực Hành Sư Phạm
Trà Vinh',
                'district_id' => 647,
                'city_id' => 58,
            ),
            333 => 
            array (
                'id' => 3834,
                'code' => '002',
                'name' => 'THPT Nguyễn Đáng',
                'district_id' => 648,
                'city_id' => 58,
            ),
            334 => 
            array (
                'id' => 3835,
                'code' => '003',
                'name' => 'THPT Nguyễn Văn Hai',
                'district_id' => 648,
                'city_id' => 58,
            ),
            335 => 
            array (
                'id' => 3836,
                'code' => '013',
                'name' => 'Trung tâm GDTX – DN huyện Càng Long',
                'district_id' => 648,
                'city_id' => 58,
            ),
            336 => 
            array (
                'id' => 3837,
                'code' => '014',
                'name' => 'THPT Hồ Thị Nhâm',
                'district_id' => 648,
                'city_id' => 58,
            ),
            337 => 
            array (
                'id' => 3838,
                'code' => '015',
                'name' => 'THPT Dương Háo Học',
                'district_id' => 648,
                'city_id' => 58,
            ),
            338 => 
            array (
                'id' => 3839,
                'code' => '020',
                'name' => 'THPT Bùi Hữu Nghĩa',
                'district_id' => 648,
                'city_id' => 58,
            ),
            339 => 
            array (
                'id' => 3840,
                'code' => '004',
                'name' => 'THPT Cầu Kè',
                'district_id' => 649,
                'city_id' => 58,
            ),
            340 => 
            array (
                'id' => 3841,
                'code' => '025',
                'name' => 'THPT Phong Phú',
                'district_id' => 649,
                'city_id' => 58,
            ),
            341 => 
            array (
                'id' => 3842,
                'code' => '035',
                'name' => 'THPT Tam Ngãi',
                'district_id' => 649,
                'city_id' => 58,
            ),
            342 => 
            array (
                'id' => 3843,
                'code' => '036',
                'name' => 'Trung tâm GDTX- DN huyện  Cầu Kè',
                'district_id' => 649,
                'city_id' => 58,
            ),
            343 => 
            array (
                'id' => 3844,
                'code' => '005',
                'name' => 'THPT Tiểu Cần',
                'district_id' => 650,
                'city_id' => 58,
            ),
            344 => 
            array (
                'id' => 3845,
                'code' => '019',
                'name' => 'THPT Cầu Quan',
                'district_id' => 650,
                'city_id' => 58,
            ),
            345 => 
            array (
                'id' => 3846,
                'code' => '028',
                'name' => 'Trung tâm GDTX- DN huyện Tiểu Cần',
                'district_id' => 650,
                'city_id' => 58,
            ),
            346 => 
            array (
                'id' => 3847,
                'code' => '031',
                'name' => 'THPT Hiếu Tử',
                'district_id' => 650,
                'city_id' => 58,
            ),
            347 => 
            array (
                'id' => 3848,
                'code' => '006',
                'name' => 'THPT Vũ Đình Liệu',
                'district_id' => 651,
                'city_id' => 58,
            ),
            348 => 
            array (
                'id' => 3849,
                'code' => '021',
                'name' => 'THPT Hòa Minh',
                'district_id' => 651,
                'city_id' => 58,
            ),
            349 => 
            array (
                'id' => 3850,
                'code' => '027',
                'name' => 'Trung tâm GDTX- DN huyện Châu Thành',
                'district_id' => 651,
                'city_id' => 58,
            ),
            350 => 
            array (
                'id' => 3851,
                'code' => '030',
                'name' => 'THPT Hòa Lợi',
                'district_id' => 651,
                'city_id' => 58,
            ),
            351 => 
            array (
                'id' => 3852,
                'code' => '040',
                'name' => 'Trường THPT Lương Hòa A',
                'district_id' => 651,
                'city_id' => 58,
            ),
            352 => 
            array (
                'id' => 3853,
                'code' => '007',
                'name' => 'THPT Trà Cú',
                'district_id' => 652,
                'city_id' => 58,
            ),
            353 => 
            array (
                'id' => 3854,
                'code' => '008',
                'name' => 'THPT Đại An',
                'district_id' => 652,
                'city_id' => 58,
            ),
            354 => 
            array (
                'id' => 3855,
                'code' => '018',
                'name' => 'THPT Long Hiệp',
                'district_id' => 652,
                'city_id' => 58,
            ),
            355 => 
            array (
                'id' => 3856,
                'code' => '024',
                'name' => 'THPT Hàm Giang',
                'district_id' => 652,
                'city_id' => 58,
            ),
            356 => 
            array (
                'id' => 3857,
                'code' => '026',
                'name' => 'THPT Tập Sơn',
                'district_id' => 652,
                'city_id' => 58,
            ),
            357 => 
            array (
                'id' => 3858,
                'code' => '033',
                'name' => 'THPT Đôn Châu',
                'district_id' => 652,
                'city_id' => 58,
            ),
            358 => 
            array (
                'id' => 3859,
                'code' => '038',
                'name' => 'Trung tâm GDTX-HNDN huyện Trà Cú',
                'district_id' => 652,
                'city_id' => 58,
            ),
            359 => 
            array (
                'id' => 3860,
                'code' => '041',
                'name' => 'THCS-THPT Dân Tộc Nội Trú huyện Trà Cú',
                'district_id' => 652,
                'city_id' => 58,
            ),
            360 => 
            array (
                'id' => 3861,
                'code' => '009',
                'name' => 'THPT Dương Quang Đông',
                'district_id' => 653,
                'city_id' => 58,
            ),
            361 => 
            array (
                'id' => 3862,
                'code' => '022',
                'name' => 'THPT Cầu Ngang A',
                'district_id' => 653,
                'city_id' => 58,
            ),
            362 => 
            array (
                'id' => 3863,
                'code' => '023',
                'name' => 'THPT Cầu Ngang B',
                'district_id' => 653,
                'city_id' => 58,
            ),
            363 => 
            array (
                'id' => 3864,
                'code' => '032',
                'name' => 'THPT Nhị Trường',
                'district_id' => 653,
                'city_id' => 58,
            ),
            364 => 
            array (
                'id' => 3865,
                'code' => '037',
                'name' => 'Trung tâm GDTX- DN huyện Cầu Ngang',
                'district_id' => 653,
                'city_id' => 58,
            ),
            365 => 
            array (
                'id' => 3866,
                'code' => '010',
                'name' => 'THPT Duyên Hải',
                'district_id' => 654,
                'city_id' => 58,
            ),
            366 => 
            array (
                'id' => 3867,
                'code' => '029',
                'name' => 'THPT Long Khánh',
                'district_id' => 654,
                'city_id' => 58,
            ),
            367 => 
            array (
                'id' => 3868,
                'code' => '034',
                'name' => 'THPT Long Hữu',
                'district_id' => 654,
                'city_id' => 58,
            ),
            368 => 
            array (
                'id' => 3869,
                'code' => '042',
                'name' => 'Trung Tâm GDTX-DN huyện Duyên Hải',
                'district_id' => 654,
                'city_id' => 58,
            ),
            369 => 
            array (
                'id' => 3870,
                'code' => '000',
                'name' => 'Sở Giáo dục và Đào tạo tỉnh Sóc Trăng',
                'district_id' => 655,
                'city_id' => 59,
            ),
            370 => 
            array (
                'id' => 3871,
                'code' => '002',
                'name' => 'THPT Hoàng Diệu',
                'district_id' => 655,
                'city_id' => 59,
            ),
            371 => 
            array (
                'id' => 3872,
                'code' => '003',
                'name' => 'THPT Chuyên Nguyễn Thị Minh Khai',
                'district_id' => 655,
                'city_id' => 59,
            ),
            372 => 
            array (
                'id' => 3873,
                'code' => '004',
                'name' => 'THCS&THPT iSchool Sóc Trăng',
                'district_id' => 655,
                'city_id' => 59,
            ),
            373 => 
            array (
                'id' => 3874,
                'code' => '005',
                'name' => 'Trung tâm GDTX tỉnh Sóc Trăng',
                'district_id' => 655,
                'city_id' => 59,
            ),
            374 => 
            array (
                'id' => 3875,
                'code' => '006',
                'name' => 'THPT DTNT  Huỳnh Cương',
                'district_id' => 655,
                'city_id' => 59,
            ),
            375 => 
            array (
                'id' => 3876,
                'code' => '007',
                'name' => 'TC Pali Nam Bộ',
                'district_id' => 655,
                'city_id' => 59,
            ),
            376 => 
            array (
                'id' => 3877,
                'code' => '036',
                'name' => 'Trường THCS&THPT Lê Hồng Phong',
                'district_id' => 655,
                'city_id' => 59,
            ),
            377 => 
            array (
                'id' => 3878,
                'code' => '039',
                'name' => 'CĐ nghề Sóc Trăng',
                'district_id' => 655,
                'city_id' => 59,
            ),
            378 => 
            array (
                'id' => 3879,
                'code' => '059',
                'name' => 'Trung tâm Dạy nghề và GDTX TP.Sóc Trăng',
                'district_id' => 655,
                'city_id' => 59,
            ),
            379 => 
            array (
                'id' => 3880,
                'code' => '008',
                'name' => 'THPT Kế Sách',
                'district_id' => 656,
                'city_id' => 59,
            ),
            380 => 
            array (
                'id' => 3881,
                'code' => '009',
                'name' => 'THPT An Lạc Thôn',
                'district_id' => 656,
                'city_id' => 59,
            ),
            381 => 
            array (
                'id' => 3882,
                'code' => '010',
                'name' => 'THPT Phan Văn Hùng',
                'district_id' => 656,
                'city_id' => 59,
            ),
            382 => 
            array (
                'id' => 3883,
                'code' => '025',
                'name' => 'THPT Thiều Văn Chỏi',
                'district_id' => 656,
                'city_id' => 59,
            ),
            383 => 
            array (
                'id' => 3884,
                'code' => '032',
                'name' => 'Trung tâm Dạy nghề và GDTX huyện Kế Sách',
                'district_id' => 656,
                'city_id' => 59,
            ),
            384 => 
            array (
                'id' => 3885,
                'code' => '011',
                'name' => 'THPT Mỹ Hương',
                'district_id' => 657,
                'city_id' => 59,
            ),
            385 => 
            array (
                'id' => 3886,
                'code' => '021',
                'name' => 'THPT Huỳnh Hữu Nghĩa',
                'district_id' => 657,
                'city_id' => 59,
            ),
            386 => 
            array (
                'id' => 3887,
                'code' => '027',
                'name' => 'THPT An Ninh',
                'district_id' => 657,
                'city_id' => 59,
            ),
            387 => 
            array (
                'id' => 3888,
                'code' => '031',
                'name' => 'Trung tâm Dạy nghề và GDTX huyện Mỹ Tú',
                'district_id' => 657,
                'city_id' => 59,
            ),
            388 => 
            array (
                'id' => 3889,
                'code' => '037',
                'name' => 'Trường THCS&THPT Mỹ Thuận',
                'district_id' => 657,
                'city_id' => 59,
            ),
            389 => 
            array (
                'id' => 3890,
                'code' => '013',
                'name' => 'THPT Mỹ Xuyên',
                'district_id' => 658,
                'city_id' => 59,
            ),
            390 => 
            array (
                'id' => 3891,
                'code' => '014',
                'name' => 'THPT Văn Ngọc Chính',
                'district_id' => 658,
                'city_id' => 59,
            ),
            391 => 
            array (
                'id' => 3892,
                'code' => '023',
                'name' => 'THPT Ngọc Tố',
                'district_id' => 658,
                'city_id' => 59,
            ),
            392 => 
            array (
                'id' => 3893,
                'code' => '033',
                'name' => 'THPT Hòa Tú',
                'district_id' => 658,
                'city_id' => 59,
            ),
            393 => 
            array (
                'id' => 3894,
                'code' => '060',
                'name' => 'Trung tâm Dạy nghề và GDTX H.Mỹ Xuyên',
                'district_id' => 658,
                'city_id' => 59,
            ),
            394 => 
            array (
                'id' => 3895,
                'code' => '018',
                'name' => 'THPT Trần Văn Bảy',
                'district_id' => 659,
                'city_id' => 59,
            ),
            395 => 
            array (
                'id' => 3896,
                'code' => '030',
                'name' => 'Trung tâm Dạy nghề và GDTX huyện Thạnh Trị',
                'district_id' => 659,
                'city_id' => 59,
            ),
            396 => 
            array (
                'id' => 3897,
                'code' => '038',
                'name' => 'Trường THCS&THPT Thạnh Tân',
                'district_id' => 659,
                'city_id' => 59,
            ),
            397 => 
            array (
                'id' => 3898,
                'code' => '051',
                'name' => 'Trường THCS&THPT Hưng Lợi',
                'district_id' => 659,
                'city_id' => 59,
            ),
            398 => 
            array (
                'id' => 3899,
                'code' => '015',
                'name' => 'THPT Lương Định Của',
                'district_id' => 660,
                'city_id' => 59,
            ),
            399 => 
            array (
                'id' => 3900,
                'code' => '017',
                'name' => 'THPT Đại Ngãi',
                'district_id' => 660,
                'city_id' => 59,
            ),
            400 => 
            array (
                'id' => 3901,
                'code' => '052',
                'name' => 'Trường THCS&THPT Tân Thạnh',
                'district_id' => 660,
                'city_id' => 59,
            ),
            401 => 
            array (
                'id' => 3902,
                'code' => '057',
                'name' => 'Trung tâm Dạy nghề và GDTX H. Long Phú',
                'district_id' => 660,
                'city_id' => 59,
            ),
            402 => 
            array (
                'id' => 3903,
                'code' => '020',
                'name' => 'THPT Nguyễn Khuyến',
                'district_id' => 661,
                'city_id' => 59,
            ),
            403 => 
            array (
                'id' => 3904,
                'code' => '028',
                'name' => 'THPT Vĩnh Hải',
                'district_id' => 661,
                'city_id' => 59,
            ),
            404 => 
            array (
                'id' => 3905,
                'code' => '034',
                'name' => 'Trung tâm Dạy nghề và GDTX Thị xã Vĩnh Châu',
                'district_id' => 661,
                'city_id' => 59,
            ),
            405 => 
            array (
                'id' => 3906,
                'code' => '053',
                'name' => 'Trường THCS&THPT Lai Hòa',
                'district_id' => 661,
                'city_id' => 59,
            ),
            406 => 
            array (
                'id' => 3907,
                'code' => '054',
                'name' => 'Trường THCS&THPT DTNT Vĩnh Châu',
                'district_id' => 661,
                'city_id' => 59,
            ),
            407 => 
            array (
                'id' => 3908,
                'code' => '061',
                'name' => 'Trường THCS&THPT Khánh Hoà',
                'district_id' => 661,
                'city_id' => 59,
            ),
            408 => 
            array (
                'id' => 3909,
                'code' => '022',
                'name' => 'THPT Đoàn Văn Tố',
                'district_id' => 662,
                'city_id' => 59,
            ),
            409 => 
            array (
                'id' => 3910,
                'code' => '029',
                'name' => 'THPT An Thạnh 3',
                'district_id' => 662,
                'city_id' => 59,
            ),
            410 => 
            array (
                'id' => 3911,
                'code' => '056',
                'name' => 'Trung tâm Dạy nghề và GDTX huyện Cù Lao Dung',
                'district_id' => 662,
                'city_id' => 59,
            ),
            411 => 
            array (
                'id' => 3912,
                'code' => '019',
                'name' => 'THPT Mai Thanh Thế',
                'district_id' => 663,
                'city_id' => 59,
            ),
            412 => 
            array (
                'id' => 3913,
                'code' => '026',
                'name' => 'THPT Lê Văn Tám',
                'district_id' => 663,
                'city_id' => 59,
            ),
            413 => 
            array (
                'id' => 3914,
                'code' => '055',
                'name' => 'Trung tâm Dạy nghề và GDTX huyện Ngã Năm',
                'district_id' => 663,
                'city_id' => 59,
            ),
            414 => 
            array (
                'id' => 3915,
                'code' => '012',
                'name' => 'THPT Phú Tâm',
                'district_id' => 664,
                'city_id' => 59,
            ),
            415 => 
            array (
                'id' => 3916,
                'code' => '024',
                'name' => 'THPT Thuận Hòa',
                'district_id' => 664,
                'city_id' => 59,
            ),
            416 => 
            array (
                'id' => 3917,
                'code' => '035',
                'name' => 'Trung tâm Dạy nghề và GDTX huyện Châu Thành',
                'district_id' => 664,
                'city_id' => 59,
            ),
            417 => 
            array (
                'id' => 3918,
                'code' => '016',
                'name' => 'THPT Lịch Hội Thượng',
                'district_id' => 665,
                'city_id' => 59,
            ),
            418 => 
            array (
                'id' => 3919,
                'code' => '058',
                'name' => 'Trung tâm Dạy nghề và GDTX huyện Trần Đề',
                'district_id' => 665,
                'city_id' => 59,
            ),
            419 => 
            array (
                'id' => 3920,
                'code' => '062',
                'name' => 'Trường THCS&THPT Trần Đề',
                'district_id' => 665,
                'city_id' => 59,
            ),
            420 => 
            array (
                'id' => 3921,
                'code' => '002',
                'name' => 'THPT Bạc Liêu',
                'district_id' => 666,
                'city_id' => 60,
            ),
            421 => 
            array (
                'id' => 3922,
                'code' => '008',
                'name' => 'THPT Phan Ngọc Hiển',
                'district_id' => 666,
                'city_id' => 60,
            ),
            422 => 
            array (
                'id' => 3923,
                'code' => '009',
                'name' => 'THPT Chuyên Bạc Liêu',
                'district_id' => 666,
                'city_id' => 60,
            ),
            423 => 
            array (
                'id' => 3924,
                'code' => '010',
                'name' => 'TT GDTX tỉnh Bạc Liêu',
                'district_id' => 666,
                'city_id' => 60,
            ),
            424 => 
            array (
                'id' => 3925,
                'code' => '021',
                'name' => 'THPT Hiệp Thành',
                'district_id' => 666,
                'city_id' => 60,
            ),
            425 => 
            array (
                'id' => 3926,
                'code' => '004',
                'name' => 'THPT Lê Văn Đẩu',
                'district_id' => 667,
                'city_id' => 60,
            ),
            426 => 
            array (
                'id' => 3927,
                'code' => '017',
                'name' => 'Trung tâm GD&DN Vĩnh Lợi',
                'district_id' => 667,
                'city_id' => 60,
            ),
            427 => 
            array (
                'id' => 3928,
                'code' => '020',
                'name' => 'THPT Vĩnh Hưng',
                'district_id' => 667,
                'city_id' => 60,
            ),
            428 => 
            array (
                'id' => 3929,
                'code' => '007',
                'name' => 'THPT Ngan Dừa',
                'district_id' => 668,
                'city_id' => 60,
            ),
            429 => 
            array (
                'id' => 3930,
                'code' => '019',
                'name' => 'Trung tâm GD&DN Hồng Dân',
                'district_id' => 668,
                'city_id' => 60,
            ),
            430 => 
            array (
                'id' => 3931,
                'code' => '024',
                'name' => 'THPT Ninh Quới',
                'district_id' => 668,
                'city_id' => 60,
            ),
            431 => 
            array (
                'id' => 3932,
                'code' => '025',
                'name' => 'THPT Ninh Thạnh Lợi',
                'district_id' => 668,
                'city_id' => 60,
            ),
            432 => 
            array (
                'id' => 3933,
                'code' => '005',
                'name' => 'THPT Giá Rai',
                'district_id' => 669,
                'city_id' => 60,
            ),
            433 => 
            array (
                'id' => 3934,
                'code' => '013',
                'name' => 'THPT Nguyễn Trung Trực',
                'district_id' => 669,
                'city_id' => 60,
            ),
            434 => 
            array (
                'id' => 3935,
                'code' => '016',
                'name' => 'Trung tâm GD&DN Giá Rai',
                'district_id' => 669,
                'city_id' => 60,
            ),
            435 => 
            array (
                'id' => 3936,
                'code' => '040',
                'name' => 'THPT Tân Phong',
                'district_id' => 669,
                'city_id' => 60,
            ),
            436 => 
            array (
                'id' => 3937,
                'code' => '006',
                'name' => 'THPT Võ Văn Kiệt',
                'district_id' => 670,
                'city_id' => 60,
            ),
            437 => 
            array (
                'id' => 3938,
                'code' => '012',
                'name' => 'THPT Trần Văn  Bảy',
                'district_id' => 670,
                'city_id' => 60,
            ),
            438 => 
            array (
                'id' => 3939,
                'code' => '015',
                'name' => 'Trung tâm GD&DN Phước Long',
                'district_id' => 670,
                'city_id' => 60,
            ),
            439 => 
            array (
                'id' => 3940,
                'code' => '014',
                'name' => 'THPT Điền Hải',
                'district_id' => 671,
                'city_id' => 60,
            ),
            440 => 
            array (
                'id' => 3941,
                'code' => '018',
                'name' => 'Trung tâm GD&DN Đông Hải',
                'district_id' => 671,
                'city_id' => 60,
            ),
            441 => 
            array (
                'id' => 3942,
                'code' => '022',
                'name' => 'THPT Gành Hào',
                'district_id' => 671,
                'city_id' => 60,
            ),
            442 => 
            array (
                'id' => 3943,
                'code' => '023',
                'name' => 'THPT Định Thành',
                'district_id' => 671,
                'city_id' => 60,
            ),
            443 => 
            array (
                'id' => 3944,
                'code' => '003',
                'name' => 'THPT Lê Thị Riêng',
                'district_id' => 672,
                'city_id' => 60,
            ),
            444 => 
            array (
                'id' => 3945,
                'code' => '011',
                'name' => 'Phổ thông Dân tộc Nội trú tỉnh Bạc Liêu',
                'district_id' => 672,
                'city_id' => 60,
            ),
            445 => 
            array (
                'id' => 3946,
                'code' => '026',
                'name' => 'Trung tâm GD&DN Hòa Bình',
                'district_id' => 672,
                'city_id' => 60,
            ),
            446 => 
            array (
                'id' => 3947,
                'code' => '039',
                'name' => 'Trường THCS&THPT Trần Văn Lắm',
                'district_id' => 672,
                'city_id' => 60,
            ),
            447 => 
            array (
                'id' => 3948,
                'code' => '002',
                'name' => 'THPT Hồ Thị Kỷ',
                'district_id' => 673,
                'city_id' => 61,
            ),
            448 => 
            array (
                'id' => 3949,
                'code' => '003',
                'name' => 'THPT Tắc Vân',
                'district_id' => 673,
                'city_id' => 61,
            ),
            449 => 
            array (
                'id' => 3950,
                'code' => '015',
                'name' => 'THPT Cà Mau',
                'district_id' => 673,
                'city_id' => 61,
            ),
            450 => 
            array (
                'id' => 3951,
                'code' => '016',
                'name' => 'THPT Chuyên Phan Ngọc Hiển',
                'district_id' => 673,
                'city_id' => 61,
            ),
            451 => 
            array (
                'id' => 3952,
                'code' => '017',
                'name' => 'TTGDTX TP. Cà Mau',
                'district_id' => 673,
                'city_id' => 61,
            ),
            452 => 
            array (
                'id' => 3953,
                'code' => '019',
                'name' => 'PT Dân tộc nội trú',
                'district_id' => 673,
                'city_id' => 61,
            ),
            453 => 
            array (
                'id' => 3954,
                'code' => '020',
                'name' => 'THPT Nguyễn Việt Khái',
                'district_id' => 673,
                'city_id' => 61,
            ),
            454 => 
            array (
                'id' => 3955,
                'code' => '030',
                'name' => 'Phổ thông HermannGmeiner',
                'district_id' => 673,
                'city_id' => 61,
            ),
            455 => 
            array (
                'id' => 3956,
                'code' => '037',
                'name' => 'THPT Thanh Bình Cà Mau',
                'district_id' => 673,
                'city_id' => 61,
            ),
            456 => 
            array (
                'id' => 3957,
                'code' => '041',
                'name' => 'Trường TC Nghề Cà Mau',
                'district_id' => 673,
                'city_id' => 61,
            ),
            457 => 
            array (
                'id' => 3958,
                'code' => '004',
                'name' => 'THPT Thới Bình',
                'district_id' => 674,
                'city_id' => 61,
            ),
            458 => 
            array (
                'id' => 3959,
                'code' => '005',
                'name' => 'THPT Lê Công Nhân',
                'district_id' => 674,
                'city_id' => 61,
            ),
            459 => 
            array (
                'id' => 3960,
                'code' => '022',
                'name' => 'TTGDTX Thới Bình',
                'district_id' => 674,
                'city_id' => 61,
            ),
            460 => 
            array (
                'id' => 3961,
                'code' => '028',
                'name' => 'THPT Nguyễn Văn Nguyễn',
                'district_id' => 674,
                'city_id' => 61,
            ),
            461 => 
            array (
                'id' => 3962,
                'code' => '006',
                'name' => 'THPT U Minh',
                'district_id' => 675,
                'city_id' => 61,
            ),
            462 => 
            array (
                'id' => 3963,
                'code' => '023',
                'name' => 'TTGDTX U Minh',
                'district_id' => 675,
                'city_id' => 61,
            ),
            463 => 
            array (
                'id' => 3964,
                'code' => '031',
                'name' => 'THPT Khánh Lâm',
                'district_id' => 675,
                'city_id' => 61,
            ),
            464 => 
            array (
                'id' => 3965,
                'code' => '040',
                'name' => 'THPT Khánh An',
                'district_id' => 675,
                'city_id' => 61,
            ),
            465 => 
            array (
                'id' => 3966,
                'code' => '007',
                'name' => 'THPT Trần Văn Thời',
                'district_id' => 676,
                'city_id' => 61,
            ),
            466 => 
            array (
                'id' => 3967,
                'code' => '008',
                'name' => 'THPT Huỳnh Phi Hùng',
                'district_id' => 676,
                'city_id' => 61,
            ),
            467 => 
            array (
                'id' => 3968,
                'code' => '018',
                'name' => 'THPT Khánh Hưng',
                'district_id' => 676,
                'city_id' => 61,
            ),
            468 => 
            array (
                'id' => 3969,
                'code' => '021',
                'name' => 'THPT Sông Đốc',
                'district_id' => 676,
                'city_id' => 61,
            ),
            469 => 
            array (
                'id' => 3970,
                'code' => '024',
                'name' => 'TTGDTX Trần Văn Thời',
                'district_id' => 676,
                'city_id' => 61,
            ),
            470 => 
            array (
                'id' => 3971,
                'code' => '039',
                'name' => 'THPT Võ Thị Hồng',
                'district_id' => 676,
                'city_id' => 61,
            ),
            471 => 
            array (
                'id' => 3972,
                'code' => '011',
                'name' => 'THPT Cái Nước',
                'district_id' => 677,
                'city_id' => 61,
            ),
            472 => 
            array (
                'id' => 3973,
                'code' => '012',
                'name' => 'THPT Nguyễn Mai',
                'district_id' => 677,
                'city_id' => 61,
            ),
            473 => 
            array (
                'id' => 3974,
                'code' => '025',
                'name' => 'TTGDTX Cái Nước',
                'district_id' => 677,
                'city_id' => 61,
            ),
            474 => 
            array (
                'id' => 3975,
                'code' => '029',
                'name' => 'THPT Phú Hưng',
                'district_id' => 677,
                'city_id' => 61,
            ),
            475 => 
            array (
                'id' => 3976,
                'code' => '009',
                'name' => 'THPT Đầm Dơi',
                'district_id' => 678,
                'city_id' => 61,
            ),
            476 => 
            array (
                'id' => 3977,
                'code' => '010',
                'name' => 'THPT Thái Thanh Hoà',
                'district_id' => 678,
                'city_id' => 61,
            ),
            477 => 
            array (
                'id' => 3978,
                'code' => '026',
                'name' => 'TTGDTX Đầm Dơi',
                'district_id' => 678,
                'city_id' => 61,
            ),
            478 => 
            array (
                'id' => 3979,
                'code' => '034',
                'name' => 'THPT Tân Đức',
                'district_id' => 678,
                'city_id' => 61,
            ),
            479 => 
            array (
                'id' => 3980,
                'code' => '032',
                'name' => 'TTGDTX Ngọc Hiển',
                'district_id' => 679,
                'city_id' => 61,
            ),
            480 => 
            array (
                'id' => 3981,
                'code' => '035',
                'name' => 'THPT Viên An',
                'district_id' => 679,
                'city_id' => 61,
            ),
            481 => 
            array (
                'id' => 3982,
                'code' => '038',
                'name' => 'THPT Ngọc Hiển',
                'district_id' => 679,
                'city_id' => 61,
            ),
            482 => 
            array (
                'id' => 3983,
                'code' => '014',
                'name' => 'THPT Phan Ngọc Hiển',
                'district_id' => 680,
                'city_id' => 61,
            ),
            483 => 
            array (
                'id' => 3984,
                'code' => '027',
                'name' => 'TTGDTX Năm Căn',
                'district_id' => 680,
                'city_id' => 61,
            ),
            484 => 
            array (
                'id' => 3985,
                'code' => '013',
                'name' => 'THPT Nguyễn Thị Minh Khai',
                'district_id' => 681,
                'city_id' => 61,
            ),
            485 => 
            array (
                'id' => 3986,
                'code' => '033',
                'name' => 'TTGDTX Phú Tân',
                'district_id' => 681,
                'city_id' => 61,
            ),
            486 => 
            array (
                'id' => 3987,
                'code' => '036',
                'name' => 'THPT Phú Tân',
                'district_id' => 681,
                'city_id' => 61,
            ),
            487 => 
            array (
                'id' => 3988,
                'code' => '000',
                'name' => 'Sở Giáo dục và Đào tạo',
                'district_id' => 682,
                'city_id' => 62,
            ),
            488 => 
            array (
                'id' => 3989,
                'code' => '001',
                'name' => 'Trường THPT thành phố Điện Biên Phủ',
                'district_id' => 682,
                'city_id' => 62,
            ),
            489 => 
            array (
                'id' => 3990,
                'code' => '002',
                'name' => 'Trường THPT Chuyên Lê Quý Đôn',
                'district_id' => 682,
                'city_id' => 62,
            ),
            490 => 
            array (
                'id' => 3991,
                'code' => '003',
                'name' => 'Trường THPT Phan Đình Giót',
                'district_id' => 682,
                'city_id' => 62,
            ),
            491 => 
            array (
                'id' => 3992,
                'code' => '004',
                'name' => 'Trường Phổ thông Dân tộc Nội Trú Tỉnh',
                'district_id' => 682,
                'city_id' => 62,
            ),
            492 => 
            array (
                'id' => 3993,
                'code' => '005',
                'name' => 'Trung tâm GDTX Tỉnh',
                'district_id' => 682,
                'city_id' => 62,
            ),
            493 => 
            array (
                'id' => 3994,
                'code' => '006',
                'name' => 'Phòng GD&ĐT TP Điện Biên Phủ',
                'district_id' => 682,
                'city_id' => 62,
            ),
            494 => 
            array (
                'id' => 3995,
                'code' => '038',
                'name' => 'Trường Cao đẳng Nghề Điện Biên',
                'district_id' => 682,
                'city_id' => 62,
            ),
            495 => 
            array (
                'id' => 3996,
                'code' => '007',
                'name' => 'Trường THPT thị xã Mường Lay',
                'district_id' => 683,
                'city_id' => 62,
            ),
            496 => 
            array (
                'id' => 3997,
                'code' => '008',
                'name' => 'Phòng GD&ĐT TX Mường Lay',
                'district_id' => 683,
                'city_id' => 62,
            ),
            497 => 
            array (
                'id' => 3998,
                'code' => '009',
                'name' => 'Trường THPT huyện Điện Biên',
                'district_id' => 684,
                'city_id' => 62,
            ),
            498 => 
            array (
                'id' => 3999,
                'code' => '010',
                'name' => 'Trường THPT Thanh Chăn',
                'district_id' => 684,
                'city_id' => 62,
            ),
            499 => 
            array (
                'id' => 4000,
                'code' => '011',
                'name' => 'Phòng GD&ĐT H. Điện Biên',
                'district_id' => 684,
                'city_id' => 62,
            ),
        ));
        \DB::table('organization_school')->insert(array (
            0 => 
            array (
                'id' => 4001,
                'code' => '022',
                'name' => 'Trường THPT Mường Nhà',
                'district_id' => 684,
                'city_id' => 62,
            ),
            1 => 
            array (
                'id' => 4002,
                'code' => '024',
                'name' => 'Trường THPT Nà Tấu',
                'district_id' => 684,
                'city_id' => 62,
            ),
            2 => 
            array (
                'id' => 4003,
                'code' => '027',
                'name' => 'Trung tâm GDTX huyện Điện Biên',
                'district_id' => 684,
                'city_id' => 62,
            ),
            3 => 
            array (
                'id' => 4004,
                'code' => '039',
                'name' => 'Trường PT DTN THPT huyện Điện Biên',
                'district_id' => 684,
                'city_id' => 62,
            ),
            4 => 
            array (
                'id' => 4005,
                'code' => '046',
                'name' => 'Trường THPT Thanh Nưa',
                'district_id' => 684,
                'city_id' => 62,
            ),
            5 => 
            array (
                'id' => 4006,
                'code' => '012',
                'name' => 'Trường THPT Tuần Giáo',
                'district_id' => 685,
                'city_id' => 62,
            ),
            6 => 
            array (
                'id' => 4007,
                'code' => '014',
                'name' => 'Phòng GD&ĐT huyện Tuần Giáo',
                'district_id' => 685,
                'city_id' => 62,
            ),
            7 => 
            array (
                'id' => 4008,
                'code' => '030',
                'name' => 'Trung tâm GDTX huyện Tuần Giáo',
                'district_id' => 685,
                'city_id' => 62,
            ),
            8 => 
            array (
                'id' => 4009,
                'code' => '033',
                'name' => 'Trường THPT Mùn Chung',
                'district_id' => 685,
                'city_id' => 62,
            ),
            9 => 
            array (
                'id' => 4010,
                'code' => '040',
                'name' => 'Trường PT DTN THPT huyện Tuần Giáo',
                'district_id' => 685,
                'city_id' => 62,
            ),
            10 => 
            array (
                'id' => 4011,
                'code' => '015',
                'name' => 'Trường THPT Mường Chà',
                'district_id' => 686,
                'city_id' => 62,
            ),
            11 => 
            array (
                'id' => 4012,
                'code' => '016',
                'name' => 'Phòng GD&ĐT huyện Mường Chà',
                'district_id' => 686,
                'city_id' => 62,
            ),
            12 => 
            array (
                'id' => 4013,
                'code' => '028',
                'name' => 'Trung tâm GDTX huyện Mường Chà',
                'district_id' => 686,
                'city_id' => 62,
            ),
            13 => 
            array (
                'id' => 4014,
                'code' => '045',
                'name' => 'Trường PT DTN THPT Mường Chà',
                'district_id' => 686,
                'city_id' => 62,
            ),
            14 => 
            array (
                'id' => 4015,
                'code' => '017',
                'name' => 'Trường THPT Tủa Chùa',
                'district_id' => 687,
                'city_id' => 62,
            ),
            15 => 
            array (
                'id' => 4016,
                'code' => '018',
                'name' => 'Phòng GD&ĐT huyện Tủa Chùa',
                'district_id' => 687,
                'city_id' => 62,
            ),
            16 => 
            array (
                'id' => 4017,
                'code' => '029',
                'name' => 'Trung tâm GDTX huyện Tủa Chùa',
                'district_id' => 687,
                'city_id' => 62,
            ),
            17 => 
            array (
                'id' => 4018,
                'code' => '036',
                'name' => 'Trường THPT Tả Sìn Thàng',
                'district_id' => 687,
                'city_id' => 62,
            ),
            18 => 
            array (
                'id' => 4019,
                'code' => '041',
                'name' => 'Trường PT DTN THPT huyện Tủa Chùa',
                'district_id' => 687,
                'city_id' => 62,
            ),
            19 => 
            array (
                'id' => 4020,
                'code' => '019',
                'name' => 'Trường THPT Trần Can',
                'district_id' => 688,
                'city_id' => 62,
            ),
            20 => 
            array (
                'id' => 4021,
                'code' => '020',
                'name' => 'Phòng GD&ĐT huyện Điện Biên Đông',
                'district_id' => 688,
                'city_id' => 62,
            ),
            21 => 
            array (
                'id' => 4022,
                'code' => '023',
                'name' => 'Trường THPT Mường Luân',
                'district_id' => 688,
                'city_id' => 62,
            ),
            22 => 
            array (
                'id' => 4023,
                'code' => '026',
                'name' => 'Trung tâm GDTX huyện Điện Biên Đông',
                'district_id' => 688,
                'city_id' => 62,
            ),
            23 => 
            array (
                'id' => 4024,
                'code' => '044',
                'name' => 'Trường PT DTN THPT Điện Biên Đông',
                'district_id' => 688,
                'city_id' => 62,
            ),
            24 => 
            array (
                'id' => 4025,
                'code' => '021',
                'name' => 'Phòng GD&ĐT huyện Mường Nhé',
                'district_id' => 689,
                'city_id' => 62,
            ),
            25 => 
            array (
                'id' => 4026,
                'code' => '031',
                'name' => 'Trường THPT Mường Nhé',
                'district_id' => 689,
                'city_id' => 62,
            ),
            26 => 
            array (
                'id' => 4027,
                'code' => '037',
                'name' => 'Trung tâm GDTX  huyện Mường Nhé',
                'district_id' => 689,
                'city_id' => 62,
            ),
            27 => 
            array (
                'id' => 4028,
                'code' => '043',
                'name' => 'Trường THPT DTNT H. Mường Nhé',
                'district_id' => 689,
                'city_id' => 62,
            ),
            28 => 
            array (
                'id' => 4029,
                'code' => '013',
                'name' => 'Trường THPT Mường ảng',
                'district_id' => 690,
                'city_id' => 62,
            ),
            29 => 
            array (
                'id' => 4030,
                'code' => '025',
                'name' => 'Trường THPT Búng Lao',
                'district_id' => 690,
                'city_id' => 62,
            ),
            30 => 
            array (
                'id' => 4031,
                'code' => '032',
                'name' => 'Phòng GD&ĐT huyện Mường Ảng',
                'district_id' => 690,
                'city_id' => 62,
            ),
            31 => 
            array (
                'id' => 4032,
                'code' => '034',
                'name' => 'Trung tâm GDTX huyện Mường Ảng',
                'district_id' => 690,
                'city_id' => 62,
            ),
            32 => 
            array (
                'id' => 4033,
                'code' => '042',
                'name' => 'Trường PT DTN THPT Mường Ảng',
                'district_id' => 690,
                'city_id' => 62,
            ),
            33 => 
            array (
                'id' => 4034,
                'code' => '035',
                'name' => 'Trường THPT Chà Cang',
                'district_id' => 691,
                'city_id' => 62,
            ),
            34 => 
            array (
                'id' => 4035,
                'code' => '047',
                'name' => 'Phòng GDĐT huyện Nậm Pồ',
                'district_id' => 691,
                'city_id' => 62,
            ),
            35 => 
            array (
                'id' => 4036,
                'code' => '000',
                'name' => 'Sở GD&ĐT Dăk Nông',
                'district_id' => 692,
                'city_id' => 63,
            ),
            36 => 
            array (
                'id' => 4037,
                'code' => '001',
                'name' => 'THPT Chu Văn An',
                'district_id' => 692,
                'city_id' => 63,
            ),
            37 => 
            array (
                'id' => 4038,
                'code' => '002',
                'name' => 'THPT Dân tộc Nội trú tỉnh',
                'district_id' => 692,
                'city_id' => 63,
            ),
            38 => 
            array (
                'id' => 4039,
                'code' => '022',
                'name' => 'THPT Gia Nghĩa',
                'district_id' => 692,
                'city_id' => 63,
            ),
            39 => 
            array (
                'id' => 4040,
                'code' => '024',
                'name' => 'TT GDTX tỉnh',
                'district_id' => 692,
                'city_id' => 63,
            ),
            40 => 
            array (
                'id' => 4041,
                'code' => '028',
                'name' => 'Trường TC Nghề Đăk Nông',
                'district_id' => 692,
                'city_id' => 63,
            ),
            41 => 
            array (
                'id' => 4042,
                'code' => '037',
                'name' => 'THPT Chuyên Nguyễn Chí Thanh',
                'district_id' => 692,
                'city_id' => 63,
            ),
            42 => 
            array (
                'id' => 4043,
                'code' => '003',
                'name' => 'THPT Phạm Văn Đồng',
                'district_id' => 693,
                'city_id' => 63,
            ),
            43 => 
            array (
                'id' => 4044,
                'code' => '004',
                'name' => 'THPT Nguyễn Tất Thành',
                'district_id' => 693,
                'city_id' => 63,
            ),
            44 => 
            array (
                'id' => 4045,
                'code' => '010',
                'name' => 'TT GDTX Đăk RLấp',
                'district_id' => 693,
                'city_id' => 63,
            ),
            45 => 
            array (
                'id' => 4046,
                'code' => '017',
                'name' => 'THPT Trường Chinh',
                'district_id' => 693,
                'city_id' => 63,
            ),
            46 => 
            array (
                'id' => 4047,
                'code' => '030',
                'name' => 'Phổ thông DTNT Đăk RLấp',
                'district_id' => 693,
                'city_id' => 63,
            ),
            47 => 
            array (
                'id' => 4048,
                'code' => '035',
                'name' => 'THPT Nguyễn Đình Chiểu',
                'district_id' => 693,
                'city_id' => 63,
            ),
            48 => 
            array (
                'id' => 4049,
                'code' => '006',
                'name' => 'THPT Đăk Mil',
                'district_id' => 694,
                'city_id' => 63,
            ),
            49 => 
            array (
                'id' => 4050,
                'code' => '007',
                'name' => 'THPT Trần Hưng Đạo',
                'district_id' => 694,
                'city_id' => 63,
            ),
            50 => 
            array (
                'id' => 4051,
                'code' => '011',
                'name' => 'TT GDTX Đăk Mil',
                'district_id' => 694,
                'city_id' => 63,
            ),
            51 => 
            array (
                'id' => 4052,
                'code' => '015',
                'name' => 'THPT Quang Trung',
                'district_id' => 694,
                'city_id' => 63,
            ),
            52 => 
            array (
                'id' => 4053,
                'code' => '027',
                'name' => 'THPT Nguyễn Du',
                'district_id' => 694,
                'city_id' => 63,
            ),
            53 => 
            array (
                'id' => 4054,
                'code' => '032',
                'name' => 'Phổ thông DTNT Đăk Mil',
                'district_id' => 694,
                'city_id' => 63,
            ),
            54 => 
            array (
                'id' => 4055,
                'code' => '008',
                'name' => 'THPT Phan Chu Trinh',
                'district_id' => 695,
                'city_id' => 63,
            ),
            55 => 
            array (
                'id' => 4056,
                'code' => '013',
                'name' => 'TT GDTX Cư Jút',
                'district_id' => 695,
                'city_id' => 63,
            ),
            56 => 
            array (
                'id' => 4057,
                'code' => '014',
                'name' => 'THPT Phan Bội Châu',
                'district_id' => 695,
                'city_id' => 63,
            ),
            57 => 
            array (
                'id' => 4058,
                'code' => '019',
                'name' => 'THPT Nguyễn Bỉnh Khiêm',
                'district_id' => 695,
                'city_id' => 63,
            ),
            58 => 
            array (
                'id' => 4059,
                'code' => '026',
                'name' => 'THPT Đào Duy Từ',
                'district_id' => 695,
                'city_id' => 63,
            ),
            59 => 
            array (
                'id' => 4060,
                'code' => '033',
                'name' => 'Phổ thông DTNT Cư Jut',
                'district_id' => 695,
                'city_id' => 63,
            ),
            60 => 
            array (
                'id' => 4061,
                'code' => '005',
                'name' => 'THPT Đăk Song',
                'district_id' => 696,
                'city_id' => 63,
            ),
            61 => 
            array (
                'id' => 4062,
                'code' => '020',
                'name' => 'TT GDTX Đăk Song',
                'district_id' => 696,
                'city_id' => 63,
            ),
            62 => 
            array (
                'id' => 4063,
                'code' => '025',
                'name' => 'THPT Phan Đình Phùng',
                'district_id' => 696,
                'city_id' => 63,
            ),
            63 => 
            array (
                'id' => 4064,
                'code' => '029',
                'name' => 'Phổ thông DTNT Đăk Song',
                'district_id' => 696,
                'city_id' => 63,
            ),
            64 => 
            array (
                'id' => 4065,
                'code' => '009',
                'name' => 'THPT Krông Nô',
                'district_id' => 697,
                'city_id' => 63,
            ),
            65 => 
            array (
                'id' => 4066,
                'code' => '012',
                'name' => 'TT GDTX Krông Nô',
                'district_id' => 697,
                'city_id' => 63,
            ),
            66 => 
            array (
                'id' => 4067,
                'code' => '016',
                'name' => 'THPT Hùng Vương',
                'district_id' => 697,
                'city_id' => 63,
            ),
            67 => 
            array (
                'id' => 4068,
                'code' => '021',
                'name' => 'THPT Trần Phú',
                'district_id' => 697,
                'city_id' => 63,
            ),
            68 => 
            array (
                'id' => 4069,
                'code' => '034',
                'name' => 'Phổ thông DTNT Krông Nô',
                'district_id' => 697,
                'city_id' => 63,
            ),
            69 => 
            array (
                'id' => 4070,
                'code' => '023',
                'name' => 'THPT Đăk Glong',
                'district_id' => 698,
                'city_id' => 63,
            ),
            70 => 
            array (
                'id' => 4071,
                'code' => '031',
                'name' => 'Phổ thông DTNT Đăk Glong',
                'district_id' => 698,
                'city_id' => 63,
            ),
            71 => 
            array (
                'id' => 4072,
                'code' => '036',
                'name' => 'Phổ thông Trung học Lê Duẩn',
                'district_id' => 698,
                'city_id' => 63,
            ),
            72 => 
            array (
                'id' => 4073,
                'code' => '018',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 699,
                'city_id' => 63,
            ),
            73 => 
            array (
                'id' => 4074,
                'code' => '001',
                'name' => 'Sở GD và ĐT Hậu Giang',
                'district_id' => 700,
                'city_id' => 64,
            ),
            74 => 
            array (
                'id' => 4075,
                'code' => '002',
                'name' => 'THPT Vị Thanh',
                'district_id' => 700,
                'city_id' => 64,
            ),
            75 => 
            array (
                'id' => 4076,
                'code' => '018',
                'name' => 'Phòng Giáo dục thành phố Vị Thanh',
                'district_id' => 700,
                'city_id' => 64,
            ),
            76 => 
            array (
                'id' => 4077,
                'code' => '028',
                'name' => 'THPT Chiêm Thành Tấn',
                'district_id' => 700,
                'city_id' => 64,
            ),
            77 => 
            array (
                'id' => 4078,
                'code' => '029',
                'name' => 'TT GDTX thành phố Vị Thanh',
                'district_id' => 700,
                'city_id' => 64,
            ),
            78 => 
            array (
                'id' => 4079,
                'code' => '039',
                'name' => 'THPT chuyên Vị Thanh',
                'district_id' => 700,
                'city_id' => 64,
            ),
            79 => 
            array (
                'id' => 4080,
                'code' => '042',
                'name' => 'TC nghề tỉnh Hậu Giang',
                'district_id' => 700,
                'city_id' => 64,
            ),
            80 => 
            array (
                'id' => 4081,
                'code' => '004',
                'name' => 'THPT Vị Thủy',
                'district_id' => 701,
                'city_id' => 64,
            ),
            81 => 
            array (
                'id' => 4082,
                'code' => '019',
                'name' => 'Phòng Giáo dục H. Vị Thủy',
                'district_id' => 701,
                'city_id' => 64,
            ),
            82 => 
            array (
                'id' => 4083,
                'code' => '027',
                'name' => 'THPT Lê Hồng Phong',
                'district_id' => 701,
                'city_id' => 64,
            ),
            83 => 
            array (
                'id' => 4084,
                'code' => '030',
                'name' => 'TT GDTX H. Vị Thuỷ',
                'district_id' => 701,
                'city_id' => 64,
            ),
            84 => 
            array (
                'id' => 4085,
                'code' => '046',
                'name' => 'THPT Vĩnh Tường',
                'district_id' => 701,
                'city_id' => 64,
            ),
            85 => 
            array (
                'id' => 4086,
                'code' => '005',
                'name' => 'THPT Long Mỹ',
                'district_id' => 702,
                'city_id' => 64,
            ),
            86 => 
            array (
                'id' => 4087,
                'code' => '006',
                'name' => 'THPT Tây Đô',
                'district_id' => 702,
                'city_id' => 64,
            ),
            87 => 
            array (
                'id' => 4088,
                'code' => '020',
                'name' => 'Phòng Giáo dục H. Long Mỹ',
                'district_id' => 702,
                'city_id' => 64,
            ),
            88 => 
            array (
                'id' => 4089,
                'code' => '023',
                'name' => 'Phòng Giáo dục H. Châu Thành A',
                'district_id' => 702,
                'city_id' => 64,
            ),
            89 => 
            array (
                'id' => 4090,
                'code' => '025',
                'name' => 'Phổ thông Dân tộc nội trú',
                'district_id' => 702,
                'city_id' => 64,
            ),
            90 => 
            array (
                'id' => 4091,
                'code' => '026',
                'name' => 'THPT Tân Phú',
                'district_id' => 702,
                'city_id' => 64,
            ),
            91 => 
            array (
                'id' => 4092,
                'code' => '031',
                'name' => 'TT GDTX H. Long Mỹ',
                'district_id' => 702,
                'city_id' => 64,
            ),
            92 => 
            array (
                'id' => 4093,
                'code' => '037',
                'name' => 'THPT Lương Tâm',
                'district_id' => 702,
                'city_id' => 64,
            ),
            93 => 
            array (
                'id' => 4094,
                'code' => '009',
                'name' => 'THPT Lương Thế Vinh',
                'district_id' => 703,
                'city_id' => 64,
            ),
            94 => 
            array (
                'id' => 4095,
                'code' => '010',
                'name' => 'THPT Cây Dương',
                'district_id' => 703,
                'city_id' => 64,
            ),
            95 => 
            array (
                'id' => 4096,
                'code' => '017',
                'name' => 'THPT Tân Long',
                'district_id' => 703,
                'city_id' => 64,
            ),
            96 => 
            array (
                'id' => 4097,
                'code' => '021',
                'name' => 'Phòng Giáo dục H. Phụng Hiệp',
                'district_id' => 703,
                'city_id' => 64,
            ),
            97 => 
            array (
                'id' => 4098,
                'code' => '032',
                'name' => 'TT GDTX H. Phụng Hiệp',
                'district_id' => 703,
                'city_id' => 64,
            ),
            98 => 
            array (
                'id' => 4099,
                'code' => '036',
                'name' => 'THPT Hòa An',
                'district_id' => 703,
                'city_id' => 64,
            ),
            99 => 
            array (
                'id' => 4100,
                'code' => '012',
                'name' => 'THPT Ngã Sáu',
                'district_id' => 704,
                'city_id' => 64,
            ),
            100 => 
            array (
                'id' => 4101,
                'code' => '022',
                'name' => 'Phòng Giáo dục H. Châu Thành',
                'district_id' => 704,
                'city_id' => 64,
            ),
            101 => 
            array (
                'id' => 4102,
                'code' => '033',
                'name' => 'TT GDTX H. Châu Thành',
                'district_id' => 704,
                'city_id' => 64,
            ),
            102 => 
            array (
                'id' => 4103,
                'code' => '038',
                'name' => 'THPT Phú Hữu',
                'district_id' => 704,
                'city_id' => 64,
            ),
            103 => 
            array (
                'id' => 4104,
                'code' => '045',
                'name' => 'CĐ Nghề Trần Đại Nghĩa',
                'district_id' => 704,
                'city_id' => 64,
            ),
            104 => 
            array (
                'id' => 4105,
                'code' => '013',
                'name' => 'THPT Tầm Vu',
                'district_id' => 705,
                'city_id' => 64,
            ),
            105 => 
            array (
                'id' => 4106,
                'code' => '014',
                'name' => 'THPT Cái Tắc',
                'district_id' => 705,
                'city_id' => 64,
            ),
            106 => 
            array (
                'id' => 4107,
                'code' => '015',
                'name' => 'THPT Châu Thành A',
                'district_id' => 705,
                'city_id' => 64,
            ),
            107 => 
            array (
                'id' => 4108,
                'code' => '034',
                'name' => 'TT GDTX H. Châu Thành A',
                'district_id' => 705,
                'city_id' => 64,
            ),
            108 => 
            array (
                'id' => 4109,
                'code' => '041',
                'name' => 'THPT Trường Long Tây',
                'district_id' => 705,
                'city_id' => 64,
            ),
            109 => 
            array (
                'id' => 4110,
                'code' => '011',
                'name' => 'THPT Nguyễn Minh Quang',
                'district_id' => 706,
                'city_id' => 64,
            ),
            110 => 
            array (
                'id' => 4111,
                'code' => '024',
                'name' => 'Phòng Giáo dục Thị xã Ngã Bảy',
                'district_id' => 706,
                'city_id' => 64,
            ),
            111 => 
            array (
                'id' => 4112,
                'code' => '035',
                'name' => 'TT GDTX thị xã Ngã Bảy',
                'district_id' => 706,
                'city_id' => 64,
            ),
            112 => 
            array (
                'id' => 4113,
                'code' => '040',
                'name' => 'THPT Lê Quý Đôn',
                'district_id' => 706,
                'city_id' => 64,
            ),
            113 => 
            array (
                'id' => 4114,
                'code' => '043',
                'name' => 'TC nghề Ngã Bảy',
                'district_id' => 706,
                'city_id' => 64,
            ),
        ));
        
        
    }
}