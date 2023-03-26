<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder53efc = null;
    private $initializerc1259 = null;
    private static $publicProperties9e90e = [
        
    ];
    public function getConnection()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getConnection', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getMetadataFactory', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getExpressionBuilder', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'beginTransaction', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getCache', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'transactional', array('func' => $func), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'commit', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->commit();
    }
    public function rollback()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'rollback', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getClassMetadata', array('className' => $className), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'createQuery', array('dql' => $dql), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'createNamedQuery', array('name' => $name), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'createQueryBuilder', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'flush', array('entity' => $entity), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'clear', array('entityName' => $entityName), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->clear($entityName);
    }
    public function close()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'close', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->close();
    }
    public function persist($entity)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'persist', array('entity' => $entity), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'remove', array('entity' => $entity), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'refresh', array('entity' => $entity), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'detach', array('entity' => $entity), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'merge', array('entity' => $entity), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'contains', array('entity' => $entity), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getEventManager', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getConfiguration', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'isOpen', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getUnitOfWork', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getProxyFactory', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'initializeObject', array('obj' => $obj), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'getFilters', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'isFiltersStateClean', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'hasFilters', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return $this->valueHolder53efc->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc1259 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder53efc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder53efc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder53efc->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, '__get', ['name' => $name], $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        if (isset(self::$publicProperties9e90e[$name])) {
            return $this->valueHolder53efc->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53efc;
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
        $targetObject = $this->valueHolder53efc;
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
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53efc;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder53efc;
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
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, '__isset', array('name' => $name), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53efc;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder53efc;
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
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, '__unset', array('name' => $name), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53efc;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder53efc;
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
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, '__clone', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        $this->valueHolder53efc = clone $this->valueHolder53efc;
    }
    public function __sleep()
    {
        $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, '__sleep', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
        return array('valueHolder53efc');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc1259 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc1259;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc1259 && ($this->initializerc1259->__invoke($valueHolder53efc, $this, 'initializeProxy', array(), $this->initializerc1259) || 1) && $this->valueHolder53efc = $valueHolder53efc;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder53efc;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder53efc;
    }
}
