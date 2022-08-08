<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
        'categorie_name_en'=>'Mobails',
        'categorie_name_ar'=>'هواتف',
        'categorie_description_en'=>' Buy mobiles online from popular brands such as Apple, Samsung, OnePlus, Vivo and more at Reliance Digital. Get delivery in 3 hours on select mobile ',

        'categorie_description_ar'=>' اشترِ الهواتف المحمولة عبر الإنترنت من العلامات التجارية الشهيرة مثل Apple و Samsung و OnePlus و Vivo والمزيد في Reliance Digital. احصل على التوصيل في 3 ساعات على هاتف محمول محدد',
        'categorie_image'=>'avatar.jpg'
    ],
        ['categorie_name_en'=>'LabTobs',
        'categorie_name_ar'=>'حواسيب محمولة',
        'categorie_description_en'=>'
        Buy Laptops in Jordan at GDS.JO. Laptops, and Notebooks from Dell, HP, Lenovo, ASUS, Surface, and MSI. Gaming Laptops, Business Laptops, Office Laptops.',
        'categorie_description_ar'=>'اشترِ أجهزة الكمبيوتر المحمولة في الأردن على GDS.JO. أجهزة الكمبيوتر المحمولة وأجهزة الكمبيوتر المحمولة من Dell و HP و Lenovo و ASUS و Surface و MSI. أجهزة الكمبيوتر المحمولة المخصصة للألعاب ، أجهزة الكمبيوتر المحمولة للأعمال ، أجهزة الكمبيوتر المحمولة المكتبية.',
        'categorie_image'=>'avatar.jpg'
     ],
    [
        'categorie_name_en'=>'Computers',
        'categorie_name_ar'=>'حواسيب',
        'categorie_description_en'=>'A computer is a digital electronic machine that can be programmed to carry out sequences of arithmetic or logical operations (computation) automatically.',
        'categorie_description_ar'=>'الكمبيوتر عبارة عن آلة إلكترونية رقمية يمكن برمجتها لتنفيذ متواليات من العمليات الحسابية أو المنطقية (الحساب) تلقائيًا.',
        'categorie_image'=>'avatar.jpg'
    ],
        ['categorie_name_en'=>'fourth category',
        'categorie_name_ar'=>'الصنف الرابع',
        'categorie_description_en'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam sit similique facilis corporis nostrum error facere sed perspiciatis inventore, commodi molestiae consectetur ut debitis nesciunt ad porro! Repudiandae, magnam doloremque.',
        'categorie_description_ar'=>'إنّ حب هذه الأرض لم يأتِ من العدم، فلولا الوطن لما شعرنا يومًا بمعنى الاستقرار والأمان، فهو الملجأ من كلّ ما يضرّنا، وهو المكان الذي لو عملنا ليلاً نهاراً من أجله لما استطعنا إيفاءه حقه، فهو الكيان الذي يستحق منّا العمل لا القول فقط، فالفرد الصالح هو من يعبّر عن حبّه لوطنه بالدفاع عنه في كل حين، وفي الحفاظ على ممتلكاته العامة ومرافقه ونظافتها، وهو الفرد ذاته الذي يسعى للتعلّم ونيل الدرجات لتسخيرها مستقبلاً في إفادة وطن',
        'categorie_image'=>'avatar.jpg'
        ]


    ]);
    }
}
