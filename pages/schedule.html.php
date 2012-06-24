<div data-role="page" data-add-back-btn="true" id="schedule">
    <?php print $header; ?>
    <div data-role="content">
        
        <div data-role="collapsible-set" data-theme="b" data-content-theme="c" data-iconpos="right">
        <?php foreach ($data['schedule'] as $day => $schedule): ?>
            <?php
                $date = strtotime($day);
            ?>
            <div data-role="collapsible" data-collapsed="true" data-date="<?php echo $date; ?>">
            <h3><?php echo date('l, F jS', $date); ?></h3>
            
            <ul data-role="listview" data-theme="c">
            <?php foreach ($schedule as $hour => $timeslot): ?>
                <?php
                    $time = strtotime($hour);
                ?>
                <li>
                    <a href="#<?php echo $day . '-' . $hour; ?>">
                    <?php echo date('g:iA', $time); ?> - <?php echo strtoupper($timeslot['type']); ?>
                    </a>    
                </li>
            <?php endforeach; ?>
            </ul>
            
            </div>
        <?php endforeach; ?>
        </div>

    </div>
</div>

<?php foreach ($data['schedule'] as $day => $schedule): ?>
<?php foreach ($schedule as $hour => $timeslot): ?>
<?php
    $date = strtotime($day);
    $time = strtotime($hour);
?>
<div data-role="page" data-add-back-btn="true" id="<?php echo $day . '-' . $hour; ?>">
    <?php print $header; ?>
    <div data-role="content">

        <h1><?php echo strtoupper($timeslot['type']); ?></h1>

    </div>
</div>
<?php endforeach; ?>
<?php endforeach; ?>