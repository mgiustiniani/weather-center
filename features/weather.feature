Feature: Weather Serialization
  In Order to serialize Weather object

  Scenario: See available sport via http Api
    Given I find Weather of latitude of 42.000 and longitude of 12.000
    When I Serialize Weather object
    Then print last response

