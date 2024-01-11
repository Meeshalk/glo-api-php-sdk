<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ClientContext
    {

        private string $channel;

        private ?string $clientComment;

        private string $clientId;

        private ?bool $prepareOnly;

        private string $clientReference;

        private int $clientRequestTimeout;

        private PrincipalId $initiatorPrincipalId;

        private string $password;

        private ?MapArray $transactionProperties;

        public function getChannel(): ?string
        {
            return $this->channel;
        }

        public function withChannel(string $channel): static
        {
            $new          = clone $this;
            $new->channel = $channel;

            return $new;
        }

        public function getClientComment(): ?string
        {
            return $this->clientComment;
        }

        public function withClientComment(string $clientComment): static
        {
            $new                = clone $this;
            $new->clientComment = $clientComment;

            return $new;
        }

        public function getClientId(): string
        {
            return $this->clientId;
        }

        public function withClientId(string $clientId): static
        {
            $new           = clone $this;
            $new->clientId = $clientId;

            return $new;
        }

        public function getPrepareOnly(): ?bool
        {
            return $this->prepareOnly;
        }

        public function withPrepareOnly(bool $prepareOnly): static
        {
            $new              = clone $this;
            $new->prepareOnly = $prepareOnly;

            return $new;
        }

        public function getClientReference(): ?string
        {
            return $this->clientReference;
        }

        public function withClientReference(string $clientReference): static
        {
            $new                  = clone $this;
            $new->clientReference = $clientReference;

            return $new;
        }

        public function getClientRequestTimeout(): int
        {
            return $this->clientRequestTimeout;
        }

        public function withClientRequestTimeout(int $clientRequestTimeout
        ): static {
            $new                       = clone $this;
            $new->clientRequestTimeout = $clientRequestTimeout;

            return $new;
        }

        public function getInitiatorPrincipalId(): PrincipalId
        {
            return $this->initiatorPrincipalId;
        }

        public function withInitiatorPrincipalId(
            PrincipalId $initiatorPrincipalId
        ): static {
            $new                       = clone $this;
            $new->initiatorPrincipalId = $initiatorPrincipalId;

            return $new;
        }

        public function getPassword(): string
        {
            return $this->password;
        }

        public function withPassword(string $password): static
        {
            $new           = clone $this;
            $new->password = $password;

            return $new;
        }

        public function getTransactionProperties(): ?MapArray
        {
            return $this->transactionProperties;
        }

        public function withTransactionProperties(
            MapArray $transactionProperties
        ): static {
            $new                        = clone $this;
            $new->transactionProperties = $transactionProperties;

            return $new;
        }

    }

