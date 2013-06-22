<?php
include 'data.php';

error_reporting(E_ALL ^ E_NOTICE);

$f = fopen("php://stdout","w");

fputcsv($f, ['title', 'description', 'speaker', 'date', 'time', 'duration', 'type', 'track']);

foreach ($data['talks'] as $talk) {
    list($date, $track) = explode(':', $talk['date']);
    
    if ($track) $track = "Foundations";
    
    $export = [
        $talk['title'],
        $talk['description'],
        $talk['presenter'],
        $date,
        \DateTime::createFromFormat('Gi', $talk['time'])->format('H:i'),
        $track ? 90 : 45,
        'Talk',
        $track
    ];
    
    fputcsv($f, $export);
}

fclose($f);