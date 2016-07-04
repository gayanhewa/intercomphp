<?php

class IntercomTest extends \PHPUnit_Framework_TestCase
{
  protected $intercom;

  public function setUp()
  {
    $this->intercom = new Intercom\Intercom("key", "sec");
  }

  public function testCanMakeUserModel()
  {
      $users = $this->intercom->make('users');
      $this->assertTrue($users instanceOf Intercom\Models\Users);

  }

  public function testCanMakeEventModel()
  {
      $users = $this->intercom->make('events');
      $this->assertTrue($users instanceOf Intercom\Models\Events);

  }

  public function testCanMakeLeadsModel()
  {
      $users = $this->intercom->make('leads');
      $this->assertTrue($users instanceOf Intercom\Models\Leads);

  }

  public function testCanMakeSegmentsModel()
  {
      $users = $this->intercom->make('segments');
      $this->assertTrue($users instanceOf Intercom\Models\Segments);

  }

  public function testCanMakeTagsModel()
  {
      $users = $this->intercom->make('tags');
      $this->assertTrue($users instanceOf Intercom\Models\Tags);

  }

}
