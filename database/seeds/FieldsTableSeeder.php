<?php

use Illuminate\Database\Seeder;

class FieldsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('fields')->delete();

        \DB::table('fields')->insert(array(
            array(
                'id' => 1,
                'name' => 'Heo',
                'group_name' => 'farm',
                'description' => 'Trang Trại Heo',
                'created_at' => date("Y-m-d H:i:s", time()),
                'updated_at' => date("Y-m-d H:i:s", time()),
            ),
            array(
                'id' => 2,
                'name' => 'Dê',
                'group_name' => 'farm',
                'description' => 'Trang Trại Dê',
                'created_at' => date("Y-m-d H:i:s", time()),
                'updated_at' => date("Y-m-d H:i:s", time()),
            ),
            array(
                'id' => 3,
                'name' => 'Dưa Hấu',
                'group_name' => 'farm',
                'description' => 'Trang Trại Dưa Hấu',
                'created_at' => date("Y-m-d H:i:s", time()),
                'updated_at' => date("Y-m-d H:i:s", time()),
            ),
            array(
                'id' => 4,
                'name' => 'Sầu Riêng',
                'group_name' => 'farm',
                'description' => 'Trang Trại Sầu Riêng',
                'created_at' => date("Y-m-d H:i:s", time()),
                'updated_at' => date("Y-m-d H:i:s", time()),
            ),
            array(
                'id' => 5,
                'name' => 'Bò',
                'group_name' => 'farm',
                'description' => 'Trang Trại Sầu Riêng',
                'created_at' => date("Y-m-d H:i:s", time()),
                'updated_at' => date("Y-m-d H:i:s", time()),
            ),
            array(
                'id' => 6,
                'name' => 'Gà',
                'group_name' => 'farm',
                'description' => 'Trang Trại Sầu Riêng',
                'created_at' => date("Y-m-d H:i:s", time()),
                'updated_at' => date("Y-m-d H:i:s", time()),
            ),
        ));
    }
}
