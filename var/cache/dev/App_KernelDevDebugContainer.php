<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4AD8nYJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4AD8nYJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4AD8nYJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4AD8nYJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4AD8nYJ\App_KernelDevDebugContainer([
    'container.build_hash' => '4AD8nYJ',
    'container.build_id' => 'ad45dafd',
    'container.build_time' => 1650289443,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4AD8nYJ');
