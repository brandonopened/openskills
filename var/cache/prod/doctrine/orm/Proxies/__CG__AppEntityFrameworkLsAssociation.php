<?php

namespace Proxies\__CG__\App\Entity\Framework;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class LsAssociation extends \App\Entity\Framework\LsAssociation implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'lsDocIdentifier', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'lsDocUri', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'lsDoc', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'group', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'originNodeIdentifier', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'originNodeUri', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'originLsDoc', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'originLsItem', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'destinationNodeIdentifier', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'destinationNodeUri', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'destinationLsDoc', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'destinationLsItem', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'sequenceNumber', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'subtype', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'annotation', 'id', 'identifier', 'uri', 'extra', 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'lsDocIdentifier', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'lsDocUri', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'lsDoc', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'group', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'originNodeIdentifier', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'originNodeUri', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'originLsDoc', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'originLsItem', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'destinationNodeIdentifier', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'destinationNodeUri', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'destinationLsDoc', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'destinationLsItem', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'sequenceNumber', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'subtype', '' . "\0" . 'App\\Entity\\Framework\\LsAssociation' . "\0" . 'annotation', 'id', 'identifier', 'uri', 'extra', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (LsAssociation $proxy) {
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
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
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
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrigin($origin, string $identifier = NULL): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrigin', [$origin, $identifier]);

        return parent::setOrigin($origin, $identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrigin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrigin', []);

        return parent::getOrigin();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginNodeUri(string $originNodeUri): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginNodeUri', [$originNodeUri]);

        return parent::setOriginNodeUri($originNodeUri);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginNodeUri(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginNodeUri', []);

        return parent::getOriginNodeUri();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestination($destination, string $identifier = NULL): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestination', [$destination, $identifier]);

        return parent::setDestination($destination, $identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestination()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestination', []);

        return parent::getDestination();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestinationNodeUri(string $destinationNodeUri): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestinationNodeUri', [$destinationNodeUri]);

        return parent::setDestinationNodeUri($destinationNodeUri);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestinationNodeUri(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestinationNodeUri', []);

        return parent::getDestinationNodeUri();
    }

    /**
     * {@inheritDoc}
     */
    public function getHumanCodingSchemeFromDestinationNodeUri(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHumanCodingSchemeFromDestinationNodeUri', []);

        return parent::getHumanCodingSchemeFromDestinationNodeUri();
    }

    /**
     * {@inheritDoc}
     */
    public function splitDestinationDataUri(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'splitDestinationDataUri', []);

        return parent::splitDestinationDataUri();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(?string $type): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function getNormalizedType(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNormalizedType', []);

        return parent::getNormalizedType();
    }

    /**
     * {@inheritDoc}
     */
    public function coerceType(?string $type): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'coerceType', [$type]);

        return parent::coerceType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginLsDoc(\App\Entity\Framework\LsDoc $originLsDoc = NULL): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginLsDoc', [$originLsDoc]);

        return parent::setOriginLsDoc($originLsDoc);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginLsDoc(): ?\App\Entity\Framework\LsDoc
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginLsDoc', []);

        return parent::getOriginLsDoc();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginLsItem(\App\Entity\Framework\LsItem $originLsItem = NULL): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginLsItem', [$originLsItem]);

        return parent::setOriginLsItem($originLsItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginLsItem(): ?\App\Entity\Framework\LsItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginLsItem', []);

        return parent::getOriginLsItem();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestinationLsDoc(\App\Entity\Framework\LsDoc $destinationLsDoc = NULL): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestinationLsDoc', [$destinationLsDoc]);

        return parent::setDestinationLsDoc($destinationLsDoc);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestinationLsDoc(): ?\App\Entity\Framework\LsDoc
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestinationLsDoc', []);

        return parent::getDestinationLsDoc();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestinationLsItem(\App\Entity\Framework\LsItem $destinationLsItem = NULL): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestinationLsItem', [$destinationLsItem]);

        return parent::setDestinationLsItem($destinationLsItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestinationLsItem(): ?\App\Entity\Framework\LsItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestinationLsItem', []);

        return parent::getDestinationLsItem();
    }

    /**
     * {@inheritDoc}
     */
    public function setLsDocUri(?string $lsDocUri): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLsDocUri', [$lsDocUri]);

        return parent::setLsDocUri($lsDocUri);
    }

    /**
     * {@inheritDoc}
     */
    public function getLsDocUri(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLsDocUri', []);

        return parent::getLsDocUri();
    }

    /**
     * {@inheritDoc}
     */
    public function setLsDoc(\App\Entity\Framework\LsDoc $lsDoc): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLsDoc', [$lsDoc]);

        return parent::setLsDoc($lsDoc);
    }

    /**
     * {@inheritDoc}
     */
    public function getLsDoc(): ?\App\Entity\Framework\LsDoc
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLsDoc', []);

        return parent::getLsDoc();
    }

