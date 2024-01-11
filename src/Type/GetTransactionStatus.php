<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class GetTransactionStatus implements RequestInterface
    {

        private ClientContext $context;


        private PrincipalId $resellerPrincipalId;

        public function __construct(
            ClientContext $context, PrincipalId $resellerPrincipalId
        ) {
            $this->context             = $context;
            $this->resellerPrincipalId = $resellerPrincipalId;
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

        public function getResellerPrincipalId(): ?PrincipalId
        {
            return $this->resellerPrincipalId;
        }

        public function withResellerPrincipalId(
            PrincipalId $resellerPrincipalId
        ): static {
            $new                      = clone $this;
            $new->resellerPrincipalId = $resellerPrincipalId;

            return $new;
        }

    }

