<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXEgenbr\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXEgenbr/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXEgenbr.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXEgenbr\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerXEgenbr\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'XEgenbr',
    'container.build_id' => 'ed9359ea',
    'container.build_time' => 1516871565,
));
