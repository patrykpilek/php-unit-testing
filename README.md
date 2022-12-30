# PHP Unit Testing with PHPUnit

## Content

- [x] Unit testing with PHPUnit: the basics
  - [Installing PHPUnit](https://phpunit.de/getting-started/phpunit-9.html)
  - write and run your first test: an introduction to assertions
  - test a function: using multiple assertions
  - [List of PHPUnit assertions](https://phpunit.readthedocs.io/en/9.5/assertions.html?highlight=assertions)
  - test that incorrect results are not returned: using multiple test methods
  - test a class: fixing bugs through testing
  - how to name your test methods
- [x] Configuring the PHPUnit test environment
  - the PHPUnit test runner: specify different options when running tests
  - [The PHPUnit XML Configuration file](https://phpunit.readthedocs.io/en/9.5/configuration.html?highlight=configuration)
  - configure PHPUnit: the XML configuration file
  - [PHP: sql_autoload_register](https://www.php.net/manual/en/function.spl-autoload-register.php)
  - [Composer autoloading](https://getcomposer.org/doc/04-schema.md#autoload)
  - autoload classes being tested using Composer
- [x] Test dependencies, fixtures and exceptions
  - unit test a queue class
  - test dependencies: make one test method dependent on another
  - [Fixtures in PHPUnit](https://phpunit.readthedocs.io/en/9.5/fixtures.html?highlight=fixtures#fixtures)
  - fixtures: set up the known state of the tests using setUp and tearDown
  - easily add a new test method using the test fixture
  - share fixtures between tests for resource-intensive data
  - [Testing exceptions with PHPUnit](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html?highlight=testing-exceptions#testing-exceptions)
  - testing exceptions: expecting code to throw an exception
- [x] Test doubles: mocks and stubs
  - test doubles: create mock objects to remove dependencies on external resources
  - dependency injection: inject objects that a class depends on
  - [List of PHPUnit mock object matcher methods](https://phpunit.readthedocs.io/en/9.5/test-doubles.html?highlight=mock#mock-objects)
  - [List of PHPUnit expectation matcher methods](https://github.com/sebastianbergmann/phpunit/blob/main/src/Framework/Assert.php)
  - test object interactions: verify how a dependency is used
  - [PHPUnit Test Doubles](https://phpunit.readthedocs.io/en/9.5/test-doubles.html?highlight=test-doubles)
  - customise the creation of the mock object: the getMockBuilder method
- [x] Mockery - an alternative mocking framework with a human-readable syntax
  - mock a dependency that doesn't exist yet
  - [PHPUnit Test Doubles](https://phpunit.readthedocs.io/en/9.5/test-doubles.html?highlight=test-doubles)
  - [Mockery](http://docs.mockery.io/en/latest/)
  - [Mockery: PHPUnit integration](http://docs.mockery.io/en/latest/reference/phpunit_integration.html)
  - using Mockery: installation and integration with PHPUnit
  - [Mockery: creating test doubles](http://docs.mockery.io/en/latest/reference/creating_test_doubles.html)
  - using mockery to mock a dependency that doesn't exist yet
  - [PHPUnit Test Doubles](https://phpunit.readthedocs.io/en/9.5/test-doubles.html?highlight=test-doubles)
  - PHPUnit vs Mockery: Returning different values on subsequent method calls
  - [Mockery Spies](http://docs.mockery.io/en/latest/reference/spies.html)
  - Mockery Spies: make assertions on a call after the event
- [x] Test-driven development
  - [Test-driven Development (TDD)](https://en.wikipedia.org/wiki/Test-driven_development)
  - test-driven development: write the test first, then write the code to make it pass
  - write just enough code to make the test pass
  - add tests and refactor code until the tests pass
  - add more tests and application code functionality
  - another test, more functionality, and more refactoring
  - [PHPUnit Data Provider methods](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html?highlight=data-providers#data-providers)
  - data providers: provide a test method with a collection of data
- [x] Testing non-public methods and properties and abstract classes
  - testing non-public methods
  - testing protected methods using inheritance
  - [Reflection in PHP](https://www.php.net/manual/en/intro.reflection.php)
  - testing private methods using reflection
  - testing private methods with arguments using reflection
  - [PHPUnit Assertions](https://phpunit.readthedocs.io/en/9.5/assertions.html?highlight=assertions)
  - testing protected and private attributes
  - [PHPUnit documentation: getMockForAbstractClass](https://phpunit.readthedocs.io/en/9.5/test-doubles.html?highlight=mocking-traits-and-abstract-classes#mocking-traits-and-abstract-classes)
  - [PHPUnit source code: getMockForAbstractClass](https://github.com/sebastianbergmann/phpunit/blob/main/src/Framework/TestCase.php)
  - testing abstract classes
- [x] Testing static methods
  - testing static methods
  - [PHPUnit Test Doubles](https://phpunit.readthedocs.io/en/9.5/test-doubles.html?highlight=test-doubles)
  - the problem with static methods: dependencies and mocking
  - option 1: refactor code to remove the static method
  - [PHP callables](https://www.php.net/manual/en/language.types.callable.php)
  - [PHPUnit Test Doubles](https://phpunit.readthedocs.io/en/9.5/test-doubles.html?highlight=test-doubles)
  - option 2: pass the dependency as a callable
  - [Mockery: mocking public static methods](http://docs.mockery.io/en/latest/reference/public_static_properties.html)
  - [Mockery alias mocks](http://docs.mockery.io/en/latest/reference/creating_test_doubles.html#creating-test-doubles-aliasing)
  - option 3: use mockery alias mocks to stub the static method call
