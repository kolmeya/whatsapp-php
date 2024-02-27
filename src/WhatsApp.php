<?php

namespace Kolmeya\WhatsApp;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use InvalidArgumentException;
use Kolmeya\WhatsApp\Resources\Auth;
use Kolmeya\WhatsApp\Resources\Chats;
use Kolmeya\WhatsApp\Resources\Device;
use Kolmeya\WhatsApp\Resources\GroupChat;
use Kolmeya\WhatsApp\Resources\Groups;
use Kolmeya\WhatsApp\Resources\IndividualChat;

class WhatsApp
{
    /**
     * The HTTP client instance.
     * @var mixed
     */
    private $client;

    /**
     * The configuration array.
     * @var mixed
     */
    private $config;

    /**
     * Create a new instance.
     *
     * @param array $config
     * @return void
     * @throws InvalidArgumentException
     */
    public function __construct(array $config = [])
    {
        $this->setDefaultConfig();
        $this->configure($config);
        $this->initializeHttpClient();
    }

    /**
     * Set the default configuration.
     *
     * @return void
     */
    private function setDefaultConfig()
    {
        $this->config = [
            'base_uri' => 'https://whatsapi.kolmeya.com',
            'bearer_token' => null,
            'channel_id' => null
        ];
    }

    /**
     * Configure the SDK.
     *
     * @param array $config
     * @return void
     * @throws InvalidArgumentException
     */
    private function configure(array $config)
    {
        foreach ($config as $key => $value) {
            if (!array_key_exists($key, $this->config)) {
                throw new InvalidArgumentException("Invalid configuration key: {$key}");
            }

            $this->config[$key] = $value;
        }
    }

    /**
     * Initialize the HTTP client.
     *
     * @return void
     * @throws InvalidArgumentException
     */
    private function initializeHttpClient()
    {
        if (!$this->config['bearer_token'] || !$this->config['channel_id']) {
            throw new InvalidArgumentException('Bearer token and channel ID are required');
        }

        $this->client = new Client([
            'base_uri' => $this->config['base_uri'],
            'headers' => [
                'Authorization' => 'Bearer ' . $this->config['bearer_token'],
                'X-Channel-ID' => $this->config['channel_id'],
            ],
        ]);
    }

    /**
     * Set a configuration value.
     *
     * @param mixed $key
     * @param mixed $value
     * @return void
     * @throws InvalidArgumentException
     */
    public function setConfig($key, $value)
    {
        if (!array_key_exists($key, $this->config)) {
            throw new InvalidArgumentException("Invalid configuration key: {$key}");
        }

        $this->config[$key] = $value;
        $this->initializeHttpClient();
    }

    /**
     * Allows for the injection of a custom Guzzle client.
     * This is particularly useful for unit testing.
     *
     * @param Client $client The Guzzle client instance.
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Send a GET request to the specified URI.
     *
     * @param string $uri The URI to send the request to.
     * @return array The response data.
     */
    public function get($uri)
    {
        try {
            $response = $this->client->request('GET', $uri);
            return json_decode($response->getBody(), true);
        } catch (GuzzleException $e) {
            throw new \RuntimeException('GET request failed: ' . $e->getMessage());
        }
    }

    /**
     * Send a POST request to the specified URI.
     *
     * @param string $uri The URI to send the request to.
     * @param array $data The data to send with the request.
     * @return array The response data.
     */
    public function post($uri, array $data = [])
    {
        try {
            $response = $this->client->request('POST', $uri, $data);
            return json_decode($response->getBody(), true);
        } catch (GuzzleException $e) {
            throw new \RuntimeException('POST request failed: ' . $e->getMessage());
        }
    }

    /**
     * Send a PUT request to the specified URI.
     *
     * @param string $uri The URI to send the request to.
     * @param array $data The data to send with the request.
     * @return array The response data.
     */
    public function put($uri, array $data = [])
    {
        try {
            $response = $this->client->request('PUT', $uri, $data);
            return json_decode($response->getBody(), true);
        } catch (GuzzleException $e) {
            throw new \RuntimeException('PUT request failed: ' . $e->getMessage());
        }
    }

    /**
     * Send a DELETE request to the specified URI.
     *
     * @param string $uri The URI to send the request to.
     * @return array The response data.
     */
    public function delete($uri)
    {
        try {
            $response = $this->client->request('DELETE', $uri);
            return json_decode($response->getBody(), true);
        } catch (GuzzleException $e) {
            throw new \RuntimeException('DELETE request failed: ' . $e->getMessage());
        }
    }

    /**
     * Send a PATCH request to the specified URI.
     *
     * @param string $uri The URI to send the request to.
     * @param array $data The data to send with the request.
     * @return array The response data.
     */
    public function patch($uri, array $data = [])
    {
        try {
            $response = $this->client->request('PATCH', $uri, $data);
            return json_decode($response->getBody(), true);
        } catch (GuzzleException $e) {
            throw new \RuntimeException('PATCH request failed: ' . $e->getMessage());
        }
    }

    public function auth()
    {
        return new Auth($this);
    }

    public function chats()
    {
        return new Chats($this);
    }

    public function chat(string $number)
    {
        return new IndividualChat($this, $number);
    }

    public function device()
    {
        return new Device($this);
    }

    public function groups()
    {
        return new Groups($this);
    }

    public function group(string $id)
    {
        return new GroupChat($this, $id);
    }
}
