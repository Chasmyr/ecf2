<?php

namespace ContainerEtseXXv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        if ($this->valueHolder9e0fc === $returnValue = $this->valueHolder9e0fc->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializerddbc3 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder9e0fc) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder9e0fc = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerddbc3 && ($this->initializerddbc3->__invoke($valueHolder9e0fc, $this, '__get', ['name' => $name], $this->initializerddbc3) || 1) && $this->valueHolder9e0fc = $valueHolder9e0fc;

        if (isset(self::$publicProperties8a04d[$name])) {
            return $this->valueHolder9e0fc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
