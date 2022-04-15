<?php

namespace ContainerEtseXXv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9e0fc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerddbc3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8a04d = [
        
    ];

    public function getConnection()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getConnection', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getMetadataFactory', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getExpressionBuilder', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'beginTransaction', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getCache', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getCache();
    }

    public function transactional($func)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'transactional', array('func' => $func), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'wrapInTransaction', array('func' => $func), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'commit', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->commit();
    }

    public function rollback()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'rollback', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getClassMetadata', array('className' => $className), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'createQuery', array('dql' => $dql), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'createNamedQuery', array('name' => $name), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'createQueryBuilder', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'flush', array('entity' => $entity), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'clear', array('entityName' => $entityName), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->clear($entityName);
    }

    public function close()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'close', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->close();
    }

    public function persist($entity)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'persist', array('entity' => $entity), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'remove', array('entity' => $entity), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'refresh', array('entity' => $entity), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'detach', array('entity' => $entity), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'merge', array('entity' => $entity), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'contains', array('entity' => $entity), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getEventManager', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getConfiguration', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'isOpen', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getUnitOfWork', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getProxyFactory', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'initializeObject', array('obj' => $obj), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'getFilters', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'isFiltersStateClean', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'hasFilters', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return $this->valueHolder9e0fc->hasFilters();
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

        $instance->initializerddbc3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9e0fc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9e0fc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9e0fc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, '__get', ['name' => $name], $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        if (isset(self::$publicProperties8a04d[$name])) {
            return $this->valueHolder9e0fc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e0fc;

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

        $targetObject = $this->valueHolder9e0fc;
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
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e0fc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9e0fc;
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
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, '__isset', array('name' => $name), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e0fc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9e0fc;
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
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, '__unset', array('name' => $name), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e0fc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9e0fc;
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
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, '__clone', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        $this->valueHolder9e0fc = clone $this->valueHolder9e0fc;
    }

    public function __sleep()
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, '__sleep', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        return array('valueHolder9e0fc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerddbc3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerddbc3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'initializeProxy', array(), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9e0fc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9e0fc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
