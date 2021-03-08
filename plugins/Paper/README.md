# Paper
Portable Pluging for common Project

### Enable Plugin

```php
// config/bootstrap.php
Plugin::load('Paper');
```

### Enable theme perController
> in controller add method
```php
public function beforeRender(Event $event) {
    $this->viewBuilder()->theme('Paper');
}
```

### Enable theme Global
```php
// src/Controller/AppController.php

public function beforeRender(Event $event) {
    $this->viewBuilder()->theme('Paper');
}
```

> Since handling static assets, such as images, JavaScript and CSS files of plugins,
through the Dispatcher is incredibly inefficient, it is strongly recommended to symlink them for production.
This can be done by using the plugin shell:
```php
bin/cake plugin assets symlink
```

### Add a repository as submodule
```bash
cd plugins
git submodule add https://github.com/cyb3r14V1rtu4L/Paper.git
```
### Update as submodule

cd plugins and run

```bash
git submodule init
# and
git submodule update
```

OR using `--recurse-submodules`

```bash
  git clone --recurse-submodules https://github.com/cyb3r14V1rtu4L/Paper.git
```
OR Running master checkouts
Third-party components are handled as git submodules which have to be initialized first. So aside from the regular git checkout invoking

```git
  git submodule update --init
```

or a similar command is needed, for details see Git documentation.


### remove a submodule
```bash
rm -Rf Paper/

git rm -r Paper/
```
