<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class GetVouchersDenomination implements RequestInterface
    {

        private ClientContext $context;

        public function __construct(ClientContext $context)
        {
            $this->context = $context;
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

    }

