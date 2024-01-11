<?php

    namespace Meeshalk\GloERSWebServiceSdk\Logger;

    use Http\Client\Common\Plugin;
    use Http\Client\Common\Plugin\VersionBridgePlugin;
    use Http\Client\Exception;
    use Http\Message\Formatter\FullHttpMessageFormatter;
    use Psr\Http\Message\RequestInterface;
    use Psr\Http\Message\ResponseInterface;
    use Psr\Log\LoggerInterface;

    /**
     * Log request, response and exception for an HTTP Client.
     */
    final class LoggerPlugin implements Plugin
    {
        use VersionBridgePlugin;

        private LoggerInterface $logger;

        private FullHttpMessageFormatter $formatter;

        public function __construct(LoggerInterface $logger)
        {
            $this->logger = $logger;
            $this->formatter = new FullHttpMessageFormatter(null);
        }

        /**
         * @throws \Http\Client\Exception
         */
        protected function doHandleRequest(RequestInterface $request, callable $next, callable $first)
        {
            $this->logger->info("Sending request:\n{formatted_request}", [
                'formatted_request' => $this->formatter->formatRequest($request),
            ]);

            return $next($request)->then(
                function (ResponseInterface $response) use ($request) {
                $this->logger->info("Received response:\n{formatted_response}", [
                    'formatted_response' => $this->formatter->formatResponseForRequest($response, $request),
                ]);
                return $response;
            }, function (Exception $exception) use ($request) {
                if ($exception instanceof Exception\HttpException) {
                    $this->logger->error("Error:\n{message}\nwith response:\n{formatted_response}", [
                        'exception' => $exception,
                        'message' => $exception->getMessage(),
                        'formatted_response' => $this->formatter->formatResponseForRequest($exception->getResponse(), $exception->getRequest()),
                    ]);
                } else {
                    $this->logger->error("Error:\n{message}\nwhen sending request:\n{formatted_request}", [
                        'exception' => $exception,
                        'message' => $exception->getMessage(),
                        'formatted_request' => $this->formatter->formatRequest($request),
                    ]);
                }

                throw $exception;
            });
        }
    }