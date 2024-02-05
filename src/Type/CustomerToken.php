<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class CustomerToken
    {

        private string $idType;

        private string $idValue;

        public function getIdType(): ?string
        {
            return $this->idType;
        }

        public function withIdType(string $idType): static
        {
            $new         = clone $this;
            $new->idType = $idType;

            return $new;
        }

        public function getIdValue(): ?string
        {
            return $this->idValue;
        }

        public function withIdValue(string $idValue): static
        {
            $new          = clone $this;
            $new->idValue = $idValue;

            return $new;
        }

    }

