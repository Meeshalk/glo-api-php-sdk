<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ClientTransactionData
    {

        private ?string $clientComment;

        private ?string $clientReference;

        private ?string $clientTag;

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

        public function getClientTag(): ?string
        {
            return $this->clientTag;
        }

        public function withClientTag(string $clientTag): static
        {
            $new            = clone $this;
            $new->clientTag = $clientTag;

            return $new;
        }

    }

