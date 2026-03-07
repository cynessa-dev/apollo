
# **Project: Apollo | DEVLOG**  

Author: Christian Mamplata  
Start Date: March 05, 2026  
End Date: ---  

***

## ✨ The Chambers of Data --- March 07, 2026 [DAY 02]

### Hello, World

I'm back! I got busy yesterday due to academic reasons, but I have returned to continue the project. Currently, I got a few days off, so I'll be able to focus on developing Project: Apollo. Below are the changes I made today, please feel free to read them to understand future developments.  

### Update

I have updated `docker-compose.yml` and the following are the changes made:

- environment for web service
- remove deprecated version tag

### Background of the Changes

I noticed the I forgot to add the environment of the apache document root to allow explicit configuration changes, therefore I added it before running `docker compose up -d`.  

Additionally, I removed the **deprecated version tag** to align with modern docker rules. This will ensure the future developers will understand and see the this project followed the current modern requirements at the time of it's development.  

### The Journey

I ran the `docker compose up -d` command to see if it is working, and it was! That was great! Now, I need to add TailwindCSS to dress up my application elegantly. Instead of using the CDN, I will be **compiling the source**! This will allow me to work offline, compile only the needed classes, and avoid bloating my web app! That's a **win-win** if you ask me.  

After that, I researched for a bit on what should I do regarding the source of my music tracks. I got a few options, first is to download music from the internet and store it locally, so that I can play it in Apollo. That is a *great idea*, but I ran into some problems.  

Downloading music tracks from the Internet is very risky, as it will:

1. Violate copyright laws
2. Look unprofessional
3. and, cause the artist some trouble

In the end, I had to go with using APIs to get my music tracks. Thankfully, It will benefit me in the long run, due to the fact that most tech companies requires the ability to use APIs. I first thought of **Spotify**, and hoped that they do have an API, and fortunately, they do! I struggled a bit with their terms in using it, so I had to research for a bit.  

*P.S.: I don't wanna go to jail XD* ~ 😝  

I did a little digging, and found out about Jamendo. It's just like Spotify, but **free!** I chose to sacrifice diversity over quality to complete this project, afterall, this isn't an actual *music player*. I studied Jamendo's documentation for a bit to get a grasp on how they do things (I also made sure I read the terms XD), and tried implementing it.  

While at it, I had to take a break, so I went out for a bit and stretched my legs. Maybe drank a water or two. After that, I started to develop the **Home Interface** of Apollo, just a little bit. In that way, I can test Jamendo later! I did, kind of, made it similar to Spotify... but, hey! We'll make it better soon! After all, the Laws of UX did state in **Jakob's Law** that *"Users spend most of their time on other sites. This means that users prefer your site to work the same way as all the other sites they already know."*. With that, I plan to make it exist first, doesn't matter if it looked similar, what matters are the foundation. We can plan, refactor, and make it better later. 😉  

Continuing, I finished the initial design and comitted it. I then moved on implementing the required PHP features:

- Interface Playable [play(), pause()]
- Abstract Class Account [Username, Plan]
- Child Class Inheritance [Free -> Ads, Premium -> Unlimited]
- Implements Playable

I did some quick work with it, making sure they were separated each classes. Ensuring that your functions and classes (maybe files, too) are independently testable is a must in **modular programming**. This keeps everything nice and tidy, and maintable. When something needs change or fixing, we know where to find it.  

**PRO-TIP:** Organize your project directory as well! Saves you from future headaches.

Once that is done, I tried creating the structure of the Jamendo API. Notice, I said *structure*. This is my first time trying to use Jamendo API, so I don't know just yet. The module, itself, should only lack the *client_id*. At least, that is what I left out for today. I can't push the client_id to the repository, it will cause **major security issues*, if that were to happen. 😵‍💫  

### To Wrap it Up

Finally, time to wrap things up for today! I did a lot of commits today, including some minor fixes and changes to the UI. In the next development log, we'll try to test Jamendo and have some music playing. Once that is achieved, the project can be considered **finished**. However, I don't like my projects to end like that! I want it to be polished and presentable until it receives enough love and care. Well then, I'll see you guys next time! 🫡  

## 🚀 The Start of a Journey --- March 05, 2026 [DAY 01]

### A Quick Note

This is the start of Project: Apollo, a project meant to test and showcase my skills in PHP and Docker. A University task given by Professor Collado as a homework, however, I would like to challenge myself to use this chance to learn new technologies and familiarize myself with development concepts. 🔥  

### The Gameplan

The required Tech are:

- PHP
- Tailwind CSS

Eventually, I plan to convert the project into a **Laravel** project to further deepen my knowledge in PHP. For now, this will be enough for a battleground to train me.  

Additional Tech that I will be learning is:

- Docker
- Railway / Render

Deployment is actually required on Hostinger, however, it is a paid service. As you can see, I am *broke*~ , so we won't be using it for the meantime. I'm sure Professor Collado will understand. 😝

Anyway... The deadline is 1 week from now, but I plan to finish it as soon as possible. I want to also train myself to practice Rapid Development. The project right now, will be pushed to github as the initial commit, and will serve as a **reference** for future developers and recruiters.
