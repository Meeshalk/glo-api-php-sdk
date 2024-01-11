<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ERSWSPurchaseResponse extends ERSWSResponse
    {

        private string $purchaseReference;


        private Principal $paymentPrincipal;


        private Principal $receiverPrincipal;


        private array $purchasedProducts;

        public function getPurchaseReference(): ?string
        {
            return $this->purchaseReference;
        }

        public function withPurchaseReference(string $purchaseReference
        ): static {
            $new                    = clone $this;
            $new->purchaseReference = $purchaseReference;

            return $new;
        }

        public function getPaymentPrincipal(): ?Principal
        {
            return $this->paymentPrincipal;
        }

        public function withPaymentPrincipal(Principal $paymentPrincipal
        ): static {
            $new                   = clone $this;
            $new->paymentPrincipal = $paymentPrincipal;

            return $new;
        }

        public function getReceiverPrincipal(): ?Principal
        {
            return $this->receiverPrincipal;
        }

        public function withReceiverPrincipal(Principal $receiverPrincipal
        ): static {
            $new                    = clone $this;
            $new->receiverPrincipal = $receiverPrincipal;

            return $new;
        }

        public function getPurchasedProducts(): ?array
        {
            return $this->purchasedProducts;
        }

        public function withPurchasedProducts(array $purchasedProducts): static
        {
            $new                    = clone $this;
            $new->purchasedProducts = $purchasedProducts;

            return $new;
        }

    }

