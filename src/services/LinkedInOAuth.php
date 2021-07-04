<?php
/**
 * Created by PhpStorm.
 * PHP Version: 7.4
 *
 * @category
 * @author     Oleh Boiko <developer@mackais.com>
 * @copyright  2018-2020 @MackRais
 * @link       <https://mackrais.com>
 * @date       3/26/20
 */

declare(strict_types=1);

namespace mackrais\portfolio\services;

use LinkedIn\Client;
use LinkedIn\Scope;

class LinkedInOAuth
{
    private string $clientID;

    private string $clientSecret;

    private string $redirectUrl;

    private string $apiRoot;

    private Client $client;

    protected $scopes = [
        'r_liteprofile',
        Scope::READ_EMAIL_ADDRESS,
    ];

    public function __construct(string $clientID, string $clientSecret, string $redirectUrl, string $apiRoot = 'https://api.linkedin.com/v2/')
    {
        $this->clientID = $clientID;
        $this->clientSecret = $clientSecret;
        $this->redirectUrl = $redirectUrl;
        $this->apiRoot = $apiRoot;

        $this->client = new Client($this->clientID, $this->clientSecret);
        $this->client->setRedirectUrl($this->redirectUrl);
        $this->client->setApiRoot($this->apiRoot);
    }

    public function getLoginUrl(): string
    {
        return $this->client->getLoginUrl($this->scopes);
    }

    public function setScopes(array $scopes): void
    {
        $this->scopes = $scopes;
    }

    public function getScopes()
    {
        return $this->scopes;
    }

    public function getClient(): Client{
        return $this->client;
    }
}
