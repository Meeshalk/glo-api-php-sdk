<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class AddressData
    {

        private ?string $street;

        private ?string $city;

        private ?string $country;

        private ?string $phone;

        private ?string $fax;

        private ?string $homepage;

        private ?string $zip;

        private ?string $email;

        public function getStreet(): ?string
        {
            return $this->street;
        }

        public function withStreet(?string $street): static
        {
            $new         = clone $this;
            $new->street = $street;

            return $new;
        }

        public function getCity(): ?string
        {
            return $this->city;
        }

        public function withCity(?string $city): static
        {
            $new       = clone $this;
            $new->city = $city;

            return $new;
        }

        public function getCountry(): ?string
        {
            return $this->country;
        }

        public function withCountry(?string $country): static
        {
            $new          = clone $this;
            $new->country = $country;

            return $new;
        }

        public function getPhone(): ?string
        {
            return $this->phone;
        }

        public function withPhone(?string $phone): static
        {
            $new        = clone $this;
            $new->phone = $phone;

            return $new;
        }

        public function getFax(): ?string
        {
            return $this->fax;
        }

        public function withFax(?string $fax): static
        {
            $new      = clone $this;
            $new->fax = $fax;

            return $new;
        }

        public function getHomepage(): ?string
        {
            return $this->homepage;
        }

        public function withHomepage(?string $homepage): static
        {
            $new           = clone $this;
            $new->homepage = $homepage;

            return $new;
        }

        public function getZip(): ?string
        {
            return $this->zip;
        }

        public function withZip(?string $zip): static
        {
            $new      = clone $this;
            $new->zip = $zip;

            return $new;
        }

        public function getEmail(): ?string
        {
            return $this->email;
        }

        public function withEmail(?string $email): static
        {
            $new        = clone $this;
            $new->email = $email;

            return $new;
        }

    }

