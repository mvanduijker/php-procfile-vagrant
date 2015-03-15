# php-procfile-vagrant

Example PHP dev environment with procfile (heroku) and vagrant development box

If you want to host the app php app on heroku and you need ruby (compass / sass) or nodejs (grunt, gulp) use the https://github.com/heroku/heroku-buildpack-multi and run
```
heroku config:add BUILDPACK_URL=https://github.com/heroku/heroku-buildpack-multi.git
```
There already is a .buildpacks file (you might want to update the versions)

