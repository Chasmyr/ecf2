<?php

namespace ContainerXZ689XA;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        if ($this->valueHoldere8930 === $returnValue = $this->valueHoldere8930->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer1ef83 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldere8930) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldere8930 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer1ef83 && ($this->initializer1ef83->__invoke($valueHoldere8930, $this, '__get', ['name' => $name], $this->initializer1ef83) || 1) && $this->valueHoldere8930 = $valueHoldere8930;

        if (isset(self::$publicProperties5cd5b[$name])) {
            return $this->valueHoldere8930->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
