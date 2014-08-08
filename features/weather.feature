Feature: Weather Serialization
  In Order to serialize Weather object

  Scenario: See weather object into json representation
    Given I find Weather of latitude of 42.000 and longitude of 12.000
    When I Serialize Weather object
    Then print json result

