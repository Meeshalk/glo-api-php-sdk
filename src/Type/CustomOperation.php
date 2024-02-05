<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class CustomOperation implements RequestInterface
    {

        private ClientContext $clientContext;

        private PrincipalId $customerPrincipalId;

        private PrincipalId $targetPrincipalId;

        private PrincipalAccountSpecifier $senderAccountSpecifier;

        private string $operationId;

        private ErsMap $operationParameters;

        public function __construct(
            ClientContext $clientContext, PrincipalId $customerPrincipalId,
            PrincipalId $targetPrincipalId,
            PrincipalAccountSpecifier $senderAccountSpecifier,
            string $operationId, ErsMap $operationParameters
        ) {
            $this->clientContext          = $clientContext;
            $this->customerPrincipalId    = $customerPrincipalId;
            $this->targetPrincipalId      = $targetPrincipalId;
            $this->senderAccountSpecifier = $senderAccountSpecifier;
            $this->operationId            = $operationId;
            $this->operationParameters    = $operationParameters;
        }

        public function getClientContext(): ?ClientContext
        {
            return $this->clientContext;
        }

        public function withClientContext(ClientContext $clientContext): static
        {
            $new                = clone $this;
            $new->clientContext = $clientContext;

            return $new;
        }

        public function getCustomerPrincipalId(): ?PrincipalId
        {
            return $this->customerPrincipalId;
        }

        public function withCustomerPrincipalId(
            PrincipalId $customerPrincipalId
        ): static {
            $new                      = clone $this;
            $new->customerPrincipalId = $customerPrincipalId;

            return $new;
        }

        public function getTargetPrincipalId(): ?PrincipalId
        {
            return $this->targetPrincipalId;
        }

        public function withTargetPrincipalId(PrincipalId $targetPrincipalId
        ): static {
            $new                    = clone $this;
            $new->targetPrincipalId = $targetPrincipalId;

            return $new;
        }

        public function getSenderAccountSpecifier(): ?PrincipalAccountSpecifier
        {
            return $this->senderAccountSpecifier;
        }

        public function withSenderAccountSpecifier(
            PrincipalAccountSpecifier $senderAccountSpecifier
        ): static {
            $new                         = clone $this;
            $new->senderAccountSpecifier = $senderAccountSpecifier;

            return $new;
        }

        public function getOperationId(): ?string
        {
            return $this->operationId;
        }

        public function withOperationId(string $operationId): static
        {
            $new              = clone $this;
            $new->operationId = $operationId;

            return $new;
        }

        public function getOperationParameters(): ?ErsMap
        {
            return $this->operationParameters;
        }

        public function withOperationParameters(ErsMap $operationParameters
        ): static {
            $new                      = clone $this;
            $new->operationParameters = $operationParameters;

            return $new;
        }

    }

