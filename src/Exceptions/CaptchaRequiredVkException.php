<?php

/**
 * This file is part of VkClient package.
 *
 * @author ATehnix <atehnix@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ATehnix\VkClient\Exceptions;

/**
 * Class CaptchaRequiredVkException
 *
 * @package ATehnix\VkClient
 */
class CaptchaRequiredVkException extends VkException
{
    public string $captchaSid;
    public string $captchaImg;

    public function __construct(string $message, string $captchaSid, string $captchaImg)
    {
        parent::__construct($message);
        $this->captchaSid = $captchaSid;
        $this->captchaImg = $captchaImg;
    }

    public function getCaptchaSid(): string
    {
        return $this->captchaSid;
    }

    public function getCaptchaImg(): string
    {
        return $this->captchaImg;
    }
}
