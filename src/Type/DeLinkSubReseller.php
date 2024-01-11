<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class DeLinkSubReseller implements RequestInterface
    {

        private ClientContext $context;


        private string $parentResellerId;


        private PrincipalId $principalId;

        public function __construct(
            ClientContext $context, string $parentResellerId,
            PrincipalId $principalId
        ) {
            $this->context          = $context;
            $this->parentResellerId = $parentResellerId;
            $this->principalId      = $principalId;
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

        public function getParentResellerId(): ?string
        {
            return $this->parentResellerId;
        }

        public function withParentResellerId(string $parentResellerId): static
        {
            $new                   = clone $this;
            $new->parentResellerId = $parentResellerId;

            return $new;
        }

        public function getPrincipalId(): ?PrincipalId
        {
            return $this->principalId;
        }

        public function withPrincipalId(PrincipalId $principalId): static
        {
            $new              = clone $this;
            $new->principalId = $principalId;

            return $new;
        }

    }

