<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKAxT1og\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKAxT1og/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerKAxT1og.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerKAxT1og\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerKAxT1og\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'KAxT1og',
    'container.build_id' => '8fdf64bd',
    'container.build_time' => 1516876654,
));
