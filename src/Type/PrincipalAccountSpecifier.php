<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class PrincipalAccountSpecifier
    {

        private string $accountId;

        private string $accountTypeId;

        public function getAccountId(): ?string
        {
            return $this->accountId;
        }

        public function withAccountId(string $accountId): static
        {
            $new            = clone $this;
            $new->accountId = $accountId;

            return $new;
        }

        public function getAccountTypeId(): ?string
        {
            return $this->accountTypeId;
        }

        public function withAccountTypeId(string $accountTypeId): static
        {
            $new                = clone $this;
            $new->accountTypeId = $accountTypeId;

            return $new;
        }

    }

