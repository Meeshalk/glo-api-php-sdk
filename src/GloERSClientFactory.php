<?php

    namespace Meeshalk\GloERSWebServiceSdk;

    use GuzzleHttp\Client;
    use Http\Client\Common\PluginClient;
    use Meeshalk\GloERSWebServiceSdk\Logger\LoggerPlugin;
    use Monolog\Handler\RotatingFileHandler;
    use Monolog\Logger;
    use Phpro\SoapClient\Caller\EngineCaller;
    use Phpro\SoapClient\Caller\EventDispatchingCaller;
    use Phpro\SoapClient\Soap\DefaultEngineFactory;
    use Psr\Log\LoggerInterface;
    use Soap\ExtSoapEngine\ExtSoapOptions;
    use Soap\Psr18Transport\Psr18Transport;
    use Symfony\Component\EventDispatcher\EventDispatcher;

    class GloERSClientFactory
    {

        public static function factory(
            string $wsdl, LoggerInterface $logger = null
        ): GloERSClient {
            // enable logger only on local
            if (getenv('APP_ENV') == 'local' || getenv('APP_ENV') == 'testing'){
                if ($logger === null) {
                    $logger = new Logger('http',
                        [new RotatingFileHandler('logs/mono.log')]);
                }
                $loggerPlugin = new LoggerPlugin($logger);
                $middlewares = [$loggerPlugin];
            }else{
                $middlewares = [];
            }

            $transport = Psr18Transport::createForClient(
                new PluginClient(new Client(), $middlewares)
            );

            $engine = DefaultEngineFactory::create(
                ExtSoapOptions::defaults($wsdl, [])
                    ->withClassMap(GloERSClassmap::getCollection()), $transport
            );

            $eventDispatcher = new EventDispatcher();
            $caller          = new EventDispatchingCaller(new EngineCaller($engine),
                $eventDispatcher);

            return new GloERSClient($caller);
        }

    }

