<?php

namespace AntyRace\OAuth2\Server\TokenType;

use League\OAuth2\Server\TokenType\AbstractTokenType;
use League\OAuth2\Server\TokenType\TokenTypeInterface;
use Symfony\Component\HttpFoundation\Request;

class Bearer extends AbstractTokenType implements TokenTypeInterface
{
    /**
     * {@inheritdoc}
     */
    public function generateResponse()
    {
        $return = [
            'access_token'        => $this->getParam('access_token'),
            'token_type'          => 'Bearer',
            'expire_access_token' => $this->getParam('expire_access_token'),
        ];

        if (!is_null($this->getParam('refresh_token'))) {
            $return['refresh_token']        = $this->getParam('refresh_token');
            $return['expire_refresh_token'] = $this->getParam('expire_refresh_token');
        }

        return $return;
    }

    /**
     * {@inheritdoc}
     */
    public function determineAccessTokenInHeader(Request $request)
    {
        $header      = $request->headers->get('Authorization');
        $accessToken = trim(preg_replace('/^(?:\s+)?Bearer\s/', '', $header));

        return ($accessToken === 'Bearer') ? '' : $accessToken;
    }
}
