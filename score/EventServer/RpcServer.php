<?php
namespace protocol\rpc;
/**
 * 作为开放服务的接口模板，由用户定义,该文件将在服务第一次启动时由score/EventServer复制到protocol/rpc下
 */

use Swoolefy\Core\Swfy;

class RpcServer extends \Swoolefy\Rpc\RpcServer {
	/**
	 * __construct 初始化
	 * @param array $config
	 */
	public function __construct(array $config=[]) {
		parent::__construct($config);
	}

	/**
	 * onWorkerStart worker进程启动时回调处理
	 * @param  object $server
	 * @param  int    $worker_id
	 * @return void       
	 */
	public function onWorkerStart($server, $worker_id) {}

	/**
	 * onConnet socket连接上时回调函数
	 * @param  object $server
	 * @param  int    $fd    
	 * @return void        
	 */
	public function onConnet($server, $fd) {}

	/**
	 * onFinish 
	 * @param  object $server
	 * @param  int    $task_id
	 * @param  mixed  $data
	 * @return mixed
	 */
	public function onFinish($server, $task_id, $data) {}

	/**
	 * onPipeMessage 
	 * @param    object  $server
	 * @param    int     $src_worker_id
	 * @param    mixed   $message
	 * @return   void
	 */
	public function onPipeMessage($server, $from_worker_id, $message) {}

	/**
	 * onClose tcp连接关闭时回调函数
	 * @param  object $server
	 * @param  int    $fd    
	 * @return void
	 */
	public function onClose($server, $fd) {}
	
}
