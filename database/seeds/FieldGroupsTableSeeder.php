<?php

use Illuminate\Database\Seeder;

class FieldsGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('field_groups')->delete();

        \DB::table('field_groups')->insert(array(
            array(
                'id' => 1,
                'name' => 'Trang Trại',
                'description' => 'Các loại Trang Trại',
                'created_at' => date("Y-m-d H:i:s", time()),
                'updated_at' => date("Y-m-d H:i:s", time()),
            ),
            array(
                'id' => 2,
                'name' => 'Cửa hàng bán lẻ',
                'group_name' => 'store',
                'description' => 'Cửa hàng bán lẻ',
                'created_at' => date("Y-m-d H:i:s", time()),
                'updated_at' => date("Y-m-d H:i:s", time()),
            ),
        ));
    }
}
