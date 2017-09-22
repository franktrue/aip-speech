<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/9/22
 * Time: 9:11
 */

namespace Fnf1993\AipSpeech\Lib;


class AipSignOption
{
    const EXPIRATION_IN_SECONDS = 'expirationInSeconds';

    const HEADERS_TO_SIGN = 'headersToSign';

    const TIMESTAMP = 'timestamp';

    const DEFAULT_EXPIRATION_IN_SECONDS = 1800;

    const MIN_EXPIRATION_IN_SECONDS = 300;

    const MAX_EXPIRATION_IN_SECONDS = 129600;
}