<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class ActivateReseller implements RequestInterface
    {

        private ClientContext $context;

        private string $activationCode;

        public function __construct(
            ClientContext $context, string $activationCode
        ) {
            $this->context        = $context;
            $this->activationCode = $activationCode;
        }

        public function getContext(): ClientContext
        {
            return $this->context;
        }

        public function withContext(ClientContext $context): static
        {
            $new          = clone $this;
            $new->context = $context;

            return $new;
        }

        public function getActivationCode(): ?string
        {
            return $this->activationCode;
        }

        public function withActivationCode(?string $activationCode): static
        {
            $new                 = clone $this;
            $new->activationCode = $activationCode;

            return $new;
        }

    }

