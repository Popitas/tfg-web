<div class="navbar-main">
    <a href="/" class="navbar-main-title">
        / Eventia /
    </a>

    <span class="navbar-main-links">
        <a href="<?php echo e(route('music')); ?>"
            class="<?php echo e((Request::is('music') ? 'active transition' : 'transition')); ?>">
            Música
        </a>
        <a href="<?php echo e(route('sports')); ?>"
            class="<?php echo e((Request::is('sports') ? 'active transition' : 'transition')); ?>">
            Deportes
        </a>
        <a href="<?php echo e(route('theatre')); ?>"
            class="<?php echo e((Request::is('theatre') ? 'active transition' : 'transition')); ?>">
            Teatro y danza
        </a>
        <a href="<?php echo e(route('comedy')); ?>"
            class="<?php echo e((Request::is('comedy') ? 'active transition' : 'transition')); ?>">
            Comedia y magia
        </a>
    </span>
</div>
