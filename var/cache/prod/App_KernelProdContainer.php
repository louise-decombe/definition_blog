<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLPlVYYE\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLPlVYYE/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerLPlVYYE.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerLPlVYYE\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerLPlVYYE\App_KernelProdContainer([
    'container.build_hash' => 'LPlVYYE',
    'container.build_id' => 'bbf59c1d',
    'container.build_time' => 1612962443,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLPlVYYE');