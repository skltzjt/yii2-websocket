<?php
/**
 * wtwt/yii2-websocket
 *
 * @category  PHP
 * @package   Yii2
 * @copyright 2018-2019 YiiPlus Ltd
 * @license   https://github.com/wtwt/yii2-websocket/licence.txt Apache 2.0
 * @link      http://www.wtwt.com
 */

namespace wtwt\websocket;

use Yii;
use yii\base\Component;

/**
 * WebSocket Client 抽象类
 *
 * @author gengxiankun <gengxiankun@126.com>
 * @since 1.0.0
 */
abstract class WebSocket extends Component
{
	/**
	 * 发送数据到WebSocket
	 *
	 * @param mixed  $data   发送的数据
	 * @param string $type   数据类型
	 * @param int    $flags
	 */
	abstract public function send($data, $type = 'text', int $flags = SWOOLE_WEBSOCKET_FLAG_FIN);
}
