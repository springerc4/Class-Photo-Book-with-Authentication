<?php
    // Associative array full of information for the three students
    $student_info = [
        // Information for Cameron Springer
        [
          'first name' => 'Cameron',
          'last name' => 'Springer',
          'role' => 'ASE 230 Student',
          'year' => 'sophomore',
          'profile pic' => 'Headshot.jpg',
          'dream profession' => 'Data Analyst',
          'dream company' => 'Netflix',
          'email' => 'springerc4@nku.edu',
          'short intro' => 'Hello, my name is Cameron Springer. I am currently a sophomore at Northern Kentucky University and majoring in Data Science. I have some prior experience in programming with Python, Java, and basic web design with HTML/CSS. For recreation, I enjoy reading, watching movies, and playing disc golf.',
          'quote' => '"The greatest enemy of knowledge is not ignorance. It is the illusion of knowledge."',
          'author of quote' => '- Stephen Hawking',
          'skills' => array(
            [
              'Mathematics',
              55
            ],
            [
              'Web Design',
              45
            ],
            [
              'Public Speaking',
              30
            ],
          ),
          'fun fact' => 'I\'ve never ridden a bike. Sometimes I refuse to learn just so I can have something unique to use for icebreakers and I also just haven\'t had any interest in learning. While it\'s still a small minority, some might be schocked by the 6% of American adults who don\'t know how to ride a bike.',
          'date of birth' => '2001-12-26'
        ],
        // Information for Brett Thaman
        [
          'first name' => 'Brett',
          'last name' => 'Thaman',
          'role' => 'ASE 230 Student',
          'year' => 'senior',
          'profile pic' => 'https://bootdey.com/img/Content/avatar/avatar1.png',
          'dream profession' => 'Professional Disc Golfer',
          'dream company' => 'Innova',
          'email' => 'thamanb1@nku.edu',
          'short intro' => 'My name is Brett Thaman. I am a CIT major with the goal of going into software 
          development. I enjoy programming because I like the problem solving apsects of it. I hope that
          this class will give me experience and help me learn morea bout web development.',
          'quote' => '"Hello"',
          'author of quote' => '- Brett Thaman',
          'skills' => array(
            [
              'Python',
              80
            ],
            [
              'Java',
              75
            ],
            [
              'HTML',
              65
            ],
          ),
          'fun fact' => 'I was a saxophone player in the NKU jazz band.',
          'date of birth' => '1997-12-10'
        ],
        // Information for Kevin Jones
        [
          'first name' => 'Kevin',
          'last name' => 'Jones',
          'role' => 'ASE 230 Student',
          'year' => 'junior',
          'profile pic' => 'https://bootdey.com/img/Content/avatar/avatar5.png',
          'dream profession' => 'Ice Cream Taster',
          'dream company' => 'Ben and Jerry\'s',
          'email' => 'kjones32@iloveicecream.com',
          'short intro' => 'I love ice cream. I mean, I REALLY love ice cream. My whole life is ice cream. What\'s for breakfast? Ice cream. What\'s for lunch? Ice cream. What\'s for dinner? Ice cream. I really can\'t imagine a world where ice and cream never met.',
          'quote' => 'Ice cream slaps.',
          'author of quote' => ' - God',
          'skills' => array(
            [
              'Basket Weaving',
              100
            ],
            [
              'Ice Cream Tasting',
              100
            ],
            [
              'Eating Food That is Not Ice Cream',
              0
            ]
          ),
          'fun fact' => 'The average cow produces enough milk over its lifetime to make 7500 gallons of ice cream.',
          'date of birth' => '1999-08-23'
        ],
        // Information for Lincoln Smith
        [
          'first name' => 'Lincoln',
          'last name' => 'Smith',
          'role' => 'ASE 230 Student',
          'year' => 'senior',
          'profile pic' => 'https://bootdey.com/img/Content/avatar/avatar6.png',
          'dream profession' => 'Underwater pizza delivery person',
          'dream company' => 'Jules\' Undersea Lodge',
          'email' => 'presidentsmith44@coolguy.edu',
          'short intro' => 'Hey, my name is Lincoln. I like beer. Also, I like pizza. Also, I like football. Also, I like jazz music. Also, I like hunting. I also like beer, pizza, football, jazz music, and hunting. By the way, my name is Lincoln.',
          'quote' => 'Xue hua piao piao bei feng xiao xiao',
          'author of quote' => '- Eggman',
          'skills' => array(
            [
              'Pizza Delivery',
              80
            ],
            [
              'Saxophone Playing',
              65
            ],
            [
              'Being Groovy',
              45
            ]
          ),
          'fun fact' => 'My first name is Lincoln and my last name is Smith. My favorite movie is Jack and Jill. I have great taste in movies.',
          'date of birth' => '1998-04-07'
        ]
      ];
      require_once('json_util.php');
      convertToJson($student_info ,'class.json');
      copy('class.json', 'backup_class.json');
?>