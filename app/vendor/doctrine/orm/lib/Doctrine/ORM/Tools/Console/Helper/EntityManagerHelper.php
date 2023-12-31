<?php

declare(strict_types=1);

namespace Doctrine\ORM\Tools\Console\Helper;

use Doctrine\Deprecations\Deprecation;
use Doctrine\ORM\EntityManagerInterface;
use ReflectionMethod;
use Symfony\Component\Console\Helper\Helper;
use Symfony\Component\Console\Helper\HelperInterface;

if ((new ReflectionMethod(HelperInterface::class, 'getName'))->hasReturnType()) {
    /** @internal */
    trait EntityManagerHelperCompatibility
    {
        public function getName(): string
        {
            return 'entityManager';
        }
    }
} else {
    /** @internal */
    trait EntityManagerHelperCompatibility
    {
        /**
         * {@inheritDoc}
         *
         * @return string
         */
        public function getName()
        {
            return 'entityManager';
        }
    }
}

/**
 * Doctrine CLI Connection Helper.
 *
 * @deprecated This class will be removed in ORM 3.0 without replacement.
 */
class EntityManagerHelper extends Helper
{
    use EntityManagerHelperCompatibility;

    /**
     * Doctrine ORM EntityManagerInterface.
     *
     * @var EntityManagerInterface
     */
    protected $_em;

    public function __construct(EntityManagerInterface $em)
    {
        Deprecation::triggerIfCalledFromOutside(
            'doctrine/orm',
            'https://github.com/doctrine/orm/pull/9641',
            'The %s class is deprecated and will be removed in ORM 3.0',
            self::class
        );

        $this->_em = $em;
    }

    /**
     * Retrieves Doctrine ORM EntityManager.
     *
     * @return EntityManagerInterface
     */
    public function getEntityManager()
    {
        return $this->_em;
    }
}
