<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Acme\HelloBundle\AcmeHelloBundle(),
            /*
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(), // "twig/extensions": "1.0.*",
            new Symfony\Bundle\MonologBundle\MonologBundle(), // "symfony/monolog-bundle": "2.2.*",
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(), // "symfony/swiftmailer-bundle": "2.2.*",
            new Symfony\Bundle\AsseticBundle\AsseticBundle(), // "symfony/assetic-bundle": "2.1.*",
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(), // "doctrine/orm": "~2.2,>=2.2.3", "doctrine/doctrine-bundle": "1.2.*",
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(), // "sensio/framework-extra-bundle": "2.2.*",
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this), // "jms/di-extra-bundle": "1.3.*",
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(), // "jms/security-extra-bundle": "1.4.*",
            */
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            //$bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
