<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQZozus4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQZozus4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQZozus4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQZozus4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQZozus4\App_KernelDevDebugContainer([
    'container.build_hash' => 'QZozus4',
    'container.build_id' => '341ac179',
    'container.build_time' => 1641570699,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQZozus4');
