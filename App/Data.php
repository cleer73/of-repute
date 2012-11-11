<?php

// DATA -----------------------------------------------------------------------
$resume = array(
    'summary'    => 'I am an experienced web developer and database administrator with a proven history of designing, developing and supporting multiple, time-sensitive projects, both independently and as part of a team.',
    'contact'    => array(
        // vCard
        'fn' => 'Jacob W. Lee',
        'nickname' => array('Jake'),
        'email' => 'jake@cleer.net',
        'tel'   => '+1.206.778.2893',
        'adr'   => array(
            'street-address' => '1945 Miss Ellis Loop NE',
            'locality'       => 'Poulsbo',
            'region'         => 'Washington',
            'postal-code'    => '98370',
            'country-name'   => 'U.S.A.'
        ),
    ),
    'skills' => array(
        '12+ years of experience in web development and database administration',
        'Development with PHP, Perl, ASP, Progress, SQL, JavaScript, Ajax, jQuery, HTML, CSS, REST.',
        'Use of front end frameworks like Cake, Zend Framework, and Slim, to speed development.',
        'Use of back end frameworks like Knockout.js, and Backbone.js to create rich UI experiences.',
        'Using Photoshop in to create and reference mockups.',
        'Using Linux/UNIX, Mac,  and Windows for development.',
        'Administrating both MySQL and Microsoft SQL Server.',
        'Independently managing a project from beginning to end.',
        'Supporting and integrating various software systems (Great Plains, PowerCAMPUS, IQ.Web)',
        'Familiar with Python, Django, Java, C/C++',
    ),
    'experience' => array(
        // iCalendar
        array(
            'summary'  => 'Developer', // Job Title
            'dtstart'  => '2012-04', // Job started
            'dtend'    => date('Y-m'),
            'location' => 'Sound Ad Group, Seattle, Washington', // Company Name
            'comments' => array( 
                'The primary front-end developer implementing a completely new design and experience.',
                'A team member in development of admin site for ad agencies to manage campaigns, advertisers, and publishers.',
                'Worked on front-end changes to a site for ad publishers to participate in available campaigns.',
            ),
        ),
        array(
            'summary'  => 'Developer', // Job Title
            'dtstart'  => '2010-05', // Job started
            'dtend'    => '2012-04', // Job ended
            'location' => 'Northwest University, Kirkland, Washington', // Company Name
            'comments' => array( 
                'Designed and coded a custom online bookstore for the bookstore inventory management software.',
                'Updated an existing online admissions application to include all graduate and undergraduate programs.',
                'Led a team of developers to redesign an existing custom CMS site to use Wordpress, giving the site an integrated appearance, better navigation, and an up to date homepage for the campus to reference.',
                'Organized and managed internal web development projects.',
            ),
        ),
        array(
            'summary'  => 'Application Development Analyst', // Job Title
            'dtstart'  => '2009-04', // Job started
            'dtend'    => '2010-05', // Job ended
            'location' => 'Washington School Information Processing Cooperative, Mukilteo, Washington', // Company Name
            'comments' => array( 
                'Converted and tested applications from a desktop application to the web.',
                'Wrote test plans to clearly communicate and track issues in software with other developers.',
                'Produced demonstration tutorials to communicate software defects and project completion.',
                'Worked with vendors to develop software delivered to K-12 schools nationwide.',
                'Quickly learned a new programming language to become a productive team member.',
                'Worked collaboratively with other developers to help solve new problems.',
                'Communicated with support staff to meet the needs of Washington State schools while fixing bugs.',
            ),
        ),
        array(
            'summary'  => 'Senior Software Engineer', // Job Title
            'dtstart'  => '2007-05', // Job started
            'dtend'    => '2008-12', // Job ended
            'location' => 'NuVention Media Inc., Bellevue, Washington', // Company Name
            'comments' => array( 
                'Designed and developed an asset management system website.',
                'Designed and developed a loan management system for mortgage brokers.',
                'Designed and developed a system of scripts and websites to retrieve data from the US Patent and Trademark Office website using a REST interface built with a PHP server and Perl clients.',
                'Designed and developed a system of scripts to retrieve and process XML patent releases.',
                'Designed and developed a collaborative website to facilitate the creation and collaboration of ideas, as well as the exploration of millions of patents.',
                'Built a document search index using Lucene, initially using a custom indexer built using Java and later implemented using Solr.',
                'Designed and maintained multiple databases to support various websites, including a database containing millions of records of US Patent and Trademark Office documents.',
            ),
        ),
        array(
            'summary'  => 'Administrative Database Engineer', // Job Title
            'dtstart'  => '2000-08', // Job started
            'dtend'    => '2007-05', // Job ended
            'location' => 'Northwest University, Kirkland, Washington', // Company Name
            'comments' => array( 
                'Assigned responsibility for maintaining and insuring the data and system integrity of various databases, including the university’s primary academic and financial records databases. Responsibilities included creating integration with third party systems, developing necessary applications and reports, and insuring the integrity of the table structures, relationships, indexes and security for these systems.',
                'Served as technical lead of, and was commended for, the smooth and timely conversion of the academic database from a legacy system to SQL Server.',
                'Developed a custom integration system between the academic database and the learning management system by developing scripts, queries, and policies in collaboration with the various departments on campus.',
                'Designed a human resources database to track employee health benefits, manage contact information, and current and historical employment data, as well as various necessary reports, using Microsoft Access.',
                'Built various reporting utilities to produce monthly account statements for staff and students, as well as yearly budget reporting and tracking for departmental heads.',
                'Utilized ASP, PHP, HTML, CSS, JavaScript and SQL to design and develop the university’s online registration, scholarship application, and budget management web pages.',
                'Used Microsoft Access and Excel to create many detailed and complex database-driven reports for various university departments.',
                'Lead and participated in discussions and meetings with clients to identify priorities, clarify requirements, provide recommendations and report on progress.',
                'Assisted in finding and defining flaws in hardware and software.',
            ),
        ),
    ),
    'education' => array(
        // iCalendar
        array(
            'location' => 'Whitworth University, Spokane, Washington', // Company Name
            'summary'  => 'Bachelor of Science in Computer Science', // Degree
            'dtstart'  => '1996-08', // Started
            'dtend'    => '2000-05', // Completed
        ),
    ),
);
