<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Context\TranslatableContext;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\BehatContext;
/**
 * Behat context class.
 */
class FeatureContext  implements SnippetAcceptingContext,
    TranslatableContext
{

    protected $weather;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context object.
     * You can also pass arbitrary arguments to the context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * Returns array of Translator-supported resource paths.
     *
     * For instance:
     *
     *  * array(__DIR__.'/../'ru.yml)
     *  * array(__DIR__.'/../'en.xliff)
     *  * array(__DIR__.'/../'de.php)
     *
     * @return string[]
     */
    public static function getTranslationResources()
    {
       return glob(__DIR__ . '/../../i18n/*.xliff');
    }

        /**
     * @Given I find Weather of latitude of :latitude and longitude of :longitude
     */
    public function iFindWeatherOfLatitudeOfAndLongitudeOf($latitude, $longitude)
    {
        $repository = new \Manticora\WeatherCenter\Infrastucture\Persistence\InMemoryQueryRepository();
        $this->weather =$repository->findByLocationAndDateTime($latitude, $longitude, new \Manticora\WeatherCenter\Domain\Model\DateTime\DateTime(new \DateTime()));

    }

    /**
     * @When I Serialize Weather object
     */
    public function iSerializeWeatherObject()
    {
        $serializer = JMS\Serializer\SerializerBuilder::create()->build();
        $this->weather= $serializer->serialize($this->weather, 'json');

    }

    /**
     * @Then print json result
     */
    public function printLastResponse()
    {
        echo $this->weather;


    }


}
