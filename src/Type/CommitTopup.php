<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class CommitTopup implements RequestInterface
    {

        private ClientContext $context;

        private PrincipalId $senderPrincipalId;

        private PrincipalId $topupPrincipalId;

        private PrincipalAccountSpecifier $senderAccountSpecifier;

        private PrincipalAccountSpecifier $topupAccountSpecifier;

        private Amount $topupAmount;

        private string $ersReference;

        private string $reasonCode;

        private string $comment;

        private bool $fetchsubscriberBalance;

        public function __construct(
            ClientContext $context, PrincipalId $senderPrincipalId,
            PrincipalId $topupPrincipalId,
            PrincipalAccountSpecifier $senderAccountSpecifier,
            PrincipalAccountSpecifier $topupAccountSpecifier,
            Amount $topupAmount, string $ersReference, string $reasonCode,
            string $comment, bool $fetchsubscriberBalance
        ) {
            $this->context                = $context;
            $this->senderPrincipalId      = $senderPrincipalId;
            $this->topupPrincipalId       = $topupPrincipalId;
            $this->senderAccountSpecifier = $senderAccountSpecifier;
            $this->topupAccountSpecifier  = $topupAccountSpecifier;
            $this->topupAmount            = $topupAmount;
            $this->ersReference           = $ersReference;
            $this->reasonCode             = $reasonCode;
            $this->comment                = $comment;
            $this->fetchsubscriberBalance = $fetchsubscriberBalance;
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

        public function withSenderPrincipalId(PrincipalId $senderPrincipalId
        ): static {
            $new                    = clone $this;
            $new->senderPrincipalId = $senderPrincipalId;

            return $new;
        }

        public function getTopupPrincipalId(): PrincipalId
        {
            return $this->topupPrincipalId;
        }

        public function withTopupPrincipalId(PrincipalId $topupPrincipalId
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

        public function getTopupAmount(): Amount
        {
            return $this->topupAmount;
        }

        public function withTopupAmount(Amount $topupAmount): static
        {
            $new              = clone $this;
            $new->topupAmount = $topupAmount;

            return $new;
        }

        public function getErsReference(): string
        {
            return $this->ersReference;
        }

        public function withErsReference(string $ersReference): static
        {
            $new               = clone $this;
            $new->ersReference = $ersReference;

            return $new;
        }

        public function getReasonCode(): string
        {
            return $this->reasonCode;
        }

        public function withReasonCode(string $reasonCode): static
        {
            $new             = clone $this;
            $new->reasonCode = $reasonCode;

            return $new;
        }

        public function getComment(): string
        {
            return $this->comment;
        }

        public function withComment(string $comment): static
        {
            $new          = clone $this;
            $new->comment = $comment;

            return $new;
        }

        public function getFetchsubscriberBalance(): bool
        {
            return $this->fetchsubscriberBalance;
        }

        public function withFetchsubscriberBalance(bool $fetchsubscriberBalance
        ): static {
            $new                         = clone $this;
            $new->fetchsubscriberBalance = $fetchsubscriberBalance;

            return $new;
        }

    }

