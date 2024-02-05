<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class InvoiceRows
    {

        private ?array $invoiceRow;

        public function getInvoiceRow(): ?array
        {
            return $this->invoiceRow;
        }

        public function withInvoiceRow(?array $invoiceRow): static
        {
            $new             = clone $this;
            $new->invoiceRow = $invoiceRow;

            return $new;
        }

    }

