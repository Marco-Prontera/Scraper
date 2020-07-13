<?php

namespace ContainerEbPuWBg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdsScraperCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.App\Command\AdsScraperCommand' shared autowired service.
     *
     * @return \App\Command\AdsScraperCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/AdsScraperCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Service/AdsScraper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client-contracts/HttpClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client/HttpClient.php';

        $a = \Symfony\Component\HttpClient\HttpClient::create([], 6);
        $a->setLogger(($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $container->services['console.command.public_alias.App\\Command\\AdsScraperCommand'] = new \App\Command\AdsScraperCommand(NULL, new \App\Service\AdsScraper($a));
    }
}
