<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Http\Controller;

use Swoft\Http\Message\ContentType;
use Swoft\Http\Message\Response;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\View\Annotation\Mapping\View;
use Throwable;

/**
 * Class ViewController
 *
 * @since 2.0
 *
 * @Controller(prefix="view")
 */
class ViewController
{
    /**
     * @RequestMapping("index")
     *
     * @return array
     */
    public function index(): array
    {
        return [
            'msg' => 'hello'
        ];
    }

    /**
     * Will render view by annotation tag View
     *
     * @RequestMapping("/home")
     * @View("home/index")
     *
     * @throws Throwable
     */
    public function indexByViewTag(): array
    {
        return [
            'msg' => 'hello'
        ];
    }
}
