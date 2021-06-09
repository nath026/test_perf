<?php

namespace ContainerZEz5kIq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf0243 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9cd95 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties88713 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getConnection', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getMetadataFactory', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getExpressionBuilder', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'beginTransaction', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getCache', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'transactional', array('func' => $func), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->transactional($func);
    }

    public function commit()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'commit', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->commit();
    }

    public function rollback()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'rollback', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getClassMetadata', array('className' => $className), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'createQuery', array('dql' => $dql), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'createNamedQuery', array('name' => $name), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'createQueryBuilder', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'flush', array('entity' => $entity), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'clear', array('entityName' => $entityName), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->clear($entityName);
    }

    public function close()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'close', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->close();
    }

    public function persist($entity)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'persist', array('entity' => $entity), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'remove', array('entity' => $entity), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'refresh', array('entity' => $entity), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'detach', array('entity' => $entity), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'merge', array('entity' => $entity), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'contains', array('entity' => $entity), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getEventManager', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getConfiguration', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'isOpen', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getUnitOfWork', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getProxyFactory', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'initializeObject', array('obj' => $obj), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'getFilters', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'isFiltersStateClean', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'hasFilters', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return $this->valueHolderf0243->hasFilters();
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

        $instance->initializer9cd95 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf0243) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf0243 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf0243->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, '__get', ['name' => $name], $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        if (isset(self::$publicProperties88713[$name])) {
            return $this->valueHolderf0243->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0243;

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

        $targetObject = $this->valueHolderf0243;
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
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0243;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf0243;
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
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, '__isset', array('name' => $name), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0243;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf0243;
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
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, '__unset', array('name' => $name), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0243;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf0243;
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
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, '__clone', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        $this->valueHolderf0243 = clone $this->valueHolderf0243;
    }

    public function __sleep()
    {
        $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, '__sleep', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;

        return array('valueHolderf0243');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9cd95 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9cd95;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9cd95 && ($this->initializer9cd95->__invoke($valueHolderf0243, $this, 'initializeProxy', array(), $this->initializer9cd95) || 1) && $this->valueHolderf0243 = $valueHolderf0243;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf0243;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf0243;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
