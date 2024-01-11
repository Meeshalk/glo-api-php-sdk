<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ERSWSTopupResponse extends ERSWSResponse
    {

        private Amount $requestedTopupAmount;


        private Principal $senderPrincipal;


        private PrincipalAccountSpecifier $topupAccountSpecifier;


        private Amount $topupAmount;


        private Principal $topupPrincipal;


        private string $requestType;


        private ?string $annonymousID;


        private ?string $nativeResultCode;

        public function getRequestedTopupAmount(): ?Amount
        {
            return $this->requestedTopupAmount;
        }

        public function withRequestedTopupAmount(Amount $requestedTopupAmount
        ): static {
            $new                       = clone $this;
            $new->requestedTopupAmount = $requestedTopupAmount;

            return $new;
        }

        public function getSenderPrincipal(): Principal
        {
            return $this->senderPrincipal;
        }

        public function withSenderPrincipal(Principal $senderPrincipal): static
        {
            $new                  = clone $this;
            $new->senderPrincipal = $senderPrincipal;

            return $new;
        }

        public function getTopupAccountSpecifier(): ?PrincipalAccountSpecifier
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

        public function getTopupAmount(): ?Amount
        {
            return $this->topupAmount;
        }

        public function withTopupAmount(Amount $topupAmount): static
        {
            $new              = clone $this;
            $new->topupAmount = $topupAmount;

            return $new;
        }

        public function getTopupPrincipal(): ?Principal
        {
            return $this->topupPrincipal;
        }

        public function withTopupPrincipal(Principal $topupPrincipal): static
        {
            $new                 = clone $this;
            $new->topupPrincipal = $topupPrincipal;

            return $new;
        }

        public function getRequestType(): ?string
        {
            return $this->requestType;
        }

        public function withRequestType(string $requestType): static
        {
            $new              = clone $this;
            $new->requestType = $requestType;

            return $new;
        }

        public function getAnnonymousID(): ?string
        {
            return $this->annonymousID;
        }

        public function withAnnonymousID(string $annonymousID): static
        {
            $new               = clone $this;
            $new->annonymousID = $annonymousID;

            return $new;
        }

        public function getNativeResultCode(): ?string
        {
            return $this->nativeResultCode;
        }

        public function withNativeResultCode(string $nativeResultCode): static
        {
            $new                   = clone $this;
            $new->nativeResultCode = $nativeResultCode;

            return $new;
        }

    }

