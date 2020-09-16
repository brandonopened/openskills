<?php

namespace ContainerPpHIGmv;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd9e60 = null;
    private $initializer6f360 = null;
    private static $publicPropertiese8eed = [
        
    ];
    public function getConnection()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getConnection', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getMetadataFactory', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getExpressionBuilder', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'beginTransaction', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getCache', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getCache();
    }
    public function transactional($func)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'transactional', array('func' => $func), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->transactional($func);
    }
    public function commit()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'commit', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->commit();
    }
    public function rollback()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'rollback', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getClassMetadata', array('className' => $className), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'createQuery', array('dql' => $dql), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'createNamedQuery', array('name' => $name), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'createQueryBuilder', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'flush', array('entity' => $entity), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'clear', array('entityName' => $entityName), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->clear($entityName);
    }
    public function close()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'close', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->close();
    }
    public function persist($entity)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'persist', array('entity' => $entity), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'remove', array('entity' => $entity), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'refresh', array('entity' => $entity), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'detach', array('entity' => $entity), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'merge', array('entity' => $entity), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'contains', array('entity' => $entity), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getEventManager', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getConfiguration', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'isOpen', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getUnitOfWork', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getProxyFactory', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'initializeObject', array('obj' => $obj), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'getFilters', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'isFiltersStateClean', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'hasFilters', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return $this->valueHolderd9e60->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer6f360 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderd9e60) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd9e60 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderd9e60->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, '__get', ['name' => $name], $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        if (isset(self::$publicPropertiese8eed[$name])) {
            return $this->valueHolderd9e60->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9e60;
            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolderd9e60;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9e60;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolderd9e60;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, '__isset', array('name' => $name), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9e60;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd9e60;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, '__unset', array('name' => $name), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9e60;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd9e60;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, '__clone', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        $this->valueHolderd9e60 = clone $this->valueHolderd9e60;
    }
    public function __sleep()
    {
        $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, '__sleep', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
        return array('valueHolderd9e60');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6f360 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6f360;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6f360 && ($this->initializer6f360->__invoke($valueHolderd9e60, $this, 'initializeProxy', array(), $this->initializer6f360) || 1) && $this->valueHolderd9e60 = $valueHolderd9e60;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd9e60;
    }
    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderd9e60;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
