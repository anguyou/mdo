--- 
layout: post
status: publish
tags: 
- Code
- Site
- Tools
meta: 
  _edit_last: "1"
type: post
published: true
title: GitHub for website deployment
---
Many moons ago, MediaTemple's databases running WordPress were compromised. Word on the street was that they were hacked months before users even heard about it. That happened to me. To deal with it, I had to dig through countless files and lines of code to remove all the bullshit and fix the problems this caused. What a broken experience all around.

Fast forward to today, and enter GitHub.

[GitHub](https://github.com/) is an amazing service. At first, I just started using it freely to [track awesome libraries of code](http://www.markdotto.com/2010/12/18/track-awesome-code-snippets-with-github/), but after awhile, I leveled up and ponied up the cash for a paid account. With private repos, my site deployment--and in this case, redeployment--is unbelievably easy and an amazing tool to have.

But why use GitHub, or even anything else like it? Because **version controlled websites last longer** (in bed). If your site or host gets hacked, like MediaTemple did, you're bound to have a shitstorm to clean up after. Instead of combing through files, just do a fresh `git pull` and you're pretty much set. There's more to dealing with hacked servers, but this setup works well for updating code, replacing code, and resolving any and all problems you might encounter in code.

Beyond that, having an external service hosting my code means it's safe and secure if my laptop crashes. It doesn't get much better than GitHub deployment.
