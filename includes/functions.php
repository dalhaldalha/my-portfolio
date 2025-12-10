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
            'id' => 'graphic-1',
            'type' => 'graphic',
            'title' => 'HMD Limited Graphics',
            'category' => 'Graphic Design',
            'desc' => 'A comprehensive brand identity package including logo design, social media assets, and marketing materials.',
            'details' => 'This project involved creating a cohesive visual identity for a client. Deliverables included a primary logo, secondary marks, color palette selection, typography guidelines, and a suite of social media templates to ensure consistent brand representation across all channels.',
            'tech_stack' => ['Photoshop', 'Illustrator', 'Canva'],
            'link' => '#',
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
            'id' => 'graphic-1',
            'type' => 'graphic',
            'title' => 'HMD Limited Graphics',
            'category' => 'Graphic Design',
            'desc' => 'A comprehensive brand identity package including logo design, social media assets, and marketing materials.',
            'details' => 'This project involved creating a cohesive visual identity for a client. Deliverables included a primary logo, secondary marks, color palette selection, typography guidelines, and a suite of social media templates to ensure consistent brand representation across all channels.',
            'tech_stack' => ['Photoshop', 'Illustrator', 'Canva'],
            'link' => '#',
            'images' => [
                'assets/images/Bell Transport New 1.png',
                'assets/images/Bell Transport New 2.png',
                'assets/images/Bell Transport New 3.png',
                'assets/images/Bell Transport New 4.png',
                'assets/images/Bell Transport New 5.png'
            ] 
        ],

        [
            'id' => 'graphic-1',
            'type' => 'graphic',
            'title' => 'HMD Limited Graphics',
            'category' => 'Graphic Design',
            'desc' => 'A comprehensive brand identity package including logo design, social media assets, and marketing materials.',
            'details' => 'This project involved creating a cohesive visual identity for a client. Deliverables included a primary logo, secondary marks, color palette selection, typography guidelines, and a suite of social media templates to ensure consistent brand representation across all channels.',
            'tech_stack' => ['Photoshop', 'Illustrator', 'Canva'],
            'link' => '#',
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
            'id' => 'graphic-1',
            'type' => 'graphic',
            'title' => 'HMD Limited Graphics',
            'category' => 'Graphic Design',
            'desc' => 'A comprehensive brand identity package including logo design, social media assets, and marketing materials.',
            'details' => 'This project involved creating a cohesive visual identity for a client. Deliverables included a primary logo, secondary marks, color palette selection, typography guidelines, and a suite of social media templates to ensure consistent brand representation across all channels.',
            'tech_stack' => ['Photoshop', 'Illustrator', 'Canva'],
            'link' => '#',
            'images' => [
                'assets/images/Bakandamiya Shopping 1.png',
                'assets/images/Bakandamiya Shopping 2.png',
                'assets/images/Bakandamiya Shopping 3.png'
            ] 
        ],

        [
            'id' => 'graphic-1',
            'type' => 'graphic',
            'title' => 'HMD Limited Graphics',
            'category' => 'Graphic Design',
            'desc' => 'A comprehensive brand identity package including logo design, social media assets, and marketing materials.',
            'details' => 'This project involved creating a cohesive visual identity for a client. Deliverables included a primary logo, secondary marks, color palette selection, typography guidelines, and a suite of social media templates to ensure consistent brand representation across all channels.',
            'tech_stack' => ['Photoshop', 'Illustrator', 'Canva'],
            'link' => '#',
            'images' => [
                'assets/images/Bell Graphics Old 1.jpg',
                'assets/images/Bell Graphics Old 2.jpg',
                'assets/images/Bell Graphics Old 3.jpg',
                'assets/images/Bell Graphics Old 4.jpg',
                'assets/images/Bell Graphics Old 5.jpg'
            ] 
        ],

        [
            'id' => 'graphic-1',
            'type' => 'graphic',
            'title' => 'HMD Limited Graphics',
            'category' => 'Graphic Design',
            'desc' => 'A comprehensive brand identity package including logo design, social media assets, and marketing materials.',
            'details' => 'This project involved creating a cohesive visual identity for a client. Deliverables included a primary logo, secondary marks, color palette selection, typography guidelines, and a suite of social media templates to ensure consistent brand representation across all channels.',
            'tech_stack' => ['Photoshop', 'Illustrator', 'Canva'],
            'link' => '#',
            'images' => [
                'assets/images/Solara Pay Pitch Deck 1.png'
            ] 
        ]
        
    ];
}
?>
