<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder32777 = null;
    private $initializer2c0a6 = null;
    private static $publicProperties9ac79 = [
        
    ];
    public function getConnection()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getConnection', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getMetadataFactory', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getExpressionBuilder', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'beginTransaction', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getCache', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getCache();
    }
    public function transactional($func)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'transactional', array('func' => $func), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'commit', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->commit();
    }
    public function rollback()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'rollback', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getClassMetadata', array('className' => $className), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'createQuery', array('dql' => $dql), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'createNamedQuery', array('name' => $name), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'createQueryBuilder', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'flush', array('entity' => $entity), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'clear', array('entityName' => $entityName), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->clear($entityName);
    }
    public function close()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'close', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->close();
    }
    public function persist($entity)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'persist', array('entity' => $entity), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'remove', array('entity' => $entity), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'refresh', array('entity' => $entity), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'detach', array('entity' => $entity), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'merge', array('entity' => $entity), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'contains', array('entity' => $entity), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getEventManager', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getConfiguration', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'isOpen', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getUnitOfWork', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getProxyFactory', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'initializeObject', array('obj' => $obj), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'getFilters', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'isFiltersStateClean', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'hasFilters', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return $this->valueHolder32777->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer2c0a6 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder32777) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder32777 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder32777->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, '__get', ['name' => $name], $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        if (isset(self::$publicProperties9ac79[$name])) {
            return $this->valueHolder32777->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32777;
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
        $targetObject = $this->valueHolder32777;
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
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32777;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder32777;
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
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, '__isset', array('name' => $name), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32777;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder32777;
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
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, '__unset', array('name' => $name), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32777;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder32777;
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
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, '__clone', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        $this->valueHolder32777 = clone $this->valueHolder32777;
    }
    public function __sleep()
    {
        $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, '__sleep', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
        return array('valueHolder32777');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2c0a6 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2c0a6;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer2c0a6 && ($this->initializer2c0a6->__invoke($valueHolder32777, $this, 'initializeProxy', array(), $this->initializer2c0a6) || 1) && $this->valueHolder32777 = $valueHolder32777;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder32777;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder32777;
    }
}
