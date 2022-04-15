<?php

namespace ContainerXZ689XA;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere8930 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1ef83 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5cd5b = [
        
    ];

    public function getConnection()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getConnection', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getMetadataFactory', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getExpressionBuilder', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'beginTransaction', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getCache', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'transactional', array('func' => $func), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'commit', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->commit();
    }

    public function rollback()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'rollback', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getClassMetadata', array('className' => $className), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'createQuery', array('dql' => $dql), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'createNamedQuery', array('name' => $name), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'createQueryBuilder', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'flush', array('entity' => $entity), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'clear', array('entityName' => $entityName), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->clear($entityName);
    }

    public function close()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'close', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->close();
    }

    public function persist($entity)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'persist', array('entity' => $entity), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'remove', array('entity' => $entity), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'refresh', array('entity' => $entity), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'detach', array('entity' => $entity), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'merge', array('entity' => $entity), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'contains', array('entity' => $entity), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getEventManager', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getConfiguration', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'isOpen', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getUnitOfWork', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getProxyFactory', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'initializeObject', array('obj' => $obj), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'getFilters', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'isFiltersStateClean', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'hasFilters', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return $this->valueHoldere8930->hasFilters();
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

        $instance->initializer1ef83 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere8930) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere8930 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere8930->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, '__get', ['name' => $name], $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        if (isset(self::$publicProperties5cd5b[$name])) {
            return $this->valueHoldere8930->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8930;

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

        $targetObject = $this->valueHoldere8930;
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
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8930;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere8930;
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
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, '__isset', array('name' => $name), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8930;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere8930;
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
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, '__unset', array('name' => $name), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8930;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere8930;
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
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, '__clone', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        $this->valueHoldere8930 = clone $this->valueHoldere8930;
    }

    public function __sleep()
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, '__sleep', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        return array('valueHoldere8930');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1ef83 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1ef83;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'initializeProxy', array(), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere8930;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere8930;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
