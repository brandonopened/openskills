<?php

namespace Proxies\__CG__\App\Entity\Framework\Mirror;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OAuthCredential extends \App\Entity\Framework\Mirror\OAuthCredential implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\OAuthCredential' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\OAuthCredential' . "\0" . 'authenticationEndpoint', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\OAuthCredential' . "\0" . 'key', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\OAuthCredential' . "\0" . 'secret', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\OAuthCredential' . "\0" . 'scopes', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\OAuthCredential' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\OAuthCredential' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\OAuthCredential' . "\0" . 'authenticationEndpoint', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\OAuthCredential' . "\0" . 'key', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\OAuthCredential' . "\0" . 'secret', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\OAuthCredential' . "\0" . 'scopes', '' . "\0" . 'App\\Entity\\Framework\\Mirror\\OAuthCredential' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OAuthCredential $proxy) {
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
    public function getAuthenticationEndpoint(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthenticationEndpoint', []);

        return parent::getAuthenticationEndpoint();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthenticationEndpoint(string $authenticationEndpoint): \App\Entity\Framework\Mirror\OAuthCredential
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthenticationEndpoint', [$authenticationEndpoint]);

        return parent::setAuthenticationEndpoint($authenticationEndpoint);
    }

    /**
     * {@inheritDoc}
     */
    public function getKey(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKey', []);

        return parent::getKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setKey(string $key): \App\Entity\Framework\Mirror\OAuthCredential
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKey', [$key]);

        return parent::setKey($key);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecret(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecret', []);

        return parent::getSecret();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecret(string $secret): \App\Entity\Framework\Mirror\OAuthCredential
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecret', [$secret]);

        return parent::setSecret($secret);
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
    public function getScopes(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScopes', []);

        return parent::getScopes();
    }

}