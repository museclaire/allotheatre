<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJNWLlYD\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJNWLlYD/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerJNWLlYD.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerJNWLlYD\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerJNWLlYD\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'JNWLlYD',
    'container.build_id' => '26435b70',
    'container.build_time' => 1516888526,
));
