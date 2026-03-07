
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
