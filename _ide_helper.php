<?php
// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 10.39.0.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

    namespace Illuminate\Support\Facades { 
            /**
     * 
     *
     */ 
        class App {
                    /**
         * 
         *
         * @static 
         */ 
        public static function version()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->version();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bootstrapWith($bootstrappers)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->bootstrapWith($bootstrappers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function afterLoadingEnvironment($callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->afterLoadingEnvironment($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function beforeBootstrapping($bootstrapper, $callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->beforeBootstrapping($bootstrapper, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function afterBootstrapping($bootstrapper, $callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->afterBootstrapping($bootstrapper, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasBeenBootstrapped()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->hasBeenBootstrapped();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setBasePath($basePath)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->setBasePath($basePath);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function path($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->path($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useAppPath($path)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->useAppPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function basePath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->basePath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bootstrapPath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->bootstrapPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useBootstrapPath($path)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->useBootstrapPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function configPath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->configPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useConfigPath($path)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->useConfigPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function databasePath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->databasePath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useDatabasePath($path)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->useDatabasePath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function langPath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->langPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useLangPath($path)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->useLangPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function publicPath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->publicPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function usePublicPath($path)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->usePublicPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function storagePath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->storagePath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useStoragePath($path)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->useStoragePath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resourcePath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->resourcePath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function viewPath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->viewPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function joinPaths($basePath, $path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->joinPaths($basePath, $path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function environmentPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->environmentPath();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useEnvironmentPath($path)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->useEnvironmentPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function loadEnvironmentFrom($file)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->loadEnvironmentFrom($file);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function environmentFile()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->environmentFile();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function environmentFilePath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->environmentFilePath();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function environment(...$environments)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->environment(...$environments);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isLocal()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isLocal();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isProduction()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isProduction();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function detectEnvironment($callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->detectEnvironment($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function runningInConsole()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->runningInConsole();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function runningConsoleCommand(...$commands)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->runningConsoleCommand(...$commands);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function runningUnitTests()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->runningUnitTests();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasDebugModeEnabled()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->hasDebugModeEnabled();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerConfiguredProviders()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->registerConfiguredProviders();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function register($provider, $force = false)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->register($provider, $force);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getProvider($provider)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getProvider($provider);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getProviders($provider)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getProviders($provider);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveProvider($provider)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->resolveProvider($provider);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function loadDeferredProviders()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->loadDeferredProviders();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function loadDeferredProvider($service)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->loadDeferredProvider($service);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerDeferredProvider($provider, $service = null)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->registerDeferredProvider($provider, $service);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function make($abstract, $parameters = [])
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->make($abstract, $parameters);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bound($abstract)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->bound($abstract);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isBooted()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isBooted();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function boot()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->boot();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function booting($callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->booting($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function booted($callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->booted($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function handle($request, $type = 1, $catch = true)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->handle($request, $type, $catch);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function shouldSkipMiddleware()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->shouldSkipMiddleware();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCachedServicesPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getCachedServicesPath();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCachedPackagesPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getCachedPackagesPath();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function configurationIsCached()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->configurationIsCached();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCachedConfigPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getCachedConfigPath();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function routesAreCached()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->routesAreCached();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCachedRoutesPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getCachedRoutesPath();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function eventsAreCached()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->eventsAreCached();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCachedEventsPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getCachedEventsPath();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addAbsoluteCachePathPrefix($prefix)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->addAbsoluteCachePathPrefix($prefix);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function maintenanceMode()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->maintenanceMode();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isDownForMaintenance()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isDownForMaintenance();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function abort($code, $message = '', $headers = [])
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->abort($code, $message, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function terminating($callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->terminating($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function terminate()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->terminate();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getLoadedProviders()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getLoadedProviders();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function providerIsLoaded($provider)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->providerIsLoaded($provider);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDeferredServices()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getDeferredServices();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDeferredServices($services)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->setDeferredServices($services);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addDeferredServices($services)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->addDeferredServices($services);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isDeferredService($service)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isDeferredService($service);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function provideFacades($namespace)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->provideFacades($namespace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getLocale()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getLocale();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function currentLocale()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->currentLocale();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getFallbackLocale()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getFallbackLocale();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setLocale($locale)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->setLocale($locale);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setFallbackLocale($fallbackLocale)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->setFallbackLocale($fallbackLocale);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isLocale($locale)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isLocale($locale);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerCoreContainerAliases()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->registerCoreContainerAliases();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flush()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->flush();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getNamespace()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getNamespace();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function when($concrete)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->when($concrete);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function has($id)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->has($id);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolved($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->resolved($abstract);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isShared($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isShared($abstract);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isAlias($name)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isAlias($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bind($abstract, $concrete = null, $shared = false)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->bind($abstract, $concrete, $shared);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMethodBinding($method)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->hasMethodBinding($method);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bindMethod($method, $callback)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->bindMethod($method, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function callMethodBinding($method, $instance)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->callMethodBinding($method, $instance);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addContextualBinding($concrete, $abstract, $implementation)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->addContextualBinding($concrete, $abstract, $implementation);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bindIf($abstract, $concrete = null, $shared = false)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->bindIf($abstract, $concrete, $shared);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function singleton($abstract, $concrete = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->singleton($abstract, $concrete);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function singletonIf($abstract, $concrete = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->singletonIf($abstract, $concrete);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function scoped($abstract, $concrete = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->scoped($abstract, $concrete);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function scopedIf($abstract, $concrete = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->scopedIf($abstract, $concrete);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($abstract, $closure)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->extend($abstract, $closure);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function instance($abstract, $instance)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->instance($abstract, $instance);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function tag($abstracts, $tags)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->tag($abstracts, $tags);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function tagged($tag)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->tagged($tag);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function alias($abstract, $alias)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->alias($abstract, $alias);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function rebinding($abstract, $callback)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->rebinding($abstract, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function refresh($abstract, $target, $method)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->refresh($abstract, $target, $method);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function wrap($callback, $parameters = [])
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->wrap($callback, $parameters);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function call($callback, $parameters = [], $defaultMethod = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->call($callback, $parameters, $defaultMethod);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function factory($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->factory($abstract);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function makeWith($abstract, $parameters = [])
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->makeWith($abstract, $parameters);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function get($id)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->get($id);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function build($concrete)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->build($concrete);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function beforeResolving($abstract, $callback = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->beforeResolving($abstract, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolving($abstract, $callback = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->resolving($abstract, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function afterResolving($abstract, $callback = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->afterResolving($abstract, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getBindings()
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getBindings();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getAlias($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getAlias($abstract);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetExtenders($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->forgetExtenders($abstract);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetInstance($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->forgetInstance($abstract);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetInstances()
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->forgetInstances();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetScopedInstances()
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->forgetScopedInstances();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getInstance()
        {            //Method inherited from \Illuminate\Container\Container         
                        return \Illuminate\Foundation\Application::getInstance();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setInstance($container = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        return \Illuminate\Foundation\Application::setInstance($container);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetExists($key)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetGet($key)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->offsetSet($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetUnset($key)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->offsetUnset($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Foundation\Application::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Foundation\Application::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Foundation\Application::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Foundation\Application::flushMacros();
        }
         
    }
            /**
     * 
     *
     */ 
        class Artisan {
                    /**
         * 
         *
         * @static 
         */ 
        public static function rerouteSymfonyCommandEvents()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->rerouteSymfonyCommandEvents();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function handle($input, $output = null)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->handle($input, $output);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function terminate($input, $status)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->terminate($input, $status);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function whenCommandLifecycleIsLongerThan($threshold, $handler)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->whenCommandLifecycleIsLongerThan($threshold, $handler);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function commandStartedAt()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->commandStartedAt();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function command($signature, $callback)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->command($signature, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerCommand($command)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->registerCommand($command);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function call($command, $parameters = [], $outputBuffer = null)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->call($command, $parameters, $outputBuffer);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function queue($command, $parameters = [])
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->queue($command, $parameters);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function all()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->all();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function output()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->output();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bootstrap()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->bootstrap();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bootstrapWithoutBootingProviders()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->bootstrapWithoutBootingProviders();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setArtisan($artisan)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->setArtisan($artisan);
        }
         
    }
            /**
     * 
     *
     */ 
        class Auth {
                    /**
         * 
         *
         * @static 
         */ 
        public static function guard($name = null)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->guard($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createSessionDriver($name, $config)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->createSessionDriver($name, $config);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createTokenDriver($name, $config)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->createTokenDriver($name, $config);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function shouldUse($name)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->shouldUse($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->setDefaultDriver($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function viaRequest($driver, $callback)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->viaRequest($driver, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function userResolver()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->userResolver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveUsersUsing($userResolver)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->resolveUsersUsing($userResolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function provider($name, $callback)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->provider($name, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasResolvedGuards()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->hasResolvedGuards();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetGuards()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->forgetGuards();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setApplication($app)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->setApplication($app);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createUserProvider($provider = null)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->createUserProvider($provider);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultUserProvider()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->getDefaultUserProvider();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function user()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->user();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function id()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->id();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function once($credentials = [])
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->once($credentials);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function onceUsingId($id)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->onceUsingId($id);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function validate($credentials = [])
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->validate($credentials);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function basic($field = 'email', $extraConditions = [])
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->basic($field, $extraConditions);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function onceBasic($field = 'email', $extraConditions = [])
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->onceBasic($field, $extraConditions);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function attempt($credentials = [], $remember = false)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->attempt($credentials, $remember);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function attemptWhen($credentials = [], $callbacks = null, $remember = false)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->attemptWhen($credentials, $callbacks, $remember);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function loginUsingId($id, $remember = false)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->loginUsingId($id, $remember);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function login($user, $remember = false)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->login($user, $remember);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function logout()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->logout();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function logoutCurrentDevice()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->logoutCurrentDevice();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function logoutOtherDevices($password, $attribute = 'password')
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->logoutOtherDevices($password, $attribute);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function attempting($callback)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->attempting($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getLastAttempted()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getLastAttempted();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getName()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getName();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRecallerName()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getRecallerName();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function viaRemember()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->viaRemember();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRememberDuration($minutes)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->setRememberDuration($minutes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCookieJar()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getCookieJar();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setCookieJar($cookie)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->setCookieJar($cookie);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDispatcher()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getDispatcher();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDispatcher($events)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->setDispatcher($events);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getSession()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getSession();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getUser()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getUser();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setUser($user)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->setUser($user);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRequest()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRequest($request)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->setRequest($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getTimebox()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getTimebox();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function authenticate()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->authenticate();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasUser()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->hasUser();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function check()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->check();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function guest()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->guest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetUser()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->forgetUser();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getProvider()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getProvider();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setProvider($provider)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->setProvider($provider);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Auth\SessionGuard::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Auth\SessionGuard::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Auth\SessionGuard::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Auth\SessionGuard::flushMacros();
        }
         
    }
            /**
     * 
     *
     */ 
        class Blade {
                    /**
         * 
         *
         * @static 
         */ 
        public static function compile($path = null)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->compile($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPath()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getPath();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setPath($path)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->setPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function compileString($value)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->compileString($value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function render($string, $data = [], $deleteCachedView = false)
        {
                        return \Illuminate\View\Compilers\BladeCompiler::render($string, $data, $deleteCachedView);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function renderComponent($component)
        {
                        return \Illuminate\View\Compilers\BladeCompiler::renderComponent($component);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stripParentheses($expression)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->stripParentheses($expression);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($compiler)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->extend($compiler);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getExtensions()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getExtensions();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function if($name, $callback)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->if($name, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function check($name, ...$parameters)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->check($name, ...$parameters);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function component($class, $alias = null, $prefix = '')
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->component($class, $alias, $prefix);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function components($components, $prefix = '')
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->components($components, $prefix);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getClassComponentAliases()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getClassComponentAliases();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function anonymousComponentPath($path, $prefix = null)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->anonymousComponentPath($path, $prefix);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function anonymousComponentNamespace($directory, $prefix = null)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->anonymousComponentNamespace($directory, $prefix);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function componentNamespace($namespace, $prefix)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->componentNamespace($namespace, $prefix);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getAnonymousComponentPaths()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getAnonymousComponentPaths();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getAnonymousComponentNamespaces()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getAnonymousComponentNamespaces();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getClassComponentNamespaces()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getClassComponentNamespaces();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function aliasComponent($path, $alias = null)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->aliasComponent($path, $alias);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function include($path, $alias = null)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->include($path, $alias);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function aliasInclude($path, $alias = null)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->aliasInclude($path, $alias);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function directive($name, $handler)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->directive($name, $handler);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCustomDirectives()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getCustomDirectives();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function prepareStringsForCompilationUsing($callback)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->prepareStringsForCompilationUsing($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function precompiler($precompiler)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->precompiler($precompiler);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setEchoFormat($format)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->setEchoFormat($format);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withDoubleEncoding()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->withDoubleEncoding();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withoutDoubleEncoding()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->withoutDoubleEncoding();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withoutComponentTags()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->withoutComponentTags();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCompiledPath($path)
        {            //Method inherited from \Illuminate\View\Compilers\Compiler         
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getCompiledPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isExpired($path)
        {            //Method inherited from \Illuminate\View\Compilers\Compiler         
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->isExpired($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function newComponentHash($component)
        {
                        return \Illuminate\View\Compilers\BladeCompiler::newComponentHash($component);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function compileClassComponentOpening($component, $alias, $data, $hash)
        {
                        return \Illuminate\View\Compilers\BladeCompiler::compileClassComponentOpening($component, $alias, $data, $hash);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function compileEndComponentClass()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->compileEndComponentClass();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sanitizeComponentAttribute($value)
        {
                        return \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function compileEndOnce()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->compileEndOnce();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stringable($class, $handler = null)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->stringable($class, $handler);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function compileEchos($value)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->compileEchos($value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function applyEchoHandler($value)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->applyEchoHandler($value);
        }
         
    }
            /**
     * 
     *
     */ 
        class Broadcast {
                    /**
         * 
         *
         * @static 
         */ 
        public static function routes($attributes = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->routes($attributes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function userRoutes($attributes = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->userRoutes($attributes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function channelRoutes($attributes = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->channelRoutes($attributes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function socket($request = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->socket($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function event($event = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->event($event);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function queue($event)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->queue($event);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function connection($driver = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->connection($driver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function driver($name = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->driver($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pusher($config)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->pusher($config);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function ably($config)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->ably($config);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->setDefaultDriver($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function purge($name = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->purge($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getApplication()
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->getApplication();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setApplication($app)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->setApplication($app);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetDrivers()
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->forgetDrivers();
        }
         
    }
            /**
     * 
     *
     */ 
        class Bus {
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatch($command)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->dispatch($command);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatchSync($command, $handler = null)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->dispatchSync($command, $handler);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatchNow($command, $handler = null)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->dispatchNow($command, $handler);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function findBatch($batchId)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->findBatch($batchId);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function batch($jobs)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->batch($jobs);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function chain($jobs)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->chain($jobs);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasCommandHandler($command)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->hasCommandHandler($command);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCommandHandler($command)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->getCommandHandler($command);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatchToQueue($command)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->dispatchToQueue($command);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatchAfterResponse($command, $handler = null)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->dispatchAfterResponse($command, $handler);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pipeThrough($pipes)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->pipeThrough($pipes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function map($map)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->map($map);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function except($jobsToDispatch)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->except($jobsToDispatch);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertDispatched($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertDispatched($command, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertDispatchedTimes($command, $times = 1)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertDispatchedTimes($command, $times);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNotDispatched($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertNotDispatched($command, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNothingDispatched()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertNothingDispatched();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertDispatchedSync($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertDispatchedSync($command, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertDispatchedSyncTimes($command, $times = 1)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertDispatchedSyncTimes($command, $times);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNotDispatchedSync($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertNotDispatchedSync($command, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertDispatchedAfterResponse($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertDispatchedAfterResponse($command, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertDispatchedAfterResponseTimes($command, $times = 1)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertDispatchedAfterResponseTimes($command, $times);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNotDispatchedAfterResponse($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertNotDispatchedAfterResponse($command, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertChained($expectedChain)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertChained($expectedChain);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertDispatchedWithoutChain($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertDispatchedWithoutChain($command, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function chainedBatch($callback)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->chainedBatch($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertBatched($callback)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertBatched($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertBatchCount($count)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertBatchCount($count);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNothingBatched()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->assertNothingBatched();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatched($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->dispatched($command, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatchedSync($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->dispatchedSync($command, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatchedAfterResponse($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->dispatchedAfterResponse($command, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function batched($callback)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->batched($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasDispatched($command)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->hasDispatched($command);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasDispatchedSync($command)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->hasDispatchedSync($command);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasDispatchedAfterResponse($command)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->hasDispatchedAfterResponse($command);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatchFakeBatch($name = '')
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->dispatchFakeBatch($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function recordPendingBatch($pendingBatch)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->recordPendingBatch($pendingBatch);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function serializeAndRestore($serializeAndRestore = true)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->serializeAndRestore($serializeAndRestore);
        }
         
    }
            /**
     * 
     *
     */ 
        class Cache {
                    /**
         * 
         *
         * @static 
         */ 
        public static function store($name = null)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->store($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function driver($driver = null)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->driver($driver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolve($name)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->resolve($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function repository($store)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->repository($store);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function refreshEventDispatcher()
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->refreshEventDispatcher();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->setDefaultDriver($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetDriver($name = null)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->forgetDriver($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function purge($name = null)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->purge($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setApplication($app)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->setApplication($app);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->has($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function missing($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->missing($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function get($key, $default = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function many($keys)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->many($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getMultiple($keys, $default = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->getMultiple($keys, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->pull($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function put($key, $value, $ttl = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->put($key, $value, $ttl);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function set($key, $value, $ttl = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->set($key, $value, $ttl);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function putMany($values, $ttl = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->putMany($values, $ttl);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setMultiple($values, $ttl = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->setMultiple($values, $ttl);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function add($key, $value, $ttl = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->add($key, $value, $ttl);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function increment($key, $value = 1)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->increment($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function decrement($key, $value = 1)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->decrement($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forever($key, $value)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->forever($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function remember($key, $ttl, $callback)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->remember($key, $ttl, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sear($key, $callback)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->sear($key, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function rememberForever($key, $callback)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->rememberForever($key, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forget($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->forget($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function delete($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->delete($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function deleteMultiple($keys)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->deleteMultiple($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function clear()
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->clear();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function tags($names)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->tags($names);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function supportsTags()
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->supportsTags();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultCacheTime()
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->getDefaultCacheTime();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultCacheTime($seconds)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->setDefaultCacheTime($seconds);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getStore()
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->getStore();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setStore($store)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->setStore($store);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getEventDispatcher()
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->getEventDispatcher();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->setEventDispatcher($events);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetExists($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetGet($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->offsetSet($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetUnset($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->offsetUnset($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Cache\Repository::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Cache\Repository::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Cache\Repository::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Cache\Repository::flushMacros();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->macroCall($method, $parameters);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flush()
        {
                        /** @var \Illuminate\Cache\ApcStore $instance */
                        return $instance->flush();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPrefix()
        {
                        /** @var \Illuminate\Cache\ApcStore $instance */
                        return $instance->getPrefix();
        }
         
    }
            /**
     * 
     *
     */ 
        class Config {
                    /**
         * 
         *
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->has($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function get($key, $default = null)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getMany($keys)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->getMany($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function set($key, $value = null)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->set($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function prepend($key, $value)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->prepend($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function push($key, $value)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->push($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function all()
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->all();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetExists($key)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetGet($key)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->offsetSet($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetUnset($key)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->offsetUnset($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Config\Repository::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Config\Repository::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Config\Repository::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Config\Repository::flushMacros();
        }
         
    }
            /**
     * 
     *
     */ 
        class Cookie {
                    /**
         * 
         *
         * @static 
         */ 
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->make($name, $value, $minutes, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forever($name, $value, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->forever($name, $value, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forget($name, $path = null, $domain = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->forget($name, $path, $domain);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasQueued($key, $path = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->hasQueued($key, $path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function queued($key, $default = null, $path = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->queued($key, $default, $path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function queue(...$parameters)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->queue(...$parameters);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function expire($name, $path = null, $domain = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->expire($name, $path, $domain);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function unqueue($name, $path = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->unqueue($name, $path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultPathAndDomain($path, $domain, $secure = false, $sameSite = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->setDefaultPathAndDomain($path, $domain, $secure, $sameSite);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getQueuedCookies()
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->getQueuedCookies();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushQueuedCookies()
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->flushQueuedCookies();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Cookie\CookieJar::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Cookie\CookieJar::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Cookie\CookieJar::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Cookie\CookieJar::flushMacros();
        }
         
    }
            /**
     * 
     *
     */ 
        class Crypt {
                    /**
         * 
         *
         * @static 
         */ 
        public static function supported($key, $cipher)
        {
                        return \Illuminate\Encryption\Encrypter::supported($key, $cipher);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function generateKey($cipher)
        {
                        return \Illuminate\Encryption\Encrypter::generateKey($cipher);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function encrypt($value, $serialize = true)
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->encrypt($value, $serialize);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function encryptString($value)
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->encryptString($value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function decrypt($payload, $unserialize = true)
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->decrypt($payload, $unserialize);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function decryptString($payload)
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->decryptString($payload);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getKey()
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->getKey();
        }
         
    }
            /**
     * 
     *
     */ 
        class Date {
                    /**
         * 
         *
         * @static 
         */ 
        public static function use($handler)
        {
                        return \Illuminate\Support\DateFactory::use($handler);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useDefault()
        {
                        return \Illuminate\Support\DateFactory::useDefault();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useCallable($callable)
        {
                        return \Illuminate\Support\DateFactory::useCallable($callable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useClass($dateClass)
        {
                        return \Illuminate\Support\DateFactory::useClass($dateClass);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useFactory($factory)
        {
                        return \Illuminate\Support\DateFactory::useFactory($factory);
        }
         
    }
            /**
     * 
     *
     */ 
        class DB {
                    /**
         * 
         *
         * @static 
         */ 
        public static function connection($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->connection($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerDoctrineType($class, $name, $type)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->registerDoctrineType($class, $name, $type);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function purge($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->purge($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function disconnect($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->disconnect($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reconnect($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->reconnect($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function usingConnection($name, $callback)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->usingConnection($name, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultConnection()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->getDefaultConnection();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultConnection($name)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->setDefaultConnection($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function supportedDrivers()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->supportedDrivers();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function availableDrivers()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->availableDrivers();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($name, $resolver)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->extend($name, $resolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetExtension($name)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->forgetExtension($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getConnections()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->getConnections();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setReconnector($reconnector)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->setReconnector($reconnector);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setApplication($app)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->setApplication($app);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Database\DatabaseManager::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Database\DatabaseManager::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Database\DatabaseManager::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Database\DatabaseManager::flushMacros();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->macroCall($method, $parameters);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getQueryGrammar()
        {
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getQueryGrammar();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getSchemaBuilder()
        {
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getSchemaBuilder();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getSchemaGrammar()
        {
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getSchemaGrammar();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function query()
        {
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->query();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function returningStatement($query, $bindings = [])
        {
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->returningStatement($query, $bindings);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function runWithAdditionalBindings($callback, $prepend = [], $append = [])
        {
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->runWithAdditionalBindings($callback, $prepend, $append);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function serverVersion()
        {
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->serverVersion();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getSchemaState($files = null, $processFactory = null)
        {            //Method inherited from \Illuminate\Database\PostgresConnection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getSchemaState($files, $processFactory);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useDefaultQueryGrammar()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->useDefaultQueryGrammar();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useDefaultSchemaGrammar()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->useDefaultSchemaGrammar();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useDefaultPostProcessor()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->useDefaultPostProcessor();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function table($table, $as = null)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->table($table, $as);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function selectOne($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->selectOne($query, $bindings, $useReadPdo);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function scalar($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->scalar($query, $bindings, $useReadPdo);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function selectFromWriteConnection($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->selectFromWriteConnection($query, $bindings);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function select($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->select($query, $bindings, $useReadPdo);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function selectResultSets($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->selectResultSets($query, $bindings, $useReadPdo);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function cursor($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->cursor($query, $bindings, $useReadPdo);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function insert($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->insert($query, $bindings);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function update($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->update($query, $bindings);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function delete($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->delete($query, $bindings);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function statement($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->statement($query, $bindings);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function affectingStatement($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->affectingStatement($query, $bindings);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function unprepared($query)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->unprepared($query);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pretend($callback)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->pretend($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withoutPretending($callback)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->withoutPretending($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bindValues($statement, $bindings)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->bindValues($statement, $bindings);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function prepareBindings($bindings)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->prepareBindings($bindings);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function logQuery($query, $bindings, $time = null)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->logQuery($query, $bindings, $time);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function whenQueryingForLongerThan($threshold, $handler)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->whenQueryingForLongerThan($threshold, $handler);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function allowQueryDurationHandlersToRunAgain()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->allowQueryDurationHandlersToRunAgain();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function totalQueryDuration()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->totalQueryDuration();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resetTotalQueryDuration()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->resetTotalQueryDuration();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reconnectIfMissingConnection()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->reconnectIfMissingConnection();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function beforeExecuting($callback)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->beforeExecuting($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function listen($callback)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->listen($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function raw($value)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->raw($value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function escape($value, $binary = false)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->escape($value, $binary);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasModifiedRecords()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->hasModifiedRecords();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function recordsHaveBeenModified($value = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->recordsHaveBeenModified($value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRecordModificationState($value)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->setRecordModificationState($value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetRecordModificationState()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->forgetRecordModificationState();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useWriteConnectionWhenReading($value = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->useWriteConnectionWhenReading($value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isDoctrineAvailable()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->isDoctrineAvailable();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function usingNativeSchemaOperations()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->usingNativeSchemaOperations();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDoctrineColumn($table, $column)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getDoctrineColumn($table, $column);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDoctrineSchemaManager()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getDoctrineSchemaManager();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDoctrineConnection()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getDoctrineConnection();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPdo()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getPdo();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRawPdo()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getRawPdo();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getReadPdo()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getReadPdo();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRawReadPdo()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getRawReadPdo();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setPdo($pdo)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->setPdo($pdo);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setReadPdo($pdo)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->setReadPdo($pdo);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getName()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getName();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getNameWithReadWriteType()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getNameWithReadWriteType();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getConfig($option = null)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getConfig($option);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDriverName()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getDriverName();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setQueryGrammar($grammar)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->setQueryGrammar($grammar);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setSchemaGrammar($grammar)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->setSchemaGrammar($grammar);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPostProcessor()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getPostProcessor();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setPostProcessor($processor)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->setPostProcessor($processor);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getEventDispatcher()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getEventDispatcher();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->setEventDispatcher($events);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function unsetEventDispatcher()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->unsetEventDispatcher();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setTransactionManager($manager)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->setTransactionManager($manager);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function unsetTransactionManager()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->unsetTransactionManager();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pretending()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->pretending();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getQueryLog();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRawQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getRawQueryLog();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->flushQueryLog();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function enableQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->enableQueryLog();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function disableQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->disableQueryLog();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function logging()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->logging();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDatabaseName()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getDatabaseName();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDatabaseName($database)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->setDatabaseName($database);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setReadWriteType($readWriteType)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->setReadWriteType($readWriteType);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getTablePrefix()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->getTablePrefix();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setTablePrefix($prefix)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->setTablePrefix($prefix);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withTablePrefix($grammar)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->withTablePrefix($grammar);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolverFor($driver, $callback)
        {            //Method inherited from \Illuminate\Database\Connection         
                        return \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection::resolverFor($driver, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getResolver($driver)
        {            //Method inherited from \Illuminate\Database\Connection         
                        return \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection::getResolver($driver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function transaction($callback, $attempts = 1)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->transaction($callback, $attempts);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function beginTransaction()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->beginTransaction();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function commit()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->commit();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function rollBack($toLevel = null)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->rollBack($toLevel);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function transactionLevel()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->transactionLevel();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function afterCommit($callback)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Tpetry\PostgresqlEnhanced\PostgresEnhancedConnection $instance */
                        return $instance->afterCommit($callback);
        }
         
    }
            /**
     * 
     *
     */ 
        class Event {
                    /**
         * 
         *
         * @static 
         */ 
        public static function listen($events, $listener = null)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->listen($events, $listener);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasListeners($eventName)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->hasListeners($eventName);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasWildcardListeners($eventName)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->hasWildcardListeners($eventName);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function push($event, $payload = [])
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->push($event, $payload);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flush($event)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->flush($event);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function subscribe($subscriber)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->subscribe($subscriber);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function until($event, $payload = [])
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->until($event, $payload);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatch($event, $payload = [], $halt = false)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->dispatch($event, $payload, $halt);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getListeners($eventName)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->getListeners($eventName);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function makeListener($listener, $wildcard = false)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->makeListener($listener, $wildcard);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createClassListener($listener, $wildcard = false)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->createClassListener($listener, $wildcard);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forget($event)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->forget($event);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetPushed()
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->forgetPushed();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setQueueResolver($resolver)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->setQueueResolver($resolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setTransactionManagerResolver($resolver)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->setTransactionManagerResolver($resolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRawListeners()
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->getRawListeners();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Events\Dispatcher::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Events\Dispatcher::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Events\Dispatcher::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Events\Dispatcher::flushMacros();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function except($eventsToDispatch)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        return $instance->except($eventsToDispatch);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertListening($expectedEvent, $expectedListener)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        return $instance->assertListening($expectedEvent, $expectedListener);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertDispatched($event, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        return $instance->assertDispatched($event, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertDispatchedTimes($event, $times = 1)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        return $instance->assertDispatchedTimes($event, $times);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNotDispatched($event, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        return $instance->assertNotDispatched($event, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNothingDispatched()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        return $instance->assertNothingDispatched();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatched($event, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        return $instance->dispatched($event, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasDispatched($event)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        return $instance->hasDispatched($event);
        }
         
    }
            /**
     * 
     *
     */ 
        class File {
                    /**
         * 
         *
         * @static 
         */ 
        public static function exists($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->exists($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function missing($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->missing($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function get($path, $lock = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->get($path, $lock);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function json($path, $flags = 0, $lock = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->json($path, $flags, $lock);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sharedGet($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->sharedGet($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRequire($path, $data = [])
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->getRequire($path, $data);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function requireOnce($path, $data = [])
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->requireOnce($path, $data);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function lines($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->lines($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hash($path, $algorithm = 'md5')
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->hash($path, $algorithm);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function put($path, $contents, $lock = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->put($path, $contents, $lock);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function replace($path, $content, $mode = null)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->replace($path, $content, $mode);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function replaceInFile($search, $replace, $path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->replaceInFile($search, $replace, $path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function prepend($path, $data)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->prepend($path, $data);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function append($path, $data, $lock = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->append($path, $data, $lock);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function chmod($path, $mode = null)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->chmod($path, $mode);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function delete($paths)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->delete($paths);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function move($path, $target)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->move($path, $target);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function copy($path, $target)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->copy($path, $target);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function link($target, $link)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->link($target, $link);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function relativeLink($target, $link)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->relativeLink($target, $link);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function name($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->name($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function basename($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->basename($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dirname($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->dirname($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extension($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->extension($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function guessExtension($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->guessExtension($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function type($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->type($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mimeType($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->mimeType($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function size($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->size($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function lastModified($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->lastModified($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isDirectory($directory)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->isDirectory($directory);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isEmptyDirectory($directory, $ignoreDotFiles = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->isEmptyDirectory($directory, $ignoreDotFiles);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isReadable($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->isReadable($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isWritable($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->isWritable($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasSameHash($firstFile, $secondFile)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->hasSameHash($firstFile, $secondFile);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isFile($file)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->isFile($file);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function glob($pattern, $flags = 0)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->glob($pattern, $flags);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function files($directory, $hidden = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->files($directory, $hidden);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function allFiles($directory, $hidden = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->allFiles($directory, $hidden);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function directories($directory)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->directories($directory);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function ensureDirectoryExists($path, $mode = 493, $recursive = true)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->ensureDirectoryExists($path, $mode, $recursive);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->makeDirectory($path, $mode, $recursive, $force);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function moveDirectory($from, $to, $overwrite = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->moveDirectory($from, $to, $overwrite);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function copyDirectory($directory, $destination, $options = null)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->copyDirectory($directory, $destination, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function deleteDirectory($directory, $preserve = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->deleteDirectory($directory, $preserve);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function deleteDirectories($directory)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->deleteDirectories($directory);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function cleanDirectory($directory)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->cleanDirectory($directory);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function when($value = null, $callback = null, $default = null)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->when($value, $callback, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function unless($value = null, $callback = null, $default = null)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->unless($value, $callback, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Filesystem\Filesystem::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Filesystem\Filesystem::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Filesystem\Filesystem::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Filesystem\Filesystem::flushMacros();
        }
         
    }
            /**
     * 
     *
     */ 
        class Gate {
                    /**
         * 
         *
         * @static 
         */ 
        public static function has($ability)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->has($ability);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function allowIf($condition, $message = null, $code = null)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->allowIf($condition, $message, $code);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function denyIf($condition, $message = null, $code = null)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->denyIf($condition, $message, $code);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function define($ability, $callback)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->define($ability, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resource($name, $class, $abilities = null)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->resource($name, $class, $abilities);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function policy($class, $policy)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->policy($class, $policy);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function before($callback)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->before($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function after($callback)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->after($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function allows($ability, $arguments = [])
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->allows($ability, $arguments);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function denies($ability, $arguments = [])
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->denies($ability, $arguments);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function check($abilities, $arguments = [])
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->check($abilities, $arguments);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function any($abilities, $arguments = [])
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->any($abilities, $arguments);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function none($abilities, $arguments = [])
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->none($abilities, $arguments);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function authorize($ability, $arguments = [])
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->authorize($ability, $arguments);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function inspect($ability, $arguments = [])
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->inspect($ability, $arguments);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function raw($ability, $arguments = [])
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->raw($ability, $arguments);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPolicyFor($class)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->getPolicyFor($class);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function guessPolicyNamesUsing($callback)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->guessPolicyNamesUsing($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolvePolicy($class)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->resolvePolicy($class);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forUser($user)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->forUser($user);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function abilities()
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->abilities();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function policies()
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->policies();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function defaultDenialResponse($response)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->defaultDenialResponse($response);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function denyWithStatus($status, $message = null, $code = null)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->denyWithStatus($status, $message, $code);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function denyAsNotFound($message = null, $code = null)
        {
                        /** @var \Illuminate\Auth\Access\Gate $instance */
                        return $instance->denyAsNotFound($message, $code);
        }
         
    }
            /**
     * 
     *
     */ 
        class Hash {
                    /**
         * 
         *
         * @static 
         */ 
        public static function createBcryptDriver()
        {
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->createBcryptDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createArgonDriver()
        {
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->createArgonDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createArgon2idDriver()
        {
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->createArgon2idDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function info($hashedValue)
        {
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->info($hashedValue);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function make($value, $options = [])
        {
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->make($value, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function check($value, $hashedValue, $options = [])
        {
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->check($value, $hashedValue, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function needsRehash($hashedValue, $options = [])
        {
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->needsRehash($hashedValue, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isHashed($value)
        {
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->isHashed($value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->driver($driver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->getDrivers();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getContainer()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->getContainer();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetDrivers()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Hashing\HashManager $instance */
                        return $instance->forgetDrivers();
        }
         
    }
            /**
     * 
     *
     */ 
        class Http {
                    /**
         * 
         *
         * @static 
         */ 
        public static function globalMiddleware($middleware)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->globalMiddleware($middleware);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function globalRequestMiddleware($middleware)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->globalRequestMiddleware($middleware);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function globalResponseMiddleware($middleware)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->globalResponseMiddleware($middleware);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function response($body = null, $status = 200, $headers = [])
        {
                        return \Illuminate\Http\Client\Factory::response($body, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sequence($responses = [])
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->sequence($responses);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function fake($callback = null)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->fake($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function fakeSequence($url = '*')
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->fakeSequence($url);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stubUrl($url, $callback)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->stubUrl($url, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function preventStrayRequests($prevent = true)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->preventStrayRequests($prevent);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function allowStrayRequests()
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->allowStrayRequests();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function recordRequestResponsePair($request, $response)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->recordRequestResponsePair($request, $response);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertSent($callback)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->assertSent($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertSentInOrder($callbacks)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->assertSentInOrder($callbacks);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNotSent($callback)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->assertNotSent($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNothingSent()
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->assertNothingSent();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertSentCount($count)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->assertSentCount($count);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertSequencesAreEmpty()
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->assertSequencesAreEmpty();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function recorded($callback = null)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->recorded($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDispatcher()
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->getDispatcher();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getGlobalMiddleware()
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->getGlobalMiddleware();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Http\Client\Factory::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Http\Client\Factory::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Http\Client\Factory::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Http\Client\Factory::flushMacros();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
                        /** @var \Illuminate\Http\Client\Factory $instance */
                        return $instance->macroCall($method, $parameters);
        }
         
    }
            /**
     * 
     *
     */ 
        class Lang {
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasForLocale($key, $locale = null)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->hasForLocale($key, $locale);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function has($key, $locale = null, $fallback = true)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->has($key, $locale, $fallback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function get($key, $replace = [], $locale = null, $fallback = true)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->get($key, $replace, $locale, $fallback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function choice($key, $number, $replace = [], $locale = null)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->choice($key, $number, $replace, $locale);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addLines($lines, $locale, $namespace = '*')
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->addLines($lines, $locale, $namespace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function load($namespace, $group, $locale)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->load($namespace, $group, $locale);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function handleMissingKeysUsing($callback)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->handleMissingKeysUsing($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addNamespace($namespace, $hint)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->addNamespace($namespace, $hint);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addJsonPath($path)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->addJsonPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function parseKey($key)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->parseKey($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function determineLocalesUsing($callback)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->determineLocalesUsing($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getSelector()
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->getSelector();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setSelector($selector)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->setSelector($selector);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getLoader()
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->getLoader();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function locale()
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->locale();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getLocale()
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->getLocale();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setLocale($locale)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->setLocale($locale);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getFallback()
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->getFallback();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setFallback($fallback)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->setFallback($fallback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setLoaded($loaded)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->setLoaded($loaded);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stringable($class, $handler = null)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->stringable($class, $handler);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setParsedKey($key, $parsed)
        {            //Method inherited from \Illuminate\Support\NamespacedItemResolver         
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->setParsedKey($key, $parsed);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushParsedKeys()
        {            //Method inherited from \Illuminate\Support\NamespacedItemResolver         
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->flushParsedKeys();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Translation\Translator::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Translation\Translator::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Translation\Translator::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Translation\Translator::flushMacros();
        }
         
    }
            /**
     * 
     *
     */ 
        class Log {
                    /**
         * 
         *
         * @static 
         */ 
        public static function build($config)
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->build($config);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stack($channels, $channel = null)
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->stack($channels, $channel);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function channel($channel = null)
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->channel($channel);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function driver($driver = null)
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->driver($driver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function shareContext($context)
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->shareContext($context);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sharedContext()
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->sharedContext();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushSharedContext()
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->flushSharedContext();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->setDefaultDriver($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetChannel($driver = null)
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->forgetChannel($driver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getChannels()
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->getChannels();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function emergency($message, $context = [])
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->emergency($message, $context);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function alert($message, $context = [])
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->alert($message, $context);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function critical($message, $context = [])
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->critical($message, $context);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function error($message, $context = [])
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->error($message, $context);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function warning($message, $context = [])
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->warning($message, $context);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function notice($message, $context = [])
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->notice($message, $context);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function info($message, $context = [])
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->info($message, $context);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function debug($message, $context = [])
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->debug($message, $context);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function log($level, $message, $context = [])
        {
                        /** @var \Illuminate\Log\LogManager $instance */
                        return $instance->log($level, $message, $context);
        }
         
    }
            /**
     * 
     *
     */ 
        class Mail {
                    /**
         * 
         *
         * @static 
         */ 
        public static function mailer($name = null)
        {
                        /** @var \Illuminate\Mail\MailManager $instance */
                        return $instance->mailer($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function driver($driver = null)
        {
                        /** @var \Illuminate\Mail\MailManager $instance */
                        return $instance->driver($driver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createSymfonyTransport($config)
        {
                        /** @var \Illuminate\Mail\MailManager $instance */
                        return $instance->createSymfonyTransport($config);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Mail\MailManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Mail\MailManager $instance */
                        return $instance->setDefaultDriver($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function purge($name = null)
        {
                        /** @var \Illuminate\Mail\MailManager $instance */
                        return $instance->purge($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Mail\MailManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getApplication()
        {
                        /** @var \Illuminate\Mail\MailManager $instance */
                        return $instance->getApplication();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setApplication($app)
        {
                        /** @var \Illuminate\Mail\MailManager $instance */
                        return $instance->setApplication($app);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetMailers()
        {
                        /** @var \Illuminate\Mail\MailManager $instance */
                        return $instance->forgetMailers();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertSent($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->assertSent($mailable, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNotOutgoing($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->assertNotOutgoing($mailable, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNotSent($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->assertNotSent($mailable, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNothingOutgoing()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->assertNothingOutgoing();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNothingSent()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->assertNothingSent();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertQueued($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->assertQueued($mailable, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNotQueued($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->assertNotQueued($mailable, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNothingQueued()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->assertNothingQueued();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertSentCount($count)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->assertSentCount($count);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertQueuedCount($count)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->assertQueuedCount($count);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertOutgoingCount($count)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->assertOutgoingCount($count);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sent($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->sent($mailable, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasSent($mailable)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->hasSent($mailable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function queued($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->queued($mailable, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasQueued($mailable)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->hasQueued($mailable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function to($users)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->to($users);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function cc($users)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->cc($users);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bcc($users)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->bcc($users);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function raw($text, $callback)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->raw($text, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function send($view, $data = [], $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->send($view, $data, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function queue($view, $queue = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->queue($view, $queue);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function later($delay, $view, $queue = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->later($delay, $view, $queue);
        }
         
    }
            /**
     * 
     *
     */ 
        class Notification {
                    /**
         * 
         *
         * @static 
         */ 
        public static function send($notifiables, $notification)
        {
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->send($notifiables, $notification);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sendNow($notifiables, $notification, $channels = null)
        {
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->sendNow($notifiables, $notification, $channels);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function channel($name = null)
        {
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->channel($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function deliversVia()
        {
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->deliversVia();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function deliverVia($channel)
        {
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->deliverVia($channel);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function locale($locale)
        {
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->locale($locale);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->driver($driver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->getDrivers();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getContainer()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->getContainer();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetDrivers()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Notifications\ChannelManager $instance */
                        return $instance->forgetDrivers();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertSentOnDemand($notification, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
                        return $instance->assertSentOnDemand($notification, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertSentTo($notifiable, $notification, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
                        return $instance->assertSentTo($notifiable, $notification, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertSentOnDemandTimes($notification, $times = 1)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
                        return $instance->assertSentOnDemandTimes($notification, $times);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertSentToTimes($notifiable, $notification, $times = 1)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
                        return $instance->assertSentToTimes($notifiable, $notification, $times);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNotSentTo($notifiable, $notification, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
                        return $instance->assertNotSentTo($notifiable, $notification, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNothingSent()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
                        return $instance->assertNothingSent();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNothingSentTo($notifiable)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
                        return $instance->assertNothingSentTo($notifiable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertSentTimes($notification, $expectedCount)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
                        return $instance->assertSentTimes($notification, $expectedCount);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertCount($expectedCount)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
                        return $instance->assertCount($expectedCount);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sent($notifiable, $notification, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
                        return $instance->sent($notifiable, $notification, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasSent($notifiable, $notification)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
                        return $instance->hasSent($notifiable, $notification);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sentNotifications()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
                        return $instance->sentNotifications();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Support\Testing\Fakes\NotificationFake::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Support\Testing\Fakes\NotificationFake::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Support\Testing\Fakes\NotificationFake::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Support\Testing\Fakes\NotificationFake::flushMacros();
        }
         
    }
            /**
     * 
     *
     */ 
        class Password {
                    /**
         * 
         *
         * @static 
         */ 
        public static function broker($name = null)
        {
                        /** @var \Illuminate\Auth\Passwords\PasswordBrokerManager $instance */
                        return $instance->broker($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Auth\Passwords\PasswordBrokerManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Auth\Passwords\PasswordBrokerManager $instance */
                        return $instance->setDefaultDriver($name);
        }
         
    }
            /**
     * 
     *
     */ 
        class Process {
                    /**
         * 
         *
         * @static 
         */ 
        public static function result($output = '', $errorOutput = '', $exitCode = 0)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->result($output, $errorOutput, $exitCode);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function describe()
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->describe();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sequence($processes = [])
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->sequence($processes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function fake($callback = null)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->fake($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isRecording()
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->isRecording();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function recordIfRecording($process, $result)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->recordIfRecording($process, $result);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function record($process, $result)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->record($process, $result);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function preventStrayProcesses($prevent = true)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->preventStrayProcesses($prevent);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function preventingStrayProcesses()
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->preventingStrayProcesses();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertRan($callback)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->assertRan($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertRanTimes($callback, $times = 1)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->assertRanTimes($callback, $times);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNotRan($callback)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->assertNotRan($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertDidntRun($callback)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->assertDidntRun($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNothingRan()
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->assertNothingRan();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pool($callback)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->pool($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pipe($callback, $output = null)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->pipe($callback, $output);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function concurrently($callback, $output = null)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->concurrently($callback, $output);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function newPendingProcess()
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->newPendingProcess();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Process\Factory::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Process\Factory::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Process\Factory::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Process\Factory::flushMacros();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
                        /** @var \Illuminate\Process\Factory $instance */
                        return $instance->macroCall($method, $parameters);
        }
         
    }
            /**
     * 
     *
     */ 
        class Queue {
                    /**
         * 
         *
         * @static 
         */ 
        public static function before($callback)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->before($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function after($callback)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->after($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function exceptionOccurred($callback)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->exceptionOccurred($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function looping($callback)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->looping($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function failing($callback)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->failing($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stopping($callback)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->stopping($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function connected($name = null)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->connected($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function connection($name = null)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->connection($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($driver, $resolver)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->extend($driver, $resolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addConnector($driver, $resolver)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->addConnector($driver, $resolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->setDefaultDriver($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getName($connection = null)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->getName($connection);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getApplication()
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->getApplication();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setApplication($app)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->setApplication($app);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function except($jobsToBeQueued)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->except($jobsToBeQueued);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertPushed($job, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->assertPushed($job, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertPushedOn($queue, $job, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->assertPushedOn($queue, $job, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertPushedWithChain($job, $expectedChain = [], $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->assertPushedWithChain($job, $expectedChain, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertPushedWithoutChain($job, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->assertPushedWithoutChain($job, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertClosurePushed($callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->assertClosurePushed($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertClosureNotPushed($callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->assertClosureNotPushed($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNotPushed($job, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->assertNotPushed($job, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertNothingPushed()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->assertNothingPushed();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pushed($job, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->pushed($job, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasPushed($job)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->hasPushed($job);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function size($queue = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->size($queue);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function push($job, $data = '', $queue = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->push($job, $data, $queue);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function shouldFakeJob($job)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->shouldFakeJob($job);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pushRaw($payload, $queue = null, $options = [])
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->pushRaw($payload, $queue, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function later($delay, $job, $data = '', $queue = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->later($delay, $job, $data, $queue);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pushOn($queue, $job, $data = '')
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->pushOn($queue, $job, $data);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function laterOn($queue, $delay, $job, $data = '')
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->laterOn($queue, $delay, $job, $data);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pop($queue = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->pop($queue);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bulk($jobs, $data = '', $queue = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->bulk($jobs, $data, $queue);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pushedJobs()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->pushedJobs();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function serializeAndRestore($serializeAndRestore = true)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->serializeAndRestore($serializeAndRestore);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getConnectionName()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->getConnectionName();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setConnectionName($name)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->setConnectionName($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function readyNow($queue = null)
        {
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->readyNow($queue);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function migrateExpiredJobs($from, $to)
        {
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->migrateExpiredJobs($from, $to);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function deleteReserved($queue, $job)
        {
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->deleteReserved($queue, $job);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function deleteAndRelease($queue, $job, $delay)
        {
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->deleteAndRelease($queue, $job, $delay);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function clear($queue)
        {            //Method inherited from \Illuminate\Queue\RedisQueue         
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->clear($queue);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getQueue($queue)
        {            //Method inherited from \Illuminate\Queue\RedisQueue         
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->getQueue($queue);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getConnection()
        {            //Method inherited from \Illuminate\Queue\RedisQueue         
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->getConnection();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRedis()
        {            //Method inherited from \Illuminate\Queue\RedisQueue         
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->getRedis();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getJobTries($job)
        {            //Method inherited from \Illuminate\Queue\Queue         
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->getJobTries($job);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getJobBackoff($job)
        {            //Method inherited from \Illuminate\Queue\Queue         
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->getJobBackoff($job);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getJobExpiration($job)
        {            //Method inherited from \Illuminate\Queue\Queue         
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->getJobExpiration($job);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createPayloadUsing($callback)
        {            //Method inherited from \Illuminate\Queue\Queue         
                        return \Laravel\Horizon\RedisQueue::createPayloadUsing($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getContainer()
        {            //Method inherited from \Illuminate\Queue\Queue         
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->getContainer();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {            //Method inherited from \Illuminate\Queue\Queue         
                        /** @var \Laravel\Horizon\RedisQueue $instance */
                        return $instance->setContainer($container);
        }
         
    }
            /**
     * 
     *
     */ 
        class RateLimiter {
                    /**
         * 
         *
         * @static 
         */ 
        public static function for($name, $callback)
        {
                        /** @var \Illuminate\Cache\RateLimiter $instance */
                        return $instance->for($name, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function limiter($name)
        {
                        /** @var \Illuminate\Cache\RateLimiter $instance */
                        return $instance->limiter($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function attempt($key, $maxAttempts, $callback, $decaySeconds = 60)
        {
                        /** @var \Illuminate\Cache\RateLimiter $instance */
                        return $instance->attempt($key, $maxAttempts, $callback, $decaySeconds);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function tooManyAttempts($key, $maxAttempts)
        {
                        /** @var \Illuminate\Cache\RateLimiter $instance */
                        return $instance->tooManyAttempts($key, $maxAttempts);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hit($key, $decaySeconds = 60)
        {
                        /** @var \Illuminate\Cache\RateLimiter $instance */
                        return $instance->hit($key, $decaySeconds);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function attempts($key)
        {
                        /** @var \Illuminate\Cache\RateLimiter $instance */
                        return $instance->attempts($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resetAttempts($key)
        {
                        /** @var \Illuminate\Cache\RateLimiter $instance */
                        return $instance->resetAttempts($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function remaining($key, $maxAttempts)
        {
                        /** @var \Illuminate\Cache\RateLimiter $instance */
                        return $instance->remaining($key, $maxAttempts);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function retriesLeft($key, $maxAttempts)
        {
                        /** @var \Illuminate\Cache\RateLimiter $instance */
                        return $instance->retriesLeft($key, $maxAttempts);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function clear($key)
        {
                        /** @var \Illuminate\Cache\RateLimiter $instance */
                        return $instance->clear($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function availableIn($key)
        {
                        /** @var \Illuminate\Cache\RateLimiter $instance */
                        return $instance->availableIn($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function cleanRateLimiterKey($key)
        {
                        /** @var \Illuminate\Cache\RateLimiter $instance */
                        return $instance->cleanRateLimiterKey($key);
        }
         
    }
            /**
     * 
     *
     */ 
        class Redirect {
                    /**
         * 
         *
         * @static 
         */ 
        public static function back($status = 302, $headers = [], $fallback = false)
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->back($status, $headers, $fallback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function refresh($status = 302, $headers = [])
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->refresh($status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function guest($path, $status = 302, $headers = [], $secure = null)
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->guest($path, $status, $headers, $secure);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function intended($default = '/', $status = 302, $headers = [], $secure = null)
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->intended($default, $status, $headers, $secure);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function to($path, $status = 302, $headers = [], $secure = null)
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->to($path, $status, $headers, $secure);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function away($path, $status = 302, $headers = [])
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->away($path, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function secure($path, $status = 302, $headers = [])
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->secure($path, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function route($route, $parameters = [], $status = 302, $headers = [])
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->route($route, $parameters, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function signedRoute($route, $parameters = [], $expiration = null, $status = 302, $headers = [])
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->signedRoute($route, $parameters, $expiration, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function temporarySignedRoute($route, $expiration, $parameters = [], $status = 302, $headers = [])
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->temporarySignedRoute($route, $expiration, $parameters, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function action($action, $parameters = [], $status = 302, $headers = [])
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->action($action, $parameters, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getUrlGenerator()
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->getUrlGenerator();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setSession($session)
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->setSession($session);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getIntendedUrl()
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->getIntendedUrl();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setIntendedUrl($url)
        {
                        /** @var \Illuminate\Routing\Redirector $instance */
                        return $instance->setIntendedUrl($url);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Routing\Redirector::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Routing\Redirector::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Routing\Redirector::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Routing\Redirector::flushMacros();
        }
         
    }
            /**
     * 
     *
     */ 
        class Request {
                    /**
         * 
         *
         * @static 
         */ 
        public static function capture()
        {
                        return \Illuminate\Http\Request::capture();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function instance()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->instance();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function method()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->method();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function root()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->root();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function url()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->url();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function fullUrl()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrl();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function fullUrlWithQuery($query)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrlWithQuery($query);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function fullUrlWithoutQuery($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrlWithoutQuery($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function path()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->path();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function decodedPath()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->decodedPath();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function segment($index, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->segment($index, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function segments()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->segments();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function is(...$patterns)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->is(...$patterns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function routeIs(...$patterns)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->routeIs(...$patterns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function fullUrlIs(...$patterns)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrlIs(...$patterns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function host()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->host();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function httpHost()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->httpHost();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function schemeAndHttpHost()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->schemeAndHttpHost();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function ajax()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->ajax();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pjax()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->pjax();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function prefetch()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->prefetch();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function secure()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->secure();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function ip()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->ip();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function ips()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->ips();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function userAgent()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->userAgent();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function merge($input)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->merge($input);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mergeIfMissing($input)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->mergeIfMissing($input);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function replace($input)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->replace($input);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function get($key, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function json($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->json($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createFrom($from, $to = null)
        {
                        return \Illuminate\Http\Request::createFrom($from, $to);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createFromBase($request)
        {
                        return \Illuminate\Http\Request::createFromBase($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasSession($skipIfUninitialized = false)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasSession($skipIfUninitialized);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getSession()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getSession();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function session()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->session();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setLaravelSession($session)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setLaravelSession($session);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRequestLocale($locale)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setRequestLocale($locale);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultRequestLocale($locale)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setDefaultRequestLocale($locale);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function user($guard = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->user($guard);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function route($param = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->route($param, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function fingerprint()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fingerprint();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setJson($json)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setJson($json);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getUserResolver()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUserResolver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setUserResolver($callback)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setUserResolver($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRouteResolver()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRouteResolver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRouteResolver($callback)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setRouteResolver($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function toArray()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->toArray();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetExists($offset)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->offsetExists($offset);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetGet($offset)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->offsetGet($offset);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetSet($offset, $value)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->offsetSet($offset, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetUnset($offset)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->offsetUnset($offset);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function initialize($query = [], $request = [], $attributes = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createFromGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::createFromGlobals();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function create($uri, $method = 'GET', $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setFactory($callable)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setFactory($callable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function overrideGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->overrideGlobals();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setTrustedProxies($proxies, $trustedHeaderSet)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setTrustedProxies($proxies, $trustedHeaderSet);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getTrustedProxies()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedProxies();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getTrustedHeaderSet()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedHeaderSet();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setTrustedHosts($hostPatterns)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getTrustedHosts()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedHosts();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function normalizeQueryString($qs)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function enableHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasPreviousSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasPreviousSession();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setSession($session)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setSession($session);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setSessionFactory($factory)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setSessionFactory($factory);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getClientIps()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getClientIps();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getClientIp()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getClientIp();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getScriptName()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getScriptName();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPathInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPathInfo();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getBasePath()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getBasePath();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getBaseUrl()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getBaseUrl();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getScheme()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getScheme();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPort()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPort();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getUser()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUser();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPassword()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPassword();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getUserInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUserInfo();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getHttpHost();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRequestUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRequestUri();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getSchemeAndHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getSchemeAndHttpHost();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUri();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUriForPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRelativeUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRelativeUriForPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getQueryString()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getQueryString();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isSecure()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isSecure();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getHost();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setMethod($method);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getMethod();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRealMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRealMethod();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getMimeType($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getMimeType($format);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getMimeTypes($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getMimeTypes($format);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getFormat($mimeType)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getFormat($mimeType);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setFormat($format, $mimeTypes)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setFormat($format, $mimeTypes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRequestFormat($default = 'html')
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRequestFormat($default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRequestFormat($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setRequestFormat($format);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getContentType()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getContentType();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getContentTypeFormat()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getContentTypeFormat();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setDefaultLocale($locale);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getDefaultLocale();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setLocale($locale);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getLocale();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethod($method);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isMethodSafe()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethodSafe();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isMethodIdempotent()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethodIdempotent();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isMethodCacheable()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethodCacheable();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getProtocolVersion()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getProtocolVersion();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getContent($asResource = false)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getContent($asResource);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPayload()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPayload();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getETags()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getETags();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isNoCache()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isNoCache();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPreferredFormat($default = 'html')
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPreferredFormat($default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPreferredLanguage($locales = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPreferredLanguage($locales);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getLanguages()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getLanguages();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCharsets()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getCharsets();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getEncodings()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getEncodings();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getAcceptableContentTypes()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getAcceptableContentTypes();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isXmlHttpRequest()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isXmlHttpRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function preferSafeContent()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->preferSafeContent();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isFromTrustedProxy()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isFromTrustedProxy();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function filterPrecognitiveRules($rules)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->filterPrecognitiveRules($rules);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isAttemptingPrecognition()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isAttemptingPrecognition();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isPrecognitive()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isPrecognitive();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isJson();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function expectsJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->expectsJson();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function wantsJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->wantsJson();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function accepts($contentTypes)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->accepts($contentTypes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function prefers($contentTypes)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->prefers($contentTypes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function acceptsAnyContentType()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->acceptsAnyContentType();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function acceptsJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->acceptsJson();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function acceptsHtml()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->acceptsHtml();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function matchesType($actual, $type)
        {
                        return \Illuminate\Http\Request::matchesType($actual, $type);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function format($default = 'html')
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->format($default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function old($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->old($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flash()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->flash();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flashOnly($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->flashOnly($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flashExcept($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->flashExcept($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flush()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->flush();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function server($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->server($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasHeader($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasHeader($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function header($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->header($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bearerToken()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->bearerToken();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function exists($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->exists($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->has($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasAny($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasAny($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function whenHas($key, $callback, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->whenHas($key, $callback, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function filled($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->filled($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isNotFilled($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isNotFilled($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function anyFilled($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->anyFilled($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function whenFilled($key, $callback, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->whenFilled($key, $callback, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function missing($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->missing($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function whenMissing($key, $callback, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->whenMissing($key, $callback, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function keys()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->keys();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function all($keys = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->all($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function input($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->input($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function str($key, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->str($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function string($key, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->string($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function boolean($key = null, $default = false)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->boolean($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function integer($key, $default = 0)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->integer($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function float($key, $default = 0.0)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->float($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function date($key, $format = null, $tz = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->date($key, $format, $tz);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function enum($key, $enumClass)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->enum($key, $enumClass);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function collect($key = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->collect($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function only($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->only($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function except($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->except($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function query($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->query($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function post($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->post($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasCookie($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasCookie($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function cookie($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->cookie($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function allFiles()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->allFiles();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasFile($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasFile($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function file($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->file($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dd(...$keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->dd(...$keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dump($keys = [])
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->dump($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Http\Request::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Http\Request::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Http\Request::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Http\Request::flushMacros();
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validate($rules, ...$params)
        {
                        return \Illuminate\Http\Request::validate($rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
                        return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignature($absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignature($absolute);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static 
         */ 
        public static function hasValidRelativeSignature()
        {
                        return \Illuminate\Http\Request::hasValidRelativeSignature();
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }
         
    }
            /**
     * 
     *
     */ 
        class Response {
                    /**
         * 
         *
         * @static 
         */ 
        public static function make($content = '', $status = 200, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->make($content, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function noContent($status = 204, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->noContent($status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function view($view, $data = [], $status = 200, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->view($view, $data, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function json($data = [], $status = 200, $headers = [], $options = 0)
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->json($data, $status, $headers, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function jsonp($callback, $data = [], $status = 200, $headers = [], $options = 0)
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->jsonp($callback, $data, $status, $headers, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stream($callback, $status = 200, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->stream($callback, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function streamDownload($callback, $name = null, $headers = [], $disposition = 'attachment')
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->streamDownload($callback, $name, $headers, $disposition);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function download($file, $name = null, $headers = [], $disposition = 'attachment')
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->download($file, $name, $headers, $disposition);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function file($file, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->file($file, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function redirectTo($path, $status = 302, $headers = [], $secure = null)
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->redirectTo($path, $status, $headers, $secure);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function redirectToRoute($route, $parameters = [], $status = 302, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->redirectToRoute($route, $parameters, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function redirectToAction($action, $parameters = [], $status = 302, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->redirectToAction($action, $parameters, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function redirectGuest($path, $status = 302, $headers = [], $secure = null)
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->redirectGuest($path, $status, $headers, $secure);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function redirectToIntended($default = '/', $status = 302, $headers = [], $secure = null)
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->redirectToIntended($default, $status, $headers, $secure);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Routing\ResponseFactory::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Routing\ResponseFactory::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Routing\ResponseFactory::flushMacros();
        }
         
    }
            /**
     * 
     *
     */ 
        class Route {
                    /**
         * 
         *
         * @static 
         */ 
        public static function get($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->get($uri, $action);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function post($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->post($uri, $action);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function put($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->put($uri, $action);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function patch($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->patch($uri, $action);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function delete($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->delete($uri, $action);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function options($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->options($uri, $action);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function any($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->any($uri, $action);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function fallback($action)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->fallback($action);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function redirect($uri, $destination, $status = 302)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->redirect($uri, $destination, $status);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function permanentRedirect($uri, $destination)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->permanentRedirect($uri, $destination);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function view($uri, $view, $data = [], $status = 200, $headers = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->view($uri, $view, $data, $status, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function match($methods, $uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->match($methods, $uri, $action);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resources($resources, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->resources($resources, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resource($name, $controller, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->resource($name, $controller, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function apiResources($resources, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->apiResources($resources, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function apiResource($name, $controller, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->apiResource($name, $controller, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function singletons($singletons, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->singletons($singletons, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function singleton($name, $controller, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->singleton($name, $controller, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function apiSingletons($singletons, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->apiSingletons($singletons, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function apiSingleton($name, $controller, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->apiSingleton($name, $controller, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function group($attributes, $routes)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->group($attributes, $routes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mergeWithLastGroup($new, $prependExistingPrefix = true)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->mergeWithLastGroup($new, $prependExistingPrefix);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getLastGroupPrefix()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getLastGroupPrefix();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addRoute($methods, $uri, $action)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->addRoute($methods, $uri, $action);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function newRoute($methods, $uri, $action)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->newRoute($methods, $uri, $action);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function respondWithRoute($name)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->respondWithRoute($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatch($request)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->dispatch($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dispatchToRoute($request)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->dispatchToRoute($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function gatherRouteMiddleware($route)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->gatherRouteMiddleware($route);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveMiddleware($middleware, $excluded = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->resolveMiddleware($middleware, $excluded);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function prepareResponse($request, $response)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->prepareResponse($request, $response);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function toResponse($request, $response)
        {
                        return \Illuminate\Routing\Router::toResponse($request, $response);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function substituteBindings($route)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->substituteBindings($route);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function substituteImplicitBindings($route)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->substituteImplicitBindings($route);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function substituteImplicitBindingsUsing($callback)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->substituteImplicitBindingsUsing($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function matched($callback)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->matched($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getMiddleware()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getMiddleware();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function aliasMiddleware($name, $class)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->aliasMiddleware($name, $class);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMiddlewareGroup($name)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->hasMiddlewareGroup($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getMiddlewareGroups()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getMiddlewareGroups();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function middlewareGroup($name, $middleware)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->middlewareGroup($name, $middleware);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function prependMiddlewareToGroup($group, $middleware)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->prependMiddlewareToGroup($group, $middleware);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pushMiddlewareToGroup($group, $middleware)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->pushMiddlewareToGroup($group, $middleware);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function removeMiddlewareFromGroup($group, $middleware)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->removeMiddlewareFromGroup($group, $middleware);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMiddlewareGroups()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->flushMiddlewareGroups();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function bind($key, $binder)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->bind($key, $binder);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function model($key, $class, $callback = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->model($key, $class, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getBindingCallback($key)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getBindingCallback($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPatterns()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getPatterns();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pattern($key, $pattern)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->pattern($key, $pattern);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function patterns($patterns)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->patterns($patterns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasGroupStack()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->hasGroupStack();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getGroupStack()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getGroupStack();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function input($key, $default = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->input($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCurrentRequest()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getCurrentRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCurrentRoute()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getCurrentRoute();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function current()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->current();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function has($name)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->has($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function currentRouteName()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->currentRouteName();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function is(...$patterns)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->is(...$patterns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function currentRouteNamed(...$patterns)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->currentRouteNamed(...$patterns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function currentRouteAction()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->currentRouteAction();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function uses(...$patterns)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->uses(...$patterns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function currentRouteUses($action)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->currentRouteUses($action);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function singularResourceParameters($singular = true)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->singularResourceParameters($singular);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resourceParameters($parameters = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->resourceParameters($parameters);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resourceVerbs($verbs = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->resourceVerbs($verbs);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRoutes()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getRoutes();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRoutes($routes)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->setRoutes($routes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setCompiledRoutes($routes)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->setCompiledRoutes($routes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function uniqueMiddleware($middleware)
        {
                        return \Illuminate\Routing\Router::uniqueMiddleware($middleware);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Routing\Router::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Routing\Router::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Routing\Router::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Routing\Router::flushMacros();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->macroCall($method, $parameters);
        }
         
    }
            /**
     * 
     *
     */ 
        class Schema {
                    /**
         * 
         *
         * @static 
         */ 
        public static function getConnection()
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->getConnection();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createDatabase($name)
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->createDatabase($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropDatabaseIfExists($name)
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropDatabaseIfExists($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasTable($table)
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->hasTable($table);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getTypes()
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->getTypes();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getAllTables()
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->getAllTables();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getAllViews()
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->getAllViews();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropAllTables()
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropAllTables();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropAllViews()
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropAllViews();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getAllTypes()
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->getAllTypes();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropAllTypes()
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropAllTypes();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getColumns($table)
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->getColumns($table);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getIndexes($table)
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->getIndexes($table);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getForeignKeys($table)
        {            //Method inherited from \Illuminate\Database\Schema\PostgresBuilder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->getForeignKeys($table);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function defaultStringLength($length)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        return \Tpetry\PostgresqlEnhanced\Schema\Builder::defaultStringLength($length);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function defaultMorphKeyType($type)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        return \Tpetry\PostgresqlEnhanced\Schema\Builder::defaultMorphKeyType($type);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function morphUsingUuids()
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        return \Tpetry\PostgresqlEnhanced\Schema\Builder::morphUsingUuids();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function morphUsingUlids()
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        return \Tpetry\PostgresqlEnhanced\Schema\Builder::morphUsingUlids();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useNativeSchemaOperationsIfPossible($value = true)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        return \Tpetry\PostgresqlEnhanced\Schema\Builder::useNativeSchemaOperationsIfPossible($value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasView($view)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->hasView($view);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getTables()
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->getTables();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getViews()
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->getViews();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasColumn($table, $column)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->hasColumn($table, $column);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasColumns($table, $columns)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->hasColumns($table, $columns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function whenTableHasColumn($table, $column, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->whenTableHasColumn($table, $column, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function whenTableDoesntHaveColumn($table, $column, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->whenTableDoesntHaveColumn($table, $column, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getColumnType($table, $column, $fullDefinition = false)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->getColumnType($table, $column, $fullDefinition);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getColumnListing($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->getColumnListing($table);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function table($table, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->table($table, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function create($table, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->create($table, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function drop($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->drop($table);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropIfExists($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropIfExists($table);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropColumns($table, $columns)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropColumns($table, $columns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function rename($from, $to)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->rename($from, $to);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function enableForeignKeyConstraints()
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->enableForeignKeyConstraints();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function disableForeignKeyConstraints()
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->disableForeignKeyConstraints();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withoutForeignKeyConstraints($callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->withoutForeignKeyConstraints($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setConnection($connection)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->setConnection($connection);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function blueprintResolver($resolver)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->blueprintResolver($resolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function changeDomainConstraint($name, $check)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->changeDomainConstraint($name, $check);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createDomain($name, $type, $check = null)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->createDomain($name, $type, $check);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropDomain(...$name)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropDomain(...$name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropDomainIfExists(...$name)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropDomainIfExists(...$name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createExtension($name, $schema = null)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->createExtension($name, $schema);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createExtensionIfNotExists($name, $schema = null)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->createExtensionIfNotExists($name, $schema);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropExtension(...$name)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropExtension(...$name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropExtensionIfExists(...$name)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropExtensionIfExists(...$name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createFunction($name, $parameters, $return, $language, $body, $options = [])
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->createFunction($name, $parameters, $return, $language, $body, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createFunctionOrReplace($name, $parameters, $return, $language, $body, $options = [])
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->createFunctionOrReplace($name, $parameters, $return, $language, $body, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropFunction($name, $arguments = null)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropFunction($name, $arguments);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropFunctionIfExists($name, $arguments = null)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropFunctionIfExists($name, $arguments);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createMaterializedView($name, $query, $withData = true, $columns = [])
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->createMaterializedView($name, $query, $withData, $columns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createRecursiveView($name, $query, $columns)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->createRecursiveView($name, $query, $columns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createRecursiveViewOrReplace($name, $query, $columns)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->createRecursiveViewOrReplace($name, $query, $columns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createView($name, $query, $columns = [])
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->createView($name, $query, $columns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createViewOrReplace($name, $query, $columns = [])
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->createViewOrReplace($name, $query, $columns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropMaterializedView(...$name)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropMaterializedView(...$name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropMaterializedViewIfExists(...$name)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropMaterializedViewIfExists(...$name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropView(...$name)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropView(...$name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dropViewIfExists(...$name)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->dropViewIfExists(...$name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function refreshMaterializedView($name, $concurrently = false, $withData = true)
        {
                        /** @var \Tpetry\PostgresqlEnhanced\Schema\Builder $instance */
                        return $instance->refreshMaterializedView($name, $concurrently, $withData);
        }
         
    }
            /**
     * 
     *
     */ 
        class Session {
                    /**
         * 
         *
         * @static 
         */ 
        public static function shouldBlock()
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->shouldBlock();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function blockDriver()
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->blockDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function defaultRouteBlockLockSeconds()
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->defaultRouteBlockLockSeconds();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function defaultRouteBlockWaitSeconds()
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->defaultRouteBlockWaitSeconds();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getSessionConfig()
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->getSessionConfig();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->setDefaultDriver($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->driver($driver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->getDrivers();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getContainer()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->getContainer();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetDrivers()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->forgetDrivers();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function start()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->start();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function save()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->save();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function ageFlashData()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->ageFlashData();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function all()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->all();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function only($keys)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->only($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function exists($key)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->exists($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function missing($key)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->missing($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->has($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function get($key, $default = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->pull($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasOldInput($key = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->hasOldInput($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getOldInput($key = null, $default = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->getOldInput($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function replace($attributes)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->replace($attributes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function put($key, $value = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->put($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function remember($key, $callback)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->remember($key, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function push($key, $value)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->push($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function increment($key, $amount = 1)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->increment($key, $amount);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function decrement($key, $amount = 1)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->decrement($key, $amount);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flash($key, $value = true)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->flash($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function now($key, $value)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->now($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reflash()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->reflash();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function keep($keys = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->keep($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flashInput($value)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->flashInput($value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function remove($key)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->remove($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forget($keys)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->forget($keys);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flush()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->flush();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function invalidate()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->invalidate();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function regenerate($destroy = false)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->regenerate($destroy);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function migrate($destroy = false)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->migrate($destroy);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isStarted()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->isStarted();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getName()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->getName();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setName($name)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->setName($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getId()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->getId();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setId($id)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->setId($id);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isValidId($id)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->isValidId($id);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setExists($value)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->setExists($value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function token()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->token();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function regenerateToken()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->regenerateToken();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function previousUrl()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->previousUrl();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setPreviousUrl($url)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->setPreviousUrl($url);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function passwordConfirmed()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->passwordConfirmed();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getHandler()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->getHandler();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setHandler($handler)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->setHandler($handler);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function handlerNeedsRequest()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->handlerNeedsRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRequestOnHandler($request)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->setRequestOnHandler($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Session\Store::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Session\Store::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Session\Store::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Session\Store::flushMacros();
        }
         
    }
            /**
     * 
     *
     */ 
        class Storage {
                    /**
         * 
         *
         * @static 
         */ 
        public static function drive($name = null)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->drive($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function disk($name = null)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->disk($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function cloud()
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->cloud();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function build($config)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->build($config);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createLocalDriver($config)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->createLocalDriver($config);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createFtpDriver($config)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->createFtpDriver($config);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createSftpDriver($config)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->createSftpDriver($config);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createS3Driver($config)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->createS3Driver($config);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createScopedDriver($config)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->createScopedDriver($config);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function set($name, $disk)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->set($name, $disk);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultCloudDriver()
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->getDefaultCloudDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forgetDisk($disk)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->forgetDisk($disk);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function purge($name = null)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->purge($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setApplication($app)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->setApplication($app);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertExists($path, $content = null)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->assertExists($path, $content);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertMissing($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->assertMissing($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assertDirectoryEmpty($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->assertDirectoryEmpty($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function exists($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->exists($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function missing($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->missing($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function fileExists($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->fileExists($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function fileMissing($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->fileMissing($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function directoryExists($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->directoryExists($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function directoryMissing($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->directoryMissing($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function path($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->path($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function get($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->get($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function json($path, $flags = 0)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->json($path, $flags);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function response($path, $name = null, $headers = [], $disposition = 'inline')
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->response($path, $name, $headers, $disposition);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function download($path, $name = null, $headers = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->download($path, $name, $headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function put($path, $contents, $options = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->put($path, $contents, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function putFile($path, $file = null, $options = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->putFile($path, $file, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function putFileAs($path, $file, $name = null, $options = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->putFileAs($path, $file, $name, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getVisibility($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->getVisibility($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setVisibility($path, $visibility)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->setVisibility($path, $visibility);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function prepend($path, $data, $separator = '
')
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->prepend($path, $data, $separator);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function append($path, $data, $separator = '
')
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->append($path, $data, $separator);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function delete($paths)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->delete($paths);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function copy($from, $to)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->copy($from, $to);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function move($from, $to)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->move($from, $to);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function size($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->size($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function checksum($path, $options = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->checksum($path, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mimeType($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->mimeType($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function lastModified($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->lastModified($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function readStream($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->readStream($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function writeStream($path, $resource, $options = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->writeStream($path, $resource, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function url($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->url($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function providesTemporaryUrls()
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->providesTemporaryUrls();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function temporaryUrl($path, $expiration, $options = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->temporaryUrl($path, $expiration, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function temporaryUploadUrl($path, $expiration, $options = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->temporaryUploadUrl($path, $expiration, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function files($directory = null, $recursive = false)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->files($directory, $recursive);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function allFiles($directory = null)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->allFiles($directory);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function directories($directory = null, $recursive = false)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->directories($directory, $recursive);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function allDirectories($directory = null)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->allDirectories($directory);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function makeDirectory($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->makeDirectory($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function deleteDirectory($directory)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->deleteDirectory($directory);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDriver()
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->getDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getAdapter()
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->getAdapter();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getConfig()
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->getConfig();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function buildTemporaryUrlsUsing($callback)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->buildTemporaryUrlsUsing($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function when($value = null, $callback = null, $default = null)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->when($value, $callback, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function unless($value = null, $callback = null, $default = null)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->unless($value, $callback, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Filesystem\FilesystemAdapter::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Filesystem\FilesystemAdapter::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Filesystem\FilesystemAdapter::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Filesystem\FilesystemAdapter::flushMacros();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->macroCall($method, $parameters);
        }
         
    }
            /**
     * 
     *
     */ 
        class URL {
                    /**
         * 
         *
         * @static 
         */ 
        public static function full()
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->full();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function current()
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->current();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function previous($fallback = false)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->previous($fallback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function previousPath($fallback = false)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->previousPath($fallback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function to($path, $extra = [], $secure = null)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->to($path, $extra, $secure);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function secure($path, $parameters = [])
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->secure($path, $parameters);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function asset($path, $secure = null)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->asset($path, $secure);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function secureAsset($path)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->secureAsset($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function assetFrom($root, $path, $secure = null)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->assetFrom($root, $path, $secure);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function formatScheme($secure = null)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->formatScheme($secure);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function signedRoute($name, $parameters = [], $expiration = null, $absolute = true)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->signedRoute($name, $parameters, $expiration, $absolute);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function temporarySignedRoute($name, $expiration, $parameters = [], $absolute = true)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->temporarySignedRoute($name, $expiration, $parameters, $absolute);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasValidSignature($request, $absolute = true, $ignoreQuery = [])
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->hasValidSignature($request, $absolute, $ignoreQuery);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasValidRelativeSignature($request, $ignoreQuery = [])
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->hasValidRelativeSignature($request, $ignoreQuery);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasCorrectSignature($request, $absolute = true, $ignoreQuery = [])
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->hasCorrectSignature($request, $absolute, $ignoreQuery);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function signatureHasNotExpired($request)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->signatureHasNotExpired($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function route($name, $parameters = [], $absolute = true)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->route($name, $parameters, $absolute);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function toRoute($route, $parameters, $absolute)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->toRoute($route, $parameters, $absolute);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function action($action, $parameters = [], $absolute = true)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->action($action, $parameters, $absolute);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function formatParameters($parameters)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->formatParameters($parameters);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function formatRoot($scheme, $root = null)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->formatRoot($scheme, $root);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function format($root, $path, $route = null)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->format($root, $path, $route);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isValidUrl($path)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->isValidUrl($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function defaults($defaults)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->defaults($defaults);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDefaultParameters()
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->getDefaultParameters();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forceScheme($scheme)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->forceScheme($scheme);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forceRootUrl($root)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->forceRootUrl($root);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function formatHostUsing($callback)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->formatHostUsing($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function formatPathUsing($callback)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->formatPathUsing($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function pathFormatter()
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->pathFormatter();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRequest()
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->getRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRequest($request)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->setRequest($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRoutes($routes)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->setRoutes($routes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setSessionResolver($sessionResolver)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->setSessionResolver($sessionResolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setKeyResolver($keyResolver)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->setKeyResolver($keyResolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withKeyResolver($keyResolver)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->withKeyResolver($keyResolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveMissingNamedRoutesUsing($missingNamedRouteResolver)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->resolveMissingNamedRoutesUsing($missingNamedRouteResolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRootControllerNamespace()
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->getRootControllerNamespace();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRootControllerNamespace($rootNamespace)
        {
                        /** @var \Illuminate\Routing\UrlGenerator $instance */
                        return $instance->setRootControllerNamespace($rootNamespace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Routing\UrlGenerator::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Routing\UrlGenerator::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Routing\UrlGenerator::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Routing\UrlGenerator::flushMacros();
        }
         
    }
            /**
     * 
     *
     */ 
        class Validator {
                    /**
         * 
         *
         * @static 
         */ 
        public static function make($data, $rules, $messages = [], $attributes = [])
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->make($data, $rules, $messages, $attributes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function validate($data, $rules, $messages = [], $attributes = [])
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->validate($data, $rules, $messages, $attributes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extend($rule, $extension, $message = null)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->extend($rule, $extension, $message);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extendImplicit($rule, $extension, $message = null)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->extendImplicit($rule, $extension, $message);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extendDependent($rule, $extension, $message = null)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->extendDependent($rule, $extension, $message);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function replacer($rule, $replacer)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->replacer($rule, $replacer);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function includeUnvalidatedArrayKeys()
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->includeUnvalidatedArrayKeys();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function excludeUnvalidatedArrayKeys()
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->excludeUnvalidatedArrayKeys();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolver($resolver)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->resolver($resolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getTranslator()
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->getTranslator();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPresenceVerifier()
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->getPresenceVerifier();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setPresenceVerifier($presenceVerifier)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->setPresenceVerifier($presenceVerifier);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getContainer()
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->getContainer();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->setContainer($container);
        }
         
    }
            /**
     * 
     *
     */ 
        class View {
                    /**
         * 
         *
         * @static 
         */ 
        public static function file($path, $data = [], $mergeData = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->file($path, $data, $mergeData);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function make($view, $data = [], $mergeData = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->make($view, $data, $mergeData);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function first($views, $data = [], $mergeData = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->first($views, $data, $mergeData);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function renderWhen($condition, $view, $data = [], $mergeData = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->renderWhen($condition, $view, $data, $mergeData);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function renderUnless($condition, $view, $data = [], $mergeData = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->renderUnless($condition, $view, $data, $mergeData);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function renderEach($view, $data, $iterator, $empty = 'raw|')
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->renderEach($view, $data, $iterator, $empty);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function exists($view)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->exists($view);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getEngineFromPath($path)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getEngineFromPath($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function share($key, $value = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->share($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function incrementRender()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->incrementRender();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function decrementRender()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->decrementRender();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function doneRendering()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->doneRendering();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasRenderedOnce($id)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->hasRenderedOnce($id);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function markAsRenderedOnce($id)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->markAsRenderedOnce($id);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addLocation($location)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->addLocation($location);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addNamespace($namespace, $hints)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->addNamespace($namespace, $hints);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function prependNamespace($namespace, $hints)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->prependNamespace($namespace, $hints);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function replaceNamespace($namespace, $hints)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->replaceNamespace($namespace, $hints);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addExtension($extension, $engine, $resolver = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->addExtension($extension, $engine, $resolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushState()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->flushState();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushStateIfDoneRendering()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->flushStateIfDoneRendering();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getExtensions()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getExtensions();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getEngineResolver()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getEngineResolver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getFinder()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getFinder();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setFinder($finder)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->setFinder($finder);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushFinderCache()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->flushFinderCache();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDispatcher()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getDispatcher();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setDispatcher($events)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->setDispatcher($events);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getContainer()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getContainer();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function shared($key, $default = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->shared($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getShared()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getShared();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\View\Factory::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\View\Factory::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\View\Factory::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\View\Factory::flushMacros();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function startComponent($view, $data = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->startComponent($view, $data);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function startComponentFirst($names, $data = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->startComponentFirst($names, $data);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function renderComponent()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->renderComponent();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getConsumableComponentData($key, $default = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getConsumableComponentData($key, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function slot($name, $content = null, $attributes = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->slot($name, $content, $attributes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function endSlot()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->endSlot();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function creator($views, $callback)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->creator($views, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function composers($composers)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->composers($composers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function composer($views, $callback)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->composer($views, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function callComposer($view)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->callComposer($view);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function callCreator($view)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->callCreator($view);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function startFragment($fragment)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->startFragment($fragment);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stopFragment()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->stopFragment();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getFragment($name, $default = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getFragment($name, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getFragments()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getFragments();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushFragments()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->flushFragments();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function startSection($section, $content = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->startSection($section, $content);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function inject($section, $content)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->inject($section, $content);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function yieldSection()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->yieldSection();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stopSection($overwrite = false)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->stopSection($overwrite);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function appendSection()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->appendSection();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function yieldContent($section, $default = '')
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->yieldContent($section, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function parentPlaceholder($section = '')
        {
                        return \Illuminate\View\Factory::parentPlaceholder($section);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasSection($name)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->hasSection($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sectionMissing($name)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->sectionMissing($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getSection($name, $default = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getSection($name, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getSections()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getSections();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushSections()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->flushSections();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addLoop($data)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->addLoop($data);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function incrementLoopIndices()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->incrementLoopIndices();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function popLoop()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->popLoop();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getLastLoop()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getLastLoop();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getLoopStack()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getLoopStack();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function startPush($section, $content = '')
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->startPush($section, $content);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stopPush()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->stopPush();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function startPrepend($section, $content = '')
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->startPrepend($section, $content);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stopPrepend()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->stopPrepend();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function yieldPushContent($section, $default = '')
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->yieldPushContent($section, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushStacks()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->flushStacks();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function startTranslation($replacements = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->startTranslation($replacements);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function renderTranslation()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->renderTranslation();
        }
         
    }
            /**
     * 
     *
     */ 
        class Vite {
                    /**
         * 
         *
         * @static 
         */ 
        public static function preloadedAssets()
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->preloadedAssets();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function cspNonce()
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->cspNonce();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useCspNonce($nonce = null)
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->useCspNonce($nonce);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useIntegrityKey($key)
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->useIntegrityKey($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withEntryPoints($entryPoints)
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->withEntryPoints($entryPoints);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useManifestFilename($filename)
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->useManifestFilename($filename);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hotFile()
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->hotFile();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useHotFile($path)
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->useHotFile($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useBuildDirectory($path)
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->useBuildDirectory($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useScriptTagAttributes($attributes)
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->useScriptTagAttributes($attributes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useStyleTagAttributes($attributes)
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->useStyleTagAttributes($attributes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function usePreloadTagAttributes($attributes)
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->usePreloadTagAttributes($attributes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reactRefresh()
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->reactRefresh();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function asset($asset, $buildDirectory = null)
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->asset($asset, $buildDirectory);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function content($asset, $buildDirectory = null)
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->content($asset, $buildDirectory);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function manifestHash($buildDirectory = null)
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->manifestHash($buildDirectory);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isRunningHot()
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->isRunningHot();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function toHtml()
        {
                        /** @var \Illuminate\Foundation\Vite $instance */
                        return $instance->toHtml();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        return \Illuminate\Foundation\Vite::macro($name, $macro);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        return \Illuminate\Foundation\Vite::mixin($mixin, $replace);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Foundation\Vite::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushMacros()
        {
                        return \Illuminate\Foundation\Vite::flushMacros();
        }
         
    }
     
}

    namespace Illuminate\Support { 
            /**
     * 
     *
     */ 
        class Arr {
         
    }
            /**
     * 
     *
     */ 
        class Js {
         
    }
            /**
     * 
     *
     */ 
        class Number {
         
    }
            /**
     * 
     *
     */ 
        class Str {
                    /**
         * 
         *
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param string $html
         * @return string 
         * @static 
         */ 
        public static function sanitizeHtml($html)
        {
                        return \Illuminate\Support\Str::sanitizeHtml($html);
        }
                    /**
         * 
         *
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function ucwords($value)
        {
                        return \Illuminate\Support\Str::ucwords($value);
        }
         
    }
            /**
     * 
     *
     */ 
        class Collection {
                    /**
         * 
         *
         * @see \Barryvdh\Debugbar\ServiceProvider::register()
         * @static 
         */ 
        public static function debug()
        {
                        return \Illuminate\Support\Collection::debug();
        }
         
    }
            /**
     * 
     *
     */ 
        class Stringable {
                    /**
         * 
         *
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @return \Illuminate\Support\Stringable 
         * @static 
         */ 
        public static function sanitizeHtml()
        {
                        return \Illuminate\Support\Stringable::sanitizeHtml();
        }
                    /**
         * 
         *
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @return \Illuminate\Support\Stringable 
         * @static 
         */ 
        public static function ucwords()
        {
                        return \Illuminate\Support\Stringable::ucwords();
        }
         
    }
     
}

        namespace Barryvdh\Debugbar\Facades { 
            /**
     * 
     *
     */ 
        class Debugbar {
                    /**
         * 
         *
         * @static 
         */ 
        public static function enable()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->enable();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function boot()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->boot();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function shouldCollect($name, $default = false)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->shouldCollect($name, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addCollector($collector)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addCollector($collector);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function handleError($level, $message, $file = '', $line = 0, $context = [])
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->handleError($level, $message, $file, $line, $context);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function startMeasure($name, $label = null)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->startMeasure($name, $label);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stopMeasure($name)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->stopMeasure($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addException($e)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addException($e);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addThrowable($e)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addThrowable($e);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getJavascriptRenderer($baseUrl = null, $basePath = null)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getJavascriptRenderer($baseUrl, $basePath);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function modifyResponse($request, $response)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->modifyResponse($request, $response);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isEnabled()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->isEnabled();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function collect()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->collect();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function injectDebugbar($response)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->injectDebugbar($response);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function disable()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->disable();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addMeasure($label, $start, $end)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addMeasure($label, $start, $end);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function measure($label, $closure)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->measure($label, $closure);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function collectConsole()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->collectConsole();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addMessage($message, $label = 'info')
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addMessage($message, $label);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasCollector($name)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->hasCollector($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCollector($name)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getCollector($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCollectors()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getCollectors();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRequestIdGenerator($generator)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setRequestIdGenerator($generator);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRequestIdGenerator()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getRequestIdGenerator();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getCurrentRequestId()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getCurrentRequestId();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setStorage($storage = null)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setStorage($storage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getStorage()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getStorage();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isDataPersisted()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->isDataPersisted();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setHttpDriver($driver)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setHttpDriver($driver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getHttpDriver()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getHttpDriver();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getData()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getData();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDataAsHeaders($headerName = 'phpdebugbar', $maxHeaderLength = 4096, $maxTotalHeaderLength = 250000)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getDataAsHeaders($headerName, $maxHeaderLength, $maxTotalHeaderLength);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sendDataInHeaders($useOpenHandler = null, $headerName = 'phpdebugbar', $maxHeaderLength = 4096)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->sendDataInHeaders($useOpenHandler, $headerName, $maxHeaderLength);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stackData()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->stackData();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasStackedData()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->hasStackedData();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getStackedData($delete = true)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getStackedData($delete);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setStackDataSessionNamespace($ns)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setStackDataSessionNamespace($ns);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getStackDataSessionNamespace()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getStackDataSessionNamespace();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setStackAlwaysUseSessionStorage($enabled = true)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setStackAlwaysUseSessionStorage($enabled);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isStackAlwaysUseSessionStorage()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->isStackAlwaysUseSessionStorage();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->offsetSet($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetGet($key)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetExists($key)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetUnset($key)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->offsetUnset($key);
        }
         
    }
     
}

    namespace Laragear\Preload\Facades { 
            /**
     * 
     *
     */ 
        class Preload {
                    /**
         * 
         *
         * @static 
         */ 
        public static function exclude(...$exclude)
        {
                        /** @var \Laragear\Preload\Preloader $instance */
                        return $instance->exclude(...$exclude);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function append(...$append)
        {
                        /** @var \Laragear\Preload\Preloader $instance */
                        return $instance->append(...$append);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function list()
        {
                        /** @var \Laragear\Preload\Preloader $instance */
                        return $instance->list();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function generate($listing = null)
        {
                        /** @var \Laragear\Preload\Preloader $instance */
                        return $instance->generate($listing);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getFilesFromFinder($callback)
        {
                        /** @var \Laragear\Preload\Preloader $instance */
                        return $instance->getFilesFromFinder($callback);
        }
         
    }
     
}

    namespace Laravel\Horizon { 
            /**
     * 
     *
     */ 
        class Horizon {
         
    }
     
}

    namespace Laravel\Octane\Facades { 
            /**
     * 
     *
     */ 
        class Octane {
                    /**
         * 
         *
         * @static 
         */ 
        public static function table($table)
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->table($table);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function formatExceptionForClient($e, $debug = false)
        {
                        return \Laravel\Octane\Octane::formatExceptionForClient($e, $debug);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function writeError($message)
        {
                        return \Laravel\Octane\Octane::writeError($message);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function concurrently($tasks, $waitMilliseconds = 3000)
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->concurrently($tasks, $waitMilliseconds);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function tasks()
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->tasks();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function prepareApplicationForNextRequest()
        {
                        return \Laravel\Octane\Octane::prepareApplicationForNextRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function prepareApplicationForNextOperation()
        {
                        return \Laravel\Octane\Octane::prepareApplicationForNextOperation();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function defaultServicesToWarm()
        {
                        return \Laravel\Octane\Octane::defaultServicesToWarm();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function route($method, $uri, $callback)
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->route($method, $uri, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasRouteFor($method, $uri)
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->hasRouteFor($method, $uri);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function invokeRoute($request, $method, $uri)
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->invokeRoute($request, $method, $uri);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRoutes()
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->getRoutes();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function tick($key, $callback, $seconds = 1, $immediate = true)
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->tick($key, $callback, $seconds, $immediate);
        }
         
    }
     
}

    namespace Livewire { 
            /**
     * 
     *
     */ 
        class Livewire {
                    /**
         * 
         *
         * @static 
         */ 
        public static function setProvider($provider)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->setProvider($provider);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function provide($callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->provide($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function component($name, $class = null)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->component($name, $class);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function componentHook($hook)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->componentHook($hook);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function propertySynthesizer($synth)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->propertySynthesizer($synth);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function directive($name, $callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->directive($name, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function precompiler($callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->precompiler($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function new($name, $id = null)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->new($name, $id);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isDiscoverable($componentNameOrClass)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->isDiscoverable($componentNameOrClass);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveMissingComponent($resolver)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->resolveMissingComponent($resolver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function mount($name, $params = [], $key = null)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->mount($name, $params, $key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function snapshot($component)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->snapshot($component);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function fromSnapshot($snapshot)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->fromSnapshot($snapshot);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function listen($eventName, $callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->listen($eventName, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function current()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->current();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function update($snapshot, $diff, $calls)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->update($snapshot, $diff, $calls);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function updateProperty($component, $path, $value)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->updateProperty($component, $path, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isLivewireRequest()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->isLivewireRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function componentHasBeenRendered()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->componentHasBeenRendered();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function forceAssetInjection()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->forceAssetInjection();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setUpdateRoute($callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->setUpdateRoute($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getUpdateUri()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->getUpdateUri();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setScriptRoute($callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->setScriptRoute($callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function useScriptTagAttributes($attributes)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->useScriptTagAttributes($attributes);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withUrlParams($params)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withUrlParams($params);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withQueryParams($params)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withQueryParams($params);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withCookie($name, $value)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withCookie($name, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withCookies($cookies)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withCookies($cookies);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withHeaders($headers)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withHeaders($headers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function test($name, $params = [])
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->test($name, $params);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function visit($name)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->visit($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function actingAs($user, $driver = null)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->actingAs($user, $driver);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isRunningServerless()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->isRunningServerless();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function addPersistentMiddleware($middleware)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->addPersistentMiddleware($middleware);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setPersistentMiddleware($middleware)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->setPersistentMiddleware($middleware);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getPersistentMiddleware()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->getPersistentMiddleware();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function flushState()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->flushState();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function originalUrl()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->originalUrl();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function originalPath()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->originalPath();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function originalMethod()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->originalMethod();
        }
         
    }
     
}

    namespace Spatie\LaravelIgnition\Facades { 
            /**
     * 
     *
     */ 
        class Flare {
                    /**
         * 
         *
         * @static 
         */ 
        public static function make($apiKey = null, $contextDetector = null)
        {
                        return \Spatie\FlareClient\Flare::make($apiKey, $contextDetector);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setApiToken($apiToken)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setApiToken($apiToken);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function apiTokenSet()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->apiTokenSet();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setBaseUrl($baseUrl)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setBaseUrl($baseUrl);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setStage($stage)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setStage($stage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sendReportsImmediately()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->sendReportsImmediately();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function determineVersionUsing($determineVersionCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->determineVersionUsing($determineVersionCallable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reportErrorLevels($reportErrorLevels)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportErrorLevels($reportErrorLevels);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function filterExceptionsUsing($filterExceptionsCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->filterExceptionsUsing($filterExceptionsCallable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function filterReportsUsing($filterReportsCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->filterReportsUsing($filterReportsCallable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function argumentReducers($argumentReducers)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->argumentReducers($argumentReducers);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function withStackFrameArguments($withStackFrameArguments = true)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->withStackFrameArguments($withStackFrameArguments);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function version()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->version();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getMiddleware()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getMiddleware();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContextProviderDetector($contextDetector)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setContextProviderDetector($contextDetector);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerFlareHandlers()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerFlareHandlers();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerExceptionHandler()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerExceptionHandler();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerErrorHandler()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerErrorHandler();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerMiddleware($middleware)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerMiddleware($middleware);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getMiddlewares()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getMiddlewares();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function glow($name, $messageLevel = 'info', $metaData = [])
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->glow($name, $messageLevel, $metaData);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function handleException($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->handleException($throwable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function handleError($code, $message, $file = '', $line = 0)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->handleError($code, $message, $file, $line);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function applicationPath($applicationPath)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->applicationPath($applicationPath);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function report($throwable, $callback = null, $report = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->report($throwable, $callback, $report);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reportMessage($message, $logLevel, $callback = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportMessage($message, $logLevel, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sendTestReport($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->sendTestReport($throwable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reset()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reset();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function anonymizeIp()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->anonymizeIp();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function censorRequestBodyFields($fieldNames)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->censorRequestBodyFields($fieldNames);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createReport($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->createReport($throwable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createReportFromMessage($message, $logLevel)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->createReportFromMessage($message, $logLevel);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stage($stage)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->stage($stage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function messageLevel($messageLevel)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->messageLevel($messageLevel);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getGroup($groupName = 'context', $default = [])
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getGroup($groupName, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function context($key, $value)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->context($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function group($groupName, $properties)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->group($groupName, $properties);
        }
         
    }
     
}

    namespace Livewire\Features\SupportTesting { 
            /**
     * 
     *
     */ 
        class Testable {
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::mountAction()
         * @param array|string $name
         * @param array $arguments
         * @return static 
         * @static 
         */ 
        public static function mountAction($name, $arguments = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::mountAction($name, $arguments);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::unmountAction()
         * @return static 
         * @static 
         */ 
        public static function unmountAction()
        {
                        return \Livewire\Features\SupportTesting\Testable::unmountAction();
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::setActionData()
         * @param array $data
         * @return static 
         * @static 
         */ 
        public static function setActionData($data)
        {
                        return \Livewire\Features\SupportTesting\Testable::setActionData($data);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionDataSet()
         * @param array $data
         * @return static 
         * @static 
         */ 
        public static function assertActionDataSet($data)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionDataSet($data);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::callAction()
         * @param array|string $name
         * @param array $data
         * @param array $arguments
         * @return static 
         * @static 
         */ 
        public static function callAction($name, $data = [], $arguments = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::callAction($name, $data, $arguments);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::callMountedAction()
         * @param array $arguments
         * @return static 
         * @static 
         */ 
        public static function callMountedAction($arguments = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::callMountedAction($arguments);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionExists()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertActionExists($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionExists($name);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotExist()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertActionDoesNotExist($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotExist($name);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionVisible()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertActionVisible($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionVisible($name);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionHidden()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertActionHidden($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionHidden($name);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionEnabled()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertActionEnabled($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionEnabled($name);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionDisabled()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertActionDisabled($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionDisabled($name);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionHasIcon()
         * @param array|string $name
         * @param string $icon
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertActionHasIcon($name, $icon, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionHasIcon($name, $icon, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotHaveIcon()
         * @param array|string $name
         * @param string $icon
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertActionDoesNotHaveIcon($name, $icon, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotHaveIcon($name, $icon, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionHasLabel()
         * @param array|string $name
         * @param string $label
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertActionHasLabel($name, $label, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionHasLabel($name, $label, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotHaveLabel()
         * @param array|string $name
         * @param string $label
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertActionDoesNotHaveLabel($name, $label, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotHaveLabel($name, $label, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionHasColor()
         * @param array|string $name
         * @param array|string $color
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertActionHasColor($name, $color, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionHasColor($name, $color, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotHaveColor()
         * @param array|string $name
         * @param array|string $color
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertActionDoesNotHaveColor($name, $color, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotHaveColor($name, $color, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionHasUrl()
         * @param array|string $name
         * @param string $url
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertActionHasUrl($name, $url, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionHasUrl($name, $url, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotHaveUrl()
         * @param array|string $name
         * @param string $url
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertActionDoesNotHaveUrl($name, $url, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotHaveUrl($name, $url, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionShouldOpenUrlInNewTab()
         * @param array|string $name
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertActionShouldOpenUrlInNewTab($name, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionShouldOpenUrlInNewTab($name, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionShouldNotOpenUrlInNewTab()
         * @param array|string $name
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertActionShouldNotOpenUrlInNewTab($name, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionShouldNotOpenUrlInNewTab($name, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionMounted()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertActionMounted($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionMounted($name);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionNotMounted()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertActionNotMounted($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionNotMounted($name);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionMounted()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertActionHalted($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionHalted($name);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionMounted()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertActionHeld($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionHeld($name);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertHasActionErrors()
         * @param array $keys
         * @return static 
         * @static 
         */ 
        public static function assertHasActionErrors($keys = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::assertHasActionErrors($keys);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertHasNoActionErrors()
         * @param array $keys
         * @return static 
         * @static 
         */ 
        public static function assertHasNoActionErrors($keys = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::assertHasNoActionErrors($keys);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::assertActionListInOrder()
         * @param array $names
         * @param array $actions
         * @param string $actionType
         * @param string $actionClass
         * @return self 
         * @static 
         */ 
        public static function assertActionListInOrder($names, $actions, $actionType, $actionClass)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertActionListInOrder($names, $actions, $actionType, $actionClass);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::parseActionName()
         * @param string $name
         * @return string 
         * @static 
         */ 
        public static function parseActionName($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::parseActionName($name);
        }
                    /**
         * 
         *
         * @see \Filament\Actions\Testing\TestsActions::parseNestedActionName()
         * @param array|string $name
         * @return array 
         * @static 
         */ 
        public static function parseNestedActionName($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::parseNestedActionName($name);
        }
                    /**
         * 
         *
         * @see \Filament\Forms\Testing\TestsForms::fillForm()
         * @param array $state
         * @param string $formName
         * @return static 
         * @static 
         */ 
        public static function fillForm($state = [], $formName = 'form')
        {
                        return \Livewire\Features\SupportTesting\Testable::fillForm($state, $formName);
        }
                    /**
         * 
         *
         * @see \Filament\Forms\Testing\TestsForms::assertFormSet()
         * @param array $state
         * @param string $formName
         * @return static 
         * @static 
         */ 
        public static function assertFormSet($state, $formName = 'form')
        {
                        return \Livewire\Features\SupportTesting\Testable::assertFormSet($state, $formName);
        }
                    /**
         * 
         *
         * @see \Filament\Forms\Testing\TestsForms::assertHasFormErrors()
         * @param array $keys
         * @param string $formName
         * @return static 
         * @static 
         */ 
        public static function assertHasFormErrors($keys = [], $formName = 'form')
        {
                        return \Livewire\Features\SupportTesting\Testable::assertHasFormErrors($keys, $formName);
        }
                    /**
         * 
         *
         * @see \Filament\Forms\Testing\TestsForms::assertHasNoFormErrors()
         * @param array $keys
         * @param string $formName
         * @return static 
         * @static 
         */ 
        public static function assertHasNoFormErrors($keys = [], $formName = 'form')
        {
                        return \Livewire\Features\SupportTesting\Testable::assertHasNoFormErrors($keys, $formName);
        }
                    /**
         * 
         *
         * @see \Filament\Forms\Testing\TestsForms::assertFormExists()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertFormExists($name = 'form')
        {
                        return \Livewire\Features\SupportTesting\Testable::assertFormExists($name);
        }
                    /**
         * 
         *
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldExists()
         * @param string $fieldName
         * @param \Closure|string $formName
         * @param \Closure|null $checkFieldUsing
         * @return static 
         * @static 
         */ 
        public static function assertFormFieldExists($fieldName, $formName = 'form', $checkFieldUsing = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertFormFieldExists($fieldName, $formName, $checkFieldUsing);
        }
                    /**
         * 
         *
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldIsDisabled()
         * @param string $fieldName
         * @param string $formName
         * @return static 
         * @static 
         */ 
        public static function assertFormFieldIsDisabled($fieldName, $formName = 'form')
        {
                        return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsDisabled($fieldName, $formName);
        }
                    /**
         * 
         *
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldIsEnabled()
         * @param string $fieldName
         * @param string $formName
         * @return static 
         * @static 
         */ 
        public static function assertFormFieldIsEnabled($fieldName, $formName = 'form')
        {
                        return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsEnabled($fieldName, $formName);
        }
                    /**
         * 
         *
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldIsReadOnly()
         * @param string $fieldName
         * @param string $formName
         * @return static 
         * @static 
         */ 
        public static function assertFormFieldIsReadOnly($fieldName, $formName = 'form')
        {
                        return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsReadOnly($fieldName, $formName);
        }
                    /**
         * 
         *
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldIsHidden()
         * @param string $fieldName
         * @param string $formName
         * @return static 
         * @static 
         */ 
        public static function assertFormFieldIsHidden($fieldName, $formName = 'form')
        {
                        return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsHidden($fieldName, $formName);
        }
                    /**
         * 
         *
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldIsVisible()
         * @param string $fieldName
         * @param string $formName
         * @return static 
         * @static 
         */ 
        public static function assertFormFieldIsVisible($fieldName, $formName = 'form')
        {
                        return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsVisible($fieldName, $formName);
        }
                    /**
         * 
         *
         * @see \Filament\Notifications\Testing\TestsNotifications::assertNotified()
         * @param \Filament\Notifications\Notification|string|null $notification
         * @return static 
         * @static 
         */ 
        public static function assertNotified($notification = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertNotified($notification);
        }
                    /**
         * 
         *
         * @see \Filament\Notifications\Testing\TestsNotifications::assertNotNotified()
         * @param \Filament\Notifications\Notification|string|null $notification
         * @return static 
         * @static 
         */ 
        public static function assertNotNotified($notification = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertNotNotified($notification);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::mountTableAction()
         * @param array|string $name
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function mountTableAction($name, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::mountTableAction($name, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::unmountTableAction()
         * @return static 
         * @static 
         */ 
        public static function unmountTableAction()
        {
                        return \Livewire\Features\SupportTesting\Testable::unmountTableAction();
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::setTableActionData()
         * @param array $data
         * @return static 
         * @static 
         */ 
        public static function setTableActionData($data)
        {
                        return \Livewire\Features\SupportTesting\Testable::setTableActionData($data);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDataSet()
         * @param array $data
         * @return static 
         * @static 
         */ 
        public static function assertTableActionDataSet($data)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionDataSet($data);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::callTableAction()
         * @param array|string $name
         * @param mixed $record
         * @param array $data
         * @param array $arguments
         * @return static 
         * @static 
         */ 
        public static function callTableAction($name, $record = null, $data = [], $arguments = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::callTableAction($name, $record, $data, $arguments);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::callMountedTableAction()
         * @param array $arguments
         * @return static 
         * @static 
         */ 
        public static function callMountedTableAction($arguments = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::callMountedTableAction($arguments);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionExists()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableActionExists($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionExists($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotExist()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableActionDoesNotExist($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotExist($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionsExistInOrder()
         * @param array $names
         * @return static 
         * @static 
         */ 
        public static function assertTableActionsExistInOrder($names)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionsExistInOrder($names);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableHeaderActionsExistInOrder()
         * @param array $names
         * @return static 
         * @static 
         */ 
        public static function assertTableHeaderActionsExistInOrder($names)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableHeaderActionsExistInOrder($names);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableEmptyStateActionsExistInOrder()
         * @param array $names
         * @return static 
         * @static 
         */ 
        public static function assertTableEmptyStateActionsExistInOrder($names)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableEmptyStateActionsExistInOrder($names);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionVisible()
         * @param array|string $name
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionVisible($name, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionVisible($name, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHidden()
         * @param array|string $name
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionHidden($name, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionHidden($name, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionEnabled()
         * @param array|string $name
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionEnabled($name, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionEnabled($name, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDisabled()
         * @param array|string $name
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionDisabled($name, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionDisabled($name, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHasIcon()
         * @param array|string $name
         * @param string $icon
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionHasIcon($name, $icon, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionHasIcon($name, $icon, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotHaveIcon()
         * @param array|string $name
         * @param string $icon
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionDoesNotHaveIcon($name, $icon, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotHaveIcon($name, $icon, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHasLabel()
         * @param array|string $name
         * @param string $label
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionHasLabel($name, $label, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionHasLabel($name, $label, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotHaveLabel()
         * @param array|string $name
         * @param string $label
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionDoesNotHaveLabel($name, $label, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotHaveLabel($name, $label, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHasColor()
         * @param array|string $name
         * @param array|string $color
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionHasColor($name, $color, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionHasColor($name, $color, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotHaveColor()
         * @param array|string $name
         * @param array|string $color
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionDoesNotHaveColor($name, $color, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotHaveColor($name, $color, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHasUrl()
         * @param array|string $name
         * @param string $url
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionHasUrl($name, $url, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionHasUrl($name, $url, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotHaveUrl()
         * @param array|string $name
         * @param string $url
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionDoesNotHaveUrl($name, $url, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotHaveUrl($name, $url, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionShouldOpenUrlInNewTab()
         * @param array|string $name
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionShouldOpenUrlInNewTab($name, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionShouldOpenUrlInNewTab($name, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionShouldNotOpenUrlInNewTab()
         * @param array|string $name
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableActionShouldNotOpenUrlInNewTab($name, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionShouldNotOpenUrlInNewTab($name, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionMounted()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableActionMounted($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionMounted($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionNotMounted()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableActionNotMounted($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionNotMounted($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionMounted()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableActionHalted($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionHalted($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionMounted()
         * @param array|string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableActionHeld($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableActionHeld($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertHasTableActionErrors()
         * @param array $keys
         * @return static 
         * @static 
         */ 
        public static function assertHasTableActionErrors($keys = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::assertHasTableActionErrors($keys);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsActions::assertHasNoTableActionErrors()
         * @param array $keys
         * @return static 
         * @static 
         */ 
        public static function assertHasNoTableActionErrors($keys = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::assertHasNoTableActionErrors($keys);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::mountTableBulkAction()
         * @param string $name
         * @param \Illuminate\Support\Collection|array $records
         * @return static 
         * @static 
         */ 
        public static function mountTableBulkAction($name, $records)
        {
                        return \Livewire\Features\SupportTesting\Testable::mountTableBulkAction($name, $records);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::setTableBulkActionData()
         * @param array $data
         * @return static 
         * @static 
         */ 
        public static function setTableBulkActionData($data)
        {
                        return \Livewire\Features\SupportTesting\Testable::setTableBulkActionData($data);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDataSet()
         * @param array $data
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionDataSet($data)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDataSet($data);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::callTableBulkAction()
         * @param string $name
         * @param \Illuminate\Support\Collection|array $records
         * @param array $data
         * @param array $arguments
         * @return static 
         * @static 
         */ 
        public static function callTableBulkAction($name, $records, $data = [], $arguments = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::callTableBulkAction($name, $records, $data, $arguments);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::callMountedTableBulkAction()
         * @param array $arguments
         * @return static 
         * @static 
         */ 
        public static function callMountedTableBulkAction($arguments = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::callMountedTableBulkAction($arguments);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionExists()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionExists($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionExists($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDoesNotExist()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionDoesNotExist($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDoesNotExist($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionsExistInOrder()
         * @param array $names
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionsExistInOrder($names)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionsExistInOrder($names);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionVisible()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionVisible($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionVisible($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionHidden()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionHidden($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHidden($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionEnabled()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionEnabled($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionEnabled($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDisabled()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionDisabled($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDisabled($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionHasIcon()
         * @param string $name
         * @param string $icon
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionHasIcon($name, $icon, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHasIcon($name, $icon, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDoesNotHaveIcon()
         * @param string $name
         * @param string $icon
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionDoesNotHaveIcon($name, $icon, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDoesNotHaveIcon($name, $icon, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionHasLabel()
         * @param string $name
         * @param string $label
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionHasLabel($name, $label, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHasLabel($name, $label, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDoesNotHaveLabel()
         * @param string $name
         * @param string $label
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionDoesNotHaveLabel($name, $label, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDoesNotHaveLabel($name, $label, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionHasColor()
         * @param string $name
         * @param array|string $color
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionHasColor($name, $color, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHasColor($name, $color, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDoesNotHaveColor()
         * @param string $name
         * @param array|string $color
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionDoesNotHaveColor($name, $color, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDoesNotHaveColor($name, $color, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionMounted()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionMounted($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionMounted($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionNotMounted()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionNotMounted($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionNotMounted($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionMounted()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionHalted($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHalted($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionMounted()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableBulkActionHeld($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHeld($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertHasTableBulkActionErrors()
         * @param array $keys
         * @return static 
         * @static 
         */ 
        public static function assertHasTableBulkActionErrors($keys = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::assertHasTableBulkActionErrors($keys);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsBulkActions::assertHasNoTableBulkActionErrors()
         * @param array $keys
         * @return static 
         * @static 
         */ 
        public static function assertHasNoTableBulkActionErrors($keys = [])
        {
                        return \Livewire\Features\SupportTesting\Testable::assertHasNoTableBulkActionErrors($keys);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertCanRenderTableColumn()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertCanRenderTableColumn($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertCanRenderTableColumn($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertCanNotRenderTableColumn()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertCanNotRenderTableColumn($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertCanNotRenderTableColumn($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnExists()
         * @param string $name
         * @param \Closure|null $checkColumnUsing
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableColumnExists($name, $checkColumnUsing = null, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnExists($name, $checkColumnUsing, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnVisible()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableColumnVisible($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnVisible($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnHidden()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableColumnHidden($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnHidden($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnStateSet()
         * @param string $name
         * @param mixed $value
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableColumnStateSet($name, $value, $record)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnStateSet($name, $value, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnStateNotSet()
         * @param string $name
         * @param mixed $value
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableColumnStateNotSet($name, $value, $record)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnStateNotSet($name, $value, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnFormattedStateSet()
         * @param string $name
         * @param mixed $value
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableColumnFormattedStateSet($name, $value, $record)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnFormattedStateSet($name, $value, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnFormattedStateNotSet()
         * @param string $name
         * @param mixed $value
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function assertTableColumnFormattedStateNotSet($name, $value, $record)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnFormattedStateNotSet($name, $value, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnHasExtraAttributes()
         * @param string $name
         * @param array $attributes
         * @param mixed $record
         * @static 
         */ 
        public static function assertTableColumnHasExtraAttributes($name, $attributes, $record)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnHasExtraAttributes($name, $attributes, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnDoesNotHaveExtraAttributes()
         * @param string $name
         * @param array $attributes
         * @param mixed $record
         * @static 
         */ 
        public static function assertTableColumnDoesNotHaveExtraAttributes($name, $attributes, $record)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnDoesNotHaveExtraAttributes($name, $attributes, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnHasDescription()
         * @param string $name
         * @param mixed $description
         * @param mixed $record
         * @param string $position
         * @static 
         */ 
        public static function assertTableColumnHasDescription($name, $description, $record, $position = 'below')
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnHasDescription($name, $description, $record, $position);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnDoesNotHaveDescription()
         * @param string $name
         * @param mixed $description
         * @param mixed $record
         * @param string $position
         * @static 
         */ 
        public static function assertTableColumnDoesNotHaveDescription($name, $description, $record, $position = 'below')
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnDoesNotHaveDescription($name, $description, $record, $position);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableSelectColumnHasOptions()
         * @param string $name
         * @param array $options
         * @param mixed $record
         * @static 
         */ 
        public static function assertTableSelectColumnHasOptions($name, $options, $record)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableSelectColumnHasOptions($name, $options, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::assertTableSelectColumnDoesNotHaveOptions()
         * @param string $name
         * @param array $options
         * @param mixed $record
         * @static 
         */ 
        public static function assertTableSelectColumnDoesNotHaveOptions($name, $options, $record)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableSelectColumnDoesNotHaveOptions($name, $options, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::callTableColumnAction()
         * @param string $name
         * @param mixed $record
         * @return static 
         * @static 
         */ 
        public static function callTableColumnAction($name, $record = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::callTableColumnAction($name, $record);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::sortTable()
         * @param string|null $name
         * @param string|null $direction
         * @return static 
         * @static 
         */ 
        public static function sortTable($name = null, $direction = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::sortTable($name, $direction);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::searchTable()
         * @param string|null $search
         * @return static 
         * @static 
         */ 
        public static function searchTable($search = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::searchTable($search);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsColumns::searchTableColumns()
         * @param array $searches
         * @return static 
         * @static 
         */ 
        public static function searchTableColumns($searches)
        {
                        return \Livewire\Features\SupportTesting\Testable::searchTableColumns($searches);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsFilters::filterTable()
         * @param string $name
         * @param mixed $data
         * @return static 
         * @static 
         */ 
        public static function filterTable($name, $data = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::filterTable($name, $data);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsFilters::resetTableFilters()
         * @return static 
         * @static 
         */ 
        public static function resetTableFilters()
        {
                        return \Livewire\Features\SupportTesting\Testable::resetTableFilters();
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsFilters::removeTableFilter()
         * @param string $filter
         * @param string|null $field
         * @return static 
         * @static 
         */ 
        public static function removeTableFilter($filter, $field = null)
        {
                        return \Livewire\Features\SupportTesting\Testable::removeTableFilter($filter, $field);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsFilters::removeTableFilters()
         * @return static 
         * @static 
         */ 
        public static function removeTableFilters()
        {
                        return \Livewire\Features\SupportTesting\Testable::removeTableFilters();
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsFilters::assertTableFilterExists()
         * @param string $name
         * @return static 
         * @static 
         */ 
        public static function assertTableFilterExists($name)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableFilterExists($name);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsRecords::assertCanSeeTableRecords()
         * @param \Illuminate\Support\Collection|array $records
         * @param bool $inOrder
         * @return static 
         * @static 
         */ 
        public static function assertCanSeeTableRecords($records, $inOrder = false)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertCanSeeTableRecords($records, $inOrder);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsRecords::assertCanNotSeeTableRecords()
         * @param \Illuminate\Support\Collection|array $records
         * @return static 
         * @static 
         */ 
        public static function assertCanNotSeeTableRecords($records)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertCanNotSeeTableRecords($records);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsRecords::assertCountTableRecords()
         * @param int $count
         * @return static 
         * @static 
         */ 
        public static function assertCountTableRecords($count)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertCountTableRecords($count);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsRecords::loadTable()
         * @return static 
         * @static 
         */ 
        public static function loadTable()
        {
                        return \Livewire\Features\SupportTesting\Testable::loadTable();
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsSummaries::assertTableColumnSummarySet()
         * @param string $columnName
         * @param string $summarizerId
         * @param mixed $state
         * @param bool $isCurrentPaginationPageOnly
         * @return static 
         * @static 
         */ 
        public static function assertTableColumnSummarySet($columnName, $summarizerId, $state, $isCurrentPaginationPageOnly = false)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnSummarySet($columnName, $summarizerId, $state, $isCurrentPaginationPageOnly);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsSummaries::assertTableColumnSummaryNotSet()
         * @param string $columnName
         * @param string $summarizerId
         * @param mixed $state
         * @param bool $isCurrentPaginationPageOnly
         * @return static 
         * @static 
         */ 
        public static function assertTableColumnSummaryNotSet($columnName, $summarizerId, $state, $isCurrentPaginationPageOnly = false)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnSummaryNotSet($columnName, $summarizerId, $state, $isCurrentPaginationPageOnly);
        }
                    /**
         * 
         *
         * @see \Filament\Tables\Testing\TestsSummaries::assertTableColumnSummarizerExists()
         * @param string $columnName
         * @param string $summarizerId
         * @return static 
         * @static 
         */ 
        public static function assertTableColumnSummarizerExists($columnName, $summarizerId)
        {
                        return \Livewire\Features\SupportTesting\Testable::assertTableColumnSummarizerExists($columnName, $summarizerId);
        }
         
    }
     
}

    namespace Illuminate\Http { 
            /**
     * 
     *
     */ 
        class Request {
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validate($rules, ...$params)
        {
                        return \Illuminate\Http\Request::validate($rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
                        return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignature($absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignature($absolute);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static 
         */ 
        public static function hasValidRelativeSignature()
        {
                        return \Illuminate\Http\Request::hasValidRelativeSignature();
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }
         
    }
     
}

    namespace Illuminate\Database\Query { 
            /**
     * 
     *
     */ 
        class Builder {
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\QueryBuilderExtraMethods::getGroupBy()
         * @static 
         */ 
        public static function getGroupBy()
        {
                        return \Illuminate\Database\Query\Builder::getGroupBy();
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\QueryBuilderExtraMethods::getSelect()
         * @static 
         */ 
        public static function getSelect()
        {
                        return \Illuminate\Database\Query\Builder::getSelect();
        }
         
    }
     
}

    namespace Illuminate\Database\Eloquent\Relations { 
            /**
     * 
     *
     */ 
        class Relation {
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoins()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @param string|null $morphable
         * @static 
         */ 
        public static function performJoinForEloquentPowerJoins($builder, $joinType = 'leftJoin', $callback = null, $alias = null, $disableExtraConditions = false, $morphable = null)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoins($builder, $joinType, $callback, $alias, $disableExtraConditions, $morphable);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForBelongsTo()
         * @param mixed $query
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static 
         */ 
        public static function performJoinForEloquentPowerJoinsForBelongsTo($query, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForBelongsTo($query, $joinType, $callback, $alias, $disableExtraConditions);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForBelongsToMany()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static 
         */ 
        public static function performJoinForEloquentPowerJoinsForBelongsToMany($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForBelongsToMany($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForMorphToMany()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static 
         */ 
        public static function performJoinForEloquentPowerJoinsForMorphToMany($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForMorphToMany($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForMorph()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static 
         */ 
        public static function performJoinForEloquentPowerJoinsForMorph($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForMorph($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForMorphTo()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @param string|null $morphable
         * @static 
         */ 
        public static function performJoinForEloquentPowerJoinsForMorphTo($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false, $morphable = null)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForMorphTo($builder, $joinType, $callback, $alias, $disableExtraConditions, $morphable);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForHasMany()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static 
         */ 
        public static function performJoinForEloquentPowerJoinsForHasMany($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForHasMany($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForHasManyThrough()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static 
         */ 
        public static function performJoinForEloquentPowerJoinsForHasManyThrough($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForHasManyThrough($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performHavingForEloquentPowerJoins()
         * @param mixed $builder
         * @param mixed $operator
         * @param mixed $count
         * @param string|null $morphable
         * @static 
         */ 
        public static function performHavingForEloquentPowerJoins($builder, $operator, $count, $morphable = null)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::performHavingForEloquentPowerJoins($builder, $operator, $count, $morphable);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::usesSoftDeletes()
         * @param mixed $model
         * @static 
         */ 
        public static function usesSoftDeletes($model)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::usesSoftDeletes($model);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::getThroughParent()
         * @static 
         */ 
        public static function getThroughParent()
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::getThroughParent();
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::getFarParent()
         * @static 
         */ 
        public static function getFarParent()
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::getFarParent();
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyExtraConditions()
         * @param \Kirschbaum\PowerJoins\PowerJoinClause $join
         * @static 
         */ 
        public static function applyExtraConditions($join)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::applyExtraConditions($join);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyBasicCondition()
         * @param mixed $join
         * @param mixed $condition
         * @static 
         */ 
        public static function applyBasicCondition($join, $condition)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::applyBasicCondition($join, $condition);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyNullCondition()
         * @param mixed $join
         * @param mixed $condition
         * @static 
         */ 
        public static function applyNullCondition($join, $condition)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::applyNullCondition($join, $condition);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyNotNullCondition()
         * @param mixed $join
         * @param mixed $condition
         * @static 
         */ 
        public static function applyNotNullCondition($join, $condition)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::applyNotNullCondition($join, $condition);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyNestedCondition()
         * @param mixed $join
         * @param mixed $condition
         * @static 
         */ 
        public static function applyNestedCondition($join, $condition)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::applyNestedCondition($join, $condition);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::shouldNotApplyExtraCondition()
         * @param mixed $condition
         * @static 
         */ 
        public static function shouldNotApplyExtraCondition($condition)
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::shouldNotApplyExtraCondition($condition);
        }
                    /**
         * 
         *
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::getPowerJoinExistenceCompareKey()
         * @static 
         */ 
        public static function getPowerJoinExistenceCompareKey()
        {
                        return \Illuminate\Database\Eloquent\Relations\Relation::getPowerJoinExistenceCompareKey();
        }
         
    }
     
}

    namespace Illuminate\Routing { 
            /**
     * 
     *
     */ 
        class Route {
                    /**
         * 
         *
         * @see \Livewire\Features\SupportLazyLoading\SupportLazyLoading::registerRouteMacro()
         * @param mixed $enabled
         * @static 
         */ 
        public static function lazy($enabled = true)
        {
                        return \Illuminate\Routing\Route::lazy($enabled);
        }
         
    }
     
}

    namespace Illuminate\View { 
            /**
     * 
     *
     */ 
        class ComponentAttributeBag {
                    /**
         * 
         *
         * @see \Livewire\Features\SupportBladeAttributes\SupportBladeAttributes::provide()
         * @param mixed $name
         * @static 
         */ 
        public static function wire($name)
        {
                        return \Illuminate\View\ComponentAttributeBag::wire($name);
        }
         
    }
            /**
     * 
     *
     */ 
        class View {
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $data
         * @static 
         */ 
        public static function layoutData($data = [])
        {
                        return \Illuminate\View\View::layoutData($data);
        }
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $section
         * @static 
         */ 
        public static function section($section)
        {
                        return \Illuminate\View\View::section($section);
        }
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $title
         * @static 
         */ 
        public static function title($title)
        {
                        return \Illuminate\View\View::title($title);
        }
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $slot
         * @static 
         */ 
        public static function slot($slot)
        {
                        return \Illuminate\View\View::slot($slot);
        }
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $view
         * @param mixed $params
         * @static 
         */ 
        public static function extends($view, $params = [])
        {
                        return \Illuminate\View\View::extends($view, $params);
        }
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $view
         * @param mixed $params
         * @static 
         */ 
        public static function layout($view, $params = [])
        {
                        return \Illuminate\View\View::layout($view, $params);
        }
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param callable $callback
         * @static 
         */ 
        public static function response($callback)
        {
                        return \Illuminate\View\View::response($callback);
        }
         
    }
     
}


namespace  { 
            class App extends \Illuminate\Support\Facades\App {}
            class Arr extends \Illuminate\Support\Arr {}
            class Artisan extends \Illuminate\Support\Facades\Artisan {}
            class Auth extends \Illuminate\Support\Facades\Auth {}
            class Blade extends \Illuminate\Support\Facades\Blade {}
            class Broadcast extends \Illuminate\Support\Facades\Broadcast {}
            class Bus extends \Illuminate\Support\Facades\Bus {}
            class Cache extends \Illuminate\Support\Facades\Cache {}
            class Config extends \Illuminate\Support\Facades\Config {}
            class Cookie extends \Illuminate\Support\Facades\Cookie {}
            class Crypt extends \Illuminate\Support\Facades\Crypt {}
            class Date extends \Illuminate\Support\Facades\Date {}
            class DB extends \Illuminate\Support\Facades\DB {}
            class Eloquent extends \Illuminate\Database\Eloquent\Model {             
                /**
             * 
             *
             * @static 
             */ 
            public static function make($attributes = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->make($attributes);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withGlobalScope($identifier, $scope)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withGlobalScope($identifier, $scope);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withoutGlobalScope($scope)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withoutGlobalScope($scope);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withoutGlobalScopes($scopes = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withoutGlobalScopes($scopes);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function removedScopes()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->removedScopes();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereKey($id)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereKey($id);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereKeyNot($id)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereKeyNot($id);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function where($column, $operator = null, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->where($column, $operator, $value, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function firstWhere($column, $operator = null, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->firstWhere($column, $operator, $value, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhere($column, $operator = null, $value = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhere($column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereNot($column, $operator = null, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereNot($column, $operator, $value, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereNot($column, $operator = null, $value = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhereNot($column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function latest($column = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->latest($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function oldest($column = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->oldest($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function hydrate($items)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->hydrate($items);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function fromQuery($query, $bindings = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->fromQuery($query, $bindings);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function find($id, $columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->find($id, $columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function findMany($ids, $columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->findMany($ids, $columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function findOrFail($id, $columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->findOrFail($id, $columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function findOrNew($id, $columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->findOrNew($id, $columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function findOr($id, $columns = [], $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->findOr($id, $columns, $callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function firstOrNew($attributes = [], $values = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->firstOrNew($attributes, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function firstOrCreate($attributes = [], $values = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->firstOrCreate($attributes, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function createOrFirst($attributes = [], $values = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->createOrFirst($attributes, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function updateOrCreate($attributes, $values = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->updateOrCreate($attributes, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function firstOrFail($columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->firstOrFail($columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function firstOr($columns = [], $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->firstOr($columns, $callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function sole($columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->sole($columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function value($column)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->value($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function soleValue($column)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->soleValue($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function valueOrFail($column)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->valueOrFail($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function get($columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->get($columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function getModels($columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->getModels($columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function eagerLoadRelations($models)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->eagerLoadRelations($models);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function cursor()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->cursor();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function pluck($column, $key = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->pluck($column, $key);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function paginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->paginate($perPage, $columns, $pageName, $page);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function simplePaginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->simplePaginate($perPage, $columns, $pageName, $page);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function cursorPaginate($perPage = null, $columns = [], $cursorName = 'cursor', $cursor = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->cursorPaginate($perPage, $columns, $cursorName, $cursor);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function create($attributes = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->create($attributes);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function forceCreate($attributes)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->forceCreate($attributes);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function forceCreateQuietly($attributes = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->forceCreateQuietly($attributes);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function upsert($values, $uniqueBy, $update = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->upsert($values, $uniqueBy, $update);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function onDelete($callback)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->onDelete($callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function scopes($scopes)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->scopes($scopes);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function applyScopes()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->applyScopes();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function without($relations)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->without($relations);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withOnly($relations)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withOnly($relations);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function newModelInstance($attributes = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->newModelInstance($attributes);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withCasts($casts)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withCasts($casts);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withSavepointIfNeeded($scope)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withSavepointIfNeeded($scope);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function getQuery()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->getQuery();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function setQuery($query)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->setQuery($query);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function toBase()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->toBase();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function getEagerLoads()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->getEagerLoads();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function setEagerLoads($eagerLoad)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->setEagerLoads($eagerLoad);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withoutEagerLoad($relations)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withoutEagerLoad($relations);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withoutEagerLoads()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withoutEagerLoads();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function getModel()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->getModel();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function setModel($model)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->setModel($model);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function getMacro($name)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->getMacro($name);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function hasMacro($name)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->hasMacro($name);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function getGlobalMacro($name)
            {
                                return \Illuminate\Database\Eloquent\Builder::getGlobalMacro($name);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function hasGlobalMacro($name)
            {
                                return \Illuminate\Database\Eloquent\Builder::hasGlobalMacro($name);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function clone()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->clone();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function chunk($count, $callback)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->chunk($count, $callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function chunkMap($callback, $count = 1000)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->chunkMap($callback, $count);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function each($callback, $count = 1000)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->each($callback, $count);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function chunkById($count, $callback, $column = null, $alias = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->chunkById($count, $callback, $column, $alias);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function chunkByIdDesc($count, $callback, $column = null, $alias = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->chunkByIdDesc($count, $callback, $column, $alias);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orderedChunkById($count, $callback, $column = null, $alias = null, $descending = false)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orderedChunkById($count, $callback, $column, $alias, $descending);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function eachById($callback, $count = 1000, $column = null, $alias = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->eachById($callback, $count, $column, $alias);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function lazy($chunkSize = 1000)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->lazy($chunkSize);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function lazyById($chunkSize = 1000, $column = null, $alias = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->lazyById($chunkSize, $column, $alias);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function lazyByIdDesc($chunkSize = 1000, $column = null, $alias = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->lazyByIdDesc($chunkSize, $column, $alias);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function first($columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->first($columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function baseSole($columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->baseSole($columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function tap($callback)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->tap($callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function when($value = null, $callback = null, $default = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->when($value, $callback, $default);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function unless($value = null, $callback = null, $default = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->unless($value, $callback, $default);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->has($relation, $operator, $count, $boolean, $callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orHas($relation, $operator = '>=', $count = 1)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orHas($relation, $operator, $count);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function doesntHave($relation, $boolean = 'and', $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->doesntHave($relation, $boolean, $callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orDoesntHave($relation)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orDoesntHave($relation);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereHas($relation, $callback, $operator, $count);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withWhereHas($relation, $callback, $operator, $count);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhereHas($relation, $callback, $operator, $count);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereDoesntHave($relation, $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereDoesntHave($relation, $callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereDoesntHave($relation, $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhereDoesntHave($relation, $callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function hasMorph($relation, $types, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->hasMorph($relation, $types, $operator, $count, $boolean, $callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orHasMorph($relation, $types, $operator = '>=', $count = 1)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orHasMorph($relation, $types, $operator, $count);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function doesntHaveMorph($relation, $types, $boolean = 'and', $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->doesntHaveMorph($relation, $types, $boolean, $callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orDoesntHaveMorph($relation, $types)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orDoesntHaveMorph($relation, $types);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereHasMorph($relation, $types, $callback, $operator, $count);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhereHasMorph($relation, $types, $callback, $operator, $count);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereDoesntHaveMorph($relation, $types, $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereDoesntHaveMorph($relation, $types, $callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereDoesntHaveMorph($relation, $types, $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhereDoesntHaveMorph($relation, $types, $callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereRelation($relation, $column, $operator = null, $value = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereRelation($relation, $column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereRelation($relation, $column, $operator = null, $value = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhereRelation($relation, $column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereMorphRelation($relation, $types, $column, $operator = null, $value = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereMorphRelation($relation, $types, $column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereMorphRelation($relation, $types, $column, $operator = null, $value = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhereMorphRelation($relation, $types, $column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereMorphedTo($relation, $model, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereMorphedTo($relation, $model, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereNotMorphedTo($relation, $model, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereNotMorphedTo($relation, $model, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereMorphedTo($relation, $model)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhereMorphedTo($relation, $model);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereNotMorphedTo($relation, $model)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhereNotMorphedTo($relation, $model);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereBelongsTo($related, $relationshipName = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereBelongsTo($related, $relationshipName, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereBelongsTo($related, $relationshipName = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhereBelongsTo($related, $relationshipName);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withAggregate($relations, $column, $function = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withAggregate($relations, $column, $function);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withCount($relations)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withCount($relations);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withMax($relation, $column)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withMax($relation, $column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withMin($relation, $column)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withMin($relation, $column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withSum($relation, $column)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withSum($relation, $column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withAvg($relation, $column)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withAvg($relation, $column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function withExists($relation)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withExists($relation);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function mergeConstraintsFrom($from)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->mergeConstraintsFrom($from);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::powerJoin()
             * @param mixed $table
             * @param mixed $first
             * @param mixed $operator
             * @param mixed $second
             * @param mixed $type
             * @param mixed $where
             * @return static 
             * @static 
             */ 
            public static function powerJoin($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
            {
                                return \Illuminate\Database\Eloquent\Builder::powerJoin($table, $first, $operator, $second, $type, $where);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::leftPowerJoin()
             * @param mixed $table
             * @param mixed $first
             * @param mixed $operator
             * @param mixed $second
             * @static 
             */ 
            public static function leftPowerJoin($table, $first, $operator = null, $second = null)
            {
                                return \Illuminate\Database\Eloquent\Builder::leftPowerJoin($table, $first, $operator, $second);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::rightPowerJoin()
             * @param mixed $table
             * @param mixed $first
             * @param mixed $operator
             * @param mixed $second
             * @static 
             */ 
            public static function rightPowerJoin($table, $first, $operator = null, $second = null)
            {
                                return \Illuminate\Database\Eloquent\Builder::rightPowerJoin($table, $first, $operator, $second);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::newPowerJoinClause()
             * @param \Illuminate\Database\Query\Builder $parentQuery
             * @param mixed $type
             * @param mixed $table
             * @param \Illuminate\Database\Eloquent\Model|null $model
             * @static 
             */ 
            public static function newPowerJoinClause($parentQuery, $type, $table, $model = null)
            {
                                return \Illuminate\Database\Eloquent\Builder::newPowerJoinClause($parentQuery, $type, $table, $model);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::joinRelationship()
             * @param mixed $relationName
             * @param mixed $callback
             * @param mixed $joinType
             * @param mixed $useAlias
             * @param bool $disableExtraConditions
             * @param string|null $morphable
             * @static 
             */ 
            public static function joinRelationship($relationName, $callback = null, $joinType = 'join', $useAlias = false, $disableExtraConditions = false, $morphable = null)
            {
                                return \Illuminate\Database\Eloquent\Builder::joinRelationship($relationName, $callback, $joinType, $useAlias, $disableExtraConditions, $morphable);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::joinRelationshipUsingAlias()
             * @param mixed $relationName
             * @param mixed $callback
             * @param bool $disableExtraConditions
             * @static 
             */ 
            public static function joinRelationshipUsingAlias($relationName, $callback = null, $disableExtraConditions = false)
            {
                                return \Illuminate\Database\Eloquent\Builder::joinRelationshipUsingAlias($relationName, $callback, $disableExtraConditions);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::leftJoinRelationshipUsingAlias()
             * @param mixed $relationName
             * @param mixed $callback
             * @param bool $disableExtraConditions
             * @static 
             */ 
            public static function leftJoinRelationshipUsingAlias($relationName, $callback = null, $disableExtraConditions = false)
            {
                                return \Illuminate\Database\Eloquent\Builder::leftJoinRelationshipUsingAlias($relationName, $callback, $disableExtraConditions);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::rightJoinRelationshipUsingAlias()
             * @param mixed $relationName
             * @param mixed $callback
             * @param bool $disableExtraConditions
             * @static 
             */ 
            public static function rightJoinRelationshipUsingAlias($relationName, $callback = null, $disableExtraConditions = false)
            {
                                return \Illuminate\Database\Eloquent\Builder::rightJoinRelationshipUsingAlias($relationName, $callback, $disableExtraConditions);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::joinRelation()
             * @param mixed $relationName
             * @param mixed $callback
             * @param mixed $joinType
             * @param mixed $useAlias
             * @param bool $disableExtraConditions
             * @static 
             */ 
            public static function joinRelation($relationName, $callback = null, $joinType = 'join', $useAlias = false, $disableExtraConditions = false)
            {
                                return \Illuminate\Database\Eloquent\Builder::joinRelation($relationName, $callback, $joinType, $useAlias, $disableExtraConditions);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::leftJoinRelationship()
             * @param mixed $relation
             * @param mixed $callback
             * @param mixed $useAlias
             * @param bool $disableExtraConditions
             * @static 
             */ 
            public static function leftJoinRelationship($relation, $callback = null, $useAlias = false, $disableExtraConditions = false)
            {
                                return \Illuminate\Database\Eloquent\Builder::leftJoinRelationship($relation, $callback, $useAlias, $disableExtraConditions);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::leftJoinRelation()
             * @param mixed $relation
             * @param mixed $callback
             * @param mixed $useAlias
             * @param bool $disableExtraConditions
             * @static 
             */ 
            public static function leftJoinRelation($relation, $callback = null, $useAlias = false, $disableExtraConditions = false)
            {
                                return \Illuminate\Database\Eloquent\Builder::leftJoinRelation($relation, $callback, $useAlias, $disableExtraConditions);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::rightJoinRelationship()
             * @param mixed $relation
             * @param mixed $callback
             * @param mixed $useAlias
             * @param bool $disableExtraConditions
             * @static 
             */ 
            public static function rightJoinRelationship($relation, $callback = null, $useAlias = false, $disableExtraConditions = false)
            {
                                return \Illuminate\Database\Eloquent\Builder::rightJoinRelationship($relation, $callback, $useAlias, $disableExtraConditions);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::rightJoinRelation()
             * @param mixed $relation
             * @param mixed $callback
             * @param mixed $useAlias
             * @param bool $disableExtraConditions
             * @static 
             */ 
            public static function rightJoinRelation($relation, $callback = null, $useAlias = false, $disableExtraConditions = false)
            {
                                return \Illuminate\Database\Eloquent\Builder::rightJoinRelation($relation, $callback, $useAlias, $disableExtraConditions);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::joinNestedRelationship()
             * @param string $relationships
             * @param mixed $callback
             * @param mixed $joinType
             * @param mixed $useAlias
             * @param bool $disableExtraConditions
             * @static 
             */ 
            public static function joinNestedRelationship($relationships, $callback = null, $joinType = 'join', $useAlias = false, $disableExtraConditions = false)
            {
                                return \Illuminate\Database\Eloquent\Builder::joinNestedRelationship($relationships, $callback, $joinType, $useAlias, $disableExtraConditions);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::orderByPowerJoins()
             * @param mixed $sort
             * @param mixed $direction
             * @param mixed $aggregation
             * @param mixed $joinType
             * @static 
             */ 
            public static function orderByPowerJoins($sort, $direction = 'asc', $aggregation = null, $joinType = 'join')
            {
                                return \Illuminate\Database\Eloquent\Builder::orderByPowerJoins($sort, $direction, $aggregation, $joinType);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::orderByLeftPowerJoins()
             * @param mixed $sort
             * @param mixed $direction
             * @static 
             */ 
            public static function orderByLeftPowerJoins($sort, $direction = 'asc')
            {
                                return \Illuminate\Database\Eloquent\Builder::orderByLeftPowerJoins($sort, $direction);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::orderByPowerJoinsCount()
             * @param mixed $sort
             * @param mixed $direction
             * @static 
             */ 
            public static function orderByPowerJoinsCount($sort, $direction = 'asc')
            {
                                return \Illuminate\Database\Eloquent\Builder::orderByPowerJoinsCount($sort, $direction);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::orderByLeftPowerJoinsCount()
             * @param mixed $sort
             * @param mixed $direction
             * @static 
             */ 
            public static function orderByLeftPowerJoinsCount($sort, $direction = 'asc')
            {
                                return \Illuminate\Database\Eloquent\Builder::orderByLeftPowerJoinsCount($sort, $direction);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::orderByPowerJoinsSum()
             * @param mixed $sort
             * @param mixed $direction
             * @static 
             */ 
            public static function orderByPowerJoinsSum($sort, $direction = 'asc')
            {
                                return \Illuminate\Database\Eloquent\Builder::orderByPowerJoinsSum($sort, $direction);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::orderByLeftPowerJoinsSum()
             * @param mixed $sort
             * @param mixed $direction
             * @static 
             */ 
            public static function orderByLeftPowerJoinsSum($sort, $direction = 'asc')
            {
                                return \Illuminate\Database\Eloquent\Builder::orderByLeftPowerJoinsSum($sort, $direction);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::orderByPowerJoinsAvg()
             * @param mixed $sort
             * @param mixed $direction
             * @static 
             */ 
            public static function orderByPowerJoinsAvg($sort, $direction = 'asc')
            {
                                return \Illuminate\Database\Eloquent\Builder::orderByPowerJoinsAvg($sort, $direction);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::orderByLeftPowerJoinsAvg()
             * @param mixed $sort
             * @param mixed $direction
             * @static 
             */ 
            public static function orderByLeftPowerJoinsAvg($sort, $direction = 'asc')
            {
                                return \Illuminate\Database\Eloquent\Builder::orderByLeftPowerJoinsAvg($sort, $direction);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::orderByPowerJoinsMin()
             * @param mixed $sort
             * @param mixed $direction
             * @static 
             */ 
            public static function orderByPowerJoinsMin($sort, $direction = 'asc')
            {
                                return \Illuminate\Database\Eloquent\Builder::orderByPowerJoinsMin($sort, $direction);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::orderByLeftPowerJoinsMin()
             * @param mixed $sort
             * @param mixed $direction
             * @static 
             */ 
            public static function orderByLeftPowerJoinsMin($sort, $direction = 'asc')
            {
                                return \Illuminate\Database\Eloquent\Builder::orderByLeftPowerJoinsMin($sort, $direction);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::orderByPowerJoinsMax()
             * @param mixed $sort
             * @param mixed $direction
             * @static 
             */ 
            public static function orderByPowerJoinsMax($sort, $direction = 'asc')
            {
                                return \Illuminate\Database\Eloquent\Builder::orderByPowerJoinsMax($sort, $direction);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::orderByLeftPowerJoinsMax()
             * @param mixed $sort
             * @param mixed $direction
             * @static 
             */ 
            public static function orderByLeftPowerJoinsMax($sort, $direction = 'asc')
            {
                                return \Illuminate\Database\Eloquent\Builder::orderByLeftPowerJoinsMax($sort, $direction);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::powerJoinHas()
             * @param mixed $relation
             * @param mixed $operator
             * @param mixed $count
             * @param mixed $boolean
             * @param \Closure|array|null $callback
             * @param string|null $morphable
             * @return static 
             * @static 
             */ 
            public static function powerJoinHas($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null, $morphable = null)
            {
                                return \Illuminate\Database\Eloquent\Builder::powerJoinHas($relation, $operator, $count, $boolean, $callback, $morphable);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::hasNestedUsingJoins()
             * @param mixed $relations
             * @param mixed $operator
             * @param mixed $count
             * @param mixed $boolean
             * @param \Closure|array|null $callback
             * @return static 
             * @static 
             */ 
            public static function hasNestedUsingJoins($relations, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
            {
                                return \Illuminate\Database\Eloquent\Builder::hasNestedUsingJoins($relations, $operator, $count, $boolean, $callback);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::powerJoinDoesntHave()
             * @param mixed $relation
             * @param mixed $boolean
             * @param \Closure|null $callback
             * @static 
             */ 
            public static function powerJoinDoesntHave($relation, $boolean = 'and', $callback = null)
            {
                                return \Illuminate\Database\Eloquent\Builder::powerJoinDoesntHave($relation, $boolean, $callback);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\JoinRelationship::powerJoinWhereHas()
             * @param mixed $relation
             * @param mixed $callback
             * @param mixed $operator
             * @param mixed $count
             * @static 
             */ 
            public static function powerJoinWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {
                                return \Illuminate\Database\Eloquent\Builder::powerJoinWhereHas($relation, $callback, $operator, $count);
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\QueryRelationshipExistence::getGroupBy()
             * @static 
             */ 
            public static function getGroupBy()
            {
                                return \Illuminate\Database\Eloquent\Builder::getGroupBy();
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\QueryRelationshipExistence::getSelect()
             * @static 
             */ 
            public static function getSelect()
            {
                                return \Illuminate\Database\Eloquent\Builder::getSelect();
            }
             
                /**
             * 
             *
             * @see \Kirschbaum\PowerJoins\Mixins\QueryRelationshipExistence::getRelationWithoutConstraintsProxy()
             * @param mixed $relation
             * @static 
             */ 
            public static function getRelationWithoutConstraintsProxy($relation)
            {
                                return \Illuminate\Database\Eloquent\Builder::getRelationWithoutConstraintsProxy($relation);
            }
             
                /**
             * 
             *
             * @see \Tpetry\PostgresqlEnhanced\Eloquent\Mixins\BuilderLazyByCursor::lazyByCursor()
             * @param int $chunkSize
             * @return \Illuminate\Support\LazyCollection 
             * @static 
             */ 
            public static function lazyByCursor($chunkSize = 1000)
            {
                                return \Illuminate\Database\Eloquent\Builder::lazyByCursor($chunkSize);
            }
             
                /**
             * 
             *
             * @see \Tpetry\PostgresqlEnhanced\Eloquent\Mixins\BuilderReturning::deleteReturning()
             * @param array $returning
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function deleteReturning($returning = [])
            {
                                return \Illuminate\Database\Eloquent\Builder::deleteReturning($returning);
            }
             
                /**
             * 
             *
             * @see \Tpetry\PostgresqlEnhanced\Eloquent\Mixins\BuilderReturning::forceDeleteReturning()
             * @param array $returning
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function forceDeleteReturning($returning = [])
            {
                                return \Illuminate\Database\Eloquent\Builder::forceDeleteReturning($returning);
            }
             
                /**
             * 
             *
             * @see \Tpetry\PostgresqlEnhanced\Eloquent\Mixins\BuilderReturning::insertOrIgnoreReturning()
             * @param array $values
             * @param array $returning
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function insertOrIgnoreReturning($values, $returning = [])
            {
                                return \Illuminate\Database\Eloquent\Builder::insertOrIgnoreReturning($values, $returning);
            }
             
                /**
             * 
             *
             * @see \Tpetry\PostgresqlEnhanced\Eloquent\Mixins\BuilderReturning::insertReturning()
             * @param array $values
             * @param array $returning
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function insertReturning($values, $returning = [])
            {
                                return \Illuminate\Database\Eloquent\Builder::insertReturning($values, $returning);
            }
             
                /**
             * 
             *
             * @see \Tpetry\PostgresqlEnhanced\Eloquent\Mixins\BuilderReturning::insertUsingReturning()
             * @param array $columns
             * @param mixed $query
             * @param array $returning
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function insertUsingReturning($columns, $query, $returning = [])
            {
                                return \Illuminate\Database\Eloquent\Builder::insertUsingReturning($columns, $query, $returning);
            }
             
                /**
             * 
             *
             * @see \Tpetry\PostgresqlEnhanced\Eloquent\Mixins\BuilderReturning::updateFromReturning()
             * @param array $values
             * @param array $returning
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function updateFromReturning($values, $returning = [])
            {
                                return \Illuminate\Database\Eloquent\Builder::updateFromReturning($values, $returning);
            }
             
                /**
             * 
             *
             * @see \Tpetry\PostgresqlEnhanced\Eloquent\Mixins\BuilderReturning::updateOrInsertReturning()
             * @param array $attributes
             * @param array $values
             * @param array $returning
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function updateOrInsertReturning($attributes, $values = [], $returning = [])
            {
                                return \Illuminate\Database\Eloquent\Builder::updateOrInsertReturning($attributes, $values, $returning);
            }
             
                /**
             * 
             *
             * @see \Tpetry\PostgresqlEnhanced\Eloquent\Mixins\BuilderReturning::updateReturning()
             * @param array $values
             * @param array $returning
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function updateReturning($values, $returning = [])
            {
                                return \Illuminate\Database\Eloquent\Builder::updateReturning($values, $returning);
            }
             
                /**
             * 
             *
             * @see \Tpetry\PostgresqlEnhanced\Eloquent\Mixins\BuilderReturning::upsertReturning()
             * @param array $values
             * @param array|string $uniqueBy
             * @param array|null $update
             * @param array $returning
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function upsertReturning($values, $uniqueBy, $update = null, $returning = [])
            {
                                return \Illuminate\Database\Eloquent\Builder::upsertReturning($values, $uniqueBy, $update, $returning);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function select($columns = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->select($columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function selectSub($query, $as)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->selectSub($query, $as);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function selectRaw($expression, $bindings = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->selectRaw($expression, $bindings);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function fromSub($query, $as)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->fromSub($query, $as);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function fromRaw($expression, $bindings = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->fromRaw($expression, $bindings);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function addSelect($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->addSelect($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function distinct()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->distinct();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function from($table, $as = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->from($table, $as);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function useIndex($index)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->useIndex($index);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function forceIndex($index)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->forceIndex($index);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function ignoreIndex($index)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->ignoreIndex($index);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->join($table, $first, $operator, $second, $type, $where);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function joinWhere($table, $first, $operator, $second, $type = 'inner')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->joinWhere($table, $first, $operator, $second, $type);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function joinSub($query, $as, $first, $operator = null, $second = null, $type = 'inner', $where = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->joinSub($query, $as, $first, $operator, $second, $type, $where);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function leftJoin($table, $first, $operator = null, $second = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->leftJoin($table, $first, $operator, $second);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function leftJoinWhere($table, $first, $operator, $second)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->leftJoinWhere($table, $first, $operator, $second);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function leftJoinSub($query, $as, $first, $operator = null, $second = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->leftJoinSub($query, $as, $first, $operator, $second);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function rightJoin($table, $first, $operator = null, $second = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->rightJoin($table, $first, $operator, $second);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function rightJoinWhere($table, $first, $operator, $second)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->rightJoinWhere($table, $first, $operator, $second);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function rightJoinSub($query, $as, $first, $operator = null, $second = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->rightJoinSub($query, $as, $first, $operator, $second);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function crossJoin($table, $first = null, $operator = null, $second = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->crossJoin($table, $first, $operator, $second);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function crossJoinSub($query, $as)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->crossJoinSub($query, $as);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function mergeWheres($wheres, $bindings)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->mergeWheres($wheres, $bindings);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function prepareValueAndOperator($value, $operator, $useDefault = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->prepareValueAndOperator($value, $operator, $useDefault);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereColumn($first, $operator, $second, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereColumn($first, $operator = null, $second = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereColumn($first, $operator, $second);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereRaw($sql, $bindings = [], $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereRaw($sql, $bindings, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereRaw($sql, $bindings = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereRaw($sql, $bindings);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereIn($column, $values, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereIn($column, $values, $boolean, $not);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereIn($column, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereIn($column, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereNotIn($column, $values, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNotIn($column, $values, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereNotIn($column, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereNotIn($column, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereIntegerInRaw($column, $values, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereIntegerInRaw($column, $values, $boolean, $not);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereIntegerInRaw($column, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereIntegerInRaw($column, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereIntegerNotInRaw($column, $values, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereIntegerNotInRaw($column, $values, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereIntegerNotInRaw($column, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereIntegerNotInRaw($column, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereNull($columns, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNull($columns, $boolean, $not);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereNull($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereNull($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereNotNull($columns, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNotNull($columns, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereBetween($column, $values, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereBetween($column, $values, $boolean, $not);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereBetweenColumns($column, $values, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereBetweenColumns($column, $values, $boolean, $not);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereBetween($column, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereBetween($column, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereBetweenColumns($column, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereBetweenColumns($column, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereNotBetween($column, $values, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNotBetween($column, $values, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereNotBetweenColumns($column, $values, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNotBetweenColumns($column, $values, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereNotBetween($column, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereNotBetween($column, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereNotBetweenColumns($column, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereNotBetweenColumns($column, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereNotNull($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereNotNull($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereDate($column, $operator, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereDate($column, $operator, $value, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereDate($column, $operator, $value = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereDate($column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereTime($column, $operator, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereTime($column, $operator, $value, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereTime($column, $operator, $value = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereTime($column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereDay($column, $operator, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereDay($column, $operator, $value, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereDay($column, $operator, $value = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereDay($column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereMonth($column, $operator, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereMonth($column, $operator, $value, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereMonth($column, $operator, $value = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereMonth($column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereYear($column, $operator, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereYear($column, $operator, $value, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereYear($column, $operator, $value = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereYear($column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereNested($callback, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNested($callback, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function forNestedWhere()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->forNestedWhere();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function addNestedWhereQuery($query, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->addNestedWhereQuery($query, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereExists($callback, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereExists($callback, $boolean, $not);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereExists($callback, $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereExists($callback, $not);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereNotExists($callback, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNotExists($callback, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereNotExists($callback)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereNotExists($callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function addWhereExistsQuery($query, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->addWhereExistsQuery($query, $boolean, $not);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereRowValues($columns, $operator, $values, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereRowValues($columns, $operator, $values, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereRowValues($columns, $operator, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereRowValues($columns, $operator, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereJsonContains($column, $value, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereJsonContains($column, $value, $boolean, $not);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereJsonContains($column, $value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereJsonContains($column, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereJsonDoesntContain($column, $value, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereJsonDoesntContain($column, $value, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereJsonDoesntContain($column, $value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereJsonDoesntContain($column, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereJsonContainsKey($column, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereJsonContainsKey($column, $boolean, $not);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereJsonContainsKey($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereJsonContainsKey($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereJsonDoesntContainKey($column, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereJsonDoesntContainKey($column, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereJsonDoesntContainKey($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereJsonDoesntContainKey($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereJsonLength($column, $operator, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereJsonLength($column, $operator, $value, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereJsonLength($column, $operator, $value = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereJsonLength($column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function dynamicWhere($method, $parameters)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->dynamicWhere($method, $parameters);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function whereFullText($columns, $value, $options = [], $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereFullText($columns, $value, $options, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orWhereFullText($columns, $value, $options = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereFullText($columns, $value, $options);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function groupBy(...$groups)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->groupBy(...$groups);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function groupByRaw($sql, $bindings = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->groupByRaw($sql, $bindings);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function having($column, $operator = null, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->having($column, $operator, $value, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orHaving($column, $operator = null, $value = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orHaving($column, $operator, $value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function havingNested($callback, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->havingNested($callback, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function addNestedHavingQuery($query, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->addNestedHavingQuery($query, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function havingNull($columns, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->havingNull($columns, $boolean, $not);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orHavingNull($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orHavingNull($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function havingNotNull($columns, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->havingNotNull($columns, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orHavingNotNull($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orHavingNotNull($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function havingBetween($column, $values, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->havingBetween($column, $values, $boolean, $not);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function havingRaw($sql, $bindings = [], $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->havingRaw($sql, $bindings, $boolean);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orHavingRaw($sql, $bindings = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orHavingRaw($sql, $bindings);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orderBy($column, $direction = 'asc')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orderBy($column, $direction);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orderByDesc($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orderByDesc($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function inRandomOrder($seed = '')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->inRandomOrder($seed);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function orderByRaw($sql, $bindings = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orderByRaw($sql, $bindings);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function skip($value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->skip($value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function offset($value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->offset($value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function take($value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->take($value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function limit($value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->limit($value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function forPage($page, $perPage = 15)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->forPage($page, $perPage);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function forPageBeforeId($perPage = 15, $lastId = 0, $column = 'id')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->forPageBeforeId($perPage, $lastId, $column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->forPageAfterId($perPage, $lastId, $column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function reorder($column = null, $direction = 'asc')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->reorder($column, $direction);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function union($query, $all = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->union($query, $all);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function unionAll($query)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->unionAll($query);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function lock($value = true)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->lock($value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function lockForUpdate()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->lockForUpdate();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function sharedLock()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->sharedLock();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function beforeQuery($callback)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->beforeQuery($callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function applyBeforeQueryCallbacks()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->applyBeforeQueryCallbacks();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function toSql()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->toSql();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function toRawSql()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->toRawSql();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function rawValue($expression, $bindings = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->rawValue($expression, $bindings);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function getCountForPagination($columns = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->getCountForPagination($columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function implode($column, $glue = '')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->implode($column, $glue);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function exists()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->exists();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function doesntExist()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->doesntExist();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function existsOr($callback)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->existsOr($callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function doesntExistOr($callback)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->doesntExistOr($callback);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function count($columns = '*')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->count($columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function min($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->min($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function max($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->max($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function sum($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->sum($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function avg($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->avg($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function average($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->average($column);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function aggregate($function, $columns = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->aggregate($function, $columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function numericAggregate($function, $columns = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->numericAggregate($function, $columns);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function insert($values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->insert($values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function insertOrIgnore($values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->insertOrIgnore($values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function insertGetId($values, $sequence = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->insertGetId($values, $sequence);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function insertUsing($columns, $query)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->insertUsing($columns, $query);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function updateFrom($values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->updateFrom($values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function updateOrInsert($attributes, $values = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->updateOrInsert($attributes, $values);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function incrementEach($columns, $extra = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->incrementEach($columns, $extra);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function decrementEach($columns, $extra = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->decrementEach($columns, $extra);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function truncate()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->truncate();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function getColumns()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->getColumns();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function raw($value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->raw($value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function getBindings()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->getBindings();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function getRawBindings()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->getRawBindings();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function setBindings($bindings, $type = 'where')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->setBindings($bindings, $type);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function addBinding($value, $type = 'where')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->addBinding($value, $type);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function castBinding($value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->castBinding($value);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function mergeBindings($query)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->mergeBindings($query);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function cleanBindings($bindings)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->cleanBindings($bindings);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function getProcessor()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->getProcessor();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function getGrammar()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->getGrammar();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function useWritePdo()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->useWritePdo();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function cloneWithout($properties)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->cloneWithout($properties);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function cloneWithoutBindings($except)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->cloneWithoutBindings($except);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function dump()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->dump();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function dumpRawSql()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->dumpRawSql();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function dd()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->dd();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function ddRawSql()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->ddRawSql();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function explain()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->explain();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function macro($name, $macro)
            {
                                return \Illuminate\Database\Query\Builder::macro($name, $macro);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function mixin($mixin, $replace = true)
            {
                                return \Illuminate\Database\Query\Builder::mixin($mixin, $replace);
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function flushMacros()
            {
                                return \Illuminate\Database\Query\Builder::flushMacros();
            }
             
                /**
             * 
             *
             * @static 
             */ 
            public static function macroCall($method, $parameters)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->macroCall($method, $parameters);
            }
                    }
            class Event extends \Illuminate\Support\Facades\Event {}
            class File extends \Illuminate\Support\Facades\File {}
            class Gate extends \Illuminate\Support\Facades\Gate {}
            class Hash extends \Illuminate\Support\Facades\Hash {}
            class Http extends \Illuminate\Support\Facades\Http {}
            class Js extends \Illuminate\Support\Js {}
            class Lang extends \Illuminate\Support\Facades\Lang {}
            class Log extends \Illuminate\Support\Facades\Log {}
            class Mail extends \Illuminate\Support\Facades\Mail {}
            class Notification extends \Illuminate\Support\Facades\Notification {}
            class Number extends \Illuminate\Support\Number {}
            class Password extends \Illuminate\Support\Facades\Password {}
            class Process extends \Illuminate\Support\Facades\Process {}
            class Queue extends \Illuminate\Support\Facades\Queue {}
            class RateLimiter extends \Illuminate\Support\Facades\RateLimiter {}
            class Redirect extends \Illuminate\Support\Facades\Redirect {}
            class Request extends \Illuminate\Support\Facades\Request {}
            class Response extends \Illuminate\Support\Facades\Response {}
            class Route extends \Illuminate\Support\Facades\Route {}
            class Schema extends \Illuminate\Support\Facades\Schema {}
            class Session extends \Illuminate\Support\Facades\Session {}
            class Storage extends \Illuminate\Support\Facades\Storage {}
            class Str extends \Illuminate\Support\Str {}
            class URL extends \Illuminate\Support\Facades\URL {}
            class Validator extends \Illuminate\Support\Facades\Validator {}
            class View extends \Illuminate\Support\Facades\View {}
            class Vite extends \Illuminate\Support\Facades\Vite {}
            class Debugbar extends \Barryvdh\Debugbar\Facades\Debugbar {}
            class Preload extends \Laragear\Preload\Facades\Preload {}
            class Horizon extends \Laravel\Horizon\Horizon {}
            class Octane extends \Laravel\Octane\Facades\Octane {}
            class Livewire extends \Livewire\Livewire {}
            class Flare extends \Spatie\LaravelIgnition\Facades\Flare {}
     
}




