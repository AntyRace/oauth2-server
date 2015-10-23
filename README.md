# oauth2-server
Some modifications in oauth2 server

## Installation

In your `config/oauth2.php` in 'grant_types' array change

1.
```php
    '\League\OAuth2\Server\Grant\PasswordGrant'
    '\AntyRace\OAuth2\Server\Grant\PasswordGrant'
```

2.
```php
    '\League\OAuth2\Server\Grant\RefreshTokenGrant'
    '\AntyRace\OAuth2\Server\Grant\RefreshTokenGrant'
```

3.
```php
    'token_type' => 'League\OAuth2\Server\TokenType\Bearer'
    'token_type' => 'AntyRace\OAuth2\Server\TokenType\Bearer'
```