    /**
     * {@inheritDoc}
     */
    public function getLsDocIdentifier(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLsDocIdentifier', []);

        return parent::getLsDocIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setLsDocIdentifier(?string $lsDocIdentifier): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLsDocIdentifier', [$lsDocIdentifier]);

        return parent::setLsDocIdentifier($lsDocIdentifier);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginNodeIdentifier(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginNodeIdentifier', []);

        return parent::getOriginNodeIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginNodeIdentifier(?string $originNodeIdentifier): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginNodeIdentifier', [$originNodeIdentifier]);

        return parent::setOriginNodeIdentifier($originNodeIdentifier);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestinationNodeIdentifier(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestinationNodeIdentifier', []);

        return parent::getDestinationNodeIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestinationNodeIdentifier(?string $destinationNodeIdentifier): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestinationNodeIdentifier', [$destinationNodeIdentifier]);

        return parent::setDestinationNodeIdentifier($destinationNodeIdentifier);
    }

    /**
     * {@inheritDoc}
     */
    public function canEdit(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'canEdit', []);

        return parent::canEdit();
    }

    /**
     * {@inheritDoc}
     */
    public function getSequenceNumber(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSequenceNumber', []);

        return parent::getSequenceNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setSequenceNumber(?int $sequenceNumber): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSequenceNumber', [$sequenceNumber]);

        return parent::setSequenceNumber($sequenceNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroup(): ?\App\Entity\Framework\LsDefAssociationGrouping
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroup', []);

        return parent::getGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroup(?\App\Entity\Framework\LsDefAssociationGrouping $group): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroup', [$group]);

        return parent::setGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubtype(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubtype', []);

        return parent::getSubtype();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubtype(?string $subtype): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubtype', [$subtype]);

        return parent::setSubtype($subtype);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnotation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnotation', []);

        return parent::getAnnotation();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnotation(?string $annotation): \App\Entity\Framework\LsAssociation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnotation', [$annotation]);

        return parent::setAnnotation($annotation);
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function setIdentifier($identifier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdentifier', [$identifier]);

        return parent::setIdentifier($identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifier', []);

        return parent::getIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setUri(string $uri)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUri', [$uri]);

        return parent::setUri($uri);
    }

    /**
     * {@inheritDoc}
     */
    public function getUri(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUri', []);

        return parent::getUri();
    }

    /**
     * {@inheritDoc}
     */
    public function setChangedAt(\DateTimeInterface $changedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChangedAt', [$changedAt]);

        return parent::setChangedAt($changedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getChangedAt(): \DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChangedAt', []);

        return parent::getChangedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
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
    public function getExtra(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtra', []);

        return parent::getExtra();
    }

    /**
     * {@inheritDoc}
     */
    public function setExtra(?array $extra)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtra', [$extra]);

        return parent::setExtra($extra);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtraProperty(string $property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtraProperty', [$property]);

        return parent::getExtraProperty($property);
    }

    /**
     * {@inheritDoc}
     */
    public function setExtraProperty(string $property, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtraProperty', [$property, $value]);

        return parent::setExtraProperty($property, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdditionalFields(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdditionalFields', []);

        return parent::getAdditionalFields();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdditionalFields(array $values): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdditionalFields', [$values]);

        parent::setAdditionalFields($values);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdditionalField(string $name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdditionalField', [$name]);

        return parent::getAdditionalField($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setAdditionalField(string $name, $value): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdditionalField', [$name, $value]);

        parent::setAdditionalField($name, $value);
    }

}