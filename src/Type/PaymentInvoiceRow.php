<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class PaymentInvoiceRow
    {

        private ?string $itemDescription;


        private ?Amount $itemDiscount;


        private ?string $itemEAN;


        private ?float $itemQuantity;


        private ?string $itemSKU;


        private ?float $itemTaxRate;


        private ?Amount $itemTotalAmount;


        private ?string $itemUnit;


        private ?Amount $itemUnitPrice;

        public function getItemDescription(): ?string
        {
            return $this->itemDescription;
        }

        public function withItemDescription(?string $itemDescription): static
        {
            $new                  = clone $this;
            $new->itemDescription = $itemDescription;

            return $new;
        }

        public function getItemDiscount(): ?Amount
        {
            return $this->itemDiscount;
        }

        public function withItemDiscount(?Amount $itemDiscount): static
        {
            $new               = clone $this;
            $new->itemDiscount = $itemDiscount;

            return $new;
        }

        public function getItemEAN(): ?string
        {
            return $this->itemEAN;
        }

        public function withItemEAN(?string $itemEAN): static
        {
            $new          = clone $this;
            $new->itemEAN = $itemEAN;

            return $new;
        }

        public function getItemQuantity(): ?float
        {
            return $this->itemQuantity;
        }

        public function withItemQuantity(?float $itemQuantity): static
        {
            $new               = clone $this;
            $new->itemQuantity = $itemQuantity;

            return $new;
        }

        public function getItemSKU(): ?string
        {
            return $this->itemSKU;
        }

        public function withItemSKU(?string $itemSKU): static
        {
            $new          = clone $this;
            $new->itemSKU = $itemSKU;

            return $new;
        }

        public function getItemTaxRate(): ?float
        {
            return $this->itemTaxRate;
        }

        public function withItemTaxRate(?float $itemTaxRate): static
        {
            $new              = clone $this;
            $new->itemTaxRate = $itemTaxRate;

            return $new;
        }

        public function getItemTotalAmount(): ?Amount
        {
            return $this->itemTotalAmount;
        }

        public function withItemTotalAmount(?Amount $itemTotalAmount): static
        {
            $new                  = clone $this;
            $new->itemTotalAmount = $itemTotalAmount;

            return $new;
        }

        public function getItemUnit(): ?string
        {
            return $this->itemUnit;
        }

        public function withItemUnit(?string $itemUnit): static
        {
            $new           = clone $this;
            $new->itemUnit = $itemUnit;

            return $new;
        }

        public function getItemUnitPrice(): ?Amount
        {
            return $this->itemUnitPrice;
        }

        public function withItemUnitPrice(?Amount $itemUnitPrice): static
        {
            $new                = clone $this;
            $new->itemUnitPrice = $itemUnitPrice;

            return $new;
        }

    }

