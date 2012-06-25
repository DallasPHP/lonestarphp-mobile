<div data-role="header" data-theme="d">
    <?php if (isset($back)): ?>
        <a href="<?php echo $back; ?>" data-direction="reverse" data-icon="arrow-l" data-mini="true">Back</a>
    <?php endif; ?>
    <h1><?php echo isset($title) ? $title : 'Lone Star PHP'; ?></h1>
    <span class="hash">#lsp12</span>
</div>