---
sidebarDepth: 2
---

# 欢迎 👋

[![release-badge]][release]&nbsp;[![license-badge]][license]&nbsp;[![contributions-badge]][contributions]&nbsp;[![semantic-release-badge]][semantic-release]&nbsp;[![crowdin-badge]][crowdin]&nbsp;[![discord-badge]][discord]&nbsp;[![stars-badge]][stars]

Castopod 是一个免费的开源播客托管平台，为那些想要和听众接触与互动的播客们制作的
。

Castopod 易于安装，并使用 [CodeIgniter4](https://codeigniter.com/) 构建， 这是一
个强大的 PHP 框架，并且占用极小。

<div class="flex items-center">
  <a href="/getting-started/install" class="inline-flex items-center px-4 py-2 mx-auto font-semibold text-center text-white rounded-full shadow gap-x-1 bg-pine-500 hover:no-underline hover:bg-pine-600">安装<svg viewBox="0 0 24 24" width="1em" height="1em" class="text-xl text-pine-200"><path fill="currentColor" d="m16.172 11-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg></a>
</div>

## 功能特色

- 🌱 &nbsp;免费与开源（AGPL v3 许可证）
- 🔐 &nbsp;专注于数据主权：你的内容、受众和分析属于你，而且只属于你
- 🪄 &nbsp;播客 2.0 功能：GUID，锁定，报表，资金，章节，位置信息，人员，原声摘要
  ...
- 💬 &nbsp;内置社交网络：
  - 🚀 &nbsp;Castopod 是联邦宇宙的一部分，联邦宇宙是一个去中心化的社交网络
  - ❤️ &nbsp;创建帖子、分享、收藏和评论剧集。
- 📈 &nbsp;内置分析：
  - ⚖️ &nbsp;符合 GDPR / CCPA / LGPD 标准
  - 🪙 &nbsp;标准 IABv2 受众测量
  - 🏡 &nbsp;本地分析，不涉及第三方
- 📢 &nbsp;内置营销工具：
  - ✅ &nbsp;SEO 开箱即用（open-graph meta-tags，JSON-LD 等）
  - 📱 &nbsp;PWA：作为独立应用安装
  - 🎨 &nbsp;自定义的主题颜色
  - 🎬 &nbsp;从单个剧集生成随时可以共享的视频素材
  - 🔉 &nbsp;生成原声摘要
  - ▶️ &nbsp;嵌入式播放器，将你的剧集嵌入任何网站
- 💸 &nbsp;货币：
  - 🔗 &nbsp;资金链接
  - 📲 &nbsp;点击收听广告
  - 🤝 &nbsp;value4value / 网络货币化
  - 💎 &nbsp;高级版播客
- 📡 &nbsp;使用 RSS 将你的剧集发布到任何地方
  - 📱 &nbsp;支持众多索引和应用程序：Podcast Index，Apple
    Podcasts，Spotify，Google Podcasts，Deezer，Podcast Addict，Podfriend...
  - ⚡ &nbsp;使用 WebSub 即时广播你的剧集
- 📥 &nbsp;播客导入：将现有播客移至 Castopod
- 📤 &nbsp;也支持将播客移出 Castopod
- 🔀 &nbsp;多租户：根据需要托管任意数量的播客
- 👥 &nbsp;多用户：添加贡献者并设置角色
- 🌎 &nbsp;i18n 支持：翻译成英语，法语，波兰语，德语，巴西葡萄牙语和西班牙语
  ...[还有更多](https://translate.castopod.org)！

## 创作动机

The podcasting ecosystem is decentralized by nature: you can create your podcast
as an RSS file, publish it on the web and have it shared everywhere online.

It is in fact one of the only media to have stayed this way for a long time.

As usages are evolving, more and more people are getting into podcasts: whether
it is creators finding new ways to share their ideas, or listeners in the search
for better content.

With podcasting becoming more widely used, some companies are trying to shift it
towards a more controlled and centralized medium.

Castopod was created in an effort to provide an open and sustainable alternative
to hosting your podcasts, promoting decentralization to ensure that podcasters
creativity can express itself.

This project is pushed by the open-source community, and specifically by the
[Fediverse](https://fediverse.party/en/fediverse/) and
[Podcasting 2.0](https://podcastindex.org/) movements.

## 与其他解决方案的对比

We believe that a solution is not necessarily right for everyone, it highly
depends on your needs. So, here are comparisons with other tools to help you to
gauge whether Castopod is the right fit for&nbsp;you.

### Castopod 对比 Wordpress

Castopod is often referred to as "the Wordpress for podcasts" because of the
similarities between the two. In some ways this is true. And actually, Castopod
was greatly inspired by the Wordpress ecosystem, seeing the ease of adoption
from the community and the number of websites running&nbsp;it.

Just like Wordpress, Castopod is free & open source, built using PHP with a
MySQL database and is packaged in a way that you can easily install on most web
servers.

Wordpress is a great way to create your website and extend it with plugins to
get what you want. It is a full fledged CMS that helps you get any type of
website online.

On the other hand, Castopod is meant to address the podcasters needs
specifically, focusing on podcasting, and nothing else. You don't need any
plugin to get you started on your podcasting&nbsp;journey.

This allows optimizing the processes specific to podcasting: ranging from the
creation of your podcasts and the publication of new episodes all the way to
broadcasting, marketing and analytics.

Finally, depending on your needs, Wordpress and Castopod can even live side by
side as they share the same requirements!

### Castopod 对比 Funkwhale

Funkwhale is a self-hosted, modern free and open-source music server. Just as
Castopod, Funkwhale is on the fediverse, a decentralized social network allowing
interoperability between the two.

Funkwhale was initially built around music. And later on, as the project
evolved, the ability to host podcasts was introduced.

Unlike Funkwhale, Castopod has been designed and built around podcasting
exclusively. This allows easier implementation for features related to the
podcasting ecosystem, such as the podcasting 2.0 features (transcripts,
chapters, locations, persons, …).

So, you should probably use Funkwhale if you want to host your music, and use
Castopod if you want to host your podcasts.

### Castopod 与其他播客

There are many solutions for you to host your podcasts, some of which are really
great and [a lot of them](https://podcastindex.org/apps) are jumping into the
Podcasting 2.0 wagon just like Castopod!

Each of these solutions differ from one another, you may compare with the
[list of features](#features).

That being said, there are two main differences with other podcasting solutions:

- Castopod 是自托管的，唯一允许你控制所有数据的方案。 并且，由于是开源的，甚至可
  以按自己的想法修改。

- Castopod 是目前唯一一个同时集成去中心化的，带有 ActivePub 的社交网络以及很多播
  客 2.0 功能集成的解决方案，希望弥合两者之间的差距。

## 贡献

Love Castopod and would like to help? Take a look at the following documentation
to get you&nbsp;started.

### 行为准则

Castopod has adopted a Code of Conduct that we expect project participants to
adhere to. Please read the
[CODE_OF_CONDUCT manual](https://code.castopod.org/adaures/castopod/-/blob/beta/CODE_OF_CONDUCT.md)
so that you can understand what actions will and will not be&nbsp;tolerated.

### 贡献指南

Read our [contributing guide](../contributing/guidelines.md) to learn about our
development process, how to propose bugfixes and improvements, and how to build
and test your changes to Castopod.

## 贡献者 ✨

Thanks goes to these wonderful people
([emoji key](https://allcontributors.org/docs/en/emoji-key)):

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore-start -->
<!-- markdownlint-disable -->
<table>
  <tbody>
    <tr>
      <td align="center" valign="top" width="14.28%"><a href="https://github.com/yassinedoghri"><img src="https://code.castopod.org/uploads/-/system/user/avatar/3/avatar.png?s=100" width="100px;" alt="Yassine Doghri"/><br /><sub><b>Yassine Doghri</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/commits/master" title="Code">💻</a> <a href="https://code.castopod.org/adaures/castopod/issues?author_username=yassinedoghri" title="Bug reports">🐛</a> <a href="https://code.castopod.org/adaures/castopod/commits/master" title="Documentation">📖</a> <a href="https://code.castopod.org/adaures/castopod/merge_requests?scope=all&state=all&approver_usernames[]=yassinedoghri" title="Reviewed Pull Requests">👀</a> <a href="#maintenance-yassinedoghri" title="Maintenance">🚧</a> <a href="#content-yassinedoghri" title="Content">🖋</a> <a href="#design-yassinedoghri" title="Design">🎨</a> <a href="#a11y-yassinedoghri" title="Accessibility">️️️️♿️</a> <a href="https://translate.castopod.org" title="Translation">🌍</a> <a href="#question-yassinedoghri" title="Answering Questions">💬</a> <a href="#mentoring-yassinedoghri" title="Mentoring">🧑‍🏫</a> <a href="#infra-yassinedoghri" title="Infrastructure (Hosting, Build-Tools, etc)">🚇</a> <a href="#ideas-yassinedoghri" title="Ideas, Planning, & Feedback">🤔</a> <a href="#projectManagement-yassinedoghri" title="Project Management">📆</a> <a href="https://blog.castopod.org/author/yassinedoghri/" title="Blogposts">📝</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/benjamin"><img src="https://code.castopod.org/uploads/-/system/user/avatar/2/avatar.png?s=100" width="100px;" alt="Benjamin Bellamy"/><br /><sub><b>Benjamin Bellamy</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/commits/master" title="Code">💻</a> <a href="https://code.castopod.org/adaures/castopod/issues?author_username=benjamin" title="Bug reports">🐛</a> <a href="https://code.castopod.org/adaures/castopod/merge_requests?scope=all&state=all&approver_usernames[]=benjamin" title="Reviewed Pull Requests">👀</a> <a href="#content-benjamin" title="Content">🖋</a> <a href="https://translate.castopod.org" title="Translation">🌍</a> <a href="#question-benjamin" title="Answering Questions">💬</a> <a href="#infra-benjamin" title="Infrastructure (Hosting, Build-Tools, etc)">🚇</a> <a href="#ideas-benjamin" title="Ideas, Planning, & Feedback">🤔</a> <a href="https://blog.castopod.org/author/benjamin-bellamy/" title="Blogposts">📝</a> <a href="#projectManagement-benjamin" title="Project Management">📆</a> <a href="#talk-benjamin" title="Talks">📢</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://github.com/ola-hn"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Ola Hneini"/><br /><sub><b>Ola Hneini</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/commits/master" title="Code">💻</a> <a href="https://code.castopod.org/adaures/castopod/merge_requests?scope=all&state=all&approver_usernames[]=ola" title="Reviewed Pull Requests">👀</a> <a href="https://code.castopod.org/adaures/castopod/commits/master" title="Documentation">📖</a> <a href="#maintenance-ola" title="Maintenance">🚧</a> <a href="#question-ola" title="Answering Questions">💬</a> <a href="#ideas-ola" title="Ideas, Planning, & Feedback">🤔</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://mamot.fr/@rdelaage"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Romain de Laage"/><br /><sub><b>Romain de Laage</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/commits/master" title="Code">💻</a> <a href="#infra-rdelaage" title="Infrastructure (Hosting, Build-Tools, etc)">🚇</a> <a href="https://code.castopod.org/adaures/castopod/commits/master" title="Documentation">📖</a> <a href="https://translate.castopod.org" title="Translation">🌍</a> <a href="#ideas-rdelaage" title="Ideas, Planning, & Feedback">🤔</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://twitter.com/lyonelbernard"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Lyonel Bernard"/><br /><sub><b>Lyonel Bernard</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=Lyonel" title="Bug reports">🐛</a> <a href="#question-Lyonel" title="Answering Questions">💬</a> <a href="#audio-Lyonel" title="Audio">🔊</a> <a href="#ideas-Lyonel" title="Ideas, Planning, & Feedback">🤔</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://www.crypticchameleon.com/"><img src="https://secure.gravatar.com/avatar/7c2a721b52d0763673a600e8f01bd745?s=80&d=identicon?s=100" width="100px;" alt="Christopher Lagonick-Weitzel"/><br /><sub><b>Christopher Lagonick-Weitzel</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=ctlw83" title="Bug reports">🐛</a> <a href="#question-ctlw83" title="Answering Questions">💬</a> <a href="#audio-ctlw83" title="Audio">🔊</a> <a href="#ideas-ctlw83" title="Ideas, Planning, & Feedback">🤔</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://ernestoacosta.me/"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Ernesto Acosta"/><br /><sub><b>Ernesto Acosta</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=ernestoacostame" title="Bug reports">🐛</a> <a href="#audio-ernestoacostame" title="Audio">🔊</a> <a href="https://translate.castopod.org" title="Translation">🌍</a> <a href="#question-ernestoacostame" title="Answering Questions">💬</a> <a href="#ideas-ernestoacostame" title="Ideas, Planning, & Feedback">🤔</a></td>
    </tr>
    <tr>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/Behel"><img src="https://secure.gravatar.com/avatar/ad63ee8ef8e3db8253d21e5012d2724f?s=80&d=identicon?s=100" width="100px;" alt="Bastien Luneteau"/><br /><sub><b>Bastien Luneteau</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/commits/master" title="Code">💻</a> <a href="https://code.castopod.org/adaures/castopod/issues?author_username=Behel" title="Bug reports">🐛</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://www.cecillie.fr/"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Cécile Ricordeau"/><br /><sub><b>Cécile Ricordeau</b></sub></a><br /><a href="#design-cecillie" title="Design">🎨</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/PatrykMis"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Patryk Miś"/><br /><sub><b>Patryk Miś</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/mspanc"><img src="https://secure.gravatar.com/avatar/eed8337939641eac5ad0b570bd6acf96?s=80&d=identicon?s=100" width="100px;" alt="Marcin Lewandowski"/><br /><sub><b>Marcin Lewandowski</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=mspanc" title="Bug reports">🐛</a> <a href="#ideas-mspanc" title="Ideas, Planning, & Feedback">🤔</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/SJanik"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Sebastian Janik"/><br /><sub><b>Sebastian Janik</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/commits/master" title="Code">💻</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/patryk"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Patryk Karczmarczyk"/><br /><sub><b>Patryk Karczmarczyk</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/commits/master" title="Code">💻</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/ddenis"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="denis d"/><br /><sub><b>denis d</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=ddenis" title="Bug reports">🐛</a> <a href="#ideas-ddenis" title="Ideas, Planning, & Feedback">🤔</a></td>
    </tr>
    <tr>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/douglaskastle"><img src="https://secure.gravatar.com/avatar/b7e652ba4b6bcd440afa069e7f7bc9e6?s=80&d=identicon?s=100" width="100px;" alt="Douglas Kastle"/><br /><sub><b>Douglas Kastle</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=douglaskastle" title="Bug reports">🐛</a> <a href="#ideas-douglaskastle" title="Ideas, Planning, & Feedback">🤔</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/cExplorer"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="cExplorer"/><br /><sub><b>cExplorer</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=cExplorer" title="Bug reports">🐛</a> <a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/imacrea"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="ImaCrea"/><br /><sub><b>ImaCrea</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=imacrea" title="Bug reports">🐛</a> <a href="#ideas-imacrea" title="Ideas, Planning, & Feedback">🤔</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/jonas"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Jonas S"/><br /><sub><b>Jonas S</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/commits/master" title="Code">💻</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/yannL"><img src="https://secure.gravatar.com/avatar/9c46600ce566ec6d526370d8e104b1c8?s=80&d=identicon?s=100" width="100px;" alt="LEFEBVRE Yann"/><br /><sub><b>LEFEBVRE Yann</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=yannL" title="Bug reports">🐛</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/spaetz"><img src="https://secure.gravatar.com/avatar/278e1af65e82993efd0ba7bbbacf6435?s=80&d=identicon?s=100" width="100px;" alt="Sebastian Späth"/><br /><sub><b>Sebastian Späth</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=spaetz" title="Bug reports">🐛</a> <a href="#ideas-spaetz" title="Ideas, Planning, & Feedback">🤔</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/rocky"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="rocky III"/><br /><sub><b>rocky III</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=rocky" title="Bug reports">🐛</a></td>
    </tr>
    <tr>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/Regenpfeifer"><img src="https://code.castopod.org/uploads/-/system/user/avatar/103/avatar.png?s=100" width="100px;" alt="Hermann Josef Eckl"/><br /><sub><b>Hermann Josef Eckl</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=Regenpfeifer" title="Bug reports">🐛</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://code.castopod.org/cyrilledel"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Delhaye Cyrille"/><br /><sub><b>Delhaye Cyrille</b></sub></a><br /><a href="https://code.castopod.org/adaures/castopod/issues?author_username=cyrilledel" title="Bug reports">🐛</a> <a href="#ideas-cyrilledel" title="Ideas, Planning, & Feedback">🤔</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://twitter.com/otetranome"><img src="https://code.castopod.org/uploads/-/system/user/avatar/113/avatar.png?s=100" width="100px;" alt="João Leandro"/><br /><sub><b>João Leandro</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a> <a href="#ideas-otetranome" title="Ideas, Planning, & Feedback">🤔</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://achouvardas.eu/"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Angelos Chouvardas"/><br /><sub><b>Angelos Chouvardas</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://mastodon.fjerland.no/@eivind"><img src="https://mastodon.fjerland.no/system/accounts/avatars/107/769/768/295/192/222/original/e5c985fea6487dcb.jpg?s=100" width="100px;" alt="Eivind"/><br /><sub><b>Eivind</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://mastodon.fedi.bzh/@ewen"><img src="https://mastodon.fedi.bzh/system/accounts/avatars/000/000/002/original/6f387690a504ae46.jpg?s=100" width="100px;" alt="Ewen"/><br /><sub><b>Ewen</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a> <a href="#ideas-3wen" title="Ideas, Planning, & Feedback">🤔</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/forght"><img src="https://crowdin-static.downloads.crowdin.com/avatar/15073833/large/82d1e2e443a6df7edc43a7405dfeeb75_default.png?s=100" width="100px;" alt="forght"/><br /><sub><b>forght</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
    </tr>
    <tr>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/glottis0q"><img src="https://crowdin-static.downloads.crowdin.com/avatar/15209934/large/8b17ef6a7399f0b82a8198f87c224195.png?s=100" width="100px;" alt="glottis0q"/><br /><sub><b>glottis0q</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://mstdn.fr/@ButterflyOfFire"><img src="https://static.mstdn.fr/static/accounts/avatars/000/065/901/original/5908e93ad5447f15.png?s=100" width="100px;" alt="ButterflyOfFire"/><br /><sub><b>ButterflyOfFire</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://github.com/lil5"><img src="https://avatars.githubusercontent.com/u/17646836?v=4?s=100" width="100px;" alt="Lucian I. Last"/><br /><sub><b>Lucian I. Last</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/luuzviir"><img src="https://crowdin-static.downloads.crowdin.com/avatar/13166188/large/d03ab0abc7ce354b210d836955cd3805_default.png?s=100" width="100px;" alt="LuuzViir"/><br /><sub><b>LuuzViir</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/cthtc"><img src="https://crowdin-static.downloads.crowdin.com/avatar/15211502/large/ed0651060cb8474a9519b5168bd377c1_default.png?s=100" width="100px;" alt="CTHTC"/><br /><sub><b>CTHTC</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/retrograde"><img src="https://crowdin-static.downloads.crowdin.com/avatar/15021651/large/b10c4057f85bf4de49c7fdf01354ecde.jpeg?s=100" width="100px;" alt="Russian Retro"/><br /><sub><b>Russian Retro</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/mareklach"><img src="https://crowdin-static.downloads.crowdin.com/avatar/13572324/large/3eeba8d569c247ace33862bf4ef4748f.jpeg?s=100" width="100px;" alt="Marek L'ach"/><br /><sub><b>Marek L'ach</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
    </tr>
    <tr>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/gunchleoc"><img src="https://crowdin-static.downloads.crowdin.com/avatar/13043878/large/3223f7b606296a8b1c92c5de39c459a2_default.png?s=100" width="100px;" alt="GunChleoc"/><br /><sub><b>GunChleoc</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/gabisnow"><img src="https://crowdin-static.downloads.crowdin.com/avatar/15214858/large/5b083bdf9c9e9de67cc6ee72a6c8db18_default.png?s=100" width="100px;" alt="GabiSnow"/><br /><sub><b>GabiSnow</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/bendaha"><img src="https://crowdin-static.downloads.crowdin.com/avatar/15331656/large/cd92450d2c20202299fb3a0075903e20_default.png?s=100" width="100px;" alt="bendaha"/><br /><sub><b>bendaha</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/samuelroland"><img src="https://crowdin-static.downloads.crowdin.com/avatar/14980053/large/3e154a37d03d6e98ae402ed3f930f4f5.png?s=100" width="100px;" alt="Samuel Roland"/><br /><sub><b>Samuel Roland</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://dimitriregnier.net/"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Dimitri Regnier"/><br /><sub><b>Dimitri Regnier</b></sub></a><br /><a href="#ideas-dimregnier" title="Ideas, Planning, & Feedback">🤔</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://im.irithys.com/@thy"><img src="https://crowdin-static.downloads.crowdin.com/avatar/15405614/large/3086461c47cce0a0c031925e5f943412.png?s=100" width="100px;" alt="irithys"/><br /><sub><b>irithys</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://twitter.com/caos30"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Sergi"/><br /><sub><b>Sergi</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
    </tr>
    <tr>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/xosem"><img src="https://crowdin-static.downloads.crowdin.com/avatar/12617257/large/a201650da44fed28890b0e0d8477a663.jpg?s=100" width="100px;" alt="ghose (XoseM)"/><br /><sub><b>ghose (XoseM)</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/basen1982"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="Andreas Olsson"/><br /><sub><b>Andreas Olsson</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/leonfrom"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="leonfrom"/><br /><sub><b>leonfrom</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/agentcobra57"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="agentcobra"/><br /><sub><b>agentcobra</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/alephoto85"><img src="https://crowdin-static.downloads.crowdin.com/avatar/15094649/large/530391f54157af52ae33058ec15b0f99.jpg?s=100" width="100px;" alt="Alessandro"/><br /><sub><b>Alessandro</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://crowdin.com/profile/liimee"><img src="https://castopod.org/assets/images/castopod-avatar.jpg?s=100" width="100px;" alt="liimee"/><br /><sub><b>liimee</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://github.com/ahmedsabouni"><img src="https://avatars.githubusercontent.com/u/74497842?v=4?s=100" width="100px;" alt="Ahmed Sabouni"/><br /><sub><b>Ahmed Sabouni</b></sub></a><br /><a href="https://translate.castopod.org" title="Translation">🌍</a></td>
    </tr>
  </tbody>
</table>

<!-- markdownlint-restore -->
<!-- prettier-ignore-end -->

<!-- ALL-CONTRIBUTORS-LIST:END -->

This project follows the
[all-contributors](https://github.com/all-contributors/all-contributors)
specification. Contributions of any kind welcome!

## 联系

You may reach us for help or ask any question you have on:

- [Discord](https://castopod.org/discord) （用于与开发人员和社区直接互动）
- [问题跟踪器](https://code.castopod.org/adaures/castopod/-/issues)（用于功能请
  求和错误报告）

Alternatively, you can follow us on social media platforms to get news about
Castopod:

- [podlibre.social](https://podlibre.social/@Castopod) （Mastodon 实例）
- [推特](https://twitter.com/castopod)
- [领英](https://linkedin.com/company/castopod)
- [脸书](https://www.facebook.com/castopod)

## 赞助商

The ongoing development of Castopod is made possible with the support of its
backers. If you'd like to help, please consider
[sponsoring Castopod's development](https://opencollective.com/castopod/contribute).

<div class="flex flex-wrap gap-x-16 gap-y-8">
  <a href="https://adaures.com/" target="_blank" rel="noopener noreferrer"><img src="/images/sponsors/adaures.svg" alt="Ad Aures Logo" class="h-16" /></a>
  <a href="https://nlnet.nl/project/Castopod/" target="_blank" rel="noopener noreferrer"><img src="/images/sponsors/nlnet.svg" alt="NLnet Logo" class="h-16" /></a>
</div>

## 许可证

[GNU Affero General Public License v3.0](https://choosealicense.com/licenses/agpl-3.0/)

Copyright © 2020-present, [Ad Aures](https://adaures.com/).
https://img.shields.io/gitlab/v/release/2?color=brightgreen&gitlab_url=https%3A%2F%2Fcode.castopod.org%2F&include_prereleases&label=release
https://img.shields.io/github/license/ad-aures/castopod?color=blue
https://img.shields.io/badge/contributions-welcome-brightgreen.svg
https://img.shields.io/badge/%20%20%F0%9F%93%A6%F0%9F%9A%80-semantic--release-e10079.svg
https://img.shields.io/github/stars/ad-aures/castopod?style=social

[release]: https://code.castopod.org/adaures/castopod/-/releases
[license]: https://code.castopod.org/adaures/castopod/-/blob/beta/LICENSE.md
[contributions]: https://code.castopod.org/adaures/castopod/-/issues
[semantic-release]: https://github.com/semantic-release/semantic-release
[discord]: https://castopod.org/discord
[stars]: https://github.com/ad-aures/castopod/stargazers
[crowdin]: https://translate.castopod.org/project/castopod
