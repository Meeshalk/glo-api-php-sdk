<?php

    namespace Meeshalk\GloERSWebServiceSdk\ServicesTest;

    use Meeshalk\GloERSWebServiceSdk\TestCase;
    use Meeshalk\GloERSWebServiceSdk\Type\Amount;
    use Meeshalk\GloERSWebServiceSdk\Type\ERSWSPrincipalInformationResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\ERSWSTopupResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\PrincipalAccountSpecifier;
    use Meeshalk\GloERSWebServiceSdk\Type\PrincipalId;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestPrincipalInformation;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestPrincipalInformationResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestTopup;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestTopupResponse;

    class TopupServiceTest extends TestCase
    {

        function testPrincipalInformationDetails()
        {
            $response = $this->client->requestPrincipalInformation(new RequestPrincipalInformation($this->context,
                $this->principalInfo, null));

            //check success
            $this->assertEquals("SUCCESS",
                $response->getReturn()->getResultDescription(),
                "Failure Code: {$response->getReturn()->getResultCode()}");

            // is of correct response type
            $this->assertInstanceOf(RequestPrincipalInformationResponse::class,
                $response);

            // is of correct base response
            $this->assertInstanceOf(ERSWSPrincipalInformationResponse::class,
                $response->getReturn());

            $responseSuccess = $response->getReturn();

            // check user ID
            $this->assertEquals($this->getUserId(),
                $responseSuccess->getUserId());

            // check account is active
            $this->assertEquals("Active",
                $responseSuccess->getRequestedPrincipal()->getStatus());

            // check msisdn
            $this->assertEquals($this->getMSISDN(),
                $responseSuccess->getRequestedPrincipal()->getMsisdn());

            // count account
            $this->assertCount(1, $responseSuccess->getRequestedPrincipal()
                ->getAccounts()
                ->getAccount());

            $balance = $responseSuccess->getRequestedPrincipal()
                ->getAccounts()
                ->getAccount()[ 0 ]->getBalance();

            $credit = $responseSuccess->getRequestedPrincipal()
                ->getAccounts()
                ->getAccount()[ 0 ]->getCreditLimit();

            // check balance - topup
            $this->assertGreaterThan(0, $balance->getValue());

            // check balance - data
            $this->assertGreaterThanOrEqual(0, $credit->getValue());

            // print_r($response);
        }

        function testTopUpService()
        {
            $topupPrincipal = (new PrincipalId())->withId("2348059999008")
                ->withType("SUBSCRIBERMSISDN")->withUserId("?");

            $topupSpecifier = (new PrincipalAccountSpecifier())
                ->withAccountId("2348059999008")
                ->withAccountTypeId("AIRTIME");

            $senderSpecifier = (new PrincipalAccountSpecifier())
                ->withAccountId("DIST{$this->getMSISDN()}")
                ->withAccountTypeId($this->sellerUserType);

            $amount = (new Amount())->withCurrency("NGN")->withValue(1.0);

            $response = $this->client->requestTopup(new RequestTopup($this->context,
                $this->principalInfo, $topupPrincipal, $senderSpecifier,
                $topupSpecifier, "TOPUP", $amount));

            // success
            $this->assertStringContainsString("SUCCESS",
                $response->getReturn()->getResultDescription(),
                "Failure Code: {$response->getReturn()->getResultCode()} Description: {$response->getReturn()->getResultDescription()}");

            // contains subscriber id
            $this->assertStringContainsString("2348059999008",
                $response->getReturn()->getResultDescription(),
                "Failure Code: {$response->getReturn()->getResultCode()} Description: {$response->getReturn()->getResultDescription()}");

            // contains ref
            $this->assertStringContainsString("ref: ",
                $response->getReturn()->getResultDescription(),
                "Failure Code: {$response->getReturn()->getResultCode()} Description: {$response->getReturn()->getResultDescription()}");

            // is of correct response type
            $this->assertInstanceOf(RequestTopupResponse::class, $response);

            // is of correct base response
            $this->assertInstanceOf(ERSWSTopupResponse::class,
                $response->getReturn());

            $responseSuccess = $response->getReturn();

            // check subscriber id
            $this->assertEquals("2348059999008",
                $responseSuccess->getTopupPrincipal()->getPrincipalId()->getId());

            // check account type
            $this->assertEquals("AIRTIME",
                $responseSuccess->getTopupAccountSpecifier()->getAccountTypeId());

            // check user type
            $this->assertEquals("SUBSCRIBERID",
                $responseSuccess->getTopupPrincipal()
                    ->getPrincipalId()->getType());

            //check amount
            $this->assertEquals(1.0,
                $responseSuccess->getTopupAmount()->getValue());

            // check currency
            $this->assertEquals("NGN",
                $responseSuccess->getTopupAmount()->getCurrency());

            // print_r($response);
        }


        function testTopUpDataService()
        {
            $topupPrincipal = (new PrincipalId())->withId("2348059999008")
                ->withType("SUBSCRIBERMSISDN")->withUserId("?");

            $topupSpecifier = (new PrincipalAccountSpecifier())
                ->withAccountId("2348059999008")
                ->withAccountTypeId("AIRTIME");

            $senderSpecifier = (new PrincipalAccountSpecifier())
                ->withAccountId("DIST{$this->getMSISDN()}")
                ->withAccountTypeId($this->sellerUserType);

            $amount = (new Amount())->withCurrency("NGN")->withValue(1.0);

            $response = $this->client->requestTopup(new RequestTopup($this->context,
                $this->principalInfo, $topupPrincipal, $senderSpecifier,
                $topupSpecifier, "TOPUP", $amount));

            // success
            $this->assertStringContainsString("SUCCESS",
                $response->getReturn()->getResultDescription(),
                "Failure Code: {$response->getReturn()->getResultCode()} Description: {$response->getReturn()->getResultDescription()}");

            // contains subscriber id
            $this->assertStringContainsString("2348059999008",
                $response->getReturn()->getResultDescription(),
                "Failure Code: {$response->getReturn()->getResultCode()} Description: {$response->getReturn()->getResultDescription()}");

            // contains ref
            $this->assertStringContainsString("ref: ",
                $response->getReturn()->getResultDescription(),
                "Failure Code: {$response->getReturn()->getResultCode()} Description: {$response->getReturn()->getResultDescription()}");

            // is of correct response type
            $this->assertInstanceOf(RequestTopupResponse::class, $response);

            // is of correct base response
            $this->assertInstanceOf(ERSWSTopupResponse::class,
                $response->getReturn());

            $responseSuccess = $response->getReturn();

            // check subscriber id
            $this->assertEquals("2348059999008",
                $responseSuccess->getTopupPrincipal()->getPrincipalId()->getId());

            // check account type
            $this->assertEquals("AIRTIME",
                $responseSuccess->getTopupAccountSpecifier()->getAccountTypeId());

            // check user type
            $this->assertEquals("SUBSCRIBERID",
                $responseSuccess->getTopupPrincipal()
                    ->getPrincipalId()->getType());

            //check amount
            $this->assertEquals(1.0,
                $responseSuccess->getTopupAmount()->getValue());

            // check currency
            $this->assertEquals("NGN",
                $responseSuccess->getTopupAmount()->getCurrency());

            // print_r($response);
        }

    }