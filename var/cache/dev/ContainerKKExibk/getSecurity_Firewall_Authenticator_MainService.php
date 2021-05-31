<?php

namespace ContainerKKExibk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Authenticator_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.authenticator.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AuthenticatorManagerListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\AuthenticatorManager.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authenticator\\AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authenticator\\InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Authenticator\\GuardBridgeAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Authenticator\\AbstractFormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\PasswordAuthenticatedInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Util\\TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'\\src\\Security\\AuthServiceAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authenticator\\AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authenticator\\AbstractLoginFormAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authenticator\\FormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\DefaultAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authenticator\\HttpBasicAuthenticator.php';

        $a = ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService'));
        $b = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $c = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($b, []);
        $c->setOptions(['login_path' => '/login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $c->setProviderKey('main');
        $d = ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService'));

        $e = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($container->services['http_kernel'] ?? $container->getHttpKernelService()), $b, [], $d);
        $e->setOptions(['login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $container->privates['security.firewall.authenticator.main'] = new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([0 => new \Symfony\Component\Security\Guard\Authenticator\GuardBridgeAuthenticator(new \App\Security\AuthServiceAuthenticator(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['router'] ?? $container->getRouterService()), ($container->services['security.csrf.token_manager'] ?? $container->load('getSecurity_Csrf_TokenManagerService')), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService'))), $a), 1 => new \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator($b, $a, $c, $e, ['check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => false, 'login_path' => '/login', 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'enable_csrf' => false, 'post_only' => true]), 2 => new \Symfony\Component\Security\Http\Authenticator\HttpBasicAuthenticator('Secured Area', $a, $d)], ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.event_dispatcher.main'] ?? $container->load('getSecurity_EventDispatcher_MainService')), 'main', $d, true));
    }
}