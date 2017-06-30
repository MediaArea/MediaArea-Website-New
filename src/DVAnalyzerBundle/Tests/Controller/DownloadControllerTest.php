<?php

namespace DVAnalyzerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DownloadControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testArch()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download/Arch_Linux');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testCentos()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download/CentOS');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testDebian()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download/Debian');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testFedora()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download/Fedora');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testMac()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download/Mac_OS');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testMageia()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download/Mageia');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testOpensuse()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download/openSUSE');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testRhel()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download/RHEL');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testSle()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download/SLE');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testSource()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download/Source');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testUbuntu()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download/Ubuntu');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testWindows()
    {
        $client = static::createClient();

        $client->request('GET', '/DVAnalyzer/Download/Windows');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}