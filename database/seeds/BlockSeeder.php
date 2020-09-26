<?php

use Illuminate\Database\Seeder;
use App\Block;
use App\Service;
use App\Project;
use App\Category;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $blocks = [
            [
                'name' => 'home',
                'ar' => [
                    'title' => 'نبذة عن شركة اي تي مديكا',
                    'description' => 'شركة طبية رائدة في مجال الصحة الالكترونية',
                ],
                'en' => [
                    'title' => 'IT MEDICA',
                    'description' => 'A leading medical company in the field of electronic health',
                ],
            ],
            [
                'name' => 'contactus',
                'ar' => [
                    'title' => 'للتواصل معنا',
                    'description' => 'Do you face any problems contact us',
                ],
                'en' => [
                    'title' => 'Contact Us',
                    'description' => 'Do you face any problems contact us',
                ],
            ],
            [
                'name' => 'about',
                'ar' => [
                    'title' => 'مقدمة عن الشركة',
                    'description' => 'تعتبر شركة اي تي ميديكا العالمية المحدودة هي الشركة الاولى في مجال الصحة الالكترونية فلا يخفي عليكم التقدم الكبير في مجال الصحة الالكترونية و الاثر البالغ في توفير الوقت و الجهد على مقدم الخدمة و طالبي الخدمات الطبية في المجتمع.',
                ],
                'en' => [
                    'title' => 'About Us',
                    'description' => 'IT Medica International Limited is the first company in the field of e-health. It does not hide from you the great progress in the field of e-health and the great impact in saving time and effort on the service provider, the individual and society',
                ],
            ],
            [
                'name' => 'service',
                'ar' => [
                    'title' => 'خدماتنا',
                    'description' => 'بعض من الخدمات التي تقدمها الشركة',
                ],
                'en' => [
                    'title' => 'Our Services',
                    'description' => 'Some of the services provided by the company',
                ],
            ],
            [
                'name' => 'intro',
                'ar' => [
                    'title' => 'مقدمة عن الشركة',
                    'description' => 'تعتبر شركة اي تي ميديكا العالمية المحدودة هي الشركة الاولى في مجال الصحة الالكترونية فلا يخفي عليكم التقدم الكبير في مجال الصحة الالكترونية و الاثر البالغ في توفير الوقت الجهد على مقدم الخدمة و الفرد و المجتمع.
                    شكره اي تي ميديكا العالمية المحدودة هي شركة سودانية مسجلة في قانون الشركات بالرقم (51853)',
                ],
                'en' => [
                    'title' => 'Introduction to IT-MEDICA',
                    'description' => 'IT Medica International Limited is the first company in the field of e-health. It does not hide from you the great progress in the field of e-health and the great impact in saving time and effort on the service provider, the individual and society.
                    Thank you IT Medica International Limited is a Sudanese company registered in Thanon Companies with the number (51853).',
                ],
            ],
            [
                'name' => 'project',
                'ar' => [
                    'title' => 'بعض من مشاريعنا',
                    'description' => 'نبذة صغيرة عن بعض من المشاريع التي تقوم الشركة وادارتها',
                ],
                'en' => [
                    'title' => 'Some of our works',
                    'description' => 'A brief summary of some of the projects that the company undertakes and manages',
                ],
            ],
            [
                'name' => 'blog',
                'ar' => [
                    'title' => 'المقالات',
                    'description' => 'بعض من المنشورات نقدم فيها معلومات طبية',
                ],
                'en' => [
                    'title' => 'Posts',
                    'description' => 'Some of the leaflets provide medical information',
                ],
            ],
            // [
            //     'name' => 'home',
            //     'ar' => [
            //         'title' => '',
            //         'description' => '',
            //     ],
            //     'en' => [
            //         'title' => '',
            //         'description' => '',
            //     ],
            // ],
        ];

        $services = [
            [
                'ar' => [
                    'name' => 'نحن نرعاك',
                    'description' => '(نحن نرعاك | WeCare ) هو تطبيق للرعاية الصحية المنزلية يعمل كمنصة تربط أولئك الذين يبحثون عن نوع مختلف من الرعاية المريحة وبأسعار معقولة مع أولئك القادرين على توفيرها بشكل احترافي وفعال. الهدف العام هو تحسين كفاءة التشغيل والتكلفة وتعزيز تجربة مستخدم الخدمات',
                ],
                'en' => [
                    'name' => 'WeCare',
                    'description' => 'WeCare is a home healthcare application that serves as a platform connecting those who seek a convenient and affordable various type of care with those who are able to provide it professionally and effectively. The overall aim is to improve operational and cost efficiencies and to enhance the services user experience',
                ],
            ],

            [
                'ar' => [
                    'name' => '	الاسعاف الالكتروني',
                    'description' => 'خدمات الاسعاف الالكتروني من خلال تطبيق سلامتك و بشراكة مع شركة ترحال للنقل حيث يمكن للمواطن طلب عربة اسعاف مجهزة لنقل مريضة',
                ],
                'en' => [
                    'name' => 'Tirhal Slamtk',
                    'description' => 'Electronic ambulance services through the application of your safety and in partnership with the Tarhal transport company, where a citizen can request an ambulance equipped to transport a patient',
                ],
            ],
            
            [
                'ar' => [
                    'name' => 'خدمة مشفانا',
                    'description' => 'خدمة توضح شواغر الاسرة في المشتشفيات المشتركة في التطبيق مع خدمة الحجز المسبق',
                ],
                'en' => [
                    'name' => 'Mashfana Update',
                    'description' => 'A service that explains family vacancies in the hospitals involved in the application with a pre-reservation service',
                ],
            ],
            
            [
                'ar' => [
                    'name' => 'خدمة التطبيب عن بعد',
                    'description' => 'خدمة طبية تقدم لكل التخصصات الطبية عن طريق نظام طبي محوسب',
                ],
                'en' => [
                    'name' => 'Telemedicine',
                    'description' => 'A medical service provided to all medical specialties through a computerized medical system',
                ],
            ],
        ];

        $category = [
            'ar' => [
                'name' => 'ثقافة طبية',
                'description' => 'ثقافة طبية',
            ],
            'en' => [
                'name' => 'Health Education',
                'description' => 'Health Education',
            ],
        ];

        

        foreach ($blocks as $block) {
            Block::create($block);
        }
        
        foreach ($services as $service) {
            Service::create($service);
        }

        Category::create($category);

        // foreach ($services as $project) {
        //     Project::create($project);
        // }


    }
}
