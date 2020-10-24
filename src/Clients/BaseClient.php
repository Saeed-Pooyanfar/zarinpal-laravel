<?php

namespace Zarinpal\Clients;

trait BaseClient
{
    /**
     * Request new payment.
     *
     * @param array $input
     * @param bool $extra
     *
     * @return array
     */
    public function request(array $input, bool $extra)
    {
        $uri = ($extra) ? 'PaymentRequestWithExtra' : 'PaymentRequest';

        return $this->sendRequest($uri, $input);
    }

    /**
     * Verify the payment.
     *
     * @param array $input
     * @param bool $extra
     *
     * @return array
     */
    public function verify(array $input, bool $extra)
    {
        $uri = ($extra) ? 'PaymentVerificationWithExtra' : 'PaymentVerification';

        return $this->sendRequest($uri, $input);
    }

    /**
     * Extends authority token lifetime.
     *
     * @param array $input
     *
     * @return array
     */
    public function refreshAuthority(array $input)
    {
        return $this->sendRequest('RefreshAuthority', $input);
    }

    /**
     * Get unverified transactions.
     *
     * @param array $input
     *
     * @return array
     */
    public function unverifiedTransactions(array $input)
    {
        return $this->sendRequest('UnverifiedTransactions', $input);
    }
}
