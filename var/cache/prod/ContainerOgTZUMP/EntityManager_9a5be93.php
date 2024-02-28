<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder7424f = null;
    private $initializer327e8 = null;
    private static $publicProperties6e81e = [
        
    ];
    public function getConnection()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getConnection', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getMetadataFactory', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getExpressionBuilder', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'beginTransaction', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getCache', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getCache();
    }
    public function transactional($func)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'transactional', array('func' => $func), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'commit', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->commit();
    }
    public function rollback()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'rollback', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getClassMetadata', array('className' => $className), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'createQuery', array('dql' => $dql), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'createNamedQuery', array('name' => $name), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'createQueryBuilder', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'flush', array('entity' => $entity), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'clear', array('entityName' => $entityName), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->clear($entityName);
    }
    public function close()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'close', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->close();
    }
    public function persist($entity)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'persist', array('entity' => $entity), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'remove', array('entity' => $entity), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'refresh', array('entity' => $entity), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'detach', array('entity' => $entity), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'merge', array('entity' => $entity), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'contains', array('entity' => $entity), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getEventManager', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getConfiguration', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'isOpen', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getUnitOfWork', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getProxyFactory', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'initializeObject', array('obj' => $obj), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'getFilters', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'isFiltersStateClean', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'hasFilters', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return $this->valueHolder7424f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer327e8 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder7424f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7424f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder7424f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, '__get', ['name' => $name], $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        if (isset(self::$publicProperties6e81e[$name])) {
            return $this->valueHolder7424f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7424f;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7424f;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7424f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7424f;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, '__isset', array('name' => $name), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7424f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder7424f;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, '__unset', array('name' => $name), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7424f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder7424f;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, '__clone', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        $this->valueHolder7424f = clone $this->valueHolder7424f;
    }
    public function __sleep()
    {
        $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, '__sleep', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
        return array('valueHolder7424f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer327e8 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer327e8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer327e8 && ($this->initializer327e8->__invoke($valueHolder7424f, $this, 'initializeProxy', array(), $this->initializer327e8) || 1) && $this->valueHolder7424f = $valueHolder7424f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7424f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7424f;
    }
}
