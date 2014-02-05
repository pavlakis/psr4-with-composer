<?php

namespace MyApp\Tests\Http;

class RequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Request
     */
    protected $request;

    public function setUp()
    {
        $this->request = new Request();
    }

    public function testGet()
    {
        $request = new Request(array('q1' => 'query1'));

        $this->assertEquals('query1', $request->get('q1', false));
    }

    public function testGetKeyNotFoundReturnsDefaultNull()
    {
        $request = new Request(array('q1' => 'query1'));

        $this->assertNull($request->get('q3'));
    }

    public function testGetKeyNotFoundReturnsCustomEmptyArray()
    {
        $request = new Request(array('q1' => 'query1'));

        $this->assertEquals(array(), $request->get('q3', array()));
    }

    public function testGetPost()
    {
        $request = new Request(array(), array('p1' => 'post1'));

        $this->assertEquals('post1', $request->getPost('p1', false));


    }

    public function testGetQuery()
    {
        $request = new Request(array('q1' => 'query1'));

        $this->assertEquals('query1', $request->getQuery('q1', false));
    }

}
