<?php
global $data;

$data = array(
    'speakers' => array(
        '1' => array(
            'name' => 'Omni Adams',
            'image' => 'images/speakers/omni.adams.jpg',
            'company' => null,
            'twitter' => 'omnicolor',
            'website' => 'http://omni-spot.blogspot.com/',
            'description' => 'Omni Adams has been a professional web developer for over a decade, primarily using PHP and MySQL. When not playing hockey or brewing beer, he barks at coworkers about their lack of unit tests and automates all of the boring things in his job.',
            'talks' => array(1),
        ),
    ),
    'talks' => array(
        '1' => array(
            'title' => 'Phing All The Things',
            'presenter' => 'Omni Adams',
            'description' => 'Phing is a build system that lets you do all sorts of neat things quickly and easily. If you find yourself manually running complicated processes or frequently having to look up command line parameters for your tools, Phing can help make you more efficient. If your deployments have many error-prone steps or you find yourself dealing with fragile procedures, Phing can help keep your sanity.',
            'room' => 'Acacia',
            'joindin' => '',
            'date' => '2013-06-28',
            'time' => '1430',
        ),
    ),
    'schedule' => array(
        '2013-06-28' => array(
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
            '0930' => array(
                'end' => '1020',
                'type' => 'Session',
                'talks' => array(),
                'room' => null,
            ),
            '1030' => array(
                'end' => '1120',
                'type' => 'Session',
                'talks' => array(),
                'room' => null,
            ),
            '1130' => array(
                'end' => '1220',
                'type' => 'Session',
                'talks' => array(),
                'room' => null,
            ),
            '1220' => array(
                'end' => '1330',
                'type' => 'Lunch',
                'talks' => array(),
                'room' => 'Sycamore',
            ),
            '1330' => array(
                'end' => '1420',
                'type' => 'Session',
                'talks' => array(),
                'room' => null,
            ),
            '1430' => array(
                'end' => '1520',
                'type' => 'Session',
                'talks' => array(1),
                'room' => null,
            ),
            '1530' => array(
                'end' => '1620',
                'type' => 'Session',
                'talks' => array(),
                'room' => null,
            ),
            '1630' => array(
                'end' => '1720',
                'type' => 'Session',
                'talks' => array(),
                'room' => null,
            ),
            '1730' => array(
                'end' => '2000',
                'type' => 'After Party',
                'talks' => array(),
                'room' => 'Sycamore',
            ),
        ),
        '2013-06-29' => array(
            '0900' => array(
                'end' => '0950',
                'type' => 'Session',
                'talks' => array(),
                'room' => null,
            ),
            '1000' => array(
                'end' => '1050',
                'type' => 'Session',
                'talks' => array(),
                'room' => null,
            ),
            '1100' => array(
                'end' => '1150',
                'type' => 'Session',
                'talks' => array(),
                'room' => null,
            ),
            '1220' => array(
                'end' => '1330',
                'type' => 'Lunch',
                'talks' => array(),
                'room' => 'Sycamore',
            ),
            '1330' => array(
                'end' => '1420',
                'type' => 'Session',
                'talks' => array(),
                'room' => null,
            ),
            '1430' => array(
                'end' => '1520',
                'type' => 'Session',
                'talks' => array(),
                'room' => null,
            ),
            '1530' => array(
                'end' => '1620',
                'type' => 'Session',
                'talks' => array(),
                'room' => null,
            ),
            '1630' => array(
                'end' => '1720',
                'type' => 'Session',
                'talks' => array(),
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