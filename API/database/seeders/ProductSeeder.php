<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
            'product_name_en'=>'HUAWEI P50 Pro',
            'product_name_ar'=>'هواوي p50 Pro',
            'subcategorie_id'=>1,
            'categorie_id'=>1,
            'product_quantity'=>'1',
            'product_price'=>200,
            'product_rate'=>'5',
            'product_main_image'=>'avatar.jpg',
            'product_description_en'=>'بطارية كبيرة تبلغ 4360 ملي أمبير/ساعة4،
            الشحن الفائق HUAWEI SuperCharge بقدرة 66 واط5،
            الشحن الفائق HUAWEI SuperCharge اللاسلكي بقدرة 50 واط6،
            مكبرات صوت ستيريو مزدوجة
            مشاركة ذكية عبر
الأجهزة، التشغيل السلس و
السريع، الخصوصية والأمان',
            'product_description_ar'=>'Dual-Matrix Camera Design,
            6.6 inch True-Chroma Display⁠1,
            120 Hz Screen Refresh Rate⁠2,
            IP68 Splash, Water, and Dust Resistance⁠',

        ],
        [
            'product_name_en'=>'HUAWEI P40 Pro',
            'product_name_ar'=>'هواوي p40 Pro',
            'subcategorie_id'=>1,
            'categorie_id'=>1,
            'product_quantity'=>'1',
            'product_price'=>200,
            'product_rate'=>'5',
            'product_main_image'=>'avatar.jpg',
            'product_description_en'=>'بطارية كبيرة تبلغ 4360 ملي أمبير/ساعة4،
            الشحن الفائق HUAWEI SuperCharge بقدرة 66 واط5،
            الشحن الفائق HUAWEI SuperCharge اللاسلكي بقدرة 50 واط6،
            مكبرات صوت ستيريو مزدوجة
            مشاركة ذكية عبر
الأجهزة، التشغيل السلس و
السريع، الخصوصية والأمان',
            'product_description_ar'=>'Dual-Matrix Camera Design,
            6.6 inch True-Chroma Display⁠1,
            120 Hz Screen Refresh Rate⁠2,
            IP68 Splash, Water, and Dust Resistance⁠',

        ],
        [
            'product_name_en'=>'Galaxy S22 Ultra',
            'product_name_ar'=>'جلاكسي S22 الترا',
            'subcategorie_id'=>2,
            'categorie_id'=>1,
            'product_quantity'=>'1',
            'product_price'=>200,
            'product_rate'=>'5',
            'product_main_image'=>'avatar.jpg',
            'product_description_en'=>'بطارية كبيرة تبلغ 4360 ملي أمبير/ساعة4،
            الشحن الفائق HUAWEI SuperCharge بقدرة 66 واط5،
            الشحن الفائق HUAWEI SuperCharge اللاسلكي بقدرة 50 واط6،
            مكبرات صوت ستيريو مزدوجة
            مشاركة ذكية عبر
الأجهزة، التشغيل السلس و
السريع، الخصوصية والأمان',
            'product_description_ar'=>'Dual-Matrix Camera Design,
            6.6 inch True-Chroma Display⁠1,
            120 Hz Screen Refresh Rate⁠2,
            IP68 Splash, Water, and Dust Resistance⁠',

        ],
        [
            'product_name_en'=>'Galaxy S20 Ultra',
            'product_name_ar'=>'جلاكسي S20 الترا',
            'subcategorie_id'=>2,
            'categorie_id'=>1,
            'product_quantity'=>'1',
            'product_price'=>200,
            'product_rate'=>'5',
            'product_main_image'=>'avatar.jpg',
            'product_description_en'=>'بطارية كبيرة تبلغ 4360 ملي أمبير/ساعة4،
            الشحن الفائق HUAWEI SuperCharge بقدرة 66 واط5،
            الشحن الفائق HUAWEI SuperCharge اللاسلكي بقدرة 50 واط6،
            مكبرات صوت ستيريو مزدوجة
            مشاركة ذكية عبر
الأجهزة، التشغيل السلس و
السريع، الخصوصية والأمان',
            'product_description_ar'=>'Dual-Matrix Camera Design,
            6.6 inch True-Chroma Display⁠1,
            120 Hz Screen Refresh Rate⁠2,
            IP68 Splash, Water, and Dust Resistance⁠',

        ]

        ]);
    }
}
