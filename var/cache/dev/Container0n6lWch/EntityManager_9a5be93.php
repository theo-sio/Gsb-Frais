<?php

namespace Container0n6lWch;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera7a93 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7a5d2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties83ac7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getConnection', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getMetadataFactory', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getExpressionBuilder', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'beginTransaction', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getCache', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'transactional', array('func' => $func), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->transactional($func);
    }

    public function commit()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'commit', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->commit();
    }

    public function rollback()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'rollback', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getClassMetadata', array('className' => $className), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'createQuery', array('dql' => $dql), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'createNamedQuery', array('name' => $name), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'createQueryBuilder', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'flush', array('entity' => $entity), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'clear', array('entityName' => $entityName), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->clear($entityName);
    }

    public function close()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'close', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->close();
    }

    public function persist($entity)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'persist', array('entity' => $entity), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'remove', array('entity' => $entity), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'refresh', array('entity' => $entity), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'detach', array('entity' => $entity), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'merge', array('entity' => $entity), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'contains', array('entity' => $entity), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getEventManager', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getConfiguration', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'isOpen', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getUnitOfWork', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getProxyFactory', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'initializeObject', array('obj' => $obj), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'getFilters', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'isFiltersStateClean', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'hasFilters', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return $this->valueHoldera7a93->hasFilters();
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

        $instance->initializer7a5d2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera7a93) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera7a93 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera7a93->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, '__get', ['name' => $name], $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        if (isset(self::$publicProperties83ac7[$name])) {
            return $this->valueHoldera7a93->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7a93;

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

        $targetObject = $this->valueHoldera7a93;
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
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7a93;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera7a93;
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
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, '__isset', array('name' => $name), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7a93;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera7a93;
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
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, '__unset', array('name' => $name), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7a93;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera7a93;
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
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, '__clone', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        $this->valueHoldera7a93 = clone $this->valueHoldera7a93;
    }

    public function __sleep()
    {
        $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, '__sleep', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;

        return array('valueHoldera7a93');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7a5d2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7a5d2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7a5d2 && ($this->initializer7a5d2->__invoke($valueHoldera7a93, $this, 'initializeProxy', array(), $this->initializer7a5d2) || 1) && $this->valueHoldera7a93 = $valueHoldera7a93;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera7a93;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera7a93;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
