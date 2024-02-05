<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class UnBlockReseller implements RequestInterface
    {

        private ?ClientContext $context;


        private ?TargetPrincipal $targetReseller;

        public function __construct(
            ?ClientContext $context, ?TargetPrincipal $targetReseller
        ) {
            $this->context        = $context;
            $this->targetReseller = $targetReseller;
        }

        public function getContext(): ?ClientContext
        {
            return $this->context;
        }

        public function withContext(?ClientContext $context): static
        {
            $new          = clone $this;
            $new->context = $context;

            return $new;
        }

        public function getTargetReseller(): ?TargetPrincipal
        {
            return $this->targetReseller;
        }

        public function withTargetReseller(?TargetPrincipal $targetReseller
        ): static {
            $new                 = clone $this;
            $new->targetReseller = $targetReseller;

            return $new;
        }

    }

