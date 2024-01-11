<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class UpdateResellerParams
    {

        private ?string $resellerMsisdn;


        private ?AddressData $address;


        private ?PersonData $person;

        public function getResellerMsisdn(): ?string
        {
            return $this->resellerMsisdn;
        }

        public function withResellerMsisdn(?string $resellerMsisdn): static
        {
            $new                 = clone $this;
            $new->resellerMsisdn = $resellerMsisdn;

            return $new;
        }

        public function getAddress(): ?AddressData
        {
            return $this->address;
        }

        public function withAddress(?AddressData $address): static
        {
            $new          = clone $this;
            $new->address = $address;

            return $new;
        }

        public function getPerson(): ?PersonData
        {
            return $this->person;
        }

        public function withPerson(?PersonData $person): static
        {
            $new         = clone $this;
            $new->person = $person;

            return $new;
        }

    }

