<?php
// Data: Skills
function getSkills() {
    return [
        'Backend' => [
            ['name' => 'PHP', 'level' => 75, 'icon' => 'fab fa-php'],
            ['name' => 'WordPress', 'level' => 95, 'icon' => 'fab fa-wordpress'],
            ['name' => 'Photoshop', 'level' => 85, 'icon' => 'fas fa-palette'],
        ],
        'Frontend' => [
            ['name' => 'JavaScript', 'level' => 60, 'icon' => 'fab fa-js'],
            ['name' => 'HTML5/CSS3', 'level' => 75, 'icon' => 'fab fa-html5'],
            
        ],
        'Tools' => [
            ['name' => 'Git', 'level' => 45, 'icon' => 'fab fa-git-alt'],
        ]
    ];
}

// Data: Experience
function getExperience() {
    return [
        [
            'year' => '2025 - Present',
            'role' => 'Wordpress Developer',
            'company' => 'Bakandamiya Int Limited',
            'desc' => 'Developed and customized WordPress plugins to extend site functionality, streamline workflows, and support the company’s evolving digital needs.'
        ],
        [
            'year' => '2022 - 2023',
            'role' => 'Web Designer',
            'company' => 'HMD Int\'L Limited',
            'desc' => 'Designed and built responsive website layouts, ensuring clean visuals and smooth user experience while supporting the company’s brand and online presence.'
        ],
        [
            'year' => '2022 - Present',
            'role' => 'Graphic Designer & Social Media Manager',
            'company' => 'Penprofile',
            'desc' => 'Create visual assets and manage social media content to strengthen brand identity, improve engagement, and support the company’s overall digital communication strategy.'
        ]
    ];
}

