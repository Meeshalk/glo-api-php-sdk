<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class Principal
    {

        private PrincipalId $principalId;

        private string $principalName;

        private Accounts $accounts;

        private ?string $status;

        private ?string $msisdn;

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

        public function getPrincipalName(): ?string
        {
            return $this->principalName;
        }

        public function withPrincipalName(string $principalName): static
        {
            $new                = clone $this;
            $new->principalName = $principalName;

            return $new;
        }

        public function getAccounts(): ?Accounts
        {
            return $this->accounts;
        }

        public function withAccounts(Accounts $accounts): static
        {
            $new           = clone $this;
            $new->accounts = $accounts;

            return $new;
        }

        public function getStatus(): ?string
        {
            return $this->status;
        }

        public function withStatus(?string $status): static
        {
            $new         = clone $this;
            $new->status = $status;

            return $new;
        }

        public function getMsisdn(): ?string
        {
            return $this->msisdn;
        }

        public function withMsisdn(?string $msisdn): static
        {
            $new         = clone $this;
            $new->msisdn = $msisdn;

            return $new;
        }

    }

