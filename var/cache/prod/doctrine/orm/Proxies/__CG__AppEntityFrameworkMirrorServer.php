<?php

namespace Proxies\__CG__\App\Entity\Framework\Mirror;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Server extends \App\Entity\Framework\Mirror\Server implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'url', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'serverType', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'checkServer', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'addFoundFrameworks', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'credentials', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'priority', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'nextCheck', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'lastCheck', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'frameworks'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'url', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'serverType', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'checkServer', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'addFoundFrameworks', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'credentials', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'priority', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'nextCheck', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'lastCheck', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\Server' . "\0" . 'frameworks'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Server $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', []);

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl(string $url): \App\Entity\Framework\Mirror\Server
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', [$url]);

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getServerType(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServerType', []);

        return parent::getServerType();
    }

    /**
     * {@inheritDoc}
     */
    public function setServerType(string $serverType): \App\Entity\Framework\Mirror\Server
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServerType', [$serverType]);

        return parent::setServerType($serverType);
    }

    /**
     * {@inheritDoc}
     */
    public function isAddFoundFrameworks(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAddFoundFrameworks', []);

        return parent::isAddFoundFrameworks();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddFoundFrameworks(bool $addFoundFrameworks): \App\Entity\Framework\Mirror\Server
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddFoundFrameworks', [$addFoundFrameworks]);

        return parent::setAddFoundFrameworks($addFoundFrameworks);
    }

    /**
     * {@inheritDoc}
     */
    public function getCredentials(): ?\App\Entity\Framework\Mirror\OAuthCredential
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCredentials', []);

        return parent::getCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentials(?\App\Entity\Framework\Mirror\OAuthCredential $credentials): \App\Entity\Framework\Mirror\Server
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentials', [$credentials]);

        return parent::setCredentials($credentials);
    }

    /**
     * {@inheritDoc}
     */
    public function getNextCheck(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNextCheck', []);

        return parent::getNextCheck();
    }

    /**
     * {@inheritDoc}
     */
    public function setNextCheck(?\DateTimeInterface $nextCheck): \App\Entity\Framework\Mirror\Server
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNextCheck', [$nextCheck]);

        return parent::setNextCheck($nextCheck);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): \DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt): \App\Entity\Framework\Mirror\Server
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getFrameworks(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrameworks', []);

        return parent::getFrameworks();
    }

    /**
     * {@inheritDoc}
     */
    public function isCheckServer(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCheckServer', []);

        return parent::isCheckServer();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckServer(bool $checkServer): \App\Entity\Framework\Mirror\Server
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckServer', [$checkServer]);

        return parent::setCheckServer($checkServer);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriority(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriority', []);

        return parent::getPriority();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriority(int $priority): \App\Entity\Framework\Mirror\Server
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriority', [$priority]);

        return parent::setPriority($priority);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastCheck(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastCheck', []);

        return parent::getLastCheck();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastCheck(\DateTimeInterface $lastCheck): \App\Entity\Framework\Mirror\Server
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastCheck', [$lastCheck]);

        return parent::setLastCheck($lastCheck);
    }

    /**
     * {@inheritDoc}
     */
    public function scheduleNextCheck(\DateTimeInterface $when = NULL, int $in = 604800, int $variance = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'scheduleNextCheck', [$when, $in, $variance]);

        parent::scheduleNextCheck($when, $in, $variance);
    }

}
