<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class ExecuteReport implements RequestInterface
    {

        private ClientContext $context;


        private string $reportId;


        private ?string $language;


        private ?ParameterMap $parameters;

        public function __construct(
            ClientContext $context, string $reportId, string $language,
            ?ParameterMap $parameters
        ) {
            $this->context    = $context;
            $this->reportId   = $reportId;
            $this->language   = $language;
            $this->parameters = $parameters;
        }

        public function getContext(): ?ClientContext
        {
            return $this->context;
        }

        public function withContext(ClientContext $context): static
        {
            $new          = clone $this;
            $new->context = $context;

            return $new;
        }

        public function getReportId(): ?string
        {
            return $this->reportId;
        }

        public function withReportId(string $reportId): static
        {
            $new           = clone $this;
            $new->reportId = $reportId;

            return $new;
        }

        public function getLanguage(): ?string
        {
            return $this->language;
        }

        public function withLanguage(string $language): static
        {
            $new           = clone $this;
            $new->language = $language;

            return $new;
        }

        public function getParameters(): ?ParameterMap
        {
            return $this->parameters;
        }

        public function withParameters(ParameterMap $parameters): static
        {
            $new             = clone $this;
            $new->parameters = $parameters;

            return $new;
        }

    }

