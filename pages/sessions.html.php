<div data-role="page" id="sessions">
    <?php print render('templates/header.php', array('title' => 'Session List', 'back' => '#home')); ?>
    <div data-role="content">

        <div data-role="collapsible-set" data-theme="c" data-content-theme="a" data-iconpos="right">
        <?php $talks = $data['talks']; uasort($talks, function($a, $b) { if ($a['title'] == $b['title']) return 0; return ($a['title'] < $b['title']) ? -1 : 1; }); ?>
        <?php foreach ($talks as $id => $talk): ?>
            <?php
                $timeslot = $data['schedule'][$talk['date']][$talk['time']];
                $date = strtotime($talk['date']);
                $time = strtotime($talk['time']);
                if ($timeslot['end'])
                    $end = strtotime($timeslot['end']);
                else
                    $end = false;
            ?>
            <div data-role="collapsible" data-collapsed="true">
                <h3><?php echo $talk['title'] ?></h3>
                
                <hgroup>
                    <h2><?php echo $talk['title']; ?></h2>
                    <h3><?php echo $talk['presenter']; ?></h3>
                </hgroup>
                <div class="schedule clearfix">
                    <span class="room"><?php echo strtoupper($talk['room']); ?></span>
                    <span class="date"><?php echo date('l, F jS', $date); ?></span><br />
                    <span class="time"><?php echo date('g:i A', $time); ?><?php echo $end ? ' - ' . date('g:i A', $end) : '' ?></span>
                    
                </div>
                
                <p><?php echo $talk['description']; ?></p>
                <a href="<?php echo $talk['joindin']; ?>" class="joindin" rel="external" target="_blank" data-role="button" data-icon="star" data-mini="true">Rate on Joind.In</a>
                
            </div>
        <?php endforeach; ?>
        </div>

    </div>
</div>


<script>
(function(){
    $('#sessions').on('click', '.ui-collapsible-heading:not(.ui-collapsible-heading-collapsed) a.ui-collapsible-heading-toggle', function(e){
        var $this = $(this);
        
        setTimeout(function(){
            $('html,body').animate({scrollTop: $this.offset().top});
        }, 20);
    });
})();
</script>