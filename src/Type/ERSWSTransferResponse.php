<?php

namespace Meeshalk\GloERSWebServiceSdk\Type;

class ERSWSTransferResponse extends ERSWSResponse
{

    private Amount $receivedAmount;


    private Principal $receiverPrincipal;


    private Amount $requestedTransferAmount;


    private Principal $senderPrincipal;

    public function getReceivedAmount() : ?Amount
    {
        return $this->receivedAmount;
    }

    public function withReceivedAmount(Amount $receivedAmount) : static
    {
        $new = clone $this;
        $new->receivedAmount = $receivedAmount;

        return $new;
    }

    public function getReceiverPrincipal() : ?Principal
    {
        return $this->receiverPrincipal;
    }

    public function withReceiverPrincipal(Principal $receiverPrincipal) : static
    {
        $new = clone $this;
        $new->receiverPrincipal = $receiverPrincipal;

        return $new;
    }

    public function getRequestedTransferAmount() : ?Amount
    {
        return $this->requestedTransferAmount;
    }

    public function withRequestedTransferAmount(Amount $requestedTransferAmount) : static
    {
        $new = clone $this;
        $new->requestedTransferAmount = $requestedTransferAmount;

        return $new;
    }

    public function getSenderPrincipal() : ?Principal
    {
        return $this->senderPrincipal;
    }

    public function withSenderPrincipal(Principal $senderPrincipal) : static
    {
        $new = clone $this;
        $new->senderPrincipal = $senderPrincipal;

        return $new;
    }
}

