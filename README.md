# PURPOSE
Project for a class I attended on Databases for University. The requirement was to create a prototype website that uses databases, has a login, makes use of session variables and some more basic website stuff, such as CSS.
# SHORT DESCRIPTION
This is meant to be a website that mimics a discussion/question forum and adds the possibility of sharing your notes with the rest of the people. I will keep updating it so that it reaches a point of being able to introduce code, to be able to copy it, to display equations using LaTex (although probably MathJax via JS), download an accessible file, etc.
# MODULES
## Authentication
Encapsulates the entirety of functions such as login, sign in (register), logout and recovery of the password. They also generate the sessions.
## Controllers
These ones deal with the redirection and some checks for the website
## Views
Views represent what gets displayed on the website. They are dynamic, as they change from user to user, task to task, etc.
### Partials 
These are snippets of what gets displayed on the website that are static.
## CSS
Anything that has to deal with the UI (and some UX) when it comes to the website.
