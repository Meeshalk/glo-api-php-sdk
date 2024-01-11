<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ERSWSResponse
    {

        protected string $ersReference;


        protected int $resultCode;


        protected string $resultDescription;

        public function getErsReference(): ?string
        {
            return $this->ersReference;
        }

        public function withErsReference(string $ersReference): static
        {
            $new               = clone $this;
            $new->ersReference = $ersReference;

            return $new;
        }

        public function getResultCode(): ?int
        {
            return $this->resultCode;
        }

        public function withResultCode(int $resultCode): static
        {
            $new             = clone $this;
            $new->resultCode = $resultCode;

            return $new;
        }

        public function getResultDescription(): ?string
        {
            return $this->resultDescription;
        }

        public function withResultDescription(string $resultDescription
        ): static {
            $new                    = clone $this;
            $new->resultDescription = $resultDescription;

            return $new;
        }

    }

