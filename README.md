# oauth2-server
Some modifications in oauth2 server

## Installation

In your `config/oauth2.php` in 'grant_types' array change
```php
    '\League\OAuth2\Server\Grant\PasswordGrant'
```
to:
```php
    '\AntyRace\OAuth2\Server\Grant\PasswordGrant'
```

```php
    '\League\OAuth2\Server\Grant\RefreshTokenGrant'
```
to:
```php
    '\AntyRace\OAuth2\Server\Grant\RefreshTokenGrant'
```

```php
    'token_type' => 'League\OAuth2\Server\TokenType\Bearer'
```
to:
```php
    'token_type' => 'AntyRace\OAuth2\Server\TokenType\Bearer'
```
