<?php

namespace ContainerIeWcaPh;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere5c32 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer657d0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesae7b6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getConnection', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getMetadataFactory', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getExpressionBuilder', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'beginTransaction', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getCache', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getCache();
    }

    public function transactional($func)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'transactional', array('func' => $func), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'wrapInTransaction', array('func' => $func), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'commit', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->commit();
    }

    public function rollback()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'rollback', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getClassMetadata', array('className' => $className), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'createQuery', array('dql' => $dql), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'createNamedQuery', array('name' => $name), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'createQueryBuilder', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'flush', array('entity' => $entity), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'clear', array('entityName' => $entityName), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->clear($entityName);
    }

    public function close()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'close', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->close();
    }

    public function persist($entity)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'persist', array('entity' => $entity), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'remove', array('entity' => $entity), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'refresh', array('entity' => $entity), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'detach', array('entity' => $entity), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'merge', array('entity' => $entity), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getRepository', array('entityName' => $entityName), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'contains', array('entity' => $entity), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getEventManager', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getConfiguration', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'isOpen', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getUnitOfWork', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getProxyFactory', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'initializeObject', array('obj' => $obj), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'getFilters', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'isFiltersStateClean', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'hasFilters', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return $this->valueHoldere5c32->hasFilters();
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

        $instance->initializer657d0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere5c32) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere5c32 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere5c32->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, '__get', ['name' => $name], $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        if (isset(self::$publicPropertiesae7b6[$name])) {
            return $this->valueHoldere5c32->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5c32;

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

        $targetObject = $this->valueHoldere5c32;
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
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5c32;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere5c32;
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
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, '__isset', array('name' => $name), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5c32;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere5c32;
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
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, '__unset', array('name' => $name), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5c32;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere5c32;
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
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, '__clone', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        $this->valueHoldere5c32 = clone $this->valueHoldere5c32;
    }

    public function __sleep()
    {
        $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, '__sleep', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;

        return array('valueHoldere5c32');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer657d0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer657d0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer657d0 && ($this->initializer657d0->__invoke($valueHoldere5c32, $this, 'initializeProxy', array(), $this->initializer657d0) || 1) && $this->valueHoldere5c32 = $valueHoldere5c32;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere5c32;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere5c32;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
