<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([[
            'subcategorie_name_en'=>'HUAWEI ',
            'subcategorie_name_ar'=>'هواوي',
            'subcategorie_description_en'=>"Discover the latest technologies in smartphones, laptops, tablets, accessories and smart home devices with HUAWEI, check out the HUAWEI P40 Series",
            'subcategorie_description_ar'=>'اكتشف أحدث التقنيات في الهواتف الذكية وأجهزة الكمبيوتر المحمولة والأجهزة اللوحية والإكسسوارات والأجهزة المنزلية الذكية مع HUAWEI، تحقق من سلسلة HUAWEI P40 ',
            'categorie_image'=>'avatar.jpg',
            'categorie_id'=>1
        ],
            ['subcategorie_name_en'=>'Samsung ',
            'subcategorie_name_ar'=>'سامسونج',
            'subcategorie_description_en'=>"Discover the latest Samsung Galaxy smartphone and explore the full line of mobile phones from Samsung. No matter your needs, there's a Galaxy made for you.",
            'subcategorie_description_ar'=>'اكتشف أحدث هاتف ذكي Samsung Galaxy واستكشف المجموعة الكاملة من الهواتف المحمولة من Samsung. بغض النظر عن احتياجاتك ، هناك جهاز Galaxy مصمم خصيصًا لك.',
          'categorie_image'=>'avatar.jpg',
            'categorie_id'=>1

         ],
        [
            'subcategorie_name_en'=>'shawmi',
            'subcategorie_name_ar'=>'شاومي',
            'subcategorie_description_en'=>'Founded in April 2010 and headquartered in Beijing, it is a multinational Chinese electronics company that works and invests in the field of manufacturing smart phones and their applications, tablets, laptops, other appliances, consumer electronics, bags and household appliances.',
            'subcategorie_description_ar'=>'هي شَّرِكَة إلكترونيات صينيَّة مُتَعَدّدَة الجنسيّات أُسّست في أبريل 2010 ومقرها في بكين،  تعمل وتستثمر في مَجَالِ صناعة أَجهِزَة الهواتِف الذَكِيّة وتطبيقاتها والأَجهِزَة اللوحية وأجهزة الحاسوب المَحمُولة والأَجهِزَة المنزليَّة والحقائب والأحذية والإلكترونيّات الاستهلاكيّة والعديد مِن المُنتجات الأُخرى،  وفي 2017 كانت تُعد الشَّرِكَة الرابعة عالميًا بَعدَ أبل وسامسونج وهواوي. ولهَا عدَّة مقرَّات رئيسيَّة في سنغافورة وماليزيا والهند',
            'categorie_image'=>'avatar.jpg',
            'categorie_id'=>1

        ],
            ['subcategorie_name_en'=>'Opoo',
            'subcategorie_name_ar'=>'اوبو',
            'subcategorie_description_en'=>'Explore the latest innovative OPPO smartphones and accessories and leap into the future with OPPO Reno7 Series, OPPO Find X5 Series and OPPO Enco Air2.',
            'subcategorie_description_ar'=>'اكتشف أحدث الهواتف الذكية وملحقات OPPO المبتكرة وانطلق إلى المستقبل مع سلسلة OPPO Reno7 وسلسلة OPPO Find X5 و OPPO Enco Air2.',
            'categorie_image'=>'avatar.jpg',
            'categorie_id'=>1

    ],
    [
        'subcategorie_name_en'=>'HUAWEI ',
        'subcategorie_name_ar'=>'هواوي',
        'subcategorie_description_en'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rem! Quaerat, aperiam. Nostrum aperiam aut reprehenderit ducimus libero ad, soluta dolores ea assumenda explicabo quo eligendi dolor, obcaecati, veniam atque?",
        'subcategorie_description_ar'=>'اكتشف أحدث التقنيات في الهواتف الذكية وأجهزة الكمبيوتر المحمولة والأجهزة اللوحية والإكسسوارات والأجهزة المنزلية الذكية مع HUAWEI، تحقق من سلسلة HUAWEI P40 ',
        'categorie_image'=>'avatar.jpg',
        'categorie_id'=>2
    ],
        ['subcategorie_name_en'=>'Samsung ',
        'subcategorie_name_ar'=>'سامسونج',
        'subcategorie_description_en'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rem! Quaerat, aperiam. Nostrum aperiam aut reprehenderit ducimus libero ad, soluta dolores ea assumenda explicabo quo eligendi dolor, obcaecati, veniam atque?",
        'subcategorie_description_ar'=>'اكتشف أحدث حاسوب ذكي Samsung  واستكشف المجموعة الكاملة من الحواسيب من Samsung. بغض النظر عن احتياجاتك ، هناك جهاز Galaxy مصمم خصيصًا لك.',
      'categorie_image'=>'avatar.jpg',
        'categorie_id'=>2

     ],
    [
        'subcategorie_name_en'=>'shawmi',
        'subcategorie_name_ar'=>'شاومي',
        'subcategorie_description_en'=>'Founded in April 2010 and headquartered in Beijing, it is a multinational Chinese electronics company that works and invests in the field of manufacturing smart phones and their applications, tablets, laptops, other appliances, consumer electronics, bags and household appliances.',
        'subcategorie_description_ar'=>'هي شَّرِكَة إلكترونيات صينيَّة مُتَعَدّدَة الجنسيّات أُسّست في أبريل 2010 ومقرها في بكين،  تعمل وتستثمر في مَجَالِ صناعة أَجهِزَة الهواتِف الذَكِيّة وتطبيقاتها والأَجهِزَة اللوحية وأجهزة الحاسوب المَحمُولة والأَجهِزَة المنزليَّة والحقائب والأحذية والإلكترونيّات الاستهلاكيّة والعديد مِن المُنتجات الأُخرى،  وفي 2017 كانت تُعد الشَّرِكَة الرابعة عالميًا بَعدَ أبل وسامسونج وهواوي. ولهَا عدَّة مقرَّات رئيسيَّة في سنغافورة وماليزيا والهند',
        'categorie_image'=>'avatar.jpg',
        'categorie_id'=>2

    ],
        ['subcategorie_name_en'=>'Opoo',
        'subcategorie_name_ar'=>'اوبو',
        'subcategorie_description_en'=>'Explore the latest innovative OPPO smartphones and accessories and leap into the future with OPPO Reno7 Series, OPPO Find X5 Series and OPPO Enco Air2.',
        'subcategorie_description_ar'=>'اكتشف أحدث الهواتف الذكية وملحقات OPPO المبتكرة وانطلق إلى المستقبل مع سلسلة OPPO Reno7 وسلسلة OPPO Find X5 و OPPO Enco Air2.',
        'categorie_image'=>'avatar.jpg',
        'categorie_id'=>2

        ]


    ]);
    }
}
