<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ERSCommitTopupResponse extends ERSWSResponse
    {

        private string $referredTransactionErsReference;

        private Principal $senderPrincipal;

        private Principal $topupPrincipal;

        private PrincipalAccountSpecifier $senderAccountSpecifier;

        private PrincipalAccountSpecifier $topupAccountSpecifier;

        private Amount $topupAmount;

        private string $requestedType;

        private Amount $subscriberBalanceBefore;

        private Amount $subscriberBalanceAfter;

        public function getReferredTransactionErsReference(): string
        {
            return $this->referredTransactionErsReference;
        }

        public function withReferredTransactionErsReference(
            string $referredTransactionErsReference
        ): static {
            $new                                  = clone $this;
            $new->referredTransactionErsReference = $referredTransactionErsReference;

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

        public function getTopupPrincipal(): Principal
        {
            return $this->topupPrincipal;
        }

        public function withTopupPrincipal(Principal $topupPrincipal): static
        {
            $new                 = clone $this;
            $new->topupPrincipal = $topupPrincipal;

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

        public function getRequestedType(): string
        {
            return $this->requestedType;
        }

        public function withRequestedType(string $requestedType): static
        {
            $new                = clone $this;
            $new->requestedType = $requestedType;

            return $new;
        }

        public function getSubscriberBalanceBefore(): Amount
        {
            return $this->subscriberBalanceBefore;
        }

        public function withSubscriberBalanceBefore(
            Amount $subscriberBalanceBefore
        ): static {
            $new                          = clone $this;
            $new->subscriberBalanceBefore = $subscriberBalanceBefore;

            return $new;
        }

        public function getSubscriberBalanceAfter(): Amount
        {
            return $this->subscriberBalanceAfter;
        }

        public function withSubscriberBalanceAfter(
            Amount $subscriberBalanceAfter
        ): static {
            $new                         = clone $this;
            $new->subscriberBalanceAfter = $subscriberBalanceAfter;

            return $new;
        }

    }

