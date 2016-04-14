<?php
/**
 * @file
 * MenuHtmlCrawl class.
 */

namespace MigrationTools\Generator;

/**
 * Creates a menu import file based on crawling a live html menu.
 */
class MenuHtmlCrawl extends MenuGenerator {
  /**
   * An array of menu elements.
   * @var array
   */
  public $menu;

  /**
   * {@inheritdoc}
   */
  public function __construct(MenuParametersHtmlCrawl $parameters, MenuEngineHtmlCrawl $engine) {
    parent::__construct($parameters, $engine);
    // Set defaults.
    $this->fileName = $this->parameters->getSubDirectory() . "-menu.txt";
    $this->menu = array();
  }

  /**
   * Calls the steps needed to build the import file.
   *
   * @return string
   *   The contents of the menu import file that was generated.
   */
  public function generate() {
    // Generate the file's content.
    $this->menuFileContent = $this->engine->generate();
    $this->saveImportFile();
    return $this->menuFileContent;
  }
}
