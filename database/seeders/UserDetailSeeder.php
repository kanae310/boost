<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_details')->truncate();

        DB::table('user_details')->insert([
            [
                'user_detail_id' => 1,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_id' => 1,
                'profile_img' => 'https://1.bp.blogspot.com/-Hqwd7NiB6Iw/X9lJjd8QZxI/AAAAAAABc6g/zPt6ZSRTvjAh82mHkOWOcfdrk37P79K-wCNcBGAsYHQ/s180-c/nigaoe_leibniz.png',
            ],
            [
                'user_detail_id' => 2,
                'gender' => 'M',
                'birthday' => '2000-01-01',
                'university_id' => 2,
                'profile_img' => 'https://1.bp.blogspot.com/-wFbP3RK3N9s/XkZdI_Yw-zI/AAAAAAABXUI/EnndGIXVc_sErjzvi2lt2pM3leEBOefWQCNcBGAsYHQ/s180-c/nigaoe_tokugawa_yoshimune.png',
            ],
            [
                'user_detail_id' => 3,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_id' => 2,
                'profile_img' => 'https://1.bp.blogspot.com/-8FUEz6vBnoQ/X7zMVAuhQMI/AAAAAAABcZ0/VI1Z9eN76pIj2rfHshveNbFoMKubXYTpACNcBGAsYHQ/s180-c/baby_role_towel_utsubuse.png',
            ],
            [
                'user_detail_id' => 4,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_id' => 3,
                'profile_img' => 'https://1.bp.blogspot.com/-YGTQUq4Nshk/X5OccOloRWI/AAAAAAABb-g/-brQj6nqVnkSnwQkddX9R1lQUhNQbkuPQCNcBGAsYHQ/s180-c/music_castanet_girl.png',
            ],
            [
                'user_detail_id' => 5,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_id' => 2,
                'profile_img' => 'https://1.bp.blogspot.com/-r0SdJLU4eWk/X1CK7MQfwvI/AAAAAAABaws/QoCcnan3kO42i4Gmhpjil0Iy0BvIGzY4wCNcBGAsYHQ/s180-c/hair_okappa_boy.png',
            ],
            [
                'user_detail_id' => 6,
                'gender' => 'M',
                'birthday' => '2000-01-01',
                'university_id' => 5,
                'profile_img' => 'https://1.bp.blogspot.com/-ixn6Lst2PGA/YQs0bRVsxlI/AAAAAAABe9E/XJuLl3RnBNwMo9uHlazF9SBYoNfMJtBcwCNcBGAsYHQ/s400/eto_tora_banzai.png',
            ],
            [
                'user_detail_id' => 7,
                'gender' => 'M',
                'birthday' => '2000-01-01',
                'university_id' => 4,
                'profile_img' => 'https://1.bp.blogspot.com/-9NHgMpq8_q8/YT1WV1JvcfI/AAAAAAABfYw/wAWDtiZfwZwgng4v2w5Nhfmm1oq0lXCtwCNcBGAsYHQ/s400/character_ebi_fry.png',
            ],
            [
                'user_detail_id' => 8,
                'gender' => 'M',
                'birthday' => '2000-01-01',
                'university_id' => 4,
                'profile_img' => 'https://1.bp.blogspot.com/-tVeC6En4e_E/X96mhDTzJNI/AAAAAAABdBo/jlD_jvZvMuk3qUcNjA_XORrA4w3lhPkdQCNcBGAsYHQ/s400/onepiece01_luffy.png',
            ],
            [
                'user_detail_id' => 9,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_id' => 4,
                'profile_img' => 'https://1.bp.blogspot.com/-2ut_UQv3iss/X-Fcs_0oAII/AAAAAAABdD8/jrCZTd_xK-Y6CP1KwOtT_LpEpjp-1nvxgCNcBGAsYHQ/s400/onepiece03_nami.png',
            ],
            [
                'user_detail_id' => 10,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_id' => 4,
                'profile_img' => 'https://1.bp.blogspot.com/-VACf4WfKNOk/X-Fcx7DWraI/AAAAAAABdE8/KT0UudaIHrMtbFvjC02yLuPLNBZurGYpQCNcBGAsYHQ/s400/onepiece17_doflamingo.png',
            ],
        ]
    );
    }
}
