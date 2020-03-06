<?php

namespace App\Http\Controllers;

use App\OrganizationCity;
use App\OrganizationDistrict;
use App\OrganizationSchool;
use Illuminate\Http\Request;
use App\Post;
use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::orderBy('id')->paginate(10);
        return response()->json($data);
    }

    public function test()
    {
        set_time_limit(0);
        $file_path = "THPT.xls";
        $file_path = "import" . DIRECTORY_SEPARATOR . $file_path;

//        $file_path = storage_path('app' . DIRECTORY_SEPARATOR . $file_path);
//        $uploadedFile = new \Symfony\Component\HttpFoundation\File\File($file_path);

//        $array = Excel::toArray(new DataImport, $file_path);
//        var_dump($array);die;

        $array = (new DataImport)->toArray($file_path, '', '');
        $array = $array['Danh muc Truong PTTH'];
        $tw = array(
            'Hà Nội',
            'Hải Phòng',
            'Đà Nẵng',
            'Hồ Chí Minh',
            'Cần Thơ'
        );

        array_shift($array);
        foreach ($array as $item) {
            $city_id = $item[0];
            $city_name = $item[1];
            $city_type = 'Tỉnh';
            if (str_replace($tw, '', $city_name) != $city_name) {
                $city_type = 'Thành phố Trung ương';
            }
            $district_code = $item[2];
            $district_name = $item[3];

            if(strpos($district_name, 'Thành phố') !== false) {
                $district_type = 'Thành phố';
            }
            if(strpos($district_name, 'Huyện') !== false) {
                $district_type = 'Huyện';
            }
            if(strpos($district_name, 'Thị xã') !== false) {
                $district_type = 'Thị xã';
            }
            if(strpos($district_name, 'Quận') !== false) {
                $district_type = 'Quận';
            }

            $school_code = $item[4];
            $school_name = $item[5];

            $check_city = OrganizationCity::where('id', $city_id)->first();
            if(!isset($check_city)) {
                $check_city = new OrganizationCity();
                $check_city->id = $city_id;
                $check_city->name = $city_name;
                $check_city->type = $city_type;
                $check_city->save();
            }


            $check_district = OrganizationDistrict::where('code', $district_code)
                ->where('name', $district_name)
                ->where('city_id', $city_id)
                ->first();
            if(!isset($check_district)) {
                $check_district = new OrganizationDistrict();
                $check_district->code = $district_code;
                $check_district->name = $district_name;
                $check_district->type = $district_type;
                $check_district->city_id = $city_id;
                $check_district->save();
            }
            $district_id = $check_district->id;

            $new_school = new OrganizationSchool();
            $new_school->code = $school_code;
            $new_school->name = $school_name;
            $new_school->city_id = $city_id;
            $new_school->district_id = $district_id;
            $new_school->save();

        }
    }
}
