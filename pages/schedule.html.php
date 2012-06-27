<div data-role="page" id="schedule">
    <?php print render('templates/header.php', array('title' => 'Schedule', 'back' => '#home')); ?>
    <div data-role="content">
        
        <div data-role="collapsible-set" data-theme="b" data-content-theme="c" data-iconpos="right" id="dayset">
        <?php foreach ($data['schedule'] as $day => $schedule): ?>
            <?php
                $date = strtotime($day);
            ?>
            <div class="day" data-role="collapsible" data-collapsed="true" data-date="<?php echo date('nj', $date); ?>">
            <h3><?php echo date('l, F jS', $date); ?></h3>
            
            <ul data-role="listview" data-theme="c">
            <?php foreach ($schedule as $hour => $timeslot): ?>
                <?php
                    $time = strtotime($hour);
                    if ($timeslot['end'])
                        $end = strtotime($timeslot['end']);
                    else
                        $end = false;
                ?>
                <li data-hour="<?php echo (int)date('G', $time)*60 + (int)date('i', $time); ?>">
                <?php if (count($timeslot['talks']) > 0): ?>
                    <a href="#<?php echo $day . '-' . $hour; ?>">
                        <h3><?php echo date('g:i A', $time); ?><?php echo $end ? ' - ' . date('g:i A', $end) : '' ?></h3>
                        <p><strong><?php echo strtoupper($timeslot['type']); ?></strong><?php if ($timeslot['room']): ?> | <?php echo strtoupper($timeslot['room']); ?><?php endif; ?></p>
                    </a>
                <?php else: ?>
                    <h3><?php echo date('g:i A', $time); ?><?php echo $end ? ' - ' . date('g:i A', $end) : '' ?></h3>
                    <p><strong><?php echo strtoupper($timeslot['type']); ?></strong> <?php if ($timeslot['room']): ?> | <?php echo strtoupper($timeslot['room']); ?><?php endif; ?></p>
                <?php endif; ?>
                
                </li>
            <?php endforeach; ?>
            </ul>
            
            </div>
        <?php endforeach; ?>
        </div>

    </div>
</div>
<script>
$('#schedule').on('pageinit', function(){
    var date = new Date()
      , dateDiscr = [date.getMonth()+1,date.getDate()].join('')
      , hourDiscr = (date.getHours()) * 60 + (date.getMinutes() - 15)
      , $match = $('#schedule').find('.day[data-date=' + dateDiscr + ']');
    
    if ($match.length > 0) {
        $match.trigger('expand');
        
        $match.find('[data-hour]').each(function(){
            var $this = $(this);
            if ($this.data('hour') >= hourDiscr) {
                $this.addClass('on-deck');
                return false;
            }
        })
        
    } else {
        $('#schedule .day').first().trigger('expand');
    }
});
</script>


<?php foreach ($data['schedule'] as $day => $schedule): ?>
<?php foreach ($schedule as $hour => $timeslot): ?>
<?php
    if (count($timeslot['talks']) == 0) continue;
    
    $date = strtotime($day);
    $time = strtotime($hour);
    if ($timeslot['end'])
        $end = strtotime($timeslot['end']);
    else
        $end = false;
?>
<div data-role="page" id="<?php echo $day . '-' . $hour; ?>" class="session-page">
    <?php print render('templates/header.php', array('title' => date('l', $date), 'back' => '#schedule')); ?>
    <div data-role="content">

        <div class="time-heading">
            <?php echo date('g:i A', $time); ?><?php echo $end ? ' - ' . date('g:i A', $end) : '' ?>
        </div>
        
        <?php foreach ($timeslot['talks'] as $talkId): $talk = $data['talks'][$talkId]; ?>
        <div class="session clearfix">
            <hgroup>
                <h2><?php echo $talk['title']; ?></h2>
                <h3><?php echo $talk['presenter']; ?></h3>
            </hgroup>
            
            <div data-role="collapsible" data-mini="true" data-content-theme="c">
                <h4>Details <span class="room"><?php echo $talk['room']; ?></span></h4>
                <p><?php echo $talk['description']; ?></p>
                <a href="<?php echo $talk['joindin']; ?>" class="joindin" rel="external" target="_blank" data-role="button" data-icon="star" data-mini="true">Rate on Joind.In</a>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</div>
<?php endforeach; ?>
<?php endforeach; ?>