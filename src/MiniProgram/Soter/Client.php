<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\MiniProgram\Soter;

use EasyWeChat\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author her-cat <hxhsoft@foxmail.com>
 */
class Client extends BaseClient
{
    /**
     * @param string $openid
     * @param string $string
     * @param string $signature
     *
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     */
    public function verifySignature(string $openid, string $string, string $signature)
    {
        return $this->httpPostJson('cgi-bin/soter/verify_signature', [
            'openid' => $openid,
            'json_string' => $string,
            'json_signature' => $signature,
        ]);
    }
}