// Data: Projects
function getProjects() {
    return [
        [
            'id' => 'project-1',
            'type' => 'web',
            'title' => 'Taldot Consulting',
            'category' => 'Interior Design Website',
            'desc' => 'A polished interior design platform crafted with WordPress, featuring a clean layout, curated project displays, and a smooth browsing experience.',
            'details' => 'An Interior Design Website built with WordPress, showcasing curated projects, clean aesthetics, and smooth navigation. It features custom HTML elements styled with custom CSS to give the site a more unique look and enhance the overall presentation across devices.',
            'tech_stack' => ['WordPress', 'PhP', 'Custom CSS', 'JavaScript'],
            'link' => 'https://taldotconsulting.com',
            'images' => [
                'assets/images/Taldot Consulting 1.png',
                'assets/images/Taldot Consulting 2.png',
                'assets/images/Taldot Consulting 3.png',
                'assets/images/Taldot Consulting 4.png',
                'assets/images/Taldot Consulting 5.png'
            ] 
        ],

        [
            'id' => 'hmd-project',
            'type' => 'web',
            'title' => "HMD Int'l Limited",
            'category' => 'Real Estate/Construction Website',
            'desc' => 'A full-scale corporate site built for a multi-service construction and real estate firm, presenting its services and company profile in a clear professional layout.',
            'details' => 'Designed and developed a professional corporate website for HMD International Limited. The site showcases their diverse services including construction, real estate, and interior design. Features include a dynamic project portfolio, service detailing, and a responsive design that reflects their brand authority.',
            'tech_stack' => ['WordPress', 'PHP', 'Custom CSS', 'JavaScript'],
            'link' => 'https://hmdlimited.com/',
            'images' => [
                'assets/images/HMD Int\'l Limited 6.png',
                'assets/images/HMD Int\'l Limited 2.png',
                'assets/images/HMD Int\'l Limited 4.png',
                'assets/images/HMD Int\'l Limited 5.png'
            ]
        ],

        [
            'id' => 'project-3',
            'type' => 'web',
            'title' => 'Jobsintelregion',
            'category' => 'Job Board Website',
            'desc' => 'A job and career platform that connects people with verified opportunities, offering clear listings and practical guidance for smarter career decisions.',
            'details' => 'A streamlined job and career resource platform designed to connect job seekers with credible employment opportunities across multiple industries. It provides up-to-date listings, career insights, employer information, and practical guidance to help users make informed professional decisions.',
            'tech_stack' => ['WordPress', 'PHP', 'Custom CSS', 'JavaScript'],
            'link' => 'https://jobsintelregion.com/',
            'images' => [
                'assets/images/Jobsintelregion 1.png',
                'assets/images/Jobsintelregion 2.png',
                'assets/images/Jobsintelregion 3.png',
                'assets/images/Jobsintelregion 4.png',
                'assets/images/Jobsintelregion 5.png'
            ]
        ],

        [
            'id' => 'project-2',
            'type' => 'web',
            'title' => 'Vacancyunlocked',
            'category' => 'Job Portal Website',
            'desc' => 'A modern job portal developed with WordPress, designed to help users post, browse, and apply for opportunities through a clean and organized interface.',
            'details' => 'A job portal website built with WordPress, offering a clean interface for posting and browsing job listings. It includes organized categories, smooth navigation, and custom styling to keep the experience clear, modern, and easy for users searching or hiring.',
            'tech_stack' => ['WordPress', 'PHP', 'Custom CSS', 'JavaScript'],
            'link' => '#',
            'images' => [
                'assets/images/Vacancyunlocked 1.png',
                'assets/images/Vacancyunlocked 5.png',
                'assets/images/Vacancyunlocked 3.png',
                'assets/images/Vacancyunlocked 4.png',
                'assets/images/Vacancyunlocked 2.png'
            ]
        ],

        //Graphic Design
        [
            'id' => 'graphic-hmd',
            'type' => 'graphic',
            'title' => 'HMD Limited Graphics',
            'category' => 'Social Media Design',
            'desc' => 'A professional corporate identity suite including logo design and branding materials for a construction and real estate firm.',
            'details' => 'Developed a strong, trustworthy visual identity for HMD Limited. This included designing a modern logo, business cards, letterheads, and social media assets that reflect the company\'s reliability and expertise in the construction sector.',
            'tech_stack' => ['Photoshop', 'Illustrator', 'Canva'],
            'link' => 'https://hmdlimited.com/',
            'images' => [
                'assets/images/HMD Limited Old 1.png',
                'assets/images/HMD Limited Old 2.png',
                'assets/images/HMD Limited Old 3.png',
                'assets/images/HMD Limited Old 4.png',
                'assets/images/HMD Limited Old 5.png',
                'assets/images/HMD Limited Old 6.png',
                'assets/images/HMD Limited Old 7.png'
            ] 
        ],

        [
            'id' => 'graphic-bell',
            'type' => 'graphic',
            'title' => 'Bell Transport Graphics',
            'category' => 'Social Media Design',
            'desc' => 'Dynamic branding and vehicle livery design for a logistics company, focusing on speed and reliability.',
            'details' => 'Created a cohesive Social Media brand system for Bell Transport. The project involved designing a vehicle branding (livery), and marketing materials to ensure high visibility and brand recognition on the road.',
            'tech_stack' => ['Photoshop', 'Canva'],
            'link' => 'https://belltransport.ng/',
            'images' => [
                'assets/images/Bell Transport New 1.png',
                'assets/images/Bell Transport New 2.png',
                'assets/images/Bell Transport New 3.png',
                'assets/images/Bell Transport New 4.png',
                'assets/images/Bell Transport New 5.png'
            ] 
        ],

        [
            'id' => 'graphic-solar',
            'type' => 'graphic',
            'title' => 'Solar Pay',
            'category' => 'Social Media Design',
            'desc' => 'Engaging social media graphics and marketing assets designed to promote a modern fintech solution.',
            'details' => 'Designed a series of vibrant and engaging social media creatives for Solar Pay. The focus was on clear communication of financial features, using modern typography and consistent brand colors to build trust and user engagement across digital platforms.',
            'tech_stack' => ['Photoshop', 'Canva'],
            'link' => 'https://solarpay.fun/',
            'images' => [
                'assets/images/Solar Pay Social 1.png',
                'assets/images/Solar Pay Social 2.png',
                'assets/images/Solar Pay Social 3.png',
                'assets/images/Solar Pay Social 4.png',
                'assets/images/Solar Pay Social 5.png',
                'assets/images/Solar Pay Social 6.png',
                'assets/images/Solar Pay Social 7.png'
            ] 
        ],

        [
            'id' => 'graphic-shopping',
            'type' => 'graphic',
            'title' => 'Bakandamiya Shopping',
            'category' => 'E-commerce Graphics',
            'desc' => 'Eye-catching e-commerce promotional graphics designed to highlight products and drive sales.',
            'details' => 'Produced a set of high-conversion promotional banners and product graphics for Bakandamiya Shopping. The designs focus on product visibility, clear calls-to-action, and an appealing layout to enhance the online shopping experience.',
            'tech_stack' => ['Photoshop'],
            'link' => 'https://shopping.bakandamiya.com/',
            'images' => [
                'assets/images/Bakandamiya Shopping 1.png',
                'assets/images/Bakandamiya Shopping 2.png',
                'assets/images/Bakandamiya Shopping 3.png'
            ] 
        ],

        [
            'id' => 'graphic-pitch',
            'type' => 'graphic',
            'title' => 'Solara Pay Pitch Deck',
            'category' => 'Presentation Design',
            'desc' => 'A clean, professional pitch deck design aimed at investors, featuring clear data visualization and strategic layout.',
            'details' => 'Designed a compelling pitch deck for Solara Pay to present to potential investors. The layout emphasizes clarity, using custom infographics and a structured narrative flow to effectively communicate the business model and growth potential.',
            'tech_stack' => ['Photoshop','Canva'],
            'link' => 'https://solara-pay.com/',
            'images' => [
                'assets/images/Solara Pay Pitch Deck 1.png'
            ] 
        ],

        [
            'id' => 'graphic-photo',
            'type' => 'graphic',
            'title' => 'Photo Manipulation Project',
            'category' => 'Photo Manipulation',
            'desc' => 'Creative photo manipulation and composition works demonstrating advanced editing skills and artistic vision.',
            'details' => 'A collection of creative photo manipulation projects. These pieces explore surreal concepts and advanced blending techniques in Photoshop, transforming ordinary images into compelling visual narratives.',
            'tech_stack' => ['Photoshop', 'Illustrator', 'Canva'],
            'link' => '#',
            'images' => [
                'assets/images/Photo Manupulation 1.png',
                'assets/images/Photo Manupulation 2.png',
                
            ] 
        ]
        
    ];
}
?>
