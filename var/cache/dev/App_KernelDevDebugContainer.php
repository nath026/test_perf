<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZEz5kIq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZEz5kIq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZEz5kIq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZEz5kIq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZEz5kIq\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZEz5kIq',
    'container.build_id' => 'd229b507',
    'container.build_time' => 1621073921,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZEz5kIq');
