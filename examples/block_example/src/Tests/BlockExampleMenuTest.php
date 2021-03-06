<?php

namespace Drupal\block_example\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Test the user-facing menus in Block Example.
 *
 * @ingroup block_example
 *
 * @group block_example
 * @group examples
 */
class BlockExampleMenuTest extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('block', 'block_example');

  /**
   * The installation profile to use with this test.
   *
   * This test class requires the "Tools" block.
   *
   * @var string
   */
  protected $profile = 'minimal';

  /**
   * Test for a link to the block example in the Tools menu.
   */
  public function testBlockExampleLink() {
    $this->drupalGet('');
    $this->assertLinkByHref('examples/block-example');
  }

  /**
   * Tests block_example menus.
   */
  public function testBlockExampleMenu() {
    $this->drupalGet('examples/block-example');
    $this->assertResponse(200, 'Description page exists.');
  }

}
