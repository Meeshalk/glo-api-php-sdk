<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class RequestTransfer implements RequestInterface
    {

        private ?ClientContext $context;


        private ?PrincipalId $senderPrincipalId;


        private ?PrincipalId $receiverPrincipalId;


        private ?PrincipalAccountSpecifier $senderAccountSpecifier;


        private ?PrincipalAccountSpecifier $receiverAccountSpecifier;


        private ?string $productId;


        private ?Amount $amount;

        public function __construct(
            ?ClientContext $context, ?PrincipalId $senderPrincipalId,
            ?PrincipalId $receiverPrincipalId,
            ?PrincipalAccountSpecifier $senderAccountSpecifier,
            ?PrincipalAccountSpecifier $receiverAccountSpecifier,
            ?string $productId, ?Amount $amount
        ) {
            $this->context                  = $context;
            $this->senderPrincipalId        = $senderPrincipalId;
            $this->receiverPrincipalId      = $receiverPrincipalId;
            $this->senderAccountSpecifier   = $senderAccountSpecifier;
            $this->receiverAccountSpecifier = $receiverAccountSpecifier;
            $this->productId                = $productId;
            $this->amount                   = $amount;
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

        public function getSenderPrincipalId(): ?PrincipalId
        {
            return $this->senderPrincipalId;
        }

        public function withSenderPrincipalId(?PrincipalId $senderPrincipalId
        ): static {
            $new                    = clone $this;
            $new->senderPrincipalId = $senderPrincipalId;

            return $new;
        }

        public function getReceiverPrincipalId(): ?PrincipalId
        {
            return $this->receiverPrincipalId;
        }

        public function withReceiverPrincipalId(
            ?PrincipalId $receiverPrincipalId
        ): static {
            $new                      = clone $this;
            $new->receiverPrincipalId = $receiverPrincipalId;

            return $new;
        }

        public function getSenderAccountSpecifier(): ?PrincipalAccountSpecifier
        {
            return $this->senderAccountSpecifier;
        }

        public function withSenderAccountSpecifier(
            ?PrincipalAccountSpecifier $senderAccountSpecifier
        ): static {
            $new                         = clone $this;
            $new->senderAccountSpecifier = $senderAccountSpecifier;

            return $new;
        }

        public function getReceiverAccountSpecifier(
        ): ?PrincipalAccountSpecifier
        {
            return $this->receiverAccountSpecifier;
        }

        public function withReceiverAccountSpecifier(
            ?PrincipalAccountSpecifier $receiverAccountSpecifier
        ): static {
            $new                           = clone $this;
            $new->receiverAccountSpecifier = $receiverAccountSpecifier;

            return $new;
        }

        public function getProductId(): ?string
        {
            return $this->productId;
        }

        public function withProductId(?string $productId): static
        {
            $new            = clone $this;
            $new->productId = $productId;

            return $new;
        }

        public function getAmount(): ?Amount
        {
            return $this->amount;
        }

        public function withAmount(?Amount $amount): static
        {
            $new         = clone $this;
            $new->amount = $amount;

            return $new;
        }

    }

