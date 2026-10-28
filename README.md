# lck/swoft

Swoft 2.0.x 骨架应用（PHP 8.4 兼容维护版）。

本项目是 [swoft-cloud/swoft](https://github.com/swoft-cloud/swoft) 的长期维护分支。官方 2.0.x 已停止维护，
在 PHP 8.0+ 环境下存在多处致命兼容问题。我们在官方基线之上补齐 PHP 8.4 兼容补丁，并以
`lck/swoft-*` 名义重新发布全部组件包。

**命名空间与用法完全不变**：代码里仍然是 `use Swoft\Http\Server\...`、`use Swoft\Db\...`，
业务代码无需任何修改。改变的只有 Composer 包名（`swoft/*` → `lck/swoft-*`），
原因是官方包源已无人维护、且无法容纳 PHP 8.4 修复。

## 环境要求

- PHP >= 7.4（已验证 7.4 与 8.4）
- Swoole 扩展 >= 4.4（PHP 8.4 下 5.x 或 6.x 均可）
- ext-pdo、ext-redis、ext-json、ext-simplexml、ext-libxml、ext-mbstring

## 安装

### 方式一：composer create-project（推荐）

```bash
composer create-project lck/swoft my-app
cd my-app
```

### 方式二：git clone 后手动安装

```bash
git clone https://gitee.com/lck8203/swoft-skeleton.git my-app
cd my-app
composer install --no-dev
cp .env.example .env
```

编辑 `.env` 调整监听地址、端口等启动参数，然后启动：

```bash
php bin/swoft http:start      # HTTP 服务
php bin/swoft ws:start        # WebSocket
php bin/swoft rpc:start       # RPC
php bin/swoft tcp:start       # TCP
```

启动成功会在终端输出 `SERVER INFORMATION(v2.0.13) PHP 8.4` 信息面板。

## 组件包

全部组件以 `lck/swoft-*` 发布，版本 `v2.0.13`，命名空间保持 `Swoft\*` 不变：

| 包名 | 命名空间 |
| --- | --- |
| `lck/swoft-framework` | `Swoft\` |
| `lck/swoft-http-server` | `Swoft\Http\Server\` |
| `lck/swoft-rpc-server` | `Swoft\Rpc\Server\` |
| `lck/swoft-rpc-client` | `Swoft\Rpc\Client\` |
| `lck/swoft-websocket-server` | `Swoft\WebSocket\Server\` |
| `lck/swoft-tcp-server` | `Swoft\Tcp\Server\` |
| `lck/swoft-db` | `Swoft\Db\` |
| `lck/swoft-redis` | `Swoft\Redis\` |
| `lck/swoft-annotation` | `Swoft\Annotation\` |
| ... | 与官方目录结构一一对应 |

## PHP 8.4 兼容补丁内容

- `ReflectionType::getName()` 在联合类型下不可用，改为 `NamedType` 判定
- `ReflectionProperty::setAccessible()` 废弃，加 `PHP_VERSION_ID < 80100` 守卫
- 隐式 nullable 参数（`Type $x = null`）改为显式 `?Type $x = null`
- 动态属性废弃，为相关类补 `#[\AllowDynamicProperties]`
- `Serializable` 接口改为 `__serialize` / `__unserialize`
- `ArrayAccess` 等内部接口补 `#[\ReturnTypeWillChange]`
- `symfony/yaml`、`symfony/expression-language` 升到 5.4（避开 4.x 安全公告）
- `lck/php-jwt ^7.2.3`（`firebase/php-jwt` fork，移除 HMAC 最小长度强制校验以保持与 v5 行为一致）
- `lck/phpdotenv ^3.6.12`（`vlucas/phpdotenv` fork，含 PHP 8.4 隐式 nullable 补丁）

## 与官方版的差异

| 项 | 官方 | 本项目 |
| --- | --- | --- |
| Composer 包名 | `swoft/*` | `lck/swoft-*` |
| PHP 版本 | 7.1 - 7.4 | 7.4 - 8.4 |
| 维护状态 | 已停止 | 长期维护 |
| 命名空间 | `Swoft\*` | `Swoft\*`（不变） |
| 用法/API | — | 完全一致 |

## 许可证

Apache-2.0，与官方一致。
