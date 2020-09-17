<?php

use Illuminate\Database\Seeder;
use App\Block;
use App\Service;
use App\Project;

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
                    'title' => 'نبذه عن شركه اي تي مديكا',
                    'description' => 'شركه طبيه رائده في مجال الصحه الالكترونيه.',
                ],
                'en' => [
                    'title' => 'IT MEDICA',
                    'description' => 'A leading medical company in the field of electronic health.',
                ],
            ],
            [
                'name' => 'contactus',
                'ar' => [
                    'title' => 'تواصل معنا',
                    'description' => 'هل تواجه اي مشاكل تواصل معنا.',
                ],
                'en' => [
                    'title' => 'Contact Us',
                    'description' => 'Do you face any problems contact us.',
                ],
            ],
            [
                'name' => 'about',
                'ar' => [
                    'title' => 'مقدمه عن الشركه',
                    'description' => 'تعتبر شركه اي تي ميديكا العالميه المحدوده هي الشركه الاولى في مجال الصحه الالكترونيه فلا يخفي عليكم التقدم الكبير في مجال الصحه الالكترونيه و الاثر البالغ في توفير الوقت الجهد على مقدم الخدمه و الفرد و المجتمع.',
                ],
                'en' => [
                    'title' => 'About Us',
                    'description' => 'IT Medica International Limited is the first company in the field of e-health. It does not hide from you the great progress in the field of e-health and the great impact in saving time and effort on the service provider, the individual and society.',
                ],
            ],
            [
                'name' => 'service',
                'ar' => [
                    'title' => 'خدماتنا',
                    'description' => 'بعض من الخدمات التي تقدمها الشركه.',
                ],
                'en' => [
                    'title' => 'Our Services',
                    'description' => 'Some of the services provided by the company.',
                ],
            ],
            [
                'name' => 'intro',
                'ar' => [
                    'title' => '	مقدمه عن الشركه',
                    'description' => 'تعتبر شركه اي تي ميديكا العالميه المحدوده هي الشركه الاولى في مجال الصحه الالكترونيه فلا يخفي عليكم التقدم الكبير في مجال الصحه الالكترونيه و الاثر البالغ في توفير الوقت الجهد على مقدم الخدمه و الفرد و المجتمع.
                    شكره اي تي ميديكا العالميه المحدوده هي شركه سودانيه مسجله في ثانون الشركات بالرقم (51853).',
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
                    'description' => 'نبذه صغيره عن بعض من المشاريع التي تقوم الشركه وادارتها.',
                ],
                'en' => [
                    'title' => 'Some of our works',
                    'description' => 'A brief summary of some of the projects that the company undertakes and manages.',
                ],
            ],
            [
                'name' => 'blog',
                'ar' => [
                    'title' => 'المقالات',
                    'description' => 'بعض من المنشورات نقدم فيها معلومات طبيه.',
                ],
                'en' => [
                    'title' => 'Posts',
                    'description' => 'Some of the leaflets provide medical information.',
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
                    'name' => 'خدمه مشفانا',
                    'description' => 'خدمه توضحشواغر الاسره في المشتشفيات المشتركه في التطبيق مع خدمه الحجز المسبق.',
                ],
                'en' => [
                    'name' => 'Mashfana Update',
                    'description' => 'A service that explains family vacancies in the hospitals involved in the application with a pre-reservation service.',
                ],
            ],
            [
                'ar' => [
                    'name' => '	الاسعاف الالكتروني',
                    'description' => 'خدمات الاسعاف الالكتروني من خلال تطبيق سلامتك و بشراكه مع شركه ترحال للنقل حيث يمكن للمواطن طلب عربه اسعاف مجهزه لنقل مريضه.',
                ],
                'en' => [
                    'name' => 'Tirhal Slamtk',
                    'description' => 'Electronic ambulance services through the application of your safety and in partnership with the Tarhal transport company, where a citizen can request an ambulance equipped to transport a patient.',
                ],
            ],
            [
                'ar' => [
                    'name' => 'خدمه التطبيب عن بعد',
                    'description' => 'خدمه طبيه تقدم لكل التخصصات الطبيه عن طريق نظام طبي محوسب.',
                ],
                'en' => [
                    'name' => 'Telemedicine',
                    'description' => 'A medical service provided to all medical specialties through a computerized medical system.',
                ],
            ],
        ];

        foreach ($blocks as $block) {
            Block::create($block);
        }
        foreach ($services as $service) {
            Service::create($service);
        }
        foreach ($services as $project) {
            Project::create($project);
        }
    }
}
