<?php
global $data;

$data = array(
    'talks' => array(
        '1' => array(
            'title' => '!Normal===Awesome!',
            'presenter' => 'Cal Evans',
            'description' => 'As PHP developers we are about as far from normal as you can get. Traditional developers master their craft, charge when they work and go home on the weekends and putter around in their workshops. Many PHP developers give away what they know, help others freely and spend their weekends coding to talking about coding. The cool thing is, the thing that makes us not normal is the thing that makes us so awesome. Lets celebrate our lack of normality and revel our awesomeness. Fly your freak flag proudly; you are a PHP developer and you build the web!',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6334',
            'date' => '2012-06-29',
            'time' => '0920',
        ),
        '2' => array(
            'title' => 'Building Testable PHP Applications',
            'presenter' => 'Chris Hartjes',
            'description' => 'There is lots of info out there on how to use testing tools but very little info on how to build your application in such a way that it can easily be tested. This talk will cover strategies that can be used to shape your application in such a way that you\'ll be making production pushes multiple times a day with complete confidence.',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6335',
            'date' => '2012-06-29',
            'time' => '1030',
        ),
        '24' => array(
            'title' => 'Coordinating Workflows Across Machine Boundaries',
            'presenter' => 'Ben Lake & Logan Reese',
            'description' => 'There is a lot of talk about scaling, but not nearly as much about what to do when you\'ve scaled. This presentation will delve into techniques for coordinating workloads across physical machine boundaries. The focus will be on how to harness the power of Zookeeper and nifty ways to abstract algorithms used to handle contention for shared resources.',
            'room' => 'Acacia',
            'joindin' => 'https://joind.in/6701',
            'date' => '2012-06-29',
            'time' => '1030',
        ),
        '3' => array(
            'title' => 'PHP 5.4: The New Bits',
            'presenter' => 'Davey Shafik',
            'description' => 'PHP 5.4 is about to be unleashed into the world; bringing some of the most exciting changes to the PHP language to date. This talks covers everything you need to know to get up to speed!',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6336',
            'date' => '2012-06-29',
            'time' => '1130',
        ),
        '4' => array(
            'title' => 'PHP Extensions for Dummies',
            'presenter' => 'Elizabeth Smith',
            'description' => 'Ever had a need for some library in C in your PHP code? Or want to hook into the engine to do evil? Or maybe you just want to make some part of PHP better. And then you say "but I don\'t know enough C". PHP extensions are actually quite easy to write, even for those with only the smallest amount of C knowledge, if you know the secret incantations. Write your own extension in this step by step tutorial which assumes you know nothing of PHP internals, the very basics of C syntax and little more, and have the ability to type "./configure && make && make install && make test"',
            'room' => 'Acacia',
            'joindin' => 'http://joind.in/6337',
            'date' => '2012-06-29',
            'time' => '1130',
        ),
        '5' => array(
            'title' => 'OpenStreetMap and PHP',
            'presenter' => 'Derick Rethans',
            'description' => 'This presentation introduces OpenStreetMap and explains to the audience what sort of rich data set it has and how to use it from PHP (and JavaScript). I will also cover different APIs for using the map tiles as well as other APIs that form sister-projects to OSM, such as Nominatim (search), routing, and obtaining current-location information.  For the data storage and querying aspects we will be looking at MongoDB. During the course of the presentation I will also have to dip into some of the theoretical issues surrounding map making in general.',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6338',
            'date' => '2012-06-29',
            'time' => '1345',
        ),
        '6' => array(
            'title' => 'Pixel Punching with PHP',
            'presenter' => 'Bob Majdak Jr.',
            'description' => 'Pulling your hair out because that one user keeps uploading a 10megapixel raw image as his avatar? Customers want to upload images that have to be stylized so they don\'t make your site look like it walked out of a Geocities neighborhood? Come learn about the ins and outs of server-side image manipulation in PHP. Compare and contrast the two major libraries, Imagick and GD, their performance quirks, and learn how to produce those cool retro photos on the Hipstergrams!',
            'room' => 'Acacia',
            'joindin' => 'http://joind.in/6339',
            'date' => '2012-06-29',
            'time' => '1345',
        ),
        '7' => array(
            'title' => 'A Soft Introduction to Machine Learning',
            'presenter' => 'Joël Perras',
            'description' => 'To many, "Machine learning" seems like a magical black box that somehow tells us what books we\'re interested in buying on Amazon, what movies we\'d like to watch on Netflix, or what coffee shops we\'d like to visit on Foursquare. In this 50 minute session, we\'ll attempt to demystify some of the ML techniques that are employed in building a recommendation engine for a product catalog, discuss some of the capabilities and limitations of recommender systems, storage and querying solutions for millions of rows and millions of columns, all while avoiding the inevitable rise of SkyNet.',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6340',
            'date' => '2012-06-29',
            'time' => '1445',
        ),
        '8' => array(
            'title' => 'ElasticSearch for PHP',
            'presenter' => 'Shaun Farrell',
            'description' => 'Most of the time search is the last thing you think of. Then it is almost release time and it dawns on you that you have no search. The first thing you think of is MySQL full-text search. You mention it to the boss and tell him its the easiest solution to get out the door the quickest. He agrees, you do it, then realize your search SUCKS! Let me introduce you to ElasticSearch! A simple fast, schema free, multi-tenancy, lucene based search engine. Lets explore everything from simple setup, to doing queries and finish off with some advanced document searching. ElasticSearch is so easy and cool. It\'s bonsai cool!',
            'room' => 'Acacia',
            'joindin' => 'http://joind.in/6341',
            'date' => '2012-06-29',
            'time' => '1445',
        ),
        '9' => array(
            'title' => 'Stop Exposing Yourself: Exploits, Attacks and Defenses',
            'presenter' => 'Geoffrey Tran',
            'description' => 'A talk about security issues and exploits in the web with a focus on PHP. We will cover common exploits and how to defense yourself from them.',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6342',
            'date' => '2012-06-29',
            'time' => '1545',
        ),
        '10' => array(
            'title' => 'Migrating to the Cloud - Actually taking flight',
            'presenter' => 'Jeff Winesett',
            'description' => 'While Cloud talks may be "soooo last year", many have not yet had the opportunity to really get started using cloud-based infrastructure. In this tutorial, you\'ll be introduced to many of the offerings within Amazon\'s Web service suite, and actually learn how to take advantage of them. We\'ll get our hands dirty setting up LAMP stack instances, mounting Elastic Block Storage, configuring security groups, associating Elastic IPs, configuring a load balancer, using S3 as file storage and configuring CloudFront CDN with the files in S3 as origin, using RDS for your database tier and then going over the AWS SDK for PHP as a tool to interact with all of these cool services from within your PHP scripts. By the end of this tutorial, you will have gained the needed confidence from hands-on experience to start using cloud based infrastructure on future projects.',
            'room' => 'Acacia',
            'joindin' => 'http://joind.in/6343',
            'date' => '2012-06-29',
            'time' => '1545',
        ),
        '11' => array(
            'title' => 'It Was Like That When I Got Here: Steps Toward Modernizing a Legacy Codebase',
            'presenter' => 'Paul Jones',
            'description' => 'We\'ve all been there, dropped into a codebase that makes perfect sense to the current developers but might as well be Greek to you. Paul will help you make sense of things with some helpful tips for untangling the spaghetti and refactoring like a pro. He\'ll show you how to move it towards a more modern, modular architecture and keep it running the whole time.',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6700',
            'date' => '2012-06-30',
            'time' => '0900',
        ),
        '12' => array(
            'title' => 'SOLID - Not Just a State of Matter, It\'s Principles for OO Propriety',
            'presenter' => 'Chris Weldon',
            'description' => 'Principles abound our lives. Software and engineering is no exception. The more you develop software, the more patterns and principles you master. Yet, solutions remain difficult to maintain and developers are frequently frustrated by impediments they introduce and the waste generated to get around them. But why do we run into these roadblocks? It could be that you\'re not using the principles of object-oriented development to build better solutions. The SOLID principles are an important foundation for how to leverage OO languages to produce high value, low overhead, maintainable solutions. Whether you\'ve just starting to sling code or have been a veteran in the industry, the principles taught in this presentation are invaluable.',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6345',
            'date' => '2012-06-30',
            'time' => '1000',
        ),
        '13' => array(
            'title' => 'Padawan and Master - Mentoring Developers',
            'presenter' => 'Elizabeth Smith',
            'description' => 'One of the best ways to move yourself forward as a developer is to have mentors who can forward your skills, or to be a mentor for a newer developer. Mentoring isn\'t limited to just "hard" or technical skills, and a mentoring relationship can help in all aspects of any career - be it open source, a day job, or something else entirely. Learn some skills and tips from people who make mentoring an important aspect of their lives. From how to choose a mentor and what you should expect from a relationship as a padawan, to how to deal with the trials and successes of the person you are mentoring as they grow in their career.',
            'room' => 'Acacia',
            'joindin' => 'http://joind.in/6346',
            'date' => '2012-06-30',
            'time' => '1000',
        ),
        '14' => array(
            'title' => 'RESTful APIs and Self-Building Applications',
            'presenter' => 'Vance Lucas',
            'description' => 'What if your application had all of the information it needed from your REST API to build itself? We will take a look at some common REST API outputs and see what needs to be added to them to make them more RESTful, and then we will consume our new API in a live custom application to demonstrate how we might automate building parts of the UI from the API response alone.',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6347',
            'date' => '2012-06-30',
            'time' => '1100',
        ),
        '15' => array(
            'title' => 'Improve your tool chain for stress-free deployments',
            'presenter' => 'Omni Adams',
            'description' => 'When you deploy your software, do you find yourself doing it at odd hours in case something breaks? Do you have your whole team on hand to make sure everything went according to plan? If something bad happens, can you reverse the process before you get fired? Improving your tool chain can help make it easier to deploy your code, which can help keep your sanity... and your job. Easier deployments lead to more deployments which leads to a quicker time to market with less chance of bringing the site to its knees.',
            'room' => 'Acacia',
            'joindin' => 'http://joind.in/6348',
            'date' => '2012-06-30',
            'time' => '1100',
        ),
        '16' => array(
            'title' => 'Fast, Not Furious: Performance Tuning that Works',
            'presenter' => 'Davey Shafik',
            'description' => 'There\'s a saying "hardware is cheaper than developers", but this only holds true if you treat your hardware with the respect it deserves. Learn how to diagnose, confirm and fix bottlenecks in your application using new tools like XHProf and tried and true tools like xdebug. Also, we\'ll take an in-depth look at apc (advanced PHP cache) and memcache; even if you know and use memcache, this one can probably teach you a thing or two.',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6349',
            'date' => '2012-06-30',
            'time' => '1330',
        ),
        '17' => array(
            'title' => 'Devouring APIs with PHP and beanstalkd',
            'presenter' => 'John Syrinek',
            'description' => 'Aggregating data from third-party APIs is fairly basic ... until you have users. Today\'s users expect near-realtime data and lots of it. Anyone can consume API endpoints, but this 50 minute session will teach you how to take your web application to the next level with a simple approach to asynchronous web crawling that is fast, reliable, easy to debug, and scalable.',
            'room' => 'Acacia',
            'joindin' => 'http://joind.in/6350',
            'date' => '2012-06-30',
            'time' => '1330',
        ),
        '18' => array(
            'title' => 'Micro Framework and JavaScript Applications',
            'presenter' => 'Jeff Carouth',
            'description' => 'Small footprint libraries and so-called micro frameworks are a newer development in the PHP community. In this session we\'ll look at the MicroPHP Manifesto and go over building an application focused on the ideas presented by it. We\'ll look at a couple micro frameworks and other tools including Slim and Breeze as well as concerns with implementing your frontend with Backbone.js and other techniques. We\'ll also cover simple ways to organize your application and manage dependencies using Composer.',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6351',
            'date' => '2012-06-30',
            'time' => '1430',
        ),
        '19' => array(
            'title' => 'Intro to Lithium',
            'presenter' => 'Garrett Woodworth',
            'description' => 'Every framework claims to help you build the next killer app in less time and with less effort , but do they really help you do it your way? In this tactical tour-de-force, you\'ll learn how Lithium pulls together different tools, technologies, and paradigms to assist even the most complex and diabolical plans. By the end of the session, you\'ll know each step in the process required to get from zero to Instragram using Lithium.',
            'room' => 'Acacia',
            'joindin' => 'http://joind.in/6352',
            'date' => '2012-06-30',
            'time' => '1430',
        ),
        '20' => array(
            'title' => 'MongoDB and PHP',
            'presenter' => 'Derick Rethans',
            'description' => 'MongoDB is a scalable, high-performance, open source, document-oriented NoSQL database. It features document-oriented, JSON-based document storage and dynamic schemas providing simplicity, power and flexibility, combined with full indexes similar to what a traditional RDBMS user would expect. MongoDB also provides solid replication & high availability features as well as an auto-sharding system for transparent horizontal scalability. This talk introduces MongoDB for developers who aren\'t familiar with it with a detailed introduction of how to work with MongoDB from PHP. This talk will cover the basics from installing the PHP driver and connecting to mongod to creating, inserting, querying for, and updating documents. We will also briefly touch on aggregation, geospatial indexes, GridFS and running database commands.',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6353',
            'date' => '2012-06-30',
            'time' => '1530',
        ),
        '21' => array(
            'title' => 'Service-Oriented Architectures with ZeroMQ',
            'presenter' => 'Joël Perras',
            'description' => 'ZeroMQ has been getting quite a lot of attention, and with good reason. Branded as a "socket library that acts as a concurrency framework" that\'s faster than TCP and lets you build out your own topologies, it\'s been used to write broker-less message queues, webservers, chat servers, and hundreds of other applications that demand highly concurrent and asynchronous transport layers. But how can ZeroMQ help normal, every-day web developers create more robust and decoupled applications? We\'ll take a whirlwind tour through ZeroMQ, what it\'s capable of, and then create a simple, scalable and effective service-oriented architecture that will leave you wondering where ZeroMQ has been all your life.',
            'room' => 'Acacia',
            'joindin' => 'http://joind.in/6354',
            'date' => '2012-06-30',
            'time' => '1530',
        ),
        '22' => array(
            'title' => 'User Interface is more than Pixels',
            'presenter' => 'Keith Casey',
            'description' => 'Despite web applications becoming more and more ingrained in our day to day work and lives, most of the time we still interact with flat text on a screen. If we\'re really lucky, there are color visual cues mixed in. What if we could use our applications as easily as we use a phone? In this session, we\'ll explore integrating voice and text communications into our applications as a way of promoting Web Accessibility, interface flexibility, and getting away from our keyboards.',
            'room' => 'Sycamore',
            'joindin' => 'http://joind.in/6355',
            'date' => '2012-06-30',
            'time' => '1630',
        ),
        '23' => array(
            'title' => 'Infrastructure Debt',
            'presenter' => 'Chris Hartjes',
            'description' => 'You might have come across the term “technical debt”, used to describe the small mistakes that are made in your code base as the application grows and requirements change. You end up with a big tangled mess if you are not very careful about how you make those changes. If you’ve ever worked on an application where you were afraid to make changes for fear of breaking something, then you have run into technical debt. Technical debt can be dealt with via ruthless refactoring and wrapping your application in tests that poke and prod at the edge cases that your application deals with. But there is another type of debt you end up dealing with. One that is even more difficult to deal with and change. I call it infrastructure debt. Infrastructure debt is debt that you build up because you have not been paying attention to the process of creating the environments your application will exist in and have not been paying attention to the process of how your code gets from development into production. In my opinion, infrastructure debt is much more difficult to “pay off” than technical debt. Why? It is often very difficult for people to understand that it even exists. This talk will cover strategies for dealing with the scourge that is infrastructure debt.',
            'room' => 'Acacia',
            'joindin' => 'http://joind.in/6356',
            'date' => '2012-06-30',
            'time' => '1630',
        ),
    ),
    'schedule' => array(
        '2012-06-29' => array(
            '0800' => array(
                'end' => false,
                'type' => 'Registration',
                'talks' => array(),
                'room' => 'Sycamore',
            ),
            '0900' => array(
                'end' => false,
                'type' => 'Welcome',
                'talks' => array(),
                'room' => 'Sycamore',
            ),
            '0920' => array(
                'end' => '1010',
                'type' => 'Keynote',
                'talks' => array(1),
                'room' => 'Sycamore',
            ),
            '1030' => array(
                'end' => '1120',
                'type' => 'Session',
                'talks' => array(2,24),
                'room' => null,
            ),
            '1130' => array(
                'end' => '1220',
                'type' => 'Session',
                'talks' => array(3,4),
                'room' => null,
            ),
            '1220' => array(
                'end' => '1330',
                'type' => 'Lunch',
                'talks' => array(),
                'room' => 'Sycamore',
            ),
            '1345' => array(
                'end' => '1435',
                'type' => 'Session',
                'talks' => array(5,6),
                'room' => null,
            ),
            '1445' => array(
                'end' => '1535',
                'type' => 'Session',
                'talks' => array(7,8),
                'room' => null,
            ),
            '1545' => array(
                'end' => '1635',
                'type' => 'Session',
                'talks' => array(9,10),
                'room' => null,
            ),
            '1730' => array(
                'end' => '2030',
                'type' => 'After Party',
                'talks' => array(),
                'room' => 'Sycamore',
            ),
        ),
        '2012-06-30' => array(
            '0900' => array(
                'end' => '0950',
                'type' => 'Keynote',
                'talks' => array(11),
                'room' => 'Sycamore',
            ),
            '1000' => array(
                'end' => '1050',
                'type' => 'Session',
                'talks' => array(12,13),
                'room' => null,
            ),
            '1100' => array(
                'end' => '1150',
                'type' => 'Session',
                'talks' => array(14,15),
                'room' => null,
            ),
            '1200' => array(
                'end' => '1320',
                'type' => 'Lunch',
                'talks' => array(),
                'room' => 'Sycamore',
            ),
            '1330' => array(
                'end' => '1420',
                'type' => 'Session',
                'talks' => array(16,17),
                'room' => null,
            ),
            '1430' => array(
                'end' => '1520',
                'type' => 'Session',
                'talks' => array(18,19),
                'room' => null,
            ),
            '1530' => array(
                'end' => '1620',
                'type' => 'Session',
                'talks' => array(20,21),
                'room' => null,
            ),
            '1630' => array(
                'end' => '1720',
                'type' => 'Session',
                'talks' => array(22,23),
                'room' => null,
            ),
            '1730' => array(
                'end' => '1745',
                'type' => 'Closing Remarks',
                'talks' => array(),
                'room' => 'Sycamore',
            ),
            '1800' => array(
                'end' => '2100',
                'type' => 'After Party',
                'talks' => array(),
                'room' => 'Sycamore',
            ),
        ),
    ),
);