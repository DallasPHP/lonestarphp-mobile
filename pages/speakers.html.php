<div data-role="page" id="speakers">
    <?php print render('templates/header.php', array('title' => 'Speakers', 'back' => '#home')); ?>
    <div data-role="content">
        
        <ul data-role="listview" data-theme="c">
            <?php foreach ($data['speakers'] as $id => $speaker): ?>
                <li>
                    <a href="#speaker-<?php echo $id; ?>">
                        <h3><?php echo $speaker['name']; ?></h3>
                        <?php if ($speaker['company']): ?>
                        <p><strong><?php echo $speaker['company']; ?></strong></p>
                        <?php endif; ?>
                        <?php foreach($speaker['talks'] as $talkId): $talk = $data['talks'][$talkId]; ?>
                        <p><?php echo $talk['title']; ?></p>  
                        <?php endforeach; ?>
                    </a>
                
                </li>
            <?php endforeach; ?>
            </ul>

        
    </div>
</div>


<?php foreach ($data['speakers'] as $id => $speaker): ?>
<?php

?>
<div data-role="page" id="speaker-<?php echo $id; ?>" class="speaker-page">
    <?php print render('templates/header.php', array('title' => $speaker['name'], 'back' => '#speakers')); ?>
    <div data-role="content">

        <div class="details clearfix">
            <div class="clearfix">
            <img src="<?php echo $speaker['image']; ?>?<?php echo $version; ?>" alt="Image of <?php echo $speaker['name']; ?>" />
            <hgroup>
                <h1><?php echo $speaker['name']; ?></h1>
                <h2><?php echo $speaker['company']; ?></h2>
            </hgroup>
            </div>
            <div class="social">
                <?php if ($speaker['twitter']): ?>
                <a href="http://twitter.com/<?php echo $speaker['twitter']; ?>" class="twitter" target="_blank" rel="external">@<?php echo $speaker['twitter']; ?></a>
                <?php endif; ?>
                <?php if ($speaker['website']): ?>
                <a href="<?php echo $speaker['website']; ?>" class="website" target="_blank" rel="external"><?php echo $speaker['website']; ?></a>
                <?php endif; ?>
            </div>
        </div>
        
        
        
        <div class="talks">
            <?php foreach($speaker['talks'] as $talkId): $talk = $data['talks'][$talkId]; ?>
            <h4><?php echo $talk['title']; ?></h4>
            <?php endforeach; ?>
        </div>
        
        <div class="bio">
            <p><?php echo $speaker['description']; ?></p>
        </div>
    </div>
</div>
<?php endforeach; ?>