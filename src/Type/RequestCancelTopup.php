<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class RequestCancelTopup implements RequestInterface
    {

        private ClientContext $context;


        private PrincipalId $senderPrincipalId;


        private PrincipalId $topupPrincipalId;


        private PrincipalAccountSpecifier $senderAccountSpecifier;


        private PrincipalAccountSpecifier $topupAccountSpecifier;


        private string $ersReference;


        private string $reasonCode;


        private string $comments;

        public function __construct(
            ClientContext $context, PrincipalId $senderPrincipalId,
            PrincipalId $topupPrincipalId,
            PrincipalAccountSpecifier $senderAccountSpecifier,
            PrincipalAccountSpecifier $topupAccountSpecifier,
            string $ersReference, string $reasonCode, string $comments
        ) {
            $this->context                = $context;
            $this->senderPrincipalId      = $senderPrincipalId;
            $this->topupPrincipalId       = $topupPrincipalId;
            $this->senderAccountSpecifier = $senderAccountSpecifier;
            $this->topupAccountSpecifier  = $topupAccountSpecifier;
            $this->ersReference           = $ersReference;
            $this->reasonCode             = $reasonCode;
            $this->comments               = $comments;
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

        public function getComments(): string
        {
            return $this->comments;
        }

        public function withComments(string $comments): static
        {
            $new           = clone $this;
            $new->comments = $comments;

            return $new;
        }

    }

