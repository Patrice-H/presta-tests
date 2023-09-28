<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDIPht8erB9BEiD'."\n".'Mrgq5uN4Lasf5zsxAKjw+4ejvamX48McDfjGnpCaJ6qZGIwWrfDOu+2zYZ1RL1kS'."\n".'msORMp9FPFdMbmy53hSYgezMK2AWOGJRwDddxEGwTvmFPbMNCaHN9+B6fMtpa0tJ'."\n".'8RN1yo79RKOh+HzL7LzjeTjIQ4Bo56Ag+ZEB330PI4wBkSUfidhFgywP3X8WQ4kj'."\n".'T+kE1D45hYHgBVL6kQhPotT9BX9GtFzr5EJEwtcqvCRbdn5AsbfhdJEks//4ccs+'."\n".'o+gmYxvyKBLNo1E8/j6S0UgkVAtTRRDmJ4JIuMlecdM11iK1/sFZCpQeB1amL7mg'."\n".'UeUDmuwZAgMBAAECggEAW24gVsIee7bM9TrfZJdwHZucm0CVglZuzTnMQTOEkFnq'."\n".'6JBomygjln+uIaFXtbNOVNbyPgnALyWTYi9QRKf8mTxoD/oLowKIHOqWGNNlWD/+'."\n".'hJ1jqmjGJZ6px/DYJIfVXZpk4QjCSCw5gFWXMR2AFJyWqoovUV2TEbpz9tz7cOoj'."\n".'JKFA7hlsQwhqauu91t1ZVa5k5D+ILKTRM7ZG4OS0EZwvL3rlrEm9B/FyPXxEPjir'."\n".'HEL5LQCECVh8KKFJZGuRt8ESE2AuWsZF7/PPSIH+CsTsKz3t/sZY9D4MmiUiNHh2'."\n".'YgpZSWL2ynhbff0qN1oJ28F8nWLmBOj5dX2soLywAQKBgQDmZXgygrdCdg+o7nL+'."\n".'MKLK/NrIErJ+aG2B2HgAAMbBsHMXpiHfFerCEOrpTzI3mW617JuhKz73agNQ7zdT'."\n".'ymdEq3J6lguEPnFXHIKg+7B+o0rOlhKh8/zu2shXJ7STq0aKvRsxLx/UHI5eRyB2'."\n".'ZhSDvn0kYiV8zBYqweRa0xGggQKBgQDefsuugjeBSunRdQC3Y0qy6sKmSOStSIlK'."\n".'mT71cd5J8D4+diqWFf/0K8YI6XvMf2jRsiJKYucRqfYRHKw98/BDEbYJGt9bgA/Y'."\n".'uJ1dyJP3O1VjSZTH0J27w3kSueEHrLGbdT/15+hqWJVrF1uAZ0j8S+ukGaY158vk'."\n".'gB/6pnJ/mQKBgA+IE5xEF5qRXujiejoMiUzp0s3eBM5kt80jDKPjaYKxJHEZr/rb'."\n".'/WFrxopH3njFDSOSecNZqPsA2IxiM/agFGoarLL63nfhxb47m8rCbNl8pJRcpZDp'."\n".'Y8muUgceFBxIVY8QxH6CUMD509cjMFsK8qMW+lSzkRdiorPrMju1MuEBAoGBAIyV'."\n".'zZlMiknVzfwdVACMaqy2jZuIP4YGaUmLny5zbqOFe67391yyNfJQnmcPMLw8XTzy'."\n".'s5wQ9jRBEkwps+PJeSzHyh/irPMh7eFgdX7GuEflY8TCv5GqDaCQmLXuYXP5+Jdj'."\n".'9LAqgr5/jpoGPjjaClHwnsonstAo0LpnAs3b0kkxAoGBAILSKjbuSDqiguHoV8Pb'."\n".'lTSu4r8aHp0XkIo0IDgcbyN8x3VA2t4mOE0CSyfcN4Arhn6sxV5IBrY/ZrcjrbBX'."\n".'XbHO0HvyrdxUIWNht6ApTsHxx/RVClHJB+HmysNI1zaidcnDBTb1zfwqoEKc3O37'."\n".'VqWKTjGNtqxjcCjy/PToDupR'."\n".'-----END PRIVATE KEY-----'."\n".''), 'def0000075e482abcd4c26e50bb28e5b0093d1d94ba392fcaceb0f293fd44cb85712d52580cace1e066bdbddab9884c160ccd95d4e65dfd2a174d1e666fc94c62da023eb');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
