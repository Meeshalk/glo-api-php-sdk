<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class PrincipalAccount
    {

        private string $accountDescription;

        private PrincipalAccountSpecifier $accountSpecifier;

        private ?Amount $balance;

        private ?Amount $creditLimit;

        public function getAccountDescription(): ?string
        {
            return $this->accountDescription;
        }

        public function withAccountDescription(string $accountDescription
        ): static {
            $new                     = clone $this;
            $new->accountDescription = $accountDescription;

            return $new;
        }

        public function getAccountSpecifier(): PrincipalAccountSpecifier
        {
            return $this->accountSpecifier;
        }

        public function withAccountSpecifier(
            PrincipalAccountSpecifier $accountSpecifier
        ): static {
            $new                   = clone $this;
            $new->accountSpecifier = $accountSpecifier;

            return $new;
        }

        public function getBalance(): Amount
        {
            return $this->balance;
        }

        public function withBalance(Amount $balance): static
        {
            $new          = clone $this;
            $new->balance = $balance;

            return $new;
        }

        public function getCreditLimit(): Amount
        {
            return $this->creditLimit;
        }

        public function withCreditLimit(Amount $creditLimit): static
        {
            $new              = clone $this;
            $new->creditLimit = $creditLimit;

            return $new;
        }

    }

