<?php

namespace Container415IZUI;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd2f1b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0d243 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties783d0 = [
        
    ];

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer0d243 && ($this->initializer0d243->__invoke($valueHolderd2f1b, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer0d243) || 1) && $this->valueHolderd2f1b = $valueHolderd2f1b;

        if ($this->valueHolderd2f1b === $returnValue = $this->valueHolderd2f1b->paginate($target, $page, $limit, $options)) {
            $returnValue = $this;
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

        $instance->initializer0d243 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderd2f1b) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderd2f1b = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer0d243 && ($this->initializer0d243->__invoke($valueHolderd2f1b, $this, '__get', ['name' => $name], $this->initializer0d243) || 1) && $this->valueHolderd2f1b = $valueHolderd2f1b;

        if (isset(self::$publicProperties783d0[$name])) {
            return $this->valueHolderd2f1b->$name;
        }

        $targetObject = $this->valueHolderd2f1b;

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

    public function __set($name, $value)
    {
        $this->initializer0d243 && ($this->initializer0d243->__invoke($valueHolderd2f1b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0d243) || 1) && $this->valueHolderd2f1b = $valueHolderd2f1b;

        $targetObject = $this->valueHolderd2f1b;

        $targetObject->$name = $value;

        return $targetObject->$name;
    }

    public function __isset($name)
    {
        $this->initializer0d243 && ($this->initializer0d243->__invoke($valueHolderd2f1b, $this, '__isset', array('name' => $name), $this->initializer0d243) || 1) && $this->valueHolderd2f1b = $valueHolderd2f1b;

        $targetObject = $this->valueHolderd2f1b;

        return isset($targetObject->$name);
    }

    public function __unset($name)
    {
        $this->initializer0d243 && ($this->initializer0d243->__invoke($valueHolderd2f1b, $this, '__unset', array('name' => $name), $this->initializer0d243) || 1) && $this->valueHolderd2f1b = $valueHolderd2f1b;

        $targetObject = $this->valueHolderd2f1b;

        unset($targetObject->$name);

return;
    }

    public function __clone()
    {
        $this->initializer0d243 && ($this->initializer0d243->__invoke($valueHolderd2f1b, $this, '__clone', array(), $this->initializer0d243) || 1) && $this->valueHolderd2f1b = $valueHolderd2f1b;

        $this->valueHolderd2f1b = clone $this->valueHolderd2f1b;
    }

    public function __sleep()
    {
        $this->initializer0d243 && ($this->initializer0d243->__invoke($valueHolderd2f1b, $this, '__sleep', array(), $this->initializer0d243) || 1) && $this->valueHolderd2f1b = $valueHolderd2f1b;

        return array('valueHolderd2f1b');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0d243 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0d243;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0d243 && ($this->initializer0d243->__invoke($valueHolderd2f1b, $this, 'initializeProxy', array(), $this->initializer0d243) || 1) && $this->valueHolderd2f1b = $valueHolderd2f1b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd2f1b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd2f1b;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
