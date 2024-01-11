<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use DateTimeInterface;

    class Invoice
    {

        private string $paymentMode;


        private DateTimeInterface $issueDate;


        private ?string $title;


        private ?string $clientInvoiceId;


        private ?InvoiceRows $invoiceRows;


        private ?Amount $totalAmount;


        private ?string $cashierId;


        private ?string $footer;


        private ?string $backURL;

        public function getPaymentMode(): ?string
        {
            return $this->paymentMode;
        }

        public function withPaymentMode(?string $paymentMode): static
        {
            $new              = clone $this;
            $new->paymentMode = $paymentMode;

            return $new;
        }

        public function getIssueDate(): ?DateTimeInterface
        {
            return $this->issueDate;
        }

        public function withIssueDate(?DateTimeInterface $issueDate): static
        {
            $new            = clone $this;
            $new->issueDate = $issueDate;

            return $new;
        }

        public function getTitle(): ?string
        {
            return $this->title;
        }

        public function withTitle(?string $title): static
        {
            $new        = clone $this;
            $new->title = $title;

            return $new;
        }

        public function getClientInvoiceId(): ?string
        {
            return $this->clientInvoiceId;
        }

        public function withClientInvoiceId(?string $clientInvoiceId): static
        {
            $new                  = clone $this;
            $new->clientInvoiceId = $clientInvoiceId;

            return $new;
        }

        public function getInvoiceRows(): ?InvoiceRows
        {
            return $this->invoiceRows;
        }

        public function withInvoiceRows(?InvoiceRows $invoiceRows): static
        {
            $new              = clone $this;
            $new->invoiceRows = $invoiceRows;

            return $new;
        }

        public function getTotalAmount(): ?Amount
        {
            return $this->totalAmount;
        }

        public function withTotalAmount(?Amount $totalAmount): static
        {
            $new              = clone $this;
            $new->totalAmount = $totalAmount;

            return $new;
        }

        public function getCashierId(): ?string
        {
            return $this->cashierId;
        }

        public function withCashierId(?string $cashierId): static
        {
            $new            = clone $this;
            $new->cashierId = $cashierId;

            return $new;
        }

        public function getFooter(): ?string
        {
            return $this->footer;
        }

        public function withFooter(?string $footer): static
        {
            $new         = clone $this;
            $new->footer = $footer;

            return $new;
        }

        public function getBackURL(): ?string
        {
            return $this->backURL;
        }

        public function withBackURL(?string $backURL): static
        {
            $new          = clone $this;
            $new->backURL = $backURL;

            return $new;
        }

    }

