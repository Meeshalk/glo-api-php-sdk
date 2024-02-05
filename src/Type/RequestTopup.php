<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class RequestTopup implements RequestInterface
    {

        private ClientContext $context;

        private PrincipalId $senderPrincipalId;

        private PrincipalId $topupPrincipalId;

        private PrincipalAccountSpecifier $senderAccountSpecifier;

        private PrincipalAccountSpecifier $topupAccountSpecifier;

        private string $productId;

        private Amount $amount;

        public function __construct(
            ClientContext $context,
            PrincipalId $senderPrincipalId,
            PrincipalId $topupPrincipalId,
            PrincipalAccountSpecifier $senderAccountSpecifier,
            PrincipalAccountSpecifier $topupAccountSpecifier,
            string $productId,
            Amount $amount
        ) {
            $this->context                = $context;
            $this->senderPrincipalId      = $senderPrincipalId;
            $this->topupPrincipalId       = $topupPrincipalId;
            $this->senderAccountSpecifier = $senderAccountSpecifier;
            $this->topupAccountSpecifier  = $topupAccountSpecifier;
            $this->productId              = $productId;
            $this->amount                 = $amount;
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

        public function getSenderPrincipalId(): PrincipalId
        {
            return $this->senderPrincipalId;
        }

        public function withSenderPrincipalId(
            PrincipalId $senderPrincipalId
        ): static {
            $new                    = clone $this;
            $new->senderPrincipalId = $senderPrincipalId;

            return $new;
        }

        public function getTopupPrincipalId(): PrincipalId
        {
            return $this->topupPrincipalId;
        }

        public function withTopupPrincipalId(
            PrincipalId $topupPrincipalId
        ): static {
            $new                   = clone $this;
            $new->topupPrincipalId = $topupPrincipalId;

            return $new;
        }

        public function getSenderAccountSpecifier(): PrincipalAccountSpecifier
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

        public function getTopupAccountSpecifier(): PrincipalAccountSpecifier
        {
            return $this->topupAccountSpecifier;
        }

        public function withTopupAccountSpecifier(
            PrincipalAccountSpecifier $topupAccountSpecifier
        ): static {
            $new                        = clone $this;
            $new->topupAccountSpecifier = $topupAccountSpecifier;

            return $new;
        }

        public function getProductId(): string
        {
            return $this->productId;
        }

        public function withProductId(string $productId): static
        {
            $new            = clone $this;
            $new->productId = $productId;

            return $new;
        }

        public function getAmount(): Amount
        {
            return $this->amount;
        }

        public function withAmount(Amount $amount): static
        {
            $new         = clone $this;
            $new->amount = $amount;

            return $new;
        }

    }

