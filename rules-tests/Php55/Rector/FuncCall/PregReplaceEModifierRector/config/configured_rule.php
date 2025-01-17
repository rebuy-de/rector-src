<?php

declare(strict_types=1);

use Rector\Php55\Rector\FuncCall\PregReplaceEModifierRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(PregReplaceEModifierRector::class);
};
