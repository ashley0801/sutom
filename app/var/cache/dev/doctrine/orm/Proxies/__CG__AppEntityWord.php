<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Word extends \App\Entity\Word implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'date' => [parent::class, 'date', null],
        "\0".parent::class."\0".'gameStates' => [parent::class, 'gameStates', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'likes' => [parent::class, 'likes', null],
        "\0".parent::class."\0".'word' => [parent::class, 'word', null],
        'date' => [parent::class, 'date', null],
        'gameStates' => [parent::class, 'gameStates', null],
        'id' => [parent::class, 'id', null],
        'likes' => [parent::class, 'likes', null],
        'word' => [parent::class, 'word', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}