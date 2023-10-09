<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder768de = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer32181 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties16cb5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getConnection', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getMetadataFactory', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getExpressionBuilder', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'beginTransaction', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getCache', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getCache();
    }

    public function transactional($func)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'transactional', array('func' => $func), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'wrapInTransaction', array('func' => $func), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'commit', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->commit();
    }

    public function rollback()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'rollback', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getClassMetadata', array('className' => $className), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'createQuery', array('dql' => $dql), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'createNamedQuery', array('name' => $name), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'createQueryBuilder', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'flush', array('entity' => $entity), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'clear', array('entityName' => $entityName), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->clear($entityName);
    }

    public function close()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'close', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->close();
    }

    public function persist($entity)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'persist', array('entity' => $entity), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'remove', array('entity' => $entity), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'refresh', array('entity' => $entity), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'detach', array('entity' => $entity), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'merge', array('entity' => $entity), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getRepository', array('entityName' => $entityName), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'contains', array('entity' => $entity), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getEventManager', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getConfiguration', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'isOpen', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getUnitOfWork', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getProxyFactory', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'initializeObject', array('obj' => $obj), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'getFilters', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'isFiltersStateClean', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'hasFilters', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return $this->valueHolder768de->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer32181 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder768de) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder768de = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder768de->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, '__get', ['name' => $name], $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        if (isset(self::$publicProperties16cb5[$name])) {
            return $this->valueHolder768de->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder768de;

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

        $targetObject = $this->valueHolder768de;
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
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder768de;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder768de;
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
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, '__isset', array('name' => $name), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder768de;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder768de;
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
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, '__unset', array('name' => $name), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder768de;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder768de;
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
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, '__clone', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        $this->valueHolder768de = clone $this->valueHolder768de;
    }

    public function __sleep()
    {
        $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, '__sleep', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;

        return array('valueHolder768de');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer32181 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer32181;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer32181 && ($this->initializer32181->__invoke($valueHolder768de, $this, 'initializeProxy', array(), $this->initializer32181) || 1) && $this->valueHolder768de = $valueHolder768de;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder768de;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder768de;
    }
}
