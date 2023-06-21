---
title: 安装
sidebarDepth: 3
---

# 如何安装 Castopod ？

Castopod 的安装非常简单。 你能在大多数兼容的 PHP-MySQL 的服务器上安装 Castopod，
无论是专用还是 共享主机。

::: 注意

我们已经发布 Castopod 的官方 Docker 镜像！

如果你更喜欢使用 Docker，则可以跳过此步骤，直接前往 Castopod 的
[Docker 文档](./docker.md)。

:::

## 要求

- PHP v8.1 only
- MySQL 5.7 或更高版本与 MariaDB 10.2 或更高版本
- HTTPS 支持
- An [ntp-synced clock](https://wiki.debian.org/NTP) to validate federation's
  incoming requests

### PHP v8.1 only

PHP version 8.1 is required, with the following extensions installed:

- [intl](https://php.net/manual/en/intl.requirements.php)
- [libcurl](https://php.net/manual/en/curl.requirements.php)
- [mbstring](https://php.net/manual/en/mbstring.installation.php)
- [gd](https://www.php.net/manual/en/image.installation.php) 与 **JPEG**,
  **PNG** 和 **WEBP** 库。
- [exif](https://www.php.net/manual/en/exif.installation.php)

此外，请确保在 PHP 中启用以下扩展：

- json (默认启用-不要关闭)
- xml (默认启用-不要关闭)
- [mysqlnd](https://php.net/manual/en/mysqlnd.install.php)

### 兼容 MySQL 的数据库

> 我们建议使用 [MariaDB](https://mariadb.org)。

::: 警告

Castopod 仅适用于受支持的 MySQL 5.7 或更高版本的兼容数据库。 例如，MySQL 5.6 已
经不受支持，因为它于 2021 年 2 月 5 日已停止更新。

:::

你需要填写服务器主机名、数据库名称、用户名和密码才能完成安装过程。 如果没有这些
，请与你的服务器管理员联系。

#### 权限

用户至少需要在数据库中有这些权限，Castopod 才能工作：
`CREATE`，`ALTER`，`DELETE`，`EXECUTE`，`INDEX`，`INSERT`，`SELECT`，`UPDATE`，`REFERENCES`，`CREATE VIEW`。

### （可选）FFmpeg v4.1.8 或更高版本，用于视频素材

如果你需要视频素材，则需要 [FFFmpeg](https://www.ffmpeg.org/) 4.1.8 或更高版本。
必须安装以下扩展：

- **FreeType 2** 来自库
  [gd](https://www.php.net/manual/en/image.installation.php)

### （可选）其他建议

- 使用 Redis 提高缓存性能。
- CDN 用于静态文件缓存以实现更好的性能。
- 电子邮件用于找回密码。

## 安装说明

### 准备环境

0. 需要一台已经实现 [环境要求](#requirements)的 Web 服务器
1. 为 Castopod 创建一个 MySQL 数据库，其中用户具有访问和修改权限（有关详细信息，
   请参阅 [MySQL 兼容数据库](#mysql-compatible-database)）。
2. 使用 _SSL 证书_ 在您的域激活 HTTPS。
3. 下载最新的 [Castopod](https://castopod.org/) 到 web 服务器并解压（如果尚未下
   载）。
   - ⚠️ 将 web 服务器根目录设置为 `castopod` 文件夹中的 `public/` 子文件夹。
4. Add **cron tasks** on your web server for various background processes
   (replace the paths accordingly):

   ```bash
      * * * * * /path/to/php /path/to/castopod/spark tasks:run >> /dev/null 2>&1
   ```

   **Note** - If you do not add this cron task, the following Castopod features
   will not work:

   - Importing a podcast from an existing RSS feed
   - Broadcasting social activities to your followers in the fediverse
   - Broadcasting episodes to open hubs using
     [WebSub](https://en.wikipedia.org/wiki/WebSub)
   - Generating video clips -
     [requires FFmpeg](#optional-ffmpeg-v418-or-higher-for-video-clips)

### (推荐) 安装向导

1. 前往你最喜欢的浏览器并跳转至安装向导页面
   (`https://your_domain_name.com/cp-install`)运行 Castopod 安装脚本。
2. 请按照屏幕上的说明进行操作。
3. 开始播客！

::: 注意

安装脚本将会在根目录中创建一个 `.env` 文件并写入数据。 如果你不能执行安装向导，
那么可以基于 `.env.example` 文件手动创建和编辑 `.env` 文件。

:::

### 邮箱/SMTP 设置

某些功能需要电子邮件配置才能正常工作（例如： 找回密码，向高级订阅者发送说明， …)

你可以在实例的 `.env` 中添加你的电子邮件配置，如下所示：

```ini
# […]

# […]

email.fromEmail="你的邮件地址"
email.SMTPHost="你的邮件主机"
email.SMTPUser="你的邮件用户名"
email.SMTPPass="你的邮件密码"
```

#### 电子邮件配置选项

| 变量名称         | 类型                 | 默认         |
| ---------------- | -------------------- | ------------ |
| **`fromEmail`**  | string               | `undefined`  |
| **`fromName`**   | string               | `"Castopod"` |
| **`SMTPHost`**   | string               | `undefined`  |
| **`SMTPUser`**   | string               | `undefined`  |
| **`SMTPPass`**   | string               | `undefined`  |
| **`SMTPPort`**   | number               | `25`         |
| **`SMTPCrypto`** | [`"tls"` or `"ssl"`] | `"tls"`      |

### Media storage

By default, files are saved to the `public/media` folder using the file system.
If you need to relocate the `media` folder to a different location, you can
specify it in your `.env` file as shown below:

```ini
# […]

media.root="media"
media.storage="/mnt/storage"
```

In this example, the files will be saved to the /mnt/storage/media folder. Make
sure to also update your web server configuration to reflect this change.

### S3

If you prefer storing your media files on an S3 compatible storage, you may
specify it in your `.env`:

```ini
# […]

media.fileManager="s3"
media.s3.endpoint="your_s3_host"
media.s3.key="your_s3_key"
media.s3.secret="your_s3_secret"
media.s3.region="your_s3_region"
```

#### S3 config options

| Variable name           | Type    | Default     |
| ----------------------- | ------- | ----------- |
| **`endpoint`**          | string  | `undefined` |
| **`key`**               | string  | `undefined` |
| **`secret`**            | string  | `undefined` |
| **`region`**            | string  | `undefined` |
| **`bucket`**            | string  | `castopod`  |
| **`protocol`**          | number  | `undefined` |
| **`pathStyleEndpoint`** | boolean | `false`     |
| **`keyPrefix`**         | string  | `undefined` |

## 社区套餐

If you don't want to bother with installing Castopod manually, you may use one
of the packages created and maintained by the open-source community.

### Install with YunoHost

[YunoHost](https://yunohost.org/) is a distribution based on Debian GNU/Linux
made up of free and open-source software packages. It manages the hardships of
self-hosting for you.

<div class="flex flex-wrap items-center gap-4">

<a href="https://install-app.yunohost.org/?app=castopod" target="_blank" rel="noopener noreferrer">
   <img src="https://install-app.yunohost.org/install-with-yunohost.svg" alt="从 YunoHost 安装 Castopod" class="align-middle" />
</a>

<a href="https://github.com/YunoHost-Apps/castopod_ynh" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-[.3rem] mx-auto font-semibold text-center text-black rounded-md gap-x-1 border-2 border-solid border-[#333] hover:no-underline hover:bg-gray-100"><svg
   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em"
   class="text-xl"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2A10 10 0 0 0 2 12a10 10 0 0 0 6.84 9.49c.5.09.69-.21.69-.48l-.02-1.86c-2.51.46-3.16-.61-3.36-1.18-.11-.28-.6-1.17-1.02-1.4-.35-.2-.85-.66-.02-.67.79-.01 1.35.72 1.54 1.02.9 1.52 2.34 1.1 2.91.83a2.1 2.1 0 0 1 .64-1.34c-2.22-.25-4.55-1.11-4.55-4.94A3.9 3.9 0 0 1 6.68 8.8a3.6 3.6 0 0 1 .1-2.65s.83-.27 2.75 1.02a9.28 9.28 0 0 1 2.5-.34c.85 0 1.7.12 2.5.34 1.9-1.3 2.75-1.02 2.75-1.02.54 1.37.2 2.4.1 2.65.63.7 1.02 1.58 1.02 2.68 0 3.84-2.34 4.7-4.56 4.94.36.31.67.91.67 1.85l-.01 2.75c0 .26.19.58.69.48A10.02 10.02 0 0 0 22 12 10 10 0 0 0 12 2z"/></svg>Github
Repo</a>

</div>
