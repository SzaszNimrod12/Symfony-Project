<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3Ijyqi0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3Ijyqi0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3Ijyqi0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3Ijyqi0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container3Ijyqi0\App_KernelDevDebugContainer([
    'container.build_hash' => '3Ijyqi0',
    'container.build_id' => '9e464820',
    'container.build_time' => 1697130764,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3Ijyqi0');