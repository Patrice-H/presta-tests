<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOgTZUMP\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOgTZUMP/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerOgTZUMP.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerOgTZUMP\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerOgTZUMP\appAppKernelProdContainer([
    'container.build_hash' => 'OgTZUMP',
    'container.build_id' => '4d642983',
    'container.build_time' => 1709060085,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOgTZUMP');
