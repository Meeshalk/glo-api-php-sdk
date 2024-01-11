<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class PersonData
    {

        private ?string $firstName;


        private ?string $lastName;


        private ?string $middleName;

        public function getFirstName(): ?string
        {
            return $this->firstName;
        }

        public function withFirstName(?string $firstName): static
        {
            $new            = clone $this;
            $new->firstName = $firstName;

            return $new;
        }

        public function getLastName(): ?string
        {
            return $this->lastName;
        }

        public function withLastName(?string $lastName): static
        {
            $new           = clone $this;
            $new->lastName = $lastName;

            return $new;
        }

        public function getMiddleName(): ?string
        {
            return $this->middleName;
        }

        public function withMiddleName(?string $middleName): static
        {
            $new             = clone $this;
            $new->middleName = $middleName;

            return $new;
        }

    }

